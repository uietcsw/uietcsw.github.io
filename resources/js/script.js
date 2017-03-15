/*

    SMOOTH SCROLL SCRIPT 
    From CHRIS COYIER
    CSS-TRICKS.com
    All Copyrights to their reserved owners.

*/

$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});


/*

    NAVIGATION PULL DOWN WHEN WIDTH GOES BELOW 480px

*/

$(function() {
      var pull    = $('#pull');
        menu    = $('nav ul');
        menuHeight  = menu.height();
      $(pull).on('click', function(e) {
        e.preventDefault();
        menu.slideToggle();
      });
      $(window).resize(function(){
            var w = $(window).width();
            if(w > 480 && menu.is(':hidden')) {
              menu.removeAttr('style');
            }
        });
    });
