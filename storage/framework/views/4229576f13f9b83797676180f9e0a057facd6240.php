<?php $__env->startSection('Title', 'Overwatch'); ?>

<?php $__env->startSection('Loading'); ?>
<?php for($i= 0; $i<=100; $i+=25): ?>
<h1 style="color: white"> Overwatch Loading Progress: <?php echo e($i); ?>% </h1><br>

<?php if($i == 100): ?>
 <h1 style="color: orange"> Overwatch Loading Completed! </h1> <br>
<h2 style="color: white"> "The world could always use more heroes..." </h2>
<?php break; ?>
<?php endif; ?>
<?php endfor; ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ronald richie\Desktop\Binus Life\SEMESTER 5\Web Programming\Coding Stuff\GSLC1_WP_Ronald Richie Huang\resources\views/loop.blade.php ENDPATH**/ ?>