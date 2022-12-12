<?php
    /*
        Readonly Property Concept
        =========================
        PHP 8.1 introduced the Readonly Class Properties. It allows
        you to defined properties that can be only initialized once
        within the class.

        To define a "Readonly Property" need to use the keyword 'readonly'
        along with the property name.
        
        Syntax-
            class ClassName{
                public readonly type $propertyName;
            }

        Feature of "Readonly Property" - can only initialize any property once,
        attempting to change or modify property will raise an exception.

        PHP supports the following way when defining the "Readonly Property"-
            1) inside the class as class property
            2) inside the constructor as arguments
            3) insde the class as class method
        
        PHP only supports "Readonly Property" on a Typed Property, if you attempt
        to use the "Readonly Property" with a property without a typem then it will
        hits an exception- 'FatalError: Readonly property must have type'

    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Readonly Property Concept</title>
</head>
<body>
    <?php
        class Book{
            // defining the readonly property as class properties
            public readonly string $book_name;
            public readonly string $book_id;

            public function __construct(string $book_name, string $book_id){
                $this->book_name = $book_name;
                $this->book_id = $book_id;
            }
        }

        $book1 = new Book('The Cloud', '1004');
        var_dump($book1);
    ?>
</body>
</html>