<?php
/**
 * Template 404
 */
get_header(); ?>

<section class="section" style="min-height: 60vh; display:flex; align-items:center;">
    <div class="container" style="text-align:center;">
        <div style="font-size: 8rem; font-weight: 700; color: var(--color-primary); font-family: var(--font-main); line-height:1;">404</div>
        <h1 style="margin-bottom: 16px; color: var(--color-secondary);">Pagina non trovata</h1>
        <p style="color: var(--color-gray); font-size: 1.1rem; margin-bottom: 40px;">
            La pagina che stai cercando non esiste o è stata spostata.
        </p>
        <div style="display:flex; gap:16px; justify-content:center; flex-wrap:wrap;">
            <a href="<?php echo home_url('/'); ?>" class="btn btn--primary">Torna alla Home</a>
            <a href="<?php echo home_url('/contatti'); ?>" class="btn btn--dark">Contattaci</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>