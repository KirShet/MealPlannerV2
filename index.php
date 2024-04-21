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
          <div class="u-repeater u-repeater-1" id ="u-meal">

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
        <div class="u-gallery u-layout-grid u-lightbox u-show-text-on-hover u-gallery-1" data-pswp-uid="1">
          <div class="u-gallery-inner u-gallery-inner-1">
            <div class="u-effect-fade u-gallery-item" data-pswp-item-id="0" data-gallery-uid="1">
              <div class="u-back-slide" data-image-width="2493" data-image-height="2245">
                <img class="u-back-image u-expanded" src="images/1.png">
              </div>
              <div class="u-over-slide u-shading u-over-slide-1"></div>
            </div>
            <div class="u-effect-fade u-gallery-item" data-pswp-item-id="1" data-gallery-uid="1">
              <div class="u-back-slide" data-image-width="1024" data-image-height="1024">
                <img class="u-back-image u-expanded" src="images/3.png" alt="Создавай">
              </div>
              <div class="u-over-slide u-shading u-over-slide-2">
                <h3 class="u-custom-font u-gallery-heading u-text-font">Создавай</h3>
                <p class="u-custom-font u-font-open-sans u-gallery-text" style="font-size: 1.125rem; background-image: none;">Расскажите о себе, своих диетических предпочтениях и целях. За считанные секунды разработается план питания в соответствии с вашими потребностями! Всегда есть возможность изменить настройки позже.</p>
              </div>
            </div>
            <div class="u-effect-fade u-gallery-item" data-pswp-item-id="2" data-gallery-uid="1">
              <div class="u-back-slide" data-image-width="2495" data-image-height="2095">
                <img class="u-back-image u-expanded" src="images/11.png">
              </div>
              <div class="u-over-slide u-shading u-over-slide-3"></div>
            </div>
            <div class="u-effect-fade u-gallery-item" data-pswp-item-id="3" data-gallery-uid="1">
              <div class="u-back-slide" data-image-width="1024" data-image-height="1024">
                <img class="u-back-image u-expanded" src="images/3.png" alt="Готовь">
              </div>
              <div class="u-over-slide u-shading u-over-slide-4">
                <h3 class="u-custom-font u-gallery-heading u-text-font">Готовь</h3>
                <p class="u-custom-font u-font-open-sans u-gallery-text" style="font-size: 1.125rem; background-image: none;">Наслаждайтесь приготовлением и употреблением вкусных блюд без стресса, связанного с планированием. Не только знайте, что питаетесь лучше, распределяйте больше времени и энергии для других дел.</p>
              </div>
            </div>
            <div class="u-effect-fade u-gallery-item" data-pswp-item-id="4" data-gallery-uid="1">
              <div class="u-back-slide" data-image-width="2493" data-image-height="2363">
                <img class="u-back-image u-expanded" src="images/aaa1.png">
              </div>
              <div class="u-over-slide u-shading u-over-slide-5"></div>
            </div>
            <div class="u-effect-fade u-gallery-item" data-pswp-item-id="5" data-gallery-uid="1">
              <div class="u-back-slide" data-image-width="1024" data-image-height="1024">
                <img class="u-back-image u-expanded" src="images/3.png" alt="Выбирай">
              </div>
              <div class="u-over-slide u-shading u-over-slide-6">
                <h3 class="u-custom-font u-gallery-heading u-text-font">Выбирай</h3>
                <p class="u-custom-font u-font-open-sans u-gallery-text" style="font-size: 1.125rem; background-image: none;">Пересмотрите свой план, чтобы убедиться, что все выглядит хорошо, заменив все, что не нравится. Затем просмотрите блюда, чтобы купить необходимые ингредиенты.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
      <?php
      loadComponent('subs','footer');
      ?>