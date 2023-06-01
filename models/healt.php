<?php

require_once __DIR__ . '/mainArticle.php';


class Healt extends MainArticle {
    public $genres ;
    public $image;
    public $marca;
    public $desc;
    public $prezzo;

    public function __construct($_AnimalType, $_ArticleName, $_image, $_marca, $_desc, int $_prezzo){
        parent::__construct($_AnimalType, $_ArticleName);
        $this->image = $_image;
        $this->marca = $_marca;
        $this->desc = $_desc;
        $this->prezzo = $_prezzo;
        $this->genres = 'accessori';
    }

    public function getPrice(){
        return ($this->prezzo)/100;
    }

};
?>