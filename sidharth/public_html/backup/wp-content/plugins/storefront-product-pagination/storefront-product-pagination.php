<?php
/**
 * Plugin Name:			Storefront Product Pagination
 * Plugin URI:			http://woothemes.com/storefront/
 * Description:			Add unobstrusive links to next/previous products on your WooCommerce single product pages.
 * Version:				1.1.3
 * Author:				WooThemes
 * Author URI:			http://woothemes.com/
 * Requires at least:	4.0.0
 * Tested up to:		4.6.1
 *
 * Text Domain: storefront-product-pagination
 * Domain Path: /languages/
 *
 * @package Storefront_Product_Pagination
 * @category Core
 * @author James Koster
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


/**
 * Returns the main instance of Storefront_Product_Pagination to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object Storefront_Product_Pagination
 */
function Storefront_Product_Pagination() {
	return Storefront_Product_Pagination::instance();
} // End Storefront_Product_Pagination()

Storefront_Product_Pagination();

/**
 * Main Storefront_Product_Pagination Class
 *
 * @class Storefront_Product_Pagination
 * @version	1.0.0
 * @since 1.0.0
 * @package	Storefront_Product_Pagination
 */
final class Storefront_Product_Pagination {
	/**
	 * Storefront_Product_Pagination The single instance of Storefront_Product_Pagination.
	 * @var 	object
	 * @access  private
	 * @since 	1.0.0
	 */
	private static $_instance = null;

	/**
	 * The token.
	 * @var     string
	 * @access  public
	 * @since   1.0.0
	 */
	public $token;

	/**
	 * The version number.
	 * @var     string
	 * @access  public
	 * @since   1.0.0
	 */
	public $version;

	// Admin - Start
	/**
	 * The admin object.
	 * @var     object
	 * @access  public
	 * @since   1.0.0
	 */
	public $admin;

	/**
	 * Constructor function.
	 * @access  public
	 * @since   1.0.0
	 * @return  void
	 */
	public function __construct() {
		$this->token 			= 'storefront-product-pagination';
		$this->plugin_url 		= plugin_dir_url( __FILE__ );
		$this->plugin_path 		= plugin_dir_path( __FILE__ );
		$this->version 			= '1.1.3';

		register_activation_hook( __FILE__, array( $this, 'install' ) );

		add_action( 'init', array( $this, 'spp_load_plugin_textdomain' ) );

		add_action( 'init', array( $this, 'spp_setup' ) );
	}

	/**
	 * Main Storefront_Product_Pagination Instance
	 *
	 * Ensures only one instance of Storefront_Product_Pagination is loaded or can be loaded.
	 *
	 * @since 1.0.0
	 * @static
	 * @see Storefront_Product_Pagination()
	 * @return Main Storefront_Product_Pagination instance
	 */
	public static function instance() {
		if ( is_null( self::$_instance ) )
			self::$_instance = new self();
		return self::$_instance;
	} // End instance()

