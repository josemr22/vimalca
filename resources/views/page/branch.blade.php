<x-page>
    <div class="main-content">
        <section class="page-header proj-det bg-img parallaxie valign" style="background-image: url('{{$branch->urlPath}}')" data-overlay-dark="4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-9">
                        <div class="cont">
                            <h6>
                                <div class="path" style="color: white;
    text-shadow: 3px 4px 8px black;font-size: 18px;"> 
                                    <a href="{{route('index')}}">Inicio</a><span>/</span><a href="#" class="active">Nuestras Empresas</a>
                                </div>
                            </h6>
                            <h2 style="text-shadow: 3px 4px 8px black;">{{$name}}</h2>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- ==================== Start Intro ==================== -->

        <section class="intro-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <img src="/page/img/{{ $type }}.jpg" alt="">
                    </div>
                    <div class="col-lg-8  col-md-8">
                    <div class="htit" style="text-align: justify;">
                            <h4><span>01 </span> {{$branch->label_introduction}}</h4>
                        </div>
                        <div class="text js-scroll__content" style="text-align: justify;">
                            <p class="extra-text">{!!$branch->introduction!!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End Intro ==================== -->

        <!-- ==================== Start Video-wrapper ==================== -->

        <section>
            <div class="container-fluid">
                <div class="video-wrapper section-padding bg-img parallaxie valign" style="background-image: url('{{$branch->urlPath}}')" data-overlay-dark="4">
                    <div class="full-width text-center">
                        <a class="vid" href="{{$branch->video}}" target="_blanck">
                            <div class="vid-butn">
                                <span class="icon">
                                    <i class="fas fa-play"></i>
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End Video-wrapper ==================== -->

        <!-- ==================== Start Intro ==================== -->

        <section class="intro-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="htit" style="text-align: justify;">
                            <h4><span>02 </span> {{$branch->label_description}}</h4>
                        </div>
                    </div>
                    <div class="col-lg-12 offset-lg-1 col-md-8 mb-30">
                        <div class="text js-scroll__content" style="text-align: justify;">
                            <p class="extra-text">
                                {!!$branch->description!!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <x-clients :clients="$clients" :style="'padding-top:0px'"/>
        <section class="projdtal" id="gallery">
            <div class="justified-gallery">
                @foreach ($images as $item)
                    <a href="#gallery">
                        <img alt="" src="{{$item->urlPath}}" />
                    </a>
                @endforeach
            </div>
        </section>
    </x-page>