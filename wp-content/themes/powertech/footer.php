</main><!-- /#main-content -->

<!-- ════════════════════════════════════════════════════════
     SITE FOOTER
     ════════════════════════════════════════════════════════ -->
<footer class="site-footer" role="contentinfo">

    <!-- Google Reviews Strip -->
    <div class="footer-reviews-strip">
        <div class="container footer-reviews-inner">
            <div class="footer-reviews-badge">
                <div class="footer-stars">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="#fbbc04" aria-hidden="true"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="#fbbc04" aria-hidden="true"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="#fbbc04" aria-hidden="true"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="#fbbc04" aria-hidden="true"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="#fbbc04" aria-hidden="true"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                </div>
                <span class="footer-reviews-text"><strong>4.8 ★</strong> Rated on Google</span>
            </div>
            <a href="<?php echo pt_reviews_url(); ?>" target="_blank" rel="noopener noreferrer" class="footer-reviews-link">
                See All Google Reviews
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
            </a>
        </div>
    </div>

    <!-- Main Footer Grid -->
    <div class="footer-main">
        <div class="container footer-grid">

            <!-- Column 1: Company Info -->
            <div class="footer-col footer-brand">
                <div class="footer-logo">
                    <?php if ( has_custom_logo() ) : ?>
                        <?php the_custom_logo(); ?>
                    <?php else : ?>
                        <div class="logo-text-fallback logo-text-fallback--light">
                            <span class="logo-primary">PowerTech</span>
                            <span class="logo-sub">Group of Chicago</span>
                        </div>
                    <?php endif; ?>
                </div>
                <p class="footer-tagline">Protecting Chicago's Businesses Since 2005. UL Listed &amp; Licensed Security Company serving Industrial and Commercial clients throughout the Chicagoland area.</p>
                <div class="footer-contact-info">
                    <a href="<?php echo esc_url( pt_phone_link() ); ?>" class="footer-contact-link">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 014.69 13.6 19.79 19.79 0 011.62 5.05 2 2 0 013.6 2.87h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L7.91 10a16 16 0 006.08 6.08l1.46-1.46a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/></svg>
                        <?php echo pt_phone(); ?>
                    </a>
                    <span class="footer-contact-link">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        <?php echo pt_address(); ?>
                    </span>
                </div>
                <div class="footer-social">
                    <a href="<?php echo esc_url( pt_mod( 'powertech_facebook_url', 'https://www.facebook.com/pages/PowerTech-Group/483571851793477' ) ); ?>" target="_blank" rel="noopener noreferrer" aria-label="PowerTech Group on Facebook" class="social-link">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>
                    </a>
                    <a href="<?php echo esc_url( pt_mod( 'powertech_linkedin_url', 'https://www.linkedin.com/pub/mick-baran/41/987/603' ) ); ?>" target="_blank" rel="noopener noreferrer" aria-label="PowerTech Group on LinkedIn" class="social-link">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
                    </a>
                </div>
            </div>

            <!-- Column 2: Safety & Security -->
            <div class="footer-col">
                <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-1' ); ?>
                <?php else : ?>
                    <h4 class="footer-col-title">Safety &amp; Security</h4>
                    <ul class="footer-links">
                        <li><a href="<?php echo esc_url( home_url( '/safety-security/#burglar-alarm' ) ); ?>">Burglar Alarm Systems</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/safety-security/#fire-protection' ) ); ?>">Fire Protection</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/safety-security/#security-cameras' ) ); ?>">Security Cameras</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/safety-security/#access-control' ) ); ?>">Access Control</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/safety-security/' ) ); ?>">View All Safety Services</a></li>
                    </ul>
                <?php endif; ?>
            </div>

            <!-- Column 3: IT Services -->
            <div class="footer-col">
                <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-2' ); ?>
                <?php else : ?>
                    <h4 class="footer-col-title">IT Services</h4>
                    <ul class="footer-links">
                        <li><a href="<?php echo esc_url( home_url( '/it-services/#managed-it' ) ); ?>">Managed IT Services</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/it-services/#wireless-network' ) ); ?>">Wireless Networks</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/it-services/#cyber-security' ) ); ?>">Cyber Security</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/it-services/#pci-compliance' ) ); ?>">PCI Compliance</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/it-services/' ) ); ?>">View All IT Services</a></li>
                    </ul>
                <?php endif; ?>
            </div>

            <!-- Column 4: Company + Support -->
            <div class="footer-col">
                <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-3' ); ?>
                <?php else : ?>
                    <h4 class="footer-col-title">Company</h4>
                    <ul class="footer-links">
                        <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About PowerTech Group</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/resources/' ) ); ?>">Resources &amp; Manuals</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact Us</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Get a Free Quote</a></li>
                    </ul>
                    <h4 class="footer-col-title" style="margin-top:1.5rem;">Client Support</h4>
                    <ul class="footer-links">
                        <li>
                            <a href="<?php echo pt_remote_support_url(); ?>" target="_blank" rel="noopener noreferrer">
                                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true" style="margin-right:4px;vertical-align:middle;"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
                                Remote Support
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo pt_support_ticket_url(); ?>" target="_blank" rel="noopener noreferrer">
                                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true" style="margin-right:4px;vertical-align:middle;"><path d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"/></svg>
                                Submit a Support Ticket
                            </a>
                        </li>
                    </ul>
                <?php endif; ?>
            </div>

        </div><!-- /.footer-grid -->
    </div><!-- /.footer-main -->

    <!-- Certifications Bar -->
    <div class="footer-certs">
        <div class="container footer-certs-inner">
            <div class="cert-item">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                UL Listed Applicant ID: 1624830-000
            </div>
            <div class="cert-divider" aria-hidden="true">|</div>
            <div class="cert-item">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>
                IL PACA #: 127-001634
            </div>
            <div class="cert-divider" aria-hidden="true">|</div>
            <div class="cert-item">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                Licensed &amp; Bonded
            </div>
            <div class="cert-divider" aria-hidden="true">|</div>
            <div class="cert-item">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                24/7 Emergency Response
            </div>
        </div>
    </div>

    <!-- Footer Bottom Bar -->
    <div class="footer-bottom">
        <div class="container footer-bottom-inner">
            <p class="footer-copyright">
                &copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. All Rights Reserved.
                <span class="footer-legal-links">
                    <a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">Privacy Policy</a>
                    <a href="<?php echo esc_url( home_url( '/terms/' ) ); ?>">Terms of Service</a>
                </span>
            </p>
            <p class="footer-bottom-right">
                Serving Chicago, Arlington Heights &amp; Chicagoland
            </p>
        </div>
    </div>

</footer><!-- /.site-footer -->

</div><!-- /#page -->

<?php wp_footer(); ?>

</body>
</html>
