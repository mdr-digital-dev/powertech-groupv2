<?php
/**
 * Template Name: IT Services
 * Template Post Type: page
 */
get_header();
?>

<!-- Interior Hero -->
<section class="hero hero--interior hero--it" aria-labelledby="it-hero-heading">
    <div class="hero-content">
        <div class="hero-breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
            <span aria-hidden="true"> / </span>
            <span>IT Services</span>
        </div>
        <h1 id="it-hero-heading" class="hero-title fade-in">IT &amp; Managed<br>Services</h1>
        <p class="hero-subtitle fade-in">Enterprise IT infrastructure, proactive management, and cybersecurity solutions built for Chicago-area industrial and commercial businesses.</p>
        <div class="hero-ctas fade-in">
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-red btn-lg">Get an IT Assessment</a>
            <a href="<?php echo esc_url( pt_remote_support_url() ); ?>" class="btn btn-outline-light btn-lg" target="_blank" rel="noopener noreferrer">Remote Support</a>
        </div>
    </div>
</section>

<!-- Trust Strip -->
<div class="section-trust-strip">
    <div class="container trust-strip-inner">
        <span class="trust-strip-item">✓ Managed IT Provider</span>
        <span class="trust-strip-item">✓ Cyber Security Specialists</span>
        <span class="trust-strip-item">✓ PCI Compliance Experts</span>
        <span class="trust-strip-item">✓ 24/7 Remote Support Available</span>
        <span class="trust-strip-item">✓ 20+ Years of IT Experience</span>
    </div>
</div>

<!-- Services Detail Sections -->
<div class="services-detail-page">

    <!-- Managed IT -->
    <section id="managed-it" class="service-detail-section section" aria-labelledby="managed-it-heading">
        <div class="container service-detail-inner">
            <div class="service-detail-content fade-in-left">
                <div class="service-detail-icon service-detail-icon--blue">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
                </div>
                <span class="service-detail-category">IT &amp; Managed Services</span>
                <h2 id="managed-it-heading" class="service-detail-title">Managed IT Services</h2>
                <p>Stop reacting to IT problems and start preventing them. PowerTech Group's Managed IT Services provide proactive monitoring, maintenance, and support for your entire technology infrastructure — keeping your business running smoothly while you focus on operations.</p>
                <p>Our team acts as your dedicated IT department, providing everything from helpdesk support and patch management to strategic technology planning. With predictable monthly pricing and guaranteed response times, you always know exactly what you're paying for and what to expect.</p>
                <ul class="service-feature-list">
                    <li>24/7 proactive network and server monitoring</li>
                    <li>Helpdesk support via phone, email, and remote access</li>
                    <li>Patch management and software updates</li>
                    <li>Backup and disaster recovery management</li>
                    <li>Hardware procurement and lifecycle management</li>
                    <li>Strategic IT planning and vCIO services</li>
                    <li>Vendor management and coordination</li>
                </ul>
                <div class="service-cta-row">
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-red">Get Managed IT Quote</a>
                    <a href="<?php echo esc_url( pt_remote_support_url() ); ?>" class="btn btn-outline-navy" target="_blank" rel="noopener noreferrer">Launch Remote Support</a>
                </div>
            </div>
            <div class="service-detail-visual fade-in-right" aria-hidden="true">
                <div class="service-detail-img service-detail-img--managed-it"></div>
            </div>
        </div>
    </section>

    <!-- Wireless Networks -->
    <section id="wireless-network" class="service-detail-section service-detail-section--alt section" aria-labelledby="wireless-heading">
        <div class="container service-detail-inner service-detail-inner--reverse">
            <div class="service-detail-visual fade-in-left" aria-hidden="true">
                <div class="service-detail-img service-detail-img--wireless"></div>
            </div>
            <div class="service-detail-content fade-in-right">
                <div class="service-detail-icon service-detail-icon--blue">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M5 12.55a11 11 0 0114.08 0"/><path d="M1.42 9a16 16 0 0121.16 0"/><path d="M8.53 16.11a6 6 0 016.95 0"/><line x1="12" y1="20" x2="12.01" y2="20"/></svg>
                </div>
                <span class="service-detail-category">IT &amp; Managed Services</span>
                <h2 id="wireless-heading" class="service-detail-title">Wireless Network Infrastructure</h2>
                <p>A strong, reliable wireless network is the backbone of modern business operations. PowerTech Group designs and deploys enterprise-grade WiFi infrastructure tailored to the unique demands of industrial and commercial environments — including warehouses, manufacturing floors, office buildings, and multi-tenant properties.</p>
                <p>We perform professional RF site surveys before installation to ensure complete coverage with no dead zones. Our structured cabling and network infrastructure services comply with industry standards, providing a foundation that supports your business for years to come.</p>
                <ul class="service-feature-list">
                    <li>Professional RF site surveys and coverage planning</li>
                    <li>Enterprise WiFi 6 and WiFi 6E deployments</li>
                    <li>Cisco, Ubiquiti, and Meraki infrastructure</li>
                    <li>Structured cabling and fiber optic installation</li>
                    <li>VLAN segmentation and network security</li>
                    <li>Guest network and IoT device isolation</li>
                    <li>Network documentation and ongoing management</li>
                </ul>
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-red">Plan My Network</a>
            </div>
        </div>
    </section>

    <!-- Cyber Security -->
    <section id="cyber-security" class="service-detail-section section" aria-labelledby="cyber-heading">
        <div class="container service-detail-inner">
            <div class="service-detail-content fade-in-left">
                <div class="service-detail-icon service-detail-icon--blue">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <span class="service-detail-category">IT &amp; Managed Services</span>
                <h2 id="cyber-heading" class="service-detail-title">Cyber Security</h2>
                <p>Cyber threats are more sophisticated than ever, and businesses of every size are targets. PowerTech Group provides comprehensive cybersecurity services that protect your network, data, and reputation from evolving threats — from ransomware and phishing to insider threats and zero-day vulnerabilities.</p>
                <p>Our layered security approach combines endpoint protection, network security, email filtering, user training, and continuous monitoring to create a robust defense posture. We don't just install tools — we partner with you to build a culture of security across your organization.</p>
                <ul class="service-feature-list">
                    <li>Vulnerability assessments and penetration testing</li>
                    <li>Endpoint detection and response (EDR)</li>
                    <li>Next-generation firewall implementation</li>
                    <li>Email security and anti-phishing protection</li>
                    <li>Security awareness training for employees</li>
                    <li>Dark web monitoring for credential exposure</li>
                    <li>Incident response planning and support</li>
                </ul>
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-red">Get a Security Assessment</a>
            </div>
            <div class="service-detail-visual fade-in-right" aria-hidden="true">
                <div class="service-detail-img service-detail-img--cyber"></div>
            </div>
        </div>
    </section>

    <!-- PCI Compliance -->
    <section id="pci-compliance" class="service-detail-section service-detail-section--alt section" aria-labelledby="pci-heading">
        <div class="container service-detail-inner service-detail-inner--reverse">
            <div class="service-detail-visual fade-in-left" aria-hidden="true">
                <div class="service-detail-img service-detail-img--pci"></div>
            </div>
            <div class="service-detail-content fade-in-right">
                <div class="service-detail-icon service-detail-icon--blue">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <span class="service-detail-category">IT &amp; Managed Services</span>
                <h2 id="pci-heading" class="service-detail-title">PCI Compliance</h2>
                <p>If your business accepts credit or debit card payments, PCI DSS compliance is not optional — it's a requirement that protects your customers and shields you from significant financial and legal liability. PowerTech Group guides businesses through the PCI compliance process from initial gap assessment through remediation and ongoing maintenance.</p>
                <p>Our team understands the technical and operational requirements of PCI DSS and will translate complex requirements into practical action plans tailored to your business environment. We help you achieve and maintain compliance without disrupting your operations.</p>
                <ul class="service-feature-list">
                    <li>PCI DSS gap assessment and scoping</li>
                    <li>Network segmentation for cardholder data environments</li>
                    <li>Security policy development and documentation</li>
                    <li>Quarterly vulnerability scanning (ASV)</li>
                    <li>Penetration testing for PCI requirements</li>
                    <li>Employee training on PCI security standards</li>
                    <li>Ongoing compliance maintenance and monitoring</li>
                </ul>
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-red">Start PCI Compliance</a>
            </div>
        </div>
    </section>

