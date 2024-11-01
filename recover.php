<?php 
    /* Project: WP-RECOVER
     * Description: A script to allow easy recovery when you accidentally do something stupid
     *              in Wordpress.
     * 
     * Author: Stuart Ryan (http://www.StuartRyan.com)
     * Project Homepage: http://www.opensourcebattlefield.com/
     * Script Version: 1.0
     * 
     * Bug Tracking/support: http://jira.opensourcebattlefield.com/browse/WPRECOVER
     * 
     * This program is free software: you can redistribute it and/or modify
     * it under the terms of the GNU General Public License as published by
     * the Free Software Foundation, either version 3 of the License, or
     * (at your option) any later version.
     * 
     * This program is distributed in the hope that it will be useful,
     * but WITHOUT ANY WARRANTY; without even the implied warranty of
     * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
     * GNU General Public License for more details.
     * 
     * You should have received a copy of the GNU General Public License
     * along with this program.  If not, see <http://www.gnu.org/licenses/>.
     */
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=encoding">
<title>Wordpress Recovery Script</title>
</head>
<body>
<?php
require_once('wp-load.php');

if (isset ($_POST['submit']))
{
   if ($_POST['key'] == substr( AUTH_KEY, 0, 5))
   {
      if ($_POST['type'] == "home") {
   	     update_option('home', $_POST['url']);
   	     echo '<h4>"home" option has been updated you should now be able to access wordpress. If you are unable to try the BOTH option.</h4>
   	     <p>&nbsp;</p>
   	     <h3>***YOU SHOULD NOW DELETE THIS FILE. LEAVING THIS ON YOUR SERVER IS A DRASTIC SECURITY RISK***</h3>';
   	  }
   	  else if ($_POST['type'] == "siteurl"){
   	     update_option('siteurl', $_POST['url']);
   	     echo '<h4>"siteURL" option has been updated you should now be able to access wordpress. If you are unable to try the BOTH option.</h4>
   	     <p>&nbsp;</p>
   	     <h3>***YOU SHOULD NOW DELETE THIS FILE. LEAVING THIS ON YOUR SERVER IS A DRASTIC SECURITY RISK***</h3>';
   	  }
   	 else if ($_POST['type'] == "both"){
   	    update_option('home', $_POST['url']);
   	    update_option('siteurl', $_POST['url']);
   	    echo '<h4>Both "home" and "siteURL" options have been updated you should now be able to access wordpress!</h4>
   	    <p>&nbsp;</p>
   	     <h3>***YOU SHOULD NOW DELETE THIS FILE. LEAVING THIS ON YOUR SERVER IS A DRASTIC SECURITY RISK***</h3>';   	 }
   }
   else
   {
   	echo '<h4>Key Invalid - Please Try Again</h4>
   	<a href="recover.php">Click Here to Try Again</a>';
   }
}
else
{
   echo '<h4>Reset Wordpress Blog URL</h4><br>
   <h5>Instructions</h5>
   <ol>
      <li>In the folder where wordpress is installed on your server open up wp-config.php</li>
      <li>Note down the first five characters of the AUTH_KEY string, (not including the \' at the start)</li>
      <li>Put the URL to your blog in the box below in the following format \'http://www.myblog.com/myblogfolder\' (without the \'\')</li>
      <li>Put the first five characters of the AUTH_KEY string from your wp-config.php file below (if you don\'t have the AUTH_KEY string see the readme file for more details).</li>
      <li>Once you have updated the URL ***DELETE THIS FILE*** As it is a BIG security risk leaving it in your wordpress folder</li>
   </ol>
   <form action="recover.php" method="post"> 
   New URL: <input name="url" type="text" /><br> 
   <p>First 5 characters from the AUTH_KEY parameter in wp_config.php: <input name="key" type="text" /> </p>
   <p>Which Option should we update?</p>
   <input type="radio" name="type" value="home">"home" Option<br>
   <input type="radio" name="type" value="siteurl">"siteurl" Option<br>
   <input type="radio" name="type" value="both">Both "home" and "siteurl" Options<br>
   <input type="submit" name="submit" value="Submit" />
   </form>';
}
?>

</body>
</html>