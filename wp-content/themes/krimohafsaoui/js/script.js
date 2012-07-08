/* Author: Krimo Hafsaoui

*/
(function( $ ) {
    $.fn.unveil = function () {
        var images = this, loaded, inview;
        
        this.one("unveil", function(){
            this.setAttribute( "src", this.getAttribute( "data-original" ) );
            this.removeAttribute( "data-src" );
        });
        
        function unveil () {
            inview = images.filter(function(){
                var $e = $(this),
                    $w = $(window),
                    wt = $w.scrollTop(),
                    wb = wt + $w.height(),
                    et = $e.offset().top,
                    eb = et + $e.height();
                    
                return eb >= wt && et <= wb;
            });
            
            loaded = inview.trigger("unveil");
            images = images.not( loaded );
        }
        
        $(window).scroll(unveil);
        unveil();
        
        return this;
    };
})(Zepto);

$(document).ready(function () {
	$(".global-header-container").addClass('scene');
	
	var OSName="";
	if (navigator.appVersion.indexOf("Mac")!=-1 || navigator.appVersion.indexOf("X11")!=-1 || navigator.appVersion.indexOf("Linux")!=-1) {
		OSName="macintosh";
		$('body').addClass(OSName);
	}

	if ($('body').hasClass('kh-pretty')) {prettyPrint();}

	$("img").unveil();
});






