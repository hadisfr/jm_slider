<?php 
/*
	jm_slider
	2016 © Hadi Safari
*/
// No direct access
defined("_JEXEC") or die; ?>
<?php JHtml::_('jquery.framework'); ?>
<?php JHtml::script(Juri::base() . "modules/jm_slider/js/script.js"); ?>
<?php $document = JFactory::getDocument(); $document->addStyleSheet("modules/jm_slider/css/style.css"); ?>
<div id="jm_slider" class="<?php echo (($hasbar) ? "" : "withoutbar"); ?>"><ul><?php echo $slides; ?></ul></div>