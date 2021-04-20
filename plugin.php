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
 * Description: Renames post section to News
 * Version:     1.0.0
 * Author:      Ryan James
 * Author URI:  https://ryanjam.es
 * Text Domain: applicant-pro-api
 * License:     GPL v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

add_action( 'init', 'cp_change_post_object' );
// Change dashboard Posts to News
function cp_change_post_object() {
    $get_post_type = get_post_type_object('post');
    $labels = $get_post_type->labels;
        $labels->name = 'News';
        $labels->singular_name = 'News';
        $labels->add_new = 'Add News';
        $labels->add_new_item = 'Add News';
        $labels->edit_item = 'Edit News';
        $labels->new_item = 'News';
        $labels->view_item = 'View News';
        $labels->search_items = 'Search News';
        $labels->not_found = 'No News found';
        $labels->not_found_in_trash = 'No News found in Trash';
        $labels->all_items = 'All News';
        $labels->menu_name = 'News';
        $labels->name_admin_bar = 'News';
}