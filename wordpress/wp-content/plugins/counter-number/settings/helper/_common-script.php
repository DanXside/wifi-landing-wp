<?php
$jsCode = "
jQuery(document).ready(function() {
  jQuery(`  
    #con_6310_title_font_size,
    #con_6310_title_line_height,
    #con_6310_title_font_weight,
    #con_6310_title_text_transform,
    #con_6310_title_text_align,
    #con_6310_title_font_family,
    #con_6310_title_padding_top,
    #con_6310_title_padding_bottom,

    #con_6310_details_font_size,
    #con_6310_details_line_height,
    #con_6310_details_font_color,
    #con_6310_details_font_hover_color,
    #con_6310_details_font_weight,
    #con_6310_details_text_transform,
    #con_6310_details_text_align,
    #con_6310_details_font_family,
    #con_6310_details_margin_top,
    #con_6310_details_margin_bottom,
    
    #con_6310_number_font_size,
    #con_6310_number_line_height,
    #con_6310_number_font_color,
    #con_6310_number_font_hover_color,
    #con_6310_number_font_weight,
    #con_6310_number_font_family,
    #con_6310_number_margin_left,
    #con_6310_number_margin_right,
    #con_6310_number_margin_top,
    #con_6310_number_margin_bottom,
    #con_6310_number_prefix_font_size,
    #con_6310_number_prefix_font_color,
    #con_6310_number_prefix_font_hover_color,
    #con_6310_number_prefix_font_weight,
    #con_6310_number_prefix_font_family,
    #con_6310_number_prefix_position,
    #con_6310_number_prefix_margin_left,
    #con_6310_number_prefix_margin_right,
    #con_6310_number_suffix_font_size,
    #con_6310_number_suffix_font_color,
    #con_6310_number_suffix_font_hover_color,
    #con_6310_number_suffix_font_weight,
    #con_6310_number_suffix_font_family,
    #con_6310_number_suffix_position,
    #con_6310_number_suffix_margin_left,
    #con_6310_number_suffix_margin_right,

    #con_6310_read_more_height,
    #con_6310_read_more_width,
    #con_6310_read_more_font_size,
    #con_6310_read_more_font_color,
    #con_6310_read_more_font_hover_color,
    #con_6310_read_more_border_width,
    #con_6310_read_more_box_border_color,
    #con_6310_read_more_border_hover_color,
    #con_6310_read_more_border_radius,
    #con_6310_read_more_background_color,
    #con_6310_read_more_font_weight,
    #con_6310_read_more_background_hover_color,
    #con_6310_read_more_font_weight,
    #con_6310_read_more_text_transform,
    #con_6310_read_more_text_align,
    #con_6310_read_more_font_family,
    #con_6310_read_more_margin_top,
    #con_6310_read_more_margin_bottom
    `).on('change', function() {
    var con_6310_title_font_size = jQuery('#con_6310_title_font_size').val();   
    var con_6310_title_line_height = parseInt (jQuery('#con_6310_title_line_height').val());
    var con_6310_title_font_weight = jQuery('#con_6310_title_font_weight').val();
    var con_6310_title_text_transform = jQuery('#con_6310_title_text_transform').val();
    var con_6310_title_text_align = jQuery('#con_6310_title_text_align').val();
    var con_6310_title_font_family = jQuery('#con_6310_title_font_family').val();
    var con_6310_title_padding_top = jQuery('#con_6310_title_padding_top').val();
    var con_6310_title_padding_bottom = jQuery('#con_6310_title_padding_bottom').val();

    var con_6310_number_font_size = parseInt (jQuery('#con_6310_number_font_size').val());
    var con_6310_number_line_height = parseInt(jQuery('#con_6310_number_line_height').val());
    var con_6310_number_font_color = jQuery('#con_6310_number_font_color').val();
    var con_6310_number_font_hover_color = jQuery('#con_6310_number_font_hover_color').val();
    var con_6310_number_font_weight = jQuery('#con_6310_number_font_weight').val(); 
    var con_6310_number_font_family = jQuery('#con_6310_number_font_family').val();
    var con_6310_number_margin_left = parseInt(jQuery('#con_6310_number_margin_left').val());
    var con_6310_number_margin_right = parseInt(jQuery('#con_6310_number_margin_right').val());
    var con_6310_number_margin_top = parseInt(jQuery('#con_6310_number_margin_top').val());
    var con_6310_number_margin_bottom = parseInt(jQuery('#con_6310_number_margin_bottom').val());   
    var con_6310_number_prefix_font_size = parseInt(jQuery('#con_6310_number_prefix_font_size').val());
    var con_6310_number_prefix_font_color = jQuery('#con_6310_number_prefix_font_color').val();
    var con_6310_number_prefix_font_hover_color = jQuery('#con_6310_number_prefix_font_hover_color').val();    
    var con_6310_number_prefix_font_weight = jQuery('#con_6310_number_prefix_font_weight').val(); 
    var con_6310_number_prefix_font_family = jQuery('#con_6310_number_prefix_font_family').val();   
    var con_6310_number_prefix_position = parseInt(jQuery('#con_6310_number_prefix_position').val());
    var con_6310_number_prefix_margin_left = parseInt(jQuery('#con_6310_number_prefix_margin_left').val());
    var con_6310_number_prefix_margin_right = parseInt (jQuery('#con_6310_number_prefix_margin_right').val());

    var con_6310_number_suffix_font_size = parseInt(jQuery('#con_6310_number_suffix_font_size').val());
    var con_6310_number_suffix_font_color = jQuery('#con_6310_number_suffix_font_color').val();
    var con_6310_number_suffix_font_hover_color = jQuery('#con_6310_number_suffix_font_hover_color').val();    
    var con_6310_number_suffix_font_weight = jQuery('#con_6310_number_suffix_font_weight').val(); 
    var con_6310_number_suffix_font_family = jQuery('#con_6310_number_suffix_font_family').val();   
    var con_6310_number_suffix_position = parseInt(jQuery('#con_6310_number_suffix_position').val());
    var con_6310_number_suffix_margin_left = parseInt(jQuery('#con_6310_number_suffix_margin_left').val());
    var con_6310_number_suffix_margin_right = parseInt (jQuery('#con_6310_number_suffix_margin_right').val());

    var con_6310_details_font_size = parseInt (jQuery('#con_6310_details_font_size').val());
    var con_6310_details_line_height = jQuery('#con_6310_details_line_height').val();
    var con_6310_details_font_color = jQuery('#con_6310_details_font_color').val();
    var con_6310_details_font_hover_color = jQuery('#con_6310_details_font_hover_color').val();
    var con_6310_details_font_weight = jQuery('#con_6310_details_font_weight').val();
    var con_6310_details_text_transform = jQuery('#con_6310_details_text_transform').val();
    var con_6310_details_text_align = jQuery('#con_6310_details_text_align').val();
    var con_6310_details_font_family = jQuery('#con_6310_details_font_family').val();
    var con_6310_details_margin_top = jQuery('#con_6310_details_margin_top').val();
    var con_6310_details_margin_bottom = jQuery('#con_6310_details_margin_bottom').val();
    var con_6310_read_more_height = parseInt (jQuery('#con_6310_read_more_height').val());    
    var con_6310_read_more_font_family = jQuery('#con_6310_read_more_font_family').val();  
    var con_6310_read_more_width = parseInt (jQuery('#con_6310_read_more_width').val());
    var con_6310_read_more_font_size = parseInt (jQuery('#con_6310_read_more_font_size').val());
    var con_6310_read_more_font_color = jQuery('#con_6310_read_more_font_color').val();
    var con_6310_read_more_font_hover_color = jQuery('#con_6310_read_more_font_hover_color').val();
    var con_6310_read_more_border_width = jQuery('#con_6310_read_more_border_width').val();
    var con_6310_read_more_box_border_color = jQuery('#con_6310_read_more_box_border_color').val();
    var con_6310_read_more_border_hover_color = jQuery('#con_6310_read_more_border_hover_color').val();
    var con_6310_read_more_border_radius = jQuery('#con_6310_read_more_border_radius').val();  
    var con_6310_read_more_background_color = jQuery('#con_6310_read_more_background_color').val(); 
    var con_6310_read_more_background_hover_color = jQuery('#con_6310_read_more_background_hover_color').val(); 
    var con_6310_read_more_font_weight = jQuery('#con_6310_read_more_font_weight').val(); 
    var con_6310_read_more_text_transform = jQuery('#con_6310_read_more_text_transform').val();         
    var con_6310_read_more_text_align = jQuery('#con_6310_read_more_text_align').val();   
    var con_6310_read_more_margin_top = jQuery('#con_6310_read_more_margin_top').val();   
    var con_6310_read_more_margin_bottom = jQuery('#con_6310_read_more_margin_bottom').val();     

    jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-title {   
      font-size:\${con_6310_title_font_size}px !important;
      line-height:\${con_6310_title_line_height}px !important; 
      font-weight:\${con_6310_title_font_weight} !important;
      text-transform:\${con_6310_title_text_transform} !important;
      text-align:\${con_6310_title_text_align} !important;
      font-family:\${con_6310_title_font_family} !important;
      padding-top:\${con_6310_title_padding_top}px !important;
      padding-bottom:\${con_6310_title_padding_bottom}px !important;
    }</style>`).appendTo('.con-6310-preview');

    jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-description {
      font-size:\${con_6310_details_font_size}px !important;
      line-height:\${con_6310_details_line_height}px !important; 
      color:\${con_6310_details_font_color} !important;
      font-weight:\${con_6310_details_font_weight} !important;
      text-transform:\${con_6310_details_text_transform} !important;
      text-align:\${con_6310_details_text_align} !important;
      font-family:\${con_6310_details_font_family} !important;
      padding-top:\${con_6310_details_margin_top}px !important;
      padding-bottom:\${con_6310_details_margin_bottom}px !important;
    }</style>`).appendTo('.con-6310-preview');

    jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-description {
      color: \${con_6310_details_font_hover_color} !important;
    }</style>`).appendTo('.con-6310-preview');
    jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-counter-value{
      font-size: \${con_6310_number_font_size}px !important;
      font-family:\${con_6310_number_font_family} !important;
      color: \${con_6310_number_font_color} !important;  
      line-height: \${con_6310_number_line_height}px !important;  
      font-weight: \${con_6310_number_font_weight} !important;
      margin-left: \${con_6310_number_margin_left}px !important;
      margin-right: \${con_6310_number_margin_right}px !important;
      margin-top: \${con_6310_number_margin_top}px !important;
      margin-bottom: \${con_6310_number_margin_bottom}px !important;
    }</style>`).appendTo('.con-6310-preview');

    jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-counter-value{
      color: \${con_6310_number_font_hover_color} !important;
    }</style>`).appendTo('.con-6310-preview');

    jQuery(`<style type='text/css'>.con-6310-counter-".esc_attr($templateId)."-count-prefix {
      font-size: \${con_6310_number_prefix_font_size}px !important;
      color: \${con_6310_number_prefix_font_color} !important;
      font-weight: \${con_6310_number_prefix_font_weight} !important;
      font-family: \${con_6310_number_prefix_font_family} !important;
      margin-top: \${con_6310_number_prefix_position}px !important;
      margin-left: \${con_6310_number_prefix_margin_left}px !important;
      margin-right: \${con_6310_number_prefix_margin_right}px !important;
    }</style>`).appendTo('.con-6310-preview');   

    jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId).":hover .con-6310-counter-".esc_attr($templateId)."-count-prefix {
      color: \${con_6310_number_prefix_font_hover_color} !important;
    }</style>`).appendTo('.con-6310-preview');

    jQuery(`<style type='text/css'>.con-6310-counter-".esc_attr($templateId)."-count-suffix {
      font-size: \${con_6310_number_suffix_font_size}px !important;
      color: \${con_6310_number_suffix_font_color} !important;
      font-weight: \${con_6310_number_suffix_font_weight} !important;
      font-family: \${con_6310_number_suffix_font_family} !important;
      margin-top: \${con_6310_number_suffix_position}px !important;
      margin-left: \${con_6310_number_suffix_margin_left}px !important;
      margin-right: \${con_6310_number_suffix_margin_right}px !important;
    }</style>`).appendTo('.con-6310-preview');

    jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId).":hover .con-6310-counter-".esc_attr($templateId)."-count-suffix {
      color: \${con_6310_number_suffix_font_hover_color} !important;
    }</style>`).appendTo('.con-6310-preview');

    jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-read-more {        
      text-align: \${con_6310_read_more_text_align} !important;
      margin-top: \${con_6310_read_more_margin_top}px !important ;
      margin-bottom: \${con_6310_read_more_margin_bottom}px !important;
    }</style>`).appendTo('.con-6310-preview');

    jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-read-more a {   
      font-family:\${con_6310_read_more_font_family} !important;
      height:\${con_6310_read_more_height}px !important; 
      line-height:\${con_6310_read_more_height}px !important;
      width:\${con_6310_read_more_width}px !important;
      font-size:\${con_6310_read_more_font_size}px !important; 
      color:\${con_6310_read_more_font_color} !important; 
      border: \${con_6310_read_more_border_width} solid \${con_6310_read_more_box_border_color} !important;
      border-radius: \${con_6310_read_more_border_radius}px !important;
      background: \${con_6310_read_more_background_color} !important; 
      font-weight: \${con_6310_read_more_font_weight} !important; 
      text-transform: \${con_6310_read_more_text_transform} !important; 
    }</style>`).appendTo('.con-6310-preview');

    jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-read-more a:hover {        
      color: \${con_6310_read_more_font_hover_color} !important;
      border: \${con_6310_read_more_border_width} solid \${con_6310_read_more_border_hover_color} !important;
      background: \${con_6310_read_more_background_hover_color} !important; 
    }</style>`).appendTo('.con-6310-preview');    
  });
});
";
wp_register_script( "con-6310-common-js", "" );
wp_enqueue_script( "con-6310-common-js" );
wp_add_inline_script( "con-6310-common-js", $jsCode );
?>
