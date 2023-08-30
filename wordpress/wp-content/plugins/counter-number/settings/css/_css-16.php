<?php

$cssCode = "
.con-6310-template-".esc_attr($templateId)."{
  font-family: 'Muli', sans-serif;
  text-align: center;
  width: 100%;
  height: 100%;
  padding: 30px 30px;
  margin: 0 auto;
  position: relative;
  z-index: 1;
  float: left;
  
}
.con-6310-template-".esc_attr($templateId).":before{
  content: '';
  background-color: #F12232;
  border: ".esc_attr($cssData['con_6310_border_size'])."px solid ".esc_attr($cssData['con_6310_border_color']).";
  border-radius: ".esc_attr($cssData['con_6310_box_radius'])."px;
  position: absolute;
  left: 10px;
  top: 10px;
  bottom: 10px;
  right: 10px;
  z-index: -1;
}
.con-6310-template-".esc_attr($templateId).":after{
  content: '';
  background-color: #F12232;
  border-radius: ".esc_attr($cssData['con_6310_box_radius'])."px;
  position: absolute;
  left: 10px;
  top: 10px;
  bottom: 10px;
  right: 10px;
  z-index: -1;
}

.con-6310-template-".esc_attr($templateId).":hover:before {
  border: ".esc_attr($cssData['con_6310_border_size'])."px solid ".esc_attr($cssData['con_6310_border_hover_color']).";
}

.con-6310-template-".esc_attr($templateId).":after{
  background-color: ".esc_attr($cssData['con_6310_outer_box_background_color']).";
  border-color: ".esc_attr($cssData['con_6310_outer_box_background_color']).";
  transform: rotate(6deg);
  left: 8px;
  right: 8px;
  z-index: -2;
  transition: .2s;
}
.con-6310-template-".esc_attr($templateId).":hover::after{
  transform: rotate(-6deg);
}
.con-6310-counter-".esc_attr($templateId)."-section{
  color: #07374e;
  background-color: #fff;
  padding:2px;
  font-size: 30px;
  line-height: 30px;
  font-weight: 700;
  margin: 0 0 10px;
  border-radius: 15px;
  display: block;
  width: 100%;
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

.con-6310-template-".esc_attr($templateId)."-icon{
  color: ".esc_attr($cssData['con_6310_icon_color']).";
  font-size: ".esc_attr($cssData['con_6310_icon_font_size'])."px;
  margin-top: ".esc_attr($cssData['con_6310_icon_margin_top'])."px;
  margin-bottom: ".esc_attr($cssData['con_6310_icon_margin_bottom'])."px;
  text-align: center;
  float: left;
  width: 100%;
}
.con-6310-template-".esc_attr($templateId)."-icon img{
  width: ".esc_attr($cssData['con_6310_icon_font_size'])."px;
  height: ".esc_attr($cssData['con_6310_icon_font_size'])."px;
}
.con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-icon {
  color: ".esc_attr($cssData['con_6310_icon_hover_color']).";
}
.con-6310-template-".esc_attr($templateId)."-counter-value{
padding: 3px;
}
.counter.purple:before{ background-color: #7c23ef; }
";

for($i = 1; $i <= $cssData['desktop_item_per_row']; $i++) {
  $cssCode .= "
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-template-".esc_attr($templateId).":before{
    background: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_box_background_color']).";
  }
  ";
 
}

$cssCode .= "@media only screen and (max-width: 990px){";
for($i = 1; $i <= 4; $i++) {
  $cssCode .= "
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-4:nth-child(4n + {$i}) .con-6310-template-".esc_attr($templateId).":before{
    background: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_box_background_color']).";
  }
  ";
}
$cssCode .= "}";

  wp_register_style( "con-6310-template-".esc_attr($templateId)."-css", '' );
  wp_enqueue_style( "con-6310-template-".esc_attr($templateId)."-css" );
  wp_add_inline_style( "con-6310-template-".esc_attr($templateId)."-css", $cssCode );
?>
