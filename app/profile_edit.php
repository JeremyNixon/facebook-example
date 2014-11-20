<h2>Edit User Info</h2>
<?php $messages =  $errors->all('<p style="color:red">:message</p>') ?>
<?php foreach ($messages as $msg): ?>
    <?= $msg ?>
<?php endforeach; ?>
<?= Form::open() ?>
<?= Form::label('email', 'Email address: ') ?>
<?= Form::text('email', $user->email) ?>
<br>
<?= Form::label('password', 'Password: ') ?>
<?= Form::password('password') ?>
<br>
<?= Form::label('password_confirm', 'Retype Password: ') ?>
<?= Form::password('password_confirm') ?>
<br>
<?= Form::label('name', 'Name: ') ?>
<?= Form::text('name',  $user->name) ?>
<br>
<?= Form::submit('Update!') ?>
<?= Form::close() ?>