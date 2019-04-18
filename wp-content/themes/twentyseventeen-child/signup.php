<?php 
/*
Template Name: signup
*/

get_header('signup'); ?>

<section class="login-signup-page">
		<div class="container">
			<div class="col-md-6">
				<div class="login-form">
					<h1>Let's start by creating your Account</h1>
					<div class="btn_box_social_media">
						<button class="btn btn-google">
							<i class="fa fa-google-plus" aria-hidden="true"></i> SIGN UP WITH GOOGLE
						</button>
						<button class="btn btn-facebook">
							<i class="fa fa-facebook" aria-hidden="true"></i> SIGN UP WITH FACEBOOK
						</button>
					</div>
					<div class="or">OR</div>
					
					<?php echo do_shortcode('[ultimatemember form_id=383]');?>
					<div class="already_account">
						Already have an account? <a href="/log-in">Login</a>
					</div>
				
			</div>
			</div>
			<div class="col-md-6">
				
					<div id="pswd_info" style="display: none;"><strong>Requirements:</strong>
<ul>
<li id="capital" class="invalid">One uppercase letter</li>
<li id="number" class="invalid">One numeral or special character</li>
<li id="length" class="invalid">Eight character minimum</li>
</ul>
</div>
				</div>
		
		</div>
		</section>
	</section>
	
<?php get_footer('signup'); ?>


