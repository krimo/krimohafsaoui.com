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

$(document).ready(function () {
	var OSName="";
	if (navigator.appVersion.indexOf("Mac")!=-1 || navigator.appVersion.indexOf("X11")!=-1 || navigator.appVersion.indexOf("Linux")!=-1) {
		OSName="macintosh";
		$('body').addClass(OSName);
	}

	if ($('body').hasClass('kh-pretty')) {prettyPrint();}
	
	setTimeout($('.global-header-container').addClass('scene'), 500);
	
	$(function () {
		
		var button = $(".go-to-top");
		console.log(button);
		
		$(window).scroll(function () {
			console.log('scrolling');
			if (window.pageYOffset > 100) {
				button.addClass("go-to-top-visible");
			} else {
				button.removeClass("go-to-top-visible");
			}
		});

		// scroll body to 0px on click
		button.click(function (e) {
			e.preventDefault();
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});

});






