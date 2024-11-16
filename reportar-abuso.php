<?php include("template-parts/header.php") ?>

<!--breadcrumb area start-->
<section class="breadcrumb-area bg-primary-gradient bg-hero-report">
  <div class="container">
    <div class="breadcrumb-content text-center">
      <h2 class="mb-3">Reportar Abuso</h2>
      <p>¡Gracias por contribuir a un entorno en línea seguro! Este formulario está diseñado para que puedas denunciar sitios web fraudulentos,<br> actividades sospechosas y envíos de spam. Tu colaboración es fundamental para mantener la integridad de nuestra comunidad en línea.</p>
    </div>
  </div>
</section>
<!--breadcrumb area end-->

<section class="hm-contact-area position-relative pt-60 pb-120 overflow-hidden bg-white zindex-1">
  <img src="assets/img/imagenes-inkaweb/contact-bg-left.png" alt="bg" class="position-absolute left-bottom">
  <img src="assets/img/imagenes-inkaweb/contact-bg-right.png" alt="bg" class="position-absolute right-bottom">
  <div class="container">
    <div class="hm-contact-form mt-5" id="contact">
      <div class="col-12 pb-3 message-box d-none">
        <div class="alert alert-danger"></div>
      </div>

      <form action="">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="row mb-3">
              <div class="col-6">
                <h2 class="mb-4 text-left">Reportar Abuso</h2>
              </div>
              <div class="col-6">
                <div class="form-group col-12 pr-0 pl-0 font-weight-bold"><select class="form-control font-weight-bold" id="reportType" name="reportType">
                    <option value="">Seleccionar Tipo de Reporte</option>
                    <option value="Copyright">Copyright</option>
                    <option value="CSEM">CSEM</option>
                    <option value="DDos">DDos</option>
                    <option value="Hacking">Hacking</option>
                    <option value="LiveStreaming">Live streaming</option>
                    <option value="Malware">Malware</option>
                    <option value="PersonalData">Personal data</option>
                    <option value="Phishing">Phishing</option>
                    <option value="Spam">Spam</option>
                    <option value="Terrorism">Terrorism</option>
                    <option value="Trademark">Trademark</option>
                    <option value="Other">Other</option>
                  </select></div>
              </div>
              <div class="form-group col-12 row mb-3 pr-0"><label for="fullName" class="col-sm-4 col-form-label">Nombre completo <span class="text-danger">*</span></label>
                <div class="col-sm-8 pr-0"><input type="text" class="form-control" id="fullName" placeholder="Ingresar nombre completo" value=""></div>
              </div>
              <div class="form-group col-12 row mb-3 pr-0"><label for="email" class="col-sm-4 col-form-label">Email <span class="text-danger">*</span></label>
                <div class="col-sm-8 pr-0"><input type="email" class="form-control" id="email" placeholder="Ingresar email" value=""></div>
              </div>
              <div class="form-group col-12 row mb-3 pr-0"><label for="confirmEmail" class="col-sm-4 col-form-label">Confirmar email <span class="text-danger">*</span></label>
                <div class="col-sm-8 pr-0"><input type="email" class="form-control" id="confirmEmail" placeholder="Confirmar email" value=""></div>
              </div>
              <div class="form-group col-12 row mb-3 pr-0"><label for="businessName" class="col-sm-4 col-form-label">Razon social <span class="text-danger">*</span></label>
                <div class="col-sm-8 pr-0"><input type="text" class="form-control" id="businessName" placeholder="Ingresar razon social" value=""></div>
              </div>
              <div class="form-group col-12 row mb-3 pr-0"><label for="telephone" class="col-sm-4 col-form-label">Telefono <span class="text-danger">*</span></label>
                <div class="col-sm-8 pr-0"><input type="text" class="form-control" id="telephone" placeholder="Ingresar Telefono" value=""></div>
              </div>
              <div class="form-group col-12 row mb-3 pr-0"><label for="address" class="col-sm-4 col-form-label">Dirección <span class="text-danger">*</span></label>
                <div class="col-sm-8 pr-0"><input type="text" class="form-control" id="address" placeholder="Ingresar dirección" value=""></div>
              </div>
              <div class="form-group col-12 row mb-3 pr-0"><label for="city" class="col-sm-4 col-form-label">Ciudad <span class="text-danger">*</span></label>
                <div class="col-sm-8 pr-0"><input type="text" class="form-control" id="city" placeholder="Ingresar ciudad" value=""></div>
              </div>
              <div class="form-group col-12 row mb-3 pr-0"><label for="state" class="col-sm-4 col-form-label">Estado / Provincia <span class="text-danger">*</span></label>
                <div class="col-sm-8 pr-0"><input type="text" class="form-control" id="state" placeholder="Ingresar estado" value=""></div>
              </div>
              <div class="form-group col-12 row mb-3 pr-0"><label for="countryCode" class="col-sm-4 col-form-label">País <span class="text-danger">*</span></label>
                <div class="col-sm-8 pr-0"><select class="form-control" id="countryCode" name="countryCode">
                    <option value="">Seleccionar Ciudad</option>
                    <option value="AF">Afghanistan</option>
                    <option value="AX">Aland Islands</option>
                    <option value="AL">Albania</option>
                    <option value="DZ">Algeria</option>
                    <option value="AS">American Samoa</option>
                    <option value="AD">Andorra</option>
                    <option value="AO">Angola</option>
                    <option value="AI">Anguilla</option>
                    <option value="AQ">Antarctica</option>
                    <option value="AG">Antigua and Barbuda</option>
                    <option value="AR">Argentina</option>
                    <option value="AM">Armenia</option>
                    <option value="AW">Aruba</option>
                    <option value="AU">Australia</option>
                    <option value="AT">Austria</option>
                    <option value="AZ">Azerbaijan</option>
                    <option value="BS">Bahamas</option>
                    <option value="BH">Bahrain</option>
                    <option value="BD">Bangladesh</option>
                    <option value="BB">Barbados</option>
                    <option value="BY">Belarus</option>
                    <option value="BE">Belgium</option>
                    <option value="BZ">Belize</option>
                    <option value="BJ">Benin</option>
                    <option value="BM">Bermuda</option>
                    <option value="BT">Bhutan</option>
                    <option value="BO">Bolivia</option>
                    <option value="BQ">Bonaire, Saint Eustatius and Saba </option>
                    <option value="BA">Bosnia and Herzegovina</option>
                    <option value="BW">Botswana</option>
                    <option value="BV">Bouvet Island</option>
                    <option value="BR">Brazil</option>
                    <option value="IO">British Indian Ocean Territory</option>
                    <option value="VG">British Virgin Islands</option>
                    <option value="BN">Brunei</option>
                    <option value="BG">Bulgaria</option>
                    <option value="BF">Burkina Faso</option>
                    <option value="BI">Burundi</option>
                    <option value="KH">Cambodia</option>
                    <option value="CM">Cameroon</option>
                    <option value="CA">Canada</option>
                    <option value="CV">Cape Verde</option>
                    <option value="KY">Cayman Islands</option>
                    <option value="CF">Central African Republic</option>
                    <option value="TD">Chad</option>
                    <option value="CL">Chile</option>
                    <option value="CN">China</option>
                    <option value="CX">Christmas Island</option>
                    <option value="CC">Cocos Islands</option>
                    <option value="CO">Colombia</option>
                    <option value="KM">Comoros</option>
                    <option value="CK">Cook Islands</option>
                    <option value="CR">Costa Rica</option>
                    <option value="HR">Croatia</option>
                    <option value="CU">Cuba</option>
                    <option value="CW">Curacao</option>
                    <option value="CY">Cyprus</option>
                    <option value="CZ">Czech Republic</option>
                    <option value="CD">Democratic Republic of the Congo</option>
                    <option value="DK">Denmark</option>
                    <option value="DJ">Djibouti</option>
                    <option value="DM">Dominica</option>
                    <option value="DO">Dominican Republic</option>
                    <option value="TL">East Timor</option>
                    <option value="EC">Ecuador</option>
                    <option value="EG">Egypt</option>
                    <option value="SV">El Salvador</option>
                    <option value="GQ">Equatorial Guinea</option>
                    <option value="ER">Eritrea</option>
                    <option value="EE">Estonia</option>
                    <option value="ET">Ethiopia</option>
                    <option value="FK">Falkland Islands</option>
                    <option value="FO">Faroe Islands</option>
                    <option value="FJ">Fiji</option>
                    <option value="FI">Finland</option>
                    <option value="FR">France</option>
                    <option value="GF">French Guiana</option>
                    <option value="PF">French Polynesia</option>
                    <option value="TF">French Southern Territories</option>
                    <option value="GA">Gabon</option>
                    <option value="GM">Gambia</option>
                    <option value="GE">Georgia</option>
                    <option value="DE">Germany</option>
                    <option value="GH">Ghana</option>
                    <option value="GI">Gibraltar</option>
                    <option value="GR">Greece</option>
                    <option value="GL">Greenland</option>
                    <option value="GD">Grenada</option>
                    <option value="GP">Guadeloupe</option>
                    <option value="GU">Guam</option>
                    <option value="GT">Guatemala</option>
                    <option value="GG">Guernsey</option>
                    <option value="GN">Guinea</option>
                    <option value="GW">Guinea-Bissau</option>
                    <option value="GY">Guyana</option>
                    <option value="HT">Haiti</option>
                    <option value="HM">Heard Island and McDonald Islands</option>
                    <option value="HN">Honduras</option>
                    <option value="HK">Hong Kong</option>
                    <option value="HU">Hungary</option>
                    <option value="IS">Iceland</option>
                    <option value="IN">India</option>
                    <option value="ID">Indonesia</option>
                    <option value="IR">Iran</option>
                    <option value="IQ">Iraq</option>
                    <option value="IE">Ireland</option>
                    <option value="IM">Isle of Man</option>
                    <option value="IL">Israel</option>
                    <option value="IT">Italy</option>
                    <option value="CI">Ivory Coast</option>
                    <option value="JM">Jamaica</option>
                    <option value="JP">Japan</option>
                    <option value="JE">Jersey</option>
                    <option value="JO">Jordan</option>
                    <option value="KZ">Kazakhstan</option>
                    <option value="KE">Kenya</option>
                    <option value="KI">Kiribati</option>
                    <option value="XK">Kosovo</option>
                    <option value="KW">Kuwait</option>
                    <option value="KG">Kyrgyzstan</option>
                    <option value="LA">Laos</option>
                    <option value="LV">Latvia</option>
                    <option value="LB">Lebanon</option>
                    <option value="LS">Lesotho</option>
                    <option value="LR">Liberia</option>
                    <option value="LY">Libya</option>
                    <option value="LI">Liechtenstein</option>
                    <option value="LT">Lithuania</option>
                    <option value="LU">Luxembourg</option>
                    <option value="MO">Macao</option>
                    <option value="MK">Macedonia</option>
                    <option value="MG">Madagascar</option>
                    <option value="MW">Malawi</option>
                    <option value="MY">Malaysia</option>
                    <option value="MV">Maldives</option>
                    <option value="ML">Mali</option>
                    <option value="MT">Malta</option>
                    <option value="MH">Marshall Islands</option>
                    <option value="MQ">Martinique</option>
                    <option value="MR">Mauritania</option>
                    <option value="MU">Mauritius</option>
                    <option value="YT">Mayotte</option>
                    <option value="MX">Mexico</option>
                    <option value="FM">Micronesia</option>
                    <option value="MD">Moldova</option>
                    <option value="MC">Monaco</option>
                    <option value="MN">Mongolia</option>
                    <option value="ME">Montenegro</option>
                    <option value="MS">Montserrat</option>
                    <option value="MA">Morocco</option>
                    <option value="MZ">Mozambique</option>
                    <option value="MM">Myanmar</option>
                    <option value="NA">Namibia</option>
                    <option value="NR">Nauru</option>
                    <option value="NP">Nepal</option>
                    <option value="NL">Netherlands</option>
                    <option value="NC">New Caledonia</option>
                    <option value="NZ">New Zealand</option>
                    <option value="NI">Nicaragua</option>
                    <option value="NE">Niger</option>
                    <option value="NG">Nigeria</option>
                    <option value="NU">Niue</option>
                    <option value="NF">Norfolk Island</option>
                    <option value="KP">North Korea</option>
                    <option value="MP">Northern Mariana Islands</option>
                    <option value="NO">Norway</option>
                    <option value="OM">Oman</option>
                    <option value="PK">Pakistan</option>
                    <option value="PW">Palau</option>
                    <option value="PS">Palestinian Territory</option>
                    <option value="PA">Panama</option>
                    <option value="PG">Papua New Guinea</option>
                    <option value="PY">Paraguay</option>
                    <option value="PE">Peru</option>
                    <option value="PH">Philippines</option>
                    <option value="PN">Pitcairn</option>
                    <option value="PL">Poland</option>
                    <option value="PT">Portugal</option>
                    <option value="PR">Puerto Rico</option>
                    <option value="QA">Qatar</option>
                    <option value="CG">Republic of the Congo</option>
                    <option value="RE">Reunion</option>
                    <option value="RO">Romania</option>
                    <option value="RU">Russia</option>
                    <option value="RW">Rwanda</option>
                    <option value="BL">Saint Barthelemy</option>
                    <option value="SH">Saint Helena</option>
                    <option value="KN">Saint Kitts and Nevis</option>
                    <option value="LC">Saint Lucia</option>
                    <option value="MF">Saint Martin</option>
                    <option value="PM">Saint Pierre and Miquelon</option>
                    <option value="VC">Saint Vincent and the Grenadines</option>
                    <option value="WS">Samoa</option>
                    <option value="SM">San Marino</option>
                    <option value="ST">Sao Tome and Principe</option>
                    <option value="SA">Saudi Arabia</option>
                    <option value="SN">Senegal</option>
                    <option value="RS">Serbia</option>
                    <option value="SC">Seychelles</option>
                    <option value="SL">Sierra Leone</option>
                    <option value="SG">Singapore</option>
                    <option value="SX">Sint Maarten</option>
                    <option value="SK">Slovakia</option>
                    <option value="SI">Slovenia</option>
                    <option value="SB">Solomon Islands</option>
                    <option value="SO">Somalia</option>
                    <option value="ZA">South Africa</option>
                    <option value="GS">South Georgia and the South Sandwich Islands</option>
                    <option value="KR">South Korea</option>
                    <option value="SS">South Sudan</option>
                    <option value="ES">Spain</option>
                    <option value="LK">Sri Lanka</option>
                    <option value="SD">Sudan</option>
                    <option value="SR">Suriname</option>
                    <option value="SJ">Svalbard and Jan Mayen</option>
                    <option value="SZ">Swaziland</option>
                    <option value="SE">Sweden</option>
                    <option value="CH">Switzerland</option>
                    <option value="SY">Syria</option>
                    <option value="TW">Taiwan</option>
                    <option value="TJ">Tajikistan</option>
                    <option value="TZ">Tanzania</option>
                    <option value="TH">Thailand</option>
                    <option value="TG">Togo</option>
                    <option value="TK">Tokelau</option>
                    <option value="TO">Tonga</option>
                    <option value="TT">Trinidad and Tobago</option>
                    <option value="TN">Tunisia</option>
                    <option value="TR">Turkey</option>
                    <option value="TM">Turkmenistan</option>
                    <option value="TC">Turks and Caicos Islands</option>
                    <option value="TV">Tuvalu</option>
                    <option value="VI">U.S. Virgin Islands</option>
                    <option value="UG">Uganda</option>
                    <option value="UA">Ukraine</option>
                    <option value="AE">United Arab Emirates</option>
                    <option value="GB">United Kingdom</option>
                    <option value="US">United States</option>
                    <option value="UM">United States Minor Outlying Islands</option>
                    <option value="UY">Uruguay</option>
                    <option value="UZ">Uzbekistan</option>
                    <option value="VU">Vanuatu</option>
                    <option value="VA">Vatican</option>
                    <option value="VE">Venezuela</option>
                    <option value="VN">Vietnam</option>
                    <option value="WF">Wallis and Futuna</option>
                    <option value="EH">Western Sahara</option>
                    <option value="YE">Yemen</option>
                    <option value="ZM">Zambia</option>
                    <option value="ZW">Zimbabwe</option>
                  </select></div>
              </div>
            </div>
            <div class="row mb-3">
              <div class="form-group col-12 row mb-3 pr-0"><label for="Phishing.ip" class="col-sm-4 col-form-label">Dirección IP desde donde se produjo el phishing <span class="text-danger">*</span></label>
                <div class="col-sm-8 pr-0"><input type="text" class="form-control" id="Phishing.ip" placeholder="Please ingresar la dirección IP desde donde se produjo el phishing"></div>
              </div>
              <div class="form-group col-12 row mb-3 pr-0"><label for="Phishing.urls" class="col-sm-4 col-form-label">URL estáticas al sitio web que contiene el contenido de phishing <span class="text-danger">*</span></label>
                <div class="col-sm-8 pr-0"><textarea class="form-control" id="Phishing.urls" placeholder="Coloque cada URL estática al sitio web que contiene el contenido de phishing en una línea separada"></textarea></div>
              </div>
              <div class="form-group col-12 row mb-3 pr-0"><label for="Phishing.description" class="col-sm-4 col-form-label">Descripción de las actividades de phishing
                  <span class="text-danger">*</span></label>
                <div class="col-sm-8 pr-0"><textarea class="form-control" id="Phishing.description" placeholder="Descripción de las actividades de phishing"></textarea></div>
              </div>
              <div class="form-group col-12 row mb-3 pr-0"><label for="Phishing.declarations" class="col-sm-4 col-form-label">Términos y Condiciones <span class="text-danger">*</span></label>
                <div class="form-check col-sm-8 pr-0 pl-3"><input class="form-check-input" type="radio" name="Phishing.declarations" id="Phishing.declarations" value="terms"><label class="form-check-label" for="Phishing.declarations">Al marcar la casilla y posteriormente enviar este formulario, usted acepta que podemos enviar una copia de este aviso, incluyendo su información de contacto (dirección, número de teléfono, número de teléfono y dirección de correo electrónico) al cliente de ofreciendo el contenido denunciado.</label></div>
              </div>
              <div class="form-group col-12 row mb-3 pr-0"><label for="Phishing.signature" class="col-sm-4 col-form-label">Firma <span class="text-danger">*</span></label>
                <div class="col-sm-8 pr-0"><input type="text" class="form-control" id="Phishing.signature" placeholder="Firma" value=""></div>
              </div>
              <div class="form-group col-12 row mb-3 pr-0"><label for="attachment" class="col-sm-4 col-form-label">Archivo</label>
                <div class="cl-sm-8 pr-0 pl-3 mt-2 col-8">
                  <div class="card">
                    <div class="p-2">
                      <div class="form-group col-12 row mb-3 p-0 m-0"><input type="file" class="form-control p-0 h-100 mb-2 col-sm-11" name="attachment" id="attachment" accept=".pdf, .doc, .docx, .rtf, .odt, .xls, .xlsx, .txt, .jpg, .png"></div><strong>Tamaño de archivo: </strong> 10 MB <br><strong>Tipo de archivos permitidos: </strong> pdf, doc, docx, rtf, odt, xls, xlsx, txt, jpg, png<div class="pt-2"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group col-12 row mb-3 pr-0"><label for="discloseContactInfo" class="col-sm-4 col-form-label">¿Estamos autorizados a compartir su información personal con nuestros clientes?</label>
                <div class="form-check col-sm-8 pr-0 pl-3 mt-2 col-8"><input type="checkbox" class="form-check-input" name="discloseContactInfo" id="discloseContactInfo" value="false"><label class="form-check-label" for="discloseContactInfo">A solicitud del cliente, puede proporcionar mi nombre e información de contacto a su cliente.</label></div>
              </div>
              <div class="form-group col-12 row mb-3 pr-0 mt-3"><label for="captcha" class="col-sm-4 col-form-label">Ingresar captcha <span class="text-danger">*</span></label>
                <div class="input-block col-8 pr-0">
                  <div class="mb-3">
                    <div>
                      <div>
                        <div style="width: 304px; height: 78px;">
                          <div><iframe title="reCAPTCHA" width="304" height="78" role="presentation" name="a-n3w0o1ky55jh" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LfMMUUdAAAAAC69nfY_bVfAj78c36yClevxawwk&amp;co=aHR0cHM6Ly9hYnVzZS1ub3RpZmllci5sZWFzZXdlYi5jb206NDQz&amp;hl=es-419&amp;type=image&amp;v=-ZG7BC9TxCVEbzIO2m429usb&amp;theme=light&amp;size=normal&amp;badge=bottomright&amp;cb=8gk6c6an1dol"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                        </div><iframe style="display: none;"></iframe>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group col-12 text-right"><button type="submit" disabled="" class="template-btn primary-btn btn-small">Enviar</button></div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>

<?php include("template-parts/footer.php") ?>