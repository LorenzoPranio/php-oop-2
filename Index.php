<?php

class Category{
    public $name;
    public $icon;

    public function __construct($name, $icon) {
        $this->name = $name;
        $this->icon = $icon;
    }
}

//Istanze di Category
$categoryDogs = new Category('Cani', '<i class="fa-solid fa-shield-dog"></i>');
$categoryCats = new Category('Gatti', '<i class="fa-solid fa-shield-cat"></i>');

class ItemType {
    const Food = 'Cibo';
    const Toy = 'Gioco';
    const Kennel = 'Cuccia';
}

class Product{
    public $title;
    public $price;
    public $image;
    public $category;
    public $itemType;

    public function __construct($title, $price, $image, $category, $itemType) {
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

//istanza di Product
    $products = [
        new Product('Crocchette per Cani', 20.99, '', $categoryDogs, ItemType::Food),
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
        <h1 class="my-4 text-center">Shop Online per Animali</h1>
        <div class="row g-4">
            <?php foreach ($products as $product) : ?>
                <div class="col-md-4">
                    <div class="card h-100 product-card">
                        <img src="<?php echo $product->image; ?>" class="card-img-top" alt="<?php echo $product->title; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $product->title; ?></h5>
                            <p class="product-price">€<?php echo $product->price; ?></p>
                            <p class="product-category">Categoria: <?php echo $product->category->icon . ' ' . $product->category->name; ?></p>
                            <p class="product-type">Tipo: <?php echo $product->itemType; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>