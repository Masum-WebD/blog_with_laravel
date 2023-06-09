<div class="col-lg-8 col-12">
                @foreach ($blogs as $blog)
                <a href="{{ $blog['url'] }}" class="text-dark" style="text-decoration: none;">
                    <div class="row mt-4 mb-4 blog-card border rounded">
                        <div class="col-lg-4 col-12 p-0 m-0">
                            <img class="rounded w-100 h-100" src="{{ $blog['image_url_portrait'] }}">
                        </div>
                        <div class="col-lg-8 col-12 p-lg-5">
                            <div class="row h-100 pt-4 align-item-center">
                                <div class="col-12 mx-auto">
                                    <small class="text-muted fs-8">{{ $blog['date'] }} </small><br>
                                    @foreach( $blog['tags'] as $tag)
                                    <span class='text-primary fs-6 fw-bolder pe-1'> {{ $tag["tag"]}}</span>
                                    @if($loop->iteration < count ( $blog['tags'])) <span class='text-primary fs-6 fw-bolder pe-1'> &#x2022
                </span>
                @endif
                @endforeach
                <h1 class='fw-lighter fs-2'> {{ $blog['title'] }}</h1>
                <p class=' text-muted'>{{ $blog['description'] }}</p>
                <p>
                    <img class='rounded-circle' src="{{ $blog['author_img_url'] }}" alt="author_img" height='30' width='35'>
                    <span class='ps-1'>{{ $blog['author_name'] }}</span>
                </p>
            </div>
        </div>
    </div>
    </div>
</a>
    @endforeach
    </div>
