<!---==============footer start =================-->
<div class="footer_area thirteen" id="footer_contents">
    <div class="footer_widgets_wrap bg_op_1" style="background: url({{ asset('assets/images/footer-bg.jpg') }});">
       <!--===============spacing==============-->
       <div class="pd_top_80"></div>
       <!--===============spacing==============-->
       <div class="container">
          <div class="row">
             <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="footer_widgets about_company light_color">
                   <div class="about_company_inner">
                      <div class="footer_logo">
                         <a href="#"  rel="nofollow">
                            <img src="{{ asset('assets/images/logo.jpg') }}" class="img-fluid" alt="logo" />
                         </a>
                         <a href="#"  rel="nofollow">
                            <img src="{{ asset('assets/images/logo2.jpg') }}"  alt="logo" />
                         </a>
                         <a href="#"  rel="nofollow">
                            <img src="{{ asset('assets/images/logo3.jpg') }}" alt="logo" />
                         </a>
                         <a href="#"  rel="nofollow">
                            <img src="{{ asset('assets/images/logo4.jpg') }}" alt="logo" />
                         </a>
                         <!--===============spacing==============-->
                         <div class="pd_bottom_30"></div>
                         <!--===============spacing==============-->
                      </div>

                   </div>
                   <!--===============spacing==============-->
                   <div class="pd_bottom_10"></div>
                   <!--===============spacing==============-->

                   <!--===============spacing==============-->
                   <div class="pd_bottom_40"></div>
                   <!--===============spacing==============-->

                </div>
             </div>

             <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="footer_widgets wid_tit style_one">
                   <div class="fo_wid_title">
                      <h2>Menu</h2>
                   </div>
                </div>
                <!--===============spacing==============-->
                <div class="pd_bottom_25"></div>
                <!--===============spacing==============-->
                <div class="footer_widgets clearfix">
                   <ul class="list_items_new_box type_one ">
                      <li>
                         <a href="{{ route('metier') }}" class="color_white">
                            <span class=" icon-right-arrow icon"></span>
                            Nos metiers
                         </a>
                      </li>
                      <li>
                         <a href="{{ route('realisation') }}" class="color_white">
                            <span class=" icon-right-arrow icon"></span>
                            Nos realisations
                         </a>
                      </li>
                      <li>
                         <a href="{{ route('actualite') }}" class="color_white">
                            <span class=" icon-right-arrow icon"></span>
                            Nos actualites
                         </a>
                      </li>
                      <li>
                         <a href="{{ route('contact') }}" class="color_white">
                            <span class=" icon-right-arrow icon"></span>
                            Nous contacter
                         </a>
                      </li>
                      <li>
                        <a href="#" class="color_white">
                           <span class=" icon-right-arrow icon"></span>
                           Notre approche
                        </a>
                     </li>
                     <li>
                        <a href="{{ route('groupe') }}" class="color_white">
                           <span class=" icon-right-arrow icon"></span>
                           Groupe
                        </a>
                     </li>
                   </ul>
                </div>
             </div>

             <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="footer_widgets wid_tit style_one">
                   <div class="fo_wid_title">
                      <h2>Contactez nous</h2>
                   </div>
                </div>
                <!--===============spacing==============-->
                <div class="pd_bottom_25"></div>
                <!--===============spacing==============-->
                <div class="footer_contact_widget">
                   <div class="contact_info_nbox type_one">
                      <div class="single">
                         <h6 class="color_white"> <span class="icon-location2 color_white"></span> Adresse </h6>
                         <p class="color_white">3, rue le Corbusier Bâtiment Tolède - CS40422</p>
                      </div>
                   </div>
                   <!--===============spacing==============-->
                   <div class="pd_bottom_20"></div>
                   <!--===============spacing==============-->
                   <div class="contact_info_nbox type_one">
                      <div class="single">
                         <h6 class="color_white"> <span class="icon-telephone color_white"></span> Téléphone </h6>
                         <p><a href="tel:01.56.30.17.00" class="color_white"> Tel: 01.56.30.17.00 </a></p>
                      </div>
                   </div>
                   <!--===============spacing==============-->
                   <div class="pd_bottom_20"></div>
                   <!--===============spacing==============-->
                   <div class="contact_info_nbox type_one">
                      <div class="single">
                         <h6 class="color_white"> <span class="icon-mail color_white"></span> Email</h6>
                         <p><a href="mailto: contact@otci.fr" class="color_white"> contact@otci.fr</a></p>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <!--===============spacing==============-->
       <div class="pd_bottom_50"></div>
       <!--===============spacing==============-->
    </div>
    <div class="creote-footer-copyright bg_dark_1">
       <!--===============spacing==============-->
       <div class="pd_top_20"></div>
       <!--===============spacing==============-->
       <div class="container">
          <div class="row text-center">
             <div class="col-lg-12">
                <div class="footer_copy_content color_white">
                    © 2023 OTCI - Tous droits réservés - Conçu et réalisé par <a href="https://nzhinusoft.com/" target="_blank" class="color_white">NZHINUSOFT</a>
                </div>
             </div>

          </div>
       </div>
       <!--===============spacing==============-->
       <div class="pd_bottom_20"></div>
       <!--===============spacing==============-->
    </div>
 </div>
 <!---==============mobile menu =================-->
 <div class="crt_mobile_menu">
    <div class="menu-backdrop"></div>
    <nav class="menu-box">
       <div class="close-btn"><i class="icon-close"></i></div>
       <form role="search" method="get" action="#">
          <input type="search" class="search" placeholder="Search..." value="" name="s" title="Search" />
          <button type="submit" class="sch_btn"> <i class="icon-search"></i></button>
       </form>
       <div class="menu-outer">
          <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
       </div>
    </nav>
 </div>
 <!---==============mobile menu end =================-->
 <!---==============search popup =================-->
 <div id="search-popup" class="search-popup">
    <div class="close-search"><i class="fa fa-times"></i></div>
    <div class="popup-inner">
       <div class="overlay-layer"></div>
       <div class="search-form">
          <fieldset>
             <form role="search" method="get" action="#">
                <input type="search" class="search" placeholder="Search..." value="" name="s" title="Search" />
                <button type="submit" class="sch_btn"> <i class="icon-search"></i></button>
             </form>
          </fieldset>
       </div>
    </div>
 </div>
 <!---==============search popup end =================-->
 <!---==============modal popup =================-->
 <div class="modal_popup one">
    <div class="modal-popup-inner">
       <div class="close-modal"><i class="fa fa-times"></i></div>
       <div class="modal_box">
          <div class="row">
             <div class="col-lg-5 col-md-12 form_inner">
                <div class="form_content">


                      <form class="contact-form" method="post" action="">
                         <p>
                            <label> Your name<br />
                              <input type="text" name="name" value="" size="40"   aria-required="true" aria-invalid="false" placeholder="Enter Your Name" />
                              <br />
                               <i class="fa fa-user"></i><br />
                            </label>
                         </p>
                         <p><label> Your email<br />
                             <input type="email" name="email" value="" size="40" aria-required="true" aria-invalid="false"  placeholder="Enter Your Email" />
                             <br />
                            <i class="fa fa-envelope"></i><br />
                            </label>
                         </p>
                         <p>
                            <label> Subject<br />
                              <input type="text" name="subject" value="" size="40" aria-required="true" aria-invalid="false"  placeholder="Enter Your Subject" />
                              <br />
                               <i class="fa fa-folder"></i><br />
                            </label>
                         </p>
                         <p>
                            <label> Your message (optional)<br />
                               <textarea name="message"  cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea"  aria-invalid="false" placeholder="Enter Your Message"></textarea>
                               <br />
                               <i class="fa fa-comments"></i><br />
                            </label>
                         </p>
                         <p><input type="submit" value="Submit" /></p>

                      </form>

                </div>
             </div>
             <div class="col-lg-7 col-md-12 about_company_inner">
                <div class="abt_content">


                   <div class="copright">
                    © 2023 OTCI - Tous droits réservés - Powered by <a href="https://nzhinusoft.com/">NZHINUSOFT</a>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!---==============modal popup end=================-->
 <!---==============cart=================-->
 {{-- <div class="side_bar_cart" id="mini_cart">
    <div class="cart_overlay"></div>
    <div class="cart_right_conten">
       <div class="close">
          <div class="close_btn_mini"><i class="icon-close"></i></div>
       </div>
       <div class="cart_content_box">
          <div class="contnet_cart_box">
             <div class="widget_shopping_cart_content">
                <p class="woocommerce-mini-cart__empty-message">No products in the cart.</p>
             </div>
          </div>
       </div>
    </div>
 </div> --}}
 <!---==============cart=================-->

