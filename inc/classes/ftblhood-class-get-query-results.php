<?php

/**
 * Post items markup.
 */

class Ftblhood_Query_Results {

	public $args = array();
	public $markup_args = array();
	public $col_count = 0;

	public function __construct($args = array(), $markup_args = array()) {

		$default_args = array(
			'post_type'		 => 'post',
			'posts_per_page' => -1
		);

		$this->markup_args = $markup_args;

		$this->args = array_merge($default_args, $args);

	}

	public function get_query_items() {

		$section_markup = "";
		
		$post_count = 0;
		
		$the_query = new WP_Query($this->args);

		$the_query_size = count($the_query);
		
		if($the_query->have_posts()) {
			while($the_query->have_posts()) {
				
				$the_query->the_post();

				$post_count++;

				$post_id = get_the_ID();

				$markup_object = new Ftblhood_Query_Items_Markup($post_id, $this->markup_args);							

				$section_markup .= $markup_object->get_post_item_markup($the_query_size, $post_count);		    
			}
		}

		wp_reset_query();

		return $section_markup;
	}

}
