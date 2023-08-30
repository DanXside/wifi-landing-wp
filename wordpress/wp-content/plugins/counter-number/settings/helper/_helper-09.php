<?php
$jsCode = "
jQuery(document).ready(function() {
  //General Setting
  jQuery(`      
        #con_6310_box_radius,
        #con_6310_box_background_color,
        #con_6310_box_background_hover_color,
        #con_6310_box_border_width,
        #con_6310_1st_box_border_color,
        #con_6310_2nd_box_border_color,   
        #con_6310_3rd_box_border_color, 
        #con_6310_4th_box_border_color, 
        #con_6310_5th_box_border_color, 
        #con_6310_6th_box_border_color, 
        #con_6310_title_font_hover_color,
        #con_6310_details_font_hover_color,
        #con_6310_icon_font_size,
        #con_6310_icon_box_size_number,
        #con_6310_icon_color,
        #con_6310_icon_hover_color, 
        #con_6310_icon_background_border_color,
        #con_6310_icon_border_width
     
      `).on('change', function() {
        var con_6310_box_radius = parseInt(jQuery('#con_6310_box_radius').val());
        var con_6310_box_background_color = jQuery('#con_6310_box_background_color').val();
        var con_6310_box_background_hover_color = jQuery('#con_6310_box_background_hover_color').val();
        var con_6310_box_border_width = parseInt(jQuery('#con_6310_box_border_width').val());
        var con_6310_1st_box_border_color = jQuery('#con_6310_1st_box_border_color').val();
        var con_6310_2nd_box_border_color = jQuery('#con_6310_2nd_box_border_color').val();
        var con_6310_3rd_box_border_color = jQuery('#con_6310_3rd_box_border_color').val();
        var con_6310_4th_box_border_color = jQuery('#con_6310_4th_box_border_color').val();
        var con_6310_5th_box_border_color = jQuery('#con_6310_5th_box_border_color').val();
        var con_6310_6th_box_border_color = jQuery('#con_6310_6th_box_border_color').val();
        var con_6310_title_font_hover_color = jQuery('#con_6310_title_font_hover_color').val();
        var con_6310_details_font_hover_color = jQuery('#con_6310_details_font_hover_color').val();
        var con_6310_icon_font_size = parseInt(jQuery('#con_6310_icon_font_size').val());
        var con_6310_icon_box_size_number = parseInt(jQuery('#con_6310_icon_box_size_number').val());
        var con_6310_icon_color = jQuery('#con_6310_icon_color').val();
        var con_6310_icon_hover_color = jQuery('#con_6310_icon_hover_color').val();
        var con_6310_icon_background_border_color = jQuery('#con_6310_icon_background_border_color').val(); 
        var con_6310_icon_border_width = parseInt(jQuery('#con_6310_icon_border_width').val());  

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-description{
          color: \${con_6310_details_font_hover_color} !important;               
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-counter-icon{
          width: \${con_6310_icon_box_size_number}px !important;
          height: \${con_6310_icon_box_size_number}px !important;
          line-height: \${con_6310_icon_box_size_number}px !important;
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

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-counter-icon:before{
          border: \${con_6310_icon_border_width}px solid \${con_6310_icon_background_border_color} !important;        
        }</style>`).appendTo('.con-6310-preview');
       
        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-counter-content{
          background: \${con_6310_box_background_color} !important;
          border: \${con_6310_box_border_width}px solid !important;
          border-radius: \${con_6310_box_radius}px !important; 
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-counter-content{
          background: \${con_6310_box_background_hover_color} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 1) .con-6310-template-".esc_attr($templateId)."-counter-icon {
          background: \${con_6310_1st_box_border_color} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 1) .con-6310-template-".esc_attr($templateId)."-counter-icon:after {
          background: \${con_6310_1st_box_border_color} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 1) .con-6310-template-".esc_attr($templateId)."-counter-content {
          border-color: \${con_6310_1st_box_border_color} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 1) .con-6310-template-".esc_attr($templateId)."-title{
          color: \${con_6310_1st_box_border_color} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 2) .con-6310-template-".esc_attr($templateId)."-counter-icon {
          background: \${con_6310_2nd_box_border_color} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 2) .con-6310-template-".esc_attr($templateId)."-counter-icon:after {
          background: \${con_6310_2nd_box_border_color} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 2) .con-6310-template-".esc_attr($templateId)."-counter-content {
          border-color: \${con_6310_2nd_box_border_color} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 2) .con-6310-template-".esc_attr($templateId)."-title{
          color: \${con_6310_2nd_box_border_color} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 3) .con-6310-template-".esc_attr($templateId)."-counter-icon {
          background: \${con_6310_3rd_box_border_color} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 3) .con-6310-template-".esc_attr($templateId)."-counter-icon:after {
          background: \${con_6310_3rd_box_border_color} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 3) .con-6310-template-".esc_attr($templateId)."-counter-content {
          border-color: \${con_6310_3rd_box_border_color} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 3) .con-6310-template-".esc_attr($templateId)."-title{
          color: \${con_6310_3rd_box_border_color} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 4) .con-6310-template-".esc_attr($templateId)."-counter-icon {
          background: \${con_6310_4th_box_border_color} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 4) .con-6310-template-".esc_attr($templateId)."-counter-icon:after {
          background: \${con_6310_4th_box_border_color} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 4) .con-6310-template-".esc_attr($templateId)."-counter-content {
          border-color: \${con_6310_4th_box_border_color} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 4) .con-6310-template-".esc_attr($templateId)."-title{
          color: \${con_6310_4th_box_border_color} !important;
        }</style>`).appendTo('.con-6310-preview');       

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 5) .con-6310-template-".esc_attr($templateId)."-counter-icon {
          background: \${con_6310_5th_box_border_color} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 5) .con-6310-template-".esc_attr($templateId)."-counter-icon:after {
          background: \${con_6310_5th_box_border_color} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 5) .con-6310-template-".esc_attr($templateId)."-counter-content {
          border-color: \${con_6310_5th_box_border_color} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 5) .con-6310-template-".esc_attr($templateId)."-title{
          color: \${con_6310_5th_box_border_color} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 6) .con-6310-template-".esc_attr($templateId)."-counter-icon {
          background: \${con_6310_6th_box_border_color} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 6) .con-6310-template-".esc_attr($templateId)."-counter-icon:after {
          background: \${con_6310_6th_box_border_color} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 6) .con-6310-template-".esc_attr($templateId)."-counter-content {
          border-color: \${con_6310_6th_box_border_color} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 6) .con-6310-template-".esc_attr($templateId)."-title{
          color: \${con_6310_6th_box_border_color} !important;
        }</style>`).appendTo('.con-6310-preview');       
      
    });
  });
";

wp_register_script( "con-6310-template-".esc_attr($templateId)."-js", "" );
wp_enqueue_script( "con-6310-template-".esc_attr($templateId)."-js" );
wp_add_inline_script( "con-6310-template-".esc_attr($templateId)."-js", $jsCode );