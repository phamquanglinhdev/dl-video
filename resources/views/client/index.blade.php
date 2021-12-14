@extends("layout.client")
@section("banner")
    <div class="tm-welcome-container text-center text-white">
        <div class="tm-welcome-container-inner">
            <p class="tm-welcome-text mb-1 text-white">Video Catalog is brought to you by TemplateMo.</p>
            <p class="tm-welcome-text mb-5 text-white">This is a full-width video banner.</p>
            <a href="#content" class="btn tm-btn-animate tm-btn-cta tm-icon-down">
                <span>Discover</span>
            </a>
        </div>
    </div>

    <div id="tm-video-container">
        <video autoplay muted loop id="tm-video">
            <!-- <source src="video/sunset-timelapse-video.mp4" type="video/mp4"> -->
            <source src="video/wheat-field.mp4" type="video/mp4">
        </video>
    </div>

    <i id="tm-video-control-button" class="fas fa-pause"></i>
@endsection
@section("main")
    <main>
        <div class="row">
            <div class="col-12">
                <h2 class="tm-page-title mb-4">Our Video Catalog</h2>
                <div class="tm-categories-container mb-5">
                    <h3 class="tm-text-primary tm-categories-text">Categories:</h3>
                    <ul class="nav tm-category-list">
                        @if($categories !== null)
                            @foreach($categories as $category)
                                @if($category->id==$current)
                                    <li class="nav-item tm-category-item"><a href="#" class="nav-link tm-category-link active">{{$category->name}}</a></li>
                                @else
                                    <li class="nav-item tm-category-item"><a href="{{route("index",$category->id)}}" class="nav-link tm-category-link">{{$category->name}}</a></li>
                                @endif
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>

        <div class="row tm-catalog-item-list">
            @if(isset($videos))
                @foreach($videos as $video)
                    <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                        <div class="position-relative tm-thumbnail-container">
                            <img src="{{"https://dl-devs.com/".$video->thumbnail}}" alt="Image" class="img-fluid tm-catalog-item-img">
                            <a href="{{route("video",$video->id)}}" class="position-absolute tm-img-overlay">
                                <i class="fas fa-play tm-overlay-icon"></i>
                            </a>
                        </div>
                        <div class="p-4 tm-bg-gray tm-catalog-item-description">
                            <h3 class="tm-text-primary mb-3 tm-catalog-item-title">{{$video->name}}</h3>
                            <p class="tm-catalog-item-text">Video thumbnail has a link to another HTML page.
                                Categories <span class="tm-text-secondary">do not need</span> any JS.
                                They are just separated HTML pages. Paging is at the bottom to extend the list as long as you
                                want.
                                This can be a large catalog.</p>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>

        <!-- Catalog Paging Buttons -->
        <div>
            <ul class="nav tm-paging-links">
                <li class="nav-item active"><a href="#" class="nav-link tm-paging-link">1</a></li>
                <li class="nav-item"><a href="#" class="nav-link tm-paging-link">2</a></li>
                <li class="nav-item"><a href="#" class="nav-link tm-paging-link">3</a></li>
                <li class="nav-item"><a href="#" class="nav-link tm-paging-link">4</a></li>
                <li class="nav-item"><a href="#" class="nav-link tm-paging-link">></a></li>
            </ul>
        </div>
    </main>
@endsection
