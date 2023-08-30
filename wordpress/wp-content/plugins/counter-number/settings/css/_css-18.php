<?php

$cssCode = "

.con-6310-template-".esc_attr($templateId)."{
  color: #fff;
  background: linear-gradient(30deg,#509C3A,#97C136,#509C3A);
  font-family: 'Bitter', serif;
  text-align: center;
  width: 100%;
  height: 100%;
  float: left;
  padding: 15px 0 20px;
  margin: 0 auto;
  position: relative;
  -webkit-clip-path: polygon(50% 0%, 100% 15%, 100% 85%, 50% 100%, 0% 85%, 0% 15%);
  clip-path: polygon(50% 0%, 100% 15%, 100% 85%, 50% 100%, 0% 85%, 0% 15%);
}

.con-6310-template-".esc_attr($templateId).":hover {
  background: ".esc_attr($cssData['box_background_hover_color'])." !important;
}
.con-6310-template-".esc_attr($templateId)."-counter-icon{
  color: ".esc_attr($cssData['con_6310_icon_color']).";
  font-size: ".esc_attr($cssData['con_6310_icon_font_size'])."px;
  margin-top: ".esc_attr($cssData['con_6310_icon_margin_top'])."px;
  margin-bottom: ".esc_attr($cssData['con_6310_icon_margin_bottom'])."px;
  float: left;
  width: 100%;
  transition: all 0.3s;
}

.con-6310-template-".esc_attr($templateId)."-counter-icon img{
  width: ".esc_attr($cssData['con_6310_icon_font_size'])."px;
  height: ".esc_attr($cssData['con_6310_icon_font_size'])."px;
}

.con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-counter-icon{
  transform: rotateX(360deg) rotateY(360deg);
  color: ".esc_attr($cssData['con_6310_icon_hover_color']).";
}
.con-6310-template-".esc_attr($templateId)."-counter-value{
  float: left;
  width: 100%;
  text-shadow: 0 0 3px #000;
  display: block;
  margin: 0 0 10px;
}
.con-6310-template-".esc_attr($templateId)."-title{
  background: rgba(255,255,255,0.9);
  padding-left: 10px;
  padding-right: 10px;
}

.con-6310-template-".esc_attr($templateId)."-description{
  padding-left: 10px;
  padding-right: 10px;
}
.con-6310-counter-".esc_attr($templateId)."-section{
  width: 100%;
  float: left;
}
.con-6310-template-".esc_attr($templateId)."-counter-value{
  width: auto !important;
  float: unset !important;
}

.con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-title{
  color: ".esc_attr($cssData['con_6310_title_font_hover_color'])." !important;
}


@media screen and (max-width:990px){
  .counter{ margin-bottom: 40px; }
}

@media only screen and (max-width:990px){
  .con-6310-template-".esc_attr($templateId)."{ margin-bottom: 30px; }
}

";

for($i = 1; $i <= $cssData['desktop_item_per_row']; $i++) {
  $cssCode .= "
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-template-".esc_attr($templateId)."{
    background: linear-gradient(30deg,".esc_attr($cssData['con_6310_'.esc_attr($i).'_box_background_left']).",".esc_attr($cssData['con_6310_'.esc_attr($i).'_box_background_right']).");
  }
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-template-".esc_attr($templateId)."-title{
    color:".esc_attr($cssData['con_6310_'.esc_attr($i).'_box_background_left']).";
  }
  ";
 
}

$cssCode .= "@media only screen and (max-width: 990px){";
for($i = 1; $i <= 4; $i++) {
  $cssCode .= "
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-4:nth-child(4n + {$i}) .con-6310-template-".esc_attr($templateId)."{
    background: linear-gradient(30deg,".esc_attr($cssData['con_6310_'.esc_attr($i).'_box_background_left']).",".esc_attr($cssData['con_6310_'.esc_attr($i).'_box_background_right']).");
  }
  ";
}
$cssCode .= "}";

  wp_register_style( "con-6310-template-".esc_attr($templateId)."-css", '' );
  wp_enqueue_style( "con-6310-template-".esc_attr($templateId)."-css" );
  wp_add_inline_style( "con-6310-template-".esc_attr($templateId)."-css", $cssCode );
?>
