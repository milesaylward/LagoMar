$(function(){
  $('.home').removeClass('nav-active');
  $('#contact').addClass('nav-active');

  $('.navbar-toggle').on('click', () => {
    $footer = $('.footer');
    if ($footer.hasClass('left')) {
      $footer.removeClass('left');
      $footer.animate({
        left: "0"
      });
    }
    else {
      $footer.addClass('left');
      $footer.animate({
        left: "70%"
      })
    }
  });
});
