<?php

$categoryDogs = new Category('Cani', '<i class="fa-solid fa-shield-dog"></i>');
$categoryCats = new Category('Gatti', '<i class="fa-solid fa-shield-cat"></i>');

$products = [
    new Product('Crocchette per Cani', 20.99, './img/crocchette-per-cani.jpeg', $categoryDogs, ItemType::Food),
    new Product('Pallina Giocattolo', 5.99, './img/pallina-per-cani.jpg', $categoryDogs, ItemType::Toy),
    new Product('Cuccia per Gatti', 45.99, './img/cuccia-per-gatti.jpg', $categoryCats, ItemType::Kennel),
    new Product('Guinzaglio per Cani', 12.99, './img/guinzaglio-per-cani.jpg', $categoryDogs, ItemType::Toy),
    new Product('Tiragraffi per Gatti', 30.99, './img/Tiragraffi-per-gatti.jpg', $categoryCats, ItemType::Kennel),
    new Product('Snack per Gatti', 4.99, './img/snack-per-gatti.jpg', $categoryCats, ItemType::Food),
    new Product('Ciotola per Cani', 8.99, './img/ciotole-per-cani.jpg', $categoryDogs, ItemType::Kennel),
    new Product('Osso di Gomma', 6.99, './img/osso-di-gomma.jpg', $categoryDogs, ItemType::Toy),
    new Product('Gioco per Gatti con Piume', 7.99, './img/gioco-gatti.jpg', $categoryCats, ItemType::Toy),
    new Product('Cuccia per Cani', 50.99, './img/cuccia-per-cani.jpg', $categoryDogs, ItemType::Kennel),
    new Product('Spazzola per Gatti', 9.99, './img/spazzola-per-gatti.png', $categoryCats, ItemType::WellBeing),
    new Product('Shampoo per Cani', 14.99, './img/shampoo-per-cani.jpg', $categoryDogs, ItemType::WellBeing),
];

?>