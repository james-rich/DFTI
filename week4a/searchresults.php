<?php include "functions.php"; ?>
<!DOCTYPE html>
<html lang="en">
<?php echo write_head(); ?>
<body>



<?php
/**
 * Created by PhpStorm.
 * User: 1985j
 * Date: 29/01/2019
 * Time: 11:14
 */
$artistName = $_GET['artistName'];
$conn = new PDO('mysql:host=localhost;dbname=hit_tastic', 'root', '');
$sql = "SELECT * FROM wadsongs WHERE artist LIKE '" . $artistName . "'";
$query = $conn->query($sql);
$artists = $query->fetchAll(PDO::FETCH_ASSOC);
//    var_dump($artists);
if($artists) {
    echo '<table>';
    foreach ($artists as $artist) {
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
        echo '</tr>';
    }
    echo '</table>';
}
?>
</body>
</html>