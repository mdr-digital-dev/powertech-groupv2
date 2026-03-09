<?php
/**
 * Template Name: Safety & Security Services
 * Template Post Type: page
 */
get_header();
?>

<!-- Interior Hero -->
<section class="hero hero--interior hero--safety" aria-labelledby="safety-hero-heading">
    <div class="hero-content">
        <div class="hero-breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
            <span aria-hidden="true"> / </span>
            <span>Safety &amp; Security</span>
        </div>
        <h1 id="safety-hero-heading" class="hero-title fade-in">Safety &amp; Security<br>Systems</h1>
        <p class="hero-subtitle fade-in">UL Listed commercial security solutions — engineering, installation, programming, and 24/7 monitoring for industrial and commercial facilities throughout Chicagoland.</p>
        <div class="hero-ctas fade-in">
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-red btn-lg">Get a Free Assessment</a>
            <a href="<?php echo esc_url( pt_phone_link() ); ?>" class="btn btn-outline-light btn-lg">Call <?php echo pt_phone(); ?></a>
        </div>
    </div>
</section>

<!-- Trust Strip -->
<div class="section-trust-strip">
    <div class="container trust-strip-inner">
        <span class="trust-strip-item">✓ UL Listed (ID: 1624830-000)</span>
        <span class="trust-strip-item">✓ IL PACA Licensed #127-001634</span>
        <span class="trust-strip-item">✓ Licensed &amp; Bonded</span>
        <span class="trust-strip-item">✓ 24/7 Emergency Response</span>
        <span class="trust-strip-item">✓ 20+ Years Experience</span>
    </div>
</div>

