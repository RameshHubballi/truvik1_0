<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite('resources/css/style.css')
    <style>
        .bg-slideshow {
            position: fixed;
            width: 100vw;
            height: 100vh;
            top: 0;
            left: 0;
            z-index: -1;
            background-color: #f0f2f5; 
        }
        .bg-slideshow .bg-slide {
            position: absolute;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            opacity: 0;
            animation: slideFade 15s infinite;
        }
        .bg-slideshow .bg-slide:nth-child(1) {
            background-image: url('{{ asset("images/professional_bg_1.png") }}');
            animation-delay: 0s;
        }
        .bg-slideshow .bg-slide:nth-child(2) {
            background-image: url('{{ asset("images/professional_bg_2.png") }}');
            animation-delay: 5s;
        }
        .bg-slideshow .bg-slide:nth-child(3) {
            background-image: url('{{ asset("images/professional_bg_3.png") }}');
            animation-delay: 10s;
        }

        @keyframes slideFade {
            0% { opacity: 0; transform: scale(1); }
            10% { opacity: 1; }
            33% { opacity: 1; }
            43% { opacity: 0; }
            100% { opacity: 0; transform: scale(1.05); }
        }
        
        body.auth-page-body {
            background: transparent !important;
        }
    </style>
</head>
<body class="auth-page-body">
    <div class="bg-slideshow">
        <div class="bg-slide"></div>
        <div class="bg-slide"></div>
        <div class="bg-slide"></div>
    </div>
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
