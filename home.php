<?php
session_start();
?>
<!DOCTYPE html>
<html>
	
<head>
		<meta charset="utf-8">
		<title>UI Design</title>
		<!-- Description, Keywords and Author -->
		<meta name="description" content="Your description">
		<meta name="keywords" content="Your,Keywords">
		<meta name="author" content="ResponsiveWebInc">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link href="/css/bootstrap.min.css" rel="stylesheet">
		<link href="/css/style-15.css" rel="stylesheet">
				
		<link rel="shortcut icon" href="#">
	</head>
	
	<body>
	
		
		<!-- UI # -->
		<div class="ui-15">
				
				<!-- UI Content -->
				<div class="ui-content">
				
					<div class="container-fluid">
						<div class="row">
							
							<div class="col-md-6 col-sm-6 ui-padd">
								<!-- UI Hero -->
								<div class="ui-social">
									<!-- Register -->
									<h2>Register using Social media</h2>
									<p>It is a long will be distracted by the readable established fact that a reader will be distracted by the readable content of a page a reader will be distracted by the readable content of a page when looking at its letters.</p>
									<!-- Social media -->
									<ul class="list-unstyled">

										<?php 

											if( !isset($_SESSION['login_emailid']) )
											{
										?>

										<li>
											<a href="/login.php" class="facebook"><i class="fa fa-facebook"></i> &nbsp; L O G I N </a></li>


										<li><a href="/b1.php" class="twitter"><i class="fa fa-twitter"></i> &nbsp; R E G I S T E R </a></li> 

										<?php
											}
											else
											{
										?>

										<li><a href="/logout.php" class="google-plus"><i class="fa fa-google-plus"></i> &nbsp; L O G O U T </a></li>
										<?php
											}
										?>

									</ul>
								</div>
							</div>
						</div>
					</div>
					
				</div>
					
				 
					
				</div>
				
		</div>
		
		<script src="js/jquery-3.2.1.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>	

</html>