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

    if ($_POST['style'] == 'template-01') {
      $css = "_wp_http_referer,id,desktop_item_per_row,tablet_item_per_row,mobile_item_per_row,background_type,background_transparent,template_background_color,box_background_image,image_opacity,youtube_video_url,video_opacity,video_opacity_color,animation_duration,thousands_separator,item_margin,con_6310_box_background_color,con_6310_box_background_hover_color,con_6310_box_hover_overly_color,con_6310_box_shadow_width,con_6310_box_shadow_blur,con_6310_box_shadow_color,con_6310_box_shadow_hover_color,con_6310_title_font_size,con_6310_title_line_height,con_6310_title_font_color,con_6310_title_font_hover_color,con_6310_title_font_weight,con_6310_title_text_transform,con_6310_title_text_align,con_6310_title_font_family,con_6310_title_padding_top,con_6310_title_padding_bottom,con_6310_icon_font_size,con_6310_icon_color,con_6310_icon_hover_color,con_6310_icon_margin_top,con_6310_icon_margin_bottom,con_6310_number_font_size,con_6310_number_line_height,con_6310_number_font_color,con_6310_number_font_hover_color,con_6310_number_font_weight,con_6310_number_font_family,con_6310_number_margin_left,con_6310_number_margin_right,con_6310_number_margin_top,con_6310_number_margin_bottom,con_6310_number_prefix_font_size,con_6310_number_prefix_font_color,con_6310_number_prefix_font_hover_color,con_6310_number_prefix_font_weight,con_6310_number_prefix_font_family,con_6310_number_prefix_position,con_6310_number_prefix_margin_left,con_6310_number_prefix_margin_right,con_6310_number_suffix_font_size,con_6310_number_suffix_font_color,con_6310_number_suffix_font_hover_color,con_6310_number_suffix_font_weight,con_6310_number_suffix_font_family,con_6310_number_suffix_position,con_6310_number_suffix_margin_left,con_6310_number_suffix_margin_right,con_6310_fun_template_button,con_6310_read_more_height,con_6310_read_more_width,con_6310_read_more_font_size,con_6310_read_more_font_color,con_6310_read_more_font_hover_color,con_6310_read_more_border_width,con_6310_read_more_box_border_color,con_6310_read_more_border_hover_color,con_6310_read_more_border_radius,con_6310_read_more_background_color,con_6310_read_more_background_hover_color,con_6310_read_more_font_weight,con_6310_read_more_text_transform,con_6310_read_more_text_align,con_6310_read_more_font_family,con_6310_read_more_margin_top,con_6310_read_more_margin_bottom,custom_css,template_details_show_hide,con_6310_details_font_size,con_6310_details_line_height,con_6310_details_font_color,con_6310_details_font_hover_color,con_6310_details_font_weight,con_6310_details_text_transform,con_6310_details_text_align,con_6310_details_font_family,con_6310_details_margin_top,con_6310_details_margin_bottom,update_style_change!!##!!/wordpress-pro/wp-admin/admin.php?page=con-6310-template-01-10&styleid=1||##||1||##||2||##||1||##||1||##||4||##||transparent||##||rgba(102, 153, 204, 1)||##||||##||rgba(255, 255, 255, 0)||##||https://www.youtube.com/watch?v=8xjf-K-CVBA||##||0.7||##||rgba(0, 0, 0, 0.46)||##||500||##||.||##||15||##||rgba(54, 54, 54, 0.94)||##||rgba(211, 245, 174, 1)||##||rgba(0, 7, 107, 0.45)||##||0||##||0||##||rgba(255, 255, 255, 0.01)||##||rgba(255, 217, 0, 0.01)||##||24||##||24||##||rgb(240, 181, 104)||##||rgb(139, 0, 163)||##||600||##||capitalize||##||center||##||Arimo||##||0||##||10||##||32||##||rgb(247, 247, 247)||##||rgb(199, 0, 0)||##||15||##||15||##||30||##||30||##||rgb(247, 247, 247)||##||rgb(0, 9, 138)||##||600||##||Arimo||##||2||##||2||##||15||##||15||##||20||##||rgb(0, 0, 0)||##||rgb(0, 19, 128)||##||600||##||Arimo||##||4||##||0||##||0||##||20||##||rgb(0, 0, 0)||##||rgb(0, 17, 143)||##||600||##||Arimo||##||4||##||0||##||0||##||1||##||25||##||100||##||15||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||0||##||rgb(227, 95, 0)||##||rgb(46, 46, 46)||##||0||##||rgb(227, 95, 0)||##||rgb(0, 150, 148)||##||100||##||capitalize||##||center||##||Arimo||##||10||##||10||##||||##||1||##||15||##||20||##||rgb(232, 232, 232)||##||rgb(0, 17, 143)||##||600||##||capitalize||##||center||##||Arimo||##||0||##||0||##||Save";
    } else if ($_POST['style'] == 'template-02') {
      $css = "_wp_http_referer,id,desktop_item_per_row,tablet_item_per_row,mobile_item_per_row,background_type,background_transparent,template_background_color,box_background_image,image_opacity,youtube_video_url,video_opacity,video_opacity_color,animation_duration,thousands_separator,item_margin,con_6310_box_background_color,con_6310_box_border_size,con_6310_box_1_border_color,con_6310_box_2_border_color,con_6310_box_3_border_color,con_6310_box_4_border_color,con_6310_box_5_border_color,con_6310_box_6_border_color,con_6310_box_shadow_width,con_6310_box_shadow_blur,con_6310_box_shadow_color,con_6310_box_shadow_hover_color,con_6310_title_font_size,con_6310_title_font_color,con_6310_title_font_hover_color,con_6310_title_line_height,con_6310_title_font_weight,con_6310_title_text_transform,con_6310_title_text_align,con_6310_title_font_family,con_6310_title_padding_top,con_6310_title_padding_bottom,con_6310_icon_font_size,con_6310_icon_color,con_6310_icon_hover_color,con_6310_border_font_size,con_6310_icon_border_color,con_6310_icon_position,con_6310_number_font_size,con_6310_number_line_height,con_6310_number_font_color,con_6310_number_font_hover_color,con_6310_number_font_weight,con_6310_number_font_family,con_6310_number_margin_left,con_6310_number_margin_right,con_6310_number_margin_top,con_6310_number_margin_bottom,con_6310_number_prefix_font_size,con_6310_number_prefix_font_color,con_6310_number_prefix_font_hover_color,con_6310_number_prefix_font_weight,con_6310_number_prefix_font_family,con_6310_number_prefix_position,con_6310_number_prefix_margin_left,con_6310_number_prefix_margin_right,con_6310_number_suffix_font_size,con_6310_number_suffix_font_color,con_6310_number_suffix_font_hover_color,con_6310_number_suffix_font_weight,con_6310_number_suffix_font_family,con_6310_number_suffix_position,con_6310_number_suffix_margin_left,con_6310_number_suffix_margin_right,con_6310_fun_template_button,con_6310_read_more_height,con_6310_read_more_width,con_6310_read_more_font_size,con_6310_read_more_font_color,con_6310_read_more_font_hover_color,con_6310_read_more_border_width,con_6310_read_more_box_border_color,con_6310_read_more_border_hover_color,con_6310_read_more_border_radius,con_6310_read_more_background_color,con_6310_read_more_background_hover_color,con_6310_read_more_font_weight,con_6310_read_more_text_transform,con_6310_read_more_text_align,con_6310_read_more_font_family,con_6310_read_more_margin_top,con_6310_read_more_margin_bottom,custom_css,template_details_show_hide,con_6310_details_font_size,con_6310_details_line_height,con_6310_details_font_color,con_6310_details_font_hover_color,con_6310_details_font_weight,con_6310_details_text_transform,con_6310_details_text_align,con_6310_details_font_family,con_6310_details_margin_top,con_6310_details_margin_bottom,update_style_change!!##!!/wordpress-pro/wp-admin/admin.php?page=con-6310-template-01-10&styleid=2||##||2||##||3||##||1||##||1||##||3||##||transparent||##||rgba(245, 245, 245, 0.91)||##||http://localhost/wordpress-pro/wp-content/uploads/2022/02/pexels-sohail-na-807598-scaled.jpg||##||rgba(255, 255, 255, 0)||##||||##||.7||##||rgba(255, 255, 255, 0)||##||500||##||,||##||15||##||rgba(245, 245, 245, 0.91)||##||5||##||rgba(103, 0, 150, 1)||##||rgba(0, 81, 119, 1)||##||rgba(0, 115, 6, 1)||##||rgba(255, 0, 170, 1)||##||rgba(0, 81, 255, 1)||##||rgba(255, 123, 0, 1)||##||0||##||0||##||rgba(45, 46, 39, 0.01)||##||rgba(196, 21, 12, 0.01)||##||22||##||rgb(140, 46, 46)||##||rgb(15, 14, 14)||##||30||##||bold||##||capitalize||##||left||##||Arimo||##||15||##||15||##||40||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||5||##||rgb(0, 0, 0)||##||-31||##||35||##||25||##||rgb(0, 0, 0)||##||rgb(255, 255, 255)||##||600||##||Amaranth||##||0||##||0||##||0||##||5||##||20||##||rgb(64, 64, 64)||##||rgb(64, 64, 64)||##||600||##||Amaranth||##||0||##||0||##||0||##||20||##||rgb(64, 64, 64)||##||rgb(64, 64, 64)||##||600||##||Amaranth||##||0||##||0||##||0||##||1||##||24||##||100||##||15||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||2px||##||rgb(0, 0, 0)||##||rgb(13, 13, 13)||##||0||##||rgb(10, 10, 10)||##||rgb(5, 55, 82)||##||100||##||capitalize||##||center||##||Amaranth||##||5||##||10||##||||##||1||##||15||##||20||##||rgb(138, 0, 143)||##||rgb(23, 23, 23)||##||bold||##||capitalize||##||left||##||Arimo||##||10||##||10||##||Save";
    } else if ($_POST['style'] == 'template-03') {
      $css = "_wp_http_referer,id,desktop_item_per_row,tablet_item_per_row,mobile_item_per_row,background_type,background_transparent,template_background_color,box_background_image,image_opacity,youtube_video_url,video_opacity,video_opacity_color,animation_duration,thousands_separator,item_margin,con_6310_box_radius,con_6310_box_background_color_top,con_6310_box_background_color_bottom,con_6310_box_shadow_width,con_6310_box_shadow_blur,con_6310_box_shadow_color,con_6310_box_shadow_hover_color,con_6310_1_gradient_color_left,con_6310_1_gradient_color_right,con_6310_2_gradient_color_left,con_6310_2_gradient_color_right,con_6310_3_gradient_color_left,con_6310_3_gradient_color_right,con_6310_4_gradient_color_left,con_6310_4_gradient_color_right,con_6310_5_gradient_color_left,con_6310_5_gradient_color_right,con_6310_6_gradient_color_left,con_6310_6_gradient_color_right,con_6310_title_font_size,con_6310_title_line_height,con_6310_title_font_color,con_6310_title_font_hover_color,con_6310_title_font_weight,con_6310_title_text_transform,con_6310_title_text_align,con_6310_title_font_family,con_6310_title_padding_top,con_6310_title_padding_bottom,con_6310_icon_font_size,con_6310_icon_margin_top,con_6310_icon_margin_bottom,con_6310_number_font_size,con_6310_number_line_height,con_6310_number_font_color,con_6310_number_font_hover_color,con_6310_number_font_weight,con_6310_number_font_family,con_6310_number_margin_left,con_6310_number_margin_right,con_6310_number_margin_top,con_6310_number_margin_bottom,con_6310_number_prefix_font_size,con_6310_number_prefix_font_color,con_6310_number_prefix_font_hover_color,con_6310_number_prefix_font_weight,con_6310_number_prefix_font_family,con_6310_number_prefix_position,con_6310_number_prefix_margin_left,con_6310_number_prefix_margin_right,con_6310_number_suffix_font_size,con_6310_number_suffix_font_color,con_6310_number_suffix_font_hover_color,con_6310_number_suffix_font_weight,con_6310_number_suffix_font_family,con_6310_number_suffix_position,con_6310_number_suffix_margin_left,con_6310_number_suffix_margin_right,con_6310_fun_template_button,con_6310_read_more_height,con_6310_read_more_width,con_6310_read_more_font_size,con_6310_read_more_font_color,con_6310_read_more_font_hover_color,con_6310_read_more_border_width,con_6310_read_more_box_border_color,con_6310_read_more_border_hover_color,con_6310_read_more_border_radius,con_6310_read_more_background_color,con_6310_read_more_background_hover_color,con_6310_read_more_font_weight,con_6310_read_more_text_transform,con_6310_read_more_text_align,con_6310_read_more_font_family,con_6310_read_more_margin_top,con_6310_read_more_margin_bottom,custom_css,template_details_show_hide,con_6310_details_font_size,con_6310_details_line_height,con_6310_details_font_color,con_6310_details_font_hover_color,con_6310_details_font_weight,con_6310_details_text_transform,con_6310_details_text_align,con_6310_details_font_family,con_6310_details_margin_top,con_6310_details_margin_bottom,update_style_change!!##!!/wordpress-pro/wp-admin/admin.php?page=con-6310-template-01-10&styleid=3||##||3||##||3||##||1||##||1||##||3||##||transparent||##||rgba(255, 255, 255, 0)||##||http://localhost/wordpress-pro/wp-content/uploads/2022/03/pexels-bella-white-635279-scaled.jpg||##||rgba(0, 0, 0, 0.38)||##||||##||.7||##||rgba(255, 255, 255, 0)||##||500||##||.||##||15||##||50||##||rgba(255, 255, 255, 1)||##||rgba(238, 238, 238, 1)||##||0||##||0||##||rgba(255, 13, 0, 0.01)||##||rgba(48, 48, 48, 0.01)||##||rgba(110, 214, 255, 0.98)||##||rgba(0, 57, 97, 1)||##||rgba(171, 0, 48, 0.97)||##||rgba(0, 107, 5, 0.98)||##||rgba(54, 245, 255, 1)||##||rgba(0, 83, 92, 1)||##||rgba(255, 102, 102, 1)||##||rgba(128, 6, 0, 1)||##||rgba(14, 229, 240, 1)||##||rgba(173, 0, 75, 0.97)||##||rgba(219, 76, 255, 1)||##||rgba(107, 0, 102, 1)||##||25||##||25||##||rgb(255, 255, 255)||##||rgb(186, 0, 0)||##||bold||##||capitalize||##||center||##||Arimo||##||10||##||10||##||45||##||10||##||10||##||30||##||24||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||Amaranth||##||0||##||0||##||5||##||5||##||20||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||Amaranth||##||2||##||0||##||0||##||20||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||Amaranth||##||2||##||0||##||0||##||1||##||25||##||100||##||14||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||0||##||rgb(5, 5, 5)||##||rgb(15, 15, 15)||##||0||##||rgb(0, 0, 0)||##||rgb(163, 0, 38)||##||500||##||capitalize||##||center||##||Arimo||##||10||##||15||##||||##||1||##||15||##||20||##||rgb(0, 0, 0)||##||rgb(0, 179, 101)||##||600||##||capitalize||##||left||##||Arimo||##||0||##||0||##||Save";
    } else if ($_POST['style'] == 'template-04') {
      $css = "_wp_http_referer,id,desktop_item_per_row,tablet_item_per_row,mobile_item_per_row,background_type,background_transparent,template_background_color,box_background_image,image_opacity,youtube_video_url,video_opacity,video_opacity_color,animation_duration,thousands_separator,item_margin,con_6310_box_inner_background_color,con_6310_box_inner_background_hover_color,con_6310_box_outer_1st_background_color,con_6310_box_outer_2nd_background_color,con_6310_box_outer_3rd_background_color,con_6310_box_outer_4th_background_color,con_6310_title_font_size,con_6310_title_line_height,con_6310_title_font_color,con_6310_title_font_hover_color,con_6310_title_font_weight,con_6310_title_text_transform,con_6310_title_text_align,con_6310_title_font_family,con_6310_title_padding_top,con_6310_title_padding_bottom,con_6310_icon_font_size,con_6310_icon_color,con_6310_icon_hover_color,con_6310_icon_margin_top,con_6310_icon_margin_bottom,con_6310_number_font_size,con_6310_number_line_height,con_6310_number_font_color,con_6310_number_font_hover_color,con_6310_number_font_weight,con_6310_number_font_family,con_6310_number_margin_left,con_6310_number_margin_right,con_6310_number_margin_top,con_6310_number_margin_bottom,con_6310_number_prefix_font_size,con_6310_number_prefix_font_color,con_6310_number_prefix_font_hover_color,con_6310_number_prefix_font_weight,con_6310_number_prefix_font_family,con_6310_number_prefix_position,con_6310_number_prefix_margin_left,con_6310_number_prefix_margin_right,con_6310_number_suffix_font_size,con_6310_number_suffix_font_color,con_6310_number_suffix_font_hover_color,con_6310_number_suffix_font_weight,con_6310_number_suffix_font_family,con_6310_number_suffix_position,con_6310_number_suffix_margin_left,con_6310_number_suffix_margin_right,con_6310_read_more_height,con_6310_read_more_width,con_6310_read_more_font_size,con_6310_read_more_font_color,con_6310_read_more_font_hover_color,con_6310_read_more_border_width,con_6310_read_more_box_border_color,con_6310_read_more_border_hover_color,con_6310_read_more_border_radius,con_6310_read_more_background_color,con_6310_read_more_background_hover_color,con_6310_read_more_font_weight,con_6310_read_more_text_transform,con_6310_read_more_text_align,con_6310_read_more_font_family,con_6310_read_more_margin_top,con_6310_read_more_margin_bottom,custom_css,con_6310_details_font_size,con_6310_details_line_height,con_6310_details_font_color,con_6310_details_font_hover_color,con_6310_details_font_weight,con_6310_details_text_transform,con_6310_details_text_align,con_6310_details_font_family,con_6310_details_margin_top,con_6310_details_margin_bottom,update_style_change!!##!!/wordpress-pro/wp-admin/admin.php?page=con-6310-template-01-10&styleid=4||##||4||##||4||##||1||##||1||##||2||##||transparent||##||rgba(255, 255, 255, 1)||##||||##||rgba(255, 255, 255, 0)||##||||##||.7||##||rgba(255, 255, 255, 0)||##||500||##||,||##||15||##||rgba(255, 255, 255, 1)||##||rgba(242, 242, 242, 1)||##||rgba(158, 0, 0, 1)||##||rgba(255, 30, 5, 1)||##||rgba(255, 166, 0, 1)||##||rgba(9, 171, 186, 1)||##||16||##||20||##||rgb(150, 2, 56)||##||rgb(23, 23, 23)||##||600||##||uppercase||##||center||##||Amaranth||##||5||##||5||##||40||##||rgb(184, 22, 22)||##||rgb(0, 104, 130)||##||20||##||10||##||25||##||20||##||rgb(0, 0, 0)||##||rgb(0, 153, 26)||##||600||##||Arimo||##||0||##||0||##||10||##||45||##||20||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||Amaranth||##||2||##||0||##||0||##||20||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||Amaranth||##||2||##||0||##||0||##||25||##||100||##||16||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||3px||##||rgb(43, 43, 43)||##||rgb(255, 255, 255)||##||0||##||rgb(0, 0, 0)||##||rgb(209, 58, 117)||##||100||##||capitalize||##||center||##||Amaranth||##||10||##||10||##||||##||16||##||22||##||rgb(20, 20, 20)||##||rgb(140, 0, 0)||##||200||##||capitalize||##||center||##||Amaranth||##||5||##||5||##||Save";
    } else if ($_POST['style'] == 'template-05') {
      $css = "_wp_http_referer,id,desktop_item_per_row,tablet_item_per_row,mobile_item_per_row,background_type,background_transparent,template_background_color,box_background_image,image_opacity,youtube_video_url,video_opacity,video_opacity_color,animation_duration,thousands_separator,item_margin,con_6310_box_radius,con_6310_box_border_size,con_6310_box_border_color,con_6310_1_background_color,con_6310_2_background_color,con_6310_3_background_color,con_6310_4_background_color,con_6310_5_background_color,con_6310_6_background_color,con_6310_box_shadow_width,con_6310_box_shadow_blur,con_6310_box_shadow_color,con_6310_box_shadow_hover_color,con_6310_title_font_size,con_6310_title_line_height,con_6310_title_font_color,con_6310_title_font_hover_color,con_6310_title_font_weight,con_6310_title_text_transform,con_6310_title_text_align,con_6310_title_font_family,con_6310_title_padding_top,con_6310_title_padding_bottom,con_6310_icon_font_size,con_6310_icon_color,con_6310_icon_hover_color,con_6310_number_font_size,con_6310_number_line_height,con_6310_number_font_color,con_6310_number_font_hover_color,con_6310_number_font_weight,con_6310_number_font_family,con_6310_number_margin_left,con_6310_number_margin_right,con_6310_number_margin_top,con_6310_number_margin_bottom,con_6310_number_prefix_font_size,con_6310_number_prefix_font_color,con_6310_number_prefix_font_hover_color,con_6310_number_prefix_font_weight,con_6310_number_prefix_font_family,con_6310_number_prefix_position,con_6310_number_prefix_margin_left,con_6310_number_prefix_margin_right,con_6310_number_suffix_font_size,con_6310_number_suffix_font_color,con_6310_number_suffix_font_hover_color,con_6310_number_suffix_font_weight,con_6310_number_suffix_font_family,con_6310_number_suffix_position,con_6310_number_suffix_margin_left,con_6310_number_suffix_margin_right,con_6310_fun_template_button,con_6310_read_more_height,con_6310_read_more_width,con_6310_read_more_font_size,con_6310_read_more_font_color,con_6310_read_more_font_hover_color,con_6310_read_more_border_width,con_6310_read_more_box_border_color,con_6310_read_more_border_hover_color,con_6310_read_more_border_radius,con_6310_read_more_background_color,con_6310_read_more_background_hover_color,con_6310_read_more_font_weight,con_6310_read_more_text_transform,con_6310_read_more_text_align,con_6310_read_more_font_family,con_6310_read_more_margin_top,con_6310_read_more_margin_bottom,custom_css,template_details_show_hide,con_6310_details_font_size,con_6310_details_line_height,con_6310_details_font_color,con_6310_details_font_hover_color,con_6310_details_font_weight,con_6310_details_text_transform,con_6310_details_text_align,con_6310_details_font_family,con_6310_details_margin_top,con_6310_details_margin_bottom,update_style_change!!##!!/wordpress-pro/wp-admin/admin.php?page=con-6310-template-01-10&styleid=5||##||5||##||3||##||1||##||1||##||2||##||transparent||##||rgba(209, 209, 209, 0.95)||##||https://pluginsbd.com/wp-content/project-images/counter-number/5.jpg||##||rgba(255, 255, 255, 0.16)||##||||##||.7||##||rgba(255, 255, 255, 0)||##||500||##||\'||##||15||##||8||##||2||##||rgba(255, 255, 255, 1)||##||rgba(0, 58, 85, 1)||##||rgba(2, 148, 116, 1)||##||rgba(153, 6, 33, 1)||##||rgba(0, 126, 158, 1)||##||rgba(107, 8, 153, 1)||##||rgba(143, 68, 68, 0.81)||##||0||##||0||##||rgba(64, 64, 64, 0.65)||##||rgba(51, 51, 51, 0.81)||##||20||##||25||##||rgb(255, 255, 255)||##||rgb(254, 255, 250)||##||400||##||uppercase||##||right||##||Arimo||##||10||##||10||##||45||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||35||##||35||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||300||##||Arimo||##||5||##||5||##||5||##||5||##||20||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||Amaranth||##||2||##||0||##||0||##||20||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||Amaranth||##||2||##||0||##||0||##||1||##||25||##||100||##||15||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||2px||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||0||##||rgb(56, 56, 56)||##||rgb(56, 56, 56)||##||100||##||capitalize||##||left||##||Amaranth||##||10||##||10||##||||##||1||##||15||##||20||##||rgb(255, 255, 255)||##||rgb(247, 247, 247)||##||100||##||capitalize||##||left||##||Shanti||##||1||##||5||##||Save";
    } else if ($_POST['style'] == 'template-06') {
      $css = "_wp_http_referer,id,desktop_item_per_row,tablet_item_per_row,mobile_item_per_row,background_type,background_transparent,template_background_color,box_background_image,image_opacity,youtube_video_url,video_opacity,video_opacity_color,animation_duration,thousands_separator,item_margin,con_6310_box_radius,con_6310_box_background_color,con_6310_box_background_hover_color,con_6310_border_radius,con_6310_box_border_size,con_6310_inner_border_size,con_6310_1_box_border_color,con_6310_2_box_border_color,con_6310_3_box_border_color,con_6310_4_box_border_color,con_6310_5_box_border_color,con_6310_6_box_border_color,con_6310_box_shadow_width,con_6310_box_shadow_blur,con_6310_box_shadow_color,con_6310_box_shadow_hover_color,con_6310_title_font_size,con_6310_title_line_height,con_6310_title_font_color,con_6310_title_font_hover_color,con_6310_title_font_weight,con_6310_title_text_transform,con_6310_title_text_align,con_6310_title_font_family,con_6310_title_padding_top,con_6310_title_padding_bottom,con_6310_icon_font_size,con_6310_number_font_size,con_6310_number_line_height,con_6310_number_font_color,con_6310_number_font_hover_color,con_6310_number_font_weight,con_6310_number_font_family,con_6310_number_margin_left,con_6310_number_margin_right,con_6310_number_margin_top,con_6310_number_margin_bottom,con_6310_number_prefix_font_size,con_6310_number_prefix_font_color,con_6310_number_prefix_font_hover_color,con_6310_number_prefix_font_weight,con_6310_number_prefix_font_family,con_6310_number_prefix_position,con_6310_number_prefix_margin_left,con_6310_number_prefix_margin_right,con_6310_number_suffix_font_size,con_6310_number_suffix_font_color,con_6310_number_suffix_font_hover_color,con_6310_number_suffix_font_weight,con_6310_number_suffix_font_family,con_6310_number_suffix_position,con_6310_number_suffix_margin_left,con_6310_number_suffix_margin_right,con_6310_fun_template_button,con_6310_read_more_height,con_6310_read_more_width,con_6310_read_more_font_size,con_6310_read_more_font_color,con_6310_read_more_font_hover_color,con_6310_read_more_border_width,con_6310_read_more_box_border_color,con_6310_read_more_border_hover_color,con_6310_read_more_border_radius,con_6310_read_more_background_color,con_6310_read_more_background_hover_color,con_6310_read_more_font_weight,con_6310_read_more_text_transform,con_6310_read_more_text_align,con_6310_read_more_font_family,con_6310_read_more_margin_top,con_6310_read_more_margin_bottom,custom_css,template_details_show_hide,con_6310_details_font_size,con_6310_details_line_height,con_6310_details_font_color,con_6310_details_font_hover_color,con_6310_details_font_weight,con_6310_details_text_transform,con_6310_details_text_align,con_6310_details_font_family,con_6310_details_margin_top,con_6310_details_margin_bottom,update_style_change!!##!!/wordpress-pro/wp-admin/admin.php?page=con-6310-template-01-10&styleid=6||##||6||##||3||##||1||##||1||##||2||##||transparent||##||rgba(237, 237, 237, 1)||##||http://localhost/wordpress-pro/wp-content/uploads/2022/02/pexels-sohail-na-807598-scaled.jpg||##||rgba(0, 0, 0, 0.09)||##||||##||.7||##||rgba(255, 255, 255, 0)||##||500||##||.||##||15||##||0||##||rgba(255, 255, 255, 1)||##||rgba(16, 87, 54, 1)||##||50||##||3||##||2||##||rgba(5, 186, 247, 1)||##||rgba(255, 189, 8, 1)||##||rgba(0, 224, 86, 0.97)||##||rgba(217, 0, 130, 0.81)||##||rgba(0, 211, 230, 0.81)||##||rgba(36, 0, 179, 0.81)||##||2||##||5||##||rgba(158, 158, 158, 0.78)||##||rgba(51, 51, 51, 0.01)||##||20||##||25||##||rgb(1, 107, 91)||##||rgb(247, 78, 69)||##||600||##||uppercase||##||center||##||Arimo||##||15||##||5||##||55||##||35||##||40||##||rgb(61, 61, 61)||##||rgb(240, 240, 240)||##||500||##||Amaranth||##||0||##||0||##||0||##||0||##||20||##||rgb(0, 110, 173)||##||rgb(0, 0, 0)||##||600||##||Amaranth||##||6||##||0||##||1||##||20||##||rgb(0, 110, 173)||##||rgb(0, 0, 0)||##||600||##||Amaranth||##||6||##||1||##||0||##||1||##||25||##||100||##||14||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||2px||##||rgb(66, 66, 66)||##||rgb(255, 255, 255)||##||0||##||rgb(66, 66, 66)||##||rgb(3, 46, 91)||##||100||##||capitalize||##||center||##||Amaranth||##||10||##||10||##||||##||1||##||15||##||20||##||rgb(0, 0, 0)||##||rgb(240, 240, 240)||##||600||##||capitalize||##||center||##||Arimo||##||0||##||0||##||Save";
    } else if ($_POST['style'] == 'template-07') {
      $css = "_wp_http_referer,id,desktop_item_per_row,tablet_item_per_row,mobile_item_per_row,background_type,background_transparent,template_background_color,box_background_image,image_opacity,youtube_video_url,video_opacity,video_opacity_color,animation_duration,thousands_separator,item_margin,con_6310_box_radius,con_6310_box_background_color,con_6310_box_background_hover_color,con_6310_box_circle_width,con_6310_outer_circle_border_size,con_6310_inner_circle_border_size,con_6310_inner_1st_circle_color,con_6310_inner_2nd_circle_color,con_6310_box_shadow_width,con_6310_box_shadow_blur,con_6310_box_shadow_color,con_6310_box_shadow_hover_color,con_6310_title_font_size,con_6310_title_line_height,con_6310_title_font_color,con_6310_title_font_hover_color,con_6310_title_font_weight,con_6310_title_text_transform,con_6310_title_text_align,con_6310_title_font_family,con_6310_title_padding_top,con_6310_title_padding_bottom,con_6310_number_font_size,con_6310_number_line_height,con_6310_number_font_color,con_6310_number_font_hover_color,con_6310_number_font_weight,con_6310_number_font_family,con_6310_number_margin_left,con_6310_number_margin_right,con_6310_number_margin_top,con_6310_number_margin_bottom,con_6310_number_prefix_font_size,con_6310_number_prefix_font_color,con_6310_number_prefix_font_hover_color,con_6310_number_prefix_font_weight,con_6310_number_prefix_font_family,con_6310_number_prefix_position,con_6310_number_prefix_margin_left,con_6310_number_prefix_margin_right,con_6310_number_suffix_font_size,con_6310_number_suffix_font_color,con_6310_number_suffix_font_hover_color,con_6310_number_suffix_font_weight,con_6310_number_suffix_font_family,con_6310_number_suffix_position,con_6310_number_suffix_margin_left,con_6310_number_suffix_margin_right,con_6310_fun_template_button,con_6310_read_more_height,con_6310_read_more_width,con_6310_read_more_font_size,con_6310_read_more_font_color,con_6310_read_more_font_hover_color,con_6310_read_more_border_width,con_6310_read_more_box_border_color,con_6310_read_more_border_hover_color,con_6310_read_more_border_radius,con_6310_read_more_background_color,con_6310_read_more_background_hover_color,con_6310_read_more_font_weight,con_6310_read_more_text_transform,con_6310_read_more_text_align,con_6310_read_more_font_family,con_6310_read_more_margin_top,con_6310_read_more_margin_bottom,custom_css,template_details_show_hide,con_6310_details_font_size,con_6310_details_line_height,con_6310_details_font_color,con_6310_details_font_hover_color,con_6310_details_font_weight,con_6310_details_text_transform,con_6310_details_text_align,con_6310_details_font_family,con_6310_details_margin_top,con_6310_details_margin_bottom,update_style_change!!##!!/wordpress-pro/wp-admin/admin.php?page=con-6310-template-01-10&styleid=7||##||7||##||3||##||1||##||1||##||2||##||transparent||##||rgba(166, 166, 166, 0.44)||##||||##||rgba(255, 255, 255, 0)||##||||##||.7||##||rgba(255, 255, 255, 0)||##||500||##||,||##||15||##||0||##||rgba(255, 255, 255, 1)||##||rgba(250, 250, 250, 1)||##||130||##||7||##||3||##||rgba(248, 150, 46, 1)||##||rgba(6, 88, 164, 0.8)||##||0||##||0||##||rgba(56, 56, 56, 0.01)||##||rgba(0, 18, 153, 0.01)||##||24||##||30||##||rgb(6, 88, 164)||##||rgb(148, 0, 17)||##||400||##||uppercase||##||center||##||Amaranth||##||5||##||0||##||35||##||20||##||rgb(6, 88, 164)||##||rgb(0, 161, 142)||##||600||##||Amaranth||##||0||##||0||##||0||##||0||##||20||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||Amaranth||##||2||##||0||##||0||##||20||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||Amaranth||##||2||##||0||##||0||##||1||##||25||##||100||##||15||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||1px||##||rgb(0, 81, 128)||##||rgb(8, 138, 132)||##||0||##||rgb(0, 81, 128)||##||rgb(8, 138, 132)||##||100||##||capitalize||##||center||##||Amaranth||##||5||##||10||##||||##||1||##||15||##||20||##||rgb(64, 64, 64)||##||rgb(11, 71, 140)||##||600||##||capitalize||##||center||##||Amaranth||##||5||##||5||##||Save";
    } else if ($_POST['style'] == 'template-08') {
      $css = "_wp_http_referer,id,desktop_item_per_row,tablet_item_per_row,mobile_item_per_row,background_type,background_transparent,template_background_color,box_background_image,image_opacity,youtube_video_url,video_opacity,video_opacity_color,animation_duration,thousands_separator,item_margin,con_6310_box_radius,con_6310_outer_background_color_top,con_6310_outer_background_color_bottom,con_6310_outer_background_hover_color_top,con_6310_outer_background_hover_color_bottom,con_6310_inner_background_color_top,con_6310_inner_background_color_bottom,con_6310_inner_background_hover_color_top,con_6310_inner_background_hover_color_bottom,con_6310_after_effect_color,con_6310_box_shadow_width,con_6310_box_shadow_blur,con_6310_box_shadow_color,con_6310_box_shadow_hover_color,con_6310_title_font_size,con_6310_title_line_height,con_6310_title_font_color,con_6310_title_font_hover_color,con_6310_title_font_weight,con_6310_title_text_transform,con_6310_title_text_align,con_6310_title_font_family,con_6310_title_padding_top,con_6310_title_padding_bottom,con_6310_icon_font_size,con_6310_icon_color,con_6310_icon_hover_color,con_6310_icon_margin_top,con_6310_icon_margin_bottom,con_6310_number_font_size,con_6310_number_line_height,con_6310_number_font_color,con_6310_number_font_hover_color,con_6310_number_font_weight,con_6310_number_font_family,con_6310_number_margin_left,con_6310_number_margin_right,con_6310_number_margin_top,con_6310_number_margin_bottom,con_6310_number_prefix_font_size,con_6310_number_prefix_font_color,con_6310_number_prefix_font_hover_color,con_6310_number_prefix_font_weight,con_6310_number_prefix_font_family,con_6310_number_prefix_position,con_6310_number_prefix_margin_left,con_6310_number_prefix_margin_right,con_6310_number_suffix_font_size,con_6310_number_suffix_font_color,con_6310_number_suffix_font_hover_color,con_6310_number_suffix_font_weight,con_6310_number_suffix_font_family,con_6310_number_suffix_position,con_6310_number_suffix_margin_left,con_6310_number_suffix_margin_right,con_6310_fun_template_button,con_6310_read_more_height,con_6310_read_more_width,con_6310_read_more_font_size,con_6310_read_more_font_color,con_6310_read_more_font_hover_color,con_6310_read_more_border_width,con_6310_read_more_box_border_color,con_6310_read_more_border_hover_color,con_6310_read_more_border_radius,con_6310_read_more_background_color,con_6310_read_more_background_hover_color,con_6310_read_more_font_weight,con_6310_read_more_text_transform,con_6310_read_more_text_align,con_6310_read_more_font_family,con_6310_read_more_margin_top,con_6310_read_more_margin_bottom,custom_css,template_details_show_hide,con_6310_details_font_size,con_6310_details_line_height,con_6310_details_font_color,con_6310_details_font_hover_color,con_6310_details_font_weight,con_6310_details_text_transform,con_6310_details_text_align,con_6310_details_font_family,con_6310_details_margin_top,con_6310_details_margin_bottom,update_style_change!!##!!/wordpress-pro/wp-admin/admin.php?page=con-6310-template-01-10&styleid=8||##||8||##||3||##||1||##||1||##||4||##||transparent||##||rgba(0, 0, 0, 1)||##||||##||rgba(255, 255, 255, 0)||##||https://www.youtube.com/watch?v=i3IuGdepp4o||##||1||##||rgba(0, 0, 0, 0.06)||##||500||##||,||##||10||##||50||##||rgba(0, 55, 79, 0.85)||##||rgba(105, 203, 255, 0.86)||##||rgba(0, 235, 200, 1)||##||rgba(0, 77, 60, 0.83)||##||rgba(0, 173, 133, 0.97)||##||rgba(250, 250, 250, 1)||##||rgba(18, 0, 110, 1)||##||rgba(240, 240, 240, 0.99)||##||rgba(194, 194, 194, 0.89)||##||4||##||6||##||rgba(33, 33, 33, 0.82)||##||rgba(0, 16, 82, 0.82)||##||18||##||20||##||rgb(0, 87, 70)||##||rgb(153, 0, 31)||##||600||##||uppercase||##||center||##||Arimo||##||13||##||0||##||30||##||rgb(0, 0, 0)||##||rgb(6, 189, 0)||##||5||##||15||##||40||##||30||##||rgb(0, 122, 10)||##||rgb(38, 38, 38)||##||500||##||Amaranth||##||0||##||0||##||4||##||4||##||20||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||Amaranth||##||2||##||0||##||0||##||20||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||Amaranth||##||2||##||0||##||0||##||1||##||26||##||100||##||15||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||0||##||rgb(177, 245, 189)||##||rgb(240, 240, 240)||##||0||##||rgb(0, 128, 124)||##||rgb(48, 48, 48)||##||100||##||capitalize||##||center||##||Amaranth||##||6||##||0||##||||##||1||##||15||##||20||##||rgb(23, 23, 23)||##||rgb(0, 0, 0)||##||600||##||capitalize||##||center||##||Arimo||##||5||##||0||##||Save";
    } else if ($_POST['style'] == 'template-09') {
      $css = "_wp_http_referer,id,desktop_item_per_row,tablet_item_per_row,mobile_item_per_row,background_type,background_transparent,template_background_color,box_background_image,image_opacity,youtube_video_url,video_opacity,video_opacity_color,animation_duration,thousands_separator,item_margin,con_6310_box_radius,con_6310_box_background_color,con_6310_box_background_hover_color,con_6310_box_border_width,con_6310_1_box_border_color,con_6310_2_box_border_color,con_6310_3_box_border_color,con_6310_4_box_border_color,con_6310_5_box_border_color,con_6310_6_box_border_color,con_6310_title_font_size,con_6310_title_line_height,con_6310_title_font_color,con_6310_title_font_weight,con_6310_title_text_transform,con_6310_title_text_align,con_6310_title_font_family,con_6310_title_padding_top,con_6310_title_padding_bottom,con_6310_icon_font_size,con_6310_icon_box_size_number,con_6310_icon_color,con_6310_icon_hover_color,con_6310_icon_background_border_color,con_6310_icon_border_width,con_6310_number_font_size,con_6310_number_line_height,con_6310_number_font_color,con_6310_number_font_hover_color,con_6310_number_font_weight,con_6310_number_font_family,con_6310_number_margin_left,con_6310_number_margin_right,con_6310_number_margin_top,con_6310_number_margin_bottom,con_6310_number_prefix_font_size,con_6310_number_prefix_font_color,con_6310_number_prefix_font_hover_color,con_6310_number_prefix_font_weight,con_6310_number_prefix_font_family,con_6310_number_prefix_position,con_6310_number_prefix_margin_left,con_6310_number_prefix_margin_right,con_6310_number_suffix_font_size,con_6310_number_suffix_font_color,con_6310_number_suffix_font_hover_color,con_6310_number_suffix_font_weight,con_6310_number_suffix_font_family,con_6310_number_suffix_position,con_6310_number_suffix_margin_left,con_6310_number_suffix_margin_right,con_6310_fun_template_button,con_6310_read_more_height,con_6310_read_more_width,con_6310_read_more_font_size,con_6310_read_more_font_color,con_6310_read_more_font_hover_color,con_6310_read_more_border_width,con_6310_read_more_box_border_color,con_6310_read_more_border_hover_color,con_6310_read_more_border_radius,con_6310_read_more_background_color,con_6310_read_more_background_hover_color,con_6310_read_more_font_weight,con_6310_read_more_text_transform,con_6310_read_more_text_align,con_6310_read_more_font_family,con_6310_read_more_margin_top,con_6310_read_more_margin_bottom,custom_css,template_details_show_hide,con_6310_details_font_size,con_6310_details_line_height,con_6310_details_font_color,con_6310_details_font_hover_color,con_6310_details_font_weight,con_6310_details_text_transform,con_6310_details_text_align,con_6310_details_font_family,con_6310_details_margin_top,con_6310_details_margin_bottom,update_style_change!!##!!/wordpress-pro/wp-admin/admin.php?page=con-6310-template-01-10&styleid=9||##||9||##||3||##||1||##||1||##||2||##||transparent||##||rgba(235, 235, 235, 1)||##||http://localhost/wordpress-pro/wp-content/uploads/2022/02/pexels-sohail-na-807598-scaled.jpg||##||rgba(255, 255, 255, 0)||##||||##||.7||##||rgba(255, 255, 255, 0)||##||500||##||,||##||15||##||20||##||rgba(242, 242, 242, 1)||##||rgba(255, 255, 255, 1)||##||10||##||rgba(7, 155, 168, 0.81)||##||rgba(0, 92, 5, 0.93)||##||rgba(176, 0, 103, 0.97)||##||rgba(134, 0, 168, 0.82)||##||rgba(4, 4, 130, 0.82)||##||rgba(4, 81, 133, 0.83)||##||20||##||26||##||rgb(255, 255, 255)||##||500||##||uppercase||##||center||##||Amaranth||##||5||##||5||##||40||##||80||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||rgb(36, 36, 36)||##||2||##||40||##||20||##||rgb(77, 77, 77)||##||rgb(33, 46, 140)||##||600||##||Amaranth||##||0||##||0||##||0||##||15||##||20||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||Amaranth||##||2||##||0||##||0||##||20||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||Amaranth||##||2||##||0||##||0||##||1||##||27||##||100||##||15||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||0||##||rgb(31, 31, 31)||##||rgb(255, 255, 255)||##||0||##||rgb(18, 18, 18)||##||rgb(2, 130, 79)||##||100||##||capitalize||##||center||##||Arimo||##||14||##||0||##||||##||1||##||15||##||18||##||rgb(36, 36, 36)||##||rgb(0, 133, 124)||##||600||##||capitalize||##||center||##||Arimo||##||0||##||0||##||Save";
    } else if ($_POST['style'] == 'template-10') {
      $css = "_wp_http_referer,id,desktop_item_per_row,tablet_item_per_row,mobile_item_per_row,background_type,background_transparent,template_background_color,box_background_image,image_opacity,youtube_video_url,video_opacity,video_opacity_color,animation_duration,thousands_separator,item_margin,con_6310_box_background_color,con_6310_box_background_hover_color,con_6310_1_circle_background_color,con_6310_2_circle_background_color,con_6310_3_circle_background_color,con_6310_4_circle_background_color,con_6310_5_circle_background_color,con_6310_6_circle_background_color,con_6310_box_border_color,con_6310_border_hover_color,con_6310_box_shadow_color,con_6310_box_shadow_hover_color,con_6310_box_circle_size,con_6310_title_font_size,con_6310_title_line_height,con_6310_title_font_color,con_6310_title_font_hover_color,con_6310_title_font_weight,con_6310_title_text_transform,con_6310_title_text_align,con_6310_title_font_family,con_6310_title_padding_top,con_6310_title_padding_bottom,con_6310_icon_font_size,con_6310_icon_color,con_6310_icon_hover_color,con_6310_number_font_size,con_6310_number_line_height,con_6310_number_font_color,con_6310_number_font_hover_color,con_6310_number_font_weight,con_6310_number_font_family,con_6310_number_margin_left,con_6310_number_margin_right,con_6310_number_margin_top,con_6310_number_margin_bottom,con_6310_number_prefix_font_size,con_6310_number_prefix_font_color,con_6310_number_prefix_font_hover_color,con_6310_number_prefix_font_weight,con_6310_number_prefix_font_family,con_6310_number_prefix_position,con_6310_number_prefix_margin_left,con_6310_number_prefix_margin_right,con_6310_number_suffix_font_size,con_6310_number_suffix_font_color,con_6310_number_suffix_font_hover_color,con_6310_number_suffix_font_weight,con_6310_number_suffix_font_family,con_6310_number_suffix_position,con_6310_number_suffix_margin_left,con_6310_number_suffix_margin_right,con_6310_fun_template_button,con_6310_read_more_height,con_6310_read_more_width,con_6310_read_more_font_size,con_6310_read_more_font_color,con_6310_read_more_font_hover_color,con_6310_read_more_border_width,con_6310_read_more_box_border_color,con_6310_read_more_border_hover_color,con_6310_read_more_border_radius,con_6310_read_more_background_color,con_6310_read_more_background_hover_color,con_6310_read_more_font_weight,con_6310_read_more_text_transform,con_6310_read_more_text_align,con_6310_read_more_font_family,con_6310_read_more_margin_top,con_6310_read_more_margin_bottom,custom_css,template_details_show_hide,con_6310_details_font_size,con_6310_details_line_height,con_6310_details_font_color,con_6310_details_font_hover_color,con_6310_details_font_weight,con_6310_details_text_transform,con_6310_details_text_align,con_6310_details_font_family,con_6310_details_margin_top,con_6310_details_margin_bottom,update_style_change!!##!!/wordpress-pro/wp-admin/admin.php?page=con-6310-template-01-10&styleid=10||##||10||##||3||##||1||##||1||##||2||##||transparent||##||rgba(217, 217, 217, 1)||##||||##||rgba(255, 255, 255, 0)||##||||##||.7||##||rgba(255, 255, 255, 0)||##||500||##||,||##||15||##||rgba(217, 217, 217, 1)||##||rgba(255, 255, 255, 1)||##||rgba(163, 0, 16, 1)||##||rgba(0, 111, 166, 1)||##||rgba(254, 98, 35, 1)||##||rgba(39, 214, 167, 1)||##||rgba(179, 0, 98, 1)||##||rgba(255, 174, 0, 1)||##||rgba(255, 255, 255, 1)||##||rgba(255, 255, 255, 1)||##||rgba(77, 77, 77, 0.96)||##||rgba(33, 33, 33, 0.69)||##||180||##||18||##||26||##||rgb(41, 41, 41)||##||rgb(0, 155, 186)||##||600||##||uppercase||##||center||##||Amaranth||##||70||##||5||##||40||##||rgb(255, 255, 102)||##||rgb(255, 255, 255)||##||30||##||20||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||600||##||Amaranth||##||0||##||0||##||10||##||5||##||20||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||Amaranth||##||2||##||0||##||0||##||20||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||100||##||Amaranth||##||2||##||0||##||0||##||1||##||28||##||100||##||15||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||0||##||rgb(177, 245, 189)||##||rgb(255, 255, 255)||##||0||##||rgb(6, 150, 40)||##||rgb(10, 45, 67)||##||100||##||capitalize||##||center||##||Amaranth||##||4||##||15||##||||##||1||##||16||##||20||##||rgb(0, 108, 125)||##||rgb(0, 69, 133)||##||600||##||capitalize||##||center||##||Arimo||##||0||##||5||##||Save";
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
      $url = admin_url("admin.php?page=con-6310-template-01-10&styleid=$redirect_id");
    }
    wp_register_script('cnvb-6310-redirect-script', '');
    wp_enqueue_script('cnvb-6310-redirect-script');
    wp_add_inline_script('cnvb-6310-redirect-script', "document.location.href = '" . $url . "';");
  }
} else {
?>
  <div class="con-6310">
    <h1>Select Template</h1>

    <!-- ******************************************
      template 1 start
    ****************************************** -->

    <div class="con-6310-row con-6310_team-style-boxed">
      <div class="con-6310-padding-15">
        <div class="con-6310-template-preview-01-parallax">
          <div class="con-6310-template-preview-01-common-overlay">
            <iframe src='https://www.youtube.com/embed/?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&playlist=8xjf-K-CVBA&mute=1&allowfullscreen=1&allow=accelerometer&autoplay=1&rel=0' frameborder='0' allowfullscreen></iframe>
            <div class="con-6310-col-2">
              <div class="con-6310-template-preview-01-wrapper">
                <div class="con-6310-template-preview-01-left-section" style="background-image: url(https://www.pluginsbd.com/wp-content/plugin-images/con/1.jpg);"></div>
                <div class="con-6310-template-preview-01-right-section">
                  <div class="con-6310-template-preview-01-icon">
                    <i class="fas fa-network-wired"></i>
                  </div>
                  <div class="con-6310-template-preview-01-number con-6310-counter-number-attrs" id="con-6310-01-1"
                  data-con-6310-start="0" 
                  data-con-6310-end="3420" 
                  data-con-6310-decimal="0" 
                  data-con-6310-duration="2"></div>
                  <div class="con-6310-template-preview-01-title">Post Counter</div>
                  <div class="con-6310-template-preview-01-description">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, accusamus.
                  </div>
                  <div class="con-6310-template-preview-01-read-more">
                      <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="con-6310-col-2">
              <div class="con-6310-template-preview-01-wrapper">
                <div class="con-6310-template-preview-01-left-section" style="background-image: url(https://www.pluginsbd.com/wp-content/plugin-images/con/9.jpg);"></div>
                <div class="con-6310-template-preview-01-right-section">
                  <div class="con-6310-template-preview-01-icon">
                    <i class="fas fa-palette"></i>
                  </div>
                  <div class="con-6310-template-preview-01-number con-6310-counter-number-attrs" id="con-6310-01-2"
                  data-con-6310-start="0" 
                  data-con-6310-end="2230" 
                  data-con-6310-decimal="0" 
                  data-con-6310-duration="2"></div>
                  <div class="con-6310-template-preview-01-title">Visitor Counter</div>
                  <div class="con-6310-template-preview-01-description">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, similique!
                  </div>
                  <div class="con-6310-template-preview-01-read-more">
                      <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                  </div>
                </div>
              </div>
            </div>
          
          </div>
        </div>
      </div>

      <div class="con-6310-template-preview-list">
        Template 1
        <button type="button" class="con-6310-btn-success con_6310_choosen_style" id="template-01">Create Item</button>
      </div>
      <br class="con-6310-clear" />
    </div>

    <!-- ******************************************
      template 2 start
    ****************************************** -->

    <div class="con-6310-row con-6310_team-style-boxed">
      <div class="con-6310-padding-15">
        <div class="con-6310-template-preview-02-parallax">
          <div class="con-6310-template-preview-02-common-overlay">
            <div class="con-6310-col-3">
              <div class="con-6310-preview-02-template">
                <div class="con-6310-preview-02-template-icon">
                  <i class="fa fa-globe"></i>
                </div>
                <div class="con-6310-template-preview-02-title">Subscribers</div>
                <div class="con-6310-preview-02-template-value con-6310-counter-number-attrs" id="con-6310-02-1"
                data-con-6310-start="0" 
                data-con-6310-end="1200" 
                data-con-6310-decimal="0" 
                data-con-6310-duration="2"></div>                 
                <div class="con-6310-template-preview-02-description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
                <div class="con-6310-template-preview-02-read-more">
                    <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                </div>
              </div>
            </div>
            <div class="con-6310-col-3">
              <div class="con-6310-preview-02-template">
                <div class="con-6310-preview-02-template-icon">
                  <i class="fas fa-network-wired"></i>
                </div>
                <div class="con-6310-template-preview-02-title">Page Counter</div>
                <div class="con-6310-preview-02-template-value con-6310-counter-number-attrs" 
                id="con-6310-02-2"
                data-con-6310-start="0" 
                data-con-6310-end="1020" 
                data-con-6310-decimal="0" 
                data-con-6310-duration="2"></div>             
                <div class="con-6310-template-preview-02-description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
                <div class="con-6310-template-preview-02-read-more">
                    <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                </div>
              </div>
            </div>
            <div class="con-6310-col-3">
              <div class="con-6310-preview-02-template">
                <div class="con-6310-preview-02-template-icon">
                  <i class="fas fa-palette"></i>
                </div>
                <div class="con-6310-template-preview-02-title">Visitor Counter</div>
                <div class="con-6310-preview-02-template-value con-6310-counter-number-attrs" 
                id="con-6310-02-3"
                data-con-6310-start="0" 
                data-con-6310-end="1820" 
                data-con-6310-decimal="0" 
                data-con-6310-duration="2"></div>             
                <div class="con-6310-template-preview-02-description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
                <div class="con-6310-template-preview-02-read-more">
                    <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                </div>
              </div>
            </div>
            <div class="con-6310-col-3">
              <div class="con-6310-preview-02-template">
                <div class="con-6310-preview-02-template-icon">
                <i class="fab fa-app-store-ios"></i>
                </div>
                <div class="con-6310-template-preview-02-title">Post Counter</div>
                <div class="con-6310-preview-02-template-value con-6310-counter-number-attrs" 
                id="con-6310-02-4"
                data-con-6310-start="0" 
                data-con-6310-end="1520" 
                data-con-6310-decimal="0" 
                data-con-6310-duration="2"></div>             
                <div class="con-6310-template-preview-02-description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
                <div class="con-6310-template-preview-02-read-more">
                    <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="con-6310-template-preview-list">
        Template 2
        <button type="button" class="con-6310-btn-success con_6310_choosen_style" id="template-02">Create Item</button>
      </div>
      <br class="con-6310-clear" />
    </div>

    <!-- ******************************************
      template 3 start
    ****************************************** -->

    <div class="con-6310-row con-6310_team-style-boxed">
      <div class="con-6310-padding-15">
        <div class="con-6310-template-preview-03-parallax">
          <div class="con-6310-template-preview-03-common-overlay">
            <div class="con-6310-col-4">
              <div class="con-6310-preview-03-template">
                <div class="con-6310-preview-03-template-icon">
                  <i class="fa fa-globe"></i>
                </div>
                <div class="con-6310-template-preview-03-title">Comment Counter</div>
                <div class="con-6310-template-preview-03-description">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
                <div class="con-6310-template-preview-03-read-more">
                  <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                </div>
                <div class="con-6310-preview-03-template-value con-6310-counter-number-attrs" 
                id="con-6310-03-1"
                data-con-6310-start="0" 
                data-con-6310-end="1520" 
                data-con-6310-decimal="0" 
                data-con-6310-duration="2"></div>             
              </div>
            </div>
            <div class="con-6310-col-4">
              <div class="con-6310-preview-03-template">
                <div class="con-6310-preview-03-template-icon">
                  <i class="fas fa-network-wired"></i>
                </div>
                <div class="con-6310-template-preview-03-title">Visitor Counter</div>
                <div class="con-6310-template-preview-03-description">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
                <div class="con-6310-template-preview-03-read-more">
                  <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                </div>
                <div class="con-6310-preview-03-template-value con-6310-counter-number-attrs" 
                id="con-6310-03-2"
                data-con-6310-start="0" 
                data-con-6310-end="1720" 
                data-con-6310-decimal="0" 
                data-con-6310-duration="2"></div>             
              </div>
            </div>
            <div class="con-6310-col-4">
              <div class="con-6310-preview-03-template">
                <div class="con-6310-preview-03-template-icon">
                  <i class="fas fa-palette"></i>
                </div>
                <div class="con-6310-template-preview-03-title">Post Counter</div>
                <div class="con-6310-template-preview-03-description">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
                <div class="con-6310-template-preview-03-read-more">
                  <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                </div>
                <div class="con-6310-preview-03-template-value con-6310-counter-number-attrs" 
                id="con-6310-03-3"
                data-con-6310-start="0" 
                data-con-6310-end="1520" 
                data-con-6310-decimal="0" 
                data-con-6310-duration="2"></div>             
              </div>
            </div>
            <div class="con-6310-col-4">
              <div class="con-6310-preview-03-template">
                <div class="con-6310-preview-03-template-icon">
                <i class="fab fa-app-store-ios"></i>
                </div>
                <div class="con-6310-template-preview-03-title">Subcribers</div>
                <div class="con-6310-template-preview-03-description">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
                <div class="con-6310-template-preview-03-read-more">
                  <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                </div>
                <div class="con-6310-preview-03-template-value con-6310-counter-number-attrs" 
                id="con-6310-03-4"
                data-con-6310-start="0" 
                data-con-6310-end="1860" 
                data-con-6310-decimal="0" 
                data-con-6310-duration="2"></div>             
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="con-6310-template-preview-list">
        Template 3
        <button type="button" class="con-6310-btn-success con_6310_choosen_style" id="template-03">Create Item</button>
      </div>
      <br class="con-6310-clear" />
    </div>

    <!-- ******************************************
       template 4 start
     ****************************************** -->

    <div class="con-6310-row con-6310_team-style-boxed">
      <div class="con-6310-padding-15">
        <div class="con-6310-template-preview-04-parallax">
          <div class="con-6310-template-preview-04-common-overlay">
            <div class="con-6310-col-4">
              <div class="con-6310-preview-04-template-circle">
                <div class="con-6310-preview-04-template">
                  <div class="con-6310-preview-04-template-content">
                    <div class="con-6310-preview-04-template-icon">
                      <i class="fa fa-globe"></i>
                    </div>
                    <div class="con-6310-template-preview-04-title">Review Conter</div>
                    <div class="con-6310-preview-04-template-value con-6310-counter-number-attrs" 
                    id="con-6310-04-1"
                    data-con-6310-start="0" 
                    data-con-6310-end="1860" 
                    data-con-6310-decimal="0" 
                    data-con-6310-duration="2"></div>                  
                  </div>
                </div>
              </div>
            </div>
            <div class="con-6310-col-4">
              <div class="con-6310-preview-04-template-circle">
                  <div class="con-6310-preview-04-template">
                    <div class="con-6310-preview-04-template-content">
                      <div class="con-6310-preview-04-template-icon">
                        <i class="fas fa-network-wired"></i>
                      </div>
                      <div class="con-6310-template-preview-04-title">Post Conter</div>
                      <div class="con-6310-preview-04-template-value con-6310-counter-number-attrs" 
                      id="con-6310-04-2"
                      data-con-6310-start="0" 
                      data-con-6310-end="1560" 
                      data-con-6310-decimal="0" 
                      data-con-6310-duration="2"></div>                
                    </div>
                  </div>
                </div>
            </div>
            <div class="con-6310-col-4">
              <div class="con-6310-preview-04-template-circle">
                  <div class="con-6310-preview-04-template">
                    <div class="con-6310-preview-04-template-content">
                      <div class="con-6310-preview-04-template-icon">
                        <i class="fas fa-palette"></i>
                      </div>
                      <div class="con-6310-template-preview-04-title">Subscribers</div>
                      <div class="con-6310-preview-04-template-value con-6310-counter-number-attrs" 
                      id="con-6310-04-3"
                      data-con-6310-start="0" 
                      data-con-6310-end="1425" 
                      data-con-6310-decimal="0" 
                      data-con-6310-duration="2"></div>                
                    </div>
                  </div>
                </div>
            </div>
            <div class="con-6310-col-4">
              <div class="con-6310-preview-04-template-circle">
                  <div class="con-6310-preview-04-template">
                    <div class="con-6310-preview-04-template-content">
                      <div class="con-6310-preview-04-template-icon">
                        <i class="fab fa-app-store-ios"></i>
                      </div>
                      <div class="con-6310-template-preview-04-title">Comment Counter</div>
                      <div class="con-6310-preview-04-template-value con-6310-counter-number-attrs" 
                      id="con-6310-04-4"
                      data-con-6310-start="0" 
                      data-con-6310-end="1260" 
                      data-con-6310-decimal="0" 
                      data-con-6310-duration="2"></div>                
                    </div>
                  </div>
                </div>
            </div>

          </div>
        </div>
        <div class="con-6310-template-preview-list">
          Template 4
          <button type="button" class="con-6310-btn-success con_6310_choosen_style" id="template-04">Create Item</button>
          <button type="button" class="con-6310-pro-only">Pro Only</button>
        </div>
        <br class="con-6310-clear" />
      </div>
    </div>


    <!-- ******************************************
       template 5 start
     ****************************************** -->

    <div class="con-6310-row con-6310_team-style-boxed">
      <div class="con-6310-padding-15">
        <div class="con-6310-template-preview-05-parallax">
          <div class="con-6310-template-preview-05-common-overlay">
            <div class="con-6310-col-3">
              <div class="con-6310-preview-05-template">
                <div class="con-6310-preview-05-template-left-section">
                  <i class="fa fa-globe"></i>
                </div>        
               <div class="con-6310-preview-05-template-right-section">
               <div class="con-6310-preview-05-template-numbers con-6310-counter-number-attrs" 
                id="con-6310-05-1"
                data-con-6310-start="0" 
                data-con-6310-end="1660" 
                data-con-6310-decimal="0" 
                data-con-6310-duration="2"></div>              
                <div class="con-6310-preview-05-template-name">Visitor Counter</div>
                <div class="con-6310-template-preview-05-description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
                <div class="con-6310-template-preview-05-read-more">
                    <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                </div>
               </div>
              </div>
            </div>
            <div class="con-6310-col-3">
              <div class="con-6310-preview-05-template">
                <div class="con-6310-preview-05-template-left-section">
                  <i class="fas fa-network-wired"></i>
                </div>        
               <div class="con-6310-preview-05-template-right-section">
               <div class="con-6310-preview-05-template-numbers con-6310-counter-number-attrs" 
                id="con-6310-05-2"
                data-con-6310-start="0" 
                data-con-6310-end="1446" 
                data-con-6310-decimal="0" 
                data-con-6310-duration="2"></div>              
                <div class="con-6310-preview-05-template-name">Page Counter</div>
                <div class="con-6310-template-preview-05-description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
                <div class="con-6310-template-preview-05-read-more">
                    <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                </div>
               </div>
              </div>
            </div>
            <div class="con-6310-col-3">
              <div class="con-6310-preview-05-template">
                  <div class="con-6310-preview-05-template-left-section">
                    <i class="fas fa-palette"></i>
                  </div>        
                <div class="con-6310-preview-05-template-right-section">
                <div class="con-6310-preview-05-template-numbers con-6310-counter-number-attrs" 
                id="con-6310-05-3"
                data-con-6310-start="0" 
                data-con-6310-end="1260" 
                data-con-6310-decimal="0" 
                data-con-6310-duration="2"></div>              
                  <div class="con-6310-preview-05-template-name">Subscribers</div>
                  <div class="con-6310-template-preview-05-description">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  </div>
                  <div class="con-6310-template-preview-05-read-more">
                      <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                  </div>
                </div>
                </div>
            </div>
            <div class="con-6310-col-3">
              <div class="con-6310-preview-05-template">
                  <div class="con-6310-preview-05-template-left-section">
                  <i class="fab fa-app-store-ios"></i>
                  </div>        
                <div class="con-6310-preview-05-template-right-section">
                <div class="con-6310-preview-05-template-numbers con-6310-counter-number-attrs" 
                id="con-6310-05-4"
                data-con-6310-start="0" 
                data-con-6310-end="1676" 
                data-con-6310-decimal="0" 
                data-con-6310-duration="2"></div>              
                  <div class="con-6310-preview-05-template-name">Review Counter</div>
                  <div class="con-6310-template-preview-05-description">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  </div>
                  <div class="con-6310-template-preview-05-read-more">
                      <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


      </div>
      <div class="con-6310-template-preview-list">
        Template 5
        <button type="button" class="con-6310-btn-success con_6310_choosen_style" id="template-05">Create Item</button>
        <button type="button" class="con-6310-pro-only">Pro Only</button>
      </div>
      <br class="con-6310-clear" />
    </div>

    <!-- ******************************************
        template 6 start
      ****************************************** -->

    <div class="con-6310-row con-6310_team-style-boxed">
      <div class="con-6310-padding-15">
        <div class="con-6310-template-preview-06-parallax">
          <div class="con-6310-template-preview-06-common-overlay">
            <div class="con-6310-col-3">
              <div class="con-6310-template-preview-06-counter">
                <div class="con-6310-template-preview-06-counter-icon">
                  <i class="fa fa-globe"></i>
                </div>
                <div class="con-6310-template-preview-06-counter-value con-6310-counter-number-attrs" 
                id="con-6310-06-1"
                data-con-6310-start="0" 
                data-con-6310-end="1676" 
                data-con-6310-decimal="0" 
                data-con-6310-duration="2"></div>              
                <div class="con-6310-template-preview-06-title">Visitor Counter</div>
                <div class="con-6310-template-preview-06-description">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
                <div class="con-6310-template-preview-06-read-more">
                  <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                </div>
              </div>
            </div>
            <div class="con-6310-col-3">
              <div class="con-6310-template-preview-06-counter">
                <div class="con-6310-template-preview-06-counter-icon">
                  <i class="fas fa-network-wired"></i>
                </div>
                <div class="con-6310-template-preview-06-counter-value con-6310-counter-number-attrs" 
                id="con-6310-06-2"
                data-con-6310-start="0" 
                data-con-6310-end="1272" 
                data-con-6310-decimal="0" 
                data-con-6310-duration="2"></div>              
                <div class="con-6310-template-preview-06-title">Subscribers</div>
                <div class="con-6310-template-preview-06-description">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
                <div class="con-6310-template-preview-06-read-more">
                  <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                </div>
              </div>
            </div>
            <div class="con-6310-col-3">
              <div class="con-6310-template-preview-06-counter">
                <div class="con-6310-template-preview-06-counter-icon">
                  <i class="fas fa-palette"></i>
                </div>
                <div class="con-6310-template-preview-06-counter-value con-6310-counter-number-attrs" 
                id="con-6310-06-3"
                data-con-6310-start="0" 
                data-con-6310-end="1326" 
                data-con-6310-decimal="0" 
                data-con-6310-duration="2"></div>              
                <div class="con-6310-template-preview-06-title">Post Counter</div>
                <div class="con-6310-template-preview-06-description">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
                <div class="con-6310-template-preview-06-read-more">
                  <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                </div>
              </div>
            </div>
            <div class="con-6310-col-3">
              <div class="con-6310-template-preview-06-counter">
                <div class="con-6310-template-preview-06-counter-icon">
                <i class="fab fa-app-store-ios"></i>
                </div>
                <div class="con-6310-template-preview-06-counter-value con-6310-counter-number-attrs" 
                id="con-6310-06-4"
                data-con-6310-start="0" 
                data-con-6310-end="3346" 
                data-con-6310-decimal="0" 
                data-con-6310-duration="2"></div>              
                <div class="con-6310-template-preview-06-title">Review Conter</div>
                <div class="con-6310-template-preview-06-description">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
                <div class="con-6310-template-preview-06-read-more">
                  <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="con-6310-template-preview-list">
        Template 6
        <button type="button" class="con-6310-btn-success con_6310_choosen_style" id="template-06">Create Item</button>
        <button type="button" class="con-6310-pro-only">Pro Only</button>

      </div>
      <br class="con-6310-clear" />
    </div>

    <!-- ******************************************
      template 7 start
    ****************************************** -->

    <div class="con-6310-row con-6310_team-style-boxed">
      <div class="con-6310-padding-15">
        <div class="con-6310-template-preview-07-parallax">
          <div class="con-6310-template-preview-07-common-overlay">
            <div class="con-6310-col-3">
              <div class="con-6310-template-preview-07-counter">
                <div class="con-6310-template-preview-07-counter-value con-6310-counter-number-attrs" 
                  id="con-6310-07-1"
                  data-con-6310-start="0" 
                  data-con-6310-end="3346" 
                  data-con-6310-decimal="0" 
                  data-con-6310-duration="2"></div>     
                <div class="con-6310-template-preview-07-title">Post Counter</div>
                <div class="con-6310-template-preview-07-description">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
                <div class="con-6310-template-preview-07-read-more">
                  <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                </div>
              </div>
            </div>
            <div class="con-6310-col-3">
              <div class="con-6310-template-preview-07-counter">
                <div class="con-6310-template-preview-07-counter-value con-6310-counter-number-attrs" 
                  id="con-6310-07-2"
                  data-con-6310-start="0" 
                  data-con-6310-end="1256" 
                  data-con-6310-decimal="0" 
                  data-con-6310-duration="2"></div>     
                <div class="con-6310-template-preview-07-title">Subscribers</div>
                <div class="con-6310-template-preview-07-description">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
                <div class="con-6310-template-preview-07-read-more">
                  <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                </div>
              </div>
            </div>
            <div class="con-6310-col-3">
              <div class="con-6310-template-preview-07-counter">
                <div class="con-6310-template-preview-07-counter-value con-6310-counter-number-attrs" 
                  id="con-6310-07-3"
                  data-con-6310-start="0" 
                  data-con-6310-end="4446" 
                  data-con-6310-decimal="0" 
                  data-con-6310-duration="2"></div>     
                <div class="con-6310-template-preview-07-title">Comment Counter</div>
                <div class="con-6310-template-preview-07-description">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
                <div class="con-6310-template-preview-07-read-more">
                  <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                </div>
              </div>
            </div>
            <div class="con-6310-col-3">
              <div class="con-6310-template-preview-07-counter">
                <div class="con-6310-template-preview-07-counter-value con-6310-counter-number-attrs" 
                  id="con-6310-07-4"
                  data-con-6310-start="0" 
                  data-con-6310-end="2326" 
                  data-con-6310-decimal="0" 
                  data-con-6310-duration="2"></div>     
                <div class="con-6310-template-preview-07-title">Comment Counter</div>
                <div class="con-6310-template-preview-07-description">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
                <div class="con-6310-template-preview-07-read-more">
                  <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="con-6310-template-preview-list">
        Template 07
        <button type="button" class="con-6310-btn-success con_6310_choosen_style" id="template-07">Create Item</button>
        <button type="button" class="con-6310-pro-only">Pro Only</button>

      </div>
      <br class="con-6310-clear" />
    </div>

    <!-- ******************************************
      template 8 start
    ****************************************** -->

    <div class="con-6310-row con-6310_team-style-boxed">
      <div class="con-6310-padding-15">
        <div class="con-6310-template-preview-08-parallax">
          <div class="con-6310-template-preview-08-common-overlay">
            <iframe src='https://www.youtube.com/embed/?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&playlist=i3IuGdepp4o&mute=1&allowfullscreen=1&allow=accelerometer&autoplay=1&rel=0' frameborder='0' allowfullscreen></iframe>
            <div class="con-6310-col-3">
              <div class="con-6310-template-preview-08-counter">
                <div class="con-6310-template-preview-08-counter-content">
                  <div class="con-6310-template-preview-08-counter-icon">
                    <i class="fa fa-globe"></i>
                  </div>
                  <div class="con-6310-template-preview-08-counter-value con-6310-counter-number-attrs" 
                    id="con-6310-08-1"
                    data-con-6310-start="0" 
                    data-con-6310-end="2326" 
                    data-con-6310-decimal="0" 
                    data-con-6310-duration="2"></div>     
                  <div class="con-6310-template-preview-08-title">Visitor Counter</div>
                  <div class="con-6310-template-preview-08-description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                  </div>
                  <div class="con-6310-template-preview-08-read-more">
                    <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="con-6310-col-3">
              <div class="con-6310-template-preview-08-counter">
                <div class="con-6310-template-preview-08-counter-content">
                  <div class="con-6310-template-preview-08-counter-icon">
                    <i class="fas fa-network-wired"></i>
                  </div>
                  <div class="con-6310-template-preview-08-counter-value con-6310-counter-number-attrs" 
                    id="con-6310-08-2"
                    data-con-6310-start="0" 
                    data-con-6310-end="3245" 
                    data-con-6310-decimal="0" 
                    data-con-6310-duration="2"></div>     
                  <div class="con-6310-template-preview-08-title">Page Counter</div>
                  <div class="con-6310-template-preview-08-description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                  </div>
                  <div class="con-6310-template-preview-08-read-more">
                    <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="con-6310-col-3">
              <div class="con-6310-template-preview-08-counter">
                <div class="con-6310-template-preview-08-counter-content">
                  <div class="con-6310-template-preview-08-counter-icon">
                    <i class="fas fa-palette"></i>
                  </div>
                  <div class="con-6310-template-preview-08-counter-value con-6310-counter-number-attrs" 
                    id="con-6310-08-3"
                    data-con-6310-start="0" 
                    data-con-6310-end="1768" 
                    data-con-6310-decimal="0" 
                    data-con-6310-duration="2"></div>     
                  <div class="con-6310-template-preview-08-title">Review Counter</div>
                  <div class="con-6310-template-preview-08-description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                  </div>
                  <div class="con-6310-template-preview-08-read-more">
                    <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="con-6310-col-3">
              <div class="con-6310-template-preview-08-counter">
                <div class="con-6310-template-preview-08-counter-content">
                  <div class="con-6310-template-preview-08-counter-icon">
                   <i class="fab fa-app-store-ios"></i>
                  </div>
                  <div class="con-6310-template-preview-08-counter-value con-6310-counter-number-attrs" 
                    id="con-6310-08-4"
                    data-con-6310-start="0" 
                    data-con-6310-end="1126" 
                    data-con-6310-decimal="0" 
                    data-con-6310-duration="2"></div>     
                  <div class="con-6310-template-preview-08-title">Comment Counter</div>
                  <div class="con-6310-template-preview-08-description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                  </div>
                  <div class="con-6310-template-preview-08-read-more">
                    <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="con-6310-template-preview-list">
        Template 08
        <button type="button" class="con-6310-btn-success con_6310_choosen_style" id="template-08">Create Item</button>
        <button type="button" class="con-6310-pro-only">Pro Only</button>

      </div>
      <br class="con-6310-clear" />
    </div>

    <!-- ******************************************
      template 09 start
    ****************************************** -->

    <div class="con-6310-row con-6310_team-style-boxed">
      <div class="con-6310-padding-15">
        <div class="con-6310-template-preview-09-parallax">
          <div class="con-6310-template-preview-09-common-overlay">
            <div class="con-6310-col-3">
              <div class="con-6310-template-preview-09-counter">
                <div class="con-6310-template-preview-09-counter-icon"><i class="fa fa-globe"></i></div>
                <div class="con-6310-template-preview-09-counter-content">
                  <div class="con-6310-template-preview-09-counter-value con-6310-counter-number-attrs" 
                    id="con-6310-09-1"
                    data-con-6310-start="0" 
                    data-con-6310-end="1126" 
                    data-con-6310-decimal="0" 
                    data-con-6310-duration="2"></div>     
                  <div class="con-6310-template-preview-09-title">Review Counter</div>
                  <div class="con-6310-template-preview-09-description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  </div>
                  <div class="con-6310-template-preview-09-read-more">
                    <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="con-6310-col-3">
              <div class="con-6310-template-preview-09-counter">
                <div class="con-6310-template-preview-09-counter-icon"><i class="fas fa-network-wired"></i></div>
                <div class="con-6310-template-preview-09-counter-content">
                  <div class="con-6310-template-preview-09-counter-value con-6310-counter-number-attrs" 
                    id="con-6310-09-2"
                    data-con-6310-start="0" 
                    data-con-6310-end="2326" 
                    data-con-6310-decimal="0" 
                    data-con-6310-duration="2"></div>     
                  <div class="con-6310-template-preview-09-title">Post Counter</div>
                  <div class="con-6310-template-preview-09-description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  </div>
                  <div class="con-6310-template-preview-09-read-more">
                    <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="con-6310-col-3">
              <div class="con-6310-template-preview-09-counter">
                <div class="con-6310-template-preview-09-counter-icon"><i class="fas fa-palette"></i></div>
                <div class="con-6310-template-preview-09-counter-content">
                  <div class="con-6310-template-preview-09-counter-value con-6310-counter-number-attrs" 
                    id="con-6310-09-3"
                    data-con-6310-start="0" 
                    data-con-6310-end="1426" 
                    data-con-6310-decimal="0" 
                    data-con-6310-duration="2"></div>     
                  <div class="con-6310-template-preview-09-title">Subscribers</div>
                  <div class="con-6310-template-preview-09-description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  </div>
                  <div class="con-6310-template-preview-09-read-more">
                    <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="con-6310-col-3">
              <div class="con-6310-template-preview-09-counter">
                <div class="con-6310-template-preview-09-counter-icon">
                  <i class="fab fa-app-store-ios"></i>
                </div>
                <div class="con-6310-template-preview-09-counter-content">
                  <div class="con-6310-template-preview-09-counter-value con-6310-counter-number-attrs" 
                    id="con-6310-09-4"
                    data-con-6310-start="0" 
                    data-con-6310-end="2456" 
                    data-con-6310-decimal="0" 
                    data-con-6310-duration="2"></div>     
                  <div class="con-6310-template-preview-09-title">Comment Counter</div>
                  <div class="con-6310-template-preview-09-description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  </div>
                  <div class="con-6310-template-preview-09-read-more">
                    <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="con-6310-template-preview-list">
        Template 09
        <button type="button" class="con-6310-btn-success con_6310_choosen_style" id="template-09">Create Item</button>
        <button type="button" class="con-6310-pro-only">Pro Only</button>

      </div>
      <br class="con-6310-clear" />
    </div>


    <!-- ******************************************
      template 10 start
    ****************************************** -->

    <div class="con-6310-row con-6310_team-style-boxed">
      <div class="con-6310-padding-15">
        <div class="con-6310-template-preview-10-parallax">
          <div class="con-6310-template-preview-10-common-overlay">
            <!-- <iframe src='https://www.youtube.com/embed/?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&playlist=&mute=1&allowfullscreen=1&allow=accelerometer&autoplay=1&rel=0' frameborder='0' allowfullscreen></iframe> -->
            <div class="con-6310-col-4">
              <div class="con-6310-template-preview-10-counter">
                <div class="con-6310-template-preview-10-counter-content">
                  <div class="con-6310-template-preview-10-counter-icon"><i class="fa fa-globe"></i></div>
                  <div class="con-6310-template-preview-10-counter-value con-6310-counter-number-attrs" 
                    id="con-6310-10-1"
                    data-con-6310-start="0" 
                    data-con-6310-end="3346" 
                    data-con-6310-decimal="0" 
                    data-con-6310-duration="2"></div>     
                </div>
                <div class="con-6310-template-preview-10-title">Visitor Counter</div>
                <div class="con-6310-template-preview-10-description">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
                <div class="con-6310-template-preview-10-read-more">
                  <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                </div>
              </div>
            </div>
            <div class="con-6310-col-4">
              <div class="con-6310-template-preview-10-counter">
                <div class="con-6310-template-preview-10-counter-content">
                  <div class="con-6310-template-preview-10-counter-icon"><i class="fas fa-network-wired"></i></div>
                  <div class="con-6310-template-preview-10-counter-value con-6310-counter-number-attrs" 
                    id="con-6310-10-2"
                    data-con-6310-start="0" 
                    data-con-6310-end="2146" 
                    data-con-6310-decimal="0" 
                    data-con-6310-duration="2"></div>     
                </div>
                <div class="con-6310-template-preview-10-title">Post Counter</div>
                <div class="con-6310-template-preview-10-description">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
                <div class="con-6310-template-preview-10-read-more">
                  <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                </div>
              </div>
            </div>
            <div class="con-6310-col-4">
              <div class="con-6310-template-preview-10-counter">
                <div class="con-6310-template-preview-10-counter-content">
                  <div class="con-6310-template-preview-10-counter-icon"><i class="fas fa-palette"></i></div>
                  <div class="con-6310-template-preview-10-counter-value con-6310-counter-number-attrs" 
                    id="con-6310-10-3"
                    data-con-6310-start="0" 
                    data-con-6310-end="1434" 
                    data-con-6310-decimal="0" 
                    data-con-6310-duration="2"></div>     
                </div>
                <div class="con-6310-template-preview-10-title">Review Counter</div>
                <div class="con-6310-template-preview-10-description">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
                <div class="con-6310-template-preview-10-read-more">
                  <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                </div>
              </div>
            </div>
            <div class="con-6310-col-4">
              <div class="con-6310-template-preview-10-counter">
                <div class="con-6310-template-preview-10-counter-content">
                  <div class="con-6310-template-preview-10-counter-icon">
                    <i class="fab fa-app-store-ios"></i>
                  </div>
                  <div class="con-6310-template-preview-10-counter-value con-6310-counter-number-attrs" 
                    id="con-6310-10-4"
                    data-con-6310-start="0" 
                    data-con-6310-end="1876" 
                    data-con-6310-decimal="0" 
                    data-con-6310-duration="2"></div>     
                </div>
                <div class="con-6310-template-preview-10-title">Page Counter</div>
                <div class="con-6310-template-preview-10-description">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
                <div class="con-6310-template-preview-10-read-more">
                  <a href="https://www.pluginsbd.com" target="_blank">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="con-6310-template-preview-list">
        Template 10
        <button type="button" class="con-6310-btn-success con_6310_choosen_style" id="template-10">Create Item</button>
        <button type="button" class="con-6310-pro-only">Pro Only</button>

      </div>
      <br class="con-6310-clear" />
    </div>
    <!-- ******************************************
      template 10 end
    ****************************************** -->

    <div id="con-6310-modal-add" class="con-6310-modal" style="display: none">
      <div class="con-6310-modal-content con-6310-modal-sm">
        <form action="" method="post">
          <div class="con-6310-modal-header">
            Create Counter Number
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

  <?php } ?>