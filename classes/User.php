<?php 
class User {
    protected $name;
    protected $surname;
    protected $gender;
    public $email;
    public $sconto;

    function __construct($name = "",$surname = "",$gender="", $email = "", $sconto = 0) {
        $this->name = $name;
        $this->surname = $surname;
        $this->gender = $gender;
        $this->email = $email;
        $this->sconto = $sconto;
    }
    public function getFullName() {
        return $this->name . " " . $this->surname;
    }
    public function setSconto($eta) {
        if($eta >= 18) {
            $this->sconto = 15;
        } else {
            $this->sconto = 0;
        }
    }

}; ?>
