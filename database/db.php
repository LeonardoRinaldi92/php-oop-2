<?php


require __DIR__ . '/../models/mainArticle.php';
include __DIR__ . '/../models/food.php';
include __DIR__ . '/../models/healt.php';
include __DIR__ . '/../models/accessorize.php';


$arrayArticoli = [
    new Food(1,'Purina One Cane Adult Mini Manzo e Riso','https://arcaplanet.vtexassets.com/arquivos/ids/279681-1800-1800/main.jpg?v=1771790881&quality=1&width=1800&height=1800','Purina',800,399,'Purina One Adult Cane Mini Manzo e Riso, nutrizione avanzata e specifica dedicata ai cani di piccola taglia.'),
    new accessorize(1,'Trasportino Caravan','https://arcaplanet.vtexassets.com/arquivos/ids/225625-1800-1800/pet-around-you-caravan-cane-trasportino.jpg?v=1771978523&quality=1&width=1800&height=1800','PET AROUND YOU','Il trasportino Caravan di Pet Around You è adatto per il trasporto di cane e gatto in tutti i mezzi di trasporto. Grazie alla certificazione IATA è conforme anche per l\'aereo.',9900)
];

?>