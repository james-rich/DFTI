<?php
/**
 * Created by PhpStorm.
 * User: 1985j
 * Date: 08/02/2019
 * Time: 14:46
 */


$artist = isset($_POST['artist']) ? $_POST['artist'] : null;

if($artist != null) {

    $conn = new PDO('mysql:host=localhost;dbname=hit_tastic', 'root', '');
    $sql = "SELECT * FROM wadsongs WHERE artist=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$artist]);
    $artists = $stmt->fetchAll(PDO::FETCH_ASSOC);
//    var_dump($artists);
    if ($artists) {

        echo '<table>';
        foreach ($artists as $artist) {
            $newTitle = str_replace(" ", "+", $artist['title']);
            $link = "https://www.youtube.com/results?search_query=" . $artist['artist'] . "+" . $newTitle;
            echo '<tr>';
            echo '<td>';
            echo $artist['title'];
            echo '<td>';
            echo '<td>';
            echo $artist['artist'];
            echo '<td>';
            echo '<td>';
            echo $artist['year'];
            echo '<td>';
            echo '<td>';
            echo $artist['genre'];
            echo '<td>';
            echo '<td>';
            echo '<form action="download.php" method="post">';
            echo '<input type="hidden" value='.$link.' name="link">';
            echo '<input type="hidden" value='.$artist['downloads'].' name="downloads">';
            echo '<input type="hidden" value='.$artist['ID'].' name="id">';
            echo '<input type="submit" value="submit" name="download">';
            echo '<td>';
            echo '</tr>';
            echo '</form>';
        }
        echo '</table>';
    }
}