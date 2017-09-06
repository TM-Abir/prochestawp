<?php
/*
Template Name: Home Page
 */

$hero_caption = get_post_meta(5 ,'hero_caption', true);
$hero_description = get_post_meta(5 ,'hero_description', true);
$hero_button = get_post_meta(5 ,'hero_button', true);
$upcoming_event =  get_post_meta(5 ,'upcoming_event', true);

//Advanced custom fields

// Store data for service section
$service_caption = get_field('service_caption');
$service_description = get_field('service_description');

$service_1_icon= get_field('service_1_icon');
$service_2_icon= get_field('service_2_icon');
$service_3_icon= get_field('service_3_icon');
$service_4_icon= get_field('service_4_icon');
$service_5_icon= get_field('service_5_icon');
$service_6_icon= get_field('service_6_icon');

$service_1_title= get_field('service_1_title');
$service_2_title= get_field('service_2_title');
$service_3_title= get_field('service_3_title');
$service_4_title= get_field('service_4_title');
$service_5_title= get_field('service_5_title');
$service_6_title= get_field('service_6_title');

$service_1_description = get_field('service_1_description');
$service_2_description = get_field('service_2_description');
$service_3_description = get_field('service_3_description');
$service_4_description = get_field('service_4_description');
$service_5_description = get_field('service_5_description');
$service_6_description = get_field('service_6_description');

//cofounder section
$cofounder_section_title= get_field('cofounder_section_title');
$cofounder_section_description= get_field('cofounder_section_description');
$cofounder_image = get_field('cofounder_image');
$cofounder_titile= get_field('cofoundertitle');

//student section
$student_section_title = get_field('student_section_title');
$student_section_description = get_field('student_section_description');

