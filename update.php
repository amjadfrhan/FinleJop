<?php
include 'dbcon.php';
$connect=mysqli_connect("localhost","root","","test");
if(isset($_POST["product_id"])){
    $query="SELECT * FROM product WHERE id = '".$_POST["product_id"]. "'";
    $result=mysqli_query($connect,$query);
    $row = mysqli_fetch_array($result);


    if(isset($_POST['updateName']) && $_POST['updateName']!="" && isset($_POST['updateDescription']) && $_POST['updateDescription']!=""
       && isset($_POST['updatePrice']) && $_POST['updatePrice']!="" && isset($_POST['updatePicture']) && $_POST['updatePicture']!=""){
        $id5 = $_POST['product_id'];
        $name = $_POST['updateName'];
        $Description = $_POST['updateDescription'];
        $Price = (float)$_POST['updatePrice'];
        $Picture = $_POST['updatePicture'];


        $db->update($id5, $name, $Description, $Price, $Picture);
    }
    die(json_encode($row));
}
?>
