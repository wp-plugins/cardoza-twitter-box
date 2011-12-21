<?php
   /*
   Plugin Name: Cardoza Twitter Box
   Plugin URI: http://fingerfish.com/cardoza-twitter-box/ ?
   Description: Cardoza Twitter Box enables you to display the tweets in your website.
   Version: 1.0
   Author: Vinoj Cardoza
   Author URI: http://fingerfish.com/about-me/
   License: GPL2
   */
   
wp_enqueue_style('ctbox-css', plugin_dir_url(__FILE__). 'includes/cardoza_twitter_profile.css');
wp_enqueue_script('ctbox-handle','http://widgets.twimg.com/j/2/widget.js');
wp_enqueue_script('ctbox-js-handle', plugin_dir_url(__FILE__). 'includes/cardoza_twitter_profile.js',array('jquery'));
add_action("plugins_loaded", "cardoza_twitter_box_init");
add_action("admin_menu", "cardoza_twitter_box_options");
add_shortcode("cardoza_twitter_box", "cardoza_twitter_box_sc");

require('includes/cardoza_twitter_profile_forms.php');
require('includes/cardoza_twitter_profile_functions.php');

//The following function will retrieve all the avaialable 
//options from the wordpress database

function cardoza_twitter_box_options(){
	add_menu_page(
		__('Twitter Box'), 
		'Twitter Box', 
		'manage_options', 
		'slug_for_twitter_box', 
		'cardoza_twitter_box_options_page',
		plugin_dir_url(__FILE__).'includes/Vinoj.jpg');
}


function cardoza_twitter_box_init(){
	register_sidebar_widget(__('Cardoza\'s Twitter Box'), 'widget_cardoza_twitter_box');
}


?>