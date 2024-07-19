// para mostrar la descripcion de cada programador
const persona= document.querySelectorAll('.avatarP')

persona.forEach(persona => {
  console.log(persona.textContent);
  persona.addEventListener('click',()=>{
    const rol = persona.nextElementSibling;

      rol.classList.toggle('show')  
  })
});
// uso de api para una frase aleatoria
const phrase = document.getElementById('phrase'); 
const author = document.getElementById('author');

const mensaje = 'https://api.quotable.io/random';
// uso del me
fetch(mensaje)
  .then((res) => {
    if (!res.ok) {
      throw new Error('La solicitud no fue exitosa');
    }
    return res.json();
  })
  .then((data) => {
    console.log('Respuesta en JSON:', data);
    console.log('Contenido:', data.content);
    phrase.innerHTML = data.content; 
    author.innerHTML = (`AUTOR: ${data.author}`);
  })
  .catch((error) => {
    console.error('Hubo un error:', error);
  });

