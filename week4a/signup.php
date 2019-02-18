<?php include "functions.php"; ?>
<!DOCTYPE html>
<html>
<?php
    $d = getdate();
    $m = $d['mon'];
    $mon = "";
    if ($m > 11 || $m < 3){
        $mon = 'styles/winter.css';
    }else{
        $mon = 'styles/spring.css';
    }
    echo write_head("Hit Tastic", $mon);
?>

<body>
<div id="wrapper">
    <div id="sidebar">
        <?php echo write_sidebar(); ?>
    </div>
    <div id="main">
        <h1>HitTastic Sign Up!</h1>
        <form method="post" action="process.php">
            <p>Username:
                <input name="username"/>
            </p>
            <p>
                <label>Password: </label>
                <input name="password" type="password"/>
            </p>

            <p>
                <label>Name: </label>
                <input name="name"/>
            </p>

            <p>
                <label>Day of birth: </label>
                <input name="dob"/>
            </p>

            <p>
                <label>Month of birth: </label>
                <input name="mob"/>
            </p>

            <p>
                <label>Year of birth: </label>
                <input name="yob">
            </p>

            <p>

                <input type="submit" value="Sign Up!"/>
            </p>
        </form>

        <p><a href="index.php">Home Page</a></p>
    </div>
</div>
</body>
</html>