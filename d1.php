<?php
	include('head.php');
?>

	<div class="container">
		<div class="row ">
			<div class="col-md-3"> 
				 <form action="/a.php" method="GET">
					<div class="form-group">
						<input type="number" name="num1" class="form-control" placeholder="Enter first number">
					</div>			 	
					<div class="form-group">
						<input type="number" name="num2" class="form-control" placeholder="Enter second number">
					</div>			 	
					<div class="form-group">
						<input type="number" name="num3" class="form-control" placeholder="Enter third number">
					</div>			 	
					<div class="form-group">
						<input type="submit" class="btn btn-danger" name="">
					</div>
				 </form>
			</div>
		</div>
	</div>


<?php
	include('footer.php');
?>