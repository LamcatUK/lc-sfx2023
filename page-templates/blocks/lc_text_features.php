<section class="text_features py-5">
    <div class="container-xl">
        <div class="text_features__ptitle h2 d-md-none"><?=get_field('title')?></div>
        <div class="text_features__grid">
            <div class="text_features__left">
                <h2 class="text_features__ptitle d-none d-md-block"><?=get_field('title')?></h2>
                <div class="text_features__content pb-4"><?=get_field('content')?></div>
                <div class="text_features__buttons">
                    <?php
                    if (get_field('cta_1')) {
                        $link = get_field('cta_1');
                        ?>
                    <a href="<?=$link['url']?>" target="<?=$link['target']?>" class="btn btn-secondary"><?=$link['title']?></a>
                        <?
                    }
                    if (get_field('cta_2')) {
                        $link = get_field('cta_2');
                        ?>
                    <a href="<?=$link['url']?>" target="<?=$link['target']?>" class="btn btn-outline"><?=$link['title']?></a>
                        <?
                    }
                    ?>
                </div>
            </div>
            <div class="text_features__right">
                <div class="text_features__card">
                    <div class="text_features__icon"><img src="<?=wp_get_attachment_image_url(get_field('icon_1'),'full')?>" alt=""></div>
                    <h4 class="text_features__title"><?=get_field('title_1')?></h4>
                    <div class="text_features__content"><?=get_field('content_1')?></div>
                </div>
                <div class="text_features__card">
                    <div class="text_features__icon"><img src="<?=wp_get_attachment_image_url(get_field('icon_2'),'full')?>" alt=""></div>
                    <h4 class="text_features__title"><?=get_field('title_2')?></h4>
                    <div class="text_features__content"><?=get_field('content_2')?></div>
                </div>
                <div class="text_features__card">
                    <div class="text_features__icon"><img src="<?=wp_get_attachment_image_url(get_field('icon_3'),'full')?>" alt=""></div>
                    <h4 class="text_features__title"><?=get_field('title_3')?></h4>
                    <div class="text_features__content"><?=get_field('content_3')?></div>
                </div>
                <div class="text_features__card">
                    <div class="text_features__icon"><img src="<?=wp_get_attachment_image_url(get_field('icon_4'),'full')?>" alt=""></div>
                    <h4 class="text_features__title"><?=get_field('title_4')?></h4>
                    <div class="text_features__content"><?=get_field('content_4')?></div>
                </div>
            </div>
        </div>
    </div>
</section>