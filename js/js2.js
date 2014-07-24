$(document).ready(function(){

	$('#date_of_birth').datepicker({dateFormat: "yy-mm-dd"});

	$('#call_back_btn').click(function(){ //click event
		
		$.post("ajax2.php", 
				{
					first_name: $('#first_name').val(), 
					last_name: $('#last_name').val(), 
					date_of_birth: $('#date_of_birth').datepicker().val()
				},  
				function(data){ //data is the info we recieve back from the server
					$('#responseText').val(data);
				}
		);

	});

});