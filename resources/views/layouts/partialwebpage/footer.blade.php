<footer id="footer" class="section section-grey">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- footer widget -->
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="footer">
                    <!-- footer logo -->
                    <div class="footer-logo">
                        <a class="logo" href="#">
                            <img src="./img/logo.png" alt="">
                          </a>
                    </div>
                    <!-- /footer logo -->

                    <p>¡Siguenos en nuestras redes sociales!</p>

                    <!-- footer social -->
                    <ul class="footer-social">
                        <li><a href="https://www.facebook.com/itvereats/"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-inbox"></i></a></li>
                        <li><a href="#"><i class="fa fa-whatsapp">  </i></a></li>
                    </ul>
                    <!-- /footer social -->
                </div>
            </div>
            <!-- /footer widget -->

            <!-- footer widget -->
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="footer">
                    <h3 class="footer-header">Te puede interesar</h3>
                    <ul class="list-links">
                        <li><a href="http://www.itver.edu.mx/">ITVer</a></li>
                        <li><a href="http://sii.itver.edu.mx/">SII</a></li>
                    </ul>
                </div>
            </div>
            <!-- /footer widget -->

            <div class="clearfix visible-sm visible-xs"></div>

            {{-- <!-- footer widget -->
            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="footer">
                    <h3 class="footer-header">Customer Service</h3>
                    <ul class="list-links">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Shiping & Return</a></li>
                        <li><a href="#">Shiping Guide</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
            </div>
            <!-- /footer widget --> --}}

            <!-- footer subscribe -->
            <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="footer">
                    <h3 class="footer-header">Comparte con nosotros</h3>
                    <p>De esta manera nos ayudas a seguir mejorando y dar un mejor servicio.</p>
                    <form method="POST" action="{{ route('contact.send') }}">
                        @csrf
                        <div class="form-group">
                            <input name="email" class="input" type="email" placeholder="Tu email">
                        </div>
                        <div class="form-group">
                            <input name="subject" class="input" type="text" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea name="comments" class="input form-control" placeholder="Comentario..." rows="6"></textarea>
                        </div>
                        <div class="pull-right">
                            <button type="submit" class="primary-btn" >Envia tus comentarios</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /footer subscribe -->
        </div>
        <!-- /row -->
        <hr>
        <!-- row -->
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <!-- footer copyright -->
                <div class="footer-copyright">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
                <!-- /footer copyright -->
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</footer>
