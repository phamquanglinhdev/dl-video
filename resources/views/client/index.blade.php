@extends("layout.client")
@section("banner")
    <div class="tm-welcome-container text-center text-white">
        <div class="tm-welcome-container-inner">
            <p class="tm-welcome-text mb-1 text-white">Chào mừng đến với khu vực Video khóa học của Dl Devs</p>
            @if(backpack_auth()->check())
                <p class="tm-welcome-text mb-1 text-white">Bạn đã là thành viên ,xin mời xem những video khóa học của
                    mình</p>
            @else
                <p class="tm-welcome-text mb-1 text-white">Xem một số video bài giảng của chúng tôi nhé !</p>
            @endif
            <a href="#content" class="btn tm-btn-animate tm-btn-cta tm-icon-down">
                <span>Xem ngay</span>
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
                @if(backpack_auth()->check())
                    <h2 class="tm-page-title mb-4">Những khóa mà bạn đã đăng ký</h2>
                @endif
                <div class="tm-categories-container mb-5">
                    @if(backpack_auth()->check())
                        <h3 class="tm-text-primary tm-categories-text">Categories:</h3>
                        <ul class="nav tm-category-list">
                            @if(isset($categories))
                                @foreach($categories as $category)
                                    @if($category->id==$current)
                                        <li class="nav-item tm-category-item"><a href="#"
                                                                                 class="nav-link tm-category-link active">{{$category->name}}</a>
                                        </li>
                                    @else
                                        <li class="nav-item tm-category-item"><a href="{{route("index",$category->id)}}"
                                                                                 class="nav-link tm-category-link">{{$category->name}}</a>
                                        </li>
                                    @endif
                                @endforeach
                            @else
                                <div>Hình như bạn chưa đăng ký khóa nào nhỉ ?? Quay lại đăng ký thôi nào !!</div>
                            @endif
                        </ul>
                    @endif
                </div>
            </div>
        </div>

        <div class="row tm-catalog-item-list">
            @if(isset($videos))
                @foreach($videos as $video)
                    <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                        <div class="position-relative tm-thumbnail-container">
                            <img src="{{"https://dl-devs.com/".$video->thumbnail}}" alt="Image"
                                 class="img-fluid tm-catalog-item-img">
                            <a href="{{route("video",$video->id)}}" class="position-absolute tm-img-overlay">
                                <i class="fas fa-play tm-overlay-icon"></i>
                            </a>
                        </div>
                        <div class="p-4 tm-bg-gray tm-catalog-item-description">
                            <h3 class="tm-text-primary mb-3 tm-catalog-item-title">{{$video->name}}</h3>
                            <p class="tm-catalog-item-text"></p>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>

        <!-- Catalog Paging Buttons -->
{{--        <div>--}}
{{--            <ul class="nav tm-paging-links">--}}
{{--                <li class="nav-item active"><a href="#" class="nav-link tm-paging-link">1</a></li>--}}
{{--                <li class="nav-item"><a href="#" class="nav-link tm-paging-link">2</a></li>--}}
{{--                <li class="nav-item"><a href="#" class="nav-link tm-paging-link">3</a></li>--}}
{{--                <li class="nav-item"><a href="#" class="nav-link tm-paging-link">4</a></li>--}}
{{--                <li class="nav-item"><a href="#" class="nav-link tm-paging-link">></a></li>--}}
{{--            </ul>--}}
{{--        </div>--}}
    </main>
@endsection
