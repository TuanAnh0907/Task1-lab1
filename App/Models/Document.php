<?php
    namespace App\Models;

    use App\Models\Page;

    class Document{

        private $pages;

        public function __construct($pages = [])
        {
            $this->pages = $pages;

        } 

        public function showHtml(){
            foreach( $this->pages as $page){
                echo $page->getHtml();
            }
        }

    }
?>