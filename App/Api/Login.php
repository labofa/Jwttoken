<?php 
	
	#USE ../../Class/User/Users
	
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");
	header("Access-Control-Allow-Methods: Post");

	#include connection page and objects
	require '../conn.php';
	#login user

			if (isset($_POST['submit'])) {
				$name = $_POST['name'];
				$matricnumber = $_POST['matric'];
			#get the needed columns
			$User = "SELECT * FROM `users` WHERE name = '{$name}' AND matric = {$matricnumber}";
			#check and fetch query
				if ($req = mysqli_query($Conn, $User)) {
					if (mysqli_num_rows($req) > 0) {
				$row = mysqli_fetch_array($req);
				#create an empty array
				$Data = array();
				$Data['data'] = array();
				$data = array(
								'name' => $name , 
								'matricnumber' => $matricnumber);
				array_push($Data['data'], $data);
				echo json_encode($data);
			} else {
				echo mysqli_error($Conn);
			}
		  }else{
		  	echo mysqli_error($Conn);
		  }
			

		}
