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

/** ---------------------------------------------------------------------------------------------------------------------- */
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