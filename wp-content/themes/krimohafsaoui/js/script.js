/* Author: Krimo Hafsaoui

*/

$(document).ready(function () {
	var robert = function () {
		var img = new Image(), srcs = ['Blog', 'Work', 'About', 'Contact'], bgs = ['blog-bg.png', 'work-bg.png', 'about-bg.png', 'contact-bg.png'];
		
		for (i=0;i<4;i++) {
			if ($('body').hasClass(srcs[i])) {
				theSource = 'http://www.krimohafsaoui.com/wp-content/themes/krimohafsaoui/img/'+bgs[i];
				$('body').load(theSource, function () {
					$('.animated-header-bg').css('background-image', 'url('+theSource+')');
					$(".global-header-container").addClass('scene');
				});
			}
		};
	}; /* Function NOT YET PUSHED LIVE to smooth header animation.*/
	
	robert();
	
	var OSName="";
	if (navigator.appVersion.indexOf("Mac")!=-1 || navigator.appVersion.indexOf("X11")!=-1 || navigator.appVersion.indexOf("Linux")!=-1) {
		OSName="macintosh";
		$('body').addClass(OSName);
	}

	if ($('body').hasClass('kh-pretty')) {prettyPrint();}

});






