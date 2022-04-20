<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pages</title>
        <style type="text/css">
            body {
                margin: 0;
                font-family: sans-serif;
                font-size: 16px;
                line-height: 1.4;
                box-sizing: border-box;
            }
            a {
                display: inline-block;
            }
            a:focus {
                color: chocolate;
            }
            div {
                padding-left: 40px;
                margin-bottom: 20px;
            }
            img {
                min-width: 200px;
                width: 200px;
            }
            ul {
                padding-left: 15px;
                list-style: none;
            }
            li {
                position: relative;
                margin-bottom: 10px;
                padding-left: 15px;
            }
            li:before {
                position: absolute;
                content: "";
                top: 7px;
                left: 0;
                width: 5px;
                height: 5px;
                border-radius: 50%;
                background-color: #000;
            }
            .logo {
                padding: 15px 40px;
            }
            .logo img {

            }
        </style>
    </head>

    <body>
    <div class="logo">
        <img src="/build/img/logo-rudn-desktop.png" alt="">
    </div>

    <div>
        <ul>
            <li><a href="/build/index.php" target="_blank">Главная</a></li>
            <br>
            <li><a href="/build/about-main.php" target="_blank">О нас - главная</a></li>
            <li><a href="/build/about-history.php" target="_blank">О нас - история</a></li>
            <li><a href="/build/about-structure.php" target="_blank">О нас - структура</a></li>
            <li><a href="/build/about-department.php" target="_blank">О нас - кафедра</a></li>
            <li><a href="/build/about-department-program.php" target="_blank">О нас - одна программа</a></li>
            <br>
            <li><a href="/build/about-directorate.php" target="_blank">О нас - дирекция</a></li>
            <li><a href="/build/about-directorate-person.php" target="_blank">О нас - дирекция/один человек (сделать форму) (не готово)</a></li>
            <li><a href="/build/about-academic-council.php" target="_blank">О нас - ученый совет</a></li>
            <li><a href="/build/about-academic-council-person.php" target="_blank">О нас - ученый совет/один человек (не готово)</a></li>
            <li><a href="/build/about-employees.php" target="_blank">О нас - сотрудники (сделать фильтр) (не готово)</a></li>
            <li><a href="/build/about-employees-person.php" target="_blank">О нас - сотрудники/один человек (не готово)</a></li>
            <li><a href="/build/about-graduates.php" target="_blank">О нас - выпускники (не готово)</a></li>
            <li><a href="/build/about-graduates-person.php" target="_blank">О нас - выпускники/один человек (не готово)</a></li>
            <li><a href="/build/about-best-graduates.php" target="_blank">О нас - лучшие выпускники (не готово)</a></li>
            <li><a href="/build/about-best-graduates-person.php" target="_blank">О нас - лучшие выпускники/один человек (не готово)</a></li>
            <li><a href="/build/about-interactive-map.php" target="_blank">О нас - интерактивная карта (отсутствует контент) (не готово)</a></li>
            <li><a href="/build/about-question-answer.php" target="_blank">О нас - вопрос-ответ (не готово)</a></li>


            <br>
            <!--<li><a href="/build/123.php" target="_blank"> - </a></li>-->
        </ul>
    </div>
    </body>
</html>