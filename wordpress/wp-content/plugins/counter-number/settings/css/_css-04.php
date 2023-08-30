<?php

$cssCode = "
  .con-6310-template-".esc_attr($templateId)."-main-wrapper{
    float: left;
    width: 100%;
  }
  .con-6310-template-".esc_attr($templateId)."-common-overlay { 
    float: left;
    width: 100%;
  }
   .con-6310-template-".esc_attr($templateId)."-circle {
    position: relative;
    width: 100% ;
    padding-bottom: 100% ;
    border-radius: 50% ;
    z-index: 1;
  }
  .con-6310-template-".esc_attr($templateId)."-container {
    position: absolute;
    margin: 0;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1;
  }
  .con-6310-template-".esc_attr($templateId)."-circle::before{
    content: '';
    background-color:  ".esc_attr($cssData['con_6310_box_outer_1st_background_color']).";
    height: 75%;
    width: 75%;
    border-radius: 50%;
    box-shadow: 0 0 7px rgb(0 0 0 / 70%);
    position: absolute;
    left: -2px;
    top: -2px;
    z-index: -1;
  }
  .con-6310-template-".esc_attr($templateId)."-circle::after{
    content: '';
    background-color:  ".esc_attr($cssData['con_6310_box_outer_2nd_background_color']).";
    height: 75%;
    width: 75%;
    border-radius: 50%;
    box-shadow: 0 0 7px rgb(0 0 0 / 70%);
    position: absolute;
    top: -2px;
    z-index: -1;
    opacity: 0.6;
    left: auto;
    right: -2px;
  }
  .con-6310-template-".esc_attr($templateId)."-container::after{
    content: '';
    background-color:  ".esc_attr($cssData['con_6310_box_outer_3rd_background_color']).";
    height: 75%;
    width: 75%;
    border-radius: 50%;
    box-shadow: 0 0 7px rgb(0 0 0 / 70%);
    position: absolute;
    left: -2px;
    opacity: 1;
    z-index: -2;
    top: auto;
    bottom: -2px;
  }
  .con-6310-template-".esc_attr($templateId)."-container::before{
    content: '';
    background-color:  ".esc_attr($cssData['con_6310_box_outer_4th_background_color']).";
    height: 75%;
    width: 75%;
    border-radius: 50%;
    box-shadow: 0 0 7px rgb(0 0 0 / 70%);
    position: absolute;
    top: -2px;
    z-index: -1;
    opacity: 0.6;
    left: auto;
    right: -2px;
    top: auto;
    bottom: -2px;
  }
  .con-6310-template-".esc_attr($templateId)."-content {
    width: 90%;
    height: 90%;
    background-color: ".esc_attr($cssData['con_6310_box_inner_background_color']).";
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    border-radius: 50%;
    color: #000000;
  }
  .con-6310-template".esc_attr($templateId)."-container:hover .con-6310-template-".esc_attr($templateId)."-content {
    background: ".esc_attr($cssData['con_6310_box_inner_background_hover_color']).";
  }
  .con-6310-template-".esc_attr($templateId)."-icon{
    font-size: ".esc_attr($cssData['con_6310_icon_font_size'])."px;
    width: ".esc_attr($cssData['con_6310_icon_font_size'])."px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: ".esc_attr($cssData['con_6310_icon_color']).";
    margin-top: ".esc_attr($cssData['con_6310_icon_margin_top'])."px;
    margin-bottom: ".esc_attr($cssData['con_6310_icon_margin_bottom'])."px;
  }
  .con-6310-template-".esc_attr($templateId)."-icon img{
    width: ".esc_attr($cssData['con_6310_icon_font_size'])."px;
  }
  .con-6310-template-".esc_attr($templateId)."-container:hover .con-6310-template-".esc_attr($templateId)."-icon{
    color: ".esc_attr($cssData['con_6310_icon_hover_color']).";
  }

  .con-6310-template-".esc_attr($templateId)."-title{
    color: ".esc_attr($cssData['con_6310_title_font_color']).";
  }
  .con-6310-template-".esc_attr($templateId)."-container:hover .con-6310-template-".esc_attr($templateId)."-title{
    color: ".esc_attr($cssData['con_6310_title_font_hover_color']).";
  }
  .con-6310-template-".esc_attr($templateId)."-circle:hover .con-6310-template-".esc_attr($templateId)."-icon{
    animation-name: con-6310-preview-".esc_attr($templateId)."-animation;
    animation-duration: .7s;
    animation-fill-mode: both;
  }
  
  @keyframes con-6310-preview-".esc_attr($templateId)."-animation {
    0%{
      transform: scale(1);
    }
    50%{
      transform: scale(1.2);
    }
    100%{
      transform: scale(1);
    }
  }

  @media screen and (max-width:990px) {
    .con-6310-template-".esc_attr($templateId)."-container{ margin-bottom: 40px; }
  }

  ";

  wp_register_style( "con-6310-template-".esc_attr($templateId)."-css", "" );
  wp_enqueue_style( "con-6310-template-".esc_attr($templateId)."-css" );
  wp_add_inline_style( "con-6310-template-".esc_attr($templateId)."-css", $cssCode );
