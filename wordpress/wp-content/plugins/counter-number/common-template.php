<div class="con-6310">
   <div class="con-6310-sm">
    <?php 
      include con_6310_plugin_url . 'settings/helper/item-save.php';
      if (!empty($_POST['update_style_change']) && $_POST['update_style_change'] == 'Save' && $_POST['id'] != '') {
        $nonce = $_REQUEST['_wpnonce'];
        if (!wp_verify_nonce($nonce, 'con_6310_nonce_field_form')) {
            die('You do not have sufficient permissions to access this pagess.');
        } else {
            $css = con_6310_extract_data($_POST);
            $wpdb->query($wpdb->prepare("UPDATE $style_table SET css = %s WHERE id = %d", $css, sanitize_text_field($_POST['id'])));
        }
      }
      $styledata = $wpdb->get_row($wpdb->prepare("SELECT * FROM $style_table WHERE id = %d ", $styleId), ARRAY_A);
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
      $results = con_6310_extract_item(esc_attr($styledata['itemids']));
      $tablet_row = isset($cssData['tablet_item_per_row']) ? esc_attr($cssData['tablet_item_per_row']) : 1;
      $mobile_row = isset($cssData['mobile_item_per_row']) ? esc_attr($cssData['mobile_item_per_row']) : 1;
      $bgType = isset($cssData['background_type']) ? esc_attr($cssData['background_type']) : 1;
      
      include con_6310_plugin_url . "settings/form/_form-".esc_attr($templateId).".php";
      include con_6310_plugin_url . "settings/css/_css-".esc_attr($templateId).".php";
    ?>
    <div class="con-6310-plugin-setting-left">
      <div class="con-6310-preview-box">
          <div class="con-6310-preview">
            Preview
            <div style="display: inline; float: right">
              <input type="text" id="con_6310_background_preview"
                class="con-6310-form-input  con-6310-pull-right con_6310_color_picker con_6310_preview_color_chooser" data-format="rgb"
                data-opacity=".8" value="rgba(255, 255, 255, .8)"></div>
          </div>
          <hr />
      </div>
      <div 
        class="con_6310_tabs_panel_preview" 
        data-main-template-id="<?php echo esc_attr($styleId) ?>"
        data-modal-template="<?php echo isset($cssData['modal_template_number']) ? esc_attr($cssData['modal_template_number']) : 1 ?>"
      >
        <div class="con-6310-counter-number"
          con-6310-style-id='<?php echo esc_attr($templateId) ?>'
          con-6310-style-desktop='<?php echo esc_attr($cssData['desktop_item_per_row']) ?>'
          con-6310-style-tablet='<?php echo esc_attr($cssData['tablet_item_per_row']) ?>'
          con-6310-style-mobile='<?php echo esc_attr($cssData['mobile_item_per_row']) ?>'   
        >
            <?php include con_6310_plugin_url . 'settings/templates/' . $styledata['style_name'] . '.php';  ?>
            <?php include con_6310_plugin_url . 'settings/css/_common-css.php';  ?>
            <?php include con_6310_plugin_url . "settings/helper/_helper-".esc_attr($templateId).".php"; ?>
            <?php include con_6310_plugin_url . 'settings/helper/_common-script.php';  ?>
        </div>
      </div>
      <br />
    </div>
    <div class="con-6310-plugin-setting-right">
        <?php 
          con_6310_add_new_media($styleId, $styledata['itemids']);
        ?>
    </div>
   </div>
</div>   