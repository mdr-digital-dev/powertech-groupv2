<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#0d1b2a">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- ════════════════════════════════════════════════════════
     SITE HEADER / NAVIGATION
     ════════════════════════════════════════════════════════ -->
<header id="navbar" class="site-header" role="banner">

    <!-- Top utility bar -->
    <div class="nav-topbar">
        <div class="container nav-topbar-inner">
            <span class="topbar-text">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                838 S. Arthur Ave, Arlington Heights IL 60005
            </span>
            <div class="topbar-right">
                <span class="topbar-badge">
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                    UL Listed
                </span>
                <span class="topbar-badge">Licensed &amp; Bonded</span>
                <span class="topbar-badge">24/7 Support</span>
            </div>
        </div>
    </div>

    <!-- Main nav bar -->
    <nav class="nav-main" role="navigation" aria-label="<?php esc_attr_e( 'Primary Navigation', 'powertech' ); ?>">
        <div class="container nav-inner">

            <!-- Logo -->
            <div class="nav-logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" aria-label="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?> — Home">
                    <?php if ( has_custom_logo() ) : ?>
                        <?php the_custom_logo(); ?>
                    <?php else : ?>
                        <div class="logo-text-fallback">
                            <span class="logo-primary">PowerTech</span>
                            <span class="logo-sub">Group of Chicago</span>
                        </div>
                    <?php endif; ?>
                </a>
            </div>

            <!-- Desktop Navigation Links -->
            <div class="nav-desktop" id="desktopNav">
                <ul class="nav-links" role="list">

                    <!-- Safety & Security (Mega Dropdown) -->
                    <li class="nav-item has-dropdown" data-dropdown="safety">
                        <a href="<?php echo esc_url( home_url( '/safety-security/' ) ); ?>" class="nav-link" aria-haspopup="true" aria-expanded="false">
                            Safety &amp; Security
                            <svg class="dropdown-arrow" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
                        </a>
                        <div class="dropdown-menu mega-menu" role="menu" aria-label="Safety &amp; Security submenu">
                            <div class="mega-menu-inner">
                                <div class="mega-menu-group">
                                    <p class="mega-menu-label">Our Safety Services</p>
                                    <a href="<?php echo esc_url( home_url( '/safety-security/#burglar-alarm' ) ); ?>" class="mega-menu-item" role="menuitem">
                                        <span class="mega-icon">
                                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M18 8h1a4 4 0 010 8h-1"/><path d="M2 8h16v9a4 4 0 01-4 4H6a4 4 0 01-4-4V8z"/><line x1="6" y1="1" x2="6" y2="4"/><line x1="10" y1="1" x2="10" y2="4"/><line x1="14" y1="1" x2="14" y2="4"/></svg>
                                        </span>
                                        <span class="mega-text">
                                            <strong>Burglar Alarm</strong>
                                            <span>Commercial intrusion detection</span>
                                        </span>
                                    </a>
                                    <a href="<?php echo esc_url( home_url( '/safety-security/#fire-protection' ) ); ?>" class="mega-menu-item" role="menuitem">
                                        <span class="mega-icon">
                                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M8.5 14.5A2.5 2.5 0 0011 12c0-1.38-.5-2-1-3-1.072-2.143-.224-4.054 2-6 .5 2.5 2 4.9 4 6.5 2 1.6 3 3.5 3 5.5a7 7 0 11-14 0c0-1.153.433-2.294 1-3a2.5 2.5 0 002.5 2.5z"/></svg>
                                        </span>
                                        <span class="mega-text">
                                            <strong>Fire Protection</strong>
                                            <span>UL Listed fire alarm systems</span>
                                        </span>
                                    </a>
                                    <a href="<?php echo esc_url( home_url( '/safety-security/#security-cameras' ) ); ?>" class="mega-menu-item" role="menuitem">
                                        <span class="mega-icon">
                                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M23 7l-7 5 7 5V7z"/><rect x="1" y="5" width="15" height="14" rx="2" ry="2"/></svg>
                                        </span>
                                        <span class="mega-text">
                                            <strong>Security Cameras</strong>
                                            <span>IP &amp; analog surveillance systems</span>
                                        </span>
                                    </a>
                                    <a href="<?php echo esc_url( home_url( '/safety-security/#access-control' ) ); ?>" class="mega-menu-item" role="menuitem">
                                        <span class="mega-icon">
                                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>
                                        </span>
                                        <span class="mega-text">
                                            <strong>Access Control</strong>
                                            <span>Keycard, fob &amp; biometric entry</span>
                                        </span>
                                    </a>
                                </div>
                                <div class="mega-menu-cta">
                                    <p>Need a safety assessment?</p>
                                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-red btn-sm">Get a Free Quote</a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- IT Services (Mega Dropdown) -->
                    <li class="nav-item has-dropdown" data-dropdown="it">
                        <a href="<?php echo esc_url( home_url( '/it-services/' ) ); ?>" class="nav-link" aria-haspopup="true" aria-expanded="false">
                            IT Services
                            <svg class="dropdown-arrow" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
                        </a>
                        <div class="dropdown-menu mega-menu" role="menu" aria-label="IT Services submenu">
                            <div class="mega-menu-inner">
                                <div class="mega-menu-group">
                                    <p class="mega-menu-label">Our IT Services</p>
                                    <a href="<?php echo esc_url( home_url( '/it-services/#managed-it' ) ); ?>" class="mega-menu-item" role="menuitem">
                                        <span class="mega-icon">
                                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
                                        </span>
                                        <span class="mega-text">
                                            <strong>Managed IT Services</strong>
                                            <span>Proactive IT management &amp; support</span>
                                        </span>
                                    </a>
                                    <a href="<?php echo esc_url( home_url( '/it-services/#wireless-network' ) ); ?>" class="mega-menu-item" role="menuitem">
                                        <span class="mega-icon">
                                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12.55a11 11 0 0114.08 0"/><path d="M1.42 9a16 16 0 0121.16 0"/><path d="M8.53 16.11a6 6 0 016.95 0"/><line x1="12" y1="20" x2="12.01" y2="20"/></svg>
                                        </span>
                                        <span class="mega-text">
                                            <strong>Wireless Networks</strong>
                                            <span>Enterprise WiFi infrastructure</span>
                                        </span>
                                    </a>
                                    <a href="<?php echo esc_url( home_url( '/it-services/#cyber-security' ) ); ?>" class="mega-menu-item" role="menuitem">
                                        <span class="mega-icon">
                                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                                        </span>
                                        <span class="mega-text">
                                            <strong>Cyber Security</strong>
                                            <span>Threat protection &amp; monitoring</span>
                                        </span>
                                    </a>
                                    <a href="<?php echo esc_url( home_url( '/it-services/#pci-compliance' ) ); ?>" class="mega-menu-item" role="menuitem">
                                        <span class="mega-icon">
                                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                                        </span>
                                        <span class="mega-text">
                                            <strong>PCI Compliance</strong>
                                            <span>Payment security standards</span>
                                        </span>
                                    </a>
                                </div>
                                <div class="mega-menu-cta">
                                    <p>Need IT support now?</p>
                                    <a href="<?php echo esc_url( pt_remote_support_url() ); ?>" class="btn btn-red btn-sm" target="_blank" rel="noopener noreferrer">Remote Support</a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- Resources (Dropdown) -->
                    <li class="nav-item has-dropdown" data-dropdown="resources">
                        <a href="<?php echo esc_url( home_url( '/resources/' ) ); ?>" class="nav-link" aria-haspopup="true" aria-expanded="false">
                            Resources
                            <svg class="dropdown-arrow" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
                        </a>
                        <div class="dropdown-menu" role="menu" aria-label="Resources submenu">
                            <a href="<?php echo esc_url( home_url( '/resources/#customer-manuals' ) ); ?>" class="dropdown-item" role="menuitem">Customer Manuals</a>
                            <a href="<?php echo esc_url( home_url( '/resources/#technician-resources' ) ); ?>" class="dropdown-item" role="menuitem">Technician Resources</a>
                            <a href="<?php echo esc_url( home_url( '/resources/#job-videos' ) ); ?>" class="dropdown-item" role="menuitem">Job Videos</a>
                        </div>
                    </li>

                    <!-- About -->
                    <li class="nav-item">
                        <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="nav-link">About PTG</a>
                    </li>

                    <!-- Contact -->
                    <li class="nav-item">
                        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="nav-link">Contact Us</a>
                    </li>

                </ul>
            </div>

            <!-- Nav right: Phone + CTA -->
            <div class="nav-actions">
                <a href="<?php echo esc_url( pt_phone_link() ); ?>" class="nav-phone" aria-label="Call PowerTech Group">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 014.69 13.6 19.79 19.79 0 011.62 5.05 2 2 0 013.6 2.87h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L7.91 10a16 16 0 006.08 6.08l1.46-1.46a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/></svg>
                    <?php echo pt_phone(); ?>
                </a>
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-red nav-quote-btn">Get a Quote</a>
            </div>

            <!-- Hamburger (mobile) -->
            <button id="hamburger" class="hamburger" aria-label="Toggle mobile menu" aria-expanded="false" aria-controls="mobileMenu">
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
            </button>

        </div><!-- /.nav-inner -->
    </nav><!-- /.nav-main -->

    <!-- ── MOBILE MENU ──────────────────────────────────────── -->
    <div id="mobileMenu" class="mobile-menu" role="dialog" aria-label="Mobile navigation" aria-modal="true">
        <div class="mobile-menu-header">
            <div class="logo-text-fallback">
                <span class="logo-primary">PowerTech</span>
                <span class="logo-sub">Group of Chicago</span>
            </div>
            <button id="mobileMenuClose" class="mobile-close-btn" aria-label="Close mobile menu">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
            </button>
        </div>

        <nav class="mobile-nav" aria-label="Mobile Navigation">
            <ul class="mobile-nav-list" role="list">

                <li class="mobile-nav-item" data-has-submenu>
                    <button class="mobile-nav-link mobile-toggle" aria-expanded="false">
                        Safety &amp; Security
                        <svg class="mobile-arrow" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
                    </button>
                    <ul class="mobile-submenu" role="list">
                        <li><a href="<?php echo esc_url( home_url( '/safety-security/#burglar-alarm' ) ); ?>" class="mobile-sub-link">Burglar Alarm</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/safety-security/#fire-protection' ) ); ?>" class="mobile-sub-link">Fire Protection</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/safety-security/#security-cameras' ) ); ?>" class="mobile-sub-link">Security Cameras</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/safety-security/#access-control' ) ); ?>" class="mobile-sub-link">Access Control</a></li>
                    </ul>
                </li>

                <li class="mobile-nav-item" data-has-submenu>
                    <button class="mobile-nav-link mobile-toggle" aria-expanded="false">
                        IT Services
                        <svg class="mobile-arrow" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
                    </button>
                    <ul class="mobile-submenu" role="list">
                        <li><a href="<?php echo esc_url( home_url( '/it-services/#managed-it' ) ); ?>" class="mobile-sub-link">Managed IT Services</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/it-services/#wireless-network' ) ); ?>" class="mobile-sub-link">Wireless Networks</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/it-services/#cyber-security' ) ); ?>" class="mobile-sub-link">Cyber Security</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/it-services/#pci-compliance' ) ); ?>" class="mobile-sub-link">PCI Compliance</a></li>
                    </ul>
                </li>

                <li class="mobile-nav-item" data-has-submenu>
                    <button class="mobile-nav-link mobile-toggle" aria-expanded="false">
                        Resources
                        <svg class="mobile-arrow" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
                    </button>
                    <ul class="mobile-submenu" role="list">
                        <li><a href="<?php echo esc_url( home_url( '/resources/#customer-manuals' ) ); ?>" class="mobile-sub-link">Customer Manuals</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/resources/#technician-resources' ) ); ?>" class="mobile-sub-link">Technician Resources</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/resources/#job-videos' ) ); ?>" class="mobile-sub-link">Job Videos</a></li>
                    </ul>
                </li>

                <li class="mobile-nav-item">
                    <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="mobile-nav-link">About PTG</a>
                </li>

                <li class="mobile-nav-item">
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="mobile-nav-link">Contact Us</a>
                </li>

            </ul>
        </nav>

        <div class="mobile-menu-footer">
            <a href="<?php echo esc_url( pt_phone_link() ); ?>" class="btn btn-red btn-full">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 014.69 13.6 19.79 19.79 0 011.62 5.05 2 2 0 013.6 2.87h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L7.91 10a16 16 0 006.08 6.08l1.46-1.46a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/></svg>
                Call <?php echo pt_phone(); ?>
            </a>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-outline-light btn-full">Get a Free Quote</a>
        </div>
    </div><!-- /#mobileMenu -->

    <!-- Mobile overlay -->
    <div id="mobileOverlay" class="mobile-overlay" aria-hidden="true"></div>

</header><!-- /#navbar -->

<div id="page" class="site">
<a class="skip-link screen-reader-text" href="#main-content"><?php esc_html_e( 'Skip to content', 'powertech' ); ?></a>
<main id="main-content" class="site-main" tabindex="-1">
