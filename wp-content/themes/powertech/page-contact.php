<?php
/**
 * Template Name: Contact Us
 * Template Post Type: page
 */
get_header();
?>

<!-- Interior Hero -->
<section class="hero hero--interior hero--contact" aria-labelledby="contact-hero-heading">
    <div class="hero-content">
        <div class="hero-breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
            <span aria-hidden="true"> / </span>
            <span>Contact Us</span>
        </div>
        <h1 id="contact-hero-heading" class="hero-title fade-in">Let's Talk</h1>
        <p class="hero-subtitle fade-in">Get a free security or IT assessment, request a quote, or reach out with any questions. Our team responds fast.</p>
    </div>
</section>

<!-- ════════════════════════════════════════════════════════
     CONTACT SECTION
     ════════════════════════════════════════════════════════ -->
<section class="section contact-section" aria-labelledby="contact-form-heading">
    <div class="container contact-page-inner">

        <!-- Contact Form -->
        <div class="contact-form-col fade-in-left">
            <h2 id="contact-form-heading" class="contact-form-title">Send Us a Message</h2>
            <p class="contact-form-subtitle">Fill out the form below and we'll get back to you within one business day. For urgent matters, call us directly at <a href="<?php echo esc_url( pt_phone_link() ); ?>"><?php echo pt_phone(); ?></a>.</p>

            <!-- Contact form message area (populated by JS) -->
            <div id="contact-form-message" class="contact-form-message" role="alert" aria-live="polite" style="display:none;"></div>

            <form id="contactForm" class="contact-form" novalidate>
                <?php wp_nonce_field( 'powertech_contact_form', 'powertech_nonce' ); ?>
                <input type="hidden" name="action" value="powertech_contact">

                <div class="form-row form-row--2">
                    <div class="form-group">
                        <label for="contact_name" class="form-label">Full Name <span class="required" aria-hidden="true">*</span></label>
                        <input type="text" id="contact_name" name="contact_name" class="form-input" placeholder="John Smith" required autocomplete="name">
                    </div>
                    <div class="form-group">
                        <label for="contact_company" class="form-label">Company Name</label>
                        <input type="text" id="contact_company" name="contact_company" class="form-input" placeholder="Acme Corporation" autocomplete="organization">
                    </div>
                </div>

                <div class="form-row form-row--2">
                    <div class="form-group">
                        <label for="contact_phone" class="form-label">Phone Number</label>
                        <input type="tel" id="contact_phone" name="contact_phone" class="form-input" placeholder="(555) 555-5555" autocomplete="tel">
                    </div>
                    <div class="form-group">
                        <label for="contact_email" class="form-label">Email Address <span class="required" aria-hidden="true">*</span></label>
                        <input type="email" id="contact_email" name="contact_email" class="form-input" placeholder="john@company.com" required autocomplete="email">
                    </div>
                </div>

                <div class="form-group">
                    <label for="contact_service" class="form-label">Service Interest</label>
                    <select id="contact_service" name="contact_service" class="form-select">
                        <option value="">Select a service...</option>
                        <optgroup label="Safety &amp; Security">
                            <option value="Burglar Alarm Systems">Burglar Alarm Systems</option>
                            <option value="Fire Protection">Fire Protection</option>
                            <option value="Security Cameras">Security Camera Systems</option>
                            <option value="Access Control">Access Control</option>
                        </optgroup>
                        <optgroup label="IT &amp; Managed Services">
                            <option value="Managed IT Services">Managed IT Services</option>
                            <option value="Wireless Networks">Wireless Network Infrastructure</option>
                            <option value="Cyber Security">Cyber Security</option>
                            <option value="PCI Compliance">PCI Compliance</option>
                        </optgroup>
                        <option value="General Inquiry">General Inquiry</option>
                        <option value="Support Request">Support Request</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="contact_message" class="form-label">Message <span class="required" aria-hidden="true">*</span></label>
                    <textarea id="contact_message" name="contact_message" class="form-textarea" rows="5" placeholder="Tell us about your project, facility, or questions. The more detail you provide, the better we can prepare for your consultation." required></textarea>
                </div>

                <button type="submit" class="btn btn-red btn-lg btn-submit" id="contactSubmitBtn">
                    <span class="btn-text">Send Message</span>
                    <svg class="btn-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                    <span class="btn-loading" style="display:none;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="spin" aria-hidden="true"><path d="M21 12a9 9 0 11-6.219-8.56"/></svg>
                        Sending...
                    </span>
                </button>

            </form>
        </div>

        <!-- Contact Info Sidebar -->
        <div class="contact-info-col fade-in-right">

            <div class="contact-info-card">
                <h3 class="contact-info-title">Get in Touch</h3>
                <ul class="contact-info-list">
                    <li class="contact-info-item">
                        <div class="contact-info-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 014.69 13.6 19.79 19.79 0 011.62 5.05 2 2 0 013.6 2.87h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L7.91 10a16 16 0 006.08 6.08l1.46-1.46a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/></svg>
                        </div>
                        <div class="contact-info-body">
                            <strong>Phone</strong>
                            <a href="<?php echo esc_url( pt_phone_link() ); ?>"><?php echo pt_phone(); ?></a>
                        </div>
                    </li>
                    <li class="contact-info-item">
                        <div class="contact-info-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        </div>
                        <div class="contact-info-body">
                            <strong>Address</strong>
                            <span><?php echo pt_address(); ?></span>
                        </div>
                    </li>
                    <li class="contact-info-item">
                        <div class="contact-info-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        </div>
                        <div class="contact-info-body">
                            <strong>Hours</strong>
                            <span>Mon–Fri: 8:00 AM – 5:00 PM</span>
                            <span>24/7 Emergency Response Available</span>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Remote Support / Support Ticket -->
            <div class="contact-support-cards">
                <a href="<?php echo pt_remote_support_url(); ?>" class="support-quick-card" target="_blank" rel="noopener noreferrer">
                    <div class="support-quick-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
                    </div>
                    <div>
                        <strong>Remote Support</strong>
                        <span>Start a remote support session now</span>
                    </div>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true" class="support-arrow"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </a>
                <a href="<?php echo pt_support_ticket_url(); ?>" class="support-quick-card" target="_blank" rel="noopener noreferrer">
                    <div class="support-quick-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"/></svg>
                    </div>
                    <div>
                        <strong>Support Ticket</strong>
                        <span>Submit a non-urgent support request</span>
                    </div>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true" class="support-arrow"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </a>
            </div>

            <!-- Google Map Embed Placeholder -->
            <div class="map-embed-wrapper" aria-label="Office location map">
                <!-- Replace this div with a real Google Maps embed iframe -->
                <!-- Example: <iframe src="https://www.google.com/maps/embed?pb=..." width="100%" height="300" frameborder="0" allowfullscreen loading="lazy"></iframe> -->
                <div class="map-embed-placeholder">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                    <p><strong>838 S. Arthur Ave</strong><br>Arlington Heights, IL 60005</p>
                    <a href="https://maps.google.com/?q=838+S+Arthur+Ave+Arlington+Heights+IL+60005" target="_blank" rel="noopener noreferrer" class="map-directions-link">
                        Get Directions
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
                    </a>
                </div>
            </div>

        </div>

    </div>
</section>

<?php get_footer(); ?>
