<?php
$img = wp_get_attachment_image_url(get_field('background'), 'full');
$btn = random_str(4);
?>
<section class="image_cta py-5"
    style="background-image:url(<?=$img?>)">
    <div class="overlay"></div>
    <div class="container-xl">
        <div class="image_cta__content">
            <img src="<?=get_stylesheet_directory_uri()?>/img/ppi-logo.svg"
                alt="Property Portfolio Investors">
            <h3><?=get_field('title')?></h3>
            <ul class="img_cta__list">
                <li><span class="icon icon--offer"></span> FREE cash offer within minutes</li>
                <li><span class="icon icon--calendar"></span> Receive funds in 7 days</li>
                <li><span class="icon icon--check"></span> A guaranteed sale on any property</li>
            </ul>
            <div class="row g-3 align-items-center">
                <div class="col-md-auto">
                    <input type="text" class="form-control" name="postcode"
                        id="postcode_<?=$btn?>"
                        placeholder="Enter Postcode">
                </div>
                <div class="col-md-auto">
                    <button class="btn btn-secondary w-100 w-md-auto"
                        id="btn_<?=$btn?>">Get Free Cash
                        Offer</button>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
add_action('wp_footer', function () use ($btn) {
    ?>
<script>
    document.getElementById('btn_<?=$btn?>').addEventListener('click',
        function() {
            var postCode = document.getElementById('postcode_<?=$btn?>')
                .value;
            var loca = '/get-cash-offer/?post-code=' + postCode;
            window.location.href = loca;
        });
</script>
<?php
});
?>