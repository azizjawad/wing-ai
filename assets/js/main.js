$(document).ready(function () {

    $('#business_table').DataTable({
        ajax: 'api',
        "columns": [
            { data: "id" },
            { data: "business_name" },
            { data: "business_type" },
            { data: "region" },
            { data: "business_start_date" },
            { data: "assistant_type" },
            { data: "plan" },
            { data: "created_at" },
            { data: "updated_at" },
            { data: "action" },
        ],
    });

    $(document).on('click','.edit-business', function (){
        let id = $(this).data('id');

        $.ajax({
            url: "api/get-business.php?id="+ id,
            type: "get",
            success: function (response){
                let res = JSON.parse(response);
                if (res.status === true) {
                    let data = res.data;
                    $('#business_name').val(data.business_name)
                    $('#business_type').val(data.business_type)
                    $('#business_start_date').val(dateToInput(new Date(data.business_start_date)))
                    $('#assistant_type').val(data.assistant_type)
                    $('#plan').val(data.plan)
                    $('#business_id').val(data.id)
                    $('#myModal').modal('show');

                }
            }
        })
    })

    const dateToInput = date =>
        `${date.getFullYear()
        }-${('0' + (date.getMonth() + 1)).slice(-2)
        }-${('0' + date.getDate()).slice(-2)
        }`;

    const inputToDate = str => new Date(str.split('-'));


    $('#save-business-form').validate({
        rules: {
            business_name :{
                required: true,
                maxlength: 80
            },
            business_type :{
                required: true,
                maxlength: 80
            },
            assistant_type :{
                required: true,
                maxlength: 80
            },
            plan :{
                required: true,
                digits: true
            },
        },
        submitHandler: function (){
            let data = $('#save-business-form').serialize();
            $.ajax({
                url: "api/save-business.php",
                type:"post",
                data: data,
                success: function (response){
                    let res = JSON.parse(response);
                    if (res.status === true){
                        $('#myModal').modal('hide');
                        swal("Success!!", res.message, "success");

                        setTimeout(() => {
                            location.reload();
                        },1500);
                    }
                }
            })
        }

    })
});