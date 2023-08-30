<?php
$cssCode = "
  .con-6310-template-".esc_attr($templateId)."{
    float: left;
    padding: 10px 0;
    text-align: center;
    position: relative;
    width: 100%;
    height: calc(100% - 40px);
    margin-top: 10px;
    margin-bottom: 30px;
  }
 
  .con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-description{
    color: ".esc_attr($cssData['con_6310_details_font_hover_color']).";
  }
  .con-6310-template-".esc_attr($templateId)."-counter-icon{
    display: inline-block;
    width: ".esc_attr($cssData['con_6310_icon_box_size_number'])."px;
    height: ".esc_attr($cssData['con_6310_icon_box_size_number'])."px;
    line-height: ".esc_attr($cssData['con_6310_icon_box_size_number'])."px;
    border-radius: 50%;
    font-size: ".esc_attr($cssData['con_6310_icon_font_size'])."px;
    color: ".esc_attr($cssData['con_6310_icon_color']).";
    text-align: center;
    margin-bottom: calc(".esc_attr($cssData['con_6310_icon_box_size_number'])."px / 3);
    position: relative;
    z-index: 1;
    transition: all 0.3s ease 0s;
  }
  .con-6310-template-".esc_attr($templateId)."-counter-icon img{
    width: ".esc_attr($cssData['con_6310_icon_font_size'])."px;
    height: ".esc_attr($cssData['con_6310_icon_font_size'])."px;
  }
  .con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-counter-icon{
    color: ".esc_attr($cssData['con_6310_icon_hover_color']).";   
  }
  .con-6310-template-".esc_attr($templateId)."-counter-icon:before{
    content: '';
    width: 130%;
    height: 130%;
    border-radius: 50%;
    border: ".esc_attr($cssData['con_6310_icon_border_width'])."px solid ".esc_attr($cssData['con_6310_icon_background_border_color']).";
    position: absolute;
    top: 50%;
    left: 50%;
    z-index: -1;
    transform: translate(-50%,-50%);
  }
  .con-6310-template-".esc_attr($templateId)."-counter-icon:after{
    content: '';
    width: 10px;
    height: 100%;
    background: blueviolet;
    position: absolute;
    top: 100%;
    left: 50%;
    z-index: -1;
    transform: translatex(-50%);
  }
  .con-6310-template-".esc_attr($templateId)."-counter-content{
    float: left;
    width: 100%;
    height: calc(100% - ".esc_attr($cssData['con_6310_icon_box_size_number'])."px);
    padding: 25px 5px;
    margin: 0 5px;
    background:".esc_attr($cssData['con_6310_box_background_color']).";
    border: ".esc_attr($cssData['con_6310_box_border_width'])."px solid;
    border-radius: ".esc_attr($cssData['con_6310_box_radius'])."px;
    z-index: 1;
    position: relative;
    transition: all 0.3s ease 0s;
  }
  .con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-counter-content{
    background: ".esc_attr($cssData['con_6310_box_background_hover_color']).";
   
  }
  .con-6310-counter-".esc_attr($templateId)."-section{
    width: 100%;
    float: left;
  }
  .con-6310-template-".esc_attr($templateId)."-icon-wrapper {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100%;
}
.con-6310-template-".esc_attr($templateId)."-icon{
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 100%;
}
  .con-6310-template-".esc_attr($templateId)."-counter-value{
    width: auto !important;
    float: unset !important;
  }
  .con-6310-template-".esc_attr($templateId).":hover  .con-6310-template-".esc_attr($templateId)."-counter-icon{
    transform: rotateY(180deg);
  }
  @media only screen and (max-width: 990px){
    .con-6310-template-".esc_attr($templateId)."-counter{ margin-bottom: 20px; }
  }
  
";

for($i = 1; $i <= $cssData['desktop_item_per_row']; $i++) {
  $cssCode .= "
 
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-template-".esc_attr($templateId)."-counter-icon{
    background: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_box_border_color'])." !important;
  }
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-template-".esc_attr($templateId)."-counter-icon:after{
    background: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_box_border_color'])." !important;
  }
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-template-".esc_attr($templateId)."-counter-content{
    border-color: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_box_border_color'])." !important;
  }
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-template-".esc_attr($templateId)."-title{
    color: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_box_border_color'])."!important;
  }  
  ";
 
}

$cssCode .= "@media only screen and (max-width: 990px){";
for($i = 1; $i <= 4; $i++) {
  $cssCode .= "
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-4:nth-child(4n + {$i}) .con-6310-template-".esc_attr($templateId)."-counter-icon{
    background: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_box_border_color'])." !important;
  }
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-4:nth-child(4n + {$i}) .con-6310-template-".esc_attr($templateId)."-counter-icon:after{
    background: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_box_border_color'])." !important;
  }
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-4:nth-child(4n + {$i}) .con-6310-template-".esc_attr($templateId)."-counter-content{
    border-color: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_box_border_color'])." !important;
  }
  .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-4:nth-child(4n + {$i}) .con-6310-template-".esc_attr($templateId)."-title{
    color: ".esc_attr($cssData['con_6310_'.esc_attr($i).'_box_border_color'])." !important;
  }  
  ";
}
$cssCode .= "}";
$jsCode = "jQuery(document).ready(function(){jQuery('.con-6310-hide-title-hover-color').hide();});";
  wp_register_style( "con-6310-template-".esc_attr($templateId)."-css", '' );
  wp_enqueue_style( "con-6310-template-".esc_attr($templateId)."-css" );
  wp_add_inline_style( "con-6310-template-".esc_attr($templateId)."-css", $cssCode );
?>
