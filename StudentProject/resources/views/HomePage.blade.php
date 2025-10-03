<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      body {
        font-family: Arial, sans-serif;
      }
      .hero {
        background: linear-gradient(rgba(0,0,50,0.6), rgba(0,0,50,0.6)), url('https://source.unsplash.com/1600x600/?students,classroom') no-repeat center center;
        background-size: cover;
        color: white;
        padding: 120px 20px;
        text-align: center;
      }
      .hero h1 {
        font-size: 3rem;
        font-weight: bold;
      }
      .hero p {
        font-size: 1.25rem;
        margin-top: 15px;
      }
      footer {
        background: #0d6efd;
        color: white;
        padding: 15px 0;
        text-align: center;
        margin-top: 40px;
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

    <section class="hero">
      <div class="container">
        <h1>Welcome to the Student Portal</h1>
        <p>Register yourself today and become part of our student community.</p>
        <a href="{{url('/register')}}" class="btn btn-success btn-lg mt-3">Register Now</a>
      </div>
    </section>

    <!-- Info Section -->
    <div class="container mt-5">
      <div class="row text-center">
        <div class="col-md-4">
          <div class="card shadow-sm p-4">
            <h4 class="fw-bold">Easy Registration</h4>
            <p>Fill out a simple form and get registered instantly.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow-sm p-4">
            <h4 class="fw-bold">Student Records</h4>
            <p>View and manage all student records in one place.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow-sm p-4">
            <h4 class="fw-bold">User Friendly</h4>
            <p>Clean and professional design to enhance student experience.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer>
      <p>&copy; 2025 Student Portal | All Rights Reserved</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
