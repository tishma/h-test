<?php
namespace NotificationsDemo;

/**
 * Created by PhpStorm.
 * User: tishma
 * Date: 8/1/15
 * Time: 4:39 PM
 */
interface SmsServiceWrapperInterface
{
    public function send($destination, SmsMessage $smsMessage);
}
