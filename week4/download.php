<?php
/**
 * Created by PhpStorm.
 * User: 1985j
 * Date: 08/02/2019
 * Time: 15:10
 */

$artist_id = isset($_POST['id']) ? $_POST['id'] : null;
$downloads = isset($_POST['downloads']) ? $_POST['downloads'] : null;
$link = isset($_POST['link']) ? $_POST['link'] : null;

echo $artist_id . "<br />";
echo $downloads;
if($artist_id != null) {
    $downloads += 1;
    echo $downloads;
    $conn = new PDO('mysql:host=localhost;dbname=hit_tastic', 'root', '');
    $sql = "UPDATE wadsongs SET downloads=? WHERE ID=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$downloads, $artist_id]);
    header('Location: '.$link);
    die();
}