const btnClose = document.getElementById('close-navbar');
const navbarNav = document.querySelector('.navbar-nav')
btnClose.addEventListener('click',function(){
    navbarNav.classList.remove('active')
})
const toggleBtn = document.querySelector('.toggle-btn')
toggleBtn.addEventListener('click',()=>{
    navbarNav.classList.add('active')
})
const navbar = document.getElementById("navbar")
window.addEventListener('scroll',()=>{
    if(window.scrollY >300){
        navbar.classList.add('sticky');
    }else{
        navbar.classList.remove('sticky')
    }
})