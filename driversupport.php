<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver Support</title>
</head>
<body>

    <h1>Driver Support</h1>

    <form action="#" method="post" enctype="application/x-www-form-urlencoded"        autocomplete="off" novalidate>
        <label for="issueType">Issue Type:</label>
        <input type="text" name="issue" value="">
            
        

        <br>

        <label for="description">Description:</label>
        <textarea id="description" name="description" rows="4" required></textarea>

        <br>

        <input type="submit" value="Submit Request">
        <br><a href="driver_dashboard.php">go back</a>
    </form>

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
