

<!-- Portfolio Grid Section -->
<section class="portfolio" id="portfolio">
  <div class="container">
    <h2 class="text-center text-uppercase text-secondary mb-0">Asztalok</h2>
    <input class="form-control timepickerek time ui-timepicker-input" id="asztalok" type="text" placeholder="Idopont" autocomplete="off">
    <hr class="star-dark mb-5">
          <h3 class="text-center text-uppercase text-secondary mb-0">Kettes Asztalok</h2>
    <hr class="mb-3">
    <div class="row asztalok">
      <div id="asztal-1" class="asztal ketfos col-md-4 col-lg-3">
        <div class="bg-primary">
        <p>
          Asztal <span>1</span>
        </p>
      </div>
      </div>
      <div id="asztal-2" class="asztal ketfos col-md-4 col-lg-3">
        <div class="bg-primary"><p>
          Asztal <span>2</span>
        </p></div>
      </div>
      <div id="asztal-3" class="asztal ketfos col-md-4 col-lg-3">
        <div class="bg-primary">
        <p>
          Asztal <span>3</span>
        </p>
      </div>
    </div>
      <div id="asztal-4" class="asztal ketfos col-md-4 col-lg-3">
        <div class="bg-primary">
        <p>
          Asztal <span>4</span>
        </p>
      </div>
    </div>
    </div>
      <div class="container">
          <h3 class="text-center text-uppercase text-secondary mb-0">Negyes Asztalok</h2>
    </div>
    <hr class="mb-3">
    <div class="row asztalok">
      <div id="asztal-5" class="asztal negyfos col-md-6 col-lg-4">
        <div class="bg-primary">
        <p>
          Asztal <span>5</span>
        </p>
      </div>
      </div>
      <div id="asztal-6" class="asztal negyfos col-md-6 col-lg-4">
        <div class="bg-primary">
        <p>
          Asztal <span>6</span>
        </p>
      </div>
      </div>
      <div id="asztal-7" class="asztal negyfos col-md-6 col-lg-4">
        <div class="bg-primary">
        <p>
          Asztal <span>7</span>
        </p>
      </div>
      </div>
      <div id="asztal-8" class="asztal negyfos col-md-6 col-lg-4">
        <div class="bg-primary">
        <p>
          Asztal <span>8</span>
        </p>
      </div>
      </div>
      <div id="asztal-9" class="asztal negyfos col-md-6 col-lg-4">
        <div class="bg-primary">
        <p>
          Asztal <span>9</span>
        </p>
      </div>
      </div>
      <div id="asztal-10" class="asztal negyfos col-md-6 col-lg-4">
        <div class="bg-primary">
        <p>
          Asztal <span>10</span>
        </p>
      </div>
      </div>
    </div>

            <h3 class="text-center text-uppercase text-secondary mb-0">Hatos Asztalok</h2>
      <hr class="mb-3">
      <div class="row asztalok">
      <div id="asztal-11" class="asztal hatfos col-md-6 col-lg-4">
        <div class="bg-primary">
        <p>
          Asztal <span>11</span>
        </p>
      </div>
      </div>
      <div id="asztal-12" class="asztal hatfos col-md-6 col-lg-4">
        <div class="bg-primary">
        <p>
          Asztal <span>12</span>
        </p>
      </div>
      </div>
      <div id="asztal-13" class="asztal hatfos col-md-6 col-lg-4">
        <div class="bg-primary">
        <p>
          Asztal <span>13</span>
        </p>
      </div>
      </div>
      <div id="asztal-14" class="asztal hatfos col-md-6 col-lg-4">
        <div class="bg-primary">
        <p>
          Asztal <span>14</span>
        </p>
      </div>
      </div>
      <div id="asztal-15" class="asztal hatfos col-md-6 col-lg-4">
        <div class="bg-primary">
        <p>
          Asztal <span>15</span>
        </p>
      </div>
      </div>
      <div id="asztal-16" class="asztal hatfos col-md-6 col-lg-4">
        <div class="bg-primary">
        <p>
          Asztal <span>16</span>
        </p>
      </div>
      </div>
    </div>
  </div>
</section>

<!-- Contact Section -->
<section id="contact">
  <div class="container">
    <h2 class="text-center text-uppercase text-secondary mb-0">Foglalj asztalt</h2>
    <hr class="star-dark mb-5">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
        <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
        <form name="sentMessage" id="contactForm" novalidate="novalidate">
          <div class="control-group">
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
              <label>Nev</label>
              <input class="form-control" id="nev" type="text" placeholder="Nev" required="required" data-validation-required-message="Kerem adja meg a nevet">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
              <label>Szemelyek szama</label>
              <input class="form-control time ui-timepicker-input timepickerek" id="szemelyek" type="number" placeholder="Szemelyek szama" min="1" max="6" required="required" data-validation-required-message="Kerem adja meg a szemelyek szamat" autocomplete="off">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
              <label>Erkezes</label>
              <input class="form-control timepickerek time ui-timepicker-input" id="erkezes" type="text" placeholder="Erkezes" required="required" data-validation-required-message="Mikor erkezne" autocomplete="off">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
              <label>Tavozas</label>
              <input class="form-control time ui-timepicker-input timepickerek" id="tavozas" type="text" placeholder="Tavozas" required="required" data-validation-required-message="Mikor tavozna" autocomplete="off">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
              <label>Asztalszam</label>
              <input class="form-control" id="asztalszam" type="number" min="1" max="16" placeholder="Asztalszam" required="required" data-validation-required-message="Valasszon egy asztalt" autocomplete="off">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
              <label>Message</label>
              <textarea class="form-control" id="message" rows="5" placeholder="Uzenet" data-validation-required-message="Kerem adjon meg a"></textarea>
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <br>
          <div id="success"></div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Send</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- About Section -->
<section class="bg-primary text-white mb-0" id="about">
  <div class="container">
    <h2 class="text-center text-uppercase text-white">Foglalasok tabla</h2>
    <hr class="star-light mb-5">
    <div class="row">
      <?php include_once("./control/tabla.php")?>
    </div>

  </div>
</section>
