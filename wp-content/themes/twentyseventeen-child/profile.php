<?php 
/*
Template Name: profile
*/
get_header(); ?>
<section class="vertical_tab">
	<div class="container">
		<div class="tab">
			<button class="tablinks" onclick="openMenu(event, 'myInterests')" id="defaultOpen">My Interests</button>
			<button class="tablinks" id="favorites" onclick="openMenu(event, 'myFavourites')">My Favorites</button>
<!--			<button class="tablinks" onclick="openMenu(event, 'mySubscriptions')">My Subscriptions</button>-->
			<button class="tablinks" id="setting" onclick="openMenu(event, 'settings')">Settings</button>
		</div>
		<div id="myInterests" class="tabcontent">
			<div class="row">
				<div class="col-xs-6">
					<div id="myNav" class="overlay">
					<div class="container">
					  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
					  <div class="overlay-content">
					  <ul>
					<?php  
					 $user_id=get_current_user_id();
					$datas = get_user_meta($user_id,'check_category',true);
					
					   $categories=get_categories(
    array( 'parent' => 30,
    	'post_type' => 'post',
    	'hide_empty' => false
    	)
);
$i=0;
foreach ($categories as $c) {
   ++$i;
    // what you really want instead of var_dump is something to
    // to create markup-- list items maybe, For example...

if (in_array($c->cat_ID, $datas))
 {
    echo '<li><input class="checkbox messageCheckbox" id="'.$i.'" type="checkbox" name="lists[new]" value="'.$c->cat_ID.'" checked/>
<label for="'.$i.'"><span class="check">✓</span>'.$c->cat_name.'</label></li>';
} else {
    echo '<li><input class="checkbox messageCheckbox" id="'.$i.'" type="checkbox" name="lists[new]" value="'.$c->cat_ID.'" />
<label for="'.$i.'"><span class="check">✓</span>'.$c->cat_name.'</label></li>';	
}
}; ?>
</ul>
<div id="interest_submit">Submit</div>
</div>
					  </div>
					</div>
					<div class="interst-box-with-b info_Block_inner m-b0 new_div" id="1" onclick="openNav()">
						<img src="/wp-content/themes/twentyseventeen-child/images/invest-in-homes.svg" alt="image">
						<figcaption class="capt"><strong>Invest in home</strong></figcaption>
						<input type="hidden" id="invest_home">

					</div>
				</div>
				<div class="col-xs-6">
				<div id="myNav" class="overlay">
				<div class="container">
					  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
					  <div class="overlay-content">
					  
					    <ul>
					<?php  
					   $categories=get_categories(
    array( 'parent' => 30,
    	'post_type' => 'post',
    	'hide_empty' => false
    	)
);
$i=0;
foreach ($categories as $c) {
   ++$i;
    // what you really want instead of var_dump is something to
    // to create markup-- list items maybe, For example...
    echo '<li><input class="checkbox messageCheckbox" id="'.$i.'" type="checkbox" name="lists[new]" value="'.$c->cat_ID.'"/>
<label for="'.$i.'"><span class="check">✓</span>'.$c->cat_name.'</label></li>';
}; ?>
</ul>
<a href="javascript:void(0)" id="interest_submit">Submit</a>
</div>
					  </div>
					</div>
					<div class="interst-box-without-b info_Block_inner m-b0" id="2" onclick="openNav()">
						<img src="/wp-content/themes/twentyseventeen-child/images/own-a-home.svg" alt="image">
						<figcaption class="capt"><strong>Own a home</strong></figcaption>
					</div>
				</div>
				</div>
				<div class="row">
				<div class="col-xs-6">
				<div id="myNav" class="overlay">
				<div class="container">
					  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
					  <div class="overlay-content">
					  
					   <ul>
					<?php  
					   $categories=get_categories(
    array( 'parent' => 31,
    	'post_type' => 'post',
    	'hide_empty' => false
    	)
);
$i=0;
foreach ($categories as $c) {
   ++$i;
    // what you really want instead of var_dump is something to
    // to create markup-- list items maybe, For example...
   if (in_array($c->cat_ID, $datas))
 {
    echo '<li><input class="checkbox messageCheckbox" id="'.$i.'" type="checkbox" name="lists[new]" value="'.$c->cat_ID.'" checked/>
<label for="'.$i.'"><span class="check">✓</span>'.$c->cat_name.'</label></li>';
} else {
    echo '<li><input class="checkbox messageCheckbox" id="'.$i.'" type="checkbox" name="lists[new]" value="'.$c->cat_ID.'" />
<label for="'.$i.'"><span class="check">✓</span>'.$c->cat_name.'</label></li>';	
}
//     echo '<li><input class="checkbox messageCheckbox" id="'.$i.'" type="checkbox" name="lists[new]" value="'.$c->cat_ID.'"/>
// <label for="'.$i.'"><span class="check">✓</span>'.$c->cat_name.'</label></li>';
}; ?>
</ul>
<a href="javascript:void(0)" id="interest_submit">Submit</a>
</div>
					  </div>
					</div>
					<div class="interst-box-with-b info_Block_inner m-b0" id="3" onclick="openNav()">
						<img src="/wp-content/themes/twentyseventeen-child/images/sell-your-home.svg" alt="image">
			   			<figcaption class="capt"><strong>Sell your home</strong></figcaption>
					</div>
				</div>
				<div class="col-xs-6">
				<div id="myNav" class="overlay">
				<div class="container">
					  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
					  <div class="overlay-content">
					  
					    <ul>
					<?php  
					   $categories=get_categories(
    array( 'parent' => 32,
    	'post_type' => 'post',
    	'hide_empty' => false
    	)
);
$i=0;
foreach ($categories as $cw) {
   ++$i;
    // what you really want instead of var_dump is something to
    // to create markup-- list items maybe, For example...
//     echo '<li><input class="checkbox messageCheckbox" id="'.$i.'" type="checkbox" name="lists[new]" value="'.$c->cat_ID.'"/>
// <label for="'.$i.'"><span class="check">✓</span>'.$c->cat_name.'</label></li>';
   if (in_array($cw->cat_ID, $datas))
 {
    echo '<li><input class="checkbox messageCheckbox" id="'.$i.'" type="checkbox" name="lists[new]" value="'.$cw->cat_ID.'" checked/>
<label for="'.$i.'"><span class="check">✓</span>'.$cw->cat_name.'</label></li>';
} else {
    echo '<li><input class="checkbox messageCheckbox" id="'.$i.'" type="checkbox" name="lists[new]" value="'.$cw->cat_ID.'" />
<label for="'.$i.'"><span class="check">✓</span>'.$cw->cat_name.'</label></li>';	
}
}; ?>
</ul>
<a href="javascript:void(0)" id="interest_submit">Submit</a>
</div>
					  </div>
					</div>
					<div class="interst-box-without-b info_Block_inner m-b0" id="4" onclick="openNav()">
						<img src="/wp-content/themes/twentyseventeen-child/images/save-money.svg" alt="image">
			   			<figcaption class="capt"><strong>Save money on a mortgage</strong></figcaption>
					</div>
				</div>
				</div>
			</div>
			<div id="myFavourites" class="tabcontent">
			<?php dynamic_sidebar( 'custom-side-bar20' ); ?>
				
			</div>
