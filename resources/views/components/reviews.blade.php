<section class="block-sec">
    <div class="background bg-img section-padding pb-0" data-background="/page/img/slider/2.jpg" data-overlay-dark="8">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="vid-area">
                        <div class="vid-icon">
                            <a class="vid" href="https://vimeo.com/127203262">
                                <div class="vid-butn">
                                    <span class="icon">
                                        <i class="fas fa-play"></i>
                                    </span>
                                </div>
                            </a>
                        </div>

                        <div class="cont">
                            <h3 class="wow" data-splitting>Así somos. No hay otra forma de decirlo.</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="testim-box">
                        <div class="head-box">
                            <h6 class="wow fadeIn" data-wow-delay=".5s">Nuestros Clientes Felices</h6>
                            <h4 class="wow fadeInLeft" data-wow-delay=".5s">¿Qué dicen los clientes?</h4>
                        </div>
                        <div class="slic-item wow fadeInUp" data-wow-delay=".5s">
                            @foreach ($reviews as $review)
                                <div class="item">
                                    <p style="color: #000">{{$review->body}}</p>
                                    <div class="info">
                                        <div class="img">
                                            <div class="img-box">
                                                <img src="/page/img/clients/1.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="cont">
                                            <div class="author">
                                                <h6 class="author-name custom-font">{{$review->autor}}</h6>
                                                @if($review->company)
                                                    <span class="author-details">{{$review->company}}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
