<?php
require_once('payment.php');
class Efectivo extends payment {

    public function __construct($id){
        parent::__construct($id);
    }
}