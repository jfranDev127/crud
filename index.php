<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"> <!-- bootstrap -->
    <link rel="stylesheet" href="css/estilos.css"> <!-- custom css -->
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/jquery-3.6.0.js">
</head>
<body>
  <br><br><br><br>
<div class="container card shadow">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <h3 class="center">Registro de Usuarios</h3>
            </div>
        </div>
        <br><br>
            <form action="login.php" method="POST">
                <br>
        <div class="row mb-3">
            <br>
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword3">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
    </div>
    <div class="link">
        <br>
        <a href="#">Registrese ahora</a>
    </div>
    <br><br>
</div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>