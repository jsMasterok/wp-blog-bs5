<?php
if (!defined('ABSPATH')) {
    exit;
}

get_header();

/**
 * Collect featured posts for the hero slider.
 */
$featured_query = new WP_Query(
    [
        'posts_per_page'      => 4,
        'ignore_sticky_posts' => true,
    ]
);

$featured_ids = [];
if ($featured_query->have_posts()) {
    $featured_ids = wp_list_pluck($featured_query->posts, 'ID');
}
?>

<main id="primary" class="site-main">
    <?php if ($featured_query->have_posts()) : ?>
        <section class="featured-slider-1 py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="featured-slider-1-items">
                            <?php
                            while ($featured_query->have_posts()) :
                                $featured_query->the_post();
                                $categories      = get_the_category();
                                $primary_category = $categories ? $categories[0] : null;
                                ?>
                                <article <?php post_class('single-slider position-relative bg-white border-radius-15 overflow-hidden'); ?>>
                                    <div class="post-thumb">
                                        <a class="d-block" href="<?php the_permalink(); ?>">
                                            <?php
                                            if (has_post_thumbnail()) {
                                                the_post_thumbnail('large', [
                                                    'class' => 'img-fluid w-100',
                                                    'alt'   => esc_attr(get_the_title()),
                                                ]);
                                            } else {
                                                echo '<img class="img-fluid w-100" src="' . esc_url(get_theme_file_uri('assets/imgs/news-1.jpg')) . '" alt="' . esc_attr(get_the_title()) . '" />';
                                            }
                                            ?>
                                        </a>
                                    </div>
                                    <div class="slider-caption">
                                        <?php if ($primary_category) : ?>
                                            <div class="entry-meta meta-0 mb-3">
                                                <a class="badge bg-danger text-uppercase" href="<?php echo esc_url(get_category_link($primary_category)); ?>">
                                                    <?php echo esc_html($primary_category->name); ?>
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                        <h2 class="post-title mb-3">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h2>
                                        <div class="entry-meta meta-1 text-muted small d-flex flex-wrap align-items-center gap-3">
                                            <span class="author d-flex align-items-center">
                                                <?php echo get_avatar(get_the_author_meta('ID'), 40, '', '', ['class' => 'rounded-circle me-2']); ?>
                                                <span><?php echo esc_html(get_the_author()); ?></span>
                                            </span>
                                            <span class="has-dot d-flex align-items-center">
                                                <i class="mdi mdi-clock-outline me-1"></i>
                                                <?php echo esc_html(get_the_date()); ?>
                                            </span>
                                            <span class="has-dot d-flex align-items-center">
                                                <i class="mdi mdi-comment-outline me-1"></i>
                                                <?php echo esc_html(number_format_i18n(get_comments_number())); ?>
                                            </span>
                                        </div>
                                    </div>
                                </article>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>

    <?php
    $latest_posts = new WP_Query(
        [
            'posts_per_page'      => 6,
            'ignore_sticky_posts' => true,
            'post__not_in'        => $featured_ids,
        ]
    );
    ?>
    <section class="weekly-news-area pb-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-8">
                    <div class="loop-list-1">
                        <div class="widget-header mb-4 d-flex justify-content-between align-items-center">
                            <h3 class="widget-title m-0 text-uppercase"><?php esc_html_e('Latest News', 'd24ar-custom'); ?></h3>
                        </div>
                        <?php if ($latest_posts->have_posts()) : ?>
                            <?php
                            $post_index = 0;
                            while ($latest_posts->have_posts()) :
                                $latest_posts->the_post();
                                $post_index++;
                                $categories       = get_the_category();
                                $primary_category = $categories ? $categories[0] : null;
                                $excerpt          = wp_trim_words(get_the_excerpt(), 26, '&hellip;');
                                ?>
                                <?php if (1 === $post_index) : ?>
                                    <article <?php post_class('first-post mb-5'); ?>>
                                        <div class="post-thumb position-relative mb-4 border-radius-15 overflow-hidden">
                                            <a class="d-block" href="<?php the_permalink(); ?>">
                                                <?php
                                                if (has_post_thumbnail()) {
                                                    the_post_thumbnail('large', [
                                                        'class' => 'img-fluid w-100',
                                                        'alt'   => esc_attr(get_the_title()),
                                                    ]);
                                                } else {
                                                    echo '<img class="img-fluid w-100" src="' . esc_url(get_theme_file_uri('assets/imgs/news-2.jpg')) . '" alt="' . esc_attr(get_the_title()) . '" />';
                                                }
                                                ?>
                                            </a>
                                        </div>
                                        <?php if ($primary_category) : ?>
                                            <div class="entry-meta meta-0 mb-3">
                                                <a class="badge bg-primary text-uppercase" href="<?php echo esc_url(get_category_link($primary_category)); ?>">
                                                    <?php echo esc_html($primary_category->name); ?>
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                        <h3 class="post-title mb-3">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h3>
                                        <div class="entry-meta meta-1 text-muted small d-flex flex-wrap align-items-center gap-3 mb-3">
                                            <span class="author d-flex align-items-center">
                                                <?php echo get_avatar(get_the_author_meta('ID'), 40, '', '', ['class' => 'rounded-circle me-2']); ?>
                                                <span><?php echo esc_html(get_the_author()); ?></span>
                                            </span>
                                            <span class="has-dot d-flex align-items-center">
                                                <i class="mdi mdi-clock-outline me-1"></i>
                                                <?php echo esc_html(get_the_date()); ?>
                                            </span>
                                            <span class="has-dot d-flex align-items-center">
                                                <i class="mdi mdi-comment-outline me-1"></i>
                                                <?php echo esc_html(number_format_i18n(get_comments_number())); ?>
                                            </span>
                                        </div>
                                        <p class="text-muted"><?php echo esc_html($excerpt); ?></p>
                                        <a class="read-more" href="<?php the_permalink(); ?>"><?php esc_html_e('Read More', 'd24ar-custom'); ?></a>
                                    </article>
                                    <div class="row g-4">
                                <?php else : ?>
                                        <div class="col-md-6">
                                            <article <?php post_class('list-post d-flex gap-3 align-items-start h-100'); ?>>
                                                <div class="post-thumb flex-shrink-0 border-radius-10 overflow-hidden">
                                                    <a class="d-block" href="<?php the_permalink(); ?>">
                                                        <?php
                                                        if (has_post_thumbnail()) {
                                                            the_post_thumbnail('medium', [
                                                                'class' => 'img-fluid',
                                                                'alt'   => esc_attr(get_the_title()),
                                                            ]);
                                                        } else {
                                                            echo '<img class="img-fluid" src="' . esc_url(get_theme_file_uri('assets/imgs/news-3.jpg')) . '" alt="' . esc_attr(get_the_title()) . '" />';
                                                        }
                                                        ?>
                                                    </a>
                                                </div>
                                                <div class="post-content flex-grow-1">
                                                    <?php if ($primary_category) : ?>
                                                        <div class="entry-meta meta-0 mb-2">
                                                            <a class="badge bg-secondary text-uppercase" href="<?php echo esc_url(get_category_link($primary_category)); ?>">
                                                                <?php echo esc_html($primary_category->name); ?>
                                                            </a>
                                                        </div>
                                                    <?php endif; ?>
                                                    <h4 class="post-title mb-2">
                                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                    </h4>
                                                    <div class="entry-meta meta-1 text-muted small d-flex flex-wrap gap-2">
                                                        <span class="has-dot d-flex align-items-center">
                                                            <i class="mdi mdi-clock-outline me-1"></i>
                                                            <?php echo esc_html(get_the_date()); ?>
                                                        </span>
                                                        <span class="has-dot d-flex align-items-center">
                                                            <i class="mdi mdi-comment-outline me-1"></i>
                                                            <?php echo esc_html(number_format_i18n(get_comments_number())); ?>
                                                        </span>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                <?php endif; ?>
                            <?php endwhile; ?>
                                    </div>
                        <?php else : ?>
                            <p class="text-muted"><?php esc_html_e('No posts found.', 'd24ar-custom'); ?></p>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="sidebar-widget sidebar-right">
                        <?php
                        $top_authors = get_users(
                            [
                                'who'     => 'authors',
                                'orderby' => 'post_count',
                                'order'   => 'DESC',
                                'number'  => 6,
                            ]
                        );
                        if ($top_authors) :
                            ?>
                            <div class="sidebar-widget widget-top-auhor mb-5">
                                <h3 class="widget-title mb-4 text-uppercase"><span><?php esc_html_e('Top Authors', 'd24ar-custom'); ?></span></h3>
                                <div class="d-flex flex-wrap">
                                    <?php foreach ($top_authors as $author) : ?>
                                        <a class="position-relative" href="<?php echo esc_url(get_author_posts_url($author->ID)); ?>" title="<?php echo esc_attr($author->display_name); ?>">
                                            <?php echo get_avatar($author->ID, 60, '', '', ['class' => 'rounded-circle']); ?>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php
                        $popular_categories = get_categories(
                            [
                                'orderby' => 'count',
                                'order'   => 'DESC',
                                'number'  => 8,
                            ]
                        );
                        if ($popular_categories) :
                            ?>
                            <div class="sidebar-widget widget_categories_2">
                                <h3 class="widget-title mb-4 text-uppercase"><span><?php esc_html_e('Popular Categories', 'd24ar-custom'); ?></span></h3>
                                <ul class="list-unstyled m-0">
                                    <?php foreach ($popular_categories as $index => $category) : ?>
                                        <li class="d-flex justify-content-between align-items-center py-2">
                                            <a class="d-flex align-items-center gap-2" href="<?php echo esc_url(get_category_link($category)); ?>">
                                                <span class="badge bg-light text-muted">#<?php echo esc_html($index + 1); ?></span>
                                                <span class="fw-semibold text-dark"><?php echo esc_html($category->name); ?></span>
                                            </a>
                                            <span class="text-muted small"><?php echo esc_html(number_format_i18n($category->count)); ?></span>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </aside>
                </div>
            </div>
        </div>
    </section>

    <?php
    $recent_query = new WP_Query(
        [
            'posts_per_page'      => 8,
            'ignore_sticky_posts' => true,
        ]
    );
    if ($recent_query->have_posts()) :
        ?>
        <section class="post-carausel-1-area py-5 bg-white">
            <div class="container">
                <div class="widget-header d-flex justify-content-between align-items-center mb-4">
                    <h3 class="widget-title m-0 text-uppercase"><?php esc_html_e('Latest Stories', 'd24ar-custom'); ?></h3>
                    <div class="post-carausel-1-arrow"></div>
                </div>
                <div class="post-carausel-1-items">
                    <?php
                    while ($recent_query->have_posts()) :
                        $recent_query->the_post();
                        $categories       = get_the_category();
                        $primary_category = $categories ? $categories[0] : null;
                        ?>
                        <article <?php post_class('mx-2'); ?>>
                            <div class="img-hover-scale border-radius-10 overflow-hidden mb-3">
                                <a class="d-block" href="<?php the_permalink(); ?>">
                                    <?php
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail('medium_large', [
                                            'class' => 'img-fluid w-100',
                                            'alt'   => esc_attr(get_the_title()),
                                        ]);
                                    } else {
                                        echo '<img class="img-fluid w-100" src="' . esc_url(get_theme_file_uri('assets/imgs/news-4.jpg')) . '" alt="' . esc_attr(get_the_title()) . '" />';
                                    }
                                    ?>
                                </a>
                            </div>
                            <?php if ($primary_category) : ?>
                                <div class="entry-meta meta-0 mb-2">
                                    <a class="badge bg-warning text-dark text-uppercase" href="<?php echo esc_url(get_category_link($primary_category)); ?>">
                                        <?php echo esc_html($primary_category->name); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                            <h5 class="post-title mb-2">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h5>
                            <div class="entry-meta meta-1 text-muted small">
                                <span class="has-dot d-inline-flex align-items-center">
                                    <i class="mdi mdi-clock-outline me-1"></i>
                                    <?php echo esc_html(get_the_date()); ?>
                                </span>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>
            </div>
        </section>
        <?php
        wp_reset_postdata();
    endif;
    ?>
</main>

<?php
get_footer();
