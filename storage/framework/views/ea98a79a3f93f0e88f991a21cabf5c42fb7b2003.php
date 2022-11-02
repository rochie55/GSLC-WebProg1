<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('Title'); ?></title>
</head>
<body>
    <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div style="height: 100vh; background: url(https://wallpapercave.com/wp/wp2076373.png); no-repeat right;
    background-size: cover;">
    <center>
    <?php echo $__env->yieldContent('Loading'); ?>
    </center>
    </div>


</body>
</html>


<?php /**PATH C:\Users\ronald richie\Desktop\Binus Life\SEMESTER 5\Web Programming\Coding Stuff\GSLC1_WP_Ronald Richie Huang\resources\views/main.blade.php ENDPATH**/ ?>