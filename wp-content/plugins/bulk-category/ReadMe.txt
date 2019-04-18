=== Plugin Name ===
Contributors: christopherdubeau
Donate link: http://microdataproject.org/donate/
Tags: mdp, category, bulk category, import, export, delete, csv, txt, file, upload, relationship, taxanomy
Requires at least: 3.5.x
Tested up to: 3.6
Stable tag: 0.1.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Import, export and delete categories from a csv/text file with category parent, name, description, and slug.

== Description ==

Bulk Category makes it easy to bulk import, export and delete categories. Import from a csv/text file with category Name, Description, and Slug. Delete categories listed in a file. Assign a post to the categories, reset the relationships of a post. Export all categories to a file. Delete all categories.

	Import categories from csv/txt file
	Delete categories listed in a csv/txt file
	Delete all categories
	Add relationship from a post to all imported categories
	Reset all relationships of a post
	Export all categories

This plugin is intended for somewhat skilled developers. If you do not have access to the database, I recommend backing up your database before doing any modification. You may use the export button to back up the list of categories you presently have.

Any defect in your file of categories can cause issues with category hierarchy that you were not planning. It might take a few attempts to get it right, so better to be safe than sorry.

CSV file line example:

parent::name::description::slug

Uncategorized::New Category::This category is new::new-category

Want help with creating category files for locations?
Try our Bulk Category Generator http://microdataproject.org/city-state-wordpress-bulk-category-generator/

Need a list of US Citis and States?
Download City and State List http://microdataproject.org/city-and-state-list/


== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Upload `bulk-category` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= How many categories can I upload? =

As many as you want.

= Can I use parent relationships? =

Yes.

= Can I use txt or csv files? =

Yes.


= Will this erase my existing categories? =

No.

== Screenshots ==

1. This screen shot description corresponds to screenshot-1.png. Note that the screenshot is taken from the WordPress Admin area.
    
2. This screen shot description corresponds to screenshot-2.png. Select a file to upload and input the delimited for the file.

3. This screen shot description corresponds to screenshot-3.png. Assign relationship of a post to all categories you import. (Very useful with Yoast SEO since they create sitemaps from taxonomy and not categories.)

4. This screen shot description corresponds to screenshot-4.png. Select the action. From here you can choose to add categories, reset post relationships, delete categories from the uploaded file, delete all categories, and export all categories.

5. This screen shot description corresponds to screenshot-5.png. Output of results after you delete categories.

6. This screen shot description corresponds to screenshot-6.png. Output of results after you add categories.

7. This screen shot description corresponds to screenshot-7.png. Bulk Category tools including download lists for cities and states and a bulk category generator.

== Changelog ==

= Version 0.1.1
        Adjusted user permissions so only users with admin permissions can view the options page of the plug in.
        
= Version 0.1.0

== Upgrade Notice ==

= 0.1.1
        User should upgrade, adjusted user permissions of the menu. Only users with admin permissions can view the options page.

= 0.1.0 =
	First Version