get_header(); ?>

	    <section id="header" class="overlay">
      <div class="section-overlay">
      <div class="container">
         
      <!--<header class="parallax-window" data-parallax="scroll" data-image-src="../img/header-bg.jpg">-->
         <div class="parallax-slider">
         
        </div>

       
          <div class="col-md-12 text-center">
         
           <div class="header-text">
                <h1 style="font-weight:600"> <?php echo $hero_caption ?></h1>
                <p style="max-width: 642px; margin: 20px auto 30px;">
                <?php echo $hero_description ?>
                </p>
          
           <a class="btn-default white"> <?php echo $hero_button ?></a>
           </div> <!--header-text-->
        </div> <!--parallax-slider-->

        </div> <!--row-->
     </div>

    <!--</header>-->
 </div>
 </section>
     
 <section id="header-overlay">
      <div class="container clearfix">
         <div class="row">
          <div id="owl-demo2">
             <div class="item">
                 <div class="row" style="background-color:#fff;padding-bottom:35px">
          <h2 class="header-overlay-header">UPCOMING EVENTS</h2>
         
            <div class="col-md-4 ">
                  <h3 class="header-overlay-sub-header"> <?php echo $upcoming_event ?></h3>
                  <p style="font-size:14px;max-width:412px;margin:-12px -17px 0px 28px">Education is a fundamental right of every children. But too many children in Bangladesh aren’t getting the opportunity to reach their full potential. You can help change this by sponsoring a child. Only spending 650tk per month you can sponsor a child and gift him a brighter future
                  </p>
            </div>
            <div class="col-md-4 ">
                <h3 class="header-overlay-sub-header" >SPONSORSHIP GOAL</h3>
                 
                        <div class="content-box two">
         
                          
                        	<div class="donation-progress-box">
                            	
                         
                               <span class="menu-price">70%</span>
                                <div class="donation-progress-bar">
                                  
                                	<div class="inner-bar" data-value-collected="68214" data-value-total="85870" style="width: 79.4387%;">
                                      
                                     </div>
                                </div>
                               <span class="raised" style="float:left;font-weight: 400;font-size: 18px; margin-top: 6px;">Reach:0 Student</span>
                               <span class="goal" style="float:right;font-weight: 400; font-size: 18px;margin-top: 6px;">Goal:100 Students</span>
                            </div>
                            <div class="event-button" style="margin-top:44px">
                            <a href="#" class="btn-default blue" style="float:left"  >Sponsor</a>
                            <a href="#" class="btn-default blue" style="float:right">VIEW EVENT</a>
                          <div class="clearfix"></div>
                           </div>
                        </div>
                  
        
            </div>
            <div class="col-md-4 ">
              <div class="row">
                  <h3 class="header-overlay-sub-header" >COUNTDOWN</h3>
               <div class="timer ">
                <div class="timer-head-block"></div>
                  <div class="timer-body-block">
                    <div class="col-md-6">
                     <div class="table-cell day">
                        <div class="tab-val">1</div>
                        <div class="tab-metr">DAYS</div>
                     </div>
                     </div>
                    <div class="col-md-6">
                    <div class="table-cell hour">
                        <div class="tab-val">1</div>
                        <div class="tab-metr">HOURS</div>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="table-cell minute">
                        <div class="tab-val">1</div>
                        <div class="tab-metr">MIN</div>
                    </div>
                    </div>
                     <div class="col-md-6">
                       <div class="table-cell second">
                        <div class="tab-val">1</div>
                        <div class="tab-metr" >SEC</div>
                       </div>
                    </div>
                </div>
                <div class="timer-foot-block"></div>
              </div>
            </div> <!--row -col-md-4-->
             </div>
       </div>
             </div> <!--item-->
             <div class="item">
                 <div class="row" style="background-color:#fff;padding-bottom:35px">
          <h2 class="header-overlay-header">UPCOMING EVENTS</h2>
         
            <div class="col-md-4 ">
                  <h3 class="header-overlay-sub-header">SPONSOR A CHILD</h3>
                  <p style="font-size:14px;max-width:412px;margin:-12px -17px 0px 28px">Education is a fundamental right of every children. But too many children in Bangladesh aren’t getting the opportunity to reach their full potential. You can help change this by sponsoring a child. Only spending 650tk per month you can sponsor a child and gift him a brighter future
                  </p>
            </div>
            <div class="col-md-4 ">
                <h3 class="header-overlay-sub-header" >SPONSORSHIP GOAL</h3>
                 
                        <div class="content-box two">
         
                          
                        	<div class="donation-progress-box">
                            	
                         
                               <span class="menu-price">70%</span>
                                <div class="donation-progress-bar">
                                  
                                	<div class="inner-bar" data-value-collected="68214" data-value-total="85870" style="width: 79.4387%;">
                                      
                                     </div>
                                </div>
                               <span class="raised" style="float:left;font-weight: 400;font-size: 18px; margin-top: 6px;">Reach:0 Student</span>
                               <span class="goal" style="float:right;font-weight: 400; font-size: 18px;margin-top: 6px;">Goal:100 Students</span>
                            </div>
                            <div class="event-button" style="margin-top:44px">
                            <a href="#" class="btn-default blue" style="float:left"  >Sponsor</a>
                            <a href="#" class="btn-default blue" style="float:right">VIEW EVENT</a>
                          <div class="clearfix"></div>
                           </div>
                        </div>
                  
        
            </div>
            <div class="col-md-4 ">
              <div class="row">
                  <h3 class="header-overlay-sub-header" >COUNTDOWN</h3>
               <div class="timer ">
                <div class="timer-head-block"></div>
                  <div class="timer-body-block">
                    <div class="col-md-6">
                     <div class="table-cell day">
                        <div class="tab-val">1</div>
                        <div class="tab-metr">DAYS</div>
                     </div>
                     </div>
                    <div class="col-md-6">
                    <div class="table-cell hour">
                        <div class="tab-val">1</div>
                        <div class="tab-metr">HOURS</div>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="table-cell minute">
                        <div class="tab-val">1</div>
                        <div class="tab-metr">MIN</div>
                    </div>
                    </div>
                     <div class="col-md-6">
                       <div class="table-cell second">
                        <div class="tab-val">1</div>
                        <div class="tab-metr" >SEC</div>
                       </div>
                    </div>
                </div>
                <div class="timer-foot-block"></div>
              </div>
            </div> <!--row -col-md-4-->
             </div>
       </div>
             </div> <!--item-->
           </div> <!--owl-demo2-->
       </div>
      </div>  <!--container-->
