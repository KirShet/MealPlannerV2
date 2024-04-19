<?php
include 'components/includes.php';
loadComponent('header');
?>
    <section class="u-clearfix u-image u-valign-middle u-section-1" src="" id="sec-90fb" data-image-width="1980" data-image-height="1385">
      <div class="data-layout-selected u-clearfix u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-container-style u-layout-cell u-left-cell u-size-26 u-layout-cell-1">
              <div class="u-container-layout u-container-layout-1">
                <h2 class="u-align-left u-custom-font u-font-open-sans u-text u-text-1"> Создание удобной<br>диеты
                </h2>
                <div class="u-border-13 u-border-custom-color-1 u-line u-line-horizontal u-line-1"></div>
                <p class="u-align-right u-text u-text-2"><a href="#carousel_f4f0">Меню для вас</a><br><a href="#carousel_01c9">Ваш рацион</a><br><a href="#carousel_7351">Привычки</a><br><a href="#sec-8ab1">Подписка  </a>
                </p>
              </div>
            </div>
            <div class="u-align-right u-container-style u-image u-layout-cell u-right-cell u-size-34 u-image-1" data-image-width="1024" data-image-height="1024">
              <div class="u-container-layout u-container-layout-2">
                <div class="u-image u-image-circle u-image-2" alt="" data-image-width="832" data-image-height="896"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-white u-section-2" id="carousel_f4f0">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="data-layout-selected u-clearfix u-expanded-width u-gutter-30 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-size-30">
                <div class="u-layout-col">
                  <div class="u-container-style u-custom-color-2 u-layout-cell u-shape-rectangle u-size-60 u-layout-cell-1">
                    <div class="u-container-layout u-valign-top-lg u-valign-top-md u-valign-top-sm u-valign-top-xl u-container-layout-1">
                      <h1 class="u-custom-font u-font-open-sans u-text u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xl u-text-1">Питайтесь так как хотите​​. </h1>
                    </div>
                  </div>
                </div>
              </div>
              <div class="u-size-30">
                <div class="u-layout-col">
                  <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-2">
                    <div class="u-container-layout u-container-layout-2">
                      <div class="u-align-left u-container-style u-custom-color-4 u-expanded-width-xs u-group u-shape-rectangle u-group-1">
                        <div class="u-container-layout u-container-layout-3">
                          <h2 class="u-custom-font u-text u-text-font u-text-2"> Начните с малого:</h2>
                          <div class="u-expanded-width u-form u-form-1">
                            <form <?= action('planner');?> class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="email" name="form" style="padding: 10px;">
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
                                <!-- <div class="u-align-left u-btn-submit-container">
                                  <a href="#" class="u-active-custom-color-3 u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-1 u-hover-custom-color-3 u-radius u-btn-1" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""> to planer</a>
                                </div> -->
                                <input type="submit" value=" to planer " class="u-active-custom-color-3 u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-1 u-hover-custom-color-3 u-radius u-btn-1" 
                                data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
                              </div>
                              <div class="u-form-send-message u-form-send-success"> Спасибо! Диета корректируется. </div>
                              <div class="u-form-send-error u-form-send-message"> Отправка не удалась. Пожалуйста, исправьте ошибки и попробуйте еще раз. </div>
                              <input type="hidden" value="" name="recaptchaResponse">
                              <input type="hidden" name="formServices" value="204e408d-6095-4465-ad83-8d15063556d8">
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-3">
                    <div class="u-container-layout u-container-layout-4">
                      <div class="u-expanded-width u-list u-list-1">
                        <div class="u-repeater u-repeater-1">
                          <div class="u-align-left u-container-style u-custom-color-2 u-list-item u-repeater-item u-list-item-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
                            <div class="u-container-layout u-similar-container u-container-layout-5"><span class="u-align-center u-icon u-icon-circle u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 368 368" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-ca38"></use></svg><svg class="u-svg-content" viewBox="0 0 368 368" x="0px" y="0px" id="svg-ca38" style="enable-background:new 0 0 368 368;"><g><g><path d="M344,112h-16c-2.816,0-5.488,0.576-8,1.472V88c0-13.232-10.768-24-24-24h-16c-13.232,0-24,10.768-24,24v56H112V88    c0-13.232-10.768-24-24-24H72c-13.232,0-24,10.768-24,24v25.472c-2.512-0.896-5.184-1.472-8-1.472H24c-13.232,0-24,10.768-24,24    v96c0,13.232,10.768,24,24,24h16c2.816,0,5.488-0.576,8-1.472V280c0,13.232,10.768,24,24,24h16c13.232,0,24-10.768,24-24v-56h144    v56c0,13.232,10.768,24,24,24h16c13.232,0,24-10.768,24-24v-25.472c2.512,0.896,5.184,1.472,8,1.472h16c13.232,0,24-10.768,24-24    v-96C368,122.768,357.232,112,344,112z M48,232c0,4.408-3.592,8-8,8H24c-4.408,0-8-3.592-8-8v-96c0-4.408,3.592-8,8-8h16    c4.408,0,8,3.592,8,8V232z M96,280c0,4.408-3.592,8-8,8H72c-4.408,0-8-3.592-8-8v-48v-96V88c0-4.408,3.592-8,8-8h16    c4.408,0,8,3.592,8,8V280z M256,208H112v-48h144V208z M304,136v96v48c0,4.408-3.592,8-8,8h-16c-4.408,0-8-3.592-8-8V88    c0-4.408,3.592-8,8-8h16c4.408,0,8,3.592,8,8V136z M352,232c0,4.408-3.592,8-8,8h-16c-4.408,0-8-3.592-8-8v-96    c0-4.408,3.592-8,8-8h16c4.408,0,8,3.592,8,8V232z"></path>
</g>
</g></svg></span>
                              <h5 class="u-custom-font u-text u-text-font u-text-3">Холлестерин </h5>
                            </div>
                          </div>
                          <div class="u-align-left u-container-style u-custom-color-2 u-list-item u-repeater-item u-video-cover u-list-item-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
                            <div class="u-container-layout u-similar-container u-container-layout-6"><span class="u-align-center u-icon u-icon-circle u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 368 368" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-8d7d"></use></svg><svg class="u-svg-content" viewBox="0 0 368 368" x="0px" y="0px" id="svg-8d7d" style="enable-background:new 0 0 368 368;"><g><g><path d="M344,112h-16c-2.816,0-5.488,0.576-8,1.472V88c0-13.232-10.768-24-24-24h-16c-13.232,0-24,10.768-24,24v56H112V88    c0-13.232-10.768-24-24-24H72c-13.232,0-24,10.768-24,24v25.472c-2.512-0.896-5.184-1.472-8-1.472H24c-13.232,0-24,10.768-24,24    v96c0,13.232,10.768,24,24,24h16c2.816,0,5.488-0.576,8-1.472V280c0,13.232,10.768,24,24,24h16c13.232,0,24-10.768,24-24v-56h144    v56c0,13.232,10.768,24,24,24h16c13.232,0,24-10.768,24-24v-25.472c2.512,0.896,5.184,1.472,8,1.472h16c13.232,0,24-10.768,24-24    v-96C368,122.768,357.232,112,344,112z M48,232c0,4.408-3.592,8-8,8H24c-4.408,0-8-3.592-8-8v-96c0-4.408,3.592-8,8-8h16    c4.408,0,8,3.592,8,8V232z M96,280c0,4.408-3.592,8-8,8H72c-4.408,0-8-3.592-8-8v-48v-96V88c0-4.408,3.592-8,8-8h16    c4.408,0,8,3.592,8,8V280z M256,208H112v-48h144V208z M304,136v96v48c0,4.408-3.592,8-8,8h-16c-4.408,0-8-3.592-8-8V88    c0-4.408,3.592-8,8-8h16c4.408,0,8,3.592,8,8V136z M352,232c0,4.408-3.592,8-8,8h-16c-4.408,0-8-3.592-8-8v-96    c0-4.408,3.592-8,8-8h16c4.408,0,8,3.592,8,8V232z"></path>
