<?php

    namespace App\Models;

    class Font{
        
        private $id;
        private $size;
        private $family;
        private $color;

        public function __construct($id, $size, $family, $color)
        {
            $this->id = $id;
            $this->size = $size;
            $this->family = $family;
            $this->color = $color;
        }
    }
?>