$(document).ready(function (){
      $.ajaxSetup({
		  headers:{
					'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
					}
		  
		  
	  });
	  $("form").on("submit",function(e){
		 e.preventDefault();
		 
		 var data=new FormData(this);
					 $.ajax({
					url:'/admin/login',
					type:'POST',
					data:data,
					processData:false,
					contentType:false,
					success:function (data){
						$("#login-div").remove();
						$("#update").html(data);
						
					}
					
					   });
		  
		  
		  
	  });
	  $("#pass-reset").on("click",function(){
		     $.ajax({
				 url:"/password/reset/",
				 type:"GET",
				 success:function(data){
					   $("#login-div").remove();
						$("#update").html(data);
					 
				 }
				 
				 
			 });
		  
		  
		  
	  })
	
	
	
});