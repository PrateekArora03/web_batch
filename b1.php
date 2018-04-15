
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
								<!-- Ui Form -->
								<div class="ui-form">
									<!-- Heading -->

									<h2>Register form</h2>
									<!-- Form -->
									<form action="/saveuser.php" method="POST" enctype="multipart/form-data">
										<!-- UI Input -->
										<div class="ui-input">
											<!-- Input Box -->
											<input type="text" value="product_name" name="prod" placeholder="Enter product here" class="form-control" />
											<label class="ui-icon"><i class="fa fa-user"></i></label>
										</div>
										<div class="ui-input">
											<input type="text" value="pro_price" name="pro_price" placeholder="Enter product price" class="form-control" />
											<label class="ui-icon"><i class="fa fa-envelope-o"></i></label>
										</div>
										<div class="ui-input">
											<input type="text" value="description" name="pro_desc" placeholder="some description here " class="form-control" />
											<label class="ui-icon"><i class="fa fa-phone"></i></label>
										</div>

										<div class="ui-input">

							<input type="file" name="uimg" class="form-control" accept="image/*" />

											<label class="ui-icon"><i class="fa fa-lock"></i></label>
										</div>



										<input type="submit" name="submit" value="Register" class="btn btn-red btn-lg btn-block">
									</form>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 ui-padd">
								<!-- UI Hero -->
								<div class="ui-social">
									<!-- Register -->
									<h2>Register using Social media</h2>
									<p>It is a long will be distracted by the readable established fact that a reader will be distracted by the readable content of a page a reader will be distracted by the readable content of a page when looking at its letters.</p>
									<!-- Social media -->
									<ul class="list-unstyled">
										<li><a href="#" class="facebook"><i class="fa fa-facebook"></i> &nbsp; Connect with Facebook</a></li>
										<li><a href="#" class="twitter"><i class="fa fa-twitter"></i> &nbsp; Connect with Twitter</a></li>
										<li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i> &nbsp; Connect with Google plus</a></li>
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


</html>O
