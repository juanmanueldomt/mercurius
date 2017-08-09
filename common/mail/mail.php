<?php
/**
 * Created by PhpStorm.
 * User: kronoz
 * Date: 6/08/17
 * Time: 07:51 PM
 */

class mail
{
    private $tomail;
    private $tosubject;
    private $message;
    private $header;
    public function __construct($tomail,$subject)
    {
        $this->tomail = $tomail;
        $this->tosubject = $subject;
    }

    public function send(){
        mail($this->tomail, $this->tosubject,$this->message, $this->header);
    }

    protected function setmessage($message){
        $this->message = $message;
    }

    protected function setheader($header){
        $this->header = $header;
    }

}