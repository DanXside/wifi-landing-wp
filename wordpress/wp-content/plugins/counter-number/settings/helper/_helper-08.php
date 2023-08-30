<?php
$jsCode = "
jQuery(document).ready(function() {
  //General Setting
  jQuery(`      
      #con_6310_box_radius,
      #con_6310_outer_background_color_top,
      #con_6310_outer_background_color_bottom,
      #con_6310_outer_background_hover_color_top,
      #con_6310_outer_background_hover_color_bottom,
      #con_6310_inner_background_color_top,
      #con_6310_inner_background_color_bottom,
      #con_6310_inner_background_hover_color_top,
      #con_6310_inner_background_hover_color_bottom,
      #con_6310_after_effect_color,
      #con_6310_box_shadow_width,  
      #con_6310_box_shadow_blur,
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
        var con_6310_outer_background_color_top = jQuery('#con_6310_outer_background_color_top').val();
        var con_6310_outer_background_color_bottom = jQuery('#con_6310_outer_background_color_bottom').val();
        var con_6310_outer_background_hover_color_top = jQuery('#con_6310_outer_background_hover_color_top').val();
        var con_6310_outer_background_hover_color_bottom = jQuery('#con_6310_outer_background_hover_color_bottom').val();
        var con_6310_inner_background_color_top = jQuery('#con_6310_inner_background_color_top').val();
        var con_6310_inner_background_color_bottom = jQuery('#con_6310_inner_background_color_bottom').val();
        var con_6310_inner_background_hover_color_top = jQuery('#con_6310_inner_background_hover_color_top').val();
        var con_6310_inner_background_hover_color_bottom = jQuery('#con_6310_inner_background_hover_color_bottom').val();
        var con_6310_after_effect_color = jQuery('#con_6310_after_effect_color').val();
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
        var con_6310_icon_margin_top = parseInt(jQuery('#con_6310_icon_margin_top').val());
        var con_6310_icon_margin_bottom = parseInt(jQuery('#con_6310_icon_margin_bottom').val()); 

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."{
          background: linear-gradient(to bottom, \${con_6310_outer_background_color_top}, \${con_6310_outer_background_color_bottom}) !important;
          border-radius: \${con_6310_box_radius}px !important;
        }</style>`).appendTo('.con-6310-preview'); 

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId).":hover{
          background: linear-gradient(to bottom, \${con_6310_outer_background_hover_color_top}, \${con_6310_outer_background_hover_color_bottom}) !important;
        }</style>`).appendTo('.con-6310-preview'); 

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId).":before,
        .con-6310-template-".esc_attr($templateId).":after{
          border: 2px solid \${con_6310_after_effect_color} !important;
          background-image: repeating-linear-gradient( transparent, transparent 2px, \${con_6310_after_effect_color} 2px, \${con_6310_after_effect_color} 4px) !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-counter-content{
          background: \${con_6310_inner_background_color_bottom} !important;
          border-radius: \${con_6310_box_radius}px !important;
          box-shadow: \${con_6310_box_shadow_width}px \${con_6310_box_shadow_width}px \${con_6310_box_shadow_blur}px \${con_6310_box_shadow_color} !important;         
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-counter-content{
          background: \${con_6310_inner_background_hover_color_bottom} !important;
          box-shadow: \${con_6310_box_shadow_width}px \${con_6310_box_shadow_width}px \${con_6310_box_shadow_blur}px \${con_6310_box_shadow_hover_color} !important;         
        }</style>`).appendTo('.con-6310-preview');
       
        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-counter-content:before{
          background: \${con_6310_inner_background_color_top} !important;
          border-radius: \${con_6310_box_radius}px \${con_6310_box_radius}px 0 0 !important; 
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-counter-content:before{
          background: \${con_6310_inner_background_hover_color_top} !important;
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

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-icon {        
          font-size: \${con_6310_icon_font_size}px !important;  
          width: \${con_6310_icon_font_size}px !important;
          height: \${con_6310_icon_font_size}px !important;       
          color: \${con_6310_icon_color} !important;
          margin-top: \${con_6310_icon_margin_top}px !important;
          margin-bottom: \${con_6310_icon_margin_bottom}px !important;
        }</style>`).appendTo('.con-6310-preview');
        
        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-icon {                
          color: \${con_6310_icon_hover_color} !important;
        }</style>`).appendTo('.con-6310-preview');      
    });
  });
";

wp_register_script( "con-6310-template-".esc_attr($templateId)."-js", "" );
wp_enqueue_script( "con-6310-template-".esc_attr($templateId)."-js" );
wp_add_inline_script( "con-6310-template-".esc_attr($templateId)."-js", $jsCode );