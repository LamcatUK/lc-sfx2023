<?php
$class = $block['className'] ?? null;
if (get_field('theme') == 'Gradient') {
    $class .= ' bg--grad';
}
?>
<section class="service_cards <?=$class?>">
    <div class="container-xl">
        <?php
        if (get_field('title')) {
            echo '<h2 class="mb-4">' . get_field('title') . '</h2>';
        }
?>
        <div class="service_cards__grid">
            <?php
    $services = get_terms(array('taxonomy' => 'services'));
foreach ($services as $s) {
    $page = get_field('page_link', $s);

    $bg = wp_get_attachment_image_url(get_hero($page), 'large');
    ?>
            <a class="service_cards__card"
                href="<?=get_the_permalink($page)?>">
                <img src="<?=$bg?>" alt=""
                    class="service_cards__background">
                <div class="service_cards__detail">
                    <img src="<?=get_stylesheet_directory_uri() . '/img/icons/icon__' . $s->slug . '--wo.svg'?>"
                        alt="">
                    <div class="service_cards__text">
                        <h3><?=$s->name?></h3>
                    </div>
                </div>
            </a>
            <?php
}
?>
        </div>
    </div>
</section>