<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package lc-sfx2023
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

?>
</div><!-- #page -->
<footer class="colophon">
    <div class="container-xl d-md-flex justify-content-between">
        <div>&copy; <?=date('Y')?> SFX
            Championships.</div>
        <div>Site by <a href="https://www.lamcat.co.uk/">Lamcat</a></div>
    </div>
</footer>
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
<script>
    function jumpTo(anchor_id) {
        var url = location.href; //Saving URL without hash.
        location.href = "#" + anchor_id; //Navigate to the target element.
        history.replaceState(null, null, url); //method modifies the current history entry.
    }

    function scrollSmoothTo(elementId) {
        var element = document.getElementById(elementId);
        element.scrollIntoView({
            block: 'start',
            behavior: 'smooth'
        });
    }
</script>
</body>

</html>