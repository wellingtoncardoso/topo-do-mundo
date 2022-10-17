var navSelect = document.querySelectorAll('.cpw-nav-select-plates__item')
var blockSelect = document.querySelectorAll('.cpw-block-select-plates')

for( let i = 0; i < navSelect.length; i++ ){
  navSelect[i].addEventListener('click', () => {
    // console.log(blockSelect[i])
  })
}