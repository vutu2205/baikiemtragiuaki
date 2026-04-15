@extends('layout.app')

@section('content')

<style>
    body {
        background: #f4f6f9;
    }

    .table-card {
        border-radius: 15px;
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
        animation: fadeIn 0.6s ease-in-out;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(15px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .btn {
        transition: 0.2s;
    }

    .btn:hover {
        transform: scale(1.05);
    }
</style>

<div class="row justify-content-center mt-4">
    <div class="col-md-10">

        <div class="card table-card p-4 bg-white">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3>📚 Danh sách lớp học</h3>
                <a href="/classes/create" class="btn btn-primary">➕ Thêm lớp</a>
            </div>

            {{-- Alert thành công --}}
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            {{-- Thanh tìm kiếm --}}
            <form method="GET" action="/classes" class="mb-3">
                <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="🔍 Tìm theo tên lớp...">
                    <button class="btn btn-outline-secondary">Tìm</button>
                </div>
            </form>

            <table class="table table-bordered table-hover text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Tên lớp</th>
                        <th>Giáo viên</th>
                        <th>Sinh viên</th>
                        <th width="180">Hành động</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($classes as $c)
                    <tr>
                        <td>{{ $c->id }}</td>
                        <td>{{ $c->name }}</td>
                        <td>{{ $c->teacher }}</td>
                        <td>
                            <span class="badge bg-info">{{ $c->students }}</span>
                        </td>
                        <td>
                            <a href="/classes/edit/{{ $c->id }}" class="btn btn-warning btn-sm">✏️ Sửa</a>

                            <a href="/classes/delete/{{ $c->id }}"
                               onclick="return confirm('Bạn có chắc muốn xóa lớp này?')"
                               class="btn btn-danger btn-sm">
                               🗑 Xóa
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            {{-- Phân trang --}}
            <div class="d-flex justify-content-center">
                {{ $classes->links() }}
            </div>

        </div>

    </div>
</div>

@endsection