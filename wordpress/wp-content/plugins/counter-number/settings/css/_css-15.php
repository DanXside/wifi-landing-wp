<?php

$cssCode = "
.con-6310-template-".esc_attr($templateId)."{
  font-family: 'Amaranth', sans-serif;
  text-align: center;
  width: 100%;
  height: 100%;
  float: left;
  padding: 0 0 30px 7px;
  margin: 0 auto;
  border-radius: 50px 0 0;
  position: relative;
}
.con-6310-template-".esc_attr($templateId)."-counter-content::hover{
  background: yellow;
}
 .con-6310-template-".esc_attr($templateId).":before,
 .con-6310-template-".esc_attr($templateId).":after{
  content: '';
  background: linear-gradient(to right,#fd91e8,#fa2a89);
  height: 15px;
  width: 15px;
  border-radius: 50%;
  position: absolute;
  left: 0;
  bottom: 0;
  z-index: 1;
} 
.con-6310-template-".esc_attr($templateId).":after{
  background: #999;
  width: 90%;
  height: 8px;
  border-radius: 15px;
  left: auto;
  right: 0;
  bottom: 3px;
}
.con-6310-template-".esc_attr($templateId)."-counter-icon{
  color: ".esc_attr($cssData['con_6310_icon_color']).";
  background: linear-gradient(to right,#fd91e8,#fa2a89);
  font-size: ".esc_attr($cssData['con_6310_icon_font_size'])."px;
  width: calc(".esc_attr($cssData['con_6310_icon_font_size'])."px * 2);
  height: calc(".esc_attr($cssData['con_6310_icon_font_size'])."px * 2);
  margin: 0 auto;
  border: ".esc_attr($cssData['con_6310_icon_border_size'])."px solid ".esc_attr($cssData['con_6310_icon_border_color']).";
  border-radius: ".esc_attr($cssData['con_6310_icon_border_radius'])."px;
  position: relative;
  z-index: 1;
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 1;
}
.con-6310-template-".esc_attr($templateId)."-counter-icon img{
  width: ".esc_attr($cssData['con_6310_icon_font_size'])."px;
  height: ".esc_attr($cssData['con_6310_icon_font_size'])."px;
  border-radius: ".esc_attr($cssData['con_6310_icon_border_radius'])."px;
}
.con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-counter-icon{
  border-color: ".esc_attr($cssData['con_6310_icon_border_hover_color']).";
  color: ".esc_attr($cssData['con_6310_icon_hover_color']).";
}
.con-6310-template-".esc_attr($templateId)."-icon{ 
  transition: all 0.3s ease 0s;
 }
.con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-icon {
  transform: rotateY(360deg) rotateX(360deg);
}
.con-6310-template-".esc_attr($templateId)."-counter-content{
  color: #fff;
  background: linear-gradient(to right,#fd91e8,#fa2a89);
  padding: 45px 5px 20px;
  margin: -30px 0 0;
  border-radius: 50px 0;
  position: relative;
  float: left;
  width: 100%;
  height: calc(100% - ".esc_attr($cssData['con_6310_icon_font_size'])."px * 2 + 30px);
}

.con-6310-counter-".esc_attr($templateId)."-section{
    width: 100%;
    float: left;
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

";

for($i = 1; $i <= $cssData['desktop_item_per_row']; $i++) {
      $cssCode .= "     
      .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-template-".esc_attr($templateId).":before,
      .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-template-".esc_attr($templateId).":after{
            background: linear-gradient(to right,".esc_attr($cssData['con_6310_'.esc_attr($i).'_left_box_background_color']).",".esc_attr($cssData['con_6310_'.esc_attr($i).'_right_box_background_color']).");
      }
      .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-template-".esc_attr($templateId)."-counter-icon{
            background: linear-gradient(to right,".esc_attr($cssData['con_6310_'.esc_attr($i).'_left_box_background_color']).",".esc_attr($cssData['con_6310_'.esc_attr($i).'_right_box_background_color']).");
      }
      .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(".esc_attr($cssData['desktop_item_per_row'])."n + {$i}) .con-6310-template-".esc_attr($templateId)."-counter-content{
            background: linear-gradient(to right,".esc_attr($cssData['con_6310_'.esc_attr($i).'_left_box_background_color']).",".esc_attr($cssData['con_6310_'.esc_attr($i).'_right_box_background_color']).");
      }
      ";
     
    }
    
    $cssCode .= "@media only screen and (max-width: 990px){";
    for($i = 1; $i <= 4; $i++) {
      $cssCode .= "
      .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-4:nth-child(4n + {$i}) .con-6310-template-".esc_attr($templateId).":before,
      .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-4:nth-child(4n + {$i}) .con-6310-template-".esc_attr($templateId).":after{
            background: linear-gradient(to right,".esc_attr($cssData['con_6310_1_left_box_background_color']).",".esc_attr($cssData['con_6310_1_right_box_background_color']).");
      }
      .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-4:nth-child(4n + {$i}) .con-6310-template-".esc_attr($templateId)."-counter-icon{
            background: linear-gradient(to right,".esc_attr($cssData['con_6310_1_left_box_background_color']).",".esc_attr($cssData['con_6310_1_right_box_background_color']).");
      }
      .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-4:nth-child(4n + {$i}) .con-6310-template-".esc_attr($templateId)."-counter-content{
            background: linear-gradient(to right,".esc_attr($cssData['con_6310_1_left_box_background_color']).",".esc_attr($cssData['con_6310_1_right_box_background_color']).");
      }
      ";
    }
    $cssCode .= "}";

  wp_register_style( "con-6310-template-".esc_attr($templateId)."-css", '' );
  wp_enqueue_style( "con-6310-template-".esc_attr($templateId)."-css" );
  wp_add_inline_style( "con-6310-template-".esc_attr($templateId)."-css", $cssCode );
?>
