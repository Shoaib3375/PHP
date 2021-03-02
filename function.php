<?php include "db.php"; ?>
<?php
function showAllData()
{
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('Query FAILED' . mysqli_error('Check your code again'));
    }

    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value='$id'> $id</option>";
    }
}


function updateTable()
{
    global $connection;

    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "UPDATE users SET "; // Need a blank space . Or show error
    $query .= "username = '$username', ";
    $query .= "password = '$password' ";
    $query .= "WHERE id = $id ";

    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("QUERY FAILED" . mysqli_error($connection));
    }
}
?>
<?php
function createRow()
{

    if (isset($_POST['submit'])) {
        global $connection;
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = "INSERT INTO users(username, password) ";
        $query .= "VALUES ('$username', '$password')";

        $result = mysqli_query($connection, $query);
        if (!$result) {
            die('Query Failed' . mysqli_error('Plz check your code or Database connection'));
        } else {
            echo "Data Added";
        }

        // Connect with Database
        $connection = mysqli_connect('localhost', 'root', '123456', 'loginapp');

        if (!$connection) {
            echo "Database not connected";
        }
    }
}
?>
<?php
function deleteRows()
{
    global $connection;

    // $username = $_POST['username'];
    // $password = $_POST['password']; // Non need this file
    $id = $_POST['id'];

    $query = "DELETE FROM users "; // Need a blank space . Or show error

    $query .= "WHERE id = $id ";

    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("QUERY FAILED" . mysqli_error($connection));
    }
}

?>