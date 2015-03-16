<?php
include_once('config.php');
?>
<!DOCTYPE html>
<html>

<head>	
<style type="text/css">
body{
	margin: 0px;
}
</style></head>
	<body>

		<div class="body">
			<div style="background:#02c0fe;height:50px;width:100%;margin-bottom:0px;margin-top:0px"> </div>
			
			<div style="width:400px;margin-left:40%;margin-top:40px">

														<div class="signin-form">

															<span class="mega-menu-sub-title">Admin Login</span>

															<form action="login-exec.php" id="" method="post">
																<div class="row">
																	<div class="form-group">
																		<div class="col-md-12">
																			<label>User ID</label>
																			<input type="text" value="" name="email" class="form-control input-lg">
																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="form-group">
																		<div class="col-md-12">
																			<!--<a class="pull-right" id="headerRecover" href="#">(Lost Password?)</a>-->
																			<label>Password</label>
																			<input type="password" value="" name="password"class="form-control input-lg">
																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="col-md-6">
																		
																		<!--	<label for="rememberme">
																				<input type="checkbox" id="rememberme" name="rememberme">Remember Me
																			</label>
																		-->
																		
																	</div>
																	<div class="col-md-6">
																		<input type="submit" value="Login" class="btn btn-primary pull-right push-bottom" data-loading-text="Loading...">
																	</div>
																</div>
															</form>

															
														</div>
					</div><!-- main loggin wrapper end -->



			
		</div>

	</body>

<!-- Mirrored from preview.oklerthemes.com/porto/3.3.1/index-header-signin.php by HTTrack Website Copier/3.x [XR&CO'2013], Wed, 08 Oct 2014 08:15:03 GMT -->
</html>
