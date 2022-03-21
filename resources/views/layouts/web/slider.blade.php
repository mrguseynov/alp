<div class="content-top">
    <div class="container">
       <div class="row">
          <div class="slideshow-panel col-sm-9 hb-animate-element bottom-to-top">
             <div class="ttloading-bg ttloader"></div>
             <div class="swiper-viewport">
                <div id="slideshow0" class="slideshow-main swiper-container">
                   <div class="swiper-wrapper">
                      <div class="swiper-slide text-center">
                         <a href="#">
                         <img src="image/slider-01-941x540.jpg" alt="slider-01" class="img-responsive" />
                         </a>
                         <div class="slider-description">
                            <div class="slider-content-wrap right effect_left">
                               <div class="slider-desc">New in stock</div>
                               <div class="slider-subtitle">Huawei <br> Honor 7a - 128GB</div>
                               <div class="slider-title">Electronics Gadgets Never Takes a Day Off</div>
                               <div class="slider-button">
                                  <a href="" class="btn btn-default">Shop Now</a>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="swiper-slide text-center">
                         <a href="#">
                         <img src="image/slider-02-941x540.jpg" alt="slider-02" class="img-responsive" />
                         </a>
                         <div class="slider-description">
                            <div class="slider-content-wrap left effect_left">
                               <div class="slider-desc">nfinity Fuze 200 4.5</div>
                               <div class="slider-subtitle">Wireless Bluetooth <br> Speaker</div>
                               <div class="slider-title">Electronics Gadgets Never Takes a Day Off</div>
                               <div class="slider-button">
                                  <a href="" class="btn btn-default">Shop Now</a>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="swiper-pagination slideshow0"></div>
                   <div class="swiper-pager">
                      <div class="swiper-button-prev"></div>
                      <div class="swiper-button-next"></div>
                   </div>
                </div>
             </div>
          </div>
          <script>
             $('#slideshow0').swiper({
                 mode: 'horizontal',
                 slidesPerView: 1,
                 pagination: '.slideshow0',
                 paginationClickable: true,
                 nextButton: '.swiper-button-next',
                 prevButton: '.swiper-button-prev',
                 spaceBetween: 0,
                 effect: 'fade',
                 autoplay: 2500,
                 autoplayDisableOnInteraction: true,
                 loop: true
             });

          </script>
          <div class="html-content">
             <div class="box-content">
                <div id="ttcmsrightbanner" class="col-sm-3 col-xs-3 hb-animate-element bottom-to-top">
                   <div class="rightbanner">
                      <div class="ttbanner ttrightbanner">
                         <div class="ttbanner-img">
                            <a href="">
                            <img src="image/right-banner-01.jpg" alt="banner_image1">
                            </a>
                            <div class="ttbanner-content right">
                               <div class="ttbaaner-subtitle">Game Zone</div>
                               <div class="ttbaaner-title">Smart Telivision</div>
                            </div>
                         </div>
                      </div>
                      <div class="ttbanner ttrightbanner">
                         <div class="ttbanner-img">
                            <a href="">
                            <img src="image/right-banner-02.jpg" alt="banner_image1">
                            </a>
                            <div class="ttbanner-content left">
                               <div class="ttbaaner-subtitle">Sale 20% off</div>
                               <div class="ttbaaner-title">Smart Watches</div>
                            </div>
                         </div>
                      </div>
                      <div class="ttbanner ttrightbanner">
                         <div class="ttbanner-img">
                            <a href="">
                            <img src="image/right-banner-03.jpg" alt="banner_image1">
                            </a>
                            <div class="ttbanner-content right">
                               <div class="ttbaaner-subtitle">Game Zone</div>
                               <div class="ttbaaner-title">X-Box One</div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="newletter-popup">
             <div class="ttpopupclose"></div>
             <div id="boxes" class="newletter-container">
                <div style="" id="dialog" class="window">
                   <div id="popup2">
                      <span class="b-close"><span>X</span></span>
                   </div>
                   <!--<div class="newslatter-img col-sm-5 col-xs-5">
                      </div>-->
                   <div class="box">
                      <!-- <div class="popup-logo">
                         </div>-->
                      <div class="newletter-title">
                         <h2>SIGN UP NEWSLETTER & PROMOTIONS!</h2>
                      </div>
                      <div class="box-content newleter-content">
                         <label></label>
                         <div id="frm_subscribe">
                            <form name="subscribe" id="subscribe_popup">
                               <div class="newslatterpopup-content">
                                  <span>GET 25% DISCOUNT</span>
                                  <div class="newletter-subtitle">ON YOUR NEXT PURCHASE</div>
                                  <div id="notification"></div>
                                  <input type="text" value="" name="subscribe_pemail" id="subscribe_pemail" placeholder="Your E-mail Address">
                                  <input type="hidden" value="" name="subscribe_pname" id="subscribe_pname" />
                                  <div class="popup-button">
                                     <a class="button btn btn-primary" onclick="email_subscribepopup()"><span>Subscribe</span></a>
                                  </div>
                               </div>
                            </form>
                            <div class="subscribe-bottom">
                               <input type="checkbox" id="newsletter_popup_dont_show_again">
                               <label for="newsletter_popup_dont_show_again">Don't show this popup again</label>
                            </div>
                         </div>
                         <!-- /#frm_subscribe -->
                      </div>
                      <!-- /.box-content -->
                   </div>
                </div>
                <script>
                   function email_subscribepopup(){
                       $.ajax({
                               type: 'post',
                               url: 'index.php?route=extension/module/ttnewslettersubscribe/subscribepopup',
                               dataType: 'html',
                               data:$("#subscribe_popup").serialize(),
                               success: function (html) {
                                   //$.cookie('shownewsletter', '1');
                                       try {

                                           eval(html);

                                       } catch (e) {
                                       }
                               }});


                   }
                   function email_unsubscribepopup(){
                       $.ajax({
                               type: 'post',
                               url: 'index.php?route=extension/module/ttnewslettersubscribe/unsubscribe',
                               dataType: 'html',
                               data:$("#subscribe_popup").serialize(),
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

                   if($.cookie('shownewsletter')==1) $('.newletter-popup').hide();
                   $('#subscribe_pemail').keypress(function(e) {
                           if(e.which == 13) {
                               e.preventDefault();
                               email_subscribepopup();
                           }
                   var name= $(this).val();
                       $('#subscribe_pname').val(name);
                       });
                   $('#subscribe_pemail').change(function() {
                   var name= $(this).val();
                           $('#subscribe_pname').val(name);
                   });


                       //transition effect
                       if($.cookie("shownewsletter") != 1){
                   setTimeout(function(){
                   $('.newletter-popup').bPopup('show')
                             }, 1000);
                       }


                   $('#newsletter_popup_dont_show_again').on('change', function(){
                   if($.cookie("shownewsletter") != 1){
                   $.cookie("shownewsletter",'1')
                   }else{
                   $.cookie("shownewsletter",'0')
                   }
                   });
                   });
                </script>
             </div>
          </div>
          <!-- /.box -->
       </div>
    </div>
 </div>
