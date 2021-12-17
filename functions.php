<?php

/**
 * Blog_Way functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Blog_Way
 */
if (!function_exists('blog_way_setup')) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function blog_way_setup() {
        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for editor style.
         */
        add_editor_style('assets/css/editor-style.css');

        /*
         * Enable support for custom logo.
         */
        add_theme_support('custom-logo', array(
                'height'      => 70,
                'width'       => 220,
	));

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');
        add_image_size('blog-way-common', 345, 225, true);


        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'primary' => esc_html__('Primary', 'blog-way'),
            'social' => esc_html__('Social', 'blog-way'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('blog_way_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        // Add woocommerce support, gallery zoom, lightbox and thumbnail slider.
        add_theme_support('woocommerce');
        add_theme_support('wc-product-gallery-zoom');
        add_theme_support('wc-product-gallery-lightbox');
        add_theme_support('wc-product-gallery-slider');
    }

endif;
add_action('after_setup_theme', 'blog_way_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function blog_way_content_width() {
    $GLOBALS['content_width'] = apply_filters('blog_way_content_width', 708);
}

add_action('after_setup_theme', 'blog_way_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function blog_way_widgets_init() {
    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'blog-way'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'blog-way'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer 1', 'blog-way'),
        'id' => 'footer-1',
        'description' => esc_html__('Add widgets here.', 'blog-way'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer 2', 'blog-way'),
        'id' => 'footer-2',
        'description' => esc_html__('Add widgets here.', 'blog-way'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer 3', 'blog-way'),
        'id' => 'footer-3',
        'description' => esc_html__('Add widgets here.', 'blog-way'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer 4', 'blog-way'),
        'id' => 'footer-4',
        'description' => esc_html__('Add widgets here.', 'blog-way'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));
}

add_action('widgets_init', 'blog_way_widgets_init');

if (!function_exists('blog_way_fonts_url')) {

    /**
     * Register Google fonts.
     *
     * @return string Google fonts URL for the theme.
     */
    function blog_way_fonts_url() {
        $fonts_url = '';
        $fonts = array();
        $subsets = 'latin,latin-ext';

        /* translators: If there are characters in your language that are not supported by Droid Serif, translate this to 'off'. Do not translate into your own language. */
        if ('off' !== _x('on', 'Droid Serif: on or off', 'blog-way')) {
            $fonts[] = 'Droid Serif:400,700';
        }
        if ('off' !== _x('on', 'Montserrat: on or off', 'blog-way')) {
            $fonts[] = 'Montserrat:400,700';
        }

        if ($fonts) {
            $fonts_url = add_query_arg(array(
                'family' => urlencode(implode('|', $fonts)),
                'subset' => urlencode($subsets),
                    ), 'https://fonts.googleapis.com/css');
        }

        return $fonts_url;
    }

}

/**
 * Enqueue scripts and styles.
 */
function blog_way_scripts() {

    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/third-party/bootstrap/bootstrap.min.css');

    wp_enqueue_style('meanmenu', get_template_directory_uri() . '/assets/third-party/meanmenu/meanmenu.css');
    
    wp_enqueue_style('custom-joe', get_template_directory_uri() . '/assets/css/joeCustom.css');

    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/third-party/font-awesome/css/font-awesome.min.css');

    wp_enqueue_style('blog-way-fonts', blog_way_fonts_url(), array(), null);

    wp_enqueue_style('blog-way-style', get_stylesheet_uri());
    
    wp_enqueue_style('custom-joe', get_template_directory_uri() . '/assets/css/joeCustom.css');
    
    wp_enqueue_style('custom-joe-fonts', get_template_directory_uri() . '/assets/css/fontImport.css');

    wp_enqueue_script('blog-way-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20161202', true);

    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/third-party/bootstrap/bootstrap.min.js', array('jquery'), '20161202', true);

    wp_enqueue_script('meanmenu', get_template_directory_uri() . '/assets/third-party/meanmenu/jquery.meanmenu.js', array('jquery'), '20161202', true);

    // Add script for sticky sidebar.
    $sticky_sidebar = blog_way_get_option('enable_sticky_sidebar');

    if (1 == $sticky_sidebar) {

        wp_enqueue_script('jquery-theia-sticky-sidebar', get_template_directory_uri() . '/assets/third-party/theia-sticky-sidebar/theia-sticky-sidebar.min.js', array('jquery'), '1.0.7', true);
    }

    wp_enqueue_script('blog-way-custom', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), '20161202', true);
    
    wp_enqueue_script('blog-way-joe', get_template_directory_uri() . '/assets/js/joeCustom.js', array('jquery'), '20161202', true);
    
    wp_enqueue_script('blog-way-masonry', get_template_directory_uri() . '/assets/js/masonry.js', array('jquery'), '1.0', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'blog_way_scripts');

/**
 * Implement the main files.
 */
require get_template_directory() . '/inc/main.php';

/* Turn on wide images */
add_theme_support('align-wide');



/* CUSTOM SHORTCODES */

function horizontalRuleCustomBreak() {
    return '<div class="hrBreakContainer"><hr><div class="logocont"><span class="logo"></span><span class="logo"></span><span class="logo"></span></div></div>';
}
add_shortcode('hrbreak', 'horizontalRuleCustomBreak');

function fullSpanItem($params = array()) {
    
        // default parameters
        extract(shortcode_atts(array(
            'id' => '',
            'title' => '',
            'name' => 'joe dulany',
            'photo_url' => '',
            'description' => '',
            'link_url' => 'https://joe.dev.samcarne.com/about/'
            //'depth' => 2
        ), $params));
    
        // create sitemap
        $html = "</div></div></div>
        <div id='$id' class='fullSpanItem'><div class='row'>
        <div class='col col-sm-12'>
        <div class='fullSpanCont'>
                <div class='WIAwrapper'>
                    <div class='item'>
                        <div class='polaroid'><img src='$photo_url'>
                        <div class='caption'>$name</div>
                    </div>
                </div>
            <div class='fullSpanContent'>
                <h3>$title</h3>
                <p>$description</p>
                <p><a href='$link_url'>Learn More About Me Here</a></p>
            </div>
        </div>
        </div></div></div>
        <div class='mainHomeContent container'>
        <div class='row'>
        <div class='col col-sm-12'>";
    
        return $html;
    }
    add_shortcode('fullspanitem', 'fullSpanItem');




function fullSpanItemRight($params = array()) {
    
        // default parameters
        extract(shortcode_atts(array(
            'id' => '',
            'title' => '',
            'name' => 'joe dulany',
            'photo_url' => '',
            'description' => '',
            'link_url' => 'https://joe.dev.samcarne.com/about/'
            //'depth' => 2
        ), $params));
    
        // create sitemap
        $html = "</div></div></div>
        <div id='$id' class='fullSpanItem rifht'><div class='row'>
        <div class='col col-sm-12'>
        <div class='fullSpanCont'>
            <div class='fullSpanContent'>
                <h2><strong>$title</strong></h2>
                <p>$description</p>
                <p><a href='$link_url'></a></p>
            </div>
            <div class='WIAwrapper'>
                <div class='item'>
                    <div class='polaroid'><img src='$photo_url'>
                    <div class='caption'>$name</div>
                </div>
            </div>
        </div>
        </div></div></div>
        <div class='mainHomeContent container'>
        <div class='row'>
        <div class='col col-sm-12'>";
    
        return $html;
    }
    add_shortcode('fullspanitemright', 'fullSpanItemRight');
    
    
    
    
   function singleImg($params = array()) {
       
       // default parameters
       extract(shortcode_atts(array(
           'class' => '',
           'label' => '',
           'photo_url' => ''
           //'depth' => 2
       ), $params));
   
       // create sitemap
       $html = "<div class='wrapper $class'>
               <div class='item'>
               <div class='polaroid'><img src='$photo_url'>
               <div class='caption'>$label</div>
               </div>
               </div>";
       
       return $html;
       
       }
       add_shortcode('singleimage', 'singleImg');