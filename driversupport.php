<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver Support</title>
    <link rel="stylesheet" href="css/driversupport.css">
    <script src="js/driversupport.js"></script>
</head>

<body>
    <header>
        <div class="container">
            <h1>Driver Support</h1>
        </div>
    </header>

    <div class="content">
        <form action="#" method="post" enctype="application/x-www-form-urlencoded" autocomplete="off" novalidate onsubmit="return validation()">
            <label for="issueType">Issue Type:</label>
            <input type="text" name="issue" id="issue" value="">
            <p id="issueError"></p>

            <br>

            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="4" required></textarea>
            <p id="descriptionError"></p>

            <br>

            <input type="submit" value="Submit Request">
            <br><a href="driver_dashboard.php">Go Back</a>
        </form>
    </div>
</body>

</html>


<?php
    require_once('supportDB.php');
    if(isset($_POST['issue'], $_POST['description']))
    {
        $issuetype=$_POST['issue'];
        $desc=$_POST['description'];
        
        if($issuetype=="" || $desc=="")
        {
            echo "Null value inserted";
        }
        else
        {
            issue($issuetype,$desc);
            echo "Issue Sent";
        }
    }
?>
