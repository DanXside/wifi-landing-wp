<?php

$cssCode = "  
.con-6310-template-".esc_attr($templateId)."{
  box-shadow: 0px 0px ".esc_attr($cssData['con_6310_box_shadow_blur'])."px ".esc_attr($cssData['con_6310_box_shadow_width'])."px ".esc_attr($cssData['con_6310_box_shadow_color']).";
  margin: 5px;
  padding: 20px 10px;
  display: flex;
  align-items: center;
  border-radius: ".esc_attr($cssData['con_6310_box_radius'])."px;
  background-color: #007bff;
  color: #FFF;
  transition: .3s linear all;
  width: 100%;
  height: 100%;
  float: left;
  position: relative;
  overflow: hidden;
}
.con-6310-template-".esc_attr($templateId).":hover {
  box-shadow: 0px 0px ".esc_attr($cssData['con_6310_box_shadow_blur'])."px ".esc_attr($cssData['con_6310_box_shadow_width'])."px ".esc_attr($cssData['con_6310_box_shadow_hover_color']).";
  transition: .3s linear all;
}
.con-6310-template-".esc_attr($templateId)."::after{
  box-sizing: border-box;
  transform: translateX(-100%);
  content: '';
  position: absolute;
  top: 0;
  right: 0;
  width: 99.5%;
  border-radius: ".esc_attr($cssData['con_6310_box_radius'])."px;
  height: ".esc_attr($cssData['con_6310_box_border_size'])."px;
  border-top: ".esc_attr($cssData['con_6310_box_border_size'])."px solid transparent;
  border-right: ".esc_attr($cssData['con_6310_box_border_size'])."px solid transparent;
}
.con-6310-template-".esc_attr($templateId).":hover::after{
  transition: 0.1s transform linear 0.2s, 0.1s height linear 0.3s;
  transform: translateX(0);
  height: 100% !important;
  border-color: ".esc_attr($cssData['con_6310_box_border_color']).";
}
.con-6310-template-".esc_attr($templateId)."::before{
  box-sizing: border-box;
  transform: translateX(100%);
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 99.5%;
  border-radius: ".esc_attr($cssData['con_6310_box_radius'])."px;
  height: ".esc_attr($cssData['con_6310_box_border_size'])."px;
  border-bottom: ".esc_attr($cssData['con_6310_box_border_size'])."px solid transparent;
  border-left: ".esc_attr($cssData['con_6310_box_border_size'])."px solid transparent;
}
.con-6310-template-".esc_attr($templateId).":hover::before{
  transition: 0.1s transform linear, 0.1s height linear 0.1s;
  transform: translateX(0);
  height: 100% !important;
  border-color: ".esc_attr($cssData['con_6310_box_border_color']).";
}
.con-6310-template-".esc_attr($templateId)."-left-section {
  float: left;
  width: calc(30% + ".esc_attr($cssData['con_6310_icon_font_size'])."px);
  display: flex;
  justify-content: center;
}
.con-6310-template-".esc_attr($templateId)."-title{
  color: ".esc_attr($cssData['con_6310_title_font_color']).";
}
.con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-title{
  color: ".esc_attr($cssData['con_6310_title_font_hover_color']).";
}
.con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-description{
  color: ".esc_attr($cssData['con_6310_details_font_hover_color']).";
}
.con-6310-template-".esc_attr($templateId)."-icon {
  color: ".esc_attr($cssData['con_6310_icon_color']).";
  font-size: ".esc_attr($cssData['con_6310_icon_font_size'])."px;
  width: ".esc_attr($cssData['con_6310_icon_font_size'])."px;
  height: ".esc_attr($cssData['con_6310_icon_font_size'])."px;
}
.con-6310-template-".esc_attr($templateId)."-icon img{
  width: 100%;
}
.con-6310-template-".esc_attr($templateId)."-icon-wrapper {
  width: 100%;
  float: left;
  display: flex;
  justify-content: center;
}
.con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-icon{
  color: ".esc_attr($cssData['con_6310_icon_hover_color']).";
}
.con-6310-template-".esc_attr($templateId)."-right-section {
  float: left;
  width: calc(70% - ".esc_attr($cssData['con_6310_icon_font_size'])."px);
  z-index: 1;
}
.con-6310-template-".esc_attr($templateId)." i,
.con-6310-template-".esc_attr($templateId)." img{
  opacity: 0.2;
}
.con-6310-template-".esc_attr($templateId)."-counter-value{
  font-size: 32px;
  line-height: 40px;
  display: block;
  float: left;
  width: 100%;
  text-align: right;
}
.con-6310-counter-".esc_attr($templateId)."-section-wrapper {
  float: left;
  width: 100%;
  text-align: center;
}
.con-6310-counter-".esc_attr($templateId)."-section-wrapper{
  float: left;
  width: 100%;
  text-align: center;
}
.con-6310-counter-".esc_attr($templateId)."-section{
  width: 100%;
  float: left;
}
.con-6310-template-".esc_attr($templateId)."-counter-value{
  width: auto !important;
  float: unset !important;
}
 ";

 
