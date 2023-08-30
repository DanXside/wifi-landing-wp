<?php
$jsCode = "
jQuery(document).ready(function() {
  //General Setting
  jQuery(`
      #con_6310_box_radius,
      #con_6310_box_shadow_width,
      #con_6310_box_shadow_blur,
      #con_6310_box_shadow_color,
      #con_6310_box_shadow_hover_color,
      #con_6310_box_background_color_top,
      #con_6310_box_background_color_bottom,
      #con_6310_1st_gradient_color_left,
      #con_6310_1st_gradient_color_right,
      #con_6310_2nd_gradient_color_left,
      #con_6310_2nd_gradient_color_right,
      #con_6310_3rd_gradient_color_left,
      #con_6310_3rd_gradient_color_right,
      #con_6310_4th_gradient_color_left,
      #con_6310_4th_gradient_color_right,
      #con_6310_5th_gradient_color_left,
      #con_6310_5th_gradient_color_right,
      #con_6310_6th_gradient_color_left,
      #con_6310_6th_gradient_color_right,
      #con_6310_title_font_hover_color,
      #con_6310_details_font_hover_color,
      #con_6310_icon_font_size,
      #con_6310_icon_margin_top,
      #con_6310_icon_margin_bottom
      `).on('change', function() {        
        var con_6310_box_radius = parseInt(jQuery('#con_6310_box_radius').val());
        var con_6310_box_shadow_width = parseInt(jQuery('#con_6310_box_shadow_width').val());
        var con_6310_box_shadow_blur = parseInt(jQuery('#con_6310_box_shadow_blur').val());
        var con_6310_box_shadow_color = jQuery('#con_6310_box_shadow_color').val();
        var con_6310_box_shadow_hover_color = jQuery('#con_6310_box_shadow_hover_color').val();
        var con_6310_box_background_color_top = jQuery('#con_6310_box_background_color_top').val();
        var con_6310_box_background_color_bottom = jQuery('#con_6310_box_background_color_bottom').val();
        var con_6310_1st_gradient_color_left = jQuery('#con_6310_1st_gradient_color_left').val();
        var con_6310_1st_gradient_color_right = jQuery('#con_6310_1st_gradient_color_right').val();
        var con_6310_2nd_gradient_color_left = jQuery('#con_6310_2nd_gradient_color_left').val();
        var con_6310_2nd_gradient_color_right = jQuery('#con_6310_2nd_gradient_color_right').val();
        var con_6310_3rd_gradient_color_left = jQuery('#con_6310_3rd_gradient_color_left').val();
        var con_6310_3rd_gradient_color_right = jQuery('#con_6310_3rd_gradient_color_right').val();
        var con_6310_4th_gradient_color_left = jQuery('#con_6310_4th_gradient_color_left').val();
        var con_6310_4th_gradient_color_right = jQuery('#con_6310_4th_gradient_color_right').val();
        var con_6310_5th_gradient_color_left = jQuery('#con_6310_5th_gradient_color_left').val();
        var con_6310_5th_gradient_color_right = jQuery('#con_6310_5th_gradient_color_right').val();
        var con_6310_6th_gradient_color_left = jQuery('#con_6310_6th_gradient_color_left').val();
        var con_6310_6th_gradient_color_right = jQuery('#con_6310_6th_gradient_color_right').val();
        var con_6310_title_font_hover_color = jQuery('#con_6310_title_font_hover_color').val();
        var con_6310_details_font_hover_color = jQuery('#con_6310_details_font_hover_color').val();
        var con_6310_icon_font_size = parseInt(jQuery('#con_6310_icon_font_size').val());
        var con_6310_icon_margin_top = parseInt(jQuery('#con_6310_icon_margin_top').val());
        var con_6310_icon_margin_bottom = parseInt(jQuery('#con_6310_icon_margin_bottom').val());        

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."{
          background: linear-gradient(to right bottom,\${
            con_6310_box_background_color_top} 50%, \${con_6310_box_background_color_bottom} 51%) !important;
          box-shadow: 0px 0px \${con_6310_box_shadow_blur}px \${con_6310_box_shadow_width}px \${con_6310_box_shadow_color} !important;
          border-radius: \${con_6310_box_radius}px 0 !important;     
        }</style>`).appendTo('.con-6310-preview'); 
         
        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId).":hover {
          box-shadow: 0px 0px \${con_6310_box_shadow_blur}px \${con_6310_box_shadow_width}px \${con_6310_box_shadow_hover_color} !important;
        }</style>`).appendTo('.con-6310-preview');   

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)." .con-6310-template-".esc_attr($templateId)."-icon{       
          font-size: \${con_6310_icon_font_size}px !important;   
          width: \${con_6310_icon_font_size}px !important;
          height: \${con_6310_icon_font_size}px !important;      
          margin-top: \${con_6310_icon_margin_top}px !important;
          margin-bottom: \${con_6310_icon_margin_bottom}px !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-title{
          color: \${con_6310_title_font_hover_color} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-description{
          color: \${con_6310_details_font_hover_color} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 1) .con-6310-template-".esc_attr($templateId).",
        .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-owl-stage .con-6310-owl-item:nth-child(6n + 1) .con-6310-template-".esc_attr($templateId)." {
          color: \${con_6310_1st_gradient_color_right} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 1) .con-6310-counter-".esc_attr($templateId)."-section-wrapper {
          background: linear-gradient(to right bottom, \${con_6310_1st_gradient_color_left},\${con_6310_1st_gradient_color_right}) !important;
        }</style>`).appendTo('.con-6310-preview');
        
        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 2) .con-6310-template-".esc_attr($templateId).",
        .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-owl-stage .con-6310-owl-item:nth-child(6n + 2) .con-6310-template-".esc_attr($templateId)." {
          color: \${con_6310_2nd_gradient_color_right} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 2) .con-6310-counter-".esc_attr($templateId)."-section-wrapper {
          background: linear-gradient(to right bottom, \${con_6310_2nd_gradient_color_left},\${con_6310_2nd_gradient_color_right}) !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 3) .con-6310-template-".esc_attr($templateId).",
        .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-owl-stage .con-6310-owl-item:nth-child(6n + 3) .con-6310-template-".esc_attr($templateId)." {
          color: \${con_6310_3rd_gradient_color_right} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 3) .con-6310-counter-".esc_attr($templateId)."-section-wrapper {
          background: linear-gradient(to right bottom, \${con_6310_3rd_gradient_color_left},\${con_6310_3rd_gradient_color_right}) !important;
        }</style>`).appendTo('.con-6310-preview');
        
        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 4) .con-6310-template-".esc_attr($templateId).",
        .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-owl-stage .con-6310-owl-item:nth-child(6n + 4) .con-6310-template-".esc_attr($templateId)." {
          color: \${con_6310_4th_gradient_color_right} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 4) .con-6310-counter-".esc_attr($templateId)."-section-wrapper {
          background: linear-gradient(to right bottom, \${con_6310_4th_gradient_color_left},\${con_6310_4th_gradient_color_right}) !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 5) .con-6310-template-".esc_attr($templateId).",
        .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-owl-stage .con-6310-owl-item:nth-child(6n + 5) .con-6310-template-".esc_attr($templateId)." {
          color: \${con_6310_5th_gradient_color_right} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 5) .con-6310-counter-".esc_attr($templateId)."-section-wrapper {
          background: linear-gradient(to right bottom, \${con_6310_5th_gradient_color_left},\${con_6310_5th_gradient_color_right}) !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 6) .con-6310-template-".esc_attr($templateId).",
        .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-owl-stage .con-6310-owl-item:nth-child(6n + 6) .con-6310-template-".esc_attr($templateId)." {
          color: \${con_6310_6th_gradient_color_right} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 6) .con-6310-counter-".esc_attr($templateId)."-section-wrapper {
          background: linear-gradient(to right bottom, \${con_6310_6th_gradient_color_left},\${con_6310_6th_gradient_color_right}) !important;
        }</style>`).appendTo('.con-6310-preview');


    });
  });
";

wp_register_script( "con-6310-template-".esc_attr($templateId)."-js", "" );
wp_enqueue_script( "con-6310-template-".esc_attr($templateId)."-js" );
wp_add_inline_script( "con-6310-template-".esc_attr($templateId)."-js", $jsCode );