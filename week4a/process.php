<?php
/**
 * Created by PhpStorm.
 * User: 1985j
 * Date: 29/01/2019
 * Time: 11:26
 */
include "functions.php";

$username = isset($_POST['username']) ? $_POST['username'] : "";
$password = isset($_POST['password']) ? $_POST['password'] : "";
$name = isset($_POST['name']) ? $_POST['name'] : "";
$dob = isset($_POST['dob']) ? $_POST['dob'] : "";
$mob = isset($_POST['mob']) ? $_POST['mob'] : "";
$yob = isset($_POST['yob']) ? $_POST['yob'] : "";

$tmpDate = $yob . "-" . $mob . "-" . $dob;

$date = DateTime::createFromFormat("Y-m-d", $tmpDate);
$now = date("Y");
$res = $now - $date->format("Y");

if($res > 17) {
    $conn = connect();
    $sql = "INSERT INTO ht_users (username, password, name, dayofbirth, monthofbirth, yearofbirth) VALUES (?,?,?,?,?,?)";
    $stmt = $conn->prepare($sql);
      $stmt->execute([$username, $password, $name, $dob, $mob, $yob]);

    echo 'UserName: ' . $username . '</br> Name: ' . $name . '</br> DOB: ' . $dob . '/' . $mob . '/' . $yob;
}else{
    echo "Not old enough!";
}
