<?php

require_once './classes/category.php';

//Istanze di Category
$categoryDogs = new Category('Cani', '<i class="fa-solid fa-shield-dog"></i>');
$categoryCats = new Category('Gatti', '<i class="fa-solid fa-shield-cat"></i>');

class ItemType {
    const Food = 'Cibo';
    const Toy = 'Gioco';
    const Kennel = 'Cuccia';
    const WellBeing = 'Benessere';
}

class Product{
    public $title;
    public $price;
    public $image;
    public $category;
    public $itemType;

    public function __construct($title, $price, $image, Category $category, $itemType) {
        $this->title = $title;
        $this->price = $price;
        $this->image = $image;
        $this->category = $category;
        $this->itemType = $itemType;
    }

    public function getProductDetails() {
        return "Title: $this->title, Price: $this->price €, Category: {$this->category->name}, Type: $this->itemType";
    }
}

/*
ESEMPIO DI EREDITA'
class Toy extends Product{
    public $material;

    public function __construct($title, $price, $image, Category $category, $itemType, $material)
    {
        parent::__construct($title, $price, $image, $category, $itemType);
        $this->material = $material;
    }
}

$toys = [
    new Toy('Pallina Giocattolo', 5.99, './img/pallina-per-cani.jpg', $categoryDogs, ItemType::Toy, 'Gomma'),
];*/

//istanza di Product
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
    <title>Animal Shop</title>
</head>
<body>
    <div class="container">
        <h1 class="my-4 text-center fw-bold">Shop Online per Animali</h1>
        <div class="row g-4">
            <?php foreach ($products as $product) : ?>
                <div class="col-md-4">
                    <div class="card h-100 product-card">
                        <img src="<?php echo $product->image; ?>" class="card-img-top bg-white" alt="<?php echo $product->title; ?>">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold"><?php echo $product->title; ?></h5>
                            <p class="product-price fw-bold">€<?php echo $product->price; ?></p>
                            <p class="product-category"><span class="fw-bold">Categoria:</span> <?php echo $product->category->icon . ' ' . $product->category->name; ?></p>
                            <p class="product-type"><span class="fw-bold">Tipo:</span> <?php echo $product->itemType; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>