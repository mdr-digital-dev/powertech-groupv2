<?php
/**
 * Homepage Template — PowerTech Group of Chicago
 * Template: front-page.php
 */
get_header();
?>

<!-- ════════════════════════════════════════════════════════
     HERO SECTION
     ════════════════════════════════════════════════════════ -->
<section class="hero hero--home" aria-labelledby="hero-headline">

    <!-- Google Reviews Hero Badge -->
    <div class="hero-reviews-badge fade-in">
        <div class="stars-row" aria-label="5 star rating">
            <?php for ( $i = 0; $i < 5; $i++ ) : ?>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="#fbbc04" aria-hidden="true"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <?php endfor; ?>
        </div>
        <span>4.8 ★ Rated on Google</span>
    </div>

    <div class="hero-content">
        <h1 id="hero-headline" class="hero-title fade-in">
            Protecting Chicago's<br>Businesses <span class="text-red">Since 2005</span>
        </h1>
        <p class="hero-subtitle fade-in">
            UL Listed Security &amp; Licensed IT Provider serving Industrial and Commercial clients throughout Chicagoland. From burglar alarms to managed IT — one trusted partner.
        </p>
        <div class="hero-ctas fade-in">
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-red btn-lg">
                Get a Free Quote
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </a>
            <a href="#solutions" class="btn btn-outline-light btn-lg">
                Explore Our Services
            </a>
        </div>
    </div>

    <div class="hero-scroll-indicator" aria-hidden="true">
        <div class="scroll-dot"></div>
    </div>

</section>

<!-- ════════════════════════════════════════════════════════
     TRUST BAR
     ════════════════════════════════════════════════════════ -->
<section class="trust-bar" aria-label="Trust indicators">
    <div class="container">
        <div class="trust-bar-inner">
            <div class="trust-item">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                <div>
                    <strong>UL Listed</strong>
                    <span>Applicant ID: 1624830-000</span>
                </div>
            </div>
            <div class="trust-divider" aria-hidden="true"></div>
            <div class="trust-item">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>
                <div>
                    <strong>Licensed &amp; Bonded</strong>
                    <span>IL PACA #127-001634</span>
                </div>
            </div>
            <div class="trust-divider" aria-hidden="true"></div>
            <div class="trust-item">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                <div>
                    <strong>20+ Years Experience</strong>
                    <span>Serving since 2005</span>
                </div>
            </div>
            <div class="trust-divider" aria-hidden="true"></div>
            <div class="trust-item">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 014.69 13.6 19.79 19.79 0 011.62 5.05 2 2 0 013.6 2.87h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L7.91 10a16 16 0 006.08 6.08l1.46-1.46a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/></svg>
                <div>
                    <strong>24/7 Support</strong>
                    <span>Always here when you need us</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ════════════════════════════════════════════════════════
     SOLUTIONS OVERVIEW
     ════════════════════════════════════════════════════════ -->
