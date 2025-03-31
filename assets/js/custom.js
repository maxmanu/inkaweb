/* 
   Generador Captcha.
*/
document.addEventListener("DOMContentLoaded", function () {
  if (window.location.pathname.includes("contacto.php")) {
    // Generate captcha on page load
    generateCaptcha();

    // Handle captcha refresh button click
    document
      .getElementById("refresh-captcha")
      .addEventListener("click", function () {
        generateCaptcha();
        document.getElementById("captcha-input").value = "";
      });

    // Handle form submit
    document
      .getElementById("captcha-form")
      .addEventListener("submit", function (event) {
        event.preventDefault();

        // Validate captcha
        var captchaInput = document.getElementById("captcha-input").value;
        var captchaCode = sessionStorage.getItem("captchaCode");
        if (captchaInput !== captchaCode) {
          alert("Invalid captcha code. Please try again.");
          generateCaptcha();
          document.getElementById("captcha-input").value = "";
          return;
        }

        // Form validation successful, submit form
        alert("Form submitted successfully.");
        document.getElementById("captcha-form").reset();
        generateCaptcha();
      });

    // Define the function generateCaptcha()
    function generateCaptcha() {
      // Get the canvas element with ID captcha and create an instance of its canvas rendering context
      var a = document.getElementById("captcha"),
        b = a.getContext("2d");

      // Clear the canvas
      b.clearRect(0, 0, a.width, a.height);

      // Define the string of characters that can be included in the captcha
      var f = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789",
        e = "",
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
        b.font = j + Math.random() * l + "px Arial";
        b.textAlign = "center";
        b.textBaseline = "middle";

        // Set the color of the text
        b.fillStyle =
          "rgb(" +
          Math.floor(Math.random() * 256) +
          "," +
          Math.floor(Math.random() * 256) +
          "," +
          Math.floor(Math.random() * 256) +
          ")";

        // Add the character to the canvas
        var o = g + Math.random() * i;
        b.translate(20 + m * 30, a.height / 2);
        b.rotate((o * Math.PI) / 180);
        b.fillText(n, 0, 0);
        b.rotate((-1 * o * Math.PI) / 180);
        b.translate(-(20 + m * 30), (-1 * a.height) / 2);
      }

      // Set the captcha code in session storage
      sessionStorage.setItem("captchaCode", e);
    }
  }
});

/** ------------------------------------------------------------------------------------------------------------------------------------------------ */
/* 
   Formulario Libro de Reclamaciones.
*/
document.addEventListener("DOMContentLoaded", function () {
  if (window.location.pathname.includes("libro-reclamaciones.php")) {
    // Campos adicionales al seleccionar menor de edad
    document
      .getElementById("menor_edad")
      .addEventListener("change", function () {
        const menorEdadFields = document.getElementById("menorEdadFields");
        if (this.checked) {
          menorEdadFields.classList.remove("d-none");
        } else {
          menorEdadFields.classList.add("d-none");
        }
      });
    // Evento para desactivar los campos de ubicación al seleccionar el radio de "E-mail"
    document
      .getElementById("emailRadio")
      .addEventListener("change", function () {
        const isEmailSelected = this.checked;
        document.getElementById("direccion").disabled = isEmailSelected;
        document.getElementById("departamento").disabled = isEmailSelected;
        document.getElementById("provincia").disabled = isEmailSelected;
        document.getElementById("distrito").disabled = isEmailSelected;
      });
    // Evento para activar los campos de ubicación al seleccionar el radio de "Dirección"
    document
      .getElementById("direccionRadio")
      .addEventListener("change", function () {
        const isDireccionSelected = this.checked;
        document.getElementById("direccion").disabled = !isDireccionSelected;
        document.getElementById("departamento").disabled = !isDireccionSelected;
        document.getElementById("provincia").disabled = !isDireccionSelected;
        document.getElementById("distrito").disabled = !isDireccionSelected;
      });

    // Multipasos
    const multiStepForm = document.querySelector("[data-multi-step]");
    const formSteps = [...multiStepForm.querySelectorAll("[data-step]")];
    let currentStep = formSteps.findIndex((step) => {
      return step.classList.contains("active");
    });

    if (currentStep < 0) {
      currentStep = 0;
      showCurrentStep();
    }

    multiStepForm.addEventListener("click", (e) => {
      let incrementor;
      if (e.target.matches("[data-next]")) {
        incrementor = 1;
      } else if (e.target.matches("[data-previous]")) {
        incrementor = -1;
      }

      if (incrementor == null) return;

      const inputs = [...formSteps[currentStep].querySelectorAll("input")];
      const allValid = inputs.every((input) => input.reportValidity());
      if (allValid) {
        currentStep += incrementor;
        showCurrentStep();
      }
    });

    formSteps.forEach((step) => {
      step.addEventListener("animationend", (e) => {
        formSteps[currentStep].classList.remove("hide");
        e.target.classList.toggle(
          "hide",
          !e.target.classList.contains("active")
        );
      });
    });

    function showCurrentStep() {
      formSteps.forEach((step, index) => {
        step.classList.toggle("active", index === currentStep);
      });
    }
  }
});

