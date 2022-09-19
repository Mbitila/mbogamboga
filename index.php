<!DOCTYPE html>
<html>
<head>
	<title>Imarisha Products</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- stylesheet -->
	<link rel="stylesheet" type="text/css" href="assets/css/app.css">
</head>
<body>
	<div id="row header">
		<div class="column-3">
			+255 653 280 636 / +255 653 280 636
		</div>

		<div class="column-3 contact">
		  	<a href="index.php?page=register">Register</a> | <a href="index.php?page=login">Login</a>
		</div>
		<hr style="width: 100%; color: red;">
	</div>
	
	<!-- navigation -->
	<?php include('pages/inc/nav.php'); ?>
	<!-- end of navigation -->

	<div id="container">
		<?php 
			if(isset($_GET['page'])){
				switch ($_GET['page']) {
					case 'home':
						include('pages/home.php');
						break;

					case 'about_us':
						include('pages/about_us.php');
						break;

					case 'products':
						include('pages/products.php');
						break;

					case 'gallery':
						include('pages/gallery.php');
						break;

					case 'contact_us':
						include('pages/contact_us.php');
						break;

					case 'register':
						include('pages/auth/register.php');
						break;

					case 'login':
						include('pages/auth/login.php');
						break;
				}
			}
			else{
				include('pages/home.php');
			}
		?>
	</div>
	<div class="row footer">
		<div class="column-3">
			<h3>WHO WE ARE</h3>
			<p>
				We are digital and business strategists that aim to partner with individuals or businesses and serve with our technology expertise. We are experts of website design, mobile application, software development and graphics designing.
			</p>
		</div>
		<div class="column-3">
			<!-- <h3>VISION</h3>
			<p>To be the most reliable and supportive center that empowers businesses digitally in Tanzania.</p> -->
		</div>
		<div class="column-3">
			<h3>CONTACT US</h3>
			<table>
				<tr>
					<td>Address</td><td>Ilemela - Mwanza</td>
				</tr>
				<tr>
					<td>Phone Number</td><td>0653280 636</td>
				</tr>
				<tr>
					<td>Email</td><td>info@imarisha.co.tz</td>
				</tr>
				<tr>
					<td>Website</td><td>www.imarisha.co.tz</td>
				</tr>
			</table>
		</div>
	</div>
</body>
</html>