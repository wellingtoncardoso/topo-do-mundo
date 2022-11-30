// scroll link ancura
$( '.cpw-nav-menu a[href^="#"]' ).on( 'click', function(e) {
  e.preventDefault()
  var id = $( this ).attr( 'href' ),
      targetOffset = $( id ).offset().top
  $( 'html, body' ).animate({
    scrollTop: targetOffset - 240
  }, 300)
} )

// scroll fixed nav menu
$(window).scroll( () => {
  if( $(window).scrollTop() > 540 ){
    $('.cpw-nav-menu').css({"position":"fixed"}).fadeIn()
    $('.cpw-nav-menu').css({"left":"15px"})
    if( window.matchMedia( '(max-width:575px)' ).matches ){
      $('.cpw-nav-menu').css({"left":"0px"})  
    }
    $('.cpw-nav-menu').css({"top":"calc( 100% - 70vh )"})
    $('.cpw-nav-menu').css({"display":"block"})
    $('.cpw-nav-menu').css({"z-index":"44444"})
    $('.cpw-nav-menu .cpw-nav-menu__item').css({"background-color":"#000"})
    $('.cpw-nav-menu .cpw-nav-menu__item a').css({"color":"#FFF"})
    $('.cpw-nav-menu .cpw-nav-menu__item').css({"padding":".4rem"})
    $('.cpw-nav-menu .cpw-nav-menu__item').css({"margin-bottom":".4rem"})

  }else{
    $('.cpw-nav-menu').css({"position":"relative"})
    $('.cpw-nav-menu').css({"display":"flex"})
    $('.cpw-nav-menu .cpw-nav-menu__item').css({"background-color":"#FFF"})
    $('.cpw-nav-menu .cpw-nav-menu__item a').css({"color":"#000"})
    $('.cpw-nav-menu .cpw-nav-menu__item').css({"padding":".5rem 1rem"})

  }
} )