</section> <!-- header-overlay-->
 



  <section id="events" >
    <div class="container-fluid">
      <div class="row clearfix wow fadeIn">
        <h1 class="quest-header">EVENTS</h1> 
        <div class="horizontal-line">
									<hr>
        </div>
        <p class="quest-paragraph" style="max-width: 707px;
    margin: 20px auto;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br>
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        </p> 
      

         <div class="column cause-column col-md-4 col-sm-4 col-xs-12 wow fadeInDown animated">

                	<article class="inner-box ">
                     
                		<figure class="image-box">
                        	<img src="<?php bloginfo('template_directory');?>/img/event1.jpg" alt="">
                           <div class="event-overlay"></div>
                           
                        </figure>
                     
                        <div class="content-box">
         
                            <div class="event-header"><h4>WATER CEREMONY</h4></div>
                              <div class="text">Lorem ipsum dolor sit amet et siu amet audiam copiosaei mei purto timeam mea ne.</div>
                        	<div class="donation-progress-box">
                            	
                                <div class="event-sub-header"><h4>DONATION</h4></div>
                               <span class="menu-price">70%</span>
                                <div class="donation-progress-bar">
                                  
                                	 <div class="inner-bar" data-value-collected="68214" data-value-total="85870" style="width: 79.4387%;">
                                      
                                     </div>
                                </div>
                               <span class="raised" style="float:left;font-weight: 400;font-size: 13px;">Rasied:100$</span>
                               <span class="goal" style="float:right;font-weight: 400; font-size: 13px;">Goal:500$</span>
                            </div>
                            <div class="event-button">
                            <a href="#" class="event-button1 blue"  >DONATE</a>
                            <a href="#" class="event-button2 blue" style="float:right">VIEW EVENT</a>
                          <div class="clearfix"></div>
                           </div>
                        </div>
                    </article>
        </div> 
        <div class="column cause-column col-md-4 col-sm-4 col-xs-12 wow fadeInDown animated"  >
                	<article class="inner-box  ">
                		<figure class="image-box">
                        	<a href="#"><img src="<?php bloginfo('template_directory');?>/img/event2.jpg"  alt=""></a>
                           
                        </figure>
                        <div class="content-box">
         
                            <div class="event-header"><h4>SAVE AN EGG</h4></div>
                              <div class="text">Lorem ipsum dolor sit amet et siu amet audiam copiosaei mei purto timeam mea ne.</div>
                       
                         <div class="donation-progress-box">
                            	<!--<div class="donation-values">
                                	Donation :  <span class="value">$68,214</span> / <span class="value">$85,870</span>
                                </div>-->
                                 <div class="event-sub-header"><h4>DONATION</h4></div>
                                  <span class="menu-price">60%</span>	
                                <div class="donation-progress-bar">
                                   
                                	<div class="inner-bar" data-value-collected="68214" data-value-total="85870" style="width:72%;"></div>
                                </div>
                               <span class="raised" style="float:left">Rasied:100$</span>
                               <span class="goal" style="float:right">Goal:500$</span>
                            </div>
                            <div class="event-button">
                            <a href="#" class="event-button1 blue"  >DONATE</a>
                            <a href="#" class="event-button2 blue" style="float:right">VIEW EVENT</a>
                          <div class="clearfix"></div>
                           </div>
                        </div>
                    </article>
           </div> 
 
          <div class="column cause-column col-md-4 col-sm-4 col-xs-12 wow fadeInDown animated">
                	<article class="inner-box  ">
                		<figure class="image-box">
                        	<a href="#"><img src="<?php bloginfo('template_directory');?>/img/event3.jpg" alt=""></a>
                           
                        </figure>
                        <div class="content-box">
         
                            <div class="event-header"><h4>SMILE ON THE ELDERLY</h4></div>
                              <div class="text">Lorem ipsum dolor sit amet et siu amet audiam copiosaei mei purto timeam mea ne.</div>
                        	<div class="donation-progress-box">
                            	<!--<div class="donation-values">
                                	Donation :  <span class="value">$68,214</span> / <span class="value">$85,870</span>
                                </div>-->
                                 <div class="event-sub-header"><h4>DONATION</h4></div>
                              <span class="menu-price">70%</span>
                                <div class="donation-progress-bar">
                                   
                                	<div class="inner-bar" data-value-collected="68214" data-value-total="85870" style="width: 79%;"></div>
                                </div>
                               <span class="raised" style="float:left">Rasied:100$</span>
                               <span class="goal" style="float:right">Goal:500$</span>
                            </div>
                            <div class="event-button">
                            <a href="#" class="event-button1 blue"  >DONATE</a>
                            <a href="#" class="event-button2 blue" style="float:right">VIEW EVENT</a>
                          <div class="clearfix"></div>
                           </div>
                        </div>
                    </article>
        </div> 

     </div>
    </div>
  </section>
 
 
 

  

