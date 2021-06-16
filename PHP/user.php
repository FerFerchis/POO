<?php
require_once('account.php');
class user extends account{

    public function __construct($name,$document, $email, $password){
        parent::__construct($name,$document, $email, $password);
    }
}