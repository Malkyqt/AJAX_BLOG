
$(function(){

	$("#submit").click(function(){
		var topic = $("#post_topic").val();
		var body = $("#post_body").val();
		$.post("process.php",{topic: topic,body: body});
		//$("#post_topic").val("Values");
		$("#post_body").val("");
		return false;
	});	

	$("a").click(function(e){
		var topic = e.target.text;
		$.get("change_content.php",{topic: topic}).done(function(data){
			var body = data;
			console.log(body);
			var body = $.parseJSON(data);
			//console.log(body);
			$('#post_wrapper').empty();
			for(var i in body){
				$('<div class="post"><span>' + String(body[i].Message) + '</span></div>').appendTo('#post_wrapper');
			}			
		});
		return false;
	});

});



































		/*
	    $.ajax({                                      
			url: 'change_content.php',                  //the script to call to get data          
			data: topic,                        //you can insert url argumnets here to pass to api.php
			                               //for example "id=5&parent=6"
			dataType: 'json',                //data format      
			success: function(data)          //on recieve of reply
			{
				var id = data[0];              //get id
				var vname = data[1];           //get name

				$('#output').html("<b>id: </b>"+id+"<b> name: </b>"+vname); 

			} 
		}); 
		return false;
	});	


	/*$("a").click(function(e){
		var topic = e.target.text;
		$.get("change_content.php",{topic: topic});
		//.done(function(data){alert(data);});
		return false;
	});	*/