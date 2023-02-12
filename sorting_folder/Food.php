<?php

    class  Food extends Product {
        public $ingredients;
        public $weight;

        public function __constructor(Category $category, $image, $ingredients, $name, $price, $weight)
        {
            $this->ingredients = $ingredients;
            $this->weight = $weight;
            parent::__construct($category, $image, $name, $price);
        }
    }

?>