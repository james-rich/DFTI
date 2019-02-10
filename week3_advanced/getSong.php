<?php
/**
 * Created by PhpStorm.
 * User: 1985j
 * Date: 08/02/2019
 * Time: 14:04
 */


$song_id = $_POST['id'];

$conn = new PDO('mysql:host=localhost;dbname=hit_tastic', 'root', '');
$sql = "SELECT * FROM wadsongs WHERE id=?";
$stmt =$conn->prepare($sql);
$stmt->execute([$song_id]);
$result = $stmt->fetch();
echo "Chart: " . $result['chart'] . "<br />";
echo "Price: £" . $result['price'] . "<br />";
echo "ID: " . $song_id;
if($stmt->rowCount()) {
    ?>
    <form action="updateSong.php" method="post">
        <label>Chart</label>
        <input type="text" name="chart" value="<?php $result['chart']; ?>"><br />

        <label>Price</label>
        <input type="text" name="price" value="<?php $result['price']; ?>"><br />

        <input type="hidden" name="id" value="<?php echo $song_id; ?>"><br />

        <input type="submit" value="submit" name="submit">
    </form>
    <?php
   echo "song form!";
}else{
    echo "FAILED!";
};
