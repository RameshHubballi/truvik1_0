<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite('resources/css/style.css')
</head>
<body class="auth-page-body register-bg">
    <div class="auth-container register-container">
        <form method="POST" action="{{ url('/register') }}">
            @csrf
            <h2><i class="fa-solid fa-user-plus"></i> Create Account </h2>

            @if($errors->any())
                <div class="auth-error">
                    <i class="fa-solid fa-circle-exclamation"></i> {{ $errors->first() }}
                </div>
            @endif

            <div class="auth-input-group">
                <i class="fa-solid fa-user"></i>
                <input type="text" name="name" placeholder="Full Name" required>
            </div>

            <div class="auth-input-group">
                <i class="fa-solid fa-envelope"></i>
                <input type="email" name="email" placeholder="Email Address" required>
            </div>
            
            <div class="auth-input-group">
                <i class="fa-solid fa-phone"></i>
                <input type="text" name="mobile_number" placeholder="Mobile Number" required>
            </div>
            
            <div class="auth-input-group">
                <i class="fa-solid fa-lock"></i>
                <input type="password" name="password" placeholder="Password" required>
            </div>

            <div class="auth-input-group">
                <i class="fa-solid fa-shield-halved"></i>
                <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
            </div>

            <button type="submit">Register</button>
        </form>
        <div class="auth-link">
            Already have an account? <a href="{{ url('/login') }}">Login here</a>
        </div>
    </div>
</body>
</html>
