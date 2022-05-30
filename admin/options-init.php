<?php
/**
 * ReduxFramework Sample Config File
 * For full documentation, please visit: http://docs.reduxframework.com/
 */

if ( ! class_exists( 'Redux' ) ) {
    return;
}


// This is your option name where all the Redux data is stored.
$opt_name = "awakening_hosting";

// This line is only for altering the demo. Can be easily removed.
$opt_name = apply_filters( 'awakening_hosting/opt_name', $opt_name );

/*
 *
 * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
 *
 */

$sampleHTML = '';
if ( file_exists( dirname( __FILE__ ) . '/info-html.html' ) ) {
    Redux_Functions::initWpFilesystem();

    global $wp_filesystem;

    $sampleHTML = $wp_filesystem->get_contents( dirname( __FILE__ ) . '/info-html.html' );
}

// Background Patterns Reader
$sample_patterns_path = ReduxFramework::$_dir . '../sample/patterns/';
$sample_patterns_url  = ReduxFramework::$_url . '../sample/patterns/';
$sample_patterns      = array();

if ( is_dir( $sample_patterns_path ) ) {

    if ( $sample_patterns_dir = opendir( $sample_patterns_path ) ) {
        $sample_patterns = array();

        while ( ( $sample_patterns_file = readdir( $sample_patterns_dir ) ) !== false ) {

            if ( stristr( $sample_patterns_file, '.png' ) !== false || stristr( $sample_patterns_file, '.jpg' ) !== false ) {
                $name              = explode( '.', $sample_patterns_file );
                $name              = str_replace( '.' . end( $name ), '', $sample_patterns_file );
                $sample_patterns[] = array(
                    'alt' => $name,
                    'img' => $sample_patterns_url . $sample_patterns_file
                );
            }
        }
    }
}

/**
 * ---> SET ARGUMENTS
 * All the possible arguments for Redux.
 * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
 * */

$theme = wp_get_theme(); // For use with some settings. Not necessary.

$args = array(
    // TYPICAL -> Change these values as you need/desire
    'opt_name'             => $opt_name,
    // This is where your data is stored in the database and also becomes your global variable name.
    'display_name'         => $theme->get( 'Name' ),
    // Name that appears at the top of your panel
    'display_version'      => $theme->get( 'Version' ),
    // Version that appears at the top of your panel
    'menu_type'            => 'menu',
    //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
    'allow_sub_menu'       => true,
    // Show the sections below the admin menu item or not
    'menu_title'           => __( 'Theme Options', 'awakening_hosting' ),
    'page_title'           => __( 'Theme Options', 'awakening_hosting' ),
    // You will need to generate a Google API key to use this feature.
    // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
    'google_api_key'       => '',
    // Set it you want google fonts to update weekly. A google_api_key value is required.
    'google_update_weekly' => false,
    // Must be defined to add google fonts to the typography module
    'async_typography'     => false,
    // Use a asynchronous font on the front end or font string
    //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
    'admin_bar'            => true,
    // Show the panel pages on the admin bar
    'admin_bar_icon'       => 'dashicons-portfolio',
    // Choose an icon for the admin bar menu
    'admin_bar_priority'   => 50,
    // Choose an priority for the admin bar menu
    'global_variable'      => '',
    // Set a different name for your global variable other than the opt_name
    'dev_mode'             => true,
    // Show the time the page took to load, etc
    'update_notice'        => true,
    // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
    'customizer'           => true,
    // Enable basic customizer support
    //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
    //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

    // OPTIONAL -> Give you extra features
    'page_priority'        => null,
    // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
    'page_parent'          => 'themes.php',
    // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
    'page_permissions'     => 'manage_options',
    // Permissions needed to access the options panel.
    'menu_icon'            => '',
    // Specify a custom URL to an icon
    'last_tab'             => '',
    // Force your panel to always open to a specific tab (by id)
    'page_icon'            => 'icon-themes',
    // Icon displayed in the admin panel next to your menu_title
    'page_slug'            => 'awakening_hosting',
    // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
    'save_defaults'        => true,
    // On load save the defaults to DB before user clicks save or not
    'default_show'         => false,
    // If true, shows the default value next to each field that is not the default value.
    'default_mark'         => '',
    // What to print by the field's title if the value shown is default. Suggested: *
    'show_import_export'   => true,
    // Shows the Import/Export panel when not used as a field.

    // CAREFUL -> These options are for advanced use only
    'transient_time'       => 60 * MINUTE_IN_SECONDS,
    'output'               => true,
    // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
    'output_tag'           => true,
    // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
    // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

    // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
    'database'             => '',
    // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
    'use_cdn'              => true,
    // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

    // HINTS
    'hints'                => array(
        'icon'          => 'el el-question-sign',
        'icon_position' => 'right',
        'icon_color'    => 'lightgray',
        'icon_size'     => 'normal',
        'tip_style'     => array(
            'color'   => 'red',
            'shadow'  => true,
            'rounded' => false,
            'style'   => '',
        ),
        'tip_position'  => array(
            'my' => 'top left',
            'at' => 'bottom right',
        ),
        'tip_effect'    => array(
            'show' => array(
                'effect'   => 'slide',
                'duration' => '500',
                'event'    => 'mouseover',
            ),
            'hide' => array(
                'effect'   => 'slide',
                'duration' => '500',
                'event'    => 'click mouseleave',
            ),
        ),
    )
);

// ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
$args['admin_bar_links'][] = array(
    'id'    => 'redux-docs',
    'href'  => 'http://docs.reduxframework.com/',
    'title' => __( 'Documentation', 'awakening_hosting' ),
);

$args['admin_bar_links'][] = array(
    //'id'    => 'redux-support',
    'href'  => 'https://github.com/ReduxFramework/redux-framework/issues',
    'title' => __( 'Support', 'awakening_hosting' ),
);

$args['admin_bar_links'][] = array(
    'id'    => 'redux-extensions',
    'href'  => 'reduxframework.com/extensions',
    'title' => __( 'Extensions', 'awakening_hosting' ),
);

// SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
$args['share_icons'][] = array(
    'url'   => 'https://github.com/ReduxFramework/ReduxFramework',
    'title' => 'Visit us on GitHub',
    'icon'  => 'el el-github'
    //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
);
$args['share_icons'][] = array(
    'url'   => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
    'title' => 'Like us on Facebook',
    'icon'  => 'el el-facebook'
);
$args['share_icons'][] = array(
    'url'   => 'http://twitter.com/reduxframework',
    'title' => 'Follow us on Twitter',
    'icon'  => 'el el-twitter'
);
$args['share_icons'][] = array(
    'url'   => 'http://www.linkedin.com/company/redux-framework',
    'title' => 'Find us on LinkedIn',
    'icon'  => 'el el-linkedin'
);

