@extends('layout.app')

@section('content')

<style>
    body {
        background: linear-gradient(to right, #4facfe, #00f2fe);
    }

    .welcome-card {
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        animation: fadeIn 0.8s ease-in-out;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .btn-main {
        background: #fff;
        color: #4facfe;
        font-weight: bold;
        border-radius: 30px;
        padding: 10px 30px;
        transition: 0.3s;
        border: 2px solid #4facfe;
    }

    .btn-main:hover {
        background: #4facfe;
        color: #fff;
        transform: scale(1.05);
    }
</style>

<div class="d-flex justify-content-center align-items-center" style="height: 90vh;">

    <div class="card welcome-card p-5 text-center bg-white col-md-5">

        <h2 class="mb-3">🎉 Đăng nhập thành công</h2>
        <p class="text-muted">Chào mừng bạn đến hệ thống quản lý sinh viên</p>

        <hr>

        <div class="mt-4 text-center">
            <a href="/classes" class="btn btn-main">📚 Quản lý lớp học</a>
        </div>

    </div>

</div>

@endsection