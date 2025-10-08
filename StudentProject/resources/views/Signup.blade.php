<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Portal - Sign Up</title>
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
    </style>
  </head>
  <body>
    <div class="auth-container">
      <h2>Create Account</h2>
      <form method="post" action="{{url('/stdSignIn')}}">
        @csrf
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
           @error('email')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
            @error('password')
            <div class="text-danger">{{ $message }}</div>
          @enderror
      
        </div>
        <div class="mb-3">

          <label for="password_confirmation" class="form-label">Confirm Password</label>
          <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Re-enter password" required>
           @error('password')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Sign Up</button>
        <!-- <div class="mt-3 text-center">
          <small>Already have an account? <a href="{{url('/signin')}}">Sign In</a></small>
        </div> -->
      </form>
    </div>
       <div class="mt-3 text-center">
          <small>Already have an account? <a href="{{url('/signin')}}">Sign In</a></small>
        </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
