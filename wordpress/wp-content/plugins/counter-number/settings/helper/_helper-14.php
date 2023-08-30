<?php
$jsCode = "
jQuery(document).ready(function() {
  //General Setting
  jQuery(`      
      #con_6310_box_background_color_top,
      #con_6310_1st_title_background_color_top,
      #con_6310_1st_title_background_color_bottom,
      #con_6310_2nd_title_background_color_top,
      #con_6310_2nd_title_background_color_bottom,  
      #con_6310_3rd_title_background_color_top,
      #con_6310_3rd_title_background_color_bottom,
      #con_6310_4th_title_background_color_top,
      #con_6310_4th_title_background_color_bottom, 
      #con_6310_5th_title_background_color_top,
      #con_6310_5th_title_background_color_bottom,
      #con_6310_6th_title_background_color_top,
      #con_6310_6th_title_background_color_bottom,
      #con_6310_title_font_color,
      #con_6310_title_font_hover_color,
      #con_6310_details_font_hover_color, 
      #con_6310_icon_font_size,
      #con_6310_icon_color,
      #con_6310_icon_hover_color
     
      `).on('change', function() {
        var con_6310_box_background_color_top = jQuery('#con_6310_box_background_color_top').val();
        var con_6310_1st_title_background_color_top = jQuery('#con_6310_1st_title_background_color_top').val(); 
        var con_6310_1st_title_background_color_bottom = jQuery('#con_6310_1st_title_background_color_bottom').val();       
        var con_6310_2nd_title_background_color_top = jQuery('#con_6310_2nd_title_background_color_top').val(); 
        var con_6310_2nd_title_background_color_bottom = jQuery('#con_6310_2nd_title_background_color_bottom').val(); 
        var con_6310_3rd_title_background_color_top = jQuery('#con_6310_3rd_title_background_color_top').val(); 
        var con_6310_3rd_title_background_color_bottom = jQuery('#con_6310_3rd_title_background_color_bottom').val(); 
        var con_6310_4th_title_background_color_top = jQuery('#con_6310_4th_title_background_color_top').val(); 
        var con_6310_4th_title_background_color_bottom = jQuery('#con_6310_4th_title_background_color_bottom').val(); 
        var con_6310_5th_title_background_color_top = jQuery('#con_6310_5th_title_background_color_top').val(); 
        var con_6310_5th_title_background_color_bottom = jQuery('#con_6310_5th_title_background_color_bottom').val(); 
        var con_6310_6th_title_background_color_top = jQuery('#con_6310_6th_title_background_color_top').val(); 
        var con_6310_6th_title_background_color_bottom = jQuery('#con_6310_6th_title_background_color_bottom').val(); 
        var con_6310_icon_font_size = parseInt(jQuery('#con_6310_icon_font_size').val());
        var con_6310_icon_color = jQuery('#con_6310_icon_color').val();
        var con_6310_icon_hover_color = jQuery('#con_6310_icon_hover_color').val();
        var con_6310_title_font_color = jQuery('#con_6310_title_font_color').val();
        var con_6310_title_font_hover_color = jQuery('#con_6310_title_font_hover_color').val();
        var con_6310_details_font_hover_color = jQuery('#con_6310_details_font_hover_color').val();


        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-counter-icon{
          color: \${con_6310_icon_color} !important;
          font-size:  \${con_6310_icon_font_size}px !important;
          height: calc(\${con_6310_icon_font_size}px * 2 + 20px) !important;
          width: calc(\${con_6310_icon_font_size}px * 2 + 20px) !important;
          line-height: calc(\${con_6310_icon_font_size}px * 2 / 2) !important;
        }</style>`).appendTo('.con-6310-preview'); 

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-counter-icon{
          color: \${con_6310_icon_hover_color} !important;
        }</style>`).appendTo('.con-6310-preview'); 

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-counter-icon img{
          width:  \${con_6310_icon_font_size}px !important;
          height:  \${con_6310_icon_font_size}px !important;
        }</style>`).appendTo('.con-6310-preview'); 

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-title{
          color: \${con_6310_title_font_color} !important; 
        }</style>`).appendTo('.con-6310-preview'); 

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-title{
          color: \${con_6310_title_font_hover_color} !important; 
        }</style>`).appendTo('.con-6310-preview'); 

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-description{
          color: \${con_6310_details_font_hover_color} !important;
        }</style>`).appendTo('.con-6310-preview'); 

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-description {
          padding-top: \${con_6310_details_margin_top}px !important;
          padding-bottom: \${con_6310_details_margin_bottom}px !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-counter-".esc_attr($templateId)."-section{
          background-color: \${con_6310_box_background_color_top} !important;
        }</style>`).appendTo('.con-6310-preview');      

    });
  });
";

wp_register_script( "con-6310-template-".esc_attr($templateId)."-js", "" );
wp_enqueue_script( "con-6310-template-".esc_attr($templateId)."-js" );
wp_add_inline_script( "con-6310-template-".esc_attr($templateId)."-js", $jsCode );