<?php
session_start();
// мысль-стратегия-вера в себе-действие-результат
// (confirmation bias),
// страх перед возможностью привлечения нежелательных событий в свою жизнь только за счет своих мыслей
// if(isset($_SESSION['access']) && $_SESSION['access'] === 'admin'):
//     // отправить tru, чтоб можно было считывать с помощью if (response.ok) {}
//     echo json_encode("");
// else:
//     // отправить fallse, чтоб можно было считывать с помощью if (!response.ok) {}
//     echo json_encode("");
// endif;

if(isset($_SESSION['access']) && $_SESSION['access'] == 'admin'):
    echo json_encode($_SESSION['access']);
else:
    echo json_encode('user');
endif;