<!-- Services Detail Sections -->
<div class="services-detail-page">

    <!-- Burglar Alarm -->
    <section id="burglar-alarm" class="service-detail-section section" aria-labelledby="burglar-heading">
        <div class="container service-detail-inner">
            <div class="service-detail-content fade-in-left">
                <div class="service-detail-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M18 8h1a4 4 0 010 8h-1"/><path d="M2 8h16v9a4 4 0 01-4 4H6a4 4 0 01-4-4V8z"/><line x1="6" y1="1" x2="6" y2="4"/><line x1="10" y1="1" x2="10" y2="4"/><line x1="14" y1="1" x2="14" y2="4"/></svg>
                </div>
                <span class="service-detail-category">Safety &amp; Security</span>
                <h2 id="burglar-heading" class="service-detail-title">Burglar Alarm Systems</h2>
                <p>PowerTech Group designs and installs commercial-grade burglar alarm systems tailored to the unique layout and risk profile of your industrial or commercial facility. We go beyond off-the-shelf solutions — every system is engineered specifically for your property, from single-entry offices to multi-building campuses.</p>
                <p>Our intrusion detection systems integrate motion sensors, door/window contacts, glass break detectors, and perimeter protection into a unified platform with centralized monitoring. With our UL Listed status, you can be confident that every installation meets the highest standards in the industry.</p>
                <ul class="service-feature-list">
                    <li>Commercial-grade motion, contact, and glass break sensors</li>
                    <li>24/7 UL Listed central station monitoring</li>
                    <li>Remote arming/disarming via mobile app</li>
                    <li>Multi-zone and multi-site management</li>
                    <li>Integration with access control and cameras</li>
                    <li>Backup cellular communication for reliability</li>
                </ul>
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-red">Request a Site Assessment</a>
            </div>
            <div class="service-detail-visual fade-in-right" aria-hidden="true">
                <div class="service-detail-img service-detail-img--alarm"></div>
            </div>
        </div>
    </section>

    <!-- Fire Protection -->
    <section id="fire-protection" class="service-detail-section service-detail-section--alt section" aria-labelledby="fire-heading">
        <div class="container service-detail-inner service-detail-inner--reverse">
            <div class="service-detail-visual fade-in-left" aria-hidden="true">
                <div class="service-detail-img service-detail-img--fire"></div>
            </div>
            <div class="service-detail-content fade-in-right">
                <div class="service-detail-icon service-detail-icon--red">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M8.5 14.5A2.5 2.5 0 0011 12c0-1.38-.5-2-1-3-1.072-2.143-.224-4.054 2-6 .5 2.5 2 4.9 4 6.5 2 1.6 3 3.5 3 5.5a7 7 0 11-14 0c0-1.153.433-2.294 1-3a2.5 2.5 0 002.5 2.5z"/></svg>
                </div>
                <span class="service-detail-category">Safety &amp; Security</span>
                <h2 id="fire-heading" class="service-detail-title">Fire Protection Systems</h2>
                <p>As a UL Listed fire alarm provider, PowerTech Group delivers complete fire protection solutions for commercial and industrial facilities throughout the Chicagoland area. From initial system design to AHJ-compliant installation and ongoing maintenance, we handle every aspect of your fire protection infrastructure.</p>
                <p>Our certified technicians work with leading fire alarm manufacturers to provide systems that exceed local code requirements. Whether you need a new installation, a system upgrade, or emergency service on an existing system, our team is available 24/7 to respond.</p>
                <ul class="service-feature-list">
                    <li>UL Listed fire alarm system design &amp; installation</li>
                    <li>Smoke, heat, and CO detection</li>
                    <li>Sprinkler system monitoring integration</li>
                    <li>AHJ (Authority Having Jurisdiction) compliance</li>
                    <li>Annual inspection and testing services</li>
                    <li>24/7 emergency service and response</li>
                </ul>
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-red">Schedule a Fire Audit</a>
            </div>
        </div>
    </section>

    <!-- Security Cameras -->
    <section id="security-cameras" class="service-detail-section section" aria-labelledby="cameras-heading">
        <div class="container service-detail-inner">
            <div class="service-detail-content fade-in-left">
                <div class="service-detail-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M23 7l-7 5 7 5V7z"/><rect x="1" y="5" width="15" height="14" rx="2" ry="2"/></svg>
                </div>
                <span class="service-detail-category">Safety &amp; Security</span>
                <h2 id="cameras-heading" class="service-detail-title">Security Camera Systems</h2>
                <p>PowerTech Group specializes in IP and analog surveillance systems from industry-leading manufacturers including Motorola Solutions and Avigilon. We design camera layouts that eliminate blind spots and provide maximum coverage for your specific facility — from small retail environments to large industrial complexes.</p>
                <p>Our systems offer high-definition video recording, intelligent analytics, remote viewing, and scalable storage solutions. Every installation includes professional cable management, proper weatherproofing for outdoor cameras, and full commissioning to ensure your system performs as expected from day one.</p>
                <ul class="service-feature-list">
                    <li>Motorola and Avigilon IP camera systems</li>
                    <li>4K, HD, and specialty lens configurations</li>
                    <li>Indoor, outdoor, and PTZ cameras</li>
                    <li>Network Video Recorder (NVR) with redundant storage</li>
                    <li>Remote viewing via smartphone and desktop</li>
                    <li>Video analytics: motion alerts, perimeter detection</li>
                    <li>Multi-site centralized management</li>
                </ul>
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-red">Get a Camera Quote</a>
            </div>
            <div class="service-detail-visual fade-in-right" aria-hidden="true">
                <div class="service-detail-img service-detail-img--cameras"></div>
            </div>
        </div>
    </section>

    <!-- Access Control -->
    <section id="access-control" class="service-detail-section service-detail-section--alt section" aria-labelledby="access-heading">
        <div class="container service-detail-inner service-detail-inner--reverse">
            <div class="service-detail-visual fade-in-left" aria-hidden="true">
                <div class="service-detail-img service-detail-img--access"></div>
            </div>
            <div class="service-detail-content fade-in-right">
                <div class="service-detail-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>
                </div>
                <span class="service-detail-category">Safety &amp; Security</span>
                <h2 id="access-heading" class="service-detail-title">Access Control Systems</h2>
                <p>Control who enters your facility and when with PowerTech Group's commercial access control solutions. We partner with Aiphone and other leading manufacturers to provide keycard, key fob, PIN pad, and biometric entry systems that scale from a single door to enterprise-wide deployments with hundreds of access points.</p>
                <p>Our access control systems provide detailed audit trails, time-based scheduling, and immediate revocation capabilities — giving you complete command over your facility's security perimeter. Integration with your existing security cameras and burglar alarm system creates a unified, intelligent security ecosystem.</p>
                <ul class="service-feature-list">
                    <li>Aiphone intercom and access control systems</li>
                    <li>Keycard, fob, PIN, and biometric credentials</li>
                    <li>Cloud-based and on-premise management platforms</li>
                    <li>Time-based access scheduling</li>
                    <li>Complete audit logs and reporting</li>
                    <li>Visitor management integration</li>
                    <li>Integration with cameras and burglar alarms</li>
                </ul>
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-red">Design My Access System</a>
            </div>
        </div>
    </section>

</div><!-- /.services-detail-page -->

<!-- CTA Banner -->
<section class="cta-banner" aria-labelledby="safety-cta-heading">
    <div class="container cta-banner-inner">
        <div class="cta-banner-content fade-in">
            <h2 id="safety-cta-heading" class="cta-banner-title">Protect Your Business Today</h2>
            <p class="cta-banner-subtitle">Free site assessment — our experts will identify vulnerabilities and recommend the right solution for your facility.</p>
        </div>
        <div class="cta-banner-actions fade-in">
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-white btn-lg">Get a Free Quote</a>
            <a href="<?php echo esc_url( pt_phone_link() ); ?>" class="btn btn-outline-light btn-lg">Call <?php echo pt_phone(); ?></a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
