$(function(){
  $('body').scrollspy({
    target: ".scroll-main", offset: $(window).height() * 1
  });

  $('.scroll-main').on('click', function(event) {

    var hash = this.hash;
    console.log(hash);

    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 1000, () => {
      window.location.hash = hash;
      });
    }
  );

  let $foodMenu = $('.food-menu');
  let $home = $('.home');

  $foodMenu.on('click', () =>{
    $home.removeClass('active');
    $foodMenu.addClass('active');
  });
  $('body').on('click', event =>{
    if(event.target.id != 'food-menu-toggle'){
      $foodMenu.removeClass('active');
      $home.addClass('active');
    }
  });
});
