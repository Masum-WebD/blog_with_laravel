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
                        New Action
                    </button>
                </div>
            </div>
        </div>
        <script src="{{asset('js/dashboard.js')}}"></script>


</body>

</html>
