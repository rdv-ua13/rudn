<?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/header.php'); ?>

<div class="container">
    <div class="page-wrapper">
        <section class="page-content page-contacts">
            <div class="page-contacts__info">
				<?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/breadcrumbs.php'); ?>

                <h1 class="page-content__title">Контактная информация</h1>

                <div class="tabs life-tabs">
                    <div class="tabs-heading">
                        <div class="tabs-heading__list">
                            <label class="tabs-heading__item selected" data-target="1">
                                <div class="h3 tabs-heading__title">Деканат</div>
                                <input class="visually-hidden" type="radio" name="tab-about-structure" checked>
                            </label>
                            <label class="tabs-heading__item" data-target="2">
                                <div class="h3 tabs-heading__title">Тьюторы</div>
                                <input class="visually-hidden" type="radio" name="tab-about-structure">
                            </label>
                            <label class="tabs-heading__item" data-target="3">
                                <div class="h3 tabs-heading__title">Кафедры</div>
                                <input class="visually-hidden" type="radio" name="tab-about-structure">
                            </label>
                            <label class="tabs-heading__item" data-target="4">
                                <div class="h3 tabs-heading__title">Приемная комиссия</div>
                                <input class="visually-hidden" type="radio" name="tab-about-structure">
                            </label>
                        </div>
                    </div>
                    <div class="tab-content">
                        <section class="tab-content__section tab-content__section-departments active" data-id="1">
                            <div class="tab-content__body">
                                <div class="block-mb-medium">
                                    <div class="h5 title-mb-big">Телефоны</div>
                                    <div class="block-mb-xmedium">
                                        <div class="title-mb-xsmall semibold color-gray4">По вопросам образования</div>
                                        <div class="text-block">
                                            <p>Тел. +7 (499) 787-38-30 (доб. 2629)</p>
                                        </div>
                                    </div>
                                    <div class="block-mb-xmedium">
                                        <div class="title-mb-xsmall semibold color-gray4">Центр ДПО Высшей школы промышленной политики и предпринимательства</div>
                                        <div class="text-block">
                                            <p>Тел. +7 (495) 787-38-30 (доб.2308)</p>
                                        </div>
                                    </div>
                                    <div class="block-mb-xmedium">
                                        <div class="title-mb-xsmall semibold color-gray4">По вопросам научного сотрудничества</div>
                                        <div class="text-block">
                                            <p>Тел. +7 (495) 787-38-30 (доб.2303)</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-mb-medium">
                                    <div class="h5 title-mb-big">Как к нам добраться?</div>
                                    <div class="block-mb-xmedium">
                                        <div class="title-mb-xsmall semibold color-gray4">Адрес</div>
                                        <div class="text-block">
                                            <p>ул. Миклухо-Маклая 6 (Главный корпус РУДН, каб. 418)</p>
                                        </div>
                                    </div>
                                    <div class="block-mb-xmedium">
                                        <div class="text-block">
                                            <ul>
                                                <li>от ст.м. <b>Юго-Западная</b> автобусы 226, 261, 718, 196, 752, 250, 699 или маршрутное такси;</li>
                                                <li>от ст.м. <b>Беляево</b> автосус 261, 752 или маршрутное такси.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="tab-content__section tab-content__section-labs" data-id="2">
                            <div class="tab-content__body">
                                tab 2
                            </div>
                        </section>
                        <section class="tab-content__section tab-content__section-labs" data-id="3">
                            <div class="tab-content__body">
                                tab 3
                            </div>
                        </section>
                        <section class="tab-content__section tab-content__section-labs" data-id="4">
                            <div class="tab-content__body">
                                tab 4
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <div class="page-contacts__map">
                <div id="contacts_map" class="contacts-map"></div>
            </div>
            <div class="page-contacts__form">
                <form id="сontactManagement" class="contact-form bg-radial-blue" action="" method="">
                    <div class="contact-form__heading">
                        <div class="h3 contact-form__title">Отправить обращение</div>
                        <div class="contact-form__subtitle">Вы можете задать любой вопрос, а также направить отзыв или претензию сотрудникам Высшей школы промышленной политики и предпринимательства</div>
                    </div>
                    <div class="contact-form__body">
                        <div class="contact-form__row">
                            <select class="visually-hidden js-custom-select" name="сontactManagement[TOPIC]">
                                <option class="selected"
                                        value="0"
                                        selected
                                >
                                    Тема обращения
                                </option>
                                <option value="1">Тема обращения 1</option>
                                <option value="2">Тема обращения 2</option>
                                <option value="3">Тема обращения 3</option>
                            </select>
                        </div>
                        <div class="contact-form__row">
                            <input class="field-input"
                                   type="text"
                                   name="сontactManagement[FULLNAME]"
                                   placeholder="ФИО"
                            >
                        </div>
                        <div class="contact-form__row">
                            <input class="field-input"
                                   type="email"
                                   name="сontactManagement[EMAIL]"
                                   placeholder="Ваш email"
                            >
                        </div>
                        <div class="contact-form__row">
                            <textarea class="field-input comment-input"
                                      type="text"
                                      name="сontactManagement[COMMENT]"
                                      placeholder="Текст обращения"
                            ></textarea>
                        </div>
                    </div>
                    <div class="contact-form__btn">
                        <button class="btn" type="submit">
                            <span class="content-text">Отправить обращение</span>
                        </button>
                        <button class="btn btn-noframe btn-reset" type="button">
                            <span class="content-text">Очистить форму</span>
                        </button>
                    </div>
                    <div class="contact-form__agree">
                        <input class="field-checkbox"
                               type="checkbox"
                               name="сontactManagement[AGREE]"
                        >
                        <div class="contact-form__agree-text">
                            <span>Я соглашаюсь на обработку персональных данных, согласно</span>
                            <a class="link" href="javascript:;">Политика по обработке Персональных данных</a>
                        </div>
                    </div>
                </form>

            </div>

        </section>
    </div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/footer.php'); ?>