<?php
if (!defined('ABSPATH'))
   exit;
?>
<div class="wpm-6310">
   <h1>Plugin Import / Export</h1>

   <button class="con-6310-btn-primary" id="export-counter-number-data">Export Plugin Data <span class="con-6310-pro">(Pro) <div class="con-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></button>
   <button class="con-6310-btn-primary" id="import-counter-number-data">Import Plugin Data <span class="con-6310-pro">(Pro) <div class="con-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></button>
   <?php

   wp_enqueue_media();   

   if (!empty($_POST['update'])) {
      $nonce = $_REQUEST['_wpnonce'];
      if (!wp_verify_nonce($nonce, 'con-6310-nonce-update')) {
         die('You do not have sufficient permissions to access this page.');
      } else {
         if($_POST['file_url'] && substr($_POST['file_url'], -3) == 'txt'){
            con_6310_import_full_plugin($_POST['file_url']);            
         } else{
            echo "<p style='color: red; font-size: 14px;'>Can't import data. Please upload valid file.</p>";
         }
      }
   }
   ?>
   <form action="" method="post">
      <?php wp_nonce_field("con-6310-nonce-update") ?>
      <div class="con-6310-modal-body-form">
         <table width="100%" cellpadding="10" cellspacing="0" class="import-file" style="display: none">
            <tr>
               <td width="70px"><b>File URL</b></td>
               <td>
                  <input type="text" required name="file_url" id="file-url" class="con-6310-form-input" style="width: 300px;">
                  <input type="button" id="upload-csv-file" value="Upload file" class="con-6310-btn-default">
               </td>
            </tr>
            <tr>
               <td colspan="3">
                  <input type="submit" name="update" class="con-6310-btn-primary con-6310-margin-right-10" value="Import Data"  onclick="return confirm('If you import you will lose all of your previous data of this plugin. Do you want to continue?');" />
               </td>
            </tr>
         </table>
      </div>
      <br class="con-6310-clear" />
   </form>
   <script>
      jQuery(document).ready(function() {
         /* ######### Media Start ########### */
         jQuery("body").on("click", "#import-counter-number-data", function(e) {
            alert("This feature is available on the pro version only.");
         });

         jQuery('body').on('click', '#export-counter-number-data', function(){
          alert("This feature is available on the pro version only.")
         });

         jQuery("body").on("click", "#upload-csv-file", function(e) {
            e.preventDefault();
            var image = wp.media({
                  title: 'Upload File',
                  multiple: false
               }).open()
               .on('select', function(e) {
                  var uploaded_image = image.state().get('selection').first();
                  var image_url = uploaded_image.toJSON().url;
                  jQuery("#file-url").val(image_url);
               });

            jQuery("#con_6310_add_new_media").css({
               "overflow-x": "hidden",
               "overflow-y": "auto"
            });
         });
      });
   </script>