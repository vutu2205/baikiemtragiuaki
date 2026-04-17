

<?php $__env->startSection('content'); ?>

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
        border-color: #28a745;
        box-shadow: none;
    }

    .btn-success {
        transition: 0.3s;
    }

    .btn-success:hover {
        transform: scale(1.03);
        opacity: 0.9;
    }
</style>

<div class="row justify-content-center mt-5">
    <div class="col-md-6">

        <div class="card form-card p-4 bg-white">

            <h3 class="text-center mb-3">➕ Thêm lớp học</h3>
            <p class="text-center text-muted">Nhập thông tin lớp học mới</p>

            <form method="POST" action="/classes/store">
                <?php echo csrf_field(); ?>

                <div class="mb-3">
                    <label class="form-label">Tên lớp</label>
                    <input name="name" class="form-control" placeholder="VD: CNTT1" required>
                    <small class="text-muted">Tên lớp học</small>
                </div>

                <div class="mb-3">
                    <label class="form-label">Giáo viên</label>
                    <input name="teacher" class="form-control" placeholder="VD: Nguyễn Văn A" required>
                    <small class="text-muted">Giảng viên phụ trách</small>
                </div>

                <div class="mb-3">
                    <label class="form-label">Số sinh viên</label>
                    <input type="number" name="students" class="form-control" placeholder="VD: 30" required>
                    <small class="text-muted">Số lượng sinh viên</small>
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <a href="/classes" class="btn btn-secondary">⬅ Quay lại</a>
                    <button class="btn btn-success">💾 Lưu</button>
                </div>

            </form>

        </div>

    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\btap giữa kì\baitapgiuaki\baitapgiuaki\qlsv\resources\views/class/create.blade.php ENDPATH**/ ?>