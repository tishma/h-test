<?php
/**
 * Created by PhpStorm.
 * User: tishma
 * Date: 8/1/15
 * Time: 4:25 PM
 */


include_once 'src/AbstractNotification.php';
include_once 'src/EmailServiceWrapperInterface.php';
include_once 'src/SmsServiceWrapperInterface.php';
include_once 'src/EmailMessage.php';
include_once 'src/EmailService.php';
include_once 'src/ModeratorNewCommentNotification.php';
include_once 'src/SmsMessage.php';
include_once 'src/SmsService.php';
include_once 'SenderServiceImplementation.php';

$notification = new ModeratorNewCommentNotification();


$sender = new SenderServiceImplementation();

$smsService = new SmsService($sender);
$emailService = new EmailService($sender);



$postData = [
    'posttitle' => 'Post #1',
    'signature' => 'Created by XYZ',
];
$smsMessage = $notification->createSmsMessage($postData);

//Depending on user (moderator) notification preferences we can send only SMS ...
$smsService->send('moderator1 mobile phone number', $smsMessage);

// ... or both
$smsService->send('moderator2 mobile phone number', $smsMessage);
$emailService->send('moderator2 email address', $notification->createEmailMessage($postData));
