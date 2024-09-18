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
    new Product('Crocchette per Cani', 00 , '', $categoryDogs, ItemType::Food),
];

var_dump($products);

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
    
</body>
</html>