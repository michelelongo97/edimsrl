<?php
/**
 * Template Name: Pagina Lavori
 */
get_header(); ?>

<section class="section section--light" style="padding-top: 64px;">
    <div class="container">
        <div class="section__header">
            <h1 class="section__title">I Nostri Lavori</h1>
            <p class="section__subtitle">Portfolio dei progetti realizzati in ambito edile, stradale e impiantistico</p>
        </div>

        <!-- Filtro categorie -->
        <?php
        $categorie = get_terms(['taxonomy' => 'categoria_lavori', 'hide_empty' => true]);
        if ($categorie && !is_wp_error($categorie)) : ?>
        <div style="display:flex; gap:12px; flex-wrap:wrap; justify-content:center; margin-bottom:48px;">
            <button class="btn btn--dark filtro-btn active" data-cat="tutti">Tutti</button>
            <?php foreach ($categorie as $cat) : ?>
            <button class="btn btn--outline filtro-btn" data-cat="<?php echo esc_attr($cat->slug); ?>"
                style="color:var(--color-secondary); border-color:var(--color-secondary);">
                <?php echo esc_html($cat->name); ?>
            </button>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <!-- Grid lavori -->
        <div class="lavori-grid" id="lavori-grid">
            <?php
            $lavori = new WP_Query([
                'post_type'      => 'lavori',
                'posts_per_page' => -1,
                'orderby'        => 'date',
                'order'          => 'DESC',
            ]);

            if ($lavori->have_posts()) :
                while ($lavori->have_posts()) : $lavori->the_post();
                    $luogo = get_field('luogo') ?: '';
                    $anno  = get_field('anno') ?: '';
                    $cats  = get_the_terms(get_the_ID(), 'categoria_lavori');
                    $cat_slug = ($cats && !is_wp_error($cats)) ? $cats[0]->slug : '';
                    $cat_name = ($cats && !is_wp_error($cats)) ? $cats[0]->name : '';
            ?>
            <a href="<?php the_permalink(); ?>" class="lavoro-card" data-cat="<?php echo esc_attr($cat_slug); ?>">
                <div class="lavoro-card__image">
                    <img src="<?php echo edimsrl_get_thumbnail(get_the_ID()); ?>" alt="<?php the_title(); ?>">
                </div>
                <div class="lavoro-card__body">
                    <?php if ($cat_name) : ?>
                        <span class="lavoro-card__cat"><?php echo esc_html($cat_name); ?></span>
                    <?php endif; ?>
                    <h3 class="lavoro-card__title"><?php the_title(); ?></h3>
                    <?php if ($luogo) : ?>
                        <p class="lavoro-card__luogo">📍 <?php echo esc_html($luogo); ?></p>
                    <?php endif; ?>
                    <?php if ($anno) : ?>
                        <p class="lavoro-card__luogo" style="margin-top:4px;">📅 <?php echo esc_html($anno); ?></p>
                    <?php endif; ?>
                </div>
            </a>
            <?php
                endwhile;
                wp_reset_postdata();
            else : ?>
            <p>Nessun lavoro trovato.</p>
            <?php endif; ?>
        </div>
    </div>
</section>

<script>
document.querySelectorAll('.filtro-btn').forEach(btn => {
    btn.addEventListener('click', () => {
        document.querySelectorAll('.filtro-btn').forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        const cat = btn.dataset.cat;
        document.querySelectorAll('.lavoro-card').forEach(card => {
            card.style.display = (cat === 'tutti' || card.dataset.cat === cat) ? 'block' : 'none';
        });
    });
});
</script>

<?php get_footer(); ?>