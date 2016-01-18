<?php
/**
 * Created by PhpStorm.
 * User: Bright.B
 * Date: 25/09/14
 * Time: 11:07
 */
$page = 'index';

include '../../backend/headerandfooter.php';

$headerandfooter = new HeaderAndFooter;

echo $headerandfooter->getPageHeader($page);

echo $headerandfooter->getMenuSystem($page);

echo "<script src='../countdown-script/countdown.js'></script>";
?>
<div class="content">
    <div class="view-home">
        <div class="big-data-week container">
            <h1 class="title">Big Data Week</h1>
            <div class="link mobile-countdown">
                <span>This talk starts in:</span>
                <div class="row">
                    <div class="col-xs-4">
                        <div class="countdown-timer">
                            <span id="hrs" class="digit"></span><br/>Hours
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="countdown-timer">
                            <span id="mins" class="digit"></span><br/>minutes
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="countdown-timer">
                            <span id="secs" class="digit"></span><br/>seconds
                        </div>
                    </div>
                </div>
            </div>
            <div class="row desktop-countdown">
                <div class="col-sm-1"></div>
                <div class="col-sm-7">
                    <div class="row">
                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 timer-col">
                            <div class="countdown-timer first-count">
                                <span>This talk <br/> starts in:</span>
                            </div>
                        </div>
                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 timer-col">
                            <div class="countdown-timer">
                                <span id="hrs-1" class="digit"></span>Hours
                            </div>
                        </div>
                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 timer-col">
                            <div class="countdown-timer">
                                <span id="mins-1" class="digit"></span>minutes
                            </div>
                        </div>
                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 timer-col">
                            <div class="countdown-timer">
                                <span id="secs-1" class="digit"></span>seconds
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4"></div>
            </div>
        </div>
        <div class="welcome testimonial">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 text">
                        <h2>Grow and transform with Big Data and Analytics</h2>
                        <p><strong>7th October 2014 - 12:00 BST, 13:00 CEST</strong></p>
                        <p>
                            Ed will be talking about his extensive global experience of managing IT and
                            finance functions at Colgate-Palmolive. He'll explain how implementing SAP
                            HANA and Intel processor technologies worldwide resulted in a surge of
                            analytical information. And how business intelligence uncovered Big Data
                            insights that helped to transform operations, processes and strategy.
                        </p>
<!--                        <a href="#register_form">Yes, I want to make Big Data real in 20 minutes &#187;</a>-->
                    </div>
                    <div class="col-sm-5">
                        <div class="speaker-img">
                            <img src="/content/img/Ed-Toben.jpg" class="img-thumbnail img-responsive">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-7 text">
                        <h4>Beyond ERP: Implementing the Real-Time, Digital Enterprise to Drive Profitable Growth</h4>
                        <p>Unilever is driving sustainable, profitable growth while reducing environmental
                            impact. Marc will reflect on this bold transformation and growth program, including
                            the value of managing ERP as one global platform. Plus, how SAP HANA and Intel
                            processor technologies jointly help Unilever get more value from ERP and Big Data,
                            which is crucial considering the scale driven by two billion consumers using Unilever
                            products on any given day.</p>
                    </div>
                    <div class="col-sm-5">
                        <div class="speaker-img">
                            <img src="/content/img/Marc-Bechet.jpg" class="img-thumbnail img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    //countdown timer takes five parameters
    //first three are ids of elements to assign the timer values to
    //later two are uk(hour)in 24 hour format of when webinar goes live and date
    CtimerObj.startClock("hrs","mins","secs",12,"10/07/2014");
</script>
<?php
echo $headerandfooter->getFooter();
?>