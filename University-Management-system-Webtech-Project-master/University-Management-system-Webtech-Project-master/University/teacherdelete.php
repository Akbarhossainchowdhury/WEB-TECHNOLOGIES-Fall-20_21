<?php
    include "model/db_connect.php";
    $id= $_GET['id'];
    deleteId($id);
    function deleteId($id){
        $query = "DELETE FROM `teacher` WHERE id= $id";

        execute($query);
        header ("location:teacher_info.php");
    }
?>