<section id="solutions" class="section solutions-section" aria-labelledby="solutions-heading">
    <div class="container">

        <div class="section-header fade-in">
            <span class="section-label">What We Do</span>
            <h2 id="solutions-heading" class="section-title">Complete Safety &amp; Technology Solutions</h2>
            <p class="section-subtitle">From physical security to IT infrastructure — we protect and empower your business with enterprise-grade technology tailored to your needs.</p>
        </div>

        <!-- Safety & Security Services -->
        <div class="services-category fade-in">
            <div class="services-category-header">
                <div class="category-badge category-badge--red">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    Safety &amp; Security
                </div>
                <a href="<?php echo esc_url( home_url( '/safety-security/' ) ); ?>" class="category-view-all">
                    View All Safety Services
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </a>
            </div>
            <div class="services-grid services-grid--4">

                <article class="service-card fade-in">
                    <div class="service-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M18 8h1a4 4 0 010 8h-1"/><path d="M2 8h16v9a4 4 0 01-4 4H6a4 4 0 01-4-4V8z"/><line x1="6" y1="1" x2="6" y2="4"/><line x1="10" y1="1" x2="10" y2="4"/><line x1="14" y1="1" x2="14" y2="4"/></svg>
                    </div>
                    <h3 class="service-card-title">Burglar Alarm</h3>
                    <p class="service-card-desc">Commercial-grade intrusion detection systems designed for industrial and multi-site environments with 24/7 monitoring.</p>
                    <a href="<?php echo esc_url( home_url( '/safety-security/#burglar-alarm' ) ); ?>" class="service-card-link">
                        Learn More <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    </a>
                </article>

                <article class="service-card fade-in">
                    <div class="service-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M8.5 14.5A2.5 2.5 0 0011 12c0-1.38-.5-2-1-3-1.072-2.143-.224-4.054 2-6 .5 2.5 2 4.9 4 6.5 2 1.6 3 3.5 3 5.5a7 7 0 11-14 0c0-1.153.433-2.294 1-3a2.5 2.5 0 002.5 2.5z"/></svg>
                    </div>
                    <h3 class="service-card-title">Fire Protection</h3>
                    <p class="service-card-desc">UL Listed fire alarm systems with full engineering, installation, and programming for commercial properties of any size.</p>
                    <a href="<?php echo esc_url( home_url( '/safety-security/#fire-protection' ) ); ?>" class="service-card-link">
                        Learn More <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    </a>
                </article>

                <article class="service-card fade-in">
                    <div class="service-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M23 7l-7 5 7 5V7z"/><rect x="1" y="5" width="15" height="14" rx="2" ry="2"/></svg>
                    </div>
                    <h3 class="service-card-title">Security Cameras</h3>
                    <p class="service-card-desc">IP and analog surveillance systems from Motorola and Avigilon — indoor, outdoor, and multi-site configurations.</p>
                    <a href="<?php echo esc_url( home_url( '/safety-security/#security-cameras' ) ); ?>" class="service-card-link">
                        Learn More <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    </a>
                </article>

                <article class="service-card fade-in">
                    <div class="service-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>
                    </div>
                    <h3 class="service-card-title">Access Control</h3>
                    <p class="service-card-desc">Keycard, fob, and biometric entry systems from Aiphone and leading manufacturers — scalable for any facility.</p>
                    <a href="<?php echo esc_url( home_url( '/safety-security/#access-control' ) ); ?>" class="service-card-link">
                        Learn More <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    </a>
                </article>

            </div>
        </div>

        <!-- IT Services -->
        <div class="services-category fade-in" style="margin-top:3rem;">
            <div class="services-category-header">
                <div class="category-badge category-badge--navy">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
                    IT &amp; Managed Services
                </div>
                <a href="<?php echo esc_url( home_url( '/it-services/' ) ); ?>" class="category-view-all">
                    View All IT Services
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </a>
            </div>
            <div class="services-grid services-grid--4">

                <article class="service-card fade-in">
                    <div class="service-icon service-icon--blue">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
                    </div>
                    <h3 class="service-card-title">Managed IT Services</h3>
                    <p class="service-card-desc">Proactive IT management, monitoring, and support — keeping your business infrastructure running at peak performance.</p>
                    <a href="<?php echo esc_url( home_url( '/it-services/#managed-it' ) ); ?>" class="service-card-link">
                        Learn More <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    </a>
                </article>

                <article class="service-card fade-in">
                    <div class="service-icon service-icon--blue">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M5 12.55a11 11 0 0114.08 0"/><path d="M1.42 9a16 16 0 0121.16 0"/><path d="M8.53 16.11a6 6 0 016.95 0"/><line x1="12" y1="20" x2="12.01" y2="20"/></svg>
                    </div>
                    <h3 class="service-card-title">Wireless Networks</h3>
                    <p class="service-card-desc">Enterprise-grade WiFi infrastructure design, installation, and management for warehouses, offices, and multi-site facilities.</p>
                    <a href="<?php echo esc_url( home_url( '/it-services/#wireless-network' ) ); ?>" class="service-card-link">
                        Learn More <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    </a>
                </article>

                <article class="service-card fade-in">
                    <div class="service-icon service-icon--blue">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    </div>
                    <h3 class="service-card-title">Cyber Security</h3>
                    <p class="service-card-desc">Comprehensive threat protection, vulnerability assessments, and ongoing security monitoring to shield your business data.</p>
                    <a href="<?php echo esc_url( home_url( '/it-services/#cyber-security' ) ); ?>" class="service-card-link">
                        Learn More <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    </a>
                </article>

                <article class="service-card fade-in">
                    <div class="service-icon service-icon--blue">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                    </div>
                    <h3 class="service-card-title">PCI Compliance</h3>
                    <p class="service-card-desc">Payment Card Industry compliance assessments and remediation services — protecting your customers and your business.</p>
                    <a href="<?php echo esc_url( home_url( '/it-services/#pci-compliance' ) ); ?>" class="service-card-link">
                        Learn More <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    </a>
                </article>

            </div>
        </div>

    </div>
