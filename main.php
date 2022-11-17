<?php
$title="Cat breeds"; //title, который название страницы
date_default_timezone_set("Europe/Moscow");
$today = date('d.m.Y в H-i:s'); //дата, время
?>
<head>
    <title>Лабораторная работа 1</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">  <!--подключение стилей css -->
    <link rel="preconnect" href="https://fonts.googleapis.com"> <!--подключение шрифтов -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow&display=swap" rel="stylesheet"> 
    <script src="/lab6/javascript.js"></script>

</head>

<body>
    <header>
        <p><div id = "catalog_cat"><a href = "main.html">КАТАЛОГ ПОРОД КОШЕК</a> </div>
        <div id = "main_search">Главная
        Поиск
        <a href = "login.html">Войти</a></div></p>
    </header>

    <div class = "main">
        <section class="fun">
            <h1>Функция возведения в степень</h1>
                <p id="pow">2^3 = </p>
                    <button onclick="pow(2, 3)">Push</button>
        </section>

        <section class="fun">
            <h1>Функция нахождения НОД</h1>
                <p id="gsd">НОД (6, 10) = </p>
                    <button onclick="gsd(10, 6)">Push</button>  
        </section> 
        
        <section class="fun">
            <h1>Функция нахождения наименьшей цифры числа</h1>  
                <p id="minDigit">Минимальная цифра в 11 - это </p>
                    <button onclick="minDigit(11)">Push</button> 
        </section> 

        <section class="fun">
            <h1>Плюрализация</h1>
                <p id="pluralizeRecords">Сколько записей было найдено? </p>
                    <button onclick="pluralizeRecords(1)">Push</button> 
        </section>  
        
        <section class="fun">
            <h1>Числа Фибоначчи</h1>
                <p id="fibb">6-ое число Фибоначчи - это </p>
                    <button onclick="fibb(52)">Push</button>
        </section>  
    </div>
    
    <footer>
        <p>Контактная информация</p>
        <p>Горностаева Екатерина 211-362</p>
        <p>Почта: kate.gornostaeva@inbox.ru </p>
        <p><a href="feedback.html">Обратная связь</a></p>
    </footer>
</body>


