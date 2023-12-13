<?php
    require_once('rateDB.php');
    $rates=getRating();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rating and Feedback</title>
    <link rel="stylesheet" href="css/ratingfeedback.css">
    <script src="js/ratingfeedbackvalidation.js"></script>
</head>

<body>

    <header>
        <div class="container">
            <h1>Rate Your Experience</h1>
        </div>
    </header>
    <div class="content">
        <div class="button-container">
            <a href="customer_dashboard.php" class="back-button">Go Back</a>
        </div>
        <br>
        <form action="ratingfeedback.php" method="post" novalidate onsubmit="return validation()">
            <label for="rating">Rating (1-5):</label>
            <input type="number" id="rating" name="rating" min="1" max="5" required>
            <p id="ratingError"></p>
            <br>

            <label for="feedback">Feedback:</label>
            <textarea id="feedback" name="feedback" rows="4" required></textarea>
            <p id="feedbackError"></p>
            <br>

            <input type="submit" value="Submit">
            
        </form>

        <div class="ratings-table">
            <h2>Previous Ratings and Feedback</h2>
            <table border="1" width="100%">
                <tr>
                    <th>Username</th>
                    <th>Rating</th>
                    <th>Feedback</th>
                </tr>
                <?php for ($i = 0; $i < count($rates); $i++) { ?>
                    <tr>
                        <td><?= $rates[$i]['username'] ?></td>
                        <td><?= $rates[$i]['rating'] ?></td>
                        <td><?= $rates[$i]['feedback'] ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>

</body>

</html>


<?php
    session_start();
    $username=$_SESSION['username'];
    
    if(isset($_POST['rating'],$_POST['feedback']))
    {
        $rate=$_POST['rating'];
        $feed=$_POST['feedback'];
        
        if($rate=="" || $feed=="")
        {
            echo "Null value inserted";
        }
        else
        {
            rating($username,$rate,$feed);
            header('location: ratingfeedback.php');
        }
    }

?>