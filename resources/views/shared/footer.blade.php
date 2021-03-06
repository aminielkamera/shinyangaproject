 <!-- Main Footer Start -->
 <footer class="wide-tb-footer-70 bg-light-gray pb-0">
     <div class="container">
         <div class="row">

             <!-- Column First -->
             <div class="col-lg-4 col-md-6 text-center">
                 <div class="logo-footer">
                     <img src="{{ asset('assets/images/logo_6.png')}}" height="150px" width="150px" alt="">
                 </div>
                 <p style="text-align: left;"><b>Magsam Resources</b> Magsam Resources We have two
                  mines which combine underground and open pit gold mining and are located in the Shinyanga district, Region of Tanzania. It is operated by Magsam Resources, who owns 100% of the mine.</p>

                 <h3 class="footer-heading" style="text-align: left;">We're Social</h3>
                 <div class="social-icons" style="text-align: left;">
                     <a href="#"><i class="icofont-facebook"></i></a>
                     <a href="#"><i class="icofont-twitter"></i></a>
                     <a href="#"><i class="icofont-whatsapp"></i></a>
                     <a href="#"><i class="icofont-linkedin"></i></a>
                 </div>
             </div>
             <!-- Column First -->

             <!-- Column Second -->
             <div class="col-lg-4 col-md-6">
                 <h3 class="footer-heading">Quick Navigation</h3>
                 <div class="footer-widget-menu">
                     <ul class="list-unstyled">
                         <li><a href="{{url('/')}}"><i class="icofont-simple-right"></i> <span>Home</span></a></li>
                         <li><a href="{{url('about-us')}}"><i class="icofont-simple-right"></i> <span>About us</span></a></li>
                         <li><a href="{{url('exploration')}}"><i class="icofont-simple-right"></i> <span>Operations</span></a></li>
                         <li><a href="{{url('responsible_mining')}}"><i class="icofont-simple-right"></i> <span>Sustainability</span></a></li>
                         <li><a href="{{url('contact-us')}}"><i class="icofont-simple-right"></i> <span>Contacts Us</span></a></li>
                     </ul>
                 </div>
             </div>
             <!-- Column Second -->

             <!-- Column Third -->
             <div class="col-lg-4 col-md-6">
                 <h3 class="footer-heading">Get In Touch</h3>
                 <div class="footer-widget-contact">
                     <div class="media mb-3">
                         <i class="icofont-google-map me-3"></i>
                         <div class="media-body">Kahama, Shinyanga, Tanzania</div>
                     </div>
                     <div class="media mb-3">
                         <i class="icofont-smart-phone me-3"></i>
                         <div class="media-body">
                             <div>+255-755-907-381 </div>
                         </div>
                     </div>
                     <div class="media mb-3">
                         <i class="icofont-ui-email me-3"></i>
                         <div class="media-body">
                             <div><a href="#">info@magsamresources.com</a></div>
                         </div>
                     </div>
                     <div class="media mb-3">
                         <i class="icofont-clock-time me-3"></i>
                         <div class="media-body">
                             <div><strong>Mon - Fri</strong></div>
                             <div>08:00 Am - 11:00 PM EAT</div>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- Column Third -->



         </div>
     </div>

     <div class="copyright-wrap bg-navy-blue wide-tb-30">
         <div class="container">
             <div class="row text-md-start text-center">
                 <div class="col-sm-12 col-md-6 copyright-links">
                     <a href="{{url('storage/Companyprofile_attachments/'.$data['attachmentData'])}}" target="_blank">{{$data['title']}}</a> <span>|</span>
                 </div>
                 <div class="col-sm-12 col-md-6 text-md-end text-center">
                     <a href="{{url('/')}}" rel="nofollow">Magsam Resources Co. Ltd</a> &copy; {{date('Y')}}. All Rights are Reserved
                 </div>
             </div>
         </div>
     </div>
 </footer>
 <!-- Main Footer End -->
