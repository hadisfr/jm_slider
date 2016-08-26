<?php
/*
    jm_slider
    2016 © Hadi Safari
*/
class ModJmSlider{ 
    public static function getSlide($pic, $head, $txt){
    	return "<li><img src=" . $pic . " /><div><h3>" . $head . "</h3><p>" . $txt . "</p></div></li>";
    }
}
?>