<title>Форма для сбора информации.</title>

<form action="index.php" method="get">
    <h1>Введите ваши данные и нажмите отправить:</h1>
    Введите вашу фамилию: <input type="text" name="surname" /> 
    <br /> 
    <br />
    Введите ваше имя: <input type="text" name="name" />
    <br />
    <br />
    Введите ваш возраст: <input type="text" name="age" />
    <br />
    <br />
    Введите город проживания: <input type="text" name="city" />
    <br />
    <br />
    Введите номер телефона: <input type="text" name="telephone" />
    <br />
    <br />
    <input type="submit" value="Отправить" name="submit" />
</form>


<?php
$surname = $_GET["surname"];
$name = $_GET["name"];
$age = $_GET["age"];
$city = $_GET["city"];
$telephone = $_GET["telephone"];
$file = fopen("./information.txt", "a+"); //открываем файл для записи.
fwrite($file, $surname . $name . $age . $city . $telephone); //объединяем строки с помощью точки.
fclose($file); // закрываем файл.
?>
