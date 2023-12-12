<?php
    require_once('supportDB.php');
    $supports=getsupport();
?>
<html>
    <head>
        <title>View Driver Status</title>
        
    </head>
    <body>
        <h1>Driver Status</h1>
        <table border='1' width=50%>
            <tr>
                <th>did</th>
                <th>issuetype</th>
                <th>description</th>
            </tr>
            <?php for($i=0;$i<count($supports);$i++)
                {?>
                <tr>
                    
                    <td><?=$supports[$i]['did']?></td>
                    <td><?=$supports[$i]['issuetype']?></td>
                    <td><?=$supports[$i]['description']?></td>
                    
        <?php   }?>
                </tr>
        </table>
        <br><a href="admin_Dashboard.php">go back</a>
    </body>
</html>
