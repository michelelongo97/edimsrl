</main><!-- /site-main -->

<footer class="site-footer">
    <div class="container">

        <div class="footer-grid">

            <!-- Col 1: Brand -->
            <div class="footer-col">
                <div class="footer-logo">
                    <?php if (has_custom_logo()) : ?>
                        <?php the_custom_logo(); ?>
                    <?php else : ?>
                        <span style="color:#fff;font-family:var(--font-main);font-weight:700;font-size:1.4rem;"><?php bloginfo('name'); ?></span>
                    <?php endif; ?>
                </div>
                <p class="footer-desc">
                    Opere edili, stradali e installazione impianti.<br>
                    Qualità e affidabilità dal 2007.
                </p>
                <div class="footer-social">
                    <a href="#" aria-label="Facebook">f</a>
                    <a href="#" aria-label="LinkedIn">in</a>
                    <a href="#" aria-label="Instagram">ig</a>
                </div>
            </div>

            <!-- Col 2: Link rapidi -->
            <div class="footer-col">
                <h4>Link Rapidi</h4>
                <ul>
                    <li><a href="<?php echo home_url('/'); ?>">Home</a></li>
                    <li><a href="<?php echo home_url('/chi-siamo'); ?>">Chi Siamo</a></li>
                    <li><a href="<?php echo home_url('/i-lavori'); ?>">I Nostri Lavori</a></li>
                    <li><a href="<?php echo home_url('/certificazioni'); ?>">Certificazioni</a></li>
                    <li><a href="<?php echo home_url('/contatti'); ?>">Richiedi Preventivo</a></li>
                </ul>
            </div>

            <!-- Col 3: Contatti -->
            <div class="footer-col">
                <h4>Contatti</h4>
                <ul>
                    <li>📍 Via Palermo n. 87, Gravina in P. (BA)</li>
                    <li style="margin-top:10px;">📞 <a href="tel:0803256799">080 3256799</a></li>
                    <li style="margin-top:10px;">✉️ <a href="mailto:info@edimsrl.it">info@edimsrl.it</a></li>
                </ul>
            </div>

        </div>

        <div class="footer-bottom">
            <span>&copy; <?php echo date('Y'); ?> EDIM Srl — P.IVA 06562950722</span>
            <span>
                <a href="<?php echo home_url('/privacy-policy'); ?>">Privacy Policy</a> &nbsp;|&nbsp;
                <a href="<?php echo home_url('/cookie-policy'); ?>">Cookie Policy</a>
            </span>
            
        </div>

    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>