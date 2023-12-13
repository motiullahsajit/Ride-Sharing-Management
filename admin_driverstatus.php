<?php
    require_once('statusDB.php');
    $stats=getstatus();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Driver Status</title>
    <link rel="stylesheet" href="css/admin_driverstatus.css">
</head>

<body>
    <header>
        <div class="container">
            <h1>Driver Status</h1>
        </div>
    </header>

    <div class="content">
        <table border='1' width=80%>
            <tr>
                <th>SID</th>
                <th>Availability</th>
                <th>Reason</th>
            </tr>
            <?php for ($i = 0; $i < count($stats); $i++) { ?>
                <tr>
                    <td><?= $stats[$i]['sid'] ?></td>
                    <td><?= $stats[$i]['availability'] ?></td>
                    <td><?= $stats[$i]['reason'] ?></td>
                </tr>
            <?php } ?>
        </table>
        <br><a href="admin_Dashboard.php">Go Back</a>
    </div>
</body>

</html>