/** ------------------------------------------------------------------------------------------------------------------------------------------------ */
/* 
   Cookies
*/
document.addEventListener("DOMContentLoaded", function () {
  const modal = document.getElementById("cookie-modal");
  const overlay = document.getElementById("cookie-overlay");
  const acceptBtn = document.getElementById("accept-cookies");

  // Verificar si el usuario ya aceptó las cookies
  if (!localStorage.getItem("cookiesAccepted")) {
    modal.style.display = "inline-flex"; // Mostrar el modal
    overlay.style.display = "block"; // Mostrar fondo oscuro
  } else {
    modal.style.display = "none"; // Ocultar el modal si ya aceptó
    overlay.style.display = "none";
  }

  // Acción al hacer clic en "Aceptar"
  acceptBtn.addEventListener("click", function () {
    localStorage.setItem("cookiesAccepted", "true"); // Guardar preferencia en el almacenamiento local
    modal.style.display = "none";
    overlay.style.display = "none";
  });
});

/** ------------------------------------------------------------------------------------------------------------------------------------------------ */
/* 
   Swiper Portafolio
*/
// Verificar si el elemento Swiper existe antes de inicializarlo
const swiperElement = document.querySelector(".swiper-portafolio");

if (swiperElement) {
  const portafolio = new Swiper(".swiper-portafolio", {
    grabCursor: true,
    centeredSlides: false,
    slidesPerView: "auto",
    spaceBetween: 30,
    loop: false,
    slidesPerView: 1,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
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
}

// Verificar si los botones existen antes de usarlos
let btns = document.querySelectorAll(".btn-more");
let slides = document.querySelectorAll(".swiper-slide");
let close = document.querySelectorAll(".close");

// Verificar que btns y slides tengan la misma longitud antes de agregar listeners
if (btns.length > 0 && slides.length > 0) {
  for (let i = 0; i < slides.length; i++) {
    if (btns[i]) {
      btns[i].addEventListener("click", function () {
        slides[i].classList.add("active");
      });
    }
  }
}

// Verificar que close y slides tengan la misma longitud antes de agregar listeners
if (close.length > 0 && slides.length > 0) {
  for (let i = 0; i < close.length; i++) {
    if (close[i]) {
      close[i].addEventListener("click", function () {
        slides[i].classList.remove("active");
      });
    }
  }
}

/** ------------------------------------------------------------------------------------------------------------------------------------------------ */
/* 
   Dropdown Categorías Carrito
*/
document.addEventListener("DOMContentLoaded", function () {
  // Referencia al botón del dropdown
  const dropdownButton = document.getElementById("dropdownButton");

  // Verificar si el botón del dropdown existe
  if (dropdownButton) {
    // Ocultar todos los divs de información inicialmente y mostrar solo "Hosting Linux"
    const infoItems = document.querySelectorAll(".info-item");
    if (infoItems.length > 0) {
      infoItems.forEach((div) => {
        div.style.display = "none"; // Ocultar todos inicialmente
      });

      // Mostrar "Hosting Linux" si existe
      const linuxInfo = document.getElementById("linux");
      if (linuxInfo) {
        linuxInfo.style.display = "block";
      }
    }

    // Configurar el comportamiento de las opciones del dropdown
    const dropdownItems = document.querySelectorAll(".dropdown-item");
    if (dropdownItems.length > 0) {
      dropdownItems.forEach((item) => {
        item.addEventListener("click", function (e) {
          e.preventDefault(); // Prevenir el comportamiento predeterminado del enlace

          const category = this.getAttribute("data-category"); // Obtener la categoría seleccionada
          const text = this.textContent.trim(); // Obtener el texto de la opción seleccionada

          // Ocultar todas las secciones de información
          if (infoItems.length > 0) {
            infoItems.forEach((div) => {
              div.style.display = "none";
            });
          }

          // Mostrar la sección de información correspondiente
          const infoDiv = document.getElementById(category);
          if (infoDiv) {
            infoDiv.style.display = "block";
          }

          // Cambiar el texto del botón del dropdown
          dropdownButton.textContent = text;
        });
      });
    }
  }
});

/** ------------------------------------------------------------------------------------------------------------------------------------------------ */
/* 
   Radio Buttons Tipo de Dominio
*/
document.addEventListener("DOMContentLoaded", function () {
  // Selecciona todos los radios y el contenedor de información
  const radios = document.querySelectorAll(
    'input[type="radio"][name="category"]'
  );
  const infoItems = document.querySelectorAll(".info-item");

  // Configurar el evento de cambio en cada radio
  radios.forEach((radio) => {
    radio.addEventListener("change", function () {
      // Ocultar todos los divs de información
      infoItems.forEach((item) => (item.style.display = "none"));

      // Mostrar el div relacionado con el radio seleccionado
      const selectedInfo = document.getElementById(`info-${this.value}`);
      if (selectedInfo) {
        selectedInfo.style.display = "block";
      }
    });
  });

  // Mostrar el contenido inicial si algún radio está seleccionado por defecto
  const checkedRadio = document.querySelector(
    'input[type="radio"][name="category"]:checked'
  );
  if (checkedRadio) {
    const initialInfo = document.getElementById(`info-${checkedRadio.value}`);
    if (initialInfo) {
      initialInfo.style.display = "block";
    }
  }
});

/** ------------------------------------------------------------------------------------------------------------------------------------------------ */
/* 
   Métodos de Pago
*/
document.addEventListener("DOMContentLoaded", function () {
  const select = document.getElementById("paymentMethod"); // Referencia al select

  // Verificar si el select existe antes de continuar
  if (select) {
    const infoItems = document.querySelectorAll(".info-item"); // Todos los divs de información

    // Configurar el evento change
    select.addEventListener("change", function () {
      const selectedValue = select.value.toLowerCase(); // Obtener el valor seleccionado

      // Ocultar todos los divs de información si existen
      if (infoItems.length > 0) {
        infoItems.forEach((item) => (item.style.display = "none"));
      }

      // Mostrar el div relacionado si existe
      const selectedInfo = document.getElementById(`info-${selectedValue}`);
      if (selectedInfo) {
        selectedInfo.style.display = "block";
      }
    });

    // Mostrar contenido por defecto si el select tiene un valor inicial
    if (select.value) {
      const initialInfo = document.getElementById(
        `info-${select.value.toLowerCase()}`
      );
      if (initialInfo) {
        initialInfo.style.display = "block";
      }
    }
  }
});

/** ------------------------------------------------------------------------------------------------------------------------------------------------ */
/* 
   Boton Flotante
*/
const botonF1 = document.querySelector(".botonF1");
const btnFlot = document.querySelectorAll(".btn-flot"); // Seleccionamos todos los botones
const contenedor = document.querySelector(".contenedor");

// Añadir evento click para mostrar/ocultar los botones flotantes
botonF1.addEventListener("click", function () {
  btnFlot.forEach(function (boton) {
    // Alternar la clase 'animacionVer' para mostrar/ocultar los botones flotantes
    boton.classList.toggle("animacionVer");
  });
});

// Añadir evento click al contenedor (opcional, si deseas ocultar los botones al hacer clic fuera)
contenedor.addEventListener("click", function (e) {
  // Si el clic no fue en el botón F1 ni en los botones flotantes, ocultamos los botones flotantes
  if (!botonF1.contains(e.target) && !contenedor.contains(e.target)) {
    btnFlot.forEach(function (boton) {
      boton.classList.remove("animacionVer");
    });
  }
});

/*----------------------------------------------------------------------------------------------------*/
/* 
   Swipers
*/
const swiperElement2 = document.querySelector(".feedback-slider");

if (swiperElement2) {
  const feedback_slider = new Swiper(".feedback-slider", {
    slidesPerView: 3,
    speed: 700,
    spaceBetween: 30,
    slidesPerGroup: 2,
    loop: !0,
    breakpoints: {
      320: { slidesPerView: 1 },
      768: { slidesPerView: 2 },
      1200: { slidesPerView: 3 },
    },
  });
}

const swiperElement3 = document.querySelector(".gb-customer-slider");

if (swiperElement3) {
  const gb_custom_slider = new Swiper(".gb-customer-slider", {
    loop: !0,
    slidesPerView: 1,
    spaceBetween: 24,
    autoplay: !0,
    speed: 1e3,
    breakpoints: { 768: { slidesPerView: 2 }, 992: { slidesPerView: 3 } },
  });
}

const swiperElement4 = document.querySelector(".hm2-blog-slider");

if (swiperElement4) {
  const h2m_blog_slider = new Swiper(".hm2-blog-slider", {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: !0,
    pagination: { el: ".swiper-pagination", type: "bullets", clickable: !0 },
    breakpoints: {
      320: { slidesPerView: 1 },
      768: { slidesPerView: 2 },
      1200: { slidesPerView: 3 },
    },
  });
}

const swiperElement5 = document.querySelector(".brand-slider");

if (swiperElement5) {
  const brand_slider = new Swiper(".brand-slider", {
    slidesPerView: 5,
    spaceBetween: 30,
    loop: !0,
    autoplay: { delay: 3e3 },
    breakpoints: {
      320: { slidesPerView: 1 },
      400: { slidesPerView: 2, spaceBetween: 20 },
      768: { slidesPerView: 3 },
      992: { slidesPerView: 4, spaceBetween: 25 },
      1200: { slidesPerView: 5, spaceBetween: 25 },
    },
  });
}

const swiperElement6 = document.querySelector(".gm-product-slider");

if (swiperElement6) {
  const gm_product_slider = new Swiper(".gm-product-slider", {
    slidesPerView: 4,
    spaceBetween: 30,
    loop: !0,
    autoplay: { delay: 3e3 },
    pagination: { el: ".swiper-pagination", type: "bullets", clickable: !0 },
    breakpoints: {
      320: { slidesPerView: 1 },
      768: { slidesPerView: 2 },
      992: { slidesPerView: 3 },
      1400: { slidesPerView: 4, spaceBetween: 25 },
    },
  });
}

const swiperElement7 = document.querySelector(".dm-feedback-slider");

if (swiperElement7) {
  const dm_feedback_slider = new Swiper(".dm-feedback-slider", {
    slidesPerView: 3,
    spaceBetween: 24,
    loop: !0,
    speed: 1500,
    autoplay: { delay: 5e3 },
    breakpoints: {
      320: { slidesPerView: 1 },
      768: { slidesPerView: 2 },
      992: { slidesPerView: 3 },
    },
  });
}

const swiperElement8 = document.querySelector(".vps-scripts-slider");

if (swiperElement8) {
  const vps_script_slider = new Swiper(".vps-scripts-slider", {
    slidesPerView: 6,
    spaceBetween: 24,
    loop: !0,
    speed: 1500,
    navigation: { nextEl: ".swiper-next", prevEl: ".swiper-prev" },
    autoplay: { delay: 5e3 },
    breakpoints: {
      320: { slidesPerView: 1 },
      400: { slidesPerView: 2 },
      768: { slidesPerView: 3 },
      992: { slidesPerView: 4 },
      1200: { slidesPerView: 5 },
      1400: { slidesPerView: 6 },
    },
  });
}

const swiperElement9 = document.querySelector(".hm2-feedback-slider");

if (swiperElement9) {
  const hm2_feedback_slider = new Swiper(".hm2-feedback-slider", {
    slidesPerView: 1,
    spaceBetween: 24,
    loop: !0,
    speed: 1500,
    autoplay: { delay: 5e3 },
  });
}

const swiperElement10 = document.querySelector(".gh-feedback-slider");

if (swiperElement10) {
  const gh_feedback_slider = new Swiper(".gh-feedback-slider", {
    slidesPerView: 3,
    spaceBetween: 24,
    loop: !0,
    speed: 1500,
    autoplay: { delay: 5e3 },
    breakpoints: {
      320: { slidesPerView: 1 },
      992: { slidesPerView: 2 },
      1200: { slidesPerView: 3 },
    },
  });
}

const swiperElement11 = document.querySelector(".h4-feedback-slider");

if (swiperElement11) {
  const h4_feedback_slider = new Swiper(".h4-feedback-slider", {
    slidesPerView: 3,
    spaceBetween: 24,
    loop: !0,
    speed: 1500,
    autoplay: { delay: 5e3 },
    navigation: {
      nextEl: ".host-web-swiper-button-next",
      prevEl: ".host-web-swiper-button-prev",
    },
    breakpoints: {
      0: { slidesPerView: 1 },
      768: { slidesPerView: 2 },
      1200: { slidesPerView: 3 },
    },
  });
}

const swiperElement12 = document.querySelector(".h4-apps-slider");

if (swiperElement12) {
  const h4_apps_slider = new Swiper(".h4-apps-slider", {
    slidesPerView: 4,
    spaceBetween: 24,
    loop: !0,
    autoplay: { delay: 3e3 },
    breakpoints: {
      0: { slidesPerView: 1 },
      375: { slidesPerView: 2, spaceBetween: 20 },
      768: { slidesPerView: 3 },
      992: { slidesPerView: 4, spaceBetween: 25 },
    },
  });
}

const swiperElement13 = document.querySelector(".h5-feedback-slider");

if (swiperElement13) {
  const h5_feedback_slider = new Swiper(".h5-feedback-slider", {
    slidesPerView: 3,
    spaceBetween: 24,
    loop: !0,
    autoplay: { delay: 3e3 },
    navigation: { nextEl: ".swiper-next", prevEl: ".swiper-prev" },
    breakpoints: {
      0: { slidesPerView: 1 },
      1200: { slidesPerView: 2 },
      1400: { slidesPerView: 3 },
    },
  });
}

const swiperElement14 = document.querySelector(".pricing-plan-slider");

if (swiperElement14) {
  const pricing_plan_slider = new Swiper(".pricing-plan-slider", {
    slidesPerView: 4,
    spaceBetween: 24,
    loop: !0,
    speed: 1500,
    autoplay: { delay: 5e3 },
    pagination: { el: ".swiper-pagination", type: "bullets", clickable: !0 },
    breakpoints: {
      0: { slidesPerView: 1 },
      768: { slidesPerView: 2 },
      992: { slidesPerView: 3 },
      1400: { slidesPerView: 4 },
    },
  });
}

const swiperElement15 = document.querySelector(".em-pricing-slider");

if (swiperElement15) {
  const em_pricing_slider = new Swiper(".em-pricing-slider", {
    loop: !0,
    speed: 1500,
    autoplay: { delay: 5e3 },
    pagination: { el: ".swiper-pagination", type: "bullets", clickable: !0 },
    breakpoints: {
      0: { slidesPerView: 1 },
      768: { slidesPerView: 2, centeredSlides: !1, spaceBetween: 24 },
      992: { slidesPerView: 3, centeredSlides: !0, spaceBetween: -25 },
    },
  });
}

const swiperElement16 = document.querySelector(".mn-hero-pricing-slider");

if (swiperElement16) {
  const mn_hero_pricing_slider = new Swiper(".mn-hero-pricing-slider", {
    loop: !0,
    autoplay: !0,
    navigation: {
      nextEl: ".slide-control-next",
      prevEl: ".slide-control-prev",
    },
    breakpoints: {
      0: { slidesPerView: 1, spaceBetween: 16, centeredSlides: !1 },
      768: { slidesPerView: 3, spaceBetween: -150, centeredSlides: !0 },
    },
  });
}

const swiperElement17 = document.querySelector(".mn-chatting-slider");

if (swiperElement17) {
  const mn_chatting_slider = new Swiper(".mn-chatting-slider", {
    loop: !0,
    autoplay: !0,
    slidesPerView: 3,
    centeredSlides: !0,
    direction: "vertical",
  });
}

const swiperElement18 = document.querySelector(".mn-feature-slider");

if (swiperElement18) {
  const mn_feature_slider = new Swiper(".mn-feature-slider", {
    autoplay: !0,
    loop: !0,
    spaceBetween: 24,
    breakpoints: {
      0: { slidesPerView: 1 },
      768: { slidesPerView: 2 },
      1200: { slidesPerView: 3 },
    },
  });
}

const swiperElement19 = document.querySelector(".isb-testimonial-slider");

if (swiperElement19) {
  const isb_testimonial_slider = new Swiper(".isb-testimonial-slider", {
    autoplay: !0,
    loop: !0,
    navigation: {
      nextEl: ".slide-control-next",
      prevEl: ".slide-control-prev",
    },
    breakpoints: {
      0: { slidesPerView: 1 },
      768: { slidesPerView: 1 },
      1200: { slidesPerView: 1 },
    },
  });
}

const swiperElement20 = document.querySelector(".mn-feedback-slider");

if (swiperElement20) {
  const imn_feedback_slider = new Swiper(".mn-feedback-slider", {
    slidesPerView: 1,
    autoplay: !0,
    speed: 700,
    loop: !0,
    spaceBetween: 24,
    pagination: { el: ".swiper-pagination", type: "bullets", clickable: !0 },
  });
}

const swiperElement21 = document.querySelector(".hm7-hero-slider");

if (swiperElement21) {
  const hm7_hero_slider = new Swiper(".hm7-hero-slider", {
    slidesPerView: 1,
    autoplay: !0,
    loop: !0,
    speed: 700,
    effect: "fade",
    fadeEffect: { crossFade: !0 },
    navigation: {
      nextEl: ".hm7-hero-slider-next",
      prevEl: ".hm7-hero-slider-prev",
    },
  });
}

const swiperElement22 = document.querySelector(".hm7-application-slider");

if (swiperElement22) {
  const hm7_application_slider = new Swiper(".hm7-application-slider", {
    slidesPerView: 3,
    spaceBetween: 24,
    autoplay: !0,
    loop: !0,
    speed: 700,
    navigation: {
      nextEl: ".hm7-app-slide-next",
      prevEl: ".hm7-app-slide-prev",
    },
    breakpoints: {
      0: { slidesPerView: 1 },
      768: { slidesPerView: 2 },
      992: { slidesPerView: 3 },
      1200: { slidesPerView: 2 },
      1400: { slidesPerView: 3 },
    },
  });
}

const swiperElement23 = document.querySelector(
  ".hm7-feedback-slider , .host-fs-feedback"
);

if (swiperElement23) {
  const host_fs_feedback_slider = new Swiper(
    ".hm7-feedback-slider , .host-fs-feedback",
    {
      slidesPerView: 1,
      autoplay: !0,
      loop: !0,
      spaceBetween: 24,
      speed: 800,
      navigation: {
        nextEl: ".hm7-feedback-next",
        prevEl: ".hm7-feedback-prev",
      },
    }
  );
}

const swiperElement24 = document.querySelector(".cmp-pricing-slider");

if (swiperElement24) {
  const cmp_pricing_slider = new Swiper(".cmp-pricing-slider", {
    slidesPerView: 3,
    spaceBetween: 24,
    speed: 800,
    navigation: { nextEl: ".cmp-pricing-prev", prevEl: ".cmp-pricing-next" },
    breakpoints: {
      0: { slidesPerView: 1 },
      768: { slidesPerView: 2 },
      1200: { slidesPerView: 3 },
    },
  });
}

const swiperElement25 = document.querySelector(".dd-feedback-slider");

if (swiperElement25) {
  const dd_feedback_slider = new Swiper(".dd-feedback-slider", {
    slidesPerView: 2,
    spaceBetween: 24,
    autoplay: !0,
    speed: 700,
    loop: !0,
    breakpoints: { 0: { slidesPerView: 1 }, 1200: { slidesPerView: 2 } },
  });
}

const swiperElement26 = document.querySelector(".hm10-feedback-slider");

if (swiperElement26) {
  const hm10_feedback_slider = new Swiper(".hm10-feedback-slider", {
    slidesPerView: 3,
    spaceBetween: 24,
    autoplay: !0,
    speed: 700,
    loop: !0,
    breakpoints: {
      0: { slidesPerView: 1 },
      768: { slidesPerView: 2 },
      1200: { slidesPerView: 3 },
    },
  });
}

const swiperElement27 = document.querySelector(".ops-slider");

if (swiperElement27) {
  const ops_slider = new Swiper(".ops-slider", {
    slidesPerView: 3,
    spaceBetween: 24,
    autoplay: !0,
    speed: 700,
    loop: !0,
    navigation: {
      nextEl: ".ops-slider-btn.btn-next",
      prevEl: ".ops-slider-btn.btn-prev",
    },
    breakpoints: {
      0: { slidesPerView: 2 },
      576: { slidesPerView: 3 },
      768: { slidesPerView: 4 },
      1200: { slidesPerView: 3 },
    },
  });
}
/*----------------------------------------------------------------------------------------------------*/
/* 
   APP JS
*/
document.addEventListener("DOMContentLoaded", function () {
  // Establecer imágenes de fondo desde data-background
  document.querySelectorAll("[data-background]").forEach((el) => {
    el.style.backgroundImage = `url(${el.getAttribute("data-background")})`;
  });

  // Scroll hacia arriba al hacer clic en el botón
  document
    .querySelector(".scrolltop-btn")
    ?.addEventListener("click", function () {
      window.scrollTo({ top: 0, behavior: "smooth" });
    });

  // Menú móvil toggle
  document
    .querySelector(".mobile-menu-toggle")
    ?.addEventListener("click", function () {
      document.querySelector(".body-overlay")?.classList.add("overlay-on");
      document.querySelector(".mobile-menu")?.classList.add("active");
    });

  document.querySelector(".close-menu")?.addEventListener("click", function () {
    document.querySelector(".mobile-menu")?.classList.remove("active");
    document.querySelector(".body-overlay")?.classList.remove("overlay-on");
  });

  document
    .querySelector(".body-overlay")
    ?.addEventListener("click", function () {
      document.querySelector(".mobile-menu")?.classList.remove("active");
      this.classList.remove("overlay-on");
    });

  // Submenús en el menú móvil

  // document.querySelectorAll('.mobile-menu ul li.has-submenu a').forEach((el) => {
  //   el.addEventListener('click', function (e) {
  //     e.preventDefault();
  //     this.nextElementSibling?.classList.toggle('expanded');
  //     this.classList.toggle('icon-rotate');
  //   });
  // });
  document
    .querySelectorAll(".mobile-menu ul li.has-submenu > a")
    .forEach((el) => {
      el.addEventListener("click", function (e) {
        e.preventDefault();

        let submenu = this.nextElementSibling;

        if (submenu && submenu.tagName === "UL") {
          if (submenu.style.maxHeight) {
            submenu.style.maxHeight = null; // Cerrar con animación
          } else {
            submenu.style.maxHeight = submenu.scrollHeight + "px"; // Abrir con animación
          }
          this.classList.toggle("icon-rotate");
        }
      });
    });

  // Toggle de menú móvil principal
  document
    .querySelector(".mobile-menu-toggler")
    ?.addEventListener("click", function () {
      document.body.classList.toggle("primary-mobile-menu-open");
    });

  // Botón de menú off-canvas
  document
    .querySelector(".ofcanvus-btn")
    ?.addEventListener("click", function (e) {
      e.preventDefault();
      document.querySelector(".ofcanvus-menu")?.classList.add("active");
    });

  document
    .querySelector(".close-canvus")
    ?.addEventListener("click", function (e) {
      e.preventDefault();
      document.querySelector(".ofcanvus-menu")?.classList.remove("active");
    });

  // Cerrar menú off-canvas al hacer clic fuera
  document.addEventListener("mouseup", function (e) {
    const menu = document.querySelector(".ofcanvus-menu");
    if (menu && !menu.contains(e.target)) {
      menu.classList.remove("active");
    }
  });

  // Cambiar tema oscuro / claro
  const setTheme = (isDark) => {
    const root = document.documentElement;
    root.setAttribute("data-bs-theme", isDark ? "dark" : "light");
    localStorage.setItem("theme", isDark ? "dark" : "light");
  };

  const toggleTheme = () => {
    const currentTheme = document.documentElement.getAttribute("data-bs-theme");
    setTheme(currentTheme === "light");
  };

  (() => {
    const storedTheme = localStorage.getItem("theme");
    setTheme(storedTheme === "dark");

    document
      .querySelector(".dark-light-switcher")
      ?.addEventListener("click", toggleTheme);
  })();

  // Alternar precios (mensual/anual)
  document
    .querySelector(".switch-input")
    ?.addEventListener("change", function () {
      document
        .querySelector(".yearly-price")
        ?.style.setProperty("display", this.checked ? "block" : "none");
      document
        .querySelector(".monthly-price")
        ?.style.setProperty("display", this.checked ? "none" : "block");
    });

  // Expandir listas de características
  document.querySelectorAll(".expand-btn").forEach((el) => {
    el.addEventListener("click", function () {
      this.nextElementSibling?.classList.toggle("expand-list");
      this.classList.toggle("active");
    });
  });

  // Tooltip Bootstrap
  document.querySelectorAll('[data-bs-toggle="tooltip"]').forEach((el) => {
    new bootstrap.Tooltip(el);
  });

  // Acordeón activo en el menú de preguntas frecuentes
  document
    .querySelectorAll(".hm2-accordion .accordion-header a")
    .forEach((el) => {
      el.addEventListener("click", function () {
        const accordion = this.closest(".accordion");
        accordion
          ?.querySelector(".show")
          ?.closest(".acoridion-item")
          ?.classList.add("active");
      });
    });

  // Cerrar notificaciones
  document
    .querySelector(".notice-close")
    ?.addEventListener("click", function () {
      let wrapper = document.querySelector(".notice-wrapper");
      let bar = document.querySelector(".notice-bar");

      if (wrapper) wrapper.style.display = "none";
      if (bar) bar.style.display = "none";

      document.body.style.overflow = "auto";
    });

  // Alternar barra de notificaciones
  document
    .querySelector(".notice-toggle")
    ?.addEventListener("click", function () {
      const wrapper = document.querySelector(".notice-wrapper");
      wrapper?.classList.toggle("active");

      document.body.style.overflow = wrapper?.classList.contains("active")
        ? "hidden"
        : "auto";
    });
});

window.addEventListener("scroll", function () {
  let scrollTop = window.scrollY || document.documentElement.scrollTop;
  let scrollBtn = document.querySelector(".scrolltop-btn");
  let header = document.querySelector("header");

  // Mostrar u ocultar el botón de scroll arriba
  if (scrollBtn) {
    scrollBtn.style.display = scrollTop > 150 ? "block" : "none";
  }

  // Agregar o quitar la clase sticky al header
  if (header) {
    if (scrollTop > 80) {
      header.classList.add("sticky-header");
    } else {
      header.classList.remove("sticky-header");
    }
  }
});

document.addEventListener("DOMContentLoaded", function () {
  const progressBar = document.querySelector(".progress-barx");
  const timeline = document.querySelector(".timelinex"); // Asegúrate de usar el selector correcto

  function updateProgressBar() {
    const timelineRect = timeline.getBoundingClientRect();
    const windowHeight = window.innerHeight;

    // Verificar si el timeline está visible en la pantalla
    if (timelineRect.top >= windowHeight || timelineRect.bottom <= 0) {
      progressBar.style.height = "0%"; // Reiniciar si no está visible
      return;
    }

    // Calcular cuánto ha scrolleado dentro del timeline
    const start = Math.max(0, windowHeight - timelineRect.top);
    const totalScrollable = windowHeight + timelineRect.height;
    const progress = (start / totalScrollable) * 100;

    // Aplicar la altura calculada a la barra de progreso
    progressBar.style.height = `${Math.min(Math.max(progress, 0), 100)}%`;
  }

  // Usamos IntersectionObserver para activar el scroll tracking solo cuando el timeline es visible
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          window.addEventListener("scroll", updateProgressBar);
          updateProgressBar(); // Iniciar la barra si el timeline ya es visible
        } else {
          window.removeEventListener("scroll", updateProgressBar);
          progressBar.style.height = "0%"; // Reiniciar si sale de pantalla
        }
      });
    },
    { threshold: 0.1 } // Se activa cuando al menos el 10% del timeline es visible
  );

  observer.observe(timeline);
});

const swiperQuiz = new Swiper(".animeslide", {
  // Optional parameters
  effect: "fade",
  loop: true,
  speed: 900,
  centeredSlides: true,
  pagination: {
    el: ".animeslide-pagination",
    type: "custom",
    renderCustom: function (swiper, current, total) {
      let indT = total >= 5 ? total : `${total}`;
      let indC = current >= 5 ? current : `${current}`;
      return `<b>${indC}</b><span>/</span>${indT}`;
    },
  },
  navigation: {
    nextEl: ".animeslide-button-next",
    prevEl: ".animeslide-button-prev",
  },
  scrollbar: {
    el: ".animeslide-scrollbar",
    draggable: true,
  },
  keyboard: {
    enabled: true,
    onlyInViewport: false,
  },
  runCallbacksOnInit: true,
});

const reviewsSlider = new Swiper(".reviewsSlider", {
  loop: true,
  slidesPerView: 3,
  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
