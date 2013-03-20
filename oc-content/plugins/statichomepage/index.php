<?php
/*
Plugin Name: Static Calgary Dollars Home Page
Plugin URI: http://arusha.org
Description: Static custom homepage (frontpage.php) forked from public plugin
Version: 1.5.1
Author: Colin
Author URI: http://arusha.org
Short Name: statichomepage
*/

function statichomepage() {				
		if(!isset($_REQUEST['page'])) {				
			$parse_url = parse_url(osc_base_url());  		
  		$staticPgMgr = new Page() ;
      $staticPage = $staticPgMgr->findByInternalName('_statichomepage') ;
			if(is_array($staticPage) && count($staticPage)>0) {				 			
  			$_REQUEST['page']	=	'page';
  			$_REQUEST['id']	= $staticPage['pk_i_id'];			
  			require_once(osc_current_web_theme_path('frontpage.php'));
        $do = new CWebPage() ;			
        $do->doModel() ;
  			exit;
			}
			else return;
		} 
}

function statichomepage_admin_menu() {
    echo '<h3><a href="#">StaticHomePage</a></h3>
    <ul> 
        <li><a href="'.osc_admin_render_plugin_url('statichomepage/help.php').'">&raquo; '.__('F.A.Q. / Help', 'statichomepage').'</a></li>
    </ul>';
}

function statichomepage_help() {
    osc_admin_render_plugin('statichomepage/help.php') ;
}


// This is needed in order to be able to activate the plugin
osc_register_plugin(__FILE__, '');
// This is a hack to show a Configure link at plugins table (you could also use some other hook to show a custom option panel)
osc_add_hook(__FILE__."_configure", 'statichomepage_help');
// This is a hack to show a Uninstall link at plugins table (you could also use some other hook to show a custom option panel)
osc_add_hook(__FILE__."_uninstall", '');
// Add the help to the menu
osc_add_hook('admin_menu', 'statichomepage_admin_menu');



?>
