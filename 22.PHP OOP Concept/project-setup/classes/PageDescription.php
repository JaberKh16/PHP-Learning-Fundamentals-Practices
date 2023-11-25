<?php

class PageDescription{
    private $title = "Defult";
    private $description;

    public function __construct($title, $description=null){
        $this->title = $title;
        $this->description = $description;
    }

    public function setTitle($title){
        $this->title = $title;
    }

    public function getTitle(){
        return $this->title;
    }
}
