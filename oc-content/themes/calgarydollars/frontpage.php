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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="<?php echo str_replace('_', '-', osc_current_user_locale()); ?>">
    <head>
        <?php osc_current_web_theme_path('head.php'); ?>
        <meta name="robots" content="noindex, nofollow" />
        <meta name="googlebot" content="noindex, nofollow" />
		<style type="text/css" media="screen">#search-head {display: none;}</style>
    </head>
    <body>
        <?php osc_current_web_theme_path('header.php'); ?>
        <div id="frontpage" class='content home'>
            <h1><?php echo osc_static_page_title(); ?></h1>
            <div><?php echo osc_static_page_text(); ?></div>
			
			<div id="splash">
				<div class="searchwrap">
		            <?php osc_current_web_theme_path('inc.search.php'); ?>
		        </div>
			</div>
						
			<div class="large">
				<p>This is the place to come to when wanting to buy and sell using Calgary Dollars. Browse our Listings to find the item you need, or browse our business directory to get a sense of where you can spend your Calgary Dollars.</p>
			<p>Once you have registered, you can enter classified ads as listings for goods or services for sale, to earn Calgary Dollars (C$) or a percentage of regular Canadian dollars, to keep supporting our local economy!</p>
			</div>
			
			<table class="columns">
				<tr>
					<td class="first">
						<p><img src="<?php echo osc_current_web_theme_url(); ?>/images/frontpage/column-1.jpg" width="300" height="200" alt=""></p>
						<h3>Become a Calgary Dollars Member</h3>
						<p>Interested in engaging in the local economy?  Start by joining Calgary Dollars (C$).  By joining, you can start listing your goods or services for sale via our Listings Site, AND we’ll give you free C$20 just for signing up.  Three simple steps:  register, place an ad, and do the survey. It takes around 10 minutes.</p>
						<p><a href="<?php echo osc_base_url(); ?>/user/register">To join Calgary Dollars, click here!</a></p>
					</td>
					<td>
						<p><img src="<?php echo osc_current_web_theme_url(); ?>/images/frontpage/column-2.jpg" width="300" height="200" alt="Come out to a Calgary Dollars Market"></p>
						<h3>Come to a Calgary Dollars Market</h3>
						<p>Calgary Dollar Markets are a great way to start exchanging in C$.  Come browse our vendors’ goods and services, or get a free vendor table to sell your own.  Either way, there’ll be a great meal to eat, and community to meet.</p>
						<p>Every 2nd Monday of every month in the Bow Cliff Seniors at the Spruce Cliff Community Centre.  All ages welcome!</p>
						<p><a href="http://calgarydollars.ca/markets.html" class="button">For more information about our Markets, directions and dates, click here!</a></p>
					</td>
					<td class="last">
						<p><img src="<?php echo osc_current_web_theme_url(); ?>/images/frontpage/column-3.jpg" width="300" height="200" alt="Calgary's Complimentary Currency - Calgary Dollars"></p>
						<h3>Learn More About Calgary Dollars</h3>
					<p>What are Calgary Dollars?  Why post an ad listing with us?  How does this site work?  Why join?  Find answers to this, costs, and how to get the most out of what you need.</p>
					<p><a href="<?php echo osc_base_url(); ?>/how_this_works">Learn more about Calgary Dollars, and how it works, click here.</a></p>
					</td>
				</tr>
			</table>		
			
			<div id="main" class="front-main">
				<div class="latest_ads">
	                 <h1><strong><?php _e('Latest Calgary Dollars Listings', 'modern'); ?></strong></h1>
	                 <?php if( osc_count_latest_items() == 0) { ?>
	                     <p class="empty"><?php _e('No Latest Listings', 'modern'); ?></p>
	                 <?php } else { ?>
	                     <table border="0" cellspacing="0">
	                          <tbody>
	                             <?php $class = "even"; ?>
	                             <?php while ( osc_has_latest_items() ) { ?>
	                              <tr class="<?php echo $class. (osc_item_is_premium()?" premium":""); ?>">
	                                     <?php if( osc_images_enabled_at_items() ) { ?>
	                                      <td class="photo">
	                                         <?php if( osc_count_item_resources() ) { ?>
	                                             <a href="<?php echo osc_item_url(); ?>">
	                                                 <img src="<?php echo osc_resource_thumbnail_url(); ?>" width="75" height="56" title="<?php echo osc_item_title(); ?>" alt="<?php echo osc_item_title(); ?>" />
	                                             </a>
	                                         <?php } else { ?>
	                                             <img src="<?php echo osc_current_web_theme_url('images/no_photo.gif'); ?>" alt="" title="" />
	                                         <?php } ?>
	                                      </td>
	                                     <?php } ?>
	                                      <td class="text">
						                     <h3>
						                         <a href="<?php echo osc_item_url(); ?>"><?php echo osc_highlight( strip_tags( osc_item_title() ) ); ?></a>
						                     </h3>
						                     <p>
						                         <strong>$ <?php if( osc_price_enabled_at_items() ) { echo osc_item_formated_price(); ?> &#8594; <?php } ?>
															<?php if( osc_count_item_meta() >= 1 ) { ?>
																<?php while ( osc_has_item_meta() ) { ?>
																	<?php if(osc_item_meta_value()!='') { ?>
																			<?php echo osc_item_meta_value(); ?>
																	<?php } ?>
																<?php } ?>
															<?php } ?>
												</strong> -
												<em><?php echo osc_format_date(osc_item_pub_date()); ?></em>
											</p>
						                     <p><?php echo osc_highlight( strip_tags( osc_item_description() ) ); ?></p>
						                 </td>
	                                  </tr>
	                                 <?php $class = ($class == 'even') ? 'odd' : 'even'; ?>
	                             <?php } ?>
	                         </tbody>
	                     </table>
	                     <?php if( osc_count_latest_items() == osc_max_latest_items() ) { ?>
	                     <p class='pagination'><?php echo osc_search_pagination(); ?></p>
	                         <p class="see_more_link"><a href="<?php echo osc_search_show_all_url();?>"><strong><?php _e("See all offers", 'modern'); ?> &raquo;</strong></a></p>
	                     <?php } ?>
	                 <?php View::newInstance()->_erase('items'); } ?>
	             </div>
			</div>
        </div><!-- end #frontpage -->

        <?php osc_current_web_theme_path('footer.php'); ?>

    </body>
</html>