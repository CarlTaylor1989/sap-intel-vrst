<?php

class HeaderAndFooter {
	function getPageHeader($mainclass)
	{
		$pageHeader =  '<!DOCTYPE html>
					    <html lang="en">
					    <head>
							<meta charset="utf-8" />
							<meta http-equiv="x-ua-compatible" content="IE=edge,chrome=1" />
							<meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
							<meta name="description" content="Big Data Week 2014 (6-10th October) will bring to life the 
							insights, opportunities and latest thinking around Big Data. In 20 minutes, these easy-to-digest 
							shows will open your eyes to the limitless possibilities hidden within Big Data." />
							<meta name="keywords" content="Big Data, Big Data Week, SAP Big Data Tour">
							<meta name="viewport" content="width=device-width, initial-scale=1" />
							<link type="text/css" rel="stylesheet" href="../content/fonts/benton-sans/benton-sans.css" />
							<link type="text/css" rel="stylesheet" href="../content/vendor/bootstrap/css/bootstrap.min.css" />
							<link type="text/css" rel="stylesheet" href="../content/fonts/font-awesome/font-awesome.css" />
							<link type="text/css" rel="stylesheet" href="../content/vendor/animate/animate.css" />
							<link type="text/css" rel="stylesheet" href="../content/css/main.css" />
							<link rel="stylesheet" href="../content/css/prettyPhoto.css" type="text/css" media="screen" 
							title="prettyPhoto main stylesheet" charset="utf-8" />
							<link href="/favicon.ico" rel="shortcut icon"/>
							<title>Big Data Week 2014 | 6-10th October 2014 | SAP Big Data Tour</title>
						</head>
						<body class="'.$mainclass.'">
							<!-- Modal -->
							<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true">
  							<div class="modal-dialog">
    							<div class="modal-content">
      							<div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
							        <h4 class="modal-title" id="videoModal">&nbsp;</h4>
							      </div>
							      <div class="modal-body" id="videoplayer">
							        <iframe src="" width="100%" height="450" frameborder="0"></iframe>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							      </div>
							    </div>
							  </div>
							</div>';
		
		return $pageHeader;
	}
	
	function getMenuSystem($page)
	{
		$menusystem = '<div class="wrap">
						<div class="top">
							<div class="header container">
								<div class="left">
									<img src="../content/img/sap-logo.png" alt="SAP" />
								</div>
								<div class="right">
									<img src="../content/img/intel-logo.png" alt="Intel" />
								</div>
								<div class="navi-header">
									<nav class="navbar navbar-default" role="navigation">
										<div class="container-fluid">
											<div class="navbar-header">
												<button type="button" class="navbar-toggle collapsed" 
												data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
													<span class="sr-only">Toggle navigation</span>
													<span class="fa fa-bars"></span>
													<span class="fa fa-close hide"></span>
												</button>
											</div>
				
											<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
												<ul class="nav navbar-nav">
													<li '.($page == "index" ? 'class="active"' : '').'><a href="../">Home <span class="pull-right fa fa-angle-right visible-xs"></span></a></li>
													<li '.($page == "data-tour" ? 'class="active"' : '').'><a href="../bigdatatour">Big Data Tour <span class="pull-right fa fa-angle-right visible-xs"></span></a></li>
													<li '.($page == "data-week" ? 'class="active"' : '').'><a href="../bigdataweek">Big Data Week <span class="pull-right fa fa-angle-right visible-xs"></span></a></li>
													<li '.($page == "sap-hana" ? 'class="active"' : '').'><a href="../saphanaadoption">HANA Adoption <span class="pull-right fa fa-angle-right visible-xs"></span></a></li>
												</ul>
											</div>
										</div>
									</nav>
								</div>
							</div>';
			
			return $menusystem;
	}
	
	function getFooter()
	{
		$footer = '<div class="bottom">
					<div class="footer">
						<div class="container clearfix">
							<ul class="navigation clearfix">
								<li><a target="_blank" href="http://www.sap.com/about/legal/impressum.html">Legal</a></li>
								<li><a target="_blank" href="http://www.sap.com/corporate-en/about/legal/terms-of-use.html">Terms</a></li>
								<li><a target="_blank" href="http://www.sap.com/about/legal/privacy.html ">Privacy</a></li>
								<li class="last"><a target="_blank" href="http://www.sap.com/about/legal/copyright.html">Copyright</a></li>
							</ul>
							<ul class="social clearfix">
								<li><a target="_blank" class="facebook" href="https://www.facebook.com/HANAbySAP"></a></li>
								<li><a target="_blank" class="twitter" href="https://twitter.com/SAPInMemory"></a></li>
								<li class="last"><a target="_blank" class="google"
								 href="https://plus.google.com/communities/108413280272557646593"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		
			<script type="text/javascript">
				(function (i, s, o, g, r, a, m) {
					i[\'GoogleAnalyticsObject\'] = r; i[r] = i[r] || function () {
						(i[r].q = i[r].q || []).push(arguments);
					}, i[r].l = 1 * new Date(); a = s.createElement(o),
					m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g;
					m.parentNode.insertBefore(a, m);
				})(window, document, \'script\', \'//www.google-analytics.com/analytics.js\', \'ga\');
		
				ga(\'create\', \'UA-54670033-1\', \'auto\');
				ga(\'send\', \'pageview\');
			</script>
			<script type="text/javascript" src="../content/vendor/jquery/jquery-1.11.1.min.js"></script>
      <script type="text/javascript" src="../content/vendor/jquery/jquery-migrate-1.2.1.min.js"></script>
      <script type="text/javascript" src="../content/vendor/jquery/jquery.validate.min.js"></script>
  
      <script type="text/javascript" src="../content/vendor/bootstrap/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="../content/vendor/respondjs/respond.min.js"></script>
      <script type="text/javascript" src="../content/vendor/ticker/jquery.easy-ticker.min.js"></script>
      <script type="text/javascript" src="../content/vendor/handlebars/handlebars-v2.0.0.js"></script>
      <script id="markers-template" type="text/x-handlebars-template">
          {{#each data}}
              <div class="map-marker" style="position: absolute; left: {{x-cord}}px; top: {{y-cord}}px">
                  <span class="fa fa-map-marker this-marker marker-active" id="{{@index}}"></span>
              </div>
          {{/each}}
      </script>
      <script id="content-template" type="text/x-handlebars-template">
          {{#each data}}
              {{#if carousel}}
              <div id="post-content-carousel-{{@index}}" class="carousel slide hide content-{{@index}}" data-ride="carousel-{{@index}}">
                  <div class="carousel-inner">
                      {{#each content}}
                      <div class="item{{#if active}} active{{/if}}{{#if username}} {{username}}{{/if}}">
                          <p>{{{desc}}}</p>
                      </div>
                      {{/each}}
                  </div>
                  <a class="left carousel-control" href="#post-content-carousel-{{@index}}" role="button" data-slide="prev">
                  <img src="../content/img/post-left.png" alt="">
                  </a>
                  <a class="right carousel-control" href="#post-content-carousel-{{@index}}" role="button" data-slide="next">
                  <img src="../content/img/post-right.png" alt="">
                  </a>
              </div>
              {{else}}
              <p class="hide content-{{@index}}">{{{content.desc}}}</p>
              {{/if}}
          {{/each}}
      </script>
      <script type="text/javascript" src="../content/js/bigdatatour.js"></script>
			<script type="text/javascript" src="../content/js/home_page.js"></script>
      <script src="../content/vendor/jquery.backstretch.min.js"></script>
      <script src="../content/vendor/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>			
		</body>
		</html>';
		
		return $footer;
	}
}

?>