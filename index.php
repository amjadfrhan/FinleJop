<?php
require 'dbcon.php';
require 'Header.php';
require 'modal.php';
require 'update.modal.php';
?>
<section class="insert-and-table">
<!--filter-->
    <div class="filter9" id="filter9">Filter Products:</div>
        <input class="form-control" type="text" name="search" placeholder="Search Proudct name" id="myInput">
    <br>
    <!--TABLE-->
<div id="content">
<?php
require 'get_table.php';
?>
</div>
<!--refresh and insert-->
    <button class="btn btn-secondary btn-lg btn-block" type="button" id="ref">Refresh Table</button>
    <button type="button" class="btn btn-primary btn-lg btn-block" id="insertdata" data-toggle="modal" data-target="#myModal">
        Add Data
    </button><br>
</section>
<?php
$DB->close();
include_once 'Footer.php';
?>