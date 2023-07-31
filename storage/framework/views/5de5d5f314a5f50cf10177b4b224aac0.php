<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"  href="<?php echo e(asset('css/styleAd.css')); ?>">
    <script src="<?php echo e(asset('js/script.js')); ?>"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
        
    <script>
      tinymce.init({
        selector: 'textarea#editor',
      });
    </script>
    <title>Document</title>
    <?php echo $__env->make('includes.pagStyle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          
</head>
<body>

    <h1 class="nav nav-tabs" >
        <a href="<?php echo e(route('course.index')); ?>" >  Admin  </a> 
    </h1>

    <div class="wrapper">
    <div class="sidebar">
        <ul>
            <li><a href="<?php echo e(url('dashboard')); ?>">Home</a></li>
            <li><a href="<?php echo e(route('course.create')); ?>">Add Course</a></li>
            <li><a href="<?php echo e(route('category.create')); ?>">Add Category</a></li>
            <li><a href="<?php echo e(url('/')); ?>">logout</a></li>
        </ul>
    </div>
</div>


         <!--   الجزء المتغير   -->
    <div class="container">
        <?php echo $__env->yieldContent('MainContent'); ?>   
  </div>     
  
    
</body>
<?php echo $__env->make('includes.pagjS', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</html><?php /**PATH C:\Users\MI\Desktop\laravel\task3\resources\views/layouts/main.blade.php ENDPATH**/ ?>