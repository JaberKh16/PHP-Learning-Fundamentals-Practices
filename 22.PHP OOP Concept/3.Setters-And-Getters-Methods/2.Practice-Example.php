<?php


    class MarvelCharacters{
        private $class_title;

        private $class_description;

        private $character_id;

        private $character_name;

        private $character_type;

        public static function class_description()
        {
        
            $class_information = array();
            $class_information = [self::$class_title, self::$class_description ];
            return $class_information;
        }
    }

    // creating instance 
    $marvech = new MarvelCharacters;
    $marvech->class_description();