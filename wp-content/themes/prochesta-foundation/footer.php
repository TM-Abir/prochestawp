<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package prochesta_foundation
 */

?>



<?php wp_footer(); ?>

<address id="Contact">
  <div class="section-overlay">
    <div class="container">
       <div class="row" style="margin-top: 90px;margin-bottom:83px">
            <div class="col-md-4 contact-info" style="color:#fff">
                 <h1 style="font-size:2.1em;font-weight:400">CONTACT US</h1> 
                <div style="width: 72px; height: 3px;background-color:#8abfe6;margin: 5px 1px 19px;">
                           </div>
                      <form class="form-horizontal wow fadeIn" method="post" style="margin-left:22px">
                    <fieldset>
                      
                        <div class="form-group">
                            
                           
                                <input id="fname" name="name" type="text" name="first_name" required placeholder="NAME" class="form-control">
                            
                        </div>
                        <div class="form-group">
                            
                            
                                <input id="lname" name="name" type="text" name="first_name" required placeholder="EMAIL" class="form-control">
                            
                        </div>
                         <div class="form-group">
                            
                            
                                <input id="lname" name="name" type="text" name="first_name" required placeholder="SUBJECT" class="form-control">
                            
                        </div>
                        <div class="form-group">
                         <!--  <p style="font-size:18px;margin:23px 0px 7px 11px">Message</p>-->
                          <textarea class="form-control" rows="5" id="message" name="message" style="margin: 12px -2px 0px 0px; height: 91px;" required placeholder="Message"></textarea>
                       
                             
                        </div>
                    
                        
                        
           </fieldset>
                       <div class="donate-button" style="margin:34px 0px 0px 0px">
                                 <a class="btn-default blue" style="margin-left:-13px">SEND</a>
                     
                     </div> <!--about-left-button-->
           </form>
            </div>  <!--contact-info-->
            <div class="col-md-5 col-md-offset-3  address-info" style="color:#fff">
               <h1 style="font-size:2.1em;font-weight:400">ADDRESS</h1>  
               <div style="width: 72px;
    height: 3px;
    background-color:#8abfe6;;
    margin: 5px 1px 19px;">
                           </div>
             <div class="contact-margin wow fadeIn" style="margin-left:23px;margin-top:50px">
                 <address class="address-description">
                     
                      <p style="margin-bottom:25px;"><i class="fa fa-map-marker"></i>  
                       <b>ADDRESS</b>
                      </p>
                      <footer> 
                          <p class="address-footer"> 221B BAKER STREET<br> LONDON,ENGLAND</p>
                    </footer>
                     
                 </address>
                  <address class="address-description">
                       
                       <p style="margin-bottom:25px"><i class="fa fa-phone "></i>   
                        <b>PHONE</b>
                        </p>
                        <footer> 
                          <p class="address-footer" style="margin-left:31px"> 88-44-5561,11-555-4446</p>
                    </footer>
                      
                  </address>
                  <address class="address-description">
                       
                       <p ><i  class="fa fa-envelope-o"></i> 
                          <b>MAIL</b>  
                       </p>    
                        <footer> 
                          <p class="address-footer" style="margin-top: -6px;margin-left: 37px;">info@kinative.com</p>
                        </footer>
                       
                 </address>
              </div> <!--contact-margin-->
          </div>  <!-- address-info-->
       </div> <!--row-->
     </div> <!--container-->
</div>
</address><!-- Contact-->


<section id="map">
   
        
      <div style="width:100%;max-width:100%;overflow:hidden;height:200px;color:red;">
         <div id="embed-map-canvas" style="height:100%; width:100%;max-width:100%;">
            <div class="overlay" onClick="style.pointerEvents='none'">
              <a class="btn-default white"> <button class=" location">VIEW MAP</button></a>
            </div>
             <iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Dhanmondi,+Dhaka,+Dhaka+Division,+Bangladesh&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe></div><a class="google-map-code-enabler" rel="nofollow" href="https://www.hostingreviews.website/compare/dreamhost-vs-bluehost" id="enable-map-info">is bluehost or dreamhost better</a><style>#embed-map-canvas img{max-width:none!important;background:none!important;}</style></div><script src="https://www.hostingreviews.website/google-maps-authorization.js?id=2f3510e0-ecc0-af21-6c11-f85a349b7e7a&c=google-map-code-enabler&u=1463173318" defer="defer" async="async"></script>
         
       
</section> 


