<div class="col-12 pb-4 mt-4 g-0 border-bottom-black ">
                <p class='text-muted fs-5'>What's Trending</p>
                @foreach($trending as $trend)
                <a href="{{ $trend['url'] }}" class="text-dark" style="text-decoration: none;">
                    <div class='card p-0 mt-4  ' style="height:150px ">
                        <img class='h-100 w-100 card-img' style="opacity:0.5" src="{{ $trend['image_url_landscape'] }}" alt="">
                        <div class='card-img-overlay'>
                            <h5 class='card-title'>{{ $trend['title'] }}</h5>
                            <div class="card-text">
                                {{ $trend['date'] }}
                            </div>

                        </div>
                    </div>
</a>
                @endforeach
            </div>
