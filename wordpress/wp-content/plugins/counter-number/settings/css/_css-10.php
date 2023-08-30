<?php

$cssCode = "   
  .con-6310-template-".esc_attr($templateId)."{
    float: left;
    width: 100%;
    height: 100%;
    text-align: center;
    overflow: hidden;
    z-index: 1;
    position: relative;
    background: ".esc_attr($cssData['con_6310_box_background_color']).";
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 5px;    
  }
  .con-6310-template-".esc_attr($templateId).":hover {
    background: ".esc_attr($cssData['con_6310_box_background_hover_color']).";
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
  .con-6310-template-".esc_attr($templateId)."-counter-content{
    width: ".esc_attr($cssData['con_6310_box_circle_size'])."px;
    height: ".esc_attr($cssData['con_6310_box_circle_size'])."px;
    border-radius: 50%;
    background: #23bee5;
    margin-top: 15px;
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }
  .con-6310-template-".esc_attr($templateId)."-counter-content:before{
    content: '';
    width: ".esc_attr($cssData['con_6310_box_circle_size'])."px;
    height: ".esc_attr($cssData['con_6310_box_circle_size'])."px;
    border-radius: 7px;
    background: linear-gradient(135deg,transparent 49%,#23bee5 50%);
    position: absolute;
    top: 50%;
    left: 50%;
    z-index: -1;
    transform: translate(-50%, -46%) scale(1,1.14) rotate(45deg);
  }
  .con-6310-template-".esc_attr($templateId)."-counter-content:after{
    content: '';
    width: 90%;
    height: 90%;
    border-radius: 50%;
    border: 7px solid ".esc_attr($cssData['con_6310_box_border_color']).";
    box-shadow: 3px 5px 10px ".esc_attr($cssData['con_6310_box_shadow_color'])." inset;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }
  .con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-counter-content:after{
    border: 7px solid ".esc_attr($cssData['con_6310_border_hover_color']).";
    box-shadow: 3px 5px 10px ".esc_attr($cssData['con_6310_box_shadow_hover_color'])." inset;
  }
  .con-6310-template-".esc_attr($templateId)."-counter-icon{
    font-size: ".esc_attr($cssData['con_6310_icon_font_size'])."px;
    float: left;
    width: 100%;
    color: ".esc_attr($cssData['con_6310_icon_color']).";
    line-height: 45px;
    transition: all 0.5s ease 0s;
  }
  .con-6310-template-".esc_attr($templateId)."-counter-icon img{
    width: ".esc_attr($cssData['con_6310_icon_font_size'])."px;
    height: ".esc_attr($cssData['con_6310_icon_font_size'])."px;
  }
  .con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-counter-icon{
    color: ".esc_attr($cssData['con_6310_icon_hover_color']).";   
  }
  .con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-counter-icon{ transform: rotateY(360deg); }
  .con-6310-template-".esc_attr($templateId)."-counter-value{
    display: block;
    float: left;
    width: 100%;
  }
  .con-6310-counter-".esc_attr($templateId)."-section{
    width: 100%;
    float: left;
  }
  .con-6310-template-".esc_attr($templateId)."-counter-value{
    width: auto !important;
    float: unset !important;
  }
  @media only screen and (max-width: 990px){
    .con-6310-template-".esc_attr($templateId)."-counter{ margin-bottom: 20px; }
  }
";

for($i = 1; $i <= $cssData['desktop_item_per_row']; $i++) {
  $cssCode .= "
 
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-template-".esc_attr($templateId)."-counter-content,
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-owl-stage .con-6310-owl-item:nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-template-".esc_attr($templateId)."-counter-content {
    background: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_circle_background_color']).";
  }
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-template-".esc_attr($templateId)."-counter-content:before,
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-owl-stage .con-6310-owl-item:nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-template-".esc_attr($templateId)."-counter-content:before {
    background: linear-gradient(
      135deg,transparent 49%,".esc_attr($cssData['con_6310_'.esc_attr($i).'_circle_background_color'])." 50%);
  }
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-template-".esc_attr($templateId)."-counter:hover .con-6310-template-".esc_attr($templateId)."-title,
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-owl-stage .con-6310-owl-item:nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-template-".esc_attr($templateId)."-counter:hover .con-6310-template-".esc_attr($templateId)."-title {
    color: #fe6223;
  } 
  ";
 
}

$cssCode .= "@media only screen and (max-width: 990px){";
for($i = 1; $i <= 4; $i++) {
  $cssCode .= "
 
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + {$i}) .con-6310-template-".esc_attr($templateId)."-counter-content,
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-owl-stage .con-6310-owl-item:nth-child(6n + {$i}) .con-6310-template-".esc_attr($templateId)."-counter-content {
    background: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_circle_background_color']).";
  }
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + {$i}) .con-6310-template-".esc_attr($templateId)."-counter-content:before,
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-owl-stage .con-6310-owl-item:nth-child(6n + {$i}) .con-6310-template-".esc_attr($templateId)."-counter-content:before {
    background: linear-gradient(
      135deg,transparent 49%,".esc_attr($cssData['con_6310_'.esc_attr($i).'_circle_background_color'])." 50%);
  }
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + {$i}) .con-6310-template-".esc_attr($templateId)."-counter:hover .con-6310-template-".esc_attr($templateId)."-title,
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-owl-stage .con-6310-owl-item:nth-child(6n + {$i}) .con-6310-template-".esc_attr($templateId)."-counter:hover .con-6310-template-".esc_attr($templateId)."-title {
    color: #fe6223;
  } 
  ";
}
$cssCode .= "}";

  wp_register_style( "con-6310-template-".esc_attr($templateId)."-css", '' );
  wp_enqueue_style( "con-6310-template-".esc_attr($templateId)."-css" );
  wp_add_inline_style( "con-6310-template-".esc_attr($templateId)."-css", $cssCode );
?>
