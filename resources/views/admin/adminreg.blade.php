<!DOCTYPE HTML>

<html>
    <head>
	  
  <title>Admin Homepage</title>
 <meta name="csrf-token" content="{{csrf_token()}}">		
			
	</head>
	<body>
	         @if (count($errors) > 0)
           <div class="alert alert-danger">
             <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
           </div>
            @endif
	
	
			<form encytype="multipart/form-data" role="form" action="/admin/save" method="POST">
			<input type="email" placeholder="enter email"  name='email' />
			<input type="password" placeholder="enter password" name='password' />
			<input type="password" placeholder="Confirm password" name='password_confirmation' />
			<input type="hidden" name="_token" value="{{csrf_token()}}"/>
			<button type="submit">Save Details</button>
			</form>
	
	
	
	</body>
	
	   

</html>























