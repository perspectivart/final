$(document).ready(function(){
	$("form").on("submit",function(e){
		e.preventDefault();
		var data= new FormData(this);
		  $.ajax({
			  url:"/admin/save/post",
			  type:"POST",
			  data:data,
			  processData:false,
			  contentType:false,
			  success:function(data){
				  $("#post_form")[0].reset();
				  $("#post_div").html(data);
			  }
		  });
		  
		  
		  
	  } );
	
} );