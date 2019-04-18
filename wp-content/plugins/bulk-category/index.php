<?php
/*
Plugin Name: Bulk Category
Description: Import, export and delete categories from a csv/text file with category parent, name, description, and slug. Delete categories listed in a file. Assign a post to the categories, reset the relationships of a post. Export all categories to a file. Delete all categories. Delete all categories.
Version: 0.1.1
Plugin URI: http://microdataproject.org
Plugin URI: contact@microdataproject.org
Author: Christopher Dubeau
Author URI: mailto:me@christopherdubeau.com
Author URI: http://christopherdubeau.com
Contributor: Sid Creations
Contributor URI: mailto:contact@sidcreations.com
Contributor URI: http://sidcreations.com


Copyright 2013  Microdata Project / Christopher Dubeau  (email : me@christopherdubeau.com, email: contact@microdataproject.org)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as 
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

*/


// DEFINE PLUGIN ID
define('MDP_BULK_IMPORT_CATEGORY', 'mdp_bulk_import_category');
// DEFINE PLUGIN NICK
define('MDP_BULK_IMPORT_CATEGORY_NICK', 'Bulk Categoy');


if (!class_exists('bulkCategory')){
    
    class bulkCategory{
        
        public $mdp_name;
        
        public function __construct(){
            
            $this->name      = 'mdpBulkImportCategory';            
            
            register_activation_hook(__FILE__, array($this, 'activate'));
            register_deactivation_hook(__FILE__, array($this, 'deactivate'));
            register_uninstall_hook(__FILE__, array($this, 'uninstall'));
            
        }
        
        /** function/activate
        * Usage: create tables if not exist and activates the plugin
        * Arg(0): null
        * Return: void
        */
        
        public function activate(){
            
        }
        
        /** function/deactivate
        * Usage: create tables if not exist and activates the plugin
        * Arg(0): null
        * Return: void
        */
        
        public function deactivate(){
            
        }
        
        /** function/uninstall
        * Usage: create tables if not exist and activates the plugin
        * Arg(0): null
        * Return: void
        */
        
        public function uninstall(){
            
            
        }
        
        /** function/file_path
        * Usage: includes the plugin file path
        * Arg(0): null
        * Return: void
        */
        
        public static function file_path($file){
            
            return ABSPATH.'wp-content/plugins/'.str_replace(basename( __FILE__ ),"",plugin_basename(__FILE__)).$file;
        }
        
        
        /** function/register_settings
        * Usage: registers the plugins options
        * Arg(0): null
        * Return: void
        */
        public static function register(){
            
            
        }
        
        
        /** function/method
        * Usage: hooking (registering) the plugin menu
        * Arg(0): null
        * Return: void
        */
        public static function menu(){
        $icon_url = str_replace(basename( __FILE__ ), "", plugin_basename(__FILE__) );
            add_menu_page(MDP_BULK_IMPORT_CATEGORY_NICK.' Plugin Options', MDP_BULK_IMPORT_CATEGORY_NICK, '10', MDP_BULK_IMPORT_CATEGORY.'_options', array('bulkCategory', 'options_page'), plugins_url( $icon_url.'mdp_icon32.png' ) );
        }
        
        /** function/options_page
        * Usage: show options/settings for plugin
        * Arg(0): null
        * Return: void
        */
        public static function options_page(){
            
            $plugin_id = MDP_BULK_IMPORT_CATEGORY;
            // display options page
            include(self::file_path('options.php'));
            
        }
    
    }
}

add_action('admin_init', array('bulkCategory', 'register'));
add_action('admin_menu', array('bulkCategory', 'menu'));
add_action('user_admin_menu', array('bulkCategory', 'menu'));

$bulkCategory = new bulkCategory();

?>