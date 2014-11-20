<?php
return array(
    "base_url"   => "http://path/to/our/app/oauth/auth",
    "providers"  => array (
        "OpenID" => array ("enabled" => true),
        "Facebook" => array (
            "enabled"  => TRUE,
            "keys"     => array ("id" => "APP_ID", "secret"=> "APP_SECRET"),
            "scope"    => "email",
        ),
        "Twitter" => array (
            "enabled" => true,
            "keys"    => array ("key" => "CONSUMER_KEY","secret" => "CONSUMER_SECRET")
        ),
        "LinkedIn" => array (
            "enabled" => true,
            "keys" => array ("key" => "APP_KEY", "secret"=> "APP_SECRET")
        )
    )
);
