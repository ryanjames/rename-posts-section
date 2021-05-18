<?php
/**
 * 
 * Rename Posts Section
 * 
 * @package   RenamePostsSection
 * @author    ryanjames
 * @link      https://ryanjam.es
 * @license   GPL-2.0-or-later
 * 
 * @wordpress-plugin
 * Plugin Name: Rename Posts Section
 * Plugin URI:  https://github.com/ryanjames/rename-posts-section
 * Description: Renames post section to Insights
 * Version:     1.0.0
 * Author:      Ryan James
 * Author URI:  https://ryanjam.es
 * Text Domain: applicant-pro-api
 * License:     GPL v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

add_action( 'init', 'cp_change_post_object' );
// Change dashboard Posts to Insights
function cp_change_post_object() {
    $get_post_type = get_post_type_object('post');
    $labels = $get_post_type->labels;
        $labels->name = 'Insights';
        $labels->singular_name = 'Insights';
        $labels->add_new = 'Add Post';
        $labels->add_new_item = 'Add Post';
        $labels->edit_item = 'Edit Post';
        $labels->new_item = 'Post';
        $labels->view_item = 'View Post';
        $labels->search_items = 'Search Insights';
        $labels->not_found = 'No Insight posts found found';
        $labels->not_found_in_trash = 'No Insight posts found in Trash';
        $labels->all_items = 'All Posts';
        $labels->menu_name = 'Insights';
        $labels->name_admin_bar = 'Insights';
}