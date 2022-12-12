/*
    ----------------------------------------------------------------
                Named Argument In Functions
    ----------------------------------------------------------------
    <?php 
        /* 
            In PHP version 8.0, Named Arguments has been introduced which allows you to pass 
            arguments based on the parameters names instead of caring about their position.

            Note: Must put the named arguments before the positional or default argument while 
            passing as an argument to function call. Otherwise throws an error saying the following-
                
                Error:  "Cannot use positional argument after named argument"
        */
    ?>
*/

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Named Arguments In Function</title>
</head>
<body>
    <!-- Example-01  -->
    <?php
        
        function findPostionOfWord($word, $sentence)
        {
            return strpos($word, $sentence);;
        }

        $wordPosition = findPostionOfWord(
            // passing named arguments
            sentence:'Something is fissy',
            word : 'fissy'
        );
        echo $wordPosition.'<br>';
    ?>    

    <!-- Example-02  -->
    <?php
        function creatingAnAnchorTag($text, $href='#', $title='', $target='_self')
        {
            $href = $href ? sprintf('href="%s"', $href): '';
            $title = $title ? sprintf('title="%s"', $title): '';
            $target = $target ? sprintf('target="%s"', $target): '';
            return "<a $href $title $target>$text</a>";
        }   
        
        // passing named arguments
        $anchorTag = creatingAnAnchorTag(
            text: "PHP is amazing",
            title:"PHP Learning Materials",
            href:"https:/php.tutorialnet.net",
            target:"_blank"
        );

        echo $anchorTag.'<br>';
    ?>
</body>
</html>
