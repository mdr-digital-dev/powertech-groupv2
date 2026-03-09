<?php
/**
 * Main template file (fallback)
 * WordPress uses this when no more specific template is found.
 */
get_header();
?>

<section class="section blog-archive">
    <div class="container">
        <div class="page-hero-simple fade-in">
            <h1 class="page-title">
                <?php
                if ( is_home() ) {
                    echo 'Latest News';
                } elseif ( is_search() ) {
                    printf( 'Search Results for: %s', '<span>' . esc_html( get_search_query() ) . '</span>' );
                } elseif ( is_404() ) {
                    echo 'Page Not Found';
                } else {
                    the_archive_title();
                }
                ?>
            </h1>
        </div>

        <?php if ( have_posts() ) : ?>
            <div class="posts-grid fade-in">
                <?php while ( have_posts() ) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?>>
                        <?php if ( has_post_thumbnail() ) : ?>
                            <a href="<?php the_permalink(); ?>" class="post-card-img-wrap" tabindex="-1" aria-hidden="true">
                                <?php the_post_thumbnail( 'powertech-card', array( 'class' => 'post-card-img' ) ); ?>
                            </a>
                        <?php endif; ?>
                        <div class="post-card-body">
                            <div class="post-card-meta">
                                <time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
                            </div>
                            <h2 class="post-card-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <p class="post-card-excerpt"><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn btn-outline-navy btn-sm">Read More</a>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>

            <div class="pagination fade-in">
                <?php
                the_posts_pagination( array(
                    'mid_size'  => 2,
                    'prev_text' => '&larr; Newer',
                    'next_text' => 'Older &rarr;',
                ) );
                ?>
            </div>

        <?php elseif ( is_404() ) : ?>
            <div class="not-found-block fade-in">
                <div class="not-found-code">404</div>
                <h2>Page Not Found</h2>
                <p>The page you're looking for doesn't exist or has been moved. Use the navigation above or contact us for help.</p>
                <div class="not-found-actions">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-red btn-lg">Back to Home</a>
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-outline-navy btn-lg">Contact Us</a>
                </div>
            </div>
        <?php else : ?>
            <div class="no-results fade-in">
                <p>No posts found. <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Return home</a>.</p>
            </div>
        <?php endif; ?>

    </div>
</section>

<?php get_footer(); ?>
