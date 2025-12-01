
function initLogoInteractivo() {
  const logo = document.getElementById('logo-interactivo');
  if (!logo) return;

  function moverLogo() {
    const maxX = window.innerWidth - logo.clientWidth;
    const maxY = window.innerHeight - logo.clientHeight;
    const randomX = Math.random() * maxX;
    const randomY = Math.random() * maxY;

    logo.style.left = `${randomX}px`;
    logo.style.top = `${randomY}px`;
  }

  moverLogo();

  document.addEventListener('mousemove', (e) => {
    const rect = logo.getBoundingClientRect();
    const hover = (
      e.clientX >= rect.left &&
      e.clientX <= rect.right &&
      e.clientY >= rect.top &&
      e.clientY <= rect.bottom
    );
    if (hover) moverLogo();
  });
}


function initMenuHamburguesa() {
  const toggleButton = document.querySelector('.menu-toggle');
  const menu = document.querySelector('.horizontal');
  
  if (toggleButton && menu) {
    toggleButton.addEventListener('click', () => {
      menu.classList.toggle('menu-visible');
      toggleButton.classList.toggle('active');
    });
  }
}


function initSliders() {

}

function initFormValidation() {
  const formulario = document.getElementById('formulario-contacto');
  
  if (formulario) {
    formulario.addEventListener('submit', function(e) {
      e.preventDefault();
      
      const email = document.getElementById('email').value;
      const telefono = document.getElementById('telefono').value;
      const mensajeValidacion = document.getElementById('mensaje-validacion');
      
      if (!email && !telefono) {
        mensajeValidacion.textContent = "Por favor ingresa tu correo o teléfono para poder contactarte";
        mensajeValidacion.style.color = "red";
        return;
      }
      
      if (email && !/^[a-zA-Z0-9._%+-]+@(gmail|hotmail|outlook)\.[a-zA-Z]{2,}$/.test(email)) {
        mensajeValidacion.textContent = "Por favor ingresa un correo válido (Gmail o Hotmail)";
        mensajeValidacion.style.color = "red";
        return;
      }
      
      if (telefono && !/\+?\d{10,15}/.test(telefono)) {
        mensajeValidacion.textContent = "Por favor ingresa un número de teléfono válido (código país + número)";
        mensajeValidacion.style.color = "red";
        return;
      }
      
      
      formulario.style.display = 'none';
      document.getElementById('mensaje-agradecimiento').style.display = 'block';
      
    });
  }
}


document.addEventListener('DOMContentLoaded', () => {
  initLogoInteractivo();
  initMenuHamburguesa();
  initSliders();
  initFormValidation();
});