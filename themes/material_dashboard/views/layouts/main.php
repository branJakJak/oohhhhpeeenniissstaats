<?php 
    $baseUrl = Yii::app()->theme->baseUrl;
    /**
     * Disable jquery loading
     */
    Yii::app()->clientScript->scriptMap = array(
            'jquery.js'=>false
        );

    /**
     * Register CSS
     */
    Yii::app()->clientScript->registerCssFile($baseUrl."/vendors/bower_components/fullcalendar/dist/fullcalendar.min.css");
    Yii::app()->clientScript->registerCssFile($baseUrl."/vendors/bower_components/animate.css/animate.min.css");
    Yii::app()->clientScript->registerCssFile($baseUrl."/vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.css");
    Yii::app()->clientScript->registerCssFile($baseUrl."/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css");
    Yii::app()->clientScript->registerCssFile($baseUrl."/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css");
    Yii::app()->clientScript->registerCssFile($baseUrl."/css/app.min.1.css");
    Yii::app()->clientScript->registerCssFile($baseUrl."/css/app.min.2.css");
    
    /**
     * Register Javascript files
     */
    Yii::app()->clientScript->registerScriptFile($baseUrl.'/vendors/bower_components/jquery/dist/jquery.min.js', CClientScript::POS_HEAD);
    Yii::app()->clientScript->registerScriptFile($baseUrl.'/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js', CClientScript::POS_HEAD);
    Yii::app()->clientScript->registerScriptFile($baseUrl.'/vendors/bower_components/flot/jquery.flot.js', CClientScript::POS_HEAD);
    Yii::app()->clientScript->registerScriptFile($baseUrl.'/vendors/bower_components/flot/jquery.flot.resize.js', CClientScript::POS_HEAD);
    Yii::app()->clientScript->registerScriptFile($baseUrl.'/vendors/bower_components/flot.curvedlines/curvedLines.js', CClientScript::POS_HEAD);
    Yii::app()->clientScript->registerScriptFile($baseUrl.'/vendors/sparklines/jquery.sparkline.min.js', CClientScript::POS_HEAD);
    Yii::app()->clientScript->registerScriptFile($baseUrl.'/vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js', CClientScript::POS_HEAD);
    Yii::app()->clientScript->registerScriptFile($baseUrl.'/vendors/bower_components/moment/min/moment.min.js', CClientScript::POS_HEAD);
    Yii::app()->clientScript->registerScriptFile($baseUrl.'/vendors/bower_components/fullcalendar/dist/fullcalendar.min.js ', CClientScript::POS_HEAD);
    Yii::app()->clientScript->registerScriptFile($baseUrl.'/vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js', CClientScript::POS_HEAD);
    Yii::app()->clientScript->registerScriptFile($baseUrl.'/vendors/bower_components/Waves/dist/waves.min.js', CClientScript::POS_HEAD);
    Yii::app()->clientScript->registerScriptFile($baseUrl.'/vendors/bootstrap-growl/bootstrap-growl.min.js', CClientScript::POS_HEAD);
    Yii::app()->clientScript->registerScriptFile($baseUrl.'/vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.min.js', CClientScript::POS_HEAD);
    Yii::app()->clientScript->registerScriptFile($baseUrl.'/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js', CClientScript::POS_HEAD);
    Yii::app()->clientScript->registerScriptFile($baseUrl.'/js/flot-charts/curved-line-chart.js', CClientScript::POS_HEAD);
    Yii::app()->clientScript->registerScriptFile($baseUrl.'/js/flot-charts/line-chart.js', CClientScript::POS_HEAD);
    Yii::app()->clientScript->registerScriptFile($baseUrl.'/js/charts.js', CClientScript::POS_HEAD);
    Yii::app()->clientScript->registerScriptFile($baseUrl.'/js/functions.js', CClientScript::POS_HEAD);
    /*Greet the user*/
    // Yii::app()->clientScript->registerScriptFile($baseUrl.'/js/demo.js', CClientScript::POS_HEAD);
?>
<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo Yii::app()->name ?> | <?php echo $this->pageTitle ?></title>
    </head>
    <body>
        <?php 
            require_once 'tpl_navigation.php';
        ?>

        
        <section id="main" data-layout="layout-1">
            <aside id="sidebar" class="sidebar c-overflow">
                <?php 
                    require_once 'profile_menu.php';
                ?>
                <?php 
                    require_once 'main_menu.php';
                ?>
            </aside>
            <?php echo $content ?>
        </section>
        
        <?php 
            require_once 'tpl_footer.php';
        ?>

        <!-- Page Loader -->
        <div class="page-loader">
            <div class="preloader pls-blue">
                <svg class="pl-circular" viewBox="25 25 50 50">
                    <circle class="plc-path" cx="50" cy="50" r="20" />
                </svg>

                <p>Please wait...</p>
            </div>
        </div>
        
        <!-- Older IE warning message -->
        <!--[if lt IE 9]>
            <div class="ie-warning">
                <h1 class="c-white">Warning!!</h1>
                <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
                <div class="iew-container">
                    <ul class="iew-download">
                        <li>
                            <a href="http://www.google.com/chrome/">
                                <img src="img/browsers/chrome.png" alt="">
                                <div>Chrome</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.mozilla.org/en-US/firefox/new/">
                                <img src="img/browsers/firefox.png" alt="">
                                <div>Firefox</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.opera.com">
                                <img src="img/browsers/opera.png" alt="">
                                <div>Opera</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.apple.com/safari/">
                                <img src="img/browsers/safari.png" alt="">
                                <div>Safari</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                                <img src="img/browsers/ie.png" alt="">
                                <div>IE (New)</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <p>Sorry for the inconvenience!</p>
            </div>   
        <![endif]-->
        
        
        <!-- Placeholder for IE9 -->
        <!--[if IE 9 ]>
            <script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
        <![endif]-->

        
    </body>
  </html>