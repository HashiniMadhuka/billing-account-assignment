<?php
$con = mysqli_connect("localhost", "root", "", "billing_account");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
