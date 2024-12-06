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
        <div class="col-lg-12">
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

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="nombre" class="form-label"><b>Nombre y Apellido del Depositante:</b></label>
                <input name="nombre" id="nombre" type="text" class="form-control">
              </div>
              <div class="col-md-6 mb-3">
                <label for="domicilio" class="form-label"><b>Domicilio:</b></label>
                <input name="domicilio" id="domicilio" type="text" class="form-control">
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="fijo" class="form-label"><b>Teléfono Fijo:</b></label>
                <input name="fijo" id="fijo" type="text" class="form-control" maxlength="30">
              </div>
              <div class="col-md-6 mb-3">
                <label for="celular" class="form-label"><b>Teléfono Móvil:</b></label>
                <input name="celular" id="celular" type="text" class="form-control" maxlength="30" required>
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

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="email" class="form-label"><b>E-mail:</b></label>
                <input name="email" id="email" type="email" class="form-control" maxlength="100">
              </div>
              <div class="col-md-6 mb-3">
                <label for="contenido" class="form-label"><b>Comentario:</b></label>
                <textarea name="contenido" id="contenido" rows="5" class="form-control"></textarea>
                <small><strong>Nota:</strong> Puede dejar indicado el nombre de su dominio al cual usted será registrado (no ingresar http://).</small>
              </div>
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
              <input type="checkbox" name="acuerdo" id="acuerdo" class="form-check-input" value="Aceptado">
              <label for="acuerdo" class="form-check-label">He leído y estoy de acuerdo con los <a class="term-link" href="terminos.php" target="_blank"><b>Términos y Condiciones de Uso</b></a></label>
            </div>

            <div class="text-center mt-5">
              <label for="recaptcha" class="form-label"><b>Código de Seguridad:</b></label>
              <br>
              <br>
              <br>
            </div>
            <div class="text-center mt-5">
              <button type="submit" class="btn template-btn primary-btn" id="EnviarNow">Enviar Notificación de Pago</button>
              <input type="hidden" name="action" value="send">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include("template-parts/footer.php") ?>