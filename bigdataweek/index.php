<?php
    $page = 'data-week';

	include '../backend/headerandfooter.php';
	
	$headerandfooter = new HeaderAndFooter;
	
	echo $headerandfooter->getPageHeader($page);
	
	echo $headerandfooter->getMenuSystem($page);
?>

           <div class="content">
                <div class="view-home">
                    <div class="big-data-week container week-banner">
                        <h1 class="title">Big Data Week</h1>
                        <div class="link">
                            <span>6<sup>th</sup>-10<sup>th</sup> October 2014</span>
                            <a href="#register_form">Register Now &#187;</a>
                            <div class="arrow"></div>
                        </div>
                    </div>

                    <div class="welcome">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-7 text">
                                    <h2>Welcome</h2>
                                    <p><strong>Built on a decade's experience of delivering SAP solutions on Intel platforms, 
                                    SAP and Intel bring you BIG DATA WEEK – featuring the insights, opportunities and 
                                    latest thinking around Big Data.</strong></p>
                                    <p><strong>Join us for five shows hosted by tech journalist and broadcaster, David McClelland. 
                                    In 20 minutes,</strong> these easy-to-digest shows will open your eyes to the limitless 
                                    possibilities hidden within Big Data. You'll gain insights that could benefit you and your 
                                    IT teams. And get new ideas on how to add even greater value to the innovations happening 
                                    in your business and our customer-centric world.</p>
                                    <p>The shows will go beyond the conventional business webinar to help you discover:</p>
                                    <ul>
                                        <li>The latest research from IDC, industry best practices and real-world applications of Big Data</li>
                                        <li>Real and relevant case studies from Colgate-Palmolive, Unilever, Intel, SAP and more</li>
                                        <li>Insights from trusted experts and industry leaders</li>
                                        <li>The power of SAP HANA in-memory computing and advanced analytics.</li>
                                    </ul>
                                    <p>It could be the most thought-provoking 20 minutes of your day, your week and your career! So don't miss out and register today.</p>
                                    <a href="#register_form">Yes, I want to make Big Data real in 20 minutes &#187;</a>
                                </div>
                                <div class="col-sm-5 video">
                                    <div class="video-thumb">
                                        <div class="video-thumb-title">What is Big Data?</div>
                                        <div class="video-thumb-play-btn"></div>
                                    </div>
                                    <div class="video-info">
                                        <div class="video-info-title">Ask the experts</div>
                                        <div class="video-info-content">Put forward questions to our experts in our live chat during and after each BIG DATA WEEK show.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="meet-carl container">
                        <div class="meet-carl-top-image">
                            <div class="meet-carl-top-image-stripe"></div>
                        </div>
                        <div class="meet-carl-text">
                            <h3>Meet Carl...</h3>
                            <p>Haven’t had a chance to jump on the Big Data Truck which is zig-zagging across Europe on the SAP BIG DATA TOUR?</p>
                            <p>Carl, our Big Data Truck driver, will be sharing the surprising things he's learnt and stories he's heard on the journey. Watch him discover that SAP played a part in Germany's football victory in Brazil, how Big Data can reduce flight delays, and how social media has become part of his daily life.</p>
                            <p><a href="../bigdatatour"><strong>Track the SAP BIG DATA TOUR &#187;</strong></a></p>
                        </div>
                        <img class="meet-carl-poster" src="../content/img/meet-carl-poster.jpg" alt="Meet Carl" />
                    </div>

                    <div class="our-shows visible-lg visible-md">
                        <div class="container">
                            <!-- Nav tabs -->
                            <div class="col-sm-12">
                                <h4>Our shows</h4>

                                <p>Discover more about our experts and the topics for each BIG DATA WEEK show.<br /><br /></p>

                                <div class="col-sm-1"></div>
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="active col-sm-2" id="no1">
                                        <a href="#061014" role="tab" data-toggle="tab">Monday<br /><span>6</span><sup>th</sup><br />October</a>
                                        <div class="mon"><img src="../content/img/botarr.jpg" alt="bottom arrow" class="img-responsive" /></div>
                                        <div class="moff"><img src="../content/img/botblank.jpg" alt="bottom arrow" class="img-responsive" /></div>
                                    </li>
                                    <li class="col-sm-2" id="no2">
                                        <a href="#071014" role="tab" data-toggle="tab">Tuesday<br /><span>7</span><sup>th</sup><br />October</a>
                                        <div class="ton"><img src="../content/img/botarr.jpg" alt="bottom arrow" class="img-responsive" /></div>
                                        <div class="toff"><img src="../content/img/botblank.jpg" alt="bottom arrow" class="img-responsive" /></div>
                                    </li>
                                    <li class="col-sm-2" id="no3">
                                        <a href="#081014" role="tab" data-toggle="tab">Wednesday<br /><span>8</span><sup>th</sup><br />October</a>
                                        <div class="won"><img src="../content/img/botarr.jpg" alt="bottom arrow" class="img-responsive" /></div>
                                        <div class="woff"><img src="../content/img/botblank.jpg" alt="bottom arrow" class="img-responsive" /></div>
                                    </li>
                                    <li class="col-sm-2" id="no4">
                                        <a href="#091014" role="tab" data-toggle="tab">Thursday<br /><span>9</span><sup>th</sup><br />October</a>
                                        <div class="thon"><img src="../content/img/botarr.jpg" alt="bottom arrow" class="img-responsive" /></div>
                                        <div class="thoff"><img src="../content/img/botblank.jpg" alt="bottom arrow" class="img-responsive" /></div>
                                    </li>
                                    <li class="col-sm-2" id="no5">
                                        <a href="#101014" role="tab" data-toggle="tab">Friday<br /><span>10</span><sup>th</sup><br />October</a>
                                        <div class="fon"><img src="../content/img/botarr.jpg" alt="bottom arrow" class="img-responsive" /></div>
                                        <div class="foff"><img src="../content/img/botblank.jpg" alt="bottom arrow" class="img-responsive" /></div>
                                    </li>
                                </ul>
                                <div class="col-sm-1"></div>
                            </div>

                            <!-- Tab panes -->
                            <div class="col-sm-12">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-10 greybg">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="061014">
                                            <div class="col-sm-7 speakertext">
                                                <h4>
                                                    How to Drive Innovation: <br />
                                                    Big Data and Analytics
                                                </h4>
                                                <h5>Alys Woodward<br />Research Director, IDC</h5>
                                                <p>
                                                    Based on IDC’s latest report, Alys will be sharing best practices from companies at the forefront of
                                                    Big Data and analytics. Along with research-based insights, she’ll be sharing her knowledge of
                                                    advanced analytics and social business, plus the different ways that CIOs and IT departments are
                                                    driving innovation.
                                                </p>
                                                <p><a href="" class="btn btn-lg btn-primary" id="showDetails">Speaker Biography +</a></p>
                                                <div id="speakerbio">
                                                    <p><strong>Alys Woodward's Biography</strong></p>
                                                    <p>
                                                        Alys Woodward is a Research Director and Technology Analyst at IDC. Her key areas of responsibility
                                                        are European Big Data & Analytics, European Social Business and Worldwide Advanced Analytics. Her 20
                                                        years' expertise spans software, services, hardware, and device research. A key focus for her role at
                                                        IDC is helping analysts collaborate on themes relating to Big Data and social business.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <img src="../content/img/alyswoodward.jpg" alt="Alys Woodward" class="speaker img-responsive" />                                                
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="071014">
                                            <div class="col-sm-7 speakertext">
                                                <h4>Grow and Transform with Big Data and Analytics</h4>
                                                <h5>Ed Toben<br />Former SVP and CIO, Colgate-Palmolive</h5>
                                                <p>
                                                    Ed will be talking about his extensive global experience of managing IT and 
                                                    finance functions at Colgate-Palmolive. He'll explain how implementing SAP 
                                                    HANA and Intel processor technologies worldwide resulted in a surge of 
                                                    analytical information. And how business intelligence uncovered Big Data 
                                                    insights that helped to transform operations, processes and strategy.
                                                </p>
                                                <h4>Beyond ERP: Implementing the Real-Time, Digital Enterprise to Drive Profitable Growth</h4>
                                                <h5>Marc Béchet<br />Vice President Global IT ERP, Unilever</h5>
                                                <p>Unilever is driving sustainable, profitable growth while reducing environmental 
                                                impact. Marc will reflect on this bold transformation and growth program, including 
                                                the value of managing ERP as one global platform. Plus, how SAP HANA and Intel 
                                                processor technologies jointly help Unilever get more value from ERP and Big Data, 
                                                which is crucial considering the scale driven by two billion consumers using Unilever 
                                                products on any given day.</p>
                                                
                                                <p><a href class="btn btn-lg btn-primary" id="showDetails2">Speaker Biographies +</a></p>
                                                <div id="speakerbio2">
                                                    <p><strong>Ed Toben's Biography</strong></p>
                                                    <p>
                                                        In a 20-year career at Colgate-Palmolive, Ed Toben became Senior Vice President of
                                                        Global Information Technology and Business Services. As the Global CIO, he led global
                                                        SAP implementations in 107 countries. In this role, he was accountable for IT and business
                                                        services across the enterprise, heading up shared services teams in Europe, America, India and
                                                        the Far East.
                                                    </p>
                                                    <p><strong>Marc Béchet's Biography</strong></p>
                                                    <p>
                                                    Marc has been leading the management, innovation and implementation of 
                                                    enterprise-wide business solutions that underpin the growth strategy at 
                                                    Unilever. Previously Marc worked for Colgate-Palmolive and Novartis 
                                                    Pharmaceuticals, in line-of-business management and IT roles. Since 
                                                    becoming a Division CIO in 1999, he has developed and implemented IT 
                                                    strategies to improve productivity, reduce cost and drive profitable 
                                                    growth.
                                                    </p>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <img src="../content/img/Ed-Toben.jpg" alt="Ed Toben" class="speaker img-responsive" />
                                                <img src="../content/img/Marc-Bechet.jpg" alt="Marc Bechet" class="speaker img-responsive" />
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="081014">
                                            <div class="col-sm-7 speakertext">
                                                <h4>Supporting Real Time Business with a Flexible Big Data Foundation</h4>
                                                <h5>Javaid Awan, Head of Big Data, Cloud and Analytics for SAP UKI
                                                <br />Dan Holle, VP & Chief Technology Advisor, CTO Office SAP, GCO</h5>
                                                <p>As the volume and variety of data explodes, Javaid and Dan will show you how 
                                                IT teams can manage and use it effectively. With SAP HANA, you can acquire, process 
                                                and analyze Big Data to drive competitive advantage. Take data from virtually any 
                                                source, perform advanced analytics (predictive, spatial, text), and use powerful 
                                                in-memory computing to gain insight never seen before.</p>
                                                <p><a href class="btn btn-lg btn-primary" id="showDetails3">Speaker Biography +</a></p>
                                                <div id="speakerbio3">
                                                    <p><strong>Javaid Awan's Biography</strong></p>
                                                    <p>                                                
                                                    Javaid leads Big Data for SAP in UKI. Before joining SAP, he held senior 
                                                    leadership positions in industry and consulting for Consumer Goods, Pharmaceuticals, 
                                                    Oil & Gas and Telecoms sectors, primarily in ERP, analytics, data, and integration. 
                                                    Javaid is passionate about SAP and its value to business simplification and insight. 
                                                    And as a trusted advisor, global architect and delivery lead, he helps customers 
                                                    address the challenges of acceleration, globalization, templates and Big Data.
                                                    </p>
                                                    <p><strong>Dan Holle's Biography</strong></p>
                                                    <p>
                                                        Dan is an innovator in Big Data and analytics, recognized for his pioneering 
                                                        work in parallel architectures, machine learning and optimization – as 
                                                        well as his contributions to the creation of the SQL language. His passion 
                                                        for turning innovations and technologies into breakthrough business value 
                                                        has directly benefited over 100 customers in his 34-year career. He's also 
                                                        a renowned speaker at industry conferences worldwide.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <img src="../content/img/SAP-4.jpg" alt="Javaid Awan" class="speaker img-responsive" />
                                                <img src="../content/img/Dan-Holle.jpg" alt="Dan Holle" class="speaker img-responsive" />
          
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="091014">
                                            <div class="col-sm-7 speakertext">
                                                <h4>Handling the Challenges and Speed of Big Data</h4>
                                                <h5>Alan Priestley<br />Director of Strategic Marketing EMEA, Intel</h5>
                                                <p>
                                                    The increased use of data analytics platforms, such as SAP HANA, place new challenges on IT
                                                    infrastructure and architecture. Alan will highlight customer case studies that show how Intel
                                                    is continuing to evolve products and solutions to handle increasing workloads that high performance,
                                                    real-time data analytics demand.
                                                </p>
                                                <p><a href class="btn btn-lg btn-primary" id="showDetails4">Speaker Biography +</a></p>
                                                <div id="speakerbio4">
                                                    <p><strong>Alan Priestley's biography</strong></p>
                                                    <p>
                                                        Alan is an Intel veteran who has held various technical and product senior marketing roles.
                                                        These include managing the Intel Xeon processor product line in EMEA and contributing to major
                                                        customer account wins. Currently, Alan heads up Intel’s Big Data analytics strategy in EMEA,
                                                        with a focus on Intel’s cloud, security and data center efficiency technologies.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <img src="../content/img/Alan-Priestley.jpg" alt="Alan Priestley" class="speaker img-responsive" />
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="101014">
                                            <div class="col-sm-7 speakertext">
                                                <h4>Uncovering Insights and Opportunities Hidden in Big Data</h4>
                                                <h5>Shailesh Tekurkar<br />Industry Analytics Principal – Data Science at SAP</h5>
                                                <p>
                                                    The analytical power of SAP HANA makes it possible to find new patterns, predict future outcomes,
                                                    and optimize business processes. Shailesh will present real-world examples of how Big Data is
                                                    uncovering hidden insights, and how predictive analytics can improving forecast accuracy and
                                                    data-driven decision making.
                                                </p>
                                                <p><a href class="btn btn-lg btn-primary" id="showDetails5">Speaker Biography +</a></p>
                                                <div id="speakerbio5">
                                                    <p><strong>Shailesh Tekurkar's Biography </strong></p>
                                                    <p>
                                                    Shailesh is a strategic thinker with over 22 years' experience in managing 
                                                    customer relationships with Fortune 100 companies. As Industry Analytics 
                                                    Principal at SAP Data Science he advises companies in the Energy & Utilities, 
                                                    Media and Pharmaceutical industries on innovation, Big Data and advanced analytics.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <img src="../content/img/Shailesh-Tekurkar.jpg" alt="Shailesh Tekurkar" class="speaker img-responsive" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-1"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="our-shows-mob visible-sm visible-xs">
                        <div class="container">

                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" data-target="#collapseOne">
                                                Monday 6th October <i class="fa fa-chevron-up"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <img src="../content/img/alyswoodward.jpg" alt="Alys Woodward" class="speaker img-responsive" />
                                            <h4>
                                                How to Drive Innovation:<br />
                                                Big Data and Analytics
                                            </h4>
                                            <h5>Alys Woodward<br />Research Director, IDC</h5>
                                            <p>
                                                Based on IDC’s latest report, Alys will be sharing best practices from companies at the forefront of Big Data and
                                                analytics. Along with research-based insights, she’ll be sharing her knowledge of advanced analytics and
                                                social business, plus the different ways that CIOs and IT departments are driving innovation.
                                            </p>
                                            <p><a href class="btn btn-primary" id="showDetails6">Speaker Biography +</a></p>
                                            <div id="speakerbio6">
                                                <p><strong>Alys Woodward's Biography</strong></p>
                                                <p>
                                                    Alys Woodward is a Research Director and Technology Analyst at IDC. Her key areas of responsibility
                                                    are European Big Data & Analytics, European Social Business and Worldwide Advanced Analytics. Her 20
                                                    years' expertise spans software, services, hardware, and device research. A key focus for her role at
                                                    IDC is helping analysts collaborate on themes relating to Big Data and social business.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" data-target="#collapseTwo">
                                                Tuesday 7th October <i class="fa fa-chevron-down"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <img src="../content/img/Ed-Toben.jpg" alt="Ed Toben" class="speaker img-responsive" />
                                            <img src="../content/img/Marc-Bechet.jpg" alt="Marc Bechet" class="speaker img-responsive" />
                                            <h4>Grow and Transform with Big Data and Analytics</h4>
                                            <h5>Ed Toben<br />Former SVP and CIO, Colgate-Palmolive</h5>
                                            <p>
                                                    Ed will be talking about his extensive global experience of managing IT and 
                                                    finance functions at Colgate-Palmolive. He'll explain how implementing SAP 
                                                    HANA and Intel processor technologies worldwide resulted in a surge of 
                                                    analytical information. And how business intelligence uncovered Big Data 
                                                    insights that helped to transform operations, processes and strategy.
                                            </p>
                                            <h4>Beyond ERP: Implementing the Real-Time, Digital Enterprise to Drive Profitable Growth</h4>
                                            <h5>Marc Béchet<br />Vice President Global IT ERP, Unilever</h5>
                                            <p>Unilever is driving sustainable, profitable growth while reducing environmental 
                                            impact. Marc will reflect on this bold transformation and growth program, including 
                                            the value of managing ERP as one global platform. Plus, how SAP HANA and Intel 
                                            processor technologies jointly help Unilever get more value from ERP and Big Data, 
                                            which is crucial considering the scale driven by two billion consumers using Unilever 
                                            products on any given day.</p>
                                            
                                            <p><a href class="btn btn-lg btn-primary" id="showDetails7">Speaker Biographies +</a></p>
                                            <div id="speakerbio7">
                                                <p><strong>Ed Toben's Biography</strong></p>
                                                <p>
                                                    In a 20-year career at Colgate-Palmolive, Ed Toben became Senior Vice President of
                                                    Global Information Technology and Business Services. As the Global CIO, he led global
                                                    SAP implementations in 107 countries. In this role, he was accountable for IT and business
                                                    services across the enterprise, heading up shared services teams in Europe, America, India and
                                                    the Far East.
                                                </p>
                                                <p><strong>Marc Béchet's Biography</strong></p>
                                                <p>
                                                Marc has been leading the management, innovation and implementation of 
                                                enterprise-wide business solutions that underpin the growth strategy at 
                                                Unilever. Previously Marc worked for Colgate-Palmolive and Novartis 
                                                Pharmaceuticals, in line-of-business management and IT roles. Since 
                                                becoming a Division CIO in 1999, he has developed and implemented IT 
                                                strategies to improve productivity, reduce cost and drive profitable 
                                                growth.
                                                </p>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" data-target="#collapseThree">
                                                Weds 8th October <i class="fa fa-chevron-down"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body">
                                        <img src="../content/img/SAP-4.jpg" alt="Javaid Awan" class="speaker img-responsive" />
                                        <img src="../content/img/Dan-Holle.jpg" alt="Dan Holle" class="speaker img-responsive" />
                                        
                                        <h4>Supporting Real Time Business with a Flexible Big Data Foundation</h4>
                                        <h5>Javaid Awan, Head of Big Data, Cloud and Analytics for SAP UKI
                                        <br />Dan Holle, VP & Chief Technology Advisor, CTO Office SAP, GCO</h5>
                                        <p>As the volume and variety of data explodes, Javaid and Dan will show you how 
                                        IT teams can manage and use it effectively. With SAP HANA, you can acquire, process 
                                        and analyze Big Data to drive competitive advantage. Take data from virtually any 
                                        source, perform advanced analytics (predictive, spatial, text), and use powerful 
                                        in-memory computing to gain insight never seen before.</p>
                                        <p><a href class="btn btn-lg btn-primary" id="showDetails8">Speaker Biography +</a></p>
                                        <div id="speakerbio8">
                                            <p><strong>Javaid Awan's Biography</strong></p>
                                            <p>                                                
                                            Javaid leads Big Data for SAP in UKI. Before joining SAP, he held senior 
                                            leadership positions in industry and consulting for Consumer Goods, Pharmaceuticals, 
                                            Oil & Gas and Telecoms sectors, primarily in ERP, analytics, data, and integration. 
                                            Javaid is passionate about SAP and its value to business simplification and insight. 
                                            And as a trusted advisor, global architect and delivery lead, he helps customers 
                                            address the challenges of acceleration, globalization, templates and Big Data.
                                            </p>                                        
                                            <p><strong>Dan Holle's Biography</strong></p>
                                            <p>
                                            Dan is an innovator in Big Data and analytics, recognized for his pioneering work in 
                                            parallel architectures, machine learning and optimization – as well as his contributions 
                                            to the creation of the SQL language. His passion for turning innovations and technologies 
                                            into breakthrough business value has directly benefited over 100 customers in his 34-year 
                                            career. He's also a renowned speaker at industry conferences worldwide.
                                            </p>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" data-target="#collapseFour">
                                                Thursday 9th October <i class="fa fa-chevron-down"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFour" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <img src="../content/img/Alan-Priestley.jpg" alt="Alan Priestley" class="speaker img-responsive" />
                                            <h4>Handling the Challenges and Speed of Big Data</h4>
                                            <h5>Alan Priestley<br />Director of Strategic Marketing EMEA, Intel</h5>
                                            <p>
                                                The increased use of data analytics platforms, such as SAP HANA, place new challenges on IT
                                                infrastructure and architecture. Alan will highlight customer case studies that show how Intel
                                                is continuing to evolve products and solutions to handle increasing workloads that high performance,
                                                real-time data analytics demand.
                                            </p>
                                            <p><a href class="btn btn-primary" id="showDetails9">Speaker Biography +</a></p>
                                            <div id="speakerbio9">
                                                <p><strong>Alan Priestley's Biography</strong></p>
                                                <p>
                                                    Alan is an Intel veteran who has held various technical and product senior marketing roles.
                                                    These include managing the Intel Xeon processor product line in EMEA and contributing to major
                                                    customer account wins. Currently, Alan heads up Intel’s Big Data analytics strategy in EMEA,
                                                    with a focus on Intel’s cloud, security and data center efficiency technologies.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" data-target="#collapseFive">
                                                Friday 10th October <i class="fa fa-chevron-down"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFive" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <img src="../content/img/Shailesh-Tekurkar.jpg" alt="Shailesh Tekurkar" class="speaker img-responsive" />
                                            <h4>Uncovering Insights and Opportunities Hidden in Big Data</h4>
                                            <h5>Shailesh Tekurkar<br />Industry Analytics Principal – Data Science at SAP</h5>
                                            <p>
                                                The analytical power of SAP HANA makes it possible to find new patterns, predict future outcomes,
                                                and optimize business processes. Shailesh will present real-world examples of how Big Data is
                                                uncovering hidden insights, and how predictive analytics can improving forecast accuracy and
                                                data-driven decision making.
                                            </p>
                                            <p><a href class="btn btn-primary" id="showDetails10">Speaker Biography +</a></p>
                                            <div id="speakerbio10">
                                                <p><strong>Shailesh Tekurkar's Biography </strong></p>
                                                <p>
                                                Shailesh is a strategic thinker with over 22 years' experience in managing 
                                                customer relationships with Fortune 100 companies. As Industry Analytics 
                                                Principal at SAP Data Science he advises companies in the Energy & Utilities, 
                                                Media and Pharmaceutical industries on innovation, Big Data and advanced analytics.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="register-event container">
                        <h2>Register your interest</h2>
                        <form method="post" action="backend/register.php" id="register_form">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="first_name">First Name *</label>
                                    <input data-val="true" data-val-required="true" class="form-control" id="first_nanme" name="first_name" type="text" required="required" />
                                </div>
                                <div class="col-sm-6">
                                    <label for="phone">Telephone *</label>
                                    <input data-val="true" data-val-required="true" class="form-control" id="phone" name="phone" type="text" required="required" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="last_name">Last Name *</label>
                                    <input data-val="true" data-val-required="true" class="form-control" id="last_name" name="last_name" type="text" required="required" />
                                </div>
                                <div class="col-sm-6">
                                    <label for="address">Address *</label>
                                    <input data-val="true" data-val-required="true" class="form-control" id="address" name="address" type="text" required="required" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="email">Email address *</label>
                                    <input data-val="true" data-val-required="true" data-val-email="true" class="form-control" id="email" name="email" type="email" required="required" />
                                </div>
                                <div class="col-sm-6">
                                    <label for="town">Town/City *</label>
                                    <input data-val="true" data-val-required="true" class="form-control" id="town" name="town" type="text" required="required" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="organization">Organization *</label>
                                    <input data-val="true" data-val-required="true" class="form-control" id="organization" name="organization" type="text" required="required" />
                                </div>
                                <div class="col-lg-4">
                                    <label for="country">Country *</label>
                                    <select data-val="true" data-val-required="true" class="form-control" id="country" name="country" required>
                                        <option></option>
                                        <option value="AF">Afghanistan</option>
                                        <option value="AL">Albania</option>
                                        <option value="DZ">Algeria</option>
                                        <option value="AD">Andorra</option>
                                        <option value="AO">Angola</option>
                                        <option value="AI">Anguilla</option>
                                        <option value="AQ">Antarctica</option>
                                        <option value="AG">Antigua and Barbuda</option>
                                        <option value="AR">Argentina</option>
                                        <option value="AM">Armenia</option>
                                        <option value="AW">Aruba</option>
                                        <option value="AU">Australia</option>
                                        <option value="AT">Austria</option>
                                        <option value="AZ">Azerbaijan</option>
                                        <option value="BS">Bahamas</option>
                                        <option value="BH">Bahrain</option>
                                        <option value="BD">Bangladesh</option>
                                        <option value="BB">Barbados</option>
                                        <option value="BY">Belarus</option>
                                        <option value="BE">Belgium</option>
                                        <option value="BZ">Belize</option>
                                        <option value="BJ">Benin</option>
                                        <option value="BM">Bermuda</option>
                                        <option value="BT">Bhutan</option>
                                        <option value="BO">Bolivia</option>
                                        <option value="BA">Bosnia and Herzegovina</option>
                                        <option value="BW">Botswana</option>
                                        <option value="BR">Brazil</option>
                                        <option value="IO">British Indian Ocean</option>
                                        <option value="BN">Brunei</option>
                                        <option value="BG">Bulgaria</option>
                                        <option value="BF">Burkina Faso</option>
                                        <option value="BI">Burundi</option>
                                        <option value="KH">Cambodia</option>
                                        <option value="CM">Cameroon</option>
                                        <option value="CA">Canada</option>
                                        <option value="CV">Cape Verde</option>
                                        <option value="KY">Cayman Islands</option>
                                        <option value="CF">Central African Republic</option>
                                        <option value="TD">Chad</option>
                                        <option value="CL">Chile</option>
                                        <option value="CN">China</option>
                                        <option value="CX">Christmas Island</option>
                                        <option value="CC">Cocos (Keeling) Islands</option>
                                        <option value="CO">Colombia</option>
                                        <option value="KM">Comoros</option>
                                        <option value="CD">Congo, Democratic Republic of the</option>
                                        <option value="CG">Congo, Republic of the</option>
                                        <option value="CK">Cook Islands</option>
                                        <option value="CR">Costa Rica</option>
                                        <option value="HR">Croatia</option>
                                        <option value="CY">Cyprus</option>
                                        <option value="CZ">Czech Republic</option>
                                        <option value="DK">Denmark</option>
                                        <option value="DJ">Djibouti</option>
                                        <option value="DM">Dominica</option>
                                        <option value="DO">Dominican Republic</option>
                                        <option value="TL">East Timor</option>
                                        <option value="EC">Ecuador</option>
                                        <option value="EG">Egypt</option>
                                        <option value="SV">El Salvador</option>
                                        <option value="GQ">Equatorial Guinea</option>
                                        <option value="ER">Eritrea</option>
                                        <option value="EE">Estonia</option>
                                        <option value="ET">Ethiopia</option>
                                        <option value="FK">Falkland Islands (Malvinas)</option>
                                        <option value="FO">Faroe Islands</option>
                                        <option value="FJ">Fiji</option>
                                        <option value="FI">Finland</option>
                                        <option value="FR">France</option>
                                        <option value="GF">French Guiana</option>
                                        <option value="PF">French Polynesia</option>
                                        <option value="GA">Gabon</option>
                                        <option value="GM">Gambia</option>
                                        <option value="GE">Georgia</option>
                                        <option value="DE">Germany</option>
                                        <option value="GH">Ghana</option>
                                        <option value="GI">Gibraltar</option>
                                        <option value="GR">Greece</option>
                                        <option value="GL">Greenland</option>
                                        <option value="GD">Grenada</option>
                                        <option value="GP">Guadeloupe</option>
                                        <option value="GT">Guatemala</option>
                                        <option value="GN">Guinea</option>
                                        <option value="GW">Guinea-Bissau</option>
                                        <option value="GY">Guyana</option>
                                        <option value="HT">Haiti</option>
                                        <option value="HN">Honduras</option>
                                        <option value="HK">Hong Kong</option>
                                        <option value="HU">Hungary</option>
                                        <option value="IS">Iceland</option>
                                        <option value="IN">India</option>
                                        <option value="ID">Indonesia</option>
                                        <option value="IE">Ireland</option>
                                        <option value="IL">Israel</option>
                                        <option value="IT">Italy</option>
                                        <option value="CI">Ivory Coast (Côte d\'Ivoire)</option>
                                        <option value="JM">Jamaica</option>
                                        <option value="JP">Japan</option>
                                        <option value="JO">Jordan</option>
                                        <option value="KZ">Kazakhstan</option>
                                        <option value="KE">Kenya</option>
                                        <option value="KI">Kiribati</option>
                                        <option value="KR">Korea, South</option>
                                        <option value="KW">Kuwait</option>
                                        <option value="KG">Kyrgyzstan</option>
                                        <option value="LA">Laos</option>
                                        <option value="LV">Latvia</option>
                                        <option value="LB">Lebanon</option>
                                        <option value="LS">Lesotho</option>
                                        <option value="LI">Liechtenstein</option>
                                        <option value="LT">Lithuania</option>
                                        <option value="LU">Luxembourg</option>
                                        <option value="MO">Macau</option>
                                        <option value="MK">Macedonia, Republic of</option>
                                        <option value="MG">Madagascar</option>
                                        <option value="MW">Malawi</option>
                                        <option value="MY">Malaysia</option>
                                        <option value="MV">Maldives</option>
                                        <option value="ML">Mali</option>
                                        <option value="MT">Malta</option>
                                        <option value="MH">Marshall Islands</option>
                                        <option value="MQ">Martinique</option>
                                        <option value="MR">Mauritania</option>
                                        <option value="MU">Mauritius</option>
                                        <option value="YT">Mayotte</option>
                                        <option value="MX">Mexico</option>
                                        <option value="FM">Micronesia</option>
                                        <option value="MD">Moldova</option>
                                        <option value="MC">Monaco</option>
                                        <option value="MN">Mongolia</option>
                                        <option value="ME">Montenegro</option>
                                        <option value="MS">Montserrat</option>
                                        <option value="MA">Morocco</option>
                                        <option value="MZ">Mozambique</option>
                                        <option value="NA">Namibia</option>
                                        <option value="NR">Nauru</option>
                                        <option value="NP">Nepal</option>
                                        <option value="NL">Netherlands</option>
                                        <option value="AN">Netherlands Antilles</option>
                                        <option value="NC">New Caledonia</option>
                                        <option value="NZ">New Zealand</option>
                                        <option value="NI">Nicaragua</option>
                                        <option value="NE">Niger</option>
                                        <option value="NG">Nigeria</option>
                                        <option value="NU">Niue</option>
                                        <option value="NF">Norfolk Island</option>
                                        <option value="NO">Norway</option>
                                        <option value="OM">Oman</option>
                                        <option value="PK">Pakistan</option>
                                        <option value="PS">Palestinian Territory</option>
                                        <option value="PA">Panama</option>
                                        <option value="PG">Papua New Guinea</option>
                                        <option value="PY">Paraguay</option>
                                        <option value="PE">Peru</option>
                                        <option value="PH">Philippines</option>
                                        <option value="PN">Pitcairn Island</option>
                                        <option value="PL">Poland</option>
                                        <option value="PT">Portugal</option>
                                        <option value="QA">Qatar</option>
                                        <option value="RE">Réunion</option>
                                        <option value="RO">Romania</option>
                                        <option value="RU">Russia</option>
                                        <option value="RW">Rwanda</option>
                                        <option value="SH">Saint Helena</option>
                                        <option value="KN">Saint Kitts and Nevis</option>
                                        <option value="LC">Saint Lucia</option>
                                        <option value="PM">Saint Pierre and Miquelon</option>
                                        <option value="VC">Saint Vincent and the Grenadines</option>
                                        <option value="WS">Samoa</option>
                                        <option value="SM">San Marino</option>
                                        <option value="ST">São Tome and Principe</option>
                                        <option value="SA">Saudi Arabia</option>
                                        <option value="SN">Senegal</option>
                                        <option value="RS">Serbia</option>
                                        <option value="CS">Serbia and Montenegro</option>
                                        <option value="SC">Seychelles</option>
                                        <option value="SL">Sierra Leon</option>
                                        <option value="SG">Singapore</option>
                                        <option value="SK">Slovakia</option>
                                        <option value="SI">Slovenia</option>
                                        <option value="SB">Solomon Islands</option>
                                        <option value="SO">Somalia</option>
                                        <option value="ZA">South Africa</option>
                                        <option value="GS">South Georgia and the South Sandwich Islands</option>
                                        <option value="ES">Spain</option>
                                        <option value="LK">Sri Lanka</option>
                                        <option value="SR">Suriname</option>
                                        <option value="SJ">Svalbard and Jan Mayen</option>
                                        <option value="SZ">Swaziland</option>
                                        <option value="SE">Sweden</option>
                                        <option value="CH">Switzerland</option>
                                        <option value="TW">Taiwan</option>
                                        <option value="TJ">Tajikistan</option>
                                        <option value="TZ">Tanzania</option>
                                        <option value="TH">Thailand</option>
                                        <option value="TG">Togo</option>
                                        <option value="TK">Tokelau</option>
                                        <option value="TO">Tonga</option>
                                        <option value="TT">Trinidad and Tobago</option>
                                        <option value="TN">Tunisia</option>
                                        <option value="TR">Turkey</option>
                                        <option value="TM">Turkmenistan</option>
                                        <option value="TC">Turks and Caicos Islands</option>
                                        <option value="TV">Tuvalu</option>
                                        <option value="UG">Uganda</option>
                                        <option value="UA">Ukraine</option>
                                        <option value="AE">United Arab Emirates</option>
                                        <option value="GB">United Kingdom</option>
                                        <option value="US">United States</option>
                                        <option value="UM">United States Minor Outlying Islands</option>
                                        <option value="UY">Uruguay</option>
                                        <option value="UZ">Uzbekistan</option>
                                        <option value="VU">Vanuatu</option>
                                        <option value="VA">Vatican City</option>
                                        <option value="VE">Venezuela</option>
                                        <option value="VN">Vietnam</option>
                                        <option value="VG">Virgin Islands, British</option>
                                        <option value="WF">Wallis and Futuna</option>
                                        <option value="EH">Western Sahara</option>
                                        <option value="YE">Yemen</option>
                                        <option value="ZM">Zambia</option>
                                        <option value="ZW">Zimbabwe</option>
                                    </select>
                                </div>
                                <div class="col-lg-2">
                                    <label for="zip">Zip/Postal Code *</label>
                                    <input data-val="true" data-val-required="true" class="form-control" id="zip" name="zip" type="text" required="required" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <hr />
                                </div>
                            </div>
                            <div class="row checkboxes">
                                <div class="col-xs-12 tt">
                                    <strong>I'd like to register for...</strong>
                                    <p class="selectacheck">Please Select a Webinar</p>
                                </div>
                                <div class="col-xs-12">

                                    <label for="october6"><input class="cb" type="checkbox" id="october6" name="october6" value="1" /><span><strong>How to Drive Innovation: Big Data and Analytics</strong> - 6<sup>th</sup> October</span>, 12:00 CEST / 11:00 BST</label>
                                </div>
                                <div class="col-xs-12">
                                    <label for="october7"><input class="cb" type="checkbox" id="october7" name="october7" value="1" /><span><strong>Grow and Transform with Big Data and Analytics</strong> - 7<sup>th</sup> October</span>, 12:00 CEST / 11:00 BST</label>
                                </div>
                                <div class="col-xs-12">
                                    <label for="october8"><input class="cb" type="checkbox" id="october8" name="october8" value="1" /><span><strong>Supporting Real Time Business with a Flexible Big Data Foundation</strong> - 8<sup>th</sup> October</span>, 12:00 CEST / 11:00 BST</label>
                                </div>
                                <div class="col-xs-12">
                                    <label for="october9"><input class="cb" type="checkbox" id="october9" name="october9" value="1" /><span><strong>Handling the Challenges and Speed of Big Data</strong> - 9<sup>th</sup> October</span>, 12:00 CEST / 11:00 BST</label>
                                </div>
                                <div class="col-xs-12">
                                    <label for="october10"><input class="cb" type="checkbox" id="october10" name="october10" value="1" /><span><strong>Uncovering Insights and Opportunities Hidden in Big Data</strong> - 10<sup>th</sup> October</span>, 12:00 CEST / 11:00 BST</label>
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <hr />
                                </div>
                            </div>
                            <div class="row msg">
                                <div class="col-xs-12 tt">
                                    Would you like to receive further information from SAP including special offers, reports, and more, along with information resulting from this enquiry?
                                </div>
                                <div class="col-sm-3">
                                    <label for="msg_email"><input class="checkbox-inline" type="checkbox" id="msg_email" name="msg_email" value="1" /> Via Email</label>
                                </div>
                                <div class="col-sm-9">
                                    <label for="msg_phone"><input class="checkbox-inline" type="checkbox" id="msg_phone" name="msg_phone" value="1" /> Via Phone</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <hr />
                                </div>
                            </div>
                            <div class="row agreement">
                                <div class="col-sm-9">
                                    <label for="agreement"><input class="checkbox-inline" value="1" type="checkbox" id="agreement" name="agreement" required="required" /> I acknowledge that I have read SAP&acute;s <a data-toggle="modal" data-target="#privacy_statement">Privacy Statement</a> *</label>
                                    <div class="modal fade" id="privacy_statement" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>I acknowledge that I have read the SAP <a target="_blank" href="http://sap.com/uk/about/company/legal/privacy.epx?sapmtn=emptypageforinlineframe">Privacy Statement (+)</a> (which is based on the country/region selection above) and consent to the processing of my personal data in accordance with the terms of the Privacy Statement. This includes, without limitation, that SAP may collect, store and process any personal data voluntarily provided by me on this website and aggregate it with other personal data that I provided to SAP at earlier occasions by the <a target="_blank" href="http://sap.com/uk/about/company/legal/privacy.epx?sapmtn=emptypageforinlineframe#purpose">methods and for the purposes (+)</a> described in the Privacy Statement and on this Website. In accordance with the terms of the Privacy Statement and on this Website, SAP may further track my use of SAP's websites and aggregate it with my personal data. I acknowledge that I can at any time request information on my personal data held by SAP, update and correct such data at sap.com/profile and withdraw my consent given hereby by contacting SAP at <a href="mailto:webmaster@sap.com">webmaster@sap.com</a>. Based on my country/region selection above, my data will be controlled by SAP UK Limited.</p>
                                                    <p><a target="_blank" href="http://www.sap.com/uk/about/legal/impressum.html">Legal Disclosure (+)</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <input class="btn btn-lg btn-primary" type="submit" id="register_now" value="Register now &#187;" />
                                </div>
                            </div>
                            <div class="row disclaimer">
                                <div class="col-xs-12">
                                    <p>By providing your contact information and clicking "Register Now", you authorize Intel to 
                                    contact you by email or telephone with information about Intel products and updates for IT 
                                    professionals. For more information, please review the 
                                    <a href="https://plan.seek.intel.com/UK.EN.ITDM.ITCenterNewsletter.TermsAndConditions.html" 
                                    target="_blank">terms and conditions</a> and 
                                    <a href="http://www.intel.co.uk/content/www/uk/en/privacy/intel-online-privacy-notice-summary.html" 
                                    target="_blank">Intel Privacy Notice.</a> You must agree to the terms above.</p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="push"></div>
        </div>
<?php 

	echo $headerandfooter->getFooter();

?>