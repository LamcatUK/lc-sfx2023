<section class="latest_insights py-5">
    <div class="container-xl">
        <div class="latest_insights__title">
            <h2>Property News & Insights</h2>
            <a href="/insights/">View all</a>
        </div>
        <div class="latest_insights__grid">
            <?php
        $q = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => 4
        ));
            while ($q->have_posts()) {
                $q->the_post();
                ?>
            <div class="latest_insights__card">
                <img src="<?=get_the_post_thumbnail_url(get_the_id(), 'large')?>"
                    alt="">
                <h3><?=get_the_title()?></h3>
                <p><?=wp_trim_words(get_the_content(), 20)?></p>
                <a href="<?=get_the_permalink()?>"
                    class="btn btn-outline-secondary">Read more</a>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>