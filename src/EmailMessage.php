<?php

/**
 * Created by PhpStorm.
 * User: tishma
 * Date: 8/1/15
 * Time: 3:44 PM
 */
class EmailMessage
{

    protected $subject;
    protected $body;

    /**
     * @return mixed
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param string $body
     * @return $this
     */
    public function setBody($body)
    {
        $this->body = $body;
        return $this;

    }
}
