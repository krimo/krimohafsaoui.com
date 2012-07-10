/* Author: Krimo Hafsaoui

*/

$(document).ready(function () {
	(function () {
		var img = new Image(), srcs = ['Blog', 'Work', 'About', 'Contact'], bgs = ['blog-bg.png', 'work-bg.png', 'about-bg.png', 'contact-bg.png'];
		
		for (i=0;i<4;i++) {
			console.log($('body').hasClass(srcs[i]));
			if ($('body').hasClass(srcs[i])) {
				theSource = 'http://www.krimohafsaoui.com/wp-content/themes/krimohafsaoui/img/'+bgs[i];
				img.src = theSource;
				img.onLoad = function () { /* onLoad will only fire once and not if the image is cached, FUCK! */
					$('.animated-header-bg').css('background-image', theSource);
					$(".global-header-container").addClass('scene');
				}
			}
		};
	}); /* Function NOT YET PUSHED LIVE to smooth header animation.*/
	
	var OSName="";
	if (navigator.appVersion.indexOf("Mac")!=-1 || navigator.appVersion.indexOf("X11")!=-1 || navigator.appVersion.indexOf("Linux")!=-1) {
		OSName="macintosh";
		$('body').addClass(OSName);
	}

	if ($('body').hasClass('kh-pretty')) {prettyPrint();}

});






