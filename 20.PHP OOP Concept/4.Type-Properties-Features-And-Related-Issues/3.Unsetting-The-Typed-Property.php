<?php
    /*
        Unsetting The Typed Property Concept
        ====================================
        Unsetting of Typed Property can be possible and it status
        will change back to unitialized(means changed back to 'null'
        because for an Untyped Property value is 'null').
        Syntax-
            unset($instance_name->propertyName);
    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unsetting The Typed Property</title>
</head>
<body>
    <?php
        class PlayerInformation{
            public string $player_name;
            public string $player_type;
            public int $player_age;
            public int $years_played;

            public function __construct(string $player_name, string $player_type, int $player_age){
                $this->player_name = $player_name;
                $this->player_type = $player_type;
                $this->player_age = $player_age;
            }
            public function set_years_info(int $years_played){
                $this->years_played = $years_played ;
            }

            public function get_years_info(){ 
                return $this->years_played;
            }

        }

        // creating class instance
        $player1 = new PlayerInformation('Ramero', 'football', 34);
        // var_dump($player1)."<br><br>";
        
        // setting class single property
        $player1->set_years_info(4);
        echo $player1->get_years_info();

        // unsetting the typed property
        unset($player1->age);
        var_dump($player1);
    ?>
</body>
</html>