</g>
</g></svg></span>
                              <h5 class="u-custom-font u-text u-text-font u-text-4">Холлестерин </h5>
                            </div>
                          </div>
                          <div class="u-align-left u-container-style u-custom-color-2 u-list-item u-repeater-item u-video-cover u-list-item-3" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="250">
                            <div class="u-container-layout u-similar-container u-container-layout-7"><span class="u-align-center u-icon u-icon-circle u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 368 368" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-0c05"></use></svg><svg class="u-svg-content" viewBox="0 0 368 368" x="0px" y="0px" id="svg-0c05" style="enable-background:new 0 0 368 368;"><g><g><path d="M344,112h-16c-2.816,0-5.488,0.576-8,1.472V88c0-13.232-10.768-24-24-24h-16c-13.232,0-24,10.768-24,24v56H112V88    c0-13.232-10.768-24-24-24H72c-13.232,0-24,10.768-24,24v25.472c-2.512-0.896-5.184-1.472-8-1.472H24c-13.232,0-24,10.768-24,24    v96c0,13.232,10.768,24,24,24h16c2.816,0,5.488-0.576,8-1.472V280c0,13.232,10.768,24,24,24h16c13.232,0,24-10.768,24-24v-56h144    v56c0,13.232,10.768,24,24,24h16c13.232,0,24-10.768,24-24v-25.472c2.512,0.896,5.184,1.472,8,1.472h16c13.232,0,24-10.768,24-24    v-96C368,122.768,357.232,112,344,112z M48,232c0,4.408-3.592,8-8,8H24c-4.408,0-8-3.592-8-8v-96c0-4.408,3.592-8,8-8h16    c4.408,0,8,3.592,8,8V232z M96,280c0,4.408-3.592,8-8,8H72c-4.408,0-8-3.592-8-8v-48v-96V88c0-4.408,3.592-8,8-8h16    c4.408,0,8,3.592,8,8V280z M256,208H112v-48h144V208z M304,136v96v48c0,4.408-3.592,8-8,8h-16c-4.408,0-8-3.592-8-8V88    c0-4.408,3.592-8,8-8h16c4.408,0,8,3.592,8,8V136z M352,232c0,4.408-3.592,8-8,8h-16c-4.408,0-8-3.592-8-8v-96    c0-4.408,3.592-8,8-8h16c4.408,0,8,3.592,8,8V232z"></path>
</g>
</g></svg></span>
                              <h5 class="u-custom-font u-text u-text-font u-text-5">Холлестерин </h5>
                            </div>
                          </div>
                          <div class="u-align-left u-container-style u-custom-color-2 u-list-item u-repeater-item u-video-cover u-list-item-4" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
                            <div class="u-container-layout u-similar-container u-container-layout-8"><span class="u-align-center u-icon u-icon-circle u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 368 368" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-9b64"></use></svg><svg class="u-svg-content" viewBox="0 0 368 368" x="0px" y="0px" id="svg-9b64" style="enable-background:new 0 0 368 368;"><g><g><path d="M344,112h-16c-2.816,0-5.488,0.576-8,1.472V88c0-13.232-10.768-24-24-24h-16c-13.232,0-24,10.768-24,24v56H112V88    c0-13.232-10.768-24-24-24H72c-13.232,0-24,10.768-24,24v25.472c-2.512-0.896-5.184-1.472-8-1.472H24c-13.232,0-24,10.768-24,24    v96c0,13.232,10.768,24,24,24h16c2.816,0,5.488-0.576,8-1.472V280c0,13.232,10.768,24,24,24h16c13.232,0,24-10.768,24-24v-56h144    v56c0,13.232,10.768,24,24,24h16c13.232,0,24-10.768,24-24v-25.472c2.512,0.896,5.184,1.472,8,1.472h16c13.232,0,24-10.768,24-24    v-96C368,122.768,357.232,112,344,112z M48,232c0,4.408-3.592,8-8,8H24c-4.408,0-8-3.592-8-8v-96c0-4.408,3.592-8,8-8h16    c4.408,0,8,3.592,8,8V232z M96,280c0,4.408-3.592,8-8,8H72c-4.408,0-8-3.592-8-8v-48v-96V88c0-4.408,3.592-8,8-8h16    c4.408,0,8,3.592,8,8V280z M256,208H112v-48h144V208z M304,136v96v48c0,4.408-3.592,8-8,8h-16c-4.408,0-8-3.592-8-8V88    c0-4.408,3.592-8,8-8h16c4.408,0,8,3.592,8,8V136z M352,232c0,4.408-3.592,8-8,8h-16c-4.408,0-8-3.592-8-8v-96    c0-4.408,3.592-8,8-8h16c4.408,0,8,3.592,8,8V232z"></path>
</g>
</g></svg></span>
                              <h5 class="u-custom-font u-text u-text-font u-text-6">Холлестерин </h5>
                            </div>
                          </div>
                          <div class="u-align-left u-container-style u-custom-color-2 u-list-item u-repeater-item u-video-cover u-list-item-5" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
                            <div class="u-container-layout u-similar-container u-container-layout-9"><span class="u-align-center u-icon u-icon-circle u-icon-5"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 368 368" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-a335"></use></svg><svg class="u-svg-content" viewBox="0 0 368 368" x="0px" y="0px" id="svg-a335" style="enable-background:new 0 0 368 368;"><g><g><path d="M344,112h-16c-2.816,0-5.488,0.576-8,1.472V88c0-13.232-10.768-24-24-24h-16c-13.232,0-24,10.768-24,24v56H112V88    c0-13.232-10.768-24-24-24H72c-13.232,0-24,10.768-24,24v25.472c-2.512-0.896-5.184-1.472-8-1.472H24c-13.232,0-24,10.768-24,24    v96c0,13.232,10.768,24,24,24h16c2.816,0,5.488-0.576,8-1.472V280c0,13.232,10.768,24,24,24h16c13.232,0,24-10.768,24-24v-56h144    v56c0,13.232,10.768,24,24,24h16c13.232,0,24-10.768,24-24v-25.472c2.512,0.896,5.184,1.472,8,1.472h16c13.232,0,24-10.768,24-24    v-96C368,122.768,357.232,112,344,112z M48,232c0,4.408-3.592,8-8,8H24c-4.408,0-8-3.592-8-8v-96c0-4.408,3.592-8,8-8h16    c4.408,0,8,3.592,8,8V232z M96,280c0,4.408-3.592,8-8,8H72c-4.408,0-8-3.592-8-8v-48v-96V88c0-4.408,3.592-8,8-8h16    c4.408,0,8,3.592,8,8V280z M256,208H112v-48h144V208z M304,136v96v48c0,4.408-3.592,8-8,8h-16c-4.408,0-8-3.592-8-8V88    c0-4.408,3.592-8,8-8h16c4.408,0,8,3.592,8,8V136z M352,232c0,4.408-3.592,8-8,8h-16c-4.408,0-8-3.592-8-8v-96    c0-4.408,3.592-8,8-8h16c4.408,0,8,3.592,8,8V232z"></path>
