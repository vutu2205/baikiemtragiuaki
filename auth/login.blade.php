@extends('layout.app')

@section('content')

<style>
    body {
        background: linear-gradient(to right, #4facfe, #00f2fe);
    }

    .login-card {
        border-radius: 15px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        animation: fadeIn 0.8s ease-in-out;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .form-control:focus {
        box-shadow: none;
        border-color: #4facfe;
    }

    .btn-primary {
        background: linear-gradient(to right, #4facfe, #00f2fe);
        border: none;
        transition: 0.3s;
    }

    .btn-primary:hover {
        opacity: 0.9;
        transform: scale(1.02);
    }
</style>

<div class="row justify-content-center align-items-center" style="height: 90vh;">
    <div class="col-md-4">

        <div class="card login-card p-4 bg-white">

            <h3 class="text-center mb-3">🔐 Đăng nhập</h3>
            <p class="text-center text-muted">Chào mừng bạn quay lại</p>

            @if(session('error'))
                <div class="alert alert-danger text-center">
                    {{ session('error') }}
                </div>
            @endif

            <form method="POST" action="/login">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Nhập email của bạn" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Mật khẩu</label>
                    <input type="password" name="password" class="form-control" placeholder="Nhập mật khẩu" required>
                </div>

                <button class="btn btn-primary w-100 mt-2">Đăng nhập</button>
            </form>

            <div class="text-center mt-3">
                <small>Chưa có tài khoản?</small><br>
                <a href="/register" class="fw-bold text-decoration-none">Đăng ký ngay</a>
            </div>

        </div>

    </div>
</div>

@endsection