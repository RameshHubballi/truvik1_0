<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <style>
        body { font-family: Arial; background: #f2f2f2; display: flex; justify-content: center; align-items: center; height: 100vh; }
        .register-form { background: white; padding: 30px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); width: 300px; }
        .register-form h2 { text-align: center; margin-bottom: 20px; }
        .register-form input { width: 100%; margin-bottom: 15px; padding: 10px; border: 1px solid #ccc; border-radius: 4px; }
        .register-form button { width: 100%; padding: 10px; background: #28a745; color: white; border: none; border-radius: 4px; }
        .error { color: red; font-size: 14px; margin-bottom: 10px; }
    </style>
</head>
<body>
    <form method="POST" action="{{ url('/register') }}" class="register-form">
        @csrf
        <h2>Create Account</h2>

        @if($errors->any())
            <div class="error">{{ $errors->first() }}</div>
        @endif

        <input type="text" name="name" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email Address" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="password_confirmation" placeholder="Confirm Password" required>

        <button type="submit">Register</button>
    </form>
</body>
</html>
