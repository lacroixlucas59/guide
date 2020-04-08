$(function(e){

	function adaptHeaderFull() {
		var navbarHeight = $('#navbar_container').css('height');
		$('#header_page').find('.header-full-screen').css('height','calc(100vh - '+navbarHeight+')');
	}
	setInterval(function(){ adaptHeaderFull(); }, 1000 );

	

/********************  ********************/

$(function(e){

  $('.navbar-wp-coup .navbar-modal-toggle').click(function(e){
      $('.modal-coup-lite').addClass('show');
  });

  $('.modal-coup-close-button').click(function(e){
      $('.modal-coup-lite').removeClass('show');
  });

  $('.modal-coup-lite').click(function(event){
      if(!$(event.target).closest('.modal-coup-lite-content').length && !$(event.target).is('.modal-coup-lite-content')) {
       $(".modal-coup-lite").removeClass('show');
     }  
  });

});

/********************  ********************/


	
});