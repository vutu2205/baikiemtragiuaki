

<?php $__env->startSection('content'); ?>

<div class="card card-pro p-4">

<h3>✏️ Sửa lớp học</h3>

<form method="POST" action="/classes/update/<?php echo e($class->id); ?>">
<?php echo csrf_field(); ?>

<div class="mb-3">
<label>Tên lớp</label>
<input name="name" value="<?php echo e($class->name); ?>" class="form-control">
</div>

<div class="mb-3">
<label>Giáo viên</label>
<input name="teacher" value="<?php echo e($class->teacher); ?>" class="form-control">
</div>

<div class="mb-3">
<label>Số sinh viên</label>
<input name="students" value="<?php echo e($class->students); ?>" class="form-control">
</div>

<button class="btn btn-primary">Cập nhật</button>

</form>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Documents\baitapgiuaki\qlsv\resources\views/class/edit.blade.php ENDPATH**/ ?>