<?php 

 

	$path = 'profile/'.time().uniqid(rand()) ;

	$filename = $path.'/'.$_FILES['uimg']['name'];

	$data = file_get_contents( $_FILES['uimg']['tmp_name'] ); 

	mkdir($path , 0777, true);

	file_put_contents( $filename, $data );
	
	$user_image_url = "http://alwar.in/".$filename;

	$uname  = $_POST['uname'];
	$uemail = $_POST['uemail'];
	$uphone = $_POST['uphone'];
	$upass  = $_POST['upass'];
	$utime  = time() ;


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

		$str = "insert into users(user_name,user_pass,user_email,user_phone,user_image,timestamp) values( '$uname', '$upass', '$uemail', '$uphone','$user_image_url','$utime')";

		$result = $conn->query( $str ) ;

		if( $conn->errno > 0 )
			throw new Exception("Query Error ".$conn->error );
			
		if ( $result > 0 )
			echo "Successfully Registered";
		else
			echo "Some Error: please try again later";

	}
	catch( Exception $E )
	{
		echo "Connection Error " . $E->getMessage();
	}


?>
