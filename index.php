<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;

$page_for_posts = get_option('page_for_posts');

get_header();
?>
<main id="main">
    <!-- hero -->
    <section class="index_hero">
        <div class="container-xl">
            <h1><?=get_field('title', $page_for_posts)?>
            </h1>
            <div>
                <?=get_field('intro', $page_for_posts)?>
            </div>
        </div>
    </section>

    <section class="latest_insights py-5">
        <div class="container-xl">
            <div class="latest_insights__grid">
                <?php
while (have_posts()) {
    the_post();
    if ($wp_query->current_post == 0 && !is_paged()) {
        ?>
                <a class="latest_insights__card--first"
                    href="<?=get_the_permalink()?>"
                    style="background-image:url(<?=get_the_post_thumbnail_url(get_the_ID(), 'large')?>">
                    <div class="overlay"></div>
                    <h2><?=get_the_title()?></h2>
                    <p><?=wp_trim_words(get_the_content(), 20)?></p>
                </a>
                <?php
    } else {
        ?>
                <div class="latest_insights__card <?=$card?>">
                    <img src="<?=get_the_post_thumbnail_url(get_the_ID(), 'large')?>"
                        alt="">
                    <h2><?=get_the_title()?></h2>
                    <p><?=wp_trim_words(get_the_content(), 20)?></p>
                    <a class="btn btn-outline-secondary"
                        href="<?=get_the_permalink()?>">Read
                        more</a>
                </div>
                <?php
    }
}
?>
            </div>
        </div>
    </section>

</main>
<?php

get_footer();
?>