<?php include "db.php" ?>
<?php include "function.php" ?>
<?php
// CRUD
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];


    $query = "INSERT INTO users(username, password) ";
    $query .= "VALUES ('$username', '$password')";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query Failed' . mysqli_error('Plz check your code or Database connection'));
    }



    // if ($username && $password) {
    //     echo $username;
    //     echo $password;
    // } elseif ($username) {
    //     echo "Please input password";
    // } elseif ($password) {
    //     echo "Please input Username";
    // } else {
    //     echo "Nothing Inside <br> please insert username and password";
    // }
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="col-sm-6">
            <form action="login_create.php" method="POST">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password </label>
                    <input type="password" name="password" class="form-control">
                    <div class="form-gorup">

                    </div>
                    <div>
                        <input type="submit" name="submit" value="Create" class="btn btn-primary">
                    </div>
            </form>
        </div>

    </div>


</body>

</html>