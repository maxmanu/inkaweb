<?php include("template-parts/header.php") ?>

<!--breadcrumb area start-->
<section class="hero-style-1 contact-hero bg-white">
  <div class="hero-area overflow-hidden position-relative zindex-1 bg-primary-gradient bg-hero-contacto pt-120">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="hero1-content-wrap">
            <h1 class="display-font mt-4">Comunícate <br> con nosotros</h1>
            <p class="mt-4">No dude en escribirnos que tendra una respuesta inmediata, con lo cual tendra claro la seriedad de nuestra Empresa. Nosotros sabemos lo importante de obtener una respuesta inmediata, asesoría o ayuda.</p>
            <a href="#" class="template-btn primary-btn rounded-pill mt-4"><span class="me-2"><i class="fa-solid fa-comments"></i></span>Chat Online</a>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="hero-right">
            <!-- <img src="assets/img/0001.svg" alt="hero image"> -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="hm-contact-info promo-area position-relative">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-10">
          <div class="hm-ct-info-wrapper rounded">
            <span class="icon-wrapper rounded-circle d-inline-flex align-items-center justify-content-center">
              <i class="fa-solid fa-phone"></i>
            </span>
            <div class="info-content mt-4">
              <h4>Contacto</h4>
              <span><b>RPM:</b> #955666010</span><br>
              <span><b>T/Fax: </b>(+511) 578 6934</span><br>
              <span><b>Claro: </b>(+511)993015610</span><br>
              <span><b>Movistar: </b>(+511)955666010</span>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-10">
          <div class="hm-ct-info-wrapper rounded">
            <span class="icon-wrapper rounded-circle d-inline-flex align-items-center justify-content-center">
              <i class="fa-solid fa-at"></i>
            </span>
            <div class="info-content mt-4">
              <h4>E-mail</h4>
              <span><b>Ventas e Informes: </b><br> ventasinkawebdesign.com</span><br>
              <span><b>Soporte o Ayuda : </b><br>soporteinkawebdesign.com</span><br>
              <span><b>Reportar Pago : </b><br>ventasinkawebdesign.com</span><br>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-10">
          <div class="hm-ct-info-wrapper rounded">
            <span class="icon-wrapper rounded-circle d-inline-flex align-items-center justify-content-center">
              <i class="fa-solid fa-house"></i>
            </span>
            <div class="info-content mt-4">
              <h4>Ubicanos</h4>
              <span><b>Oficina: </b><br> Av. La Paz 1972 - Int. 207 - San Miguel, Lima - Perú</span><br>
              <span><b>Central : </b><br> (+511) 578 6934</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--breadcrumb area end-->

<!--contact form -->
<section class="hm-contact-area position-relative pt-60 pb-120 overflow-hidden bg-white zindex-1">
  <img src="assets/img/imagenes-inkaweb/contact-bg-left.png" alt="bg" class="position-absolute left-bottom">
  <img src="assets/img/imagenes-inkaweb/contact-bg-right.png" alt="bg" class="position-absolute right-bottom">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-5">
        <div class="ct-section-title text-center">
          <h2>Envíenos su consulta</h2>
        </div>
      </div>
    </div>
    <div class="hm-contact-form mt-5" id="contact">
      <div class="col-12 pb-3 message-box d-none">
        <div class="alert alert-danger"></div>
      </div>
      <form action="" method="POST" id="contactForm" class="contact-us-form">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="row g-4">
              <div class="col-md-6">
                <div class="input-field">
                  <label for="name">Nombre y Apellido</label>
                  <input type="text" class="" name="name" id="name" placeholder="Ingresar Nombre" required="required">
                </div>
              </div>
              <div class="col-md-6">
                <div class="input-field">
                  <label for="email">Email</label>
                  <input type="email" class="" name="email" id="email" placeholder="Ingresar email" required="required">
                </div>
              </div>
              <div class="col-md-6">
                <div class="input-field">
                  <label for="phone">Teléfono</label>
                  <input type="text" class="" name="phone" id="phone" placeholder="Ingresar teléfono o celular" required="required">
                </div>
              </div>
              <div class="col-md-6">
                <div class="input-field">
                  <label for="subject">¿En qué servicio estás interesada/o?</label>
                  <input type="text" class="" name="subject" id="subject" placeholder="Ingresar servicio" required="required">
                </div>
              </div>
              <div class="col-md-12">
                <div class="input-field">
                  <label for="message">¿En qué podemos ayudarte?</label>
                  <textarea placeholder="Ingresar mensaje" rows="5" name="message" id="message"></textarea>
                </div>
              </div>
              <div class="col-12">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                  <label class="form-check-label" for="invalidCheck">
                    Acepto que mis datos completados en este formulario,
                    sean procesados por InkaWeb según los <br> <a class="term-link" target="_blank" href="terminos.php">Términos y Condiciones</a>
                  </label>
                </div>
              </div>
              <div class="col-md-4 mx-auto">
                <div class="mb-3 d-flex align-items-center">
                  <canvas id="captcha" width="200" height="80"></canvas>
                  <button type="button" class="btn btn-secondary" id="refresh-captcha">
                    <i class="fa fa-refresh"></i>
                  </button>
                </div>
                <div class="mb-3">
                  <div class="input-field">
                    <label for="captcha-input">Captcha</label>
                    <input type="text" class="" name="subject" id="captcha-input" placeholder="Ingresar Captcha" required="required">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="submit-btn text-center mt-4">
          <button type="submit" class="template-btn primary-btn border-0 rounded-pill">Enviar<i class="fa-solid fa-chevron-right ms-2"></i></button>
        </div>
      </form>
    </div>
  </div>
</section>

<!--contact form end -->

<?php include("template-parts/footer.php") ?>