</g>
</g></svg></span>
                              <h5 class="u-custom-font u-text u-text-font u-text-7">Холлестерин </h5>
                            </div>
                          </div>
                          <div class="u-align-left u-container-style u-custom-color-2 u-list-item u-repeater-item u-video-cover u-list-item-6" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
                            <div class="u-container-layout u-similar-container u-container-layout-10"><span class="u-align-center u-icon u-icon-circle u-icon-6"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 368 368" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-2f81"></use></svg><svg class="u-svg-content" viewBox="0 0 368 368" x="0px" y="0px" id="svg-2f81" style="enable-background:new 0 0 368 368;"><g><g><path d="M344,112h-16c-2.816,0-5.488,0.576-8,1.472V88c0-13.232-10.768-24-24-24h-16c-13.232,0-24,10.768-24,24v56H112V88    c0-13.232-10.768-24-24-24H72c-13.232,0-24,10.768-24,24v25.472c-2.512-0.896-5.184-1.472-8-1.472H24c-13.232,0-24,10.768-24,24    v96c0,13.232,10.768,24,24,24h16c2.816,0,5.488-0.576,8-1.472V280c0,13.232,10.768,24,24,24h16c13.232,0,24-10.768,24-24v-56h144    v56c0,13.232,10.768,24,24,24h16c13.232,0,24-10.768,24-24v-25.472c2.512,0.896,5.184,1.472,8,1.472h16c13.232,0,24-10.768,24-24    v-96C368,122.768,357.232,112,344,112z M48,232c0,4.408-3.592,8-8,8H24c-4.408,0-8-3.592-8-8v-96c0-4.408,3.592-8,8-8h16    c4.408,0,8,3.592,8,8V232z M96,280c0,4.408-3.592,8-8,8H72c-4.408,0-8-3.592-8-8v-48v-96V88c0-4.408,3.592-8,8-8h16    c4.408,0,8,3.592,8,8V280z M256,208H112v-48h144V208z M304,136v96v48c0,4.408-3.592,8-8,8h-16c-4.408,0-8-3.592-8-8V88    c0-4.408,3.592-8,8-8h16c4.408,0,8,3.592,8,8V136z M352,232c0,4.408-3.592,8-8,8h-16c-4.408,0-8-3.592-8-8v-96    c0-4.408,3.592-8,8-8h16c4.408,0,8,3.592,8,8V232z"></path>
