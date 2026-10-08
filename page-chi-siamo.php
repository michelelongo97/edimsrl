<?php
/**
 * Template Name: Pagina Chi Siamo
 */
get_header(); ?>

<section class="section">
    <div class="container">
        <div class="chisiamo-grid">
            <div class="chisiamo-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/chisiamo.jpg" alt="EDIM Srl">
            </div>
            <div class="chisiamo-content">
                <h1 class="section__title">Chi Siamo</h1>
                <p>EDIM Srl è un'azienda specializzata nel settore delle costruzioni, con sede a Gravina in Puglia (BA). Fondata nel 2007, opera nei settori delle opere edili, stradali e dell'installazione di impianti.</p>
                <p>Grazie alle qualifiche SOA nelle categorie OG1, OG3, OG6, OG10, OG11 e OS30, siamo in grado di partecipare a gare d'appalto pubbliche e private, garantendo competenza e affidabilità in ogni fase del progetto.</p>
                <p>Il nostro team è composto da professionisti qualificati che operano nel rispetto delle normative vigenti in materia di sicurezza e qualità delle costruzioni.</p>
            </div>
        </div>
    </div>
</section>

<!-- Impianti Tecnologici Integrati (OG11 / OS30) -->
<section class="section section--light">
    <div class="container">
        <div class="section__header">
            <h2 class="section__title">Impianti Tecnologici Integrati</h2>
            <p class="section__subtitle">Le nostre qualifiche più recenti: OG11 e OS30</p>
        </div>
        <div class="cert-grid" style="margin-bottom: 40px;">
            <div class="cert-card">
                <div class="cert-card__icon">🖥️</div>
                <div>
                    <h3 class="cert-card__title">OG11 | Impianti Tecnologici Integrati</h3>
                    <p class="cert-card__desc">Fornitura, installazione, gestione e manutenzione di impianti tecnologici integrati.</p>
                </div>
            </div>
            <div class="cert-card">
                <div class="cert-card__icon">📡</div>
                <div>
                    <h3 class="cert-card__title">OS30 | Impianti Elettrici, Telefonici, Radiotelefonici e Televisivi</h3>
                    <p class="cert-card__desc">Fornitura e posa in opera di impianti elettrici civili e industriali, sistemi di comunicazione, impianti radiotelevisivi, rete dati e di sicurezza di interni.</p>
                </div>
            </div>
        </div>
        <div class="chisiamo-cantiere-grid">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/chisiamo-cantiere-1.jpg" alt="Cantiere EDIM Srl">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/chisiamo-cantiere-2.jpg" alt="Cantiere EDIM Srl">
        </div>
    </div>
</section>

<!-- Stats -->
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
                <div class="stat-item__number">6</div>
                <div class="stat-item__label">Categorie SOA</div>
            </div>
            <div class="stat-item">
                <div class="stat-item__number">100%</div>
                <div class="stat-item__label">Lavori Certificati</div>
            </div>
        </div>
    </div>
</div>

<!-- Valori aziendali -->
<section class="section section--light">
    <div class="container">
        <div class="section__header">
            <h2 class="section__title">I Nostri Valori</h2>
        </div>
        <div class="servizi-grid">
            <div class="servizio-card">
                <div class="servizio-card__icon">🎯</div>
                <h3 class="servizio-card__title">Qualità</h3>
                <p class="servizio-card__text">Utilizziamo materiali certificati e rispettiamo le normative vigenti in ogni cantiere.</p>
            </div>
            <div class="servizio-card">
                <div class="servizio-card__icon">🤝</div>
                <h3 class="servizio-card__title">Affidabilità</h3>
                <p class="servizio-card__text">Rispettiamo i tempi e i budget concordati, mantenendo sempre un dialogo trasparente con il cliente.</p>
            </div>
            <div class="servizio-card">
                <div class="servizio-card__icon">🦺</div>
                <h3 class="servizio-card__title">Sicurezza</h3>
                <p class="servizio-card__text">La sicurezza dei lavoratori e degli ambienti di cantiere è la nostra priorità assoluta.</p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