// Panel Intro text -> before the form
if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
    if ( ! empty( $args['global_variable'] ) ) {
        $v = $args['global_variable'];
    } else {
        $v = str_replace( '-', '_', $args['opt_name'] );
    }
    $args['intro_text'] = sprintf( __( '<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'awakening_hosting' ), $v );
} else {
    $args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'awakening_hosting' );
}

// Add content after the form.
$args['footer_text'] = __( '<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>', 'awakening_hosting' );

Redux::setArgs( $opt_name, $args );

/*
 * ---> END ARGUMENTS
 */


/*
 * ---> START HELP TABS
 */

$tabs = array(
    array(
        'id'      => 'redux-help-tab-1',
        'title'   => __( 'Theme Information 1', 'awakening_hosting' ),
        'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'awakening_hosting' )
    ),
    array(
        'id'      => 'redux-help-tab-2',
        'title'   => __( 'Theme Information 2', 'awakening_hosting' ),
        'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'awakening_hosting' )
    )
);
Redux::setHelpTab( $opt_name, $tabs );

// Set the help sidebar
$content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'awakening_hosting' );
Redux::setHelpSidebar( $opt_name, $content );


/*
 * <--- END HELP TABS
 */


/*
     *
     * ---> START SECTIONS
     *
     */

Redux::setSection( $opt_name, array(
    'title'  => __( 'General Settings', 'awakening_hosting' ),
    'id'     => 'general-settings',
    'desc'   => __( 'General settings for this theme.', 'awakening_hosting' ),
    'icon'   => 'el el-cog',
    'fields' => array(
        array(
            'id'       => 'opt-favicon',
            'type'     => 'media',
            'url'      => true,
            'title'    => __('Your Site Favicon', 'awakening_hosting'),
            'desc'     => __('', 'awakening_hosting'),
            'subtitle' => __('', 'awakening_hosting'),
            'default'  => array(
                'url'=>''
            ),
        ),
        array(
            'id'=>'opt-textarea',
            'type' => 'textarea',
            'title' => __('Google Analytics', 'awakening_hosting'),
            'subtitle' => __('Please enter in your google analytics tracking code here. 
Remember to include the entire script from google, if you just enter your tracking ID it won\'t work.', 'awakening_hosting')
        ),
        array(
            'id'       => 'custom-css',
            'type'     => 'ace_editor',
            'title'    => __('Custom CSS Code', 'awakening_hosting'),
            'subtitle' => __('If you have any custom CSS you would like added to the site, please enter it here.', 'awakening_hosting'),
            'mode'     => 'css',
            'theme'    => 'monokai',
            'desc'     => '',
            'default'  => ""
        ),
        array(
            'id'       => 'custom-js',
            'type'     => 'ace_editor',
            'title'    => __('Custom JS Code', 'awakening_hosting'),
            'subtitle' => __('If you have any custom JS you would like added to the site, please enter it here.', 'awakening_hosting'),
            'mode'     => 'javascript',
            'theme'    => 'monokai',
            'desc'     => '',
            'default'  => ""
        ),
        array(
            'id'       => 'h1-title-fontsize',
            'type'     => 'text',
            'title'    => __( 'H1 Font Size', 'awakening_hosting' )
        ),
        array(
            'id'       => 'h2-title-fontsize',
            'type'     => 'text',
            'title'    => __( 'H2 Font Size', 'awakening_hosting' )
        ),
        array(
            'id'       => 'h3-title-fontsize',
            'type'     => 'text',
            'title'    => __( 'H3 Font Size', 'awakening_hosting' )
        ),
    )
) );

Redux::setSection( $opt_name, array(
    'title' => __( 'Header Section', 'awakening_hosting' ),
    'id'    => 'header-section-settings',
    'desc'  => __( 'Header Section Settings.', 'awakening_hosting' ),
    'icon'  => 'el el-lines',
    'fields' => array(
        array(
            'id'       => 'opt-site-logo',
            'type'     => 'media',
            'url'      => true,
            'title'    => __('Your Site Logo', 'awakening_hosting'),
            'desc'     => __('', 'awakening_hosting'),
            'subtitle' => __('', 'awakening_hosting'),
            'default'  => array(
                'url'=>''
            ),
        ),
        array(
            'id'       => 'site-title',
            'type'     => 'text',
            'title'    => __( 'Site title', 'awakening_hosting' )
        ),
        array(
            'id'       => 'site-slogan',
            'type'     => 'text',
            'title'    => __( 'Site slogan', 'awakening_hosting' )
        ),
        array(
            'id' => 'disable-language-switch',
            'type' => 'switch',
            'title' => __('Remove multi language option', 'awakening_hosting'),
            'subtitle' => __('Active to remove the language switch functionality from your header', 'awakening_hosting'),
            'desc' => '',
            'default' => '0'
        ),
    )
) );

Redux::setSection( $opt_name, array(
    'title' => __( 'Home Page Settings', 'awakening_hosting' ),
    'id'    => 'home-page-settings',
    'desc'  => __( 'Home Page Settings.', 'awakening_hosting' ),
    'icon'  => 'el el-home'
) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Order Home Sections', 'awakening_hosting' ),
        'desc'       => __( 'Define and reorder these however you want. ', 'awakening_hosting' ),
        'id'         => 'opt-order-section',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'order-section',
                'type'     => 'sortable',
                'title'    => __('Order Sections', 'awakening_hosting'),
                'subtitle' => __('Drag Drop Reorder From Here.', 'awakening_hosting'),
                'mode'     => 'text',
                'options' => array(
                    'about-us' => 'About Us',
                    'the-team' => 'The Team',
                    'our-services' => 'Our Service',
                    'packages' => 'Pricing Table',
                    'register-domain' => 'Register Domain',
                    'need-help' => 'Need Help',
                    'latest-news' => 'Latest News',
                    'subscription-section' => 'Subscription section',
                ),
            ),
        )
    ) );

Redux::setSection( $opt_name, array(
    'title'      => __( 'Hero Banner', 'awakening_hosting' ),
    'desc'       => __( 'All information about banner section ', 'awakening_hosting' ),
    'id'         => 'opt-hero-banner',
    'subsection' => true,
    'fields'     => array(
        array(
            'id' => 'show-hide-hero-banner',
            'type' => 'switch',
            'title' => __('Show/Hide Hero Banner', 'awakening_hosting'),
            'desc' => '',
            'default' => '1'
        ),
        array(
            'id'       => 'banner-image',
            'type'     => 'media',
            'title'    => __( 'Upload banner image', 'awakening_hosting' )
        ),
        array(
            'id'       => 'banner-heading',
            'type'     => 'text',
            'title'    => __( 'Heading', 'awakening_hosting' )
        ),
        array(
            'id'       => 'banner-sub-heading',
            'type'     => 'text',
            'title'    => __( 'Sub Heading', 'awakening_hosting' )
        ),
        array(
            'id'       => 'banner-button-text',
            'type'     => 'text',
            'title'    => __( 'Button Text', 'awakening_hosting' )
        ),
        array(
            'id'       => 'banner-button-url',
            'type'     => 'text',
            'title'    => __( 'Button Url', 'awakening_hosting' )
        ),
    )
) );

