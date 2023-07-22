<section class="hero"
    style="background-image:url(<?=get_the_post_thumbnail_url(get_the_ID(), 'full')?>)">
    <div class="hero__logo_container">
        <img src="<?=get_stylesheet_directory_uri()?>/img/sfx-logo.svg"
            alt="" class="hero__logo">
    </div>
    <div class="hero__container">
        <div class="hero__title text-center">Changing The Fight Game For Good</div>
        <div class="nav__link text-center">
            <span onclick="jumpTo('mainContent')"><i class="fa-solid fa-angle-down fa-2x text-highlight"></i></span>
        </div>
    </div>
</section>