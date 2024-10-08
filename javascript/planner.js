document.addEventListener('DOMContentLoaded', function() {

    var mealElement = document.querySelector("#u-meal");
    var sectionElement = document.querySelector(".u-section-3");
    var submitButtons = document.querySelectorAll('.u-inner-form');

    // Add event listener to document for form submission
    document.addEventListener('submit', function(e) {
        if (e.target.classList.contains('u-inner-form-planner')) {
            e.preventDefault();
            formSend(e);
        } else {
            console.log("Кнопка отправки формы НЕ имеет класса 'u-btn-submit'.");
        }
    });

    // Handle form submission
    async function formSend(e) {
        let form = e.target;
        let formData = new FormData(form);
        let response = await fetch('action/planner.php', {
            method: 'POST',
            body: formData
        });
        if (response.ok) {
            let result = await response.json();
            // сделать: "диета успешно создана"
            renderMeals(result.meals);
        }
    }

    // Render meals
    function renderMeals(meals) {
        if (mealElement && mealElement.innerHTML.trim().length < 1) {
            sectionElement.style.display = "block";
            meals.forEach(element => {
                var newDiv = document.createElement("div");
                newDiv.className = "u-align-center u-container-style u-image u-product-control u-products-item u-repeater-item u-image-1 u-meal-" + element.meals;
                newDiv.setAttribute("data-product-id", "2");
                newDiv.setAttribute("data-href", "index.php");
                newDiv.style.backgroundImage = 'url(images/meals/' + element.img + ')';
                var htmlContent = '<div class="u-container-layout u-similar-container u-container-layout-1">' +
                '<div class="custom-expanded u-black u-container-style u-group u-opacity u-opacity-50 u-group-1">' +
                '<div class="u-container-layout u-valign-top u-container-layout-2">' +
                '<form class="u-file-icon u-icon u-text-custom-color-1 u-icon-1 u-heart-form" data-href="https://nicepage.com">'+
                  '<input type="hidden" value="'+element["meals"]+'" name="dish">'+
                  '<input type="hidden" value="'+ Math.round(element["caloriesPerMeal"]) + '"name="caloriesPerMeal">'+
                  '<input type="submit" value="" name="IconHeart" class="IconHeart">'+
                '</form><!--product_title-->' +
                '<h4 class="u-align-center u-custom-font u-font-open-sans u-product-control u-text u-text-2">' +
                '<a class="u-product-title-link" href="index.php">'+element["name"]+'</a>' +
                '</h4><!--/product_title-->' +
                '<p class="u-align-center u-text u-text-3">' +
                '<span class="u-icon" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">' +
                '<svg class="u-svg-content" viewBox="0 0 511 511" style="width: 1em; height: 1em;"><path d="m114.59375 491.140625c-5.609375 0-11.179688-1.75-15.933594-5.1875-8.855468-6.417969-12.992187-17.449219-10.582031-28.09375l32.9375-145.089844-111.703125-97.960937c-8.210938-7.167969-11.347656-18.519532-7.976562-28.90625 3.371093-10.367188 12.542968-17.707032 23.402343-18.710938l147.796875-13.417968 58.433594-136.746094c4.308594-10.046875 14.121094-16.535156 25.023438-16.535156 10.902343 0 20.714843 6.488281 25.023437 16.511718l58.433594 136.769532 147.773437 13.417968c10.882813.980469 20.054688 8.34375 23.425782 18.710938 3.371093 10.367187.253906 21.738281-7.957032 28.90625l-111.703125 97.941406 32.9375 145.085938c2.414063 10.667968-1.726562 21.699218-10.578125 28.097656-8.832031 6.398437-20.609375 6.890625-29.910156 1.300781l-127.445312-76.160156-127.445313 76.203125c-4.308594 2.558594-9.109375 3.863281-13.953125 3.863281zm141.398438-112.875c4.84375 0 9.640624 1.300781 13.953124 3.859375l120.277344 71.9375-31.085937-136.941406c-2.21875-9.746094 1.089843-19.921875 8.621093-26.515625l105.472657-92.5-139.542969-12.671875c-10.046875-.917969-18.6875-7.234375-22.613281-16.492188l-55.082031-129.046875-55.148438 129.066407c-3.882812 9.195312-12.523438 15.511718-22.546875 16.429687l-139.5625 12.671875 105.46875 92.5c7.554687 6.613281 10.859375 16.769531 8.621094 26.539062l-31.0625 136.9375 120.277343-71.914062c4.308594-2.558594 9.109376-3.859375 13.953126-3.859375zm-84.585938-221.847656s0 .023437-.023438.042969zm169.128906-.0625.023438.042969c0-.023438 0-.023438-.023438-.042969zm0 0"></path></svg>' +
                '</span>' +
                '&nbsp;Белки: '+element["PFC"].substr(0, 2)+' %' +
                '</p>' +
                '<p class="u-align-center u-text u-text-4">' +
                '<span class="u-icon" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">' +
                '<svg class="u-svg-content" viewBox="0 0 511 511" style="width: 1em; height: 1em;"><path d="m114.59375 491.140625c-5.609375 0-11.179688-1.75-15.933594-5.1875-8.855468-6.417969-12.992187-17.449219-10.582031-28.09375l32.9375-145.089844-111.703125-97.960937c-8.210938-7.167969-11.347656-18.519532-7.976562-28.90625 3.371093-10.367188 12.542968-17.707032 23.402343-18.710938l147.796875-13.417968 58.433594-136.746094c4.308594-10.046875 14.121094-16.535156 25.023438-16.535156 10.902343 0 20.714843 6.488281 25.023437 16.511718l58.433594 136.769532 147.773437 13.417968c10.882813.980469 20.054688 8.34375 23.425782 18.710938 3.371093 10.367187.253906 21.738281-7.957032 28.90625l-111.703125 97.941406 32.9375 145.085938c2.414063 10.667968-1.726562 21.699218-10.578125 28.097656-8.832031 6.398437-20.609375 6.890625-29.910156 1.300781l-127.445312-76.160156-127.445313 76.203125c-4.308594 2.558594-9.109375 3.863281-13.953125 3.863281zm141.398438-112.875c4.84375 0 9.640624 1.300781 13.953124 3.859375l120.277344 71.9375-31.085937-136.941406c-2.21875-9.746094 1.089843-19.921875 8.621093-26.515625l105.472657-92.5-139.542969-12.671875c-10.046875-.917969-18.6875-7.234375-22.613281-16.492188l-55.082031-129.046875-55.148438 129.066407c-3.882812 9.195312-12.523438 15.511718-22.546875 16.429687l-139.5625 12.671875 105.46875 92.5c7.554687 6.613281 10.859375 16.769531 8.621094 26.539062l-31.0625 136.9375 120.277343-71.914062c4.308594-2.558594 9.109376-3.859375 13.953126-3.859375zm-84.585938-221.847656s0 .023437-.023438.042969zm169.128906-.0625.023438.042969c0-.023438 0-.023438-.023438-.042969zm0 0"></path></svg>' +
                '</span>' +
                '&nbsp;Жиры: '+element["PFC"].substr(3, 2)+' %' +
                '</p>' +
                '<p class="u-align-center u-text u-text-5">' +
                '<span class="u-icon">' +
                '<svg class="u-svg-content" viewBox="0 0 511 511" style="width: 1em; height: 1em;"><path d="m114.59375 491.140625c-5.609375 0-11.179688-1.75-15.933594-5.1875-8.855468-6.417969-12.992187-17.449219-10.582031-28.09375l32.9375-145.089844-111.703125-97.960937c-8.210938-7.167969-11.347656-18.519532-7.976562-28.90625 3.371093-10.367188 12.542968-17.707032 23.402343-18.710938l147.796875-13.417968 58.433594-136.746094c4.308594-10.046875 14.121094-16.535156 25.023438-16.535156 10.902343 0 20.714843 6.488281 25.023437 16.511718l58.433594 136.769532 147.773437 13.417968c10.882813.980469 20.054688 8.34375 23.425782 18.710938 3.371093 10.367187.253906 21.738281-7.957032 28.90625l-111.703125 97.941406 32.9375 145.085938c2.414063 10.667968-1.726562 21.699218-10.578125 28.097656-8.832031 6.398437-20.609375 6.890625-29.910156 1.300781l-127.445312-76.160156-127.445313 76.203125c-4.308594 2.558594-9.109375 3.863281-13.953125 3.863281zm141.398438-112.875c4.84375 0 9.640624 1.300781 13.953124 3.859375l120.277344 71.9375-31.085937-136.941406c-2.21875-9.746094 1.089843-19.921875 8.621093-26.515625l105.472657-92.5-139.542969-12.671875c-10.046875-.917969-18.6875-7.234375-22.613281-16.492188l-55.082031-129.046875-55.148438 129.066407c-3.882812 9.195312-12.523438 15.511718-22.546875 16.429687l-139.5625 12.671875 105.46875 92.5c7.554687 6.613281 10.859375 16.769531 8.621094 26.539062l-31.0625 136.9375 120.277343-71.914062c4.308594-2.558594 9.109376-3.859375 13.953126-3.859375zm-84.585938-221.847656s0 .023437-.023438.042969zm169.128906-.0625.023438.042969c0-.023438 0-.023438-.023438-.042969zm0 0"></path></svg>' +
                '</span>' +
                '&nbsp;Углев.: '+element["PFC"].substr(6, 2)+' %' +
                '</p>' +
                '<p class="u-align-center u-text u-text-8">'+
                '<span class="u-icon u-icon-7"><svg class="u-svg-content" viewBox="0 0 55.867 55.867" x="0px" y="0px" style="width: 1em; height: 1em;"><path d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558 s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024 l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506 c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017 l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z"></path></svg>'+
                '</span>' +
                '&nbsp;Энерг. ценность: '+ Math.round(element["caloriesPerMeal"]) + ' ккал'+
                  '</p>'+
                '</div>' +
                '</div>' +
                '</div>';
                newDiv.innerHTML = htmlContent;
                mealElement.appendChild(newDiv);
            });
        }
    }
});
