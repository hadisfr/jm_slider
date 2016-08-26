/*
	jm_slider Joomla 3.5+ template

	© Hadi Safari 2016
	hadisafari76[at]gmail.com
*/
jQuery(document).ready(function(){
	(function slider(){
		jQuery("#jm_slider ul > li > img").each(function(){
			jQuery(this).parent().css("background-image", "url(" + jQuery(this).attr("src") + ")");
			jQuery(this).parent().children("div").addClass("slider_text");
			jQuery(this).parent().append(jQuery("<div></div>").addClass("slide_back"));
		});
		jQuery("#jm_slider").append(jQuery("<div id=\"jm_slider_leftbtn\"><span class=\"fa fa-chevron-left\"><span></div>").on("click", function(){
			gotoslide(++curslide);
		}));
		jQuery("#jm_slider").append(jQuery("<div id=\"jm_slider_rightbtn\"><span class=\"fa fa-chevron-right\"><span></div>").on("click", function(){
			gotoslide(--curslide);
		}));
		var curslide = 0;
		gotoslide(curslide);
		var slidenums = jQuery("#jm_slider > ul > li").length;
		jQuery("#jm_slider > ul > li").eq(0).addClass("active");
		setInterval(function(){
			gotoslide(++curslide);
		}, 10000);
		function gotoslide(x){
			jQuery("#jm_slider > ul > li").removeClass("left right active");
			jQuery("#jm_slider > ul > li").eq(checkslidenum(x)).addClass("active");
			jQuery("#jm_slider > ul > li").eq(checkslidenum(x - 1)).addClass("left");
			jQuery("#jm_slider > ul > li").eq(checkslidenum(x + 1)).addClass("right");
			setTimeout(function(){
				jQuery("#jm_slider > ul > li").eq(checkslidenum(x - 1)).removeClass("left");
				jQuery("#jm_slider > ul > li").eq(checkslidenum(x + 1)).removeClass("right");
			}, 1000);
		}
		function checkslidenum(x){
			while(x < 0)
				x += slidenums;
			return x % slidenums;
		}
	})();
});