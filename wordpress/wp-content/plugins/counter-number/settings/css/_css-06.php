<?php

$cssCode = "   
.con-6310-template-".esc_attr($templateId)." {
  float: left;
  width: 100%;
  height: 100%;
  padding: 10px;
  text-align: center;
  background: ".esc_attr($cssData['con_6310_box_background_color']).";
  border-radius: ".esc_attr($cssData['con_6310_box_radius'])."px;
  box-shadow: 0px 0px ".esc_attr($cssData['con_6310_box_shadow_blur'])."px ".esc_attr($cssData['con_6310_box_shadow_width'])."px ".esc_attr($cssData['con_6310_box_shadow_color'])."; 
}
.con-6310-template-".esc_attr($templateId).":hover {
  background: ".esc_attr($cssData['con_6310_box_background_hover_color']).";
  box-shadow: 0px 0px ".esc_attr($cssData['con_6310_box_shadow_blur'])."px ".esc_attr($cssData['con_6310_box_shadow_width'])."px ".esc_attr($cssData['con_6310_box_shadow_hover_color']).";
}
.con-6310-template-".esc_attr($templateId)."-title{
  color: ".esc_attr($cssData['con_6310_title_font_color']).";
}
.con-6310-template-".esc_attr($templateId).":hover  .con-6310-template-".esc_attr($templateId)."-title{
  color: ".esc_attr($cssData['con_6310_title_font_hover_color']).";
}
.con-6310-template-".esc_attr($templateId).":hover  .con-6310-template-".esc_attr($templateId)."-description{
  color: ".esc_attr($cssData['con_6310_details_font_hover_color']).";
}
.con-6310-template-".esc_attr($templateId)."-counter-icon{
  display: inline-block;
  width: calc(".esc_attr($cssData['con_6310_icon_font_size'])."px * 2 + 10px);
  height: calc(".esc_attr($cssData['con_6310_icon_font_size'])."px * 2 + 10px);
  text-align: center;
  border-radius: ".esc_attr($cssData['con_6310_border_radius'])."%;
  border:  ".esc_attr($cssData['con_6310_box_border_size'])."px solid;
  font-size: ".esc_attr($cssData['con_6310_icon_font_size'])."px;
  color: #ff6fca;
  margin-top: 20px;
  margin-bottom: 20px;
  position: relative;
}
.con-6310-template-".esc_attr($templateId)."-icon-wrapper {
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
}
.con-6310-template-".esc_attr($templateId)."-counter-icon img{
  width: ".esc_attr($cssData['con_6310_icon_font_size'])."px;
  height: ".esc_attr($cssData['con_6310_icon_font_size'])."px;
}

.con-6310-template-".esc_attr($templateId)."-counter-icon:before{
  content: '';
  border:  ".esc_attr($cssData['con_6310_inner_border_size'])."px solid;
  border-radius: ".esc_attr($cssData['con_6310_border_radius'])."%;
  position: absolute;
  top: 5px;
  left: 5px;
  right: 5px;
  bottom: 5px;
}

.con-6310-counter-".esc_attr($templateId)."-section{
  width: 100%;
  float: left;
}
.con-6310-counter-".esc_attr($templateId)."-section-wrapper{
  float: left;
  width: 100%;
  text-align: center;
}
.con-6310-template-".esc_attr($templateId)."-counter-value{
  width: auto !important;
  float: unset !important;
}

.con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-icon i,
.con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-icon img{
  animation-name: con-6310-template-preview-".esc_attr($templateId)."-animation;
  transform-origin: center bottom;
  animation-duration: 1s;
  animation-fill-mode: both;
}

@keyframes con-6310-template-preview-".esc_attr($templateId)."-animation {
  0%, 20%, 53%, 80%, 100% {
  transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
  transform: translate3d(0,0,0);
  }
  40%, 43% {
  transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
  transform: translate3d(0, -30px, 0);
  }
  70% {
  transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
  transform: translate3d(0, -15px, 0);
  }
  90% { -webkit-transform: translate3d(0,-4px,0); transform: translate3d(0,-4px,0);
  }
}


@media only screen and (max-width: 990px){
  .con-6310-template-".esc_attr($templateId)."{ margin-bottom: 40px; }
}
      ";
      
for($i = 1; $i <= $cssData['desktop_item_per_row']; $i++) {
  $cssCode .= "
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-template-".esc_attr($templateId)."-counter-icon,
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-owl-stage .con-6310-owl-item:nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-template-".esc_attr($templateId)."-counter-icon {
    color: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_box_border_color']).";
    border-color: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_box_border_color']).";
  }
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-template-".esc_attr($templateId)."-counter-icon::before,
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-owl-stage .con-6310-owl-item:nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-template-".esc_attr($templateId)."-counter-icon::before {
    border-color: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_box_border_color']).";
  }
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-template-".esc_attr($templateId)."-counter-value,
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-owl-stage .con-6310-owl-item:nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-template-".esc_attr($templateId)."-counter-value {
   color: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_box_border_color']).";
  }
  ";
 
}

$cssCode .= "@media only screen and (max-width: 990px){";
for($i = 1; $i <= 4; $i++) {
  $cssCode .= "
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-4:nth-child(4n + {$i}) .con-6310-template-".esc_attr($templateId)."-counter-icon,
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-owl-stage .con-6310-owl-item:nth-child(4n + {$i}) .con-6310-template-".esc_attr($templateId)."-counter-icon {
    color: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_box_border_color']).";
    border-color: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_box_border_color']).";
  }
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-4:nth-child(4n + {$i}) .con-6310-template-".esc_attr($templateId)."-counter-icon::before,
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-owl-stage .con-6310-owl-item:nth-child(4n + {$i}) .con-6310-template-".esc_attr($templateId)."-counter-icon::before {
    border-color: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_box_border_color']).";
  }
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-4:nth-child(4n + {$i}) .con-6310-template-".esc_attr($templateId)."-counter-value,
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-owl-stage .con-6310-owl-item:nth-child(4n + {$i}) .con-6310-template-".esc_attr($templateId)."-counter-value {
  color: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_box_border_color']).";
  }
  ";
}
$cssCode .= "}";

  wp_register_style( "con-6310-template-".esc_attr($templateId)."-css", "" );
  wp_enqueue_style( "con-6310-template-".esc_attr($templateId)."-css" );
  wp_add_inline_style( "con-6310-template-".esc_attr($templateId)."-css", $cssCode );
?>
