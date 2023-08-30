<?php
$jsCode = "
jQuery(document).ready(function() {
  //General Setting
  jQuery(`
      #con_6310_box_radius,
      #con_6310_box_circle_width,
      #con_6310_box_background_color,
      #con_6310_box_background_hover_color,
      #con_6310_inner_circle_border_size,
      #con_6310_outer_circle_border_size,
      #con_6310_inner_1st_circle_color,
      #con_6310_inner_2nd_circle_color,
      #con_6310_box_shadow_blur,
      #con_6310_box_shadow_width,
      #con_6310_box_shadow_color,
      #con_6310_box_shadow_hover_color,
      #con_6310_title_font_color,
      #con_6310_title_font_hover_color,
      #con_6310_details_font_hover_color,
      #con_6310_icon_font_size,
      #con_6310_icon_color,
      #con_6310_icon_hover_color,
      #con_6310_icon_margin_top,
      #con_6310_icon_margin_bottom
     
      `).on('change', function() {
        var con_6310_box_radius = parseInt(jQuery('#con_6310_box_radius').val());
        var con_6310_box_circle_width = parseInt(jQuery('#con_6310_box_circle_width').val());
        var con_6310_box_background_color = jQuery('#con_6310_box_background_color').val();
        var con_6310_box_background_hover_color = jQuery('#con_6310_box_background_hover_color').val(); 
        var con_6310_inner_circle_border_size = parseInt(jQuery('#con_6310_inner_circle_border_size').val());  
        var con_6310_outer_circle_border_size = parseInt(jQuery('#con_6310_outer_circle_border_size').val());    
        var con_6310_inner_1st_circle_color = jQuery('#con_6310_inner_1st_circle_color').val();
        var con_6310_inner_2nd_circle_color = jQuery('#con_6310_inner_2nd_circle_color').val();
        var con_6310_box_shadow_width = parseInt(jQuery('#con_6310_box_shadow_width').val());
        var con_6310_box_shadow_blur = jQuery('#con_6310_box_shadow_blur').val();
        var con_6310_box_shadow_color = jQuery('#con_6310_box_shadow_color').val();
        var con_6310_box_shadow_hover_color = jQuery('#con_6310_box_shadow_hover_color').val();
        var con_6310_title_font_color = jQuery('#con_6310_title_font_color').val();
        var con_6310_title_font_hover_color = jQuery('#con_6310_title_font_hover_color').val();
        var con_6310_details_font_hover_color = jQuery('#con_6310_details_font_hover_color').val();
        var con_6310_icon_font_size = parseInt(jQuery('#con_6310_icon_font_size').val());
        var con_6310_icon_color = jQuery('#con_6310_icon_color').val();
        var con_6310_icon_hover_color = jQuery('#con_6310_icon_hover_color').val();
        var con_6310_icon_margin_top = jQuery('#con_6310_icon_margin_top').val();
        var con_6310_icon_margin_bottom = parseInt(jQuery('#con_6310_icon_margin_bottom').val());

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."{
          background: \${con_6310_box_background_color} !important;
          box-shadow: 0px 0px \${con_6310_box_shadow_blur}px \${con_6310_box_shadow_width}px \${con_6310_box_shadow_color}!important;
          border-radius: \${con_6310_box_radius}px !important;
        }</style>`).appendTo('.con-6310-preview'); 

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId).":hover{
          background: \${con_6310_box_background_hover_color} !important;
          box-shadow: 0px 0px \${con_6310_box_shadow_blur}px \${con_6310_box_shadow_width}px \${con_6310_box_shadow_hover_color} !important;
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

        jQuery(`<style type='text/css'>.con-6310-counter-".esc_attr($templateId)."-section:before{
          border-top: 15px solid \${con_6310_inner_1st_circle_color} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-counter-".esc_attr($templateId)."-section:after{
          border-width: \${con_6310_outer_circle_border_size}px !important;
          border-color: \${con_6310_inner_2nd_circle_color} \${con_6310_inner_1st_circle_color} \${con_6310_inner_2nd_circle_color} \${con_6310_inner_1st_circle_color} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-counter-".esc_attr($templateId)."-section{
          width:  \${con_6310_box_circle_width}px !important;
          height:  \${con_6310_box_circle_width}px !important;
          line-height: calc( \${con_6310_box_circle_width}px - \${con_6310_inner_circle_border_size}px * 2) !important;
          border-width: \${con_6310_inner_circle_border_size}px !important;
          border-color: \${con_6310_inner_1st_circle_color} \${con_6310_inner_2nd_circle_color} \${con_6310_inner_1st_circle_color} \${con_6310_inner_2nd_circle_color} !important;
          color: \${con_6310_inner_2nd_circle_color} !important;
          position: relative;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-counter-value{
          color: \${con_6310_number_font_hover_color} !important;  
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'></style>`).appendTo('.con-6310-preview');

      
    });
  });
";

wp_register_script( "con-6310-template-".esc_attr($templateId)."-js", "" );
wp_enqueue_script( "con-6310-template-".esc_attr($templateId)."-js" );
wp_add_inline_script( "con-6310-template-".esc_attr($templateId)."-js", $jsCode );