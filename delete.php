<?php
require 'dbcon.php';

function validation3(): bool
{
return isset($_POST['id']);
}
if(validation3()) {
    $id = (int)$_POST['id'];
    $db->delete($id);
}
?>
