<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="container">

        <!-- Logo -->
        <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo">
            <?php if (has_custom_logo()) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <span><?php bloginfo('name'); ?></span>
            <?php endif; ?>
        </a>

        <!-- Nav -->
        <nav class="main-nav" id="main-nav">
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => '',
                'fallback_cb'    => function() {
                    echo '<ul>
                        <li><a href="' . home_url('/') . '">Home</a></li>
                        <li><a href="' . home_url('/chi-siamo') . '">Chi Siamo</a></li>
                        <li><a href="' . home_url('/i-lavori') . '">Lavori</a></li>
                        <li><a href="' . home_url('/certificazioni') . '">Certificazioni</a></li>
                        <li><a href="' . home_url('/contatti') . '" class="nav-cta">Preventivo</a></li>
                    </ul>';
                },
            ]);
            ?>
        </nav>

        <!-- Hamburger -->
        <button class="nav-toggle" id="nav-toggle" aria-label="Apri menu" aria-expanded="false">
            <span></span>
            <span></span>
            <span></span>
        </button>

    </div>
</header>

<main class="site-main">