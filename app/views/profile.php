<?php echo Session::get('notify') ?  "<p style='color:
    green'>" . Session::get('notify') . "</p>" : "" ?>
<h1>Welcome <?php echo $user->name ?></h1>
<p>Your email: <?php echo $user->email ?></p>
<p>Your account was created on: <?php echo $user
    ->created_at ?></p>
<p><a href="<?= URL::to('profile-edit') ?>">Edit your
    information</a></p>