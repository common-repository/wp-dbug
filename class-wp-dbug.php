<?php

class WP_DBug {
	public $logs = array();

	// this variable is used to suppress dbug messages AFTER the debug bar panels
	// have been initialized
	public $only_show_in_panel = FALSE;

	public function __construct() {
		add_filter( 'debug_bar_panels', array( $this, 'debug_bar_panels' ), 10, 1 );
	}//end __construct

	/**
	 * if the debug bar plugin is installed, push wp_dbug output to the debug bar
	 */
	public function debug_bar_panels( $panels ) {
		$this->only_show_in_panel = TRUE;

		include_once __DIR__ . '/class-wp-dbug-debug-bar-panel.php';

		$panel  = new WP_DBug_Debug_Bar_Panel;
		$panels = array_merge( array( $panel ), $panels );

		return $panels;
	}//end debug_bar_panels

	/**
	 * log the wp_dbugged variable
	 *
	 * if the debug bar plugin has been installed, move all dbug output to the debug bar
	 *
	 * @param give the debug output a title
	 */
	public function log( $var, $title = null ) {
		ob_start();

		$var_dump = new dBug( $var );

		$output = ob_get_clean();

		$this->logs[] = array(
			'title'     => $title,
			'dump'      => $output,
			'backtrace' => debug_backtrace(),
		);

		if ( ! $this->only_show_in_panel ) {
			echo $output;
		}//end if

		return;
	}//end log
}//end class
