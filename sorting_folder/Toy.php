<?php

    class  Toy extends Product {
        public $characteristics;
        public $size;

        public function __construct(Category $category, $characteristics, $image, $name, $price, $size)
        {
            $this->size = $size;
            $this->characteristics = $characteristics;
            parent::__construct($category, $image, $name, $price);
        }
    }

?>