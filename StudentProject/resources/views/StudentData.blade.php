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
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
      <div class="container">
        <a class="navbar-brand fw-bold" href="#">Student Portal</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" 
                aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/register')}}">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/register/DisplayStudents')}}">View Students</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container mt-4">
      <h1 class="text-center">Student Data</h1>
      <a href="{{url('/register/create')}}">
        <button class="btn btn-primary float-end mb-3">Add Student</button>
      </a>

      <table id="mytable" class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Age</th>
            <th>Class</th>
            <th>Gender</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($students as $std)
            <tr>
              <td>{{$std['student_id']}}</td>
              <td>{{$std['First_Name']}}</td>
              <td>{{$std['Last_Name']}}</td>
              <td>{{$std['Email']}}</td>
              <td>{{$std['Address']}}</td>
              <td>{{$std['Age']}}</td>
              <td>{{$std['Class']}}</td>
              <td>{{$std['Gender']}}</td>
              <td>
                <a href="{{route('student.delete',['id'=>$std['student_id']])}}">
                  <button class="btn btn-danger btn-sm">Delete</button>
                </a>
                <a href="{{route('student.edit',['id'=>$std['student_id']])}}">
                  <button class="btn btn-primary btn-sm">Edit</button>
                </a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script> 
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
      $(document).ready(function () {
        $('#mytable').DataTable({
          pageLength: 5,   // default rows per page // dropdown options
        });
      });
    </script>
  </body>
</html>
