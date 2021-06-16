<?php
require_once('payment.php');
class UberX extends payment{
    public $numberCard;
    public $dateCard;
    public $cvv;

    public function __construct($id,$numberCard,$dateCard, $cvv){
        parent::__construct($id);
        $this->numberCard = $numberCard;
        $this->dateCard = $dateCard;
        $this->cvv = $cvv;
    }
}