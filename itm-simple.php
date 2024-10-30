<?php

/*
Plugin Name: ITM SIMPLE HIDE
Plugin URI: https://aprendebcn.com/wordpress-plugin-itm-simple/
Description: A simple plugin that uses jQuery to hide parts of text
Author: Ignasi Tort
Author URI: https://aprendebcn.com/wordpress-plugin-itm-simple/
Version: 3.4
License: GNU 
*/
/*  Copyright 2013  Ignasi Tort  (email : ignasitort@gmail.com)

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
    function itm_simple_scripts_load()  
    {  
        // Deregister the included library  
        // wp_deregister_script( 'jquery' );  // Comment this line if you prefer to use jQuery from Google's CDN 
          
        // Register the library again from Google's CDN  
		// UnComment line below if you prefer to use Google's CDN, you may change version
        // wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js', array(), null, false );  
          
        // Register the script like this for a plugin:     
		wp_register_script( 'itm_simple_script', plugin_dir_url( __FILE__ ).'itm-simple.js', array('jquery'));
      
        // For either a plugin or a theme, you can then enqueue the script: 
        wp_enqueue_script( 'itm_simple_script');
    } 
    add_action( 'wp_enqueue_scripts', 'itm_simple_scripts_load' );  
    function itm_simple_styles_load()  
    {  
        // Register the style like this for a plugin:  
        wp_register_style( 'custom-style', plugin_dir_url( __FILE__ ) .'itm-simple.css' );  
        // or  
      
        // For either a plugin or a theme, you can then enqueue the style:  
        wp_enqueue_style( 'custom-style' );  
    }  
    add_action( 'wp_enqueue_scripts', 'itm_simple_styles_load' );  
?>