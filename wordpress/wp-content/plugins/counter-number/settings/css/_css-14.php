<?php

$cssCode = "

.con-6310-template-".esc_attr($templateId)."{
  font-family: 'Muli', sans-serif;
  text-align: center;
  width: 100%;
  height: 100%;
  float: left;
  padding: 10px 10px 0;
  margin: 0 auto;
  position: relative;
  z-index: 1;
  overflow: hidden;
}
.con-6310-template-".esc_attr($templateId)."-counter-icon{
  color: ".esc_attr($cssData['con_6310_icon_color']).";
  background: linear-gradient(to right bottom, #febd3b,#ff6311 50%, transparent 51%);
  font-size:  ".esc_attr($cssData['con_6310_icon_font_size'])."px;
  text-align: left;
  height: calc(".esc_attr($cssData['con_6310_icon_font_size'])."px * 2 + 20px);
  width: calc(".esc_attr($cssData['con_6310_icon_font_size'])."px * 2 + 20px);
  line-height: calc(".esc_attr($cssData['con_6310_icon_font_size'])."px * 2 / 2);
  // padding: 3px 13px;
  position: absolute;
  left: 0;
  top: 0;
  transtion: .5s;
}
.con-6310-template-".esc_attr($templateId)."-counter-icon img{
  width:  ".esc_attr($cssData['con_6310_icon_font_size'])."px;
  height:  ".esc_attr($cssData['con_6310_icon_font_size'])."px;
}
.con-6310-template-".esc_attr($templateId)."-icon-wrapper {
  margin: 8px;
}
.con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-counter-icon{
  color: ".esc_attr($cssData['con_6310_icon_hover_color']).";
}
.con-6310-template-".esc_attr($templateId)."-counter-icon:before,
.con-6310-template-".esc_attr($templateId)."-counter-icon:after{
  content: '';
  background: linear-gradient(to right bottom,transparent 49%,#a83e05 50%);
  width: 10px;
  height: 10px;
  position: absolute;
  top: 0;
  right: 0;
}
.con-6310-template-".esc_attr($templateId)."-counter-icon:after{
  top: auto;
  bottom: 0;
  left: 0;
  right: auto;
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
.con-6310-template-".esc_attr($templateId)."-title:before,
.con-6310-template-".esc_attr($templateId)."-title:after{
  content: '';
  background: linear-gradient(to right bottom,transparent 49%,#a83e05 50%);
  width: 10px;
  height: 10px;
  position: absolute;
  top: -10px;
  left: 0;
}
.con-6310-template-".esc_attr($templateId)."-title {
  padding-left: 15px;
  padding-right: 15px;
  margin: 0 -10px;
  position: relative;
  width: calc(100% + 20px) !important;
  
}
.con-6310-template-".esc_attr($templateId)."-title:after{
  transform: rotateY(180deg);
  left: auto;
  right: 0;
}

.con-6310-template-".esc_attr($templateId)."-description {
  padding-left: 8px;
  padding-right: 8px;
  padding-top: ".esc_attr($cssData['con_6310_details_margin_top'])."px;
  padding-bottom: ".esc_attr($cssData['con_6310_details_margin_bottom'])."px;
  margin: 0 auto !important;
}
.con-6310-template-".esc_attr($templateId)."-footer {
  float: left;
  width: 100%;
  height: 100%;
}

.con-6310-counter-".esc_attr($templateId)."-section{
  display: inline;
  float: left;
  justify-content: center;
  background-color: ".esc_attr($cssData['con_6310_box_background_color_top']).";
  font-weight: 700;
  padding: 50px 20px 25px;
  border-radius: 0 30px 0 0;
  width: 100%;
}
@keyframes con-6310-template-".esc_attr($templateId)."-animation {
  0% {transform: scaleY(1);}
  30% {transform: scaleX(1.3); opacity: .4;}
  50% {transform: scaleX(.5);}
  70% {transform: scaleY(1.4);}
  100% {transform: scaleY(1);}
}
.con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-icon i, 
.con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-icon img {
  animation-name: con-6310-template-".esc_attr($templateId)."-animation;
  animation-duration: .5s;
} 
";

for($i = 1; $i <= $cssData['desktop_item_per_row']; $i++) {
  $cssCode .= "  
.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-template-".esc_attr($templateId)."-counter-icon{
  background: linear-gradient(to right bottom, ".esc_attr($cssData['con_6310_'.esc_attr($i).'_title_background_color_top']).",".esc_attr($cssData['con_6310_'.esc_attr($i).'_title_background_color_bottom'])." 50%, transparent 51%);
}
.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-template-".esc_attr($templateId)."-counter-icon:before,
.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-template-".esc_attr($templateId)."-counter-icon:after{
  background: linear-gradient(to right bottom,transparent 49%,".esc_attr($cssData['con_6310_'.esc_attr($i).'_title_background_color_bottom'])." 50%);
}
.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-template-".esc_attr($templateId)."-title{
  background: linear-gradient(to bottom,".esc_attr($cssData['con_6310_'.esc_attr($i).'_title_background_color_top']).",".esc_attr($cssData['con_6310_'.esc_attr($i).'_title_background_color_bottom']).");
}
.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-template-".esc_attr($templateId)."-title:before,
.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-template-".esc_attr($templateId)."-title:after{
  background: linear-gradient(to right bottom,transparent 49%,".esc_attr($cssData['con_6310_'.esc_attr($i).'_title_background_color_bottom'])." 50%);
}
.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-template-".esc_attr($templateId)."-footer{
  background: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_title_background_color_top']).";
}
  ";
 
}

$cssCode .= "@media only screen and (max-width: 990px){
  .counter{ margin-bottom: 40px; }";
for($i = 1; $i <= 4; $i++) {
  $cssCode .= "
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-4:nth-child(4n + {$i}) .con-6310-template-".esc_attr($templateId)."-counter-icon{
    background: linear-gradient(to right bottom, ".esc_attr($cssData['con_6310_'.esc_attr($i).'_title_background_color_top']).",".esc_attr($cssData['con_6310_'.esc_attr($i).'_title_background_color_bottom'])." 50%, transparent 51%);
  }
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-4:nth-child(4n + {$i}) .con-6310-template-".esc_attr($templateId)."-counter-icon:before,
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-4:nth-child(4n + {$i}) .con-6310-template-".esc_attr($templateId)."-counter-icon:after{
    background: linear-gradient(to right bottom,transparent 49%,".esc_attr($cssData['con_6310_'.esc_attr($i).'_title_background_color_bottom'])." 50%);
  }
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-4:nth-child(4n + {$i}) .con-6310-template-".esc_attr($templateId)."-title{
    background: linear-gradient(to bottom,".esc_attr($cssData['con_6310_'.esc_attr($i).'_title_background_color_top']).",".esc_attr($cssData['con_6310_'.esc_attr($i).'_title_background_color_bottom']).");
  }
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-4:nth-child(4n + {$i}) .con-6310-template-".esc_attr($templateId)."-title:before,
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-4:nth-child(4n + {$i}) .con-6310-template-".esc_attr($templateId)."-title:after{
    background: linear-gradient(to right bottom,transparent 49%,".esc_attr($cssData['con_6310_'.esc_attr($i).'_title_background_color_bottom'])." 50%);
  }
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-4:nth-child(4n + {$i}) .con-6310-template-".esc_attr($templateId)."-footer{
    background: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_title_background_color_top']).";
  }
  ";
}
$cssCode .= "}";

  wp_register_style( "con-6310-template-".esc_attr($templateId)."-css", '' );
  wp_enqueue_style( "con-6310-template-".esc_attr($templateId)."-css" );
  wp_add_inline_style( "con-6310-template-".esc_attr($templateId)."-css", $cssCode );
?>
