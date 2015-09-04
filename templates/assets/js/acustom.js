jQuery(window).load(function(){
	setTimeout(function() {
	jQuery('.pop-up-screen, .overlay').fadeIn();
    }, 2000);
     jQuery('.close').on('click', function(){
	  jQuery('.pop-up-screen, .overlay').fadeOut(600,function(){
	  });
     });
     jQuery('.close_inf').on('click', function(){
	  jQuery('.pop-up-screen, .overlay').fadeOut(600,function(){
	  });
	  setCookie( 'wpsurveypollfeedback', '1', 999, 'days' );
     });
	function setCookie( c_name, value, dduntil, mode ) {
		if ( mode == 'days' ) {
			exdate = new Date();
			exdate.setDate( exdate.getDate() + parseInt( dduntil ) );
			c_value = escape( value ) + ( ( dduntil == null ) ? "" : "; expires=" + exdate.toUTCString() ) + "; path=/";
			document.cookie = c_name + "=" + c_value;		
		}
		if ( mode == 'minutes' ) {
			now = new Date();
			time = now.getTime();
			time += parseInt( dduntil );
			now.setTime( time );
			c_value = escape( value ) + ( ( dduntil == null ) ? "" : "; expires=" + now.toUTCString() ) + "; path=/";
			document.cookie = c_name + "=" + c_value;
		}
	}
});