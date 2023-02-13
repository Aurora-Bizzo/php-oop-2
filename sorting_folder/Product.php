<?php

    class Product {
        public $category;
        public $image; 
        public $name;
        public $price;

        public function __construct(Category $category, $image, $name, $price)
        {
            $this->category = $category;
            $this->image = $image;
            $this->name = $name;
            $this->price = $price;
        }
    }

?>