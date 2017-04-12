<?php require (app_path().'/includes/connect.php');

if(empty($_GET['idjob'])) {
    header('Location: home');
}

$sql=$sql . ' AND idjob =
    $idjob;';

echo $sql;

?>