</section>

<!-- ════════════════════════════════════════════════════════
     GOOGLE REVIEWS SECTION
     ════════════════════════════════════════════════════════ -->
<section class="section reviews-section section--dark" aria-labelledby="reviews-heading">
    <div class="container">

        <div class="section-header section-header--light fade-in">
            <span class="section-label section-label--light">What Our Clients Say</span>
            <h2 id="reviews-heading" class="section-title">Trusted by Chicago Businesses</h2>
            <div class="reviews-overall-badge">
                <div class="stars-row stars-row--lg" aria-label="4.8 out of 5 stars">
                    <?php for ( $i = 0; $i < 5; $i++ ) : ?>
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="#fbbc04" aria-hidden="true"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                    <?php endfor; ?>
                </div>
                <span class="reviews-overall-text"><strong>4.8</strong> out of 5 — Google Reviews</span>
            </div>
        </div>

        <div class="reviews-grid fade-in">

            <article class="review-card">
                <div class="review-stars" aria-label="5 stars">
                    <?php for ( $i = 0; $i < 5; $i++ ) : ?>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="#fbbc04" aria-hidden="true"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                    <?php endfor; ?>
                </div>
                <blockquote class="review-text">"PowerTech installed our complete security camera and access control system across three warehouse locations. The team was professional, on time, and the system works flawlessly. Highly recommend for any commercial property."</blockquote>
                <footer class="review-author">
                    <div class="review-avatar" aria-hidden="true">JM</div>
                    <div>
                        <cite class="review-name">James M.</cite>
                        <span class="review-meta">Warehouse Operations Manager · Arlington Heights, IL</span>
                    </div>
                </footer>
            </article>

            <article class="review-card">
                <div class="review-stars" aria-label="5 stars">
                    <?php for ( $i = 0; $i < 5; $i++ ) : ?>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="#fbbc04" aria-hidden="true"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                    <?php endfor; ?>
                </div>
                <blockquote class="review-text">"We've used PowerTech Group for our managed IT and fire alarm monitoring for over five years. Their response time is exceptional — when our alarm triggered at 2 AM, they had someone on-site within the hour. That level of service is rare."</blockquote>
                <footer class="review-author">
                    <div class="review-avatar" aria-hidden="true">SR</div>
                    <div>
                        <cite class="review-name">Sandra R.</cite>
                        <span class="review-meta">Office Manager · Commercial Property · Chicago, IL</span>
                    </div>
                </footer>
            </article>

            <article class="review-card">
                <div class="review-stars" aria-label="5 stars">
                    <?php for ( $i = 0; $i < 5; $i++ ) : ?>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="#fbbc04" aria-hidden="true"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                    <?php endfor; ?>
                </div>
                <blockquote class="review-text">"PowerTech migrated our entire network infrastructure and set up PCI compliance protocols. They made the technical side easy to understand and their ongoing support has been outstanding. Our IT costs have actually gone down."</blockquote>
                <footer class="review-author">
                    <div class="review-avatar" aria-hidden="true">DK</div>
                    <div>
                        <cite class="review-name">David K.</cite>
                        <span class="review-meta">CEO · Retail Group · Chicagoland</span>
                    </div>
                </footer>
            </article>

            <article class="review-card">
                <div class="review-stars" aria-label="5 stars">
                    <?php for ( $i = 0; $i < 5; $i++ ) : ?>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="#fbbc04" aria-hidden="true"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                    <?php endfor; ?>
                </div>
                <blockquote class="review-text">"I've worked with many security companies over the years and PowerTech Group stands out. They're UL Listed, which gave us peace of mind from day one. Their technicians are knowledgeable and they explain everything clearly."</blockquote>
                <footer class="review-author">
                    <div class="review-avatar" aria-hidden="true">MT</div>
                    <div>
                        <cite class="review-name">Michael T.</cite>
                        <span class="review-meta">Facilities Director · Industrial Facility</span>
                    </div>
                </footer>
            </article>

            <article class="review-card">
                <div class="review-stars" aria-label="5 stars">
                    <?php for ( $i = 0; $i < 5; $i++ ) : ?>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="#fbbc04" aria-hidden="true"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                    <?php endfor; ?>
                </div>
                <blockquote class="review-text">"We had a complex wireless network project across our manufacturing floor and PowerTech delivered on time and on budget. Signal coverage is perfect throughout and they handled all the coordination with our equipment vendors."</blockquote>
                <footer class="review-author">
                    <div class="review-avatar" aria-hidden="true">LP</div>
                    <div>
                        <cite class="review-name">Lisa P.</cite>
                        <span class="review-meta">IT Director · Manufacturing · Schaumburg, IL</span>
                    </div>
                </footer>
            </article>

        </div><!-- /.reviews-grid -->

        <div class="reviews-cta fade-in">
            <a href="<?php echo pt_reviews_url(); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline-light btn-lg">
                <svg width="18" height="18" viewBox="0 0 24 24" aria-hidden="true" fill="currentColor"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>
                See All Google Reviews
            </a>
        </div>

    </div>
