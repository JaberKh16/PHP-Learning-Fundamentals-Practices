/*
    ----------------------------------------------------------
                Use Of Heredoc In String
    ----------------------------------------------------------
*/

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Use Of Heredoc In String</title>
</head>
<body>
    <?php
        // defining a string
        $name = 'Cristiano Ronaldo';
        $countryName = "Portugal";
        $age = 38;

        echo "<br><br>";

        /* 
            // Write a block of strings with heredoc and name it as DOC_LABEL
            // Heredoc strings are like double quoted string without escapping sequence 

            // Syntax: <<<IDENTIFIER  
                            Many things can be written here including single or double quoytes string
                            variables and even HTML codes.
                        INDENTIFIER;

            // The identifier must contain only alphanumeric characters and underscores and start with 
               an underscore or a non-digit character.
            // PHP heredoc strings behave like double-quoted strings, without the double-quotes. 
            // It means that they don’t need to escape quotes and expand variables.
        */
        $document =  <<< DOC_LABEL
            You can write anything inside this
            "Double Quotes" . anything 
            'Single Quites' ... . . . . 
            $name who is a footballer plays for $countryName and his age is $age 
            ($age * 10) after 10 years
            New Lines and Strings.
            (true) ? "Some Effect" : "No Effect";
            PHP_EOL
            <strong>Is this bold?</strong>
            Apart from Variable interpolation nothing will work.
    
        DOC_LABEL;
        echo $document;
    ?>  
</body>
</html>



