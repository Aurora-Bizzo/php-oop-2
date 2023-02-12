<?php

    class  Accessory extends Product {
        public $material;
        public $size;

        public function __constructor(Category $category, $image, $material, $name, $price, $size)
        {
            $this->material = $material;
            $this->size = $size;
            parent::__construct($category, $image, $name, $price);
        }
    }

?>