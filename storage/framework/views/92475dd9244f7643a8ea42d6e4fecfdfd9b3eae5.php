

<?php $__env->startSection('content'); ?>

<div class="card card-pro p-4">

<h3>📚 Danh sách lớp học</h3>

<a href="/classes/create" class="btn btn-primary mb-3">➕ Thêm lớp</a>

<table class="table table-bordered table-hover">
<tr>
<th>ID</th>
<th>Tên lớp</th>
<th>Giáo viên</th>
<th>Sinh viên</th>
<th>Hành động</th>
</tr>

<?php $__currentLoopData = $classes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td><?php echo e($c->id); ?></td>
<td><?php echo e($c->name); ?></td>
<td><?php echo e($c->teacher); ?></td>
<td><?php echo e($c->students); ?></td>
<td>
<a href="/classes/edit/<?php echo e($c->id); ?>" class="btn btn-warning btn-sm">Sửa</a>
<a href="/classes/delete/<?php echo e($c->id); ?>" class="btn btn-danger btn-sm">Xóa</a>
</td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>

<?php echo e($classes->links()); ?>


</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Documents\baitapgiuaki\qlsv\resources\views/class/index.blade.php ENDPATH**/ ?>