<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body { font-family: Arial; background: #f2f2f2; display: flex; justify-content: center; align-items: center; height: 100vh; }
        .login-form { background: white; padding: 30px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); width: 300px; }
        .login-form h2 { text-align: center; margin-bottom: 20px; }
        .login-form input { width: 100%; margin-bottom: 15px; padding: 10px; border: 1px solid #ccc; border-radius: 4px; }
        .login-form button { width: 100%; padding: 10px; background: #007BFF; color: white; border: none; border-radius: 4px; }
        .error { color: red; font-size: 14px; }
    </style>
</head>
<body>
    <form method="POST" action="{{ url('/login') }}" class="login-form">
        @csrf
        <h2>Login</h2>

        @if($errors->any())
            <div class="error">{{ $errors->first() }}</div>
        @endif

        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>

        <button type="submit">Login</button>
    </form>
</body>
</html>
