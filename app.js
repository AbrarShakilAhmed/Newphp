let toggleBtn = document.getElementById('ToggleMenu')
let nav = document.getElementById('navigation')

toggleBtn.addEventListener('click', () => {
  nav.classList.toggle('hidden')
  toggleBtn.innerText = nav.classList.contains('hidden') ? 'Menu' : 'Exit'
})
