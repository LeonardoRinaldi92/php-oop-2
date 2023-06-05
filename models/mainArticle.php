<?php
class MainArticle {
    public $AnimalType;
    public $Article;

    function __construct(int $_AnimalType, $_ArticleName){
        $this->AnimalType = $_AnimalType;
        $this->Article = $_ArticleName;      
    }

    public function getAnimalType() {
        if ($this->AnimalType == 1){
            return '<i class="fa-solid fa-dog "></i>';
        } else if ($this->AnimalType == 2) {
            return '<i class="fa-solid fa-cat "></i>';
        } 
    }

    public function getPrice(){
        return number_format( $this->prezzo / 100, 2, ",", "") . ' euro';
    }
}

?>