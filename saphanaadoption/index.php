<?php
  $page = 'sap-hana';

	include('../backend/headerandfooter.php');
	
	$headerandfooter = new HeaderAndFooter;
	
	echo $headerandfooter->getPageHeader($page);
	
	echo $headerandfooter->getMenuSystem($page);
?>


  <div id="wrapper">
      <div id="main">
          <div id="header">
              <div id="header-info">
                  <div class="col-xs-8">
                      <div id="header-info-text">
                          <h1>The Road to Success with SAP HANA</h1>
                          <p>Now that you have SAP HANA, you’ll want to 
                             maximize its potential. If you’re not sure how,
                             take a look at our fantastic webinar series. 
                             We’ll explore how you can implement SAP HANA 
                             successfully and share some real-life examples 
                             of how other organizations are doing it. We 
                             also have some great resources available,
                             including a step-by-step guide, a blog trilogy,
                             and a video interview with the VP of Strategic
                             Initiatives at SAP. </p>
                      </div>
                  </div>
                  <div class="col-xs-4"><img src="../content/img/saphana/map.jpg" alt="Map to exhibition"/></div>
                  <div class="clear"></div>
              </div>
              
          </div>
          <div id="registration">
                  <div class="col-xs-3">
                      <a href="http://w.on24.com/r.htm?e=836794&s=1&k=86004CCDC4759F452D0B2BE66F65671A&partnerref=TY"><img src="../content/img/saphana/start.png" alt="start"/></a>
                      <p class="webinar"><strong>Webinar 1</strong>: The Road to Success with SAP HANA: Get 
                          Started <strong>September 10</strong></p>
                      <p class="main-info">
                      Join Tom Kurtz, VP of Strategic Initiatives at SAP, 
                      and identify where your business can use SAP HANA. 
                      You’ll also learn about development and find out how 
                      to create a roadmap for deployment. 
                      </p>
                      <a href="http://w.on24.com/r.htm?e=836794&s=1&k=86004CCDC4759F452D0B2BE66F65671A&partnerref=TY" class="btn btn-default navbar-btn">Watch now »</a>
                  </div>
                  <div class="col-xs-3" id="chart-center">
                      <a href="http://w.on24.com/r.htm?e=836821&s=1&k=D622ADBA3380F1895EC62C1F01BC9ACC&partnerref=TY"><img src="../content/img/saphana/chart.png" alt="chart"/></a>
                    <p class="webinar"><strong>Webinar 2</strong>: The Road 
                        to Success with SAP HANA: Learn From Your Peers - 
                          <strong>September 17</strong></p>
                      <p class="main-info">
                      Join SAP customer, Unilever, and find out how SAP HANA 
                      is helping the company achieve its goals of operating faster 
                      and more efficiently, than ever before. 
                      </p>
                       <a href="http://w.on24.com/r.htm?e=836821&s=1&k=D622ADBA3380F1895EC62C1F01BC9ACC&partnerref=TY" class="btn btn-default navbar-btn">Watch now »</a>
                  </div>
                   <div class="col-xs-3">
                       <a href="http://w.on24.com/r.htm?e=836824&s=1&k=11CFDC1AB6A68C5ABD2F1E5E4F993A5B&partnerref=TY"><img src="../content/img/saphana/road.png" alt="road to success"/></a>
                   <p class="webinar"><strong>Webinar 3</strong>: The Road 
                       to Success with SAP HANA: Ask for Directions
                          <strong>September 24</strong></p>
                      <p class="main-info">
                      After webinars one and two, we’re sure you’ll have plenty
                      of questions for our panel of SAP HANA experts. 
                      Now it’s time to put them on the spot. 
                      </p>
                      <a href="http://w.on24.com/r.htm?e=836824&s=1&k=11CFDC1AB6A68C5ABD2F1E5E4F993A5B&partnerref=TY" class="btn btn-default navbar-btn">Watch now »</a>
                  </div>
                  
                  <div class="col-xs-12">
                      Watch all three webinars and discover how to 
                      unlock the full potential of SAP HANA.


                  </div>
              <div class="clear"></div>
              </div>
          <div id="resources">
              <div class="col-xs-3">
                  <a href="http://www.sapserviceshub.com/h/i/6255103-sap-hana-journey"><img src="../content/img/saphana/image1.jpg"/></a>
                  <h3>SAP HANA Journey Flipbook: <br>A Comprehensive Guide</h3>
                  <p>
                      Read our step-by-step guide and discover how to 
                      evaluate your business situation, develop a roadmap, 
                      implement a plan, and assess technical design 
                      components. 
                  </p>
              </div>
              <div class="col-xs-3" id="center-resource">
                  <img src="../content/img/saphana/image2.jpg"/>
                  <h3>SAP HANA Journey blog trilogy:<br> A Deeper Insight</h3>
                  <p>
                     For a more personal and detailed breakdown of SAP HANA, 
                     take a look at our blog trilogy – featuring guest bloggers, 
                     Tom Kurtz and Boris Andree.
                  </p>
                  <p class="resources-links">
                      Part 1: <a href="http://w.on24.com/r.htm?e=836794&s=1&k=86004CCDC4759F452D0B2BE66F65671A&partnerref=TY">Determining when SAP HANA is right for you</a><br>
                      Part 2: <a href="http://w.on24.com/r.htm?e=836821&s=1&k=D622ADBA3380F1895EC62C1F01BC9ACC&partnerref=TY">How to get started with SAP HANA</a><br>
                      Part 3: <a href="http://w.on24.com/r.htm?e=836824&s=1&k=11CFDC1AB6A68C5ABD2F1E5E4F993A5B&partnerref=TY">What are my deployment options?</a>

                  </p>
              </div>
              <div class="col-xs-3">
                  <a href="" data-toggle="modal" data-target="#videoModal" data-video="//www.youtube.com/embed/kLSmFXbTRa4" id="vid-icon-1" class="icon-vid"><img src="../content/img/saphana/image3.jpg"/></a>
                  <h3>Discover what SAP HANA can do <br>for you </h3>
                  <p>
                     Watch our interview with Tom Kurtz, VP of Strategic 
                     Initiatives at SAP, and discover the business value 
                     of SAP HANA – what it can bring to your organisation 
                     and how it can impact technical decisions.
                  </p>
              </div>
              <div class="clear"></div>
          </div>
          <div id="mentors">
              <div class="row">
                  <div class="col-xs-12">
                      <h3>Mentors</h3>
                  </div>
              </div>
              <div class="row">
                  <div class="col-xs-12">
                      <p>If you have any questions regarding SAP HANA, please 
                  get in touch with one of our SAP experts. Our mentors 
                  are always on hand to give you the support you need. </p>
                  </div>
              </div>
              <div class="row">
                  <div class="col-xs-3">
                      <img src="../content/img/saphana/stephan.png" alt="Stephan"/>
                      <b>Stephan Müller</b><br>
                      Senior SAP HANA Solution Architect
                      <p class="mentor-text">
                         Stephan works within the SAP HANA Center of Excellence. 
                         He helps customers to identify use cases, plan and set up 
                         projects and infrastructures, and safeguard implementation 
                         projects.
                      </p>
                      <a href="mailto:stephan@sapresponses.com?subject=Questions%20about%20SAP%20HANA" class="btn btn-default navbar-btn">Get in touch »</a>
                  </div>
                  <div class="col-xs-3" id="center-resources">
                      <img src="../content/img/saphana/raj.png" alt="Raj">
                      <b>Raja Agrawal</b><br>
                      Senior Business Development Expert
                      <p class="mentor-text">
                          Raja is responsible for initiatives that promote 
                          SAP HANA and Big Data, within the Center of Excellence. 
                          He also focusses on deal progression within the 
                          EMEA SWAT team.
                      </p>
                       <a href="mailto:raja@sapresponses.com?subject=Questions%20about%20SAP%20HANA" class="btn btn-default navbar-btn">Get in touch »</a>
                  </div>
                  <div class="col-xs-3">
                        <img src="../content/img/saphana/michael.png" alt="Michael"/>
                        <b>Michael Eaton</b><br>
                        Principal Technical Consultant 
                        <p class="mentor-text">
                          Michael has over 20 years’ experience in software 
                          engineering, ETL, and database technology. His 
                          role involves creating custom SAP HANA solutions 
                          for customers.  
                      </p>
                       <a href="mailto:michael@sapresponses.com?subject=Questions%20about%20SAP%20HANA" class="btn btn-default navbar-btn">Get in touch »</a>
                  </div>
              </div>
          </div>
          <div class="clear"></div>
      </div>
<?php 

	echo $headerandfooter->getFooter();

?>