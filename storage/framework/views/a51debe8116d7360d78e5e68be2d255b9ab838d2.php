

<?php $__env->startSection('content'); ?>

<div class="card card-pro p-4">

<h3>➕ Thêm lớp học</h3>

<form method="POST" action="/classes/store">
<?php echo csrf_field(); ?>

<div class="mb-3">
<label>Tên lớp</label>
<input name="name" class="form-control" placeholder="VD: CNTT1">
<small>Tên lớp học</small>
</div>

<div class="mb-3">
<label>Giáo viên</label>
<input name="teacher" class="form-control" placeholder="VD: Nguyễn Văn A">
<small>Tên giảng viên phụ trách</small>
</div>

<div class="mb-3">
<label>Số sinh viên</label>
<input name="students" class="form-control" placeholder="VD: 30">
<small>Số lượng sinh viên trong lớp</small>
</div>

<button class="btn btn-success">Lưu</button>

</form>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Documents\baitapgiuaki\qlsv\resources\views/class/create.blade.php ENDPATH**/ ?>