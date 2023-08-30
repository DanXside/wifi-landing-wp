<?php
$jsCode = "
jQuery(document).ready(function() {
  //General Setting
  jQuery(` 
      #con_6310_box_radius,     
      #con_6310_1st_box_background_top,
      #con_6310_1st_box_background_bottom,
      #con_6310_2nd_box_background_top,
      #con_6310_2nd_box_background_bottom,
      #con_6310_3rd_box_background_top,  
      #con_6310_3rd_box_background_bottom,
      #con_6310_4th_box_background_top,
      #con_6310_4th_box_background_bottom,
      #con_6310_5th_box_background_top, 
      #con_6310_5th_box_background_bottom,
      #con_6310_6th_box_background_top,
      #con_6310_6th_box_background_bottom,
      #con_6310_title_font_color,
      #con_6310_title_font_hover_color,
      #con_6310_details_font_hover_color, 
      #con_6310_icon_font_size,
      #con_6310_icon_box_shadow_color,
      #con_6310_icon_background_color,
      #con_6310_icon_margin_bottom  
     
      `).on('change', function() {
        var con_6310_box_radius = parseInt(jQuery('#con_6310_box_radius').val());
        var con_6310_1st_box_background_top = jQuery('#con_6310_1st_box_background_top').val();
        var con_6310_1st_box_background_bottom = jQuery('#con_6310_1st_box_background_bottom').val(); 
        var con_6310_2nd_box_background_top = jQuery('#con_6310_2nd_box_background_top').val();       
        var con_6310_2nd_box_background_bottom = jQuery('#con_6310_2nd_box_background_bottom').val(); 
        var con_6310_3rd_box_background_top = jQuery('#con_6310_3rd_box_background_top').val(); 
        var con_6310_3rd_box_background_bottom = jQuery('#con_6310_3rd_box_background_bottom').val(); 
        var con_6310_4th_box_background_top = jQuery('#con_6310_4th_box_background_top').val(); 
        var con_6310_4th_box_background_bottom = jQuery('#con_6310_4th_box_background_bottom').val(); 
        var con_6310_5th_box_background_top = jQuery('#con_6310_5th_box_background_top').val(); 
        var con_6310_5th_box_background_bottom = jQuery('#con_6310_5th_box_background_bottom').val(); 
        var con_6310_6th_box_background_top = jQuery('#con_6310_6th_box_background_top').val(); 
        var con_6310_6th_box_background_bottom = jQuery('#con_6310_6th_box_background_bottom').val(); 
        var con_6310_title_font_color = jQuery('#con_6310_title_font_color').val();
        var con_6310_title_font_hover_color = jQuery('#con_6310_title_font_hover_color').val();
        var con_6310_details_font_hover_color = jQuery('#con_6310_details_font_hover_color').val();
        var con_6310_icon_font_size = parseInt(jQuery('#con_6310_icon_font_size').val());
        var con_6310_icon_box_shadow_color = jQuery('#con_6310_icon_box_shadow_color').val();
        var con_6310_icon_background_color = jQuery('#con_6310_icon_background_color').val();
        var con_6310_icon_margin_bottom = parseInt(jQuery('#con_6310_icon_margin_bottom').val());

        jQuery(`<style type='text/css'> .con-6310-template-".esc_attr($templateId)."-counter-icon{
          width: calc(\${con_6310_icon_font_size}px * 2) !important;
          height: calc(\${con_6310_icon_font_size}px * 2) !important;
          line-height: calc(\${con_6310_icon_font_size}px * 2) !important;
          background: \${con_6310_icon_background_color} !important;
          font-size: \${con_6310_icon_font_size}px !important;
        }</style>`).appendTo('.con-6310-preview'); 

        jQuery(`<style type='text/css'>.con-6310-template-20-icon-wrapper {
          margin-bottom: \${con_6310_icon_margin_bottom}px !important; 
        }</style>`).appendTo('.con-6310-preview');


        
        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-counter-icon{ 
          box-shadow: 0 0 10px \${con_6310_icon_box_shadow_color} inset !important; 
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId).":hover .con-6310-counter-".esc_attr($templateId)."-section{ 
          box-shadow: 0 0 7px \${con_6310_icon_box_shadow_color}   inset, 0 0 0 15px \${con_6310_icon_background_color} inset,0 0 10px \${con_6310_icon_box_shadow_color} !important ; 
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-title{
          color: \${con_6310_title_font_color} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-title{
          color: \${con_6310_title_font_hover_color} !important;
        }</style>`).appendTo('.con-6310-preview');


        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-description {
          color: \${con_6310_details_font_hover_color} !important;        
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-3:nth-child(6n + 1) .con-6310-template-".esc_attr($templateId)."-counter-icon,
        .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-3:nth-child(6n + 1) .con-6310-template-".esc_attr($templateId)."-counter-value, con-6310-counter-".esc_attr($templateId)."-count-prefix, con-6310-counter-".esc_attr($templateId)."-count-suffix{
          color: \${con_6310_1st_box_background_bottom} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-3:nth-child(6n + 1) .con-6310-template-".esc_attr($templateId)."-counter-icon::before{
          background: \${con_6310_1st_box_background_bottom} !important;        
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-3:nth-child(6n + 1) .con-6310-template-".esc_attr($templateId)."-counter-content{
          background: linear-gradient(143deg,\${con_6310_1st_box_background_top} 49%,\${con_6310_1st_box_background_bottom} 50%) !important;
          border-radius: \${con_6310_box_radius}px !important;       
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 1) .con-6310-counter-".esc_attr($templateId)."-count-prefix,
        .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 1) .con-6310-counter-".esc_attr($templateId)."-count-suffix{
          color: \${con_6310_1st_box_background_bottom} !important;
        }</style>`).appendTo('.con-6310-preview');

        
        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-3:nth-child(6n + 2) .con-6310-template-".esc_attr($templateId)."-counter-icon,
        .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-3:nth-child(6n + 2) .con-6310-template-".esc_attr($templateId)."-counter-value, con-6310-counter-".esc_attr($templateId)."-count-prefix, con-6310-counter-".esc_attr($templateId)."-count-suffix {
          color: \${con_6310_2nd_box_background_bottom} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-3:nth-child(6n + 2) .con-6310-template-".esc_attr($templateId)."-counter-icon::before{
          background: \${con_6310_2nd_box_background_bottom} !important;        
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-3:nth-child(6n + 2) .con-6310-template-".esc_attr($templateId)."-counter-content{
          background: linear-gradient(143deg,\${con_6310_2nd_box_background_top} 49%,\${con_6310_2nd_box_background_bottom} 50%) !important;
          border-radius: \${con_6310_box_radius}px !important;       
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 2) .con-6310-counter-".esc_attr($templateId)."-count-prefix,
        .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 2) .con-6310-counter-".esc_attr($templateId)."-count-suffix{
          color: \${con_6310_2nd_box_background_bottom} !important;
        }</style>`).appendTo('.con-6310-preview');


        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-3:nth-child(6n + 3) .con-6310-template-".esc_attr($templateId)."-counter-icon,
        .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-3:nth-child(6n + 3) .con-6310-template-".esc_attr($templateId)."-counter-value, con-6310-counter-".esc_attr($templateId)."-count-prefix, con-6310-counter-".esc_attr($templateId)."-count-suffix {
          color: \${con_6310_3rd_box_background_bottom} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-3:nth-child(6n + 3) .con-6310-template-".esc_attr($templateId)."-counter-icon::before{
          background: \${con_6310_3rd_box_background_bottom} !important;        
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-3:nth-child(6n + 3) .con-6310-template-".esc_attr($templateId)."-counter-content{
          background: linear-gradient(143deg,\${con_6310_3rd_box_background_top} 49%,\${con_6310_3rd_box_background_bottom} 50%) !important;      
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 3) .con-6310-counter-".esc_attr($templateId)."-count-prefix,
        .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 3) .con-6310-counter-".esc_attr($templateId)."-count-suffix{
          color: \${con_6310_3rd_box_background_bottom} !important;
        }</style>`).appendTo('.con-6310-preview');
        
        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-3:nth-child(6n + 4) .con-6310-template-".esc_attr($templateId)."-counter-icon,
        .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-3:nth-child(6n + 4) .con-6310-template-".esc_attr($templateId)."-counter-value, con-6310-counter-".esc_attr($templateId)."-count-prefix, con-6310-counter-".esc_attr($templateId)."-count-suffix {
          color: \${con_6310_4th_box_background_bottom} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-3:nth-child(6n + 4) .con-6310-template-".esc_attr($templateId)."-counter-icon::before{
          background: \${con_6310_4th_box_background_bottom} !important;        
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-3:nth-child(6n + 4) .con-6310-template-".esc_attr($templateId)."-counter-content{
          background: linear-gradient(143deg,\${con_6310_4th_box_background_top} 49%,\${con_6310_4th_box_background_bottom} 50%) !important;
          border-radius: \${con_6310_box_radius}px !important;       
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 4) .con-6310-counter-".esc_attr($templateId)."-count-prefix,
        .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 4) .con-6310-counter-".esc_attr($templateId)."-count-suffix{
          color: \${con_6310_4th_box_background_bottom} !important;
        }</style>`).appendTo('.con-6310-preview');


        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-3:nth-child(6n + 5) .con-6310-template-".esc_attr($templateId)."-counter-icon,
        .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-3:nth-child(6n + 5) .con-6310-template-".esc_attr($templateId)."-counter-value, con-6310-counter-".esc_attr($templateId)."-count-prefix, con-6310-counter-".esc_attr($templateId)."-count-suffix {
          color: \${con_6310_5th_box_background_bottom} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-3:nth-child(6n + 5) .con-6310-template-".esc_attr($templateId)."-counter-icon::before{
          background: \${con_6310_5th_box_background_bottom} !important;        
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-3:nth-child(6n + 5) .con-6310-template-".esc_attr($templateId)."-counter-content{
          background: linear-gradient(143deg,\${con_6310_5th_box_background_top} 49%,\${con_6310_5th_box_background_bottom} 50%) !important;
          border-radius: \${con_6310_box_radius}px !important;       
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 5) .con-6310-counter-".esc_attr($templateId)."-count-prefix,
        .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 5) .con-6310-counter-".esc_attr($templateId)."-count-suffix{
          color: \${con_6310_5th_box_background_bottom} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-3:nth-child(6n + 6) .con-6310-template-".esc_attr($templateId)."-counter-icon,
        .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-3:nth-child(6n + 6) .con-6310-template-".esc_attr($templateId)."-counter-value, con-6310-counter-".esc_attr($templateId)."-count-prefix, con-6310-counter-".esc_attr($templateId)."-count-suffix{
          color: \${con_6310_6th_box_background_bottom} !important;
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-3:nth-child(6n + 6) .con-6310-template-".esc_attr($templateId)."-counter-icon::before{
          background: \${con_6310_6th_box_background_bottom} !important;        
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-3:nth-child(6n + 6) .con-6310-template-".esc_attr($templateId)."-counter-content{
          background: linear-gradient(143deg,\${con_6310_6th_box_background_top} 49%,\${con_6310_6th_box_background_bottom} 50%) !important;
          border-radius: \${con_6310_box_radius}px !important;       
        }</style>`).appendTo('.con-6310-preview');

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 6) .con-6310-counter-".esc_attr($templateId)."-count-prefix,
        .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 6) .con-6310-counter-".esc_attr($templateId)."-count-suffix{
          color: \${con_6310_6th_box_background_bottom} !important;
        }</style>`).appendTo('.con-6310-preview');
        
        
    });
  });
";

wp_register_script( "con-6310-template-".esc_attr($templateId)."-js", "" );
wp_enqueue_script( "con-6310-template-".esc_attr($templateId)."-js" );
wp_add_inline_script( "con-6310-template-".esc_attr($templateId)."-js", $jsCode );