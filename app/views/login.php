<!DOCTYPE html>
<html>
    <head>
        <title>Laravel Open ID Login</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>OpenID Login</h1>
        <?= Form::open(array('url' => 'openid', 'method' =>'POST')) ?>
        <?= Form::label('openid_identity', 'OpenID') ?>
        <?= Form::text('openid_identity', Input::old('openid_identity')) ?>
        <br>
        <?= Form::submit('Log In!') ?>
        <?= Form::close() ?>
    </body>
</html>