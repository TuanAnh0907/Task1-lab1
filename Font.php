<?php
    class Font{
        private $id;
        private $size;
        private $family;
        private $color;

        public function getId()
        {
            return $this->id;        
        }

        public function getSize()
        {
            return $this->size;        
        }

        public function getFamily()
        {
            return $this->family;        
        }

        public function getColor()
        {
            return $this->color;        
        }
        
        public function setId($id){
            $this->id = $id;
        }

        public function setSize($size){
            $this->size = $size;
        }

        public function setFamily($family){
            $this->family = $family;
        }

        public function setColor($color){
            $this->color = $color;
        }
    }
?>