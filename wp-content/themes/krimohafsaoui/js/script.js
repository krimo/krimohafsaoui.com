/* Author: Krimo Hafsaoui

*/


	if ($('body').hasClass('kh-pretty')) {
		addEventListener('load', function (event) { prettyPrint() }, false);
	}
$(document).ready(function () {
	$(".global-header-container").addClass('scene');
	
	var OSName="";
	if (navigator.appVersion.indexOf("Mac")!=-1 || navigator.appVersion.indexOf("X11")!=-1 || navigator.appVersion.indexOf("Linux")!=-1) {
		OSName="macintosh";
		$('body').addClass(OSName);
	}
});






