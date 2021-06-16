<?php
require_once('account.php');
class driver extends account{
    
    public function __construct($name,$document, $email, $password){
        parent::__construct($name,$document, $email, $password);
    }
}