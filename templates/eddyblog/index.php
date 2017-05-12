<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.protostar
 *
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/** @var JDocumentHtml $this */

$app  = JFactory::getApplication();
$user = JFactory::getUser();

// Output as HTML5
$this->setHtml5(true);

// Getting params from template
$params = $app->getTemplate(true)->params;

// Detecting Active Variables
$option   = $app->input->getCmd('option', '');
$view     = $app->input->getCmd('view', '');
$layout   = $app->input->getCmd('layout', '');
$task     = $app->input->getCmd('task', '');
$itemid   = $app->input->getCmd('Itemid', '');
$sitename = $app->get('sitename');

JHtml::_('script', 'w3.js', array('version' => 'auto', 'relative' => true));

JHtml::_('stylesheet', 'w3.css', array('version' => 'auto', 'relative' => true));

JHtml::_('stylesheet', 'user.css', array('relative' => true));
	
?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="<?php echo $this->baseurl . '/templates/' . $this->template . '/css/bootstrap.min.css'?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo $this->baseurl . '/templates/' . $this->template . '/css/user.css'?>" rel="stylesheet" type="text/css" />
</head>

<body class="site <?php echo $option
	. ' view-' . $view
	. ($layout ? ' layout-' . $layout : ' no-layout')
	. ($task ? ' task-' . $task : ' no-task')
	. ($itemid ? ' itemid-' . $itemid : '');

?>">
	<div class="ed-header" id="ed-header">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-3">
					Eddy Nguyen
				</div>
				<div class="col-xs-12 col-sm-9">
					<jdoc:include type="modules" name="banner-top" style="none" />
				</div>
			</div>	
		</div>	
	</div>
	<div class="ed-main-menu" id="ed-main-menu">
		<div class="container">
			<div class="ed-navigation">
			
				<jdoc:include type="modules" name="main-menu" style="none" />
			</div>
			
		</div>	
	</div>
	<div class="ed-main-body" id="ed-main-body">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-8">
					<div class="ed-mass-top">
						<jdoc:include type="modules" name="mass-top" style="xhtml" />
					</div>
					<jdoc:include type="message" />
					<jdoc:include type="component" />
					<div class="ed-mass-bottom">
						<jdoc:include type="modules" name="mass-bottom" style="xhtml" />
					</div>
				</div>
				<div class="col-xs-12 col-sm-4">
					<jdoc:include type="modules" name="right-sidebar" style="xhtml" />
				</div>
			</div>
		</div>
	</div>
	<footer class="ed-footer" id="ed-footer">
		<jdoc:include type="modules" name="footer" style="xhtml" />
	</footer>
	<jdoc:include type="modules" name="debug" style="none" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="<?php echo $this->baseurl . '/templates/' . $this->template . '/js'?>/bootstrap.min.js"></script>


</body>
</html>