<section id="about">
       <div class="container-fluid">
           <div class="row ">
               <div class="col-md-5 col-sm-12 col-xs-12 about-left   ">
                 <div class="row" >
                    <div class="col-md-12 col-xs-12">
                      <div class="about-left-text" style="max-width: 450px;     margin: 0px auto 0px;padding: 51px 0px 10px;">
                            <h1 class="quest-header" style="margin: 21px 1px 14px;">ABOUT</h1> 
                            <div style="width: 87px;height:3px;background-color:#fff;margin: 17px 1px 14px;">
                           </div>
                           <p class="quest-paragraph" style="font-size: 1.2em; margin-bottom: 49px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                               quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehe
                           </p><!-- quest-paragraph-->
                            
                           <div class="about-left-button">
                                 <a class="btn-default white">Learn More</a>
                     
                           </div> <!--about-left-button-->
                 
                       </div>  <!--about-left-text-->
                   </div> <!-- col-md-12-->
               </div>  <!--row-->
             </div> <!-- about-left -->
          

          <div class="col-md-7 col-sm-12  col-xs-12 about-img">
                   <div class="row row--about-image" >
            <div class="col-sm-6 col-md-3  facts one">
               <div id="icons"> 
							    <i class="fa fa-heart"></i>
                            </div>
                <div style="display:inline-block;    font-weight: 600;" class="counter" data-count="2000">1000  </div>  
                 <div class="about-text">
                   <p>STUDENTS</p>   
                  </div>  
                     
            </div>
         <div class="col-sm-6 col-md-3  facts one">
               <div id="icons"> 
							    <i class="fa fa-heart"></i>
                            </div>
                <div style="display:inline-block;    font-weight: 600;" class="counter" data-count="45">10  </div>  
                 <div class="about-text">
                    <p>EVENTS</p>   
                  </div>    
                     
            </div>
          
         <div class="col-sm-6 col-md-3  facts one">
               <div id="icons"> 
							    <i class="fa fa-heart"></i>
                            </div>
                <div style="display:inline-block;    font-weight: 600;" class="counter" data-count="190">50  </div>  
                <div class="about-text">
                    <p>LIFE SAVES</p>    
                  </div>    
                     
            </div>
         
          <div class="col-sm-6 col-md-3  facts one">
               <div id="icons"> 
							    <i class="fa fa-heart"></i>
                            </div>
                <div style="display:inline-block;    font-weight: 600;" class="counter" data-count="400">200  </div>  
                 <div class="about-text">
                   <p>DONATORS</p>    
                  </div>   
            </div>

                
               </div>
              
           </div>
       </div>
     </div>
</section>

