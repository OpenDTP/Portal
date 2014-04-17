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
    <?php
    if ($this->params->get('googleFont'))
	{
	?>
		<link href='//fonts.googleapis.com/css?family=<?php echo $this->params->get('googleFontName');?>' rel='stylesheet' type='text/css' />
		<style type="text/css">
			h1,h2,h3,h4,h5,h6,.site-title{
				font-family: '<?php echo str_replace('+', ' ', $this->params->get('googleFontName'));?>', sans-serif;
			}
		</style>
	<?php
	}
    ?>
</head>
<body class="site <?php echo $option
	. ' view-' . $view
	. ($layout ? ' layout-' . $layout : ' no-layout')
	. ($task ? ' task-' . $task : ' no-task')
	. ($itemid ? ' itemid-' . $itemid : '')
	. ($params->get('fluidContainer') ? ' fluid' : '');
?>">
    <div id="container" class="main">
        <div class="row">
        <div class="col-md-12">
            <div class="row" id ="header">
                <div id="logo-events" class="col-md-12" role="banner">
                    <h1 class="logo"><a href="./" title="OpenDTP"><img id="logo" src="<?php echo $templatePath;?>/images/logo.png" /></a></h1>
                </div>
            </div>
            <div class="wrapper">
                <?php if ($this->countModules('position-1')) : ?>
                <nav class="row navigation" role="navigation">
                    <div class="col-md-12 bwhite">
                        <div class="col-md-9" >
                            <jdoc:include type="modules" name="position-1" style="none" />
                        </div>
                        <div id="searchbox" class="col-md-3" >
                            <jdoc:include type="modules" name="position-0" style="none" />
                        </div>
                    <div>
                </nav>
                <?php endif; ?>
                <?php if ($this->countModules('position-3')) : ?>
                    <div class="row slideshow">
                        <div class="col-md-12">
                        <jdoc:include type="modules" name="position-3" style="xhtml" />
                        </div>
                    </div>
                <?php endif; ?>
                <div class="row content">
                    <div class="col-md-9">
                        <jdoc:include type="message" />
                        <jdoc:include type="component" />
                        <jdoc:include type="modules" name="position-2" style="none" />
                    </div>
                    <?php if ($this->countModules('position-3')) : ?>
                    <div class="col-md-3 sidebar-right">
                        <!-- Begin Right Sidebar -->
                        <jdoc:include type="modules" name="position-7" style="well" />
                        <!-- End Right Sidebar -->
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php if ($this->countModules('position-3')) : ?>
            <div id="footer" class="row">
                <div class="col-md-12" role="footer">
                    <jdoc:include type="modules" name="footer" style="none" />
                </div>
            </div>
            <?php endif; ?>
        </div>
        <jdoc:include type="modules" name="debug" style="none" />
        </div>
    </div>
</body>