<?php
/**
 * Template generico per le pagine WordPress
 */
get_header(); ?>

<section class="section">
    <div class="container">
        <div class="page-content">
            <h1 class="section__title" style="text-align:left; margin-bottom: 32px;"><?php the_title(); ?></h1>
            <div class="page-content__body">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>