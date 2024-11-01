<?php

class WP_DBug_Debug_Bar_Panel extends Debug_Bar_Panel {
	public function init() {
		$this->title( __( 'WP DBug', 'wp-dbug' ) );

		add_filter( 'debug_bar_title', array( $this, 'debug_bar_title' ), 10, 1 );
	}//end init

	public function is_visible() {
		global $wp_dbug;

		return count( $wp_dbug->logs );
	}//end is_visible

	public function debug_bar_classes( $classes ) {
		global $wp_dbug;

		if ( count( $wp_dbug->logs ) ) {
			$classes[] = 'debug-bar-dbug';
		}//end if

		return $classes;
	}//end debug_bar_classes

	/**
	 * alter the title of the debug bar label to show wp-dbug counts if there are
	 * logged variables
	 *
	 * @param $title string Title of the debug line
	 */
	public function debug_bar_title( $title ) {
		global $wp_dbug;

		if ( ! count( $wp_dbug->logs ) ) {
			return $title;
		}//end if

		return $title . ' (wp-dbug dumps: ' . count( $wp_dbug->logs ) . ' )';
	}//end debug_bar_title

	public function render() {
		global $wp_dbug;

		echo '<div id="wp-dbug-dumps">';

		if ( $wp_dbug->logs ) {
			foreach ( $wp_dbug->logs as $dbug ) {
				if ( $dbug['title'] ) {
					echo '<h3>' . $dbug['title'] . '</h3>';
				}//end if

				echo '<h4><code>' . $dbug['backtrace'][0]['file'] . '</code> line ' . $dbug['backtrace'][0]['line'] . '</h4>';
				echo $dbug['dump'];
			}//end foreach
		} else {
			echo '<h3>Use <code>wp_dbug</code> to dump data here.</h3>';
		}//end else
		echo '</div>';
	}//end render
}//end class
