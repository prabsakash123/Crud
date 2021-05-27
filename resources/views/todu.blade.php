<html>
<head>
    <title>Table</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
</style>
</head>
<body>
<br>
<div style="overflow-x:auto;">
<a href="dashboard" class="btn btn-warning">Back</a>&nbsp&nbsp
    <a href="Add_Record" class="btn btn-primary">Add Record</a>
	<a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-from').submit()" style="float:right;" class="btn btn-danger">Logout</a>
												</li>
                                                <form id="logout-from" method="POST" action="{{route('logout')}}">
                                                    @csrf
                                                </form>
    <br><br>
    {{session('msg')}}
    <br>
  <table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Course</th>
        <th>Fee</th>
        <th>time</th>
        <th>Action</th>
    </tr>
    <tr>
        @foreach ($todu_arr as $list)
        <tr>
           <td>{{$list->id}}</td>
           <td>{{$list->name}}</td>
           <td>{{$list->course}}</td>
            <td>{{$list->fee}}</td>
            <td>{{$list->created_at}}</td>
            <td>
                <a href="todu_delete/{{$list->id}}"class="btn btn-danger">Delete</a>
                <a href="todu_edit/{{$list->id}}"class="btn btn-primary">Update</a>
             </td>
           </tr>
           @endforeach
        </tr>
  </table>
</div>

</body>
</html>

