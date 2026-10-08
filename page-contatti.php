<?php
/**
 * Template Name: Pagina Contatti
 */
get_header(); ?>

<section class="section">
    <div class="container">
        <div class="section__header">
            <h1 class="section__title">Contatti & Preventivo</h1>
            <p class="section__subtitle">Compila il modulo per richiedere un preventivo gratuito</p>
        </div>

        <div class="contatti-grid">

            <!-- Info contatto -->
            <div class="contatti-info">
                <h3>Dove siamo</h3>

                <div class="contatti-info-item">
                    <div class="contatti-info-item__icon">📍</div>
                    <div>
                        <div class="contatti-info-item__label">Sede Legale</div>
                        <div class="contatti-info-item__value">Via Discesa Casale, 25<br>70024 Gravina in Puglia (BA)</div>
                    </div>
                </div>

                <div class="contatti-info-item">
                    <div class="contatti-info-item__icon">🏢</div>
                    <div>
                        <div class="contatti-info-item__label">Uffici</div>
                        <div class="contatti-info-item__value">Via Palermo n. 87<br>70024 Gravina in Puglia (BA)</div>
                    </div>
                </div>

                <div class="contatti-info-item">
                    <div class="contatti-info-item__icon">📞</div>
                    <div>
                        <div class="contatti-info-item__label">Telefono</div>
                        <div class="contatti-info-item__value"><a href="tel:0803256799">080 3256799</a></div>
                    </div>
                </div>

                <div class="contatti-info-item">
                    <div class="contatti-info-item__icon">✉️</div>
                    <div>
                        <div class="contatti-info-item__label">Email</div>
                        <div class="contatti-info-item__value"><a href="mailto:info@edimsrl.it">info@edimsrl.it</a></div>
                    </div>
                </div>
            </div>

            <!-- Form CF7 -->
            <div class="contatti-form">
                <?php if (shortcode_exists('contact-form-7')) : ?>
                    <?php echo do_shortcode('[contact-form-7 id="3d45ca5" title="Modulo di contatto 1"]'); ?>
                <?php else : ?>
                    <p style="color: var(--color-gray);">Modulo di contatto in configurazione.</p>
                <?php endif; ?>
            </div>

        </div>

        <!-- Referenti -->
        <div class="section__header" style="margin-top: 64px;">
            <h2 class="section__title">I Nostri Referenti</h2>
        </div>
        <div class="cert-grid" style="margin-bottom: 64px;">
            <div class="cert-card">
                <div class="cert-card__icon">👤</div>
                <div>
                    <h3 class="cert-card__title">Rag. Gennaro Stefanelli</h3>
                    <p class="cert-card__desc">Amministratore Unico</p>
                    <p class="cert-card__desc"><a href="tel:+393665089564">+39 366 5089564</a><br><a href="mailto:gennarostefanelli@edimsrl.it">gennarostefanelli@edimsrl.it</a></p>
                </div>
            </div>
            <div class="cert-card">
                <div class="cert-card__icon">👤</div>
                <div>
                    <h3 class="cert-card__title">Geom. Vito Denora</h3>
                    <p class="cert-card__desc">Direttore Tecnico</p>
                    <p class="cert-card__desc"><a href="tel:+393880576661">+39 388 0576661</a><br><a href="mailto:vitodenora@edimsrl.it">vitodenora@edimsrl.it</a></p>
                </div>
            </div>
            <div class="cert-card">
                <div class="cert-card__icon">👤</div>
                <div>
                    <h3 class="cert-card__title">Michele Di Padova</h3>
                    <p class="cert-card__desc">Direttore Tecnico</p>
                    <p class="cert-card__desc"><a href="tel:+393880577083">+39 388 0577083</a><br><a href="mailto:micheledipadova@edimsrl.it">micheledipadova@edimsrl.it</a></p>
                </div>
            </div>
            <div class="cert-card">
                <div class="cert-card__icon">👤</div>
                <div>
                    <h3 class="cert-card__title">Arch. Antonio Di Padova</h3>
                    <p class="cert-card__desc">Responsabile Tecnico</p>
                    <p class="cert-card__desc"><a href="tel:+393461868264">+39 346 1868264</a><br><a href="mailto:antonio.dipadova@outlook.com">antonio.dipadova@outlook.com</a></p>
                </div>
            </div>
        </div>

        <!-- Mappa Google -->
        <div class="map-wrapper">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3019.5316438709774!2d16.425929511922952!3d40.816284731104815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13387bf7863de7e7%3A0xc1d4a922d12f9106!2sEdim%20Srl!5e0!3m2!1sit!2sus!4v1779187759627!5m2!1sit!2sus"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                title="Sede EDIM Srl">
            </iframe>
        </div>

    </div>
</section>

<?php get_footer(); ?>