    </main>

    <footer class="footer">
        <div class="container footer__container">
            <div class="footer__committee selection-committee">
                <div class="h5 selection-committee__heading">Приёмная комиссия</div>
                <div class="selection-committee__content">
                    <div class="selection-committee__contacts">
                        <div class="selection-committee__contacts-item selection-committee__contacts-address">
                            <div class="selection-committee__contacts-title">Адрес</div>
                            <p>ул. Миклухо-Маклая 6<br>(Главный корпус РУДН, каб. 418)</p>
                        </div>
                        <div class="selection-committee__contacts-item">
                            <div class="selection-committee__btn">
                                <button class="btn btn-square" type="button">
                                    <svg class="icon">
                                        <use href="/build/img/sprite.svg#arrow-down"></use>
                                    </svg>
                                </button>
                            </div>
                            <div class="selection-committee__route">
                                <a href="javascript:;">Как к нам добраться?</a>
                            </div>
                        </div>
                    </div>
                    <div class="selection-committee__contacts">
                        <div class="selection-committee__contacts-item selection-committee__contacts-phones">
                            <div class="selection-committee__contacts-title">По вопросам образования</div>
                            <p>Тел. <a href="tel:+74997873830">+7 (499) 787-38-30</a> (доб. 2629)</p>
                        </div>
                        <div class="selection-committee__contacts-item selection-committee__contacts-phones">
                            <div class="selection-committee__contacts-title">Центр ДПО</div>
                            <p>Тел. <a href="tel:+74957873830">+7 (495) 787-38-30</a> (доб.2308)</p>
                        </div>
                        <div class="selection-committee__contacts-item selection-committee__contacts-phones">
                            <div class="selection-committee__contacts-title">По вопросам научного сотрудничества</div>
                            <p>Тел. <a href="tel:+74957873830">+7 (495) 787-38-30</a> (доб.2303)</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__committee footer__committee-subscription selection-committee">
                <div class="h5 selection-committee__heading">Подпишитесь на новости</div>
                <div class="selection-committee__content flex-fill-desktop">
                    <div class="selection-committee__contacts h-100-desktop">
                        <div class="block-mb-medium selection-committee__contacts-item">
                            <div class="selection-committee__btn">
                                <button class="btn" type="button">
                                    <span class="content-text">Подписаться</span>
                                </button>
                            </div>
                        </div>
                        <div class="selection-committee__contacts-item">
                            <div class="selection-committee__contacts-title">&#169; <?= date("Y"); ?> Все права защищены<br>&#171;Высшая школа промышленной политики и предпринимательства&#187;</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hr"></div>
            <div class="footer__socials">
                <ul>
                    <li>
                        <a href="javascript:;">
                            <svg class="icon">
                                <use href="/build/img/sprite.svg#soc-vkontakte"></use>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <svg class="icon">
                                <use href="/build/img/sprite.svg#soc-youtube"></use>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <svg class="icon">
                                <use href="/build/img/sprite.svg#soc-facebook"></use>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <svg class="icon">
                                <use href="/build/img/sprite.svg#soc-instagram"></use>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <svg class="icon">
                                <use href="/build/img/sprite.svg#soc-whatsapp"></use>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footer__legal">
                <ul>
                    <li><a href="javascript:;">Карта сайта</a></li>
                    <li><a href="javascript:;">Пользовательское соглашение</a></li>
                    <li><a href="javascript:;">Политика по обработке Персональных данных</a></li>
                    <li><a href="javascript:;">Сделано в STICKYHANDS</a></li>
                </ul>
            </div>
        </div>
    </footer>

	<?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/modals.php'); ?>

    <script src="https://api-maps.yandex.ru/2.1/?apikey=ваш API-ключ&lang=ru_RU" type="text/javascript"></script>
    <script src="/build/js/libs.min.js"></script>
    <script src="/build/js/main.js"></script>
</body>
</html>