Redux::setSection( $opt_name, array(
    'title'      => __( 'About Us', 'awakening_hosting' ),
    'desc'       => __( 'All information related about us', 'awakening_hosting' ),
    'id'         => 'opt-about-us',
    'subsection' => true,
    'fields'     => array(
        array(
            'id' => 'show-hide-about-us',
            'type' => 'switch',
            'title' => __('Show/Hide About Us Section', 'awakening_hosting'),
            'desc' => '',
            'default' => '1'
        ),
        array(
            'id'       => 'about-us-icon',
            'type'     => 'media',
            'title'    => __( 'Author Icon', 'awakening_hosting' )
        ),
        array(
            'id'       => 'about-us-image',
            'type'     => 'media',
            'title'    => __( 'Author Image', 'awakening_hosting' )
        ),
        array(
            'id'       => 'author-name',
            'type'     => 'text',
            'title'    => __( 'Author Name', 'awakening_hosting' )
        ),
        array(
            'id'       => 'author-designation',
            'type'     => 'text',
            'title'    => __( 'Author Designation', 'awakening_hosting' )
        ),
        array(
            'id'       => 'about-us-heading',
            'type'     => 'text',
            'title'    => __( 'Heading', 'awakening_hosting' )
        ),
        array(
            'id'               => 'about-us-content',
            'type'             => 'editor',
            'title'            => __('Description', 'awakening_hosting'),
            'subtitle'         => __('About us details.', 'awakening_hosting'),
            'args'   => array(
                'teeny'            => true,
                'textarea_rows'    => 10
            )
        ),
        array(
            'id'       => 'about-us-button-text',
            'type'     => 'text',
            'title'    => __( 'Button Text', 'awakening_hosting' )
        ),
        array(
            'id'       => 'about-us-button-url',
            'type'     => 'text',
            'title'    => __( 'Button Url', 'awakening_hosting' )
        ),
        array(
            'id'       => 'author-facebook-url',
            'type'     => 'text',
            'title'    => __( 'Author Facebook Url', 'awakening_hosting' )
        ),
        array(
            'id'       => 'author-twitter-url',
            'type'     => 'text',
            'title'    => __( 'Author Twitter Url', 'awakening_hosting' )
        ),
        array(
            'id'       => 'author-linkedin-url',
            'type'     => 'text',
            'title'    => __( 'Author LinkedIn Url', 'awakening_hosting' )
        ),
        array(
            'id'       => 'author-instagram-url',
            'type'     => 'text',
            'title'    => __( 'Author Instagram Url', 'awakening_hosting' )
        ),
        array(
            'id'       => 'author-blog-url',
            'type'     => 'text',
            'title'    => __( 'Author Blog Url', 'awakening_hosting' )
        )
    )
) );

