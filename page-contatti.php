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
                <?php echo do_shortcode('[contact-form-7 id="INSERISCI_ID" title="Preventivo EDIM"]'); ?>
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