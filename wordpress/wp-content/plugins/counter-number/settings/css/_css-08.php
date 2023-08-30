<?php

$cssCode = "   
  .con-6310-template-".esc_attr($templateId)."-parallax {
  width: 100%;
  }
  .con-6310-template-".esc_attr($templateId)."{
    padding: 20px;
    background: linear-gradient(to bottom, ".esc_attr($cssData['con_6310_outer_background_color_top']).", ".esc_attr($cssData['con_6310_outer_background_color_bottom']).");
    border-radius: ".esc_attr($cssData['con_6310_box_radius'])."px;
    text-align: center;
    position: relative;
    float: left;
    width: 100%;
    height: 100%;
  }
  .con-6310-template-".esc_attr($templateId).":hover{
    background: linear-gradient(to bottom, ".esc_attr($cssData['con_6310_outer_background_hover_color_top']).", ".esc_attr($cssData['con_6310_outer_background_hover_color_bottom']).");
  }
  .con-6310-template-".esc_attr($templateId).":before,
  .con-6310-template-".esc_attr($templateId).":after{
    content: '';
    width: 10px;
    height: 50px;
    border-radius: 5px;
    border: 2px solid ".esc_attr($cssData['con_6310_after_effect_color']).";
    background: #fff;
    background-image: repeating-linear-gradient( transparent, transparent 2px, ".esc_attr($cssData['con_6310_after_effect_color'])." 2px, ".esc_attr($cssData['con_6310_after_effect_color'])." 4px);
    z-index: 1;
    position: absolute;
    top: -34px;
    left: 20%;
    opacity: 0;
  }
  .con-6310-template-".esc_attr($templateId).":after{
    left: auto;
    right: 20%;
  }
  .con-6310-template-".esc_attr($templateId)."-counter-content{
    padding: 50px 10px 30px;
    background: ".esc_attr($cssData['con_6310_inner_background_color_bottom']).";
    border-radius: ".esc_attr($cssData['con_6310_box_radius'])."px;
    box-shadow: ".esc_attr($cssData['con_6310_box_shadow_width'])."px ".esc_attr($cssData['con_6310_box_shadow_width'])."px ".esc_attr($cssData['con_6310_box_shadow_blur'])."px ".esc_attr($cssData['con_6310_box_shadow_color']).";
    position: relative;
    float: left;
    width: 100%;
    height: 100%;
  }
  .con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-counter-content{
    background: ".esc_attr($cssData['con_6310_inner_background_hover_color_bottom']).";
    box-shadow: ".esc_attr($cssData['con_6310_box_shadow_width'])."px ".esc_attr($cssData['con_6310_box_shadow_width'])."px ".esc_attr($cssData['con_6310_box_shadow_blur'])."px ".esc_attr($cssData['con_6310_box_shadow_hover_color']).";
  }
  .con-6310-template-".esc_attr($templateId)."-counter-content:before{
    content: '';
    width: 100%;
    height: 40px;
    background: ".esc_attr($cssData['con_6310_inner_background_color_top']).";
    border-radius: ".esc_attr($cssData['con_6310_box_radius'])."px ".esc_attr($cssData['con_6310_box_radius'])."px 0 0;
    position: absolute;
    top: 0;
    left: 0;
  }
  .con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-counter-content:before{
    background: ".esc_attr($cssData['con_6310_inner_background_hover_color_top']).";
  }
  .con-6310-template-".esc_attr($templateId)."-counter-value{
    display: block;
    font-size: 45px;
    font-weight: 700;
    color: #0364a0;
    margin-bottom: 10px;
  }
  .con-6310-template-".esc_attr($templateId)."-icon-wrapper{
    float: left;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
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
  }
  .con-6310-template-".esc_attr($templateId)."-icon img{
    width: 100%;
  }  
  .con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-icon {
    color: ".esc_attr($cssData['con_6310_icon_hover_color']).";
  }
  .con-6310-template-01-icon-wrapper {
    float: left;
    width: 100%;
    display: flex;
    justify-content: center;
  }
  .con-6310-template-".esc_attr($templateId)."-icon img {
    width: 100%;
    height: auto;
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
  .con-6310-counter-".esc_attr($templateId)."-section{
    width: 100%;
    float: left;
  }
  .con-6310-template-".esc_attr($templateId)."-counter-value{
    width: auto !important;
    float: unset !important;
  }  

.con-6310-template-".esc_attr($templateId).":hover:before,
.con-6310-template-".esc_attr($templateId).":hover:after{
  top: -14px;
  opacity: 1;
}
.con-6310-template-".esc_attr($templateId).":before{
  transition: .8s;
}
.con-6310-template-".esc_attr($templateId).":after{
  transition: 1.5s;
}
  @media only screen and (max-width: 990px){
    .con-6310-template-".esc_attr($templateId)."{ margin-bottom: 30px; }
  }
      ";

  wp_register_style( "con-6310-template-".esc_attr($templateId)."-css", "" );
  wp_enqueue_style( "con-6310-template-".esc_attr($templateId)."-css" );
  wp_add_inline_style( "con-6310-template-".esc_attr($templateId)."-css", $cssCode );
?>
