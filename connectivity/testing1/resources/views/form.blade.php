<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>
 <form action="{{url('storecheck')}}" method="POST"> 
 	{{csrf_field()}}
  First name:<br>
  <input type="text" name="firstname" value="Mickey">
  <br>
  Last name:<br>
  <input type="text" name="lastname" value="Mouse">
  <br><br>
  <input type="submit" value="Submit">
</form> 
</body>
</html>