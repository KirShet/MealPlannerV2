document.addEventListener('DOMContentLoaded', function() {
    // Получаем все элементы с классом "u-field-input", содержащие радио-инпуты
  document.addEventListener('submit', function(e) {

    if (e.target.classList.contains('u-inner-form')) {
  
      e.preventDefault();
      formSend(e);
            // console.log(e);
    }else {
      console.log("Кнопка отправки формы НЕ имеет класса 'u-btn-submit'.");
    }
  });
      async function formSend(e) {
        let form = e.target;
        let formData = new FormData(form);
        let response = await fetch('action/admin_dish.php',{
          method: 'POST',
          body: formData
        });
        if(response.ok){
          let result = await response.json();
          console.log(result);
        }
      }
});