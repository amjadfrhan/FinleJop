<?php
include 'dbcon.php';
function validation(): bool
{
    return (isset($_POST['Name']) && $_POST['Name']!="" && isset($_POST['Description']) && $_POST['Description']!="" && isset($_POST['Price']) && $_POST['Price']!="" && $_POST['Price']>=0 && isset($_POST['Picture']) && $_POST['Picture']!="");
}
if(validation()) {
    $name = $_POST['Name'];
    $Description = $_POST['Description'];
    $Price = (float)$_POST['Price'];
    $Picture = $_POST['Picture'];

    $db->insert($name, $Description, $Price, $Picture);
}
?>






