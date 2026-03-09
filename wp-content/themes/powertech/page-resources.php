<?php
/**
 * Template Name: Resources
 * Template Post Type: page
 */
get_header();
?>

<!-- Interior Hero -->
<section class="hero hero--interior hero--resources" aria-labelledby="resources-hero-heading">
    <div class="hero-content">
        <div class="hero-breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
            <span aria-hidden="true"> / </span>
            <span>Resources</span>
        </div>
        <h1 id="resources-hero-heading" class="hero-title fade-in">Resources &amp;<br>Documentation</h1>
        <p class="hero-subtitle fade-in">User guides, installation manuals, wiring diagrams, and training videos — everything you need to get the most from your PowerTech systems.</p>
    </div>
</section>

<!-- ════════════════════════════════════════════════════════
     CUSTOMER RESOURCES
     ════════════════════════════════════════════════════════ -->
<section id="customer-manuals" class="section resources-section" aria-labelledby="customer-resources-heading">
    <div class="container">
        <div class="section-header fade-in">
            <div class="resources-section-badge resources-section-badge--blue">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
                For Our Customers
            </div>
            <h2 id="customer-resources-heading" class="section-title">Customer Resources</h2>
            <p class="section-subtitle">User guides, quick-start instructions, and support documentation to help you operate and maintain your PowerTech systems.</p>
        </div>

        <?php
        // Query resources CPT filtered by audience = customer
        $customer_resources = new WP_Query( array(
            'post_type'      => 'resources',
            'posts_per_page' => -1,
            'meta_query'     => array(
                array(
                    'key'     => '_resource_audience',
                    'value'   => array( 'customer', 'both' ),
                    'compare' => 'IN',
                ),
            ),
        ) );

        if ( $customer_resources->have_posts() ) :
        ?>
        <div class="resources-grid fade-in">
            <?php while ( $customer_resources->have_posts() ) : $customer_resources->the_post(); ?>
                <?php $file_url = get_post_meta( get_the_ID(), '_resource_file_url', true ); ?>
                <article class="resource-card">
                    <div class="resource-card-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                    </div>
                    <div class="resource-card-body">
                        <h3 class="resource-card-title"><?php the_title(); ?></h3>
                        <p class="resource-card-desc"><?php echo wp_kses_post( get_the_excerpt() ); ?></p>
                    </div>
                    <?php if ( $file_url ) : ?>
                        <a href="<?php echo esc_url( $file_url ); ?>" class="btn btn-resource" download target="_blank" rel="noopener noreferrer">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                            Download
                        </a>
                    <?php else : ?>
                        <span class="btn btn-resource btn-resource--coming-soon">Coming Soon</span>
                    <?php endif; ?>
                </article>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
        <?php else : ?>
        <!-- Default placeholder cards when no CPT resources exist yet -->
        <div class="resources-grid fade-in">

            <article class="resource-card">
                <div class="resource-card-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
                </div>
                <div class="resource-card-body">
                    <h3 class="resource-card-title">User Guide: Burglar Alarm System</h3>
                    <p class="resource-card-desc">Complete user guide for arming, disarming, and managing your PowerTech burglar alarm system. Includes bypass procedures and troubleshooting tips.</p>
                </div>
                <a href="#" class="btn btn-resource">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                    Download PDF
                </a>
            </article>

            <article class="resource-card">
                <div class="resource-card-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
                </div>
                <div class="resource-card-body">
                    <h3 class="resource-card-title">User Guide: Security Camera Access</h3>
                    <p class="resource-card-desc">How to view your security cameras remotely, download footage, and manage user access on your NVR system from desktop and mobile.</p>
                </div>
                <a href="#" class="btn btn-resource">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                    Download PDF
                </a>
            </article>

            <article class="resource-card">
                <div class="resource-card-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"/></svg>
                </div>
                <div class="resource-card-body">
                    <h3 class="resource-card-title">How to Submit a Support Ticket</h3>
                    <p class="resource-card-desc">Step-by-step instructions for submitting a support ticket through our helpdesk system. Includes tips for faster resolution.</p>
                </div>
                <a href="#" class="btn btn-resource">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                    Download PDF
                </a>
            </article>

            <article class="resource-card">
                <div class="resource-card-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
                </div>
                <div class="resource-card-body">
                    <h3 class="resource-card-title">Remote Support Instructions</h3>
                    <p class="resource-card-desc">Instructions for launching a remote support session with our technicians. Includes system requirements and connection guide.</p>
                </div>
                <a href="<?php echo pt_remote_support_url(); ?>" class="btn btn-resource" target="_blank" rel="noopener noreferrer">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
                    Launch Remote Support
                </a>
            </article>

        </div>
        <?php endif; ?>

    </div>
