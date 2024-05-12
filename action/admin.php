<?php

include '../components/includes.php';

// Проверяем, был ли отправлен POST запрос
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Проверяем, существует ли переменная $_POST['meal']
        // Проверка на совпадение пароля и его повторного ввода
            if ($_POST['password'] === $_POST['repeat_password']) {
                // Генерация хэша пароля
                // $hashed_password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $hashed_password = $_POST['password'];
    // md5($values['password'])
                // Подготавливаем запрос для вставки данных в таблицу users
                $stmt = $dbh->prepare("INSERT INTO users (nickname, email, password) VALUES (:nickname, :email, :password)");
                
                // Привязываем значения переменных к параметрам запроса
                $stmt->bindParam(':nickname', explode('@', $_POST['email'])[0]);
                $stmt->bindParam(':email', $_POST['email']);
                $stmt->bindParam(':password', $hashed_password);
    
                // Выполняем запрос
                $stmt->execute();
    
                // Проверяем, была ли выполнена вставка успешно
                if ($stmt->rowCount() > 0) {
                    // echo "Данные успешно добавлены в таблицу users.";
                } else {
                    // echo "Произошла ошибка при добавлении данных в таблицу users.";
                }
            } else {
                // echo "Пароли не совпадают.";
            }
} else {
    // echo "Ты просто ввёл путь.";
}
