jQuery(document).ready( ($) => {
  $(window).scroll( () => {
    if( $(window).scrollTop() > 250 ){
      if( window.matchMedia( '(min-width:992px)' ).matches ){
        $( '.cpw-sidebar-text-topo' ).fadeOut();
      }
    }else{
      if( window.matchMedia( '(min-width:992px)' ).matches ){
        $( '.cpw-sidebar-text-topo' ).fadeIn();
      }
    }
  } )
} )