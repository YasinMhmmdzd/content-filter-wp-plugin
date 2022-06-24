<?php
add_action('admin_menu' , 'cf_create_menu');
function cf_create_menu(){
    add_menu_page(
        'set your filters' , 
        'content filter' , 
        'manage_options' , 
        'main_setting' ,
        'set_main_menu'
    );
    add_submenu_page(
        'main_setting' ,
        'plugin setting' , 
        'plugin setting' , 
        'manage_options' , 
        'plugin_setting' ,
        'set_plugin_setting_menu'
    );
}
function set_main_menu(){
 include CF_TPL_DIR . "main.php";   
}
function set_plugin_setting_menu(){
    include CF_TPL_DIR . "setting.php";
}
?>