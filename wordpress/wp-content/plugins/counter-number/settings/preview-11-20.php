<?php
if (!defined('ABSPATH'))
  exit;
if (!current_user_can('edit_others_pages')) {
  wp_die(__('You do not have sufficient permissions to access this page.'));
}

if (!empty($_POST['submit']) && $_POST['submit'] == 'Save' && $_POST['style'] != '') {
  $nonce = $_REQUEST['_wpnonce'];
  if (!wp_verify_nonce($nonce, 'con-6310-nonce-field')) {
    die('You do not have sufficient permissions to access this page.');
  } else {
    $name = sanitize_text_field($_POST['style_name']);
    $style_name = sanitize_text_field($_POST['style']);
    if ($_POST['style'] == 'template-11') {
      $css = "_wp_http_referer,id,desktop_item_per_row,tablet_item_per_row,mobile_item_per_row,background_type,background_transparent,template_background_color,box_background_image,image_opacity,youtube_video_url,video_opacity,video_opacity_color,animation_duration,thousands_separator,item_margin,con_6310_box_background_color,con_6310_box_background_hover_color,con_6310_1_background_color,con_6310_2_background_color,con_6310_3_background_color,con_6310_4_background_color,con_6310_5_background_color,con_6310_6_background_color,con_6310_title_font_size,con_6310_title_line_height,con_6310_title_font_color,con_6310_title_font_hover_color,con_6310_title_font_weight,con_6310_title_text_transform,con_6310_title_text_align,con_6310_title_font_family,con_6310_title_padding_top,con_6310_title_padding_bottom,con_6310_icon_font_size,con_6310_icon_margin_top,con_6310_icon_margin_bottom,con_6310_number_font_size,con_6310_number_line_height,con_6310_number_font_color,con_6310_number_font_hover_color,con_6310_number_font_weight,con_6310_number_font_family,con_6310_number_margin_left,con_6310_number_margin_right,con_6310_number_margin_top,con_6310_number_margin_bottom,con_6310_number_prefix_font_size,con_6310_number_prefix_font_color,con_6310_number_prefix_font_hover_color,con_6310_number_prefix_font_weight,con_6310_number_prefix_font_family,con_6310_number_prefix_position,con_6310_number_prefix_margin_left,con_6310_number_prefix_margin_right,con_6310_number_suffix_font_size,con_6310_number_suffix_font_color,con_6310_number_suffix_font_hover_color,con_6310_number_suffix_font_weight,con_6310_number_suffix_font_family,con_6310_number_suffix_position,con_6310_number_suffix_margin_left,con_6310_number_suffix_margin_right,con_6310_fun_template_button,con_6310_read_more_height,con_6310_read_more_width,con_6310_read_more_font_size,con_6310_read_more_font_color,con_6310_read_more_font_hover_color,con_6310_read_more_border_width,con_6310_read_more_box_border_color,con_6310_read_more_border_hover_color,con_6310_read_more_border_radius,con_6310_read_more_background_color,con_6310_read_more_background_hover_color,con_6310_read_more_font_weight,con_6310_read_more_text_transform,con_6310_read_more_text_align,con_6310_read_more_font_family,con_6310_read_more_margin_top,con_6310_read_more_margin_bottom,custom_css,template_details_show_hide,con_6310_details_font_size,con_6310_details_line_height,con_6310_details_font_color,con_6310_details_font_hover_color,con_6310_details_font_weight,con_6310_details_text_transform,con_6310_details_text_align,con_6310_details_font_family,con_6310_details_margin_top,con_6310_details_margin_bottom,update_style_change!!##!!/wordpress-pro/wp-admin/admin.php?page=con-6310-template-11-20&styleid=11||##||11||##||3||##||1||##||1||##||2||##||transparent||##||rgba(214, 214, 214, 0.88)||##||http://localhost/wordpress-pro/wp-content/uploads/2022/02/depositphotos_42324601-stock-photo-green-nature-background.jpg||##||rgba(255, 255, 255, 0)||##||https://www.youtube.com/watch?v=1Ktb3bj-Exg||##||.7||##||rgba(255, 255, 255, 0)||##||500||##||,||##||15||##||rgba(252, 252, 252, 1)||##||rgba(252, 252, 252, 1)||##||rgba(46, 128, 21, 1)||##||rgba(18, 0, 107, 0.82)||##||rgba(125, 4, 4, 0.81)||##||rgba(0, 128, 128, 0.91)||##||rgba(140, 7, 91, 0.96)||##||rgba(157, 0, 168, 0.97)||##||20||##||25||##||rgb(155, 3, 3)||##||rgb(48, 48, 48)||##||600||##||uppercase||##||center||##||Cabin||##||10||##||10||##||50||##||5||##||5||##||40||##||20||##||rgb(255, 255, 255)||##||rgb(0, 0, 0)||##||600||##||Amaranth||##||0||##||1||##||10||##||10||##||20||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||Amaranth||##||2||##||0||##||0||##||20||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||Amaranth||##||2||##||0||##||0||##||1||##||28||##||100||##||14||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||0||##||rgb(0, 38, 85)||##||rgb(255, 255, 255)||##||0||##||rgb(0, 38, 85)||##||rgb(68, 56, 201)||##||600||##||capitalize||##||center||##||Arimo||##||5||##||5||##||||##||1||##||15||##||18||##||rgb(28, 28, 28)||##||rgb(0, 107, 82)||##||600||##||capitalize||##||center||##||Arimo||##||10||##||5||##||Save";
    } else if ($_POST['style'] == 'template-12') {
      $css = "_wp_http_referer,id,desktop_item_per_row,tablet_item_per_row,mobile_item_per_row,background_type,background_transparent,template_background_color,box_background_image,image_opacity,youtube_video_url,video_opacity,video_opacity_color,animation_duration,thousands_separator,item_margin,con_6310_box_radius,con_6310_box_background_color,con_6310_box_background_hover_color,con_6310_box_shadow_width,con_6310_box_shadow_blur,con_6310_box_shadow_color,con_6310_box_shadow_hover_color,con_6310_box_outer_1_background,con_6310_box_outer_2_background,con_6310_box_outer_3_background,con_6310_box_outer_4_background,con_6310_box_outer_5_background,con_6310_box_outer_6_background,con_6310_title_font_size,con_6310_title_line_height,con_6310_title_font_color,con_6310_title_font_weight,con_6310_title_text_transform,con_6310_title_text_align,con_6310_title_font_family,con_6310_title_padding_top,con_6310_title_padding_bottom,con_6310_icon_font_size,con_6310_icon_color,con_6310_icon_hover_color,con_6310_icon_margin_top,con_6310_icon_margin_bottom,con_6310_number_font_size,con_6310_number_line_height,con_6310_number_font_color,con_6310_number_font_hover_color,con_6310_number_font_weight,con_6310_number_font_family,con_6310_number_margin_left,con_6310_number_margin_right,con_6310_number_margin_top,con_6310_number_margin_bottom,con_6310_number_prefix_font_size,con_6310_number_prefix_font_color,con_6310_number_prefix_font_hover_color,con_6310_number_prefix_font_weight,con_6310_number_prefix_font_family,con_6310_number_prefix_position,con_6310_number_prefix_margin_left,con_6310_number_prefix_margin_right,con_6310_number_suffix_font_size,con_6310_number_suffix_font_color,con_6310_number_suffix_font_hover_color,con_6310_number_suffix_font_weight,con_6310_number_suffix_font_family,con_6310_number_suffix_position,con_6310_number_suffix_margin_left,con_6310_number_suffix_margin_right,con_6310_fun_template_button,con_6310_read_more_height,con_6310_read_more_width,con_6310_read_more_font_size,con_6310_read_more_font_color,con_6310_read_more_font_hover_color,con_6310_read_more_border_width,con_6310_read_more_box_border_color,con_6310_read_more_border_hover_color,con_6310_read_more_border_radius,con_6310_read_more_background_color,con_6310_read_more_background_hover_color,con_6310_read_more_font_weight,con_6310_read_more_text_transform,con_6310_read_more_text_align,con_6310_read_more_font_family,con_6310_read_more_margin_top,con_6310_read_more_margin_bottom,custom_css,template_details_show_hide,con_6310_details_font_size,con_6310_details_line_height,con_6310_details_font_color,con_6310_details_font_hover_color,con_6310_details_font_weight,con_6310_details_text_transform,con_6310_details_text_align,con_6310_details_font_family,con_6310_details_margin_top,con_6310_details_margin_bottom,update_style_change!!##!!/wordpress-pro/wp-admin/admin.php?page=con-6310-template-11-20&styleid=12||##||12||##||3||##||1||##||1||##||2||##||transparent||##||rgba(168, 168, 168, 0.88)||##||http://localhost/wordpress-pro/wp-content/uploads/2022/02/pexels-sohail-na-807598-scaled.jpg||##||rgba(255, 255, 255, 0)||##||||##||.7||##||rgba(255, 255, 255, 0)||##||500||##||,||##||15||##||0||##||rgba(255, 255, 255, 1)||##||rgba(255, 255, 255, 1)||##||0||##||0||##||rgba(0, 0, 0, 0.82)||##||rgba(45, 116, 196, 0.81)||##||rgba(0, 196, 134, 1)||##||rgba(0, 113, 130, 1)||##||rgba(209, 19, 133, 1)||##||rgba(149, 2, 186, 1)||##||rgba(0, 181, 9, 1)||##||rgba(247, 49, 0, 1)||##||18||##||0||##||rgb(0, 0, 138)||##||600||##||uppercase||##||center||##||PT+Sans||##||15||##||20||##||40||##||rgb(77, 77, 77)||##||rgb(252, 174, 5)||##||10||##||10||##||35||##||20||##||rgb(56, 56, 56)||##||rgb(0, 194, 87)||##||600||##||Amaranth||##||0||##||0||##||5||##||10||##||20||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||Amaranth||##||2||##||0||##||0||##||20||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||Amaranth||##||2||##||0||##||0||##||1||##||24||##||94||##||14||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||0||##||rgb(16, 110, 73)||##||rgb(138, 14, 14)||##||0||##||rgb(0, 54, 115)||##||rgb(7, 138, 138)||##||400||##||capitalize||##||center||##||Open+Sans||##||5||##||0||##||||##||1||##||15||##||20||##||rgb(166, 0, 0)||##||rgb(0, 0, 0)||##||600||##||none||##||center||##||Open+Sans||##||5||##||5||##||Save";
    } else if ($_POST['style'] == 'template-13') {
      $css = "_wp_http_referer,id,desktop_item_per_row,tablet_item_per_row,mobile_item_per_row,background_type,background_transparent,template_background_color,box_background_image,image_opacity,youtube_video_url,video_opacity,video_opacity_color,animation_duration,thousands_separator,item_margin,con_6310_box_radius,con_6310_box_background_color,con_6310_box_background_hover_color,con_6310_box_shadow_width,con_6310_box_shadow_color,con_6310_box_shadow_blur,con_6310_box_shadow_hover_color,con_6310_border_size,con_6310_1_border_color,con_6310_2_border_color,con_6310_3_border_color,con_6310_4_border_color,con_6310_5_border_color,con_6310_6_border_color,con_6310_title_font_size,con_6310_title_line_height,con_6310_title_font_color,con_6310_title_font_hover_color,con_6310_title_font_weight,con_6310_title_text_transform,con_6310_title_text_align,con_6310_title_font_family,con_6310_title_padding_top,con_6310_title_padding_bottom,con_6310_icon_font_size,con_6310_icon_color,con_6310_icon_hover_color,con_6310_icon_margin_top,con_6310_icon_margin_bottom,con_6310_number_font_size,con_6310_number_line_height,con_6310_number_font_color,con_6310_number_font_hover_color,con_6310_number_font_weight,con_6310_number_font_family,con_6310_number_margin_left,con_6310_number_margin_right,con_6310_number_margin_top,con_6310_number_margin_bottom,con_6310_number_prefix_font_size,con_6310_number_prefix_font_color,con_6310_number_prefix_font_hover_color,con_6310_number_prefix_font_weight,con_6310_number_prefix_font_family,con_6310_number_prefix_position,con_6310_number_prefix_margin_left,con_6310_number_prefix_margin_right,con_6310_number_suffix_font_size,con_6310_number_suffix_font_color,con_6310_number_suffix_font_hover_color,con_6310_number_suffix_font_weight,con_6310_number_suffix_font_family,con_6310_number_suffix_position,con_6310_number_suffix_margin_left,con_6310_number_suffix_margin_right,con_6310_fun_template_button,con_6310_read_more_height,con_6310_read_more_width,con_6310_read_more_font_size,con_6310_read_more_font_color,con_6310_read_more_font_hover_color,con_6310_read_more_border_width,con_6310_read_more_box_border_color,con_6310_read_more_border_hover_color,con_6310_read_more_border_radius,con_6310_read_more_background_color,con_6310_read_more_background_hover_color,con_6310_read_more_font_weight,con_6310_read_more_text_transform,con_6310_read_more_text_align,con_6310_read_more_font_family,con_6310_read_more_margin_top,con_6310_read_more_margin_bottom,custom_css,template_details_show_hide,con_6310_details_font_size,con_6310_details_line_height,con_6310_details_font_color,con_6310_details_font_hover_color,con_6310_details_font_weight,con_6310_details_text_transform,con_6310_details_text_align,con_6310_details_font_family,con_6310_details_margin_top,con_6310_details_margin_bottom,update_style_change!!##!!/wordpress-pro/wp-admin/admin.php?page=con-6310-template-11-20&styleid=13||##||13||##||3||##||1||##||1||##||2||##||transparent||##||rgba(69, 69, 69, 0.9)||##||http://localhost/wordpress-pro/wp-content/uploads/2022/02/pexels-sohail-na-807598-scaled.jpg||##||rgba(117, 117, 117, 0.01)||##||https://www.youtube.com/watch?v=2Gg6Seob5Mg||##||1||##||rgba(255, 255, 255, 0)||##||500||##||,||##||15||##||25||##||rgba(242, 242, 242, 1)||##||rgba(245, 245, 245, 1)||##||0||##||rgba(199, 46, 37, 0.01)||##||0||##||rgba(0, 0, 0, 0.05)||##||4||##||rgba(22, 160, 133, 1)||##||rgba(212, 95, 0, 1)||##||rgba(43, 189, 38, 1)||##||rgba(18, 143, 168, 1)||##||rgba(214, 0, 118, 1)||##||rgba(102, 4, 4, 1)||##||20||##||20||##||rgb(255, 235, 59)||##||rgb(255, 255, 255)||##||600||##||uppercase||##||center||##||PT+Sans||##||5||##||0||##||30||##||rgb(255, 255, 255)||##||rgb(255, 235, 59)||##||10||##||10||##||35||##||15||##||rgb(41, 41, 41)||##||rgb(3, 176, 150)||##||600||##||Amaranth||##||5||##||5||##||10||##||20||##||20||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||Amaranth||##||2||##||0||##||0||##||20||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||Amaranth||##||2||##||0||##||0||##||1||##||28||##||110||##||16||##||rgb(252, 252, 252)||##||rgb(255, 255, 255)||##||0||##||rgb(0, 143, 77)||##||rgb(255, 255, 255)||##||5||##||rgb(0, 79, 143)||##||rgb(0, 143, 77)||##||100||##||capitalize||##||center||##||Arimo||##||0||##||10||##||||##||1||##||15||##||18||##||rgb(48, 48, 48)||##||rgb(96, 96, 97)||##||600||##||capitalize||##||center||##||Arimo||##||10||##||10||##||Save";
    } else if ($_POST['style'] == 'template-14') {
      $css = "_wp_http_referer,id,desktop_item_per_row,tablet_item_per_row,mobile_item_per_row,background_type,background_transparent,template_background_color,box_background_image,image_opacity,youtube_video_url,video_opacity,video_opacity_color,animation_duration,thousands_separator,item_margin,con_6310_box_background_color_top,con_6310_1_title_background_color_top,con_6310_1_title_background_color_bottom,con_6310_2_title_background_color_top,con_6310_2_title_background_color_bottom,con_6310_3_title_background_color_top,con_6310_3_title_background_color_bottom,con_6310_4_title_background_color_top,con_6310_4_title_background_color_bottom,con_6310_5_title_background_color_top,con_6310_5_title_background_color_bottom,con_6310_6_title_background_color_top,con_6310_6_title_background_color_bottom,con_6310_title_font_size,con_6310_title_line_height,con_6310_title_font_color,con_6310_title_font_hover_color,con_6310_title_font_weight,con_6310_title_text_transform,con_6310_title_text_align,con_6310_title_font_family,con_6310_title_padding_top,con_6310_title_padding_bottom,con_6310_icon_font_size,con_6310_icon_color,con_6310_icon_hover_color,con_6310_number_font_size,con_6310_number_line_height,con_6310_number_font_color,con_6310_number_font_hover_color,con_6310_number_font_weight,con_6310_number_font_family,con_6310_number_margin_left,con_6310_number_margin_right,con_6310_number_margin_top,con_6310_number_margin_bottom,con_6310_number_prefix_font_size,con_6310_number_prefix_font_color,con_6310_number_prefix_font_hover_color,con_6310_number_prefix_font_weight,con_6310_number_prefix_font_family,con_6310_number_prefix_position,con_6310_number_prefix_margin_left,con_6310_number_prefix_margin_right,con_6310_number_suffix_font_size,con_6310_number_suffix_font_color,con_6310_number_suffix_font_hover_color,con_6310_number_suffix_font_weight,con_6310_number_suffix_font_family,con_6310_number_suffix_position,con_6310_number_suffix_margin_left,con_6310_number_suffix_margin_right,con_6310_fun_template_button,con_6310_read_more_height,con_6310_read_more_width,con_6310_read_more_font_size,con_6310_read_more_font_color,con_6310_read_more_font_hover_color,con_6310_read_more_border_width,con_6310_read_more_box_border_color,con_6310_read_more_border_hover_color,con_6310_read_more_border_radius,con_6310_read_more_background_color,con_6310_read_more_background_hover_color,con_6310_read_more_font_weight,con_6310_read_more_text_transform,con_6310_read_more_text_align,con_6310_read_more_font_family,con_6310_read_more_margin_top,con_6310_read_more_margin_bottom,custom_css,template_details_show_hide,con_6310_details_font_size,con_6310_details_line_height,con_6310_details_font_color,con_6310_details_font_hover_color,con_6310_details_font_weight,con_6310_details_text_transform,con_6310_details_text_align,con_6310_details_font_family,con_6310_details_margin_top,con_6310_details_margin_bottom,update_style_change!!##!!/wordpress-pro/wp-admin/admin.php?page=con-6310-template-11-20&styleid=14||##||14||##||3||##||1||##||1||##||2||##||transparent||##||rgba(227, 227, 227, 1)||##||http://localhost/wordpress-pro/wp-content/uploads/2022/02/pexels-eberhard-grossgasteiger-454880-scaled.jpg||##||rgba(255, 255, 255, 0)||##||||##||.7||##||rgba(255, 255, 255, 0)||##||500||##||,||##||15||##||rgba(255, 255, 255, 1)||##||rgba(232, 47, 37, 1)||##||rgba(82, 4, 0, 1)||##||rgba(55, 232, 203, 1)||##||rgba(0, 87, 73, 1)||##||rgba(176, 35, 171, 1)||##||rgba(77, 19, 63, 1)||##||rgba(83, 0, 184, 0.81)||##||rgba(242, 83, 184, 1)||##||rgba(36, 224, 127, 1)||##||rgba(176, 0, 106, 0.85)||##||rgba(0, 167, 218, 1)||##||rgba(0, 71, 99, 1)||##||16||##||35||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||600||##||uppercase||##||center||##||Arimo||##||0||##||0||##||36||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||40||##||40||##||rgb(48, 48, 48)||##||rgb(204, 43, 43)||##||600||##||Amaranth||##||5||##||5||##||5||##||5||##||20||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||Amaranth||##||2||##||0||##||0||##||20||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||Amaranth||##||2||##||0||##||0||##||1||##||25||##||100||##||15||##||rgb(255, 255, 255)||##||rgb(247, 247, 247)||##||2px||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||0||##||rgb(0, 70, 128)||##||rgb(12, 158, 148)||##||300||##||capitalize||##||center||##||Amaranth||##||5||##||15||##||||##||1||##||15||##||18||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||400||##||capitalize||##||center||##||Arimo||##||10||##||10||##||Save";
    } else if ($_POST['style'] == 'template-15') {
      $css = "_wp_http_referer,id,desktop_item_per_row,tablet_item_per_row,mobile_item_per_row,background_type,background_transparent,template_background_color,box_background_image,image_opacity,youtube_video_url,video_opacity,video_opacity_color,animation_duration,thousands_separator,item_margin,con_6310_1_left_box_background_color,con_6310_1_right_box_background_color,con_6310_2_left_box_background_color,con_6310_2_right_box_background_color,con_6310_3_left_box_background_color,con_6310_3_right_box_background_color,con_6310_4_left_box_background_color,con_6310_4_right_box_background_color,con_6310_5_left_box_background_color,con_6310_5_right_box_background_color,con_6310_6_left_box_background_color,con_6310_6_right_box_background_color,con_6310_title_font_size,con_6310_title_line_height,con_6310_title_font_color,con_6310_title_font_hover_color,con_6310_title_font_weight,con_6310_title_text_transform,con_6310_title_text_align,con_6310_title_font_family,con_6310_title_padding_top,con_6310_title_padding_bottom,con_6310_icon_font_size,con_6310_icon_color,con_6310_icon_hover_color,con_6310_icon_border_radius,con_6310_icon_border_size,con_6310_icon_border_color,con_6310_icon_border_hover_color,con_6310_number_font_size,con_6310_number_line_height,con_6310_number_font_color,con_6310_number_font_hover_color,con_6310_number_font_weight,con_6310_number_font_family,con_6310_number_margin_left,con_6310_number_margin_right,con_6310_number_margin_top,con_6310_number_margin_bottom,con_6310_number_prefix_font_size,con_6310_number_prefix_font_color,con_6310_number_prefix_font_hover_color,con_6310_number_prefix_font_weight,con_6310_number_prefix_font_family,con_6310_number_prefix_position,con_6310_number_prefix_margin_left,con_6310_number_prefix_margin_right,con_6310_number_suffix_font_size,con_6310_number_suffix_font_color,con_6310_number_suffix_font_hover_color,con_6310_number_suffix_font_weight,con_6310_number_suffix_font_family,con_6310_number_suffix_position,con_6310_number_suffix_margin_left,con_6310_number_suffix_margin_right,con_6310_fun_template_button,con_6310_read_more_height,con_6310_read_more_width,con_6310_read_more_font_size,con_6310_read_more_font_color,con_6310_read_more_font_hover_color,con_6310_read_more_border_width,con_6310_read_more_box_border_color,con_6310_read_more_border_hover_color,con_6310_read_more_border_radius,con_6310_read_more_background_color,con_6310_read_more_background_hover_color,con_6310_read_more_font_weight,con_6310_read_more_text_transform,con_6310_read_more_text_align,con_6310_read_more_font_family,con_6310_read_more_margin_top,con_6310_read_more_margin_bottom,custom_css,template_details_show_hide,con_6310_details_font_size,con_6310_details_line_height,con_6310_details_font_color,con_6310_details_font_hover_color,con_6310_details_font_weight,con_6310_details_text_transform,con_6310_details_text_align,con_6310_details_font_family,con_6310_details_margin_top,con_6310_details_margin_bottom,update_style_change!!##!!/wordpress-pro/wp-admin/admin.php?page=con-6310-template-11-20&styleid=15||##||15||##||3||##||1||##||1||##||4||##||transparent||##||rgba(255, 255, 255, 0)||##||https://pluginsbd.com/wp-content/project-images/counter-number/1.jpg||##||rgba(255, 255, 255, 0)||##||https://www.youtube.com/watch?v=2Gg6Seob5Mg||##||.7||##||rgba(255, 255, 255, 0)||##||500||##||,||##||15||##||rgba(70, 250, 178, 1)||##||rgba(0, 51, 33, 1)||##||rgba(199, 10, 54, 1)||##||rgba(236, 190, 52, 1)||##||rgba(10, 163, 201, 1)||##||rgba(0, 29, 36, 1)||##||rgba(199, 10, 54, 1)||##||rgba(236, 190, 52, 1)||##||rgba(166, 7, 89, 1)||##||rgba(74, 230, 136, 1)||##||rgba(255, 0, 0, 1)||##||rgba(166, 0, 255, 1)||##||19||##||22||##||rgb(247, 247, 247)||##||rgb(0, 0, 0)||##||600||##||uppercase||##||center||##||Shanti||##||6||##||10||##||40||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||50||##||3||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||35||##||36||##||rgb(255, 255, 255)||##||rgb(13, 13, 13)||##||600||##||Amaranth||##||5||##||5||##||0||##||10||##||20||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||Amaranth||##||2||##||0||##||0||##||20||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||Amaranth||##||2||##||0||##||0||##||1||##||25||##||105||##||16||##||rgb(10, 45, 67)||##||rgb(10, 45, 67)||##||2px||##||rgb(10, 45, 67)||##||rgb(10, 45, 67)||##||1||##||rgb(202, 239, 209)||##||rgb(147, 250, 171)||##||600||##||capitalize||##||center||##||Arimo||##||5||##||5||##||||##||1||##||15||##||19||##||rgb(237, 237, 237)||##||rgb(5, 5, 5)||##||600||##||capitalize||##||center||##||Arimo||##||2||##||6||##||Save";
    } else if ($_POST['style'] == 'template-16') {
      $css = "_wp_http_referer,id,desktop_item_per_row,tablet_item_per_row,mobile_item_per_row,background_type,background_transparent,template_background_color,box_background_image,image_opacity,youtube_video_url,video_opacity,video_opacity_color,animation_duration,thousands_separator,item_margin,con_6310_box_radius,con_6310_border_size,con_6310_border_color,con_6310_border_hover_color,con_6310_1_box_background_color,con_6310_2_box_background_color,con_6310_3_box_background_color,con_6310_4_box_background_color,con_6310_5_box_background_color,con_6310_6_box_background_color,con_6310_outer_box_background_color,con_6310_title_font_size,con_6310_title_line_height,con_6310_title_font_color,con_6310_title_font_hover_color,con_6310_title_font_weight,con_6310_title_text_transform,con_6310_title_text_align,con_6310_title_font_family,con_6310_title_padding_top,con_6310_title_padding_bottom,con_6310_icon_font_size,con_6310_icon_color,con_6310_icon_hover_color,con_6310_icon_margin_top,con_6310_icon_margin_bottom,con_6310_number_font_size,con_6310_number_line_height,con_6310_number_font_color,con_6310_number_font_hover_color,con_6310_number_font_weight,con_6310_number_font_family,con_6310_number_margin_left,con_6310_number_margin_right,con_6310_number_margin_top,con_6310_number_margin_bottom,con_6310_number_prefix_font_size,con_6310_number_prefix_font_color,con_6310_number_prefix_font_hover_color,con_6310_number_prefix_font_weight,con_6310_number_prefix_font_family,con_6310_number_prefix_position,con_6310_number_prefix_margin_left,con_6310_number_prefix_margin_right,con_6310_number_suffix_font_size,con_6310_number_suffix_font_color,con_6310_number_suffix_font_hover_color,con_6310_number_suffix_font_weight,con_6310_number_suffix_font_family,con_6310_number_suffix_position,con_6310_number_suffix_margin_left,con_6310_number_suffix_margin_right,con_6310_fun_template_button,con_6310_read_more_height,con_6310_read_more_width,con_6310_read_more_font_size,con_6310_read_more_font_color,con_6310_read_more_font_hover_color,con_6310_read_more_border_width,con_6310_read_more_box_border_color,con_6310_read_more_border_hover_color,con_6310_read_more_border_radius,con_6310_read_more_background_color,con_6310_read_more_background_hover_color,con_6310_read_more_font_weight,con_6310_read_more_text_transform,con_6310_read_more_text_align,con_6310_read_more_font_family,con_6310_read_more_margin_top,con_6310_read_more_margin_bottom,custom_css,template_details_show_hide,con_6310_details_font_size,con_6310_details_line_height,con_6310_details_font_color,con_6310_details_font_hover_color,con_6310_details_font_weight,con_6310_details_text_transform,con_6310_details_text_align,con_6310_details_font_family,con_6310_details_margin_top,con_6310_details_margin_bottom,update_style_change!!##!!/wordpress-pro/wp-admin/admin.php?page=con-6310-template-11-20&styleid=16||##||16||##||3||##||1||##||1||##||2||##||transparent||##||rgba(219, 219, 219, 1)||##||||##||rgba(255, 255, 255, 0)||##||https://www.youtube.com/watch?v=ZWT6qRWoWgg||##||1||##||rgba(0, 0, 0, 0.75)||##||500||##||,||##||15||##||20||##||5||##||rgba(255, 255, 255, 1)||##||rgba(255, 255, 255, 0.99)||##||rgba(0, 148, 141, 1)||##||rgba(255, 114, 33, 1)||##||rgba(0, 170, 204, 1)||##||rgba(245, 79, 93, 1)||##||rgba(25, 204, 111, 1)||##||rgba(191, 21, 191, 1)||##||rgba(6, 51, 77, 1)||##||20||##||26||##||rgb(255, 255, 255)||##||rgb(0, 55, 117)||##||600||##||uppercase||##||center||##||Shanti||##||20||##||5||##||40||##||rgb(36, 36, 36)||##||rgb(255, 255, 255)||##||10||##||0||##||35||##||20||##||rgb(46, 46, 46)||##||rgb(0, 73, 122)||##||100||##||Amaranth||##||0||##||0||##||6||##||6||##||20||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||Amaranth||##||2||##||0||##||0||##||20||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||Amaranth||##||2||##||0||##||0||##||1||##||25||##||100||##||15||##||rgb(255, 255, 255)||##||rgb(0, 51, 114)||##||0||##||rgb(31, 31, 31)||##||rgb(255, 13, 0)||##||0||##||rgb(0, 78, 117)||##||rgb(95, 253, 135)||##||100||##||capitalize||##||center||##||Amaranth||##||5||##||10||##||||##||1||##||16||##||19||##||rgb(250, 250, 250)||##||rgb(10, 10, 10)||##||500||##||capitalize||##||center||##||Amaranth||##||2||##||5||##||Save";
    } else if ($_POST['style'] == 'template-17') {
      $css = "_wp_http_referer,id,desktop_item_per_row,tablet_item_per_row,mobile_item_per_row,background_type,background_transparent,template_background_color,box_background_image,image_opacity,youtube_video_url,video_opacity,video_opacity_color,animation_duration,thousands_separator,item_margin,con_6310_box_radius,con_6310_border_size,con_6310_border_color,con_6310_border_hover_color,con_6310_1_box_background_color,con_6310_2_box_background_color,con_6310_3_box_background_color,con_6310_4_box_background_color,con_6310_5_box_background_color,con_6310_6_box_background_color,con_6310_box_hover_background_color,con_6310_box_shadow_width,con_6310_box_shadow_blur,con_6310_box_shadow_color,con_6310_box_shadow_hover_color,con_6310_title_font_size,con_6310_title_line_height,con_6310_title_font_color,con_6310_title_font_hover_color,con_6310_title_font_weight,con_6310_title_text_transform,con_6310_title_text_align,con_6310_title_font_family,con_6310_title_padding_top,con_6310_title_padding_bottom,con_6310_icon_font_size,con_6310_icon_color,con_6310_icon_hover_color,con_6310_icon_margin_top,con_6310_icon_margin_bottom,con_6310_number_font_size,con_6310_number_line_height,con_6310_number_font_color,con_6310_number_font_hover_color,con_6310_number_font_weight,con_6310_number_font_family,con_6310_number_margin_left,con_6310_number_margin_right,con_6310_number_margin_top,con_6310_number_margin_bottom,con_6310_number_prefix_font_size,con_6310_number_prefix_font_color,con_6310_number_prefix_font_hover_color,con_6310_number_prefix_font_weight,con_6310_number_prefix_font_family,con_6310_number_prefix_position,con_6310_number_prefix_margin_left,con_6310_number_prefix_margin_right,con_6310_number_suffix_font_size,con_6310_number_suffix_font_color,con_6310_number_suffix_font_hover_color,con_6310_number_suffix_font_weight,con_6310_number_suffix_font_family,con_6310_number_suffix_position,con_6310_number_suffix_margin_left,con_6310_number_suffix_margin_right,con_6310_fun_template_button,con_6310_read_more_height,con_6310_read_more_width,con_6310_read_more_font_size,con_6310_read_more_font_color,con_6310_read_more_font_hover_color,con_6310_read_more_border_width,con_6310_read_more_box_border_color,con_6310_read_more_border_hover_color,con_6310_read_more_border_radius,con_6310_read_more_background_color,con_6310_read_more_background_hover_color,con_6310_read_more_font_weight,con_6310_read_more_text_transform,con_6310_read_more_text_align,con_6310_read_more_font_family,con_6310_read_more_margin_top,con_6310_read_more_margin_bottom,custom_css,template_details_show_hide,con_6310_details_font_size,con_6310_details_line_height,con_6310_details_font_color,con_6310_details_font_hover_color,con_6310_details_font_weight,con_6310_details_text_transform,con_6310_details_text_align,con_6310_details_font_family,con_6310_details_margin_top,con_6310_details_margin_bottom,update_style_change!!##!!/wordpress-pro/wp-admin/admin.php?page=con-6310-template-11-20&styleid=17||##||17||##||3||##||1||##||1||##||1||##||transparent||##||rgba(255, 255, 255, 0)||##||||##||rgba(255, 255, 255, 0)||##||||##||.7||##||rgba(255, 255, 255, 0)||##||500||##||,||##||15||##||0||##||0||##||rgba(1, 79, 82, 0.01)||##||rgba(0, 0, 0, 0.01)||##||rgba(31, 207, 166, 1)||##||rgba(235, 107, 3, 1)||##||rgba(5, 138, 158, 1)||##||rgba(250, 72, 63, 1)||##||rgba(39, 209, 73, 1)||##||rgba(145, 27, 209, 1)||##||rgba(53, 227, 122, 1)||##||0||##||0||##||rgba(31, 207, 166, 1)||##||rgba(15, 14, 14, 0.01)||##||20||##||25||##||rgb(255, 255, 255)||##||rgb(250, 253, 255)||##||100||##||uppercase||##||center||##||Amaranth||##||15||##||0||##||36||##||rgb(10, 10, 10)||##||rgb(3, 39, 140)||##||5||##||5||##||40||##||36||##||rgb(255, 255, 255)||##||rgb(145, 6, 6)||##||100||##||Amaranth||##||5||##||5||##||15||##||0||##||20||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||Amaranth||##||2||##||0||##||0||##||20||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||Amaranth||##||2||##||0||##||0||##||1||##||25||##||100||##||16||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||2px||##||rgb(255, 255, 255)||##||rgb(1, 80, 79)||##||0||##||rgb(28, 28, 28)||##||rgb(1, 80, 79)||##||100||##||capitalize||##||center||##||Amaranth||##||5||##||0||##||||##||1||##||15||##||20||##||rgb(255, 255, 255)||##||rgb(0, 0, 0)||##||500||##||capitalize||##||center||##||Arimo||##||10||##||10||##||Save";
    } else if ($_POST['style'] == 'template-18') {
      $css = "_wp_http_referer,id,desktop_item_per_row,tablet_item_per_row,mobile_item_per_row,background_type,background_transparent,template_background_color,box_background_image,image_opacity,youtube_video_url,video_opacity,video_opacity_color,animation_duration,thousands_separator,item_margin,con_6310_1_box_background_left,con_6310_1_box_background_right,con_6310_2_box_background_left,con_6310_2_box_background_right,con_6310_3_box_background_left,con_6310_3_box_background_right,con_6310_4_box_background_left,con_6310_4_box_background_right,con_6310_5_box_background_left,con_6310_5_box_background_right,con_6310_6_box_background_left,con_6310_6_box_background_right,box_background_hover_color,con_6310_title_font_size,con_6310_title_line_height,con_6310_title_font_color,con_6310_title_font_hover_color,con_6310_title_font_weight,con_6310_title_text_transform,con_6310_title_text_align,con_6310_title_font_family,con_6310_title_padding_top,con_6310_title_padding_bottom,con_6310_icon_font_size,con_6310_icon_color,con_6310_icon_hover_color,con_6310_icon_margin_top,con_6310_icon_margin_bottom,con_6310_number_font_size,con_6310_number_line_height,con_6310_number_font_color,con_6310_number_font_hover_color,con_6310_number_font_weight,con_6310_number_font_family,con_6310_number_margin_left,con_6310_number_margin_right,con_6310_number_margin_top,con_6310_number_margin_bottom,con_6310_number_prefix_font_size,con_6310_number_prefix_font_color,con_6310_number_prefix_font_hover_color,con_6310_number_prefix_font_weight,con_6310_number_prefix_font_family,con_6310_number_prefix_position,con_6310_number_prefix_margin_left,con_6310_number_prefix_margin_right,con_6310_number_suffix_font_size,con_6310_number_suffix_font_color,con_6310_number_suffix_font_hover_color,con_6310_number_suffix_font_weight,con_6310_number_suffix_font_family,con_6310_number_suffix_position,con_6310_number_suffix_margin_left,con_6310_number_suffix_margin_right,con_6310_fun_template_button,con_6310_read_more_height,con_6310_read_more_width,con_6310_read_more_font_size,con_6310_read_more_font_color,con_6310_read_more_font_hover_color,con_6310_read_more_border_width,con_6310_read_more_box_border_color,con_6310_read_more_border_hover_color,con_6310_read_more_border_radius,con_6310_read_more_background_color,con_6310_read_more_background_hover_color,con_6310_read_more_font_weight,con_6310_read_more_text_transform,con_6310_read_more_text_align,con_6310_read_more_font_family,con_6310_read_more_margin_top,con_6310_read_more_margin_bottom,custom_css,template_details_show_hide,con_6310_details_font_size,con_6310_details_line_height,con_6310_details_font_color,con_6310_details_font_hover_color,con_6310_details_font_weight,con_6310_details_text_transform,con_6310_details_text_align,con_6310_details_font_family,con_6310_details_margin_top,con_6310_details_margin_bottom,update_style_change!!##!!/wordpress-pro/wp-admin/admin.php?page=con-6310-template-11-20&styleid=18||##||18||##||3||##||1||##||1||##||3||##||transparent||##||rgba(255, 255, 255, 0)||##||https://pluginsbd.com/wp-content/project-images/counter-number/10.jpg||##||rgba(0, 0, 0, 0.32)||##||||##||.7||##||rgba(255, 255, 255, 0)||##||500||##||,||##||15||##||rgba(36, 2, 0, 1)||##||rgba(255, 75, 66, 1)||##||rgba(255, 20, 114, 1)||##||rgba(0, 0, 0, 1)||##||rgba(25, 204, 168, 1)||##||rgba(0, 28, 64, 1)||##||rgba(255, 0, 0, 0.87)||##||rgba(255, 187, 0, 1)||##||rgba(0, 91, 99, 0.93)||##||rgba(167, 2, 173, 0.98)||##||rgba(75, 179, 27, 0.81)||##||rgba(130, 0, 0, 0.94)||##||rgba(1, 36, 64, 1)||##||20||##||34||##||rgb(0, 0, 0)||##||rgb(0, 0, 0)||##||600||##||uppercase||##||center||##||Shanti||##||2||##||2||##||36||##||rgb(255, 255, 255)||##||rgb(230, 221, 92)||##||6||##||15||##||35||##||40||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||Amaranth||##||0||##||0||##||10||##||5||##||20||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||Amaranth||##||2||##||0||##||0||##||20||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||Amaranth||##||2||##||0||##||0||##||1||##||25||##||100||##||15||##||rgb(0, 0, 0)||##||rgb(3, 1, 1)||##||0||##||rgb(247, 149, 143)||##||||##||1||##||rgb(167, 245, 125)||##||rgb(252, 98, 98)||##||100||##||capitalize||##||center||##||Amaranth||##||10||##||10||##||||##||1||##||15||##||19||##||rgb(255, 255, 255)||##||rgb(242, 236, 145)||##||500||##||capitalize||##||center||##||Arimo||##||3||##||0||##||Save";
    } else if ($_POST['style'] == 'template-19') {
      $css = "_wp_http_referer,id,desktop_item_per_row,tablet_item_per_row,mobile_item_per_row,background_type,background_transparent,template_background_color,box_background_image,image_opacity,youtube_video_url,video_opacity,video_opacity_color,animation_duration,thousands_separator,item_margin,con_6310_box_radius,con_6310_border_size,con_6310_border_color,con_6310_border_hover_color,con_6310_box_background_color,con_6310_box_background_hover_color,con_6310_box_shadow_width,con_6310_box_shadow_blur,con_6310_box_shadow_color,con_6310_box_shadow_hover_color,con_6310_1_gradient_color_left,con_6310_1_gradient_color_right,con_6310_2_gradient_color_left,con_6310_2_gradient_color_right,con_6310_3_gradient_color_left,con_6310_3_gradient_color_right,con_6310_4_gradient_color_left,con_6310_4_gradient_color_right,con_6310_5_gradient_color_left,con_6310_5_gradient_color_right,con_6310_6_gradient_color_left,con_6310_6_gradient_color_right,con_6310_title_font_size,con_6310_title_line_height,con_6310_title_font_color,con_6310_title_font_hover_color,con_6310_title_font_weight,con_6310_title_text_transform,con_6310_title_text_align,con_6310_title_font_family,con_6310_title_padding_top,con_6310_title_padding_bottom,con_6310_icon_font_size,con_6310_icon_color,con_6310_icon_hover_color,con_6310_icon_margin_top,con_6310_icon_margin_bottom,con_6310_icon_border_radius,con_6310_icon_border_width,con_6310_icon_border_color,con_6310_icon_border_hover_color,con_6310_number_font_size,con_6310_number_line_height,con_6310_number_font_color,con_6310_number_font_hover_color,con_6310_number_font_weight,con_6310_number_font_family,con_6310_number_margin_left,con_6310_number_margin_right,con_6310_number_margin_top,con_6310_number_margin_bottom,con_6310_number_prefix_font_size,con_6310_number_prefix_font_color,con_6310_number_prefix_font_hover_color,con_6310_number_prefix_font_weight,con_6310_number_prefix_font_family,con_6310_number_prefix_position,con_6310_number_prefix_margin_left,con_6310_number_prefix_margin_right,con_6310_number_suffix_font_size,con_6310_number_suffix_font_color,con_6310_number_suffix_font_hover_color,con_6310_number_suffix_font_weight,con_6310_number_suffix_font_family,con_6310_number_suffix_position,con_6310_number_suffix_margin_left,con_6310_number_suffix_margin_right,con_6310_fun_template_button,con_6310_read_more_height,con_6310_read_more_width,con_6310_read_more_font_size,con_6310_read_more_font_color,con_6310_read_more_font_hover_color,con_6310_read_more_border_width,con_6310_read_more_box_border_color,con_6310_read_more_border_hover_color,con_6310_read_more_border_radius,con_6310_read_more_background_color,con_6310_read_more_background_hover_color,con_6310_read_more_font_weight,con_6310_read_more_text_transform,con_6310_read_more_text_align,con_6310_read_more_font_family,con_6310_read_more_margin_top,con_6310_read_more_margin_bottom,custom_css,template_details_show_hide,con_6310_details_font_size,con_6310_details_line_height,con_6310_details_font_color,con_6310_details_font_hover_color,con_6310_details_font_weight,con_6310_details_text_transform,con_6310_details_text_align,con_6310_details_font_family,con_6310_details_margin_top,con_6310_details_margin_bottom,update_style_change!!##!!/wordpress-pro/wp-admin/admin.php?page=con-6310-template-11-20&styleid=19||##||19||##||3||##||1||##||1||##||2||##||transparent||##||rgba(209, 209, 209, 1)||##||||##||rgba(255, 255, 255, 0)||##||||##||.7||##||rgba(255, 255, 255, 0)||##||500||##||\'||##||15||##||10||##||0||##||rgba(255, 255, 255, 0.01)||##||rgba(0, 0, 0, 0.01)||##||rgba(255, 255, 255, 0.87)||##||rgba(255, 255, 255, 0.82)||##||0||##||0||##||rgba(0, 0, 0, 0.01)||##||rgba(255, 110, 102, 1)||##||rgba(255, 110, 102, 1)||##||rgba(105, 0, 33, 1)||##||rgba(254, 203, 75, 1)||##||rgba(250, 125, 141, 1)||##||rgba(0, 176, 155, 1)||##||rgba(0, 45, 87, 1)||##||rgba(128, 0, 128, 1)||##||rgba(250, 125, 141, 1)||##||rgba(253, 196, 80, 1)||##||rgba(239, 108, 148, 1)||##||rgba(102, 255, 158, 1)||##||rgba(255, 94, 177, 1)||##||24||##||26||##||rgb(0, 0, 0)||##||rgb(171, 0, 0)||##||600||##||capitalize||##||center||##||Arimo||##||0||##||5||##||38||##||rgb(0, 0, 0)||##||rgb(255, 255, 255)||##||14||##||14||##||10||##||2||##||rgb(255, 255, 255)||##||rgb(31, 31, 31)||##||34||##||36||##||rgb(255, 255, 255)||##||rgb(23, 23, 23)||##||600||##||Arimo||##||0||##||0||##||7||##||5||##||20||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||Amaranth||##||2||##||0||##||0||##||20||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||Amaranth||##||2||##||0||##||0||##||1||##||26||##||105||##||16||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||0||##||rgb(0, 0, 0)||##||rgb(176, 102, 102)||##||4||##||rgb(39, 209, 141)||##||rgb(77, 77, 77)||##||200||##||capitalize||##||center||##||Arimo||##||15||##||10||##||||##||1||##||15||##||19||##||rgb(31, 31, 31)||##||rgb(8, 109, 143)||##||600||##||capitalize||##||center||##||Arimo||##||0||##||0||##||Save";
    } else if ($_POST['style'] == 'template-20') {
      $css = "_wp_http_referer,id,desktop_item_per_row,tablet_item_per_row,mobile_item_per_row,background_type,background_transparent,template_background_color,box_background_image,image_opacity,youtube_video_url,video_opacity,video_opacity_color,animation_duration,thousands_separator,item_margin,con_6310_1_box_background_top,con_6310_1_box_background_bottom,con_6310_2_box_background_top,con_6310_2_box_background_bottom,con_6310_3_box_background_top,con_6310_3_box_background_bottom,con_6310_4_box_background_top,con_6310_4_box_background_bottom,con_6310_5_box_background_top,con_6310_5_box_background_bottom,con_6310_6_box_background_top,con_6310_6_box_background_bottom,con_6310_title_font_size,con_6310_title_line_height,con_6310_title_font_color,con_6310_title_font_hover_color,con_6310_title_font_weight,con_6310_title_text_transform,con_6310_title_text_align,con_6310_title_font_family,con_6310_title_padding_top,con_6310_title_padding_bottom,con_6310_icon_font_size,con_6310_icon_background_color,con_6310_icon_box_shadow_color,con_6310_icon_margin_bottom,con_6310_number_font_size,con_6310_number_line_height,con_6310_number_font_color,con_6310_number_font_hover_color,con_6310_number_font_weight,con_6310_number_font_family,con_6310_number_margin_left,con_6310_number_margin_right,con_6310_number_margin_top,con_6310_number_margin_bottom,con_6310_number_prefix_font_size,con_6310_number_prefix_font_color,con_6310_number_prefix_font_hover_color,con_6310_number_prefix_font_weight,con_6310_number_prefix_font_family,con_6310_number_prefix_position,con_6310_number_prefix_margin_left,con_6310_number_prefix_margin_right,con_6310_number_suffix_font_size,con_6310_number_suffix_font_color,con_6310_number_suffix_font_hover_color,con_6310_number_suffix_font_weight,con_6310_number_suffix_font_family,con_6310_number_suffix_position,con_6310_number_suffix_margin_left,con_6310_number_suffix_margin_right,con_6310_fun_template_button,con_6310_read_more_height,con_6310_read_more_width,con_6310_read_more_font_size,con_6310_read_more_font_color,con_6310_read_more_font_hover_color,con_6310_read_more_border_width,con_6310_read_more_box_border_color,con_6310_read_more_border_hover_color,con_6310_read_more_border_radius,con_6310_read_more_background_color,con_6310_read_more_background_hover_color,con_6310_read_more_font_weight,con_6310_read_more_text_transform,con_6310_read_more_text_align,con_6310_read_more_font_family,con_6310_read_more_margin_top,con_6310_read_more_margin_bottom,custom_css,template_details_show_hide,con_6310_details_font_size,con_6310_details_line_height,con_6310_details_font_color,con_6310_details_font_hover_color,con_6310_details_font_weight,con_6310_details_text_transform,con_6310_details_text_align,con_6310_details_font_family,con_6310_details_margin_top,con_6310_details_margin_bottom,update_style_change!!##!!/wordpress-pro/wp-admin/admin.php?page=con-6310-template-11-20&styleid=20||##||20||##||3||##||1||##||1||##||1||##||transparent||##||rgba(255, 255, 255, 0)||##||||##||rgba(255, 255, 255, 0)||##||||##||.7||##||rgba(255, 255, 255, 0)||##||500||##||||##||15||##||rgba(247, 95, 116, 1)||##||rgba(246, 56, 82, 1)||##||rgba(0, 123, 168, 1)||##||rgba(3, 80, 148, 1)||##||rgba(173, 67, 136, 1)||##||rgba(159, 16, 104, 1)||##||rgba(44, 189, 114, 1)||##||rgba(3, 140, 92, 1)||##||rgba(181, 35, 27, 0.79)||##||rgba(230, 198, 14, 0.93)||##||rgba(58, 44, 148, 1)||##||rgba(219, 81, 27, 1)||##||20||##||25||##||rgb(0, 32, 102)||##||rgb(250, 250, 250)||##||600||##||uppercase||##||center||##||Arimo||##||20||##||5||##||30||##||rgb(255, 255, 255)||##||rgb(0, 13, 59)||##||26||##||35||##||35||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||Amaranth||##||0||##||0||##||0||##||0||##||20||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||Amaranth||##||2||##||0||##||0||##||20||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||Amaranth||##||2||##||0||##||0||##||1||##||24||##||100||##||15||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||2px||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||0||##||rgb(0, 168, 123)||##||rgb(0, 86, 120)||##||100||##||capitalize||##||center||##||Amaranth||##||8||##||0||##||||##||1||##||15||##||20||##||rgb(255, 255, 255)||##||rgb(3, 3, 3)||##||500||##||capitalize||##||left||##||Arimo||##||0||##||0||##||Save";
    }

    $items = $wpdb->get_results('SELECT * FROM ' . $item_table . ' ORDER BY title ASC', ARRAY_A);
    $itemsId = "";
    foreach ($items as $item) {
      if ($itemsId) {
        $itemsId .= ",";
      }
      $itemsId .= $item['id'];
    }

    $wpdb->query($wpdb->prepare("INSERT INTO {$style_table} (name, style_name, css, itemids) VALUES ( %s, %s, %s, %s)", array($name, $style_name, $css, $itemsId)));
    $redirect_id = $wpdb->insert_id;

    if ($redirect_id == 0) {
      $url = admin_url("admin.php?page=con-6310-counter-number");
    } else if ($redirect_id != 0) {
      $url = admin_url("admin.php?page=con-6310-template-11-20&styleid=$redirect_id");
    }
    wp_register_script('cnvb-6310-redirect-script', '');
    wp_enqueue_script('cnvb-6310-redirect-script');
    wp_add_inline_script('cnvb-6310-redirect-script', "document.location.href = '" . $url . "';");
  }
} else {

?>
  <div class="con-6310">
    <h1>Select Template</h1>

    <!-- ********************* template 11 start ***************** -->
    <div class="con-6310-row con-6310_team-style-boxed">
      <div class="con-6310-padding-15">
        <div class="con-6310-template-preview-11-parallax">
          <div class="con-6310-template-preview-11-common-overlay">
            <div class="con-6310-col-4">
              <div class="con-6310-template-preview-11-counter">
                <div class="con-6310-template-preview-11-counter-content">
                  <div class="con-6310-template-preview-11-counter-icon">
                    <i class="fa fa-globe"></i>
                  </div>
                  <div class="con-6310-template-preview-11-title">Total subscriber</div>
                  <div class="con-6310-template-preview-11-counter-value">
                  <div class="con-6310-template-preview-11-number con-6310-counter-number-attrs" id="con-6310-01-11"
                  data-con-6310-start="0" 
                  data-con-6310-end="1200" 
                  data-con-6310-decimal="0" 
                  data-con-6310-duration="2">
                  </div>
                  </div>
                  <div class="con-6310-template-preview-11-description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  </div>
                  <div class="con-6310-template-preview-11-read-more">
                    <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="con-6310-col-4">
              <div class="con-6310-template-preview-11-counter">
                <div class="con-6310-template-preview-11-counter-content">
                  <div class="con-6310-template-preview-11-counter-icon">
                    <i class="fas fa-network-wired"></i>
                  </div>
                  <div class="con-6310-template-preview-11-title">Total Comment</div>
                  <div class="con-6310-template-preview-11-counter-value"> 
                  <div class="con-6310-template-preview-11-number con-6310-counter-number-attrs" id="con-6310-02-11"
                  data-con-6310-start="0" 
                  data-con-6310-end="183" 
                  data-con-6310-decimal="2" 
                  data-con-6310-duration="2">
                  </div>
                  </div>
                  <div class="con-6310-template-preview-11-description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  </div>
                  <div class="con-6310-template-preview-11-read-more">
                    <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="con-6310-col-4">
              <div class="con-6310-template-preview-11-counter">
                <div class="con-6310-template-preview-11-counter-content">
                  <div class="con-6310-template-preview-11-counter-icon">
                    <i class="fas fa-palette"></i>
                  </div>
                  <div class="con-6310-template-preview-11-title">Total Page</div>
                  <div class="con-6310-template-preview-11-counter-value"> 
                  <div class="con-6310-template-preview-11-number con-6310-counter-number-attrs" id="con-6310-03-11"
                  data-con-6310-start="0" 
                  data-con-6310-end="1064" 
                  data-con-6310-decimal="0" 
                  data-con-6310-duration="2">
                  </div></div>
                  <div class="con-6310-template-preview-11-description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  </div>
                  <div class="con-6310-template-preview-11-read-more">
                    <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="con-6310-col-4">
              <div class="con-6310-template-preview-11-counter">
                <div class="con-6310-template-preview-11-counter-content">
                  <div class="con-6310-template-preview-11-counter-icon">
                    <i class="fas fa-palette"></i>
                  </div>
                  <div class="con-6310-template-preview-11-title">Review Counter</div>
                  <div class="con-6310-template-preview-11-counter-value"> 
                  <div class="con-6310-template-preview-11-number con-6310-counter-number-attrs" id="con-6310-04-11"
                  data-con-6310-start="0" 
                  data-con-6310-end="6040" 
                  data-con-6310-decimal="0" 
                  data-con-6310-duration="2">
                  </div></div>
                  <div class="con-6310-template-preview-11-description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  </div>
                  <div class="con-6310-template-preview-11-read-more">
                    <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="con-6310-template-preview-list">
        Template 11
        <button type="button" class="con-6310-btn-success con_6310_choosen_style" id="template-11">Create Item</button>
        <button type="button" class="con-6310-pro-only">Pro Only</button>
      </div>
      <br class="con-6310-clear" />
    </div>

    <!-- ************** template 12 start ****************** -->
    <div class="con-6310-row con-6310_team-style-boxed">
      <div class="con-6310-padding-15">
        <div class="con-6310-template-preview-12-parallax">
          <div class="con-6310-template-preview-12-common-overlay">
            <!-- <iframe src='https://www.youtube.com/embed/?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&playlist=2Gg6Seob5Mg&mute=1&allowfullscreen=1&allow=accelerometer&autoplay=1&rel=0' frameborder='0' allowfullscreen></iframe>  -->
            <div class="con-6310-col-3">
              <div class="con-6310-template-preview-12-counter">
                <div class="con-6310-template-preview-12-counter-icon">
                  <i class="fa fa-globe"></i>
                </div>
                <div class="con-6310-template-preview-12-title">Visitor Counter</div>
                <div class="con-6310-template-preview-12-counter-value">
                <div class="con-6310-template-preview-12-number con-6310-counter-number-attrs" id="con-6310-03-12"
                  data-con-6310-start="0" 
                  data-con-6310-end="100.05" 
                  data-con-6310-decimal="2" 
                  data-con-6310-duration="2">
                  </div>
                </div>
                <div class="con-6310-template-preview-12-description">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
                <div class="con-6310-template-preview-12-read-more">
                    <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                </div>                
              </div>
            </div>
            <div class="con-6310-col-3">
              <div class="con-6310-template-preview-12-counter">
                <div class="con-6310-template-preview-12-counter-icon">
                  <i class="fas fa-network-wired"></i>
                </div>
                <div class="con-6310-template-preview-12-title">Happy Clients</div>
                <div class="con-6310-template-preview-12-counter-value">
                <div class="con-6310-template-preview-12-number con-6310-counter-number-attrs" id="con-6310-01-12"
                  data-con-6310-start="0" 
                  data-con-6310-end="1200" 
                  data-con-6310-decimal="0" 
                  data-con-6310-duration="2">
                  </div>
                </div>
                <div class="con-6310-template-preview-12-description">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
                <div class="con-6310-template-preview-12-read-more">
                    <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                </div> 
              </div>
            </div>
            <div class="con-6310-col-3">
              <div class="con-6310-template-preview-12-counter">
                <div class="con-6310-template-preview-12-counter-icon">
                  <i class="fas fa-palette"></i>
                </div>
                <div class="con-6310-template-preview-12-title">Comment Counter</div>
                <div class="con-6310-template-preview-12-counter-value">
                <div class="con-6310-template-preview-12-number con-6310-counter-number-attrs" id="con-6310-02-12"
                  data-con-6310-start="0" 
                  data-con-6310-end="200" 
                  data-con-6310-decimal="0" 
                  data-con-6310-duration="2">
                  </div>
                </div>
                <div class="con-6310-template-preview-12-description">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
                <div class="con-6310-template-preview-12-read-more">
                    <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                </div> 
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="con-6310-template-preview-list">
        Template 12
        <button type="button" class="con-6310-btn-success con_6310_choosen_style" id="template-12">Create Item</button>
        <button type="button" class="con-6310-pro-only">Pro Only</button>
      </div>
      <br class="con-6310-clear" />
    </div>

    <!-- ************ template 13 end ***************** -->
    <div class="con-6310-row con-6310_team-style-boxed">
      <div class="con-6310-padding-15">
        <div class="con-6310-template-preview-13-parallax">
          <div class="con-6310-template-preview-13-common-overlay">
            <!-- <iframe src='https://www.youtube.com/embed/?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&playlist=2Gg6Seob5Mg&mute=1&allowfullscreen=1&allow=accelerometer&autoplay=1&rel=0' frameborder='0' allowfullscreen></iframe> -->
            <div class="con-6310-col-4">
              <div class="con-6310-template-preview-13-counter">
                <div class="con-6310-template-preview-13-counter-icon">
                  <i class="fa fa-globe"></i>
                </div>
                <div class="con-6310-template-preview-13-counter-value">
                <div class="con-6310-template-preview-13-number con-6310-counter-number-attrs" id="con-6310-01-13"
                  data-con-6310-start="0" 
                  data-con-6310-end="1200" 
                  data-con-6310-decimal="0" 
                  data-con-6310-duration="2">
                  </div>
                </div>
                <div class="con-6310-template-preview-13-title">Visitor Counter</div>
                <div class="con-6310-template-preview-13-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
                <div class="con-6310-template-preview-13-read-more">
                    <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                </div> 
              </div>
            </div>
            <div class="con-6310-col-4">
              <div class="con-6310-template-preview-13-counter">
                <div class="con-6310-template-preview-13-counter-icon">
                  <i class="fas fa-network-wired"></i>
                </div>
                <div class="con-6310-template-preview-13-counter-value">
                <div class="con-6310-template-preview-13-number con-6310-counter-number-attrs" id="con-6310-02-13"
                  data-con-6310-start="0" 
                  data-con-6310-end="5000" 
                  data-con-6310-decimal="0" 
                  data-con-6310-duration="2">
                  </div>
                </div>
                <div class="con-6310-template-preview-13-title">Total subscriber</div>
                <div class="con-6310-template-preview-13-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                </div>
                <div class="con-6310-template-preview-13-read-more">
                    <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                </div> 
              </div>
            </div>
            <div class="con-6310-col-4">
              <div class="con-6310-template-preview-13-counter">
                <div class="con-6310-template-preview-13-counter-icon">
                  <i class="fas fa-palette"></i>
                </div>
                <div class="con-6310-template-preview-13-counter-value">
                <div class="con-6310-template-preview-13-number con-6310-counter-number-attrs" id="con-6310-03-13"
                  data-con-6310-start="0" 
                  data-con-6310-end="1500.00" 
                  data-con-6310-decimal="2" 
                  data-con-6310-duration="2">
                  </div>
                </div>
                <div class="con-6310-template-preview-13-title">Total Earning</div>
                <div class="con-6310-template-preview-13-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
                <div class="con-6310-template-preview-13-read-more">
                    <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                </div> 
              </div>
            </div>
            <div class="con-6310-col-4">
              <div class="con-6310-template-preview-13-counter">
                <div class="con-6310-template-preview-13-counter-icon">
                  <i class="fas fa-palette"></i>
                </div>
                <div class="con-6310-template-preview-13-counter-value">
                <div class="con-6310-template-preview-13-number con-6310-counter-number-attrs" id="con-6310-04-13"
                  data-con-6310-start="0" 
                  data-con-6310-end="200" 
                  data-con-6310-decimal="0" 
                  data-con-6310-duration="2">
                  </div>
                </div>
                <div class="con-6310-template-preview-13-title">Spent Hours</div>
                <div class="con-6310-template-preview-13-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
                <div class="con-6310-template-preview-13-read-more">
                    <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                </div> 
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="con-6310-template-preview-list">
        Template 13
        <button type="button" class="con-6310-btn-success con_6310_choosen_style" id="template-13">Create Item</button>
        <button type="button" class="con-6310-pro-only">Pro Only</button>
      </div>
      <br class="con-6310-clear" />
    </div>

    <!-- ********************* template 14  **************** -->
    <div class="con-6310-row con-6310_team-style-boxed">
      <div class="con-6310-padding-15">
        <div class="con-6310-template-preview-14-parallax">
          <div class="con-6310-template-preview-14-common-overlay">
            <div class="con-6310-col-4">
              <div class="con-6310-template-preview-14-counter">
                <div class="con-6310-template-preview-14-counter-icon">
                  <i class="fa fa-globe"></i>
                </div>
                <div class="con-6310-template-preview-14-counter-value">
                <div class="con-6310-template-preview-14-number con-6310-counter-number-attrs" id="con-6310-01-14"
                  data-con-6310-start="0" 
                  data-con-6310-end="1200" 
                  data-con-6310-decimal="0" 
                  data-con-6310-duration="2">
                  </div>
                </div>
                <div class="con-6310-template-preview-14-title">Total subscriber</div>
                <div class="con-6310-template-preview-14-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                <div class="con-6310-template-preview-14-read-more">
                  <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                </div>
              </div>
            </div>
            <div class="con-6310-col-4">
              <div class="con-6310-template-preview-14-counter">
                <div class="con-6310-template-preview-14-counter-icon">
                  <i class="fas fa-network-wired"></i>
                </div>
                <div class="con-6310-template-preview-14-counter-value">
                <div class="con-6310-template-preview-14-number con-6310-counter-number-attrs" id="con-6310-02-14"
                  data-con-6310-start="0" 
                  data-con-6310-end="5000" 
                  data-con-6310-decimal="0" 
                  data-con-6310-duration="2">
                  </div>
                </div>
                <div class="con-6310-template-preview-14-title">Total Likes</div>
                <div class="con-6310-template-preview-14-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                <div class="con-6310-template-preview-14-read-more">
                  <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                </div>
              </div>
            </div>
            <div class="con-6310-col-4">
              <div class="con-6310-template-preview-14-counter">
                <div class="con-6310-template-preview-14-counter-icon">
                  <i class="fas fa-palette"></i>
                </div>
                <div class="con-6310-template-preview-14-counter-value">
                <div class="con-6310-template-preview-14-number con-6310-counter-number-attrs" id="con-6310-03-14"
                  data-con-6310-start="0" 
                  data-con-6310-end="120.50" 
                  data-con-6310-decimal="1" 
                  data-con-6310-duration="2">
                  </div>
                </div>
                <div class="con-6310-template-preview-14-title">Visitor Counter</div>
                <div class="con-6310-template-preview-14-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                <div class="con-6310-template-preview-14-read-more">
                  <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                </div>
              </div>
            </div>

            <div class="con-6310-col-4">
              <div class="con-6310-template-preview-14-counter">
                <div class="con-6310-template-preview-14-counter-icon">
                  <i class="fas fa-palette"></i>
                </div>
                <div class="con-6310-template-preview-14-counter-value">
                <div class="con-6310-template-preview-14-number con-6310-counter-number-attrs" id="con-6310-04-14"
                  data-con-6310-start="0" 
                  data-con-6310-end="100" 
                  data-con-6310-decimal="0" 
                  data-con-6310-duration="2">
                  </div>
                </div>
                <div class="con-6310-template-preview-14-title">Spent Hours</div>
                <div class="con-6310-template-preview-14-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                <div class="con-6310-template-preview-14-read-more">
                  <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="con-6310-template-preview-list"> Template 14
        <button type="button" class="con-6310-btn-success con_6310_choosen_style" id="template-14">Create Item</button>
        <button type="button" class="con-6310-pro-only">Pro Only</button>
      </div>
      <br class="con-6310-clear" />
    </div>


    <!-- ******************** template 15 start *************** -->
    <div class="con-6310-row con-6310_team-style-boxed">
      <div class="con-6310-padding-15">
        <div class="con-6310-template-preview-15-parallax">
          <div class="con-6310-template-preview-15-common-overlay">
            <!-- <iframe src='https://www.youtube.com/embed/?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&playlist=snYu2JUqSWs&mute=1&allowfullscreen=1&allow=accelerometer&autoplay=1&rel=0' frameborder='0' allowfullscreen></iframe> -->
            <div class="con-6310-col-4">
              <div class="con-6310-template-preview-15-counter">
                <div class="con-6310-template-preview-15-counter-icon">
                  <i class="fa fa-globe"></i>
                </div>
                <div class="con-6310-template-preview-15-counter-content">
                  <div class="con-6310-template-preview-15-title">Total Visitors</div>
                  <div class="con-6310-template-preview-15-counter-value">
                  <div class="con-6310-template-preview-15-number con-6310-counter-number-attrs" id="con-6310-01-15"
                  data-con-6310-start="0" 
                  data-con-6310-end="1200" 
                  data-con-6310-decimal="0" 
                  data-con-6310-duration="2">
                  </div>
                  </div>
                  <div class="con-6310-template-preview-15-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                  <div class="con-6310-template-preview-15-read-more">
                    <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="con-6310-col-4">
              <div class="con-6310-template-preview-15-counter">
                <div class="con-6310-template-preview-15-counter-icon">
                  <i class="fas fa-network-wired"></i>
                </div>
                <div class="con-6310-template-preview-15-counter-content">
                  <div class="con-6310-template-preview-15-title">Total Post</div>
                  <div class="con-6310-template-preview-15-counter-value">
                  <div class="con-6310-template-preview-15-number con-6310-counter-number-attrs" id="con-6310-02-15"
                  data-con-6310-start="0" 
                  data-con-6310-end="1000" 
                  data-con-6310-decimal="0" 
                  data-con-6310-duration="2">
                  </div>
                  </div>
                  <div class="con-6310-template-preview-15-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                  <div class="con-6310-template-preview-15-read-more">
                    <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="con-6310-col-4">
              <div class="con-6310-template-preview-15-counter">
                <div class="con-6310-template-preview-15-counter-icon">
                  <i class="fas fa-palette"></i>
                </div>
                <div class="con-6310-template-preview-15-counter-content">
                  <div class="con-6310-template-preview-15-title">Spent Hours</div>
                  <div class="con-6310-template-preview-15-counter-value">
                  <div class="con-6310-template-preview-15-number con-6310-counter-number-attrs" id="con-6310-03-15"
                  data-con-6310-start="0" 
                  data-con-6310-end="500.00" 
                  data-con-6310-decimal="2" 
                  data-con-6310-duration="2">
                  </div>
                  </div>
                  <div class="con-6310-template-preview-15-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                  <div class="con-6310-template-preview-15-read-more">
                    <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="con-6310-col-4">
              <div class="con-6310-template-preview-15-counter">
                <div class="con-6310-template-preview-15-counter-icon">
                  <i class="fas fa-palette"></i>
                </div>
                <div class="con-6310-template-preview-15-counter-content">
                  <div class="con-6310-template-preview-15-title">Page Counter</div>
                  <div class="con-6310-template-preview-15-counter-value">
                  <div class="con-6310-template-preview-15-number con-6310-counter-number-attrs" id="con-6310-04-15"
                  data-con-6310-start="0" 
                  data-con-6310-end="1200" 
                  data-con-6310-decimal="0" 
                  data-con-6310-duration="2">
                  </div>
                  </div>
                  <div class="con-6310-template-preview-15-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                  <div class="con-6310-template-preview-15-read-more">
                    <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="con-6310-template-preview-list">
        Template 15
        <button type="button" class="con-6310-btn-success con_6310_choosen_style" id="template-15">Create Item</button>
        <button type="button" class="con-6310-pro-only">Pro Only</button>
      </div>
      <br class="con-6310-clear" />
    </div>


    <!-- ********* template 16 start ********* -->
    <div class="con-6310-row con-6310_team-style-boxed">
      <div class="con-6310-padding-15">
        <div class="con-6310-template-preview-16-parallax">
          <div class="con-6310-template-preview-16-common-overlay">
            <!-- <iframe src='https://www.youtube.com/embed/?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&playlist=ZWT6qRWoWgg&mute=1&allowfullscreen=1&allow=accelerometer&autoplay=1&rel=0' frameborder='0' allowfullscreen></iframe> -->
            <div class="con-6310-col-4">
              <div class="con-6310-template-preview-16-counter">
                <div class="con-6310-template-preview-16-counter-value">
                <div class="con-6310-template-preview-16-number con-6310-counter-number-attrs" id="con-6310-01-16"
                  data-con-6310-start="0" 
                  data-con-6310-end="1000" 
                  data-con-6310-decimal="0" 
                  data-con-6310-duration="2">
                  </div>
                </div>
                <div class="con-6310-template-preview-16-title">Total Visitors</div>
                <div class="con-6310-template-preview-16-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
                <div class="con-6310-template-preview-16-read-more">
                  <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                </div>
              </div>
            </div>
            <div class="con-6310-col-4">
              <div class="con-6310-template-preview-16-counter">
                <div class="con-6310-template-preview-16-counter-value">
                <div class="con-6310-template-preview-16-number con-6310-counter-number-attrs" id="con-6310-02-16"
                  data-con-6310-start="0" 
                  data-con-6310-end="1200" 
                  data-con-6310-decimal="0" 
                  data-con-6310-duration="2">
                  </div>
                </div>
                <div class="con-6310-template-preview-16-title">Review Conter</div>
                <div class="con-6310-template-preview-16-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
                <div class="con-6310-template-preview-16-read-more">
                  <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                </div>
              </div>
            </div>
            <div class="con-6310-col-4">
              <div class="con-6310-template-preview-16-counter">
                <div class="con-6310-template-preview-16-counter-value">
                <div class="con-6310-template-preview-16-number con-6310-counter-number-attrs" id="con-6310-03-16"
                  data-con-6310-start="0" 
                  data-con-6310-end="50.55" 
                  data-con-6310-decimal="2" 
                  data-con-6310-duration="2">
                  </div>
                </div>
                <div class="con-6310-template-preview-16-title">Spent Hours</div>
                <div class="con-6310-template-preview-16-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
                <div class="con-6310-template-preview-16-read-more">
                  <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                </div>
              </div>
            </div>
            <div class="con-6310-col-4">
              <div class="con-6310-template-preview-16-counter">
                <div class="con-6310-template-preview-16-counter-value">
                <div class="con-6310-template-preview-16-number con-6310-counter-number-attrs" id="con-6310-04-16"
                  data-con-6310-start="0" 
                  data-con-6310-end="12000" 
                  data-con-6310-decimal="0" 
                  data-con-6310-duration="2">
                  </div>
                </div>
                <div class="con-6310-template-preview-16-title">Total subscriber</div>
                <div class="con-6310-template-preview-16-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
                <div class="con-6310-template-preview-16-read-more">
                  <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="con-6310-template-preview-list">
        Template 16
        <button type="button" class="con-6310-btn-success con_6310_choosen_style" id="template-16">Create Item</button>
        <button type="button" class="con-6310-pro-only">Pro Only</button>
      </div>
      <br class="con-6310-clear" />
    </div>

    <!-- ****************** template 17 start **************** -->
    <div class="con-6310-row con-6310_team-style-boxed">
      <div class="con-6310-padding-15">
        <div class="con-6310-template-preview-17-parallax">
          <div class="con-6310-template-preview-17-common-overlay">
            <!-- <iframe src='https://www.youtube.com/embed/?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&playlist=ZWT6qRWoWgg&mute=1&allowfullscreen=1&allow=accelerometer&autoplay=1&rel=0' frameborder='0' allowfullscreen></iframe> -->
            <div class="con-6310-col-4">
              <div class="con-6310-template-preview-17-counter">
                <div class="con-6310-template-preview-17-counter-content">
                  <i class="con-6310-template-preview-17-counter-icon fa fa-globe"></i>
                  <div class="con-6310-template-preview-17-counter-value">
                  <div class="con-6310-template-preview-17-number con-6310-counter-number-attrs" id="con-6310-01-17"
                  data-con-6310-start="0" 
                  data-con-6310-end="1000" 
                  data-con-6310-decimal="0" 
                  data-con-6310-duration="2">
                  </div>
                  </div>
                  <div class="con-6310-template-preview-17-title">Total Post</div>
                  <div class="con-6310-template-preview-17-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                  <div class="con-6310-template-preview-17-read-more">
                    <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="con-6310-col-4">
              <div class="con-6310-template-preview-17-counter">
                <div class="con-6310-template-preview-17-counter-content">
                  <i class="con-6310-template-preview-17-counter-icon fas fa-network-wired"></i>
                  <div class="con-6310-template-preview-17-counter-value">
                  <div class="con-6310-template-preview-17-number con-6310-counter-number-attrs" id="con-6310-02-17"
                  data-con-6310-start="0" 
                  data-con-6310-end="1600" 
                  data-con-6310-decimal="0" 
                  data-con-6310-duration="2">
                  </div>
                  </div>
                  <div class="con-6310-template-preview-17-title">Total Visitor</div>
                  <div class="con-6310-template-preview-17-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                  <div class="con-6310-template-preview-17-read-more">
                    <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="con-6310-col-4">
              <div class="con-6310-template-preview-17-counter">
                <div class="con-6310-template-preview-17-counter-content">
                    <i class="con-6310-template-preview-17-counter-icon fas fa-palette"></i>                 
                  <div class="con-6310-template-preview-17-counter-value">
                  <div class="con-6310-template-preview-17-number con-6310-counter-number-attrs" id="con-6310-03-17"
                  data-con-6310-start="0" 
                  data-con-6310-end="150.00" 
                  data-con-6310-decimal="2" 
                  data-con-6310-duration="2">
                  </div>
                  </div>
                  <div class="con-6310-template-preview-17-title">Total Page</div>
                  <div class="con-6310-template-preview-17-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                  <div class="con-6310-template-preview-17-read-more">
                    <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="con-6310-col-4">
              <div class="con-6310-template-preview-17-counter">
                <div class="con-6310-template-preview-17-counter-content">
                    <i class="con-6310-template-preview-17-counter-icon fas fa-palette"></i>                 
                  <div class="con-6310-template-preview-17-counter-value">
                  <div class="con-6310-template-preview-17-number con-6310-counter-number-attrs" id="con-6310-04-17"
                  data-con-6310-start="0" 
                  data-con-6310-end="10000" 
                  data-con-6310-decimal="0" 
                  data-con-6310-duration="2">
                  </div>
                  </div>
                  <div class="con-6310-template-preview-17-title">Total subscriber</div>
                  <div class="con-6310-template-preview-17-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                  <div class="con-6310-template-preview-17-read-more">
                    <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="con-6310-template-preview-list"> Template 17
        <button type="button" class="con-6310-btn-success con_6310_choosen_style" id="template-17">Create Item</button>
        <button type="button" class="con-6310-pro-only">Pro Only</button>
      </div>
      <br class="con-6310-clear" />
    </div>

    <!-- ***************** template 18 start**************** -->
    <div class="con-6310-row con-6310_team-style-boxed">
      <div class="con-6310-padding-15">
        <div class="con-6310-template-preview-18-parallax">
          <div class="con-6310-template-preview-18-common-overlay">
            <div class="con-6310-col-4">
              <div class="con-6310-template-preview-18-counter">
                <div class="con-6310-template-preview-18-counter-icon">
                  <i class="fa fa-globe"></i>
                </div>
                <div class="con-6310-template-preview-18-title">Visitor Counter</div>
                <div class="con-6310-template-preview-18-counter-value">
                <div class="con-6310-template-preview-18-number con-6310-counter-number-attrs" id="con-6310-01-18"
                  data-con-6310-start="0" 
                  data-con-6310-end="100" 
                  data-con-6310-decimal="0" 
                  data-con-6310-duration="2">
                  </div>
                </div>
                <div class="con-6310-template-preview-18-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                <div class="con-6310-template-preview-18-read-more">
                  <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                </div>
              </div>
            </div>
            <div class="con-6310-col-4">
              <div class="con-6310-template-preview-18-counter">
                <div class="con-6310-template-preview-18-counter-icon">
                  <i class="fas fa-network-wired"></i>
                </div>
                <div class="con-6310-template-preview-18-title">Total Likes</div>
                <div class="con-6310-template-preview-18-counter-value">
                <div class="con-6310-template-preview-18-number con-6310-counter-number-attrs" id="con-6310-02-18"
                  data-con-6310-start="0" 
                  data-con-6310-end="12000" 
                  data-con-6310-decimal="0" 
                  data-con-6310-duration="2">
                  </div>
                </div>
                <div class="con-6310-template-preview-18-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                <div class="con-6310-template-preview-18-read-more">
                  <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                </div>
              </div>
            </div>
            <div class="con-6310-col-4">
              <div class="con-6310-template-preview-18-counter">
                <div class="con-6310-template-preview-18-counter-icon">
                  <i class="fas fa-palette"></i>
                </div>
                <div class="con-6310-template-preview-18-title">Total Comment</div>
                <div class="con-6310-template-preview-18-counter-value">
                <div class="con-6310-template-preview-18-number con-6310-counter-number-attrs" id="con-6310-03-18"
                  data-con-6310-start="0" 
                  data-con-6310-end="99.99" 
                  data-con-6310-decimal="2" 
                  data-con-6310-duration="2">
                  </div>
                </div>
                <div class="con-6310-template-preview-18-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                <div class="con-6310-template-preview-18-read-more">
                  <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                </div>
              </div>
            </div>
            <div class="con-6310-col-4">
              <div class="con-6310-template-preview-18-counter">
                <div class="con-6310-template-preview-18-counter-icon">
                  <i class="fas fa-palette"></i>
                </div>
                <div class="con-6310-template-preview-18-title">Spent Hours</div>
                <div class="con-6310-template-preview-18-counter-value">
                <div class="con-6310-template-preview-18-number con-6310-counter-number-attrs" id="con-6310-04-18"
                  data-con-6310-start="0" 
                  data-con-6310-end="2500" 
                  data-con-6310-decimal="0" 
                  data-con-6310-duration="2">
                  </div>
                </div>
                <div class="con-6310-template-preview-18-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                <div class="con-6310-template-preview-18-read-more">
                  <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="con-6310-template-preview-list"> Template 18
        <button type="button" class="con-6310-btn-success con_6310_choosen_style" id="template-18">Create Item</button>
        <button type="button" class="con-6310-pro-only">Pro Only</button>
      </div>
      <br class="con-6310-clear" />
    </div>

    <!-- **************** template 19 start ******** -->
    <div class="con-6310-row con-6310_team-style-boxed">
      <div class="con-6310-padding-15">
        <div class="con-6310-template-preview-19-parallax">
          <div class="con-6310-template-preview-19-common-overlay">
            <div class="con-6310-col-4">
              <div class="con-6310-template-preview-19-counter">
                <div class="con-6310-template-preview-19-counter-value">
                <div class="con-6310-template-preview-19-number con-6310-counter-number-attrs" id="con-6310-01-19"
                  data-con-6310-start="0" 
                  data-con-6310-end="1200" 
                  data-con-6310-decimal="0" 
                  data-con-6310-duration="2">
                  </div>
                </div>
                <div class="con-6310-template-preview-19-title">Visitor Counter</div>
                <div class="con-6310-template-preview-19-counter-icon">
                  <i class="fa fa-globe"></i>
                </div>
                <div class="con-6310-template-preview-19-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                <div class="con-6310-template-preview-19-read-more">
                  <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                </div>
              </div>
            </div>
            <div class="con-6310-col-4">
              <div class="con-6310-template-preview-19-counter">
                <div class="con-6310-template-preview-19-counter-value">
                <div class="con-6310-template-preview-19-number con-6310-counter-number-attrs" id="con-6310-02-19"
                  data-con-6310-start="0" 
                  data-con-6310-end="10000" 
                  data-con-6310-decimal="0" 
                  data-con-6310-duration="2">
                  </div>
                </div>
                <div class="con-6310-template-preview-19-title">Total Subscriber</div>
                <div class="con-6310-template-preview-19-counter-icon">
                  <i class="fas fa-network-wired"></i>
                </div>
                <div class="con-6310-template-preview-19-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                <div class="con-6310-template-preview-19-read-more">
                  <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                </div>
              </div>
            </div>
            <div class="con-6310-col-4">
              <div class="con-6310-template-preview-19-counter">
                <div class="con-6310-template-preview-19-counter-value">
                <div class="con-6310-template-preview-19-number con-6310-counter-number-attrs" id="con-6310-03-19"
                  data-con-6310-start="0" 
                  data-con-6310-end="120.50" 
                  data-con-6310-decimal="1" 
                  data-con-6310-duration="2">
                  </div>
                </div>
                <div class="con-6310-template-preview-19-title">Spent Hours</div>
                <div class="con-6310-template-preview-19-counter-icon">
                  <i class="fas fa-palette"></i>
                </div>
                <div class="con-6310-template-preview-19-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                <div class="con-6310-template-preview-19-read-more">
                  <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                </div>
              </div>
            </div>
            <div class="con-6310-col-4">
              <div class="con-6310-template-preview-19-counter">
                <div class="con-6310-template-preview-19-counter-value">
                <div class="con-6310-template-preview-19-number con-6310-counter-number-attrs" id="con-6310-04-19"
                  data-con-6310-start="0" 
                  data-con-6310-end="1200" 
                  data-con-6310-decimal="0" 
                  data-con-6310-duration="2">
                  </div>
                </div>
                <div class="con-6310-template-preview-19-title">Total Review</div>
                <div class="con-6310-template-preview-19-counter-icon">
                  <i class="fas fa-palette"></i>
                </div>
                <div class="con-6310-template-preview-19-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                <div class="con-6310-template-preview-19-read-more">
                  <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="con-6310-template-preview-list"> Template 19
        <button type="button" class="con-6310-btn-success con_6310_choosen_style" id="template-19">Create Item</button>
        <button type="button" class="con-6310-pro-only">Pro Only</button>
      </div>
      <br class="con-6310-clear" />
    </div>

    <!-- ******************* template 20 start ******* -->
    <div class="con-6310-row con-6310_team-style-boxed">
      <div class="con-6310-padding-15">
        <div class="con-6310-template-preview-20-parallax">
          <div class="con-6310-template-preview-20-common-overlay">
            <div class="con-6310-col-4">
              <div class="con-6310-template-preview-20-counter">
                <div class="con-6310-template-preview-20-counter-icon">
                  <i class="fa fa-globe"></i>
                </div>
                <div class="con-6310-template-preview-20-counter-content">
                  <div class="con-6310-template-preview-20-counter-value">
                  <div class="con-6310-template-preview-20-number con-6310-counter-number-attrs" id="con-6310-01-20"
                  data-con-6310-start="0" 
                  data-con-6310-end="1200" 
                  data-con-6310-decimal="0" 
                  data-con-6310-duration="2">
                  </div>
                  </div>
                  <div class="con-6310-template-preview-20-title">Total Subscriber</div>
                  <div class="con-6310-template-preview-20-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                  <div class="con-6310-template-preview-20-read-more">
                    <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="con-6310-col-4">
              <div class="con-6310-template-preview-20-counter">
                <div class="con-6310-template-preview-20-counter-icon">
                  <i class="fas fa-network-wired"></i>
                </div>
                <div class="con-6310-template-preview-20-counter-content">
                  <div class="con-6310-template-preview-20-counter-value">
                  <div class="con-6310-template-preview-20-number con-6310-counter-number-attrs" id="con-6310-02-20"
                  data-con-6310-start="0" 
                  data-con-6310-end="1200" 
                  data-con-6310-decimal="0" 
                  data-con-6310-duration="2">
                  </div>
                  </div>
                  <div class="con-6310-template-preview-20-title">Spent Hours</div>
                  <div class="con-6310-template-preview-20-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                  <div class="con-6310-template-preview-20-read-more">
                    <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="con-6310-col-4">
              <div class="con-6310-template-preview-20-counter">
                <div class="con-6310-template-preview-20-counter-icon">
                  <i class="fas fa-palette"></i>
                </div>
                <div class="con-6310-template-preview-20-counter-content">
                  <div class="con-6310-template-preview-20-counter-value">
                  <div class="con-6310-template-preview-20-number con-6310-counter-number-attrs" id="con-6310-03-20"
                  data-con-6310-start="0" 
                  data-con-6310-end="99.99" 
                  data-con-6310-decimal="2" 
                  data-con-6310-duration="2">
                  </div>
                  </div>
                  <div class="con-6310-template-preview-20-title">Visitor Counter</div>
                  <div class="con-6310-template-preview-20-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                  <div class="con-6310-template-preview-20-read-more">
                    <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="con-6310-col-4">
              <div class="con-6310-template-preview-20-counter">
                <div class="con-6310-template-preview-20-counter-icon">
                  <i class="fas fa-palette"></i>
                </div>
                <div class="con-6310-template-preview-20-counter-content">
                  <div class="con-6310-template-preview-20-counter-value">
                  <div class="con-6310-template-preview-20-number con-6310-counter-number-attrs" id="con-6310-04-20"
                  data-con-6310-start="0" 
                  data-con-6310-end="10000" 
                  data-con-6310-decimal="0" 
                  data-con-6310-duration="2">
                  </div>
                  </div>
                  <div class="con-6310-template-preview-20-title">Total Visitors</div>
                  <div class="con-6310-template-preview-20-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                  <div class="con-6310-template-preview-20-read-more">
                    <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                  </div>
                </div>
              </div>
            </div>  
          </div>
        </div>
      </div>
      <div class="con-6310-template-preview-list"> Template 20
        <button type="button" class="con-6310-btn-success con_6310_choosen_style" id="template-20">Create Item</button>
        <button type="button" class="con-6310-pro-only">Pro Only</button>
      </div>
      <br class="con-6310-clear" />
    </div>

    <div id="con-6310-modal-add" class="con-6310-modal" style="display: none">
      <div class="con-6310-modal-content con-6310-modal-sm">
        <form action="" method="post">
          <div class="con-6310-modal-header">
            Create Item
            <div class="con-6310-close">&times;</div>
          </div>
          <div class="con-6310-modal-body-form">
            <?php wp_nonce_field("con-6310-nonce-field") ?>
            <input type="hidden" name="style" id="con-6310-style-hidden" />
            <table border="0" width="100%" cellpadding="10" cellspacing="0">
              <tr>
                <td width="90"><label class="con-6310-form-label" for="icon_name">Counter Name:</label></td>
                <td><input type="text" required="" name="style_name" id="style_name" value="" class="con-6310-form-input" placeholder="Counter Name" style="width: 265px" autocomplete="off" /></td>
              </tr>
            </table>
          </div>
          <div class="con-6310-modal-form-footer">
            <button type="button" name="close" class="con-6310-btn-danger con-6310-pull-right">Close</button>
            <input type="submit" name="submit" class="con-6310-btn-primary con-6310-pull-right con-6310-margin-right-10" value="Save" />
          </div>
        </form>
        <br class="con-6310-clear" />
      </div>
    </div>

    <script>
      jQuery(document).ready(function() {
        jQuery("body").on("click", ".con_6310_choosen_style", function() {
          jQuery("#con-6310-modal-add").fadeIn(500);
          jQuery("#con-6310-style-hidden").val(jQuery(this).attr("id"));
          jQuery("body").css({
            "overflow": "hidden"
          });
          return false;
        });

        jQuery("body").on("click", ".con-6310-close, .con-6310-btn-danger", function() {
          jQuery("#con-6310-modal-add").fadeOut(500);
          jQuery("body").css({
            "overflow": "initial"
          });
        });
        jQuery(window).click(function(event) {
          if (event.target == document.getElementById('con-6310-modal-add')) {
            jQuery("#con-6310-modal-add").fadeOut(500);
            jQuery("body").css({
              "overflow": "initial"
            });
          }
        });
      });
    </script>

  <?php } ?>