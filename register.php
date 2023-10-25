<?php

header("http://localhost:8000/register.php");


if(isset($_POST['name'], $_POST['number'], $_POST['email'], $_POST['date'], $_POST['password'])){

    echo 'Ваше имя: ', $_POST['name'], '<br>';
    echo 'Ваш номер: ', $_POST['number'], '<br>';
    echo 'Ваша почта: ', $_POST['email'], '<br>';
    echo 'Дата: ', $_POST['date'], '<br>';
    echo 'Ваш пароль: ', $_POST['password'], '<br>';


};





// }