<?php

trait Expiration {
    private $expiration_date;
    private $production_lot;

    public function getExpirationeDate(){
        return date("d/m/Y",strtotime($this->expiration_date));
    }

    public function checkExpiration(){
        if( $this->getExpirationeDate() < date('d/m/Y')){
            return "l'articolo è scaduto";
        } else {
            return "Datat di scadenza:" .  $this->getExpirationeDate();
        }
    }
    
}
?>