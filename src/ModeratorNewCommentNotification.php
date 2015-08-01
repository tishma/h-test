<?php

/**
 * Created by PhpStorm.
 * User: tishma
 * Date: 8/1/15
 * Time: 3:54 PM
 */
class ModeratorNewCommentNotification extends AbstractNotification
{
    protected $smsTemplate = 'New comment has been posted on page “{posttitle}”.';
    protected $emailSubjectTemplate = 'New comment has been posted';
    protected $emailBodyTemplate = "Dear moderator,
New comment has been posted on your site on page “{posttitle}”.
Go to comments panel and moderate it.

{signature}
";
    // of course, this is terrible way to store templates, but that's off topic anyway
}
