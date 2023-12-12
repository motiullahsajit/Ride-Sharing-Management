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
    <script src="js/ratingfeedbackvalidation.js"></script>
</head>
<body>

    <h1>Rate Your Experience</h1>

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
        <br><a href="customer_dashboard.php">go back</a>
        <br><br><br><br>


        <table border="1" width=50%>
    
                <tr>
                    <th>username</th>
                    <th>rating</th>
                    <th>feedback</th>
                    

                </tr>
                <?php for($i=0;$i<count($rates);$i++)
                {?>
                <tr>
                    
                    <td><?=$rates[$i]['username']?></td>
                    <td><?=$rates[$i]['rating']?></td>
                    <td><?=$rates[$i]['feedback']?></td>
                    
        <?php   }?>
                </tr>
                
            
            </table>

    </form>

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