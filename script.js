const toggle = document.getElementByClassName('toggle')[0]
const navbarlinks = document.getElementByClassName('navbarlinks')[0]

toggle.addEventsListener('click',() => {
  navbarlinks.classList.toggle('active')
  })
