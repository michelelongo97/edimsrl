<?php
/**
 * Template per il singolo Lavoro
 */
get_header();

$luogo = get_field('luogo') ?: '';
$anno  = get_field('anno') ?: '';
$cats  = get_the_terms(get_the_ID(), 'categoria_lavori');
$cat_name = ($cats && !is_wp_error($cats)) ? $cats[0]->name : '';
?>

<section class="section">
    <div class="container">

        <!-- Breadcrumb -->
        <nav style="margin-bottom: 32px; font-size: 0.9rem; color: var(--color-gray);">
            <a href="<?php echo home_url('/'); ?>">Home</a>
            <span style="margin: 0 8px;">›</span>
            <a href="<?php echo home_url('/lavori'); ?>">Lavori</a>
            <span style="margin: 0 8px;">›</span>
            <span><?php the_title(); ?></span>
        </nav>

        <div class="lavoro-single__grid">

            <!-- Immagine principale -->
            <div class="lavoro-single__image">
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('large', ['style' => 'width:100%; height:100%; object-fit:cover;']); ?>
                <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.jpg" alt="<?php the_title(); ?>">
                <?php endif; ?>
            </div>

            <!-- Info -->
            <div class="lavoro-single__info">

                <?php if ($cat_name) : ?>
                    <span class="lavoro-card__cat" style="font-size:0.8rem;"><?php echo esc_html($cat_name); ?></span>
                <?php endif; ?>

                <h1 style="margin: 12px 0 24px;"><?php the_title(); ?></h1>

                <?php if ($luogo || $anno) : ?>
                <div class="lavoro-single__meta">
                    <?php if ($luogo) : ?>
                    <div class="lavoro-single__meta-item">
                        <span class="lavoro-single__meta-icon">📍</span>
                        <div>
                            <div class="lavoro-single__meta-label">Luogo</div>
                            <div class="lavoro-single__meta-value"><?php echo esc_html($luogo); ?></div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if ($anno) : ?>
                    <div class="lavoro-single__meta-item">
                        <span class="lavoro-single__meta-icon">📅</span>
                        <div>
                            <div class="lavoro-single__meta-label">Anno</div>
                            <div class="lavoro-single__meta-value"><?php echo esc_html($anno); ?></div>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
                <?php endif; ?>

                <?php if (get_the_excerpt()) : ?>
                <div class="lavoro-single__desc">
                    <?php the_excerpt(); ?>
                </div>
                <?php endif; ?>

                <a href="<?php echo home_url('/lavori'); ?>" class="btn btn--dark" style="margin-top: 32px;">
                    ← Torna ai Lavori
                </a>

            </div>

        </div>

<!-- Galleria -->
<?php
$content = get_the_content();
if (has_blocks($content)) {
    $blocks = parse_blocks($content);
    foreach ($blocks as $block) {
        if ($block['blockName'] === 'core/gallery') {
            echo '<div style="margin-top: 64px;">';
            echo '<div class="section__header"><h2 class="section__title">Galleria</h2></div>';
            echo '<div class="lavoro-single__gallery">';
            foreach ($block['innerBlocks'] as $img_block) {
                $id  = $img_block['attrs']['id'] ?? 0;
                $src = $id ? wp_get_attachment_image_url($id, 'large') : '';
                if ($src) echo '<div class="lavoro-single__gallery-item"><img src="' . esc_url($src) . '"></div>';
            }
            echo '</div></div>';
            break;
        }
    }
}
?>

        <!-- Lavori correlati -->
        <?php
        $args = [
            'post_type'      => 'lavori',
            'posts_per_page' => 3,
            'post__not_in'   => [get_the_ID()],
            'orderby'        => 'rand',
        ];
        if ($cats && !is_wp_error($cats)) {
            $args['tax_query'] = [[
                'taxonomy' => 'categoria_lavori',
                'field'    => 'term_id',
                'terms'    => $cats[0]->term_id,
            ]];
        }
        $correlati = new WP_Query($args);

        if ($correlati->have_posts()) : ?>
        <div style="margin-top: 80px;">
            <div class="section__header">
                <h2 class="section__title">Altri Lavori</h2>
            </div>
            <div class="lavori-grid">
                <?php while ($correlati->have_posts()) : $correlati->the_post();
                    $l_luogo = get_field('luogo') ?: '';
                    $l_cats  = get_the_terms(get_the_ID(), 'categoria_lavori');
                    $l_cat   = ($l_cats && !is_wp_error($l_cats)) ? $l_cats[0]->name : '';
                ?>
                <a href="<?php the_permalink(); ?>" class="lavoro-card">
                    <div class="lavoro-card__image">
                        <img src="<?php echo edimsrl_get_thumbnail(get_the_ID()); ?>" alt="<?php the_title(); ?>">
                    </div>
                    <div class="lavoro-card__body">
                        <?php if ($l_cat) : ?>
                            <span class="lavoro-card__cat"><?php echo esc_html($l_cat); ?></span>
                        <?php endif; ?>
                        <h3 class="lavoro-card__title"><?php the_title(); ?></h3>
                        <?php if ($l_luogo) : ?>
                            <p class="lavoro-card__luogo">📍 <?php echo esc_html($l_luogo); ?></p>
                        <?php endif; ?>
                    </div>
                </a>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
        </div>
        <?php endif; ?>

    </div>
</section>

<?php get_footer(); ?>