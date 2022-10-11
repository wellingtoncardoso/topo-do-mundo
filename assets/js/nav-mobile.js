class WpCpwNavMobile{
  constructor( navMobile, navMobileList, navMobileLinks ){
    this.navMobile = document.querySelector( navMobile )
    this.navMobileList = document.querySelector( navMobileList )
    this.navMobileLinks = document.querySelectorAll( navMobileLinks )
    this.activeClass = "active"

    this.handleClick = this.handleClick.bind(this)
  }

  // animateLinks(){
  //   this.navMobileLinks.forEach((link, index) => {
  //     link.style.animation 
  //     ? (link.style.animation = "") 
  //     : (link.style.animation = 'cwpNavMobileFade .5s ease forwards .3s')
  //   })
  // }

  handleClick(){
    this.navMobileList.classList.toggle(this.activeClass)
    this.navMobile.classList.toggle(this.activeClass)
    // this.animateLinks()
  }
  
  addEventClick(){
    this.navMobile.addEventListener("click", this.handleClick)
  }

  init(){
    if( this.navMobile ){
      this.addEventClick()
    }
    return this
  }
}

export const wpCpwNavMobile = new WpCpwNavMobile(
  ".cpw-nav-mobile",
  ".cpw-main-menu ul",
  ".cpw-main-menu ul li",
)

wpCpwNavMobile.init()