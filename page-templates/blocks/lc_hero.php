<header class="hero carousel slide carousel-fade" data-bs-ride="carousel" id="heroCarousel">
    <?php
    $slideCount = count(get_field('slides'));
    if ($slideCount > 1) {
        $active = 'active';
        ?>
    <div class="carousel-indicators">
        <?php
        for ($i = 0; $i < $slideCount; $i++) {
            ?>
        <button type="button" data-bs-target="#heroCarousel"
            data-bs-slide-to="<?=$i?>"
            class="<?=$active?>"></button>
        <?php
            $active = '';
        }
        ?>
    </div>
    <?php
    }
    ?>
    <div class="carousel-inner">
        <?php
        $isFront = '';
    if (is_front_page()) {
        $isFront = 'is-front';
    }
    $active = 'active';
    $h = 'h1';
    while (have_rows('slides')) {
        the_row();
        ?>
        <div class="carousel-item <?=$active?>"
            style="background-image:url(<?=wp_get_attachment_image_url(get_sub_field('background'), 'full')?>)">
            <div class="hero__container">
                <div class="container <?=$isFront?>">
                    <?php
                    if (is_front_page()) {
                        ?>
                    <img src="<?=get_stylesheet_directory_uri()?>/img/greensward-logo--wo.svg"
                        alt="" class="hero__logo">
                    <?php
                    }
        ?>
                    <<?=$h?> class="hero__title
                        <?=$isFront?>">
                        <?=get_sub_field('title')?>
                    </<?=$h?>>
                    <?php
        if (get_sub_field('cta')) {
            $cta = get_sub_field('cta');
            ?>
                    <a href="<?=$cta['url']?>"
                        class="button button--arrow"><?=$cta['title']?></a>
                    <?php
        }
        ?>
                </div>
            </div>
        </div>
        <?php
        $active = '';
        $h = 'h2';
    }
    ?>
    </div>
</header>