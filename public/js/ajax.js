$(document).ready(function () {
    $("#qty").change(function () {
        var qty = $(this).val();
        var id = $(this).attr("data-id");
        var data = {id: id, qty: qty};
        // console.log(data);
        $.ajax({
            url: '?mod=cart&act=update_ajax',
            method: 'POST',
            data: data,
            datatype: 'json',
            success: function (data) {
                var a = $("#total-price")
                $("#sub-total-"+id).text(data.sub_total);
                $("#total-price").text(data.total);
                console.log(data);
                // alert("đã conn");
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        });
    });
});