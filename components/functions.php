<?php 

$animale = isset($_POST['animale']) ? intval($_POST['animale']) : 0;

$genere = isset($_POST['genere']) ? $_POST['genere'] : '';

$filteredArray = $arrayArticoli;

if ($animale && $genere !== '') {
    $filteredArray = array_filter($arrayArticoli, function ($item) use ($animale, $genere) {
        return $item->AnimalType === $animale && $item->genres === $genere;
    });
} else if ($animale !== 0 && $animale && !$genere) {
    $filteredArray = array_filter($arrayArticoli, function ($item) use ($animale) {
        return $item->AnimalType === $animale;
    });
} else if ($genere && !$animale) {
    $filteredArray = array_filter($arrayArticoli, function ($item) use ($genere) {
        return $item->genres === $genere;
    });
} else {
    $filteredArray = $arrayArticoli;
}


?>