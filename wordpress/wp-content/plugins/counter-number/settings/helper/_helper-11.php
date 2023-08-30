<?php
$jsCode = "
jQuery(document).ready(function() {
  //General Setting
  jQuery(`      
        #con_6310_box_background_color,
        #con_6310_box_background_hover_color,
        #con_6310_1st_background_color,
        #con_6310_2nd_background_color,
        #con_6310_3rd_background_color,
        #con_6310_4th_background_color,
        #con_6310_5th_background_color,
        #con_6310_6th_background_color,
        #con_6310_icon_font_size,
        #con_6310_icon_margin_top,
        #con_6310_icon_margin_bottom

      `).on('change', function() {
        var con_6310_box_background_color = jQuery('#con_6310_box_background_color').val();
        var con_6310_box_background_hover_color = jQuery('#con_6310_box_background_hover_color').val();
        var con_6310_1st_background_color = jQuery('#con_6310_1st_background_color').val();
        var con_6310_2nd_background_color = jQuery('#con_6310_2nd_background_color').val();
        var con_6310_3rd_background_color = jQuery('#con_6310_3rd_background_color').val();
        var con_6310_4th_background_color = jQuery('#con_6310_4th_background_color').val();
        var con_6310_5th_background_color = jQuery('#con_6310_5th_background_color').val();
        var con_6310_6th_background_color = jQuery('#con_6310_6th_background_color').val();
        var con_6310_icon_font_size = parseInt(jQuery('#con_6310_icon_font_size').val());
        var con_6310_icon_margin_top = parseInt(jQuery('#con_6310_icon_margin_top').val());
        var con_6310_icon_margin_bottom = parseInt(jQuery('#con_6310_icon_margin_bottom').val()); 

        jQuery(`<style type='text/css'> .con-6310-template-".esc_attr($templateId).":after{
          background-color: \${con_6310_box_background_color} !important;
        }</style>`).appendTo('.con-6310-preview'); 

        jQuery(`<style type='text/css'> .con-6310-template-".esc_attr($templateId)."-counter-content{
          background-color: \${con_6310_box_background_color} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'> .con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-counter-content, .con-6310-template-".esc_attr($templateId).":hover:after{
          background-color: \${con_6310_box_background_hover_color} !important;
       }</style>`).appendTo('.con-6310-preview');
       
        jQuery(`<style type='text/css'> .con-6310-template-".esc_attr($templateId)."-counter-icon{
          font-size: \${con_6310_icon_font_size}px !important;
          margin-top: \${con_6310_icon_margin_top}px !important;
          margin-bottom: \${con_6310_icon_margin_bottom}px !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'> .con-6310-template-".esc_attr($templateId)."-counter-icon img{
          width: \${con_6310_icon_font_size}px !important;
          height: \${con_6310_icon_font_size}px !important;
        }</style>`).appendTo('.con-6310-preview');       
      
    });
  });
";

wp_register_script( "con-6310-template-".esc_attr($templateId)."-js", "" );
wp_enqueue_script( "con-6310-template-".esc_attr($templateId)."-js" );
wp_add_inline_script( "con-6310-template-".esc_attr($templateId)."-js", $jsCode );