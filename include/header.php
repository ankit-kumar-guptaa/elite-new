<!-- ===================================================
				Loading Transition
			==================================================== -->
			<div id="loader-wrapper">
				<div id="loader"></div>
			</div>

			<?php
// Check if the function is already defined before declaring it
if (!function_exists('isActive')) {
    // Function to check if the current page is active
    function isActive($page) {
        $currentUri = $_SERVER['REQUEST_URI'];
        return $currentUri === $page ? 'active' : '';
    }
}
?>






			<!-- 
			=============================================
				Theme Header Two
			============================================== 
			-->
			<header class="header-two">
				<div class="top-header">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-sm-8 col-12">
								<ul class="left-widget">
									<li>We are leading recruitment firm!</li>
									
								</ul>
							</div>
							<div class="col-md-6 col-sm-4 col-12">
								<ul class="social-icon">
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div> <!-- /.row -->
					</div> <!-- /.container -->
				</div> <!-- /.top-header -->

				<div class="theme-menu-wrapper">
					<div class="container">
						<div class="bg-wrapper clearfix">
							<div class="logo float-left"><a href="index.html"><img src="images/logo/logo.png" alt=""></a></div>
							<!-- ============== Menu Warpper ================ -->
					   		<div class="menu-wrapper float-left">
					   			<nav id="mega-menu-holder" class="clearfix">
								   <ul class="clearfix">
									    <li class="<?php echo isActive('/'); ?>"><a href="/">Home</a></li>
									    <li class="<?php echo isActive('/about'); ?>"><a href="/about">About</a></li>
									    <li class="<?php echo isActive('/services'); ?>"><a href="/services">Services</a>
									    	<ul class="dropdown">
									        	<li><a href="/services/learning-development">Learning & Development</a></li>
									        	<li><a href="/services/hr-outsourcing">HR Outsourcing for Small Businesses</a></li>
									        	<li><a href="/services/welcome-india">Welcome to India Services – End to End Support</a></li>
									        	<li><a href="/services/startup-support">Start-up Support – Everything at one place</a></li>
									        	<li><a href="/services/bad-debts">Bad Debts Collection</a></li>
									       </ul>
									    </li>
									    <li class="<?php echo isActive('/solutions'); ?>"><a href="/solutions">Solutions</a></li>
									    <li class="<?php echo isActive('/jobs'); ?>"><a href="/jobs">Jobs</a>
									    	<ul class="dropdown">
									        	<li><a href="/jobs/current">Current Jobs</a></li>
									        	<li><a href="/jobs/submit-resume">Submit Resume</a></li>
									        	<li><a href="/jobs/login">Login</a></li>
									       </ul>
									    </li>
									    <li class="<?php echo isActive('/contact'); ?>"><a href="/contact">Contact</a></li>
								   </ul>
								</nav> <!-- /#mega-menu-holder -->
					   		</div> <!-- /.menu-wrapper -->
					   		<div class="right-widget float-right">
					   			<ul>
					   				<!-- <li class="cart-icon">
					   					<a href="#"><i class="flaticon-tool"></i> <span>2</span></a>
					   				</li> -->
					   				<li class="search-option">
					   					<div class="dropdown">
					   						<button type="button" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-sarch" aria-hidden="true"></i></button>
											<!-- <form action="#" class="dropdown-menu">
												<input type="text" Placeholder="Enter Your Search">
												<button><i class="fa fa-search"></i></button>
											</form> -->
					   					</div>
					   				</li>
					   			</ul>
					   		</div> <!-- /.right-widget -->
						</div> <!-- /.bg-wrapper -->
					</div> <!-- /.container -->
				</div> <!-- /.theme-menu-wrapper -->
			</header> <!-- /.header-two -->