<?php
$jsCode = "
jQuery(document).ready(function() {
  //General Setting
  jQuery(`
      #con_6310_box_radius,
      #con_6310_box_background_color,
      #con_6310_box_background_hover_color,
      #con_6310_border_radius,
      #con_6310_box_border_size,
      #con_6310_inner_border_size,  
      #con_6310_box_border_color,
      #con_6310_2nd_box_border_color,
      #con_6310_3rd_box_border_color,
      #con_6310_4th_box_border_color,
      #con_6310_5th_box_border_color,
      #con_6310_6th_box_border_color,
      #con_6310_box_shadow_width,
      #con_6310_box_shadow_blur,
      #con_6310_box_shadow_color,
      #con_6310_box_shadow_hover_color,
      #con_6310_title_font_color,
      #con_6310_title_font_hover_color,
      #con_6310_details_font_hover_color,
      #con_6310_icon_font_size
     
      `).on('change', function() {
        var con_6310_box_radius = parseInt(jQuery('#con_6310_box_radius').val());
        var con_6310_box_background_color = jQuery('#con_6310_box_background_color').val();
        var con_6310_box_background_hover_color = jQuery('#con_6310_box_background_hover_color').val();
        var con_6310_border_radius = jQuery('#con_6310_border_radius').val();
        var con_6310_box_border_size = parseInt(jQuery('#con_6310_box_border_size').val());
        var con_6310_inner_border_size = parseInt(jQuery('#con_6310_inner_border_size').val());
        var con_6310_box_border_color = jQuery('#con_6310_box_border_color').val();
        var con_6310_2nd_box_border_color = jQuery('#con_6310_2nd_box_border_color').val();
        var con_6310_3rd_box_border_color = jQuery('#con_6310_3rd_box_border_color').val();
        var con_6310_4th_box_border_color = jQuery('#con_6310_4th_box_border_color').val();
        var con_6310_5th_box_border_color = jQuery('#con_6310_5th_box_border_color').val();
        var con_6310_6th_box_border_color = jQuery('#con_6310_6th_box_border_color').val();
        var con_6310_box_shadow_width = parseInt(jQuery('#con_6310_box_shadow_width').val());
        var con_6310_box_shadow_blur = jQuery('#con_6310_box_shadow_blur').val();
        var con_6310_box_shadow_color = jQuery('#con_6310_box_shadow_color').val();
        var con_6310_box_shadow_hover_color = jQuery('#con_6310_box_shadow_hover_color').val();
        var con_6310_title_font_color = jQuery('#con_6310_title_font_color').val();
        var con_6310_title_font_hover_color = jQuery('#con_6310_title_font_hover_color').val();
        var con_6310_details_font_hover_color = jQuery('#con_6310_details_font_hover_color').val();
        var con_6310_icon_font_size = parseInt(jQuery('#con_6310_icon_font_size').val());
        
        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)." {
          background: \${con_6310_box_background_color} !important;
          border-radius: \${con_6310_box_radius}px !important;
          box-shadow: 0px 0px \${con_6310_box_shadow_blur}px \${con_6310_box_shadow_width}px \${con_6310_box_shadow_color} !important;     
        }</style>`).appendTo('.con-6310-preview'); 

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId).":hover {
          background: \${con_6310_box_background_hover_color} !important;
          box-shadow: 0px 0px \${con_6310_box_shadow_blur}px \${con_6310_box_shadow_width}px \${con_6310_box_shadow_hover_color} !important;       
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-title{
          color: \${con_6310_title_font_color} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId).":hover  .con-6310-template-".esc_attr($templateId)."-title{
          color: \${con_6310_title_font_hover_color} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId).":hover  .con-6310-template-".esc_attr($templateId)."-description{
          color: \${con_6310_details_font_hover_color} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-counter-icon{
          border-radius: \${con_6310_border_radius}% !important;
          border:  \${con_6310_box_border_size}px solid !important;
          font-size: \${con_6310_icon_font_size}px !important;  
          width: calc(\${con_6310_icon_font_size}px * 2 + 10px) !important;
          height: calc(\${con_6310_icon_font_size}px * 2 + 10px) !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-counter-icon img{
          width: \${con_6310_icon_font_size}px !important;
          height:  \${con_6310_icon_font_size}px !important;
        }</style>`).appendTo('.con-6310-preview');
        
        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-counter-icon:before{
          border:  \${con_6310_inner_border_size}px solid !important;
          border-radius: \${con_6310_border_radius}% !important; 
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 1) .con-6310-template-".esc_attr($templateId)."-counter-icon,
        .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-owl-stage .con-6310-owl-item:nth-child(6n + 1) .con-6310-template-".esc_attr($templateId)."-counter-icon {
          color: \${con_6310_box_border_color} !important;
          border-color: \${con_6310_box_border_color} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 1) .con-6310-template-".esc_attr($templateId)."-counter-icon::before,
        .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-owl-stage .con-6310-owl-item:nth-child(6n + 1) .con-6310-template-".esc_attr($templateId)."-counter-icon::before {
          border-color: \${con_6310_box_border_color} !important;        
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 1) .con-6310-template-".esc_attr($templateId)."-counter-value,
        .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-owl-stage .con-6310-owl-item:nth-child(6n + 1) .con-6310-template-".esc_attr($templateId)."-counter-value {
          color: \${con_6310_box_border_color} !important;
        }</style>`).appendTo('.con-6310-preview');
        
        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 2) .con-6310-template-".esc_attr($templateId)."-counter-icon,
        .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-owl-stage .con-6310-owl-item:nth-child(6n + 2) .con-6310-template-".esc_attr($templateId)."-counter-icon {
          color: \${con_6310_2nd_box_border_color} !important;
          border-color: \${con_6310_2nd_box_border_color} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 2) .con-6310-template-".esc_attr($templateId)."-counter-icon::before,
        .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-owl-stage .con-6310-owl-item:nth-child(6n + 2) .con-6310-template-".esc_attr($templateId)."-counter-icon::before {
          border-color: \${con_6310_2nd_box_border_color} !important;        
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 2) .con-6310-template-".esc_attr($templateId)."-counter-value,
        .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-owl-stage .con-6310-owl-item:nth-child(6n + 2) .con-6310-template-".esc_attr($templateId)."-counter-value {
          color: \${con_6310_2nd_box_border_color} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 3) .con-6310-template-".esc_attr($templateId)."-counter-icon,
        .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-owl-stage .con-6310-owl-item:nth-child(6n + 3) .con-6310-template-".esc_attr($templateId)."-counter-icon {
          color: \${con_6310_3rd_box_border_color} !important;
          border-color: \${con_6310_3rd_box_border_color} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 3) .con-6310-template-".esc_attr($templateId)."-counter-icon::before,
        .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-owl-stage .con-6310-owl-item:nth-child(6n + 3) .con-6310-template-".esc_attr($templateId)."-counter-icon::before {
          border-color: \${con_6310_3rd_box_border_color} !important;        
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 3) .con-6310-template-".esc_attr($templateId)."-counter-value,
        .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-owl-stage .con-6310-owl-item:nth-child(6n + 3) .con-6310-template-".esc_attr($templateId)."-counter-value {
          color: \${con_6310_3rd_box_border_color} !important;
        }</style>`).appendTo('.con-6310-preview');
        
        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 4) .con-6310-template-".esc_attr($templateId)."-counter-icon,
        .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-owl-stage .con-6310-owl-item:nth-child(6n + 4) .con-6310-template-".esc_attr($templateId)."-counter-icon {
          color: \${con_6310_4th_box_border_color} !important;
          border-color: \${con_6310_4th_box_border_color} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 4) .con-6310-template-".esc_attr($templateId)."-counter-icon::before,
        .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-owl-stage .con-6310-owl-item:nth-child(6n + 4) .con-6310-template-".esc_attr($templateId)."-counter-icon::before {
          border-color: \${con_6310_4th_box_border_color} !important;        
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 4) .con-6310-template-".esc_attr($templateId)."-counter-value,
        .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-owl-stage .con-6310-owl-item:nth-child(6n + 4) .con-6310-template-".esc_attr($templateId)."-counter-value {
          color: \${con_6310_4th_box_border_color} !important;
        }</style>`).appendTo('.con-6310-preview');
        
        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 5) .con-6310-template-".esc_attr($templateId)."-counter-icon,
        .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-owl-stage .con-6310-owl-item:nth-child(6n + 5) .con-6310-template-".esc_attr($templateId)."-counter-icon {
          color: \${con_6310_5th_box_border_color} !important;
          border-color: \${con_6310_5th_box_border_color} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 5) .con-6310-template-".esc_attr($templateId)."-counter-icon::before,
        .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-owl-stage .con-6310-owl-item:nth-child(6n + 5) .con-6310-template-".esc_attr($templateId)."-counter-icon::before {
          border-color: \${con_6310_5th_box_border_color} !important;        
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 5) .con-6310-template-".esc_attr($templateId)."-counter-value,
        .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-owl-stage .con-6310-owl-item:nth-child(6n + 5) .con-6310-template-".esc_attr($templateId)."-counter-value {
          color: \${con_6310_5th_box_border_color} !important;
        }</style>`).appendTo('.con-6310-preview');
        
        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 6) .con-6310-template-".esc_attr($templateId)."-counter-icon,
        .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-owl-stage .con-6310-owl-item:nth-child(6n + 6) .con-6310-template-".esc_attr($templateId)."-counter-icon {
          color: \${con_6310_6th_box_border_color} !important;
          border-color: \${con_6310_6th_box_border_color} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 6) .con-6310-template-".esc_attr($templateId)."-counter-icon::before,
        .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-owl-stage .con-6310-owl-item:nth-child(6n + 6) .con-6310-template-".esc_attr($templateId)."-counter-icon::before {
          border-color: \${con_6310_6th_box_border_color} !important;        
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 6) .con-6310-template-".esc_attr($templateId)."-counter-value,
        .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-owl-stage .con-6310-owl-item:nth-child(6n + 6) .con-6310-template-".esc_attr($templateId)."-counter-value {
          color: \${con_6310_6th_box_border_color} !important;
        }</style>`).appendTo('.con-6310-preview');

    });
  });
";

wp_register_script( "con-6310-template-".esc_attr($templateId)."-js", "" );
wp_enqueue_script( "con-6310-template-".esc_attr($templateId)."-js" );
wp_add_inline_script( "con-6310-template-".esc_attr($templateId)."-js", $jsCode );