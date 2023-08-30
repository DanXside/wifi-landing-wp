<?php
$jsCode = "
jQuery(document).ready(function() {
  //General Setting
  jQuery(` 
      #con_6310_title_font_color,
      #con_6310_title_font_hover_color,
      #con_6310_details_font_hover_color, 
      #con_6310_icon_font_size,
      #con_6310_icon_color,
      #con_6310_icon_hover_color,
      #con_6310_icon_border_radius,
      #con_6310_icon_border_size,
      #con_6310_icon_border_color,
      #con_6310_icon_border_hover_color  
     
      `).on('change', function() {
        var con_6310_1st_left_box_background_color = jQuery('#con_6310_1st_left_box_background_color').val();
        var con_6310_1st_right_box_background_color = jQuery('#con_6310_1st_right_box_background_color').val(); 
        var con_6310_2nd_left_box_background_color = jQuery('#con_6310_2nd_left_box_background_color').val();       
        var con_6310_2nd_right_box_background_color = jQuery('#con_6310_2nd_right_box_background_color').val(); 
        var con_6310_3rd_left_box_background_color = jQuery('#con_6310_3rd_left_box_background_color').val(); 
        var con_6310_3rd_right_box_background_color = jQuery('#con_6310_3rd_right_box_background_color').val(); 
        var con_6310_4th_left_box_background_color = jQuery('#con_6310_4th_left_box_background_color').val(); 
        var con_6310_4th_right_box_background_color = jQuery('#con_6310_4th_right_box_background_color').val(); 
        var con_6310_5th_left_box_background_color = jQuery('#con_6310_5th_left_box_background_color').val(); 
        var con_6310_5th_right_box_background_color = jQuery('#con_6310_5th_right_box_background_color').val(); 
        var con_6310_6th_left_box_background_color = jQuery('#con_6310_6th_left_box_background_color').val(); 
        var con_6310_6th_right_box_background_color = jQuery('#con_6310_6th_right_box_background_color').val(); 
        var con_6310_title_font_color = jQuery('#con_6310_title_font_color').val();
        var con_6310_title_font_hover_color = jQuery('#con_6310_title_font_hover_color').val();
        var con_6310_details_font_hover_color = jQuery('#con_6310_details_font_hover_color').val();
        var con_6310_icon_font_size = parseInt(jQuery('#con_6310_icon_font_size').val());
        var con_6310_icon_color = jQuery('#con_6310_icon_color').val();
        var con_6310_icon_hover_color = jQuery('#con_6310_icon_hover_color').val();
        var con_6310_icon_border_radius = parseInt(jQuery('#con_6310_icon_border_radius').val());
        var con_6310_icon_border_size = parseInt(jQuery('#con_6310_icon_border_size').val());
        var con_6310_icon_border_color = jQuery('#con_6310_icon_border_color').val();
        var con_6310_icon_border_hover_color = jQuery('#con_6310_icon_border_hover_color').val();
        

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-counter-icon{
          color: \${con_6310_icon_color} !important;
          font-size: \${con_6310_icon_font_size}px !important;
          width: calc(\${con_6310_icon_font_size}px * 2) !important;
          height: calc(\${con_6310_icon_font_size}px * 2) !important;
          border: \${con_6310_icon_border_size}px solid \${con_6310_icon_border_color} !important;
          border-radius: \${con_6310_icon_border_radius}px !important;
        }</style>`).appendTo('.con-6310-preview'); 

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-counter-icon img{
          width: \${con_6310_icon_font_size}px !important;
          height: \${con_6310_icon_font_size}px !important;
          border-radius: \${con_6310_icon_border_radius}px !important;
        }</style>`).appendTo('.con-6310-preview'); 

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-counter-icon{
          border-color: \${con_6310_icon_border_hover_color}!important;
          color: \${con_6310_icon_hover_color} !important; 
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

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-counter-content{
          height: calc(100% - \${con_6310_icon_font_size}px * 2 + 30px) !important;
        }</style>`).appendTo('.con-6310-preview');
        
    });
  });
";

wp_register_script( "con-6310-template-".esc_attr($templateId)."-js", "" );
wp_enqueue_script( "con-6310-template-".esc_attr($templateId)."-js" );
wp_add_inline_script( "con-6310-template-".esc_attr($templateId)."-js", $jsCode );