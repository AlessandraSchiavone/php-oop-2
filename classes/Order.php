<?php
require_once __DIR__ . "/Client.php";
class Order extends Client {
    private $trackingNumber;
    private $flag_delivered = 0 ;
   

    function __construct($name = "",$surname = "",$gender="", $email = "", $sconto = 0, $scoreFidelityCard = 0,$address="", $trackingNumber, $flag_delivered=0) {
        parent::__construct($name,$surname,$gender, $email, $sconto,$scoreFidelityCard,$address);
        $this->trackingNumber = $trackingNumber;
        $this->flag_delivered = $flag_delivered;
    } 
   

}
 echo "<h2>Order</h2>";

    $order1 = new Order("Ale","Schiavon","F", "alexa@email.it",0, 90,"Via Michelangelo",111212234);
    var_dump($order1);
;
?>