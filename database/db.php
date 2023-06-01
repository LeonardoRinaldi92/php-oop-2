<?php


require __DIR__ . '/../models/mainArticle.php';
include __DIR__ . '/../models/food.php';
include __DIR__ . '/../models/healt.php';
include __DIR__ . '/../models/accessorize.php';


$arrayArticoli = [
    new Food(1,'Purina One Cane Adult Mini Manzo e Riso','https://arcaplanet.vtexassets.com/arquivos/ids/279681-1800-1800/main.jpg?v=1771790881&quality=1&width=1800&height=1800','Purina',800,399,'Purina One Adult Cane Mini Manzo e Riso, nutrizione avanzata e specifica dedicata ai cani di piccola taglia.'),
    new accessorize(1,'Trasportino Caravan','https://arcaplanet.vtexassets.com/arquivos/ids/225625-1800-1800/pet-around-you-caravan-cane-trasportino.jpg?v=1771978523&quality=1&width=1800&height=1800','PET AROUND YOU','Il trasportino Caravan di Pet Around You è adatto per il trasporto di cane e gatto in tutti i mezzi di trasporto. Grazie alla certificazione IATA è conforme anche per l\'aereo.',9900),
    new Food(2,'Monge Sterilised ricco di Pollo','https://arcaplanet.vtexassets.com/arquivos/ids/271838-1800-1800/400.jpg?v=1771978514&quality=1&width=1800&height=1800','MONGE',400,400,'Crocchette per gatti adulti sterilizzati Monge Sterilised ricco di Pollo, alimento completo a basso contenuto di grassi per la perfetta forma fisica del tuo amico quattro zampe.'),
    new accessorize(1,'Spazzola per Cani','https://arcaplanet.vtexassets.com/arquivos/ids/253305-1800-1800/SPAZZOLA-L.jpg?v=1771978586&quality=1&width=1800&height=1800','PERFECT','La Spazzola per cani di Perfect è il pettine ideale per il mantenere il pelo del tuo amico di zampa pulito e lucente. Grazie ai suoi denti aiuta ad eliminare sporco e forfora dal manto del tuo pet, evitando così fastidiosi pruriti.',1399),
    new Healt(2,'Combo Antiparassitario Spot On per Gatti 6 Pipette','https://arcaplanet.vtexassets.com/arquivos/ids/285207-1800-1800/COMBO_gatto-6P_1200x1200px.jpg?v=1771978588&quality=1&width=1800&height=1800','FRONTILE','Frontline Combo 6 Pipette è un efficace antiparassitario per gattini e gatti adulti che garantisce una protezione ottimale contro le infestazioni di pulci, zecche e pidocchi.',3299),
    new Healt(1,'Remover Macchie Oculari','https://arcaplanet.vtexassets.com/arquivos/ids/240846-1800-1800/beaphar-cane-remover-x-macchie-oculari-23pz.jpg?v=1771978393&quality=1&width=1800&height=1800','BEAPHAR','Beaphar Oftal Tear Stain Remover gocce aiuta a rimuovere le macchie (secreti oculari) intorno agli occhi che creano danno estetico al pelo.',1699)
];

?>