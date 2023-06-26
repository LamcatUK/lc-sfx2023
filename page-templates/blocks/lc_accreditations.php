<section class="accreditations pt-4 pb-5">
    <div class="container-xl">
        <div class="accreditations__slider">
            <div class="accreditations__badge"><img
                    src="<?=get_stylesheet_directory_uri()?>/img/tds-logo.png">
            </div>
            <div class="accreditations__badge"><img
                    src="<?=get_stylesheet_directory_uri()?>/img/property-ombudsman-logo.png">
            </div>
            <div class="accreditations__badge"><img
                    src="<?=get_stylesheet_directory_uri()?>/img/tsi-logo.png">
            </div>
            <div class="accreditations__badge"><img
                    src="<?=get_stylesheet_directory_uri()?>/img/prs-logo.png">
            </div>
            <div class="accreditations__badge"><a href="http://www.propertymark.co.uk/professional-standards/rules.html"
                    rel="nofollow" target="_blank"><img
                        src="<?=get_stylesheet_directory_uri()?>/img/naea-logo.png"></a>
            </div>
        </div>
    </div>
</section>
<?php
add_action('wp_footer', function () {
    ?>
<script type="text/javascript">
    (function($) {
        $('.accreditations__slider').slick({
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: false,
            dots: false,
            responsive: [{
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        autoplay: true
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        autoplay: true
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        autoplay: true
                    }
                }
            ]
        });
    })(jQuery);
</script>
<?php
}, 9999);
                    ?>