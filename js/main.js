let lastScrollTop = 0;
window.addEventListener("scroll", function() {
  let currentScroll = window.pageYOffset || document.documentElement.scrollTop;
  if (currentScroll > lastScrollTop) {
    document.querySelector('#navBar').style.top = "-90px";
  } else {
    document.querySelector('#navBar').style.top = "0px";
  }
  lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
}, false);

const video = document.getElementById('videoElement');
const checkbox = document.getElementById('play');

checkbox.addEventListener('change', function() {
  if (this.checked) {
    video.play();
  } else {
    video.pause();
  }
});

const reaccion = document.querySelector(".img-thumbnail").addEventListener('mouseover', () => {
  alert('parece que estas interesado,escribenos');
})
console.log("hola mundo en");
const area1 = document.getElementById('area1');
const area2 = document.getElementById('area2');

area1.addEventListener('click', () => {
  alert('sobre muñeca');
});

area2.addEventListener('click', () => {
  alert('sobre los dedos');
});

const adres = document.getElementById('linkrehapp');
document.querySelector('.brazoSec').addEventListener('click', () => {
  adres.classList.toggle('d-none');
})

// trancciosion de la tarjetas
$(document).ready(function(){
  $('.galeria-dinamiqa li').click(function(){
      $('.galeria-dinamiqa li').removeClass("activeItemdinamiqo");
      $(this).addClass("activeItemdinamiqo");
  });
});
//funcion para las tarjetas
$(document).ready(function(){
  $('#imageModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget); // Botón que abre el modal
      var imgSrc = button.attr('src'); // Extraer la URL de la imagen
      var modal = $(this);
      modal.find('.modal-body img').attr('src', imgSrc); // Pasar la URL al modal
  });
});