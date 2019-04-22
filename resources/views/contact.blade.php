    <section id="contact">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Contacto</h2>
        {{-- <hr class="star-dark mb-5"> --}}
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
            <form name="sentMessage" id="contactForm" novalidate="novalidate">
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Nombre</label>
                  <input class="form-control" id="name" type="text" placeholder="Nombre" required="required" data-validation-required-message="Por favor, ingrese su nombre.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Email</label>
                  <input class="form-control" id="email" type="email" placeholder="e-mail" required="required" data-validation-required-message="Por favor, ingrese su e-mail.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Teléfono</label>
                  <input class="form-control" id="phone" type="tel" placeholder="Número de teléfono" required="required" data-validation-required-message="Por favor, ingrese su teléfono.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Mensaje</label>
                  <textarea class="form-control" id="message" rows="5" placeholder="Mensaje" required="required" data-validation-required-message="Por favor, ingrese su mensaje."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <br>
              <div id="success"></div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Enviar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>