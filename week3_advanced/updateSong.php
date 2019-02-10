<?php
/**
 * Created by PhpStorm.
 * User: 1985j
 * Date: 08/02/2019
 * Time: 14:22
 */

$song_id = $_POST['id'];
$chart = $_POST['chart'];
$price = $_POST['price'];

$conn = new PDO('mysql:host=localhost;dbname=hit_tastic', 'root', '');
$sql = "UPDATE wadsongs SET chart=?, price=? WHERE ID=?";
$stmt =$conn->prepare($sql);
$stmt->execute([$chart, $price, $song_id]);
header("Location: http://localhost/edward/week3_advanced/");
die();
