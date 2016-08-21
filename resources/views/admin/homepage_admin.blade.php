<!DOCTYPE HTML>
<html>
   <head>
            <title></title> 
            <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css"/>
             <meta name="csrf-token" content="{{csrf_token()}}">
              <script src="/js/jquery-2.2.4.js"></script>			 
             <script src="/js/adminhome.js"></script>	 			 
   </head>
   <body>
        <div class="container" >
			     <div class="row" id="login-div">
				     <div>
					        
					     <form encytype="multipart/form-data" role="form" class="form-inline"> 
						 
						      <div class="form-group">
							      <label for="email" class="sr-only">Email</label>
								  <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email"/>
							  </div>
							  <div class="form-group">
							      <label for="password" class="sr-only">Password</label>
							      <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password"/>
							  </div>
							  <input type="hidden" name="_token" value="{{csrf_token()}}"/>
							  <button type="submit" class="btn btn-default" id="login-btn">Log In</button>
						 </form>
						 <p><a href=# id="pass-reset">Forgot Password?</a></p>
					 </div>
                    
					 
					
					 
				 </div>
				 
				 <div class="row" id="update">
					 
					 
				 </div>
			 </div>
   
   
   
   </body>

</html>