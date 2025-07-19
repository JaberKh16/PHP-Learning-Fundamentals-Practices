
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Validated Form</title>
        <basefont face="Arial">
        <style>
            body{
                margin: 0;
                padding: 0;
            }
            form{
                border: 1px solid #000;
                padding: 10px 10px;
                background-color: #000;
                color: #fff;
            }
            input[type="text"],  input[type="email"], input[type="password"]{
                padding: 6px;
                display: block;
                width: 600px;
            }
            textarea{
                display: block;
            }
            input[type="submit"]{
                margin: 10px auto;
                color: #fff;
                background-color: blue;
                padding: 8px 15px;
                outline: none;
                border: none;
                font-weight: 700;
            }
            form h2{
                color: blue;
                font-size: 20px;
                font-weight: 700;
                text-decoration: underline;
            }
            select{
                width: 600px;
            }
            select option{
                padding: 6px;
            }
        </style>
<body>
    <?php
        function get_connection_setup() 
        {
            // Define the database parameters
            define('DB_HOST', 'localhost');
            define('DB_NAME', 'php_todo_app');
            define('DB_USER', 'root');
            define('DB_PASSWORD', '');

            // establish the database connection
            $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

            // check if the connection was successful
            if ($conn->connect_error) {
                // display the connection error
                die("Connection failed: " . $conn->connect_error);
            } else {
                // echo "Database " . DB_NAME . " is connected." . '<br>';
                return $conn;
            }
        }
    ?>
    <?php
    if (!$_POST['submit'])
    {
        // form not submitted
        ?>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <h2>Validation Form</h2>
            Username (3-8 char):
            <br />
            <input type="text" name="username">
            <p />
            Password (5-8 char):
            <br />
            <input type="password" name="password">
            <p />
            Email address:
            <br />
            <input type="text" name="email">
            <p />
            Date of Birth:
            <br />
            Month <input type="text" name="month" size="2">
            Day <input type="text" name="day" size="2">
            Year <input type="text" name="year" size="4">
            <p />
            Hobbies (select at least <b>three</b>):
            <br />
            <input type="checkbox" name="hobbies[]" value="Sports">Sports
            <input type="checkbox" name="hobbies[]" value="Reading">Reading
            <input type="checkbox" name="hobbies[]" value="Travel">Travel
            <input type="checkbox" name="hobbies[]" value="Television">Television
            <input type="checkbox" name="hobbies[]" value="Cooking">Cooking
            <p />
            Subscriptions (Select at least <b>two</b>):
            <br />
            <select name="subscriptions[]" multiple>
                <option value="General">General Newsletter</option>
                <option value="Members">Members Newsletter</option>
                <option value="Premium">Premium Newsletter</option>
            </select>
            <p />
            <input type="submit" name="submit" value="Sign Up">
        </form>
    <?php
    }else
    {
        // array to store the error messages
        $ERRORS = array();
        
        // validate "username" field
        $username = !preg_match('^([a-zA-Z]){3,8}$', strip_tags($_POST['username'])) ? $ERRORS[] = 'Enter valid username' : trim($_POST['username']);
        
        // validate "password" field
        $password = !preg_match('^([a-z0-9]){5,8}$', strip_tags($_POST['username'])) ? $ERRORS[] = 'Enter valid password' : trim($_POST['password']);
        
        // validate "email" field
        $email = !preg_match('^([a-zA-Z0-9_-]+)([\.a-zA-Z0-9_-]+)@([a-zA-Z0-9_-]+)(\ [a-zA-Z0-9_-]+)+$', strip_tags($_POST['email'])) ? $ERRORS[] ='Enter valid email address' : trim($_POST['email']);
        
        // validate "date of birth" field
        $dob = (!checkdate($_POST['month'], $_POST['day'], $_POST['year']) ? $ERRORS[] = 'Enter valid date of birth' : date("Y-m-d", mktime(0, 0, 0, $_POST['month'], $_POST['day'], $_POST['year'])));
        
        // validate "hobbies" field
        $hobbies = (sizeof($_POST['hobbies']) < 3) ? $ERRORS[] = 'Please select at least three hobbies' : implode(',', $_POST['hobbies']);
        
        // validate "subscriptions" field
        $subscriptions = (sizeof($_POST['subscriptions']) < 2) ? 'Please select at least two subscriptions' : implode(',', $_POST['subscriptions']);
        
        // verify if there were any errors by checking
        // the number of elements in the $ERRORS array
        if(sizeof($ERRORS) > 0)
        {
            // format and display error list
            echo "<ul>";
            foreach ($ERRORS as $e)
            {
                echo "<li>$e</li>";
            }
            echo "</ul>";
            die();
        }

        // no errors?
        // connect to database
        // save record
    }
?>
