<?php
/**
 * Archive template (category, tag, date, author, CPT archive)
 */
get_header();
?>

<section class="hero hero--interior hero--default" aria-labelledby="archive-title">
    <div class="hero-content">
        <div class="hero-breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
            <span aria-hidden="true"> / </span>
            <span><?php the_archive_title(); ?></span>
        </div>
        <h1 id="archive-title" class="hero-title fade-in"><?php the_archive_title(); ?></h1>
        <?php if ( get_the_archive_description() ) : ?>
            <p class="hero-subtitle fade-in"><?php echo wp_kses_post( get_the_archive_description() ); ?></p>
        <?php endif; ?>
    </div>
</section>

<section class="section blog-archive">
    <div class="container">

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
                    'prev_text' => '&larr; Previous',
                    'next_text' => 'Next &rarr;',
                ) );
                ?>
            </div>

        <?php else : ?>
            <div class="no-results fade-in">
                <p>No posts found in this category. <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Return home</a>.</p>
            </div>
        <?php endif; ?>

    </div>
</section>

<?php get_footer(); ?>
