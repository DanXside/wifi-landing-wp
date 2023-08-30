<?php
$jsCode = "
jQuery(document).ready(function() {
  //General Setting
  jQuery(`
      #con_6310_box_radius,
      #con_6310_box_border_size,
      #con_6310_box_background_color,
      #con_6310_box_1st_border_color,
      #con_6310_box_2nd_border_color,
      #con_6310_box_3rd_Border_color,
      #con_6310_box_4th_Border_color,
      #con_6310_box_5th_Border_color,
      #con_6310_box_6th_Border_color,
      #con_6310_box_shadow_width,
      #con_6310_box_shadow_blur,
      #con_6310_box_shadow_color,
      #con_6310_box_shadow_hover_color,
      #con_6310_icon_font_size,
      #con_6310_icon_color,
      #con_6310_border_font_size,
      #con_6310_icon_border_color,
      #con_6310_icon_position
      `).on('change', function() {
        
        var con_6310_box_radius = parseInt (jQuery('#con_6310_box_radius').val());
        var con_6310_box_background_color = jQuery('#con_6310_box_background_color').val();
        var con_6310_box_border_size = parseInt(jQuery('#con_6310_box_border_size').val());
        var con_6310_box_1st_border_color = jQuery('#con_6310_box_1st_border_color').val();
        var con_6310_box_2nd_border_color = jQuery('#con_6310_box_2nd_border_color').val();
        var con_6310_box_3rd_Border_color = jQuery('#con_6310_box_3rd_Border_color').val();
        var con_6310_box_4th_Border_color = jQuery('#con_6310_box_4th_Border_color').val();
        var con_6310_box_5th_Border_color = jQuery('#con_6310_box_5th_Border_color').val();
        var con_6310_box_6th_Border_color = jQuery('#con_6310_box_6th_Border_color').val();
        var con_6310_box_shadow_width = parseInt(jQuery('#con_6310_box_shadow_width').val());
        var con_6310_box_shadow_blur = jQuery('#con_6310_box_shadow_blur').val();
        var con_6310_box_shadow_color = jQuery('#con_6310_box_shadow_color').val();
        var con_6310_box_shadow_hover_color = jQuery('#con_6310_box_shadow_hover_color').val();
        var con_6310_icon_font_size = parseInt(jQuery('#con_6310_icon_font_size').val());
        var con_6310_icon_color = jQuery('#con_6310_icon_color').val();
        var con_6310_border_font_size = jQuery('#con_6310_border_font_size').val();
        var con_6310_icon_position = jQuery('#con_6310_icon_position').val();
        var con_6310_icon_border_color = jQuery('#con_6310_icon_border_color').val();

        jQuery(`<style type='text/css'> .con-6310-template-".esc_attr($templateId)."{
          box-shadow: 0px 0px \${con_6310_box_shadow_blur}px \${con_6310_box_shadow_width}px \${con_6310_box_shadow_color} !important;
          border: \${con_6310_box_border_size}px solid !important;
          background-color: \${con_6310_box_background_color} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId).":hover {        
          box-shadow: 0px 0px \${con_6310_box_shadow_blur}px \${con_6310_box_shadow_width}px \${con_6310_box_shadow_hover_color} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-icon {        
          font-size: \${con_6310_icon_font_size}px !important;        
          right: \${con_6310_icon_position}px !important; 
          color: \${con_6310_icon_color} !important;
          width: calc(\${con_6310_icon_font_size}px * 2) !important;
          height: calc(\${con_6310_icon_font_size}px * 2) !important;
          line-height: calc(\${con_6310_icon_font_size}px * 2 - \${con_6310_border_font_size}px * 2) !important;
          border: \${con_6310_border_font_size}px solid \${con_6310_icon_border_color} !important;
        }</style>`).appendTo('.con-6310-preview');        
      
    });
  });
";

wp_register_script( "con-6310-template-".esc_attr($templateId)."-js", "" );
wp_enqueue_script( "con-6310-template-".esc_attr($templateId)."-js" );
wp_add_inline_script( "con-6310-template-".esc_attr($templateId)."-js", $jsCode );