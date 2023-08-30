<?php

$cssCode = "
  .con-6310-template-".esc_attr($templateId)."{
    float: left;
    font-family: 'Dosis', sans-serif;
    color: #760b24;
    width: 100%;
    height: 100%;
    text-align: center;
    padding: 50px 15px 7px;
    margin: 0 auto;
    position: relative;
    z-index: 1;
  }
  .con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-title{
    color: ".esc_attr($cssData['con_6310_title_font_hover_color'])." !important;
  }
  .con-6310-template-".esc_attr($templateId).":before,
  .con-6310-template-".esc_attr($templateId).":after{
    content: '';
    background-color: #760b24;
    box-shadow: 0 8px 8px rgba(0, 0, 0, 0.3);
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    top: 40px;
    z-index: -1;
  }
  .con-6310-template-".esc_attr($templateId).":after{
    background-color: ".esc_attr($cssData['con_6310_box_background_color']).";
    height: 120px;
    width: 120px;
    border-radius: 100px 0 0 0;
    transform: translateX(-50%) rotate(45deg);
    left: 50%;
    top: -10px;
  }
  .con-6310-template-".esc_attr($templateId)."-counter-content{
    background-color: ".esc_attr($cssData['con_6310_box_background_color']).";
    padding-bottom: 15px;
    border-radius: 0 0 20px 20px;
    float: left;
    height: 100%;
    width: 100%;
    padding-left: 10px;
    padding-right: 10px;
  }
  .con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-counter-content, .con-6310-template-".esc_attr($templateId).":hover:after{
     background-color: ".esc_attr($cssData['con_6310_box_background_hover_color']).";
  }  
  .con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-description{
    color: ".esc_attr($cssData['con_6310_details_font_hover_color']).";
  }
  .con-6310-template-".esc_attr($templateId)."-counter-icon{
    font-size: ".esc_attr($cssData['con_6310_icon_font_size'])."px;
    margin-top: ".esc_attr($cssData['con_6310_icon_margin_top'])."px;
    margin-bottom: ".esc_attr($cssData['con_6310_icon_margin_bottom'])."px;
    transition: .5s;
  }
  .con-6310-template-".esc_attr($templateId)."-counter-icon img{
    width: ".esc_attr($cssData['con_6310_icon_font_size'])."px;
    height: ".esc_attr($cssData['con_6310_icon_font_size'])."px;
  }
  .con-6310-counter-".esc_attr($templateId)."-section{
    width: 100%;
  }
  .con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-counter-icon{
    transform: rotateX(360deg);
  }
  
  @media screen and (max-width:990px){
    .con-6310-template-".esc_attr($templateId)."{ margin-bottom: 40px; }
  }  
 ";
 
for($i = 1; $i <= $cssData['desktop_item_per_row']; $i++) {
  $cssCode .= "
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-template-".esc_attr($templateId)."{
    color: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_background_color'])." !important;
  }
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-template-".esc_attr($templateId)."-title
    color: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_background_color'])." !important;
  }
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-template-".esc_attr($templateId)."-counter-icon{
    color: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_background_color'])." !important;
  }
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-template-".esc_attr($templateId).":before{
    background-color: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_background_color'])." !important;
  }
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-template-".esc_attr($templateId)."-counter-value {
    color: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_background_color'])." !important;
  }
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-counter-".esc_attr($templateId)."-count-prefix {
    color: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_background_color'])." !important;
  }
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-counter-".esc_attr($templateId)."-count-suffix{
    color: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_background_color'])." !important;
  }
  ";
 
}


$cssCode .= "@media only screen and (max-width: 990px){";
  for($i = 1; $i <= 4; $i++) {
    $cssCode .= "
    .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-4:nth-child(4n + {$i}) .con-6310-template-".esc_attr($templateId)."{
      color: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_background_color'])."!important;
    }
    .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-4:nth-child(4n + {$i}) .con-6310-template-".esc_attr($templateId)."-title
      color: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_background_color'])." !important;
    }
    .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-4:nth-child(4n + {$i}) .con-6310-template-".esc_attr($templateId)."-counter-icon{
      color: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_background_color'])." !important;
    }
    .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-4:nth-child(4n + {$i}) .con-6310-template-".esc_attr($templateId).":before{
      background-color: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_background_color'])." !important;
    }
    .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-4:nth-child(4n + {$i}) .con-6310-template-".esc_attr($templateId)."-counter-value {
      color: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_background_color'])." !important;
    }
    .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-4:nth-child(4n + {$i}) .con-6310-counter-".esc_attr($templateId)."-count-prefix {
      color: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_background_color'])." !important;
    }
    .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-4:nth-child(4n + {$i}) .con-6310-counter-".esc_attr($templateId)."-count-suffix{
      color: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_background_color'])." !important;
    }
    ";
  }
  $cssCode .= "}";

  wp_register_style( "con-6310-template-".esc_attr($templateId)."-css", '' );
  wp_enqueue_style( "con-6310-template-".esc_attr($templateId)."-css" );
  wp_add_inline_style( "con-6310-template-".esc_attr($templateId)."-css", $cssCode );
?>
