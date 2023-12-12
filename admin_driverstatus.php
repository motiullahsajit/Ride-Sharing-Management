<?php
    require_once('statusDB.php');
    $stats=getstatus();
?>
<html>
    <head>
        <title>View Driver Status</title>
        
    </head>
    <body>
        <h1>Driver Status</h1>
        <table border='1' width=50%>
            <tr>
                <th>sid</th>
                <th>availability</th>
                <th>reason</th>
            </tr>
            <?php for($i=0;$i<count($stats);$i++)
                {?>
                <tr>
                    
                    <td><?=$stats[$i]['sid']?></td>
                    <td><?=$stats[$i]['availability']?></td>
                    <td><?=$stats[$i]['reason']?></td>
                    
        <?php   }?>
                </tr>
        </table>
        <br><a href="admin_Dashboard.php">go back</a>
    </body>
</html>
