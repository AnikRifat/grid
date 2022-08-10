</div>
<footer class="footer-agency" data-bg='{{ asset('/') }}assets/front/img/footer-bg-agency.png'>
    <div class="animate-element">
        <img src="{{ asset('/') }}assets/front/img/footer/bline.svg" alt="" class="shape f1">
        <img src="{{ asset('/') }}assets/front/img/footer/gline.svg" alt="" class="shape f2">
        <img src="{{ asset('/') }}assets/front/img/footer/bline.svg" alt="" class="shape f3">
        <img src="{{ asset('/') }}assets/front/img/footer/yline.svg" alt="" class="shape f4">
        <img src="{{ asset('/') }}assets/front/img/footer/bline.svg" alt="" class="shape f5">
        <img src="{{ asset('/') }}assets/front/img/footer/ring.png" alt="" class="shape f6">
        <img src="{{ asset('/') }}assets/front/img/footer/tri.svg" alt="" class="shape f7">
        <img src="{{ asset('/') }}assets/front/img/footer/ring.png" alt="" class="shape f8">
    </div>
    <div class="call-to-action-wrap">
        <div class="container bg-cover" data-bg='{{ asset('/') }}assets/front/img/dot-circle.png'>
            <div class="row align-items-center text-center text-lg-left">
                <div class="col-xl-6 offset-xl-1 col-lg-7 offset-lg-1 col-12">
                    <div class="call-to-action-content">
                        <h3>So What is Next?</h3>
                        <h2>Are You Ready? Let’s Work!</h2>
                    </div>
                </div>
                <div class="col-xl-2 offset-xl-2 col-lg-3 offset-lg-1 col-md-12 col-12">
                    <div class="action-btn mt-4 mt-lg-0">
                        <a href="#" class="theme-btn">Get Start</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-widgets-section text-white">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                    <div class="about-footer-wid">
                        <a href="index.html">
                            <img src="{{ asset('/') }}images/{{ $content->logo }}" alt="">
                        </a>
                        <p>{{ $content->massage }}</p>

                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-12 pl-60">
                    <div class="single-footer-wid">
                        <div class="widegts-title">
                            <h4>Download</h4>
                        </div>
                        <ul>
                            <li><a href="#">Android App</a></li>
                            <li><a href="#">ios App</a></li>
                            <li><a href="#">Desktop</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Partners</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-12">
                    <div class="single-footer-wid">
                        <div class="widegts-title">
                            <h4>Useful Links</h4>
                        </div>
                        <ul>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Term & conditions</a></li>
                            <li><a href="#">Reporting</a></li>
                            <li><a href="#">Tools & Integrations</a></li>
                            <li><a href="#">API</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 offset-xl-1 col-lg-3 col-md-6 col-12">
                    <div class="single-footer-wid">
                        <div class="widegts-title">
                            <h4>Contact us</h4>
                        </div>
                        <span>{{ $content->address }}</span>
                        <br>
                        <span>{{ $content->phone }}</span>
                        <br>
                        <span>{{ $content->email }}</span>
                        <div class="social-links mt-10 two">
                            <a href="{{ $content->facebook }}"><i class="fab fa-facebook-f"></i></a>
                            <a href="{{ $content->twitter }}"><i class="fab fa-twitter"></i></a>
                            <a href="{{ $content->linkedin }}"><i class="fab fa-linkedin-in"></i></a>
                            <a href="{{ $content->youtube }}"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="{{ asset('/') }}assets/front/js/jquery-2.4.min.js"></script>
<script src="{{ asset('/') }}assets/front/js/modernizr-3.7.1.min.js"></script>
<script src="{{ asset('/') }}assets/front/js/jquery.easing.1.3.js"></script>
<script src="{{ asset('/') }}assets/front/js/popper.min.js"></script>
<script src="{{ asset('/') }}assets/front/js/bootstrap.min.js"></script>
<script src="{{ asset('/') }}assets/front/js/isotope.pkgd.min.js"></script>
<script src="{{ asset('/') }}assets/front/js/imageload.min.js"></script>
<script src="{{ asset('/') }}assets/front/js/scrollUp.min.js"></script>
<script src="{{ asset('/') }}assets/front/js/owl.carousel.min.js"></script>
<script src="{{ asset('/') }}assets/front/js/magnific-popup.min.js"></script>
<script src="{{ asset('/') }}assets/front/js/aos.js"></script>
<script src="{{ asset('/') }}assets/front/js/meanmenu.min.js"></script>
<script src="{{ asset('/') }}assets/front/js/slick.min.js"></script>
<script src="{{ asset('/') }}assets/front/js/gsap.min.js"></script>
<script src="{{ asset('/') }}assets/front/js/wow.min.js"></script>
<script src="{{ asset('/') }}assets/front/js/waypoints.js"></script>
<script src="{{ asset('/') }}assets/front/js/jquery.countup.min.js"></script>
<script src="{{ asset('/') }}assets/front/js/ajax-mail.js"></script>
<script src="{{ asset('/') }}assets/front/js/active.js"></script>
</body>


</html>
