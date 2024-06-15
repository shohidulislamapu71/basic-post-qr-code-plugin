<?php
/**
 * Plugin Name: Basic Post Qr Code
 * Plugin URI: https://wordpress.org/plugins/our-first-plugin
 * Description: This is Basic Post Qr Code plugin
 * Version: 1.0.0
 * Author: Sohidul Islam Apu
 * Author URI: https://wordpress.org/plugins/our-first-plugin
 */

class Basic_Post_Qr_Code_plugin {

    public function __construct() {
        add_action("init", [$this, "initialize"]);
    }

    function initialize() {
        add_filter("the_content", [$this, "disply_qr_code"]);
    }

    function disply_qr_code($contnet){

        $url = get_permalink();
        $qr_code = "<img src='https://api.qrserver.com/v1/create-qr-code/?data={$url}&amp;size=100x100'/>";
        return $contnet . "<p>$qr_code</p>";

    }

}


new Basic_Post_Qr_Code_plugin();

?>
<?php
