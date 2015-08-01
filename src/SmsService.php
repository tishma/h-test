<?php

/**
 * Created by PhpStorm.
 * User: tishma
 * Date: 8/1/15
 * Time: 3:45 PM
 */
class SmsService implements SmsServiceWrapperInterface
{
    /**
     * @var here goes the implmentation with the assumed interface.
     */
    private $smsClientImplementation;

    public function __construct($smsClientImplementation)
    {
        $this->smsClientImplementation = $smsClientImplementation;
    }


    public function send($destination, SmsMessage $message)
    {
        $this->smsClientImplementation->sendSms($destination, $message);
    }
}