Redux::setSection( $opt_name, array(
    'title'      => __( 'The Team', 'awakening_hosting' ),
    'desc'       => __( 'All information about team', 'awakening_hosting' ),
    'id'         => 'opt-team',
    'subsection' => true,
    'fields'     => array(
        array(
            'id' => 'show-hide-team',
            'type' => 'switch',
            'title' => __('Show/Hide Team Section', 'awakening_hosting'),
            'desc' => '',
            'default' => '1'
        ),
        array(
            'id'       => 'num-of-team-member',
            'type'     => 'text',
            'title'    => __( 'Show Number Of Team Member', 'awakening_hosting' )
        ),
        array(
            'id'       => 'team-icon',
            'type'     => 'media',
            'title'    => __( 'Team Icon', 'awakening_hosting' )
        ),
        array(
            'id'       => 'team-heading',
            'type'     => 'text',
            'title'    => __( 'Heading', 'awakening_hosting' )
        ),
        array(
            'id'               => 'team-content',
            'type'             => 'editor',
            'title'            => __('Description', 'awakening_hosting'),
            'subtitle'         => __('Team content.', 'awakening_hosting'),
            'args'   => array(
                'teeny'            => true,
                'textarea_rows'    => 10
            )
        ),
        array(
            'id'               => 'team-content',
            'type'             => 'editor',
            'title'            => __('Description', 'awakening_hosting'),
            'subtitle'         => __('Team content.', 'awakening_hosting'),
            'args'   => array(
                'teeny'            => true,
                'textarea_rows'    => 10
            )
        ),
        array(
            'id'       => 'team-member-one-image',
            'type'     => 'media',
            'title'    => __( 'Team First Member Image', 'awakening_hosting' )
        ),
        array(
            'id'       => 'team-member-one-name',
            'type'     => 'text',
            'title'    => __( 'Team First Member Name', 'awakening_hosting' )
        ),
        array(
            'id'       => 'team-member-one-designation',
            'type'     => 'text',
            'title'    => __( 'Team First Member Designation', 'awakening_hosting' )
        ),
        array(
            'id'       => 'team-member-one-facebook-url',
            'type'     => 'text',
            'title'    => __( 'Team First Member Facebook Url', 'awakening_hosting' )
        ),
        array(
            'id'       => 'team-member-one-twitter-url',
            'type'     => 'text',
            'title'    => __( 'Team First Member Twitter Url', 'awakening_hosting' )
        ),
        array(
            'id'       => 'team-member-one-linkedin-url',
            'type'     => 'text',
            'title'    => __( 'Team First Member LinkedIn Url', 'awakening_hosting' )
        ),
        array(
            'id'       => 'team-member-one-instagram-url',
            'type'     => 'text',
            'title'    => __( 'Team First Member Instagram Url', 'awakening_hosting' )
        ),
        array(
            'id'       => 'team-member-one-blog-url',
            'type'     => 'text',
            'title'    => __( 'Team First Member Blog Url', 'awakening_hosting' )
        ),
        array(
            'id'       => 'team-member-two-image',
            'type'     => 'media',
            'title'    => __( 'Team Second Member Image', 'awakening_hosting' )
        ),
        array(
            'id'       => 'team-member-two-name',
            'type'     => 'text',
            'title'    => __( 'Team Second Member Name', 'awakening_hosting' )
        ),
        array(
            'id'       => 'team-member-two-designation',
            'type'     => 'text',
            'title'    => __( 'Team Second Member Designation', 'awakening_hosting' )
        ),
        array(
            'id'       => 'team-member-two-facebook-url',
            'type'     => 'text',
            'title'    => __( 'Team Second Member Facebook Url', 'awakening_hosting' )
        ),
        array(
            'id'       => 'team-member-two-twitter-url',
            'type'     => 'text',
            'title'    => __( 'Team Second Member Twitter Url', 'awakening_hosting' )
        ),
        array(
            'id'       => 'team-member-two-linkedin-url',
            'type'     => 'text',
            'title'    => __( 'Team Second Member LinkedIn Url', 'awakening_hosting' )
        ),
        array(
            'id'       => 'team-member-two-instagram-url',
            'type'     => 'text',
            'title'    => __( 'Team Second Member Instagram Url', 'awakening_hosting' )
        ),
        array(
            'id'       => 'team-member-two-blog-url',
            'type'     => 'text',
            'title'    => __( 'Team Second Member Blog Url', 'awakening_hosting' )
        ),
        array(
            'id'       => 'team-member-three-image',
            'type'     => 'media',
            'title'    => __( 'Team Third Member Image', 'awakening_hosting' )
        ),
        array(
            'id'       => 'team-member-three-name',
            'type'     => 'text',
            'title'    => __( 'Team Third Member Name', 'awakening_hosting' )
        ),
        array(
            'id'       => 'team-member-three-designation',
            'type'     => 'text',
            'title'    => __( 'Team Third Member Designation', 'awakening_hosting' )
        ),
        array(
            'id'       => 'team-member-three-facebook-url',
            'type'     => 'text',
            'title'    => __( 'Team Third Member Facebook Url', 'awakening_hosting' )
        ),
        array(
            'id'       => 'team-member-three-twitter-url',
            'type'     => 'text',
            'title'    => __( 'Team Third Member Twitter Url', 'awakening_hosting' )
        ),
        array(
            'id'       => 'team-member-three-linkedin-url',
            'type'     => 'text',
            'title'    => __( 'Team Third Member LinkedIn Url', 'awakening_hosting' )
        ),
        array(
            'id'       => 'team-member-three-instagram-url',
            'type'     => 'text',
            'title'    => __( 'Team Third Member Instagram Url', 'awakening_hosting' )
        ),
        array(
            'id'       => 'team-member-three-blog-url',
            'type'     => 'text',
            'title'    => __( 'Team Third Member Blog Url', 'awakening_hosting' )
        ),
        array(
            'id'       => 'team-member-four-image',
            'type'     => 'media',
            'title'    => __( 'Team Fourth Member Image', 'awakening_hosting' )
        ),
        array(
            'id'       => 'team-member-four-name',
            'type'     => 'text',
            'title'    => __( 'Team Fourth Member Name', 'awakening_hosting' )
        ),
        array(
            'id'       => 'team-member-four-designation',
            'type'     => 'text',
            'title'    => __( 'Team Fourth Member Designation', 'awakening_hosting' )
        ),
        array(
            'id'       => 'team-member-four-facebook-url',
            'type'     => 'text',
            'title'    => __( 'Team Fourth Member Facebook Url', 'awakening_hosting' )
        ),
        array(
            'id'       => 'team-member-four-twitter-url',
            'type'     => 'text',
            'title'    => __( 'Team Fourth Member Twitter Url', 'awakening_hosting' )
        ),
        array(
            'id'       => 'team-member-four-linkedin-url',
            'type'     => 'text',
            'title'    => __( 'Team Fourth Member LinkedIn Url', 'awakening_hosting' )
        ),
        array(
            'id'       => 'team-member-four-instagram-url',
            'type'     => 'text',
            'title'    => __( 'Team Fourth Member Instagram Url', 'awakening_hosting' )
        ),
        array(
            'id'       => 'team-member-four-blog-url',
            'type'     => 'text',
            'title'    => __( 'Team Fourth Member Blog Url', 'awakening_hosting' )
        ),
    )
) );

