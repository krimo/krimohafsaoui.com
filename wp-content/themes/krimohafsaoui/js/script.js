/* Author: Krimo Hafsaoui

*/

$(document).ready(function () {
	var OSName="";
	if (navigator.appVersion.indexOf("Mac")!=-1 || navigator.appVersion.indexOf("X11")!=-1 || navigator.appVersion.indexOf("Linux")!=-1) {
		OSName="macintosh";
		$('body').addClass(OSName);
	}

	if ($('body').hasClass('kh-pretty')) {prettyPrint();}
	
	setTimeout($('.global-header-container').addClass('scene'), 500);

});






