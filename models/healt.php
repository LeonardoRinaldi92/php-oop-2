<?php
include_once __DIR__ . '/../traits/expiration.php';
include_once __DIR__ . '/../traits/spec.php';
require_once __DIR__ . '/mainArticle.php';
class Healt extends MainArticle {
    use Spec;
    use Expiration;

    public function __construct($_AnimalType, $_ArticleName, $_image, $_marca, $_desc, int $_prezzo,$_expiration_date, $_production_lot){
        parent::__construct($_AnimalType, $_ArticleName);
        $this->image = $_image;
        $this->marca = $_marca;
        $this->desc = $_desc;
        $this->prezzo = $_prezzo;
        $this->genres = 'cura';
        $this->expiration_date = $_expiration_date;
        $this->production_lot = $_production_lot;
    }

};
?>