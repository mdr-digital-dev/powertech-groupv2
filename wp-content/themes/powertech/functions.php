<?php
/**
 * PowerTech Group of Chicago — functions.php
 * Theme setup, menus, widget areas, custom post types, customizer options
 */

defined( 'ABSPATH' ) || exit;

/* =========================================================
   1. THEME SETUP
   ========================================================= */
function powertech_setup() {
    load_theme_textdomain( 'powertech', get_template_directory() . '/languages' );

    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script',
    ) );
    add_theme_support( 'custom-logo', array(
        'height'      => 80,
        'width'       => 240,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
    add_theme_support( 'customize-selective-refresh-widgets' );

    // Image sizes
    add_image_size( 'powertech-hero',    1920, 700,  true );
    add_image_size( 'powertech-card',     600, 400,  true );
    add_image_size( 'powertech-thumb',    400, 300,  true );
}
add_action( 'after_setup_theme', 'powertech_setup' );

/* =========================================================
   2. NAVIGATION MENUS
   ========================================================= */
function powertech_register_menus() {
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary Navigation', 'powertech' ),
        'footer'  => esc_html__( 'Footer Navigation',  'powertech' ),
    ) );
}
add_action( 'init', 'powertech_register_menus' );

/* =========================================================
   3. ENQUEUE STYLES & SCRIPTS
   ========================================================= */
function powertech_enqueue_assets() {
    $ver = wp_get_theme()->get( 'Version' );

    // Google Fonts — Inter
    wp_enqueue_style(
        'powertech-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap',
        array(),
        null
    );

    // Main stylesheet
    wp_enqueue_style(
        'powertech-main',
        get_template_directory_uri() . '/assets/css/main.css',
        array( 'powertech-google-fonts' ),
        $ver
    );

    // Responsive stylesheet
    wp_enqueue_style(
        'powertech-responsive',
        get_template_directory_uri() . '/assets/css/responsive.css',
        array( 'powertech-main' ),
        $ver
    );

    // jQuery (WordPress built-in)
    wp_enqueue_script( 'jquery' );

    // Main JS
    wp_enqueue_script(
        'powertech-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array( 'jquery' ),
        $ver,
        true
    );

    // Contact JS (only on contact page)
    if ( is_page_template( 'page-contact.php' ) || is_page( 'contact' ) ) {
        wp_enqueue_script(
            'powertech-contact',
            get_template_directory_uri() . '/assets/js/contact.js',
            array( 'jquery', 'powertech-main' ),
            $ver,
            true
        );
    }

    // Pass PHP data to JS
    wp_localize_script( 'powertech-main', 'powertechData', array(
        'ajaxUrl'   => admin_url( 'admin-ajax.php' ),
        'nonce'     => wp_create_nonce( 'powertech_nonce' ),
        'siteUrl'   => get_site_url(),
        'themeUrl'  => get_template_directory_uri(),
    ) );

    // Comments script
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'powertech_enqueue_assets' );

/* =========================================================
   4. WIDGET AREAS (SIDEBARS)
   ========================================================= */
function powertech_register_widget_areas() {
    $widget_areas = array(
        array(
            'id'          => 'sidebar-main',
            'name'        => __( 'Main Sidebar', 'powertech' ),
            'description' => __( 'Widgets in the main sidebar area.', 'powertech' ),
        ),
        array(
            'id'          => 'footer-1',
            'name'        => __( 'Footer Column 1', 'powertech' ),
            'description' => __( 'First footer widget column.', 'powertech' ),
        ),
        array(
            'id'          => 'footer-2',
            'name'        => __( 'Footer Column 2', 'powertech' ),
            'description' => __( 'Second footer widget column.', 'powertech' ),
        ),
        array(
            'id'          => 'footer-3',
            'name'        => __( 'Footer Column 3', 'powertech' ),
            'description' => __( 'Third footer widget column.', 'powertech' ),
        ),
        array(
            'id'          => 'youtube-videos',
            'name'        => __( 'YouTube Video Embeds', 'powertech' ),
            'description' => __( 'Add Custom HTML widgets with YouTube embed iframes here. Replace PLACEHOLDER in each embed URL with the real YouTube video ID.', 'powertech' ),
        ),
    );

    foreach ( $widget_areas as $area ) {
        register_sidebar( array(
            'id'            => $area['id'],
            'name'          => $area['name'],
            'description'   => $area['description'],
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ) );
    }
}
add_action( 'widgets_init', 'powertech_register_widget_areas' );

