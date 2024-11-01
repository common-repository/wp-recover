=== WP-Recover ===
Contributors: opensourcebattlefield, stuartcryan
Donate link: http://www.opensourcebattlefield.com
Tags: recover, settings, emergency, unlock, admin
Requires at least: 2.0.2
Tested up to: 3.0
Stable tag: 1.1

A script to allow easy recovery when you accidentally lock yourself out of Wordpress.

== Description ==

*** PLEASE NOTE *** WP-RECOVER is not a standard Wordpress plugin. In order to use it please read the Installation Instructions

WP-Recover has been designed to allow you to get back into Wordpress easily (i.e. without having to make database modifications) when you accidentally stuff something up.

For the first initial release, the only feature that has been enabled is the ability to change the URL of your wordpress installation. This can assist if you have entered the URL incorrectly and are no longer able to access the admin panel.

<p>Project Details</p>
Author: Stuart Ryan (http://www.StuartRyan.com)<br>
Project Homepage: http://www.opensourcebattlefield.com/display/wprecover/Home<br>
Bug Tracking/Support: http://jira.opensourcebattlefield.com/browse/WPRECOVER

== Installation ==

Note: WP-Recover is not designed to be installed like other plugins. You should download the zip file and upload only recover.php to your root Wordpress Folder.

*** Usage ***

1. Upload recover.php to your root wordpress folder (the same folder that wp-config.php exists in).
2. Open your wp-config.php file however you would like and get the first five charaters of the AUTH_KEY string (excluding the ' )
3. In a web browser access http://www.yoursite.com/yourwordpressfolder/recover.php
4. Enter the new URL for your site (ensuring it is in the format 'http://www.yoursite.com/yourwordpressfolder' without the '')
5. Select which option you would like to update either the "home" option or the "siteurl" option or both.
5. Click Submit
6. Once you receive a confirmation message DELETE recover.php from your wordpress folder. Leaving it there is a DRASTIC security risk.
7. If you try to update one of the options and you are still unable to access your blog correctly try the "both" option.

== Changelog ==

= 1.1 =
* Added the ability to recover the "home" option as well.

= 1.0 =
* Initial Release

== Upgrade Notice ==

= 1.1 =
Additional recovery options added to script. You can now recover the "home" option as well as "siteurl"

= 1.0 =
First Stable Release
