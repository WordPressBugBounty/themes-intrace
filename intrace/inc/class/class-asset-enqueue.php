<?php
/**
 * Block Pattern Class
 *
 * @author Jegstudio
 * @package intrace
 */
namespace Intrace;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Init Class
 *
 * @package intrace
 */
class Asset_Enqueue {
	/**
	 * Class constructor.
	 */
	public function __construct() {
        add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ), 20 );
		add_action( 'enqueue_block_assets', array( $this, 'enqueue_scripts' ) );
        add_action( 'admin_enqueue_scripts', array( $this, 'admin_scripts' ), 20 );
	}

    /**
	 * Enqueue scripts and styles.
	 */
	public function enqueue_scripts() {
		wp_enqueue_style( 'intrace-style', get_stylesheet_uri(), array(), INTRACE_VERSION );

				wp_enqueue_style( 'intrace-preset', trailingslashit( get_template_directory_uri() ) . '/assets/css/intrace-preset.css', array(), INTRACE_VERSION );
		wp_enqueue_style( 'intrace-custom-styling', trailingslashit( get_template_directory_uri() ) . '/assets/css/intrace-custom-styling.css', array(), INTRACE_VERSION );
		wp_enqueue_script( 'intrace-animation-script', trailingslashit( get_template_directory_uri() ) . '/assets/js/intrace-animation-script.js', array(), INTRACE_VERSION, true );


        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
    }

	/**
	 * Enqueue admin scripts and styles.
	 */
	public function admin_scripts() {
		
    }
}