</g>
</g></svg></span>
                              <h5 class="u-custom-font u-text u-text-font u-text-8">Холлестерин </h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-custom-color-8 u-section-3" id="carousel_01c9">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-align-center u-custom-font u-text u-text-default u-text-font u-text-1">Меню для Вас</h2><!--products--><!--products_options_json--><!--{"type":"Recent","source":"","tags":"","count":""}--><!--/products_options_json-->
        <div class="custom-expanded u-products u-products-1" data-site-sorting-prop="created" data-site-sorting-order="desc" data-products-datasource="site" data-items-per-page="3" data-products-id="1">
          <div class="u-list-control"></div>
          <div class="u-repeater u-repeater-1" id ="u-meal"><!--product_image-->
            <!--product_item--><div class="u-align-center u-container-style u-image u-product-control u-products-item u-repeater-item u-image-1" data-product-id="2" data-href="products/мужская-футболка.html" style="background-image: url(&quot;data:image/svg+xml;base64,DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9Im1hbiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiDQoJIHdpZHRoPSIyNTZweCIgaGVpZ2h0PSIyNTZweCIgdmlld0JveD0iMCAwIDI1NiAyNTYiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDI1NiAyNTYiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPHJlY3QgZmlsbD0iI0M2RDhFMSIgd2lkdGg9IjI1NiIgaGVpZ2h0PSIyNTYiLz4NCjxwYXRoIGZpbGw9IiM3Rjk2QTYiIGQ9Ik0xODcuNywxMjEuNmMtMS44LTEuOC0yLjEtMTIuNi02LTEzLjdjLTMuOSw2LjYsMC45LDk5LjMtMC42LDEwMy4xYy0xLjEsOC44LTUzLjgsMTkuOC0xMDMuNCw1LjcNCgljLTIuMi0wLjgtNi4yLTEuNy03LjMtMy43YzIuMS04LDUuMS04Mi4zLDEuMS0xMDEuNmMtMS45LDIuOC0zLjMsNi4xLTUuNiw4LjZjMCwwLTIwLjQsMS43LTM0LjUtMTMuMmMwLDAsOS40LTI0LjUsMTIuNy0zMS40DQoJYzEuNS01LDMuOC05LjksNi41LTE0LjJjNS04LDExLjktMTEuMiwyMC44LTEzLjRDOTUuOSw0MS41LDk4LjgsMzYsMTA2LjEsMzNjMi41LDMuNiwxMS44LDYsMTcuOSw2LjZjMTQuMSwxLjQsMjYuMi03LjEsMjYuNS02LjkNCgljMi4yLDEuNyw2LjEsNC4zLDguNSw1LjVjMTAuNCw1LDIyLjQsNS40LDMyLjYsMTAuOWMwLDAsMTMuNywzLjQsMjEuNywzMS44bDExLDI4LjFDMjI0LjUsMTA5LDIxMi41LDEyNC41LDE4Ny43LDEyMS42eiIvPg0KPHBhdGggZmlsbD0iI0M2RDhFMSIgZD0iTTYxLjIsNTAuNmwtMy44LDEuM2wwLjMsMC45YzAuMSwwLjQsMTEuNywzOS45LDEwLjUsNjMuMmwtMC4xLDFsNCwwLjJsMC4xLTFDNzMuNCw5Miw2MS42LDUyLDYxLjUsNTEuNg0KCUw2MS4yLDUwLjZ6Ii8+DQo8cGF0aCBmaWxsPSIjQzZEOEUxIiBkPSJNMTk4LDQ4LjhsLTMuOC0xLjRsLTAuMywxYy0wLjUsMS43LTEzLjEsNDIuNS0xMi44LDYzLjZ2MWw0LTAuMXYtMWMtMC4zLTIwLjUsMTIuNS02MS45LDEyLjYtNjIuM0wxOTgsNDguOA0KCXoiLz4NCjxwYXRoIGZpbGw9IiNDNkQ4RTEiIGQ9Ik0xNTQuNCwzNS4zYy0wLjEsMC4yLTYuNywxNy42LTMxLjksMTYuN2MtMTUtMS4yLTIwLjktMTAuNi0yMi4xLTE2bC0wLjItMWwtNCwwLjhsMC4yLDENCgljMS40LDYuNSw4LjMsMTcuOCwyNS44LDE5LjJjMC40LDAsMC45LDAsMS4zLDBsMCwwYzAuMiwwLDAuNCwwLDAuNiwwYzIyLjcsMCwzMi40LTE0LjQsMzQtMTkuNWwwLjMtMWwtMy44LTEuMkwxNTQuNCwzNS4zeiIvPg0KPC9zdmc+DQo=&quot;);"><!--/product_image-->
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <div class="custom-expanded u-black u-container-style u-group u-opacity u-opacity-50 u-group-1">
                  <div class="u-container-layout u-valign-top u-container-layout-2">
                    <form class="u-file-icon u-icon u-text-custom-color-1 u-icon-1" data-href="https://nicepage.com">
                      <img src="images/2813225-91f61e65.png" alt="">
                  </form><!--product_title-->
                    <h4 class="u-align-center u-custom-font u-font-open-sans u-product-control u-text u-text-2">
                      <a class="u-product-title-link" href="products/мужская-футболка.html">Мужская футболка</a>
                    </h4><!--/product_title-->
                    <p class="u-align-center u-text u-text-3"><span class="u-icon" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><svg class="u-svg-content" viewBox="0 0 511 511" style="width: 1em; height: 1em;"><path d="m114.59375 491.140625c-5.609375 0-11.179688-1.75-15.933594-5.1875-8.855468-6.417969-12.992187-17.449219-10.582031-28.09375l32.9375-145.089844-111.703125-97.960937c-8.210938-7.167969-11.347656-18.519532-7.976562-28.90625 3.371093-10.367188 12.542968-17.707032 23.402343-18.710938l147.796875-13.417968 58.433594-136.746094c4.308594-10.046875 14.121094-16.535156 25.023438-16.535156 10.902343 0 20.714843 6.488281 25.023437 16.511718l58.433594 136.769532 147.773437 13.417968c10.882813.980469 20.054688 8.34375 23.425782 18.710938 3.371093 10.367187.253906 21.738281-7.957032 28.90625l-111.703125 97.941406 32.9375 145.085938c2.414063 10.667968-1.726562 21.699218-10.578125 28.097656-8.832031 6.398437-20.609375 6.890625-29.910156 1.300781l-127.445312-76.160156-127.445313 76.203125c-4.308594 2.558594-9.109375 3.863281-13.953125 3.863281zm141.398438-112.875c4.84375 0 9.640624 1.300781 13.953124 3.859375l120.277344 71.9375-31.085937-136.941406c-2.21875-9.746094 1.089843-19.921875 8.621093-26.515625l105.472657-92.5-139.542969-12.671875c-10.046875-.917969-18.6875-7.234375-22.613281-16.492188l-55.082031-129.046875-55.148438 129.066407c-3.882812 9.195312-12.523438 15.511718-22.546875 16.429687l-139.5625 12.671875 105.46875 92.5c7.554687 6.613281 10.859375 16.769531 8.621094 26.539062l-31.0625 136.9375 120.277343-71.914062c4.308594-2.558594 9.109376-3.859375 13.953126-3.859375zm-84.585938-221.847656s0 .023437-.023438.042969zm169.128906-.0625.023438.042969c0-.023438 0-.023438-.023438-.042969zm0 0"></path></svg></span>&nbsp;Белки: 11 гр
                    </p>
                    <p class="u-align-center u-text u-text-4"><span class="u-icon" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><svg class="u-svg-content" viewBox="0 0 511 511" style="width: 1em; height: 1em;"><path d="m114.59375 491.140625c-5.609375 0-11.179688-1.75-15.933594-5.1875-8.855468-6.417969-12.992187-17.449219-10.582031-28.09375l32.9375-145.089844-111.703125-97.960937c-8.210938-7.167969-11.347656-18.519532-7.976562-28.90625 3.371093-10.367188 12.542968-17.707032 23.402343-18.710938l147.796875-13.417968 58.433594-136.746094c4.308594-10.046875 14.121094-16.535156 25.023438-16.535156 10.902343 0 20.714843 6.488281 25.023437 16.511718l58.433594 136.769532 147.773437 13.417968c10.882813.980469 20.054688 8.34375 23.425782 18.710938 3.371093 10.367187.253906 21.738281-7.957032 28.90625l-111.703125 97.941406 32.9375 145.085938c2.414063 10.667968-1.726562 21.699218-10.578125 28.097656-8.832031 6.398437-20.609375 6.890625-29.910156 1.300781l-127.445312-76.160156-127.445313 76.203125c-4.308594 2.558594-9.109375 3.863281-13.953125 3.863281zm141.398438-112.875c4.84375 0 9.640624 1.300781 13.953124 3.859375l120.277344 71.9375-31.085937-136.941406c-2.21875-9.746094 1.089843-19.921875 8.621093-26.515625l105.472657-92.5-139.542969-12.671875c-10.046875-.917969-18.6875-7.234375-22.613281-16.492188l-55.082031-129.046875-55.148438 129.066407c-3.882812 9.195312-12.523438 15.511718-22.546875 16.429687l-139.5625 12.671875 105.46875 92.5c7.554687 6.613281 10.859375 16.769531 8.621094 26.539062l-31.0625 136.9375 120.277343-71.914062c4.308594-2.558594 9.109376-3.859375 13.953126-3.859375zm-84.585938-221.847656s0 .023437-.023438.042969zm169.128906-.0625.023438.042969c0-.023438 0-.023438-.023438-.042969zm0 0"></path></svg></span>&nbsp;​Жиры: 11 гр
                    </p>
                    <p class="u-align-center u-text u-text-5"><span class="u-icon"><svg class="u-svg-content" viewBox="0 0 511 511" style="width: 1em; height: 1em;"><path d="m114.59375 491.140625c-5.609375 0-11.179688-1.75-15.933594-5.1875-8.855468-6.417969-12.992187-17.449219-10.582031-28.09375l32.9375-145.089844-111.703125-97.960937c-8.210938-7.167969-11.347656-18.519532-7.976562-28.90625 3.371093-10.367188 12.542968-17.707032 23.402343-18.710938l147.796875-13.417968 58.433594-136.746094c4.308594-10.046875 14.121094-16.535156 25.023438-16.535156 10.902343 0 20.714843 6.488281 25.023437 16.511718l58.433594 136.769532 147.773437 13.417968c10.882813.980469 20.054688 8.34375 23.425782 18.710938 3.371093 10.367187.253906 21.738281-7.957032 28.90625l-111.703125 97.941406 32.9375 145.085938c2.414063 10.667968-1.726562 21.699218-10.578125 28.097656-8.832031 6.398437-20.609375 6.890625-29.910156 1.300781l-127.445312-76.160156-127.445313 76.203125c-4.308594 2.558594-9.109375 3.863281-13.953125 3.863281zm141.398438-112.875c4.84375 0 9.640624 1.300781 13.953124 3.859375l120.277344 71.9375-31.085937-136.941406c-2.21875-9.746094 1.089843-19.921875 8.621093-26.515625l105.472657-92.5-139.542969-12.671875c-10.046875-.917969-18.6875-7.234375-22.613281-16.492188l-55.082031-129.046875-55.148438 129.066407c-3.882812 9.195312-12.523438 15.511718-22.546875 16.429687l-139.5625 12.671875 105.46875 92.5c7.554687 6.613281 10.859375 16.769531 8.621094 26.539062l-31.0625 136.9375 120.277343-71.914062c4.308594-2.558594 9.109376-3.859375 13.953126-3.859375zm-84.585938-221.847656s0 .023437-.023438.042969zm169.128906-.0625.023438.042969c0-.023438 0-.023438-.023438-.042969zm0 0"></path></svg></span>&nbsp;Углев.: 11 гр
                    </p>
                  </div>
                </div>
              </div>
            </div><!--/product_item--><!--product_item--><div class="u-align-center u-container-style u-image u-product-control u-products-item u-repeater-item u-image-2" data-product-id="3" data-href="products/летняя-шляпа.html" style="background-image: url(&quot;data:image/svg+xml;base64,DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9Im1hbiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiDQoJIHdpZHRoPSIyNTZweCIgaGVpZ2h0PSIyNTZweCIgdmlld0JveD0iMCAwIDI1NiAyNTYiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDI1NiAyNTYiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPHJlY3QgZmlsbD0iI0M2RDhFMSIgd2lkdGg9IjI1NiIgaGVpZ2h0PSIyNTYiLz4NCjxwYXRoIGZpbGw9IiM3Rjk2QTYiIGQ9Ik0yMDguNiwxMzFjMC42LDAuMiwxLjIsMC4zLDEuOSwwLjNjMi41LDAsNC43LTEuNCw1LjYtMy42YzEtMi44LTAuNi01LjgtMy43LTYuN2wtMjYuMi03LjhsMTYuNy0xNS4xDQoJYzIuMy0yLjEsMi4zLTUuNCwwLTcuNXMtNi0yLjEtOC4zLDBsLTEzLjcsMTIuM0MxNzkuNyw4My41LDE2Miw2OCwxNDAuMSw2OGgtMjQuMmMtMjIuNiwwLTQxLDE2LjYtNDEsMzYuOXYxNS44aDk5LjRMMjA4LjYsMTMxeg0KCSBNMjMwLDE2NC41bC0zNi45LTMzLjJINzAuM2wtMzYuOSwzMy4yYy0xLjcsMS41LTIuMiwzLjgtMS4zLDUuN2MwLjksMiwzLDMuMyw1LjQsMy4zaDM2LjhjMTMuOCwwLDI3LjIsMi4zLDM5LjgsNi45DQoJYzE0LjEsNS4xLDI5LjgsNy42LDQ0LjgsNy42YzEyLjcsMCwyNS41LTEuOCwzNy43LTUuNWwzMS4xLTkuM2MxLjktMC42LDMuNC0yLDMuOS0zLjhDMjMyLDE2Ny42LDIzMS40LDE2NS44LDIzMCwxNjQuNXoiLz4NCjwvc3ZnPg0K&quot;);"><!--/product_image-->
              <div class="u-container-layout u-similar-container u-container-layout-3">
                <div class="custom-expanded u-black u-container-style u-group u-opacity u-opacity-50 u-group-2">
                  <div class="u-container-layout u-valign-top u-container-layout-4"><span class="u-file-icon u-icon u-text-custom-color-1 u-icon-5"><img src="images/2813225-91f61e65.png" alt=""></span><!--product_title-->
                    <h4 class="u-align-center u-custom-font u-font-open-sans u-product-control u-text u-text-6">
                      <a class="u-product-title-link" href="products/летняя-шляпа.html">Летняя шляпа</a>
                    </h4><!--/product_title-->
                    <p class="u-align-center u-text u-text-7"><span class="u-icon" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><svg class="u-svg-content" viewBox="0 0 511 511" style="width: 1em; height: 1em;"><path d="m114.59375 491.140625c-5.609375 0-11.179688-1.75-15.933594-5.1875-8.855468-6.417969-12.992187-17.449219-10.582031-28.09375l32.9375-145.089844-111.703125-97.960937c-8.210938-7.167969-11.347656-18.519532-7.976562-28.90625 3.371093-10.367188 12.542968-17.707032 23.402343-18.710938l147.796875-13.417968 58.433594-136.746094c4.308594-10.046875 14.121094-16.535156 25.023438-16.535156 10.902343 0 20.714843 6.488281 25.023437 16.511718l58.433594 136.769532 147.773437 13.417968c10.882813.980469 20.054688 8.34375 23.425782 18.710938 3.371093 10.367187.253906 21.738281-7.957032 28.90625l-111.703125 97.941406 32.9375 145.085938c2.414063 10.667968-1.726562 21.699218-10.578125 28.097656-8.832031 6.398437-20.609375 6.890625-29.910156 1.300781l-127.445312-76.160156-127.445313 76.203125c-4.308594 2.558594-9.109375 3.863281-13.953125 3.863281zm141.398438-112.875c4.84375 0 9.640624 1.300781 13.953124 3.859375l120.277344 71.9375-31.085937-136.941406c-2.21875-9.746094 1.089843-19.921875 8.621093-26.515625l105.472657-92.5-139.542969-12.671875c-10.046875-.917969-18.6875-7.234375-22.613281-16.492188l-55.082031-129.046875-55.148438 129.066407c-3.882812 9.195312-12.523438 15.511718-22.546875 16.429687l-139.5625 12.671875 105.46875 92.5c7.554687 6.613281 10.859375 16.769531 8.621094 26.539062l-31.0625 136.9375 120.277343-71.914062c4.308594-2.558594 9.109376-3.859375 13.953126-3.859375zm-84.585938-221.847656s0 .023437-.023438.042969zm169.128906-.0625.023438.042969c0-.023438 0-.023438-.023438-.042969zm0 0"></path></svg></span>&nbsp;Текст с иконкой
                    </p>
                    <p class="u-align-center u-text u-text-8"><span class="u-icon" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><svg class="u-svg-content" viewBox="0 0 511 511" style="width: 1em; height: 1em;"><path d="m114.59375 491.140625c-5.609375 0-11.179688-1.75-15.933594-5.1875-8.855468-6.417969-12.992187-17.449219-10.582031-28.09375l32.9375-145.089844-111.703125-97.960937c-8.210938-7.167969-11.347656-18.519532-7.976562-28.90625 3.371093-10.367188 12.542968-17.707032 23.402343-18.710938l147.796875-13.417968 58.433594-136.746094c4.308594-10.046875 14.121094-16.535156 25.023438-16.535156 10.902343 0 20.714843 6.488281 25.023437 16.511718l58.433594 136.769532 147.773437 13.417968c10.882813.980469 20.054688 8.34375 23.425782 18.710938 3.371093 10.367187.253906 21.738281-7.957032 28.90625l-111.703125 97.941406 32.9375 145.085938c2.414063 10.667968-1.726562 21.699218-10.578125 28.097656-8.832031 6.398437-20.609375 6.890625-29.910156 1.300781l-127.445312-76.160156-127.445313 76.203125c-4.308594 2.558594-9.109375 3.863281-13.953125 3.863281zm141.398438-112.875c4.84375 0 9.640624 1.300781 13.953124 3.859375l120.277344 71.9375-31.085937-136.941406c-2.21875-9.746094 1.089843-19.921875 8.621093-26.515625l105.472657-92.5-139.542969-12.671875c-10.046875-.917969-18.6875-7.234375-22.613281-16.492188l-55.082031-129.046875-55.148438 129.066407c-3.882812 9.195312-12.523438 15.511718-22.546875 16.429687l-139.5625 12.671875 105.46875 92.5c7.554687 6.613281 10.859375 16.769531 8.621094 26.539062l-31.0625 136.9375 120.277343-71.914062c4.308594-2.558594 9.109376-3.859375 13.953126-3.859375zm-84.585938-221.847656s0 .023437-.023438.042969zm169.128906-.0625.023438.042969c0-.023438 0-.023438-.023438-.042969zm0 0"></path></svg></span>&nbsp;Текст с иконкой
                    </p>
                    <p class="u-align-center u-text u-text-9"><span class="u-icon"><svg class="u-svg-content" viewBox="0 0 511 511" style="width: 1em; height: 1em;"><path d="m114.59375 491.140625c-5.609375 0-11.179688-1.75-15.933594-5.1875-8.855468-6.417969-12.992187-17.449219-10.582031-28.09375l32.9375-145.089844-111.703125-97.960937c-8.210938-7.167969-11.347656-18.519532-7.976562-28.90625 3.371093-10.367188 12.542968-17.707032 23.402343-18.710938l147.796875-13.417968 58.433594-136.746094c4.308594-10.046875 14.121094-16.535156 25.023438-16.535156 10.902343 0 20.714843 6.488281 25.023437 16.511718l58.433594 136.769532 147.773437 13.417968c10.882813.980469 20.054688 8.34375 23.425782 18.710938 3.371093 10.367187.253906 21.738281-7.957032 28.90625l-111.703125 97.941406 32.9375 145.085938c2.414063 10.667968-1.726562 21.699218-10.578125 28.097656-8.832031 6.398437-20.609375 6.890625-29.910156 1.300781l-127.445312-76.160156-127.445313 76.203125c-4.308594 2.558594-9.109375 3.863281-13.953125 3.863281zm141.398438-112.875c4.84375 0 9.640624 1.300781 13.953124 3.859375l120.277344 71.9375-31.085937-136.941406c-2.21875-9.746094 1.089843-19.921875 8.621093-26.515625l105.472657-92.5-139.542969-12.671875c-10.046875-.917969-18.6875-7.234375-22.613281-16.492188l-55.082031-129.046875-55.148438 129.066407c-3.882812 9.195312-12.523438 15.511718-22.546875 16.429687l-139.5625 12.671875 105.46875 92.5c7.554687 6.613281 10.859375 16.769531 8.621094 26.539062l-31.0625 136.9375 120.277343-71.914062c4.308594-2.558594 9.109376-3.859375 13.953126-3.859375zm-84.585938-221.847656s0 .023437-.023438.042969zm169.128906-.0625.023438.042969c0-.023438 0-.023438-.023438-.042969zm0 0"></path></svg></span>&nbsp;Текст с иконкой
                    </p>
                  </div>
                </div>
              </div>
            </div><!--/product_item--><!--product_item--><div class="u-align-center u-container-style u-image u-product-control u-products-item u-repeater-item u-image-3" data-product-id="4" data-href="products/кожаные-перчатки.html" style="background-image: url(&quot;data:image/svg+xml;base64,DQoNCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0ibWFuIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgd2lkdGg9IjI1NnB4IiBoZWlnaHQ9IjI1NnB4IiB2aWV3Qm94PSIwIDAgMjU2IDI1NiIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAwIDAgMjU2IDI1NiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+DQo8cmVjdCBmaWxsPSIjQzZEOEUxIiB3aWR0aD0iMjU2IiBoZWlnaHQ9IjI1NiIvPg0KPGc+DQoJPHBhdGggZmlsbD0iIzdGOTZBNiIgZD0iTTIyNi4xLDEwMGMtMS4yLTEuMi0yLjktMS45LTQuNy0xLjljLTIuMSwwLTQuMSwwLjktNS43LDIuNWwtMjUuMSwyNS42Yy0wLjIsMC4yLTAuNiwwLjUtMC45LDAuNQ0KCQljLTAuMiwwLTAuNC0wLjEtMC40LTAuMWwtMi44LTIuOGMtMC40LTAuNC0wLjctMSwwLTEuN0wyMTgsOTBjMy0zLjEsMy4yLTcuOCwwLjUtMTAuNmMtMS4yLTEuMi0yLjktMS45LTQuNy0xLjkNCgkJYy0yLjEsMC00LjEsMC45LTUuNywyLjVsLTMxLjQsMzJjLTAuNiwwLjYtMC45LDAuNy0xLDAuN2wtMy42LTMuN2MtMC4xLTAuMiwwLTAuNiwwLjUtMS4xbDM3LTM3LjhjMy0zLjEsMy4yLTcuOCwwLjUtMTAuNg0KCQljLTEuMi0xLjItMi45LTEuOS00LjctMS45Yy0yLjEsMC00LjEsMC45LTUuNywyLjVsLTM3LDM3LjhjLTAuMywwLjQtMC43LDAuNS0wLjksMC41Yy0wLjEsMC0wLjIsMC0wLjItMC4xbC0zLjItMy4zDQoJCWMtMC4xLTAuMy0wLjMtMC44LDAuMy0xLjRsMzIuNi0zMy4zYzMtMy4xLDMuMi03LjgsMC41LTEwLjZjLTEuMi0xLjItMi45LTEuOS00LjctMS45Yy0yLjEsMC00LjEsMC45LTUuNywyLjVMMTQ2LDg2LjlsMC44LTEwLjMNCgkJYzAuMi0yLjgtMC40LTUuMy0xLjctNy4ybDAsMGMtMS41LTIuNC00LjEtMy43LTcuMy0zLjdsLTAuMSwwYy0yLjgsMC02LjksMi4zLTcuNCw2LjZjLTAuMSwwLjktMC4yLDEuOS0wLjQsMw0KCQljLTEuNiwxMy43LTQuMiwzNi43LTEwLjgsNDYuMmMtNC45LDcuMS0yNS45LDIyLjEtMjYuMSwyMi4zbC0wLjEsMC4xYy0wLjQsMC40LTAuNywwLjktMC43LDEuNGMwLDAuNiwwLjIsMS4xLDAuNiwxLjVsNDcuMiw0OC41DQoJCWMwLjQsMC40LDAuOSwwLjYsMS40LDAuNmwwLjEsMGMwLjUsMCwxLjEtMC4zLDEuNC0wLjdsMC4xLTAuMWMwLjEtMC4yLDE0LjMtMjAuOCwyMC4xLTI2LjljMi42LTIuNyw1LjctNC40LDktNi4yDQoJCWMzLjMtMS44LDYuOC0zLjYsOS44LTYuN2w0My43LTQ0LjZDMjI4LjYsMTA3LjUsMjI4LjgsMTAyLjgsMjI2LjEsMTAweiIvPg0KCTxwYXRoIGZpbGw9IiM3Rjk2QTYiIGQ9Ik0xMjEuNiwxODMuNGwtMzMtMzMuOWMtMS4yLTEuMi0xLjgtMi45LTEuNy00LjZjMC4xLTEuNywwLjktMy40LDIuMi00LjVsMC4zLTAuMw0KCQljNS43LTQuMSwyMS40LTE1LjksMjUuMS0yMS4zYzQtNS44LDUuOS0xNC40LDcuNS0yNS41YzAuNC0xLjgsMC40LTMtMC4yLTMuN2MtMC4zLTAuNC0wLjgtMC42LTEuMy0wLjZjLTAuMiwwLTAuNCwwLTAuNiwwLjENCgkJYy0wLjcsMC4zLTEuMiwwLjYtMS40LDAuOGwwLDBjLTEuOSwxLjItMy41LDMuMy00LjMsNmwtMy4yLDkuOEw5MS45LDU4LjFjLTEuMi0zLTQtNS4xLTYuOS01LjFjLTAuOCwwLTEuNiwwLjItMi40LDAuNQ0KCQljLTEuNywwLjctMywyLjItMy43LDQuMWMtMC42LDEuOS0wLjYsMy45LDAuMiw1LjlMOTYuNSwxMDdjMC4zLDAuNy0wLjEsMS4yLTAuMiwxLjRsLTQuMiwxLjdjMCwwLDAsMC0wLjEsMA0KCQljLTAuNCwwLTAuNy0wLjYtMC44LTAuOUw3MS40LDU5LjhjLTEuMi0zLTQtNS4xLTYuOS01LjFjLTAuOCwwLTEuNiwwLjItMi40LDAuNWMtMS43LDAuNy0zLDIuMi0zLjcsNC4xYy0wLjYsMS45LTAuNiwzLjksMC4yLDUuOQ0KCQlsMTkuOCw0OS40YzAuMywwLjcsMC4yLDEuMSwwLDEuM2wtNC43LDJsMCwwYy0wLjEtMC4xLTAuNC0wLjMtMC42LTFMNTYuMyw3NC45Yy0xLjItMy00LTUuMS02LjktNS4xYy0wLjgsMC0xLjYsMC4yLTIuNCwwLjUNCgkJYy0zLjUsMS41LTUuMSw1LjktMy41LDkuOWwxNi44LDQxLjljMC40LDAuOS0wLjEsMS4zLTAuNiwxLjVsLTMuNiwxLjVjMCwwLTAuMSwwLTAuMiwwYzAsMCwwLDAsMCwwYy0wLjEsMC0wLjUsMC0wLjktMC45DQoJCUw0MS41LDkwLjhjLTEuMi0zLTQtNS4xLTYuOS01LjFjLTAuOCwwLTEuNiwwLjItMi40LDAuNWMtMy41LDEuNS01LjEsNS45LTMuNSw5LjlMNTIsMTU0LjVjMS42LDQsNC4xLDcsNi41LDEwDQoJCWMyLjQsMi45LDQuNiw1LjcsNiw5LjJjMy4xLDcuOSw4LjMsMzIuNSw4LjMsMzIuN2wwLDAuMWMwLjIsMC41LDAuNSwxLDEsMS4yYzAuMywwLjEsMC41LDAuMiwwLjgsMC4yYzAuMywwLDAuNS0wLjEsMC43LTAuMg0KCQljMC4zLTAuMSwzNC40LTE0LjcsNDUuOC0xOS4yYzEuNC0wLjYsMS44LTEuNCwxLjktMi4xQzEyMy40LDE4NSwxMjIsMTgzLjcsMTIxLjYsMTgzLjR6Ii8+DQo8L2c+DQo8L3N2Zz4NCg==&quot;);"><!--/product_image-->
              <div class="u-container-layout u-similar-container u-container-layout-5">
                <div class="custom-expanded u-black u-container-style u-group u-opacity u-opacity-50 u-group-3">
                  <div class="u-container-layout u-valign-top u-container-layout-6"><span class="u-file-icon u-icon u-text-custom-color-1 u-icon-9" data-href="https://nicepage.com"><img src="images/2813225-91f61e65.png" alt=""></span><!--product_title-->
                    <h4 class="u-align-center u-custom-font u-font-open-sans u-product-control u-text u-text-10">
                      <a class="u-product-title-link" href="products/кожаные-перчатки.html">Кожаные перчатки</a>
                    </h4><!--/product_title-->
                    <p class="u-align-center u-text u-text-11"><span class="u-icon" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><svg class="u-svg-content" viewBox="0 0 511 511" style="width: 1em; height: 1em;"><path d="m114.59375 491.140625c-5.609375 0-11.179688-1.75-15.933594-5.1875-8.855468-6.417969-12.992187-17.449219-10.582031-28.09375l32.9375-145.089844-111.703125-97.960937c-8.210938-7.167969-11.347656-18.519532-7.976562-28.90625 3.371093-10.367188 12.542968-17.707032 23.402343-18.710938l147.796875-13.417968 58.433594-136.746094c4.308594-10.046875 14.121094-16.535156 25.023438-16.535156 10.902343 0 20.714843 6.488281 25.023437 16.511718l58.433594 136.769532 147.773437 13.417968c10.882813.980469 20.054688 8.34375 23.425782 18.710938 3.371093 10.367187.253906 21.738281-7.957032 28.90625l-111.703125 97.941406 32.9375 145.085938c2.414063 10.667968-1.726562 21.699218-10.578125 28.097656-8.832031 6.398437-20.609375 6.890625-29.910156 1.300781l-127.445312-76.160156-127.445313 76.203125c-4.308594 2.558594-9.109375 3.863281-13.953125 3.863281zm141.398438-112.875c4.84375 0 9.640624 1.300781 13.953124 3.859375l120.277344 71.9375-31.085937-136.941406c-2.21875-9.746094 1.089843-19.921875 8.621093-26.515625l105.472657-92.5-139.542969-12.671875c-10.046875-.917969-18.6875-7.234375-22.613281-16.492188l-55.082031-129.046875-55.148438 129.066407c-3.882812 9.195312-12.523438 15.511718-22.546875 16.429687l-139.5625 12.671875 105.46875 92.5c7.554687 6.613281 10.859375 16.769531 8.621094 26.539062l-31.0625 136.9375 120.277343-71.914062c4.308594-2.558594 9.109376-3.859375 13.953126-3.859375zm-84.585938-221.847656s0 .023437-.023438.042969zm169.128906-.0625.023438.042969c0-.023438 0-.023438-.023438-.042969zm0 0"></path></svg></span>&nbsp;Текст с иконкой
                    </p>
                    <p class="u-align-center u-text u-text-12"><span class="u-icon" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><svg class="u-svg-content" viewBox="0 0 511 511" style="width: 1em; height: 1em;"><path d="m114.59375 491.140625c-5.609375 0-11.179688-1.75-15.933594-5.1875-8.855468-6.417969-12.992187-17.449219-10.582031-28.09375l32.9375-145.089844-111.703125-97.960937c-8.210938-7.167969-11.347656-18.519532-7.976562-28.90625 3.371093-10.367188 12.542968-17.707032 23.402343-18.710938l147.796875-13.417968 58.433594-136.746094c4.308594-10.046875 14.121094-16.535156 25.023438-16.535156 10.902343 0 20.714843 6.488281 25.023437 16.511718l58.433594 136.769532 147.773437 13.417968c10.882813.980469 20.054688 8.34375 23.425782 18.710938 3.371093 10.367187.253906 21.738281-7.957032 28.90625l-111.703125 97.941406 32.9375 145.085938c2.414063 10.667968-1.726562 21.699218-10.578125 28.097656-8.832031 6.398437-20.609375 6.890625-29.910156 1.300781l-127.445312-76.160156-127.445313 76.203125c-4.308594 2.558594-9.109375 3.863281-13.953125 3.863281zm141.398438-112.875c4.84375 0 9.640624 1.300781 13.953124 3.859375l120.277344 71.9375-31.085937-136.941406c-2.21875-9.746094 1.089843-19.921875 8.621093-26.515625l105.472657-92.5-139.542969-12.671875c-10.046875-.917969-18.6875-7.234375-22.613281-16.492188l-55.082031-129.046875-55.148438 129.066407c-3.882812 9.195312-12.523438 15.511718-22.546875 16.429687l-139.5625 12.671875 105.46875 92.5c7.554687 6.613281 10.859375 16.769531 8.621094 26.539062l-31.0625 136.9375 120.277343-71.914062c4.308594-2.558594 9.109376-3.859375 13.953126-3.859375zm-84.585938-221.847656s0 .023437-.023438.042969zm169.128906-.0625.023438.042969c0-.023438 0-.023438-.023438-.042969zm0 0"></path></svg></span>&nbsp;Текст с иконкой
                    </p>
                    <p class="u-align-center u-text u-text-13"><span class="u-icon"><svg class="u-svg-content" viewBox="0 0 511 511" style="width: 1em; height: 1em;"><path d="m114.59375 491.140625c-5.609375 0-11.179688-1.75-15.933594-5.1875-8.855468-6.417969-12.992187-17.449219-10.582031-28.09375l32.9375-145.089844-111.703125-97.960937c-8.210938-7.167969-11.347656-18.519532-7.976562-28.90625 3.371093-10.367188 12.542968-17.707032 23.402343-18.710938l147.796875-13.417968 58.433594-136.746094c4.308594-10.046875 14.121094-16.535156 25.023438-16.535156 10.902343 0 20.714843 6.488281 25.023437 16.511718l58.433594 136.769532 147.773437 13.417968c10.882813.980469 20.054688 8.34375 23.425782 18.710938 3.371093 10.367187.253906 21.738281-7.957032 28.90625l-111.703125 97.941406 32.9375 145.085938c2.414063 10.667968-1.726562 21.699218-10.578125 28.097656-8.832031 6.398437-20.609375 6.890625-29.910156 1.300781l-127.445312-76.160156-127.445313 76.203125c-4.308594 2.558594-9.109375 3.863281-13.953125 3.863281zm141.398438-112.875c4.84375 0 9.640624 1.300781 13.953124 3.859375l120.277344 71.9375-31.085937-136.941406c-2.21875-9.746094 1.089843-19.921875 8.621093-26.515625l105.472657-92.5-139.542969-12.671875c-10.046875-.917969-18.6875-7.234375-22.613281-16.492188l-55.082031-129.046875-55.148438 129.066407c-3.882812 9.195312-12.523438 15.511718-22.546875 16.429687l-139.5625 12.671875 105.46875 92.5c7.554687 6.613281 10.859375 16.769531 8.621094 26.539062l-31.0625 136.9375 120.277343-71.914062c4.308594-2.558594 9.109376-3.859375 13.953126-3.859375zm-84.585938-221.847656s0 .023437-.023438.042969zm169.128906-.0625.023438.042969c0-.023438 0-.023438-.023438-.042969zm0 0"></path></svg></span>&nbsp;Текст с иконкой
                    </p>
                  </div>
                </div>
              </div>
            </div><!--/product_item--><!--product_image-->
            <!--product_image-->
            
          </div>
          <div class="u-list-control"></div>
        </div><!--/products-->
      </div>
    </section>
    <section class="u-clearfix u-custom-color-1 u-section-4" id="carousel_27c0">
      <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-sheet-1">
        <div class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-44 u-layout-cell-1">
                <div class="u-container-layout u-valign-bottom u-container-layout-1">
                  <h1 class="u-custom-font u-text u-text-font u-text-1">Измените свои привычки </h1>
                </div>
              </div>
              <div class="u-container-style u-image u-image-default u-layout-cell u-shading u-size-16 u-image-1" data-image-width="1024" data-image-height="1024">
                <div class="u-container-layout u-container-layout-2"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-grey-90 u-section-5" id="carousel_7351">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-custom-color-1 u-shape u-shape-rectangle u-shape-1"></div>
        <div class="u-gallery u-layout-grid u-lightbox u-no-transition u-show-text-on-hover u-gallery-1">
          <div class="u-gallery-inner u-gallery-inner-1">
            <div class="u-effect-fade u-gallery-item">
              <div class="u-back-slide" data-image-width="2493" data-image-height="2245">
                <img class="u-back-image u-expanded" src="images/1.png">
              </div>
              <div class="u-over-slide u-shading u-over-slide-1"></div>
            </div>
            <div class="u-effect-fade u-gallery-item">
              <div class="u-back-slide" data-image-width="1024" data-image-height="1024">
                <img class="u-back-image u-expanded" src="images/654a0711c2765.jpeg">
              </div>
              <div class="u-over-slide u-shading u-over-slide-2"></div>
            </div>
            <div class="u-effect-fade u-gallery-item">
              <div class="u-back-slide" data-image-width="2495" data-image-height="2095">
                <img class="u-back-image u-expanded" src="images/11.png">
              </div>
              <div class="u-over-slide u-shading u-over-slide-3"></div>
            </div>
            <div class="u-effect-fade u-gallery-item">
              <div class="u-back-slide" data-image-width="1024" data-image-height="1024">
                <img class="u-back-image u-expanded" src="images/654a0711c2765.jpeg">
              </div>
              <div class="u-over-slide u-shading u-over-slide-4"></div>
            </div>
            <div class="u-effect-fade u-gallery-item">
              <div class="u-back-slide" data-image-width="2493" data-image-height="2363">
                <img class="u-back-image u-expanded" src="images/aaa1.png">
              </div>
              <div class="u-over-slide u-shading u-over-slide-5"></div>
            </div>
            <div class="u-effect-fade u-gallery-item">
              <div class="u-back-slide" data-image-width="1024" data-image-height="1024">
                <img class="u-back-image u-expanded" src="images/654a0711c2765.jpeg">
              </div>
              <div class="u-over-slide u-shading u-over-slide-6"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
      <?php
      loadComponent('subs','footer');
      ?>