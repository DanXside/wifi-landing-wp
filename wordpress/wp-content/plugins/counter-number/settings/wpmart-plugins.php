<?php
if (!defined('ABSPATH'))
   exit;

?>
<div class="con-6310">
   <div class="con-6310-row con-6310-row-plugins">
      <h1 class="con-6310-wpmart-all-plugins">WpMart Plugins</h1>
   </div>
</div>
<script>
   jQuery.getJSON('https://demo.tcsesoft.com/plugins/', function(data) {
      let htmlCode = '';
      for(let i = 0; i < data.length; i++) {
         htmlCode += `
         <div class="con-6310-col-3">
            <div class="con-6310-wpmart-plugins">
               <a href="${data[i].url}" target="_blank">
                  <img src="${data[i].image}" alt="${data[i].title}" class="con-image-responsive">
                  <p>${data[i].title}</p>
               </a>
            </div>
         </div>`;
      }
      jQuery('.con-6310-wpmart-all-plugins').after(htmlCode);
   });
</script>