<section id="contact-info" style="background:#1e1f24;padding:60px 0px">
     <div class="container">
         <div class="row" style="color:#fff">
            <div class="col-md-4 col-sm-6 col-xs-12">
               <h3 class="contact-us-header">ABOUT</h3>
                <div style="width: 72px; height: 3px;background-color:#8abfe6;margin: 5px 1px 19px;">
                </div>
                <p style="max-width:265px;font-size:16px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehe
                </p>
                
                <div class="contact-us-social-icon">
                   <div class="icon-block"><a href="#"><i class="fa fa-facebook "></i></a></div>
                   <div class="icon-block"><a href="#"><i class="fa fa-google "></i></a></div>
                   <div class="icon-block"><a href="#"><i class="fa fa-youtube "></i></a></div>
                   <div class="icon-block"><a href="#"><i class="fa fa-linkedin "></i></a></div>
                 </div>
                  
               <div class="subscribe">
                   <h3 class="contact-us-header">SUBSCRIBE TO OUR NEWSLETTER</h3>
                  <div style="width: 72px; height: 3px;background-color:#8abfe6;margin: 5px 1px 19px;"></div>
                  <div class="subscribe-hide">
						<input class="form-control" type="email" id="subscribe-email" name="EMAIL" placeholder="Email Address" required="">
                         <a><button type="submit" id="subscribe-submit" class="btn"><i class="fa fa-envelope"></i></button></a>
						
						
				  </div>
               </div>
          

             <div class="links" >
                   <h3 class="contact-us-header">LINKS</h3>
                <div style="width: 72px; height: 3px;background-color:#8abfe6;margin: 5px 1px 19px;">
                </div>
                  <ul class="contact-us-linking" style="padding:0px 0px">
                       <li>-ABOUT</li>
                       <li>-EVENTS</li> 
                       <li>-DONATE</li>
                       <li>-SERVICE</li>
                       <li>-UPCOMING</li>
                       <li>-CONTACT</li>
             
                  </ul>
             </div>
        </div>
              
           <div class="block col-md-4 col-sm-6 col-xs-12">
                  <h3 class="contact-us-header">FACEBOOK</h3>
                   <div style="width: 72px; height: 3px;background-color:#8abfe6;margin: 5px 1px 19px;">
                </div>
                 
                 <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fprochesta.desh&tabs=timeline&width=360&height=530&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="360" height="530" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
              
            </div>


         <div class="block col-md-4 col-sm-12 col-xs-12 flickr_widget to_animate animated fadeInUp" data-animation="fadeInUp" style="opacity: 0;">
              <h3 class="contact-us-header">INSTAGRAM FEED</h3>
                <div style="width: 72px; height: 3px;background-color:#8abfe6;margin: 5px 1px 19px;">
                </div>
        <div class="col-md-12">
       <iframe src="http://instaembedder.com/gallery-v2.php?width=100&cols=3&rows=3&margin=8&color=gray&share_buttons=1&image_border=8&frame_color=white&cid=1760&" frameborder="0" width="375" height="226" ></iframe>
        
              <h3 class="contact-us-header">YOUTUBE FEED</h3>
              <div style="width: 72px; height: 3px;background-color:#8abfe6;margin: 5px 1px 19px;">
                </div>
         </div>      
  <div class="col-md-12 ">
 <iframe src="https://ytchannelembed.com/ytce-gallery.php?user=UCeBWEO6YROscj5QDvrdsnbg&rows=1&ratio=hd&width=130&margin=15&desc="40&desc_color=white&title=30&title_color=white&https=0&duration=1&views=1&likes=0&dislikes=0&fav=0&cols=2" style="width:100%;"max-width:300px;" class="ytce"></iframe>
   </div>     
  </div>                   
         </div>
     </div>
 
</section>

<footer id="footer-section" style="background:#0e0e0e;padding:25px 0px">
			<p class="copyright" style="margin: 0!important;font-size:18px;
	padding: 25px 15px!important; 
	text-align: center!important;
	line-height: 30px!important;
	color: #fff!important;letter-spacing:1.5px">
				© Copyright<a href="www.kinative.com" target="_blank" > KINATIVE</a> 2016, All Rights Reserved.
			</p>
		</footer>

	 <script src="<?php bloginfo('template_directory'); ?>/js/jquery-2.1.4.min.js"></script> 
     <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
     <script src="<?php bloginfo('template_directory'); ?>/js/wow.min.js"></script>
     <script src="<?php bloginfo('template_directory'); ?>/js/jquery.easing.min.js"></script>
     <script src="<?php bloginfo('template_directory'); ?>/js/isotope.min.js"></script>
     <script src="<?php bloginfo('template_directory'); ?>/js/jquery.syotimer.js"></script>
     <script src="<?php bloginfo('template_directory'); ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
     <script src="<?php bloginfo('template_directory'); ?>/js/owl.carousel.js"></script>
     <script src="<?php bloginfo('template_directory'); ?>/js/parallax.js-1.4.2/parallax.min.js"></script>
     <script src="<?php bloginfo('template_directory'); ?>/js/jquery.fancybox.pack.js"></script>
     <script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>




</body>
</html>