<section id="services" style="padding: 60px 0px 100px;">
   <div class="container">
        <div class="row  ">
          <h1 class="quest-header"><?php echo $service_caption; ?> </h1> 
         <div class="horizontal-line">
									<hr>
         </div>
         <p class="quest-paragraph" style="max-width: 707px;
    margin: 0px auto;"><?php echo $service_description; ?>
         </p> 
      
            <div class="col-md-4">
               <div class="service-box wow fadeInDown animated"   >
                  <div class="service-icons"> 
				     <p><i class="<?php the_field('service_1_icon'); ?>"></i></p>
                  </div>
                  <h3 class="service-header"><?php echo $service_1_title; ?></h3>
                   <div class="service-line">
                           </div>
                  <p class="service-text" ><?php echo $service_1_description; ?>
                  </p>
               </div>
            </div>
            <div class="col-md-4">
               <div class="service-box wow fadeInDown animated"  >
                  <div class="service-icons"> 
				     <p><i class="<?php the_field('service_2_icon'); ?>" aria-hidden="true"></i></p>
                  </div>
                  <h3 class="service-header"><?php echo $service_2_title; ?></h3>
                   <div class="service-line">
                           </div>
                  <p class="service-text" ><?php echo $service_2_description; ?>
                  </p>
               </div>
            </div>
            <div class="col-md-4">
               <div class="service-box wow fadeInDown animated"   >
                  <div class="service-icons"> 
				     <p><i class="<?php the_field('service_3_icon'); ?>" aria-hidden="true"></i></p>
                  </div>
                  <h3 class="service-header"><?php echo $service_3_title; ?></h3>
                   <div class="service-line">
                           </div>
                  <p class="service-text" ><?php echo $service_3_description; ?>
                  </p>
               </div>
            </div>
            <div class="col-md-4">
               <div class="service-box wow fadeInDown animated"  >
                  <div class="service-icons"> 
				     <p><i class="<?php the_field('service_4_icon'); ?>" aria-hidden="true"></i></p>
                  </div>
                  <h3 class="service-header"><?php echo $service_4_title; ?></h3>
                   <div class="service-line">
                           </div>
                  <p class="service-text" ><?php echo $service_4_description; ?>
                  </p>
               </div>
            </div>
            <div class="col-md-4">
               <div class="service-box wow fadeInDown animated"  >
                  <div class="service-icons"> 
				     <p><i class="<?php the_field('service_5_icon'); ?>" aria-hidden="true"></i></p>
                  </div>
                  <h3 class="service-header"><?php echo $service_5_title; ?></h3>
                   <div class="service-line">
                           </div>
                  <p class="service-text" ><?php echo $service_5_description; ?>
                  </p>
               </div>
            </div>
            <div class="col-md-4">
               <div class="service-box wow fadeInDown animated" >
                  <div class="service-icons"> 
				     <p><i class="<?php the_field('service_6_icon'); ?>" aria-hidden="true"></i></p>
                  </div>
                  <h3 class="service-header"><?php echo $service_6_title; ?></h3>
                   <div class="service-line">
                           </div>
                  <p class="service-text"><?php echo $service_6_description; ?>
                  </p>
               </div>
            </div>
        </div> <!--row-->
   </div> <!--container-->
</section> <!--services-->

