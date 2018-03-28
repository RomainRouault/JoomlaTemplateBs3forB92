<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
$app = Jfactory::getApplication();

//compilateur less
if ($this->params->get('compileLess', 0)) {
if (!class_exists('lessc')) {
require_once dirname(__FILE__).'/less/lessc.inc.php';
}
$less = new lessc;
$less->compileFile("templates/".$this->template."/less/template.less", "templates/".$this->template."/css/template.css");
}

// parametre class fluide ou pas?
$fluid = $this->params->get('sitefluide', '0') ? '-fluid' : '';

 $position8ornot = (bool)$this->countModules('position-8');
if ($position8ornot == 1 )
{
    $colcompontent = "col-xs12 col-sm-12 col-md-9 col-lg-9";
}
else
{
    $colcompontent = "col-xs12 col-sm-12 col-md-12 col-lg-12";
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <jdoc:include type="head" />
    <!--appel feuille Bootstrap -->
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/bootstrap/css/bootstrap.min.css" type="text/css" />

    <!-- appel feuille Font Awesome -->
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/font-awesome/css/font-awesome.min.css" type="text/css" />

    <!-- appel feuilles perso -->
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/custom-min.css" type="text/css" />

    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/custom1.css" type="text/css" />

    <!-- Font 'cabin' depuis CDN Google-->
    <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet"> 

</head>

<body>
    <div id="load"></div>
    <div class="container<?php echo $fluid ?>">
        <div class="row wrapper">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 wrapper" id="shadow">
                <!-- header de page -->
                <div class="row<?php echo $fluid ?>">
                    <header class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <!-- logo -->
                        <div id="header-logo" class="header-wrapper">
                            <a  href="<?php echo $this->baseurl; ?>">
                                <img src="<?php echo JURI::root() ?>templates/<?php echo $this->template ?>/images/logo.png" id="logo-top" alt="<?php echo $app->getCfg('sitename') ?>" title="Acceuil" />
                            </a>
                        </div>

                        <div class="header-wrapper" id="header-content">
                            <!-- module top right - recherche -->
                            <?php if ($this->countModules('position-0')): ?>
                            <div id="headermodule">
                                <div id="recherche">
                                    <jdoc:include type="modules" name="position-0" style="none" />
                                </div>
                            </div>
                            <?php endif; ?>    

                            <!-- naviguation fixe-->
                            <?php if ($this->countModules('position-1')): ?>

                            <nav class="navbar navbar-defaut" role="navigation" id="mainnav">
                                <div class="container-fluid">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false" aria-controls="navbar">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                    <div class="collapse navbar-collapse" id="menu">
                                        <jdoc:include type="modules" name="position-1" style="none" />
                                    </div><!-- /.navbar-collapse -->
                                </div>
                            </nav>

                            <?php endif; ?><!-- /naviguation fixe -->

                            <!-- naviguation scroll-->
                            <?php if ($this->countModules('position-7')): ?>
                            <nav class="navbar navbar-defaut" role="navigation" id="mainnav-scroll">
                                <div class="container-fluid">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-scroll" aria-expanded="false" aria-controls="navbar">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                        <a class="navbar-brand" href="/"><span class="logo-formes jaune" aria-hidden="true"></span></a>
                                    </div>
                                    <div class="collapse navbar-collapse" id="menu-scroll">
                                        <jdoc:include type="modules" name="position-7" style="none" />
                                    </div><!-- /.navbar-collapse -->
                                </div>
                            </nav>
                            <?php endif; ?><!-- /naviguation scroll -->

                        </div>
                    </header>
                </div><!-- /row header -->

                <jdoc:include type="message" />
                
                <!-- maincontent -->
                <div class="row<?php echo $fluid ?>">
                    <div id="maincontent" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                        <!-- article en vedette -->
                        <div class="row<?php echo $fluid ?>">

                            <div id="composant" class="<?php echo $colcompontent ?>">
                                <jdoc:include type="component"/>
                            </div>

                            <!-- colonne de droite -->
                            <?php if ($this->countModules('position-8')): ?>
                            <div id="right-column" class="col-xs12 col-sm-12 col-md-3 col-lg-3">
                                <jdoc:include type="modules" name="position-8" style="xhtml" />
                            </div>
                            <?php endif; ?>    
                        </div>

                        <div class="row<?php echo $fluid ?>">
                            <!--derniers articles-->
                            <?php if ($this->countModules('position-2')): ?>
                            <div id="last-article" class="col-xs12 col-sm-12 col-md-9 col-lg-9">
                                <div id="rss-actu" class="rss">
                                    <h2><a href="<?php echo $this->baseurl ?>/l-association/actualites-2" class="main-title" title="Voir toutes les actualités">Actualités</a><a href="<?php echo $this->baseurl ?>l-association/actualites-2?format=feed&type=rss" class="main-title" title="Abonnez-vous au flux RSS des actualités de Bib92" target="_blank"><i class="fa fa-fw fa-rss" aria-hidden="true"></i></a></h2>
                                </div>
                                <jdoc:include type="modules" name="position-2" style="none" />
                            </div>
                            <?php endif; ?>    

                            <!-- side left column-->
                            <?php if ($this->countModules('position-3')): ?>
                            <div id="left-column" class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                            <div id="rss-agenda" class="rss">
                                    <h2><a href="<?php echo $this->baseurl ?>/ressources/agenda" class="main-title" title="Voir les évènements du mois">Agenda</a><a href="<?php echo $this->baseurl ?>/index.php?option=com_jevents&task=modlatest.rss&format=feed&type=rss&Itemid=1&modid=0" class="main-title" title="Abonnez-vous au flux RSS de l'agenda de Bib92" target="_blank"><i class="fa fa-fw fa-rss" aria-hidden="true"></i></a></h2>
                            </div>
                                <jdoc:include type="modules" name="position-3" style="none" />
                            </div>  
                            <?php endif; ?> <!-- /side left column -->
                        </div>
                    </div>
                </div><!-- /row maincontent -->

                <!-- aside assoc -->
                <?php if ($this->countModules('position-4')): ?>
                <aside class="row" id="lassociation-row">
                    <div id="assoc-content" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <jdoc:include type="modules" name="position-4" style="none" />  
                    </div>
                </aside><!-- /aside maincontent -->
                <?php endif; ?> <!-- /aside assoc -->

                <!-- aside carte -->
                <?php if ($this->countModules('position-5')): ?>
                <aside class="row" id="carte-row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <jdoc:include type="modules" name="position-5" style="none" />  
                    </div>
                </aside><!-- /aside maincontent -->
                <?php endif; ?> <!-- /aside carte -->


                <!-- Footer -->
                <footer class="row<?php echo $fluid ?>" id="footer">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <jdoc:include type="modules" name="position-6" style="none" />  
                    </div>
                </footer><!--/row footer-->

            </div> <!--/container -->
        </div> <!-- wrapper shadow col-->
    </div> <!--/ wrapper-shadow row-->
    <jdoc:include type="modules" name="debug" style="none" />
    <div id="fb-root"></div>

<!-- Bootstrap Javascript -->
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/bootstrap/js/bootstrap.min.js"></script>

<!-- jQuery + jQuery UI & plugins -->
<?php JHtml::_('jquery.framework', false); 
?>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/script/jquery-ui.min.js"></script>


<!-- Scripts persos -->
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/script/bib92-compressed.js"></script>

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- twt -->
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

</body>
</html>