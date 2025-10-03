<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Portal - Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      body {
        background: #f8f9fa;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      }
      .form-container {
        background: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        margin-top: 40px;
      }
      h1 {
        font-weight: bold;
        color: #0d6efd;
        text-align: center;
        margin-bottom: 25px;
      }
      .navbar-brand {
        font-size: 1.4rem;
        letter-spacing: 1px;
      }
      .btn-primary {
        width: 100%;
        padding: 12px;
        font-weight: 600;
      }
    </style>
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

    <!-- Form Section -->
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
          <div class="form-container">
            <h1>{{$title}}</h1>
            <form method="post" action="{{$url}}" class="row g-3" id="Input">
              @csrf
              <div class="col-md-6">
                <label for="F_name" class="form-label" >First Name</label>
                <input type="text" class="form-control" name="F_name" placeholder="Enter your first name"value="{{ $std->First_Name ?? '' }}">
              </div>
              <div class="col-md-6">
                <label for="L_name" class="form-label">Last Name</label>
                <input type="text" class="form-control" name="L_name" placeholder="Enter your last name"value="{{ $std->Last_Name ?? '' }}">
              </div>

              <div class="col-12">
                <label for="femail" class="form-label">Email</label>
                <input type="email" name="femail" class="form-control" placeholder="example@email.com"value="{{ $std->Email ?? '' }}">
              </div>

              <div class="col-12">
                <label for="faddress" class="form-label">Address</label>
                <input type="text" class="form-control" name="faddress" placeholder="House #, Street, City"value="{{ $std->Address ?? '' }}">
              </div>

              <div class="col-md-4">
                <label for="fage" class="form-label"  >Age</label>
                <input type="number" class="form-control" value="{{ $std->Age ?? '' }}" name="fage" placeholder="18">
              </div>

              <div class="col-md-4">
                <label for="fgender" class="form-label">Gender</label>
                <select name="fgender" class="form-select">
                  <option selected disabled value="{{ $std->Gender ?? '' }}">Choose...</option>
                  <option>Male</option>
                  <option>Female</option>
                </select>
              </div>

              <div class="col-md-4">
                <label for="fclass" class="form-label">Class</label>
                <input type="text" class="form-control" value="{{ $std->Class ?? '' }}" name="fclass" placeholder="e.g. 11th">
              </div>

              <div class="col-12">
                <button id="btn_submit" type="submit" class="btn btn-primary">Submit Registration</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
