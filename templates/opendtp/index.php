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
                    <a class="navbar-brand" href="#">OpenDTP</a>
                </div>
                <div class="navbar-collapse collapse">
                    <jdoc:include type="modules" name="position-1" style="none" />
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" >
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->
    
    <?php // Carousel
        if ($this->countModules('position-3') && false) : ?>
        <div class="row slideshow">
           <?php /* <div class="col-md-12">
            <jdoc:include type="modules" name="position-3" style="xhtml" />
            </div> */?>
        </div>
    <?php endif; ?>
    <div class="container article">
        <div class="wrapper">
            
            <jdoc:include type="message" />
            <jdoc:include type="component" />
            <!--<jdoc:include type="modules" name="position-2" style="none" />-->
        </div>
        <?php if ($this->countModules('position-3')) : ?>
        <div id="footer" class="row">
            <div class="col-md-12" role="footer">
                <jdoc:include type="modules" name="footer" style="none" />
            </div>
        </div>
        <?php endif; ?>
        <!--<jdoc:include type="modules" name="debug" style="none" />-->
    </div>
</body>