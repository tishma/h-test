<?php
namespace NotificationsDemo;

/**
 * Created by PhpStorm.
 * User: tishma
 * Date: 8/1/15
 * Time: 3:57 PM
 */
abstract class AbstractNotification
{
    protected $smsTemplate;
    protected $emailSubjectTemplate;
    protected $emailBodyTemplate;

    /**
     * @param $data
     * @return $this
     */
    public function createSmsMessage($data)
    {
        $smsContent = $this->simpleRenderTemplate($this->smsTemplate, $data);

        $message = new SmsMessage();
        return $message->setContent($smsContent);
    }

    public function createEmailMessage($data)
    {
        $subject = $this->simpleRenderTemplate($this->emailSubjectTemplate, $data);
        $body = $this->simpleRenderTemplate($this->emailBodyTemplate, $data);
        $message = new EmailMessage();

        return $message->setSubject($subject)->setBody($body);
    }

    private function simpleRenderTemplate($template, $data){
        $rendered = $template;
        foreach ($data as $key => $value) {
            $rendered = str_replace("{{$key}}", $value, $rendered);
        }

        return $rendered;
    }

}
