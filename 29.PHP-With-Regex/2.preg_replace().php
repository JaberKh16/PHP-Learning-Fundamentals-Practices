<?php
    /*
        preg_replace() Function In PHP
        ===============================
        preg_replace() function is one of the PHP way to find pattern in the string. 
        Returns a string or an array of strings resulting from applying the replacements 
        to the inputted string or strings.

        Remember this function returns a new variable with the replacement values after getting 
        the matched pattern in the inputted string.
        So to see the changes make sure to save the preg_replace() function return value to some
        varibale.


        Syntax-
            preg_replace(pattern, replacement, string, limit, count)
        
        Parameters-
            a) pattern          --> to specify the pattern
            b) inputString      --> from which the pattern should start matching. This 
                                    can be of type string or array.
            c) replacement      --> whatever matches been found that will be replace with this
                                    replacement values. It can be of type string or array.

            d) limit            --> Optional.An int value to define how many changes of replacement we want if
                                    matches found. Default is -1 which means unlimited replacement if 
                                    matches found.

            e) count            --> Optional. After the function has executed, this variable will contain a 
                                    number  indicating how many replacements were performed




    */
?>

<!DOCTYPE html>
<html>
<head>
    <title>Regex with preg_replace()</title>
</head>
<body>
    <?php
        function findingPatternInText($text, $pattern, $replacementWords)
        {
            $matcheCases = preg_replace($pattern, $replacementWords, $text);
            return $matcheCases;
        }

        // set the pattern 
        $text = "Winter Season is the four month period from December to March in India. It is the coldest season of the year. The atmosphere during winter season changes drastically compared to other seasons as we witness snowfall, cold rains, thick fog and sudden drop in temperature. The cold wind blows at a very high speed and the day becomes shorter in winter season. Atmosphere becomes dry and cold during winter as it receives less sunlight because of the thick clouds in the sky.";
        $pattern = "/cold/";
        $replacementWords = "icy";

        $matchedCases = findingPatternInText($text, $pattern, $replacementWords);
        
        // check if the return result of the function is empty or not
        if(empty($matchedCases)){
            echo "None matches."."<br>";
        }
        else{
            var_dump($matchedCases);
        }

    ?>
</body>
</html>