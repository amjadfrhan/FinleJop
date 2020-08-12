<?php
?>

<!-- Modal -->
<div class="modal fade" id="update-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">update</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="post" id="update_form">
                <div class="modal-body">

                    <div class="form-group">
                        <label for="updateName">Name</label>
                        <input type="text" name="updateName" class="form-control" id="updateName"  placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="updateDescription">Description</label>
                        <input type="text" name="updateDescription" class="form-control" id="updateDescription"  placeholder="Enter Description">
                    </div>
                    <div class="form-group">
                        <label for="updatePrice">Price</label>
                        <input type="number" name="updatePrice" class="form-control" id="updatetPrice"  placeholder="Enter Price">
                    </div>
                    <div class="form-group">
                        <label for="updatePicture">Picture</label>
                        <input type="text" name="updatePicture" class="form-control" id="updatePicture"  placeholder="">
                    </div>

                </div>
                <div class="modal-footer">
                    <input type="hidden" name="product_id" id="product_id">
                    <button type="submit" name="update" class="btn btn-primary" id="update" data-dismiss="modal">Update</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>