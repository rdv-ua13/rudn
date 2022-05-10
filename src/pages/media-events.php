<?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/header.php'); ?>

	<div class="container">
		<div class="page-wrapper page-events">
			<?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/sidebar.php'); ?>

			<section class="page-content">
				<?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/breadcrumbs.php'); ?>

				<h1 class="page-content__title">Мероприятия</h1>

				<form id="" class="page-content__filter" action="" method="">
					<div class="page-content__filter-content flex-wrap">
						<div class="page-content__filter-item w-100">
							<div class="field-wrapper">
								<div class="label">
                                <span class="label-title">
                                    <span class="label-text">Уровень обучения</span>
                                </span>
									<input id="" class="field-input field-input--search" type="search" name="" placeholder="Что вы хотите найти?">
								</div>
							</div>
						</div>
                        <div class="page-content__filter-item page-content__filter-item-1/4">
                            <div class="field-wrapper">
                                <div class="label">
							<span class="label-title">
								<span class="label-text">Направление</span>
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
                        <div class="page-content__filter-item page-content__filter-item-1/4">
                            <div class="field-wrapper">
                                <div class="label">
							<span class="label-title">
								<span class="label-text">Поднаправление</span>
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
                        <div class="page-content__filter-item page-content__filter-item-1/4">
                            <div class="field-wrapper">
                                <div class="label">
							<span class="label-title">
								<span class="label-text">Организаторы</span>
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
                        <div class="page-content__filter-item page-content__filter-item-1/4">
                            <div class="field-wrapper">
                                <div class="label">
							<span class="label-title">
								<span class="label-text">Формат мероприятия</span>
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
						<div class="page-content__filter-item page-content__filter-item-1/2">
							<div class="field-wrapper">
								<div class="label">
                                <span class="label-title">
                                    <span class="label-text">Период от</span>
                                </span>
									<input id="" class="field-input field-input--date" type="date" name="" placeholder="Не выбрано">
								</div>
							</div>
						</div>
						<div class="page-content__filter-item page-content__filter-item-1/2">
							<div class="field-wrapper">
								<div class="label">
							    <span class="label-title">
                                    <span class="label-text">Период до</span>
                                </span>
									<input id="" class="field-input field-input--date" type="date" name="" placeholder="Не выбрано">
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

                <div class="page-events__list">
                    <div class="page-events__item">
                        <div class="page-events__item-col">
                            <div class="h5 page-events__title">X Российский гомеопатический съезд</div>
                            <div class="page-events__descr">
                                <div class="text-block">
                                    <p>Российский университет дружбы народов совместно с Минобрнауки России и Исполнительным комитетом СНГ проводит Научно-методический симпозиум по вопросам партнерства образовательных учреждений (далее – Симпозиум).</p>
                                </div>
                            </div>
                        </div>
                        <div class="page-events__item-col">
                            <div class="page-events__details">
                                <div class="page-events__details-item">
                                    <div class="page-events__details-title">Где?</div>
                                    <div class="page-events__details-content">
                                        <p>РУДН, ул. Миклухо-Маклая 6, зал ученого совета</p>
                                    </div>
                                </div>
                                <div class="page-events__details-item">
                                    <div class="page-events__details-title">Когда?</div>
                                    <div class="page-events__details-content">
                                        <p>21-23 августа 2021</p>
                                        <p>09:00 до 18:00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="page-events__btns">
                                <div class="page-events__btn">
                                    <button class="btn" type="button">
                                        <svg class="icon">
                                            <use href="/build/img/sprite.svg#check"></use>
                                        </svg>
                                        <span class="content-text content-text--right">Зарегистрироваться</span>
                                    </button>
                                </div>
                                <div class="page-events__btn">
                                    <button class="btn btn-square btn--gray6" type="button">
                                        <svg class="icon">
                                            <use href="/build/img/sprite.svg#calendar-plus"></use>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page-events__item">
                        <div class="page-events__item-col">
                            <div class="h5 page-events__title">X Российский гомеопатический съезд</div>
                            <div class="page-events__descr">
                                <div class="text-block">
                                    <p>Российский университет дружбы народов совместно с Минобрнауки России и Исполнительным комитетом СНГ проводит Научно-методический симпозиум по вопросам партнерства образовательных учреждений (далее – Симпозиум).</p>
                                </div>
                            </div>
                        </div>
                        <div class="page-events__item-col">
                            <div class="page-events__details">
                                <div class="page-events__details-item">
                                    <div class="page-events__details-title">Где?</div>
                                    <div class="page-events__details-content">
                                        <p>РУДН, ул. Миклухо-Маклая 6, зал ученого совета</p>
                                    </div>
                                </div>
                                <div class="page-events__details-item">
                                    <div class="page-events__details-title">Когда?</div>
                                    <div class="page-events__details-content">
                                        <p>21-23 августа 2021</p>
                                        <p>09:00 до 18:00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="page-events__btns">
                                <div class="page-events__btn">
                                    <button class="btn" type="button">
                                        <svg class="icon">
                                            <use href="/build/img/sprite.svg#check"></use>
                                        </svg>
                                        <span class="content-text content-text--right">Зарегистрироваться</span>
                                    </button>
                                </div>
                                <div class="page-events__btn">
                                    <button class="btn btn-square btn--gray6" type="button">
                                        <svg class="icon">
                                            <use href="/build/img/sprite.svg#calendar-plus"></use>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page-events__item">
                        <div class="page-events__item-col">
                            <div class="h5 page-events__title">X Российский гомеопатический съезд</div>
                            <div class="page-events__descr">
                                <div class="text-block">
                                    <p>Российский университет дружбы народов совместно с Минобрнауки России и Исполнительным комитетом СНГ проводит Научно-методический симпозиум по вопросам партнерства образовательных учреждений (далее – Симпозиум).</p>
                                </div>
                            </div>
                        </div>
                        <div class="page-events__item-col">
                            <div class="page-events__details">
                                <div class="page-events__details-item">
                                    <div class="page-events__details-title">Где?</div>
                                    <div class="page-events__details-content">
                                        <p>РУДН, ул. Миклухо-Маклая 6, зал ученого совета</p>
                                    </div>
                                </div>
                                <div class="page-events__details-item">
                                    <div class="page-events__details-title">Когда?</div>
                                    <div class="page-events__details-content">
                                        <p>21-23 августа 2021</p>
                                        <p>09:00 до 18:00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="page-events__btns">
                                <div class="page-events__btn">
                                    <button class="btn" type="button">
                                        <svg class="icon">
                                            <use href="/build/img/sprite.svg#check"></use>
                                        </svg>
                                        <span class="content-text content-text--right">Зарегистрироваться</span>
                                    </button>
                                </div>
                                <div class="page-events__btn">
                                    <button class="btn btn-square btn--gray6" type="button">
                                        <svg class="icon">
                                            <use href="/build/img/sprite.svg#calendar-plus"></use>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page-events__item">
                        <div class="page-events__item-col">
                            <div class="h5 page-events__title">X Российский гомеопатический съезд</div>
                            <div class="page-events__descr">
                                <div class="text-block">
                                    <p>Российский университет дружбы народов совместно с Минобрнауки России и Исполнительным комитетом СНГ проводит Научно-методический симпозиум по вопросам партнерства образовательных учреждений (далее – Симпозиум).</p>
                                </div>
                            </div>
                        </div>
                        <div class="page-events__item-col">
                            <div class="page-events__details">
                                <div class="page-events__details-item">
                                    <div class="page-events__details-title">Где?</div>
                                    <div class="page-events__details-content">
                                        <p>РУДН, ул. Миклухо-Маклая 6, зал ученого совета</p>
                                    </div>
                                </div>
                                <div class="page-events__details-item">
                                    <div class="page-events__details-title">Когда?</div>
                                    <div class="page-events__details-content">
                                        <p>21-23 августа 2021</p>
                                        <p>09:00 до 18:00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="page-events__btns">
                                <div class="page-events__btn">
                                    <button class="btn" type="button">
                                        <svg class="icon">
                                            <use href="/build/img/sprite.svg#check"></use>
                                        </svg>
                                        <span class="content-text content-text--right">Зарегистрироваться</span>
                                    </button>
                                </div>
                                <div class="page-events__btn">
                                    <button class="btn btn-square btn--gray6" type="button">
                                        <svg class="icon">
                                            <use href="/build/img/sprite.svg#calendar-plus"></use>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

					<?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/pagination.php'); ?>
                </div>

			</section>
		</div>
	</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/footer.php'); ?>