<?php
  /*
  Plugin name: Form data
  Plugin URI:
  Description: A simple wordpress plugin
  Author: Badal Mandal
  Author URI: 
  Version: 1.0
  */

  register_activation_hook(__FILE__,'form_data_activate');
  register_deactivation_hook(__FILE__,'form_data_deactivate');
  
 function form_data_activate(){
	  global $wpdb;
	  global $table_prifix;
	  $table=$table_prifix.'form_data';
	  $sql="CREATE TABLE `$table` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;ALTER TABLE $table
  ADD PRIMARY KEY (`id`);ALTER TABLE `$table`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;";
  $wpdb->query($sql);
  //require_once(ABSPATH ."wp-admin/includes/upgrade.php");
  //dbDelta($sql);
  }
   
   function form_data_deactivate(){
	  
      global $wpdb;
	  global $table_prifix;
	  $table=$table_prifix.'form_data';	
      $sql="DROP TABLE `$table`";	 
      $wpdb->query($sql);	  
	   
   }
   
  

?>