<?php

$cssCode = "   
.con-6310-template-".esc_attr($templateId)."{
  float: left;
  width: 100%;
  height: 100%;
  padding: 30px 10px 10px 10px;
  text-align: center;
  background: ".esc_attr($cssData['con_6310_box_background_color']).";
  float: left;
  box-shadow: 0px 0px ".esc_attr($cssData['con_6310_box_shadow_blur'])."px ".esc_attr($cssData['con_6310_box_shadow_width'])."px ".esc_attr($cssData['con_6310_box_shadow_color']).";
  border-radius: ".esc_attr($cssData['con_6310_box_radius'])."px;
}

.con-6310-template-".esc_attr($templateId).":hover{
  background: ".esc_attr($cssData['con_6310_box_background_hover_color']).";
  box-shadow: 0px 0px ".esc_attr($cssData['con_6310_box_shadow_blur'])."px ".esc_attr($cssData['con_6310_box_shadow_width'])."px ".esc_attr($cssData['con_6310_box_shadow_hover_color']).";
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
.con-6310-template-".esc_attr($templateId)."-value{
  display: inline-block;
}
.con-6310-counter-".esc_attr($templateId)."-section:before{
  content: '';
  border-top: 15px solid ".esc_attr($cssData['con_6310_inner_1st_circle_color']).";
  border-left: 10px solid transparent;
  border-right: 10px solid transparent;
  position: absolute;
  bottom: -15px;
  left: 50%;
  transform: translateX(-50%);
}
.con-6310-counter-".esc_attr($templateId)."-section:after{
  content: '';
  border-radius: 50%;
  border-width: ".esc_attr($cssData['con_6310_outer_circle_border_size'])."px;
  border-style: solid;
  border-color: ".esc_attr($cssData['con_6310_inner_2nd_circle_color'])." ".esc_attr($cssData['con_6310_inner_1st_circle_color'])." ".esc_attr($cssData['con_6310_inner_2nd_circle_color'])." ".esc_attr($cssData['con_6310_inner_1st_circle_color']).";
  position: absolute;
  top: -23px;
  left: -23px;
  bottom: -23px;
  right: -23px;
  transition: all 0.3s ease 0s;
}
.con-6310-template-".esc_attr($templateId).":hover .con-6310-counter-".esc_attr($templateId)."-section:after{ transform: rotate(360deg); }
.con-6310-counter-".esc_attr($templateId)."-section{
  width: 100%;
  float: left;
  width:  ".esc_attr($cssData['con_6310_box_circle_width'])."px;
  height:  ".esc_attr($cssData['con_6310_box_circle_width'])."px;
  line-height: calc( ".esc_attr($cssData['con_6310_box_circle_width'])."px - ".esc_attr($cssData['con_6310_inner_circle_border_size'])."px * 2);
  border-radius: 50%;
  border-width: ".esc_attr($cssData['con_6310_inner_circle_border_size'])."px;
  border-style: solid;
  border-color: ".esc_attr($cssData['con_6310_inner_1st_circle_color'])." ".esc_attr($cssData['con_6310_inner_2nd_circle_color'])." ".esc_attr($cssData['con_6310_inner_1st_circle_color'])." ".esc_attr($cssData['con_6310_inner_2nd_circle_color']).";
  margin-bottom: 40px;
  font-size: 30px;
  font-weight: 600;
  color: ".esc_attr($cssData['con_6310_inner_2nd_circle_color']).";
  position: relative;
}

.con-6310-counter-".esc_attr($templateId)."-section-wrapper{
  width: 100%;
  display: flex;
  justify-content: center;
}
.con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-counter-value{
  color: ".esc_attr($cssData['con_6310_number_font_hover_color']).";  
}

@media only screen and (max-width: 990px){
  .con-6310-template-".esc_attr($templateId)."{ margin-bottom: 30px; }
}
      ";

  wp_register_style( "con-6310-template-".esc_attr($templateId)."-css", "" );
  wp_enqueue_style( "con-6310-template-".esc_attr($templateId)."-css" );
  wp_add_inline_style( "con-6310-template-".esc_attr($templateId)."-css", $cssCode );
?>
