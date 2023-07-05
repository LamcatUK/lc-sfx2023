<section class="lp_section py-5"
    id="<?=get_field('id')?>"
    style="background-image:url(<?=wp_get_attachment_image_url(get_field('background'), 'full')?>)">
    <div class="overlay"></div>
    <div class="container-xl lp_section__inner">
        <div class="lp_section__bgtitle">
            <?=get_field('bg_title')?>
        </div>
        <div class="lp_section__title">
            <?=get_field('title')?>
        </div>
        <div class="lp_section__list">
            <?=lc_list(get_field('list'))?>
        </div>
        <div class="lp_section__body">
            <?=get_field('body')?>
        </div>
        <div class="lp_section__subtitle">
            <?=get_field('subtitle')?>
        </div>
        <?php
        if (get_field('buttons')) {
            ?>
        <div class="lp_section__buttons">
            <?php
            while (have_rows('buttons')) {
                the_row();
                ?>
            <div class="button"
                onclick="scrollSmoothTo('<?=get_sub_field('target_id')?>')">
                <?=get_sub_field('button_label')?>
            </div>
            <?php
            }
            ?>
        </div>
        <?php
        }
    ?>
    </div>
    <?php
if (get_field('next_id')) {
    ?>
    <div class="nav__link text-center">
        <span
            onclick="scrollSmoothTo('<?=get_field('next_id')?>')"><i
                class="fa-solid fa-angle-down fa-2x text-highlight"></i></span>
    </div>
    <?php
}
    ?>
</section>