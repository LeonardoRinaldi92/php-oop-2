<?php

trait Expiration {
    private $expiration_date;
    private $production_lot;

    

    public function getExpirationeDate(){
        return date("d/m/Y",strtotime($this->expiration_date));
    }

    
    public function setExpiration(){
        if( DateTime::createFromFormat('d/m/Y',$this->expiration_date) < new DateTime()){
            return "l'articolo è scaduto";
        } else {
            return "Datat di scadenza:" .  $this->getExpirationeDate();
        }
    }
}
?>