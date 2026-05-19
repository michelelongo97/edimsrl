<?php get_header(); ?>

<!-- =============================================
   HERO
   ============================================= -->
<section class="hero">
    <div class="container">
        <div class="hero__content">
            <span class="hero__tag">Gravina in Puglia (BA)</span>
            <h1 class="hero__title">
                Costruiamo il futuro,<br>
                <span>un'opera alla volta</span>
            </h1>
            <p class="hero__text">
                EDIM Srl è specializzata in opere edili, stradali e installazione impianti.
                Qualità certificata, esperienza pluriennale e affidabilità in ogni progetto.
            </p>
            <div class="hero__actions">
                <a href="<?php echo home_url('/contatti'); ?>" class="btn btn--primary">Richiedi Preventivo</a>
                <a href="<?php echo home_url('/lavori'); ?>" class="btn btn--outline">Vedi i Nostri Lavori</a>
            </div>
        </div>
    </div>
</section>

<!-- =============================================
   STATS BAR
   ============================================= -->
<div class="stats-bar">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-item">
                <div class="stat-item__number">+200</div>
                <div class="stat-item__label">Opere Realizzate</div>
            </div>
            <div class="stat-item">
                <div class="stat-item__number">17+</div>
                <div class="stat-item__label">Anni di Esperienza</div>
            </div>
            <div class="stat-item">
                <div class="stat-item__number">4</div>
                <div class="stat-item__label">Categorie SOA</div>
            </div>
            <div class="stat-item">
                <div class="stat-item__number">100%</div>
                <div class="stat-item__label">Lavori Certificati</div>
            </div>
        </div>
    </div>
</div>

<!-- =============================================
   SERVIZI
   ============================================= -->
<section class="section">
    <div class="container">
        <div class="section__header">
            <h2 class="section__title">I Nostri Servizi</h2>
            <p class="section__subtitle">Competenze specializzate in ogni settore dell'edilizia e degli impianti</p>
        </div>
        <div class="servizi-grid">
            <div class="servizio-card">
                <div class="servizio-card__icon">🏗️</div>
                <h3 class="servizio-card__title">Opere Edili (OG1)</h3>
                <p class="servizio-card__text">Costruzione, ristrutturazione e manutenzione di edifici civili e industriali.</p>
            </div>
            <div class="servizio-card">
                <div class="servizio-card__icon">🛣️</div>
                <h3 class="servizio-card__title">Opere Stradali (OG3)</h3>
                <p class="servizio-card__text">Realizzazione e manutenzione di strade, autostrade e infrastrutture viarie.</p>
            </div>
            <div class="servizio-card">
                <div class="servizio-card__icon">⚡</div>
                <h3 class="servizio-card__title">Impianti (OG6 / OG10)</h3>
                <p class="servizio-card__text">Installazione e manutenzione di impianti idraulici, elettrici e tecnologici.</p>
            </div>
        </div>
    </div>
</section>

<!-- =============================================
   ULTIMI LAVORI
   ============================================= -->
<section class="section section--light">
    <div class="container">
        <div class="section__header">
            <h2 class="section__title">Ultimi Lavori</h2>
            <p class="section__subtitle">Una selezione dei nostri progetti più recenti</p>
        </div>

        <div class="lavori-grid">
            <?php
            $lavori = new WP_Query([
                'post_type'      => 'lavori',
                'posts_per_page' => 3,
                'orderby'        => 'date',
                'order'          => 'DESC',
            ]);

            if ($lavori->have_posts()) :
                while ($lavori->have_posts()) : $lavori->the_post();
                    $luogo = get_field('luogo') ?: '';
                    $cats  = get_the_terms(get_the_ID(), 'categoria_lavori');
                    $cat   = ($cats && !is_wp_error($cats)) ? $cats[0]->name : '';
            ?>
            <div class="lavoro-card">
                <div class="lavoro-card__image">
                    <img src="<?php echo edimsrl_get_thumbnail(get_the_ID()); ?>" alt="<?php the_title(); ?>">
                </div>
                <div class="lavoro-card__body">
                    <?php if ($cat) : ?>
                        <span class="lavoro-card__cat"><?php echo esc_html($cat); ?></span>
                    <?php endif; ?>
                    <h3 class="lavoro-card__title"><?php the_title(); ?></h3>
                    <?php if ($luogo) : ?>
                        <p class="lavoro-card__luogo">📍 <?php echo esc_html($luogo); ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else : ?>
            <p>Nessun lavoro trovato.</p>
            <?php endif; ?>
        </div>

        <div style="text-align:center; margin-top:48px;">
            <a href="<?php echo home_url('/lavori'); ?>" class="btn btn--dark">Vedi Tutti i Lavori</a>
        </div>
    </div>
</section>

<!-- =============================================
   CHI SIAMO (anteprima)
   ============================================= -->
<section class="section">
    <div class="container">
        <div class="chisiamo-grid">
            <div class="chisiamo-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/chisiamo.jpg" alt="EDIM Srl - Chi Siamo">
            </div>
            <div class="chisiamo-content">
                <h2 class="section__title">Chi Siamo</h2>
                <p>EDIM Srl opera nel settore delle costruzioni dal 2007, con sede a Gravina in Puglia. La nostra azienda è qualificata SOA nelle categorie OG1, OG3, OG6 e OG10.</p>
                <p>Ogni progetto viene seguito con la massima cura e professionalità, garantendo rispetto dei tempi, sicurezza e qualità dei materiali.</p>
                <a href="<?php echo home_url('/chi-siamo'); ?>" class="btn btn--primary" style="margin-top:8px;">Scopri di più</a>
            </div>
        </div>
    </div>
</section>

<!-- =============================================
   CTA PREVENTIVO
   ============================================= -->
<section class="section" style="background: var(--color-primary); padding: 64px 0;">
    <div class="container" style="text-align:center;">
        <h2 style="color:#fff; margin-bottom:16px;">Hai un progetto in mente?</h2>
        <p style="color:rgba(255,255,255,0.85); margin-bottom:32px; font-size:1.1rem;">Contattaci per un preventivo gratuito e senza impegno.</p>
        <a href="<?php echo home_url('/contatti'); ?>" class="btn btn--outline">Richiedi Preventivo</a>
    </div>
</section>

<?php get_footer(); ?>