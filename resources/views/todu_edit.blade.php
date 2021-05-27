<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" ">
    <title>Update</title>    
		
		</head>
<body>
<h2>Forms</h2>
<form action="{{route('tudo_update',[$todu_arr->id])}}" method="POST">
    @csrf
  <label >Name:</label><br>
  <input type="text"  name="name" value="{{$todu_arr->name}}" required'><br>
  <label >Course:</label><br>
  <input type="text"  name="course" value="{{$todu_arr->course}}" required><br>
  <label >Fee:</label><br>
  <input type="text"  name="fee" value="{{$todu_arr->fee}}" required><br>
  <br>
 <button class="btn btn-success"> <input type="submit" value="Submit"></button>
</form>

</body>
</html>
