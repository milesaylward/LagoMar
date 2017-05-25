$(function(){
  $('.home').removeClass('nav-active');
  $('.food-menu').addClass('nav-active');

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

  $('#pagination').easyPaginate({
    paginateElement: 'section',
    elementsPerPage: 6,
    effect: 'climb'
  });

  $('body').scrollspy({
    target: ".scroll-main", offset: $(window).height() * 1
  });

  $('.easyPaginateNav a').on('click', function(event) {
    var hash = "#menu";

    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 700, () => {
      window.location.hash = hash;
      });
    }
  );
});