</div><!-- /.services-detail-page -->

<!-- Remote Support CTA -->
<section class="support-cta-section section" aria-labelledby="support-cta-heading">
    <div class="container support-cta-inner">
        <div class="support-cta-card fade-in">
            <div class="support-cta-icon">
                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
            </div>
            <h2 id="support-cta-heading">Need Help Right Now?</h2>
            <p>Our technicians are available for remote support. Click below to start a remote support session — we'll connect to your device and resolve your issue quickly.</p>
            <a href="<?php echo pt_remote_support_url(); ?>" class="btn btn-red btn-lg" target="_blank" rel="noopener noreferrer">Launch Remote Support Session</a>
        </div>
        <div class="support-cta-card fade-in">
            <div class="support-cta-icon">
                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"/></svg>
            </div>
            <h2>Submit a Support Ticket</h2>
            <p>Not urgent? Submit a support ticket and our team will follow up promptly. Attach screenshots, error messages, or any relevant details to help us resolve your issue faster.</p>
            <a href="<?php echo pt_support_ticket_url(); ?>" class="btn btn-navy btn-lg" target="_blank" rel="noopener noreferrer">Submit a Support Ticket</a>
        </div>
    </div>
</section>

<!-- CTA Banner -->
<section class="cta-banner" aria-labelledby="it-cta-heading">
    <div class="container cta-banner-inner">
        <div class="cta-banner-content fade-in">
            <h2 id="it-cta-heading" class="cta-banner-title">Let's Build Your IT Foundation</h2>
            <p class="cta-banner-subtitle">From managed IT to cybersecurity — get a free technology assessment for your business.</p>
        </div>
        <div class="cta-banner-actions fade-in">
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-white btn-lg">Get a Free Assessment</a>
            <a href="<?php echo esc_url( pt_phone_link() ); ?>" class="btn btn-outline-light btn-lg">Call <?php echo pt_phone(); ?></a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
