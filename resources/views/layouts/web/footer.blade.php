<div id="footer-layouts" class="footer_default footer-layouts">
    <footer>
       <div class="footer-top">
          <aside id="footer-top">
             <div class="container">
                <div class="row">
                   <div class="newletter-subscribe col-sm-8">
                      <div id="newletter-boxes" class="newletter-container">
                         <div id="dialog-normal" class="window">
                            <div class="box">
                               <div class="newletter-title col-sm-6 hb-animate-element left-to-right">
                                  <h2 class="tt-title">Sign Up For Newsletter</h2>
                                  <span class="newletter-desc">Sign up with us, Get latest deals, offers & updates.</span>
                               </div>
                               <div class="box-content newleter-content col-sm-6 hb-animate-element right-to-left">
                                  <label></label>
                                  <div id="form_subscribe">
                                     <form name="subscribe" id="subscribe">
                                        <input type="text" placeholder="Your E-mail Address" value="" name="subscribe_email" id="subscribe_email">
                                        <input type="hidden" value="" name="subscribe_name" id="subscribe_name" />
                                        <a class="button btn btn-primary" onclick="email_subscribe()"><span>Subscribe</span><i class="material-icons">chevron_right</i></a>
                                     </form>
                                  </div>
                                  <!-- /#frm_subscribe -->
                                  <div id="notification-normal"></div>
                               </div>
                               <!-- /.box-content -->
                            </div>
                         </div>
                      </div>
                   </div>
                   <!-- /.box -->
                   <script>
                      function email_subscribe(){
                          $.ajax({
                                  type: 'post',
                                  url: '#',
                                  dataType: 'html',
                                  data:$("#subscribe").serialize(),
                                  success: function (html) {
                                  try {

                                      eval(html);

                                  } catch (e) {
                                  }

                                  }});


                      }
                      function email_unsubscribe(){
                          $.ajax({
                                  type: 'post',
                                  url: 'index.php?route=extension/module/ttnewslettersubscribe/unsubscribe',
                                  dataType: 'html',
                                  data:$("#subscribe").serialize(),
                                  success: function (html) {
                                          try {

                                              eval(html);

                                          } catch (e) {
                                          }
                                  }});
                          $('html, body').delay( 1500 ).animate({ scrollTop: 0 }, 'slow');

                      }
                   </script>
                   <script>
                      $(document).ready(function() {
                      $('#subscribe_email').keypress(function(e) {
                              if(e.which == 13) {
                                  e.preventDefault();
                                  email_subscribe();
                              }
                      var name= $(this).val();
                          $('#subscribe_name').val(name);
                          });
                      $('#subscribe_email').change(function() {
                      var name= $(this).val();
                              $('#subscribe_name').val(name);
                      });

                      });
                   </script>
                </div>
             </div>
          </aside>
       </div>
       <div class="footer-container hb-animate-element bottom-to-top">
          <div class="container">
             <div class="row">
                <div class="footer-column footer-left-cms col-sm-3">
                   <aside id="footer-left">
                      <div class="html-content">
                         <div class="box-content">
                            <div id="contact-us">
                               <div class="contact-us">
                                  <h5 class="">Store Information</h5>
                                  <ul style="display: block;" class="list-unstyled">
                                     <li class="contact-detail">
                                        <div class="data address">
                                           <i class="material-icons">location_on</i>
                                           <div class="contact-address">580, Broadway, 1002 - New York NY-U</div>
                                        </div>
                                     </li>
                                     <li class="block">
                                        <div class="data">
                                           <div class="icon"><i class="material-icons">mail_outline</i></div>
                                           <a href="mailto:demo@gmail.com" class="dropdown">demo@gmail.com</a>
                                        </div>
                                     </li>
                                     <li class="block">
                                        <div class="data">
                                           <div class="icon"><i class="material-icons">local_phone</i></div>
                                           <span>0123456789</span>
                                        </div>
                                     </li>
                                  </ul>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="html-content">
                         <div class="box-content">
                            <div class="follow-us">
                               <h5 class="title_block ">Follow us</h5>
                               <ul class="list-unstyled">
                                  <li class="facebook">
                                     <a href="#">
                                        <p>Facebook</p>
                                     </a>
                                  </li>
                                  <li class="twitter">
                                     <a href="#">
                                        <p>Twitter</p>
                                     </a>
                                  </li>
                                  <li class="youtube">
                                     <a href="#">
                                        <p>YouTube</p>
                                     </a>
                                  </li>
                                  <li class="pinterest">
                                     <a href="#">
                                        <p>Pinterest</p>
                                     </a>
                                  </li>
                               </ul>
                            </div>
                         </div>
                      </div>
                   </aside>
                </div>
                <div class="col-sm-3 footer-column footer-Extras">
                   <h5>Extras</h5>
                   <ul class="list-unstyled">
                      <li><a href="#">Brands</a></li>
                      <li><a href="#">Gift Certificates</a></li>
                      <li><a href="#">Affiliate</a></li>
                      <li><a href="#">Specials</a></li>
                      <li><a href="#">Site Map</a></li>
                   </ul>
                </div>
                <div class="col-sm-3 footer-column footer-My Account">
                   <h5>My Account</h5>
                   <ul class="list-unstyled">
                      <li><a href="#">My Account</a></li>
                      <li><a href="#">Order History</a></li>
                      <li><a href="#">Wish List</a></li>
                      <li><a href="#">Newsletter</a></li>
                      <li><a href="#">Returns</a></li>
                   </ul>
                </div>
                <div class="col-sm-3 footer-column footer-Information">
                   <h5>Information</h5>
                   <ul class="list-unstyled">
                      <li><a href="#">Contact Us</a></li>
                      <li><a href="#">About Us</a></li>
                      <li><a href="#">Delivery Information</a></li>
                      <li><a href="#">Privacy Policy</a></li>
                      <li><a href="#">Terms &amp; Conditions</a></li>
                   </ul>
                </div>
             </div>
             <div class="bottom-footer col-sm-12">
             </div>
          </div>
       </div>
       <div class="footer-bottom">
          <div class="container hb-animate-element bottom-to-top">
             <div class="footer-bottom-link col-sm-6">
                <p>Powered By <a href="#">OpenCart</a> Your Store &copy; 2022</p>
             </div>
             <div class="footer-bottom-cms col-sm-6">
                <aside id="footer-bottom">
                   <div class="html-content">
                      <div class="box-content">
                         <div class="ttfootertop-link col-sm-6">
                            <div class="footer-column">
                               <h5>Popular Tag</h5>
                               <ul class="list-unstyled">
                                  <li><a href="#">About Us</a></li>
                                  <li><a href="#">Faq's</a></li>
                                  <li><a href="#">Legal Notice</a></li>
                                  <li><a href="#">Delivery</a></li>
                                  <li><a href="#">Men</a></li>
                                  <li><a href="#">Contact Us</a></li>
                                  <li><a href="#">Terms And Conditions Of Use</a></li>
                                  <li><a href="#">Wishlist</a></li>
                               </ul>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="html-content">
                      <div class="box-content">
                         <div id="ttcmsfooter" class="col-sm-6">
                            <h5 class="title_block">Download App</h5>
                            <div id="ttfooter">
                               <div class="ttfooter-logo">
                                  <div class="ttfooter-img1 ttfooter-img">
                                     <a href="#">
                                     <img src="{{ asset('images/items/app-1.png') }}" alt="appstore">
                                     </a>
                                  </div>
                                  <div class="ttfooter-img2 ttfooter-img">
                                     <a href="#">
                                     <img src="{{ asset('images/items/app-2.png') }}" alt="googleplay">
                                     </a>
                                  </div>
                                  <div class="ttfooter-img3 ttfooter-img">
                                     <a href="#">
                                     <img src="{{ asset('images/items/app-3.png') }}" alt="googleplay">
                                     </a>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="html-content">
                      <div class="box-content">
                         <div id="ttcmspaymentlogo">
                            <h5 class="title_block ">Payment</h5>
                            <div id="ttpaymentlogo">
                               <div class="payment_logo_block">
                                  <ul class="payment-list">
                                     <li class="visa"><a href="#"><img alt="visa" src="{{ asset('images/items/payment-1.png') }}"></a></li>
                                     <li class="paypal"><a href="#"> <img alt="paypal" src="{{ asset('images/items/payment-3.png') }}"></a></li>
                                     <li class="cod"><a href="#"> <img src="{{ asset('images/items/payment-4.png') }}" alt="cod"></a></li>
                                     <li class="google"><a href="#"> <img alt="paypal" src="{{ asset('images/items/payment-5.png') }}"></a></li>
                                     <li class="ebay"><a href="#"> <img alt="ebay" src="{{ asset('images/items/payment-6.png') }}"></a></li>
                                     <li class="ebay"><a href="#"> <img alt="ebay" src="{{ asset('images/items/payment-7.png') }}"></a></li>
                                  </ul>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </aside>
             </div>
          </div>
       </div>
    </footer>
 </div>
