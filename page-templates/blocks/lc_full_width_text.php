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
if (get_field('breakout')[0] ?? null && get_field('breakout')[0] == 'Yes') {
    $breakout = $background;
    $background = '';
}

?>
<section class="full_width_text <?=$breakout?>">
    <div class="container-xl <?=$background?> py-5">
        <h2 class="d-none d-lg-block">
            <?=get_field('title')?>
        </h2>
        <?=get_field('content')?>
        <div class="full_width_text__buttons">
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
</section>