Redux::setSection( $opt_name, array(
    'title'      => __( 'Our Services', 'awakening_hosting' ),
    'desc'       => __( 'All information about our services', 'awakening_hosting' ),
    'id'         => 'opt-services',
    'subsection' => true,
    'fields'     => array(
        array(
            'id' => 'show-hide-our-service',
            'type' => 'switch',
            'title' => __('Show/Hide Service Section', 'awakening_hosting'),
            'desc' => '',
            'default' => '1'
        ),
        array(
            'id'       => 'service-icon',
            'type'     => 'media',
            'title'    => __( 'Service Icon', 'awakening_hosting' )
        ),
        array(
            'id'       => 'service-heading',
            'type'     => 'text',
            'title'    => __( 'Heading', 'awakening_hosting' )
        ),
        array(
            'id'               => 'service-content',
            'type'             => 'editor',
            'title'            => __('Description', 'awakening_hosting'),
            'subtitle'         => __('Service content.', 'awakening_hosting'),
            'args'   => array(
                'teeny'            => true,
                'textarea_rows'    => 10
            )
        ),
        array(
            'id'       => 'service-one-class-name',
            'type'     => 'text',
            'title'    => __( 'Service One Class Name', 'awakening_hosting' )
        ),
        array(
            'id'       => 'service-one-image',
            'type'     => 'media',
            'title'    => __( 'Service One Image', 'awakening_hosting' )
        ),
        array(
            'id'       => 'service-one-title',
            'type'     => 'text',
            'title'    => __( 'Service One Title', 'awakening_hosting' )
        ),
        array(
            'id'       => 'service-one-url',
            'type'     => 'text',
            'title'    => __( 'Service One Url', 'awakening_hosting' )
        ),
        array(
            'id'       => 'service-two-class-name',
            'type'     => 'text',
            'title'    => __( 'Service Two Class Name', 'awakening_hosting' )
        ),
        array(
            'id'       => 'service-two-image',
            'type'     => 'media',
            'title'    => __( 'Service Two Image', 'awakening_hosting' )
        ),
        array(
            'id'       => 'service-two-title',
            'type'     => 'text',
            'title'    => __( 'Service Two Title', 'awakening_hosting' )
        ),
        array(
            'id'       => 'service-two-url',
            'type'     => 'text',
            'title'    => __( 'Service Two Url', 'awakening_hosting' )
        ),
        array(
            'id'       => 'service-three-class-name',
            'type'     => 'text',
            'title'    => __( 'Service Three Class Name', 'awakening_hosting' )
        ),
        array(
            'id'       => 'service-three-image',
            'type'     => 'media',
            'title'    => __( 'Service Three Image', 'awakening_hosting' )
        ),
        array(
            'id'       => 'service-three-title',
            'type'     => 'text',
            'title'    => __( 'Service Three Title', 'awakening_hosting' )
        ),
        array(
            'id'       => 'service-three-url',
            'type'     => 'text',
            'title'    => __( 'Service Three Url', 'awakening_hosting' )
        ),
        array(
            'id'       => 'service-four-class-name',
            'type'     => 'text',
            'title'    => __( 'Service Four Class Name', 'awakening_hosting' )
        ),
        array(
            'id'       => 'service-four-image',
            'type'     => 'media',
            'title'    => __( 'Service Four Image', 'awakening_hosting' )
        ),
        array(
            'id'       => 'service-four-title',
            'type'     => 'text',
            'title'    => __( 'Service Four Title', 'awakening_hosting' )
        ),
        array(
            'id'       => 'service-four-url',
            'type'     => 'text',
            'title'    => __( 'Service Four Url', 'awakening_hosting' )
        ),
        array(
            'id'       => 'service-five-class-name',
            'type'     => 'text',
            'title'    => __( 'Service Five Class Name', 'awakening_hosting' )
        ),
        array(
            'id'       => 'service-five-image',
            'type'     => 'media',
            'title'    => __( 'Service Five Image', 'awakening_hosting' )
        ),
        array(
            'id'       => 'service-five-title',
            'type'     => 'text',
            'title'    => __( 'Service Five Title', 'awakening_hosting' )
        ),
        array(
            'id'       => 'service-five-url',
            'type'     => 'text',
            'title'    => __( 'Service Five Url', 'awakening_hosting' )
        ),
        array(
            'id'       => 'service-six-class-name',
            'type'     => 'text',
            'title'    => __( 'Service Six Class Name', 'awakening_hosting' )
        ),
        array(
            'id'       => 'service-six-image',
            'type'     => 'media',
            'title'    => __( 'Service Six Image', 'awakening_hosting' )
        ),
        array(
            'id'       => 'service-six-title',
            'type'     => 'text',
            'title'    => __( 'Service Six Title', 'awakening_hosting' )
        ),
        array(
            'id'       => 'service-six-url',
            'type'     => 'text',
            'title'    => __( 'Service Six Url', 'awakening_hosting' )
        ),
        array(
            'id'       => 'service-seven-class-name',
            'type'     => 'text',
            'title'    => __( 'Service Seven Class Name', 'awakening_hosting' )
        ),
        array(
            'id'       => 'service-seven-image',
            'type'     => 'media',
            'title'    => __( 'Service Seven Image', 'awakening_hosting' )
        ),
        array(
            'id'       => 'service-seven-title',
            'type'     => 'text',
            'title'    => __( 'Service Seven Title', 'awakening_hosting' )
        ),
        array(
            'id'       => 'service-seven-url',
            'type'     => 'text',
            'title'    => __( 'Service Seven Url', 'awakening_hosting' )
        ),
        array(
            'id'       => 'service-eight-class-name',
            'type'     => 'text',
            'title'    => __( 'Service Eight Class Name', 'awakening_hosting' )
        ),
        array(
            'id'       => 'service-eight-image',
            'type'     => 'media',
            'title'    => __( 'Service Eight Image', 'awakening_hosting' )
        ),
        array(
            'id'       => 'service-eight-title',
            'type'     => 'text',
            'title'    => __( 'Service Eight Title', 'awakening_hosting' )
        ),
        array(
            'id'       => 'service-eight-url',
            'type'     => 'text',
            'title'    => __( 'Service Eight Url', 'awakening_hosting' )
        ),
    )
) );

Redux::setSection( $opt_name, array(
    'title'      => __( 'Our Packages', 'awakening_hosting' ),
    'desc'       => __( 'All information about our packages', 'awakening_hosting' ),
    'id'         => 'opt-packages',
    'subsection' => true,
    'fields'     => array(
        array(
            'id' => 'show-hide-package',
            'type' => 'switch',
            'title' => __('Show/Hide Price Table', 'awakening_hosting'),
            'desc' => '',
            'default' => '1'
        ),
        array(
            'id'       => 'package-heading',
            'type'     => 'text',
            'title'    => __( 'Heading', 'awakening_hosting' )
        ),
        array(
            'id'=>'package-sub-heading',
            'type' => 'textarea',
            'title' => __('Short Description', 'awakening_hosting')
        ),
        array(
            'id'       => 'home-product-ids',
            'type'     => 'text',
            'title'    => __( 'Home Page Product Id\'s', 'awakening_hosting' ),
            'subtitle' => __('Enter comma(,) separated Product Id\'s here', 'awakening_hosting'),
        ),
        /*array(
            'id'               => 'package-shared-hosting',
            'type'             => 'editor',
            'title'            => __('Shared Hosting', 'awakening_hosting'),
            'subtitle'         => __('Enter Shared Hosting Information Here.', 'awakening_hosting'),
            'args'   => array(
                'teeny'            => true,
                'textarea_rows'    => 10
            )
        ),
        array(
            'id'               => 'package-reseller-hosting',
            'type'             => 'editor',
            'title'            => __('Reseller Hosting', 'awakening_hosting'),
            'subtitle'         => __('Enter Reseller Hosting Information Here.', 'awakening_hosting'),
            'args'   => array(
                'teeny'            => true,
                'textarea_rows'    => 10
            )
        ),
        array(
            'id'               => 'package-vps-hosting',
            'type'             => 'editor',
            'title'            => __('VPS Hosting', 'awakening_hosting'),
            'subtitle'         => __('Enter VPS Hosting Information Here.', 'awakening_hosting'),
            'args'   => array(
                'teeny'            => true,
                'textarea_rows'    => 10
            )
        ),
        array(
            'id'               => 'package-dedicated-hosting',
            'type'             => 'editor',
            'title'            => __('Dedicated Hosting', 'awakening_hosting'),
            'subtitle'         => __('Enter Dedicated Hosting Information Here.', 'awakening_hosting'),
            'args'   => array(
                'teeny'            => true,
                'textarea_rows'    => 10
            )
        )*/
    )
) );

Redux::setSection( $opt_name, array(
    'title'      => __( 'Register Domain', 'awakening_hosting' ),
    'desc'       => __( 'All information about register domain', 'awakening_hosting' ),
    'id'         => 'opt-register-domain',
    'subsection' => true,
    'fields'     => array(
        array(
            'id' => 'show-hide-domain',
            'type' => 'switch',
            'title' => __('Show/Hide Register Domain Section', 'awakening_hosting'),
            'desc' => '',
            'default' => '1'
        ),
        array(
            'id'       => 'register-domain-heading',
            'type'     => 'text',
            'title'    => __( 'Heading', 'awakening_hosting' )
        ),
        /*array(
            'id'       => 'register-domain-categories',
            'type'     => 'text',
            'title'    => __( 'Domain categories', 'awakening_hosting' ),
            'subtitle' => __('Please enter comma(,) separated category here', 'awakening_hosting'),
        ),*/
        array(
            'id'       => 'register-domain-currency',
            'type'     => 'text',
            'title'    => __( 'Currency', 'awakening_hosting' ),
            'subtitle' => __('Please enter comma(,) separated currency here', 'awakening_hosting'),
        ),
        array(
            'id'       => 'register-domain-tld',
            'type'     => 'text',
            'title'    => __( 'Top level domain', 'awakening_hosting' ),
            'subtitle' => __('Enter comma(,) separated TLD here', 'awakening_hosting'),
        ),
        array(
            'id'=>'register-domain-button-text',
            'type' => 'text',
            'title' => __('Button Text', 'awakening_hosting')
        ),
    )
) );

