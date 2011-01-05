<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <meta name="description" content="Le casette di Lulù - Palermo - Appartamenti - Bed & Breakfast" />
        <meta name="keywords" content="palermo,bed-and-breakfast,appartamento,apartment,zimmer,rooms,camera,b&b,affittacamere,hotel,pensione,camere,bed and breakfast" />
        <meta name="author" content="marcius" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/lulu.css" media="screen" />
        <!--link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/gradientbtn/gradientbtn.css" media="screen" /-->
    </head>

    <body>

        <!-- Header Begin -->
        <div id="header">
            <div class="container">
                <div id="header-logo" class="span-24">
                    <div id="lingue">
                        <div class="prepend-20 span-4 last">
                            <a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/flag/unitedkingdom.png"/></a>
                            <a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/flag/italy.png"/></a>
                            <a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/flag/france.png"/></a>
                            <a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/flag/germany.png"/></a>
                        </div>
                    </div>
                    <div id="navbar">
                        <div><a href="/">Home</a><span></span></div>
                        <div><a href="<?php echo Yii::app()->createUrl("site/rates"); ?>">Tariffe</a><span></span></div>
                        <div><a href="<?php echo Yii::app()->createUrl("site/contact"); ?>">Contatti</a><span></span></div>
                        <div><a href="<?php echo Yii::app()->createUrl("site/book"); ?>">Prenota</a><span></span></div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
        <!-- Content Start -->
        <?php echo $content; ?>
        <!-- Content End -->
        <!-- Footer Start -->
        <div id="footer">
            <div class="container">
                <div class="span-24">
                    <div class="box roundBox">
                        <div id="footer-left" class="span-8 first">
                            <div class="contact clearfix">
                                <a href="/contact-us/" class="tel">(+39) 328 973 3951</a>
                                <a href="mailto:info@lecasettedilulu.it" class="email">info@lecasettedilulu.it<br/>Via A. Pecoraro Lombardo 48, Palermo</a>
                            </div><!-- .contact.clearfix -->
                        </div>
                        <div id="footer-middle" class="span-7">
                            <div class="span-7">Ci trovi anche su:</div>
                            <div class="span-7 networks">
                                <div class="facebook"><a href="http://www.facebook.com/pages/Le-casette-di-Lulu-Palermo/142327585820864" target="_blank"></a></div>
                                <div class="twitter"><a href="http://www.twitter.com/lecasettedilulu" target="_blank"></a></div>
                                <div class="linkedin"><a href="#"></a></div>
                            </div>
                        </div>
                        <div id="footer-right" class="span-8 last">
                            <div >
                            <div class="span-7">Raccomandaci ai tuoi amici</div>
                            <div class="span-7 likes">
                                <iframe
                                    src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.lecasettedilulu.it&amp;layout=box_count&amp;show_faces=false&amp;width=190&amp;action=like&amp;font=verdana&amp;colorscheme=light&amp;height=65"
                                    scrolling="no" frameborder="0"
                                    style="border:none; overflow:hidden; width:190px; height:65px; margin-top: 5px;"
                                    allowTransparency="true">
                                </iframe>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script type="text/javascript">

            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-18997394-1']);
            _gaq.push(['_setDomainName', 'none']);
            _gaq.push(['_setAllowLinker', true]);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();

        </script>
        <!-- http://www.google.com/support/analytics/bin/answer.py?hl=it_IT&answer=175538&utm_id=ad -->

    </body>
</html>


<!--
                        <div id="navbar" style="margin: 20px 0px 0px 460px;">
                            <div class="btn btn_orange"><a href="#">Home</a><span></span></div>
                            <div class="btn btn_green"><a href="#">Tariffe</a><span></span></div>
                            <div class="btn btn_red"><a href="#">Contatti</a><span></span></div>
                            <div class="btn btn_blue"><a href="#">Prenota</a><span></span></div>
                            <div class="clear"></div>
                        </div>
-->
