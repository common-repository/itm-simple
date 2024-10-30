=== Itm Simple Hide ===
Contributors: capbussat
Donate link: http://aprendesap.com/worpress-plugin-itm-simple
Tags: jquery, javascript, hide/show text
Requires at least: 3.5
Tested up to: 6.0
Stable tag: /trunk/

A simple plugin which allows to show or hide text by clicking in text above it (or button) . You can place html code on any page/post. Yoy may use this plugin as a base for creating a simple plugin using jQuery.

== Description ==

A simple plugin for wordpress which allows to show some text by clicking on other text in any page or post.
This plugin can be used as an example to create a simle plugin in Wordpress that uses Javascript and JQuery from Google CDN
This plugin is available under the GPL license, which means that it's free. 

== Installation ==
Just use Wordpress installation. Use example code on example.txt

== Frequently Asked Questions == 
Check help in [aprendebcn.com] (https://aprendebcn.com/wordpress-plugin-itm-simple)

== Changelog ==

= Version 3.4 =

* Tested up to 6.0
* Simplified CSS
* Improved examples
* Changed url to [aprendebcn.com] (https://aprendebcn.com/wordpress-plugin-itm-simple)

= Version 3.3 =
* Tested up to Wordpress 5.1.1^
* Introduced new style for a FAQ like page
* Added new styles: itm_simple_container, itm_simple_sldtggl, itm_simple_hddn, itm_simple_opened (Keep order in css file of itm_simple_sldtggl::before and itm_simple_opened::before)
* Updated example

= Version 3.2 =
* Some changes in plugin file names
* More code cleaning
* Minor adjustements in CSS
* Improved example in html

= Version 3.1 =
* Tested with Wordpress 4.9
* Cleaned code 
* Added prefix itm-simple or itm_simple

= Version 3.0 =
Tested with WP 4.6 version
Changed file name example.txt to example.html (This way you can see highlighted code)
Minor fixes in explanations example.html 
Deprecated old behaviour. Added new behaviour. See example inreadme.txt for example HTML code. 

= Version 2.0  =

This plugin contains 4 files
 * itm-simple.php register script and uses jQuery from Google's CDN
 * itm-simple.js contains javascript with functionality that hides and shows text, any html links and images
 * itm-simple.css contain CSS to change style
 * readme.txt contains an example of HTML code that hides and shows text, HTML links and images

== Example ==

/* Example copy-and paste this HTML code in any post or page to hide and show some text, images or url 
  	<div class="itm_simple_slidetoggle"> Click here to toggle next  DIV </div>
	<div class="itm_simple_hidden">Here you may place any HTML text, Url , Video Iframe or  images to hide.</div>	

	<div class="itm_simple_all_content">
	<div ><strong>Title</strong> or previous text </div> 
	<div class="itm_simple_hide">[ - ]</div><div class="itm_simple_show">[ + ]</div>
	This content shows at the right side of [ + ] 
	<div class="itm_simple_hidden">Here you may place any HTML text, Url , Video Iframe or  images to hide.</div>	
	</div>
			
			
*/
