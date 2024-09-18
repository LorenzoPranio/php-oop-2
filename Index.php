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
var_dump($categoryDogs);
var_dump($categoryCats);

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