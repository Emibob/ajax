//ORIGINAL:
// $(document).ready(function(){
	
// 	$('#call_back_btn').click(function(){ //event listener
		
// 		$.post("ajax.php", 
// 				{person_name: $('#input_text').val()}, 
// 				function(data){ //post request
// 					$('#responseText').val(data); //place the data back inside the text area
// 				}
// 		);
	
// 	});

// });


//USING GET & POST TOGETHER

$(document).ready(function(){
	
	$('#call_back_btn').click(function(){ //event listener
		
		$.post("ajax.php?ajax=true", //use the get global to ask if ajax 
				{person_name: $('#input_text').val()}, 
				function(data){ //post request
					$('#responseText').val(data); //place the data back inside the text area
				}
		);
	
	});

});