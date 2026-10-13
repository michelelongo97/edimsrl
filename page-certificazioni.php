<?php
/**
 * Template Name: Pagina Certificazioni
 */
get_header(); ?>

<section class="section">
    <div class="container">
        <div class="section__header">
            <h1 class="section__title">Certificazioni</h1>
            <p class="section__subtitle">Le nostre qualifiche e attestazioni ufficiali</p>
        </div>

        <!-- Qualifiche SOA fisse -->
        <div class="cert-grid" style="margin-bottom: 64px;">
            <div class="cert-card">
                <div class="cert-card__icon">🏗️</div>
                <div>
                    <h3 class="cert-card__title">OG1 — Edifici Civili e Industriali</h3>
                    <p class="cert-card__desc">Costruzione, manutenzione e ristrutturazione di edifici e manufatti civili.</p>
                </div>
            </div>
            <div class="cert-card">
                <div class="cert-card__icon">🛣️</div>
                <div>
                    <h3 class="cert-card__title">OG3 — Strade, Autostrade, Ponti</h3>
                    <p class="cert-card__desc">Opere stradali, autostradali, ponti, viadotti e opere infrastrutturali.</p>
                </div>
            </div>
            <div class="cert-card">
                <div class="cert-card__icon">🔧</div>
                <div>
                    <h3 class="cert-card__title">OG6 — Acquedotti, Gasdotti, Fognature</h3>
                    <p class="cert-card__desc">Impianti idrici, gasdotti, fognature e opere di distribuzione fluidi.</p>
                </div>
            </div>
            <div class="cert-card">
                <div class="cert-card__icon">⚡</div>
                <div>
                    <h3 class="cert-card__title">OG10 — Impianti per la Trasformazione</h3>
                    <p class="cert-card__desc">Impianti elettrici, elettromeccanici e per la produzione di energia.</p>
                </div>
            </div>
            <div class="cert-card">
                <div class="cert-card__icon">🖥️</div>
                <div>
                    <h3 class="cert-card__title">OG11 — Impianti Tecnologici Integrati</h3>
                    <p class="cert-card__desc">Fornitura, installazione, gestione e manutenzione di impianti tecnologici integrati.</p>
                </div>
            </div>
            <div class="cert-card">
                <div class="cert-card__icon">📡</div>
                <div>
                    <h3 class="cert-card__title">OS30 — Impianti Elettrici, Telefonici, Radiotelefonici e Televisivi</h3>
                    <p class="cert-card__desc">Fornitura e posa in opera di impianti elettrici civili e industriali, sistemi di comunicazione, impianti radiotelevisivi, rete dati e di sicurezza di interni.</p>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Documenti e attestati: premi (fissi) + certificazioni da CPT (ACF) -->
<?php
$certs = new WP_Query([
    'post_type'      => 'certificazioni',
    'posts_per_page' => -1,
    'orderby'        => 'menu_order',
    'order'          => 'ASC',
]);
?>
<section class="section section--light">
    <div class="container">
        <div class="section__header">
            <h2 class="section__title">Documenti e Attestati</h2>
        </div>
        <div class="cert-grid">

            <div class="cert-card">
                <div class="cert-card__icon">🏆</div>
                <div>
                    <h3 class="cert-card__title">Cassa Edile Awards 2026</h3>
                    <p class="cert-card__desc">Bollino conferito dalla Cassa Edile della Provincia di Bari</p>
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/docs/attestato-cassa-edile-awards-2026.pdf" class="cert-card__link" target="_blank" rel="noopener" download>📥 Scarica PDF</a>
                </div>
            </div>
            <div class="cert-card">
                <div class="cert-card__icon">🏆</div>
                <div>
                    <h3 class="cert-card__title">Top Player Impresa 2025</h3>
                    <p class="cert-card__desc">Cassa Edile Awards 2025, attestato della Cassa Edile della Provincia di Bari</p>
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/docs/attestato-top-player-2025.pdf" class="cert-card__link" target="_blank" rel="noopener" download>📥 Scarica PDF</a>
                </div>
            </div>

            <?php if ($certs->have_posts()) : while ($certs->have_posts()) : $certs->the_post();
                $file_pdf = get_field('file_pdf');
                $ente     = get_field('ente_rilasciante') ?: '';
            ?>
            <div class="cert-card">
                <div class="cert-card__icon">📄</div>
                <div>
                    <h3 class="cert-card__title"><?php the_title(); ?></h3>
                    <?php if ($ente) : ?>
                        <p class="cert-card__desc">Rilasciato da: <?php echo esc_html($ente); ?></p>
                    <?php endif; ?>
                    <?php if ($file_pdf) : ?>
                        <a href="<?php echo esc_url($file_pdf); ?>" class="cert-card__link" target="_blank" rel="noopener" download>
                            📥 Scarica PDF
                        </a>
                    <?php endif; ?>
                </div>
            </div>
            <?php endwhile; wp_reset_postdata(); endif; ?>

        </div>
    </div>
</section>

<?php get_footer(); ?>