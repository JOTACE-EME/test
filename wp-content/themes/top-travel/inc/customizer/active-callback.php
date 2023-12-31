<?php
/**
 * Customizer active callbacks
 *
 * @package Theme Palace
 * @subpackage Top Travel Pro
 * @since Top Travel Pro 1.0.0
 */


if ( ! function_exists( 'top_travel_is_breadcrumb_enable' ) ) :
	/**
	 * Check if breadcrumb is enabled.
	 *
	 * @since Top Travel Pro 1.0.0
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function top_travel_is_breadcrumb_enable( $control ) {
		return $control->manager->get_setting( 'top_travel_theme_options[breadcrumb_enable]' )->value();
	}
endif;

if ( ! function_exists( 'top_travel_is_pagination_enable' ) ) :
	/**
	 * Check if pagination is enabled.
	 *
	 * @since Top Travel Pro 1.0.0
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function top_travel_is_pagination_enable( $control ) {
		return $control->manager->get_setting( 'top_travel_theme_options[pagination_enable]' )->value();
	}
endif;

if ( ! function_exists( 'top_travel_is_static_homepage_enable' ) ) :
	/**
	 * Check if static homepage is enabled.
	 *
	 * @since Top Travel Pro 1.0.0
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function top_travel_is_static_homepage_enable( $control ) {
		return ( 'page' == $control->manager->get_setting( 'show_on_front' )->value() );
	}
endif;

/**
 * Front Page Active Callbacks
 */


/**
 * Check if topbar section is enabled.
 *
 * @since Top Travel Pro 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function top_travel_is_topbar_section_enable( $control ) {
	return ( $control->manager->get_setting( 'top_travel_theme_options[top_section_enable]' )->value() );
}


/**
 * Check if slider section is enabled.
 *
 * @since Top Travel Pro 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function top_travel_is_slider_section_enable( $control ) {
	return ( $control->manager->get_setting( 'top_travel_theme_options[slider_section_enable]' )->value() );
}


/**
 * Check if slider section content type is page.
 *
 * @since Top Travel Pro 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function top_travel_is_slider_section_content_page_enable( $control ) {
	$content_type = $control->manager->get_setting( 'top_travel_theme_options[slider_content_type]' )->value();
	return top_travel_is_slider_section_enable( $control ) && ( 'page' == $content_type );
}



function top_travel_is_slider_section_content_trip_enable( $control ) {
	$content_type = $control->manager->get_setting( 'top_travel_theme_options[slider_content_type]' )->value();
	return top_travel_is_slider_section_enable( $control ) && ( 'trip' == $content_type );
}




/**
 * Check if popular destination section is enabled.
 *
 * @since Top Travel Pro 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function top_travel_is_popular_destination_section_enable( $control ) {
	return ( $control->manager->get_setting( 'top_travel_theme_options[popular_destination_section_enable]' )->value() );
}

/**
 * Check if popular destination section content type is page.
 *
 * @since Top Travel Pro 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function top_travel_is_popular_destination_section_content_page_enable( $control ) {
	$content_type = $control->manager->get_setting( 'top_travel_theme_options[popular_destination_content_type]' )->value();
	return top_travel_is_popular_destination_section_enable( $control ) && ( 'page' == $content_type );
}


/**
 * Check if popular destination section content type is trip.
 *
 * @since Top Travel Pro 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function top_travel_is_popular_destination_section_content_trip_enable( $control ) {
	$content_type = $control->manager->get_setting( 'top_travel_theme_options[popular_destination_content_type]' )->value();
	return top_travel_is_popular_destination_section_enable( $control ) && ( 'trip' == $content_type );
}



/**
 * Check if about section is enabled.
 *
 * @since Top Travel Pro 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function top_travel_is_about_section_enable( $control ) {
	return ( $control->manager->get_setting( 'top_travel_theme_options[about_section_enable]' )->value() );
}

/**
 * Check if about section content type is post.
 *
 * @since Top Travel Pro 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function top_travel_is_about_section_content_post_enable( $control ) {
	$content_type = $control->manager->get_setting( 'top_travel_theme_options[about_content_type]' )->value();
	return top_travel_is_about_section_enable( $control ) && ( 'post' == $content_type );
}

/**
 * Check if about section content type is page.
 *
 * @since Top Travel Pro 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function top_travel_is_about_section_content_page_enable( $control ) {
	$content_type = $control->manager->get_setting( 'top_travel_theme_options[about_content_type]' )->value();
	return top_travel_is_about_section_enable( $control ) && ( 'page' == $content_type );
}

/**
 * Check if about section content type is custom.
 *
 * @since Top Travel Pro 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function top_travel_is_about_section_content_custom_enable( $control ) {
	$content_type = $control->manager->get_setting( 'top_travel_theme_options[about_content_type]' )->value();
	return top_travel_is_about_section_enable( $control ) && ( 'custom' == $content_type );
}

/**
 * Check if about section wp travel is enabled.
 *
 * @since Top Travel Pro 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function top_travel_is_about_section_content_destination_enable( $control ) {
	$content_type = $control->manager->get_setting( 'top_travel_theme_options[about_content_type]' )->value();
	return top_travel_is_about_section_enable( $control ) && class_exists( 'WP_Travel' );
}




/**
 * Check if package section is enabled.
 *
 * @since Top Travel Pro 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function top_travel_is_package_section_enable( $control ) {
	return ( $control->manager->get_setting( 'top_travel_theme_options[package_section_enable]' )->value() );
}

/**
 * Check if package section content type is category.
 *
 * @since Top Travel Pro 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function top_travel_is_package_section_content_category_enable( $control ) {
	$content_type = $control->manager->get_setting( 'top_travel_theme_options[package_content_type]' )->value();
	return top_travel_is_package_section_enable( $control ) && ( 'category' == $content_type );
}

/**
 * Check if package section content type is trip types.
 *
 * @since Top Travel Pro 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function top_travel_is_package_section_content_trip_types_enable( $control ) {
	$content_type = $control->manager->get_setting( 'top_travel_theme_options[package_content_type]' )->value();
	return top_travel_is_package_section_enable( $control ) && ( 'trip-types' == $content_type );
}



/**
 * Check if service section is enabled.
 *
 * @since Top Travel Pro 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function top_travel_is_service_section_enable( $control ) {
	return ( $control->manager->get_setting( 'top_travel_theme_options[service_section_enable]' )->value() );
}



/**
 * Check if testimonial section is enabled.
 *
 * @since Top Travel Pro 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function top_travel_is_testimonial_section_enable( $control ) {
	return ( $control->manager->get_setting( 'top_travel_theme_options[testimonial_section_enable]' )->value() );
}


/**
 * Check if subscription section is enabled.
 *
 * @since Top Travel Pro 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function top_travel_is_subscription_section_enable( $control ) {
	return ( $control->manager->get_setting( 'top_travel_theme_options[subscription_section_enable]' )->value() );
}


/**
 * Check if counter section is enabled.
 *
 * @since Top Travel Pro 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function top_travel_is_counter_section_enable( $control ) {
	return ( $control->manager->get_setting( 'top_travel_theme_options[counter_section_enable]' )->value() );
}