</section>

<!-- ════════════════════════════════════════════════════════
     SEE US IN ACTION — YouTube Videos
     ════════════════════════════════════════════════════════ -->
<section class="section videos-section" aria-labelledby="videos-heading">
    <div class="container">

        <div class="section-header fade-in">
            <span class="section-label">See Us In Action</span>
            <h2 id="videos-heading" class="section-title">Watch Our Team At Work</h2>
            <p class="section-subtitle">Real installations, real results. See how PowerTech Group delivers world-class security and IT solutions for Chicago-area businesses.</p>
        </div>

        <?php if ( is_active_sidebar( 'youtube-videos' ) ) : ?>
            <!-- Videos managed via WordPress dashboard (Appearance > Widgets > YouTube Video Embeds) -->
            <div class="videos-widget-area fade-in">
                <?php dynamic_sidebar( 'youtube-videos' ); ?>
            </div>
        <?php else : ?>
            <!-- Default placeholder video cards -->
            <!-- NOTE TO ADMIN: Replace "PLACEHOLDER" in each embed src with the actual YouTube Video ID -->
            <!-- Example: https://www.youtube.com/embed/dQw4w9WgXcQ -->
            <!-- To update, go to Appearance > Widgets > YouTube Video Embeds and add Custom HTML widgets -->
            <div class="videos-grid fade-in">

                <div class="video-card">
                    <div class="video-thumbnail" data-video-id="PLACEHOLDER">
                        <div class="video-play-btn" aria-label="Play video">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="white" aria-hidden="true"><polygon points="5 3 19 12 5 21 5 3"/></svg>
                        </div>
                        <span class="video-placeholder-label">Click to Play</span>
                    </div>
                    <div class="video-info">
                        <h3 class="video-title">Security Camera Installation — Commercial Property</h3>
                        <p class="video-desc">Watch our team install an enterprise IP camera system at a Chicago-area commercial facility.</p>
                    </div>
                    <!-- Replace PLACEHOLDER below with actual YouTube Video ID -->
                    <div class="video-embed-wrapper" style="display:none;">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/PLACEHOLDER" title="Security Camera Installation — Commercial Property" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen loading="lazy"></iframe>
                    </div>
                </div>

                <div class="video-card">
                    <div class="video-thumbnail" data-video-id="PLACEHOLDER">
                        <div class="video-play-btn" aria-label="Play video">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="white" aria-hidden="true"><polygon points="5 3 19 12 5 21 5 3"/></svg>
                        </div>
                        <span class="video-placeholder-label">Click to Play</span>
                    </div>
                    <div class="video-info">
                        <h3 class="video-title">Access Control System Setup — Industrial Facility</h3>
                        <p class="video-desc">Full keycard access control installation for a multi-entry industrial facility in Arlington Heights.</p>
                    </div>
                    <div class="video-embed-wrapper" style="display:none;">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/PLACEHOLDER" title="Access Control System Setup" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen loading="lazy"></iframe>
                    </div>
                </div>

                <div class="video-card">
                    <div class="video-thumbnail" data-video-id="PLACEHOLDER">
                        <div class="video-play-btn" aria-label="Play video">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="white" aria-hidden="true"><polygon points="5 3 19 12 5 21 5 3"/></svg>
                        </div>
                        <span class="video-placeholder-label">Click to Play</span>
                    </div>
                    <div class="video-info">
                        <h3 class="video-title">Network Infrastructure Build-Out — Office Deployment</h3>
                        <p class="video-desc">See how we designed and deployed a complete wireless network for a growing Chicago business.</p>
                    </div>
                    <div class="video-embed-wrapper" style="display:none;">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/PLACEHOLDER" title="Network Infrastructure Build-Out" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen loading="lazy"></iframe>
                    </div>
                </div>

            </div>
        <?php endif; ?>

    </div>
