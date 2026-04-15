@extends('layout.app')

@section('content')

<style>
    body {
        background: #f4f6f9;
    }

    .form-card {
        border-radius: 15px;
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
        animation: fadeIn 0.6s ease-in-out;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(15px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .form-control:focus {
        border-color: #007bff;
        box-shadow: none;
    }

    .btn-primary {
        transition: 0.3s;
    }

    .btn-primary:hover {
        transform: scale(1.03);
        opacity: 0.9;
    }
</style>

<div class="row justify-content-center mt-5">
    <div class="col-md-6">

        <div class="card form-card p-4 bg-white">

            <h3 class="text-center mb-3">✏️ Sửa lớp học</h3>
            <p class="text-center text-muted">Cập nhật thông tin lớp học</p>

            {{-- Hiển thị lỗi --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            <form method="POST" action="/classes/update/{{$class->id}}">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Tên lớp</label>
                    <input name="name" value="{{$class->name}}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Giáo viên</label>
                    <input name="teacher" value="{{$class->teacher}}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Số sinh viên</label>
                    <input type="number" name="students" value="{{$class->students}}" class="form-control" required>
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <a href="/classes" class="btn btn-secondary">⬅ Quay lại</a>
                    <button class="btn btn-primary">💾 Cập nhật</button>
                </div>

            </form>

        </div>

    </div>
</div>

@endsection