<?php
$jsCode = "
jQuery(document).ready(function() {
  //General Setting
  jQuery(`      
      #con_6310_1st_box_background_left,
      #con_6310_1st_box_background_right,
      #con_6310_2nd_box_background_left,
      #con_6310_2nd_box_background_right,
      #con_6310_3rd_box_background_left,
      #con_6310_3rd_box_background_right,
      #con_6310_4th_box_background_left,
      #con_6310_4th_box_background_right,
      #con_6310_5th_box_background_left,
      #con_6310_5th_box_background_right,
      #con_6310_6th_box_background_left,
      #con_6310_6th_box_background_right,
      #con_6310_box_background_hover_color,
      #con_6310_icon_font_size,
      #con_6310_icon_color,
      #con_6310_icon_hover_color,
      #con_6310_icon_margin_top,
      #con_6310_icon_margin_bottom
     
     
      `).on('change', function() {
        var con_6310_1st_box_background_left = jQuery('#con_6310_1st_box_background_left').val();
        var con_6310_1st_box_background_right = jQuery('#con_6310_1st_box_background_right').val();
        var con_6310_2nd_box_background_left = jQuery('#con_6310_2nd_box_background_left').val();
        var con_6310_2nd_box_background_right = jQuery('#con_6310_2nd_box_background_right').val();
        var con_6310_3rd_box_background_left = jQuery('#con_6310_3rd_box_background_left').val();
        var con_6310_3rd_box_background_right = jQuery('#con_6310_3rd_box_background_right').val();
        var con_6310_4th_box_background_left = jQuery('#con_6310_4th_box_background_left').val();
        var con_6310_4th_box_background_right = jQuery('#con_6310_4th_box_background_right').val();
        var con_6310_5th_box_background_left = jQuery('#con_6310_5th_box_background_left').val();
        var con_6310_5th_box_background_right = jQuery('#con_6310_5th_box_background_right').val();
        var con_6310_6th_box_background_left = jQuery('#con_6310_6th_box_background_left').val();
        var con_6310_6th_box_background_right = jQuery('#con_6310_6th_box_background_right').val();
        var con_6310_box_background_hover_color = jQuery('#con_6310_box_background_hover_color').val();

        var con_6310_icon_font_size = jQuery('#con_6310_icon_font_size').val();
        var con_6310_icon_color = jQuery('#con_6310_icon_color').val();
        var con_6310_icon_hover_color = jQuery('#con_6310_icon_hover_color').val();
        var con_6310_icon_margin_top = parseInt(jQuery('#con_6310_icon_margin_top').val());
        var con_6310_icon_margin_bottom = parseInt(jQuery('#con_6310_icon_margin_bottom').val());


       

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-counter-icon{
          color: \${con_6310_icon_color} !important;
          font-size: \${con_6310_icon_font_size}px !important;
          margin-top: \${con_6310_icon_margin_top}px !important;
          margin-bottom: \${con_6310_icon_margin_bottom}px !important;
        }</style>`).appendTo('.con-6310-preview'); 

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-counter-icon img{
          width: \${con_6310_icon_font_size}px !important;
          height: \${con_6310_icon_font_size}px !important;
        }</style>`).appendTo('.con-6310-preview'); 

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 1) .con-6310-template-".esc_attr($templateId)."{
          background: linear-gradient(30deg,\${con_6310_1st_box_background_left},\${con_6310_1st_box_background_right}) !important;
        }</style>`).appendTo('.con-6310-preview'); 

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 1) .con-6310-template-".esc_attr($templateId)."-title{
          color: \${con_6310_1st_box_background_left} !important;
        }</style>`).appendTo('.con-6310-preview'); 

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 2) .con-6310-template-".esc_attr($templateId)."{
          background: linear-gradient(30deg,\${con_6310_2nd_box_background_left},\${con_6310_2nd_box_background_right}) !important;
        }</style>`).appendTo('.con-6310-preview'); 

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 2) .con-6310-template-".esc_attr($templateId)."-title{
          color: \${con_6310_2nd_box_background_left} !important;
        }</style>`).appendTo('.con-6310-preview'); 

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 3) .con-6310-template-".esc_attr($templateId)."{
          background: linear-gradient(30deg,\${con_6310_3rd_box_background_left},\${con_6310_3rd_box_background_right}) !important;
        }</style>`).appendTo('.con-6310-preview'); 

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 3) .con-6310-template-".esc_attr($templateId)."-title{
          color: \${con_6310_3rd_box_background_left} !important;
        }</style>`).appendTo('.con-6310-preview'); 

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 4) .con-6310-template-".esc_attr($templateId)."{
          background: linear-gradient(30deg,\${con_6310_4th_box_background_left},\${con_6310_4th_box_background_right}) !important;
        }</style>`).appendTo('.con-6310-preview'); 

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 4) .con-6310-template-".esc_attr($templateId)."-title{
          color: \${con_6310_4th_box_background_left} !important;
        }</style>`).appendTo('.con-6310-preview'); 

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 5) .con-6310-template-".esc_attr($templateId)."{
          background: linear-gradient(30deg,\${con_6310_5th_box_background_left},\${con_6310_5th_box_background_right}) !important;
        }</style>`).appendTo('.con-6310-preview'); 

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 5) .con-6310-template-".esc_attr($templateId)."-title{
          color: \${con_6310_5th_box_background_left} !important;
        }</style>`).appendTo('.con-6310-preview'); 

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 6) .con-6310-template-".esc_attr($templateId)."{
          background: linear-gradient(30deg,\${con_6310_6th_box_background_left},\${con_6310_6th_box_background_right}) !important;
        }</style>`).appendTo('.con-6310-preview'); 

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 6) .con-6310-template-".esc_attr($templateId)."-title{
          color: \${con_6310_6th_box_background_left} !important;
        }</style>`).appendTo('.con-6310-preview'); 

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-counter-icon{
          transform: rotateX(360deg) rotateY(360deg);
          color: \${con_6310_icon_hover_color} !important;
        }</style>`).appendTo('.con-6310-preview'); 

       
      
    });
  });
";

wp_register_script( "con-6310-template-".esc_attr($templateId)."-js", "" );
wp_enqueue_script( "con-6310-template-".esc_attr($templateId)."-js" );
wp_add_inline_script( "con-6310-template-".esc_attr($templateId)."-js", $jsCode );