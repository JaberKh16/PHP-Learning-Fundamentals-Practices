<?php
    /*
        Cookies Based Concepts
        ======================
        Cookies some data which is being stored under the client side local machine.

        Cookies Based Methods
        ---------------------
        1) setcookie(cookieName, value, expires, path, domain, secure, httponly)

        Parameters:
        a) cookieName --> to set the cookie name which can be considered as key
        b) value --> to set the cookie value
        c) expires --> to set the cookie expires time
        d) path --> to set the cookie path where the cookie will be accessible. Optional
        e) domain --> to set the cookie domain where the cookie will be available. Optional
        f) secure --> to define cookie will be only accessible on the client side for the https
                      takes only boolean value.  Optional
        g) httponly --> to set the cookie for only the protocol of http. takes only boolean value. Optional


        To Read The Cookie
        ------------------
        $_COOKIE['cookieName'] is used to read the setted cookie value.

    */
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cookie Concepts</title>
</head>
<body>
    <?php
        function setCookieValue($cookieKey, $cookieValue, $expiresTime)
        {
            $settedCookie = setcookie($cookieKey, $cookieValue, $expiresTime);
            return $settedCookie;
        }

        // set the parameters value for the cookie
        $cookieKey = "Name";
        $cookieValue = "Jaber";
        $expiresTime = time() + (24 * 60 * 60) * 30;

        setCookieValue($cookieKey, $cookieValue, $expiresTime);

        function readCookieValue($cookieKey)
        {
            $gettingCookieValue = $_COOKIE[$cookieKey];
            return $gettingCookieValue;
        }

        // checks if the cookie is available
        if(!empty(readCookieValue($cookieKey))){
            echo "Cookie Value: " .readCookieValue($cookieKey);
        }
        else{
            echo "There is no cookie available.";
        }
        
    ?>
</body>
</html>