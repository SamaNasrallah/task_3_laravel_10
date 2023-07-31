
<?php $__env->startSection('MainContent'); ?>
<br>
<?php
use App\Models\Course;
$courses = Course::all();

?>

<table class="table table-success table-striped" >
    <thead>
    <tr style="text-align: center;">
        <th>ID</th>
        <th>Course Title</th>
        <th>Category</th>
        <th>Hours</th>
        <th>Start Date</th>
        <th>Teacher</th>
        <th>Details</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
</thead>

<tbody>
    <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($course->id); ?></td>
        <td><?php echo e($course->course_title); ?></td>
        <td><?php echo e($course->category->name); ?></td>
        <td><?php echo e($course->hours); ?></td>
        <td><?php echo e($course->start_date); ?></td>
        <td><?php echo e($course->teacher); ?></td>
        <td>
            <a class="btn btn-secondary"href="<?php echo e(route('course.show',$course->id)); ?>" >Details</a>
        </td>
        <td>   <a class="btn btn-primary" href="<?php echo e(route('course.edit',$course->id)); ?>">
           Edit
         </a>
        </td>
        <td>
            <form action="<?php echo e(route('course.destroy', $course->id)); ?>" method="post">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="btn btn-danger" id="btn-delete-co">
                   Delete
                </button>
             </form>
        </td>
        <script>
            $(document).ready(function() {
               $("#btn-delete-co").click(function() {
                  alert("Delete Course successfully");
              });
            });
         </script>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MI\Desktop\laravel\task3\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>