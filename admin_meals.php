<?php
include 'components/includes.php';
include 'components/check.php';
loadComponent('header');
?>
    <section class="u-align-center u-clearfix u-container-align-center u-section-1" id="carousel_1487">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h2 class="u-align-center u-text u-text-1"> Создавай, Полубог!</h2>
        <div class="data-layout-selected u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-col">

              <!-- горизонтальный блок -->
              <div class="u-size-30">
                <div class="u-layout-row">
                  <!-- блок текса -->
                  <div class="u-align-left u-container-style u-layout-cell u-size-30 u-layout-cell-1" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="" >
                    <div class="u-container-layout u-container-layout-1">
                    <h4 class="u-custom-font u-text u-text-font u-text-2" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""> Блюда приёма пищи</h4>
                      <div class="custom-expanded u-form u-form-radios-spacing-0 u-form-1">
                        <form action="https://forms.nicepagesrv.com/v2/form/process" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="email" name="form" style="padding: 10px;">
                          <div class="u-form-email u-form-group">
                            <label for="email-5433" class="u-label">Название: </label>
                            <input type="text" placeholder="Введите название блюда" id="title-5433" name="title" class="u-input u-input-rectangle" required="">
                          </div>
                          <div class="u-form-email u-form-group">
                            <label for="email-5433" class="u-label">Белки: </label>
                            <input type="number" placeholder="{количество} гр. на 100 гр." id="proteins-5433" name="proteins" class="u-input u-input-rectangle" required="">
                          </div>
                          <div class="u-form-email u-form-group">
                            <label for="email-5433" class="u-label">Жиры: </label>
                            <input type="email" placeholder="{количество} гр. на 100 гр." id="fats-5433" name="fats" class="u-input u-input-rectangle" required="">
                          </div>
                          <div class="u-form-email u-form-group">
                            <label for="email-5433" class="u-label">Углеводы: </label>
                            <input type="email" placeholder="{количество} гр. на 100 гр." id="carbohydrates-5433" name="carbohydrates" class="u-input u-input-rectangle" required="">
                          </div>
                          <div class="u-align-left u-form-group u-form-submit">
                            <a href="#" class="u-btn u-btn-submit u-button-style u-btn-1">Отправить</a>
                            <input type="submit" value="submit" class="u-form-control-hidden">
                          </div>
                          <div class="u-form-send-message u-form-send-success"> Спасибо! Ваше сообщение отправлено. </div>
                          <div class="u-form-send-error u-form-send-message"> Отправка не удалась. Пожалуйста, исправьте ошибки и попробуйте еще раз. </div>
                          <input type="hidden" value="" name="recaptchaResponse">
                          <input type="hidden" name="formServices" value="204e408d-6095-4465-ad83-8d15063556d8">
                        </form>
                      </div>
                    </div>
                  </div>
                  <!-- блок текса -->
                  <div class="u-align-left u-container-style u-layout-cell u-size-15-1 u-layout-cell-4">
              <div class="u-container-layout u-valign-middle u-container-layout-4">
                <h4 class="u-text u-text-8" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">Пропиши нутриенты</h4>
                <p class="u-text u-text-9"> <b>Энергетическая ценность</b> показывает количество энергии в килокалориях (ккал), которое организм получает из 100 граммов блюда. Это важно для <b>поддержания жизненных функций и активности</b>. <?php echo isset($_SESSION['access']) ? $_SESSION['access'] : '' ?></p>
                <p class="u-custom-font u-text u-text-font u-text-palette-5-base u-text-8">
                <span class="u-icon" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><svg class="u-svg-content" viewBox="0 0 511 511" style="width: 1em; height: 1em;"><path d="m114.59375 491.140625c-5.609375 0-11.179688-1.75-15.933594-5.1875-8.855468-6.417969-12.992187-17.449219-10.582031-28.09375l32.9375-145.089844-111.703125-97.960937c-8.210938-7.167969-11.347656-18.519532-7.976562-28.90625 3.371093-10.367188 12.542968-17.707032 23.402343-18.710938l147.796875-13.417968 58.433594-136.746094c4.308594-10.046875 14.121094-16.535156 25.023438-16.535156 10.902343 0 20.714843 6.488281 25.023437 16.511718l58.433594 136.769532 147.773437 13.417968c10.882813.980469 20.054688 8.34375 23.425782 18.710938 3.371093 10.367187.253906 21.738281-7.957032 28.90625l-111.703125 97.941406 32.9375 145.085938c2.414063 10.667968-1.726562 21.699218-10.578125 28.097656-8.832031 6.398437-20.609375 6.890625-29.910156 1.300781l-127.445312-76.160156-127.445313 76.203125c-4.308594 2.558594-9.109375 3.863281-13.953125 3.863281zm141.398438-112.875c4.84375 0 9.640624 1.300781 13.953124 3.859375l120.277344 71.9375-31.085937-136.941406c-2.21875-9.746094 1.089843-19.921875 8.621093-26.515625l105.472657-92.5-139.542969-12.671875c-10.046875-.917969-18.6875-7.234375-22.613281-16.492188l-55.082031-129.046875-55.148438 129.066407c-3.882812 9.195312-12.523438 15.511718-22.546875 16.429687l-139.5625 12.671875 105.46875 92.5c7.554687 6.613281 10.859375 16.769531 8.621094 26.539062l-31.0625 136.9375 120.277343-71.914062c4.308594-2.558594 9.109376-3.859375 13.953126-3.859375zm-84.585938-221.847656s0 .023437-.023438.042969zm169.128906-.0625.023438.042969c0-.023438 0-.023438-.023438-.042969zm0 0"></path></svg></span>
                &nbsp;<b>Белки</b> — <b>строительные блоки</b> клеток и тканей. Они необходимы для <b>роста, восстановления мышц</b> и производства ферментов и гормонов.</p>
                <p class="u-custom-font u-text u-text-font u-text-palette-5-base u-text-8">
                <span class="u-icon" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><svg class="u-svg-content" viewBox="0 0 511 511" style="width: 1em; height: 1em;"><path d="m114.59375 491.140625c-5.609375 0-11.179688-1.75-15.933594-5.1875-8.855468-6.417969-12.992187-17.449219-10.582031-28.09375l32.9375-145.089844-111.703125-97.960937c-8.210938-7.167969-11.347656-18.519532-7.976562-28.90625 3.371093-10.367188 12.542968-17.707032 23.402343-18.710938l147.796875-13.417968 58.433594-136.746094c4.308594-10.046875 14.121094-16.535156 25.023438-16.535156 10.902343 0 20.714843 6.488281 25.023437 16.511718l58.433594 136.769532 147.773437 13.417968c10.882813.980469 20.054688 8.34375 23.425782 18.710938 3.371093 10.367187.253906 21.738281-7.957032 28.90625l-111.703125 97.941406 32.9375 145.085938c2.414063 10.667968-1.726562 21.699218-10.578125 28.097656-8.832031 6.398437-20.609375 6.890625-29.910156 1.300781l-127.445312-76.160156-127.445313 76.203125c-4.308594 2.558594-9.109375 3.863281-13.953125 3.863281zm141.398438-112.875c4.84375 0 9.640624 1.300781 13.953124 3.859375l120.277344 71.9375-31.085937-136.941406c-2.21875-9.746094 1.089843-19.921875 8.621093-26.515625l105.472657-92.5-139.542969-12.671875c-10.046875-.917969-18.6875-7.234375-22.613281-16.492188l-55.082031-129.046875-55.148438 129.066407c-3.882812 9.195312-12.523438 15.511718-22.546875 16.429687l-139.5625 12.671875 105.46875 92.5c7.554687 6.613281 10.859375 16.769531 8.621094 26.539062l-31.0625 136.9375 120.277343-71.914062c4.308594-2.558594 9.109376-3.859375 13.953126-3.859375zm-84.585938-221.847656s0 .023437-.023438.042969zm169.128906-.0625.023438.042969c0-.023438 0-.023438-.023438-.042969zm0 0"></path></svg></span>
                &nbsp;
                <b>Жиры</b> — <b>источник энергии</b> и <b>усвоения витаминов</b> (A, D, E, K). Они <b>защищают</b> органы, <b>поддерживают</b> клеточные мембраны и участвуют в <b>производстве гормонов</b>.</p>
                <p class="u-custom-font u-text u-text-font u-text-palette-5-base u-text-8">
                <span class="u-icon" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><svg class="u-svg-content" viewBox="0 0 511 511" style="width: 1em; height: 1em;"><path d="m114.59375 491.140625c-5.609375 0-11.179688-1.75-15.933594-5.1875-8.855468-6.417969-12.992187-17.449219-10.582031-28.09375l32.9375-145.089844-111.703125-97.960937c-8.210938-7.167969-11.347656-18.519532-7.976562-28.90625 3.371093-10.367188 12.542968-17.707032 23.402343-18.710938l147.796875-13.417968 58.433594-136.746094c4.308594-10.046875 14.121094-16.535156 25.023438-16.535156 10.902343 0 20.714843 6.488281 25.023437 16.511718l58.433594 136.769532 147.773437 13.417968c10.882813.980469 20.054688 8.34375 23.425782 18.710938 3.371093 10.367187.253906 21.738281-7.957032 28.90625l-111.703125 97.941406 32.9375 145.085938c2.414063 10.667968-1.726562 21.699218-10.578125 28.097656-8.832031 6.398437-20.609375 6.890625-29.910156 1.300781l-127.445312-76.160156-127.445313 76.203125c-4.308594 2.558594-9.109375 3.863281-13.953125 3.863281zm141.398438-112.875c4.84375 0 9.640624 1.300781 13.953124 3.859375l120.277344 71.9375-31.085937-136.941406c-2.21875-9.746094 1.089843-19.921875 8.621093-26.515625l105.472657-92.5-139.542969-12.671875c-10.046875-.917969-18.6875-7.234375-22.613281-16.492188l-55.082031-129.046875-55.148438 129.066407c-3.882812 9.195312-12.523438 15.511718-22.546875 16.429687l-139.5625 12.671875 105.46875 92.5c7.554687 6.613281 10.859375 16.769531 8.621094 26.539062l-31.0625 136.9375 120.277343-71.914062c4.308594-2.558594 9.109376-3.859375 13.953126-3.859375zm-84.585938-221.847656s0 .023437-.023438.042969zm169.128906-.0625.023438.042969c0-.023438 0-.023438-.023438-.042969zm0 0"></path></svg></span>
                &nbsp;
                <b>Углеводы</b> — основной <b>источник энергии</b>. Простые углеводы быстро усваиваются, а сложные обеспечивают длительное <b>чувство сытости</b> и <b>стабильный уровень энергии</b>.</p>
              </div>
            </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <h6 class="u-align-center u-text u-text-custom-color-3 u-text-12">*​Пожалуйста, обратите внимание, что мы не можем гарантировать точность и полноту предоставленной информации(к тому же учитывая, что вы сами их вводите), поскольку вся информация взята из открытых источников, и мы не несём ответственность за ​её достоверность. Показанные здесь значения представляют собой средние данные, которые могут изменяться в зависимости от контекста, и конкретные условия могут влиять на их точность.</h6>
      </div>
    </section>
    <div id="carousel_229a"></div>
      <?php
      loadComponent('subs','footer');
      ?>