<?php
    /*
        preg_match() Function In PHP
        ============================
        preg_match() function is one of the PHP way to find pattern in the string.

        Syntax-
            preg_match(patter, string, variable)
        
        Parameters-
            a) pattern  --> to specify the pattern
            b) string   --> from which the pattern should start matching.
            c) variable --> to store the matches value if there are any. 
                            If get matches returns 1, otherwise 0.
    */
?>

<!DOCTYPE html>
<html>
<head>
    <title>Regex with preg_match()</title>
</head>
<body>
    <?php
        function findingPatternInText($text, $pattern)
        {
            preg_match($pattern, $text, $matches);
            return $matches;
        }

        // set the pattern 
        $text = "Winter Season is the four month period from December to March in India. It is the coldest season of the year. The atmosphere during winter season changes drastically compared to other seasons as we witness snowfall, cold rains, thick fog and sudden drop in temperature. The cold wind blows at a very high speed and the day becomes shorter in winter season. Atmosphere becomes dry and cold during winter as it receives less sunlight because of the thick clouds in the sky.";
        $pattern = "/coldest season of/";
        $matchedCases = findingPatternInText($text, $pattern);
        
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