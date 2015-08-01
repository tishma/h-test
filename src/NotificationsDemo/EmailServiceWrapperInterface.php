<?php
namespace NotificationsDemo;

/**
 * Created by PhpStorm.
 * User: tishma
 * Date: 8/1/15
 * Time: 4:40 PM
 */
interface EmailServiceWrapperInterface
{
    public function send($destination, EmailMessage $emailMessage);
}
