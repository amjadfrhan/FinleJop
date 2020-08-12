<?php
$Data=$db->getAllData();
?>
<table class="table table-striped table-dark" id="table-to-refresh">
    <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Picture</th>
        <th>Action</th>
    </tr>
    <?php
    foreach ($Data as $index)
    {
        $name=$Data[$index['id']]['name'];
        $description=$Data[$index['id']]['description'];
        $price=$Data[$index['id']]['price'];
        $picture=$Data[$index['id']]['picture'];
        echo "<tr class='aaa'><td class='aaa'>".$name."</td>
          <td>".$description."</td>
          <td>".$price."$</td>
          <td><img src=".$picture."></td>
          <td>
          <button class='btn btn-danger' type='button' name='delete' id=".$index['id'].">Delete</button>
          <button id=".$index['id']." type='button' name='edit' value='Edit' class='btn btn-info btn-xs edit_data' data-toggle='modal' data-target='#update-modal'>Update</button>
          </td>
          </tr>";

    }
    ?>
</table>

