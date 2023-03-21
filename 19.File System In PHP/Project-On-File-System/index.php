<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project On Files</title>
    <!-- Linking The Bootstrap CSS File -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8 m-4">
                <form action="./handle_request_form.php" method="POST" class="border p-3">
                    <div class="mb-3">
                        <label for="emailAddress" class="form-label">Email Address</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter Email">
                    </div>
                    <div class="mb-3">
                        <label for="contactNumber" class="form-label">Contact Number</label>
                        <input type="number" class="form-control" name="contact_number" placeholder="Enter Contact Number">
                    </div>
                    <div class="mb-3">
                        <label for="messageText" class="form-label">Enter Message Here</label>
                        <textarea class="form-control" name="message" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
    
    <?php
        if(!empty($_GET['submitted'])) {
            if($_GET['submitted'] == false) {
                echo "<script> alert('All the fields required.');</script>";
            }
            else{
                echo "<script> alert('Form submitted successfully.');</script>";
            }
        }
    ?>
</body>
</html>