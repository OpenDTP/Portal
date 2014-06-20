<?php
/**
 * @package     Opendtp.Site
 * @subpackage  Templates.opendtp
 *
 * @copyright   Copyright (C) 2014 OpenDTP. All rights reserved.
 * @license     GNU General Public License version 2 or later
 */
 
defined('_JEXEC') or die;
$params = JFactory::getApplication()->getTemplate(true)->params;
$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$this->language = $doc->language;
$this->direction = $doc->direction;
$template = JFactory::getApplication()->getTemplate();
$templatePath = JURI::root() . 'templates/' . $template;

$option   = $app->input->getCmd('option', '');
$view     = $app->input->getCmd('view', '');
$layout   = $app->input->getCmd('layout', '');
$task     = $app->input->getCmd('task', '');
$itemid   = $app->input->getCmd('Itemid', '');
$sitename = $app->getCfg('sitename');

// Add JavaScript Frameworks
$doc->addScript('templates/' .$this->template. '/js/bootstrap.min.js');
$doc->addScript('templates/' .$this->template. '/js/main.js');

// Add Stylesheets
$doc->addStyleSheet('templates/'.$this->template.'/css/bootstrap.min.css');
$doc->addStyleSheet('templates/'.$this->template.'/css/bootstrap-theme.css');
$doc->addStyleSheet('templates/'.$this->template.'/css/template.css');

$user = JFactory::getUser();

// Adjusting content width
/* if ($this->countModules('position-7') && $this->countModules('position-8'))
{
	$span = "col-md-6";
}
elseif ($this->countModules('position-7') && !$this->countModules('position-8'))
{
	$span = "col-md-9";
}
elseif (!$this->countModules('position-7') && $this->countModules('position-8'))
{
	$span = "col-md-9";
}
else
{
	$span = "col-md-12";
} */
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <jdoc:include type="head" />
</head>
<body class="site <?php echo $option
	. ' view-' . $view
	. ($layout ? ' layout-' . $layout : ' no-layout')
	. ($task ? ' task-' . $task : ' no-task')
	. ($itemid ? ' itemid-' . $itemid : '')
	. ($params->get('fluidContainer') ? ' fluid' : '');
?>">
    <?php if ($this->countModules('position-1')) : ?>
    <div class="navbar-wrapper">
        <div class="container">
            <div class="navbar navbar-inverse navbar-static-top" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="./"><img src="<?php echo $templatePath; ?>/images/logoopendtp-min.png" ></img></a>
                </div>
                <div class="navbar-collapse collapse">
                    <jdoc:include type="modules" name="position-1" style="none" />
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    
    <?php if(JRequest::getVar('view') == "featured" ) : ?>
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active">
          <img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" >
          <div class="container">
            <div class="carousel-caption">
              <h1>Bienvenue sur OpenDTP</h1>
              <p> Publier intelligemment avec OpenDTP</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Enregistrez-vous dés maintenant</a></p>
              <p class="row"><br /></p>
            </div>
          </div>
        </div>
        <jdoc:include type="component" />
       </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->
    <?php else: ?>
        <div id="blank_menu" class="row"></div>
    <?php endif; ?>
    <?php /*if ($this->countModules('position-3') && false) : ?>
        <?php <div class="row slideshow">
            <div class="col-md-12">
            <jdoc:include type="modules" name="position-3" style="xhtml" />
            </div> 
        </div>?>
    <?php endif; */?>
    <div class="container article">
        
            <?php if(JRequest::getVar('view') == "featured" ) : ?>
            <hr class="featured-divider">
            <div class="jumbotron" >
                <div class=".col-xs-12 col-md-4">
                <p class="bg-success">Management 
                </p>
                </div>
                <div class=".col-xs-12 col-md-4">
                <p class="bg-success">Simplifier votre publication</p>
                </div>
                <div class=".col-xs-12 col-md-4">
                <p class="bg-success">BLA BLA</p>
                </div>
            </div>
            
            <?php else: ?>
            <div class="wrapper">
                <jdoc:include type="message" />
                <jdoc:include type="component" />
                <jdoc:include type="modules" name="position-2" style="none" />
            </div>
             <?php endif; ?>
        
        <?php if ($this->countModules('position-3')) : ?>
        <div id="footer" class="row">
            <div class="col-md-12" role="footer">
                <jdoc:include type="modules" name="footer" style="none" />
            </div>
        </div>
        <?php endif; ?>
        <?php /* <jdoc:include type="modules" name="debug" style="none" /> */ ?>
    </div>
</body>