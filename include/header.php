<!-- ===================================================
				Loading Transition
			==================================================== -->
			<div id="loader-wrapper">
				<div id="loader"></div>
			</div>

			<?php
// Function to check if the current page is active
function isActive($page) {
    return strpos($_SERVER['REQUEST_URI'], $page) !== false ? 'active' : '';
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
									    <li class="<?php echo isActive('index.php'); ?>"><a href="index.php">Home</a></li>
									    <li class="<?php echo isActive('about.html'); ?>"><a href="about.html">About</a></li>
									    <li class="<?php echo isActive('services.html'); ?>"><a href="#">Services</a>
									    	<ul class="dropdown">
									        	<li><a href="#">Learning & Development</a></li>
									        	<li><a href="#">HR Outsourcing for Small Businesses</a></li>
									        	<li><a href="#">Welcome to India Services – End to End Support</a></li>
									        	<li><a href="#">Start-up Support – Everything at one place</a></li>
									        	<li><a href="#">Bad Debts Collection</a></li>
									       </ul>
									    </li>
									    <li class="<?php echo isActive('solutions.html'); ?>"><a href="solutions.html">Solutions</a></li>
									    <li class="<?php echo isActive('jobs.html'); ?>"><a href="#">Jobs</a>
									    	<ul class="dropdown">
									        	<li><a href="#">Current Jobs</a></li>
									        	<li><a href="#">Submit Resume</a></li>
									        	<li><a href="#">Login</a></li>
									       </ul>
									    </li>
									    <li class="<?php echo isActive('contact.html'); ?>"><a href="contact.html">Contact</a></li>
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
					   						<button type="button" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search" aria-hidden="true"></i></button>
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