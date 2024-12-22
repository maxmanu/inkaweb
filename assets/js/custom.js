/* 
   Generador Captcha.
*/
document.addEventListener('DOMContentLoaded', function () {
  if (window.location.pathname.includes('contacto.php')) {
    // Generate captcha on page load
    generateCaptcha();

    // Handle captcha refresh button click
    document.getElementById('refresh-captcha').addEventListener('click', function () {
      generateCaptcha();
      document.getElementById('captcha-input').value = '';
    });

    // Handle form submit
    document.getElementById('captcha-form').addEventListener('submit', function (event) {
      event.preventDefault();

      // Validate captcha
      var captchaInput = document.getElementById('captcha-input').value;
      var captchaCode = sessionStorage.getItem('captchaCode');
      if (captchaInput !== captchaCode) {
        alert('Invalid captcha code. Please try again.');
        generateCaptcha();
        document.getElementById('captcha-input').value = '';
        return;
      }

      // Form validation successful, submit form
      alert('Form submitted successfully.');
      document.getElementById('captcha-form').reset();
      generateCaptcha();
    });

    // Define the function generateCaptcha()
    function generateCaptcha() {
      // Get the canvas element with ID captcha and create an instance of its canvas rendering context
      var a = document.getElementById('captcha'),
        b = a.getContext('2d');

      // Clear the canvas
      b.clearRect(0, 0, a.width, a.height);

      // Define the string of characters that can be included in the captcha
      var f = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789',
        e = '',
        g = -45,
        h = 45,
        i = h - g,
        j = 20,
        k = 30,
        l = k - j;

      // Generate each character of the captcha
      for (var m = 0; m < 6; m++) {
        // Select random letter from the pool to be part of the captcha
        var n = f.charAt(Math.floor(Math.random() * f.length));
        e += n;

        // Set up the text formatting
        b.font = j + Math.random() * l + 'px Arial';
        b.textAlign = 'center';
        b.textBaseline = 'middle';

        // Set the color of the text
        b.fillStyle =
          'rgb(' +
          Math.floor(Math.random() * 256) +
          ',' +
          Math.floor(Math.random() * 256) +
          ',' +
          Math.floor(Math.random() * 256) +
          ')';

        // Add the character to the canvas
        var o = g + Math.random() * i;
        b.translate(20 + m * 30, a.height / 2);
        b.rotate((o * Math.PI) / 180);
        b.fillText(n, 0, 0);
        b.rotate((-1 * o * Math.PI) / 180);
        b.translate(-(20 + m * 30), (-1 * a.height) / 2);
      }

      // Set the captcha code in session storage
      sessionStorage.setItem('captchaCode', e);
    }
  }
});

/** ------------------------------------------------------------------------------------------------------------------------------------------------ */
/* 
   Formulario Libro de Reclamaciones.
*/
document.addEventListener('DOMContentLoaded', function () {
  if (window.location.pathname.includes('libro-reclamaciones.php')) {
    // Campos adicionales al seleccionar menor de edad
    document.getElementById('menor_edad').addEventListener('change', function () {
      const menorEdadFields = document.getElementById('menorEdadFields');
      if (this.checked) {
        menorEdadFields.classList.remove('d-none');
      } else {
        menorEdadFields.classList.add('d-none');
      }
    });
    // Evento para desactivar los campos de ubicación al seleccionar el radio de "E-mail"
    document.getElementById('emailRadio').addEventListener('change', function () {
      const isEmailSelected = this.checked;
      document.getElementById('direccion').disabled = isEmailSelected;
      document.getElementById('departamento').disabled = isEmailSelected;
      document.getElementById('provincia').disabled = isEmailSelected;
      document.getElementById('distrito').disabled = isEmailSelected;
    });
    // Evento para activar los campos de ubicación al seleccionar el radio de "Dirección"
    document.getElementById('direccionRadio').addEventListener('change', function () {
      const isDireccionSelected = this.checked;
      document.getElementById('direccion').disabled = !isDireccionSelected;
      document.getElementById('departamento').disabled = !isDireccionSelected;
      document.getElementById('provincia').disabled = !isDireccionSelected;
      document.getElementById('distrito').disabled = !isDireccionSelected;
    });

    // Multipasos
    const multiStepForm = document.querySelector('[data-multi-step]');
    const formSteps = [...multiStepForm.querySelectorAll('[data-step]')];
    let currentStep = formSteps.findIndex((step) => {
      return step.classList.contains('active');
    });

    if (currentStep < 0) {
      currentStep = 0;
      showCurrentStep();
    }

    multiStepForm.addEventListener('click', (e) => {
      let incrementor;
      if (e.target.matches('[data-next]')) {
        incrementor = 1;
      } else if (e.target.matches('[data-previous]')) {
        incrementor = -1;
      }

      if (incrementor == null) return;

      const inputs = [...formSteps[currentStep].querySelectorAll('input')];
      const allValid = inputs.every((input) => input.reportValidity());
      if (allValid) {
        currentStep += incrementor;
        showCurrentStep();
      }
    });

    formSteps.forEach((step) => {
      step.addEventListener('animationend', (e) => {
        formSteps[currentStep].classList.remove('hide');
        e.target.classList.toggle('hide', !e.target.classList.contains('active'));
      });
    });

    function showCurrentStep() {
      formSteps.forEach((step, index) => {
        step.classList.toggle('active', index === currentStep);
      });
    }
  }
});

