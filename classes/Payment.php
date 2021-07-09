<?php 
require_once __DIR__ . "/Order.php";
class Payment extends Order {
    private $methodPayment;
    
    function __construct($name = "",$surname = "",$gender="", $email = "", $sconto = 0, $scoreFidelityCard = 0,$address="",$trackingNumber, $flag_delivered=0,$methodPayment){
        parent::__construct($name ,$surname ,$gender, $email, $sconto, $scoreFidelityCard ,$address,$trackingNumber, $flag_delivered,$methodPayment);
        $this->methodPayment= $methodPayment;
    }
    public function getExtract(){
        return str_replace(substr($this->methodPayment,0,-3),"******",$this->methodPayment);
    }

}
 echo "<h2>Payment</h2>";

    $pay1 = new Payment("Ale","Schiavon","F", "alexa@email.it",0, 90,"Via Michelangelo",111212234,1,432567903456);
    echo $pay1->getExtract();
    var_dump($pay1);

; ?>
