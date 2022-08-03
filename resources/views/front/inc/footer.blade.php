 <!----------------------------footer-section-------------------------------------------->
 <footer id="footer">
     <div class="container">
         <div class="row footer-content">
             <div class="col-md-3">
                 <div class="wow animated fadeInLeft">
                     <div class="footer-logo">
                         <img src="{{ asset('/') }}assets/front/uploads/2020/04/logo.png" alt="">
                     </div>
                     <div class="card">
                         <h3><i class="margin-right-sm fa fa-map-marker" aria-hidden="true"></i> 1, Pearmain Stables, Chruch Rd, Swanley Village, Swanley BR8 7FS</h3>
                         <h3><i class="margin-right-sm fa fa-envelope-o" aria-hidden="true"></i> support@solutiongrid.com</h3>
                         <h3><i class="margin-right-sm fa fa-phone" aria-hidden="true"></i> 07576-645467</h3>

                     </div>
                 </div>


             </div>
             <div class="col-md-6">
                 <!-- <h5 class="text-center">services</h5> -->
                 <div class="row">
                     <div class="wow animated fadeInLeft">
                         <div class="col-md-6 col-12 address">
                             <div class="textwidget custom-html-widget">

                                 <ul class="email-id">
                                     <li><a href="social-media-optimization/index.html"><i class="fa fa-angle-right" style="font-size:18px"></i> Software system & Development</a></li>
                                     <li><a href="pay-per-click-management/index.html"><i class="fa fa-angle-right" style="font-size:18px"></i> App Development</a></li>
                                     <li><a href="services/web-designing/index.html"><i class="fa fa-angle-right" style="font-size:18px"></i> Website Design & Development</a></li>
                                     <li><a href="services/web-development/index.html"><i class="fa fa-angle-right" style="font-size:18px"></i> Domain & Hosting</a></li>
                                     <li><a href="services/app-development/index.html"><i class="fa fa-angle-right" style="font-size:18px"></i> BPO Support</a></li>
                                     <li><a href="search-engine-optimization/index.html"><i class="fa fa-angle-right" style="font-size:18px"></i> Online Marketing</a></li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                     <div class="wow animated fadeInLeft">
                         <div class="col-md-6 col-12 address">
                             <div class="textwidget custom-html-widget">

                                 <ul class="email-id">
                                     <li><a href="social-media-optimization/index.html"><i class="fa fa-angle-right" style="font-size:18px"></i> Content Development</a></li>
                                     <li><a href="pay-per-click-management/index.html"><i class="fa fa-angle-right" style="font-size:18px"></i> Graphic Design</a></li>
                                     <li><a href="services/web-designing/index.html"><i class="fa fa-angle-right" style="font-size:18px"></i> UI/UX Design</a></li>
                                     <li><a href="services/web-development/index.html"><i class="fa fa-angle-right" style="font-size:18px"></i> Social Media Management</a></li>
                                     <li><a href="services/app-development/index.html"><i class="fa fa-angle-right" style="font-size:18px"></i> Market Research</a></li>
                                     <li><a href="search-engine-optimization/index.html"><i class="fa fa-angle-right" style="font-size:18px"></i> White Label Agency Solution</a></li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-md-3">
                 <img src="{{ asset('/') }}assets/front/images/map.png" alt="">
                 <div class="social-links">
                     <div class="social-item">
                         <a href="https://facebook.com/Abaacorp" target="_blank">
                             <i class="fa fa-facebook-square" aria-hidden="true"></i>
                         </a>
                     </div>
                     <div class="social-item">
                         <a href="https://twitter.com/abaacorp" target="_blank">
                             <i class="fa fa-twitter-square" aria-hidden="true"></i>
                         </a>

                     </div>
                 </div>
             </div>


         </div>
     </div>
 </footer>
 <!----------------------------footer-section-ends---------------------------------------->



 </div>
 <!----------------------------Modal-box-portfolio-------------------------------------------------->
 <div id="myModal" class="modal fade">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
             </div>
             <div class="modal-body">
                 <img src="#" alt="logo" class="img-responsive">
             </div>

         </div>
     </div>
 </div>

 <!----------------------------script-section-------------------------------------------------->

 <script src="{{ asset('/') }}assets/front/js/jquery.min.js" type="text/javascript"></script>
 <script src="{{ asset('/') }}assets/front/js/bootstrap.min.js" type="text/javascript"></script>
 <script src="{{ asset('/') }}assets/front/js/script.js" type="text/javascript"></script>
 <script src="{{ asset('/') }}assets/front/js/aos.js"></script>
 <script src="{{ asset('/') }}assets/front/js/wow.min.js"></script>
 <script src="{{ asset('/') }}assets/front/js/owlcarousel/owl.carousel.js"></script>
 <script src="{{ asset('/') }}assets/front/js/jquery.fancybox.min.js"></script>

 <script>

 </script>
 <script type="text/javascript">
     // <!-----------Aos-------------->
     AOS.init();

     // <!-----------Aos-------------->

     // <!-----------WOW-------------->

     new WOW().init();

     // <!-----------WOW-------------->
     $(document).ready(function() {
         $(".menu-click").on("click", function() {
             //  console.log('ok');
             $("#menu-main-menu").toggleClass("showing")
         })
     }), $(window).on("scroll", function() {
         $(window).scrollTop() ? $("nav").addClass("black") : $("nav").removeClass("black")
     });


     // When the user scrolls the page, execute myFunction
     window.onscroll = function() {
         myFunction()
     };

     // Get the navbar
     var navbar = document.getElementById("navbar");

     // Get the offset position of the navbar
     var sticky = navbar.offsetTop;

     // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
     function myFunction() {
         if (window.pageYOffset >= sticky) {
             navbar.classList.add("sticky")
         } else {
             navbar.classList.remove("sticky");
         }
     }

     $(document).ready(function() {

         $('.gallery_product.logos .card').addClass('logo');
         $(".filter-button").click(function() {
             var value = $(this).attr('data-filter');

             if (value == "all") {
                 //$('.filter').removeClass('hidden');
                 $('.filter').show('1000');
             } else {
                 //            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
                 //            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
                 $(".filter").not('.' + value).hide('3000');
                 $('.filter').filter('.' + value).show('3000');

             }
         });

         if ($(".filter-button").removeClass("active")) {
             $(this).removeClass("active");
         }
         $(this).addClass("active");

     });

     if ($(window).width() < 767) {
         $('.dropdown').on('click', function(e) {
             $(this).children('.sub-menu').slideToggle('slow');
             e.stopPropagation();
         });
         $('.sub-menu').each(function() {
             $height = $(this).height('auto');
             $(this).css('height', $height);
             $(this).hide();
         });
         $('.dropdown .sub-menu').on('click', function(event) {
             event.stopPropagation();
         });
     }
 </script>
 </body>

 </html>