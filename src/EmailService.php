<?php

/**
 * Created by PhpStorm.
 * User: tishma
 * Date: 8/1/15
 * Time: 3:45 PM
 */
class EmailService implements EmailServiceWrapperInterface
{
    /**
     * @var here goes the implmentation with the assumed interface.
     */
    private $emailClientImplementation;

    public function __construct($emailClientImplementation)
    {
        $this->emailClientImplementation = $emailClientImplementation;
    }
    public function send($destination, EmailMessage $emailMessage)
    {
        $this->emailClientImplementation->sendEmail($destination, $emailMessage);
    }
}
