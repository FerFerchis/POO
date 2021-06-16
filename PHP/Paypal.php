<?php
require_once('payment.php');
class UberX extends payment{
    public $email;

    public function __construct($id, $email){
        parent::__construct($id);
        $this->email = $email;
    }
}