Redux::setSection( $opt_name, array(
    'title'      => __( 'Need Help', 'awakening_hosting' ),
    'desc'       => __( 'All information about need help section', 'awakening_hosting' ),
    'id'         => 'opt-need-help',
    'subsection' => true,
    'fields'     => array(
        array(
            'id' => 'show-hide-help',
            'type' => 'switch',
            'title' => __('Show/Hide Need Help Section', 'awakening_hosting'),
            'desc' => '',
            'default' => '1'
        ),
        array(
            'id'       => 'need-help-icon',
            'type'     => 'media',
            'title'    => __( 'Icon', 'awakening_hosting' )
        ),
        array(
            'id'       => 'need-help-heading',
            'type'     => 'text',
            'title'    => __( 'Heading', 'awakening_hosting' )
        ),
        array(
            'id'               => 'need-help-content',
            'type'             => 'editor',
            'title'            => __('Description', 'awakening_hosting'),
            'subtitle'         => __('Need help content.', 'awakening_hosting'),
            'args'   => array(
                'teeny'            => true,
                'textarea_rows'    => 10
            )
        ),
        array(
            'id' => 'show-hide-call-us',
            'type' => 'switch',
            'title' => __('Show/Hide Call Us', 'awakening_hosting'),
            'desc' => '',
            'default' => '1'
        ),
        array(
            'id'       => 'need-help-one-class-name',
            'type'     => 'text',
            'title'    => __( 'Help One Class Name', 'awakening_hosting' )
        ),
        array(
            'id'       => 'need-help-one-image',
            'type'     => 'media',
            'title'    => __( 'Help One Image', 'awakening_hosting' )
        ),
        array(
            'id'       => 'need-help-one-title',
            'type'     => 'text',
            'title'    => __( 'Help One Title', 'awakening_hosting' )
        ),
        array(
            'id'       => 'need-help-one-short-description',
            'type'     => 'text',
            'title'    => __( 'Help One Short Description', 'awakening_hosting' )
        ),
        array(
            'id'       => 'need-help-one-button-text',
            'type'     => 'text',
            'title'    => __( 'Help One Button Text', 'awakening_hosting' )
        ),
        array(
            'id'       => 'need-help-one-button-url',
            'type'     => 'text',
            'title'    => __( 'Help One Button Url', 'awakening_hosting' )
        ),
        array(
            'id'       => 'need-help-one-button-class',
            'type'     => 'text',
            'title'    => __( 'Help One Button Class', 'awakening_hosting' )
        ),
        array(
            'id' => 'show-hide-live-chat',
            'type' => 'switch',
            'title' => __('Show/Hide Live Chat', 'awakening_hosting'),
            'desc' => '',
            'default' => '1'
        ),
        array(
            'id'       => 'need-help-two-class-name',
            'type'     => 'text',
            'title'    => __( 'Help Two Class Name', 'awakening_hosting' )
        ),
        array(
            'id'       => 'need-help-two-image',
            'type'     => 'media',
            'title'    => __( 'Help Two Image', 'awakening_hosting' )
        ),
        array(
            'id'       => 'need-help-two-title',
            'type'     => 'text',
            'title'    => __( 'Help Two Title', 'awakening_hosting' )
        ),
        array(
            'id'       => 'need-help-two-short-description',
            'type'     => 'text',
            'title'    => __( 'Help Two Short Description', 'awakening_hosting' )
        ),
        array(
            'id'       => 'need-help-two-button-text',
            'type'     => 'text',
            'title'    => __( 'Help Two Button Text', 'awakening_hosting' )
        ),
        array(
            'id'       => 'need-help-two-button-url',
            'type'     => 'text',
            'title'    => __( 'Help Two Button Url', 'awakening_hosting' )
        ),
        array(
            'id'       => 'need-help-two-button-class',
            'type'     => 'text',
            'title'    => __( 'Help Two Button Class', 'awakening_hosting' )
        ),
        array(
            'id' => 'show-hide-email-us',
            'type' => 'switch',
            'title' => __('Show/Hide Email Us', 'awakening_hosting'),
            'desc' => '',
            'default' => '1'
        ),
        array(
            'id'       => 'need-help-three-class-name',
            'type'     => 'text',
            'title'    => __( 'Help Three Class Name', 'awakening_hosting' )
        ),
        array(
            'id'       => 'need-help-three-image',
            'type'     => 'media',
            'title'    => __( 'Help Three Image', 'awakening_hosting' )
        ),
        array(
            'id'       => 'need-help-three-title',
            'type'     => 'text',
            'title'    => __( 'Help Three Title', 'awakening_hosting' )
        ),
        array(
            'id'       => 'need-help-three-short-description',
            'type'     => 'text',
            'title'    => __( 'Help Three Short Description', 'awakening_hosting' )
        ),
        array(
            'id'       => 'need-help-three-button-text',
            'type'     => 'text',
            'title'    => __( 'Help Three Button Text', 'awakening_hosting' )
        ),
        array(
            'id'       => 'need-help-three-button-url',
            'type'     => 'text',
            'title'    => __( 'Help Three Button Url', 'awakening_hosting' )
        ),
        array(
            'id'       => 'need-help-three-button-class',
            'type'     => 'text',
            'title'    => __( 'Help Three Button Class', 'awakening_hosting' )
        ),
        array(
            'id' => 'show-hide-real-reviews',
            'type' => 'switch',
            'title' => __('Show/Hide Real Reviews', 'awakening_hosting'),
            'desc' => '',
            'default' => '1'
        ),
        array(
            'id'       => 'need-help-four-class-name',
            'type'     => 'text',
            'title'    => __( 'Help Four Class Name', 'awakening_hosting' )
        ),
        array(
            'id'       => 'need-help-four-image',
            'type'     => 'media',
            'title'    => __( 'Help Four Image', 'awakening_hosting' )
        ),
        array(
            'id'       => 'need-help-four-title',
            'type'     => 'text',
            'title'    => __( 'Help Four Title', 'awakening_hosting' )
        ),
        array(
            'id'       => 'need-help-four-short-description',
            'type'     => 'text',
            'title'    => __( 'Help Four Short Description', 'awakening_hosting' )
        ),
        array(
            'id'       => 'need-help-four-button-text',
            'type'     => 'text',
            'title'    => __( 'Help Four Button Text', 'awakening_hosting' )
        ),
        array(
            'id'       => 'need-help-four-button-url',
            'type'     => 'text',
            'title'    => __( 'Help Four Button Url', 'awakening_hosting' )
        ),
        array(
            'id'       => 'need-help-four-button-class',
            'type'     => 'text',
            'title'    => __( 'Help Four Button Class', 'awakening_hosting' )
        ),
    )
) );


