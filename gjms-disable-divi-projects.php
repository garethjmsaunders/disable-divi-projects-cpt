<?php
/**
 * Plugin Name: Disable Divi Projects
 * Version: 1.0.0
 * Plugin URI: https://github.com/garethjmsaunders/disable-divi-projects-cpt
 * Description: Disable Divi Projects custom post type
 * Author: Gareth Saunders
 * Author URI: https://www.garethjmsaunders.co.uk
 * Requires at least: 6.0
 * Tested up to: 6.5
 *
 * Text Domain: gjms-disable-divi-projects
 * Domain Path: /lang/
 *
 * @package WordPress
 * @author Gareth Saunders
 * @since 1.0.0
 */

/**
 *    This will hide the Divi "Project" post type.
 *    Thanks to georgiee (https://gist.github.com/EngageWP/062edef103469b1177bc#gistcomment-1801080) for his improved solution.
 */
add_filter( 'et_project_posttype_args', 'mytheme_et_project_posttype_args', 10, 1 );
function mytheme_et_project_posttype_args( $args ) {
    return array_merge( $args, array(
        'public'              => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => false,
        'show_in_nav_menus'   => false,
        'show_ui'             => false
    ));
}