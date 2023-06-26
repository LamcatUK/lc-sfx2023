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

$breakout = $background;

$padding = 'py-5';

$splitText = 'col-lg-6';
$splitImage = 'col-lg-6';

if (get_field('split') == '6040') {
    $splitText = 'col-lg-8';
    $splitImage = 'col-lg-4';
}

$orderText = 'order-2 order-lg-1';
$orderImage = 'order-1 order-lg-2';

if (get_field('order') == 'image-text') {
    $orderText = 'order-2 order-lg-2';
    $orderImage = 'order-1 order-lg-1';
}
?>
<section
    class="text_image <?=$breakout?> <?=$padding?>">
    <div class="container-xl <?=$background?>">
        <h2><?=get_field('title')?></h2>
        <div class="mb-4"><?=get_field('intro')?>
        </div>
        <div class="row align-items-center g-4">
            <div
                class="<?=$splitText?> <?=$orderText?>">
                <div class="mb-4">
                    <?=get_field('content')?>
                </div>
                <div class="text_image__buttons">
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
                class="<?=$splitImage?> <?=$orderImage?> text-center">
                <?=wp_get_attachment_image(get_field('image'), 'large', null, array('class' => 'text_image__image'))?>
            </div>
        </div>
    </div>
</section>