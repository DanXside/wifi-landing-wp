<?php

$cssCode = "
.con-6310-template-".esc_attr($templateId)."-common-overlay{
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  width: 100%;
}
.con-6310-template-".esc_attr($templateId).", .con-6310-template-".esc_attr($templateId)."-main-wrapper{
  float: left;
  width: 100%;
  height: 100%;
}
.con-6310-template-".esc_attr($templateId)."-wrapper{
  display: flex;
  width: 100%;
  height: 100%;
  float: left;
  box-shadow: 0px 0px ".esc_attr($cssData['con_6310_box_shadow_blur'])."px ".esc_attr($cssData['con_6310_box_shadow_width'])."px ".esc_attr($cssData['con_6310_box_shadow_color']).";
  transition: .5s;
}

.con-6310-template-".esc_attr($templateId)."-wrapper:hover .con-6310-template-".esc_attr($templateId)."-icon {
  transform: rotate(360deg);
}

.con-6310-template-".esc_attr($templateId)."-wrapper:hover{
  display: flex;
  width: 100%;
  height: 100%;
  float: left;
  box-shadow: 0px 0px ".esc_attr($cssData['con_6310_box_shadow_blur'])."px ".esc_attr($cssData['con_6310_box_shadow_width'])."px ".esc_attr($cssData['con_6310_box_shadow_hover_color']).";
}
.con-6310-template-".esc_attr($templateId)."-left-section{
  float: left;
  width: 50%;
  background-repeat: no-repeat !important;
  background-size: cover !important;
  position: relative;
  background-position: center !important;
}
.con-6310-template-".esc_attr($templateId)."-right-section {
  float: left;
  display: flex;
  box-sizing: border-box;
  padding: 4px; 
  flex-direction: column;
  justify-content: center;
  align-items: center;
  width: 50%;
  background-color: ".esc_attr($cssData['con_6310_box_background_color']).";
}
.con-6310-template-".esc_attr($templateId)."-wrapper:hover .con-6310-template-".esc_attr($templateId)."-right-section{
  background-color: ".esc_attr($cssData['con_6310_box_background_hover_color']).";
}
.con-6310-template-".esc_attr($templateId)."-icon {
  float: left;
  text-align: center;
  margin-top: ".esc_attr($cssData['con_6310_icon_margin_top'])."px;
  margin-bottom: ".esc_attr($cssData['con_6310_icon_margin_bottom'])."px;
  color: ".esc_attr($cssData['con_6310_icon_color']).";
  font-size: ".esc_attr($cssData['con_6310_icon_font_size'])."px;
  width: ".esc_attr($cssData['con_6310_icon_font_size'])."px;
  height: ".esc_attr($cssData['con_6310_icon_font_size'])."px;
  transition: all .5s ease-in;
}
.con-6310-template-".esc_attr($templateId)."-icon img{
  width: 100%;
}
.con-6310-template-".esc_attr($templateId)."-title{
  color: ".esc_attr($cssData['con_6310_title_font_color']).";
}
.con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-title {
  color: ". (isset($cssData['con_6310_title_font_hover_color']) ? $cssData['con_6310_title_font_hover_color'] : $cssData['con_6310_title_font_color']) .";   
}
.con-6310-template-".esc_attr($templateId)."-wrapper:hover .con-6310-template-".esc_attr($templateId)."-icon {
  color: ".esc_attr($cssData['con_6310_icon_hover_color']).";
}
.con-6310-template-".esc_attr($templateId)."-icon-wrapper {
  float: left;
  width: 100%;
  display: flex;
  justify-content: center;
}
.con-6310-template-".esc_attr($templateId)."-icon img {
  width: 100%;
  height: auto;
}
.con-6310-template-".esc_attr($templateId)."-left-section::before{
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  background-color: ".esc_attr($cssData['con_6310_box_hover_overly_color']).";
  z-index: 2;
  opacity: 0;
  visibility: hidden;
  transform: scale(0) translateZ(0);
  transition: all 400ms ease-in-out;
}
.con-6310-template-".esc_attr($templateId)."-wrapper:hover .con-6310-template-".esc_attr($templateId)."-left-section::before{
  transform: scale(1) translateZ(0);
  opacity: 1;
  visibility: visible;
}
.con-6310-template-".esc_attr($templateId)."-wrapper:hover .con-6310-template-".esc_attr($templateId)."-title{
  color: ".esc_attr($cssData['con_6310_title_font_hover_color']).";
}
.con-6310-template-".esc_attr($templateId)."-wrapper:hover .con-6310-template-".esc_attr($templateId)."-description{
  color: ".esc_attr($cssData['con_6310_details_font_hover_color']).";
}
@media only screen and (max-width: 600px){
.con-6310-template-".esc_attr($templateId)."-wrapper{
  flex-direction: column;
  width: 100%;
}
.con-6310-template-".esc_attr($templateId)."-left-section{
  height: 30vh;
  width: 100%;
}
.con-6310-template-".esc_attr($templateId)."-right-section{
  width: 100%;
}

} 
  ";

  wp_register_style( "con-6310-template-".esc_attr($templateId)."-css", "" );
  wp_enqueue_style( "con-6310-template-".esc_attr($templateId)."-css" );
  wp_add_inline_style( "con-6310-template-".esc_attr($templateId)."-css", $cssCode );
?>