/* =========================================================
   5. CUSTOM POST TYPE: RESOURCES
   ========================================================= */
function powertech_register_resources_cpt() {
    $labels = array(
        'name'               => _x( 'Resources', 'post type general name', 'powertech' ),
        'singular_name'      => _x( 'Resource', 'post type singular name', 'powertech' ),
        'menu_name'          => _x( 'Resources', 'admin menu', 'powertech' ),
        'name_admin_bar'     => _x( 'Resource', 'add new on admin bar', 'powertech' ),
        'add_new'            => _x( 'Add New', 'resource', 'powertech' ),
        'add_new_item'       => __( 'Add New Resource', 'powertech' ),
        'new_item'           => __( 'New Resource', 'powertech' ),
        'edit_item'          => __( 'Edit Resource', 'powertech' ),
        'view_item'          => __( 'View Resource', 'powertech' ),
        'all_items'          => __( 'All Resources', 'powertech' ),
        'search_items'       => __( 'Search Resources', 'powertech' ),
        'not_found'          => __( 'No resources found.', 'powertech' ),
        'not_found_in_trash' => __( 'No resources found in Trash.', 'powertech' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'resources' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-media-document',
        'supports'           => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'excerpt' ),
        'show_in_rest'       => true,
    );

    register_post_type( 'resources', $args );
}
add_action( 'init', 'powertech_register_resources_cpt' );

/* =========================================================
   6. RESOURCE TAXONOMY: TYPE (Customer / Technician)
   ========================================================= */
function powertech_register_resource_taxonomy() {
    $labels = array(
        'name'              => _x( 'Resource Types', 'taxonomy general name', 'powertech' ),
        'singular_name'     => _x( 'Resource Type', 'taxonomy singular name', 'powertech' ),
        'search_items'      => __( 'Search Resource Types', 'powertech' ),
        'all_items'         => __( 'All Resource Types', 'powertech' ),
        'edit_item'         => __( 'Edit Resource Type', 'powertech' ),
        'update_item'       => __( 'Update Resource Type', 'powertech' ),
        'add_new_item'      => __( 'Add New Resource Type', 'powertech' ),
        'new_item_name'     => __( 'New Resource Type Name', 'powertech' ),
        'menu_name'         => __( 'Resource Types', 'powertech' ),
    );

    register_taxonomy( 'resource_type', 'resources', array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'resource-type' ),
        'show_in_rest'      => true,
    ) );
}
add_action( 'init', 'powertech_register_resource_taxonomy' );

/* =========================================================
   7. THEME CUSTOMIZER OPTIONS
   ========================================================= */
function powertech_customizer( $wp_customize ) {

    // ── SECTION: Company Info ──────────────────────────────────
    $wp_customize->add_section( 'powertech_company', array(
        'title'    => __( 'PowerTech Company Info', 'powertech' ),
        'priority' => 30,
    ) );

    // Primary Phone
    $wp_customize->add_setting( 'powertech_phone', array(
        'default'           => '800-784-1299',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ) );
    $wp_customize->add_control( 'powertech_phone', array(
        'label'   => __( 'Primary Phone Number', 'powertech' ),
        'section' => 'powertech_company',
        'type'    => 'text',
    ) );

    // Address
    $wp_customize->add_setting( 'powertech_address', array(
        'default'           => '838 S. Arthur Ave, Arlington Heights IL 60005',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ) );
    $wp_customize->add_control( 'powertech_address', array(
        'label'   => __( 'Business Address', 'powertech' ),
        'section' => 'powertech_company',
        'type'    => 'text',
    ) );

    // Google Reviews URL
    $wp_customize->add_setting( 'powertech_google_reviews_url', array(
        'default'           => 'https://maps.app.goo.gl/A7Vmisa2DgFpndBw9',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ) );
    $wp_customize->add_control( 'powertech_google_reviews_url', array(
        'label'   => __( 'Google Reviews URL', 'powertech' ),
        'section' => 'powertech_company',
        'type'    => 'url',
    ) );

    // Remote Support URL
    $wp_customize->add_setting( 'powertech_remote_support_url', array(
        'default'           => 'https://rmmus-powertechgroupofchicago.screenconnect.com/',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ) );
    $wp_customize->add_control( 'powertech_remote_support_url', array(
        'label'   => __( 'Remote Support URL', 'powertech' ),
        'section' => 'powertech_company',
        'type'    => 'url',
    ) );

    // Support Ticket URL
    $wp_customize->add_setting( 'powertech_support_ticket_url', array(
        'default'           => 'https://forms.helpdesk.com/?licenseID=1442407345&contactFormID=aa7fb6d5-30e5-407c-a66e-4efdd1d309fc',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ) );
    $wp_customize->add_control( 'powertech_support_ticket_url', array(
        'label'   => __( 'Support Ticket URL', 'powertech' ),
        'section' => 'powertech_company',
        'type'    => 'url',
    ) );

    // Facebook URL
    $wp_customize->add_setting( 'powertech_facebook_url', array(
        'default'           => 'https://www.facebook.com/pages/PowerTech-Group/483571851793477',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ) );
    $wp_customize->add_control( 'powertech_facebook_url', array(
        'label'   => __( 'Facebook URL', 'powertech' ),
        'section' => 'powertech_company',
        'type'    => 'url',
    ) );

    // LinkedIn URL
    $wp_customize->add_setting( 'powertech_linkedin_url', array(
        'default'           => 'https://www.linkedin.com/pub/mick-baran/41/987/603',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ) );
    $wp_customize->add_control( 'powertech_linkedin_url', array(
        'label'   => __( 'LinkedIn URL', 'powertech' ),
        'section' => 'powertech_company',
        'type'    => 'url',
    ) );
}
add_action( 'customize_register', 'powertech_customizer' );