for($i = 1; $i <= $cssData['desktop_item_per_row']; $i++) {
  $cssCode .= "
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-template-".esc_attr($templateId).",
.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-owl-stage .con-6310-owl-item:nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-template-".esc_attr($templateId)."{
  background: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_background_color']).";
}
.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-template-".esc_attr($templateId).",
.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-owl-stage .con-6310-owl-item:nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-template-".esc_attr($templateId)."{
  background: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_background_color']).";
}
.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-template-".esc_attr($templateId).",
.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-owl-stage .con-6310-owl-item:nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-template-".esc_attr($templateId)."{
  background: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_background_color']).";
}
.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-template-".esc_attr($templateId).",
.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-owl-stage .con-6310-owl-item:nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-template-".esc_attr($templateId)."{
  background: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_background_color']).";
}
.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-template-".esc_attr($templateId).",
.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-owl-stage .con-6310-owl-item:nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-template-".esc_attr($templateId)."{
  background: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_background_color']).";
}
.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-template-".esc_attr($templateId).",
.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-owl-stage .con-6310-owl-item:nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-template-".esc_attr($templateId)."{
  background: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_background_color']).";
}";
 
}

$cssCode .= "@media only screen and (max-width: 990px){
";
for($i = 1; $i <= 4; $i++) {
  $cssCode .= "
      .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-4:nth-child(4n + {$i}) .con-6310-template-".esc_attr($templateId).",
    .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-owl-stage .con-6310-owl-item:nth-child(4n + {$i}) .con-6310-template-".esc_attr($templateId)."{
      background: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_background_color']).";
    }
    .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-4:nth-child(4n + {$i}) .con-6310-template-".esc_attr($templateId).",
    .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-owl-stage .con-6310-owl-item:nth-child(4n + {$i}) .con-6310-template-".esc_attr($templateId)."{
      background: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_background_color']).";
    }
    .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-4:nth-child(4n + {$i}) .con-6310-template-".esc_attr($templateId).",
    .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-owl-stage .con-6310-owl-item:nth-child(4n + {$i}) .con-6310-template-".esc_attr($templateId)."{
      background: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_background_color']).";
    }
    .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-4:nth-child(4n + {$i}) .con-6310-template-".esc_attr($templateId).",
    .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-owl-stage .con-6310-owl-item:nth-child(4n + {$i}) .con-6310-template-".esc_attr($templateId)."{
      background: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_background_color']).";
    }
    .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-4:nth-child(4n + {$i}) .con-6310-template-".esc_attr($templateId).",
    .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-owl-stage .con-6310-owl-item:nth-child(4n + {$i}) .con-6310-template-".esc_attr($templateId)."{
      background: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_background_color']).";
    }
    .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-4:nth-child(4n + {$i}) .con-6310-template-".esc_attr($templateId).",
    .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-owl-stage .con-6310-owl-item:nth-child(4n + {$i}) .con-6310-template-".esc_attr($templateId)."{
      background: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_background_color']).";
    }";
}

$cssCode .= "}";

  wp_register_style( "con-6310-template-".esc_attr($templateId)."-css", "" );
  wp_enqueue_style( "con-6310-template-".esc_attr($templateId)."-css" );
  wp_add_inline_style( "con-6310-template-".esc_attr($templateId)."-css", $cssCode );
?>