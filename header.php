<?php
if (!defined('ABSPATH')) {
    exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    $manifest_path = get_template_directory() . '/site.webmanifest';
    if (file_exists($manifest_path)) :
    ?>
    <link rel="manifest" href="<?php echo esc_url(get_template_directory_uri() . '/site.webmanifest'); ?>">
    <?php
    endif;
    ?>
    <link rel="shortcut icon" type="image/x-icon"
        href="<?php echo esc_url(get_template_directory_uri() . '/assets/imgs/favicon.svg'); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center">
                    <img class="jump mb-50" src="/wp-content/themes/d24ar/assets/imgs/loading.svg" alt="">
                    <h6>Now Loading</h6>
                    <div class="loader">
                        <div class="bar bar1"></div>
                        <div class="bar bar2"></div>
                        <div class="bar bar3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-wrap">
        <!--Offcanvas sidebar-->
        <aside id="sidebar-wrapper" class="custom-scrollbar offcanvas-sidebar position-right">
            <button class="off-canvas-close"><i class="ti-close"></i></button>
            <div class="sidebar-inner">
                <!--Search-->
                <div class="siderbar-widget mb-50 mt-30">
                    <form action="#" method="get" class="search-form position-relative">
                        <input type="text" class="search_field" placeholder="Search" value="" name="s">
                        <span class="search-icon"><i class="ti-search mr-5"></i></span>
                    </form>
                </div>
                <!--lastest post-->
                <div class="sidebar-widget mb-50">
                    <div class="widget-header mb-30">
                        <h5 class="widget-title">Top <span>Trending</span></h5>
                    </div>
                    <div class="post-aside-style-2">
                        <ul class="list-post">
                            <li class="mb-30 wow fadeIn animated">
                                <div class="d-flex">
                                    <div class="post-thumb d-flex mr-15 border-radius-5 img-hover-scale">
                                        <a class="color-white" href="#">
                                            <img src="/wp-content/themes/d24ar/assets/imgs/thumbnail-2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="post-content media-body">
                                        <h6 class="post-title mb-10 text-limit-2-row"><a href="">Vancouver
                                                woman finds pictures and videos of herself online</a></h6>
                                        <div
                                            class="entry-meta meta-1 font-x-small color-grey float-left text-uppercase">
                                            <span class="post-by">By <a href="">K. Marry</a></span>
                                            <span class="post-on">4m ago</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-30 wow fadeIn animated">
                                <div class="d-flex">
                                    <div class="post-thumb d-flex mr-15 border-radius-5 img-hover-scale">
                                        <a class="color-white" href="">
                                            <img src="/wp-content/themes/d24ar/assets/imgs/thumbnail-3.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="post-content media-body">
                                        <h6 class="post-title mb-10 text-limit-2-row"><a href="">4 Things
                                                Emotionally Intelligent People Don’t Do</a></h6>
                                        <div
                                            class="entry-meta meta-1 font-x-small color-grey float-left text-uppercase">
                                            <span class="post-by">By <a href="">Mr. John</a></span>
                                            <span class="post-on">3h ago</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-30 wow fadeIn animated">
                                <div class="d-flex">
                                    <div class="post-thumb d-flex mr-15 border-radius-5 img-hover-scale">
                                        <a class="color-white" href="">
                                            <img src="/wp-content/themes/d24ar/assets/imgs/thumbnail-5.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="post-content media-body">
                                        <h6 class="post-title mb-10 text-limit-2-row"><a href="">Reflections
                                                from a Token Black Friend</a></h6>
                                        <div
                                            class="entry-meta meta-1 font-x-small color-grey float-left text-uppercase">
                                            <span class="post-by">By <a href="">Kenedy</a></span>
                                            <span class="post-on">4h ago</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-30 wow fadeIn animated">
                                <div class="d-flex">
                                    <div class="post-thumb d-flex mr-15 border-radius-5 img-hover-scale">
                                        <a class="color-white" href="">
                                            <img src="/wp-content/themes/d24ar/assets/imgs/thumbnail-7.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="post-content media-body">
                                        <h6 class="post-title mb-10 text-limit-2-row"><a href="">How to
                                                Identify a Smart Person in 3 Minutes</a></h6>
                                        <div
                                            class="entry-meta meta-1 font-x-small color-grey float-left text-uppercase">
                                            <span class="post-by">By <a href="">Steven</a></span>
                                            <span class="post-on">5h ago</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="wow fadeIn animated">
                                <div class="d-flex">
                                    <div class="post-thumb d-flex mr-15 border-radius-5 img-hover-scale">
                                        <a class="color-white" href="">
                                            <img src="/wp-content/themes/d24ar/assets/imgs/thumbnail-8.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="post-content media-body">
                                        <h6 class="post-title mb-10 text-limit-2-row"><a href="">Blackface
                                                Minstrel Songs Don’t Belong in Children’s Music Class</a></h6>
                                        <div
                                            class="entry-meta meta-1 font-x-small color-grey float-left text-uppercase">
                                            <span class="post-by">By <a href="">J.Smith</a></span>
                                            <span class="post-on">5h30 ago</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--Categories-->
                <div class="sidebar-widget widget_tag_cloud mb-50">
                    <div class="widget-header tags-close mb-20">
                        <h5 class="widget-title mt-5">Tags Cloud</h5>
                    </div>
                    <div class="tagcloud">
                        <a href="">Beauty</a>
                        <a href="">Book</a>
                        <a href="">Design</a>
                        <a href="">Fashion</a>
                        <a href="">Lifestyle</a>
                        <a href="">Travel</a>
                        <a href="">Science</a>
                        <a href="">Health</a>
                        <a href="">Sports</a>
                        <a href="">Arts</a>
                        <a href="">Books</a>
                        <a href="">Style</a>
                    </div>
                </div>
                <!--Ads-->
                <div class="sidebar-widget widget-ads mb-30">
                    <div class="widget-header tags-close mb-20">
                        <h5 class="widget-title mt-5">Your Ads Here</h5>
                    </div>
                    <a href="" class="play-video" data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s">
                        <img class="border-radius-10" src="/wp-content/themes/d24arassets/imgs/ads-1.jpg" alt="">
                    </a>
                </div>
            </div>
        </aside>
        <!-- Main Header -->
        <header class="main-header header-style-2 mb-40">
            <div class="header-bottom header-sticky background-white text-center">
                <div class="scroll-progress gradient-bg-1"></div>
                <div class="mobile_menu d-lg-none d-block"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-md-3">
                            <div class="header-logo d-none d-lg-block">
                                <a href="">
                                    <img class="logo-img d-inline" src="/wp-content/themes/d24ar/assets/imgs/logo.svg"
                                        alt="">
                                </a>
                            </div>
                            <div class="logo-tablet d-md-inline d-lg-none d-none">
                                <a href="">
                                    <img class="logo-img d-inline" src="/wp-content/themes/d24ar/assets/imgs/logo.svg"
                                        alt="">
                                </a>
                            </div>
                            <div class="logo-mobile d-block d-md-none">
                                <a href="">
                                    <img class="logo-img d-inline"
                                        src="/wp-content/themes/d24ar/assets/imgs/favicon.svg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-10 col-md-9 main-header-navigation">
                            <!-- Main-menu -->
                            <div class="main-nav text-left float-lg-left float-md-right">
                                <ul class="mobi-menu d-none menu-3-columns" id="navigation">
                                    <li class="cat-item cat-item-2"><a href="">Global Economy</a></li>
                                    <li class="cat-item cat-item-3"><a href="">Environment</a></li>
                                    <li class="cat-item cat-item-4"><a href="">Religion</a></li>
                                    <li class="cat-item cat-item-5"><a href="">Fashion</a></li>
                                    <li class="cat-item cat-item-6"><a href="">Terrorism</a></li>
                                    <li class="cat-item cat-item-7"><a href="">Conflicts</a></li>
                                    <li class="cat-item cat-item-2"><a href="">Scandals</a></li>
                                    <li class="cat-item cat-item-2"><a href="">Executive</a></li>
                                    <li class="cat-item cat-item-2"><a href="">Foreign policy</a></li>
                                    <li class="cat-item cat-item-2"><a href="">Healthy Living</a></li>
                                    <li class="cat-item cat-item-3"><a href="">Medical Research</a></li>
                                    <li class="cat-item cat-item-4"><a href="">Children’s Health</a></li>
                                    <li class="cat-item cat-item-5"><a href="">Around the World</a></li>
                                    <li class="cat-item cat-item-6"><a href="">Ad Choices</a></li>
                                    <li class="cat-item cat-item-7"><a href="">Mental Health</a></li>
                                    <li class="cat-item cat-item-2"><a href="">Media Relations</a></li>
                                </ul>
                                <nav>
                                    <ul class="main-menu d-none d-lg-inline">
                                        <li class="menu-item-has-children">
                                            <a href=""><span class="mr-15">
                                                    <icon-icon name="home-outline"></icon-icon>
                                                </span>Home</a>
                                            <ul class="sub-menu text-muted font-small">
                                                <li><a href="">Home default</a></li>
                                                <li><a href="">Homepage 2</a></li>
                                                <li><a href="">Homepage 3</a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-menu-item">
                                            <a href="#">
                                                <span class="mr-15">
                                                    <icon-icon name="desktop-outline"></icon-icon>
                                                </span>Layouts
                                            </a>
                                            <div class="sub-mega-menu sub-menu-list row text-muted font-small">
                                                <ul class="col-md-2">
                                                    <li><strong>Archive layout</strong></li>
                                                    <li><a href="">Category list</a></li>
                                                    <li><a href="">Category grid</a></li>
                                                    <li><a href="">Category big</a></li>
                                                    <li><a href="">Category metro</a></li>
                                                </ul>
                                                <ul class="col-md-2">
                                                    <li><strong>Post format</strong></li>
                                                    <li><a href="">Post standard</a></li>
                                                    <li><a href="">Post video</a></li>
                                                    <li><a href="">Post gallery</a></li>
                                                    <li><a href="">Post audio</a></li>
                                                    <li><a href="">Post image</a></li>
                                                    <li><a href="">Post full width</a></li>
                                                </ul>
                                                <ul class="col-md-2">
                                                    <li><strong>Pages</strong></li>
                                                    <li><a href="">Typography</a></li>
                                                    <li><a href="">About us</a></li>
                                                    <li><a href="">Contact us</a></li>
                                                    <li><a href="">Search</a></li>
                                                    <li><a href="">Author</a></li>
                                                    <li><a href="">404 page</a></li>
                                                </ul>
                                                <div class="col-md-6 text-right">
                                                    <a href="#"><img class="border-radius-10"
                                                            src="/wp-content/themes/d24ar/assets/imgs/ads-2.jpg"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mega-menu-item">
                                            <a href=""><span class="mr-15">
                                                    <icon-icon name="megaphone-outline"></icon-icon>
                                                </span>Mega</a>
                                            <div class="sub-mega-menu">
                                                <div class="nav flex-column nav-pills" role="tablist">
                                                    <a class="nav-link active" data-toggle="pill" href="#news-0"
                                                        role="tab">All</a>
                                                    <a class="nav-link" data-toggle="pill" href="#news-1"
                                                        role="tab">Entertaiment</a>
                                                    <a class="nav-link" data-toggle="pill" href="#news-2"
                                                        role="tab">Fashion</a>
                                                    <a class="nav-link" data-toggle="pill" href="#news-3"
                                                        role="tab">Life Style</a>
                                                </div>
                                                <div class="tab-content">
                                                    <div class="tab-pane show active" id="news-0" role="tabpanel">
                                                        <div class="row">
                                                            <div class="col-3 post-module-1">
                                                                <div
                                                                    class="post-thumb d-flex border-radius-5 img-hover-scale mb-15">
                                                                    <a href="">
                                                                        <img src="/wp-content/themes/d24ar/assets/imgs/news-1.jpg"
                                                                            alt="">
                                                                    </a>
                                                                    <span class="top-right-icon background2">
                                                                        <i class="mdi mdi-audiotrack"></i>
                                                                    </span>
                                                                </div>
                                                                <div class="post-content media-body">
                                                                    <h6 class="post-title mb-10 text-limit-2-row">The
                                                                        litigants on the screen are not actors </h6>
                                                                    <div
                                                                        class="entry-meta meta-1 font-x-small color-grey">
                                                                        <span class="post-on">25 April</span>
                                                                        <span class="hit-count has-dot">126k
                                                                            Views</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-3 post-module-1">
                                                                <div
                                                                    class="post-thumb d-flex border-radius-5 img-hover-scale mb-15">
                                                                    <a href="">
                                                                        <img src="/wp-content/themes/d24ar/assets/imgs/news-2.jpg"
                                                                            alt="">
                                                                    </a>
                                                                </div>
                                                                <div class="post-content media-body">
                                                                    <h6 class="post-title mb-10 text-limit-2-row">Not a
                                                                        bit of hesitation, you better think twice</h6>
                                                                    <div
                                                                        class="entry-meta meta-1 font-x-small color-grey mt-10">
                                                                        <span class="post-on">25 April</span>
                                                                        <span class="hit-count has-dot">126k
                                                                            Views</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-3 post-module-1">
                                                                <div
                                                                    class="post-thumb d-flex border-radius-5 img-hover-scale mb-15">
                                                                    <a href="">
                                                                        <img src="/wp-content/themes/d24ar/assets/imgs/news-3.jpg"
                                                                            alt="">
                                                                    </a>
                                                                </div>
                                                                <div class="post-content media-body">
                                                                    <h6 class="post-title mb-10 text-limit-2-row">We got
                                                                        a right to pick a little fight, Bonanza </h6>
                                                                    <div
                                                                        class="entry-meta meta-1 font-x-small color-grey mt-10">
                                                                        <span class="post-on">25 April</span>
                                                                        <span class="hit-count has-dot">126k
                                                                            Views</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-3 post-module-1">
                                                                <div
                                                                    class="post-thumb d-flex border-radius-5 img-hover-scale mb-15">
                                                                    <a href="">
                                                                        <img src="/wp-content/themes/d24ar/assets/imgs/news-8.jpg"
                                                                            alt="">
                                                                    </a>
                                                                </div>
                                                                <div class="post-content media-body">
                                                                    <h6 class="post-title mb-10 text-limit-2-row">My
                                                                        entrance exam was on a book of matches </h6>
                                                                    <div
                                                                        class="entry-meta meta-1 font-x-small color-grey mt-10">
                                                                        <span class="post-on">25 April</span>
                                                                        <span class="hit-count has-dot">126k
                                                                            Views</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="news-1" role="tabpanel">
                                                        <div class="row">
                                                            <div class="col-3 post-module-1">
                                                                <div
                                                                    class="post-thumb d-flex border-radius-5 img-hover-scale mb-15">
                                                                    <a href="">
                                                                        <img src="/wp-content/themes/d24ar/assets/imgs/news-5.jpg"
                                                                            alt="">
                                                                    </a>
                                                                </div>
                                                                <div class="post-content media-body">
                                                                    <h6 class="post-title mb-10 text-limit-2-row">The
                                                                        litigants on the screen are not actors </h6>
                                                                    <div
                                                                        class="entry-meta meta-1 font-x-small color-grey">
                                                                        <span class="post-on">25 April</span>
                                                                        <span class="hit-count has-dot">126k
                                                                            Views</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-3 post-module-1">
                                                                <div
                                                                    class="post-thumb d-flex border-radius-5 img-hover-scale mb-15">
                                                                    <a href="">
                                                                        <img src="/wp-content/themes/d24ar/assets/imgs/news-6.jpg"
                                                                            alt="">
                                                                    </a>
                                                                    <span class="top-right-icon background3">
                                                                        <i class="mdi mdi-videocam"></i>
                                                                    </span>
                                                                </div>
                                                                <div class="post-content media-body">
                                                                    <h6 class="post-title mb-10 text-limit-2-row">Not a
                                                                        bit of hesitation, you better think twice</h6>
                                                                    <div
                                                                        class="entry-meta meta-1 font-x-small color-grey mt-10">
                                                                        <span class="post-on">25 April</span>
                                                                        <span class="hit-count has-dot">126k
                                                                            Views</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-3 post-module-1">
                                                                <div
                                                                    class="post-thumb d-flex border-radius-5 img-hover-scale mb-15">
                                                                    <a href="">
                                                                        <img src="/wp-content/themes/d24ar/assets/imgs/news-7.jpg"
                                                                            alt="">
                                                                    </a>
                                                                </div>
                                                                <div class="post-content media-body">
                                                                    <h6 class="post-title mb-10 text-limit-2-row">We got
                                                                        a right to pick a little fight, Bonanza </h6>
                                                                    <div
                                                                        class="entry-meta meta-1 font-x-small color-grey mt-10">
                                                                        <span class="post-on">25 April</span>
                                                                        <span class="hit-count has-dot">126k
                                                                            Views</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-3 post-module-1">
                                                                <div
                                                                    class="post-thumb d-flex border-radius-5 img-hover-scale mb-15">
                                                                    <a href="">
                                                                        <img src="/wp-content/themes/d24ar/assets/imgs/news-8.jpg"
                                                                            alt="">
                                                                    </a>
                                                                </div>
                                                                <div class="post-content media-body">
                                                                    <h6 class="post-title mb-10 text-limit-2-row">My
                                                                        entrance exam was on a book of matches </h6>
                                                                    <div
                                                                        class="entry-meta meta-1 font-x-small color-grey mt-10">
                                                                        <span class="post-on">25 April</span>
                                                                        <span class="hit-count has-dot">126k
                                                                            Views</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="news-2" role="tabpanel">
                                                        <div class="row">
                                                            <div class="col-3 post-module-1">
                                                                <div
                                                                    class="post-thumb d-flex border-radius-5 img-hover-scale mb-15">
                                                                    <a href="">
                                                                        <img src="/wp-content/themes/d24ar/assets/imgs/news-9.jpg"
                                                                            alt="">
                                                                    </a>
                                                                    <span class="top-right-icon background2">
                                                                        <i class="mdi mdi-audiotrack"></i>
                                                                    </span>
                                                                </div>
                                                                <div class="post-content media-body">
                                                                    <h6 class="post-title mb-10 text-limit-2-row">The
                                                                        litigants on the screen are not actors </h6>
                                                                    <div
                                                                        class="entry-meta meta-1 font-x-small color-grey">
                                                                        <span class="post-on">25 April</span>
                                                                        <span class="hit-count has-dot">126k
                                                                            Views</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-3 post-module-1">
                                                                <div
                                                                    class="post-thumb d-flex border-radius-5 img-hover-scale mb-15">
                                                                    <a href="">
                                                                        <img src="/wp-content/themes/d24ar/assets/imgs/news-10.jpg"
                                                                            alt="">
                                                                    </a>
                                                                    <span class="top-right-icon background8">
                                                                        <i class="mdi mdi-favorite"></i>
                                                                    </span>
                                                                </div>
                                                                <div class="post-content media-body">
                                                                    <h6 class="post-title mb-10 text-limit-2-row">Not a
                                                                        bit of hesitation, you better think twice</h6>
                                                                    <div
                                                                        class="entry-meta meta-1 font-x-small color-grey mt-10">
                                                                        <span class="post-on">25 April</span>
                                                                        <span class="hit-count has-dot">126k
                                                                            Views</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-3 post-module-1">
                                                                <div
                                                                    class="post-thumb d-flex border-radius-5 img-hover-scale mb-15">
                                                                    <a href="">
                                                                        <img src="/wp-content/themes/d24ar/assets/imgs/news-11.jpg"
                                                                            alt="">
                                                                    </a>
                                                                </div>
                                                                <div class="post-content media-body">
                                                                    <h6 class="post-title mb-10 text-limit-2-row">We got
                                                                        a right to pick a little fight, Bonanza </h6>
                                                                    <div
                                                                        class="entry-meta meta-1 font-x-small color-grey mt-10">
                                                                        <span class="post-on">25 April</span>
                                                                        <span class="hit-count has-dot">126k
                                                                            Views</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-3 post-module-1">
                                                                <div
                                                                    class="post-thumb d-flex border-radius-5 img-hover-scale mb-15">
                                                                    <a href="">
                                                                        <img src="/wp-content/themes/d24ar/assets/imgs/news-12.jpg"
                                                                            alt="">
                                                                    </a>
                                                                </div>
                                                                <div class="post-content media-body">
                                                                    <h6 class="post-title mb-10 text-limit-2-row">My
                                                                        entrance exam was on a book of matches </h6>
                                                                    <div
                                                                        class="entry-meta meta-1 font-x-small color-grey mt-10">
                                                                        <span class="post-on">25 April</span>
                                                                        <span class="hit-count has-dot">126k
                                                                            Views</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="news-3" role="tabpanel">
                                                        <div class="row">
                                                            <div class="col-3 post-module-1">
                                                                <div
                                                                    class="post-thumb d-flex border-radius-5 img-hover-scale mb-15">
                                                                    <a href="">
                                                                        <img src="/wp-content/themes/d24ar/assets/imgs/news-13.jpg"
                                                                            alt="">
                                                                    </a>
                                                                </div>
                                                                <div class="post-content media-body">
                                                                    <h6 class="post-title mb-10 text-limit-2-row">The
                                                                        litigants on the screen are not actors </h6>
                                                                    <div
                                                                        class="entry-meta meta-1 font-x-small color-grey">
                                                                        <span class="post-on">25 April</span>
                                                                        <span class="hit-count has-dot">126k
                                                                            Views</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-3 post-module-1">
                                                                <div
                                                                    class="post-thumb d-flex border-radius-5 img-hover-scale mb-15">
                                                                    <a href="">
                                                                        <img src="/wp-content/themes/d24ar/assets/imgs/news-14.jpg"
                                                                            alt="">
                                                                    </a>
                                                                </div>
                                                                <div class="post-content media-body">
                                                                    <h6 class="post-title mb-10 text-limit-2-row">Not a
                                                                        bit of hesitation, you better think twice</h6>
                                                                    <div
                                                                        class="entry-meta meta-1 font-x-small color-grey mt-10">
                                                                        <span class="post-on">25 April</span>
                                                                        <span class="hit-count has-dot">126k
                                                                            Views</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-3 post-module-1">
                                                                <div
                                                                    class="post-thumb d-flex border-radius-5 img-hover-scale mb-15">
                                                                    <a href="">
                                                                        <img src="/wp-content/themes/d24ar/assets/imgs/news-15.jpg"
                                                                            alt="">
                                                                    </a>
                                                                </div>
                                                                <div class="post-content media-body">
                                                                    <h6 class="post-title mb-10 text-limit-2-row">We got
                                                                        a right to pick a little fight, Bonanza </h6>
                                                                    <div
                                                                        class="entry-meta meta-1 font-x-small color-grey mt-10">
                                                                        <span class="post-on">25 April</span>
                                                                        <span class="hit-count has-dot">126k
                                                                            Views</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-3 post-module-1">
                                                                <div
                                                                    class="post-thumb d-flex border-radius-5 img-hover-scale mb-15">
                                                                    <a href="">
                                                                        <img src="/wp-content/themes/d24ar/assets/imgs/news-16.jpg"
                                                                            alt="">
                                                                    </a>
                                                                    <span class="top-right-icon background2">
                                                                        <i class="mdi mdi-audiotrack"></i>
                                                                    </span>
                                                                </div>
                                                                <div class="post-content media-body">
                                                                    <h6 class="post-title mb-10 text-limit-2-row">My
                                                                        entrance exam was on a book of matches </h6>
                                                                    <div
                                                                        class="entry-meta meta-1 font-x-small color-grey mt-10">
                                                                        <span class="post-on">25 April</span>
                                                                        <span class="hit-count has-dot">126k
                                                                            Views</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li><a href=""><span class="mr-15">
                                                    <icon-icon name="film-outline"></icon-icon>
                                                </span>Video</a></li>
                                        <li><a href=""><span class="mr-15">
                                                    <icon-icon name="mail-unread-outline"></icon-icon>
                                                </span>Contact</a></li>
                                    </ul>
                                    <div class="d-inline ml-50 tools-icon">
                                        <a class="red-tooltip text-danger" href="#" data-toggle="tooltip"
                                            data-placement="top" title="" data-original-title="Hot Topics">
                                            <icon-icon name="flame-outline"></icon-icon>
                                        </a>
                                        <a class="red-tooltip text-primary" href="#" data-toggle="tooltip"
                                            data-placement="top" title="" data-original-title="Trending">
                                            <icon-icon name="flash-outline"></icon-icon>
                                        </a>
                                        <a class="red-tooltip text-success" href="#" data-toggle="tooltip"
                                            data-placement="top" title="" data-original-title="Notifications">
                                            <icon-icon name="notifications-outline"></icon-icon>
                                            <span class="notification bg-success">5</span>
                                        </a>
                                    </div>
                                </nav>
                            </div>
                            <!-- Search -->
                            <form action="#" method="get"
                                class="search-form d-lg-inline float-right position-relative mr-30 d-none">
                                <input type="text" class="search_field" placeholder="Search" value="" name="s">
                                <span class="search-icon"><i class="ti-search mr-5"></i></span>
                            </form>
                            <!-- Off canvas -->
                            <div class="off-canvas-toggle-cover">
                                <div class="off-canvas-toggle hidden d-inline-block ml-15" id="off-canvas-toggle">
                                    <icon-icon name="grid-outline"></icon-icon>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main class="">