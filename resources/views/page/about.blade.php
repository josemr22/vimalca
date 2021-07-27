<x-page>
    <header class="pages-header bg-img valign parallaxie" data-background="/page/img/slid/1.jpg" data-overlay-dark="5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cont text-center">
                        <h1>¿Quiénes Somos?</h1>
                        <div class="path">
                            <a href="{{route('index')}}">Inicio</a><span>/</span><a href="#" class="active">Nosotros</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="main-content">
        <!-- ==================== Start Intro ==================== -->
    
        <section class="intro-section section-padding pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="htit sm-mb30">
                            <h4>¿Quiénes somos?</h4>
                        </div>
                    </div>
                    <div class="col-lg-8 offset-lg-1 col-md-8">
                        <div class="text" style="text-align: justify;">
                            <p class="wow txt" data-splitting>
                                {!!$enterprise->who!!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <!-- ==================== End Intro ==================== -->
    
    
        <!-- ==================== Start Services ==================== -->
    
        <section class="services section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="item md-mb50 wow fadeInUp" data-wow-delay=".3s">
                            <span class="icon pe-7s-anchor"></span>
                            <h6>Transporte <br> & Pesca <br> Vimalca </h6>
                            {{-- <p>Tempore corrupti temporibus fuga earum asperiores fugit laudantium.</p> --}}
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="item md-mb50 wow fadeInUp" data-wow-delay=".5s">
                            <span class="icon pe-7s-helm"></span>
                            <h6>Fábrica <br> de Hielo <br> Vimalca</h6>
                            {{-- <p>Tempore corrupti temporibus fuga earum asperiores fugit laudantium.</p> --}}
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="item wow fadeInUp" data-wow-delay=".7s">
                            <span class="icon pe-7s-map-marker"></span>
                            <h6>Grifo & Minimarket Vimalca Repsol</h6>
                            {{-- <p>Tempore corrupti temporibus fuga earum asperiores fugit laudantium.</p> --}}
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="item wow fadeInUp" data-wow-delay=".7s">
                            <span class="icon pe-7s-drop"></span>
                            <h6>Agua <br> de Mesa <br> Vimalca</h6>
                            {{-- <p>Tempore corrupti temporibus fuga earum asperiores fugit laudantium.</p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <!-- ==================== End Services ==================== -->
    
        <!-- ==================== Start Minimal-Area ==================== -->
    
        <section class="min-area sub-bg" id="misvis">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="img">
                            <img class="thumparallax-down" src="{{$enterprise->urlPath}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 valign">
                        <div class="content" style="text-align: justify;">
                            <h4 class="wow custom-font" data-splitting>Sobre Nosotros</h4>
                            <p style="text-align: justify !important;">
                                {!!$enterprise->about!!}
                            </p>
                            <ul class="feat">
                                <li class="wow fadeInUp" data-wow-delay=".2s">
                                    <h6><span>1</span> Nuestra Misión</h6>
                                    <p style="text-align: justify !important;">{{$enterprise->mision}}</p>
                                </li>
                                <li class="wow fadeInUp" data-wow-delay=".4s">
                                    <h6><span>2</span> Nuestra Visión</h6>
                                    <p style="text-align: justify !important;">{{$enterprise->vision}}</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <!-- ==================== End Minimal-Area ==================== -->
    
        <!-- ==================== Start block-sec ==================== -->
    
        <x-reviews :reviews="$reviews"/>
</x-page>