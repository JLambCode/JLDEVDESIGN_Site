const menuLinks = document.querySelectorAll('.menu-link');
const artOptions = document.querySelectorAll('.option');
const navToggle = document.getElementById('menu-open');

menuLinks.forEach(link => {
    link.addEventListener('click', () => {
        navToggle.checked = !navToggle.checked;
    })
})

artOptions.forEach(option => {
    option.addEventListener('click', () => {
        artOptions.forEach(option => {
            option.classList.remove("active");
        })
        option.classList.add("active");
    })    
 })

   
