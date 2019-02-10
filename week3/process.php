<?php
/**
 * Created by PhpStorm.
 * User: 1985j
 * Date: 31/01/2019
 * Time: 13:52
 */

$username   = $_POST['username'];
$pass       = $_POST['newpassword'];

$conn = new PDO('mysql:host=localhost;dbname=hit_tastic', 'root', '');
$sql = "UPDATE ht_users SET password=? WHERE username=?";
$stmt =$conn->prepare($sql);
$stmt->execute([$pass, $username]);
//print_r($conn->errorInfo());
if($stmt->rowCount()) {
    echo "Updated user: " . $username ."'s password!";
}else{
    echo "FAILED!";
};