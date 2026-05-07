<?php
/**
 * Theme Functions
 *
 * @author Jegstudio
 * @package intrace
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

defined( 'INTRACE_VERSION' ) || define( 'INTRACE_VERSION', '1.2.1' );
defined( 'INTRACE_DIR' ) || define( 'INTRACE_DIR', trailingslashit( get_template_directory() ) );

defined( 'GUTENVERSE_COMPANION_REQUIRED_VERSION' ) || define( 'GUTENVERSE_COMPANION_REQUIRED_VERSION', '2.1.4' );
defined( 'GUTENVERSE_LIBRARY_SERVER' ) || define( 'GUTENVERSE_LIBRARY_SERVER', 'https://gutenverse.com' );

require get_parent_theme_file_path( 'inc/autoload.php' );

Intrace\Init::instance();
