<html>
<head>
    <title>AI Wing | Assignment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.4.0/css/select.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.1.2/css/dataTables.dateTime.min.css">
    <link rel="stylesheet" href="https://editor.datatables.net/extensions/Editor/css/editor.dataTables.min.css">

</head>
<body>
<div class="container">
    <h2>Business Data</h2>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <table id="business_table" class="display" style="width:100%">
                <thead>
                <tr>
                    <th>Business Name</th>
                    <th>Business type</th>
                    <th>Office</th>
                    <th>Region</th>
                    <th>Business start date</th>
                    <th>Assistant type</th>
                    <th>Plan</th>
                    <th>Created At</th>
                    <th>Modified At</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>

        </div>
    </div>
</div>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edit Business</h4>
            </div>
            <div class="modal-body">
                <form id="save-business-form">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="business_name">Business Name</label>
                                <input type="text" id="business_name" name="business_name" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="business_type">Business Type</label>
                                <input type="text" id="business_type" name="business_type" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="business_start_date">Business start date</label>
                                <input type="date" id="business_start_date" name="business_start_date" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="assistant_type">Assistant Type</label>
                                <input type="text" id="assistant_type" name="assistant_type" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="plan">Plan</label>
                                <input type="text" id="plan" name="plan" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <input type="hidden" id="business_id" name="id" value="">
                                <button class="btn btn-primary btn-default">Save</button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
</body>
</html>


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="assets/js/main.js"></script>




