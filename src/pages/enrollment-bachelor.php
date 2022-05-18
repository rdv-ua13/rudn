<?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/header.php'); ?>

<div class="container">
	<div class="page-wrapper">
		<?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/sidebar.php'); ?>

		<section class="page-content enrollment">
			<?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/breadcrumbs.php'); ?>

			<h1 class="page-content__title">Бакалавриат</h1>

			<div class="block-mb-medium">
                <div class="enrollment-top-img" style="background-image: url('/build/img/enrollment-bachelor-img1.png')"></div>
			</div>
			<div class="block-mb-medium">
				<div class="text-block">
					<p>Бакалавриат – уровень высшего образования, следующий после бакалавриата, позволяющий углубить знания по определенному направлению подготовки.</p>
					<p>Магистерская диссертация – это документ государственного образца, которым подтверждается завершение высшего образования соответствующего уровня. Выпускнику магистратуры присваивается квалификация (степень) «магистр» по результатам прохождения государственной итоговой аттестации.</p>
				</div>
			</div>
			<div class="block-mb-xmedium">
                <div class="h3 title-mb-big">Выбрать направление</div>
                <form id="" class="page-content__filter" action="" method="">
                    <div class="page-content__filter-content flex-wrap">
                        <div class="page-content__filter-item page-content__filter-item-1/3">
                            <div class="field-wrapper">
                                <div class="label">
                                    <span class="label-title">
                                        <span class="label-text">Кафедра</span>
                                    </span>
                                    <select class="visually-hidden js-custom-select" name="">
                                        <option class="selected"
                                                value="0"
                                                selected
                                        >
                                            Не выбрано
                                        </option>
                                        <option value="1">Экономика</option>
                                        <option value="2">Экономика 2</option>
                                        <option value="3">Экономика 3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="page-content__filter-item page-content__filter-item-1/3">
                            <div class="field-wrapper">
                                <div class="label">
                                    <span class="label-title">
                                        <span class="label-text">Уровень обучения</span>
                                    </span>
                                    <select class="visually-hidden js-custom-select" name="">
                                        <option class="selected"
                                                value="0"
                                                selected
                                        >
                                            Не выбрано
                                        </option>
                                        <option value="1">Все</option>
                                        <option value="2">Все 2</option>
                                        <option value="3">Все 3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="page-content__filter-item page-content__filter-item-1/3">
                            <div class="field-wrapper">
                                <div class="label">
                                    <span class="label-title">
                                        <span class="label-text">Форма обучения</span>
                                    </span>
                                    <select class="visually-hidden js-custom-select" name="">
                                        <option class="selected"
                                                value="0"
                                                selected
                                        >
                                            Не выбрано
                                        </option>
                                        <option value="1">Очная</option>
                                        <option value="2">Заочная</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="page-content__filter-item page-content__filter-item-1/3">
                            <div class="field-wrapper">
                                <div class="label">
                                    <span class="label-title">
                                        <span class="label-text">Гражданство абитуриента</span>
                                    </span>
                                    <select class="visually-hidden js-custom-select" name="">
                                        <option class="selected"
                                                value="0"
                                                selected
                                        >
                                            Не выбрано
                                        </option>
                                        <option value="1">Вариант 1</option>
                                        <option value="2">Вариант 2</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="page-content__filter-item page-content__filter-item-1/3">
                            <div class="field-wrapper field-range-wrapper">
                                <div class="label">
                                    <span class="label-title">
                                        <span class="label-text">Стоимость обучения</span>
                                    </span>
                                    <div class="field-input-range-container">
                                        <input id="" class="field-input field-input-range-1/2"
                                               type="text"
                                               name=""
                                               placeholder="от"
                                        >
                                        <input id="" class="field-input field-input-range-1/2"
                                               type="text"
                                               name=""
                                               placeholder="до"
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="page-content__filter-item w-100 page-content__filter-btns">
                            <div class="field-wrapper">
                                <button class="btn">
                                    <svg class="icon">
                                        <use href="/build/img/sprite.svg#search"></use>
                                    </svg>
                                    <span class="content-text content-text--right">Показать</span>
                                </button>
                                <button class="btn btn-noframe btn-reset" type="button">
                                    <span class="content-text">Сбросить фильтр</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
			</div>
			<div class="block-mb-medium">
                <div class="accordion" data-id="enrollment-accordion">
                    <div class="accordion__item">
                        <div class="accordion__header">
                            <button class="h5 accordion__btn js-accordion-btn" type="button">
                                <span class="content-text">1.03.02 Девелопмент и управление недвижимостью</span>
                                <svg class="icon content-icon">
                                    <use href="/build/img/sprite.svg#arrow-down"></use>
                                </svg>
                            </button>
                        </div>
                        <div class="accordion__collapse collapsed">
                            <div class="accordion__collapse-item">
                                <div class="accordion__collapse-basic">
                                    <div class="accordion__collapse-basic-item">
                                        <div class="accordion__collapse-title">Всего мест</div>
                                        <div class="accordion__collapse-value">52</div>
                                    </div>
                                    <div class="accordion__collapse-basic-item">
                                        <div class="accordion__collapse-title">Бюджетных мест</div>
                                        <div class="accordion__collapse-value">50</div>
                                    </div>
                                    <div class="accordion__collapse-basic-item">
                                        <div class="accordion__collapse-title">Внебюджетных мест</div>
                                        <div class="accordion__collapse-value">2</div>
                                    </div>
                                    <div class="accordion__collapse-basic-item">
                                        <div class="accordion__collapse-title">Форма обучения</div>
                                        <div class="accordion__collapse-value">Очная</div>
                                    </div>
                                    <div class="accordion__collapse-basic-item">
                                        <div class="accordion__collapse-title">Стоимость обучения (в год)</div>
                                        <div class="accordion__collapse-value">260 800 руб.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion__collapse-item">
                                <div class="accordion__collapse-head">
                                    <div class="accordion__collapse-head-item">
                                        <div class="accordion__collapse-title">Руководитель</div>
                                        <div class="accordion__collapse-head-content">
                                            <div class="accordion__collapse-head-view">
                                                <div class="accordion__collapse-head-view-bg" style="background-image: url('');"></div>
                                            </div>
                                            <div class="accordion__collapse-head-descr">
                                                <div class="accordion__collapse-head-descr-title">Чурсин Александр Александрович</div>
                                                <div class="accordion__collapse-head-descr-subtitle">Д.э.н., профессор</div>
                                                <div class="accordion__collapse-head-descr-contacts">+7 (495) 787-38-03 доп.: 2304</div>
                                            </div>
                                        </div>
                                        <div class="accordion__collapse-head-more">
                                            <a class="btn" href="javascript:;">
                                                <span class="content-text content-text--left">Подробнее о направлении</span>
                                                <svg class="icon rotate-right">
                                                    <use href="/build/img/sprite.svg#arrow-down"></use>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__item">
                        <div class="accordion__header">
                            <button class="h5 accordion__btn js-accordion-btn" type="button">
                                <span class="content-text">1.03.02 Инженерный менеджмент</span>
                                <svg class="icon content-icon">
                                    <use href="/build/img/sprite.svg#arrow-down"></use>
                                </svg>
                            </button>
                        </div>
                        <div class="accordion__collapse collapsed">
                            <div class="accordion__collapse-item">
                                <div class="accordion__collapse-basic">
                                    <div class="accordion__collapse-basic-item">
                                        <div class="accordion__collapse-title">Всего мест</div>
                                        <div class="accordion__collapse-value">52</div>
                                    </div>
                                    <div class="accordion__collapse-basic-item">
                                        <div class="accordion__collapse-title">Бюджетных мест</div>
                                        <div class="accordion__collapse-value">50</div>
                                    </div>
                                    <div class="accordion__collapse-basic-item">
                                        <div class="accordion__collapse-title">Внебюджетных мест</div>
                                        <div class="accordion__collapse-value">2</div>
                                    </div>
                                    <div class="accordion__collapse-basic-item">
                                        <div class="accordion__collapse-title">Форма обучения</div>
                                        <div class="accordion__collapse-value">Очная</div>
                                    </div>
                                    <div class="accordion__collapse-basic-item">
                                        <div class="accordion__collapse-title">Стоимость обучения (в год)</div>
                                        <div class="accordion__collapse-value">260 800 руб.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion__collapse-item">
                                <div class="accordion__collapse-head">
                                    <div class="accordion__collapse-head-item">
                                        <div class="accordion__collapse-title">Руководитель</div>
                                        <div class="accordion__collapse-head-content">
                                            <div class="accordion__collapse-head-view">
                                                <div class="accordion__collapse-head-view-bg" style="background-image: url('');"></div>
                                            </div>
                                            <div class="accordion__collapse-head-descr">
                                                <div class="accordion__collapse-head-descr-title">Чурсин Александр Александрович</div>
                                                <div class="accordion__collapse-head-descr-subtitle">Д.э.н., профессор</div>
                                                <div class="accordion__collapse-head-descr-contacts">+7 (495) 787-38-03 доп.: 2304</div>
                                            </div>
                                        </div>
                                        <div class="accordion__collapse-head-more">
                                            <a class="btn" href="javascript:;">
                                                <span class="content-text content-text--left">Подробнее о направлении</span>
                                                <svg class="icon rotate-right">
                                                    <use href="/build/img/sprite.svg#arrow-down"></use>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__item">
                        <div class="accordion__header">
                            <button class="h5 accordion__btn js-accordion-btn" type="button">
                                <span class="content-text">1.03.02 Принятие эффективных управленческих решений (Big Data Economics)</span>
                                <svg class="icon content-icon">
                                    <use href="/build/img/sprite.svg#arrow-down"></use>
                                </svg>
                            </button>
                        </div>
                        <div class="accordion__collapse collapsed">
                            <div class="accordion__collapse-item">
                                <div class="accordion__collapse-basic">
                                    <div class="accordion__collapse-basic-item">
                                        <div class="accordion__collapse-title">Всего мест</div>
                                        <div class="accordion__collapse-value">52</div>
                                    </div>
                                    <div class="accordion__collapse-basic-item">
                                        <div class="accordion__collapse-title">Бюджетных мест</div>
                                        <div class="accordion__collapse-value">50</div>
                                    </div>
                                    <div class="accordion__collapse-basic-item">
                                        <div class="accordion__collapse-title">Внебюджетных мест</div>
                                        <div class="accordion__collapse-value">2</div>
                                    </div>
                                    <div class="accordion__collapse-basic-item">
                                        <div class="accordion__collapse-title">Форма обучения</div>
                                        <div class="accordion__collapse-value">Очная</div>
                                    </div>
                                    <div class="accordion__collapse-basic-item">
                                        <div class="accordion__collapse-title">Стоимость обучения (в год)</div>
                                        <div class="accordion__collapse-value">260 800 руб.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion__collapse-item">
                                <div class="accordion__collapse-head">
                                    <div class="accordion__collapse-head-item">
                                        <div class="accordion__collapse-title">Руководитель</div>
                                        <div class="accordion__collapse-head-content">
                                            <div class="accordion__collapse-head-view">
                                                <div class="accordion__collapse-head-view-bg" style="background-image: url('');"></div>
                                            </div>
                                            <div class="accordion__collapse-head-descr">
                                                <div class="accordion__collapse-head-descr-title">Чурсин Александр Александрович</div>
                                                <div class="accordion__collapse-head-descr-subtitle">Д.э.н., профессор</div>
                                                <div class="accordion__collapse-head-descr-contacts">+7 (495) 787-38-03 доп.: 2304</div>
                                            </div>
                                        </div>
                                        <div class="accordion__collapse-head-more">
                                            <a class="btn" href="javascript:;">
                                                <span class="content-text content-text--left">Подробнее о направлении</span>
                                                <svg class="icon rotate-right">
                                                    <use href="/build/img/sprite.svg#arrow-down"></use>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__item">
                        <div class="accordion__header">
                            <button class="h5 accordion__btn js-accordion-btn" type="button">
                                <span class="content-text">1.03.02 Управление наукоемкими отраслями</span>
                                <svg class="icon content-icon">
                                    <use href="/build/img/sprite.svg#arrow-down"></use>
                                </svg>
                            </button>
                        </div>
                        <div class="accordion__collapse collapsed">
                            <div class="accordion__collapse-item">
                                <div class="accordion__collapse-basic">
                                    <div class="accordion__collapse-basic-item">
                                        <div class="accordion__collapse-title">Всего мест</div>
                                        <div class="accordion__collapse-value">52</div>
                                    </div>
                                    <div class="accordion__collapse-basic-item">
                                        <div class="accordion__collapse-title">Бюджетных мест</div>
                                        <div class="accordion__collapse-value">50</div>
                                    </div>
                                    <div class="accordion__collapse-basic-item">
                                        <div class="accordion__collapse-title">Внебюджетных мест</div>
                                        <div class="accordion__collapse-value">2</div>
                                    </div>
                                    <div class="accordion__collapse-basic-item">
                                        <div class="accordion__collapse-title">Форма обучения</div>
                                        <div class="accordion__collapse-value">Очная</div>
                                    </div>
                                    <div class="accordion__collapse-basic-item">
                                        <div class="accordion__collapse-title">Стоимость обучения (в год)</div>
                                        <div class="accordion__collapse-value">260 800 руб.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion__collapse-item">
                                <div class="accordion__collapse-head">
                                    <div class="accordion__collapse-head-item">
                                        <div class="accordion__collapse-title">Руководитель</div>
                                        <div class="accordion__collapse-head-content">
                                            <div class="accordion__collapse-head-view">
                                                <div class="accordion__collapse-head-view-bg" style="background-image: url('');"></div>
                                            </div>
                                            <div class="accordion__collapse-head-descr">
                                                <div class="accordion__collapse-head-descr-title">Чурсин Александр Александрович</div>
                                                <div class="accordion__collapse-head-descr-subtitle">Д.э.н., профессор</div>
                                                <div class="accordion__collapse-head-descr-contacts">+7 (495) 787-38-03 доп.: 2304</div>
                                            </div>
                                        </div>
                                        <div class="accordion__collapse-head-more">
                                            <a class="btn" href="javascript:;">
                                                <span class="content-text content-text--left">Подробнее о направлении</span>
                                                <svg class="icon rotate-right">
                                                    <use href="/build/img/sprite.svg#arrow-down"></use>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__item">
                        <div class="accordion__header">
                            <button class="h5 accordion__btn js-accordion-btn" type="button">
                                <span class="content-text">1.03.02 Экономика космической деятельности</span>
                                <svg class="icon content-icon">
                                    <use href="/build/img/sprite.svg#arrow-down"></use>
                                </svg>
                            </button>
                        </div>
                        <div class="accordion__collapse collapsed">
                            <div class="accordion__collapse-item">
                                <div class="accordion__collapse-basic">
                                    <div class="accordion__collapse-basic-item">
                                        <div class="accordion__collapse-title">Всего мест</div>
                                        <div class="accordion__collapse-value">52</div>
                                    </div>
                                    <div class="accordion__collapse-basic-item">
                                        <div class="accordion__collapse-title">Бюджетных мест</div>
                                        <div class="accordion__collapse-value">50</div>
                                    </div>
                                    <div class="accordion__collapse-basic-item">
                                        <div class="accordion__collapse-title">Внебюджетных мест</div>
                                        <div class="accordion__collapse-value">2</div>
                                    </div>
                                    <div class="accordion__collapse-basic-item">
                                        <div class="accordion__collapse-title">Форма обучения</div>
                                        <div class="accordion__collapse-value">Очная</div>
                                    </div>
                                    <div class="accordion__collapse-basic-item">
                                        <div class="accordion__collapse-title">Стоимость обучения (в год)</div>
                                        <div class="accordion__collapse-value">260 800 руб.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion__collapse-item">
                                <div class="accordion__collapse-head">
                                    <div class="accordion__collapse-head-item">
                                        <div class="accordion__collapse-title">Руководитель</div>
                                        <div class="accordion__collapse-head-content">
                                            <div class="accordion__collapse-head-view">
                                                <div class="accordion__collapse-head-view-bg" style="background-image: url('');"></div>
                                            </div>
                                            <div class="accordion__collapse-head-descr">
                                                <div class="accordion__collapse-head-descr-title">Чурсин Александр Александрович</div>
                                                <div class="accordion__collapse-head-descr-subtitle">Д.э.н., профессор</div>
                                                <div class="accordion__collapse-head-descr-contacts">+7 (495) 787-38-03 доп.: 2304</div>
                                            </div>
                                        </div>
                                        <div class="accordion__collapse-head-more">
                                            <a class="btn" href="javascript:;">
                                                <span class="content-text content-text--left">Подробнее о направлении</span>
                                                <svg class="icon rotate-right">
                                                    <use href="/build/img/sprite.svg#arrow-down"></use>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__item">
                        <div class="accordion__header">
                            <button class="h5 accordion__btn js-accordion-btn" type="button">
                                <span class="content-text">1.03.02 Управление предприятиями наукоемких отраслей</span>
                                <svg class="icon content-icon">
                                    <use href="/build/img/sprite.svg#arrow-down"></use>
                                </svg>
                            </button>
                        </div>
                        <div class="accordion__collapse collapsed">
                            <div class="accordion__collapse-item">
                                <div class="accordion__collapse-basic">
                                    <div class="accordion__collapse-basic-item">
                                        <div class="accordion__collapse-title">Всего мест</div>
                                        <div class="accordion__collapse-value">52</div>
                                    </div>
                                    <div class="accordion__collapse-basic-item">
                                        <div class="accordion__collapse-title">Бюджетных мест</div>
                                        <div class="accordion__collapse-value">50</div>
                                    </div>
                                    <div class="accordion__collapse-basic-item">
                                        <div class="accordion__collapse-title">Внебюджетных мест</div>
                                        <div class="accordion__collapse-value">2</div>
                                    </div>
                                    <div class="accordion__collapse-basic-item">
                                        <div class="accordion__collapse-title">Форма обучения</div>
                                        <div class="accordion__collapse-value">Очная</div>
                                    </div>
                                    <div class="accordion__collapse-basic-item">
                                        <div class="accordion__collapse-title">Стоимость обучения (в год)</div>
                                        <div class="accordion__collapse-value">260 800 руб.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion__collapse-item">
                                <div class="accordion__collapse-head">
                                    <div class="accordion__collapse-head-item">
                                        <div class="accordion__collapse-title">Руководитель</div>
                                        <div class="accordion__collapse-head-content">
                                            <div class="accordion__collapse-head-view">
                                                <div class="accordion__collapse-head-view-bg" style="background-image: url('');"></div>
                                            </div>
                                            <div class="accordion__collapse-head-descr">
                                                <div class="accordion__collapse-head-descr-title">Чурсин Александр Александрович</div>
                                                <div class="accordion__collapse-head-descr-subtitle">Д.э.н., профессор</div>
                                                <div class="accordion__collapse-head-descr-contacts">+7 (495) 787-38-03 доп.: 2304</div>
                                            </div>
                                        </div>
                                        <div class="accordion__collapse-head-more">
                                            <a class="btn" href="javascript:;">
                                                <span class="content-text content-text--left">Подробнее о направлении</span>
                                                <svg class="icon rotate-right">
                                                    <use href="/build/img/sprite.svg#arrow-down"></use>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</section>
	</div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/footer.php'); ?>