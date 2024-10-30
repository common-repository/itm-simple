/*jslint browser: true*/
/*global $, jQuery, alert*/
'use strict';
jQuery(document).ready(function () {
    //jQuery(".itm_simple_hidden").hide();
    //jQuery(".itm_simple_hide").hide();
    
    jQuery(".itm_simple_show").click(function () {
        jQuery(this).nextAll(".itm_simple_hidden").show();
        jQuery(this).prev(".itm_simple_hide").show();
    });

    jQuery(".itm_simple_hide").click(function () {
        jQuery(this).nextAll(".itm_simple_hidden").hide();
        jQuery(".itm_simple_hide").hide();
    });

    jQuery(".itm_simple_slidetoggle").click(function () {
        jQuery(this).next(".itm_simple_hidden").slideToggle("slow");
    });

    jQuery(".itm_simple_sldtggl").click(function () {
        jQuery(this).next(".itm_simple_hddn").slideToggle("fast");        
         jQuery(this).toggleClass("itm_simple_opened");
        
    });

    jQuery(".itm_simple_sldtggl").hover (function () {
        jQuery(this).css("backgroundColor","lightgrey");  
        jQuery(this).css("color","black");        
    }, function(){
        jQuery(this).css("backgroundColor","white");
        jQuery(this).css("color","#0040ff");
        });
 
});