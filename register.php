<?php
include_once('oop/models/Auth.php');

if(isset($_POST['register'])){
    $data = [
        "name" => $_POST["name"],
        "username" => $_POST["username"],
        "password" => $_POST["password"],
        "password_confirm" => $_POST["password_confirm"],
    ];

    $register = Auth::register($data);
    
    if($register["status"] === "success") {
        header("Location: login.php");
    }
    else{
        header("Location: register.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="card container mt-2">
        <div class="card-header bg-primary text-center m-3">
            <span class="h3 text-white">Register</span>
        </div>
        <div class="card-body">
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name">
                </div>
                <div class="mb-3">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username">
                </div>
                <div class="mb-3">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">
                </div>
                <div class="mb-3">
                    <label for="password_confirm">Confirm Passsword</label>
                    <input type="password" name="password_confirm" id="password_confirm">
                </div>
                <div class="d-grip gap-2">
                    <button name="register" class="btn btn-primary container" type="submit">LOGIN</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>