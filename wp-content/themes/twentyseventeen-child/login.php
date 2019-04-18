<?php 
/*
Template Name: login
*/

get_header('signup'); ?>

<section class="login-signup-page">
		<div class="container">
			<div class="col-md-6 wow fadeInLeft">
				<div class="login-form">
					<h1>Login with your Account</h1>
					<div class="btn_box_social_media">
						<button class="btn btn-google">
							<i class="fa fa-google-plus" aria-hidden="true"></i> LOGIN WITH GOOGLE
						</button>
						<button class="btn btn-facebook">
							<i class="fa fa-facebook" aria-hidden="true"></i> LOGIN WITH FACEBOOK
						</button>
					</div>
					<div class="or">OR</div>
					
						<!-- <div class="col-sm-12">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="User Name">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Password">
							</div>
						</div>
					</div>
					<button class="btn btn-sign-in-up">
						LOGIN
					</button> -->
					<?php echo do_shortcode('[ultimatemember form_id=384]');?>
					<div class="already_account">
						Don't have an account? <a href="/sign-up">Create one</a>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php get_footer('signup'); ?>