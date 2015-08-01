<?php
use NotificationsDemo\EmailMessage;
use NotificationsDemo\SmsMessage;

/**
 * Created by PhpStorm.
 * User: tishma
 * Date: 8/1/15
 * Time: 4:28 PM
 */
class SenderServiceImplementation
{

    public function sendEmail($destination, EmailMessage $message)
    {
        $date = date('Y/m/d H:i:s');
        file_put_contents('/tmp/sendserviceslog.txt', "
$date: Sending email to $destination
Subject: {$message->getSubject()}
Body: {$message->getBody()}

        ", FILE_APPEND);
    }


    public function sendSms($destination, SmsMessage $message)
    {
        $date = date('Y/m/d H:i:s');
        file_put_contents('/tmp/sendserviceslog.txt', "
$date: Sending SMS to $destination
SMS Contents: {$message->getContents()}

        ", FILE_APPEND);
    }

}
