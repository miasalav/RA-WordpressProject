<?php
/* Plugin Name: Register Post-types
   Plugin URI: http://wordpress.org/extend/plugins/post-types/
   Version: 0.1
   Author: Mia Salaveria
   Description: test
   Text Domain: test
   License: GPLv3

  */


class my_plugin {
    public function __construct(){
        add_action("init", array($this,"init"),110);
    }

    public function init(){
        include("post-types.php");
    }
}
  new my_plugin;

?>