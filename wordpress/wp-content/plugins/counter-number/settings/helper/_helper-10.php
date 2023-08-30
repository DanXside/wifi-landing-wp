<?php
$jsCode = "
jQuery(document).ready(function() {
  //General Setting
  jQuery(`
      #con_6310_box_background_color,
      #con_6310_box_background_hover_color,
      #con_6310_1st_circle_background_color,
      #con_6310_2nd_circle_background_color,
      #con_6310_3rd_circle_background_color,
      #con_6310_4th_circle_background_color,
      #con_6310_5th_circle_background_color,
      #con_6310_6th_circle_background_color,
      #con_6310_box_border_color,
      #con_6310_border_hover_color,
      #con_6310_box_shadow_color,
      #con_6310_box_shadow_hover_color,
      #con_6310_box_circle_size,
      #con_6310_title_font_color,
      #con_6310_title_font_hover_color,
      #con_6310_details_font_hover_color,
      #con_6310_icon_font_size,
      #con_6310_icon_color,
      #con_6310_icon_hover_color
      `).on('change', function() {
        
        var con_6310_box_background_color = jQuery('#con_6310_box_background_color').val();
        var con_6310_box_background_hover_color = jQuery('#con_6310_box_background_hover_color').val();
        var con_6310_1st_circle_background_color = jQuery('#con_6310_1st_circle_background_color').val();
        var con_6310_2nd_circle_background_color = jQuery('#con_6310_2nd_circle_background_color').val();
        var con_6310_3rd_circle_background_color = jQuery('#con_6310_3rd_circle_background_color').val();
        var con_6310_4th_circle_background_color = jQuery('#con_6310_4th_circle_background_color').val();
        var con_6310_5th_circle_background_color = jQuery('#con_6310_5th_circle_background_color').val();
        var con_6310_6th_circle_background_color = jQuery('#con_6310_6th_circle_background_color').val();
        var con_6310_box_border_color = jQuery('#con_6310_box_border_color').val();
        var con_6310_border_hover_color = jQuery('#con_6310_border_hover_color').val();
        var con_6310_box_shadow_color = jQuery('#con_6310_box_shadow_color').val();
        var con_6310_box_shadow_hover_color = jQuery('#con_6310_box_shadow_hover_color').val();
        var con_6310_box_circle_size = parseInt(jQuery('#con_6310_box_circle_size').val());
        var con_6310_title_font_color = jQuery('#con_6310_title_font_color').val();
        var con_6310_title_font_hover_color = jQuery('#con_6310_title_font_hover_color').val();
        var con_6310_details_font_hover_color = jQuery('#con_6310_details_font_hover_color').val();
        var con_6310_icon_font_size = parseInt(jQuery('#con_6310_icon_font_size').val());
        var con_6310_icon_color = jQuery('#con_6310_icon_color').val();
        var con_6310_icon_hover_color = jQuery('#con_6310_icon_hover_color').val();        

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."{
          background: \${con_6310_box_background_color} !important;     
        }</style>`).appendTo('.con-6310-preview'); 

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId).":hover {
          background: \${con_6310_box_background_hover_color} !important;     
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
          width: \${con_6310_box_circle_size}px !important;
          height: \${con_6310_box_circle_size}px !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'> .con-6310-template-".esc_attr($templateId)."-counter-content:before{
          width: \${con_6310_box_circle_size}px !important;
          height: \${con_6310_box_circle_size}px !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-counter-content:after{
          border: 7px solid \${con_6310_box_border_color} !important;
          box-shadow: 3px 5px 10px \${con_6310_box_shadow_color} inset !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-counter-content:after{
          border: 7px solid \${con_6310_border_hover_color} !important;
          box-shadow: 3px 5px 10px \${con_6310_box_shadow_hover_color} inset !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-counter-icon{
          font-size: \${con_6310_icon_font_size}px !important;
          color: \${con_6310_icon_color} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>  .con-6310-template-".esc_attr($templateId)."-counter-icon img{
          width: \${con_6310_icon_font_size}px !important;
          height: \${con_6310_icon_font_size}px !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-counter-icon{
          color: \${con_6310_icon_hover_color} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 1) .con-6310-template-".esc_attr($templateId)."-counter-content,
        .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-owl-stage .con-6310-owl-item:nth-child(6n + 1) .con-6310-template-".esc_attr($templateId)."-counter-content {
          background: \${con_6310_1st_circle_background_color} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 1) .con-6310-template-".esc_attr($templateId)."-counter-content:before,
        .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-owl-stage .con-6310-owl-item:nth-child(6n + 1) .con-6310-template-".esc_attr($templateId)."-counter-content:before {
          background: linear-gradient(
            135deg,transparent 49%,\${con_6310_1st_circle_background_color} 50%) !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 2) .con-6310-template-".esc_attr($templateId)."-counter-content,
        .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-owl-stage .con-6310-owl-item:nth-child(6n + 2) .con-6310-template-".esc_attr($templateId)."-counter-content {
          background: \${con_6310_2nd_circle_background_color} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 2) .con-6310-template-".esc_attr($templateId)."-counter-content:before,
        .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-owl-stage .con-6310-owl-item:nth-child(6n + 2) .con-6310-template-".esc_attr($templateId)."-counter-content:before {
          background: linear-gradient(
            135deg,transparent 49%,\${con_6310_2nd_circle_background_color} 50%) !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 3) .con-6310-template-".esc_attr($templateId)."-counter-content,
        .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-owl-stage .con-6310-owl-item:nth-child(6n + 3) .con-6310-template-".esc_attr($templateId)."-counter-content {
          background: \${con_6310_3rd_circle_background_color} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 3) .con-6310-template-".esc_attr($templateId)."-counter-content:before,
        .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-owl-stage .con-6310-owl-item:nth-child(6n + 3) .con-6310-template-".esc_attr($templateId)."-counter-content:before {
          background: linear-gradient(
            135deg,transparent 49%,\${con_6310_3rd_circle_background_color} 50%) !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 4) .con-6310-template-".esc_attr($templateId)."-counter-content,
        .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-owl-stage .con-6310-owl-item:nth-child(6n + 4) .con-6310-template-".esc_attr($templateId)."-counter-content {
          background: \${con_6310_4th_circle_background_color} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 4) .con-6310-template-".esc_attr($templateId)."-counter-content:before,
        .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-owl-stage .con-6310-owl-item:nth-child(6n + 4) .con-6310-template-".esc_attr($templateId)."-counter-content:before {
          background: linear-gradient(
            135deg,transparent 49%,\${con_6310_4th_circle_background_color} 50%) !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 5) .con-6310-template-".esc_attr($templateId)."-counter-content,
        .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-owl-stage .con-6310-owl-item:nth-child(6n + 5) .con-6310-template-".esc_attr($templateId)."-counter-content {
          background: \${con_6310_5th_circle_background_color} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 5) .con-6310-template-".esc_attr($templateId)."-counter-content:before,
        .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-owl-stage .con-6310-owl-item:nth-child(6n + 5) .con-6310-template-".esc_attr($templateId)."-counter-content:before {
          background: linear-gradient(
            135deg,transparent 49%,\${con_6310_5th_circle_background_color} 50%) !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 6) .con-6310-template-".esc_attr($templateId)."-counter-content,
        .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-owl-stage .con-6310-owl-item:nth-child(6n + 6) .con-6310-template-".esc_attr($templateId)."-counter-content {
          background: \${con_6310_6th_circle_background_color} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 6) .con-6310-template-".esc_attr($templateId)."-counter-content:before,
        .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-owl-stage .con-6310-owl-item:nth-child(6n + 6) .con-6310-template-".esc_attr($templateId)."-counter-content:before {
          background: linear-gradient(
            135deg,transparent 49%,\${con_6310_6th_circle_background_color} 50%) !important;
        }</style>`).appendTo('.con-6310-preview');

    });
  });
";

wp_register_script( "con-6310-template-".esc_attr($templateId)."-js", "" );
wp_enqueue_script( "con-6310-template-".esc_attr($templateId)."-js" );
wp_add_inline_script( "con-6310-template-".esc_attr($templateId)."-js", $jsCode );