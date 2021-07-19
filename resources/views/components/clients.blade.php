<section class="clients section-padding" style="{{$style ?? ''}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 valign">
                <div class="sec-head custom-font mb-0">
                    <h6>Clientes</h6>
                    <h3>Nuestros <br> Clientes.</h3>
                </div>
            </div>
            <div class="col-lg-8">
                <div>
                    <div class="row bord">
                        @foreach ($clients as $item)
                            <div class="col-md-3 col-6 brands">
                                <div class="item wow fadeIn" data-wow-delay=".3s">
                                    <div class="img">
                                        <img src="{{$item->urlPath}}" alt="">
                                        <a class="link" data-splitting>{{$item->name}}</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>