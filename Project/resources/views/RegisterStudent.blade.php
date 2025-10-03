<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css" />
</head>
  <body>
   <h1 style="text-align: center;">Student Data</h1>
   <div>
<table id="mytable"  class="table table-striped">
          <thead>
    <tr>

      <th scope="col">Id</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
     <th scope="col">Email</th>
      <th scope="col">Address</th>
       <th scope="col">Age</th>
        <th scope="col">Class</th>
         <th scope="col">Gender</th>
    </tr>
  </thead>
  <tbody>
    
     
       <tr>
      <th scope="row">{{$student['student_id']}}</th>
    <td>{{$student['First_Name']}}</td>
     <td>{{$student['Last_Name']}}</td>
      <td>{{$student['Email']}}</td>
      <td>{{$student['Address']}}</td>
        <td>{{$student['Age']}}</td>
          <td>{{$student['Class']}}</td>
            <td>{{$student['Gender']}}</td>
    </tr>
        
  </tbody>
    </table>
  </div>
   <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script> 
   <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>