<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php echo e(date('Y')); ?>

    <br/>

    <!-- <?php echo e("<h3>Hello Laravel</h3>"); ?> -->
    <?php echo "<h3>Hello Laravel</h3>"; ?>

    <?= "<h3>Hello Laravel </h3>"?>

    <?php
    $message = "hello Laravel";
    ?>
    <h2><?php echo e($message); ?></h2>
</body>
</html><?php /**PATH D:\project_laravel\example-app\resources\views/home.blade.php ENDPATH**/ ?>