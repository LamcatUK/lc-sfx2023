<section class="contact_details py-4">
    <div class="container-xl">
        <div class="row">
            <div class="col-lg-6">
                <div class="h3">Find Us</div>
                <ul class="fa-ul no-indent">
                    <li class="mb-4"><span class="fa-li"><i class="far fa-envelope"></i></span>
                        <?=do_shortcode('[contact_email]')?>
                    </li>
                    <li class="mb-4"><span class="fa-li"><i class="fas fa-phone-alt"></i></span>
                        <?=do_shortcode('[contact_phone]')?>
                    </li>
                    <?php
                    if (get_field('phone_2', 'options')) {
                        ?>
                    <li class="mb-4"><span class="fa-li"><i class="fas fa-phone-alt"></i></span>
                        <?=do_shortcode('[contact_phone2]')?>
                    </li>
                    <?php
                    }
                        ?>
                    <li class="mb-4"><span class="fa-li"><i class="fas fa-map-marker-alt"></i></span>
                        <?=get_field('contact_address', 'options')?>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6">
                <iframe
                    src="<?=get_field('maps_url', 'options')?>"
                    width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</section>