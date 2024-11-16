<?php include("template-parts/header.php") ?>

<!--breadcrumb area start-->
<section class="breadcrumb-area bg-primary-gradient bg-hero-meta-tags">
  <div class="container">
    <div class="breadcrumb-content text-center">
      <h2 class="mb-3">Generador de Metatags</h2>
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
                ¿Qué es y cual es la importancia de los Meta Tags?
              </h6>
              <p class="ff-inter fw-400 lh-22 fs-14 mt-10 mb-0">
                Las meta tags son instrucciones HTML que aportan información a los motores de búsqueda sobre las características principales de su sitio web tales como título, descripción, palabras clave, etc...
              </p>
              <p class="ff-inter fw-400 lh-22 fs-14 mt-10 mb-0">
                Cuando los robots o spiders analicen sus páginas, extraerán de ellas toda la información que necesiten o consideren relevante para evaluarlas, incluyendo la contenida en la etiquetas meta.
              </p>
              <p class="ff-inter fw-400 lh-22 fs-14 mt-10 mb-0">
                Por ello, es de suma importancia que todas sus meta etiquetas estén bien estructuradas y contengan información realmente interesante. La mayoría de los buscadores, ofrecerán esta información en los listados de los resultados de sus búsquedas.
              </p>
            </div>
          </div>
          <form class="mt-5">
            <h6 class="hds-body-color-four fs-18 lh-28 mb-3 mt-20">
              Llena los siguientes campos para generar automáticamente tus Meta Tags
            </h6>
            <!-- Título de la Página -->
            <div class="mb-3">
              <label for="pageTitle" class="form-label">Título de la Página</label>
              <input type="text" class="form-control" id="pageTitle" name="title" placeholder="Ingrese el título de la página">
            </div>

            <!-- Email de Contacto -->
            <div class="mb-3">
              <label for="contactEmail" class="form-label">Email de Contacto</label>
              <input type="email" class="form-control" id="contactEmail" name="email" placeholder="Ingrese el email de contacto">
            </div>

            <!-- Tema de la Página -->
            <div class="mb-3">
              <label for="theme" class="form-label">Tema de la Página</label>
              <input type="text" class="form-control" id="theme" name="theme" placeholder="Ingrese el tema de la página">
            </div>

            <!-- Categoría -->
            <div class="mb-3">
              <label for="category" class="form-label">Categoría</label>
              <input type="text" class="form-control" id="category" name="category" placeholder="Ingrese la categoría de la página">
            </div>

            <!-- Descripción -->
            <div class="mb-3">
              <label for="description" class="form-label">Descripción</label>
              <textarea class="form-control" id="description" name="description" rows="3" placeholder="Ingrese la descripción de la página"></textarea>
            </div>

            <!-- Palabras Clave -->
            <div class="mb-3">
              <label for="keywords" class="form-label">Palabras Clave</label>
              <input type="text" class="form-control" id="keywords" name="keywords" placeholder="Ingrese palabras clave separadas por comas">
            </div>

            <!-- Revisar Cada Cuantos Días -->
            <div class="mb-3">
              <label for="reviewFrequency" class="form-label">Revisar Cada Cuantos Días</label>
              <input type="number" class="form-control" id="reviewFrequency" name="review_frequency" placeholder="Ingrese la frecuencia en días">
            </div>

            <!-- Idioma -->
            <div class="mb-3">
              <label for="language" class="form-label">Idioma</label>
              <input type="text" class="form-control" id="language" name="language" placeholder="Ingrese el idioma (e.g., es, en)">
            </div>

            <!-- Copyright -->
            <div class="mb-3">
              <label for="copyright" class="form-label">Copyright</label>
              <input type="text" class="form-control" id="copyright" name="copyright" placeholder="Ingrese el texto de copyright">
            </div>

            <!-- Robots -->
            <div class="mb-3">
              <label for="robots" class="form-label">Robots</label>
              <select class="form-select" id="robots" name="robots">
                <option value="index, follow" selected>Index, Follow</option>
                <option value="noindex, nofollow">No Index, No Follow</option>
                <option value="index, nofollow">Index, No Follow</option>
                <option value="noindex, follow">No Index, Follow</option>
              </select>
            </div>

            <!-- Utilizar Caché del Navegador -->
            <div class="form-check mb-3">
              <input class="form-check-input" type="checkbox" id="useCache" name="use_cache">
              <label class="form-check-label" for="useCache">Utilizar Caché del Navegador</label>
            </div>

            <!-- Tiempo de Refresco Automático -->
            <div class="mb-3">
              <label for="refreshTime" class="form-label">Tiempo de Refresco Automático (en segundos)</label>
              <input type="number" class="form-control" id="refreshTime" name="refresh_time" placeholder="Ingrese el tiempo en segundos">
            </div>

            <!-- Botón de Enviar -->
            <button type="submit" class="btn template-btn primary-btn">Generar Meta Tags</button>
          </form>
          <hr>
          <div class="mt-5 text-center">
            <strong class="d-block mb-3" style="font-family: Arial; font-size: 16px;">RESULTADO GENERADO</strong>
            <div class="mb-3">
              <textarea name="metaRefresh" id="id4" rows="8" class="form-control" onfocus="c('id4');" onblur="r('id4');" placeholder="El código generado aparecerá aquí..."></textarea>
            </div>
            <div class="mb-4">
              <button type="button" class="btn template-btn primary-btn" onclick="document.getElementsByName('metaRefresh')[0].focus(); document.getElementsByName('metaRefresh')[0].select();">
                Seleccionar todo
              </button>
            </div>
            <span class="text-muted">
              Pegar el código generado entre los comandos <br>
              <b>&lt;HEAD&gt;</b> y <b>&lt;/HEAD&gt; de su página web.
            </span>
          </div>
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
          Preguntas Frecuentes acerca de los <br> <mark class="text-primary"> meta tags.</mark></h2>
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