/** ------------------------------------------------------------------------------------------------------------------------------------------------ */
/* 
   Cookies
*/
document.addEventListener('DOMContentLoaded', function () {
  const modal = document.getElementById('cookie-modal');
  const acceptBtn = document.getElementById('accept-cookies');

  // Verificar si el usuario ya aceptó las cookies
  if (!localStorage.getItem('cookiesAccepted')) {
    modal.style.display = 'inline-flex'; // Mostrar el modal
  } else {
    modal.style.display = 'none'; // Ocultar el modal si ya aceptó
  }

  // Acción al hacer clic en "Aceptar"
  acceptBtn.addEventListener('click', function () {
    localStorage.setItem('cookiesAccepted', 'true'); // Guardar preferencia en el almacenamiento local
    modal.style.display = 'none';
  });
});

/** ------------------------------------------------------------------------------------------------------------------------------------------------ */
/* 
   Swiper Portafolio
*/
const portafolio = new Swiper('.swiper-portafolio', {
  grabCursor: true,
  centeredSlides: false,
  slidesPerView: 'auto',
  spaceBetween: 30,
  loop: false,
  slidesPerView: 1,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  keyboard: {
    enabled: true,
  },
  mousewheel: {
    thresholdDelta: 70,
  },
  breakpoints: {
    1024: {
      slidesPerView: 2,
    },
  },
});
let btns = document.querySelectorAll('.btn-more');
let slides = document.querySelectorAll('.swiper-slide');
let close = document.querySelectorAll('.close');

for (let i = 0; i < slides.length; i++) {
  btns[i].addEventListener('click', function () {
    slides[i].classList.add('active');
  });
}

for (let i = 0; i < close.length; i++) {
  close[i].addEventListener('click', function () {
    slides[i].classList.remove('active');
  });
}

/** ------------------------------------------------------------------------------------------------------------------------------------------------ */
/* 
   Dropdown Categorías Carrito
*/
document.addEventListener('DOMContentLoaded', function () {
  // Referencia al botón del dropdown
  const dropdownButton = document.getElementById('dropdownButton');

  // Mostrar el contenido de "Hosting Linux" por defecto
  document.querySelectorAll('.info-item').forEach((div) => {
    div.style.display = 'none'; // Ocultar todos inicialmente
  });
  document.getElementById('linux').style.display = 'block'; // Mostrar "Hosting Linux"

  // Configurar el comportamiento de las opciones del dropdown
  document.querySelectorAll('.dropdown-item').forEach((item) => {
    item.addEventListener('click', function (e) {
      e.preventDefault(); // Prevenir el comportamiento predeterminado del enlace
      const category = this.getAttribute('data-category'); // Obtener la categoría seleccionada
      const text = this.textContent.trim(); // Obtener el texto de la opción seleccionada

      // Ocultar todas las secciones de información
      document.querySelectorAll('.info-item').forEach((div) => {
        div.style.display = 'none';
      });

      // Mostrar la sección de información correspondiente
      const infoDiv = document.getElementById(category);
      if (infoDiv) {
        infoDiv.style.display = 'block';
      }

      // Cambiar el texto del botón del dropdown
      dropdownButton.textContent = text;
    });
  });
});

/** ------------------------------------------------------------------------------------------------------------------------------------------------ */
/* 
   Radio Buttons Tipo de Dominio
*/
document.addEventListener('DOMContentLoaded', function () {
  // Selecciona todos los radios y el contenedor de información
  const radios = document.querySelectorAll('input[type="radio"][name="category"]');
  const infoItems = document.querySelectorAll('.info-item');

  // Configurar el evento de cambio en cada radio
  radios.forEach((radio) => {
    radio.addEventListener('change', function () {
      // Ocultar todos los divs de información
      infoItems.forEach((item) => (item.style.display = 'none'));

      // Mostrar el div relacionado con el radio seleccionado
      const selectedInfo = document.getElementById(`info-${this.value}`);
      if (selectedInfo) {
        selectedInfo.style.display = 'block';
      }
    });
  });

  // Mostrar el contenido inicial si algún radio está seleccionado por defecto
  const checkedRadio = document.querySelector('input[type="radio"][name="category"]:checked');
  if (checkedRadio) {
    const initialInfo = document.getElementById(`info-${checkedRadio.value}`);
    if (initialInfo) {
      initialInfo.style.display = 'block';
    }
  }
});
