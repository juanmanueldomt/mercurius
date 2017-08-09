<?php
/**
 * Created by PhpStorm.
 * User: kronoz
 * Date: 6/08/17
 * Time: 08:23 PM
 */
require_once 'mail.php';
require_once 'dataMail.php';
class registerMail extends mail
{
    public function __construct($tomail)
    {
        parent::setheader(dataMail::$HEADER);
        parent::setmessage(dataMail::$REGISTERMAIL);
        parent::__construct($tomail, dataMail::$REGISTERSUBJECT);
    }

}