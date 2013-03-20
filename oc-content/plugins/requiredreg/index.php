<?php
/*
Plugin Name: Calgary Dollars Required Fields at Registration
Plugin URI: http://arusha.org
Description: Require more fields at registration process - custom Calgary Dollars Plugin forked from public plugin
Version: 1.0
Author: Colin Sproule
Author URI: http://arusha.org
Short Name: requiredreg
*/


    // NO NEED TO MODIFY ANYTHING ON THIS FILE
    function requiredreg_form() {
        include_once 'form.php';
    }

    // NO NEED TO MODIFY ANYTHING ON THIS FILE
    function requiredreg_save($userId) {
        $userActions = new UserActions(false);
        $input = $userActions->prepareData(false) ;
        User::newInstance()->update($input, array('pk_i_id' => $userId)) ;
    }


    /**
     * ADD HOOKS
     */
    osc_register_plugin(osc_plugin_path(__FILE__), '');
    osc_add_hook(osc_plugin_path(__FILE__)."_uninstall", '');

    // run at registration form
    osc_add_hook('user_register_form', 'requiredreg_form');
    
    // run ONCE the user is registered
    osc_add_hook('user_register_completed', 'requiredreg_save');
    
?>
