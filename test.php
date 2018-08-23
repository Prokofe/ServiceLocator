<?php


require_once 'EmailService.php';
require_once 'SmsService.php';
require_once 'MessageServiceLocator.php';


$locator = new MessageServiceLocator();

$locator->registerService('email-service', new EmailService());
$locator->registerService('sms-service', new SmsService());


$email = 'msg to send';
$sms = 'msg to send';


if ($locator->has('email-service')) {
    $locator->get('email-service')->send($email);
}

echo '<br>';

if ($locator->has('sms-service')) {
    $locator->get('sms-service')->send($sms);
}
