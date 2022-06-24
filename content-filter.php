<?php
/*
Plugin Name:Content-filter
Description:filter your website's authors articles with this plugin
Plugin URI:https://github.com/yasinmhmmdzd
Author:Yasin Mohammadzade
Author URI:https://github.com/yasinmhmmdzd
Version:1.0.0
*/
define('CF_PLUGIN_DIR' , plugin_dir_path(__FILE__));
define('CF_INC_DIR' ,  CF_PLUGIN_DIR . "/inc/");
define('CF_TPL_DIR' , CF_PLUGIN_DIR . "/template/");
if(is_admin()){
    include CF_INC_DIR . "menus.php";
}
// get filters part
    function filter_first_word($content){
        $word = get_option('content-word1');
        $replace = get_option('filter-word1');
        $content = preg_replace("/{$word}/",$replace, $content);
        return $content;
    }
    function filter_second_word($content){
        $word = get_option('content-word2');
        $replace = get_option('filter-word2');
        $content = preg_replace("/{$word}/",$replace, $content);
        return $content;
    }
    function filter_third_word($content){
        $word = get_option('content-word3');
        $replace = get_option('filter-word3');
        $content = preg_replace("/{$word}/",$replace, $content);
        return $content;
    }
    function filter_fourth_word($content){
        $word = get_option('content-word4');
        $replace = get_option('filter-word4');
        $content = preg_replace("/{$word}/",$replace, $content);
        return $content;  
    }
    function filter_fifth_word($content){
        $word = get_option('content-word5');
        $replace = get_option('filter-word5');
        $content = preg_replace("/{$word}/",$replace, $content);
        return $content;  
    }
    add_filter('the_content' , 'filter_first_word');
    add_filter('the_content' , 'filter_second_word');
    add_filter('the_content' , 'filter_third_word');
    add_filter('the_content' , 'filter_fourth_word');
    add_filter('the_content' , 'filter_fifth_word');
?>