</section>

<!-- ════════════════════════════════════════════════════════
     TECHNICIAN RESOURCES
     ════════════════════════════════════════════════════════ -->
<section id="technician-resources" class="section resources-section resources-section--alt" aria-labelledby="tech-resources-heading">
    <div class="container">
        <div class="section-header fade-in">
            <div class="resources-section-badge resources-section-badge--navy">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M14.7 6.3a1 1 0 000 1.4l1.6 1.6a1 1 0 001.4 0l3.77-3.77a6 6 0 01-7.94 7.94l-6.91 6.91a2.12 2.12 0 01-3-3l6.91-6.91a6 6 0 017.94-7.94l-3.76 3.76z"/></svg>
                For Our Technicians
            </div>
            <h2 id="tech-resources-heading" class="section-title">Technician Resources</h2>
            <p class="section-subtitle">Installation manuals, wiring diagrams, programming references, and compliance checklists for certified PowerTech technicians.</p>
        </div>

        <?php
        $tech_resources = new WP_Query( array(
            'post_type'      => 'resources',
            'posts_per_page' => -1,
            'meta_query'     => array(
                array(
                    'key'     => '_resource_audience',
                    'value'   => array( 'technician', 'both' ),
                    'compare' => 'IN',
                ),
            ),
        ) );

        if ( $tech_resources->have_posts() ) :
        ?>
        <div class="resources-grid fade-in">
            <?php while ( $tech_resources->have_posts() ) : $tech_resources->the_post(); ?>
                <?php $file_url = get_post_meta( get_the_ID(), '_resource_file_url', true ); ?>
                <article class="resource-card resource-card--tech">
                    <div class="resource-card-icon resource-card-icon--navy">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
                    </div>
                    <div class="resource-card-body">
                        <h3 class="resource-card-title"><?php the_title(); ?></h3>
                        <p class="resource-card-desc"><?php echo wp_kses_post( get_the_excerpt() ); ?></p>
                    </div>
                    <?php if ( $file_url ) : ?>
                        <a href="<?php echo esc_url( $file_url ); ?>" class="btn btn-resource btn-resource--navy" download target="_blank" rel="noopener noreferrer">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                            Download
                        </a>
                    <?php else : ?>
                        <span class="btn btn-resource btn-resource--coming-soon">Coming Soon</span>
                    <?php endif; ?>
                </article>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
        <?php else : ?>
        <!-- Default placeholder technician cards -->
        <div class="resources-grid fade-in">

            <article class="resource-card resource-card--tech">
                <div class="resource-card-icon resource-card-icon--navy">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
                </div>
                <div class="resource-card-body">
                    <h3 class="resource-card-title">Installation Manual: Access Control Systems</h3>
                    <p class="resource-card-desc">Complete installation guide for Aiphone and compatible access control systems. Covers wiring, programming, and commissioning procedures.</p>
                </div>
                <a href="#" class="btn btn-resource btn-resource--navy">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                    Download PDF
                </a>
            </article>

            <article class="resource-card resource-card--tech">
                <div class="resource-card-icon resource-card-icon--navy">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
                </div>
                <div class="resource-card-body">
                    <h3 class="resource-card-title">Wiring Diagrams: Network Infrastructure</h3>
                    <p class="resource-card-desc">Standard wiring diagrams and cable specifications for structured cabling and network infrastructure projects. TIA-568 compliant.</p>
                </div>
                <a href="#" class="btn btn-resource btn-resource--navy">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                    Download PDF
                </a>
            </article>

            <article class="resource-card resource-card--tech">
                <div class="resource-card-icon resource-card-icon--navy">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M8.5 14.5A2.5 2.5 0 0011 12c0-1.38-.5-2-1-3-1.072-2.143-.224-4.054 2-6 .5 2.5 2 4.9 4 6.5 2 1.6 3 3.5 3 5.5a7 7 0 11-14 0c0-1.153.433-2.294 1-3a2.5 2.5 0 002.5 2.5z"/></svg>
                </div>
                <div class="resource-card-body">
                    <h3 class="resource-card-title">Fire Alarm Programming Reference</h3>
                    <p class="resource-card-desc">Programming reference guide for fire alarm control panels. Covers zone configuration, notification appliance circuits, and monitoring integration.</p>
                </div>
                <a href="#" class="btn btn-resource btn-resource--navy">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                    Download PDF
                </a>
            </article>

            <article class="resource-card resource-card--tech">
                <div class="resource-card-icon resource-card-icon--navy">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <div class="resource-card-body">
                    <h3 class="resource-card-title">PCI Compliance Checklist</h3>
                    <p class="resource-card-desc">Technical PCI DSS compliance checklist for network configuration, segmentation, and documentation requirements. Updated for PCI DSS v4.0.</p>
                </div>
                <a href="#" class="btn btn-resource btn-resource--navy">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                    Download PDF
                </a>
            </article>

        </div>
        <?php endif; ?>

    </div>
