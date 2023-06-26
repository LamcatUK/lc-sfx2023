<?php
$colour = get_field('theme');
$background = '';
switch ($colour) {
    case 'Dark':
        $background = 'bg--grey';
        break;
    case 'Light':
        $background = '';
        break;
}

$breakout = '';
if (get_field('breakout')[0] ?? null && get_field('breakout')[0] == 'Yes') {
    $breakout = $background;
    $background = '';
}

$splitText = 'col-lg-8';
$splitImage = 'col-lg-4';

$orderText = 'order-1 order-lg-1';
$orderImage = 'order-2 order-lg-2';

if (get_field('order') == 'image-text') {
    $orderText = 'order-1 order-lg-2';
    $orderImage = 'order-2 order-lg-1';
}
?>
<section class="text_cta <?=$breakout?>">
    <div class="container-xl <?=$background?> py-5">
        <div class="d-lg-none">
            <h2><?=get_field('title')?></h2>
        </div>
        <div class="row g-4">
            <div
                class="<?=$splitText?> <?=$orderText?>">
                <h2 class="d-none d-lg-block">
                    <?=get_field('title')?>
                </h2>
                <div class="mb-4">
                    <?=get_field('content')?>
                </div>
                <div class="text_cta__buttons">
                    <?php
                if (get_field('cta')) {
                    $link = get_field('cta');
                    ?>
                    <a href="<?=$link['url']?>"
                        class="btn btn-secondary"><?=$link['title']?></a>
                    <?php
                }
                if (get_field('cta_2')) {
                    $link = get_field('cta_2');
                    ?>
                    <a href="<?=$link['url']?>"
                        class="btn btn-outline"><?=$link['title']?></a>
                    <?php
                }
?>
                </div>
            </div>
            <div
                class="<?=$splitImage?> <?=$orderImage?> text-center pt-lg-4">
                <div class="text_cta__cta">
                    <h2 class="h4">Contact Us</h2>
                    <?=get_field('intro') ?: 'Whatever your needs, we welcome any questions or enquiries either by phone or email.'?>
                    <div class="text_cta__phone">
                        <?=do_shortcode('[contact_phone]')?>
                    </div>
                    <div class="pb-2">Or</div>
                    <div class="">
                        <a href="/contact-us/" class="btn btn-highlight">Ask a Question</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>