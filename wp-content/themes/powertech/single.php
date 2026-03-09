<?php
/**
 * Single post template
 */
get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>

    <section class="hero hero--interior hero--default" aria-labelledby="post-title-<?php the_ID(); ?>">
        <div class="hero-content">
            <div class="hero-breadcrumb">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
                <span aria-hidden="true"> / </span>
                <a href="<?php echo esc_url( get_post_type_archive_link( get_post_type() ) ); ?>">Blog</a>
                <span aria-hidden="true"> / </span>
                <span><?php the_title(); ?></span>
            </div>
            <div class="hero-post-meta">
                <time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
            </div>
            <h1 id="post-title-<?php the_ID(); ?>" class="hero-title fade-in"><?php the_title(); ?></h1>
        </div>
    </section>

    <section class="section single-post-section">
        <div class="container single-post-inner">
            <article id="post-<?php the_ID(); ?>" <?php post_class( 'single-post-body fade-in' ); ?>>
                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="single-post-img">
                        <?php the_post_thumbnail( 'powertech-hero', array( 'class' => 'post-hero-img' ) ); ?>
                    </div>
                <?php endif; ?>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
                <?php
                wp_link_pages( array(
                    'before' => '<div class="page-links">Pages:',
                    'after'  => '</div>',
                ) );
                ?>
                <div class="post-tags">
                    <?php the_tags( '<div class="post-tag-list"><span>Tags: </span>', ', ', '</div>' ); ?>
                </div>
            </article>

            <nav class="post-nav" aria-label="Post navigation">
                <?php
                the_post_navigation( array(
                    'prev_text' => '<span class="nav-label">&larr; Previous</span><span class="nav-title">%title</span>',
                    'next_text' => '<span class="nav-label">Next &rarr;</span><span class="nav-title">%title</span>',
                ) );
                ?>
            </nav>

            <?php
            if ( comments_open() || get_comments_number() ) {
                comments_template();
            }
            ?>
        </div>
    </section>

<?php endwhile; ?>

<?php get_footer(); ?>
