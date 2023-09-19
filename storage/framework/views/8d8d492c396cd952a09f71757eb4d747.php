<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>login</title>
    </head>
    <body>
     
<h1>login client</h1>
        <form action="<?php echo e(route('login')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <input type="email" name="email" placeholder="email">
            <input type="password" name="password" placeholder="password">
            <input type="submit" value="login">
        </form>
    </body><?php /**PATH C:\Users\Teamir\OneDrive\Desktop\Projects\Furnishop\resources\views/login.blade.php ENDPATH**/ ?>