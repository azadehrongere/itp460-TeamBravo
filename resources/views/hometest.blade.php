<?php

$host = "incubatedb.c4qm8bszl4fg.us-west-2.rds.amazonaws.com:3306";
$username = "incubaters";
$password = "1incubateUSC";
$database = "incubateDB";

$conn = mysqli_connect($host, $username, $password, $database);

if(mysqli_connect_errno()){
    exit("DB Connection Error: " . mysqli_connect_error());
}

// 2. Generate & Submit SQL
$sql = "SELECT *
    FROM job, company";

$results = mysqli_query($conn, $sql);
if(!$results){
    exit("SQL Error: " . mysqli_error($conn));
}

echo $sql;
?>

    <?php while ($row = mysqli_fetch_array($results)): ?>

                    <?=$row['title'];?>

    <?php endwhile; ?>