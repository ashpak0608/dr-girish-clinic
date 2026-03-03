<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Dr. Girish Ojha</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #1a5f7a, #2c9a7a);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Inter', sans-serif;
        }
        
        .login-card {
            background: white;
            border-radius: 20px;
            padding: 40px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.2);
        }
        
        .login-header {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .login-header h3 {
            color: #1a5f7a;
            font-weight: 700;
            margin-top: 10px;
        }
        
        .login-header p {
            color: #666;
            font-size: 14px;
        }
        
        .btn-login {
            background: #2c9a7a;
            border: none;
            padding: 12px;
            font-weight: 600;
            width: 100%;
            color: white;
            border-radius: 10px;
            transition: all 0.3s;
        }
        
        .btn-login:hover {
            background: #238b6e;
            transform: translateY(-2px);
        }
        
        .form-control {
            border: 2px solid #e9ecef;
            border-radius: 10px;
            padding: 12px;
        }
        
        .form-control:focus {
            border-color: #2c9a7a;
            box-shadow: 0 0 0 0.2rem rgba(44,154,122,0.25);
        }
    </style>
</head>
<body>
    <div class="login-card">
        <div class="login-header">
            <i class="fas fa-user-md fa-3x" style="color: #1a5f7a;"></i>
            <h3>Admin Login</h3>
            <p>Dr. Girish Ojha - Orthopaedic Clinic</p>
        </div>
        
        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p class="mb-0">{{ $error }}</p>
                @endforeach
            </div>
        @endif
        
        <form method="POST" action="{{ route('admin.login') }}">
            @csrf
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" value="admin@drgirish.com" required>
            </div>
            <div class="mb-4">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password" value="admin123" required>
            </div>
            <button type="submit" class="btn-login">
                <i class="fas fa-sign-in-alt me-2"></i>Login
            </button>
            <div class="text-center mt-3">
                <small class="text-muted">Default: admin@drgirish.com / admin123</small>
            </div>
        </form>
    </div>
</body>
</html>