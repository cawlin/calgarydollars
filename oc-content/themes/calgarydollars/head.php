<?php
    /*
     *      Osclass – software for creating and publishing online classified
     *                           advertising platforms
     *
     *                        Copyright (C) 2012 OSCLASS
     *
     *       This program is free software: you can redistribute it and/or
     *     modify it under the terms of the GNU Affero General Public License
     *     as published by the Free Software Foundation, either version 3 of
     *            the License, or (at your option) any later version.
     *
     *     This program is distributed in the hope that it will be useful, but
     *         WITHOUT ANY WARRANTY; without even the implied warranty of
     *        MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
     *             GNU Affero General Public License for more details.
     *
     *      You should have received a copy of the GNU Affero General Public
     * License along with this program.  If not, see <http://www.gnu.org/licenses/>.
     */
?>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />

<title><?php echo meta_title(); ?></title>
<meta name="title" content="<?php echo osc_esc_html(meta_title()); ?>" />
<meta name="description" content="<?php
if(osc_search_category()!=null && is_array(osc_search_category())) {
    if(count(osc_search_category())==1) {
        $category = Category::newInstance()->findByPrimaryKey(current(osc_search_category()));
        echo $category['s_description'];
    }
}
?>" />
<?php if( function_exists('meta_keywords') ) { ?>
<?php if( meta_keywords() != '' ) { ?>
<meta name="keywords" content="<?php echo osc_esc_html(meta_keywords()); ?>" />
<?php } ?>
<?php } ?>
<?php if( osc_get_canonical() != '' ) { ?>
<link rel="canonical" href="<?php echo osc_get_canonical(); ?>"/>
<?php } ?>
<meta http-equiv="Cache-Control" content="no-cache" />
<meta http-equiv="Expires" content="Fri, Jan 01 1970 00:00:00 GMT" />

<script type="text/javascript">
    var fileDefaultText = '<?php echo osc_esc_js( __('No file selected', 'modern') ); ?>';
    var fileBtnText     = '<?php echo osc_esc_js( __('Choose File', 'modern') ); ?>';
</script>

<?php
osc_enqueue_style('style', osc_current_web_theme_url('style.css'));
osc_enqueue_style('tabs', osc_current_web_theme_url('tabs.css'));
osc_enqueue_style('tabs', osc_current_web_theme_url('style.child.css'));

osc_register_script('jquery-uniform', osc_current_web_theme_js_url('jquery.uniform.js'), 'jquery');
osc_register_script('global', osc_current_web_theme_js_url('global.js'));

osc_enqueue_script('jquery');
osc_enqueue_script('jquery-ui');
osc_enqueue_script('jquery-uniform');
osc_enqueue_script('tabber');
osc_enqueue_script('global');
?>

<?php osc_run_hook('header'); ?>