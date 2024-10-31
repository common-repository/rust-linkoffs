RustLinkoffs v1.0 Beta 2
-GNU GPL Licensed http://www.gnu.org/licenses/gpl.html
Jan 11 2004
----------
http://russ.innereyes.com/wordpress-plugins/

Description:
This plugin returns an unordered list of links drawn from the custom fields in a post.

Directions:
1) Upload "rust_linkoffs.php" to your /wp-content/plugins folder,
2) Activate the plugin.
3) Edit your "index.php" file and add the following tag within the Loop:

		<?php ShowRustLinkoffs(); ?>

4) Add a "rustLinkoffsPost" class to your stylesheet if you want.
5) Done!

Parameters:
	ShowRustLinkoffs(true|false,$sTitle);
The first parameter can be set to TRUE or FALSE (1 or 0, respectively). If TRUE, links will open in a new window. Default is FALSE.
The second is a string value that contains the title you want to appear above the list. Default is empty.

Example:
	ShowRustLinkoffs(FALSE,"<h4>Linkoff List</h4>");

Usage:
1) Create a new post or edit an existing one.
2) Add a "Custom Field" and name it "linkoff" (without the quote marks, natch).
3) Put your URL (don't forget the http:// part!) and then the description (optional) in the "Value" field.
	For example: http://wordpress.org WordPress rules! Booya!
4) Save/Update the post.
5) Done!

Limitations:
Because the plugin relies on post meta-data for it's input, the linkoffs must always be associated with a post.

Have fun!

russ@innereyes.com
