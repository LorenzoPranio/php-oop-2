<?php

class ProductException extends Exception {
    public function errorMessage() {
        return "Errore nel prodotto [{$this->getCode()}]: {$this->getMessage()}";
    }
}
class Product {
    public $title;
    public $price;
    public $image;
    public $category;
    public $itemType;

    public function __construct($title, $price, $image, Category $category, $itemType) {
        if ($price <= 0) {
            throw new ProductException("Il prezzo del prodotto non può essere zero o negativo.");
        }
        
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

?>
