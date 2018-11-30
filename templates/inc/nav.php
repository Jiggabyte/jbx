<div class="main-menu">
	<div class="">
		<div class="col-md-7 nav">
			<nav>
				<ul class="menu">
					<li><a href="/">Home</a></li>
					<li><a href="products" class="sub-siblings">Products</a>
						<ul class="sub-menu nav nav-tabs">
							<!-- <div class="container"> -->
							<!-- <div class="row"> -->
							<li class="col-md-3">
								<a href="products#cloan">
									<div class="line"></div>
									<div class="clearfix"></div>
									Consumer Loans
									<p>Our consumer loans provide financial assistance to those who need to borrow money for any number of reasons, but lack assets that may be used as collateral for conventional types of loans. You can ...</p>
								</a>
							</li>
							<li class="col-md-3">
								<a href="products#cmloan">
									<div class="line"></div>
									<div class="clearfix"></div>
									Commercial Loans
									<p>If you require money to expand or improve your business and services, consider applying for a CreditShore Commercial loan. We provide a range of facilities that you can use to buy office ...</p>
								</a>
							</li>
							<li class="col-md-3">
								<a href="products#cardloan">
									<div class="line"></div>
									<div class="clearfix"></div>
									Cards ... [Coming Soon.]
									<p>1. CreditShore Savers card</p>
									<p>2. CreditShore Food card</p>
									<p>3. CreditShore Vexmoni card</p>
								</a>
							</li>

							<!-- </div> -->
							<!-- </div> -->
						</ul>
					</li>
					<li><a href="faq">FAQ</a></li>
					<li><a href="about">About Us</a></li>

					<li><a href="contact">Contact Us</a></li>
					<?php
					if(isset($_SESSION['user_data'])){
						echo '
                <li class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-7" href="logout.php">Logout</a></li>
                <li class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-7" style="background-color: darkgreen;color:white;" href="dashboard.php">Dashboard</a></li>
 
                ';

					} else {
						echo '';
					}
					?>
				</ul>
			</nav>
		</div>
		<div class="col-md-3 signup">
			<ul class="menu">
				<li><a href="blog.php" class="btn clear">Blog</a></li>
				<li class="dt-hide"><a href="apply.php" class="btn btn btn-default">Apply</a></li>
				<li class="mobile-only"><a href="apply.php" class="btn btn btn-default">Apply</a></li>
			</ul>
		</div>
	</div>
</div>
<div class="collapse navbar-collapse" id="navigation">
	<div class="">
		<div class="col-md-7 nav">
			<nav>
				<ul class="menu">
					<li class=""><a href="../../index.php">Home</a></li>

					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="products.php">Products</a>
						<ul class="dropdown-menu">
							<li><a href="products.php#cloan">Consumer Loan</a></li>
							<li><a href="products.php#cmloan">Commercial Loan</a></li>
							<li><a href="products.php#cardloan">Card... [Coming Soon]</a></li>

						</ul>
					</li>
					<li><a href="faq.php">FAQ</a></li>
					<li><a href="about.php">About Us</a></li>

					<li class=""><a href="contactus.php">Contact Us</a></li>

					<li><a href="blog.php">Blog</a></li>

					<li class=""><a href="apply.php">Apply</a></li>

					<?php
					if(isset($_SESSION['user_data'])){
						echo '
                <li class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-7" href="logout.php">Logout</a></li>
                <li class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-7" style="background-color: darkgreen;color:white;" href="dashboard.php">Dashboard</a></li>
 
                ';

					} else {
						echo '';
					}
					?>
				</ul>
			</nav>
		</div>

	</div>
</div>