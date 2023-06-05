<?php

trait Expiration {
    private $expiration_date;
    private $production_lot;

    

    public function getExpirationeDate(){
        return date("d/m/Y",strtotime($this->expiration_date));
    }

    public function checkExpiration(){
        return date('d/m/Y') < $this->getExpirationeDate();
    }
    
    public function setExpiration(){
        if( $this->checkExpiration()){
            return "l'articolo è scaduto";
        } else {
            return "Datat di scadenza:" .  $this->getExpirationeDate();
        }
    }
}
?>