<x-page>
    @push('css')
        @livewireStyles
    @endpush
    <header class="works-header fixed-slider hfixd valign">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-11 static">
                    <div class="capt mt-50">
                        <div class="parlx">
                            <h2 class="custom-font" style="color:white !important">No dude en Contactarse con nosotros.</h2>
                            <p style="color:black !important">Consúltenos cualquier pregunta, estaremos atentos para solventar todas sus dudas.</p>
                        </div>

                        <div class="bactxt custom-font valign">
                            <span class="full-width">Contacto</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="main-content">
        <!-- ==================== Start Contact ==================== -->

        <section class="contact section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form md-mb50">

                            <h4 class="extra-title mb-50">Ponerse en contacto.</h4>

                            <livewire:contact/>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <div class="cont-info">
                            <h4 class="extra-title mb-50">Info de Contacto.</h4>
                            <h3 class="custom-font wow" data-splitting>Hablemos.
                            </h3>
                            <div class="item mb-40">
                                <h5><a href="#0"> contabilidad.grupovimalca@hotmail.com</a></h5>
                                <h5> (+51) 959 942 026</h5>
                            </div>
                            <h3 class="custom-font wow" data-splitting>Visítanos.
                            </h3>
                            <div class="item">
                                <h6> KM 0.8 Carretera Santa Rosa 

                                    <br>Pimentel, Santa Rosa
                                </h6>
                            </div>
                            <div class="social mt-50">                                
                                <a href="https://api.whatsapp.com/send?phone=51959942026&text=Hola%2C%20gracias%20por%20comunicarte%20con%20Consorcio%20Vimalca%2C%20d%C3%A9janos%20tu%20consulta%20y%20pronto%20te%20atenderemos." class="icon">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                                <a href="https://www.instagram.com/consorcio.vimalca/" class="icon">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End Contact ==================== -->


        <!-- ==================== Start Map ==================== -->

        <div class="map">            
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.200542925645!2d-79.92969508469969!3d-6.866555769092051!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x904cfb09da4a52b3%3A0xf99a604b94cbf801!2sFabrica%20de%20Hielo%20Vimalca!5e0!3m2!1ses-419!2spe!4v1627019363936!5m2!1ses-419!2spe" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        @push('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            @livewireScripts
            <script>
                Livewire.on('alertSuccess', () => {
                    swal('Mensaje Enviado! ', "Nos contactaremos contigo a la brevedad", "success");
                });
            </script>
        @endpush
</x-page>