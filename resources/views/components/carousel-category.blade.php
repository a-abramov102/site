<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">


    <div class="carousel-indicators">
        @foreach($categories as $key => $category)
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{$key}}" class="{{$key == 0 ? 'active' : '' }}" aria-current="true" aria-label="Slide {{$key}}"></button>
        @endforeach
    </div>
    <div class="carousel-inner">
        @foreach($categories as $key => $category)
            <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
                    <div class="col-md-6 px-0">
                        <h1 class="display-4 fst-italic">{{$category->title}}</h1>
                        <p class="lead my-3">{{$category->info}}</p>
                        <p class="text-center mb-0"><a href="{{route('category.news',['item'=>$category])}}" class="text-white fw-bold ">Continue reading...</a></p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>