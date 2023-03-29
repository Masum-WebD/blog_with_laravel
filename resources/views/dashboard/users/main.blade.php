<!doctype html>
<html>

<head>
    @include('dashboard.layouts.head')

</head>

<body class='bg-light'>
    @include('dashboard.layouts.navber')
    <div class="container px-5">
        <div class="row">
            <div class="col-12 p-2 text-left text-dark mt-4 ">
                <h1 class='fw-bolder fs-1 '>{{$title}}</h1>
                <div class="p-2 mt-4 mb-4 border-bottom-black border-top-black">
                    <button type="button" class="btn btn-sm btn-dark" onclick="">
                        New User
                    </button>
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-12">
            <div id="dataTableErrorContainer">
                <ul class="text-danger" id="dataTableErrorsUl"></ul>
            </div>
        </div>
        <div class="col-12">
            <table id="dataTable" class="table table-striped table-borded responsive text-dark w-100">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
    <script src="{{ asset('js/dashboard.js') }}"></script>
    <script src="https://cdn.datatables.net/v/bs5/dt-1.13.4/r-2.4.1/datatables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.12.1/r-2.3.0/datatables.min.js"></script>
   <script>;
    let tableUrl = "/api/dashboard/users/index";
    let $UsersModal = new bootstrap.Modal(
        $("#UsersModal"),
        {
            keyboard: false,
            focus: true,
            backdrop: true
        }
    );
    function editItem(itemId) {
        clearErrors();
        $.ajax({
            url: "/api/dashboard/users/" + itemId,
            type: "GET",
            success: function(response) {
                $("#itemId").val(response["id"]);
                $("#userName").val(response["name"]);
                $("#userEmail").val(response["email"]);
                $UsersModal.show();
            },
            error: function(response) {
                alert("Error: Could not get item.");
            }
        });
    }
    function deleteItem(itemId) {
        clearErrors();
        $.ajax({
            url: "/api/dashboard/users/" + itemId,
            type: "DELETE",
            success: function(response) {
                $("#dataTable").DataTable().ajax.reload();
            },
            error: function(response) {
                alert("Error: Could not delete item.");
            }
        });
    }
    function createDataTable(tableId, url, columns) {
        return $("#" + tableId).DataTable({
            ajax: {
                url: url,
                type: "GET",
                complete: function(jqXHR) {
                    if (jqXHR.status === 200) {
                        $("#dataTableErrorsUl").empty();
                        $("#dataTableErrorContainer").hide();
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    $("#dataTableErrorsUl").empty();
                    $("#dataTableErrorsUl").append(
                        "<li>" +
                        "An error has occured. Please try again at a later time. If the problem persists, contact us for support." +
                        "</li>"
                    );
                    $("#dataTableErrorContainer").show();
                }
            },
            pageLength: 10,
            processing: true,
            serverSide: true,
            responseive: true,
            deferRender: true,
            columns: columns
        });
    }
    $(document).ready(function () {
        let datatable = createDataTable(
            "dataTable",
            tableUrl,
            [
                {
                    data: "name",
                    orderable: true,
                    searchable: true
                },
                {
                    data: "email",
                    orderable: true,
                    searchable: true
                },
                {
                    data: "actions",
                    orderable: false,
                    searchable: false,
                    className: "text-end"
                },
            ]
        );
    });
  </script>
</body>

</html>
