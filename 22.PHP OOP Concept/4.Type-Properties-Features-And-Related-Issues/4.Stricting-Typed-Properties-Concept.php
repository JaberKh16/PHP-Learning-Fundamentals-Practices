<?php
    /*
        Stricting Typed Property Concept
        =================================
        Typed Property supports string numeric value even if that 
        particular property is defined as integer inside the class.
        This is because PHP coerse the type, but can be restricted
        this behaviour through the following way-
        
                declare(strict_types=1);

        Note: When stricting any typed property this declaration of
        'strict_types=1' needs to be declared very above of the script
        otherwise throws an exception.
    */

    // stricting the typed property behaviour
    declare(strict_types=1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stricting The Typed Property</title>
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
        $player1->set_years_info("4");
        // echo $player1->get_years_info();
        var_dump($player1);
    ?>
</body>
</html>