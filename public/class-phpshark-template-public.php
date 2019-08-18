<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://thenorthernrhino.in/author/admin/
 * @since      1.0.0
 *
 * @package    Phpshark_Template
 * @subpackage Phpshark_Template/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Phpshark_Template
 * @subpackage Phpshark_Template/public
 * @author     Ankit Kumar <mail2ankit85@gmail.com>
 */
class Phpshark_Template_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Phpshark_Template_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Phpshark_Template_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( 'font-1','https://fonts.googleapis.com/css?family=Alegreya' );
		wp_enqueue_style( 'font-2','https://fonts.googleapis.com/css?family=Alegreya+Sans+SC' );
		wp_enqueue_style( 'font-3','https://fonts.googleapis.com/css?family=Alfa+Slab+One' );
		wp_enqueue_style( 'font-4','https://fonts.googleapis.com/css?family=Alice' );
		wp_enqueue_style( 'font-5','https://fonts.googleapis.com/css?family=Archivo+Black' );
		wp_enqueue_style( 'font-6','https://fonts.googleapis.com/css?family=Roboto+Mono' );
		wp_enqueue_style( 'font-7','https://fonts.googleapis.com/css?family=Roboto:300,400' );

		wp_enqueue_style( 'bootstrap-style',plugin_dir_url( __FILE__ ) . 'assets/bootstrap/css/bootstrap.min.css' );
		wp_enqueue_style( 'jq-confirm-style', plugin_dir_url( __FILE__ ) . 'assets/vendor/jquery-confirm/dist/jquery-confirm.min.css' );
		wp_enqueue_style( 'formvalidaiton-style', plugin_dir_url( __FILE__ ) . 'assets/vendor/formvalidation.io/css/formValidation.min.css' );
		wp_enqueue_style( 'minimenu-style', plugin_dir_url( __FILE__ ) . 'assets/vendor/minimenu/css/minimenu.css' );
		wp_enqueue_style( 'datatable-style', plugin_dir_url( __FILE__ ) . 'assets/vendor/datatables/datatables.min.css' );
		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'assets/css/phpshark-template-public.css', array(), $this->version, 'all' );
	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Phpshark_Template_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Phpshark_Template_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		wp_enqueue_script( 'es6-script','https://cdnjs.cloudflare.com/ajax/libs/es6-shim/0.35.3/es6-shim.min.js', array(), '11062019', true );
		wp_enqueue_script( 'bootstrap-script', plugin_dir_url( __FILE__ ) . 'assets/bootstrap/js/bootstrap.min.js', array(), '4.0', true );
		wp_enqueue_script( 'jq-confirm-script', plugin_dir_url( __FILE__ ) . 'assets/vendor/jquery-confirm/dist/jquery-confirm.min.js', array(), '11062019', true );
		wp_enqueue_script( 'jquery-scrollbar-script', plugin_dir_url( __FILE__ ) . 'assets/vendor/minimenu/js/jquery.scrollbar.min.js', array(), '', true ); 
		wp_enqueue_script( 'minimenu-script', plugin_dir_url( __FILE__ ) . 'assets/vendor/minimenu/js/minimenu.js', array(), '', true );   
		wp_enqueue_script( 'datatable-script', plugin_dir_url( __FILE__ ) . 'assets/vendor/datatables/datatables.min.js', array(), '', true  );
		wp_enqueue_script( 'autocomplete-script', plugin_dir_url( __FILE__ ) . 'assets/vendor/autocomplete/wp-jquery.easy-autocomplete.js', array(), '', true );   
		wp_enqueue_script( 'autocomplete-load-script', plugin_dir_url( __FILE__ ) . 'assets/js/autocomplete.js', array(), '', true ); 
		wp_enqueue_script( 'formvalidaiton-script-1', plugin_dir_url( __FILE__ ) . 'assets/vendor/formvalidation.io/js/FormValidation.full.min.js', array(), '11062019', true );
		wp_enqueue_script( 'formvalidaiton-bs4', plugin_dir_url( __FILE__ ). 'assets/vendor/formvalidation.io/js/plugins/Bootstrap.min.js', array(), '11062019', true );
		wp_enqueue_script( 'formvalidaiton-captcha', plugin_dir_url( __FILE__ ) . 'assets/vendor/formvalidation.io/js/plugins/Recaptcha.min.js', array(), '11062019', true );
		wp_enqueue_script( 'formvalidaiton-script-2', plugin_dir_url( __FILE__ ) . 'assets/js/formValidation.js', array(), '11062019', true );
		wp_enqueue_script( 'js-scripts', plugin_dir_url( __FILE__ ) . 'assets/js/scripts.js', array( 'jquery' ), $this->version, true );
		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'assets/js/phpshark-template-public.js', array( 'jquery' ), $this->version, false );

	}

}
