<!doctype html>
<html>

<head>
    @include('layouts/head')

</head>

<body class='bg-light'>
    @include('layouts/navber')
    <div class="container px-5">
        <div class="row">
            <div class="col-12 text-center my-2 " style=" border-bottom:1px solid black">
                <h1 class='fw-bolder fs-1 '>Dashboard</h1>
                <a onclick="event.preventDefault()" id="logoutButton"> Log Out</a>
            </div>
        </div>
        <script src="{{asset('js/app.js')}}"></script>
        <script>
            $("#logoutButton").click(function(e) {
                $.get({
                    url: "/api/logout",
                    success: function() {
                        window.location.href = "/"
                    },
                    error: function() {}
                })
            })
        </script>

</body>

</html>
