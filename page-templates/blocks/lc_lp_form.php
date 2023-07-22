<section class="lp_section form_section py-5"
    id="<?=get_field('id')?>">
    <div class="overlay"></div>
    <div class="container-xl lp_section__inner">
        <div class="lp_section__bgtitle">
            <?=get_field('bg_title')?>
        </div>
        <div class="lp_section__title">
            <?=get_field('title')?>
        </div>
        <div class="row g-4">
            <div class="col-md-6">
                <div class="pe-4 mb-4 content">
                    <?=get_field('content')?>
                </div>
                <h2 class="h3">Connect:</h2>
                <div class="social_icons">
                    <?=do_shortcode('[social_icons]')?>
                </div>
            </div>
            <div class="col-md-6">
                <?=do_shortcode('[contact-form-7 id="' . get_field('form_id') . '"]')?>
            </div>
        </div>
    </div>
</section>