</section>

<!-- ════════════════════════════════════════════════════════
     JOB VIDEOS
     ════════════════════════════════════════════════════════ -->
<section id="job-videos" class="section videos-section" aria-labelledby="job-videos-heading">
    <div class="container">
        <div class="section-header fade-in">
            <span class="section-label">Job Videos</span>
            <h2 id="job-videos-heading" class="section-title">Watch Our Team In Action</h2>
            <p class="section-subtitle">Real installations, real results — see how PowerTech technicians tackle commercial security and IT projects throughout Chicagoland.</p>
        </div>

        <?php if ( is_active_sidebar( 'youtube-videos' ) ) : ?>
            <div class="videos-widget-area fade-in">
                <?php dynamic_sidebar( 'youtube-videos' ); ?>
            </div>
        <?php else : ?>
        <!-- NOTE: Replace PLACEHOLDER in each iframe src with the actual YouTube Video ID -->
        <!-- To update videos from the WP dashboard: Appearance > Widgets > YouTube Video Embeds -->
        <div class="videos-grid videos-grid--4 fade-in">

            <?php
            $videos = array(
                array( 'title' => 'Security Camera Installation — Commercial Property', 'desc' => 'Watch our team install an enterprise IP camera system at a Chicago-area commercial facility.' ),
                array( 'title' => 'Access Control System Setup — Industrial Facility', 'desc' => 'Full keycard access control installation for a multi-entry industrial facility in Arlington Heights.' ),
                array( 'title' => 'Network Infrastructure Build-Out — Office Deployment', 'desc' => 'Complete wireless network deployment for a growing Chicago-area business.' ),
                array( 'title' => 'Fire Alarm System Installation — Commercial Building', 'desc' => 'UL Listed fire alarm system installation and commissioning walkthrough.' ),
            );
            foreach ( $videos as $v ) :
            ?>
            <div class="video-card">
                <div class="video-thumbnail" data-video-id="PLACEHOLDER">
                    <div class="video-play-btn" aria-label="Play video">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="white" aria-hidden="true"><polygon points="5 3 19 12 5 21 5 3"/></svg>
                    </div>
                    <span class="video-placeholder-label">Click to Play</span>
                </div>
                <div class="video-info">
                    <h3 class="video-title"><?php echo esc_html( $v['title'] ); ?></h3>
                    <p class="video-desc"><?php echo esc_html( $v['desc'] ); ?></p>
                </div>
                <div class="video-embed-wrapper" style="display:none;">
                    <!-- Replace PLACEHOLDER with actual YouTube Video ID -->
                    <iframe width="100%" height="280" src="https://www.youtube.com/embed/PLACEHOLDER" title="<?php echo esc_attr( $v['title'] ); ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen loading="lazy"></iframe>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
        <?php endif; ?>

    </div>
</section>

<?php get_footer(); ?>
