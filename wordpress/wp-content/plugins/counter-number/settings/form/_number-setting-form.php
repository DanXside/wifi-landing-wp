<div id="tab-3">
  <div class="row">
    <h3 class="con-6310-tab-menu-settings">Number Settings</h3>
    <div class="con-6310-col-50">
      <table class="table table-responsive con_6310_admin_table">
        <tr height="45">
          <td width='55%'><b>Font Size</b> <span class="con-6310-pro">(Pro) <div class="con-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
          <td>
            <input type="number" min="0" name="con_6310_number_font_size" value="<?php echo (isset($cssData['con_6310_number_font_size']) && $cssData['con_6310_number_font_size'] !== '') ? $cssData['con_6310_number_font_size']:14;?>" class="con-6310-form-input" id="con_6310_number_font_size" />
          </td>
        </tr>
        <tr height="45">
          <td><b>Line Height</b> <?php con_6310_common_form_pro_tag_add($templateId)  ?></td>
          <td>
            <input type="number" name="con_6310_number_line_height" value="<?php echo (isset($cssData['con_6310_number_line_height']) && $cssData['con_6310_number_line_height'] !== '') ? $cssData['con_6310_number_line_height']:20;?>" class="con-6310-form-input" id="con_6310_number_line_height" />
          </td>
        </tr>
        <tr class="con-6310-hide-font-value-color" height="45">
          <td><b>Font Color</b> <span class="con-6310-pro">(Pro) <div class="con-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
          <td>
            <input type="text" name="con_6310_number_font_color" id="con_6310_number_font_color" class="con-6310-form-input con_6310_color_picker" data-format="rgb" value="<?php echo (isset($cssData['con_6310_number_font_color']) && $cssData['con_6310_number_font_color'] !== '') ? $cssData['con_6310_number_font_color']:'rgb(255, 255, 255)';?>">
          </td>
        </tr>
        <tr class="con-6310-hide-font-value-hover-color" height="45">
          <td><b>Font Hover Color</b> <span class="con-6310-pro">(Pro) <div class="con-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
          <td>
            <input type="text" name="con_6310_number_font_hover_color" id="con_6310_number_font_hover_color" class="con-6310-form-input con_6310_color_picker" data-format="rgb" value="<?php echo (isset($cssData['con_6310_number_font_hover_color']) && $cssData['con_6310_number_font_hover_color'] !== '') ? $cssData['con_6310_number_font_hover_color']:'rgb(255, 255, 255)';?>">
          </td>
        </tr>
        <tr height="45">
          <td width='55%'><b>Font Weight <?php con_6310_common_form_pro_tag_add($templateId)  ?> </b></td>
          <td>
            <select name="con_6310_number_font_weight" class="con-6310-form-input" id="con_6310_number_font_weight">
              <option value="100" <?php echo (isset($cssData['con_6310_number_font_weight']) && $cssData['con_6310_number_font_weight'] == 100) ? 'selected' : '' ?>>100</option>
              <option value="200" <?php echo (isset($cssData['con_6310_number_font_weight']) && $cssData['con_6310_number_font_weight'] == 200) ? 'selected' : '' ?>>200</option>
              <option value="300" <?php echo (isset($cssData['con_6310_number_font_weight']) && $cssData['con_6310_number_font_weight'] == 300) ? 'selected' : '' ?>>300</option>
              <option value="400" <?php echo (isset($cssData['con_6310_number_font_weight']) && $cssData['con_6310_number_font_weight'] == 400) ? 'selected' : '' ?>>400</option>
              <option value="500" <?php echo (isset($cssData['con_6310_number_font_weight']) && $cssData['con_6310_number_font_weight'] == 500) ? 'selected' : '' ?>>500</option>
              <option value="600" <?php echo (isset($cssData['con_6310_number_font_weight']) && $cssData['con_6310_number_font_weight'] == 600) ? 'selected' : '' ?>>600</option>
              <option value="700" <?php echo (isset($cssData['con_6310_number_font_weight']) && $cssData['con_6310_number_font_weight'] == 700) ? 'selected' : '' ?>>700</option>
              <option value="800" <?php echo (isset($cssData['con_6310_number_font_weight']) && $cssData['con_6310_number_font_weight'] == 800) ? 'selected' : '' ?>>800</option>
              <option value="900" <?php echo (isset($cssData['con_6310_number_font_weight']) && $cssData['con_6310_number_font_weight'] == 900) ? 'selected' : '' ?>>900</option>
              <option value="normal" <?php echo (isset($cssData['con_6310_number_font_weight']) && $cssData['con_6310_number_font_weight'] == 'normal') ? 'selected' : '' ?>>Normal</option>
              <option value="bold" <?php echo (isset($cssData['con_6310_number_font_weight']) && $cssData['con_6310_number_font_weight'] == 'bold') ? 'selected' : '' ?>>Bold</option>
              <option value="lighter" <?php echo (isset($cssData['con_6310_number_font_weight']) && $cssData['con_6310_number_font_weight'] == 'lighter') ? 'selected' : '' ?>>Lighter</option>
              <option value="initial" <?php echo (isset($cssData['con_6310_number_font_weight']) && $cssData['con_6310_number_font_weight'] == 'initial') ? 'selected' : '' ?>>Initial</option>
            </select>
          </td>
        </tr>     
        <tr height="45">
          <td><b>Font Family </b> <?php con_6310_common_form_pro_tag_add($templateId)  ?></td>
          <td>
            <input name="con_6310_number_font_family" id="con_6310_number_font_family" type="text" value="<?php echo isset($cssData['con_6310_number_font_family']) && $cssData['con_6310_number_font_family'] !== '' ? $cssData['con_6310_number_font_family'] : 'Amaranth'; ?>" />
          </td>
        </tr>
        <tr height="45">
          <td><b>Margin Left</b> <span class="con-6310-pro">(Pro) <div class="con-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
          <td>
            <input name="con_6310_number_margin_left" id="con_6310_number_margin_left" type="number" value="<?php echo (isset($cssData['con_6310_number_margin_left']) && $cssData['con_6310_number_margin_left'] !== '') ? $cssData['con_6310_number_margin_left']:0;?>" class="con-6310-form-input" />
          </td>
        </tr>
        <tr height="45">
          <td><b>Margin Right</b> <span class="con-6310-pro">(Pro) <div class="con-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
          <td>
            <input name="con_6310_number_margin_right" id="con_6310_number_margin_right" type="number" value="<?php echo (isset($cssData['con_6310_number_margin_right']) && $cssData['con_6310_number_margin_right'] !== '') ? $cssData['con_6310_number_margin_right']:0;?>" class="con-6310-form-input" />
          </td>
        </tr>
        <tr height="45">
          <td><b>Margin Top</b> <?php con_6310_common_form_pro_tag_add($templateId)  ?></td>
          <td>
            <input name="con_6310_number_margin_top" id="con_6310_number_margin_top" type="number" value="<?php echo (isset($cssData['con_6310_number_margin_top']) && $cssData['con_6310_number_margin_top'] !== '') ? $cssData['con_6310_number_margin_top']:0;?>" class="con-6310-form-input" />
          </td>
        </tr>
        <tr height="45">
          <td><b>Margin Bottom</b> <?php con_6310_common_form_pro_tag_add($templateId)  ?></td>
          <td>
            <input name="con_6310_number_margin_bottom" id="con_6310_number_margin_bottom" type="number" value="<?php echo (isset($cssData['con_6310_number_margin_bottom']) && $cssData['con_6310_number_margin_bottom'] !== '') ? $cssData['con_6310_number_margin_bottom']:0;?>" class="con-6310-form-input" />
          </td>
        </tr>
      </table>
    </div>
    <div class="con-6310-col-50">
      <table class="table table-responsive con_6310_admin_table">
        <tr height="45">
          <td width="55%"><b>Activate Number Prefix</b> <span class="con-6310-pro">(Pro) <div class="con-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
          <td>
            <label class="switch">
              <input type="checkbox" <?php echo (isset($cssData['con_6310_prefix_icon_show_hide']) && $cssData['con_6310_prefix_icon_show_hide']) ? ' checked' : '' ?> name="con_6310_prefix_icon_show_hide" value="1" id="con_6310_prefix_icon_show_hide" class="con-6310-form-input" />
              <span class="slider round con_6310_prefix_icon_show_hide"></span>
            </label>
          </td>
        </tr>
        <tr height="45" class="prefix-act-field">
          <td width='55%'><b>Font Size</b> <span class="con-6310-pro">(Pro) <div class="con-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
          <td>
            <input type="number" min="0" name="con_6310_number_prefix_font_size" value="<?php echo isset($cssData['con_6310_number_prefix_font_size']) && $cssData['con_6310_number_prefix_font_size'] !== '' ? $cssData['con_6310_number_prefix_font_size'] : 20; ?>" class="con-6310-form-input" id="con_6310_number_prefix_font_size" />
          </td>
        </tr>
        <tr height="45" class="prefix-act-field con_6310_number_prefix_font_color-hide">
          <td><b>Font Color</b> <span class="con-6310-pro">(Pro) <div class="con-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
          <td>
            <input type="text" name="con_6310_number_prefix_font_color" id="con_6310_number_prefix_font_color" class="con-6310-form-input con_6310_color_picker" data-format="rgb" value="<?php echo isset($cssData['con_6310_number_prefix_font_color']) && $cssData['con_6310_number_prefix_font_color'] !== '' ? $cssData['con_6310_number_prefix_font_color'] : 'rgb(255, 255, 255)'; ?>">
          </td>
        </tr>
        <tr height="45" class="prefix-act-field con_6310_number_prefix_font_hover_color-hide">
          <td><b>Font Hover Color</b> <span class="con-6310-pro">(Pro) <div class="con-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
          <td>
            <input type="text" name="con_6310_number_prefix_font_hover_color" id="con_6310_number_prefix_font_hover_color" class="con-6310-form-input con_6310_color_picker" data-format="rgb" value="<?php echo isset($cssData['con_6310_number_prefix_font_hover_color']) && $cssData['con_6310_number_prefix_font_hover_color'] !== '' ? $cssData['con_6310_number_prefix_font_hover_color'] : 'rgb(255, 255, 255)'; ?>">
          </td>
        </tr>
        <tr height="45" class="prefix-act-field">
          <td width='55%'><b>Font Weight</b> <span class="con-6310-pro">(Pro) <div class="con-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
          <td>
            <select name="con_6310_number_prefix_font_weight" class="con-6310-form-input" id="con_6310_number_prefix_font_weight">
              <option value="100" <?php if (isset($cssData['con_6310_number_prefix_font_weight']) && $cssData['con_6310_number_prefix_font_weight'] == '100') echo " selected=''" ?>>100</option>
              <option value="200" <?php if (isset($cssData['con_6310_number_prefix_font_weight']) && $cssData['con_6310_number_prefix_font_weight'] == '200') echo " selected=''" ?>>200</option>
              <option value="300" <?php if (isset($cssData['con_6310_number_prefix_font_weight']) && $cssData['con_6310_number_prefix_font_weight'] == '300') echo " selected=''" ?>>300</option>
              <option value="400" <?php if (isset($cssData['con_6310_number_prefix_font_weight']) && $cssData['con_6310_number_prefix_font_weight'] == '400') echo " selected=''" ?>>400</option>
              <option value="500" <?php if (isset($cssData['con_6310_number_prefix_font_weight']) && $cssData['con_6310_number_prefix_font_weight'] == '500') echo " selected=''" ?>>500</option>
              <option value="600" <?php if (isset($cssData['con_6310_number_prefix_font_weight']) && $cssData['con_6310_number_prefix_font_weight'] == '600') echo " selected=''" ?>>600</option>
              <option value="700" <?php if (isset($cssData['con_6310_number_prefix_font_weight']) && $cssData['con_6310_number_prefix_font_weight'] == '700') echo " selected=''" ?>>700</option>
              <option value="800" <?php if (isset($cssData['con_6310_number_prefix_font_weight']) && $cssData['con_6310_number_prefix_font_weight'] == '800') echo " selected=''" ?>>800</option>
              <option value="900" <?php if (isset($cssData['con_6310_number_prefix_font_weight']) && $cssData['con_6310_number_prefix_font_weight'] == '900') echo " selected=''" ?>>900</option>
              <option value="normal" <?php if (isset($cssData['con_6310_number_prefix_font_weight']) && $cssData['con_6310_number_prefix_font_weight'] == 'normal') echo " selected=''" ?>>Normal</option>
              <option value="bold" <?php if (isset($cssData['con_6310_number_prefix_font_weight']) && $cssData['con_6310_number_prefix_font_weight'] == 'bold') echo " selected=''" ?>>Bold</option>
              <option value="lighter" <?php if (isset($cssData['con_6310_number_prefix_font_weight']) && $cssData['con_6310_number_prefix_font_weight'] == 'lighter') echo " selected=''" ?>>Lighter</option>
              <option value="initial" <?php if (isset($cssData['con_6310_number_prefix_font_weight']) && $cssData['con_6310_number_prefix_font_weight'] == 'initial') echo " selected=''" ?>>Initial</option>
            </select>
          </td>
        </tr>
        <tr height="45" class="prefix-act-field">
          <td><b>Font Family</b> <span class="con-6310-pro">(Pro) <div class="con-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
          <td>
            <input name="con_6310_number_prefix_font_family" id="con_6310_number_prefix_font_family" type="text" value="<?php echo isset($cssData['con_6310_number_prefix_font_family']) && $cssData['con_6310_number_prefix_font_family'] !== '' ? $cssData['con_6310_number_prefix_font_family'] : 'Amaranth'; ?>" />
          </td>
        </tr>
        <tr height="45" class="prefix-act-field">
          <td><b>Top/Bottom Position</b> <span class="con-6310-pro">(Pro) <div class="con-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
          <td>
            <input type="number" name="con_6310_number_prefix_position" id="con_6310_number_prefix_position" class="con-6310-form-input" value="<?php echo isset($cssData['con_6310_number_prefix_position']) && $cssData['con_6310_number_prefix_position'] !== '' ? $cssData['con_6310_number_prefix_position'] : 2; ?>">
          </td>
        </tr>
        <tr height="45" class="prefix-act-field">
          <td><b>Margin Left</b> <span class="con-6310-pro">(Pro) <div class="con-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
          <td>
            <input name="con_6310_number_prefix_margin_left" id="con_6310_number_prefix_margin_left" type="number" value="<?php echo isset($cssData['con_6310_number_prefix_margin_left']) && $cssData['con_6310_number_prefix_margin_left'] !== '' ? $cssData['con_6310_number_prefix_margin_left'] : 0; ?>" class="con-6310-form-input" />
          </td>
        </tr>
        <tr height="45" class="prefix-act-field">
          <td><b>Margin Right</b> <span class="con-6310-pro">(Pro) <div class="con-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
          <td>
            <input name="con_6310_number_prefix_margin_right" id="con_6310_number_prefix_margin_right" type="number" value="<?php echo isset($cssData['con_6310_number_prefix_margin_right']) && $cssData['con_6310_number_prefix_margin_right'] !== '' ? $cssData['con_6310_number_prefix_margin_right'] : 0; ?>" class="con-6310-form-input" />
          </td>
        </tr>
        <tr height="45">
          <td width="55%"><b>Activate Number Suffix</b> <span class="con-6310-pro">(Pro) <div class="con-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
          <td>
            <label class="switch">
              <input type="checkbox" <?php echo (isset($cssData['con_6310_suffix_icon_show_hide']) && $cssData['con_6310_suffix_icon_show_hide']) ? ' checked' : '' ?> name="con_6310_suffix_icon_show_hide" value="1" id="con_6310_suffix_icon_show_hide" class="con-6310-form-input" />
              <span class="slider round con_6310_suffix_icon_show_hide"></span>
            </label>
          </td>
        </tr>
        <tr height="45" class="suffix-act-field">
          <td width='55%'><b>Font Size</b> <span class="con-6310-pro">(Pro) <div class="con-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
          <td>
            <input type="number" min="0" name="con_6310_number_suffix_font_size" value="<?php echo isset($cssData['con_6310_number_suffix_font_size']) && $cssData['con_6310_number_suffix_font_size'] !== '' ? $cssData['con_6310_number_suffix_font_size'] : 20; ?>" class="con-6310-form-input" id="con_6310_number_suffix_font_size" />
          </td>
        </tr>
        <tr height="45" class="suffix-act-field con_6310_number_suffix_font_color-hide">
          <td><b>Font Color</b> <span class="con-6310-pro">(Pro) <div class="con-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
          <td>
            <input type="text" name="con_6310_number_suffix_font_color" id="con_6310_number_suffix_font_color" class="con-6310-form-input con_6310_color_picker" data-format="rgb" value="<?php echo isset($cssData['con_6310_number_suffix_font_color']) && $cssData['con_6310_number_suffix_font_color'] !== '' ? $cssData['con_6310_number_suffix_font_color'] : 'rgb(255, 255, 255)'; ?>">
          </td>
        </tr>
        <tr height="45" class="suffix-act-field con_6310_number_suffix_font_hover_color-hide">
          <td><b>Font Hover Color</b> <span class="con-6310-pro">(Pro) <div class="con-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
          <td>
            <input type="text" name="con_6310_number_suffix_font_hover_color" id="con_6310_number_suffix_font_hover_color" class="con-6310-form-input con_6310_color_picker" data-format="rgb" value="<?php echo isset($cssData['con_6310_number_suffix_font_hover_color']) && $cssData['con_6310_number_suffix_font_hover_color'] !== '' ? $cssData['con_6310_number_suffix_font_hover_color'] : 'rgb(255, 255, 255)'; ?>">
          </td>
        </tr>
        <tr height="45" class="suffix-act-field">
          <td width='55%'><b>Font Weight</b> <span class="con-6310-pro">(Pro) <div class="con-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
          <td>
            <select name="con_6310_number_suffix_font_weight" class="con-6310-form-input" id="con_6310_number_suffix_font_weight">
              <option value="100" <?php if (isset($cssData['con_6310_number_suffix_font_weight']) && $cssData['con_6310_number_suffix_font_weight'] == '100') echo " selected=''" ?>>100</option>
              <option value="200" <?php if (isset($cssData['con_6310_number_suffix_font_weight']) && $cssData['con_6310_number_suffix_font_weight'] == '200') echo " selected=''" ?>>200</option>
              <option value="300" <?php if (isset($cssData['con_6310_number_suffix_font_weight']) && $cssData['con_6310_number_suffix_font_weight'] == '300') echo " selected=''" ?>>300</option>
              <option value="400" <?php if (isset($cssData['con_6310_number_suffix_font_weight']) && $cssData['con_6310_number_suffix_font_weight'] == '400') echo " selected=''" ?>>400</option>
              <option value="500" <?php if (isset($cssData['con_6310_number_suffix_font_weight']) && $cssData['con_6310_number_suffix_font_weight'] == '500') echo " selected=''" ?>>500</option>
              <option value="600" <?php if (isset($cssData['con_6310_number_suffix_font_weight']) && $cssData['con_6310_number_suffix_font_weight'] == '600') echo " selected=''" ?>>600</option>
              <option value="700" <?php if (isset($cssData['con_6310_number_suffix_font_weight']) && $cssData['con_6310_number_suffix_font_weight'] == '700') echo " selected=''" ?>>700</option>
              <option value="800" <?php if (isset($cssData['con_6310_number_suffix_font_weight']) && $cssData['con_6310_number_suffix_font_weight'] == '800') echo " selected=''" ?>>800</option>
              <option value="900" <?php if (isset($cssData['con_6310_number_suffix_font_weight']) && $cssData['con_6310_number_suffix_font_weight'] == '900') echo " selected=''" ?>>900</option>
              <option value="normal" <?php if (isset($cssData['con_6310_number_suffix_font_weight']) && $cssData['con_6310_number_suffix_font_weight'] == 'normal') echo " selected=''" ?>>Normal</option>
              <option value="bold" <?php if (isset($cssData['con_6310_number_suffix_font_weight']) && $cssData['con_6310_number_suffix_font_weight'] == 'bold') echo " selected=''" ?>>Bold</option>
              <option value="lighter" <?php if (isset($cssData['con_6310_number_suffix_font_weight']) && $cssData['con_6310_number_suffix_font_weight'] == 'lighter') echo " selected=''" ?>>Lighter</option>
              <option value="initial" <?php if (isset($cssData['con_6310_number_suffix_font_weight']) && $cssData['con_6310_number_suffix_font_weight'] == 'initial') echo " selected=''" ?>>Initial</option>
            </select>
          </td>
        </tr>
        <tr height="45" class="suffix-act-field">
          <td><b>Font Family</b> <span class="con-6310-pro">(Pro) <div class="con-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
          <td>
            <input name="con_6310_number_suffix_font_family" id="con_6310_number_suffix_font_family" type="text" value="<?php echo isset($cssData['con_6310_number_suffix_font_family']) && $cssData['con_6310_number_suffix_font_family'] !== '' ? $cssData['con_6310_number_suffix_font_family'] : 'Amaranth'; ?>" />
          </td>
        </tr>
        <tr height="45" class="suffix-act-field">
          <td><b>Top/Bottom Position</b> <span class="con-6310-pro">(Pro) <div class="con-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
          <td>
            <input type="number" name="con_6310_number_suffix_position" id="con_6310_number_suffix_position" class="con-6310-form-input" value="<?php echo isset($cssData['con_6310_number_suffix_position']) && $cssData['con_6310_number_suffix_position'] !== '' ? $cssData['con_6310_number_suffix_position'] : 2; ?>">
          </td>
        </tr>
        <tr height="45" class="suffix-act-field">
          <td><b>Margin Left</b> <span class="con-6310-pro">(Pro) <div class="con-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
          <td>
            <input name="con_6310_number_suffix_margin_left" id="con_6310_number_suffix_margin_left" type="number" value="<?php echo isset($cssData['con_6310_number_suffix_margin_left']) && $cssData['con_6310_number_suffix_margin_left'] !== '' ? $cssData['con_6310_number_suffix_margin_left'] : 0; ?>" class="con-6310-form-input" />
          </td>
        </tr>
        <tr height="45" class="suffix-act-field">
          <td><b>Margin Right</b> <span class="con-6310-pro">(Pro) <div class="con-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
          <td>
            <input name="con_6310_number_suffix_margin_right" id="con_6310_number_suffix_margin_right" type="number" value="<?php echo isset($cssData['con_6310_number_suffix_margin_right']) && $cssData['con_6310_number_suffix_margin_right'] !== '' ? $cssData['con_6310_number_suffix_margin_right'] : 0; ?>" class="con-6310-form-input" />
          </td>
        </tr>
      </table>
    </div>
  </div>
</div>