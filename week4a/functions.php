<?php
/**
 * Created by PhpStorm.
 * User: 1985j
 * Date: 13/02/2019
 * Time: 15:15
 */


function connect()
{
    return $conn = new PDO('mysql:host=localhost;dbname=hit_tastic', 'root', '');
}

function write_head($PageTitle, $cssStyle){
    return $res = "<head>
    <meta charset=\"UTF-8\">
    <title>$PageTitle</title>
    <link rel=\"stylesheet\" href=$cssStyle>
    </head>";
}

function write_sidebar(){
    $links = ["Home" =>"index.php", "Sign Up!"=>"signup.php"];
    $res = "";
    foreach ($links as $key=>$val){
        $res .= "<a href=" . $val . ">". $key ."</a><br/>";
    }
    // Note how we use the dot (.) as the string concatenation operator
    // to join together constant text and variables
    //echo "Page Location: ".$links["pagelocation"]." <br/>";
    //echo "Page Title ".$links["pagetitle"]."<br/>";
    return $res;
}