<!--
		<div id="mySubscriptions" class="tabcontent">
			<h3>subscription</h3>
			<p>This is subscription</p>
		</div>
-->
		<div id="settings" class="tabcontent">
			<div class="row">
				<div class="col-sm-5">
					<div class="setting-box division wow fadeInLeft">
						<ul>
							<li>
								<div class="name-title">
									Name
								</div>
								<div class="name-value">
							<?php	if ( is_user_logged_in() ) {
global $current_user;
 wp_get_current_user();
echo $current_user->display_name; 
}; ?>
									<!-- Pelican Agent -->
								</div>
							</li>
							<li>
								<div class="name-title">
									Email Address
								</div>
								<div class="name-value">
								 <?php	if ( is_user_logged_in() ) {
									global $current_user;
									 wp_get_current_user();
									echo $current_user->user_email; 
									 
										?>
											
										</div>
										</li>
										<li>
											<div class="name-title">
												Password
											</div>
											<div class="name-value">
											<!-- <?php	//echo $current_user->user_pass ;
											}; ?> -->
											***********
											</div>
										</li>
										<li>
											<div class="name-title">
												Close my account
											</div>
											<div class="close_my_account">
												<?php echo do_shortcode('[plugin_delete_me /]');?>?
											</div>
										</li>
									</ul>
								</div>
							</div>
				<div class="col-sm-6 col-sm-offset-1">
					<div class="setting-box wow fadeInRight">
						<div class="name-title m-b-40">
							Email Notification
						</div>
						<div class="setting-toggle">
							<div class="row">
								<div class="col-xs-9">
									Newsletter
								</div>
								<div class="col-xs-3">
									<div class="tooggle">
										<label class="switch">
											<input type="checkbox" id="newsletter_box" checked onclick="block_newsletter()">
											<span class="slider round"></span>
									   </label>
									</div>
								</div>
							</div>
						</div>
						<div class="setting-toggle">
							<div class="row">
								<div class="col-xs-9">
									Market Reports
								</div>
								<div class="col-xs-3">
									<div class="tooggle">
										<label class="switch">
											<input type="checkbox" checked onclick="block_news()">
											<span class="slider round"></span>
									   </label>
									</div>
								</div>
							</div>
						</div>
						<div class="setting-toggle">
							<div class="row">
								<div class="col-xs-9">
									Mortgage updates
								</div>
								<div class="col-xs-3">
									<div class="tooggle">
										<label class="switch">
											<input type="checkbox" checked onclick="block_reviews()">
											<span class="slider round"></span>
									   </label>
									</div>
								</div>
							</div>
						</div>
						<div class="setting-toggle">
							<div class="row">
								<div class="col-xs-9">
									Reviews
								</div>
								<div class="col-xs-3">
									<div class="tooggle">
										<label class="switch">
											<input type="checkbox" checked onclick="block_tips()">
											<span class="slider round"></span>
									   </label>
									</div>
								</div>
							</div>
						</div>
						<div class="setting-toggle">
							<div class="row">
								<div class="col-xs-9">
									Tips and Hacks
								</div>
								<div class="col-xs-3">
									<div class="tooggle">
										<label class="switch">
											<input type="checkbox" checked onclick="block_mort()">
											<span class="slider round"></span>
									   </label>
									</div>
								</div>
							</div>
						</div>
						


					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<?php get_footer('blog'); ?>
