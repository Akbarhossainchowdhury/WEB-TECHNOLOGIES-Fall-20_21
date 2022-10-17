<?php
    require_once '../models/db_connect.php';
?>
<?php
    function getDepts(){
        $query="SELECT * FROM departments";
        return doQuery($query);
    }
?>
