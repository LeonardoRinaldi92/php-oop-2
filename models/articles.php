<?php

require_once __DIR__ . '/mainArticle.php';


class Food extends MainArticle {
    public $genres = 'cibo';
    public $image;
    public $marca;
    public $peso;
    public $prezzo;

    public function __construct($_AnimalType, $_ArticleName, $_image, $_marca, int $_peso, int $_prezzo ){
        parent::__construct($_AnimalType, $_ArticleName);
        $this->image = $_image;
        $this->genres = $_marca;
        $this->peso = $_peso;
        $this->prezzo = $_prezzo;
    }

    
}

$crocci = new Food(1,'Purina Pro Plan Veterinary Diets Hypoallergenic HA Cane','https://arcaplanet.vtexassets.com/arquivos/ids/276183-1800-1800/MAIN.jpg?v=1771978458&quality=1&width=1800&height=1800','Purina', 3, 6090);

var_dump($crocci);
?>