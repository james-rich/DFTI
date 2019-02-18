<?php include "functions.php"; ?>
<!DOCTYPE html>
<html lang="en">
<?php
    $d = getdate();
    $m = $d['mon'];
    $mon = "";
    if ($m > 11 || $m < 3){
        $mon = 'styles/winter.css';
    }else{
        $mon = 'styles/spring.css';
    }
    echo write_head("Artist's Name", $mon);
?>
<body>
<div id="sidebar">
    <?php echo write_sidebar(); ?>
</div>

<div id="main">
    <form action="searchresults.php" method="get">
        <label>Artists Name: </label>
        <input type="text" name="artistName">
        <input type="submit" name="submit" value="Submit">

    </form>
</div>

</body>
</html>