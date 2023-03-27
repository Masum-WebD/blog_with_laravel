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
                <h1 class='fw-bolder fs-1 '>Welcome to my Blog</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique, adipisci.</p>
            </div>
        </div>

        <div class="row">
            @include('home.blog')
            <div class="col-lg-1 col-0"></div>
            <div class="col-lg-3 col-12">
                <div class="row">
                    @include('home.trending')
                    @include('home.recent')
                    @include('home.tags')
                </div>

            </div>
            <div class="row">
                <div class="col-12 g-0 mt-2">
                    <nav>
                        <ul class="pagination justify-content-center">
                            <li class="page-item @if($page_number === 1) disabled @endif">
                                <a class="page-link" href="/?page={{ $page_number - 1 }}">
                                    Previous
                                </a>
                            </li>
                            @for ($i = 0; $i < ceil($total_blogs / $page_length); $i++) <li class="page-item @if($page_number === $i + 1) active @endif">
                                <a class="page-link" href="/?page={{ $i + 1 }}">{{ $i + 1 }}</a>
                                </li>
                                @endfor
                                <li class="page-item @if($page_number >= ceil($total_blogs / $page_length)) disabled @endif">
                                    <a class="page-link" href="/?page={{ $page_number + 1 }}">
                                        Next
                                    </a>
                                </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>







        <script src="{{asset('js/app.js')}}"></script>

</body>

</html>
