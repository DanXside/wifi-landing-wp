<?php
$cssCode = "  
.con-6310-template-".esc_attr($ids)."{
  color: #F14997;
  background: linear-gradient(to right bottom,".esc_attr($cssData['con_6310_box_background_color_top'])." 50%, ".esc_attr($cssData['con_6310_box_background_color_bottom'])." 51%);
  font-family: 'Comfortaa', cursive;
  text-align: center;
  width: 100%;
  height: 100%;
  padding: 10px;
  margin: 0 auto;
  border-radius: ".esc_attr($cssData['con_6310_box_radius'])."px 0;
  box-shadow: 0px 0px ".esc_attr($cssData['con_6310_box_shadow_blur'])."px ".esc_attr($cssData['con_6310_box_shadow_width'])."px ".esc_attr($cssData['con_6310_box_shadow_color']).";
  overflow: hidden;
}
.con-6310-template-".esc_attr($ids).":hover {
  box-shadow: 0px 0px ".esc_attr($cssData['con_6310_box_shadow_blur'])."px ".esc_attr($cssData['con_6310_box_shadow_width'])."px ".esc_attr($cssData['con_6310_box_shadow_hover_color'])."; 
}
.con-6310-template-".esc_attr($ids)."-icon-wrapper {
  float: left;
  width: 100%;
  margin-top: ".esc_attr($cssData['con_6310_icon_margin_top'])."px;
  margin-bottom: ".esc_attr($cssData['con_6310_icon_margin_bottom'])."px;
  display: flex;
  justify-content: center;
}
.con-6310-template-".esc_attr($ids)." .con-6310-template-".esc_attr($ids)."-icon{
  font-size: 30px;
  width: 30px; 
  display: flex;
  justify-content: center;
  align-items: center;
}
.con-6310-template-".esc_attr($ids)."-icon img{
  width: 100%;
}
.con-6310-counter-".esc_attr($ids)."-section-wrapper{
  float: left;
  width: 100%;
  text-align: center;
}
.con-6310-counter-".esc_attr($ids)."-section{
  width: 100%;
  float: left;
}
.con-6310-template-".esc_attr($ids)."-description{
  Color: #000;
}
.con-6310-template-".esc_attr($ids).":hover .con-6310-template-".esc_attr($ids)."-icon i,
.con-6310-template-".esc_attr($ids).":hover .con-6310-template-".esc_attr($ids)."-icon img{
  animation-name: con-6310-preview-".esc_attr($ids)."-animation;
  animation-duration: .75s;
  animation-duration: 1s;
  animation-fill-mode: both;
}

@keyframes con-6310-preview-".esc_attr($ids)."-animation {
  0%, 20%, 40%, 60%, 80%, 100% {
  transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
  }
  0% {
  opacity: 0;
  transform: scale3d(.3, .3, .3);
  }
  20% {
  transform: scale3d(1.1, 1.1, 1.1);
  }
  40% {
  transform: scale3d(.9, .9, .9);
  }
  60% {
  opacity: 1;
  transform: scale3d(1.03, 1.03, 1.03);
  }
  80% {
  transform: scale3d(.97, .97, .97);
  }
  100% {
  opacity: 1;
  transform: scale3d(1, 1, 1);
  }
}

.con-6310-template-".esc_attr($ids).":hover .con-6310-template-".esc_attr($ids)."-description{
  color: ".esc_attr($cssData['con_6310_details_font_hover_color']).";
}
@media screen and (max-width:990px){
  .template{ margin-bottom: 40px; }
}

  ";
  
for($i = 1; $i <= $cssData['desktop_item_per_row']; $i++) {
  $cssCode .= "
  .con-6310-template-".esc_attr($ids)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-template-".esc_attr($ids)." {
    color: ".esc_attr($cssData['con_6310_1_gradient_color_right']).";
  }
  .con-6310-template-".esc_attr($ids)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-counter-".esc_attr($ids)."-section-wrapper{
    background: linear-gradient(to right bottom, ".esc_attr($cssData['con_6310_1_gradient_color_left']).",".esc_attr($cssData['con_6310_1_gradient_color_right']).");
  }
  ";
 
}

$cssCode .= "@media only screen and (max-width: 990px){";
for($i = 1; $i <= 4; $i++) {
  $cssCode .= "
  .con-6310-template-".esc_attr($ids)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(4n + {$i}) .con-6310-template-".esc_attr($ids)." {
    color: ".esc_attr($cssData['con_6310_1_gradient_color_right']).";
  }
  .con-6310-template-".esc_attr($ids)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(4n + {$i}) .con-6310-counter-".esc_attr($ids)."-section-wrapper{
    background: linear-gradient(to right bottom, ".esc_attr($cssData['con_6310_1_gradient_color_left']).",".esc_attr($cssData['con_6310_1_gradient_color_right']).");
  }
  ";
}
$cssCode .= "}";

wp_register_style("con-6310-template-".esc_attr($ids)."-css", "");
wp_enqueue_style("con-6310-template-".esc_attr($ids)."-css");
wp_add_inline_style("con-6310-template-".esc_attr($ids)."-css", $cssCode);