<section id="info" style="padding:60px 0px 80px">
  <div class="container-fluid">
      <div class="row">
          <div class="col-md-4 infos1 ">
                      <div class="info-inner">
                             <h3 class="service-header">HEALTH CARE</h3>
                            <div style="width: 87px;height:3px;background-color:#fff;margin: 18px 1px 14px;">
                           </div>
                           <p class="quest-paragraph" style="text-align:left">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                               quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                           </p><!-- quest-paragraph-->
                            
                           <div class="about-left-button">
                                 <a class="btn-default white">Learn More</a>
                     
                           </div> <!--about-left-button-->
                 
                       </div>  <!--info-inner-->
                   </div>
          <div class="col-md-4 infos2">
                      <div class="info-inner ">
                            <h3 class="service-header">BE A VOLUNTEER</h3>
                            <div style="width: 87px;height:3px;background-color:#fff;margin: 18px 1px 14px;">
                           </div>
                           <p class="quest-paragraph" style="text-align:left">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                               quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                           </p><!-- quest-paragraph-->
                            
                           <div class="about-left-button">
                                 <a class="btn-default white">REGISTER</a>
                     
                           </div> <!--about-left-button-->
                 
                       </div>  <!--info-inner-->
                   </div>
          <div class="col-md-4 infos3">
                      <div class="info-inner ">
                             <h3 class="service-header">DONATE FOR A EVENT</h3>
                            <div style="width: 87px;height:3px;background-color:#fff;margin: 18px 1px 14px;">
                           </div>
                           <p class="quest-paragraph" style="text-align:left">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                               quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                           </p><!-- quest-paragraph-->
                            
                           <div class="about-left-button">
                                 <a class="btn-default white">DONATE</a>
                     
                           </div> <!--about-left-button-->
                 
                       </div>  <!--info-inner-->
                   </div>
      </div> <!--row-->
  </div> <!--container-->
</section> <!--info-->



<section id="donars">
    <div class="container">
        <h1 class="quest-header"><?php echo $cofounder_section_title; ?></h1> 
         <div class="horizontal-line">
									<hr>
         </div>
         <p class="quest-paragraph" style="max-width: 950px;margin: 0 auto 50px;"><?php echo $cofounder_section_description; ?>
         </p> 

