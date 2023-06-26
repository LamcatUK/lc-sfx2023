<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package lc-greensward2023
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

?>
<div id="footer-top"></div>
<footer class="footer pt-5">
    <div class="container-xl" id="footer-content">
        <div class="row pb-4">
            <div class="col-md-6 col-lg-4 mb-3">
                <img src="<?=get_stylesheet_directory_uri()?>/img/greensward-logo--wo.svg"
                    alt="">
                <p class="fs-200" style="max-width:44ch;text-wrap:balance">Experts in sports facility management across
                    the South West since 2012</p>
            </div>
            <div class="col-md-6 col-lg-4 mb-3">
                <strong>Contact Us</strong>
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fa-solid fa-phone"></i></span>
                        <?=do_shortcode('[contact_phone]')?>
                    </li>
                    <?php
                    if (get_field('phone_2', 'options')) {
                        ?>
                    <li><span class="fa-li"><i class="fa-solid fa-phone"></i></span>
                        <?=do_shortcode('[contact_phone2]')?>
                    </li>
                    <?php
                    }
?>
                    <li><span class="fa-li"><i class="fa-solid fa-envelope"></i></span>
                        <?=do_shortcode('[contact_email]')?>
                    </li>
                    <li><span class="fa-li"><i class="fa-solid fa-map-marker-alt"></i></span>
                        <?=get_field('contact_address', 'options')?>
                    </li>
                </ul>
            </div>
            <div class="col-sm-6 col-lg-4 mb-2">
                <strong>Useful Links</strong>
                <?php wp_nav_menu(array('theme_location' => 'footer_menu1')); ?>
            </div>
        </div>
    </div>
</footer>
<div class="colophon">
    <div class="container-xl py-2">
        <div class="row">
            <div class="col-md-8 mb-2 mb-md-0">
                &copy; <?=date('Y')?> GreenSward
                Sports Consultancy Ltd. Registered in England No. 07958925
            </div>
            <div class="col-md-4 text-md-end">
                <a href="/privacy-policy/">Privacy Policy</a> | <a href="/cookie-policy/">Cookie Policy</a>
                | Site by <a href="https://www.lamcat.co.uk/" rel="nofollow noopener" target="_blank" class="lc"
                    title="Site by Lamcat">Lamcat</a>
            </div>
        </div>
    </div>
</div>
</div><!-- #page -->
<?php wp_footer();
if (get_field('gtm_property', 'options')) {
    ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe
        src="https://www.googletagmanager.com/ns.html?id=<?=get_field('gtm_property', 'options')?>"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php
}
?>
</body>

</html>