Redux::setSection( $opt_name, array(
    'title'      => __( 'Latest News', 'awakening_hosting' ),
    'desc'       => __( 'All information about latest news', 'awakening_hosting' ),
    'id'         => 'opt-latest-news',
    'subsection' => true,
    'fields'     => array(
        array(
            'id' => 'show-hide-latest-news',
            'type' => 'switch',
            'title' => __('Show/Hide Latest news Section', 'awakening_hosting'),
            'desc' => '',
            'default' => '1'
        ),
        array(
            'id'       => 'latest-news-icon',
            'type'     => 'media',
            'title'    => __( 'Latest News Icon', 'awakening_hosting' )
        ),
        array(
            'id'       => 'latest-news-heading',
            'type'     => 'text',
            'title'    => __( 'Heading', 'awakening_hosting' )
        ),
        array(
            'id'               => 'latest-news-content',
            'type'             => 'editor',
            'title'            => __('Description', 'awakening_hosting'),
            'subtitle'         => __('Latest news content.', 'awakening_hosting'),
            'args'   => array(
                'teeny'            => true,
                'textarea_rows'    => 10
            )
        ),
        array(
            'id'       => 'page-reference',
            'type'     => 'text',
            'title'    => __( 'Page Reference', 'awakening_hosting' ),
            'subtitle'         => __('Please enter reference page id  here.', 'awakening_hosting'),
        ),
    )
) );


Redux::setSection( $opt_name, array(
    'title'      => __( 'Subscription Options', 'awakening_hosting' ),
    'desc'       => __( 'All information about subscription', 'awakening_hosting' ),
    'id'         => 'opt-subscription',
    'subsection' => true,
    'fields'     => array(
        array(
            'id' => 'show-hide-subscription-options',
            'type' => 'switch',
            'title' => __('Show/Hide Subscription Options', 'awakening_hosting'),
            'desc' => '',
            'default' => '1'
        ),
        array(
            'id'       => 'subscription-heading',
            'type'     => 'text',
            'title'    => __( 'Heading', 'awakening_hosting' )
        ),
        array(
            'id'=>'subscription-bottom-text',
            'type' => 'textarea',
            'title' => __('Below Text', 'awakening_hosting')
        ),
        array(
            'id'       => 'privacy-policy-url',
            'type'     => 'text',
            'title'    => __( 'Privacy Policy Url', 'awakening_hosting' )
        ),
    )
) );

Redux::setSection( $opt_name, array(
    'title'  => __( 'Social Media Links', 'awakening_hosting' ),
    'id'     => 'social-option',
    'desc'   => __( '', 'awakening_hosting' ),
    'icon'   => 'el el-twitter',
    'fields' => array(

        array(
            'id' => 'facebook-url',
            'type' => 'text',
            'title' => __('Facebook URL', 'awakening_hosting'),
            'subtitle' => __('Please enter in your Facebook URL.', 'awakening_hosting'),
            'desc' => '',
            'default'  => ''
        ),
        array(
            'id' => 'twitter-url',
            'type' => 'text',
            'title' => __('Twitter URL', 'awakening_hosting'),
            'subtitle' => __('Please enter in your Twitter URL.', 'awakening_hosting'),
            'desc' => '',
            'default'  => ''
        ),
        /*array(
            'id' => 'google-plus-url',
            'type' => 'text',
            'title' => __('Google+ URL', 'awakening_hosting'),
            'subtitle' => __('Please enter in your Google+ URL.', 'awakening_hosting'),
            'desc' => '',
            'default'  => ''
        ),*/
        array(
            'id' => 'linkedin-url',
            'type' => 'text',
            'title' => __('LinkedIn URL', 'awakening_hosting'),
            'subtitle' => __('Please enter in your LinkedIn URL.', 'awakening_hosting'),
            'desc' => '',
            'default'  => ''
        ),
        array(
            'id' => 'instagram-url',
            'type' => 'text',
            'title' => __('Instagram URL', 'awakening_hosting'),
            'subtitle' => __('Please enter in your Instagram URL.', 'awakening_hosting'),
            'desc' => '',
            'default'  => ''
        ),
        array(
            'id' => 'blog-url',
            'type' => 'text',
            'title' => __('Blog URL', 'awakening_hosting'),
            'subtitle' => __('Please enter in your blog URL.', 'awakening_hosting'),
            'desc' => '',
            'default'  => ''
        ),
    )
) );


Redux::setSection( $opt_name, array(
    'title' => __( 'Footer Settings', 'awakening_hosting' ),
    'id'    => 'footer-settings',
    'desc'  => __( 'Footer Settings Section.', 'awakening_hosting' ),
    'icon'  => 'el el-align-center'
) );

Redux::setSection( $opt_name, array(
    //'title'      => __( 'Footer Logo & Heading', 'awakening_hosting' ),
    'title'      => __( 'Footer Logo', 'awakening_hosting' ),
    'desc'       => __( 'All information about logo,heading and slogan', 'awakening_hosting' ),
    'id'         => 'opt-footer-lgh',
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'opt-footer-logo',
            'type'     => 'media',
            'url'      => true,
            'title'    => __('Footer Logo', 'awakening_hosting'),
            'desc'     => __('', 'awakening_hosting'),
            'subtitle' => __('', 'awakening_hosting'),
            'default'  => array(
                'url'=>''
            ),
        ),
        array(
            'id'       => 'site-footer-logo-url',
            'type'     => 'text',
            'title'    => __( 'Site Footer Logo Url', 'awakening_hosting' )
        ),
        array(
            'id'       => 'site-footer-title',
            'type'     => 'text',
            'title'    => __( 'Site Footer Title', 'awakening_hosting' )
        ),
        array(
            'id'       => 'site-footer-slogan',
            'type'     => 'text',
            'title'    => __( 'Site Footer Slogan', 'awakening_hosting' )
        )
    )
) );

Redux::setSection( $opt_name, array(
    'title'      => __( 'Footer Text', 'awakening_hosting' ),
    'desc'       => __( 'Enter footer text here', 'awakening_hosting' ),
    'id'         => 'opt-footer-text',
    'subsection' => true,
    'fields'     => array(
        array(
            'id'               => 'footer-content',
            'type'             => 'editor',
            'title'            => __('Content', 'awakening_hosting'),
            'subtitle'         => __('Add footer content.', 'awakening_hosting'),
            'args'   => array(
                'teeny'            => true,
                'textarea_rows'    => 10
            )
        )
    )
) );