	/**
	 * Load the localisation file.
	 * @access  public
	 * @since   1.0.0
	 * @return  void
	 */
	public function spp_load_plugin_textdomain() {
		load_plugin_textdomain( 'storefront-product-pagination', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
	}

	/**
	 * Cloning is forbidden.
	 *
	 * @since 1.0.0
	 */
	public function __clone() {
		_doing_it_wrong( __FUNCTION__, __( 'Cheatin&#8217; huh?' ), '1.0.0' );
	}

	/**
	 * Unserializing instances of this class is forbidden.
	 *
	 * @since 1.0.0
	 */
	public function __wakeup() {
		_doing_it_wrong( __FUNCTION__, __( 'Cheatin&#8217; huh?' ), '1.0.0' );
	}

	/**
	 * Installation.
	 * Runs on activation. Logs the version number and assigns a notice message to a WordPress option.
	 * @access  public
	 * @since   1.0.0
	 * @return  void
	 */
	public function install() {
		$this->_log_version_number();

		// get theme customizer url
		$url = admin_url() . 'customize.php?';
		$url .= 'url=' . urlencode( site_url() . '?storefront-customizer=true' ) ;
		$url .= '&return=' . urlencode( admin_url() . 'plugins.php' );
		$url .= '&storefront-customizer=true';

		$notices 		= get_option( 'spp_activation_notice', array() );
		$notices[]		= sprintf( __( '%sThanks for installing the Storefront Product Pagination extension. Configure the settings in the %sCustomizer%s.%s %sOpen the Customizer%s', 'storefront-product-pagination' ), '<p>', '<a href="' . esc_url( $url ) . '">', '</a>', '</p>', '<p><a href="' . esc_url( $url ) . '" class="button button-primary">', '</a></p>' );

		update_option( 'spp_activation_notice', $notices );
	}

	/**
	 * Log the plugin version number.
	 * @access  private
	 * @since   1.0.0
	 * @return  void
	 */
	private function _log_version_number() {
		// Log the version number.
		update_option( $this->token . '-version', $this->version );
	}

	/**
	 * Setup all the things.
	 * Only executes if Storefront or a child theme using Storefront as a parent is active and the extension specific filter returns true.
	 * Child themes can disable this extension using the storefront_extension_boilerplate_enabled filter
	 * @return void
	 */
	public function spp_setup() {
		$theme = wp_get_theme();

		if ( 'Storefront' == $theme->name || 'storefront' == $theme->template && apply_filters( 'storefront_product_pagination_supported', true ) ) {
			add_action( 'wp_enqueue_scripts', array( $this, 'spp_styles' ), 999 );
			add_action( 'customize_register', array( $this, 'spp_customize_register' ) );
			add_action( 'customize_preview_init', array( $this, 'spp_customize_preview_js' ) );
			add_action( 'admin_notices', array( $this, 'spp_customizer_notice' ) );

			add_action( 'woocommerce_after_single_product_summary', array( $this, 'spp_single_product_pagination' ),	30 );


			// Hide the 'More' section in the customizer
			add_filter( 'storefront_customizer_more', '__return_false' );
		} else {
			add_action( 'admin_notices', array( $this, 'spp_install_storefront_notice' ) );
		}
	}

	/**
	 * Admin notice
	 * Checks the notice setup in install(). If it exists display it then delete the option so it's not displayed again.
	 * @since   1.0.0
	 * @return  void
	 */
	public function spp_customizer_notice() {
		$notices = get_option( 'spp_activation_notice' );

		if ( $notices = get_option( 'spp_activation_notice' ) ) {

			foreach ( $notices as $notice ) {
				echo '<div class="updated">' . $notice . '</div>';
			}

			delete_option( 'spp_activation_notice' );
		}
	}

	/**
	 * Storefront install
	 * If the user activates the plugin while having a different parent theme active, prompt them to install Storefront.
	 * @since   1.0.0
	 * @return  void
	 */
	public function spp_install_storefront_notice() {
		echo '<div class="notice is-dismissible updated">
				<p>' . __( 'Storefront Product Pagination requires that you use Storefront as your parent theme.', 'storefront-product-pagination' ) . ' <a href="' . esc_url( wp_nonce_url( self_admin_url( 'update.php?action=install-theme&theme=storefront' ), 'install-theme_storefront' ) ) .'">' . __( 'Install Storefront now', 'storefront-product-pagination' ) . '</a></p>
			</div>';
	}

	/**
	 * Customizer Controls and settings
	 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
	 */
	public function spp_customize_register( $wp_customize ) {
		/**
	     * Add a new section
	     */
        $wp_customize->add_section( 'spp_section' , array(
		    'title'      	=> __( 'Product Pagination', 'storefront-extention-boilerplate' ),
		    'priority'   	=> 55,
		) );

		/**
		 * Color picker
		 */
		$wp_customize->add_setting( 'spp_background_color', array(
			'default'			=> apply_filters( 'spp_default_background_color', 'ffffff' ),
			'sanitize_callback'	=> 'sanitize_hex_color',
			'transport'			=> 'postMessage', // Refreshes instantly via js. See customizer.js. (default = refresh).
		) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'spp_background_color', array(
			'label'			=> __( 'Background color', 'storefront-product-pagination' ),
			'description'	=> __( 'Background color for the product pagination links', 'storefront-product-pagination' ),
			'section'		=> 'spp_section',
			'settings'		=> 'spp_background_color',
			'priority'		=> 30,
		) ) );

		/**
		 * Same category
		 */
		$wp_customize->add_setting( 'spp_same_cat', array(
			'default'   => false,
		) );

		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'spp_same_cat', array(
			'label'       => __( 'Display products in same category', 'storefront-product-pagination' ),
			'description' => __( 'When enabled, pagination will only display links to products in the same category as the one currently being viewed.', 'storefront-product-pagination' ),
			'section'     => 'spp_section',
			'settings'    => 'spp_same_cat',
			'type'        => 'checkbox',
			'priority'    => 40,
		) ) );
	}

	/**
	 * Enqueue CSS and custom styles.
	 * @since   1.0.0
	 * @return  void
	 */
	public function spp_styles() {
		wp_enqueue_style( 'spp-styles', plugins_url( '/assets/css/style.css', __FILE__ ) );

		$heading_background_color = get_theme_mod( 'spp_background_color', apply_filters( 'spp_default_background_color', '#ffffff' ) );

		$spp_style = '
		.storefront-single-product-pagination a {
			background-color: ' . $heading_background_color . ';
		}';

		wp_add_inline_style( 'spp-styles', $spp_style );
	}

	/**
	 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
	 *
	 * @since  1.0.0
	 */
	public function spp_customize_preview_js() {
		wp_enqueue_script( 'spp-customizer', plugins_url( '/assets/js/customizer.min.js', __FILE__ ), array( 'customize-preview' ), '1.0.0', true );
	}

	/**
 	 * Single product pagination
	 * Display links to the next/previous products on the single product page
	 * @since   1.0.0
	 * @return  void
	 * @uses    previous_post_link(), next_post_link()
	 */
	function spp_single_product_pagination() {
		$placeholder 				= '<img src="' . wc_placeholder_img_src() . '" />';
		$previous_product 			= get_previous_post();
		$next_product 				= get_next_post();
		$previous_product_thumbnail	= '';
		$next_product_thumbnail		= '';
		$same_cat 					= get_theme_mod( 'spp_same_cat', false );

		$in_same_term 	= false;
		$taxonomy 		= 'category';

		if ( true == $same_cat ) {
			$in_same_term 	= true;
			$taxonomy 		= 'product_cat';
		}

		// If a next/previous product exists, get the thumbnail (or place holder)
		if ( $previous_product ) {
			$previous_product_thumbnail 	= get_the_post_thumbnail( $previous_product->ID, 'shop_catalog' );

			if ( ! $previous_product_thumbnail ) {
				$previous_product_thumbnail = $placeholder;
			}
		}

		if ( $next_product ) {
			$next_product_thumbnail 	= get_the_post_thumbnail( $next_product->ID, 'shop_catalog' );
			if ( ! $next_product_thumbnail ) {
				$next_product_thumbnail = $placeholder;
			}
		}

		// Output the links
		if ( $next_product || $previous_product ) {
			echo '<nav class="storefront-single-product-pagination">';
				echo '<h2>' . __( 'More products', 'storefront' ) . '</h2>';
				previous_post_link( '%link', $previous_product_thumbnail . '<span class="title">&larr; %title</span>', $in_same_term, '', $taxonomy );
				next_post_link( '%link', $next_product_thumbnail . '<span class="title">%title &rarr;</span>', $in_same_term, '', $taxonomy );
			echo '</nav>';
		}
	}

} // End Class
