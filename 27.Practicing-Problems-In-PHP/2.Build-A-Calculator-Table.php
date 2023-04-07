<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Building A Calculator</title>
    <!-- Linking Bootstrap CDN  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 border p-3 mt-3">
                <form action="#" method="GET">
                    <div class="mb-3">
                        <label for="numberInput" class="form-label">Number:</label>
                        <input type="number" class="form-control mb-2 mt-2" id="numberInput" 
                        name="numberInput" value="<?php if(isset($_GET["numberInput"])) echo $_GET["numberInput"];  ?>">
                    </div>
                    <button type="submit" class="btn btn-primary mt-2 mb-2" name="btnCalculate">Calculate</button>
                </form> 
            </div>
        </div>
    </div>


    <?php
        
        function calculationOfTable($number){
            for($i = 1; $i <= 10; $i++){
                $product = $number * $i;
                echo "&nbsp&nbsp&nbsp $number * $i = $product". "<br>"; 
            }
            // return $product;
        }
        

        if(isset($_GET['btnCalculate']))
        {
            if(isset($_GET["numberInput"])){
                // getting two inputs
                $number = $_GET["numberInput"];
                $productOfTwoNumbers = null;

                calculationOfTable($number);
            }
        }


    ?>
</body>
</html>