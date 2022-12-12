/*
    ----------------------------------------------------------
            Use Of Different String Functions
    ----------------------------------------------------------
*/
<?php

    /*
     1) Learn to use the following String Functions
        - Length of string                          ===> strlen($string)
        - Position of string                        ===> strpos($wordToReplace,$string)  
        - Number of Words                           ===> str_word_count($string) 
        - Replace Strings                           ===> str_replace($wordToReplace, "new word", $stringWord)
        - Reverse Strings                           ===> str_rev($stringWord)
        - Remove White Spaces                       ===> trim($string) 
        - Shuffle Strings                           ===> str_shuffle($string)       
        - Upper and Lowercase                       ===> strtoupper($string) and strtolower($string)
        - Word Wrap the String and display it.      ===> wordwrap($string, integer);

     */


    $content = "You can do string operations easily with String Functions";
    $findWord = "operations";
    $position = -1;

    echo "<br><br>";

    echo "\"$content\"" ."<br>";
    // Length of string
    echo "Length of '\"$content\"' is: ". strlen($content)."<br>";
    //Number of Words
    echo "Number of Words in the String: " . str_word_count($content) . "<br>";
    //Replace Strings
    echo "Find and Replace operations with manipulation: " . str_replace($findWord, "manipulations", $content) . "<br>";
    //Reverse Strings
    echo strrev($content) . "<br>";
    //Remove White Spaces - ltrim and rtrim
    $content = "    " . $content . "    ";
    echo $content . "<br>";
    echo trim($content) . "<br>";
    //Shuffle Strings
    echo str_shuffle($content) . "<br>";
    //Find Position case insenstive.
    echo stripos($content, "OPERATIONS") . "<br>";
    //UPPER and lower case
    echo strtoupper($content) . "<br>";
    echo strtolower($content) . "<br>";
    //Word Wrap the String and display it.
    $content = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
    echo wordwrap($content, 25) . "<br>";
    echo $content . "<br>";

?>