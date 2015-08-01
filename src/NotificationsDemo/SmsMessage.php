<?php
namespace NotificationsDemo;

/**
 * Created by PhpStorm.
 * User: tishma
 * Date: 8/1/15
 * Time: 3:44 PM
 */
class SmsMessage
{
    protected $content;

    /**
     * @return string
     */
    public function getContents()
    {
        return $this->content;
    }

    /**
     * @param string $content
     * @return $this
     */
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }
}
