<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f3f4f6;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .otp-card {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            padding: 40px;
            text-align: center;
            width: 100%;
            max-width: 400px;
        }
        .otp-input {
            letter-spacing: 12px;
            font-size: 24px;
            text-align: center;
            height: 55px;
            border-radius: 10px;
        }
        .btn-verify {
            margin-top: 25px;
            width: 100%;
            font-weight: bold;
        }
        .resend-btn {
            margin-top: 15px;
            background-color: transparent;
            border: none;
            color: #0d6efd;
            text-decoration: underline;
            font-size: 15px;
            cursor: pointer;
        }
        .resend-btn:hover {
            color: #0a58ca;
        }
    </style>
</head>
<body>

    <div class="otp-card">
        <h3 class="mb-4">OTP Verification</h3>
        <p class="text-muted mb-4">Enter the 6-digit code sent to your email</p>

        <form method="post" action="{{ route('otp.verification') }}">
            @csrf
            <input type="text" name="otp" maxlength="6" minlength="6" class="form-control otp-input" placeholder="______" required>
            <input type="hidden" name="user_id" value="{{ session('user_id') }}">

            @if(session('error'))
                <div class="alert alert-danger mt-3">{{ session('error') }}</div>
            @endif
            @if(session('success'))
                <div class="alert alert-success mt-3">{{ session('success') }}</div>
            @endif

            <button type="submit" class="btn btn-primary btn-verify">Verify OTP</button>
        </form>

    </div>

</body>
</html>
