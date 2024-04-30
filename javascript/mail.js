document.addEventListener('DOMContentLoaded', function() {
    var sendSuccess = document.querySelector(".u-form-meal-success");
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
        let formData = new FormData(form);
        let response = await fetch('action/mail.php', {
            method: 'POST',
            body: formData
        });
        if (response.ok) {
            let result = await response.json();
            sendSuccess.style.display = "block";
            // на пару секунд
            // console.log(sendSuccess);
        }else{
            console.log("kk33");
            // на пару секунд
        }
    }
});
