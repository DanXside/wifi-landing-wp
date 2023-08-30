<?php

$cssCode = "
.con-6310-template-".esc_attr($templateId)."{
  color: #777;
  font-family: 'Poppins', sans-serif;
  text-align: center;
  width: 100%;
  height: 100%;
  float: left;
  padding: 25px;
  margin: 0 auto;
  position: relative;
  z-index: 1;
  border-radius: ".esc_attr($cssData['con_6310_box_radius'])."px;
  box-shadow: 0px 0px ".esc_attr($cssData['con_6310_box_shadow_blur'])."px ".esc_attr($cssData['con_6310_box_shadow_width'])."px ".esc_attr($cssData['con_6310_box_shadow_color']).";
}
.con-6310-template-".esc_attr($templateId).":hover{
  box-shadow: 0px 0px ".esc_attr($cssData['con_6310_box_shadow_blur'])."px ".esc_attr($cssData['con_6310_box_shadow_width'])."px ".esc_attr($cssData['con_6310_box_shadow_hover_color']).";
}
.con-6310-template-".esc_attr($templateId).":before,
.con-6310-template-".esc_attr($templateId).":after{
  content: '';
  background: #01BFE1;
  position: absolute;
  top: 20px;
  left: 0;
  right: 0;
  bottom: 20px;
  z-index: -1;
  clip-path: polygon(13% 0%, 87% 0%, 100% 50%, 87% 100%, 13% 100%, 0% 50%);
}
.con-6310-template-".esc_attr($templateId).":after{
  background-color: ".esc_attr($cssData['con_6310_box_background_color']).";
  top: 0;
  left: 10px;
  right: 10px;
  bottom: 0;
  clip-path: polygon(20% 0%, 80% 0%, 100% 50%, 80% 100%, 20% 100%, 0% 50%);
}
.con-6310-template-".esc_attr($templateId).":hover:after{
  background-color: ".esc_attr($cssData['con_6310_box_background_hover_color']).";
}
.con-6310-template-".esc_attr($templateId)."-counter-icon{
  color: ".esc_attr($cssData['con_6310_icon_color']).";
  font-size: ".esc_attr($cssData['con_6310_icon_font_size'])."px;
  margin-top: ".esc_attr($cssData['con_6310_icon_margin_top'])."px;
  margin-bottom: ".esc_attr($cssData['con_6310_icon_margin_bottom'])."px;
}
.con-6310-template-".esc_attr($templateId)."-counter-icon img{
  width: ".esc_attr($cssData['con_6310_icon_font_size'])."px;
  height: ".esc_attr($cssData['con_6310_icon_font_size'])."px;
}
.con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-counter-icon{
  color: ".esc_attr($cssData['con_6310_icon_hover_color']).";
}
.con-6310-counter-".esc_attr($templateId)."-section{
  width: 100%;
}
.con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-icon i,
.con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-icon img{
  animation-name: con-6310-template-preview-".esc_attr($templateId)."-animation;
  animation-duration: .8s;
  animation-fill-mode: both;
}

@keyframes con-6310-template-preview-".esc_attr($templateId)."-animation {
  0%, 50%, 100% {
  opacity: 1;
  }
  
  25%, 75% {
  opacity: 0;
  }
}
.con-6310-template-".esc_attr($templateId)."-description{
  padding: 0 20px;
}
.con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-description{
  color: ".esc_attr($cssData['con_6310_details_font_hover_color']).";
}

";


for($i = 1; $i <= $cssData['desktop_item_per_row']; $i++) {
  $cssCode .= "
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-template-".esc_attr($templateId).":before {
    background: ".esc_attr($cssData['con_6310_box_outer_'.esc_attr($i).'_background']).";
  }
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-template-".esc_attr($templateId)."-title {
    color: ".esc_attr($cssData['con_6310_box_outer_'.esc_attr($i).'_background']).";
  }
  ";
 
}

$cssCode .= "@media only screen and (max-width: 990px){
  .counter{ margin-bottom: 40px; }";
for($i = 1; $i <= 4; $i++) {
  $cssCode .= "
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(4n + {$i}) .con-6310-template-".esc_attr($templateId).":before {
    background: ".esc_attr($cssData['con_6310_box_outer_'.esc_attr($i).'_background']).";
  }
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(4n + {$i}) .con-6310-template-".esc_attr($templateId)."-title {
    color: ".esc_attr($cssData['con_6310_box_outer_'.esc_attr($i).'_background']).";
  }
  ";
}
$cssCode .= "}";

  wp_register_style( "con-6310-template-".esc_attr($templateId)."-css", '' );
  wp_enqueue_style( "con-6310-template-".esc_attr($templateId)."-css" );
  wp_add_inline_style( "con-6310-template-".esc_attr($templateId)."-css", $cssCode );
?>
