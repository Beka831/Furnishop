<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>client</title>
    </head>
    <body>
        
        <h1>Register client</h1>
        <form action="<?php echo e(route('register')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <input type="text" name="name" placeholder="name">
            <input type="email" name="email" placeholder="email">
            <input type="tel" name="client_phone_no" placeholder="phone number">
            <input type="password" name="password" placeholder="password">
            <input type="submit" value="register">
        </form>
    </body><?php /**PATH C:\Users\Teamir\OneDrive\Desktop\Projects\Furnishop\resources\views/client.blade.php ENDPATH**/ ?>