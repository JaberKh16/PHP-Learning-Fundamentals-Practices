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
            <div class="col-md-6 offset-3 bg-secondary text-white border p-3 mt-5 border border-radius">
                <form action="#" method="GET">
                    <div class="mb-3">
                        <label for="number1" class="form-label">Number1:</label>
                        <input type="text" class="form-control text-success mb-2 mt-2" id="number1" 
                        name="number1" value="<?php if(isset($_GET["number1"])) echo $_GET["number1"];  ?>">
                    </div>
                    <div class="mb-3">
                        <label for="number2" class="form-label">Number2:</label>
                        <input type="text" class="form-control text-success mb-2 mt-2" id="number2" 
                        name="number2" value="<?php if(isset($_GET["number2"])) echo $_GET["number2"];  ?>">
                    </div>
                  
                    <div class="mb-3">
                            <label for="resultVal" class="form-label">Result:</label>
                            <input type="text" class="form-control mb-2 mt-2 text-primary" id="resultVal" disabled 
                            name="resultVal" value="<?php echo $result4;  ?>">
                        </div>

                    <button type="submit" class="btn btn-dark text-white mt-2 mb-2" id="btnCalculate1" name="btnCalculate1">Add</button>
                    <button type="submit" class="btn btn-dark text-white mt-2 mb-2" id="btnCalculate2" onclick="calculateSub();" name="btnCalculate2">Subtract</button>
                    <button type="submit" class="btn btn-dark text-white mt-2 mb-2" id="btnCalculate3" name="btnCalculate3">Multiply</button>
                    <button type="submit" class="btn btn-dark text-white mt-2 mb-2" id="btnCalculate4" name="btnCalculate4">Div</button>                
                </form> 
            </div>
        </div>
    </div>


    <?php
        
        function calculateSum($number1,$number2){
            return $number1 + $number2;
        }

        function calculateSub($number1,$number2){
            return $number1 - $number2;
        }
        

        function calculateMult($number1,$number2){
            return $number1 * $number2;
        }

        function calculateDiv($number1,$number2){
            return $number1 / $number2;
        }

        if(empty($_GET['btnCalculate']))
        {
            echo 1;
            if(!empty($_GET["number1"]) && !empty($_GET['number2'])){
                // getting two inputs
                $number1 = $_GET["number1"];
                $number2 = $_GET["number2"];
                // var_dump($number1);
                $result1 = 0;
                $result2 = 0;
                $result3 = 0;
                $result4 = 0;

                $result1 = calculateSum($number1, $number2);
                $result2 = calculateSub($number1, $number2);
                $result3 = calculateMult($number1, $number2);
                $result4 = calculateDiv($number1, $number2);
                var_dump($result2);
            }
        }


    ?>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script>
    function calculateSub($number1, $number2){
        return $number1 - $number2;
    }
    $(document).ready(function(){
        const resultId = $("#resultVal");
        // calculateSub();
        const resultValue1 = "<?php echo $result1; ?>";
        const resultValue2 = "<?php echo $result2; ?>";
        const resultValue3 = "<?php echo $result3; ?>";
        const resultValue4 = "<?php echo $result4; ?>";


        if($("#btnCalculate1").text() == "Add"){
            resultId.val(resultValue1);    
        }
        if($("#btnCalculate2").text() == "Subtract"){
            resultId.val(resultValue2);    
        }
        if($("#btnCalculate3").text() == "Multiply"){
            resultId.val(resultValue3);    
        }
        if($("#btnCalculate4").text() == "Div"){
            resultId.val(resultValue4);    
        }
        // // const buttonType = 
        console.log(resultValue1);
        
        
    });
</script>
</html>