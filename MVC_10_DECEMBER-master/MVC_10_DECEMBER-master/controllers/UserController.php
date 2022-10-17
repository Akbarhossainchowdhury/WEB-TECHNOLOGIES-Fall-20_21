<?php
    require_once '../models/db_connect.php';
?>
<?php
    if(isset($_POST["login"])){
        $username = htmlspecialchars($_POST["username"]);
        $password = md5(htmlspecialchars($_POST["password"]));
        if(getUser($username,$password)){
            header("Location: ../views/dashboard.php");
        }
        else{
            echo "Invalid Credentials!";
        }
    }
    
    function getUser($username,$password){
        $query="SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result=doQuery($query);
        if(count($result)>0){
            return true;
        }
        return false;
    }
?>