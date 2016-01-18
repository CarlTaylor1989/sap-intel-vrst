<?php
    $page = 'index';

    include 'backend/headerandfooter.php';
    
    $headerandfooter = new HeaderAndFooter;
    
    echo $headerandfooter->getPageHeader($page);
    
    echo $headerandfooter->getMenuSystem($page);
?>
    <div class="content">
        <div class="view-home">
            <!--<div class="intro container">
                 <div class="row">
                     <div class="col-xs-12">
                         For over 10 years, SAP and Intel have worked together to deliver industry-leading performance of SAP solutions on Intel architecture. 
                         Learn from this unrivalled experience and join us for the <strong>BIG DATA VIRTUAL TOUR</strong> and <strong>BIG DATA WEEK</strong>.
                     </div>
                </div>
            </div>-->
            <div class="big-data-virtual-tour container">
                <div class="stripe">
                    <div class="link hidden-xs">
                        <a href="bigdatatour">Explore the tour  &#187;</a>
                        <div class="arrow"></div>
                    </div>
                </div>
                <div class="link visible-xs-block">
                    <a href="bigdatatour">Explore the tour  &#187;</a>
                </div>
            </div>
            <div class="big-data-week container">
                <h1 class="title">Big Data Week</h1>
                <div class="link">
                    <span>6th - 10th October 2014</span>
                    <a href="../bigdataweek">Register Now &#187;</a>
                    <div class="arrow hidden-xs"></div>
                </div>
            </div>
            <div class="big-data-week-list container">
                <div class="row">
                    <div class="big-week-bullet first-bullet col-xs-12 col-sm-4">
                        Seven leading industry experts over five days
                    </div>
                    <div class="big-week-bullet center-bullet col-xs-12 col-sm-6">
                        <span>Discover the latest thinking, insights and opportunities</span>
                    </div>
                    <div class="big-week-bullet last-bullet col-xs-12 col-sm-2">
                        Live chats / Q&amp;A
                    </div>
                </div>
            </div>
            <div class="big-data-partnership container">
                <div class="section-body row">
                    <div class="col-xs-12 col-sm-6">
                        <h1 class="heading">SAP and Intel</h1>
                        <h3 class="sub-heading">a partnership made for Big Data</h3>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <span class="intro bold">Together, SAP HANA and the Intel Xeon® processor E7 family deliver extraordinary performance for data warehousing and enable innovative, real-time business models.</span>
                        <span class="intro">Intel’s architecture is ideally suited to high performance, mission-critical workloads, and SAP HANA is engineered to take advantage of the unique features of the Intel Xeon processor E7 family.</span>
                        <div class="btn-container">
                            <a href="" data-toggle="modal" data-target="#videoModal" data-video="//www.youtube.com/embed/SEnT4o8trIw" class="btn btn-lg btn-primary">Find out more &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="find-out-more row">
                    <div class="sap col-xs-12 col-sm-6">
                        <div class="row">
                            <div class="logo-container col-xs-12 col-sm-2 col-md-offset-2">
                                <img class="img-responsive" src="content/img/sap-white.png" alt="SAP">
                            </div>
                            <div class="product-title col-xs-12 col-sm-8">
                                <h2>SAP HANA®</h2>
                            </div>
                        </div>
                    </div>
                    <div class="intel col-xs-12 col-sm-6">
                        <div class="row">
                            <div class="logo-container col-xs-12 col-sm-2 col-md-offset-2">
                                <img class="img-responsive" src="content/img/intel-logo.png" alt="Intel">
                            </div>
                            <div class="product-title col-xs-12 col-sm-8">
                                <h2>Intel Xeon® E7</h2>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>              
    <div class="push"></div>
</div>
<?php
    echo $headerandfooter->getFooter();
?>