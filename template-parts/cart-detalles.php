<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>


<div class="sc-hmvnCu egpBfW">
  <section data-testid="resume-handler" class="sc-ijeLaK ciBHZI">
    <h1 data-testid="resume-handler-title" class="sc-kKTuYo bJOaca">Detalles del pedido</h1>
    <div class="sc-rUGft eqTgNK"></div>
    <div data-testid="resume-handler-scrollbox" class="sc-bvZjhv yJIgv">
      <div>
        <div data-testid="resume-item-6" class="sc-gpZqVR iYFMWz">
          <div>
            <p data-testid="resume-item-6-title" class="sc-cxBPLc jXMqZo">Web Hosting</p>
            <p class="sc-hudTXT esqolC">Plan Negocios (Pago cada 3 años)</p>
          </div>
          <div>
            <p data-testid="resume-item-6-total" class="sc-dBGsNe jYJIVI"><span>$576,00</span></p>
            <p data-testid="resume-item-6-discount" class="sc-jVSDVx cgFdzq"><span>$1.980,00</span></p>
          </div>
        </div>
      </div>
      <div class="sc-rUGft eqTgNK"></div>
      <div data-testid="resume-item-0" class="sc-gpZqVR iYFMWz">
        <div>
          <p data-testid="resume-item-0-title" class="sc-cxBPLc jXMqZo">Registro de dominio</p>
          <p class="sc-hudTXT esqolC">Para crear su plan, debe ingresar un dominio (regístrelo ahora o elija uno que ya tenga)</p>
        </div>
      </div>
      <div data-testid="resume-domain-cycle-info" class="sc-flAguQ haCWjf">
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label djOzNY mb-0" for="exampleCheck1"> He leído y estoy de acuerdo con los <br>
            <a target="_blank" class="inka-link" href="terminos.php">- Términos del Servicio y Condiciones de Uso</a> <br>
            <a target="_blank" class="inka-link" href="politica.php">- Políticas de Privacidad y Protección de Datos Personales</a>
          </label>
        </div>
      </div>
    </div>
    <div class="sc-rUGft eqTgNK"></div>
    <div class="sc-brSHfi dXGFNE">
      <div class="sc-cVeCjG fnMwGe">
        <a class="sc-gsCLt iZDwfU" data-bs-toggle="collapse" href="#collapseCupon" role="button" aria-expanded="false" aria-controls="collapseCupon">
          <p data-testid="coupon-dropdown-title" class="sc-egtPr fzuXjC">Código de Descuento</p>
          <svg data-testid="icon-arrow-down" fill="#ff1212" height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
            <path d="M8.24264 10.4853L12.4853 6.24268H4L8.24264 10.4853Z" stroke="none"></path>
          </svg>
        </a>
      </div>
      <div class="collapse" id="collapseCupon">
        <div class="sc-cXqLfI cuPWav">
          <div data-testid="coupon" class="sc-fkqipX kVKvRl">
            <form class="sc-jlObWd eXftGP">
              <div class="sc-LerVu ijsLxG">
                <div data-testid="coupon-input" class="sc-gGCDDS kSPKXE"><label class="sc-clIzBv dMpquz">Cupón</label><input data-testid="coupon-input-field" disabled="" maxlength="100" name="input" title="Cupón" type="text" class="sc-faUpoM fCIONy" value="ORG60HGES24TURBO">
                  <p data-testid="coupon-input-success" class="sc-fWCJzd hqHfVL d-none">Cupón aplicado</p>
                </div>
              </div>
              <div class="sc-jjBTab fpbnTF"><button data-testid="coupon-button" title="Eliminar" class="sc-eZKLwX hpUnIt">Aplicar</button></div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="sc-rUGft eqTgNK"></div>
    <div data-testid="resume-balance" class="sc-cjwcjg jTUglv">
      <div class="sc-kHTDnN gpfHcL">
        <p class="sc-hHSgnV kdxsAJ">Dscto. (Hosting) </p>
        <p data-testid="resume-balance-discount" class="sc-dPuFdg ikkvcR"><span>0.00%</span></p>
      </div>
      <div class="sc-kHTDnN gpfHcL">
        <p class="sc-hHSgnV kdxsAJ">Comisión por Tarjeta </p>
        <p data-testid="resume-balance-discount" class="sc-dPuFdg ikkvcR"><span>0.00%</span></p>
      </div>
      <div class="sc-kHTDnN gpfHcL">
        <p class="sc-hHSgnV kdxsAJ">Ahorra Total</p>
        <p data-testid="resume-balance-discount" class="sc-dPuFdg ikkvcR"><span>US$ 0.00</span></p>
      </div>
      <div class="sc-kHTDnN gpfHcL">
        <div class="form-check sc-hHSgnV kdxsAJ">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">
            + IGV 18%
          </label>
        </div>
        <p data-testid="resume-balance-discount" class="sc-dPuFdg ikkvcR"><span>US$ 0.00</span></p>
      </div>
    </div>
    <div class="sc-rUGft eqTgNK"></div>
    <div class="sc-hFFXrT gsPoYu mb-4">
      <p class="sc-fZuPrs lctHZQ">Total del pedido</p>
      <p data-testid="resume-balance-total" class="sc-jPGhGf cpuDvg"><span>US$ 576,00</span></p>
    </div>

    <?php
    if ($current_page !== 'cart-confirmar.php') {
    ?>
      <div class="sc-jfBFGL jffbFi"><button aria-label="Continuar con la identificación" data-testid="button" title="Continuar con la identificación" type="button" class="sc-eTwdGJ kGysuc">Continuar</button></div>
    <?php
    }
    ?>

    <div data-testid="refund-tag" class="sc-dOkGYn fiStcR mt-4">
      <svg data-testid="icon-refund" width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.49984 1.83366C4.37022 1.83366 1.83317 4.37071 1.83317 7.50033C1.83317 10.6299 4.37022 13.167 7.49984 13.167C10.1853 13.167 12.4344 11.299 13.0187 8.79154L12.7464 9.06377C12.4698 9.34035 12.0213 9.34028 11.7447 9.06362C11.4681 8.78696 11.4682 8.33846 11.7448 8.06188L13.1619 6.64522C13.2948 6.5124 13.475 6.4378 13.6628 6.43783C13.8507 6.43785 14.0308 6.51251 14.1637 6.64537L15.5799 8.06203C15.8565 8.33869 15.8564 8.78719 15.5798 9.06377C15.3031 9.34035 14.8546 9.34028 14.578 9.06362L14.4398 8.92533C13.7803 12.1543 10.9237 14.5837 7.49984 14.5837C3.58782 14.5837 0.416504 11.4123 0.416504 7.50033C0.416504 3.58831 3.58782 0.416992 7.49984 0.416992C10.0994 0.416992 12.3711 1.81778 13.6025 3.90233C13.8015 4.23915 13.6897 4.6735 13.3529 4.87247C13.0161 5.07144 12.5817 4.95969 12.3827 4.62286C11.3957 2.95189 9.57796 1.83366 7.49984 1.83366Z" fill="#ff1212"></path>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.49984 2.18783C7.89104 2.18783 8.20817 2.50496 8.20817 2.89616V3.25033H8.32623C9.63023 3.25033 10.6873 4.30743 10.6873 5.61144C10.6873 6.00264 10.3702 6.31977 9.979 6.31977C9.5878 6.31977 9.27067 6.00264 9.27067 5.61144C9.27067 5.08983 8.84783 4.66699 8.32623 4.66699H6.7915C6.2047 4.66699 5.729 5.14269 5.729 5.72949C5.729 6.31629 6.2047 6.79199 6.7915 6.79199H8.20817C9.57738 6.79199 10.6873 7.90195 10.6873 9.27116C10.6873 10.6404 9.57738 11.7503 8.20817 11.7503V12.1045C8.20817 12.4957 7.89104 12.8128 7.49984 12.8128C7.10864 12.8128 6.7915 12.4957 6.7915 12.1045V11.7503H6.67345C5.36944 11.7503 4.31234 10.6932 4.31234 9.38921C4.31234 8.99801 4.62947 8.68088 5.02067 8.68088C5.41187 8.68088 5.729 8.99801 5.729 9.38921C5.729 9.91082 6.15185 10.3337 6.67345 10.3337H8.20817C8.79497 10.3337 9.27067 9.85796 9.27067 9.27116C9.27067 8.68436 8.79497 8.20866 8.20817 8.20866H6.7915C5.4223 8.20866 4.31234 7.0987 4.31234 5.72949C4.31234 4.36029 5.4223 3.25033 6.7915 3.25033V2.89616C6.7915 2.50496 7.10864 2.18783 7.49984 2.18783Z" fill="#ff1212"></path>
      </svg>
      <p class="sc-lliPmu fwjXGs">Cambia el tipo de moneda <br>(Dólares americanos - Nuevos Soles)</p>
    </div>
    <div data-testid="resume-domain-cycle-info" class="sc-flAguQ haCWjf">
      <div class="wrapper p-1">
        <div class="card-switch">
          <label class="switch">
            <input type="checkbox" class="toggle">
            <span class="slider"></span>
            <span class="card-side"></span>
          </label>
        </div>
      </div>
    </div>
  </section>
</div>