<?php

?>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Proudct</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="post" id="insert_form">
            <div class="modal-body">
                    <div class="form-group">
                        <label for="InputName">Name</label>
                        <input type="text" name="Name" class="form-control" id="InputName"  placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="InputDescription">Description</label>
                        <input type="text" name="Description" class="form-control" id="InputDescription"  placeholder="Enter Description">
                    </div>
                    <div class="form-group">
                        <label for="InputPrice">Price</label>
                        <input type="number" name="Price" class="form-control" id="InputPrice"  placeholder="Enter Price">
                    </div>
                    <div class="form-group">
                        <label for="InputPicture">Picture</label>
                        <input type="text" name="Picture" class="form-control" id="InputPicture"  placeholder="Enter Picture">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" name="submit" class="btn btn-primary" id="submit" data-dismiss="modal">Save Data</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </form>
        </div>
    </div>
</div>