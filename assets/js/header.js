$(window).scroll( () => {
  if( $(window).scrollTop() > 50 ){
    if( window.matchMedia( '(min-width:992px)' ).matches ){
      $( '.cpw-sidebar-text-topo' ).fadeOut();
      $('header .cpw-sidebar .cpw-container .cpw-main-menu ul').css({"background":"transparent"})
    }
    $('header').css({"background": "linear-gradient(360deg, rgba(0,0,0,.4) 0%, var(--global--color-primary) 100%)"})
    $('header .cpw-sidebar .cpw-container .cpw-logo img').css({"max-width" :"160px"})
    $('header .cpw-sidebar .cpw-container .cpw-logo img').css({"height" :"60px"})
    $('header .cpw-sidebar .cpw-container .cpw-main-menu ul li a').css({"font-size":"1rem"})
  }else{
    if( window.matchMedia( '(min-width:992px)' ).matches ){
      $( '.cpw-sidebar-text-topo' ).fadeIn();
      $('header .cpw-sidebar .cpw-container .cpw-main-menu ul').css({"background": "linear-gradient(360deg, rgba(0,0,0,.4) 0%, rgba(0,0,0,.4) 100%)"})
    }
    $('header').css({"background": "transparent"})
    $('header .cpw-sidebar .cpw-container .cpw-logo img').css({"max-width" :"280px"})
    $('header .cpw-sidebar .cpw-container .cpw-logo img').css({"height" :"160px"})
    $('header .cpw-sidebar .cpw-container .cpw-main-menu ul li a').css({"font-size":"var(--global--font-size-base)"})
  }
} )