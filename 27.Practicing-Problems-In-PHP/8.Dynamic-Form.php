
<!-- 
 /* Program name: displayForm
    * Description: Script displays a form that asks for the
    *
    */ 
-->


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Customer Address Form</title>
	</head>
    <style>
        table tbody{
            padding: 6px;
        }
        .mail-div, .input-div{
            border: 1px solid #ccc;
            padding: 8px;
            margin-top: 10px;
        }
        .mail-div, h2{
            text-align: center;
            padding: 6px;
        }
    </style>
    <body>
        <?php
            $form_details = [
                'label' =>  $labels = array(
                    "firstName" => "First Name",
                    "midName" => "Middle Name",
                    "lastName" => "Last Name",
                    "email" => "Email",
                    "street" => "Street Address",
                    "city" => "City",
                    "state" => "State",
                    "zip" => "Zipcode"
                ),
                'action' => 'processform.php',
                'method' => 'POST',
                'button_type' => 'submit',
                'button_value' => 'Submit Address'
            ];

            $mail_details = [
                
                'action' => 'mailprocess.php',
                'method' => 'POST',
                'button_type' => 'submit',
                'button_value' => 'Send Mail'
            ];

            $months = [];
            $month_name = [];
            $dates = [];

            function generate_months_and_month_name($months,$month_name)
            {
                for($i = 1; $i <= 12; $i++){
                    $months[$i] = $i;
                    if($i == 1){
                        $month_name[$i] = 'January';
                    }if($i == 2){
                        $month_name[$i] = 'February';
                    }if($i == 3){
                        $month_name[$i] = 'March';
                    }if($i == 4){
                        $month_name[$i] = 'April';
                    }if($i == 5){
                        $month_name[$i] = 'May';
                    }if($i == 6){
                        $month_name[$i] = 'June';
                    }if($i == 7){
                        $month_name[$i] = 'July';
                    }if($i == 8){
                        $month_name[$i] = 'August';
                    }if($i == 9){
                        $month_name[$i] = 'September';
                    }if($i == 10){
                        $month_name[$i] = 'October';
                    }if($i == 11){
                        $month_name[$i] = 'November';
                    }if($i == 12){
                        $month_name[$i] = 'December';
                    }
                    // var_dump($months);
                    // var_dump($month_name);
                    return [
                        'months' => $months,
                        'month_name' => $month_name
                    ];
                }
            }

            function generate_dates($dates, $dates_30=30, $dates_31=31, $dates_28=28)
            {
                if($dates_30 == 30){
                    for($i = 1; $i <= $dates_30; $i++){
                        $dates[$i] = $i;
                    }
                }if($dates_31 == 31){
                    for($i = 1; $i <= $dates_31; $i++){
                        $dates[$i] = $i;
                    }
                }if($dates_28 == 28){
                    for($i = 1; $i <= $dates_28; $i++){
                        $dates[$i] = $i;
                    }
                }
                
                
            }
            

            $date_setup = [
                'months' => $months = generate_months_and_month_name($months,$month_name)['month'],
                'month_name' => $month_name = generate_months_and_month_name($months,$month_name)['month_name'],
            ];

            var_dump($date_setup);

        ?>
        <p align='center'>
            <b>Please enter your address below.</b><hr>
        </p>
        <form action="<?php echo $form_details['action'] ?>" method="<?php echo $form_details['method'] ?>">
            <div class="input-div">
                <table width='95%' border='0' cellspacing='0' cellpadding='2' >
                    <?php
                        foreach($form_details['label'] as $field => $label)
                        {               
                            echo "<tr>
                                <td align='right'> <b>{$labels[$field]}:</b></td>
                                <td><input type='text' name='$field' size='65' maxlength='65' ></td>
                            </tr>";
                        }
                    ?>
                </table>
                <div align='center'>
                    <p><input type="<?php echo $form_details['button_type'] ?>" value="<?php echo $form_details['button_value'] ?>"></p>
                </div>
            </div>
        </form>
        
        <form action="<?php echo $form_details['action'] ?>" method="<?php echo $form_details['method'] ?>">
            <div width='95%' class="mail-div">
                <h2>Mail Setup Table</h2>
                <?php
                    foreach($form_details['label'] as $field => $label)
                    {             
                        if($labels[$field] === 'Email'){
                            echo "<div>
                                <label align='right'><b>{$labels[$field]}:</b></label>
                                <input type='text' name='$field' size='65' maxlength='65'>
                            </div>";
                        }  
                        
                    }
                ?>
                <div>
                    <p><input type="<?php echo $mail_details['button_type'] ?>" value="<?php echo $mail_details['button_value'] ?>"></p>
                </div>
            </div>
         
        </form>
    </body>
</html>
