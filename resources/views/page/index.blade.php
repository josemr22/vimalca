<x-page>
    @if (count($slides) > 0)
    <header class="slider slider-prlx fixed-slider text-center">
        <div class="swiper-container parallax-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="bg-img valign" style="background-image: url('{{$slides[0]->urlPath}}')" data-overlay-dark="6">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 col-md-9">
                                    <div class="caption center">
                                        <h1 data-splitting>Fábrica de <br> Hielo Vimalca</h1>
                                        <p>{{$slides[0]->resume}}</p>
                                        <a href="{{route('branch','fabrica-hielo')}}" class="btn-curve btn-lit mt-30">
                                            <span>Ver más</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-img valign" style="background-image: url('{{$slides[1]->urlPath}}')" data-overlay-dark="6">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 col-md-9">
                                    <div class="caption center">
                                        <h1 data-splitting>Grifo & Minimarket<br> Vimalca Repsol</h1>
                                        <p>{{$slides[1]->resume}}</p>
                                        <a href="{{route('branch','grifo-market')}}" class="btn-curve btn-lit mt-30">
                                            <span>Ver más</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-img valign" style="background-image: url('{{$slides[2]->urlPath}}')" data-overlay-dark="6">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 col-md-9">
                                    <div class="caption center">
                                        <h1 data-splitting> Transporte & Pesca Vimalca</h1>
                                        <p>{{$slides[2]->resume}}</p>
                                        <a href="{{route('branch','pesca-y-transporte')}}" class="btn-curve btn-lit mt-30">
                                            <span>Ver más</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-img valign" style="background-image: url('{{$slides[3]->urlPath}}')" data-overlay-dark="6">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 col-md-9">
                                    <div class="caption center">
                                        <h1 data-splitting> Agua de Mesa Vimalca</h1>
                                        <p>{{$slides[3]->resume}}</p>
                                        <a href="{{route('branch','agua-de-mesa')}}" class="btn-curve btn-lit mt-30">
                                            <span>Ver más</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- slider setting -->
            <div class="setone setwo">
                <div class="swiper-button-next swiper-nav-ctrl next-ctrl cursor-pointer">
                    <i class="fas fa-chevron-right"></i>
                </div>
                <div class="swiper-button-prev swiper-nav-ctrl prev-ctrl cursor-pointer">
                    <i class="fas fa-chevron-left"></i>
                </div>
            </div>
            <div class="swiper-pagination top botm custom-font"></div>

            <div class="social-icon">
                <a href="https://www.facebook.com/fabricadehielo.vimalca"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.facebook.com/pescaytransportevimalca/"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.facebook.com/GrifoMinimarketVimalcaRepsol/"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.facebook.com/aguademesavimalca/"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/consorcio.vimalca/"><i class="fab fa-instagram"></i></a>
                <a href="https://api.whatsapp.com/send?phone=51959942026&text=Hola%2C%20gracias%20por%20comunicarte%20con%20Consorcio%20Vimalca%2C%20d%C3%A9janos%20tu%20consulta%20y%20pronto%20te%20atenderemos."><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>
    </header>
    @endif

    <!-- ==================== End Slider ==================== -->
    <div class="main-content">


        <!-- ==================== Start Servicios ==================== -->

        <section class="services section-padding sub-bg">
            <div class="container">
                <div class="sec-head custom-font tr-head">
                    <h6>Línea empresarial</h6>
                    <h3>Empresas</h3>
                    <span class="tbg">Nuestras Empresas</span>
                </div>
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
                <div class="smore custom-font">
                    <a href="http://consorciovimalca.com/nosotros">Entérate más aquí</a>
                    <i class="fas fa-long-arrow-alt-right"></i>
                </div>
            </div>
        </section>

        <!-- ==================== End Servicios ==================== -->


        <!-- ==================== Start about ==================== -->
@if (count($slides) > 0)
        <div class="about section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="img-mons">
                            <div class="row">
                                <div class="col-md-5 cmd-padding valign">
                                    <div class="img1 wow imago" data-wow-delay=".5s">
                                        <img src="{{$slides[0]->urlPath}}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-7 cmd-padding">
                                    <div class="img2 wow imago" data-wow-delay=".3s">
                                        <img src="{{$slides[1]->urlPath}}" alt="">
                                    </div>
                                    <div class="img3 wow imago" data-wow-delay=".8s">
                                        <img src="{{$slides[2]->urlPath}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="content">
                            <div class="sub-title">
                                <h6>Sobre Nosotros</h6>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <h3 class="main-title wow" data-splitting>Somos el consorcio <br> que te brindará lo que buscabas.</h3>
                            <p class="wow txt" data-splitting>Consorcio Vimalca tiene 10 años de experiencia brindando desde primera instancia un servicio de calidad en el rubro de recursos hidrobiológicos, teniendo posicionamiento sobre el rubro de Pesca & Transporte en el mercado actual desde el año 2011.</p>
                            <div class="ftbox mt-30">
                                <ul>
                                    <li class="wow fadeIn" data-wow-delay=".3s">
                                        <span class="icon pe-7s-anchor"></span>
                                        <h6 class="custom-font"> Pesca & Transporte </h6>
                                        <div class="dots">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </li>

                                    <li class="space wow fadeIn" data-wow-delay=".5s">
                                        <span class="icon pe-7s-helm"></span>
                                        <h6 class="custom-font">Fábrica de Hielo </h6>
                                        <div class="dots">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </li>
                                    <li class="wow fadeIn" data-wow-delay=".8s">
                                        <span class="icon pe-7s-map-marker"></span>
                                        <h6 class="custom-font">Grifo & Minimarket </h6>
                                        <div class="dots">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </li>
                                    <li class="space wow fadeIn" data-wow-delay=".5s">
                                        <span class="icon pe-7s-drop"></span>
                                        <h6 class="custom-font">Agua de Mesa</h6>
                                        <div class="dots">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endif
        <!-- ==================== End about ==================== -->


        <!-- ==================== Start Galería ==================== -->

        <section class="work-carousel section-padding pt-0 metro position-re">
            <div class="container ontop">
                <div class="row">
                    <div class="col-lg-12 no-padding">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                @foreach ($gallery as $item)
                                    <div class="swiper-slide">
                                        <div class="content wow noraidus fadeInUp" data-wow-delay=".3s">
                                            <div class="item-img bg-img wow imago"
                                            style="background-image: url('{{$item->urlPath}}')">
                                            </div>
                                            <div class="cont">
                                                {{-- <h6><a href="#0">{{$item->one}}</a></h6> --}}
                                                <h4><a href="servicios.php" style="color: #0d223f !important">{{$types[$item->category]['label']}}</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <!-- slider setting -->
                            <div class="swiper-button-next swiper-nav-ctrl simp-next cursor-pointer">
                                <span class="simple-btn right">prev</span>
                            </div>
                            <div class=" swiper-button-prev swiper-nav-ctrl simp-prev cursor-pointer">
                                <span class="simple-btn">next</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="half-bg top"></div>
        </section>

        <!-- ==================== End Galería ==================== -->



        <!-- ==================== Start block-sec ==================== -->

        <x-reviews :reviews="$reviews" />
        <!-- ==================== End block-sec ==================== -->


        <!-- ==================== Start clients Brands ==================== -->

        {{-- <x-clients :clients="$clients" :style="'padding-top:190px'"/> --}}
    </div>
</x-page>