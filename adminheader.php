<?php
 include "checker.php";
echo <<< END
<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-xs-2">
					<div id="fh5co-logo"><a href="afterlogin.php">Home</a></div>
				</div>
				<div class="col-md-6 col-xs-6 text-center menu-1">
					<ul>
						<li class="has-dropdown">
							<a href="product.php"><b><h5>Products  |</b></h5></a></li>
						<li><a href="about.php"><b><h5>|  About  |</b></h5></a></li>
						<li class="has-dropdown">
							
						<li><a href="contact.php"><b><h5>|  Contact  </b></h5></a></li>
					</ul>
				</div>
				<div class="col-md-3 col-xs-4 text-right hidden-xs menu-2">
					<ul>
						<li class="search">
							<div class="input-group"> </div>
						</li>
							<a href="logoff.php?message=logout">LOG OFF</a></li>
							
						<li class="shopping-cart"><a href="cart.php" class="cart"><span><small>0</small><i class="icon-shopping-cart"></i></span></a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>
END;

?>