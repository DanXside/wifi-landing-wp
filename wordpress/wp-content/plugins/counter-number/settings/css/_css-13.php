<?php

$cssCode = "
.con-6310-template-".esc_attr($templateId)."{
  color: #f27f21;
  font-family: 'Open Sans', sans-serif;
  text-align: center;
  height: 100%;
  width: 100%;
  float: left;
  padding: 30px 25px 25px;
  margin: 0 auto;
  border: ".esc_attr($cssData['con_6310_border_size'])."px solid;
  border-radius: ".esc_attr($cssData['con_6310_box_radius'])."px;
  position: relative;
  z-index: 1;
}
.con-6310-template-".esc_attr($templateId).":hover:before{
  box-shadow: 0px 0px ".esc_attr($cssData['con_6310_box_shadow_blur'])."px ".esc_attr($cssData['con_6310_box_shadow_width'])."px ".esc_attr($cssData['con_6310_box_shadow_hover_color']).";
}
.con-6310-template-".esc_attr($templateId).":before,
.con-6310-template-".esc_attr($templateId).":after{
  content: '';
  background-color: ".esc_attr($cssData['con_6310_box_background_color']).";
  border-radius: ".esc_attr($cssData['con_6310_box_radius'])."px;
  box-shadow: 0px 0px ".esc_attr($cssData['con_6310_box_shadow_blur'])."px ".esc_attr($cssData['con_6310_box_shadow_width'])."px ".esc_attr($cssData['con_6310_box_shadow_color']).";
  position: absolute;
  left: 15px;
  top: 15px;
  bottom: 15px;
  right: 15px;
  z-index: -1;
}
.con-6310-template-".esc_attr($templateId).":hover:before{
  background-color: ".esc_attr($cssData['con_6310_box_background_hover_color']).";  
}
.con-6310-template-".esc_attr($templateId).":after{
  background: transparent;
  width: 100px;
  height: 100px;
  border: 15px solid #f27f21;
  border-top: none;
  border-right: none;
  border-radius: 0 0 0 ".esc_attr($cssData['con_6310_box_radius'])."px;
  box-shadow: none;
  top: auto;
  left: -10px;
  bottom: -10px;
  right: auto;
}
.con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-description{
  color: ".esc_attr($cssData['con_6310_details_font_hover_color']).";
}
.con-6310-template-".esc_attr($templateId)."-counter-icon{
  font-size:  ".esc_attr($cssData['con_6310_icon_font_size'])."px;
  line-height: 35px;
  margin-top: ".esc_attr($cssData['con_6310_icon_margin_top'])."px;
  margin-bottom: ".esc_attr($cssData['con_6310_icon_margin_bottom'])."px;
  transition: all 0.3s ease 0s;
}
.con-6310-template-".esc_attr($templateId)."-icon img{
  width:  ".esc_attr($cssData['con_6310_icon_font_size'])."px;
  height: ".esc_attr($cssData['con_6310_icon_font_size'])."px;
}
.con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-counter-icon{ transform: rotateY(360deg); }
 .con-6310-template-".esc_attr($templateId)."-counter-value{
  display: block;
  transition: all 0.3s ease 0s;
}
.con-6310-counter-".esc_attr($templateId)."-section{
  width: 100%;
  float: left;
}
.con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-counter-value{ text-shadow: 2px 2px 0 #d1d8e0; }
.con-6310-template-".esc_attr($templateId)."-title{
  color: unset !important;
}
@media screen and (max-width:990px){
  .counter{ margin-bottom: 40px; }
}

";

for($i = 1; $i <= $cssData['desktop_item_per_row']; $i++) {
  $cssCode .= "
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-template-".esc_attr($templateId)."{
    color: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_border_color']).";
    border-color: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_border_color']).";
  }
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-template-".esc_attr($templateId)."::after{
    border-bottom-color: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_border_color']).";
    border-left-color: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_border_color']).";
  }
  ";
 
}

$cssCode .= "@media only screen and (max-width: 990px){";
for($i = 1; $i <= 4; $i++) {
  $cssCode .= "
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-4:nth-child(4n + {$i}) .con-6310-template-".esc_attr($templateId)."{
    color: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_border_color']).";
    border-color: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_border_color']).";
  }
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-4:nth-child(4n + {$i}) .con-6310-template-".esc_attr($templateId)."::after{
    border-bottom-color: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_border_color']).";
    border-left-color: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_border_color']).";
  }
  ";
}
$cssCode .= "}";
  wp_register_style( "con-6310-template-".esc_attr($templateId)."-css", '' );
  wp_enqueue_style( "con-6310-template-".esc_attr($templateId)."-css" );
  wp_add_inline_style( "con-6310-template-".esc_attr($templateId)."-css", $cssCode );
?>
