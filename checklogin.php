<?php 
	
	$uemail = $_POST['uemail'];
	$upass  = $_POST['upass'];

	$upass = crypt($upass, "rajasthan");

	$server = "localhost";
	$user   = "paliwal"  ;
	$pass   = "p999"     ; 
	$db     = "alwar"   ;

	try
	{
		$conn = new mysqli( $server , $user , $pass , $db ) ; 

		if( $conn->connect_errno > 0 )
			throw new Exception("Connection Error ".$conn->connect_error );

		$str = "select * from users where user_email = '$uemail' and  user_pass = '$upass'";

		$result = $conn->query( $str ) ;

		if( $conn->errno > 0 )
			throw new Exception("Query Error ".$conn->error );
			
		 if ( $result->num_rows == 1 )
		 {
		 	$row = $result->fetch_object();
		 	

		 	setcookie('login_emailid' ,  $row->user_email , time()+60*60*24*31  );

		 	echo "You Successfully Login";


		 }
		 else
		 {
		 	echo "You are un-authorize";
		 	header("Location:http://alwar.in/login.php");

		 	die();
		 	
		 }
	}
	catch( Exception $E )
	{
		echo "Connection Error " . $E->getMessage();
	}


?>
