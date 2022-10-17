<?php
    require_once '../controllers/user_controller.php';
    $users=getUsers();
?>
<html>
    <head><title>Dashboard</title></head>
    <body>
        <center>
        <h1 style="color: green">My Dashboard</h1>
        <table border="2">
            <tr>
                <td>Name</td>
                <td>Username</td>
                <td>Email</td>
                <td>Phone</td>
            </tr>
            <?php
                foreach($users as $user){
                    echo "<tr>";
                    echo "<td>".$user["name"]."</td>";
                    echo "<td>".$user["username"]."</td>";
                    echo "<td>".$user["email"]."</td>";
                    echo "<td>".$user["phone"]."</td>";
                    echo "</tr>";
                }
            ?>
        </table>
        </center>
    </body>
</html>
 