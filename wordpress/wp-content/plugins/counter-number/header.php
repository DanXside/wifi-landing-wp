<div class="con-6310-header">
<ul class="con-6310-nav">
    <li>
      <a href="<?php echo admin_url("admin.php?page=con-6310-counter-number"); ?>" class="<?php if(isset($_GET['page']) && $_GET['page'] == 'con-6310-counter-number') echo "con-6310-active" ?>">All Counter Number</a>
    </li>
    <li class="has-dropdown">
      <a class="<?php if(isset($_GET['page']) && ($_GET['page'] == 'con-6310-template-01-10' || $_GET['page'] == 'con-6310-template-11-20')) echo "con-6310-active" ?>">All Templates</a>
      <ul class="dropdown-menu">
        <li>
          <a href="<?php echo admin_url("admin.php?page=con-6310-template-01-10"); ?>" class="<?php if(isset($_GET['page']) && $_GET['page'] == 'con-6310-template-01-10') echo "con-6310-active" ?>">Team Template 01-10</a>
        </li>
        <li>
          <a href="<?php echo admin_url("admin.php?page=con-6310-template-11-20"); ?>" class="<?php if(isset($_GET['page']) && $_GET['page'] == 'con-6310-template-11-20') echo "con-6310-active" ?>">Team Template 11-20</a>
        </li>        
      </ul>
    </li>
    <li>
      <a href="<?php echo admin_url("admin.php?page=con-6310-counter-number-manage-items"); ?>" class="<?php if(isset($_GET['page']) && $_GET['page'] == 'con-6310-counter-number-manage-items') echo "con-6310-active" ?>">Manage Items</a>
    </li>
    <li>
      <a href="<?php echo admin_url("admin.php?page=con-6310-counter-number-license"); ?>" class="<?php if(isset($_GET['page']) && $_GET['page'] == 'con-6310-counter-number-license') echo "con-6310-active" ?>">License</a>
    </li>
    <li>
      <a href="<?php echo admin_url("admin.php?page=con-6310-counter-number-use"); ?>" class="<?php if(isset($_GET['page']) && $_GET['page'] == 'con-6310-counter-number-use') echo "con-6310-active" ?>">How to Use</a>
    </li>
    <li>
      <a href="<?php echo admin_url("admin.php?page=con-6310-wpmart-plugins"); ?>" class="<?php if(isset($_GET['page']) && $_GET['page'] == 'con-6310-wpmart-plugins') echo "con-6310-active" ?> con-6310-plugin-menu">WpMart Plugins</a>
    </li>
    <li>
      <a href="https://www.pluginsbd.com/downloads/animated-number-counters/" target="_blank" class="con-6310-pro">Upgrade to Pro<i class="fas fa-star"></i></a>
    </li>
  </ul>
  <h3>
    <span class="dashicons dashicons-flag"></span>
    Notifications
  </h3>
  <p>Thank you for using Counter Number Free version. I Just wanted to see if you have any questions or concerns about my plugins. If you do, Please do not hesitate to <a href="https://wordpress.org/support/plugin/counter-number-with-slider/" target="_blank">file a bug report</a></p>
  <p>Thanks Again!</p>
  <p></p>
  <?php 
    // echo wp_count_posts( $post_type = 'post' )->publish;
    // print_r($x);
  ?>
</div>