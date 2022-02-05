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

<div class="col-lg-3 wow fadeInUp" data-wow-delay=".3s">
    <a href="{{route('branch','pesca-y-transporte')}}">
    
        <div class="step-item xtop xcolor" data-tilt data-tilt-scale="1.1">
        <span><img src="/page/img/logo_pesca.png" alt=""></span>
            <h6>Transporte & Pesca Vimalca </h6>
            {{-- <p>Tempore corrupti temporibus fuga earum asperiores fugit laudantium.</p> --}}
        </div>
    
    
    </a>
</div>


<div class="col-lg-3 wow fadeInUp" data-wow-delay=".6s">
    <a href="{{route('branch','fabrica-hielo')}}">
    
    <div class="step-item xtop xcolor" data-tilt data-tilt-scale="1.1"> 
        <span><img src="/page/img/logo_fabrica.png" alt=""></span>
        <h6>Fábrica de Hielo Vimalca</h6>
        {{-- <p>Tempore corrupti temporibus fuga earum asperiores fugit laudantium.</p> --}}
    </div>
    
    
     </a>
</div>


<div class="col-lg-3 wow fadeInUp" data-wow-delay=".9s">
    <a href="{{route('branch','grifo-market')}}">
    
    <div class="step-item xtop xcolor" data-tilt data-tilt-scale="1.1">
    <span><img src="/page/img/logo_market.png" alt=""></span>
        <h6>Grifo & Minimarket Vimalca Repsol</h6>
        {{-- <p>Tempore corrupti temporibus fuga earum asperiores fugit laudantium.</p> --}}
    </div>
    
    
     </a>
</div>


<div class="col-lg-3 wow fadeInUp" data-wow-delay=".12s">
    <a href="{{route('branch','agua-de-mesa')}}">
    
    <div class="step-item  xtop xcolor" data-tilt data-tilt-scale="1.1">
    <span><img src="/page/img/logo_agua.png" alt=""></span>
        <h6>Agua de Mesa Vimalca</h6>
        {{-- <p>Tempore corrupti temporibus fuga earum asperiores fugit laudantium.</p> --}}
    </div>
    
    
     </a>
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