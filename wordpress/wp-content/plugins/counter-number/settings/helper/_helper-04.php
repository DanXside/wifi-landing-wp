<?php
$jsCode = "
jQuery(document).ready(function() {
  //General Setting
  jQuery(`
      #con_6310_box_inner_background_color,
      #con_6310_box_inner_background_hover_color,  
      #con_6310_box_outer_1st_background_color,
      #con_6310_box_outer_2nd_background_color,
      #con_6310_title_font_color,
      #con_6310_box_outer_3rd_background_color,
      #con_6310_box_outer_4th_background_color,
      #con_6310_title_font_hover_color,
      #con_6310_icon_font_size,
      #con_6310_icon_color,
      #con_6310_icon_hover_color,
      #con_6310_icon_margin_top,
      #con_6310_icon_margin_bottom
      `).on('change', function() {        
        var con_6310_box_inner_background_color = jQuery('#con_6310_box_inner_background_color').val();
        var con_6310_box_inner_background_hover_color = jQuery('#con_6310_box_inner_background_hover_color').val();
        var con_6310_box_outer_1st_background_color = jQuery('#con_6310_box_outer_1st_background_color').val();
        var con_6310_box_outer_2nd_background_color = jQuery('#con_6310_box_outer_2nd_background_color').val();
        var con_6310_box_outer_3rd_background_color = jQuery('#con_6310_box_outer_3rd_background_color').val();
        var con_6310_box_outer_4th_background_color = jQuery('#con_6310_box_outer_4th_background_color').val();
        var con_6310_title_font_hover_color = jQuery('#con_6310_title_font_hover_color').val();
        var con_6310_title_font_color = jQuery('#con_6310_title_font_color').val();
        var con_6310_icon_font_size = parseInt(jQuery('#con_6310_icon_font_size').val());
        var con_6310_icon_color = jQuery('#con_6310_icon_color').val();
        var con_6310_icon_hover_color = jQuery('#con_6310_icon_hover_color').val();
        var con_6310_icon_margin_top = jQuery('#con_6310_icon_margin_top').val();
        var con_6310_icon_margin_bottom = parseInt(jQuery('#con_6310_icon_margin_bottom').val());

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-circle::before{
          background-color:  \${con_6310_box_outer_1st_background_color} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-circle::after{
          background-color:  \${con_6310_box_outer_2nd_background_color} !important;   
        }</style>`).appendTo('.con-6310-preview');     

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-container::after{
          background-color: \${con_6310_box_outer_3rd_background_color} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-container::before{
          background-color:  \${con_6310_box_outer_4th_background_color} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-content {
          background-color: \${con_6310_box_inner_background_color} !important;
        }</style>`).appendTo('.con-6310-preview');
        
        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-container:hover .con-6310-template-".esc_attr($templateId)."-content {
          background: \${con_6310_box_inner_background_hover_color} !important;
        }</style>`).appendTo('.con-6310-preview');
        
        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-icon{
          font-size: \${con_6310_icon_font_size}px !important;
          color: \${con_6310_icon_color} !important;
          margin-top: \${con_6310_icon_margin_top}px !important;
          margin-bottom: \${con_6310_icon_margin_bottom}px !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-icon img{
          width: \${con_6310_icon_font_size}px !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-container:hover .con-6310-template-".esc_attr($templateId)."-icon{
          color: \${con_6310_icon_hover_color} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-title{
          color: \${con_6310_title_font_color} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-container:hover .con-6310-template-".esc_attr($templateId)."-title{
          color: \${con_6310_title_font_hover_color} !important;
        }</style>`).appendTo('.con-6310-preview');
        
    });
  });
";

wp_register_script( "con-6310-template-".esc_attr($templateId)."-js", "" );
wp_enqueue_script( "con-6310-template-".esc_attr($templateId)."-js" );
wp_add_inline_script( "con-6310-template-".esc_attr($templateId)."-js", $jsCode );