document.addEventListener('DOMContentLoaded', function() {
    // Функция для подсказки из данных сессионного хранилища
function suggestFromSessionStorage(input) {
    var data = sessionStorage.getItem("email"); // Получаем данные из сессионного хранилища
    if (data) {
        console.log(input);
        var suggestions = ['jj']; // Создаем массив для подсказок
        suggestions.push(data); // Добавляем данные из сессии в массив подсказок
        input.setAttribute("list", "suggestions"); // Устанавливаем атрибут list для инпута
        var dataList = document.createElement("datalist"); // Создаем элемент datalist
        dataList.id = "suggestions"; // Устанавливаем id для элемента datalist
        suggestions.forEach(function(item) {
            var option = document.createElement("option"); // Создаем элемент option для подсказки
            option.value = item; // Устанавливаем значение подсказки
            dataList.appendChild(option); // Добавляем подсказку в datalist
        });
        document.body.appendChild(dataList); // Добавляем datalist в body
    }
}
var password = document.querySelector("#name-e4cc");
var email = document.querySelector("#email-e4cc");
suggestFromSessionStorage(password);
suggestFromSessionStorage(email);

    var sendSuccess = document.querySelector(".u-form-meal-success");
    var sendMessage = document.querySelector(".u-form-meal-message");


    // Add event listener to document for form submission
    document.addEventListener('submit', function(e) {
        if (e.target.classList.contains('u-inner-form-mail')) {
            e.preventDefault();
            formSend(e);
        } else {
            console.log("Кнопка отправки формы НЕ имеет класса 'u-btn-submit'.");
        }
    });

    // Handle form submission
    async function formSend(e) {
        let form = e.target;
                // Получаем данные из объекта e.target и выводим их через console.log

                console.log(form.elements.email.value);
                console.log(form.elements.password.value);
            // Проверяем, поддерживается ли сессионное хранилище
            if (typeof(Storage) !== "undefined") {
                // Сохраняем данные в сессионное хранилище
                sessionStorage.setItem("email", form.elements.email.value);
                sessionStorage.setItem("password", form.elements.password.value);
                console.log("Данные успешно сохранены в сессионное хранилище!");
            } else {
                console.log("Извините, ваш браузер не поддерживает сессионное хранилище.");
            }
        let formData = new FormData(form);
        let response = await fetch('action/mail.php', {
            method: 'POST',
            body: formData
        });
        if (response.ok) {
            let result = await response.json();
            console.log(result);
            if (/Email sent successfully/.test(result)) {
                console.log("Email sent successfully");
                sendMessage.style.display = "none";
                // Действия, если сообщение начинается с "Email sent successfully"
                sendSuccess.style.display = "block";
                // Установить opacity на 1
                sendSuccess.style.opacity = 1;
                // Скрыть через 2 секунды
                setTimeout(() => {
                    // Уменьшить opacity до 0 медленно
                    let opacity = 1;
                    let timer = setInterval(() => {
                        if (opacity <= 0) {
                            clearInterval(timer);
                            sendSuccess.style.display = "none";
                        } else {
                            sendSuccess.style.opacity = opacity;
                            opacity -= 0.01; // Шаг изменения opacity
                        }
                    }, 30); // Интервал между изменениями opacity (в миллисекундах)
                }, 2000);
            } else if (result.startsWith("Message could not be sent")) {
                sendSuccess.style.display = "none";
            // Действия, если сообщение начинается с "Email sent successfully"
            sendMessage.style.display = "block";
            // Установить opacity на 1
            sendMessage.style.opacity = 1;
            // Скрыть через 2 секунды
            setTimeout(() => {
                // Уменьшить opacity до 0 медленно
                let opacity = 1;
                let timer = setInterval(() => {
                    if (opacity <= 0) {
                        clearInterval(timer);
                        sendMessage.style.display = "none";
                    } else {
                        sendMessage.style.opacity = opacity;
                        opacity -= 0.01; // Шаг изменения opacity
                    }
                }, 10); // Интервал между изменениями opacity (в миллисекундах)
            }, 100);
            }
            console.log(result);
        } else {
            console.log("Лох");
            
        }
    }
});
