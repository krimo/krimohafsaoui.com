/* Author: Krimo Hafsaoui / Steal this and a polar bear will eat your face.
                      _.--""""--.._
                  _.""    .'       `-._
                .";      ;           ; `-.
               / /     .'           ;     `.
              / ;     ;             ;       \
             ; :      :             :     `-.\
             ; ;      :              `.      `;
             : :      :                \      :
             : \      `:                \   `.;
              \ \      `;                ;    ;
               \ : .'   ;                |   ;
                `>'     :              `.;   )
                / _.'               `.  ;/ _(
               ;,'     ;    `.        `.;    `-.
              ;' .'   :    `. `.       / \, \ \ \
              :,'     :      `. `. \  ; ::\_/_/_/::
            .-=:.-"  -,-   "-.,=-.\ ;.; :::; ; ;::
            |(`.`     :       .')| \: `.  :::::::
             \\/      :       \//   ;   \              _____
              :      .:.       :  _/     ;             \hjw:
    /         ;                ;  ;      |              \"""
  .'          :    _     _    ;  /       ;              /|
 /             `.  \;   ;/  .' .'       /              /:|
|                !  :   :  !_.'        /           .--::/
|\___             `.:   :.'/\         ;      ____.':|:|/
\:::|\              \ _ /  | :       :   ___/|:::|:'"""
 `""|:\             ;"^"   | !       :__/|::|/""""
    \::\_____     .-'      | ;       |::|/""
     \:|::::|\   / / /    / /       /"""
      \|::::|:`--\_\_\__.'-|       ;
        """" \::::::::::::/      .'
              """"'"""".-'      (
       __,------.__.--/ , ,  , |/--._
      /              :\|  |  |v'     \_
     |\              :::v-;v-'::       \
     \:\              :::::::::         \
      \|`-.                             /|
        `: \          ____         ____/:/
          \|:-.______/|::|\       /|:::|/
           |::|:::::|:/"""\\_____/:/""""
           `-:|:::::|/     \|::::|/
              `"""""'       `""""'

*/

scroll = function(endY, duration) { // to top button helper
    endY = endY || ($.os.android ? 1 : 0);
    duration = duration || 200;

    var startY = document.body.scrollTop,
        startT  = +(new Date()),
        finishT = startT + duration;

    var interpolate = function (source, target, shift) { 
        return (source + (target - source) * shift); 
    };

    var easing = function (pos) { 
        return (-Math.cos(pos * Math.PI) / 2) + .5; 
    };

    var animate = function() {
        var now = +(new Date()),
            shift = (now > finishT) ? 1 : (now - startT) / duration;

        window.scrollTo(0, interpolate(startY, endY, easing(shift)));

        (now > finishT) || setTimeout(animate, 15);
    };

    animate();
};

$(function () { // to top button
			
	var button = $(".go-to-top");
	
	$(window).scroll(function () {
		if (window.pageYOffset > 100) {
			button.addClass("go-to-top-visible");
		} else {
			button.removeClass("go-to-top-visible");
		}
	});

	// scroll body to 0px on click
	button.click(function (e) {
		e.preventDefault();
		window.scroll(0,800);
		return false;
	});
});

window.onload = function () {
	var OSName="";
	if (navigator.appVersion.indexOf("Mac")!=-1 || navigator.appVersion.indexOf("X11")!=-1 || navigator.appVersion.indexOf("Linux")!=-1) {
		OSName="macintosh";
		$('body').addClass(OSName);
	}

	if ($('body').hasClass('kh-pretty')) {prettyPrint();}
	
	setTimeout($('.global-header-container').addClass('scene'), 500);
};