</div>
<!-- Back to top with progress indicator-->
<div class="prgoress_indicator">
 <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
    <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
 </svg>
</div>
 <!---========================== javascript ==========================-->
 <script type='text/javascript' src='{{ asset('assets/js/jquery-3.6.0.min.js') }}'></script>
 <script type='text/javascript' src='{{ asset('assets/js/bootstrap.min.js') }}'></script>
 <script type='text/javascript' src='{{ asset('assets/js/jquery.fancybox.js') }}'></script>
 <script type='text/javascript' src='{{ asset('assets/js/jQuery.style.switcher.min.js') }}'></script>
 <script type='text/javascript' src='{{ asset('assets/js/jquery.flexslider-min.js') }}'></script>
 <script type='text/javascript' src='{{ asset('assets/js/color-scheme.js') }}'></script>
 <script type='text/javascript' src='{{ asset('assets/js/owl.js') }}'></script>
 <script type='text/javascript' src='{{ asset('assets/js/swiper.min.js') }}'></script>
 <script type='text/javascript' src='{{ asset('assets/js/isotope.min.js') }}'></script>
 <script type='text/javascript' src='{{ asset('assets/js/countdown.js') }}'></script>
 <script type='text/javascript' src='{{ asset('assets/js/simpleParallax.min.js') }}'></script>
 <script type='text/javascript' src='{{ asset('assets/js/appear.js') }}'></script>
 <script type='text/javascript' src='{{ asset('assets/js/jquery.countTo.js') }}'></script>
 <script type='text/javascript' src='{{ asset('assets/js/sharer.js') }}'></script>



 <script type='text/javascript' src='{{ asset('assets/js/validation.js') }}'></script>
 <!-- map script -->
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
 <script src="{{ asset('assets/js/gmaps.js') }}"></script>
 <script src="{{ asset('assets/js/map-helper.js') }}"></script>
 <!-- main-js -->
 <script type='text/javascript' src='{{ asset('assets/js/creote-extension.js') }}'></script>
 <script src="https://cdn.jsdelivr.net/npm/isotope-layout@4.0.0/dist/isotope.pkgd.min.js"></script>


 <script>
    // Assurez-vous d'inclure la bibliothèque Isotope dans votre page

$(document).ready(function() {
    var $grid = $('.project_container').isotope({
        itemSelector: '.project-wrapper',
        layoutMode: 'fitRows'
    });

    $('.project_filter li').on('click', function() {
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: filterValue });
    });
});
 </script>
 <!---========================== javascript ==========================-->
</body>

<!-- Mirrored from themepanthers.com/html/creote-html/home-13.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Sep 2024 14:53:13 GMT -->
</html>
