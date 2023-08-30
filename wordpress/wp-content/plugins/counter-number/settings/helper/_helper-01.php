<?php
$jsCode = "
jQuery(document).ready(function() {
  //General Setting
  jQuery(`
        #con_6310_number_font_size,
        #con_6310_box_background_color,
        #con_6310_box_background_hover_color,
        #con_6310_box_hover_overly_color,
        #con_6310_box_shadow_width,
        #con_6310_box_shadow_blur,
        #con_6310_box_shadow_color,
        #con_6310_box_shadow_hover_color,
        #con_6310_icon_font_size,
        #con_6310_icon_color,
        #con_6310_icon_hover_color,
        #con_6310_icon_margin_top,
        #con_6310_icon_margin_bottom,
        #con_6310_title_font_color,
        #con_6310_title_font_hover_color,
        #con_6310_details_font_hover_color        
      `).on('change', function() {        
        var con_6310_box_radius = parseInt (jQuery('#con_6310_box_radius').val());
        var con_6310_box_background_color = jQuery('#con_6310_box_background_color').val();
        var con_6310_box_background_hover_color = jQuery('#con_6310_box_background_hover_color').val();
        var con_6310_box_hover_overly_color = jQuery('#con_6310_box_hover_overly_color').val();
        var con_6310_box_shadow_width = parseInt(jQuery('#con_6310_box_shadow_width').val());
        var con_6310_box_shadow_blur = jQuery('#con_6310_box_shadow_blur').val();
        var con_6310_box_shadow_color = jQuery('#con_6310_box_shadow_color').val();
        var con_6310_box_shadow_hover_color = jQuery('#con_6310_box_shadow_hover_color').val();
        var con_6310_icon_font_size = parseInt(jQuery('#con_6310_icon_font_size').val());
        var con_6310_icon_color = jQuery('#con_6310_icon_color').val();
        var con_6310_icon_hover_color = jQuery('#con_6310_icon_hover_color').val();        
        var con_6310_icon_margin_top = parseInt(jQuery('#con_6310_icon_margin_top').val());
        var con_6310_icon_margin_bottom = parseInt(jQuery('#con_6310_icon_margin_bottom').val());
        var con_6310_title_font_color = jQuery('#con_6310_title_font_color').val();
        var con_6310_title_font_hover_color = jQuery('#con_6310_title_font_hover_color').val();
        var con_6310_details_font_hover_color = jQuery('#con_6310_details_font_hover_color').val();       

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-wrapper{
          box-shadow: 0px 0px \${con_6310_box_shadow_blur}px \${con_6310_box_shadow_width}px \${con_6310_box_shadow_color} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-wrapper:hover{
          box-shadow: 0px 0px \${con_6310_box_shadow_blur}px \${con_6310_box_shadow_width}px \${con_6310_box_shadow_hover_color} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-right-section {
          background-color: \${con_6310_box_background_color} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-wrapper:hover .con-6310-template-".esc_attr($templateId)."-right-section {
          background-color: \${con_6310_box_background_hover_color} !important;
        }</style>`).appendTo('.con-6310-preview');    

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-icon {        
          font-size: \${con_6310_icon_font_size}px !important;  
          width: \${con_6310_icon_font_size}px !important;
          height: \${con_6310_icon_font_size}px !important;       
          color: \${con_6310_icon_color} !important;
          margin-top: \${con_6310_icon_margin_top}px !important;
          margin-bottom: \${con_6310_icon_margin_bottom}px !important;
        }</style>`).appendTo('.con-6310-preview');       
         
        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-wrapper:hover .con-6310-template-".esc_attr($templateId)."-icon {                
          color: \${con_6310_icon_hover_color} !important;
        }</style>`).appendTo('.con-6310-preview');  
        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-left-section::before{        
          background-color: \${con_6310_box_hover_overly_color} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-wrapper:hover .con-6310-template-".esc_attr($templateId)."-title{        
          color: \${con_6310_title_font_hover_color} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-wrapper:hover .con-6310-template-".esc_attr($templateId)."-description {         
          color:\${con_6310_details_font_hover_color} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-title {   
          color:\${con_6310_title_font_color} !important; 
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-title {
          color: \${con_6310_title_font_hover_color} !important;
         </style>`).appendTo('.con-6310-preview');

    });
  });
";

wp_register_script( "con-6310-template-".esc_attr($templateId)."-js", "" );
wp_enqueue_script( "con-6310-template-".esc_attr($templateId)."-js" );
wp_add_inline_script( "con-6310-template-".esc_attr($templateId)."-js", $jsCode );