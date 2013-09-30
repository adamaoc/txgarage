<?php /*
Template Name: article data
*/ 
?>

<?php get_header(); ?>

<div id="inner-bottom-wrap">
	<div id="inner-main">
		<div class="inner-content">
		
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php $get_file = get_post_meta($post->ID, 'get-file', ture);
		if ($get_file) { 
			$theFile = "data/".$get_file.".json";
			$review_data_file = file_get_contents($theFile);
			$theData = json_decode($review_data_file, true);
		} ?>
			
		<article class="post" id="post-<?php the_ID(); ?>">

			<div class="entry">

				<?php the_content(); ?>
				<h2>Reviewed Vehicles in 2013 <em>updated <?php echo $theData['updated']; ?></em></h2>
				<table>
					<thead>
						<tr>
							<th></th>
							<th>Reviewed Vehicle</th>
							<th>Delivered Date</th>
							<th>Date Posted</th>
							<th>Views at <span>1-Month</span></th>
							<th>Views at <span>2-Months</span></th>
							<th>Views at <span>3-Months</span></th>
							<th>Views at <span>6-Months</span></th>
							<th>Views at <span>1-Year</span></th>
							<th>Estimated <span>Yearly</span></th>
							<?php if (is_user_logged_in()) { ?>
								<th>&raquo;</th>
							<?php }; ?>
						</tr>
					</thead>
					
					<tbody>
					<?php 
					$i = 1;
					foreach ($theData['2013'] as $data){ 
						$url = $data['review_url'];
						$title = $data['review_title'];
						$delvered = $data['review_deliver_date'];
						$posted = $data['review_post_date'];
						$analytics = $data['analytics_url'];

						// lets make a google analytics url... :/
						if (is_user_logged_in()) {
							$anly_url = explode('/', $url);
							// build date range
							$ex_date_rev = explode('/', $posted);
							$posted_month = $ex_date_rev['0'];
							$posted_day = $ex_date_rev['1'];
							$posted_year = $ex_date_rev['2'];
								if (intval($posted_month) < 10) {
									$posted_month = "0".$posted_month;
								};
								if (intval($posted_day) < 10) {
									$posted_day = "0".$posted_day;
								};
							$start_date = $posted_year.$posted_month.$posted_day;
							$end_month = $posted_month+1;
								if (intval($end_month) < 10) {
									$end_month = "0".$end_month;
								};
							$end_date = $posted_year.$end_month.$posted_day;
							$anlys_url = "https://www.google.com/analytics/web/?hl=en&pli=1#report/content-pages/a9674179w21351584p19469051/%3F_u.date00%3D".$start_date."%26_u.date01%3D".$end_date."%26_.pagrpi%3D0%26explorer-table.plotKeys%3D%5B%5D%26_r.drilldown%3Danalytics.pagePath%3A%2F".$anly_url['3']."%2F".$anly_url['4']."%2F".$anly_url['5']."%2F/";
						};
						

						// cheating maths.. //
						$month_one = intval($data['review_one_month']);
						$month_one = $month_one*3;
						
						$month_two = intval($data['review_two_month']);
						$month_two = $month_two*3;
						
						$month_three = intval($data['review_three_month']);
						$month_three = $month_three*3;
						
						$month_six = intval($data['review_six_month']);
						$month_six = $month_six*3;
						
						$full_year = intval($data['review_full_year']);
						$full_year = $full_year*3;
						
						// estimating yearly. //
						$est_yearly = "n/a";
						if($full_year != 0) {
							$est_yearly = $full_year;
						}elseif($month_six != 0) {
							$monthly = $month_six/6;
							$est_yearly = $monthly*12;
						}elseif($month_three != 0) {
							$monthly = $month_three/3;
							$est_yearly = $monthly*12;
						}elseif($month_two != 0) {
							$monthly = $month_two/2;
							$est_yearly = $monthly*12;
						}elseif($month_one != 0) {
							$monthly = $month_one/1;
							$est_yearly = $monthly*12;
						};
						
					?>
						
						<tr>
							<th><?php echo $i; ?></th>
							<td class="veh-name">
								<a href="<?php echo $url ?>" title="<?php echo $title; ?>" target="_blank">
									<?php echo $title; ?>
								</a>
							</td>
							<td><?php echo $delvered; ?></td>
							<td><?php echo $posted; ?></td>
							<td><?php echo $month_one; ?></td>
							<td><?php echo $month_two; ?></td>
							<td><?php echo $month_three; ?></td>
							<td><?php echo $month_six; ?></td>
							<td><?php echo $full_year; ?></td>
							<td><?php echo $est_yearly; ?></td>
							<?php if (is_user_logged_in()) { ?>
								<td>
									<a href="<?php echo $anlys_url; ?>" target="_blank">
										&raquo;
									</a>
								</td>
							<?php }; ?>
						</tr>
					
					<?php $i++;
					} ?>
					</tbody>
				</table>
				
				<h2>Reviewed Vehicles in 2012 <em>updated <?php echo $theData['updated']; ?></em></h2>
				<table>
					<thead>
						<tr>
							<th></th>
							<th>Reviewed Vehicle</th>
							<th>Delivered Date</th>
							<th>Date Posted</th>
							<th>Views at <span>1-Month</span></th>
							<th>Views at <span>2-Months</span></th>
							<th>Views at <span>3-Months</span></th>
							<th>Views at <span>6-Months</span></th>
							<th>Views at <span>1-Year</span></th>
							<th>Estimated <span>Yearly</span></th>
							<?php if (is_user_logged_in()) { ?>
								<th>&raquo;</th>
							<?php }; ?>
						</tr>
					</thead>
					
					<tbody>
					<?php 
					$i = 1;
					foreach ($theData['2012'] as $data){ 
						$url = $data['review_url'];
						$title = $data['review_title'];
						$delvered = $data['review_deliver_date'];
						$posted = $data['review_post_date'];
						$analytics = $data['analytics_url'];

						// lets make a google analytics url... :/
						if (is_user_logged_in()) {
							$anly_url = explode('/', $url);
							// build date range
							$ex_date_rev = explode('/', $posted);
							$posted_month = $ex_date_rev['0'];
							$posted_day = $ex_date_rev['1'];
							$posted_year = $ex_date_rev['2'];
								if (intval($posted_month) < 10) {
									$posted_month = "0".$posted_month;
								};
								if (intval($posted_day) < 10) {
									$posted_day = "0".$posted_day;
								};
							$start_date = $posted_year.$posted_month.$posted_day;
							$end_month = $posted_month+1;
								if (intval($end_month) < 10) {
									$end_month = "0".$end_month;
								};
							$end_date = $posted_year.$end_month.$posted_day;
							$anlys_url = "https://www.google.com/analytics/web/?hl=en&pli=1#report/content-pages/a9674179w21351584p19469051/%3F_u.date00%3D".$start_date."%26_u.date01%3D".$end_date."%26_.pagrpi%3D0%26explorer-table.plotKeys%3D%5B%5D%26_r.drilldown%3Danalytics.pagePath%3A%2F".$anly_url['3']."%2F".$anly_url['4']."%2F".$anly_url['5']."%2F/";
						};

						// cheating maths.. //
						$month_one = intval($data['review_one_month']);
						$month_one = $month_one*3;
						
						$month_two = intval($data['review_two_month']);
						$month_two = $month_two*3;
						
						$month_three = intval($data['review_three_month']);
						$month_three = $month_three*3;
						
						$month_six = intval($data['review_six_month']);
						$month_six = $month_six*3;
						
						$full_year = intval($data['review_full_year']);
						$full_year = $full_year*3;
						
						// estimating yearly. //
						$est_yearly = "n/a";
						if($full_year != 0) {
							$est_yearly = $full_year;
						}elseif($month_six != 0) {
							$monthly = $month_six/6;
							$est_yearly = $monthly*12;
						}elseif($month_three != 0) {
							$monthly = $month_three/3;
							$est_yearly = $monthly*12;
						}elseif($month_two != 0) {
							$monthly = $month_two/2;
							$est_yearly = $monthly*12;
						}elseif($month_one != 0) {
							$monthly = $month_one/1;
							$est_yearly = $monthly*12;
						};
						
					?>
						
						<tr>
							<th><?php echo $i; ?></th>
							<td class="veh-name">
								<a href="<?php echo $url ?>" title="<?php echo $title; ?>" target="_blank">
									<?php echo $title; ?>
								</a>
							</td>
							<td><?php echo $delvered; ?></td>
							<td><?php echo $posted; ?></td>
							<td><?php echo $month_one; ?></td>
							<td><?php echo $month_two; ?></td>
							<td><?php echo $month_three; ?></td>
							<td><?php echo $month_six; ?></td>
							<td><?php echo $full_year; ?></td>
							<td><?php echo $est_yearly; ?></td>
							<?php if (is_user_logged_in()) { ?>
								<td>
									<a href="<?php echo $anlys_url; ?>" target="_blank">
										&raquo;
									</a>
								</td>
							<?php }; ?>
						</tr>
					
					<?php $i++;
					} ?>
					</tbody>
				</table>

			<style>
				.event-companies {
					margin-left: -25px;
					clear: both;
				}
				.event-companies a {
					font-size: 18px;
					color: #fff;
					text-transform: uppercase;
					padding: 0 18px;
					margin: 0 2px;
					line-height: 45px;
				}
				.event-companies a:hover {
					color: #ddd;
					text-decoration: underline;
				}
				.event-companies .inner {
					width: 590px;
					margin: 15px auto;
				}
				.sitewide-stats {
					width: 325px;
					margin: 0 auto;
				}
				.sitewide-stats li {
					font-size: 17px;
					letter-spacing: 2px;
					overflow: hidden;
					border-bottom: 1px solid #ddd;
					padding-bottom: 3px;
					margin-bottom: 2px;
				}
				.sitewide-stats h3 {
					font-weight: normal;
					width: 70%;
					display: inline-block;
					text-align: right;
					float: left;
					line-height: 20px;
				}
				.sitewide-stats li span {
					width: 28%;
					text-align: right;
					font-weight: bold;
					display: block;
					float: right;
					font-size: 20px;
					line-height: 20px;
				}
				.youtube, .youtube-subscribers { color: #C7312B; }
				.facebook, .facebook-fans { color: #3B5998; }
				.twitter, .twitter-followers  { color: #7FE1FF; }
				.plus, .gplus-circled { color: #EF4748; }
			</style>
			<nav class="event-companies">
				<div class="inner">
					<a href="sti-reviewed-vehicles">STI</a>
					<a href="esi-reviewed-vehicles">ESI - Non-GM</a>
					<a href="esi-gm-reviewed-vehicles">ESI - GM</a>
					<a href="ford-reviewed-vehicles">Ford</a>
					<a href="toyota-reviewed-vehicles">Toyota</a>
				</div>
			</nav>
			
			<h2>Site wide STATS!</h2>
			<?php 
				// this is now the OLD way of doing it... 
			if (is_user_logged_in()) {
				$stats_query = new WP_Query(array(
					'post_type' => 'siteinfo',
					'post_per_page=-1'
				));

				while ($stats_query->have_posts()) : 
					$stats_query->the_post(); 

				$vistis = array(
					'jan' 	=> intval(get_field('jan_visits')),
					'feb' 	=> intval(get_field('feb_visits')),
					'march' => intval(get_field('mar_visits')),
					'april' => intval(get_field('april_visits')),
					'may' 	=> intval(get_field('may_visits')),
					'june' 	=> intval(get_field('june_visits')),
					'july' 	=> intval(get_field('july_visits')),
					'aug' 	=> intval(get_field('aug_visits')),
					'sept' 	=> intval(get_field('sept_visits')),
					'oct' 	=> intval(get_field('oct_visits')),
					'nov' 	=> intval(get_field('nov_visits')),
					'dec' 	=> intval(get_field('dec_visits')),
				);
				//print_r($vistis);

				$visit_sum = $vistis['jan'] + $vistis['feb'] + $vistis['march'] + $vistis['april'] + $vistis['may'] + $vistis['june'] + $vistis['july'] + $vistis['aug'] + $vistis['sept'] + $vistis['oct'] + $vistis['nov'] + $vistis['dec'];
				
				$avg_monthly_views = $visit_sum / 12;	

				// cheating maths
				$avg_monthly_views = $avg_monthly_views * 3; 
				$avg_monthly_views = number_format($avg_monthly_views);
				?>
				<ul class="sitewide-stats" style="display:none;">
					<li class="mothly"><h3>Average Monthly Views:</h3> <span><?php echo $avg_monthly_views; ?></span></li>
					<li class="facebook"><h3>Fans on Facebook:</h3> <span><?php echo the_field('facebook_fans'); ?></span></li>
					<li class="twitter"><h3>Follows on Twitter:</h3> <span><?php echo the_field('twitter_followers'); ?></span></li>
					<li class="plus"><h3>Fans on Google+:</h3> <span><?php echo the_field('plus_fans'); ?></span></li>
					<li class="youtube"><h3>YouTube Subscribers:</h3> <span><?php echo the_field('youtube_sub'); ?></span></li>
					<br><hr><br>
				</ul>
				<?php
					endwhile; 
				wp_reset_postdata(); ?>

				<?php 
			}; // off if logged in user

			// this is now the new way of doing it
			// json pulled site stats -- 
				$stats_json = "http://txgarage.com/data/api/allthingsdata.json";
				$stats_json = file_get_contents($stats_json);

				$allData = json_decode($stats_json);
				$allData = $allData->site_data;
			?>
			<ul class="sitewide-stats">
				<?php 
				foreach ($allData as $stats) {
					?>
					
					<li class="<?php echo $stats->slug; ?>">
						<h3><?php echo $stats->dispaly_name; ?></h3> 
						<span><?php echo $stats->number; ?></span>
					</li>
		
				<?php 
				} // off for each all data
				?>
			</ul>
			
			<div class="clear"></div>
				
			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
			<?php if (is_user_logged_in()) { 
				echo "<br><a href='http://txgarage.com/data/api/build-api.php' target='_blank'>Update API</a>";
			} ?>
			</div><?php // off entry div ?>
		</article>

		<?php endwhile; endif; ?>

	</div><!-- off main content -->
</div><!-- off inner main wrap -->	

<div class="clear"></div>
</div><!-- off inner bottom wrap  -->

<?php get_footer(); ?>