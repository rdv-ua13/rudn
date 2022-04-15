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
        </ul>
    </div>
    </body>
</html>