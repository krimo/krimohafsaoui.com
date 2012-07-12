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

$(function(){

	//set global variables and cache DOM elements for reuse later
	var form = $('.main-content').find('form'),
		formElements = form.find('input,textarea'),
		formSubmitButton = form.find('[type="submit"]'),
		errorNotice = $('#errors'),
		successNotice = $('#success'),
		loading = $('#loading'),
		errorMessages = {
			required: ' is a required field',
			email: 'You have not entered a valid email address for the field: ',
			minlength: ' must be greater than '
		}
	
	//feature detection + polyfills
	formElements.each(function(){

		//if HTML5 input placeholder attribute is not supported
		if(!Modernizr.input.placeholder){
			var placeholderText = this.getAttribute('placeholder');
			if(placeholderText){
				$(this)
					.addClass('placeholder-text')
					.val(placeholderText)
					.on('focus',function(){
						if(this.value == placeholderText){
							$(this)
								.val('')
								.removeClass('placeholder-text');
						}
					})
					.on('blur',function(){
						if(this.value == ''){
							$(this)
								.val(placeholderText)
								.addClass('placeholder-text');
						}
					});
			}
		}
		
		//if HTML5 input autofocus attribute is not supported
		if(!Modernizr.input.autofocus){
			if(this.getAttribute('autofocus')) this.focus();
		}
		
	});
	
	//to ensure compatibility with HTML5 forms, we have to validate the form on submit button click event rather than form submit event. 
	//An invalid html5 form element will not trigger a form submit.
	formSubmitButton.on('click',function(){
		var formok = true,
			errors = [];
			
		formElements.each(function(){
			var name = this.name,
				nameUC = name.ucfirst(),
				value = this.value,
				placeholderText = this.getAttribute('placeholder'),
				type = this.getAttribute('type'), //get type old school way
				isRequired = this.getAttribute('required'),
				minLength = this.getAttribute('data-minlength');
			
			//if HTML5 formfields are supported			
			if( (this.validity) && !this.validity.valid ){
				formok = false;
				
				//if there is a value missing
				if(this.validity.valueMissing){
					errors.push(nameUC + errorMessages.required);	
				}
				//if this is an email input and it is not valid
				else if(this.validity.typeMismatch && type == 'email'){
					errors.push(errorMessages.email + nameUC);
				}
				
				this.focus(); //safari does not focus element an invalid element
				return false;
			}
			
			//if this is a required element
			if(isRequired){	
				//if HTML5 input required attribute is not supported
				if(!Modernizr.input.required){
					if(value == placeholderText){
						this.focus();
						formok = false;
						errors.push(nameUC + errorMessages.required);
						return false;
					}
				}
			}

			//if HTML5 input email input is not supported
			if(type == 'email'){ 	
				if(!Modernizr.inputtypes.email){ 
					var emailRegEx = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/; 
				 	if( !emailRegEx.test(value) ){	
						this.focus();
						formok = false;
						errors.push(errorMessages.email + nameUC);
						return false;
					}
				}
			}
			
			//check minimum lengths
			if(minLength){
				if( value.length < parseInt(minLength) ){
					this.focus();
					formok = false;
					errors.push(nameUC + errorMessages.minlength + minLength + ' charcters');
					return false;
				}
			}
		});
		
		//if form is not valid
		if(!formok){
			//show error message 
			showNotice('error',errors);
			
		}
		//if form is valid
		else {
			loading.show();
			$.ajax({
				url: form.attr('action'),
				type: form.attr('method'),
				data: form.serialize(),
				success: function(){
					showNotice('success');
					form.get(0).reset();
					loading.hide();
				}
			});
		}
		
		return false; //this stops submission off the form and also stops browsers showing default error messages
		
	});

	//other misc functions
	function showNotice(type,data)
	{
		if(type == 'error'){
			successNotice.hide();
			errorNotice.find("li[id!='info']").remove();
			for(x in data){
				errorNotice.append('<li>'+data[x]+'</li>');	
			}
			errorNotice.show();
		}
		else {
			errorNotice.hide();
			successNotice.show();	
		}
	}
	
	String.prototype.ucfirst = function() {
		return this.charAt(0).toUpperCase() + this.slice(1);
	}
	
});

window.onload = function () {
	var OSName="";
	if (navigator.appVersion.indexOf("Mac")!=-1 || navigator.appVersion.indexOf("X11")!=-1 || navigator.appVersion.indexOf("Linux")!=-1) {
		OSName="macintosh";
		$('body').addClass(OSName);
	}

	if ($('body').hasClass('kh-pretty')) {prettyPrint();}
	
	setTimeout($('.global-header-container').addClass('scene'), 500);
	
/*	$('.kh-contact-submit').on('click', function() {
		var theForm = $('.kh-form'), destination = theForm.attr('action');
		
		$.ajax({
			type: 'POST',
			url: destination,
			data: theForm.serialize(),
			success: function(data) {console.log(data);},
			error: function() {alert('Error in your request');}
		});
		return false;
	}); */
};






