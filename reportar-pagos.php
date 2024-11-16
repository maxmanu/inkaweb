<?php include("template-parts/header.php") ?>

<!--breadcrumb area start-->
<section class="breadcrumb-area bg-primary-gradient bg-hero-libro">
  <div class="container">
    <div class="breadcrumb-content text-center">
      <h2 class="mb-3">NOTIFICACIÓN DE PAGO</h2>
      <p>(LLENAR SOLO DESPUÉS DEL PAGO)</p>
    </div>
  </div>
</section>
<!--breadcrumb area end-->

<section class="hm-contact-area position-relative pt-60 pb-120 overflow-hidden bg-white zindex-1">
  <img src="assets/img/imagenes-inkaweb/contact-bg-left.png" alt="bg" class="position-absolute left-bottom">
  <img src="assets/img/imagenes-inkaweb/contact-bg-right.png" alt="bg" class="position-absolute right-bottom">
  <div class="container">
    <div class="hm-contact-form mt-1">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="row justify-content-center mb-2">
            <div class="col">
              <h6 class="hds-body-color-four fs-18 lh-28 mb-0 mt-20">
                Como Hacer el Reporte de Pago
              </h6>
              <p class="ff-inter fw-400 lh-22 fs-14 mt-10 mb-0">Tipo de Cambio : USD $1.00 = S/3.89</p>
              <p class="ff-inter fw-400 lh-22 fs-14 mt-10 mb-0">
                En agentes Bcp, Interbank, Banco de la nación, Continental, ubicados en farmacias o boticas, tiendas, etc, a su alcance, también domingos y feriados, no incluye ninguna comisión bancaria, el pago sería a las cuentas en soles.
              </p>
              <p class="ff-inter fw-400 lh-22 fs-14 mt-10 mb-3">
                Si realizas el pago por ventanilla de Banco
                adicionar USD $1.00 por comisión bancaria
              </p>
              <div class="alert alert-warning" role="alert">
                <strong>IMPORTANTE: </strong> Los Precios no incluyen IGV
              </div>
            </div>
          </div>
          <form action="" method="post" enctype="multipart/form-data" name="form1" class="mt-5">
            <h6 class="hds-body-color-four fs-18 lh-28 mb-3 mt-20">
              Ingresa los siguientes campos para enviarnos los datos del pago
            </h6>
            <div class="mb-3">
              <label for="nombre" class="form-label"><b>Nombre y Apellido:</b></label>
              <input name="nombre" id="nombre" type="text" class="form-control" maxlength="55" onfocus="c('id1');" onblur="r('id1');">
            </div>

            <div class="mb-3">
              <label for="domicilio" class="form-label"><b>Domicilio:</b></label>
              <input name="domicilio" id="domicilio" type="text" class="form-control" maxlength="70" onfocus="c('id2');" onblur="r('id2');">
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="fijo" class="form-label"><b>Teléfono Fijo:</b></label>
                <input name="fijo" id="fijo" type="text" class="form-control" maxlength="30" onfocus="c('id5');" onblur="r('id5');">
              </div>
              <div class="col-md-6 mb-3">
                <label for="celular" class="form-label"><b>Teléfono Móvil:</b></label>
                <input name="celular" id="celular" type="text" class="form-control" maxlength="30" onfocus="c('id8');" onblur="r('id8');">
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="agencia" class="form-label"><b>Agencia:</b></label>
                <select name="agencia" id="agencia" class="form-select">
                  <option value="0">- Seleccionar -</option>
                  <option value="Banco de Credito">Banco de Credito</option>
                  <option value="Banco Interbank">Banco Interbank</option>
                  <option value="Banco de la Nacion">Banco de la Nacion</option>
                  <option value="Banco Continental">Banco Continental</option>
                  <option value="Scotiabank">Scotiabank</option>
                  <option value="Western Union">Western Unión</option>
                  <option value="Money Gram">Money Gram</option>
                  <option value="Paypal">Paypal</option>
                </select>
              </div>
              <div class="col-md-6 mb-3">
                <label for="servicio" class="form-label"><b>Servicio:</b></label>
                <select name="servicio" id="servicio" class="form-select">
                  <option value="0">- Seleccionar -</option>
                  <option value="Hosting">Hosting</option>
                  <option value="Dominio">Dominio</option>
                  <option value="Hosting y Dominio">Hosting y Dominio</option>
                  <option value="Streaming">Streaming</option>
                  <option value="Reseller">Reseller</option>
                  <option value="Renovacion de Servicios">Renovación de Servicios</option>
                </select>
              </div>
            </div>

            <div class="mb-3">
              <label for="email" class="form-label"><b>E-mail:</b></label>
              <input name="email" id="email" type="email" class="form-control" maxlength="100" onfocus="c('id7');" onblur="r('id7');">
            </div>

            <div class="mb-3">
              <label for="contenido" class="form-label"><b>Comentario:</b></label>
              <p><strong>Nota:</strong> Puede dejar indicado el nombre de su dominio al cual usted será registrado (no ingresar http://).</p>
              <textarea name="contenido" id="contenido" rows="5" class="form-control" onfocus="c('id4');" onblur="r('id4');"></textarea>
            </div>

            <div class="mb-3">
              <label for="recaptcha" class="form-label"><b>Código de Seguridad:</b></label>
              <div class="g-recaptcha" data-sitekey="6LfDU1EUAAAAAF_A7PLuIjVD0udBIoQc08CBhFff"></div>
            </div>

            <div class="mb-3">
              <label for="imagen" class="form-label"><b>Subir Archivo:</b></label>
              <p><strong>Formato Permitido:</strong> JPG, PNG, GIF, PDF, DOC y DOCX, Peso Máx. 700KB.</p>
              <input type="file" name="imagen" id="imagen" class="form-control">
            </div>

            <div class="alert alert-warning" role="alert">
              <strong>AVISO IMPORTANTE:</strong> Adjuntar el voucher o foto del comprobante de Pago. Si el pago es por transferencia bancaria, Paypal o 2checkout, enviar la constancia a pagos@inkawebdesign.com. Este paso es requisito importante para la activación de la cuenta.
            </div>

            <div class="form-check mb-3">
              <input type="checkbox" name="acuerdo" id="acuerdo" class="form-check-input" onclick="EnterTyC();" value="Aceptado">
              <label for="acuerdo" class="form-check-label">He leído y estoy de acuerdo con los <a class="term-link" href="terminos.php" target="_blank"><b>Términos y Condiciones de Uso</b></a></label>
            </div>

            <div class="text-center">
              <button type="submit" class="btn template-btn primary-btn" id="EnviarNow"> Enviar</button>
              <input type="hidden" name="action" value="send">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Faq -->
<div class="host-fs-faq-area pt-60 pb-120">
  <div class="container">
    <div class="row align-items-center justify-content-between">
      <div class="col-lg-8 mx-auto">
        <h2 class="host-fs-title text-black fs-48 fw-800">
          Preguntas Frecuentes acerca de como hacer <mark class="text-primary"> las transferencias.</mark></h2>
        <div class="dchs-reating-author mb-20">
          <span class="host-fs-bg d-inline-block"></span>
        </div>
        <div class="accordion hm2-accordion host-fs-faq" id="accordion_1">
          <div class="accordion-item">
            <div class="accordion-header">
              <a href="#sh_1" data-bs-toggle="collapse">1. What is Reseller Hosting?</a>
            </div>
            <div class="accordion-collapse collapse show" id="sh_1" data-bs-parent="#accordion_1">
              <div class="accordion-body">
                <p class="mb-0">We care about safety big time — and so do your site's visitors. With a Shared Hosting account, you get an SSL certificate for free to add to your site. In this day and age, having an SSL for your site is a no-brainer best practice. Not only does an SSL help your visitors feel safe interacting with your site — this is particularly important if you run an e-commerce site.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <div class="accordion-header">
              <a href="#sh_2" data-bs-toggle="collapse" class="collapsed">2. Am I responsible for providing support to my customers?</a>
            </div>
            <div class="accordion-collapse collapse" id="sh_2" data-bs-parent="#accordion_1">
              <div class="accordion-body">
                <p class="mb-0">We care about safety big time — and so do your site's visitors. With a Shared Hosting account, you get an SSL certificate for free to add to your site. In this day and age, having an SSL for your site is a no-brainer best practice. Not only does an SSL help your visitors feel safe interacting with your site — this is particularly important if you run an e-commerce site.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <div class="accordion-header">
              <a href="#sh_3" data-bs-toggle="collapse" class="collapsed">3. How do I automate client management?</a>
            </div>
            <div class="accordion-collapse collapse" id="sh_3" data-bs-parent="#accordion_1">
              <div class="accordion-body">
                <p class="mb-0">We care about safety big time — and so do your site's visitors. With a Shared Hosting account, you get an SSL certificate for free to add to your site. In this day and age, having an SSL for your site is a no-brainer best practice. Not only does an SSL help your visitors feel safe interacting with your site — this is particularly important if you run an e-commerce site.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <div class="accordion-header">
              <a href="#sh_4" data-bs-toggle="collapse" class="collapsed">4. I am not sure which plan to choose, can I change my plan later?</a>
            </div>
            <div class="accordion-collapse collapse" id="sh_4" data-bs-parent="#accordion_1">
              <div class="accordion-body">
                <p class="mb-0">We care about safety big time — and so do your site's visitors. With a Shared Hosting account, you get an SSL certificate for free to add to your site. In this day and age, having an SSL for your site is a no-brainer best practice. Not only does an SSL help your visitors feel safe interacting with your site — this is particularly important if you run an e-commerce site.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <div class="accordion-header">
              <a href="#sh_5" data-bs-toggle="collapse" class="collapsed">5. How will I register Domains for my customers?</a>
            </div>
            <div class="accordion-collapse collapse" id="sh_5" data-bs-parent="#accordion_1">
              <div class="accordion-body">
                <p class="mb-0">We care about safety big time — and so do your site's visitors. With a Shared Hosting account, you get an SSL certificate for free to add to your site. In this day and age, having an SSL for your site is a no-brainer best practice. Not only does an SSL help your visitors feel safe interacting with your site — this is particularly important if you run an e-commerce site.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <div class="accordion-header">
              <a href="#sh_6" data-bs-toggle="collapse" class="collapsed">6. Can I have a Custom Name server?</a>
            </div>
            <div class="accordion-collapse collapse" id="sh_6" data-bs-parent="#accordion_1">
              <div class="accordion-body">
                <p class="mb-0">We care about safety big time — and so do your site's visitors. With a Shared Hosting account, you get an SSL certificate for free to add to your site. In this day and age, having an SSL for your site is a no-brainer best practice. Not only does an SSL help your visitors feel safe interacting with your site — this is particularly important if you run an e-commerce site.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <div class="accordion-header">
              <a href="#sh_7" data-bs-toggle="collapse" class="collapsed">7. Do you offer support for my clients? Or is that my duty as a Reseller Host?</a>
            </div>
            <div class="accordion-collapse collapse" id="sh_7" data-bs-parent="#accordion_1">
              <div class="accordion-body">
                <p class="mb-0">We care about safety big time — and so do your site's visitors. With a Shared Hosting account, you get an SSL certificate for free to add to your site. In this day and age, having an SSL for your site is a no-brainer best practice. Not only does an SSL help your visitors feel safe interacting with your site — this is particularly important if you run an e-commerce site.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <div class="accordion-header">
              <a href="#sh_8" data-bs-toggle="collapse" class="collapsed">8. What are the advantages of having dedicated server hosting?</a>
            </div>
            <div class="accordion-collapse collapse" id="sh_8" data-bs-parent="#accordion_1">
              <div class="accordion-body">
                <p class="mb-0">We care about safety big time — and so do your site's visitors. With a Shared Hosting account, you get an SSL certificate for free to add to your site. In this day and age, having an SSL for your site is a no-brainer best practice. Not only does an SSL help your visitors feel safe interacting with your site — this is particularly important if you run an e-commerce site.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Faq -->

<?php include("template-parts/footer.php") ?>