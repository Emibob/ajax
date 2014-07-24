<?php
	$method = $_SERVER['REQUEST_METHOD'];

	if(strtolower($method) == 'post'){
		
		$first_name = addslashes($_POST['first_name']);
		$last_name = addslashes($_POST['last_name']);
		$date_of_birth = addslashes($_POST['date_of_birth']);

		$connect = mysql_connect('localhost', 'root', 'admin');
		$db = mysql_connect_db('emily_test') //DATABASENAME

		
		if($connect){
			$sql = "inser into testing (first_name, last_name, date_of_birth) values('$first_name', '$last_name', '$date_of_birth')" //table is called testing
			$query = mysql_query($sql);

			
			if($query){
				$id = mysql_insert_id();
				$sql = "select * from people where id=$id";
			
				$query = mysql_query($sql);


				if($query){
					if(mysql_num_rows($query) == 1){
						$row = mysql_fetch_object($query);
					
						echo json_encode($row);
					}
				}	
			}
		}
		else{
			echo "there was a problem connecting to the database server";
		}
		
	}

		// UserEmily
		// password

		// NewUserEmily
		// LNnND5SRMEMcPhTR

		// testingUser
		// -

	//http://www.youtube.com/watch?v=RBIJlgIg_w0

	// if(strtolower($method) == 'post'){ //only allow a post request to access this data
	// 	echo "this request has come from a post request";
	// 	//http://localhost/Desktop/ajax/index2.html
	// }
	// else{
	// 	echo "this request has NOT come from a post request";
	// 	//http://localhost/Desktop/ajax/ajax2.php
	// }

?>