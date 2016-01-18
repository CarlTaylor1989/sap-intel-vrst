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
                        <h2>Handling the challenges and Speed of Big Data</h2>
                        <p><strong>9th October 2014 - 12:00 BST, 13:00 CEST</strong></p>
                        <p>
                            The increased use of data analytics platforms, such as SAP HANA, place new challenges on IT
                            infrastructure and architecture. Alan will highlight customer case studies that show how Intel
                            is continuing to evolve products and solutions to handle increasing workloads that high performance,
                            real-time data analytics demand.
                        </p>
                        <a href="#register_form">Yes, I want to make Big Data real in 20 minutes &#187;</a>
                    </div>
                    <div class="col-sm-5">
                        <div class="speaker-img">
                            <img src="/content/img/Alan-Priestley.jpg" class="img-thumbnail img-responsive">
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
    CtimerObj.startClock("hrs","mins","secs",12,"10/09/2014");
</script>
<?php
echo $headerandfooter->getFooter();
?>