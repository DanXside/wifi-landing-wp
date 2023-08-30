<div <?php
      echo " class='con-6310-noslider con-6310-noslider-" . esc_attr($ids) . "' ";
      ?>>
   <?php
   
   if ($results) {
      echo "<div class='con-6310-row'>";
      echo "<div class='con-6310-template-" . esc_attr($ids) . "-main-wrapper'>";
      echo "<div class='con-6310-template-" . esc_attr($ids) . "-parallax'>";
     
      echo "<div class='con-6310-template-" . esc_attr($ids) . "-common-overlay'>";
      foreach ($results as $value) {
         $numbersPosition = ['', ''];
         if ($value->commons != '') {
           $numbersPosition = explode('###|||###', $value->commons); 
         }
   ?>
         <div class="con-6310-col-list con-6310-col-<?php echo esc_attr($cssData['desktop_item_per_row']) ?> ">
            <div class="con-6310-template-<?php echo esc_attr($ids) ?>">
               <?php con_6310_display_icon_free_output($ids, esc_attr($value->icontype), esc_attr($value->icons), '', '', '') ?>
               <div class="con-6310-template-<?php echo esc_attr($ids) ?>-title"><?php echo con_6310_replace(esc_attr($value->title)) ?></div>  
               <div class="con-6310-counter-<?php echo esc_attr($ids) ?>-section-wrapper">
               <div class="con-6310-counter-<?php echo esc_attr($ids) ?>-section">
                  <?php
                     $end_number = con_6310_end_number($value);
                  ?>
                  <div class="con-6310-template-<?php echo esc_attr($ids) ?>-counter-value con-6310-counter-number-attrs"
                     id="con-6310-<?php echo $styleId."-".$value->id ?>"
                     data-con-6310-start="0" 
                     data-con-6310-end="<?php echo $value->numbers ?>" 
                     data-con-6310-decimal="<?php echo con_6310_number_format($end_number); ?>" 
                     data-con-6310-duration=".5"
                     data-con-6310-thousands-separator=","                            
                     > 0
                  </div> 
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
