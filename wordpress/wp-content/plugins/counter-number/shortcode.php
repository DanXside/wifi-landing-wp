<?php

global $wpdb;
$style_table = $wpdb->prefix . 'con_6310_style';

$item_table = $wpdb->prefix . 'con_6310_item';
$styledata = $wpdb->get_row($wpdb->prepare("SELECT * FROM $style_table WHERE id = %d ", $ids), ARRAY_A);
if(!$styledata || $styledata == '') return;
$styleTemplate = (int) substr($styledata['style_name'], -2);
$css = explode("!!##!!", $styledata['css']);
$key = explode(",", $css[0]);
$value = explode("||##||", $css[1]);
$filterKey = [];
$filterValue = [];
for($i = 0; $i < count($key); $i++) {
   $filterKey[] = esc_attr($key[$i]);
}
for($i = 0; $i < count($value); $i++) {
   $filterValue[] = esc_attr($value[$i]);
}
$cssData = array_combine($filterKey, $filterValue);
$styleId = substr($styledata['style_name'], -2);

$results = con_6310_extract_item(esc_attr($styledata['itemids']));
$desktop_row = esc_attr($cssData['desktop_item_per_row']);
$tablet_row = esc_attr($cssData['tablet_item_per_row']);
$mobile_row = esc_attr($cssData['mobile_item_per_row']);
$bgType = esc_attr($cssData['background_type']);

if (file_exists(con_6310_plugin_url . "output/{$styledata['style_name']}.php")) {
   $fonts = '';
   $google_font = get_option( 'con_6310_google_font_status');
   if ($google_font != 1) {
      $fonts = str_replace("+", " ", esc_attr($cssData['con_6310_title_font_family']));
      $fonts .= '|' . str_replace("+", " ", esc_attr($cssData['con_6310_details_font_family']));
      $fonts .= '|' . str_replace("+", " ", esc_attr($cssData['con_6310_number_font_family']));
      $fonts .= '|' . str_replace("+", " ", esc_attr($cssData['con_6310_read_more_font_family']));
      $fonts .= '|' . str_replace("+", " ", esc_attr($cssData['con_6310_number_prefix_font_family']));
      $fonts .= '|' . str_replace("+", " ", esc_attr($cssData['con_6310_number_suffix_font_family']));
      wp_enqueue_style("con-6310-google-font-".esc_attr($ids)."", "https://fonts.googleapis.com/css?family={$fonts}");
   }
   wp_enqueue_style('con-6310-font-awesome-5-0-13', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css');
   wp_enqueue_style('con-6310-font-awesome-4-07', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
   ?>
    <div class="con-6310-counter-number"
         con-6310-style-id='<?php echo esc_attr($ids) ?>'
         con-6310-style-desktop='<?php echo esc_attr($cssData['desktop_item_per_row']) ?>'
         con-6310-style-tablet='<?php echo esc_attr($cssData['tablet_item_per_row']) ?>'
         con-6310-style-mobile='<?php echo esc_attr($cssData['mobile_item_per_row']) ?>'         
      >
      <?php include con_6310_plugin_url . "output/".esc_attr($styledata['style_name']).".php"; ?>
   </div>
<?php
   include con_6310_plugin_url . "output/css/_common-css.php";
   include con_6310_plugin_url . "output/css/_css-".esc_attr($styleId).".php";
   wp_enqueue_script('con-6310-counterup', plugins_url('assets/js/jquery.counterup.js', __FILE__), array('jquery'), '1.1.0', true);
   wp_enqueue_script('con-6310-common-output-js', plugins_url('assets/js/con-6310-common-output.js', __FILE__), array('jquery'), TRUE);
} else {
   echo "<p>This template is available on pro only.</p>";
}