Redux::setSection( $opt_name, array(
    'title'  => __( '404 Page Option', 'awakening_hosting' ),
    'id'     => 'notfound-option',
    'desc'   => __( '', 'awakening_hosting' ),
    'icon'   => 'el el-error',
    'fields' => array(
        array(
            'id'       => 'nf-title',
            'type'     => 'text',
            'title'    => __( 'Page Not Found Title', 'awakening_hosting' ),
            'desc'     => __( '', 'awakening_hosting' ),
            'default'  => '404',
        ),
        array(
            'id'       => 'nf-subtitle',
            'type'     => 'text',
            'title'    => __( 'Page Not Found Subtitle', 'awakening_hosting' ),
            'desc'     => __( '', 'awakening_hosting' ),
            'default'  => 'Page Not Found',
        ),
        array(
            'id'       => 'nf-image',
            'type'     => 'media',
            'title'    => __( '404 Image', 'awakening_hosting' )
        ),

    )
));

/*
 * <--- END SECTIONS
 */


/*
 *
 * YOU MUST PREFIX THE FUNCTIONS BELOW AND ACTION FUNCTION CALLS OR ANY OTHER CONFIG MAY OVERRIDE YOUR CODE.
 *
 */

/*
*
* --> Action hook examples
*
*/

// If Redux is running as a plugin, this will remove the demo notice and links
//add_action( 'redux/loaded', 'remove_demo' );

// Function to test the compiler hook and demo CSS output.
// Above 10 is a priority, but 2 in necessary to include the dynamically generated CSS to be sent to the function.
//add_filter('redux/options/' . $opt_name . '/compiler', 'compiler_action', 10, 3);

// Change the arguments after they've been declared, but before the panel is created
//add_filter('redux/options/' . $opt_name . '/args', 'change_arguments' );

// Change the default value of a field after it's been set, but before it's been useds
//add_filter('redux/options/' . $opt_name . '/defaults', 'change_defaults' );

// Dynamically add a section. Can be also used to modify sections/fields
//add_filter('redux/options/' . $opt_name . '/sections', 'dynamic_section');

/**
 * This is a test function that will let you see when the compiler hook occurs.
 * It only runs if a field    set with compiler=>true is changed.
 * */
if ( ! function_exists( 'compiler_action' ) ) {
    function compiler_action( $options, $css, $changed_values ) {
        echo '<h1>The compiler hook has run!</h1>';
        echo "<pre>";
        print_r( $changed_values ); // Values that have changed since the last save
        echo "</pre>";
        //print_r($options); //Option values
        //print_r($css); // Compiler selector CSS values  compiler => array( CSS SELECTORS )
    }
}

/**
 * Custom function for the callback validation referenced above
 * */
if ( ! function_exists( 'redux_validate_callback_function' ) ) {
    function redux_validate_callback_function( $field, $value, $existing_value ) {
        $error   = false;
        $warning = false;

        //do your validation
        if ( $value == 1 ) {
            $error = true;
            $value = $existing_value;
        } elseif ( $value == 2 ) {
            $warning = true;
            $value   = $existing_value;
        }

        $return['value'] = $value;

        if ( $error == true ) {
            $field['msg']    = 'your custom error message';
            $return['error'] = $field;
        }

        if ( $warning == true ) {
            $field['msg']      = 'your custom warning message';
            $return['warning'] = $field;
        }

        return $return;
    }
}

/**
 * Custom function for the callback referenced above
 */
if ( ! function_exists( 'redux_my_custom_field' ) ) {
    function redux_my_custom_field( $field, $value ) {
        print_r( $field );
        echo '<br/>';
        print_r( $value );
    }
}

/**
 * Custom function for filtering the sections array. Good for child themes to override or add to the sections.
 * Simply include this function in the child themes functions.php file.
 * NOTE: the defined constants for URLs, and directories will NOT be available at this point in a child theme,
 * so you must use get_template_directory_uri() if you want to use any of the built in icons
 * */
if ( ! function_exists( 'dynamic_section' ) ) {
    function dynamic_section( $sections ) {
        //$sections = array();
        $sections[] = array(
            'title'  => __( 'Section via hook', 'awakening_hosting' ),
            'desc'   => __( '<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', 'awakening_hosting' ),
            'icon'   => 'el el-paper-clip',
            // Leave this as a blank section, no options just some intro text set above.
            'fields' => array()
        );

        return $sections;
    }
}

/**
 * Filter hook for filtering the args. Good for child themes to override or add to the args array. Can also be used in other functions.
 * */
if ( ! function_exists( 'change_arguments' ) ) {
    function change_arguments( $args ) {
        //$args['dev_mode'] = true;

        return $args;
    }
}

/**
 * Filter hook for filtering the default value of any given field. Very useful in development mode.
 * */
if ( ! function_exists( 'change_defaults' ) ) {
    function change_defaults( $defaults ) {
        $defaults['str_replace'] = 'Testing filter hook!';

        return $defaults;
    }
}

/**
 * Removes the demo link and the notice of integrated demo from the redux-framework plugin
 */
if ( ! function_exists( 'remove_demo' ) ) {
    function remove_demo() {
        // Used to hide the demo mode link from the plugin page. Only used when Redux is a plugin.
        if ( class_exists( 'ReduxFrameworkPlugin' ) ) {
            remove_filter( 'plugin_row_meta', array(
                ReduxFrameworkPlugin::instance(),
                'plugin_metalinks'
            ), null, 2 );

            // Used to hide the activation notice informing users of the demo panel. Only used when Redux is a plugin.
            remove_action( 'admin_notices', array( ReduxFrameworkPlugin::instance(), 'admin_notices' ) );
        }
    }
}

/*function addPanelCSS() {

    wp_register_style(
        'my-redux-custom-css',
        get_template_directory_uri().'/admin/my-redux-custom-css.css',
        array( 'redux-admin-css' ),
        time(),
        'all'
    );
    wp_enqueue_style('my-redux-custom-css');
}

add_action( 'redux/page/'.$opt_name.'/enqueue', 'addPanelCSS' );

function compiler_action($options, $css, $changed_values) {
    global $wp_filesystem;

    $filename = dirname(__FILE__) . '/my-redux-custom-css.css';

    if( empty( $wp_filesystem ) ) {
        require_once( ABSPATH .'/wp-admin/includes/file.php' );
        WP_Filesystem();
    }

    if( $wp_filesystem ) {
        $wp_filesystem->put_contents(
            $filename,
            $css,
            FS_CHMOD_FILE // predefined mode settings for WP files
        );
    }
}
add_filter('redux/options/'.$opt_name.'/compiler', 'compiler_action', 10, 3);*/
