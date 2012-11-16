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
    <script type="text/javascript" src="http://gdc.indeed.com/ads/apiresults.js"></script>
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
                array('label'=>'Inicio', 'url'=>array('/site/index')),
                array('label'=>'Ciudades', 'url'=>array('/mexStates/index')),
                array('label'=>'Acerca de', 'url'=>array('/site/page', 'view'=>'about')),
                array('label'=>'Contacto', 'url'=>array('/site/contact')),
            ),
        )); ?>
        </nav><!-- #navigation end -->
    </header><!-- #header end -->
    <?php if(isset($this->breadcrumbs)):?>
<?php $this->widget('zii.widgets.CBreadcrumbs', array(
    'homeLink' => CHtml::link('Inicio', Yii::app()->homeUrl),
'links'=>$this->breadcrumbs,
)); ?><!-- breadcrumbs -->
<?php endif?>
    <div id="content" class="clearfix">
        <div id="main" role="main" class="clearfix"><!-- #main start -->
                <?php echo $content; ?>
        </div><!-- #main end -->
        <aside class="sidebar">

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla libero risus, pretium id ornare in, luctus quis purus. Integer vel porta justo. Mauris nec mauris nec ipsum porta viverra vitae quis urna. Nunc vitae risus ac nibh tincidunt vulputate tempor sed tellus. Donec auctor pellentesque mi nec elementum. Suspendisse sit amet euismod arcu. Praesent interdum egestas pulvinar.

Etiam purus felis, fermentum placerat pretium at, congue non felis. Nulla lacinia pretium sollicitudin. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum consectetur ultricies diam quis volutpat. Nunc in enim dolor, imperdiet adipiscing urna. Nulla eget nibh sed nulla rutrum pellentesque. Sed vitae lorem eget quam tempus eleifend. Ut ac erat mauris, ut blandit orci. Morbi pretium orci eget libero hendrerit consectetur. Vestibulum scelerisque arcu vitae augue ultricies eu tristique nunc tristique.

Proin vitae leo sapien, non interdum velit. Vestibulum vel metus sapien, in commodo ante. In tellus metus, pellentesque ut vehicula sit amet, cursus eu enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc in tellus augue. Morbi interdum adipiscing mi eu feugiat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam pulvinar interdum euismod. Pellentesque auctor gravida magna quis faucibus. Maecenas ultricies ullamcorper nibh, eget vestibulum metus egestas non.

Suspendisse eget est eget dolor ornare aliquet. Donec bibendum, risus eget vulputate luctus, leo dui gravida odio, et consequat tortor urna et libero. Etiam iaculis odio non eros porta non convallis sapien hendrerit. Donec ante nunc, accumsan a lobortis sed, lobortis in felis. Aenean vehicula tincidunt nulla, vel faucibus lorem fringilla at. In justo arcu, adipiscing in consectetur rhoncus, mattis nec enim. Pellentesque pellentesque varius nulla eu rutrum. Nunc quam neque, euismod a sagittis ac, venenatis sed nulla. Proin auctor eros ante. Duis metus urna, sagittis non posuere sit amet, ullamcorper vel magna. Nam fermentum, orci eget commodo lobortis, lorem mauris rhoncus nunc, in volutpat tortor quam eu nibh. Donec id risus sit amet sapien commodo pulvinar nec in odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sollicitudin aliquam congue. Aenean a purus id urna porta lacinia in in risus.

Vestibulum in lectus nibh. Curabitur nunc ante, volutpat at pretium ac, malesuada at tellus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam cursus diam at urna porttitor vitae porttitor ipsum tristique. Aliquam erat volutpat. Pellentesque eget neque massa, eu dapibus ipsum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla orci neque, consequat a consectetur quis, auctor non lacus. 
        </aside>

    </div>    
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