/* =========================================================
   8. HELPER: Get theme mod with fallback
   ========================================================= */
function pt_mod( $key, $default = '' ) {
    return get_theme_mod( $key, $default );
}

function pt_phone() {
    return esc_html( pt_mod( 'powertech_phone', '800-784-1299' ) );
}

function pt_phone_link() {
    $phone = pt_mod( 'powertech_phone', '800-784-1299' );
    $digits = preg_replace( '/[^0-9]/', '', $phone );
    return 'tel:+1' . $digits;
}

function pt_address() {
    return esc_html( pt_mod( 'powertech_address', '838 S. Arthur Ave, Arlington Heights IL 60005' ) );
}

function pt_reviews_url() {
    return esc_url( pt_mod( 'powertech_google_reviews_url', 'https://maps.app.goo.gl/A7Vmisa2DgFpndBw9' ) );
}

function pt_remote_support_url() {
    return esc_url( pt_mod( 'powertech_remote_support_url', 'https://rmmus-powertechgroupofchicago.screenconnect.com/' ) );
}

function pt_support_ticket_url() {
    return esc_url( pt_mod( 'powertech_support_ticket_url', 'https://forms.helpdesk.com/?licenseID=1442407345&contactFormID=aa7fb6d5-30e5-407c-a66e-4efdd1d309fc' ) );
}

/* =========================================================
   9. CONTACT FORM HANDLER (AJAX + wp_mail)
   ========================================================= */
