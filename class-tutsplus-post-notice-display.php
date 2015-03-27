<?php

class TutsPlus_Post_Notice_Display {

	public function initialize() {

		add_filter( 'the_content', array( $this, 'display_notice' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_styles' ) );

	}

	public function display_notice( $content ) {

		$notice = get_post_meta( get_the_ID(), 'tutsplus-post-notice', true );
		if ( '' != $notice ) {

			$notice_html = '<div id="tutsplus-post-notice">';
				$notice_html .= $notice;
			$notice_html .= '</div>';

			$content = $notice_html . $content;

		}

		return $content;

	}

	public function enqueue_styles() {

		wp_enqueue_style(
			'tutsplus-post-notice',
			plugins_url( 'tutsplus-post-notice/assets/css/public.css' ),
			array(),
			'1.0.0'
		);

	}

}