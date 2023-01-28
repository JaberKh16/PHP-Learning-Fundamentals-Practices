<!--
    Use Of $_SERVER['PHP_SELF']
    ===========================
    The $_SERVER['PHP_SELF'] returns the file name of the currently executing script.

    For example- 
        If the executing script is https://www.phptutorial.net/app/form/index.php, the $_SERVER['PHP_SELF'] returns 
        /app/form/index.php.

    However, the $_SERVER['PHP_SELF'] cannot be trusted since and it’s vulnerable to XSS attacks. 
    Therefore, you should always escape it using the htmlspecialchars() function which basically
    escape the user input before showing it on a webpage.


-->

<?php
    if(isset($_GET['user_name'], $_GET['user_email']))
    {
        // escaping the variables using htmlspecialchars() method
        $userName = htmlspecialchars($_GET['user_name']);
        $userName = htmlspecialchars($_GET['user_email']);

        print "Thank you $userName for your subscription.<br>";
        print "Please check your email and confirm it in your inbox of the email $userEmail.";
    }
    else
    {
        print "<div class='alert alert-danger'>You need to provide your name and email to continue!.</div>";
        // print "You need to provide your name and email to continue!.<br>";
    }
?>
<form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="GET">
    <div class="mb-3">
        <label for="userName" class="form-label">Name</label>
        <input type="text" class="form-control" name="user_name" id="userName" placeholder="Enter name"
        required="required" value="<?php if(!isset($_GET['user_email'])){ echo $_GET['user_email'];} ?>">
    </div>
    <div class="mb-3">
        <label for="userEmail" class="form-label">Email</label>
        <input type="text" class="form-control" name="user_email" id="userEmail" placeholder="Enter email"
        required="required" value="<?php if(!isset($_GET['user_email'])){ echo $_GET['user_email'];} ?>">
    </div>
    <button type="submit" class="btn btn-block btn-primary btn--subscribe">Subscribe</button>
</form>
