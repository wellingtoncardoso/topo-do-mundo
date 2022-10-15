
  let images = document.querySelectorAll('.cpw-gallery__item-img')
  let modal = document.querySelector('.cpw-modal')
  let modalImage = document.querySelector('.cpw-modal-img')
  let btnClose = document.querySelector('#cpw-btn-close')
  let srcValue = ""

  for( let i =0; i < images.length; i++ ){
    images[i].addEventListener('click', () => {
      srcValue = images[i].getAttribute('src')
      modalImage.setAttribute('src', srcValue)
      modal.classList.toggle('.cpw-modal-active')
    })
  } 

  btnClose.addEventListener('click', () => {
    modal.classList.toggle('.cpw-modal-active')
  })