<?php

// Connect with Database
$connection = mysqli_connect('localhost', 'root', '123456', 'loginapp');
if (!$connection) {
    die("Database not connected");
}
