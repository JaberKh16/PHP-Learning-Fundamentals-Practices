<!--
Table Schema:
CREATE TABLE votelanguage (
    id INT NOT NULL AUTO_INCREMENT,
    choice TINYINT NOT NULL,
    ts TIMESTAMP,
    PRIMARY KEY (id)
);
-->

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN">
<!— php/vote/vote.html —>
<html>
    <head>
        <meta http-equiv="Content-Type"
        content="text/html; charset=iso-8859-1" />
        <title>MySQL-poll</title>
    </head>
<body>
    <h2>MySQL-poll</h2>
    <p><b>What is your favorite
    programming language for developing MySQL applications?</b></p>
    <form method="POST" action="results.php">
        <p>
        <input type="radio" name="vote" value="1" />C/C++
        <br /><input type="radio" name="vote" value="2" />Java
        <br /><input type="radio" name="vote" value="3" />Perl
        <br /><input type="radio" name="vote" value="4" />PHP
        <br /><input type="radio" name="vote" value="5" />
        ASP[.NET] / C# / VB[.NET] / VBA
        <br /><input type="radio" name="vote" value="6" />
        another language
        </p>
        <p><input type="submit" name="submitbutton" value="OK" /></p>
    </form>
    <p>Go directly to the <a href="results.php">result</a>.</p>
</body>
</html>