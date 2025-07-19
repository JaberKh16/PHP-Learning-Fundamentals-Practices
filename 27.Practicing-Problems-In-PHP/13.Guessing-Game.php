<?php
    session_start();
    $num_to_guess = 42;
 
    // Initialize the number of tries if it's not set
    if (!isset($_SESSION['num_tries'])) {
        $_SESSION['num_tries'] = 0;
    }


    if(isset($_POST['btnGuess'])){
        $guess = $_POST['guess'];
       
        $message = "";
        
        if (!isset($_POST['guess'])) {
            $message = "Welcome to the guessing machine!";
        } elseif ($_POST['guess'] > $num_to_guess) {
            $message = "{$_POST['guess']} is too big! Try a smaller number";
            $_SESSION['num_tries'] =  $_SESSION['num_tries']  + 1;
   
        } elseif ($_POST['guess'] < $num_to_guess) {
            $message = "{$_POST['guess']} is too small! Try a larger number";
            $_SESSION['num_tries']  =  $_SESSION['num_tries']  + 1;
   
        } else { // must be equivalent
            $message = "Well done!";
            // header("Location: congrats.html");
            if($message != ""){
                goto congrats; 
                exit;
            }
            congrats:
                $congrats_msg = "<p class='congrats-msg'>Congrats! You have won!</p>";
            
        }
        
    }
    $num_tries = $_SESSION['num_tries'];
     
?>
<html>
    <head>
        <title>Listing 9.8 Saving state with a hidden field</title>
    </head>
    <style>
        form{
            margin: 10px auto;
            border: 1px solid #000;
            padding: 10px 10px;
        }
        input[type="text"]{
            padding: 6px;
            display: block;
            width: 600px;
        }
        input[type="submit"]{
            margin: 10px auto;
            color: #fff;
            background-color: blue;
            padding: 6px 8px;
            outline: none;
            border: none;
            font-weight: 700;
        }
        h1{
            color: blue;
            margin-top: 10px;
        }
        .congrats-msg{
            color: green;
            font-size: 20px;
            font-weight: 700;
        }
    </style>
<body>
    <h1>
        <?php print $message ?>
    </h1>
    <h1><?php if(isset($congrats_msg))  { echo $congrats_msg; } else{ echo '' ;}  ?></h1>
    Guess number: <?php print $num_tries?>
    <form action="<?php print $_SERVER['PHP_SELF'] ?>" method="POST">
        Type your guess here:
        <input type="text" name="guess" value="<?php print $guess?>">
        <input type="hidden" name="num_tries" value="<?php print $num_tries?>">
        <input type="submit" name="btnGuess" value="Submit Guess">
    </form>
</body>
</html>