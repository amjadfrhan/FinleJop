//modal
$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
});
//filter
$(document).ready(function(){
    $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#table-to-refresh tr  ").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});
//delete
$(document).ready(function () {
    $('.btn-danger').click(function () {
        str=this.id;
        var id=parseInt(str);
        $.post("delete.php", {id:id}, function (res, status) {
            console.log(id);
        });
    });
});

//insert
$(document).ready(function () {
    $('#submit').click(function () {
        $.ajax({
           url: "insert.php",
           method: "POST",
            data:$("#insert_form").serialize(),
            success:function (data) {
                $("#insert_form").trigger('reset');
            }
    });
    });
});



// update
$(document).ready(function () {
    $(".edit_data").click(function(){
        var product_id= $(this).attr("id");
        $.ajax({
            url:"update.php",
            type:"post",
            dataType:"json",
            data:{product_id:product_id},
            success:function (product) {
                $('#updateName').val(product.name);
                $('#updateDescription').val(product.description);
                $('#updatetPrice').val(product.price);
                $('#updatePicture').val(product.picture);
                $('#product_id').val(product.id);
            }
        });
    });
});

$(document).ready(function () {
    $('#update').click(function () {
        $.ajax({
            url: "update.php",
            method: "POST",
            data:$("#update_form").serialize(),
            success:function (data) {
            }
        });
    });
});

//refresh
$("#ref").click(function () {
    $("#content").load(" #content", function () {
        $('.btn-danger').click(function () {
            str=this.id;
            var id=parseInt(str);
            $.post("delete.php", {id:id}, function (res, status) {
                console.log(id);
            });
        });

        $('#submit').click(function () {});

        $(".edit_data").click(function(){
            var product_id= $(this).attr("id");
            $.ajax({
                url:"update.php",
                type:"post",
                dataType:"json",
                data:{product_id:product_id},
                success:function (product) {
                    $('#updateName').val(product.name);
                    $('#updateDescription').val(product.description);
                    $('#updatetPrice').val(product.price);
                    $('#updatePicture').val(product.picture);
                    $('#product_id').val(product.id);
                }
            });
        });

        $('#update').click(function () {
            $.ajax({
                url: "update.php",
                method: "POST",
                data:$("#update_form").serialize(),
                success:function (data) {
                }
            });
        });

    });
});