<?php

function con_6310_template_01_10()
{
  global $wpdb;
  $style_table = $wpdb->prefix . 'con_6310_style';
  $item_table = $wpdb->prefix . 'con_6310_item';  
  include con_6310_plugin_url . 'header.php';
  if (empty($_GET['styleid'])) {
    include con_6310_plugin_url . 'settings/preview-01-10.php';
  } else if (!empty($_GET['styleid'])) {
    $styleId = (int) ($_GET['styleid']);
    $styledata = $wpdb->get_row($wpdb->prepare("SELECT * FROM $style_table WHERE id = %d ", $styleId), ARRAY_A);
    $templateId = substr($styledata['style_name'], -2);
    $styledata = $wpdb->get_row($wpdb->prepare("SELECT * FROM $style_table WHERE id = %d ", $styleId), ARRAY_A);
    include con_6310_plugin_url . 'common-template.php';
  }
}

function con_6310_template_11_20()
{
  global $wpdb;
  $style_table = $wpdb->prefix . 'con_6310_style';
  $item_table = $wpdb->prefix . 'con_6310_item';  
  include con_6310_plugin_url . 'header.php';
  if (empty($_GET['styleid'])) {
    include con_6310_plugin_url . 'settings/preview-11-20.php';
  } else if (!empty($_GET['styleid'])) {
    $styleId = (int) ($_GET['styleid']);
    $styledata = $wpdb->get_row($wpdb->prepare("SELECT * FROM $style_table WHERE id = %d ", $styleId), ARRAY_A);
    $templateId = substr($styledata['style_name'], -2);
    $styledata = $wpdb->get_row($wpdb->prepare("SELECT * FROM $style_table WHERE id = %d ", $styleId), ARRAY_A);
    include con_6310_plugin_url . 'common-template.php';
  }
}

function con_6310_team_6310_manage_items()
{
  global $wpdb;  
  include con_6310_plugin_url . 'header.php';  
  include con_6310_plugin_url . 'settings/manage-items.php';
}

function con_6310_team_6310_category()
{
  global $wpdb;  
  include con_6310_plugin_url . 'header.php';  
  include con_6310_plugin_url . 'settings/category.php';
}


function con_6310_counter_number_6310_icon()
{
  global $wpdb; 
  include con_6310_plugin_url . 'header.php';
  include con_6310_plugin_url . 'settings/social-icon.php';
}

function con_6310_counter_number_6310_lincense()
{
  global $wpdb;  
  include con_6310_plugin_url . 'header.php';
  include con_6310_plugin_url . 'license.php';
}

function con_6310_counter_number_6310_how_to_use()
{
  global $wpdb; 
  include con_6310_plugin_url . 'header.php';
  include con_6310_plugin_url . 'settings/how-to-use.php';
}

function con_6310_wpmart_plugins()
{
  global $wpdb;
  include con_6310_plugin_url . 'header.php';  
  include con_6310_plugin_url . 'settings/wpmart-plugins.php';
}

function con_6310_counter_number_6310_import_export()
{
  global $wpdb;
  include con_6310_plugin_url . 'header.php';  
  include con_6310_plugin_url . 'settings/import-export-plugins.php';
}