<?php

$cssCode = "
  .con-6310-template-".esc_attr($templateId)."{
    color: #9D26B4;
    font-family: 'Poppins', sans-serif;
    text-align: right;
    float: left;  
    background-color: ".esc_attr($cssData['con_6310_box_background_color']).";
    width: 100%;
    height: 100%;
    margin: 0 auto;
    position: relative;
    z-index: 1;
    border-radius: 0 100px 0 50px;
    border: ".esc_attr($cssData['con_6310_box_border_size'])."px solid;
    box-shadow: 0px 0px ".esc_attr($cssData['con_6310_box_shadow_blur'])."px ".esc_attr($cssData['con_6310_box_shadow_width'])."px ".esc_attr($cssData['con_6310_box_shadow_color']).";
    padding: 10px;
  }
  .con-6310-template-".esc_attr($templateId).":hover{ 
    box-shadow: 0px 0px ".esc_attr($cssData['con_6310_box_shadow_blur'])."px ".esc_attr($cssData['con_6310_box_shadow_width'])."px ".esc_attr($cssData['con_6310_box_shadow_hover_color']).";
  }
  .con-6310-template-".esc_attr($templateId)."-icon{
    color: ".esc_attr($cssData['con_6310_icon_color']).";
    font-size: ".esc_attr($cssData['con_6310_icon_font_size'])."px;
    text-align: center;
    width: calc(".esc_attr($cssData['con_6310_icon_font_size'])."px * 2);
    height: calc(".esc_attr($cssData['con_6310_icon_font_size'])."px * 2);
    line-height: calc(".esc_attr($cssData['con_6310_icon_font_size'])."px * 2 - ".esc_attr($cssData['con_6310_border_font_size'])."px * 2);
    margin: 0 0 15px;
    border-radius: 50%;
    border: ".esc_attr($cssData['con_6310_border_font_size'])."px solid ".esc_attr($cssData['con_6310_icon_border_color']).";
    display: inline-block;
    position: absolute;
    right: ".esc_attr($cssData['con_6310_icon_position'])."px;
    overflow: hidden;
  }
  .con-6310-template-".esc_attr($templateId)."-icon .con-6310-image, .con-6310-hover-image {
    width: 100%;
    height: 100%;
  }
  .con-6310-counter-".esc_attr($templateId)."-section{
    width: 100%;
  }
  .con-6310-template-".esc_attr($templateId)."-icon-wrapper{
    width: 100%;
    position: relative;
  }
  .con-6310-template-".esc_attr($templateId)."-icon i {
    width: 100%;
    height: 100%;
    display: flex !important;
    justify-content: center;
    align-items: center;
    line-height: unset !important;
  }
  .con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-icon i,
  .con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-icon img{
    animation-name: con-6310-template-".esc_attr($templateId)."-animation;
    animation-duration: 1s;
    animation-fill-mode: both;
  }
  @keyframes con-6310-template-".esc_attr($templateId)."-animation {
    0% {
    opacity: 0;
    transform: scale3d(.3, .3, .3);
    }
  
    50% {
    opacity: 1;
    }
  
  }
  @media screen and (max-width:990px){
    .con-6310-template-".esc_attr($templateId)."{ margin-bottom: 40px; }
  }
  
";

for($i = 1; $i <= $cssData['desktop_item_per_row']; $i++) {
  $cssCode .= "
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(".esc_attr($cssData['desktop_item_per_row'])."n+{$i}) .con-6310-template-".esc_attr($templateId)."-icon {
    background: ".esc_attr($cssData['con_6310_box_'. esc_attr($i) .'_border_color'])." !important;
  }
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(".esc_attr($cssData['desktop_item_per_row'])."n+{$i}) .con-6310-template-".esc_attr($templateId)."{
    border-color: ".esc_attr($cssData['con_6310_box_'. esc_attr($i) .'_border_color'])." !important;
  }
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(".esc_attr($cssData['desktop_item_per_row'])."n+{$i}) .con-6310-template-".esc_attr($templateId)."-title {
    color: ".esc_attr($cssData['con_6310_box_'. esc_attr($i) .'_border_color'])." !important;
  }
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(".esc_attr($cssData['desktop_item_per_row'])."n+{$i}) .con-6310-template-".esc_attr($templateId)."-counter-value {
    color: ".esc_attr($cssData['con_6310_box_'. esc_attr($i) .'_border_color'])." !important;
  } 
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(".esc_attr($cssData['desktop_item_per_row'])."n+{$i}) .con-6310-counter-".esc_attr($templateId)."-count-prefix {
    color: ".esc_attr($cssData['con_6310_box_'. esc_attr($i) .'_border_color'])." !important;
  }
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(".esc_attr($cssData['desktop_item_per_row'])."n+{$i}) .con-6310-counter-".esc_attr($templateId)."-count-suffix{
    color: ".esc_attr($cssData['con_6310_box_'. esc_attr($i) .'_border_color'])." !important;
  }
  ";
 
}

$cssCode .= "@media only screen and (max-width: 990px){";
for($i = 1; $i <= 4; $i++) {
  $cssCode .= "
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-4::nth-child(4n+{$i}) .con-6310-template-".esc_attr($templateId)."-icon {
    background: ".esc_attr($cssData['con_6310_box_'. esc_attr($i) .'_border_color'])." !important;
  }
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-4::nth-child(4n+{$i}) .con-6310-template-".esc_attr($templateId)."{
    border-color: ".esc_attr($cssData['con_6310_box_'. esc_attr($i) .'_border_color'])." !important;
  }
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-4::nth-child(4n+{$i}) .con-6310-template-".esc_attr($templateId)."-title {
    color: ".esc_attr($cssData['con_6310_box_'. esc_attr($i) .'_border_color'])." !important;
  }
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-4::nth-child(4n+{$i}) .con-6310-template-".esc_attr($templateId)."-counter-value {
    color: ".esc_attr($cssData['con_6310_box_'. esc_attr($i) .'_border_color'])." !important;
  } 
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-4::nth-child(4n+{$i}) .con-6310-counter-".esc_attr($templateId)."-count-prefix {
    color: ".esc_attr($cssData['con_6310_box_'. esc_attr($i) .'_border_color'])." !important;
  }
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-4::nth-child(4n+{$i}) .con-6310-counter-".esc_attr($templateId)."-count-suffix{
    color: ".esc_attr($cssData['con_6310_box_'. esc_attr($i) .'_border_color'])." !important;
  }
  ";
}
$cssCode .= "}";

  wp_register_style( "con-6310-template-".esc_attr($templateId)."-css", "" );
  wp_enqueue_style( "con-6310-template-".esc_attr($templateId)."-css" );
  wp_add_inline_style( "con-6310-template-".esc_attr($templateId)."-css", $cssCode );
?>