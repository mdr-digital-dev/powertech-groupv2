<?php
/**
 * Default page template
 */
get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>

    <section class="hero hero--interior hero--default" aria-labelledby="page-title-<?php the_ID(); ?>">
        <div class="hero-content">
            <div class="hero-breadcrumb">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
                <span aria-hidden="true"> / </span>
                <span><?php the_title(); ?></span>
            </div>
            <h1 id="page-title-<?php the_ID(); ?>" class="hero-title fade-in"><?php the_title(); ?></h1>
        </div>
    </section>

    <section class="section page-content-section">
        <div class="container page-content-inner">
            <div class="page-content-body fade-in">
                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="page-featured-img">
                        <?php the_post_thumbnail( 'powertech-hero', array( 'class' => 'page-hero-img' ) ); ?>
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
            </div>
        </div>
    </section>

<?php endwhile; ?>

<?php get_footer(); ?>
