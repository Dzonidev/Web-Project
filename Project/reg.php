<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projekat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="background-color: #D3D3D3">
    <div class="container d-flex justify-content-center align-items-center"
            style="min-height:100vh">
        <form class="border shadow p-3 rounded"
        action="php/register.php"
        method="post"
        style="width:450px;
        background-color:white;">
        <h1 class="text-center p-3">REGISTER</h1>

        <!-- Alert za polja koja nisu popunjena -->
        <?php if (isset($_GET['error'])){ ?>
        <div class="alert alert-danger" role="alert">
            <?=$_GET['error']?>
        </div>
        <?php }?>


            <div class="mb-3">
                <label for="username"
                 class="form-label">Username</label>
                <input type="text"
                 class="form-control"
                 name="username"
                  id="username">
            </div>
            <div class="mb-3">
                <label for="password"
                 class="form-label">Password</label>
                <input type="password"
                 class="form-control"
                 name="password"
                  id="password">
            </div>

            <div class="mb-3">
                <label for="name"
                 class="form-label">Name</label>
                <input type="text"
                 class="form-control"
                 name="name"
                  id="name">
            </div>

            <button type="submit" class="btn btn-primary">Registurj se</button>
            <p>Vec imate nalog? <br><a href="index.php">Prijavite se</a> </p>
        </form>

    </div>

    <script src="reg.js"></script>
    
</body>
</html>