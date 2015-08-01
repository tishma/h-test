<?php
/**
 * Created by PhpStorm.
 * User: tishma
 * Date: 8/1/15
 * Time: 4:25 PM
 */

include_once '../src/NotificationsDemo/AbstractNotification.php';
include_once '../src/NotificationsDemo/EmailServiceWrapperInterface.php';
include_once '../src/NotificationsDemo/SmsServiceWrapperInterface.php';
include_once '../src/NotificationsDemo/EmailMessage.php';
include_once '../src/NotificationsDemo/EmailService.php';
include_once '../src/NotificationsDemo/SmsMessage.php';
include_once '../src/NotificationsDemo/SmsService.php';

include_once 'ModeratorNewCommentNotification.php';
include_once 'SenderServiceImplementation.php';

use NotificationsDemo\EmailService;
use NotificationsDemo\SmsService;


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
