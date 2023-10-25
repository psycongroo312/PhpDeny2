<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="http://localhost:8000/register.php" method="POST">
    

        <label for="username">Имя:</label>
        <input type="text" name="name">

        <label for="number">Номер:</label>
        <input type="number" name="number">

        <label for="email">Почта</label>
        <input type="email" name="email">

        <label for="date">Дата отправки</label>
        <input type="date" name="date">

        <label for="password">Пароль:</label>
        <input type="password" name="password"></br>

        <input type="checkbox"></br>

        <input type="submit" value="Отправить">


    </form>
</body>
</html>