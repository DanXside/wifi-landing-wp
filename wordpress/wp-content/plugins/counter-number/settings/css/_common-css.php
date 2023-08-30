<?php
  $titleFontFamily =  str_replace("+", " ", esc_attr($cssData['con_6310_title_font_family'])); 
  $detailFontFamily = str_replace("+", " ", esc_attr($cssData['con_6310_details_font_family'])); 
  $readMoreFontFamily =  str_replace("+", " ", esc_attr($cssData['con_6310_read_more_font_family'])); 
  $numberFontfamily = str_replace("+", " ", $cssData['con_6310_number_font_family']);
  $prefixFontfamily = str_replace("+", " ", $cssData['con_6310_number_prefix_font_family']);
  $safixFontfamily = str_replace("+", " ", $cssData['con_6310_number_suffix_font_family']);
  $bgCSS = '';
  if($bgType == 1) {
    $bgCSS = "background: transparent;";
  } else if($bgType == 2) {
    $bgCSS = "background-color: " . (isset($cssData['template_background_color']) ? esc_attr($cssData['template_background_color']) : 'rgba(255, 255, 255, 0)') . ";";
  } else if($bgType == 3) {
    $bgCSS = "background-image: url('" . (isset($cssData['box_background_image']) ? esc_attr($cssData['box_background_image']) : 'rgba(255, 255, 255, 0)') . "');";
  }

  $bgColor = '';
  if($bgType == 3){
    $bgColor = "background-color: ".esc_attr($cssData['image_opacity']).";";
  } else if($bgType == 4) {
    $bgColor = "background-color: ".esc_attr($cssData['video_opacity_color']).";";
  }

  $cssCode = "
  .con-6310-template-".esc_attr($templateId)."-parallax {
    float: left;
    width: 100%;
    height: 100%;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: stretch;
    position: relative;
    overflow: hidden;
    {$bgCSS}
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
  .con-6310-template-".esc_attr($templateId)."-parallax iframe {
    position: absolute !important;
    top: -100%;
    left: 0;
    width: 100%;
    height: 300%;
    pointer-events: none;
    opacity: ".esc_attr($cssData['video_opacity']).";
    position: relative;
  }
  .con-6310-template-".esc_attr($templateId)."-common-overlay { 
    {$bgColor}
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    overflow: hidden;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    width:100%;
  }

  .con-6310-template-".esc_attr($templateId)."-title {  
    float: left;
    width: 100%; 
    font-family: {$titleFontFamily};   
    line-height: ".esc_attr($cssData['con_6310_title_line_height'])."px;
    font-size:".esc_attr($cssData['con_6310_title_font_size'])."px;
    font-weight: ".esc_attr($cssData['con_6310_title_font_weight']).";
    text-transform: ".esc_attr($cssData['con_6310_title_text_transform']).";
    text-align: ".esc_attr($cssData['con_6310_title_text_align']).";  
    padding-top: ".esc_attr($cssData['con_6310_title_padding_top'])."px;
    padding-bottom: ".esc_attr($cssData['con_6310_title_padding_bottom'])."px; 
  }
  .con-6310-template-".esc_attr($templateId)."-description {
    float: left;
    width:100%;
    font-size: ".esc_attr($cssData['con_6310_details_font_size'])."px;
    font-weight: ".esc_attr($cssData['con_6310_details_font_weight']).";
    line-height: ".esc_attr($cssData['con_6310_details_line_height'])."px;
    color:".esc_attr($cssData['con_6310_details_font_color']).";  
    font-family: {$detailFontFamily};
    text-align: ".esc_attr($cssData['con_6310_details_text_align']).";
    text-transform: ".esc_attr($cssData['con_6310_details_text_transform']).";
    margin-top: ".esc_attr($cssData['con_6310_details_margin_top'])."px;
    margin-bottom: ".esc_attr($cssData['con_6310_details_margin_bottom'])."px;      
  }
  .con-6310-counter-".esc_attr($templateId)."-section{
    display: flex;
    align-items: center;
    justify-content: center;
    float: left;
  }
  .con-6310-template-".esc_attr($templateId)."-counter-value{
    display:inline;
    float: left;
    font-size: ".esc_attr($cssData['con_6310_number_font_size'])."px;
    font-family: $numberFontfamily;
    color: ".esc_attr($cssData['con_6310_number_font_color']).";  
    letter-spacing: 1px;
    line-height: ".esc_attr($cssData['con_6310_number_line_height'])."px;  
    font-weight: ".esc_attr($cssData['con_6310_number_font_weight']).";
    margin-left: ".esc_attr($cssData['con_6310_number_margin_left'])."px;
    margin-right: ".esc_attr($cssData['con_6310_number_margin_right'])."px;
    margin-top: ".esc_attr($cssData['con_6310_number_margin_top'])."px;
    margin-bottom: ".esc_attr($cssData['con_6310_number_margin_bottom'])."px;
  }
  .con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-counter-value{
    color: ".esc_attr($cssData['con_6310_number_font_hover_color']).";  
  }
  
  .con-6310-counter-".esc_attr($templateId)."-count-prefix {
    display: ".(isset($cssData['con_6310_prefix_icon_show_hide']) ? 'inline':'none').";
    font-size: ".esc_attr($cssData['con_6310_number_prefix_font_size'])."px;
    color: ".esc_attr($cssData['con_6310_number_prefix_font_color']).";
    font-weight: ".esc_attr($cssData['con_6310_number_prefix_font_weight']).";
    font-family: $prefixFontfamily;
    margin-top: ".esc_attr($cssData['con_6310_number_prefix_position'])."px;
    margin-left:".esc_attr($cssData['con_6310_number_prefix_margin_left'])."px;
    margin-right: ".esc_attr($cssData['con_6310_number_prefix_margin_right'])."px;
    float: left;
  }
  
  .con-6310-template-".esc_attr($templateId).":hover .con-6310-counter-".esc_attr($templateId)."-count-prefix {
    color:".esc_attr($cssData['con_6310_number_prefix_font_hover_color']).";
  }
  
  .con-6310-counter-".esc_attr($templateId)."-count-suffix {
    display: ".(isset($cssData['con_6310_suffix_icon_show_hide']) ? 'inline':'none')."; 
    font-size:".esc_attr($cssData['con_6310_number_suffix_font_size'])."px;
    color:".esc_attr($cssData['con_6310_number_suffix_font_color']).";
    font-weight:".esc_attr($cssData['con_6310_number_suffix_font_weight']).";
    font-family:$safixFontfamily;
    margin-top:".esc_attr($cssData['con_6310_number_suffix_position'])."px;
    margin-left: ".esc_attr($cssData['con_6310_number_suffix_margin_left'])."px;
    margin-right: ".esc_attr($cssData['con_6310_number_suffix_margin_right'])."px;
  }
  
  .con-6310-template-".esc_attr($templateId).":hover .con-6310-counter-".esc_attr($templateId)."-count-suffix {
    color: ".esc_attr($cssData['con_6310_number_suffix_font_hover_color']).";
  }

  .con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-description {
    color: ".esc_attr($cssData['con_6310_details_font_hover_color']).";
  }

  .con-6310-template-".esc_attr($templateId)."-read-more {
    float: left;
    width: 100%;
    text-align: ".esc_attr($cssData['con_6310_read_more_text_align']).";   
    margin-top: ".esc_attr($cssData['con_6310_read_more_margin_top'])."px ;
    margin-bottom:".esc_attr($cssData['con_6310_read_more_margin_bottom'])."px;
  }
  .con-6310-template-".esc_attr($templateId)."-read-more a {
    display: inline-block;
    text-decoration: none;
    transition: .5s;
    text-align:center;
    box-sizing: content-box !important;
    font-family: $readMoreFontFamily;
    width: ".esc_attr($cssData['con_6310_read_more_width'])."px;
    line-height: ".esc_attr($cssData['con_6310_read_more_height'])."px;
    height: ".esc_attr($cssData['con_6310_read_more_height'])."px;
    font-size: ".esc_attr($cssData['con_6310_read_more_font_size'])."px;   
    background: ".esc_attr($cssData['con_6310_read_more_background_color'])."; 
    color: ".esc_attr($cssData['con_6310_read_more_font_color']).";   
    border: ".esc_attr($cssData['con_6310_read_more_border_width'])." solid ".esc_attr($cssData['con_6310_read_more_box_border_color']).";
    border-radius: ".esc_attr($cssData['con_6310_read_more_border_radius'])."px;
    font-weight: ".esc_attr($cssData['con_6310_read_more_font_weight']).";
    text-transform: ".esc_attr($cssData['con_6310_read_more_text_transform']).";
  }
  .con-6310-template-".esc_attr($templateId)."-read-more a:hover{
    color: ".esc_attr($cssData['con_6310_read_more_font_hover_color']).";
    background: ".esc_attr($cssData['con_6310_read_more_background_hover_color'])."; 
    border: ".esc_attr($cssData['con_6310_read_more_border_width'])." solid ".esc_attr($cssData['con_6310_read_more_border_hover_color']).";
  }
  .con-6310-template-".esc_attr($templateId).":hover .con-6310-icon, 
  .con-6310-template-".esc_attr($templateId).":hover .con-6310-image {
    display: none !important; 
  }
  .con-6310-template-".esc_attr($templateId).":hover .con-6310-hover-icon, 
  .con-6310-template-".esc_attr($templateId).":hover .con-6310-hover-image {
    display: inline-block !important; 
  }

  /*########################### Item Per Row ###########################*/
  .con-6310-col-2, .con-6310-col-3, .con-6310-col-4, .con-6310-col-5, .con-6310-col-6 {
    margin-left: ". (isset($cssData['item_margin'])?esc_attr($cssData['item_margin']):15) ."px !important;
    margin-right: ". (isset($cssData['item_margin'])?esc_attr($cssData['item_margin']):15) ."px !important;
  }
    .con-6310-col-2 {
     width: calc(50% - ". ((isset($cssData['item_margin'])?esc_attr($cssData['item_margin']):15) * 2) ."px) !important;
  }
  .con-6310-col-3 {
     width: calc(33.33% - ". ((isset($cssData['item_margin'])?esc_attr($cssData['item_margin']):15) * 2) ."px) !important;
  }
  .con-6310-col-4 {
     width: calc(25% - ". ((isset($cssData['item_margin'])?esc_attr($cssData['item_margin']):15) * 2) ."px) !important;
  }
  .con-6310-col-5 {
     width: calc(20% - ". ((isset($cssData['item_margin'])?esc_attr($cssData['item_margin']):15) * 2) ."px) !important;
  }
  .con-6310-col-6 {
     width: calc(16.6667% - ". ((isset($cssData['item_margin'])?esc_attr($cssData['item_margin']):15) * 2) ."px) !important;
  }
  @media screen and (max-width: 1023px) {
    .con-6310-noslider-".esc_attr($templateId)." .con-6310-col-2, 
    .con-6310-noslider-".esc_attr($templateId)." .con-6310-col-3, 
    .con-6310-noslider-".esc_attr($templateId)." .con-6310-col-4, 
    .con-6310-noslider-".esc_attr($templateId)." .con-6310-col-5, 
    .con-6310-noslider-".esc_attr($templateId)." .con-6310-col-6{
      width: ". (($tablet_row > 1) ? "calc(" . (100/$tablet_row) . "% - " . ($cssData['item_margin'] * 2) . "px)" : "100%") ." !important;
    }
  }
  @media screen and (max-width: 767px) {
    .con-6310-noslider-".esc_attr($templateId)." .con-6310-col-2, 
    .con-6310-noslider-".esc_attr($templateId)." .con-6310-col-3, 
    .con-6310-noslider-".esc_attr($templateId)." .con-6310-col-4, 
    .con-6310-noslider-".esc_attr($templateId)." .con-6310-col-5, 
    .con-6310-noslider-".esc_attr($templateId)." .con-6310-col-6{
      width: ". (($mobile_row > 1) ? "calc(" . (100/$mobile_row) . "% - " . ($cssData['item_margin'] * 2) . "px)" : "100%") ." !important;
    
    }
  }
  ";

  $cssCode .= "
    .con-6310-template-".esc_attr($templateId)."-read-more{
      display: " . (isset($cssData['con_6310_fun_template_button']) ? 'block' : 'none') . ";
    }
  ";

  $cssCode .= "
    .con-6310-template-".esc_attr($templateId)."-description{
      display: " . (isset($cssData['template_details_show_hide']) ? 'block' : 'none') . ";
    }
  ";

  $num = rand(1000, 9999);
  wp_register_style( "con-6310-template-{$num}-css", "" );
  wp_enqueue_style( "con-6310-template-{$num}-css" );
  wp_add_inline_style( "con-6310-template-{$num}-css", $cssCode );
?>