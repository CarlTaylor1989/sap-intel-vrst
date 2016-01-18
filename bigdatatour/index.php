<?php
    $page = 'data-tour';

    include '../backend/headerandfooter.php';
    
    $headerandfooter = new HeaderAndFooter;
    
    echo $headerandfooter->getPageHeader($page);
    
    echo $headerandfooter->getMenuSystem($page);
?>
    <div class="content">
        <div class="view-home">
            <div class="big-data-tour container">
                <div class="row">
                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <h1 class="title">SAP <span>BIG DATA TOUR</span><br />2014</h1>
                        <div class="tour-divider">
                            <div class="data-divider"></div>
                        </div>
                        <p class="intro-text">The SAP Big Data Tour 2014 is travelling across Europe and 
                            it's a space where ideas are generated and shared. We will demonstrate how to 
                            harness the potential of Big Data to innovate business, simplify work, and help 
                            to attract new clients and increase profits.</p>
                        <div class="latest-posts hidden-xs">
                            <div class="van-img"></div>
                            <div class="latest-posts-title">
                                <div class="row border">
                                    <div class="col-sm-6 remove-left"><p>Latest Posts</p></div>
                                    <div class="col-sm-6 remove-right"><p class="pull-right">
                                    Click on a <span class="fa fa-map-marker"></span> to view</p></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div id="post-content"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="latest-posts-corner hidden-xs"></div>
                    </div>
                   <div class="row visible-xs">
                        <div class="hidden-lg hidden-md hidden-sm col-xs-12 remove-right">
                            <div class="mobile-map pull-right"></div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-7 hidden-xs">
                        <div id="map">
                            <div class="finish"></div>
                            <div id="all-markers"></div>
                        </div>
                    </div>
                    <div class="col-md-4 hidden-sm hidden-xs remove-right above-map">
                        <?php include('../backend/tour-dates.php'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="hidden-lg hidden-md col-sm-12 col-xs-12 remove-right remove-left">
                        <?php include('../backend/tour-dates.php'); ?>
                    </div>
                </div>
            </div>

            <div class="welcome big-data-welcome">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 text remove-left">
                            <h2>SAP Big Data Virtual Tour</h2>
                            <p>If you can’t catch the truck, we’ll come to you!</p>
                            <p>The SAP Big Data Tour 2014 is travelling across Europe, helping people share ideas on 
                            how to get real benefits from Big Data. But don’t worry if you can’t come and meet us – 
                            we’ll do the show right here! Watch our demos and download documents and videos that show 
                            how Big Data can transform businesses, simplify processes and create new revenue streams.</p>
                            <p>Plus, register now for our week of free online Big Data shows from 6th – 10th October.</p>
                            <a href="../bigdataweek" class="btn btn-lg btn-primary">Register &raquo;</a>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12 remove-left remove-right">
                            <div class="virtual-tour hidden-xs hidden-sm pull-right">
                                <div class="vid-icons">
                                    <a href="" data-toggle="modal" data-target="#videoModal" data-video="//www.youtube.com/embed/l8zuuRxMiIk" id="vid-icon-1" class="icon-vid"></a>
                                    <div class="vid-det-1">
                                       <h4>Big Data Analysis in Football with SAP HANA</h4>
                                       <p></p>
                                    </div>
                                    <a href="" data-toggle="modal" data-target="#videoModal" data-video="//www.youtube.com/embed/Uu_ZCwfl4iA" id="vid-icon-2" class="icon-vid"></a>
                                    <div class="vid-det-2">
                                       <h4>Future of Mobility: SAP Connected Cars</h4>
                                       <p></p>                                          
                                    </div>
                                    <a href="" data-toggle="modal" data-target="#videoModal" data-video="//www.youtube.com/embed/1glyGm_OoeM" id="vid-icon-3" class="icon-vid"></a>
                                    <div class="vid-det-3">
                                       <h4>Personalized Shopping Experience with SAP HANA</h4>
                                       <p></p>                                          
                                    </div>
                                </div>
                            </div>
                            
                            <div class="virtual-tour-mob visible-sm visible-xs">
                                <div class="vid-icons">
                                    <div class="vid-det-1 vid-cont">
                                        <a href="" data-toggle="modal" data-target="#videoModal" data-video="//www.youtube.com/embed/l8zuuRxMiIk?rel=0" id="vid-icon-4" class="icon-vid">
                                          <img src="../content/img/play-video.png" alt="Big Data Analysis in Football with SAP HANA" />
                                        </a>
                                        <h4>Big Data Analysis in Football with SAP HANA</h4>
                                        <p class="hidden-xs"></p>
                                        <div class="clearfix"></div>
                                    </div>                                            
                                    <div class="vid-det-2 vid-cont">
                                        <a href="" data-toggle="modal" data-target="#videoModal" data-video="//www.youtube.com/embed/Uu_ZCwfl4iA?rel=0" id="vid-icon-5" class="icon-vid">
                                          <img src="../content/img/play-video.png" alt="Future of Mobility: SAP Connected Cars" />
                                          </a>
                                       <h4>Future of Mobility: SAP Connected Cars</h4>
                                       <p class="hidden-xs"></p>
                                       <div class="clearfix"></div>                                           
                                    </div>                                            
                                    <div class="vid-det-3 vid-cont">
                                        <a href="" data-toggle="modal" data-target="#videoModal" data-video="//www.youtube.com/embed/1glyGm_OoeM?rel=0" id="vid-icon-6" class="icon-vid">
                                          <img src="../content/img/play-video.png" alt="Personalized Shopping Experience with SAP HANA" />
                                        </a>
                                        <h4>Personalized Shopping Experience with SAP HANA</h4>
                                        <p class="hidden-xs"></p>
                                        <div class="clearfix"></div>                                           
                                    </div>
                                </div>
                            </div>                                    
                        </div>
                    </div>
                </div>
            </div>
            <div class="hotspot container hidden-xs">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="hotspot-icons">
                            <a href="" data-target="#carousel-example-generic" data-slide-to="0" id="hot-icon-1" class="icon-hot"></a>
                            <a href="" data-target="#carousel-example-generic" data-slide-to="1" id="hot-icon-2" class="icon-hot"></a>
                            <a href="" data-target="#carousel-example-generic" data-slide-to="2" id="hot-icon-3" class="icon-hot"></a>
                            <a href="" data-target="#carousel-example-generic" data-slide-to="3" id="hot-icon-4" class="icon-hot"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="download-assets container">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <h2>Download Assets</h2>
                        <p class="hidden-sm visible-xs">Click to download an asset</p>
                    </div>
                    <div class="col-sm-6 hidden-xs">
                        <p class="pull-right">Click to download an asset</p>
                    </div>
                </div>
            </div>
            <div class="assets container">
                <div class="row">
                    <div class="col-sm-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="row text-center">
                                        <div class="col-sm-1"></div>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <h3>Top 10 Reasons to Choose SAP HANA</h3>
                                                    <p>Discover the top 10 reasons why customers choose SAP HANA to 
                                                    help transform their business.</p>
                                                    <a href="../content/assets/Top10ReasonsToChooseHANA.pdf" 
                                                    class="btn btn-md btn-primary" target="_blank">Download PDF &raquo;</a>
                                                </div>
                                                <div class="col-sm-4">
                                                    <h3>SAP HANA for Next-Generation Business Applications and 
                                                    Real-Time Analytics</h3>
                                                    <p>See how SAP HANA helps you analyze vast quantities of data 
                                                    from virtually any source in real time.</p>
                                                    <a href="../content/assets/SAP HANAÔäó for Next-Generation Business Applications and Real-Time Analytics.pdf" class="btn btn-md btn-primary" target="_blank">Download PDF &raquo;</a>
                                                </div>
                                                <div class="col-sm-4">
                                                    <h3>IT Simplification Within the SAP HANA Platform</h3>
                                                    <p>See how in-memory technology can help you simplify your IT and get 
                                                    more value from Big Data.</p>
                                                    <a href="../content/assets/IT Simplification with the SAP HANA-« Platform Infographic.pdf" class="btn btn-md btn-primary" target="_blank">Download PDF &raquo;</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1"></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row text-center">
                                        <div class="col-sm-1"></div>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <h3>Getting Value from Big Data: Focus on the Opportunities, 
                                                    not the Obstacles</h3>
                                                    <p>Exploit Big Data for competitive edge by focusing on capabilities 
                                                    that can transform your business.</p>
                                                    <a href="../content/assets/getting-value-from-big-data-focus-on-the-opportunities-not-the-obstacles (1).pdf" target="_blank" class="btn btn-md btn-primary">Download PDF &raquo;</a>
                                                </div>
                                                <div class="col-sm-4">
                                                    <h3>Getting Value from Big Data: A Practical Six-Step Guide</h3>
                                                    <p>Avoid the roadblocks with our six-step guide to turning 
                                                    insights from Big Data into tangible results.</p>
                                                    <a href="../content/assets/getting-value-from-big-data-a-practical-six-step-guide.pdf" class="btn btn-md btn-primary" target="_blank">Download PDF &raquo;</a>
                                                </div>
                                                <div class="col-sm-4">
                                                    <h3>SAP Makes Big Data Real</h3>
                                                    <p>See how McLaren, Burberry and eBay use Big Data to transform 
                                                    customer experience.</p>
                                                    <a href="../content/assets/sap-makes-big-data-real-real-time-real-results.pdf" class="btn btn-md btn-primary" target="_blank">Download PDF &raquo;</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1"></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row text-center">
                                        <div class="col-sm-1"></div>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <h3>Unlock the Power of Big Data</h3>
                                                    <p>Explore how Big Data insights help to optimize processes and 
                                                    develop new business models.</p>
                                                    <a href="../content/assets/Unlock the power of Big Data.pdf" class="btn btn-md btn-primary" target="_blank">Download PDF &raquo;</a>
                                                </div>
                                                <div class="col-sm-4">
                                                    <h3>Big Data: Expectations, Obstacles and the Road to Greater 
                                                    Value (infographic)</h3>
                                                    <p>Download research from The Economist Intelligence Unit into 
                                                    Big Data obstacles and opportunities.</p>
                                                    <a href="../content/assets/Economist Big Data Expectations, Obstacles and Road to Greater Value.pdf" target="_blank" class="btn btn-md btn-primary">Download PDF &raquo;</a>
                                                </div>
                                                <div class="col-sm-4">
                                                    <h3>MIT Report: Big Data Gets Personal</h3>
                                                    <p>Get MIT's Report how merging Big Data and personal data can 
                                                    change the way we work, live, and play.</p>
                                                    <a href="../content/assets/MIT Report Big Data Gets Personal.pdf" target="_blank" class="btn btn-md btn-primary">Download PDF &raquo;</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1"></div>
                                    </div>
                                </div>     
                                <div class="item">
                                    <div class="row text-center">
                                        <div class="col-sm-1"></div>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <h3>SAP HANA Essentials: Introduction to SAP Big Data Technologies</h3>
                                                    <p>Read this SAP HANA eBook excerpt on how to make Big Data real 
                                                    and who's making best use of it.</p>
                                                    <a href="../content/assets/SAP_HANA_Essentials_excerpt_Prf2.pdf" target="_blank" class="btn btn-md btn-primary">Download PDF &raquo;</a>
                                                </div>
                                                <div class="col-sm-4">
                                                    <h3>Vodafone Uses Big Data to Keep Customers Happy</h3>
                                                    <p>Analytics consultant Viliah Overwater explains how Vodafone predicts potential customer churn.</p>
                                                    <a href="" data-toggle="modal" data-target="#videoModal" data-video="https://www.youtube.com/embed/fEQ6DEKOAOU" class="btn btn-md btn-primary">Watch Video &raquo;</a>
                                                </div>
                                                <div class="col-sm-4">
                                                    <h3>Weissbeerger Brings Big Data and Beer Together</h3>
                                                    <p>Discover how real-time data monitoring helps beer company Weissbeerger serve customers better.</p>
                                                    <a href="" data-toggle="modal" data-target="#videoModal" data-video="https://www.youtube.com/embed/UmKcW4BpDtI" class="btn btn-md btn-primary">Watch Video &raquo;</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1"></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row text-center">
                                        <div class="col-sm-1"></div>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <h3>Aviva Makes the Most of Predictive Analytics</h3>
                                                    <p>Learn how the insurer Aviva uses analytics to improve response rates and drive new revenues.</p>
                                                    <a href="" data-toggle="modal" data-target="#videoModal" data-video="https://www.youtube.com/embed/AAmthsKE-64" class="btn btn-md btn-primary">Watch Video &raquo;</a>
                                                </div>
                                                <div class="col-sm-4"></div>
                                                <div class="col-sm-4"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1"></div>
                                    </div>
                                </div>
                            </div>

                            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                <img src="../content/img/assets-left.png" alt="">
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                <img src="../content/img/assets-right.png" alt="">
                            </a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="welcome testimonial">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7 col-xs-12">
                            <div id="disqus_thread"></div>
                            <script type="text/javascript">
                                /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
                                var disqus_shortname = 'sapbigdatavirtualtour'; // required: replace example with your forum shortname
                        
                                /* * * DON'T EDIT BELOW THIS LINE * * */
                                (function() {
                                    var dsq = document.createElement('script'); dsq.type = 'text/javascript'; 
                                    dsq.async = true;
                                    dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                                    (document.getElementsByTagName('head')[0] || 
                                    document.getElementsByTagName('body')[0]).appendChild(dsq);
                                })();
                            </script>
                            <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments.</a></noscript>
                        </div>
                        <div class="col-sm-5 col-xs-12">
                            <h4>Testimonials</h4>
                            <p class="quote">"To remain competitive, organizations require the ability to harness 
                            real-time transactional data to make faster and more informed business decisions. As 
                            long-time partners, HP and SAP are working together to remove process layers, while 
                            reshaping technology to help our clients accelerate innovation."</p>
                            <p class="author">Paul Miller <span>Vice President Converged Application Systems, 
                            Enterprise Group, HP</span></p>
                            <p class="quote">"SAP HANA is an innovation engine that transforms all facets of business — 
                            from speeding up existing applications and processes to inspiring applications and 
                            processes not available (or even imagined) today. We’ve only just begun to scratch 
                            the surface of SAP HANA’s full potential."</p>
                            <p class="author">Elliott Garofalo <span>Senior Vice President, Emerging Markets, 
                            Optimal Solutions Integration</span></p>
                            <p class="quote">"Our high-performing chemical-compliance determination engine 
                            powered by SAP HANA and built in collaboration with SAP Custom Development and SAP 
                            Consulting is critical to our business and solidifies our position as the leading 
                            innovator in our industry."</p>
                            <p class="author">Yves Courbot <span>Compliance and EHS Portfolio Manager – IT Demand, 
                            Givaudan SA</span></p>
                            <p class="quote">"SAP technology added a new dimension to our business – we can now 
                            report on any data our executives need within minutes."</p>
                            <p class="author">Bojan Sovilj <span>Research and Development Manager, Mozzart</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="push"></div>
</div>
<?php echo $headerandfooter->getFooter(); ?>