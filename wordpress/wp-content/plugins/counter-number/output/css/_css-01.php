<?php

$cssCode = "
.con-6310-template-".esc_attr($ids)."-common-overlay{
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  width: 100%;
}
.con-6310-template-".esc_attr($ids).", .con-6310-template-".esc_attr($ids)."-main-wrapper{
  float: left;
  width: 100%;
  height: 100%;
}
.con-6310-template-".esc_attr($ids)."-wrapper{
  display: flex;
  width: 100%;
  height: 100%;
  float: left;
  box-shadow: 0px 0px ".esc_attr($cssData['con_6310_box_shadow_blur'])."px ".esc_attr($cssData['con_6310_box_shadow_width'])."px ".esc_attr($cssData['con_6310_box_shadow_color']).";
}
.con-6310-template-".esc_attr($ids).":hover .con-6310-template-".esc_attr($ids)."-icon{
  transform: rotate(360deg);
}
.con-6310-template-".esc_attr($ids)."-wrapper:hover{
  display: flex;
  width: 100%;
  height: 100%;
  float: left;
  box-shadow: 0px 0px ".esc_attr($cssData['con_6310_box_shadow_blur'])."px ".esc_attr($cssData['con_6310_box_shadow_width'])."px ".esc_attr($cssData['con_6310_box_shadow_hover_color']).";
}
.con-6310-template-".esc_attr($ids)."-left-section{
  float: left;
  width: 50%;
  background-repeat: no-repeat !important;
  background-size: cover !important;
  position: relative;
  background-position: center !important;
}
.con-6310-template-".esc_attr($ids)."-right-section {
  float: left;
  box-sizing: border-box;
  display: flex;
  padding: 4px; 
  flex-direction: column;
  justify-content: center;
  align-items: center;
  width: 50%;
  background-color: ".esc_attr($cssData['con_6310_box_background_color']).";
}
.con-6310-template-".esc_attr($ids)."-wrapper:hover .con-6310-template-".esc_attr($ids)."-right-section{
  background-color: ".esc_attr($cssData['con_6310_box_background_hover_color']).";
}
.con-6310-template-".esc_attr($ids)."-icon {
  float: left;
  width: 100%;
  text-align: center;
  color: rgb(192, 199, 207);
  font-size: 32px;
  width: 32px;
  height: 32px;
  transition: all .5s ease-in;
}
.con-6310-template-".esc_attr($ids)."-icon img{
  width: 100%;
}
.con-6310-template-".esc_attr($ids)."-title{
  color: #fff ;
}
.con-6310-template-".esc_attr($ids).":hover .con-6310-template-".esc_attr($ids)."-title {
  color: #000;   
}
.con-6310-template-".esc_attr($ids)."-wrapper:hover .con-6310-template-".esc_attr($ids)."-icon {
  color:rgb(0, 0, 0);
}
.con-6310-template-".esc_attr($ids)."-icon-wrapper {
  float: left;
  width: 100%;
  display: flex;
  justify-content: center;
  margin-top: ".esc_attr($cssData['con_6310_icon_margin_top'])."px;
  margin-bottom: ".esc_attr($cssData['con_6310_icon_margin_bottom'])."px;
}
.con-6310-template-".esc_attr($ids)."-icon img {
  width: 100%;
  height: auto;
}
.con-6310-template-".esc_attr($ids)."-left-section::before{
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
.con-6310-template-".esc_attr($ids)."-wrapper:hover .con-6310-template-".esc_attr($ids)."-left-section::before{
  transform: scale(1) translateZ(0);
  opacity: 1;
  visibility: visible;
}
.con-6310-template-".esc_attr($ids)."-wrapper:hover .con-6310-template-".esc_attr($ids)."-description{
  color:rgb(22 18 18);;
}
@media only screen and (max-width: 600px){
  .con-6310-template-".esc_attr($ids)."-wrapper{
    flex-direction: column;
    width: 100%;
  }
  .con-6310-template-".esc_attr($ids)."-left-section{
    height: 30vh;
    width: 100%;
  }
  .con-6310-template-".esc_attr($ids)."-right-section{
    width: 100%;
  }
  
} 
  ";

  wp_register_style( "con-6310-template-".esc_attr($ids)."-css", "" );
  wp_enqueue_style( "con-6310-template-".esc_attr($ids)."-css" );
  wp_add_inline_style( "con-6310-template-".esc_attr($ids)."-css", $cssCode );
?>
