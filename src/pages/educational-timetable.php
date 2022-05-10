<?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/header.php'); ?>

	<div class="container">
		<div class="page-wrapper">
			<?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/sidebar.php'); ?>

			<section class="page-content">
				<?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/breadcrumbs.php'); ?>

				<h1 class="page-content__title">Расписание занятий</h1>

				<form id="" class="page-content__filter" action="" method="">
					<div class="page-content__filter-content flex-wrap">
						<div class="page-content__filter-item page-content__filter-item-1/2">
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
										<option value="1">Магистратура</option>
										<option value="2">Аспирантура</option>
									</select>
								</div>
							</div>
						</div>
						<div class="page-content__filter-item page-content__filter-item-1/2">
							<div class="field-wrapper">
								<div class="label">
                                <span class="label-title">
                                    <span class="label-text">Курс</span>
                                </span>
									<select class="visually-hidden js-custom-select" name="">
										<option class="selected"
												value="0"
												selected
										>
											Не выбрано
										</option>
										<option value="1">1 курс</option>
										<option value="2">2 курс</option>
										<option value="3">3 курс</option>
									</select>
								</div>
							</div>
						</div>
						<div class="page-content__filter-item page-content__filter-item-1/2">
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
											Выберите форму обучения
										</option>
										<option value="1">Очная</option>
										<option value="2">Заочная</option>
									</select>
								</div>
							</div>
						</div>
						<div class="page-content__filter-item page-content__filter-item-1/2">
							<div class="field-wrapper">
								<div class="label">
                                <span class="label-title">
                                    <span class="label-text">Группа</span>
                                </span>
									<select class="visually-hidden js-custom-select" name="">
										<option class="selected"
												value="0"
												selected
										>
											Не выбрано
										</option>
										<option value="1">Группа 1</option>
										<option value="2">Группа 2</option>
									</select>
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

                <div class="page-content__title-block">
                    <div class="page-content__title-item">
                        <div class="h3 page-content__title">ПЭКмд-01-20</div>
                    </div>
                    <div class="page-content__title-item page-content__title-btn">
                        <button class="btn btn-square btn-noframe btn--blue" type="button">
                            <svg class="icon">
                                <use href="/build/img/sprite.svg#print"></use>
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="tabs educational-timetable-tabs">
                    <div class="tabs-heading">
                        <div class="tabs-heading__list">
                            <label class="tabs-heading__item selected" data-target="1">
                                <div class="tabs-heading__title">
                                    <div class="h5 tabs-heading__title-name">Текущая неделя</div>
                                    <div class="tabs-heading__title-date">11.10-17.10, верхняя</div>
                                </div>
                                <input class="visually-hidden" type="radio" name="tab-about-structure" checked>
                            </label>
                            <label class="tabs-heading__item" data-target="2">
                                <div class="h3 tabs-heading__title">
                                    <div class="h5 tabs-heading__title-name">Следующая неделя</div>
                                    <div class="tabs-heading__title-date">18.10-24.10, нижняя</div>
                                </div>
                                <input class="visually-hidden" type="radio" name="tab-about-structure">
                            </label>
                        </div>
                    </div>
                    <div class="tab-content">
                        <section class="tab-content__section tab-content__section-departments active" data-id="1">
                            <div class="tab-content__body">
                                <div class="tab-content__item">
                                    <div class="h5 tab-content__title">Понедельник</div>
                                    <div class="tab-content__descr">
                                        <div class="tab-content__descr-item tab-content__descr-time">18:00 - 19:20</div>
                                        <div class="tab-content__descr-item tab-content__descr-name">Облачные технологии в цифровой экономике</div>
                                        <div class="tab-content__descr-item tab-content__descr-lesson-type">Практические и другие</div>
                                        <div class="tab-content__descr-item tab-content__descr-teacher color-blue">Корнеенко Виктор Павлович</div>
                                        <div class="tab-content__descr-item tab-content__descr-group">ДОТ-000</div>
                                    </div>
                                </div>
                                <div class="tab-content__item">
                                    <div class="h5 tab-content__title">Вторник</div>
                                    <div class="tab-content__descr">
                                        <div class="tab-content__descr-item tab-content__descr-time">18:00 - 19:20</div>
                                        <div class="tab-content__descr-item tab-content__descr-name">Облачные технологии в цифровой экономике</div>
                                        <div class="tab-content__descr-item tab-content__descr-lesson-type">Лекция</div>
                                        <div class="tab-content__descr-item tab-content__descr-teacher color-blue">Корнеенко Виктор Павлович</div>
                                        <div class="tab-content__descr-item tab-content__descr-group">ДОТ-000</div>
                                    </div>
                                    <div class="tab-content__descr">
                                        <div class="tab-content__descr-item tab-content__descr-time">19:30 - 20:50</div>
                                        <div class="tab-content__descr-item tab-content__descr-name">Сбор, обработка и хранение данных</div>
                                        <div class="tab-content__descr-item tab-content__descr-lesson-type">Практические и другие</div>
                                        <div class="tab-content__descr-item tab-content__descr-teacher color-blue">Юдин Александр Викторович</div>
                                        <div class="tab-content__descr-item tab-content__descr-group">ДОТ-000</div>
                                    </div>
                                </div>
                                <div class="tab-content__item">
                                    <div class="h5 tab-content__title">Среда</div>
                                    <div class="tab-content__descr">
                                        <div class="tab-content__descr-item tab-content__descr-time">18:00 - 19:20</div>
                                        <div class="tab-content__descr-item tab-content__descr-name">Облачные технологии в цифровой экономике</div>
                                        <div class="tab-content__descr-item tab-content__descr-lesson-type">Лекция</div>
                                        <div class="tab-content__descr-item tab-content__descr-teacher color-blue">Корнеенко Виктор Павлович</div>
                                        <div class="tab-content__descr-item tab-content__descr-group">ДОТ-000</div>
                                    </div>
                                    <div class="tab-content__descr">
                                        <div class="tab-content__descr-item tab-content__descr-time">19:30 - 20:50</div>
                                        <div class="tab-content__descr-item tab-content__descr-name">Сбор, обработка и хранение данных</div>
                                        <div class="tab-content__descr-item tab-content__descr-lesson-type">Практические и другие</div>
                                        <div class="tab-content__descr-item tab-content__descr-teacher color-blue">Юдин Александр Викторович</div>
                                        <div class="tab-content__descr-item tab-content__descr-group">ДОТ-000</div>
                                    </div>
                                </div>
                                <div class="tab-content__item">
                                    <div class="h5 tab-content__title">Четверг</div>
                                    <div class="tab-content__descr">
                                        <div class="tab-content__descr-item tab-content__descr-time">18:00 - 19:20</div>
                                        <div class="tab-content__descr-item tab-content__descr-name">Цифровые методы анализа данных</div>
                                        <div class="tab-content__descr-item tab-content__descr-lesson-type">Практические и другие</div>
                                        <div class="tab-content__descr-item tab-content__descr-teacher color-blue">Юдин Александр Викторович</div>
                                        <div class="tab-content__descr-item tab-content__descr-group">ДОТ-000</div>
                                    </div>
                                    <div class="tab-content__descr">
                                        <div class="tab-content__descr-item tab-content__descr-time">19:30 - 20:50</div>
                                        <div class="tab-content__descr-item tab-content__descr-name">Цифровые методы анализа данных</div>
                                        <div class="tab-content__descr-item tab-content__descr-lesson-type">Практические и другие</div>
                                        <div class="tab-content__descr-item tab-content__descr-teacher color-blue">Юдин Александр Викторович</div>
                                        <div class="tab-content__descr-item tab-content__descr-group">ДОТ-000</div>
                                    </div>
                                </div>
                                <div class="tab-content__item">
                                    <div class="h5 tab-content__title">Пятница</div>
                                    <div class="tab-content__descr">
                                        <div class="tab-content__descr-item tab-content__descr-time">18:00 - 19:20</div>
                                        <div class="tab-content__descr-item tab-content__descr-name">Профессиональный иностранный язык</div>
                                        <div class="tab-content__descr-item tab-content__descr-lesson-type">Практические и другие</div>
                                        <div class="tab-content__descr-item tab-content__descr-teacher color-blue">Шарма Гаурав</div>
                                        <div class="tab-content__descr-item tab-content__descr-group">ДОТ-000</div>
                                    </div>
                                    <div class="tab-content__descr">
                                        <div class="tab-content__descr-item tab-content__descr-time">19:30 - 20:50</div>
                                        <div class="tab-content__descr-item tab-content__descr-name">Профессиональный иностранный язык</div>
                                        <div class="tab-content__descr-item tab-content__descr-lesson-type">Практические и другие</div>
                                        <div class="tab-content__descr-item tab-content__descr-teacher color-blue">Шарма Гаурав</div>
                                        <div class="tab-content__descr-item tab-content__descr-group">ДОТ-000</div>
                                    </div>
                                </div>

                            </div>
                        </section>
                        <section class="tab-content__section tab-content__section-labs" data-id="2">
                            <div class="tab-content__body">
                                2
                            </div>
                        </section>
                    </div>
                </div>

			</section>
		</div>
	</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/footer.php'); ?>