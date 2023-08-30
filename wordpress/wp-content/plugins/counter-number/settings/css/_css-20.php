<?php

$cssCode = "
.con-6310-template-".esc_attr($templateId)."{
  width: 100%;
  height: 100%;
  float: left;
  padding-top: 10px;
  text-align: center;
  margin: 0 auto;
  z-index: 1;
  position: relative;
  overflow: hidden;
}
 .con-6310-template-".esc_attr($templateId)."-counter-icon{
  width: calc(".esc_attr($cssData['con_6310_icon_font_size'])."px * 2);
  height: calc(".esc_attr($cssData['con_6310_icon_font_size'])."px * 2);
  line-height: calc(".esc_attr($cssData['con_6310_icon_font_size'])."px * 2);
  border-radius: 50%;
  background: ".esc_attr($cssData['con_6310_icon_background_color']).";
  font-size: ".esc_attr($cssData['con_6310_icon_font_size'])."px;
  color: #f63852;
  margin: 10px auto;
  position: relative;
  transition: all 0.3s ease 0s;
}
.con-6310-template-".esc_attr($templateId)."-counter-icon img{
  width: ".esc_attr($cssData['con_6310_icon_font_size'])."px;
  height: ".esc_attr($cssData['con_6310_icon_font_size'])."px;
  border-radius: 50%;
}
.con-6310-template-".esc_attr($templateId)."-icon-wrapper {
  margin-bottom: ".esc_attr($cssData['con_6310_icon_margin_bottom'])."px;
  float: left;
  width: 100%;
  height: 100%;
}


.con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-counter-icon{
   box-shadow: 0 0 10px ".esc_attr($cssData['con_6310_icon_box_shadow_color'])." inset; 
}

.con-6310-template-".esc_attr($templateId)."-counter-icon:before{
  content: '';
  width: 130%;
  height: 130%;
  border-radius: 50% 50% 0 50%;
  background: #f63852;
  position: absolute;
  top: 50%;
  left: 50%;
  z-index: -1;
  transform: translate(-50%, -50%) rotate(45deg);

  
}
.con-6310-template-".esc_attr($templateId)."-counter-content{
  padding: 20px 20px 15px;
  background: linear-gradient(143deg,#f75f74 49%,#f63852 50%);
  float: left;
  width: 100%;
  height: calc(100% - ".esc_attr($cssData['con_6310_icon_font_size'])."px * 2);
}
.con-6310-counter-".esc_attr($templateId)."-section{
  display: block;
  padding: 5px 0;
  background: ".esc_attr($cssData['con_6310_icon_background_color']).";
  position: relative;
  transition: all 0.3s ease 0s;
}

.con-6310-template-".esc_attr($templateId).":hover .con-6310-counter-".esc_attr($templateId)."-section{ 
  box-shadow: 0 0 7px ".esc_attr($cssData['con_6310_icon_box_shadow_color'])."  inset, 0 0 0 15px ".esc_attr($cssData['con_6310_icon_background_color'])." inset,0 0 10px ".esc_attr($cssData['con_6310_icon_box_shadow_color'])."; 
}

.con-6310-template-".esc_attr($templateId)."-title{
  color: ".esc_attr($cssData['con_6310_title_font_color']).";
}

.con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-title{
    color: ".esc_attr($cssData['con_6310_title_font_hover_color']).";
}

.con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-description {
  color: ".esc_attr($cssData['con_6310_details_font_hover_color']).";
}
.con-6310-counter-".esc_attr($templateId)."-section{
  width: 100%;
}
.con-6310-template-".esc_attr($templateId)."-icon {
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100%;
}
.con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-icon i,
.con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-icon img {
  animation-name: con-6310-template-".esc_attr($templateId)."-animation;
  animation-duration: .8s;
}

@keyframes con-6310-template-".esc_attr($templateId)."-animation {
  0% {
    transform: scale(.5);
  }
  30% {
    transform: scale(1.2);
  } 
  60% {
    transform: scale(.7);
  }
  100% {
    transform: scale(1);
 
  }

 } 

@media only screen and (max-width: 990px){
  .counter{ margin-bottom: 30px; }
}


";

for($i = 1; $i <= $cssData['desktop_item_per_row']; $i++) {
  $cssCode .= " 
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-template-".esc_attr($templateId)."-counter-icon,
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-template-".esc_attr($templateId)."-counter-value{
  color: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_box_background_bottom'])." !important;
  }
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-template-".esc_attr($templateId)."-counter-icon::before{
  background: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_box_background_bottom'])." !important;
  }
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-template-".esc_attr($templateId)."-counter-content{
  background: linear-gradient(143deg,".esc_attr($cssData['con_6310_'.esc_attr($i).'_box_background_top'])." 49%,".esc_attr($cssData['con_6310_'.esc_attr($i).'_box_background_bottom'])." 50%);

  }
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-counter-".esc_attr($templateId)."-count-prefix,
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-counter-".esc_attr($templateId)."-count-suffix{
  color: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_box_background_bottom'])." !important;
  }
    ";
 
}

$cssCode .= "@media only screen and (max-width: 990px){";
for($i = 1; $i <= 4; $i++) {
  $cssCode .= "
  
.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-4:nth-child(4n + {$i}) .con-6310-template-".esc_attr($templateId)."-counter-icon,
.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-4:nth-child(4n + {$i}) .con-6310-template-".esc_attr($templateId)."-counter-value{
  color: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_box_background_bottom'])." !important;
}
.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-4:nth-child(4n + {$i}) .con-6310-template-".esc_attr($templateId)."-counter-icon::before{
background: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_box_background_bottom'])." !important;
}
.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-4:nth-child(4n + {$i}) .con-6310-template-".esc_attr($templateId)."-counter-content{
background: linear-gradient(143deg,".esc_attr($cssData['con_6310_'.esc_attr($i).'_box_background_top'])." 49%,".esc_attr($cssData['con_6310_'.esc_attr($i).'_box_background_bottom'])." 50%);
}
.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-4:nth-child(4n + {$i}) .con-6310-counter-".esc_attr($templateId)."-count-prefix,
.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-4:nth-child(4n + {$i}) .con-6310-counter-".esc_attr($templateId)."-count-suffix{
color: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_box_background_bottom'])." !important;
}
  ";
}
$cssCode .= "}";

  wp_register_style( "con-6310-template-".esc_attr($templateId)."-css", '' );
  wp_enqueue_style( "con-6310-template-".esc_attr($templateId)."-css" );
  wp_add_inline_style( "con-6310-template-".esc_attr($templateId)."-css", $cssCode );
?>
