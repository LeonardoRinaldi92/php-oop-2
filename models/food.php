<?php

require_once __DIR__ . '/mainArticle.php';


class Food extends MainArticle {
    public $genres ;
    public $image;
    public $marca;
    public $peso;
    public $prezzo;
    public $desc;

    public function __construct($_AnimalType, $_ArticleName, $_image, $_marca, int $_peso, int $_prezzo, $_desc){
        parent::__construct($_AnimalType, $_ArticleName);
        $this->image = $_image;
        $this->marca = $_marca;
        $this->peso = $_peso;
        $this->prezzo = $_prezzo;
        $this->genres = 'cibo';
        $this->desc = $_desc;
    }

};


?>