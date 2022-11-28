<?php
$connected = true;

if($connected == false){
    header("Location: /login.php");
    die();
}

$title = "accueil";
include("./html/layout/page_start.html");
include("./html/layout/header.html");
include("./html/layout/footer.html");
include("./html/layout/page_end.html");

?>