jQuery(window).load(function(){
	setTimeout(function() {
	jQuery('.pop-up-screen, .overlay').fadeIn();
    }, 2000);
     jQuery('.close').on('click', function(){
	  jQuery('.pop-up-screen, .overlay').fadeOut(600,function(){
	  });
     });
});