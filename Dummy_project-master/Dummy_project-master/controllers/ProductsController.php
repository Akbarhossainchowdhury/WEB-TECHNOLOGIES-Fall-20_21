<?php
    require_once '../models/db_conn.php';
?>

<?php
    $name="";
    $err_name="";
    $category="";
    $err_category="";
    $price="";
    $err_price="";
    $quantity="";
    $err_quantity="";
    $description="";
    $err_description="";
    $image="";
    $err_image="";
    $hasError=false;
    //ADD PRODUCT VALidATIONS
    if(isset($_POST["add_pro_button"])){
        if(empty($_POST["name"])){
			$err_name="name Required";
			$hasError =true;	
        }
        else{
            $name=htmlspecialchars($_POST["name"]);
        }
        if(!isset($_POST["category"])){
            $err_category="Category Required";
            $hasError=true;
        }
        else{
            $category=$_POST["category"];
        }
        if(empty($_POST["quantity"])){
            $err_quantity="quantity Required";
            $hasError=true;
        }
        else{
            $quantity=$_POST["quantity"];
        }
        if(empty($_POST["price"])){
            $err_price="price Required";
            $hasErrors=true;
        }
        else{
            $price=$_POST["price"];
        }
        if(empty($_POST["description"])){
            $err_description="description Required";
            $hasError=true;
        }
        else{
            $description=htmlspecialchars($_POST["description"]);
        }
        if(empty($_FILES["image"]["name"])){
            $err_image="image Required";
            $hasError=true;
        }
        else{
            $fileType=strtolower(pathinfo(basename($_FILES["image"]["name"]),PATHINFO_EXTENSION));
            $image="storage/product_image".uniqid().".$fileType";
        }
        if(!$hasError){
            addProduct();
            echo "Added Successfully!";
        }
    }

    //EDIT PRODUCT VALidATIONS
    if(isset($_POST["edit_pro_button"])){
        if(empty($_POST["name"])){
			$err_name="name Required";
			$hasError =true;	
        }
        else{
            $name=htmlspecialchars($_POST["name"]);
        }
        if(!isset($_POST["category"])){
            $err_category="Category Required";
            $hasError=true;
        }
        else{
            $category=$_POST["category"];
        }
        if(empty($_POST["quantity"])){
            $err_quantity="quantity Required";
            $hasError=true;
        }
        else{
            $quantity=$_POST["quantity"];
        }
        if(empty($_POST["price"])){
            $err_price="price Required";
            $hasErrors=true;
        }
        else{
            $price=$_POST["price"];
        }
        if(empty($_POST["description"])){
            $err_description="description Required";
            $hasError=true;
        }
        else{
            $description=htmlspecialchars($_POST["description"]);
        }
        if(empty($_FILES["image"]["name"])){
            $err_image="image Required";
            $hasError=true;
        }
        else{
            $fileType=strtolower(pathinfo(basename($_FILES["image"]["name"]),PATHINFO_EXTENSION));
            $image="../storage/product_image/".uniqid().".$fileType";
        }
        if(!$hasError){
            updateProduct($_GET["product_id"]);
            echo "Updated Successfully!";
        }
    }

    //PRODUCT DATA ACCESS FUNCTIONS
    function addProduct(){
        global $name,$category,$price,$description,$image,$quantity;
        move_uploaded_file($_FILES["image"]["tmp_name"],$image);
        $query="INSERT INTO products(name,price,quantity,description,image,category_id) VALUES ('$name',$price,$quantity,'$description','$image',$category)";
        doNoQuery($query);
    }
    function updateProduct($product_id){
        global $name,$category,$price,$description,$image,$quantity;
        move_uploaded_file($_FILES["image"]["tmp_name"],$image);
        $query="UPDATE products SET name='$name',price=$price,quantity=$quantity,description='$description',image='$image',category_id=$category WHERE id=".$product_id;
        doNoQuery($query);
    }
    function getNumOfProductByCategoryid($category_id){
        $query="SELECT name FROM products WHERE category_id=".$category_id;
        $result=doQuery($query);
        return (count($result)>0 ? count($result) : 0); 
    }
    function getAllProduct(){
        $query="SELECT * FROM products";
        return doQuery($query);
    }
    function deleteProduct($product_id){
        $query="DELETE FROM products WHERE id=".$product_id;
        doNoQuery($query);
    }
    function getProduct($product_id){
        $query="SELECT * FROM products WHERE id=".$product_id;
        return doQuery($query);
    }
?>