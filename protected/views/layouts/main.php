<!doctype html>
<!--[if IEMobile 7]><html class="no-js iem7 oldie"><![endif]-->
<!--[if lt IE 7]><html class="no-js ie6 oldie" lang="en"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js ie7 oldie" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js ie8 oldie" lang="en"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en"><!--<![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <title></title>
    <!-- http://t.co/dKP3o1e -->
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, target-densitydpi=160dpi, initial-scale=1.0">
    <!--[if (lt IE 9) & (!IEMobile)]>
    <script src="themes/sunrise/js/libs/selectivizr-min.js"></script>
    <![endif]-->
    <!-- JavaScript -->
    <script src="/js/libs/modernizr-2.0.6.min.js"></script>

    <!-- For iPhone 4 -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="themes/sunrise/img/h/apple-touch-icon.png">
    <!-- For iPad 1-->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="themes/sunrise/img/m/apple-touch-icon.png">
    <!-- For iPhone 3G, iPod Touch and Android -->
    <link rel="apple-touch-icon-precomposed" href="themes/sunrise/img/l/apple-touch-icon-precomposed.png">
    <!-- For Nokia -->
    <link rel="shortcut icon" href="themes/sunrise/img/l/apple-touch-icon.png">
    <!-- For everything else -->
    <link rel="shortcut icon" href="themes/sunrise/favicon.ico">

    <!--iOS. Delete if not required -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="apple-touch-startup-image" href="themes/sunrise/img/splash.png">

    <!--Microsoft. Delete if not required -->
    <meta http-equiv="cleartype" content="on">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!--[if lt IE 7 ]><script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.2/CFInstall.min.js"></script><script>window.attachEvent("onload",function(){CFInstall.check({mode:"overlay"})})</script><![endif]-->
    <link rel="canonical" href="/">
    <!-- Load jQuery -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script type="text/javascript">
    if (typeof jQuery == 'undefined') {
        document.write(unescape("%3Cscript src='themes/sunrise/js/libs/jquery-1.6.2.min.js' type='text/javascript'%3E%3C/script%3E"));
    }
    </script>
    <!-- Load CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/layout.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/typography.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
</head>

<body class="clearfix">

    <header role="banner" id="header"><!-- #header start -->

        <div id="inner-header" class="clearfix"><!-- #inner-header start -->

            <!-- Search -->
            <div id="search-wrapper">
                <div id="search-toggle"></div>
                <form enctype="application/x-www-form-urlencoded" method="get" action="/home/SearchForm" id="SearchForm_SearchForm" style="margin-right: -196px;">
	                 <fieldset>
		             <legend></legend>
			         <div class="field text  nolabel" id="Search"><div class="middleColumn"><input type="text" value="" name="Search" id="SearchForm_SearchForm_Search" class="text nolabel"></div></div>
		          	 <input type="submit" title="Go" value="Go" name="action_results" id="SearchForm_SearchForm_action_results" class="action ">
					</fieldset>
				</form>
            </div>

            <!-- Site title -->
            <h1><a href="/" title="Trabajo De Recepcionista">Trabajo De Recepcionista!</a></h1>

            <!-- Site tagline -->
            <p></p>

        </div><!-- #inner-header end -->

        <!-- navigation -->
        <nav role="navigation" id="navigation" class="clearfix"><!-- #navigation start -->
        <?php $this->widget('zii.widgets.CMenu',array(
            'items'=>array(
                array('label'=>'Home', 'url'=>array('/site/index')),
                array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                array('label'=>'Contact', 'url'=>array('/site/contact')),
            ),
        )); ?>
        </nav><!-- #navigation end -->
    </header><!-- #header end -->

    <div id="content" class="clearfix"><!-- #content start -->

        <div id="main" role="main" class="clearfix"><!-- #main start -->
          <style type='text/css'>#indJobContent{padding-bottom: 5px;width: 800px;}#indJobContent .company_location{font-size: 11px;overflow: hidden;display:block;}#indJobContent.wide .job{display:block;float:left;margin-right: 5px;width: 135px;overflow: hidden}#indeed_widget_wrapper{position: relative;font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;font-size: 13px;font-weight: normal;line-height: 18px;padding: 10px;height: auto;overflow: hidden;}#indeed_widget_header{font-size:18px; padding-bottom: 5px; }#indeed_search_wrapper{clear: both;font-size: 12px;margin-top: 5px;padding-top: 5px;}#indeed_search_wrapper label{font-size: 12px;line-height: inherit;text-align: left; margin-right: 5px;}#indeed_search_wrapper input[type='text']{width: 100px;}#indeed_search_wrapper #qc{float:left;}#indeed_search_wrapper #lc{float:right;}#indeed_search_wrapper.stacked #qc, #indeed_search_wrapper.stacked #lc{float: none; clear: both;}#indeed_search_wrapper.stacked input[type='text']{width: 150px;}#indeed_search_wrapper.stacked label{display: block;padding-bottom: 5px;}#indeed_search_footer{width:295px; padding-top: 5px; clear: both;}#indeed_link{position: absolute;bottom: 1px;right: 5px;clear: both;font-size: 11px;  }#indeed_link a{text-decoration: none;}#results .job{padding: 1px 0px;}</style><style type='text/css'>
#indeed_widget_wrapper{ width: 300px; height: 250px; background: #FFFFFF;}
#indeed_widget_wrapper, #indeed_link a{ color: #000000;}
#results > div { float:left;}
#results .job  { margin: 0 10px 20px 0;width: 190px;}
#indJobContent a { color: #00c; }
#indeed_widget_header{ color: #000000; }
</style>
<script type='text/javascript'>
var ind_pub = '4590579897253855';
var ind_el = 'indJobContent';
var ind_pf = '';
var ind_q = 'Recepcionista';
var ind_l = 'Hermosillo, Son.';
var ind_chnl = 'Recepcionista';
var ind_n = 900;
var ind_d = 'http://www.indeed.com.mx';
var ind_t = 40;
var ind_c = 30;
</script>
<script type='text/javascript' src='http://www.indeed.com/ads/jobroll-widget-v2.js'></script>

<div id='indJobContent' class="clearfix"></div>
        </div><!-- #main end -->

    </div><!-- .content end -->

    <footer role="contentinfo" class="clearfix" id="footer"><!-- #footer start -->

        <div id="inner-footer" class="clearfix"><!-- #inner-footer start -->
			<p>&copy; Trabajo de Recepcionista </p>
        </div><!-- #inner-footer end -->

    </footer><!-- #footer end -->

    <!-- Scripts -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/plugins.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/script.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/mylibs/helper.js"></script>

    <!--[if (lt IE 9) & (!IEMobile)]>
    <script src="/js/libs/imgsizer.js"></script>
    <![endif]-->

    <script>
    // iOS scale bug fix
    MBP.scaleFix();

    // Respond.js
    yepnope({
        test : Modernizr.mq('(only all)'),
        nope : ['/js/libs/respond.min.js']
    });
    </script>

    <!-- Google analytics -->
    <!-- http://mths.be/aab -->
    <script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']]; // Change UA-XXXXX-X to be your site's ID
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>

</body>
</html>