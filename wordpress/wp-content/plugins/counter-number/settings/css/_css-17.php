<?php

$cssCode = "
.con-6310-template-".esc_attr($templateId)."{
    background: #c42252;
    text-align: center;
    position: relative;
    float: left;
    width: 100%;
    height: 100%;
    border-radius: ".esc_attr($cssData['con_6310_box_radius'])."px;
    border: ".esc_attr($cssData['con_6310_border_size'])."px solid ".esc_attr($cssData['con_6310_border_color']).";
    box-shadow: 0px 0px ".esc_attr($cssData['con_6310_box_shadow_blur'])."px ".esc_attr($cssData['con_6310_box_shadow_width'])."px ".esc_attr($cssData['con_6310_box_shadow_color']).";
  }
  .con-6310-template-".esc_attr($templateId).":hover{
    border-color: ".esc_attr($cssData['con_6310_border_hover_color']).";
    box-shadow: 0px 0px ".esc_attr($cssData['con_6310_box_shadow_blur'])."px ".esc_attr($cssData['con_6310_box_shadow_width'])."px ".esc_attr($cssData['con_6310_box_shadow_hover_color']).";
    background: ".esc_attr($cssData['con_6310_box_hover_background_color'])." !important;
  }
  .con-6310-template-".esc_attr($templateId)."-counter-content{
    padding: 30px 20px 50px;
    color: #fff;
    position: relative;
    float: left;
    width: 100%;

  }
  .con-6310-template-".esc_attr($templateId).":before,
  .con-6310-template-".esc_attr($templateId).":after,
  .con-6310-template-".esc_attr($templateId)."-counter-content:before,
  .con-6310-template-".esc_attr($templateId)."-counter-content:after{
    content: '';
    width: 20px;
    height: 20px;
    border-radius: 50%;
    background: #fff;
    position: absolute;
    box-shadow: inset 0 2px 2px #000;
    top: 15px;
    left: 15px;
  }
  .con-6310-template-".esc_attr($templateId).":after{
    left: auto;
    right: 15px;
  }
  .con-6310-template-".esc_attr($templateId)."-counter-content:before,
  .con-6310-template-".esc_attr($templateId)."-counter-content:after{
    box-shadow: inset 0 -2px 2px #000;
    top: auto;
    bottom: 15px;
  }
  .con-6310-template-".esc_attr($templateId)."-counter-content:after{
    left: auto;
    bottom: 15px;
    right: 15px;
  }
  .con-6310-template-".esc_attr($templateId)."-counter-icon{
    display: inline-block;
    color: ".esc_attr($cssData['con_6310_icon_color']).";
    font-size: ".esc_attr($cssData['con_6310_icon_font_size'])."px;
    float: left;
    width: 100%;
    margin-bottom: ".esc_attr($cssData['con_6310_icon_margin_bottom'])."px;
    margin-top: ".esc_attr($cssData['con_6310_icon_margin_top'])."px;
  }
  .con-6310-template-".esc_attr($templateId)."-counter-icon img{
    width: ".esc_attr($cssData['con_6310_icon_font_size'])."px;
    height: ".esc_attr($cssData['con_6310_icon_font_size'])."px;
  }

  .con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-counter-icon{
    color: ".esc_attr($cssData['con_6310_icon_hover_color']).";
  }
  .con-6310-template-".esc_attr($templateId)."-counter-value{
    display: block;
  }
  .con-6310-template-".esc_attr($templateId)."-title{
    text-shadow: 3px 3px 2px rgba(0, 0, 0, 0.71);
    color: ".esc_attr($cssData['con_6310_title_font_color']).";
 }

 .con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-title{
  text-shadow: 3px 3px 2px rgba(0, 0, 0, 0.71);
  color: ".esc_attr($cssData['con_6310_title_font_hover_color']).";
}


.con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-description{
  color: ".esc_attr($cssData['con_6310_details_font_hover_color']).";

}
.con-6310-counter-".esc_attr($templateId)."-section{
  width: 100%;
  float: left;
}
.con-6310-template-".esc_attr($templateId)."-counter-value{
  width: auto !important;
  float: unset !important;
}
.con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-icon{
  backface-visibility: visible !important;
  animation-name: con-6310-template-".esc_attr($templateId)."-animation;
  animation-duration: 1s;
  animation-fill-mode: both;
}

@keyframes con-6310-template-".esc_attr($templateId)."-animation {
  0% {
  transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
  transition-timing-function: ease-in;
  opacity: 0;
  }
  40% {
  transform: perspective(400px) rotate3d(0, 1, 0, -40deg);
  transition-timing-function: ease-in;
  }
  60% {
  transform: perspective(400px) rotate3d(0, 1, 0, 20deg);
  opacity: 1;
  }
  80% {
  transform: perspective(400px) rotate3d(0, 1, 0, -10deg);
  }
  100% {
  transform: perspective(400px);
  }
} 
  
  @media only screen and (max-width: 990px){
    .con-6310-template-".esc_attr($templateId)."-{ margin-bottom: 20px; }
  }

";


for($i = 1; $i <= $cssData['desktop_item_per_row']; $i++) {
  $cssCode .= "
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-template-".esc_attr($templateId)."{
    background: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_box_background_color']).";
  }

  ";
 
}

$cssCode .= "@media only screen and (max-width: 990px){";
for($i = 1; $i <= 4; $i++) {
  $cssCode .= "
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-4:nth-child(4n + {$i}) .con-6310-template-".esc_attr($templateId)."{
    background: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_box_background_color']).";
  }
  ";
}
$cssCode .= "}";

  wp_register_style( "con-6310-template-".esc_attr($templateId)."-css", '' );
  wp_enqueue_style( "con-6310-template-".esc_attr($templateId)."-css" );
  wp_add_inline_style( "con-6310-template-".esc_attr($templateId)."-css", $cssCode );
?>
