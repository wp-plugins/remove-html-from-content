<?php
	/**
		* Plugin Name: Remove HTML From Content
		* Plugin URI: http://mesklin.net/projects/rhfc/
		* Description: Simple plugin that strips HTML tags from the content of WordPress pages and posts - useful for post aggregators or email notifications.
		* Version: 0.9
		* Author: Mesklin Net Technologies
		* Author URI: http://mesklin.net/
		* License: GPL2
	*/

	add_action( 'the_content', 'rhfc_do_filter', 0 );
	function rhfc_do_filter($content) {
		$tags = array(
			'strong',
			'em',
			'u',
			'b',
			'i',
			'a',
			'ul',
			'ol',
			'li',
			'br'
		);
		$content = strip_tags($content, $tags);

		return $content;
	}
?>
