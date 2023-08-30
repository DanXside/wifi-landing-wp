<div <?php
      echo " class='con-6310-noslider con-6310-noslider-" . esc_attr($templateId) . "' ";
      ?>>
   <?php
   
   if ($results) {
      echo "<div class='con-6310-row'>";
      echo "<div class='con-6310-template-" . esc_attr($templateId) . "-main-wrapper'>";
      echo "<div class='con-6310-template-" . esc_attr($templateId) . "-parallax'>";
      if ($bgType == 4) {
         $youtube_video_url = $cssData['youtube_video_url'] ? explode('?v=', esc_attr($cssData['youtube_video_url'])) : [];
         if (isset($youtube_video_url[1])) {
            echo "<iframe src='https://www.youtube.com/embed/" . esc_attr($youtube_video_url[1]) . "?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&playlist=" . esc_attr($youtube_video_url[1]) . "&mute=1&allowfullscreen=1&allow=accelerometer&autoplay=1&rel=0' frameborder='0' allowfullscreen></iframe>";
         }
      }
      echo "<div class='con-6310-template-" . esc_attr($templateId) . "-common-overlay'>";
      foreach ($results as $value) {
         $numbersPosition = ['', ''];
         if ($value->commons != '') {
           $numbersPosition = explode('###|||###', $value->commons); 
         }
   ?>
         <div class="con-6310-col-list con-6310-col-<?php echo esc_attr($cssData['desktop_item_per_row']) ?> ">
            <div class="con-6310-template-<?php echo esc_attr($templateId) ?>">
               <?php con_6310_display_icon($templateId, esc_attr($value->icontype), esc_attr($value->icons), esc_attr($value->hovericons), esc_attr($value->image), esc_attr($value->hoverimage)) ?>
               <div class="con-6310-template-<?php echo esc_attr($templateId) ?>-title"><?php echo con_6310_replace(esc_attr($value->title)) ?></div>
               <div class="con-6310-template-<?php echo esc_attr($templateId) ?>-description">
                  <?php echo con_6310_replace(esc_attr($value->description)) ?>
               </div>
               <?php con_6310_display_read_more($templateId, esc_attr($value->targertype), con_6310_replace(esc_attr($value->detailstext)), esc_url($value->detailsurl)) ?>
               <div class="con-6310-counter-<?php echo esc_attr($templateId) ?>-section-wrapper">
               <div class="con-6310-counter-<?php echo esc_attr($templateId) ?>-section">
                  <?php
                    con_6310_counter_prefix($numbersPosition[0], $templateId);
                    $end_number = con_6310_end_number($value);
                  ?>
                  <div class="con-6310-template-<?php echo esc_attr($templateId) ?>-counter-value con-6310-counter-number-attrs"
                     id="con-6310-<?php echo $styleId."-".$value->id ?>"
                     data-con-6310-start="<?php echo $value->numbers_start; ?>" 
                     data-con-6310-end="<?php echo $end_number; ?>" 
                     data-con-6310-decimal="<?php echo con_6310_number_format($end_number); ?>" 
                     data-con-6310-duration="<?php echo isset($cssData['animation_duration']) && $cssData['animation_duration'] !== '' ? $cssData['animation_duration'] / 1000 : .5; ?>" data-con-6310-thousands-separator="<?php echo con_6310_special_character_remove(isset($cssData['thousands_separator']) ? $cssData['thousands_separator'] : '') ?>"                           
                     > <?php echo $value->numbers_start; ?>
                  </div> 
                  <?php
                     con_6310_counter_suffix($numbersPosition[1], $templateId);
                  ?>  
                  </div> 
               </div>   
            </div>
         </div>
   <?php
      }
      echo "</div>";
      echo "</div>";
      echo "</div>";
      echo "</div>";
   }
   ?>
</div>
