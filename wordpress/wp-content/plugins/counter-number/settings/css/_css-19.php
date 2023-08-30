<?php

$cssCode = "

.con-6310-template-".esc_attr($templateId)."{
  background-color: ".esc_attr($cssData['con_6310_box_background_color']).";
  font-family: 'Noto Sans JP', sans-serif;
  text-align: center;
  width: 100%;
  height: calc(100% - 30px);
  margin-bottom: 30px;
  float: left;
  padding: 0 0 25px;
  margin: 0 auto 15px;
  overflow: hidden;
  border-radius: ".esc_attr($cssData['con_6310_box_radius'])."px;
  position: relative;
  box-shadow: 0px 0px ".esc_attr($cssData['con_6310_box_shadow_blur'])."px ".esc_attr($cssData['con_6310_box_shadow_width'])."px ".esc_attr($cssData['con_6310_box_shadow_color']).";
  border: ".esc_attr($cssData['con_6310_border_size'])."px solid ".esc_attr($cssData['con_6310_border_color']).";
}

.con-6310-template-".esc_attr($templateId).":hover{
  background-color: ".esc_attr($cssData['con_6310_box_background_hover_color']).";
  box-shadow: 0px 0px ".esc_attr($cssData['con_6310_box_shadow_blur'])."px ".esc_attr($cssData['con_6310_box_shadow_width'])."px ".esc_attr($cssData['con_6310_box_shadow_hover_color']).";
  border-color: ".esc_attr($cssData['con_6310_border_hover_color']).";
}
.con-6310-template-".esc_attr($templateId).":hover:before{
  background-color: ".esc_attr($cssData['con_6310_box_background_hover_color']).";
}
.con-6310-template-".esc_attr($templateId)."-title{
  padding-left: 8px;
  padding-right: 8px;
}
.con-6310-template-".esc_attr($templateId)."-description{
  padding-left: 8px;
  padding-right: 8px;
}
.con-6310-counter-".esc_attr($templateId)."-section{
  width: 100%;
  color: #fff;
  background: linear-gradient(to right, #19bbd2, #2778ee);
  font-size: 38px;
  line-height: 38px;
  font-weight: 300;
  padding: 0 0 3px;
  margin: 0 0 25px;
  display: block;
  float: left;
  width: 100%;
}
.con-6310-template-".esc_attr($templateId)."-counter-icon{
  color: ".esc_attr($cssData['con_6310_icon_color']).";
  font-size: ".esc_attr($cssData['con_6310_icon_font_size'])."px;
  margin-top: ".esc_attr($cssData['con_6310_icon_margin_top'])."px;
  margin-bottom: ".esc_attr($cssData['con_6310_icon_margin_bottom'])."px;
  float: left;
  width: 100%;
  display: flex;
  justify-content: center;
}
.con-6310-template-".esc_attr($templateId)."-counter-icon img{
  width: ".esc_attr($cssData['con_6310_icon_font_size'])."px;
  height: ".esc_attr($cssData['con_6310_icon_font_size'])."px;
}
.con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-counter-icon{
  color: ".esc_attr($cssData['con_6310_icon_hover_color']).";
}
.con-6310-template-".esc_attr($templateId)."-icon-wrapper {
  background: linear-gradient(to right, #19bbd2, #2778ee);
  width: calc(".esc_attr($cssData['con_6310_icon_font_size'])."px * 2);
  height: calc(".esc_attr($cssData['con_6310_icon_font_size'])."px * 2);
  border: ".esc_attr($cssData['con_6310_icon_border_width'])."px solid ".esc_attr($cssData['con_6310_icon_border_color']).";
  border-radius: ".esc_attr($cssData['con_6310_icon_border_radius'])."px;
  display: flex;
  justify-content: center;
  align-items: center;
  float: left;
}
.con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-counter-icon{
  animation-name: con-6310-template".esc_attr($templateId)."-animation;
  animation-duration: .8s;
  animation-fill-mode: both;
}

@keyframes con-6310-template".esc_attr($templateId)."-animation {
  0%, 60%, 75%, 90%, 100% {
  transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
  }
  
  0% {
  opacity: 0;
  transform: translate3d(0, -3000px, 0);
  }
  
  60% {
  opacity: 1;
  transform: translate3d(0, 25px, 0);
  }
  
  75% {
  transform: translate3d(0, -10px, 0);
  }
  
  90% {
  transform: translate3d(0, 5px, 0);
  }
  
  100% {
  transform: none;
  }
}
.con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-icon-wrapper{
  border-color: ".esc_attr($cssData['con_6310_icon_border_hover_color']).";
}
";

for($i = 1; $i <= $cssData['desktop_item_per_row']; $i++) {
  $cssCode .= "
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-counter-".esc_attr($templateId)."-section,
.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-template-".esc_attr($templateId)."-icon-wrapper{
  background: linear-gradient(to right, ".esc_attr($cssData['con_6310_'.esc_attr($i).'_gradient_color_left']).", ".esc_attr($cssData['con_6310_'.esc_attr($i).'_gradient_color_right']).");
}
.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-template-".esc_attr($templateId)."-title{
  color: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_gradient_color_right'])." !important;
}
  ";
 
}

$cssCode .= "@media only screen and (max-width: 990px){";
for($i = 1; $i <= 4; $i++) {
  $cssCode .= "
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(4n + {$i}) .con-6310-counter-".esc_attr($templateId)."-section,
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + {$i}) .con-6310-template-".esc_attr($templateId)."-icon-wrapper{
    background: linear-gradient(to right, ".esc_attr($cssData['con_6310_'.esc_attr($i).'_gradient_color_left']).", ".esc_attr($cssData['con_6310_'.esc_attr($i).'_gradient_color_right']).");
  }
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + {$i}) .con-6310-template-".esc_attr($templateId)."-title{
    color: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_gradient_color_right'])." !important;
  }
  ";
}
$cssCode .= "}";

  wp_register_style( "con-6310-template-".esc_attr($templateId)."-css", '' );
  wp_enqueue_style( "con-6310-template-".esc_attr($templateId)."-css" );
  wp_add_inline_style( "con-6310-template-".esc_attr($templateId)."-css", $cssCode );
?>
