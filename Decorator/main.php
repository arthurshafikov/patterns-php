<?php

use Decorators\Email;
use Decorators\Facebook;
use Decorators\Slack;
use Decorators\SMS;

require 'autoloader.php';

$config = [
    'notify_facebook' => true,
    'notify_slack' => false,
    'notify_sms' => true,
];

$notification = new Email;

if ($config['notify_facebook']) {
    $notification = new Facebook($notification);
}

if ($config['notify_slack']) {
    $notification = new Slack($notification);
}

if ($config['notify_sms']) {
    $notification = new SMS($notification);
}

$notification->send();
/*
Sending an email...
Sending through Facebook...
Sending an SMS...
*/
