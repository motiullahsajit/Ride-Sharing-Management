<?php
    require_once('supportDB.php');
    $supports=getsupport();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Driver Support</title>
    <link rel="stylesheet" href="css/admin_driversupport.css">
</head>

<body>
    <header>
        <div class="container">
            <h1>Driver Support</h1>
        </div>
    </header>

    <div class="content">
        <table border='1' width=80%>
            <tr>
                <th>DID</th>
                <th>Issue Type</th>
                <th>Description</th>
            </tr>
            <?php for ($i = 0; $i < count($supports); $i++) { ?>
                <tr>
                    <td><?= $supports[$i]['did'] ?></td>
                    <td><?= $supports[$i]['issuetype'] ?></td>
                    <td><?= $supports[$i]['description'] ?></td>
                </tr>
            <?php } ?>
        </table>
        <br><a href="admin_Dashboard.php">Go Back</a>
    </div>
</body>

</html>

