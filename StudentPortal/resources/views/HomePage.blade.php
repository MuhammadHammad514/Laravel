<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f9fafc;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .navbar {
            background-color: #0d6efd;
        }
        .navbar-brand, .nav-link {
            color: #fff !important;
            font-weight: 500;
        }
        .dashboard-card {
            transition: transform 0.2s;
        }
        .dashboard-card:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">🎓 Student Portal</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Profile</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Courses</a></li>
                    <li class="nav-item"><a href="/Logout" class="nav-link">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Welcome Section -->
    <div class="container text-center mt-5">
        <h2>Welcome, {{ Auth::user()->name ?? 'Student' }} 👋</h2>
        <p class="text-muted">Here’s your student dashboard</p>
    </div>

    <!-- Dashboard Cards -->
    <div class="container mt-5">
        <div class="row justify-content-center g-4">
            <div class="col-md-3">
                <div class="card dashboard-card shadow-sm text-center p-4">
                    <h5>📘 Profile</h5>
                    <p class="text-muted">View and update your information.</p>
                    <a href="#" class="btn btn-primary btn-sm">Open</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card dashboard-card shadow-sm text-center p-4">
                    <h5>📚 Courses</h5>
                    <p class="text-muted">View your enrolled courses.</p>
                    <a href="#" class="btn btn-primary btn-sm">Open</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card dashboard-card shadow-sm text-center p-4">
                    <h5>📈 Results</h5>
                    <p class="text-muted">Check your academic performance.</p>
                    <a href="#" class="btn btn-primary btn-sm">Open</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center mt-5 mb-3 text-muted">
        © {{ date('Y') }} Student Portal | All Rights Reserved
    </footer>

</body>
</html>