</section>

<!-- ════════════════════════════════════════════════════════
     PARTNER LOGOS
     ════════════════════════════════════════════════════════ -->
<section class="section partners-section" aria-labelledby="partners-heading">
    <div class="container">
        <p id="partners-heading" class="partners-label fade-in">Trusted Technology Partners</p>
        <div class="partners-row fade-in">
            <div class="partner-logo-item">
                <span class="partner-logo-text">Motorola</span>
                <span class="partner-logo-sub">Solutions</span>
            </div>
            <div class="partner-logo-divider" aria-hidden="true"></div>
            <div class="partner-logo-item">
                <span class="partner-logo-text">Avigilon</span>
                <span class="partner-logo-sub">Camera Systems</span>
            </div>
            <div class="partner-logo-divider" aria-hidden="true"></div>
            <div class="partner-logo-item">
                <span class="partner-logo-text">Aiphone</span>
                <span class="partner-logo-sub">Access Control</span>
            </div>
            <div class="partner-logo-divider" aria-hidden="true"></div>
            <div class="partner-logo-item">
                <span class="partner-logo-text">Honeywell</span>
                <span class="partner-logo-sub">Fire &amp; Security</span>
            </div>
            <div class="partner-logo-divider" aria-hidden="true"></div>
            <div class="partner-logo-item">
                <span class="partner-logo-text">Cisco</span>
                <span class="partner-logo-sub">Network Infrastructure</span>
            </div>
        </div>
    </div>
</section>

<!-- ════════════════════════════════════════════════════════
     ABOUT TEASER
     ════════════════════════════════════════════════════════ -->
<section class="section about-teaser" aria-labelledby="about-teaser-heading">
    <div class="container about-teaser-inner">

        <div class="about-teaser-content fade-in-left">
            <span class="section-label">About PowerTech Group</span>
            <h2 id="about-teaser-heading" class="section-title">One Partner for Security &amp; Technology</h2>
            <p>PowerTech Group of Chicago is a Licensed Security Company and UL Listed provider servicing from Structure Wiring, Engineering, Installation and Programming for IT Network Infrastructure to a complex Burglar Alarm and other Safety Systems for Industrial and Commercial applications.</p>
            <p>We provide access to experts to translate your business needs into a new infrastructure design using today's complex choice of technologies. Call PowerTech Group and let us help you make the technology work for you.</p>
            <div class="about-teaser-stats">
                <div class="stat-item">
                    <span class="stat-number" data-target="20" data-suffix="+">20+</span>
                    <span class="stat-label">Years in Business</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number" data-target="500" data-suffix="+">500+</span>
                    <span class="stat-label">Clients Served</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number" data-target="24" data-suffix="/7">24/7</span>
                    <span class="stat-label">Support Available</span>
                </div>
            </div>
            <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="btn btn-navy btn-lg">
                Learn About PowerTech
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </a>
        </div>

        <div class="about-teaser-visual fade-in-right" aria-hidden="true">
            <div class="about-teaser-img-placeholder">
                <div class="about-img-overlay">
                    <div class="about-badge">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.5" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                        <span>UL Listed<br>Since 2005</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- ════════════════════════════════════════════════════════
     CTA BANNER
     ════════════════════════════════════════════════════════ -->
<section class="cta-banner" aria-labelledby="cta-banner-heading">
    <div class="container cta-banner-inner">
        <div class="cta-banner-content fade-in">
            <h2 id="cta-banner-heading" class="cta-banner-title">Ready to Protect Your Business?</h2>
            <p class="cta-banner-subtitle">Get a free, no-obligation security and IT assessment from Chicago's most trusted provider.</p>
        </div>
        <div class="cta-banner-actions fade-in">
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-white btn-lg">Get a Free Quote</a>
            <a href="<?php echo esc_url( pt_phone_link() ); ?>" class="btn btn-outline-light btn-lg">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 014.69 13.6 19.79 19.79 0 011.62 5.05 2 2 0 013.6 2.87h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L7.91 10a16 16 0 006.08 6.08l1.46-1.46a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/></svg>
                Call <?php echo pt_phone(); ?>
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
