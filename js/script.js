
const AnimWP = () => {
    if (document.querySelector('.swiper')) {
        const opciones = {
            loop: true, 
            autoplay: {
                delay: 2500,
                disableOnInteraction: false
            }
        };
        new Swiper(".swiper", opciones);
    }

    
};



const serverBtn = document.querySelectorAll('.btn-server');
const iframe = document.getElementById('iframe');

serverBtn.forEach((boton)=>{
    boton.addEventListener('click', ()=>{
        const link = boton.getAttribute('data-enlace');
        iframe.setAttribute('src', link);
    });
});


document.addEventListener("DOMContentLoaded", AnimWP);
