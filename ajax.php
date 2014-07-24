<?php
	//ORIGINAL:
	// $person_name = $_POST['person_name']; //declare var and post it
	// echo "$person_name sent this data: I am sent back from the server and when I change the page does not need to be refreshed to get updates. Just click the button to get most recent data";
	
	//USING GET & POST TOGETHER
	if(isset($_GET['ajax'])){//make sure is set to true
		$person_name = $_POST['person_name']; 
		echo "$person_name sent this data: I shorter text " . $_GET['ajax']; //concat the parameter value on
	}
?>