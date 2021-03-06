@extends("layout.client")
@section("banner")
    <div class="tm-welcome-container tm-fixed-header tm-fixed-header-1">
        <div class="text-center">
            @if(backpack_auth()->check())
                <p class="pt-5 px-3 tm-welcome-text tm-welcome-text-2 mb-1 text-white mx-auto">Đang xem với tài khoản : {{backpack_user()->name}}</p>
            @else
                <p class="pt-5 px-3 tm-welcome-text tm-welcome-text-2 mb-1 text-white mx-auto">Đang xem với tư cách khách</p>
            @endif
        </div>
    </div>

    <!-- Header image -->
    <div id="tm-fixed-header-bg"></div>
@endsection
@section("main")
    <main>
        <div class="row mb-5 pb-4">
            <div class="col-12" id="playerContainer">
                <img class="w-100" src="{{"https://dl-devs.com/".$video->thumbnail}}">
            </div>
        </div>
        <div class="row mb-5 pb-5">
            <div class="col-xl-8 col-lg-7">
                <!-- Video description -->
                <div class="tm-video-description-box">
                    <h2 class="mb-5 tm-video-title">{{$video->name}}</h2>
                    <div class="p-lg-4 p-2">
                        {!! $video->removeSpace() !!}
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <!-- Share box -->
                <div class="tm-bg-gray tm-share-box">
                    <h6 class="tm-share-box-title mb-4">Share this video</h6>
                    <div class="mb-5 d-flex">
                        <a href="" class="tm-bg-white tm-share-button"><i class="fab fa-facebook"></i></a>
                        {{--                        <a href="" class="tm-bg-white tm-share-button"><i class="fab fa-twitter"></i></a>--}}
                        {{--                        <a href="" class="tm-bg-white tm-share-button"><i class="fab fa-pinterest"></i></a>--}}
                        {{--                        <a href="" class="tm-bg-white tm-share-button"><i class="far fa-envelope"></i></a>--}}
                    </div>
                    {{--                    <p class="mb-4">Author: <a href="https://templatemo.com" class="tm-text-link">TemplateMo</a></p>--}}
                    <a href="#" class="tm-bg-white px-5 mb-4 d-inline-block tm-text-primary tm-likes-box tm-liked">
                        {{--                        <i class="fas fa-heart mr-3 tm-liked-icon"></i>--}}
                        {{--                        <i class="far fa-heart mr-3 tm-not-liked-icon"></i>--}}
                        {{--                        <span id="tm-likes-count">486 likes</span>--}}
                    </a>
                    <div>
                        <a href="{{$video->src}}" download>
                            <button class="btn btn-primary p-0 tm-btn-animate tm-btn-download tm-icon-download"><span>Download Video</span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        {{--        <div class="row pt-4 pb-5">--}}
        {{--            <div class="col-12">--}}
        {{--                <h2 class="mb-5 tm-text-primary">Related Videos for You</h2>--}}
        {{--                <div class="row tm-catalog-item-list">--}}
        {{--                    <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">--}}
        {{--                        <div class="position-relative tm-thumbnail-container">--}}
        {{--                            <img src="img/tn-01.jpg" alt="Image" class="img-fluid tm-catalog-item-img">--}}
        {{--                            <a href="video-page.html" class="position-absolute tm-img-overlay">--}}
        {{--                                <i class="fas fa-play tm-overlay-icon"></i>--}}
        {{--                            </a>--}}
        {{--                        </div>--}}
        {{--                        <div class="p-3 tm-catalog-item-description">--}}
        {{--                            <h3 class="tm-text-gray text-center tm-catalog-item-title">Nam tincidunt consectetur</h3>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                    <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">--}}
        {{--                        <div class="position-relative tm-thumbnail-container">--}}
        {{--                            <img src="img/tn-02.jpg" alt="Image" class="img-fluid tm-catalog-item-img">--}}
        {{--                            <a href="video-page.html" class="position-absolute tm-img-overlay">--}}
        {{--                                <i class="fas fa-play tm-overlay-icon"></i>--}}
        {{--                            </a>--}}
        {{--                        </div>--}}
        {{--                        <div class="p-3 tm-catalog-item-description">--}}
        {{--                            <h3 class="tm-text-gray text-center tm-catalog-item-title">Praesent posuere rhoncus</h3>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                    <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">--}}
        {{--                        <div class="position-relative tm-thumbnail-container">--}}
        {{--                            <img src="img/tn-03.jpg" alt="Image" class="img-fluid tm-catalog-item-img">--}}
        {{--                            <a href="video-page.html" class="position-absolute tm-img-overlay">--}}
        {{--                                <i class="fas fa-play tm-overlay-icon"></i>--}}
        {{--                            </a>--}}
        {{--                        </div>--}}
        {{--                        <div class="p-3 tm-catalog-item-description">--}}
        {{--                            <h3 class="tm-text-gray text-center tm-catalog-item-title">Turpis massa aliquam</h3>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                    <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">--}}
        {{--                        <div class="position-relative tm-thumbnail-container">--}}
        {{--                            <img src="img/tn-04.jpg" alt="Image" class="img-fluid tm-catalog-item-img">--}}
        {{--                            <a href="video-page.html" class="position-absolute tm-img-overlay">--}}
        {{--                                <i class="fas fa-play tm-overlay-icon"></i>--}}
        {{--                            </a>--}}
        {{--                        </div>--}}
        {{--                        <div class="p-3 tm-catalog-item-description">--}}
        {{--                            <h3 class="tm-text-gray text-center tm-catalog-item-title">Nam tincidunt consectetur</h3>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                    <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">--}}
        {{--                        <div class="position-relative tm-thumbnail-container">--}}
        {{--                            <img src="img/tn-05.jpg" alt="Image" class="img-fluid tm-catalog-item-img">--}}
        {{--                            <a href="video-page.html" class="position-absolute tm-img-overlay">--}}
        {{--                                <i class="fas fa-play tm-overlay-icon"></i>--}}
        {{--                            </a>--}}
        {{--                        </div>--}}
        {{--                        <div class="p-3 tm-catalog-item-description">--}}
        {{--                            <h3 class="tm-text-gray text-center tm-catalog-item-title">Praesent posuere rhoncus</h3>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                    <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">--}}
        {{--                        <div class="position-relative tm-thumbnail-container">--}}
        {{--                            <img src="img/tn-06.jpg" alt="Image" class="img-fluid tm-catalog-item-img">--}}
        {{--                            <a href="video-page.html" class="position-absolute tm-img-overlay">--}}
        {{--                                <i class="fas fa-play tm-overlay-icon"></i>--}}
        {{--                            </a>--}}
        {{--                        </div>--}}
        {{--                        <div class="p-3 tm-catalog-item-description">--}}
        {{--                            <h3 class="tm-text-gray text-center tm-catalog-item-title">Turpis massa aliquam</h3>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
    </main>
    <style>
        .tm-video-description-box p {
            line-height: 1 !important;
        }

        td {
            border: 1px solid grey;
        }
        #playerContainer{
            width: 100%!important;
            height: auto!important;
        }
        video{
            height: auto!important;
            position: absolute;
        }
    </style>
@endsection
@section("script")
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/xgplayer@2.31.2/browser/index.js" type="text/javascript"></script>
    <script>
        let player = new Player({
            id: 'playerContainer',
            url: '{{$video->src}}',
            playsinline: true,
        });

        // You can use the player object now to access the player and it's methods (play, pause, ...)
        $("svg").remove();
        // $(".ck-editor__editable").removeClass("ck-editor__editable");
        // $(".ck-editor__nested-editable").removeClass("ck-editor__nested-editable");
        // $(".ck-editor__nested-editable").removeClass("ck-editor__nested-editable");
        $("td").removeAttr("contenteditable");

    </script>
@endsection
