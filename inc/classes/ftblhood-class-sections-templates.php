<?php

class Ftblhood_Sections_Templates {

	public $args = array();
	
	public function __construct(array $args = array()) {
		$default_args = array(
			'query_args' => array(),
			
			'section_args' => array(
				'container_class' => 'container', 
				'row_classes' => 'row'
			),

			'markup_args' => array()
		);

		$this->args = array_merge($default_args, $args);
	}

	public function get_main_section_template($main_post_cat, $recent_posts_cat) {

		$main_post_new_args = array(
			'query_args' => array(
				'cat' => $main_post_cat,
				'posts_per_page' => 1
			),

			'markup_args' => array(
				'item-type' => 'item'
			)
		);	

		$main_post_args = $this->modify_args($main_post_new_args);

		$recent_posts_new_args = array(
			'query_args' => array(
				'cat' => $recent_posts_cat,
				'posts_per_page' => 3
			),

			'markup_args' => array(
				'item-type' => 'item',
				'excerpt' => false
			)
		);	

		$recent_posts_args = $this->modify_args($recent_posts_new_args);	

		$hero_area_markup = self::open_container();

		$hero_area_markup .= self::open_row();

		$hero_area_markup .= $this->open_bootstrap_column(8, "main-post-col no-gutter");

		$hero_area_markup .= $this->get_section_html_contents($main_post_args);

		$hero_area_markup .= self::close_divs(1);

		$hero_area_markup .= $this->open_bootstrap_column(4, "main-recent-posts no-gutter");

		$hero_area_markup .= $this->get_section_html_contents($recent_posts_args);

		$hero_area_markup .= self::close_divs(3);

		return $hero_area_markup;

	}

	public function get_grid_template($grid_cat, $items_qty, $item_size) {
		$grid_new_args = array(
			'query_args' => array(
				'cat' => $grid_cat,
				'posts_per_page' => $items_qty
			),

			'markup_args' => array(
				'item-size' => $item_size,
				'excerpt' => false,
				'extra-class' => 'three-col-grid no-gutter'
			)
		);	

		$grid_args = $this->modify_args($grid_new_args);
		
		$hero_area_markup = self::open_container();

		$hero_area_markup .= self::open_row();

		$hero_area_markup .= $this->get_section_html_contents($grid_args);

		$hero_area_markup .= self::close_divs(2);

		return $hero_area_markup;
	}

	public function get_three_columns_template($first_col_cat, $second_col_cat, $third_col_cat) {
		
		$first_col_new_args = array(
			'query_args' => array(
				'cat' => $first_col_cat,
				'posts_per_page' => 5
			),

			'markup_args' => array(
				'item-type' => 'item',
				'item-layout' => 'horizontal',
				'extra-class' => 'three-col-half'
			)
		);	

		$first_col_args = $this->modify_args($first_col_new_args);

		$second_col_new_args = array(
			'query_args' => array(
				'cat' => $second_col_cat,
				'posts_per_page' => 5
			),

			'markup_args' => array(
				'item-type' => 'item',
				'item-layout' => 'vertical',
				'excerpt' => false,
				'extra-class' => 'three-col-two'
			)
		);	

		$second_col_args = $this->modify_args($second_col_new_args);	

		$third_col_new_args = array(
			'query_args' => array(
				'cat' => $third_col_cat,
				'posts_per_page' => 5
			),

			'markup_args' => array(
				'item-type' => 'item',
				'item-layout' => 'vertical',
				'excerpt' => false,
				'extra-class' => 'three-col-two'
			)
		);	

		$third_col_args = $this->modify_args($third_col_new_args);
		
		$hero_area_markup = self::open_container();

		$hero_area_markup .= self::open_row();

		$hero_area_markup .= self::open_bootstrap_column(8, "no-gutter");

		$hero_area_markup .= $this->get_section_html_contents($first_col_args);

		$hero_area_markup .= self::close_divs(1);

		$hero_area_markup .= self::open_bootstrap_column(2, "no-gutter");

		$hero_area_markup .= $this->get_section_html_contents($second_col_args);

		$hero_area_markup .= self::close_divs(1);

		$hero_area_markup .= self::open_bootstrap_column(2, "no-gutter");

		$hero_area_markup .= $this->get_section_html_contents($third_col_args);

		$hero_area_markup .= self::close_divs(3);

		return $hero_area_markup;
	}

	public function get_section_title($text) {
		return '<h2 class="section-title">' . $text . '</h2>';
	}

	public function get_section_html_contents($args) {
		$items_obj = new Ftblhood_Query_Results($args['query_args'], $args['markup_args']);
		$items_markup = $items_obj->get_query_items();

		return $items_markup;
	}

	static function open_bootstrap_column($col_size, $extra_class = 'normal-column') {
		return '<div class="col-md-' . $col_size . ' ' . $extra_class . '" >';
	}

	public function modify_args($new_args) {
		$modified_args = array_merge($this->args, $new_args);
		return $modified_args;
	}

	static function open_container($container_class = 'container') {
		return '<div class="' . $container_class .'" >';
	}

	static function open_row($row_classes = 'row') {
		return '<div class="' . $row_classes .'" >';
	}

	static function close_divs($divs_qty) {		
		return str_repeat("</div>", $divs_qty);
	}

}