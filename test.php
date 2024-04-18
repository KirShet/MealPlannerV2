<form action = '../Site2/action/planner.php' method = 'POST' class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="email" name="form" style="padding: 10px;">
                              <div class="u-form-group u-form-name u-label-left">
                                <label for="name-bd4f" class="u-label u-spacing-0 u-label-1">Сколько kkal</label>
                                <input type="text" placeholder="kkal в день" id="name-bd4f" name="kcalPerDay" class="u-border-custom-color-4 u-input u-input-rectangle u-radius u-input-1" required="">
                              </div>
                              <div class="u-form-email u-form-group u-label-left">
                                <label for="email-bd4f" class="u-label u-spacing-0 u-label-2">Сколько раз</label>
                                <input type="text" placeholder="кол-во приёмов" id="email-bd4f" name="numberOfRecep" class="u-border-custom-color-4 u-input u-input-rectangle u-radius u-input-2" required="" autofocus="autofocus">
                              </div>
                              <div class="u-form-group u-form-submit u-label-left">
                                <label class="u-label u-spacing-0 u-label-3"></label>
                                <div class="u-align-left u-btn-submit-container">
                                  <a href="#" class="u-active-custom-color-3 u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-1 u-hover-custom-color-3 u-radius u-btn-1" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""> to planer</a>
                                </div>
                                <input type="submit" value="submit" class="u-form-control-hidden">
                              </div>
                              <div class="u-form-send-message u-form-send-success"> Спасибо! Диета корректируется. </div>
                              <div class="u-form-send-error u-form-send-message"> Отправка не удалась. Пожалуйста, исправьте ошибки и попробуйте еще раз. </div>
                              <input type="hidden" value="" name="recaptchaResponse">
                              <input type="hidden" name="formServices" value="204e408d-6095-4465-ad83-8d15063556d8">
                            </form>
                            <script class="u-script" type="text/javascript" src="../Site2/javascript/planner.js" defer=""></script>