function powertech_handle_contact_form() {
    // Verify nonce
    if ( ! isset( $_POST['powertech_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['powertech_nonce'] ) ), 'powertech_contact_form' ) ) {
        wp_send_json_error( array( 'message' => 'Security check failed. Please refresh the page and try again.' ) );
    }

    // Sanitize fields
    $name    = sanitize_text_field( wp_unslash( $_POST['contact_name']    ?? '' ) );
    $company = sanitize_text_field( wp_unslash( $_POST['contact_company'] ?? '' ) );
    $phone   = sanitize_text_field( wp_unslash( $_POST['contact_phone']   ?? '' ) );
    $email   = sanitize_email(      wp_unslash( $_POST['contact_email']   ?? '' ) );
    $service = sanitize_text_field( wp_unslash( $_POST['contact_service'] ?? '' ) );
    $message = sanitize_textarea_field( wp_unslash( $_POST['contact_message'] ?? '' ) );

    if ( empty( $name ) || empty( $email ) || empty( $message ) ) {
        wp_send_json_error( array( 'message' => 'Please fill in all required fields.' ) );
    }

    if ( ! is_email( $email ) ) {
        wp_send_json_error( array( 'message' => 'Please enter a valid email address.' ) );
    }

    $to      = get_option( 'admin_email' );
    $subject = sprintf( '[PowerTech Group] New inquiry from %s', $name );
    $body    = sprintf(
        "New contact form submission:\n\nName: %s\nCompany: %s\nPhone: %s\nEmail: %s\nService Interest: %s\n\nMessage:\n%s",
        $name, $company, $phone, $email, $service, $message
    );

    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        sprintf( 'Reply-To: %s <%s>', $name, $email ),
    );

    $sent = wp_mail( $to, $subject, $body, $headers );

    if ( $sent ) {
        wp_send_json_success( array( 'message' => "Thank you, {$name}! We've received your message and will be in touch shortly." ) );
    } else {
        wp_send_json_error( array( 'message' => 'There was an error sending your message. Please call us directly at ' . pt_phone() ) );
    }
}
add_action( 'wp_ajax_powertech_contact',        'powertech_handle_contact_form' );
add_action( 'wp_ajax_nopriv_powertech_contact', 'powertech_handle_contact_form' );

/* =========================================================
   10. CUSTOM EXCERPT LENGTH
   ========================================================= */
function powertech_excerpt_length( $length ) {
    return 25;
}
add_filter( 'excerpt_length', 'powertech_excerpt_length' );

function powertech_excerpt_more( $more ) {
    return '&hellip;';
}
add_filter( 'excerpt_more', 'powertech_excerpt_more' );

/* =========================================================
   11. ADMIN: Resources meta box for file URL
   ========================================================= */
function powertech_add_resource_meta_boxes() {
    add_meta_box(
        'powertech_resource_file',
        __( 'Resource File', 'powertech' ),
        'powertech_resource_file_callback',
        'resources',
        'normal',
        'high'
    );
    add_meta_box(
        'powertech_resource_type_meta',
        __( 'Resource Audience', 'powertech' ),
        'powertech_resource_type_callback',
        'resources',
        'side',
        'default'
    );
}
add_action( 'add_meta_boxes', 'powertech_add_resource_meta_boxes' );

function powertech_resource_file_callback( $post ) {
    $file_url = get_post_meta( $post->ID, '_resource_file_url', true );
    wp_nonce_field( 'powertech_resource_meta', 'powertech_resource_nonce' );
    ?>
    <p>
        <label for="resource_file_url"><strong><?php esc_html_e( 'File URL (PDF or document link):', 'powertech' ); ?></strong></label><br>
        <input type="url" id="resource_file_url" name="resource_file_url"
               value="<?php echo esc_attr( $file_url ); ?>"
               style="width:100%;margin-top:6px;" placeholder="https://..." />
        <span style="color:#666;font-size:12px;">
            <?php esc_html_e( 'Upload the PDF via Media Library, then paste the URL here.', 'powertech' ); ?>
        </span>
    </p>
    <?php
}

function powertech_resource_type_callback( $post ) {
    $audience = get_post_meta( $post->ID, '_resource_audience', true );
    ?>
    <p>
        <label for="resource_audience"><strong><?php esc_html_e( 'Audience:', 'powertech' ); ?></strong></label><br>
        <select id="resource_audience" name="resource_audience" style="width:100%;margin-top:6px;">
            <option value="customer" <?php selected( $audience, 'customer' ); ?>><?php esc_html_e( 'Customer', 'powertech' ); ?></option>
            <option value="technician" <?php selected( $audience, 'technician' ); ?>><?php esc_html_e( 'Technician', 'powertech' ); ?></option>
            <option value="both" <?php selected( $audience, 'both' ); ?>><?php esc_html_e( 'Both', 'powertech' ); ?></option>
        </select>
    </p>
    <?php
}

function powertech_save_resource_meta( $post_id ) {
    if ( ! isset( $_POST['powertech_resource_nonce'] ) ) return;
    if ( ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['powertech_resource_nonce'] ) ), 'powertech_resource_meta' ) ) return;
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    if ( ! current_user_can( 'edit_post', $post_id ) ) return;

    if ( isset( $_POST['resource_file_url'] ) ) {
        update_post_meta( $post_id, '_resource_file_url', esc_url_raw( wp_unslash( $_POST['resource_file_url'] ) ) );
    }
    if ( isset( $_POST['resource_audience'] ) ) {
        update_post_meta( $post_id, '_resource_audience', sanitize_text_field( wp_unslash( $_POST['resource_audience'] ) ) );
    }
}
add_action( 'save_post_resources', 'powertech_save_resource_meta' );

/* =========================================================
   12. BODY CLASSES
   ========================================================= */
function powertech_body_classes( $classes ) {
    if ( is_singular() ) {
        $classes[] = 'singular';
    }
    if ( is_front_page() ) {
        $classes[] = 'home-page';
    }
    return $classes;
}
add_filter( 'body_class', 'powertech_body_classes' );

/* =========================================================
   13. SECURITY: Remove WP version from head
   ========================================================= */
remove_action( 'wp_head', 'wp_generator' );
