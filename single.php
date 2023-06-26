<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;
get_header();
$img = get_the_post_thumbnail_url(get_the_ID(), 'full');
?>
<main id="main" class="blog">
    <?php
    $content = get_the_content();
$blocks = parse_blocks($content);
$sidebar = array();
$after;
?>
    <section class="breadcrumbs container-xl">
        <?php
if (function_exists('yoast_breadcrumb')) {
    yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
}
?>
    </section>
    <div class="container-xl">
        <div class="row g-4 pb-4">
            <div class="col-lg-9 order-2">
                <img src="<?=$img?>" alt="" class="blog__image">
                <h1 class="blog__title"><?=get_the_title()?></h1>
                <?php
        $count = estimate_reading_time_in_minutes(get_the_content(), 200, true, true);
echo $count;

foreach ($blocks as $block) {
    if ($block['blockName'] == 'core/heading') {
        if (!array_key_exists('level', $block['attrs'])) {
            $heading = strip_tags($block['innerHTML']);
            $id = acf_slugify($heading);
            echo '<a id="' . $id . '" class="anchor"></a>';
            $sidebar[$heading] = $id;
        }
    }
    echo render_block($block);
}
?>
            </div>
            <div class="col-lg-3 order-1">
                <?php
    if ($sidebar) {
        ?>
                <div class="sidebar">
                    <div class="h5 d-none d-lg-block text-white">Quick Links</div>
                    <div class="h5 d-lg-none" data-bs-toggle="collapse" href="#links" role="button">Quick Links</div>
                    <div class="collapse d-lg-block" id="links">
                        <?php
            foreach ($sidebar as $heading => $id) {
                ?>
                        <li><a
                                href="#<?=$id?>"><?=$heading?></a>
                        </li>
                        <?php
            }
        ?>
                    </div>
                </div>
                <?php
    }
?>
            </div>
        </div>
    </div>
    <?php
            $cats = get_the_category();
$ids = wp_list_pluck($cats, 'term_id');
$r = new WP_Query(array(
    'category__in' => $ids,
    'posts_per_page' => 4,
    'post__not_in' => array(get_the_ID())
));
if ($r->have_posts()) {
    ?>
    <section class="latest_insights py-5">
        <div class="container-xl">
            <h2><span>Related</span> Insights</h2>
            <div class="latest_insights__grid">
                <?php
while ($r->have_posts()) {
    $r->the_post();
    ?>
                <div class="latest_insights__card">
                    <img src="<?=get_the_post_thumbnail_url(get_the_ID(), 'large')?>"
                        alt="">
                    <h3><?=get_the_title()?></h3>
                    <a class="btn btn-outline-secondary"
                        href="<?=get_the_permalink()?>">Read
                        more</a>
                </div>
                <?php
}
    ?>
            </div>
        </div>
    </section>
    <?php
}
?>
</main>
<?php
get_footer();
?>