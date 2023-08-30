<?php
if (!defined('ABSPATH'))
   exit;
if (!current_user_can('edit_others_pages')) {
   wp_die(__('You do not have sufficient permissions to access this page.'));
}
?>
<div class="con-6310">
   <h1>Counter Number Social Icon <button class="con-6310-btn-success" id="add-social-icon">Add New</button></h1>
   <?php
   if (!defined('ABSPATH'))
      exit;
   if (!current_user_can('manage_options')) {
      wp_die(__('You do not have sufficient permissions to access this page.'));
   }
   if (!empty($_POST['delete']) && isset($_POST['id']) && is_numeric($_POST['id'])) {
      $nonce = $_REQUEST['_wpnonce'];
      if (!wp_verify_nonce($nonce, 'con-6310-nonce-field-delete')) {
         die('You do not have sufficient permissions to access this page.');
      } else {
         $id = (int) sanitize_text_field($_POST['id']);
         $wpdb->query($wpdb->prepare("DELETE FROM {$icon_table} WHERE id = %d", $id));
      }
   } else if (!empty($_POST['save']) && $_POST['save'] == 'Save') {
      $nonce = $_REQUEST['_wpnonce'];
      if (!wp_verify_nonce($nonce, 'con-6310-nonce-add')) {
         die('You do not have sufficient permissions to access this page.');
      } else {
         $name = sanitize_text_field($_POST['name']);
         $class_name = sanitize_text_field($_POST['class_name']);
         $color = sanitize_text_field($_POST['color']);
         $bgcolor = sanitize_text_field($_POST['bgcolor']);

         $wpdb->query($wpdb->prepare("insert into $icon_table SET name = %s, class_name = %s, color = %s, bgcolor = %s", $name, $class_name, $color, $bgcolor));
      }
   } else if (!empty($_POST['update']) && $_POST['update'] == 'Update') {
      $nonce = $_REQUEST['_wpnonce'];
      if (!wp_verify_nonce($nonce, 'con-6310-nonce-update')) {
         die('You do not have sufficient permissions to access this page.');
      } else {
         $id = (int) sanitize_text_field($_POST['id']);
         $name = sanitize_text_field($_POST['name']);
         $class_name = sanitize_text_field($_POST['class_name']);
         $color = sanitize_text_field($_POST['color']);
         $bgcolor = sanitize_text_field($_POST['bgcolor']);

         $wpdb->query($wpdb->prepare("update $icon_table SET name = %s, class_name = %s, color = %s, bgcolor = %s where id=%d", $name, $class_name, $color, $bgcolor, $id));
      }
   } else if (!empty($_POST['edit']) && $_POST['edit'] == 'Edit') {
      $nonce = $_REQUEST['_wpnonce'];
      if (!wp_verify_nonce($nonce, 'con-6310-nonce-field-edit')) {
         die('You do not have sufficient permissions to access this page.');
      } else {
         $id = (int) sanitize_text_field($_POST['id']);
         $selIcon = $wpdb->get_row($wpdb->prepare("SELECT * FROM $icon_table WHERE id = %d ", $id), ARRAY_A);
         ?>
         <div id="con-6310-modal-edit" class="con-6310-modal">
            <div class="con-6310-modal-content con-6310-modal-sm">
               <form action="" method="post">
                  <input type="hidden" name="id" value="<?php echo esc_attr($selIcon['id']) ?>" />
                  <div class="con-6310-modal-header">
                     Social Settings
                     <span class="con-6310-close">&times;</span>
                  </div>
                  <div class="con-6310-modal-body-form">         
                     <?php wp_nonce_field("con-6310-nonce-update") ?>
                     <table border="0" width="100%" cellpadding="10" cellspacing="0">
                        <tr>
                           <td width="50%"><label class="con-6310-form-label" for="icon_name">Icon Name:</label></td>
                           <td><input type="text" required="" name="name" id="icon_name" value="<?php echo esc_attr($selIcon['name']) ?>" class="con-6310-form-input" /></td>
                        </tr>
                        <tr>
                           <td><label class="con-6310-form-label" for="class_name">Font Awesome Class:</label></td>
                           <td><input type="text" required="" name="class_name" id="class_name" value="<?php echo esc_attr($selIcon['class_name']) ?>" class="con-6310-form-input" /></td>
                        </tr>
                        <tr>
                           <td><label class="con-6310-form-label" for="color">Color:</label></td>
                           <td><input type="text" name="color" id="color" class="con-6310-form-input con_6310_color_picker" data-format="rgb" required="" data-opacity=".8" value="<?php echo esc_attr($selIcon['color']) ?>"></td>
                        </tr>
                        <tr>
                           <td><label class="con-6310-form-label" for="bgcolor">Background Color:</label></td>
                           <td><input type="text" name="bgcolor" id="bgcolor" class="con-6310-form-input con_6310_color_picker" data-format="rgb" required="" data-opacity=".8" value="<?php echo esc_attr($selIcon['bgcolor']) ?>"></td>
                        </tr>
                     </table>

                  </div>
                  <div class="con-6310-modal-form-footer">
                     <button type="button" name="close" class="con-6310-btn-danger con-6310-pull-right">Close</button>
                     <input type="submit" name="update" class="con-6310-btn-primary con-6310-pull-right con-6310-margin-right-10" value="Update"/>
                  </div>
               </form>
               <br class="con-6310-clear" />
            </div>
         </div>
         <script>
            
            jQuery(document).ready(function () {
               jQuery('#con-6310-modal-edit').fadeIn(500);
               jQuery("body").css({
                  "overflow": "hidden"
               });
            });
         </script>
         <?php
      }
   }
   ?>

   <table class="con-6310-table">
      <tr>
         <td style="width: 120px">Icon Name</td>
         <td style="width: 120px">Font Awesome</td>
         <td style="width: 100px">Style</td>
         <td style="width: 100px">Edit Delete</td>
      </tr>

      <?php
      $data = $wpdb->get_results('SELECT * FROM ' . $icon_table . ' ORDER BY name ASC', ARRAY_A);
      foreach ($data as $value) {
         echo '<tr>';
         echo '<td>' . $value['name'] . '</td>';
         echo '<td>' . $value['class_name'] . '</td>';
         echo "<td>
                  <button class='con-6310-btn-icon' style='color:" . $value['color'] . "; background-color: " . $value['bgcolor'] . "; margin-right: 5px;'><i class='" . $value['class_name'] . "'></i></button>
                  <i class='" . $value['class_name'] . "' style='color: " . $value['bgcolor'] . "'></i>
                  </td>";
         echo '<td>
                 <form method="post">
                   ' . wp_nonce_field("con-6310-nonce-field-edit") . '
                          <input type="hidden" name="id" value="' . $value['id'] . '">
                          <button class="con-6310-btn-success con-6310-margin-right-10" style="float:left"  title="Edit"  type="submit" value="Edit" name="edit"><i class="fas fa-edit" aria-hidden="true"></i></button>  
                  </form>
                  <form method="post">
                   ' . wp_nonce_field("con-6310-nonce-field-delete") . '
                          <input type="hidden" name="id" value="' . $value['id'] . '">
                          <button class="con-6310-btn-danger" style="float:left"  title="Delete"  type="submit" value="delete" name="delete" onclick="return confirm(\'Do you want to delete?\');"><i class="far fa-times-circle" aria-hidden="true"></i></button>  
                  </form>
                                   
                             </td>';
      }
      ?>


   </table> 
   <div id="con-6310-modal-add" class="con-6310-modal" style="display: none">
      <div class="con-6310-modal-content con-6310-modal-sm">
         <form action="" method="post">
            <div class="con-6310-modal-header">
               Social Settings
               <span class="con-6310-close">&times;</span>
            </div>
            <div class="con-6310-modal-body-form">         
               <?php wp_nonce_field("con-6310-nonce-add") ?>
               <table border="0" width="100%" cellpadding="10" cellspacing="0">
                  <tr>
                     <td width="50%"><label class="con-6310-form-label" for="icon_name">Icon Name:</label></td>
                     <td><input type="text" required="" name="name" id="icon_name" value="" class="con-6310-form-input" placeholder="Facebook" /></td>
                  </tr>
                  <tr>
                     <td><label class="con-6310-form-label" for="class_name">Font Awesome Class:</label></td>
                     <td><input type="text" required="" name="class_name" id="class_name" value="" class="con-6310-form-input" placeholder="fab fa-facebook-f" /></td>
                  </tr>
                  <tr>
                     <td><label class="con-6310-form-label" for="color">Color:</label></td>
                     <td><input type="text" name="color" id="color" class="con-6310-form-input con_6310_color_picker" data-format="rgb" required="" data-opacity=".8" value="rgba(255, 255, 255, 1)"></td>
                  </tr>
                  <tr>
                     <td><label class="con-6310-form-label" for="bgcolor">Background Color:</label></td>
                     <td><input type="text" name="bgcolor" id="bgcolor" class="con-6310-form-input con_6310_color_picker" data-format="rgb" required="" data-opacity=".8" value="rgba(51, 154, 240, 0.8)"></td>
                  </tr>
               </table>

            </div>
            <div class="con-6310-modal-form-footer">
               <button type="button" name="close" class="con-6310-btn-danger con-6310-pull-right">Close</button>
               <input type="submit" name="save" class="con-6310-btn-primary con-6310-pull-right con-6310-margin-right-10" value="Save"/>
            </div>
         </form>
         <br class="con-6310-clear" />
      </div>
   </div>
</div>

<script>
   
   jQuery(document).ready(function () {
      jQuery("body").on("click", "#add-social-icon", function () {
         jQuery("#con-6310-modal-add").fadeIn(500);
         jQuery("body").css({
            "overflow": "hidden"
         });
         return false;
      });

      jQuery("body").on("click", ".con-6310-close, .con-6310-btn-danger", function () {
         jQuery("#con-6310-modal-add, #con-6310-modal-edit").fadeOut(500);
         jQuery("body").css({
            "overflow": "initial"
         });
      });
      jQuery(window).click(function (event) {
         if (event.target == document.getElementById('con-6310-modal-add')) {
            jQuery("#con-6310-modal-add").fadeOut(500);
            jQuery("body").css({
               "overflow": "initial"
            });
         } else if (event.target == document.getElementById('con-6310-modal-edit')) {
            jQuery("#con-6310-modal-edit").fadeOut(500);
            jQuery("body").css({
               "overflow": "initial"
            });
         }
      });

   });
</script>



