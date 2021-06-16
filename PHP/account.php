<?php
class Account {
    public $id;
    public $name;
    public $document;
    public $email;
    public $password;

    public function __construct($name, $document){
        $this->name = $name;
        $this->document = $document;
    }

    public function printDataHumano(){
        echo " Nombre:".$this->name ." documento: ".$this->document ." email: ". $this->email." password: ".$this->password;
    }

}

?>