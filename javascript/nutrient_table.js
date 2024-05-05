document.addEventListener('DOMContentLoaded', function() {
    // Получаем все элементы с классом "u-field-input", содержащие радио-инпуты
    var inputElements = document.querySelectorAll(".u-field-input");

    // Перебираем все найденные элементы и добавляем обработчик события изменения состояния
    inputElements.forEach(function(parentElement) {
        parentElement.addEventListener('change', function(event) {
            var target = event.target; // Получаем целевой элемент, который вызвал событие

            // Проверяем, что целевой элемент является радио-инпутом
            if (target.type === 'radio') {
                // Выводим значение выбранного радио-инпута
                console.log(target.value);
                formSend(target.value);
                async function formSend(target) {
                    let response = await fetch('action/nutrient_table.php', {
                        method: 'POST',
                        body: target
                    });
                    if (response.ok) {
                        let result = await response.json();
                        console.log(result);
                        renderMeals(result);
                    }
                }
            }
        });
    });
    function renderMeals(result) {
        console.log("1"+result);

        // Находим родительский элемент, к которому нужно добавить новый див
        var parentElement = document.querySelector('.u-layout-col');

        // Создаем новый див
        var evenDiv = document.createElement('div');
        evenDiv.className = 'u-size-30';
        var htmlContentEven = '<div class="u-layout-row">' +
        '<!-- блок текса -->' +
        '<div class="u-align-left u-container-style u-layout-cell u-size-15 u-layout-cell-4">' +
          '<div class="u-container-layout u-valign-middle u-container-layout-4">' +
            '<h4 class="u-text u-text-8" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">Farmers Loaf</h4>' +
            '<p class="u-text u-text-9"> (1) Slow-fermented sourdough Rye studded with Kalamata.</p>' +
            '<h5 class="u-custom-font u-text u-text-font u-text-palette-5-base u-text-10">$​5.50</h5>' +
          '</div>' +
        '</div>' +
        '<!-- блок изображения -->' +
        '<div class="u-align-center u-container-style u-image u-image-round u-layout-cell u-radius u-size-15 u-image-2" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="" data-image-width="700" data-image-height="700">' +
          '<div class="u-container-layout u-valign-middle u-container-layout-5"></div>' +
        '</div>' +
        '<!-- блок текса -->' +
        '<div class="u-align-left u-container-style u-layout-cell u-size-15 u-layout-cell-6" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">' +
          '<div class="u-container-layout u-valign-middle u-container-layout-6">' +
            '<h4 class="u-text u-text-11" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">Round Bread</h4>' +
            '<p class="u-text u-text-12"> Made with 100% whole grain flour and high in fiber.</p>' +
            '<h5 class="u-custom-font u-text u-text-font u-text-palette-5-base u-text-13">$​5.15</h5>' +
          '</div>' +
        '</div>' +
        '<!-- блок изображения -->' +
        '<div class="u-align-center u-container-style u-image u-image-round u-layout-cell u-radius-50 u-size-15 u-image-3" data-image-width="700" data-image-height="700">' +
          '<div class="u-container-layout u-valign-middle u-container-layout-7"></div>' +
        '</div>' +
        '</div>';

        // Создаем новый див
        var oddDiv = document.createElement('div');
        oddDiv.className = 'u-size-30';
        var htmlContentOdd = '<div class="u-layout-row">' +
        '<!-- блок изображения -->' +
        '<div class="u-align-center u-container-style u-image u-image-round u-layout-cell u-radius u-size-15 u-image-2" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="" data-image-width="700" data-image-height="700">' +
          '<div class="u-container-layout u-valign-middle u-container-layout-5"></div>' +
        '</div>' +
        '<!-- блок текса -->' +
        '<div class="u-align-left u-container-style u-layout-cell u-size-15 u-layout-cell-6" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">' +
          '<div class="u-container-layout u-valign-middle u-container-layout-6">' +
            '<h4 class="u-text u-text-11" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">Round Bread</h4>' +
            '<p class="u-text u-text-12"> (2) Made with 100% whole grain flour and high in fiber.</p>' +
            '<h5 class="u-custom-font u-text u-text-font u-text-palette-5-base u-text-13">$​5.15</h5>' +
          '</div>' +
        '</div>' +
        '<!-- блок изображения -->' +
        '<div class="u-align-center u-container-style u-image u-image-round u-layout-cell u-radius-50 u-size-15 u-image-3" data-image-width="700" data-image-height="700">' +
          '<div class="u-container-layout u-valign-middle u-container-layout-7"></div>' +
        '</div>' +
        '<!-- блок текса -->' +
        '<div class="u-align-left u-container-style u-layout-cell u-size-15 u-layout-cell-4">' +
          '<div class="u-container-layout u-valign-middle u-container-layout-4">' +
            '<h4 class="u-text u-text-8" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">Farmers Loaf</h4>' +
            '<p class="u-text u-text-9"> Slow-fermented sourdough Rye studded with Kalamata.</p>' +
            '<h5 class="u-custom-font u-text u-text-font u-text-palette-5-base u-text-10">$​5.50</h5>' +
          '</div>' +
        '</div>' +
        '</div>';


        // Добавляем новый див в конец родительского элемента
        oddDiv.innerHTML = htmlContentOdd;
        parentElement.appendChild(oddDiv);
        
        // Добавляем новый див в конец родительского элемента
        evenDiv.innerHTML = htmlContentEven;
        parentElement.appendChild(evenDiv);

    }
});

