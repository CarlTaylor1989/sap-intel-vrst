<?php
/**
 * Created by PhpStorm.
 * User: Bright.B
 * Date: 25/09/14
 * Time: 13:40
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
            </div>
            <div class="welcome testimonial" id="videoView">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2 col-md-2 col-lg-2"></div>
                        <div class="col-sm-8 col-md-8 col-lg-8 flex-video widescreen">
                            <iframe width="560" height="315" src="//www.youtube.com/embed/o1WWynl1iFc?rel=0" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div class="col-sm-2 col-md-2 col-lg-2"></div>
                    </div>
                    <div class="row disqus-row">
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
                        <div class="col-sm-5 col-xs-12 webinar-listing">
                            <h4>Next Webinars</h4>
                            <div class="row webinar-row">
                                <div class="col-xs-6 col-sm-4 blue-col">
                                    Tuesday<br /><span class="date-digit">7</span><sup>th</sup><br />October
                                </div>
                                <div class="col-xs-6 col-sm-8 blue-col-text">
                                   <p><span >7</span><sup>th</sup>October 2014 - 12:00 BST, 13:00 CEST, 14:00 CEST.</p>
                                </div>
                            </div>
                            <div class="row webinar-row">
                                <div class="col-xs-6 col-sm-4 blue-col">
                                    Wednesday<br /><span class="date-digit">8</span><sup>th</sup><br />October
                                </div>
                                <div class="col-xs-6 col-sm-8 blue-col-text">
                                    <p><span >8</span><sup>th</sup>October 2014 - 12:00 BST, 13:00 CEST, 14:00 CEST.</p>
                                </div>
                            </div>
                            <div class="row webinar-row">
                                <div class="col-xs-6 col-sm-4 blue-col">
                                    Thursday<br /><span class="date-digit">9</span><sup>th</sup><br />October
                                </div>
                                <div class="col-xs-6 col-sm-8 blue-col-text">
                                    <p><span>9</span><sup>th</sup>October 2014 - 12:00 BST, 13:00 CEST, 14:00 CEST.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 col-sm-4 blue-col">
                                    Friday<br /><span class="date-digit">10</span><sup>th</sup><br />October
                                </div>
                                <div class="col-xs-6 col-sm-8 blue-col-text">
                                    <p><span>10</span><sup>th</sup>October 2014 - 12:00 BST, 13:00 CEST, 14:00 CEST.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        //brings the video into view on page load(to avoid visitors having to scroll down to see video)
        window.onload = function(){
            var dateUp = CtimerObj.liveYet(12,"10/06/2014");
            if(dateUp === true){
                var elView = document.getElementById("videoView");
                elView.scrollIntoView(true);
            }else{
                window.location.href = "index.php";
            }
        }
    </script>
<?php
echo $headerandfooter->getFooter();
?>