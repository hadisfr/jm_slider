<?php
/*
	jm_slider
	2016 © Hadi Safari
*/
// No direct access
defined("_JEXEC") or die;
// Include the syndicate functions only once
require_once dirname(__FILE__) . "/helper.php";

$hasbar = $params->get("hasbar");
$slides = "";

$show = $params->get("show1");
if($show){
	$pic = $params->get("pic1");
	$head = $params->get("head1");
	$txt = $params->get("text1");
	$slides .= ModJmSlider::getSlide($pic, $head, $txt);
}

$show = $params->get("show2");
if($show){
	$pic = $params->get("pic2");
	$head = $params->get("head2");
	$txt = $params->get("text2");
	$slides .= ModJmSlider::getSlide($pic, $head, $txt);
}

$show = $params->get("show3");
if($show){
	$pic = $params->get("pic3");
	$head = $params->get("head3");
	$txt = $params->get("text3");
	$slides .= ModJmSlider::getSlide($pic, $head, $txt);
}

$show = $params->get("show4");
if($show){
	$pic = $params->get("pic4");
	$head = $params->get("head4");
	$txt = $params->get("text4");
	$slides .= ModJmSlider::getSlide($pic, $head, $txt);
}

$show = $params->get("show5");
if($show){
	$pic = $params->get("pic5");
	$head = $params->get("head5");
	$txt = $params->get("text5");
	$slides .= ModJmSlider::getSlide($pic, $head, $txt);
}

require JModuleHelper::getLayoutPath("jm_slider");
?>