<?php
    /*
        PHP Class Destructor Concept
        ============================
        To define a destructor for a class, PHP propose a special
        method __destruct().
        Syntax-
            class ClassName{
                public function __destruct(){

                }
            }
        
        Some Characteristic Of Specifying A Destructor
        ----------------------------------------------
        1)  Destructor doesn't accpet any argument.
        2)  Destructor is automatically invoked before an object is deleted
            or the class scripts being terminated(happens when object has no
            reference or script ends).

    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destructor Concept</title>
</head>
<body>
    <?php
        class File{
            // properites
            private $handle;
            private $filename;

            // constructor
            public function __construct($filename, $mode = 'r'){
                $this->filename = $filename;
                $this->handle = fopen($filename, $mode); // to open the file as reading mode
            }

            // destructor
            public function __destruct(){
                if($this->handle){ // if $handle work has been done then destroy the $handle 
                    fclose($this->handle);
                }
            }

            // method to read file content
            public function read_content(){
                return fread($this->handle, filesize($this->filename));
            }
        }

        // creating instance
        $file = new File("file/file1.txt");
        echo $file->read_content();
    ?>
</body>
</html>