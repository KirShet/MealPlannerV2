document.addEventListener('DOMContentLoaded', function() {
    // Получаем все элементы с классом "u-field-input", содержащие радио-инпуты
    var inputElements = document.querySelectorAll(".u-field-input");

    // Перебираем все найденные элементы и добавляем обработчик события изменения состояния
    inputElements.forEach(function(parentElement) {

        parentElement.addEventListener('change', function(event) {
            var target = event.target; // Получаем целевой элемент, который вызвал событие
            
            // Получаем родительскую форму для элемента радиокнопки
            var form = target.closest('form');

            // Проверяем, что целевой элемент является радио-инпутом
            if (target.type === 'radio') {
                // // Выводим значение выбранного радио-инпута
                // console.log(target);
                // formSend(target);

                 // Создаем объект FormData для сбора данных формы
                let formData = new FormData(form);

                // Добавляем к данным значение выбранного радио-инпута
                formData.append(target.name, target.value);
                console.log(formData);
                // Отправляем данные формы на сервер
                formSend(formData);

                async function formSend(formData) {
                    let response = await fetch('action/nutrient_table.php', {
                        method: 'POST',
                        body: formData
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

        var blocksToDelete = document.querySelectorAll(".possible-to-delete");
        blocksToDelete.forEach(function(block) {
          block.parentNode.removeChild(block);
        });

        function addLeadingZero(number) {
            if (number < 10) {
                return '0' + number;
            } else {
                return number.toString();
            }
        }
        
        function createContentBlock(title, prot, fats, carb) {
            // Преобразование чисел, чтобы добавить ведущий ноль, если необходимо
            prot = addLeadingZero(prot);
            fats = addLeadingZero(fats);
            carb = addLeadingZero(carb);
        
            return `
            <div class="u-align-left u-container-style u-layout-cell u-size-15 u-layout-cell-4">
              <div class="u-container-layout u-valign-middle u-container-layout-4">
                <h4 class="u-text u-text-8" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""> ${title}</h4>
                <p class="u-text u-text-9"> Энергетическая ценность в 100 гр: </p>
                <h5 class="u-custom-font u-text u-text-font u-text-palette-5-base u-text-10">
                <span class="u-icon" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><svg class="u-svg-content" viewBox="0 0 511 511" style="width: 1em; height: 1em;"><path d="m114.59375 491.140625c-5.609375 0-11.179688-1.75-15.933594-5.1875-8.855468-6.417969-12.992187-17.449219-10.582031-28.09375l32.9375-145.089844-111.703125-97.960937c-8.210938-7.167969-11.347656-18.519532-7.976562-28.90625 3.371093-10.367188 12.542968-17.707032 23.402343-18.710938l147.796875-13.417968 58.433594-136.746094c4.308594-10.046875 14.121094-16.535156 25.023438-16.535156 10.902343 0 20.714843 6.488281 25.023437 16.511718l58.433594 136.769532 147.773437 13.417968c10.882813.980469 20.054688 8.34375 23.425782 18.710938 3.371093 10.367187.253906 21.738281-7.957032 28.90625l-111.703125 97.941406 32.9375 145.085938c2.414063 10.667968-1.726562 21.699218-10.578125 28.097656-8.832031 6.398437-20.609375 6.890625-29.910156 1.300781l-127.445312-76.160156-127.445313 76.203125c-4.308594 2.558594-9.109375 3.863281-13.953125 3.863281zm141.398438-112.875c4.84375 0 9.640624 1.300781 13.953124 3.859375l120.277344 71.9375-31.085937-136.941406c-2.21875-9.746094 1.089843-19.921875 8.621093-26.515625l105.472657-92.5-139.542969-12.671875c-10.046875-.917969-18.6875-7.234375-22.613281-16.492188l-55.082031-129.046875-55.148438 129.066407c-3.882812 9.195312-12.523438 15.511718-22.546875 16.429687l-139.5625 12.671875 105.46875 92.5c7.554687 6.613281 10.859375 16.769531 8.621094 26.539062l-31.0625 136.9375 120.277343-71.914062c4.308594-2.558594 9.109376-3.859375 13.953126-3.859375zm-84.585938-221.847656s0 .023437-.023438.042969zm169.128906-.0625.023438.042969c0-.023438 0-.023438-.023438-.042969zm0 0"></path></svg></span>
                &nbsp;Белки: ${prot} гр.</h5>
                <h5 class="u-custom-font u-text u-text-font u-text-palette-5-base u-text-10">
                <span class="u-icon" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><svg class="u-svg-content" viewBox="0 0 511 511" style="width: 1em; height: 1em;"><path d="m114.59375 491.140625c-5.609375 0-11.179688-1.75-15.933594-5.1875-8.855468-6.417969-12.992187-17.449219-10.582031-28.09375l32.9375-145.089844-111.703125-97.960937c-8.210938-7.167969-11.347656-18.519532-7.976562-28.90625 3.371093-10.367188 12.542968-17.707032 23.402343-18.710938l147.796875-13.417968 58.433594-136.746094c4.308594-10.046875 14.121094-16.535156 25.023438-16.535156 10.902343 0 20.714843 6.488281 25.023437 16.511718l58.433594 136.769532 147.773437 13.417968c10.882813.980469 20.054688 8.34375 23.425782 18.710938 3.371093 10.367187.253906 21.738281-7.957032 28.90625l-111.703125 97.941406 32.9375 145.085938c2.414063 10.667968-1.726562 21.699218-10.578125 28.097656-8.832031 6.398437-20.609375 6.890625-29.910156 1.300781l-127.445312-76.160156-127.445313 76.203125c-4.308594 2.558594-9.109375 3.863281-13.953125 3.863281zm141.398438-112.875c4.84375 0 9.640624 1.300781 13.953124 3.859375l120.277344 71.9375-31.085937-136.941406c-2.21875-9.746094 1.089843-19.921875 8.621093-26.515625l105.472657-92.5-139.542969-12.671875c-10.046875-.917969-18.6875-7.234375-22.613281-16.492188l-55.082031-129.046875-55.148438 129.066407c-3.882812 9.195312-12.523438 15.511718-22.546875 16.429687l-139.5625 12.671875 105.46875 92.5c7.554687 6.613281 10.859375 16.769531 8.621094 26.539062l-31.0625 136.9375 120.277343-71.914062c4.308594-2.558594 9.109376-3.859375 13.953126-3.859375zm-84.585938-221.847656s0 .023437-.023438.042969zm169.128906-.0625.023438.042969c0-.023438 0-.023438-.023438-.042969zm0 0"></path></svg></span>
                &nbsp;
                Жиры: ${fats} гр.</h5>
                <h5 class="u-custom-font u-text u-text-font u-text-palette-5-base u-text-10">
                <span class="u-icon" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><svg class="u-svg-content" viewBox="0 0 511 511" style="width: 1em; height: 1em;"><path d="m114.59375 491.140625c-5.609375 0-11.179688-1.75-15.933594-5.1875-8.855468-6.417969-12.992187-17.449219-10.582031-28.09375l32.9375-145.089844-111.703125-97.960937c-8.210938-7.167969-11.347656-18.519532-7.976562-28.90625 3.371093-10.367188 12.542968-17.707032 23.402343-18.710938l147.796875-13.417968 58.433594-136.746094c4.308594-10.046875 14.121094-16.535156 25.023438-16.535156 10.902343 0 20.714843 6.488281 25.023437 16.511718l58.433594 136.769532 147.773437 13.417968c10.882813.980469 20.054688 8.34375 23.425782 18.710938 3.371093 10.367187.253906 21.738281-7.957032 28.90625l-111.703125 97.941406 32.9375 145.085938c2.414063 10.667968-1.726562 21.699218-10.578125 28.097656-8.832031 6.398437-20.609375 6.890625-29.910156 1.300781l-127.445312-76.160156-127.445313 76.203125c-4.308594 2.558594-9.109375 3.863281-13.953125 3.863281zm141.398438-112.875c4.84375 0 9.640624 1.300781 13.953124 3.859375l120.277344 71.9375-31.085937-136.941406c-2.21875-9.746094 1.089843-19.921875 8.621093-26.515625l105.472657-92.5-139.542969-12.671875c-10.046875-.917969-18.6875-7.234375-22.613281-16.492188l-55.082031-129.046875-55.148438 129.066407c-3.882812 9.195312-12.523438 15.511718-22.546875 16.429687l-139.5625 12.671875 105.46875 92.5c7.554687 6.613281 10.859375 16.769531 8.621094 26.539062l-31.0625 136.9375 120.277343-71.914062c4.308594-2.558594 9.109376-3.859375 13.953126-3.859375zm-84.585938-221.847656s0 .023437-.023438.042969zm169.128906-.0625.023438.042969c0-.023438 0-.023438-.023438-.042969zm0 0"></path></svg></span>
                &nbsp;
                Углев.: ${carb} гр.</h5>
              </div>
            </div>`;
        }
        
        function createImageBlock(img) {
            return `
            <div class="u-align-center u-container-style u-image u-image-round u-layout-cell u-radius u-size-15 u-image-2" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="" data-image-width="700" data-image-height="700" style="
            background-image: url(images/meals/${img});
            min-height: 317px;
            background-position: 50% 50%;
            --radius: 50px;
        ">
              <div class="u-container-layout u-valign-middle u-container-layout-5"></div>
            </div>`;
        }

        function createRow(content1, img1, content2=' ', img2=' ') {
            return `
            <div class="u-layout-row possible-to-delete">${content1}${img1}${content2}${img2}</div>`;
        }

        // // Создаем новый див
        // var evenDiv = document.createElement('div');
        // evenDiv.className = 'u-size-30';
        // var htmlContentEven = '<div class="u-layout-row">' +
        // '<!-- блок текса -->' +
        // '<div class="u-align-left u-container-style u-layout-cell u-size-15 u-layout-cell-4">' +
        //   '<div class="u-container-layout u-valign-middle u-container-layout-4">' +
        //     '<h4 class="u-text u-text-8" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">Farmers Loaf</h4>' +
        //     '<p class="u-text u-text-9"> (1) Slow-fermented sourdough Rye studded with Kalamata.</p>' +
        //     '<h5 class="u-custom-font u-text u-text-font u-text-palette-5-base u-text-10">$​5.50</h5>' +
        //   '</div>' +
        // '</div>' +
        // '<!-- блок изображения -->' +
        // '<div class="u-align-center u-container-style u-image u-image-round u-layout-cell u-radius u-size-15 u-image-2" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="" data-image-width="700" data-image-height="700">' +
        //   '<div class="u-container-layout u-valign-middle u-container-layout-5"></div>' +
        // '</div>' +
        // '<!-- блок текса -->' +
        // '<div class="u-align-left u-container-style u-layout-cell u-size-15 u-layout-cell-6" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">' +
        //   '<div class="u-container-layout u-valign-middle u-container-layout-6">' +
        //     '<h4 class="u-text u-text-11" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">Round Bread</h4>' +
        //     '<p class="u-text u-text-12"> Made with 100% whole grain flour and high in fiber.</p>' +
        //     '<h5 class="u-custom-font u-text u-text-font u-text-palette-5-base u-text-13">$​5.15</h5>' +
        //   '</div>' +
        // '</div>' +
        // '<!-- блок изображения -->' +
        // '<div class="u-align-center u-container-style u-image u-image-round u-layout-cell u-radius-50 u-size-15 u-image-3" data-image-width="700" data-image-height="700">' +
        //   '<div class="u-container-layout u-valign-middle u-container-layout-7"></div>' +
        // '</div>' +
        // '</div>';

        // // Создаем новый див
        // var oddDiv = document.createElement('div');
        // oddDiv.className = 'u-size-30';
        // var htmlContentOdd = '<div class="u-layout-row">' +
        // '<!-- блок изображения -->' +
        // '<div class="u-align-center u-container-style u-image u-image-round u-layout-cell u-radius u-size-15 u-image-2" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="" data-image-width="700" data-image-height="700">' +
        //   '<div class="u-container-layout u-valign-middle u-container-layout-5"></div>' +
        // '</div>' +
        // '<!-- блок текса -->' +
        // '<div class="u-align-left u-container-style u-layout-cell u-size-15 u-layout-cell-6" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">' +
        //   '<div class="u-container-layout u-valign-middle u-container-layout-6">' +
        //     '<h4 class="u-text u-text-11" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">Round Bread</h4>' +
        //     '<p class="u-text u-text-12"> (2) Made with 100% whole grain flour and high in fiber.</p>' +
        //     '<h5 class="u-custom-font u-text u-text-font u-text-palette-5-base u-text-13">$​5.15</h5>' +
        //   '</div>' +
        // '</div>' +
        // '<!-- блок изображения -->' +
        // '<div class="u-align-center u-container-style u-image u-image-round u-layout-cell u-radius-50 u-size-15 u-image-3" data-image-width="700" data-image-height="700">' +
        //   '<div class="u-container-layout u-valign-middle u-container-layout-7"></div>' +
        // '</div>' +
        // '<!-- блок текса -->' +
        // '<div class="u-align-left u-container-style u-layout-cell u-size-15 u-layout-cell-4">' +
        //   '<div class="u-container-layout u-valign-middle u-container-layout-4">' +
        //     '<h4 class="u-text u-text-8" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">Farmers Loaf</h4>' +
        //     '<p class="u-text u-text-9"> Slow-fermented sourdough Rye studded with Kalamata.</p>' +
        //     '<h5 class="u-custom-font u-text u-text-font u-text-palette-5-base u-text-10">$​5.50</h5>' +
        //   '</div>' +
        // '</div>' +
        // '</div>';

// 
// let items = ['a', 'b', 'c', 'd', 'e']; // Добавлены дополнительные элементы
// for (let i = 0; i < items.length; i += 2) {
//     console.log(items[i], items[i + 1]);
// }


// 2
// let items = ['a', 'b', 'c', 'd', 'e']; // Добавлены дополнительные элементы
for (let i = 0; i < result.length; i += 2) {
    if (result[i + 1] !== undefined) {
        console.log(result[i]['name'], result[i + 1]['name']);
        // 1
        // Находим родительский элемент, к которому нужно добавить новый див
        var parentElement = document.querySelector('.u-layout-col');
        // Проверяем наличие родительского элемента
        if (!parentElement) {
            console.error('Parent element not found');
            return;
        }
        // Получаем количество дочерних элементов родительского элемента
        var childCount = parentElement.children.length;
        // 
        // 2.5 и 2.5.1
        // Проверяем, чётное ли количество дочерних элементов
        if (childCount % 2 === 0) {
            var newDiv = document.createElement('div');
            newDiv.className = 'u-size-30';
            var htmlContent = createRow(
                createImageBlock(result[i]['img']),
                createContentBlock(result[i]['name'], result[i]['prot_per_100_grams'], result[i]['fats_per_100_grams'], result[i]['carb_per_100_grams']),
                createImageBlock(result[i + 1]['img']),
                createContentBlock(result[i + 1]['name'], result[i + 1]['prot_per_100_grams'], result[i + 1]['fats_per_100_grams'], result[i + 1]['carb_per_100_grams'])
            );
            // // Добавляем новый див в конец родительского элемента
            // oddDiv.innerHTML = htmlContentOdd;
            // parentElement.appendChild(oddDiv);
            // console.log("evenDiv");
        } else {
            // Создаем новый див для четных и нечетных элементов
            var newDiv = document.createElement('div');
            newDiv.className = 'u-size-30';
            var htmlContent = createRow(
                createContentBlock(result[i]['name'], result[i]['prot_per_100_grams'], result[i]['fats_per_100_grams'], result[i]['carb_per_100_grams']),
                createImageBlock(result[i]['img']),
                createContentBlock(result[i + 1]['name'], result[i + 1]['prot_per_100_grams'], result[i + 1]['fats_per_100_grams'], result[i + 1]['carb_per_100_grams']),
                createImageBlock(result[i + 1]['img'])
);
            // // Добавляем новый див в начало родительского элемента
            // evenDiv.innerHTML = htmlContentEven;
            // parentElement.appendChild(evenDiv);
            // console.log("oddDiv");
        }
    } else {
        console.log(result[i], "Нет переменной");
        if (childCount % 2 === 0) {
            var newDiv = document.createElement('div');
            newDiv.className = 'u-size-30';
            var htmlContent = createRow(
                createContentBlock(result[i]['name'], result[i]['prot_per_100_grams'], result[i]['fats_per_100_grams'], result[i]['carb_per_100_grams']),
                createImageBlock(result[i]['img'])
            );
            // // Добавляем новый див в конец родительского элемента
            // oddDiv.innerHTML = htmlContentOdd;
            // parentElement.appendChild(oddDiv);
            // console.log("evenDiv");
        } else {
            // Создаем новый див для четных и нечетных элементов
            var newDiv = document.createElement('div');
            newDiv.className = 'u-size-30';
            var htmlContent = createRow(
                createImageBlock(result[i]['img']),
                createContentBlock(result[i]['name'], result[i]['prot_per_100_grams'], result[i]['fats_per_100_grams'], result[i]['carb_per_100_grams'])
);
            // // Добавляем новый див в начало родительского элемента
            // evenDiv.innerHTML = htmlContentEven;
            // parentElement.appendChild(evenDiv);
            // console.log("oddDiv");
        }
    }
    // 3
        // Добавляем новый див в конец родительского элемента
        newDiv.innerHTML = htmlContent;
        parentElement.appendChild(newDiv);
}

    }
});

