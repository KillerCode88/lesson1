<?php
$my_name = "Антон";
$age = 29;
$mail = "saper_234@mail.ru";
$city = "Санкт-Петербург";
$about = "Учусь на web-разработчика";

if ($my_name) {
    ?>
    <table border="0" width="40%" >
        <h3>Коротко обо мне:</h3>
        <tr>
            <td>Имя</td>
            <td><?= $my_name ?></td>
        </tr>
        <tr>
            <td>Возраст</td>
            <td><?= $age ?></td>
        </tr>
        <tr>
            <td>Эл. почта</td>
            <td><a href="mailto:saper_234@mail.ru">saper_234@mail.ru</a></td>
        </tr>
        <tr>
            <td>Город</td>
            <td><?= $city ?></td></tr>
        <tr>
            <td>Обо мне</td>
            <td><?= $about ?></td>
        </tr>

    </table>
<?php }