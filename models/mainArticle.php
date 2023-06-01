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
            return 'cane';
        } else if ($this->AnimalType == 2) {
            return 'gatto';
        } 
    }
}

?>