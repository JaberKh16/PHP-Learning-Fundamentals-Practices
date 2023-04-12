<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Linking Bootstrap CSS File -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col mt-5">
      

                <button type="sumbit" class="btn btn-primary mb-3" id="btnGenerateData">Generate Data</button>
                <table class="table border">
                    <thead>
                        <tr>
                        <th scope="col">#Reg. No</th>
                        <th scope="col">Reg. Name</th>
                        <th scope="col">Reg. Email</th>
                        <th scope="col">Reg. Pass</th>
                        <th scope="col">Created Time</th>
                        </tr>
                    </thead>
                    <tbody id="tableData">
                        <tr>
                            <th scope="row">1</th>
                            <td></td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry the Bird</td>
                            <td>@twitter</td>
                            <td>@twitter</td>
                            <td>@twitter</td>
                        </tr>

                       
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <!-- Linking Bootstrap JS File -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Linking Jquery File -->
    <script src="./scripts/jquery-3.6.4.min.js"></script>
    <!-- Linking Ajax Call File -->
    <script src="./scripts/script-ajax-read.js"></script>
</body>
</html>