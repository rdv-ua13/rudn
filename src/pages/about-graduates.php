<?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/header.php'); ?>

<div class="container">
	<div class="page-wrapper">
		<?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/sidebar.php'); ?>

		<section class="page-content">
			<?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/breadcrumbs.php'); ?>

            <h1 class="page-content__title">Выпускники</h1>

            <form id="" class="page-content__filter" action="" method="">
                <div class="page-content__filter-content">
                    <div class="page-content__filter-item page-content__filter-year">
                        <div class="field-wrapper">
                            <div class="label">
                                <span class="label-title">
                                    <span class="label-text">Год выпуска</span>
                                </span>
                                <select class="visually-hidden js-custom-select" name="">
                                    <option class="selected"
                                            value="0"
                                            selected
                                    >
                                        Не выбрано
                                    </option>
                                    <option value="1">2019</option>
                                    <option value="2">2018</option>
                                    <option value="3">2017</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="page-content__filter-item page-content__filter-faculty">
                        <div class="field-wrapper">
                            <div class="label">
                                <span class="label-title">
                                    <span class="label-text">Направление подготовки</span>
                                </span>
                                <select class="visually-hidden js-custom-select" name="">
                                    <option class="selected"
                                            value="0"
                                            selected
                                    >
                                        Не выбрано
                                    </option>
                                    <option value="1">Направление подготовки</option>
                                    <option value="2">Направление подготовки</option>
                                    <option value="3">Направление подготовки</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="page-content__filter-item page-content__filter-btns">
                        <div class="field-wrapper">
                            <button class="btn">
                                <svg class="icon">
                                    <use href="/build/img/sprite.svg#search"></use>
                                </svg>
                                <span class="content-text content-text--right">Найти</span>
                            </button>
                            <button class="btn btn-noframe btn-reset" type="button">
                                <span class="content-text">Сбросить фильтр</span>
                            </button>
                        </div>
                    </div>
                </div>
            </form>

			<div class="persons-cards">
				<div class="persons-cards__item">
					<div class="persons-cards__view">
						<div class="persons-cards__view-content" style="background-image: url('/build/img/person-img1.png');"></div>
					</div>
					<div class="persons-cards__descr">
						<div class="persons-cards__descr-title">Комиссаров Аристарх Богуславович</div>
						<div class="persons-cards__descr-subtitle">Выпуск 2019 года</div>
					</div>
				</div>
				<div class="persons-cards__item">
					<div class="persons-cards__view">
						<div class="persons-cards__view-content" style="background-image: url('');"></div>
					</div>
					<div class="persons-cards__descr">
						<div class="persons-cards__descr-title">Елисеев Ираклий Тимурович</div>
						<div class="persons-cards__descr-subtitle">Выпуск 2019 года</div>
					</div>
				</div>
				<div class="persons-cards__item">
					<div class="persons-cards__view">
						<div class="persons-cards__view-content" style="background-image: url('');"></div>
					</div>
					<div class="persons-cards__descr">
						<div class="persons-cards__descr-title">Кулакова Зоряна Геласьевна</div>
						<div class="persons-cards__descr-subtitle">Выпуск 2019 года</div>
					</div>
				</div>
				<div class="persons-cards__item">
					<div class="persons-cards__view">
						<div class="persons-cards__view-content" style="background-image: url('');"></div>
					</div>
					<div class="persons-cards__descr">
						<div class="persons-cards__descr-title">Казаков Яков Федорович</div>
						<div class="persons-cards__descr-subtitle">Выпуск 2019 года</div>
					</div>
				</div>
				<div class="persons-cards__item">
					<div class="persons-cards__view">
						<div class="persons-cards__view-content" style="background-image: url('');"></div>
					</div>
					<div class="persons-cards__descr">
						<div class="persons-cards__descr-title">Молчанов Елисей Адольфович</div>
						<div class="persons-cards__descr-subtitle">Выпуск 2019 года</div>
					</div>
				</div>
				<div class="persons-cards__item">
					<div class="persons-cards__view">
						<div class="persons-cards__view-content" style="background-image: url('');"></div>
					</div>
					<div class="persons-cards__descr">
						<div class="persons-cards__descr-title">Зайцев Вячеслав Германович</div>
						<div class="persons-cards__descr-subtitle">Выпуск 2019 года</div>
					</div>
				</div>
				<div class="persons-cards__item">
					<div class="persons-cards__view">
						<div class="persons-cards__view-content" style="background-image: url('');"></div>
					</div>
					<div class="persons-cards__descr">
						<div class="persons-cards__descr-title">Селиверстов Антон Григорьевич</div>
						<div class="persons-cards__descr-subtitle">Выпуск 2019 года</div>
					</div>
				</div>
				<div class="persons-cards__item">
					<div class="persons-cards__view">
						<div class="persons-cards__view-content" style="background-image: url('');"></div>
					</div>
					<div class="persons-cards__descr">
						<div class="persons-cards__descr-title">Маслова Аделина Дмитриевна</div>
						<div class="persons-cards__descr-subtitle">Выпуск 2019 года</div>
					</div>
				</div>
				<div class="persons-cards__item">
					<div class="persons-cards__view">
						<div class="persons-cards__view-content" style="background-image: url('');"></div>
					</div>
					<div class="persons-cards__descr">
						<div class="persons-cards__descr-title">Молчанов Елисей Адольфович</div>
						<div class="persons-cards__descr-subtitle">Выпуск 2019 года</div>
					</div>
				</div>
				<div class="persons-cards__item">
					<div class="persons-cards__view">
						<div class="persons-cards__view-content" style="background-image: url('');"></div>
					</div>
					<div class="persons-cards__descr">
						<div class="persons-cards__descr-title">Зайцев Вячеслав Германович</div>
						<div class="persons-cards__descr-subtitle">Выпуск 2019 года</div>
					</div>
				</div>
				<div class="persons-cards__item">
					<div class="persons-cards__view">
						<div class="persons-cards__view-content" style="background-image: url('');"></div>
					</div>
					<div class="persons-cards__descr">
						<div class="persons-cards__descr-title">Селиверстов Антон Григорьевич</div>
						<div class="persons-cards__descr-subtitle">Выпуск 2019 года</div>
					</div>
				</div>
				<div class="persons-cards__item">
					<div class="persons-cards__view">
						<div class="persons-cards__view-content" style="background-image: url('');"></div>
					</div>
					<div class="persons-cards__descr">
						<div class="persons-cards__descr-title">Маслова Аделина Дмитриевна</div>
						<div class="persons-cards__descr-subtitle">Выпуск 2019 года</div>
					</div>
				</div>
				<div class="persons-cards__item">
					<div class="persons-cards__view">
						<div class="persons-cards__view-content" style="background-image: url('');"></div>
					</div>
					<div class="persons-cards__descr">
						<div class="persons-cards__descr-title">Молчанов Елисей Адольфович</div>
						<div class="persons-cards__descr-subtitle">Выпуск 2019 года</div>
					</div>
				</div>
				<div class="persons-cards__item">
					<div class="persons-cards__view">
						<div class="persons-cards__view-content" style="background-image: url('');"></div>
					</div>
					<div class="persons-cards__descr">
						<div class="persons-cards__descr-title">Зайцев Вячеслав Германович</div>
						<div class="persons-cards__descr-subtitle">Выпуск 2019 года</div>
					</div>
				</div>
				<div class="persons-cards__item">
					<div class="persons-cards__view">
						<div class="persons-cards__view-content" style="background-image: url('');"></div>
					</div>
					<div class="persons-cards__descr">
						<div class="persons-cards__descr-title">Селиверстов Антон Григорьевич</div>
						<div class="persons-cards__descr-subtitle">Выпуск 2019 года</div>
					</div>
				</div>
				<div class="persons-cards__item">
					<div class="persons-cards__view">
						<div class="persons-cards__view-content" style="background-image: url('');"></div>
					</div>
					<div class="persons-cards__descr">
						<div class="persons-cards__descr-title">Маслова Аделина Дмитриевна</div>
						<div class="persons-cards__descr-subtitle">Выпуск 2019 года</div>
					</div>
				</div>
			</div>

			<?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/pagination.php'); ?>
		</section>
	</div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/footer.php'); ?>