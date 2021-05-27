<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" ">
    <title>Add</title>    
		
		</head>
<body>

    <a href="todu" class="btn btn-warning">Back</a>
<h2>Forms</h2>
<form action="data_store" method="POST">
    @csrf
  <label >Name:-</label><br>
  <input type="text"  name="name" required><br>
  <label >Course:-</label><br>
  <input type="text"  name="course" required><br>
  <label >Fee:-</label><br>
  <input type="text"  name="fee" required><br>
  <br>
  <button class="btn btn-success"> <input type="submit" value="Submit"></button>
</form>

</body>
</html>
