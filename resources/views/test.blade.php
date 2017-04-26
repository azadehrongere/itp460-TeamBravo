<?php require (app_path().'/includes/studentsearch.php');

?>

    <?php while ($row = mysqli_fetch_array($results)): ?>
        <tr>
            <td>
                <?=$row['id']?>
            </td>
            <td><?=$row['name']?></td>
            <td><?=$row['headline']?></td>
        </tr>
    <?php endwhile; ?>