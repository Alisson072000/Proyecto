require('./bootstrap');
const boton = document.querySelector('#boton');
const menu = document.querySelector('#menu');
boton.addEventListener('clik',()=>{
    console.log('clik')
    menu.classList.toggle('hidden');
})
