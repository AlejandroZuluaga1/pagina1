/*Cuando hago click en .buttun , .nav toggle "activo"*/ 

const button = document.querySelector('.button')
const nav = document.querySelector('.navbar')

button.addEventListener('click', ()=>{
    nav.classList.toggle('activo')
})