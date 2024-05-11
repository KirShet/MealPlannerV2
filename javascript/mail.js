document.addEventListener('DOMContentLoaded', function() {
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
            for (let input of form.elements) {
                if (input.tagName === "INPUT") {
                    console.log(`${input.email}: ${input.password}`);
                }
            }
        let formData = new FormData(form);
        let response = await fetch('action/mail.php', {
            method: 'POST',
            body: formData
        });
        if (response.ok) {
            let result = await response.json();
            console.log(result);
            if (result.startsWith("Email sent successfully")) {
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
                    }, 50); // Интервал между изменениями opacity (в миллисекундах)
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
                }, 50); // Интервал между изменениями opacity (в миллисекундах)
            }, 2000);
            }
            console.log(result);
        } else {
            console.log("Лох");
            
        }
    }
});
