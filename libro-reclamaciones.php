<?php include("template-parts/header.php") ?>

<!--breadcrumb area start-->
<section class="breadcrumb-area bg-primary-gradient bg-hero-libro">
  <div class="container">
    <div class="breadcrumb-content text-center">
      <h2 class="mb-3">Libro de Reclamaciones</h2>
    </div>
  </div>
</section>
<!--breadcrumb area end-->

<form data-multi-step class="container my-5 multi-step-form">
  <div class="card-step" data-step>
    <!-- Tipo de Solicitud -->
    <div class="mb-5">
      <h5 class="text-primary mb-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 20 24" class="me-3" fill="none">
          <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M2.01243 19.5635V2.37598C2.01243 2.18613 2.16352 2.03223 2.3499 2.03223H10.4474C10.5358 2.03223 10.6207 2.06758 10.6838 2.13069L17.8852 9.33264C17.9499 9.39727 17.9863 9.48566 17.9863 9.57792V21.626C17.9863 21.8158 17.8352 21.9697 17.6488 21.9697H4.37476C3.07008 21.9697 2.01243 20.8924 2.01243 19.5635ZM1 2.37598V19.5635C1 21.462 2.51093 23.001 4.37476 23.001H17.6488C18.3943 23.001 18.9987 22.3854 18.9987 21.626V9.57792C18.9987 9.20888 18.8531 8.85532 18.5945 8.59677L11.3931 1.39483C11.1407 1.1424 10.8011 1.00098 10.4474 1.00098H2.3499C1.60437 1.00098 1 1.61658 1 2.37598Z"
            fill="#00529E"
            stroke="#00529E"
            stroke-width="0.4" />
          <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M11.3473 8.73438C10.8814 8.73438 10.5036 8.34962 10.5036 7.875V0.999999H9.49121V7.875C9.49121 8.91916 10.3222 9.76562 11.3473 9.76562H18.0968V8.73438H11.3473Z"
            fill="#00529E"
            stroke="#00529E"
            stroke-width="0.4" />
          <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M5.36133 13.3916C5.36133 13.1068 5.58797 12.876 5.86754 12.876H13.9775C14.257 12.876 14.4837 13.1068 14.4837 13.3916C14.4837 13.6764 14.257 13.9072 13.9775 13.9072H5.86754C5.58797 13.9072 5.36133 13.6764 5.36133 13.3916ZM5.36133 16.1452C5.36133 15.8604 5.58797 15.6295 5.86754 15.6295H13.9775C14.257 15.6295 14.4837 15.8604 14.4837 16.1452C14.4837 16.4299 14.257 16.6608 13.9775 16.6608H5.86754C5.58797 16.6608 5.36133 16.4299 5.36133 16.1452Z"
            fill="#FF5814" />
          <script xmlns="" />
        </svg>
        TIPO DE SOLICITUD: <span class="text-orange">*</span>
      </h5>
      <div class="row g-lg-5 g-3">
        <div class="col-lg-6">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="tipo_solicitud" id="reclamo" value="reclamo" required />
            <label class="form-check-label" for="reclamo">Reclamo</label>
          </div>
          <div class="alert alert-primary d-flex align-items-center" role="alert">
            <i class="bi bi-info-circle-fill flex-shrink-0 me-2"></i>
            <small>Cuando no estás conforme con alguno de nuestros productos o servicios.</small>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="tipo_solicitud" id="queja" value="queja" required />
            <label class="form-check-label" for="queja">Queja</label>
          </div>
          <div class="alert alert-primary d-flex align-items-center" role="alert">
            <i class="bi bi-info-circle-fill flex-shrink-0 me-2"></i>
            <small>Cuando sentiste alguna molestia o descontento al momento de recibir nuestra atención.</small>
          </div>
        </div>
      </div>
    </div>

    <!-- Datos Personales -->
    <div class="mb-5">
      <h5 class="text-primary mb-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="26" viewBox="0 0 21 26" class="me-3" fill="none">
          <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M17.9668 7.5C17.9668 11.6421 14.6089 15 10.4668 15C6.32466 15 2.9668 11.6421 2.9668 7.5C2.9668 3.35786 6.32466 0 10.4668 0C14.6089 0 17.9668 3.35786 17.9668 7.5ZM10.4668 13.5C13.7805 13.5 16.4668 10.8137 16.4668 7.5C16.4668 4.18629 13.7805 1.5 10.4668 1.5C7.15309 1.5 4.4668 4.18629 4.4668 7.5C4.4668 10.8137 7.15309 13.5 10.4668 13.5Z"
            fill="#00529E" />
          <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M18.4662 25.3125H2.46622C1.12275 25.3125 -0.107095 24.2015 0.00741306 22.7001C0.138433 20.9822 0.638308 18.7709 2.26792 16.9823C3.93485 15.1526 6.56584 14 10.4662 14C14.3666 14 16.9976 15.1526 18.6645 16.9823C20.2941 18.7709 20.794 20.9822 20.925 22.7001C21.0395 24.2015 19.8097 25.3125 18.4662 25.3125ZM18.4662 23.8125H2.46622C1.91393 23.8125 1.46107 23.3648 1.50307 22.8142C1.73992 19.7086 3.27492 15.5 10.4662 15.5C17.6575 15.5 19.1925 19.7086 19.4294 22.8142C19.4714 23.3648 19.0185 23.8125 18.4662 23.8125Z"
            fill="#00529E" />
          <path
            d="M10.5421 11.4199C9.95835 11.4199 9.43391 11.1812 9.05505 10.7999C9.43349 11.1809 9.95751 11.4199 10.5421 11.4199Z"
            fill="#FF5814"
            stroke="#FF5814"
            stroke-width="1.5"
            stroke-miterlimit="10" />
          <script xmlns="" />
        </svg>
        DATOS PERSONALES:
      </h5>
      <div class="row g-lg-5 g-3 mb-4">
        <div class="col-lg-6">
          <div class="form-floating">
            <input
              type="password"
              class="form-control"
              name="nombre_apellidos"
              id="nombre_apellidos"
              placeholder="Nombres y Apellidos *" required />
            <label for="nombre_apellidos">Nombres y Apellidos *</label>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="form-floating">
            <select class="form-select" name="floatingSelect" id="floatingSelect" aria-label="Floating label select example" required>
              <option selected>Tipo de documento *</option>
              <option value="DNI">DNI</option>
              <option value="RUC">RUC</option>
              <option value="CE">CE</option>
              <option value="Pasaporte">Pasaporte</option>
              <option value="Cedula">Cédula de identidad nacional</option>
            </select>
            <label for="floatingSelect">Documento</label>
          </div>
        </div>
      </div>
      <div class="row g-lg-5 g-3">
        <div class="col-lg-6">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="menor_edad" id="menor_edad" />
            <label class="form-check-label" for="menor_edad">Soy menor de edad</label>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="form-floating">
            <input
              type="password"
              class="form-control"
              name="documento"
              id="documento"
              placeholder="Número de documento *" required />
            <label for="documento">Número de documento *</label>
          </div>
        </div>
      </div>
    </div>

    <!-- Inputs adicionales para el menor de edad -->
    <div id="menorEdadFields" class="row d-none">
      <div class="col-lg-6 mb-3">
        <div class="form-floating">
          <input type="text" class="form-control" name="nombre_representante" id="nombre_representante" placeholder="Nombre" />
          <label for="nombre_representante">Nombre</label>
        </div>
      </div>
      <div class="col-lg-6 mb-3">
        <div class="form-floating">
          <input type="text" class="form-control" name="direccion_representante" id="direccion_representante" placeholder="Dirección" />
          <label for="direccion_representante">Dirección</label>
        </div>
      </div>
      <div class="col-lg-6 mb-3">
        <div class="form-floating">
          <input type="tel" class="form-control" name="telefono_representante" id="telefono_representante" placeholder="Teléfono" />
          <label for="telefono_representante">Teléfono</label>
        </div>
      </div>
      <div class="col-lg-6 mb-3">
        <div class="form-floating">
          <input type="email" class="form-control" name="email_representante" id="email_representante" placeholder="Email" />
          <label for="email_representante">Email</label>
        </div>
      </div>
    </div>

    <!-- Datos de Ubicación y Contacto -->
    <div class="my-5">
      <h5 class="text-primary mb-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="25" viewBox="0 0 18 25" class="me-3" fill="none">
          <path
            d="M1.43613 12.4165L1.43617 12.4165L1.43262 12.4089C0.959323 11.3957 0.75 10.3034 0.75 9.11504C0.75 4.63966 4.32965 1.0625 8.81131 1.0625C13.2971 1.0625 16.9512 4.6451 17.0232 9.12079C17.0226 10.307 16.8132 11.3974 16.3406 12.4089L16.3393 12.4118C14.226 16.986 10.3367 21.7992 8.89062 23.4514C7.41974 21.7121 3.4748 16.9112 1.43613 12.4165Z"
            stroke="#00529E"
            stroke-width="1.5"
            stroke-miterlimit="10" />
          <circle cx="8.88672" cy="8.85547" r="3.75" stroke="#FF6702" stroke-width="1.5" />
          <script xmlns="" />
        </svg>
        DATOS DE UBICACIÓN Y CONTACTO:
      </h5>

      <label class="form-label text-danger">¿Dónde quieres recibir la respuesta de tu reclamo?</label>
      <div class="row g-lg-5 g-3 mb-4">
        <div class="col-lg-6">
          <div class="form-check">
            <input class="form-check-input" type="radio" id="direccionRadio" name="respuesta" />
            <label class="form-check-label" for="direccionRadio">Dirección</label>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="form-check">
            <input class="form-check-input" type="radio" id="emailRadio" name="respuesta" />
            <label class="form-check-label" for="emailRadio">E-mail</label>
          </div>
        </div>
      </div>
      <div class="row g-lg-5 g-3 mb-4">
        <div class="col-lg-12">
          <div class="form-floating">
            <input type="password" class="form-control" name="direccion" id="direccion" placeholder="Dirección" />
            <label for="direccion">Dirección</label>
          </div>
        </div>
      </div>

      <div class="row g-lg-5 g-3 mb-4">
        <div class="col-lg-4">
          <div class="form-floating">
            <select class="form-select" name="departamento" id="departamento" aria-label="Floating label select example">
              <option selected>Departamento</option>
            </select>
            <label for="departamento">Departamento</label>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-floating">
            <select class="form-select" name="provincia" id="provincia" aria-label="Floating label select example">
              <option selected>Provincia</option>
            </select>
            <label for="provincia">Provincia</label>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-floating">
            <select class="form-select" name="distrito" id="distrito" aria-label="Floating label select example">
              <option selected>Distrito</option>
            </select>
            <label for="distrito">Distrito</label>
          </div>
        </div>
      </div>

      <div class="row g-lg-5 g-3">
        <div class="col-lg-4">
          <div class="form-floating">
            <input type="email" class="form-control" name="email_contacto" id="email_contacto" placeholder="E-mail *" required />
            <label for="email_contacto">E-mail *</label>
            <div class="form-text">
              Este campo es obligatorio, te enviaremos la constancia de la presentación de tu reclamo a este E-mail
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-floating">
            <input type="email" class="form-control" name="repetir_email" id="repetir_email" placeholder="Repetir E-mail *" required />
            <label for="repetir_email" class="form-label">Repetir E-mail *</label>
            <div class="form-text">Por motivos de seguridad, debes volver a ingresar el E-mail.</div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-floating">
            <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Teléfono" />
            <label for="telefono" class="form-label">Teléfono</label>
            <div class="form-text">&nbsp;</div>
          </div>
        </div>
      </div>
    </div>

    <!-- Botones de acción -->
    <div class="d-flex justify-content-center gap-3 mt-4">
      <button type="button" data-next id="continue-btn" class="btn btn-primary px-5">CONTINUAR</button>
    </div>
    <p class="text-center mt-3 text-muted">
      La respuesta de su reclamo o queja será notificada a la dirección o E-mail indicado.
    </p>
  </div>
  <div class="card-step" data-step>
    <!-- IDENTIFICACIÓN DEL PRODUCTO O SERVICIO CONTRATADO -->
    <div class="mb-5">
      <h5 class="text-primary mb-4">IDENTIFICACIÓN DEL PRODUCTO O SERVICIO CONTRATADO</h5>
      <div class="row g-lg-5 g-3 mb-4">
        <div class="col-lg-6">
          <div class="form-floating">
            <select class="form-select" name="tipo_bien" id="tipo_bien" aria-label="Floating label select example">
              <option selected>Tipo de bien</option>
              <option value="producto">Producto</option>
              <option value="servicio">Servicio</option>
            </select>
            <label for="tipo_bien">Bien</label>
          </div>
          <div class="alert alert-primary d-flex align-items-center mt-1" role="alert">
            <i class="bi bi-info-circle-fill flex-shrink-0 me-2"></i>
            <small>Cuéntanos con cuál de nuestros productos o servicios no estás conforme.</small>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="form-floating">
            <input type="password" class="form-control" name="monto" id="monto" placeholder="Monto reclamado" required />
            <label for="nombre_apellidos">Monto reclamado</label>
          </div>
        </div>
      </div>
      <div class="row g-lg-5 g-3 mb-4">
        <div class="col-lg-12">
          <div class="form-floating">
            <textarea
              class="form-control"
              placeholder="Leave a comment here"
              name="descripcion_bien"
              id="descripcion_bien"
              style="height: 100px"></textarea>
            <label for="descripcion_bien">Descripción del Producto o Servicio contratado</label>
          </div>
        </div>
      </div>
      <div class="row g-lg-5 g-3 mb-4">
        <div class="col-lg-6">
          <div class="form-floating">
            <select class="form-select" name="canal_atencion" id="canal_atencion" aria-label="Floating label select example">
              <option selected>Canal de atención</option>
              <option value="tienda">Tienda</option>
              <option value="web">Web</option>
              <option value="call-center">Call Center</option>
              <option value="ejecutivo">Ejecutivo Empresas</option>
              <option value="redes">Redes Sociales</option>
              <option value="whatsapp">Whatsapp</option>
              <option value="otros">Otros</option>
            </select>
            <label for="canal_atencion">Bien</label>
          </div>
          <div class="alert alert-primary d-flex align-items-center mt-1" role="alert">
            <i class="bi bi-info-circle-fill flex-shrink-0 me-2"></i>
            <small> Cuéntanos por qué medio fuiste atendido.</small>
          </div>
        </div>
        <div class="col-lg-6"></div>
      </div>
    </div>

    <!-- DETALLE DE LA RECLAMACIÓN -->
    <div class="mb-5">
      <h5 class="text-primary mb-4">DETALLE DE LA RECLAMACIÓN</h5>
      <div class="row g-lg-5 g-3 mb-4">
        <div class="col-lg-12">
          <div class="form-floating">
            <textarea
              class="form-control"
              placeholder="Leave a comment here"
              name="detalle_reclamacion"
              id="detalle_reclamacion"
              style="height: 100px"></textarea>
            <label for="detalle_reclamacion">Detalle</label>
          </div>
        </div>
      </div>
      <div class="row g-lg-5 g-3 mb-4">
        <div class="col-lg-12">
          <div class="form-floating">
            <textarea
              class="form-control"
              placeholder="Leave a comment here"
              name="detalle_pedido"
              id="detalle_pedido"
              style="height: 100px"></textarea>
            <label for="detalle_pedido">Pedido</label>
          </div>
        </div>
      </div>
    </div>

    <!-- ACCIONES ADOPTADAS POR EL PROVEEDOR -->
    <div class="mb-5">
      <h5 class="text-primary mb-4">ACCIONES ADOPTADAS POR EL PROVEEDOR</h5>
      <div class="row g-lg-5 g-3 mb-4">
        <div class="col-lg-12">
          <div class="form-floating">
            <textarea
              class="form-control"
              placeholder="Leave a comment here"
              name="detalle_proveedor"
              id="detalle_proveedor"
              style="height: 100px"></textarea>
            <label for="detalle_proveedor">Detalle</label>
          </div>
        </div>
      </div>
    </div>

    <div class="mb-5">
      <p class="text-primary mb-4">Fecha de comunicación de la respuesta</p>
      <div class="row g-lg-5 g-3 mb-4">
        <div class="col-lg-6">
          <input type="date" name="fecha_comunicacion" id="fecha_comunicacion" value="2017-06-01" />
        </div>
      </div>
    </div>

    <div class="mb-5">
      <p class="text-primary mb-4">Adjuntar archivo</p>
      <div class="row g-lg-5 g-3 mb-4">
        <div class="col-lg-12">
          <div class="input-group mb-3">
            <input type="file" class="form-control" name="archivo" id="archivo" />
          </div>
        </div>
      </div>
    </div>

    <div class="mb-5 margin-top-30 card card--info text-align-justify">
      <p class="mb-0"><b>Debes saber:</b><br /></p>
      <p class="mb-0">
        <span class="text-orange font-bold">*</span>La respuesta de su reclamo o queja será notificada a la
        dirección o E-mail indicado.
      </p>
      <p class="mb-0">
        <span class="text-orange font-bold">*</span>La formulación del reclamo no impide acudir a otras vías de
        solución de controversias ni es requisito previo para interponer una denuncia ante el INDECOPI.
      </p>
      <p class="mb-0">
        <span class="text-orange font-bold">*</span>El proveedor deberá dar respuesta al reclamo en un plazo no
        mayor de quince (15) días hábiles improrrogables.
      </p>
    </div>

    <div class="mb-5">
      <h5 class="text-primary mb-4">VALIDACIÓN DE SEGURIDAD</h5>
      <div class="row g-lg-5 g-3 mb-4">
        <div class="col-lg-12"></div>
      </div>
      <div class="row g-lg-5 g-3 mb-4">
        <div class="col-lg-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="aceptacion_politica" id="aceptacion_politica" />
            <label class="form-check-label" for="aceptacion_politica">Declaro haber leído la <a href="#">Política de Privacidad</a> y que los datos consignados son
              correctos y fiel expresión de la verdad.</label>
          </div>
        </div>
      </div>
    </div>

    <!-- Botones de acción -->
    <div class="d-flex justify-content-center gap-3 mt-4">
      <button type="submit" class="btn btn-primary px-5">ENVIAR</button>
      <button type="button" data-previous class="btn btn-outline-danger px-5">REGRESAR</button>
    </div>
    <p class="text-center mt-3 text-muted">
      La respuesta de su reclamo o queja será notificada a la dirección o E-mail indicado.
    </p>
  </div>
</form>

<?php include("template-parts/footer.php") ?>