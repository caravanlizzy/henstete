<?php

$link = mysqli_connect("localhost", "henstete_admin", "X86jhA2jn4SBhJQB", "henstete_spielt");

// Check connection
if($link === false){
    die("Da gibts Probleme. Pliiis trai egen leta.");
}
$username = $_POST['name'];


?>