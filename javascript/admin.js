document.addEventListener('DOMContentLoaded', function() {
    // Add event listener to document for form submission
    document.addEventListener('submit', function(e) {
        if (e.target.classList.contains('u-inner-form-mail')) {
            sessionGet();
        } else {
            console.log("Кнопка отправки формы НЕ имеет класса 'u-inner-form-mail'.");
        }
    });

    async function sessionGet() {
        let response = await fetch('action/session.php', {
            method: 'POST',
            body: " "
        });
        if (response.ok) {
            if (!response.ok) {
                throw new Error('Network response was not ok.');
            }
        
            let data = await response.json();
        
            console.log('Данные:', data);
        
            if (data === "admin") {
                setTimeout(function() {
                    window.location.href = 'admin_meals.php';
                }, 5000);
            } else {
                console.log('Сессия доступа не администратора');
            }
        }else{
            console.log('Данные:', data);
        }
            // console.error('Возникла ошибка:', error);

    }
});