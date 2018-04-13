<?php

class Ftblhood_Query_Items_Markup {
	public $post_id;
	public $args = array();
	public $classes = array();

	public function __construct($post_id, array $args = array()) {
		
		$default_args = array(
				'item-size' => 12, //Size in Bootstrap columns int 1 to 12
				'item-type' => 'col', // Can be 'col' (the item is wrapped by a bootstrap-col) or 'item' (no-wrap)
				'item-layout' => 'layered', //Options are horizontal, vertical, layered
				'button-text' => __('Leer más', 'ftblhood'),
				'img' => true,
				'title' => true,
				'excerpt' => true,
				'btn' => true,
				'extra-class' => 'normal-article'
		);

		$this->args = array_merge($default_args, $args);		
		$this->post_id = $post_id;

	}

	public function get_post_item_markup($the_query_size = 0, $post_count = 0) {
		$column_class = "";
		$post_item = "";
		
		if($this->args['item-type'] == 'col') { 
			$column_class = " col-md-" . $this->args['item-size'];
		}

		/* if($the_query_size != $post_count && $this->args['item-type'] == 'col') {
			$post_item .= $this->open_row_markup($post_count);
		}*/
		
		$post_item .= '<div class="layout-' . $this->args['item-layout']  . $column_class . ' ' . $this->args['extra-class'] . '">';
		$post_item .= '<article>';

		if($this->args['img']) {
			$post_item .= $this->get_featured_img_markup();
		}

		$post_item .= '<div class="article-info">';

		if($this->args['title']) {
			$post_item .= $this->get_title_markup();
		}

		if($this->args['excerpt']) {
			$post_item .= $this->get_excerpt_markup();
		}

		$post_item .= '</div>';
		$post_item .= '</article>';
		
		if($this->args['btn']) {
			$post_item .= $this->get_more_button_markup();
		}
		
		$post_item .= '</div>';

		/*if($the_query_size == $post_count && $this->args['item-type'] == 'col') {
	    	$post_item .= $this->close_row_markup();
	    }*/

		return $post_item;
	}

	public function get_featured_img_markup() {
		
		$featured_img_markup = '<div class="article-img">';
		$featured_img_markup .= '<figure><img src="' . get_the_post_thumbnail_url($this->post_id,'full') . '"></figure>';
		$featured_img_markup .= '</div>';

		return $featured_img_markup;

	}

	public function get_title_markup() {
		
		$title_markup = '<div class="article-title">';
		$title_markup .= '<header><h2>' . get_the_title($this->post_id) . '</h2></header>';
		$title_markup .= '</div>';

		return $title_markup;

	}

	public function get_excerpt_markup() {
		
		$excerpt_markup = '<div class="article-excerpt">';
		$excerpt_markup .= '<p>' . get_the_excerpt($this->post_id) . '</p>';
		$excerpt_markup .= '</div>';

		return $excerpt_markup;

	}

	public function get_more_button_markup() {
		
		$button_markup = '<div class="article-button">';
		$button_markup .= '<a href="' . get_the_permalink($this->post_id) . '">' . $this->args['button-text'] . '</a>';
		$button_markup .= '</div>';

		return $button_markup;

	}
}