<div class="row">
   <div class="col-md-12 col-xs-12">
        <div id="owl-demo">
                  
               <?php $cofounder_loop = new WP_Query( array('post_type' => 'cofounders', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
               
               <?php while($cofounder_loop-> have_posts()) : $cofounder_loop->the_post(); ?>
                    <div class="item">
                                      <div class="item-container" >
                                          <p class="donation-num"></p>
                                            <figure class="team-member">
                                            <?php $cofounder_image= get_field('cofounder_image'); ?>
                                                
                                                <img src="<?php echo $cofounder_image['url']; ?>" alt="">
                                          
                                            <figcaption class="member-details text-center">
                                               <h5><?php the_title(); ?></h5>
                                                <p><?php the_field('cofounder_title'); ?></p>
                                            </figcaption>
                                        </figure>
                                     </div>
                   </div>
               <?php endwhile; ?>  
               
              
             
              
               
              
             
                 
                 
        </div>
      </div>

       <!--<div class="col-md-3 col-xs-12">
          <div class="item" style="margin-top: 54px;
    border: 1px solid blue;
    height: 337px;
    
    width: 100%;
    ">
              <h5 class="quest-header" style="margin-top: 87px;
    font-size: 1.4em;ext-align: center;
    margin-bottom: -10px;">BE A DONATOR</h5> 
              <div class="horizontal-line">
									<hr>
                </div>
               <p style="text-align: center;
    font-size: 1.2em;
    max-width: 241px;
    margin: auto;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt
               </p>
               <div class="donate-button" style="padding: 29px 0px;text-align:center">
                <a class="btn-default blue" style="padding: 12px 33px;">DONATE</a> 
               </div>          
          </div>
       </div>-->
    </div>
  </div>
</section>

<section id="students" style="padding:30px 0px 170px">
        <div class="container">
            <h1 class="quest-header"><?php echo $student_section_title; ?></h1> 
         <div class="horizontal-line">
									<hr>
         </div>
         <p class="quest-paragraph" style="max-width: 750px;margin: 0 auto 50px;"><?php echo $student_section_description; ?></p> 
           <div class="row no-gutters">
               <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 student">
                  <div class="student-item">
                  <p class="student-name" >MOHAMMAD JASIM</p>
                  <figure class="student-img">
                     <img src="<?php bloginfo('template_directory');?>/img/Mohammad Jasim.jpg" alt="">
                  </figure>
                <div class="student-details" style="">  
                   <p  style="font-size:14px;letter-spacing:0px">Jasim was supposed to beg in the streets before joining our school. 
                        Now he reads in class 1 at our Begunbari Section. He dreams of being a cricketer like Shakib al hasan
                    </p>
                 </div>
                </div>     
               </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 student">
                  <div class="student-item">
                  <p class="student-name" >SADIA AKTER</p>
                  <figure class="student-img">
                     <img src="<?php bloginfo('template_directory');?>/img/Sadia Akter.jpg" alt="">
                  </figure>
                <div class="student-details" style="">  
                   <p  style="font-size:14px;letter-spacing:0px;margin-top:-23px">Sadia lost her mom when she was a baby. Her grand mom could barely afford for her school.
                    Now she is at class 1 at our Begunbari branch, one of the most attentive girl in the class. She wants to be a teacher
                    </p>
                 </div>
                </div>     
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 student">
                  <div class="student-item">
                  <p class="student-name" >MOHAMMAD JASIM</p>
                  <figure class="student-img">
                     <img src="<?php bloginfo('template_directory');?>/img/Rajon Islam.jpg" alt="">
                  </figure>
                <div class="student-details" style="">  
                   <p  style="font-size:14px;letter-spacing:0px">Rajon is one of the brightest student of our school,
                     reading in class 1, at Railstation branch once worked in his father’s teashop, He wants to be a car engineer in future. 
                    </p>
                 </div>
                </div>     
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 student">
                  <div class="student-item">
                  <p class="student-name" >SOMA</p>
                  <figure class="student-img">
                     <img src="<?php bloginfo('template_directory');?>/img/Soma.jpg" alt="">
                  </figure>
                <div class="student-details" style="">  
                   <p  style="font-size:14px;letter-spacing:0px;margin-top:-23px">Soma was supposed to work in the garment factory, for being an extra supporting hand to her family.
                      But now she studies at class 3 at our railstaion branch. She dreams of being an officer in future
                    </p>
                 </div>
                </div>     
               </div>

          </div>
      </div>
  </section>



<section id="Sponsors" style="background:#eae9e8;padding:80px 0px 80px">
    <div class="container wow fadeIn">
        <h1 class="quest-header">SPONSORS</h1> 
         <div class="horizontal-line">
									<hr>
         </div>
         <p class="quest-paragraph" style="margin-bottom:0px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br>
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
         </p> 
      
          <div class="row text-center wow fadeInDown">
                  <aside class="col-md-3 col-sm-3 col-xs-12  sponsor wow tada" >
                      <img  src="<?php bloginfo('template_directory');?>/img/sponsor1.png" alt="">
                  </aside>
                   <aside class="col-md-3 col-sm-3 col-xs-12  sponsor wow tada" >
                      <img src="<?php bloginfo('template_directory');?>/img/sponsor2.png" alt="">
                  </aside>
                   <aside class="col-md-3 col-sm-3 col-xs-12  sponsor wow tada" >
                      <img  src="<?php bloginfo('template_directory');?>/img/sponsor3.png" alt="">
                   </aside>
                   <aside class="col-md-3 col-sm-3 col-xs-12  sponsor wow tada" >
                      <img src="<?php bloginfo('template_directory');?>/img/sponsor4.png" style="width:160px;height:52px" alt="">
                  </aside>
         
         
                    <aside class="col-md-3 col-sm-3 col-xs-12  sponsor wow tada" >
                      <img  src="<?php bloginfo('template_directory');?>/img/sponsor5.png" alt="">
                   </aside>
                   <aside class="col-md-3 col-sm-3 col-xs-12  sponsor wow tada" >
                      <img  src="<?php bloginfo('template_directory');?>/img/sponsor6.png" alt="">
                   </aside>
                    <aside class="col-md-3 col-sm-3 col-xs-12  sponsor wow tada" >
                      <img  src="<?php bloginfo('template_directory');?>/img/sponsor7.png" alt="">
                    </aside>
                    <aside class="col-md-3 col-sm-3 col-xs-12  sponsor wow tada" >
                      <img  src="<?php bloginfo('template_directory');?>/img/sponsor8.png" alt="">
                    </aside>

       </div>
  </div>
</section>

<?php

get_footer(); ?>
