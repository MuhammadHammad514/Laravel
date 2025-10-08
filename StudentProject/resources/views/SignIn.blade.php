<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Portal - Sign In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      body {
        background: #f8f9fa;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      }
      .auth-container {
        max-width: 400px;
        margin: 80px auto;
        background: #fff;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      }
      h2 {
        font-weight: bold;
        text-align: center;
        margin-bottom: 25px;
        color: #0d6efd;
      }
      .btn-primary {
        width: 100%;
        padding: 12px;
        font-weight: 600;
      }
      .text-danger {
        font-size: 14px;
      }
    </style>
  </head>
  <body>
    <div class="auth-container">
      <h2>Sign In</h2>

      <!-- Show global error (like wrong email or password) -->
      @if(session('error'))
        <div class="alert alert-danger">
          {{ session('error') }}
        </div>
      @endif

      <form method="post" action="{{ url('/stdLogin') }}">
        @csrf

        <!-- Email -->
        <div class="mb-3">
          <label for="signinEmail" class="form-label">Email</label>
          <input type="email" 
                 class="form-control @error('email') is-invalid @enderror" 
                 id="signinEmail" 
                 name="email" 
                 placeholder="Enter your email" 
                 >
          @error('email')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <!-- Password -->
        <div class="mb-3">
          <label for="signinPassword" class="form-label">Password</label>
          <input type="password" 
                 class="form-control @error('password') is-invalid @enderror" 
                 id="signinPassword" 
                 name="password" 
                 placeholder="Enter password">
          @error('password')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <button type="submit" class="btn btn-primary">Sign In</button>

        <div class="mt-3 text-center">
          <small>Don’t have an account? <a href="{{ url('/') }}">Sign Up</a></small>
        </div>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
