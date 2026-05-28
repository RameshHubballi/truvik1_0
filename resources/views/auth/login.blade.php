<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite('resources/css/style.css')
</head>
<body class="auth-page-body">
    <div class="auth-container">
        <form method="POST" action="{{ url('/login') }}">
            @csrf
            <h2><i class="fa-solid fa-right-to-bracket"></i> Welcome Back 👋</h2>

            @if($errors->any())
                <div class="auth-error">
                    <i class="fa-solid fa-circle-exclamation"></i> {{ $errors->first() }}
                </div>
            @endif

            <div class="auth-input-group">
                <i class="fa-solid fa-envelope"></i>
                <input type="email" name="email" placeholder="Email Address" required>
            </div>
            
            <div class="auth-input-group">
                <i class="fa-solid fa-lock"></i>
                <input type="password" name="password" placeholder="Password" required>
            </div>

            <button type="submit">Login</button>
        </form>
        <div class="auth-link">
            Don't have an account? <a href="{{ url('/register') }}">Register here</a>
        </div>
    </div>
</body>
</html>
