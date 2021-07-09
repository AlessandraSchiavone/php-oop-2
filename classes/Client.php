<?php 
require_once __DIR__ . "/User.php";
class Client extends User {
    private $scoreFidelityCard;
    private $address;

    function __construct($name = "",$surname = "",$gender="", $email = "", $sconto = 0, $scoreFidelityCard = 0, $address="") {
        parent::__construct($name,$surname,$gender, $email, $sconto);
        $this->scoreFidelityCard = $scoreFidelityCard;
        $this->address = $address;
    } 

    public function setAddress($address) {
        $this->address = $address;
    }

    public function getName() {
        $prefix = ($this->gender == 'M') ? 'Sig. ' : 'Sig.ra ';
        return $prefix . parent::getFullName();
    }
    public function setSconto($eta) {
        parent::setSconto($eta);
        $this->sconto += $this-> scoreFidelityCard* 0.10 ;
    }
    public function getSconto() {
        return $this->sconto . "%";
    }
    public function getAddress() {
        return $this->address;
    }
}
echo "<h2>Client</h2>";

$client1 = new Client("Ale","Schiavon","F", "alexa@email.it",0, 90,"Via Michelangelo");
$client1->setSconto(23);
echo $client1->getName()."<br>";
echo $client1->getSconto();
var_dump($client1);

; ?>
