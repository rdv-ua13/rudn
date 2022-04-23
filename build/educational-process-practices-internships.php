<?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/header.php'); ?>

<div class="container">
	<div class="page-wrapper">
		<?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/sidebar.php'); ?>

		<section class="page-content">
			<?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/breadcrumbs.php'); ?>

			<h1 class="page-content__title">Практики и стажировки </h1>

			<div class="block-mb-medium">
				<div class="text-block">
					<p>Перечень видов, форм проведения и способов организации практик определяется в соответствии с образовательным стандартом. Информацию о том, какой вид практики организуется на конкретном году обучения по выбранной специальности, можно получить у руководителя практики от кафедры/ департамента.</p>
				</div>
			</div>

            <form id="" class="page-content__filter" action="" method="">
                <div class="page-content__filter-content">
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

			<div class="block-mb-medium tabs course-work-tabs">
				<div class="tabs-heading">
					<div class="tabs-heading__list">
						<label class="tabs-heading__item selected" data-target="1">
							<div class="h3 tabs-heading__title">Учебная</div>
							<input class="visually-hidden" type="radio" name="tab-about-structure" checked>
						</label>
						<label class="tabs-heading__item" data-target="2">
							<div class="h3 tabs-heading__title">Производственная</div>
							<input class="visually-hidden" type="radio" name="tab-about-structure">
						</label>
					</div>
				</div>
				<div class="tab-content">
					<section class="tab-content__section active" data-id="1">
						<div class="block-mb-xmedium tab-content__body">
							<div class="tab-content__item">
								<div class="title-mb-small">
									<div class="h5 title-mb-small">Авиационная Корпорация «Рубин»</div>
								</div>
								<div class="block-mb-xmedium">
									<div class="course-work-tabs__title">
										<span>Направления подготовки:</span>
										<span>Прикладная экономика</span>
									</div>
								</div>
								<div class="">
									<div class="text-block">
										<p>ПАО "Авиационная Корпорация "Рубин" (г. Балашиха) - бывший завод № 279 Министерства авиационной промышленности СССР, созданный в 1946 г., - единственное предприятие в странах СНГ и Российской Федерации, тематикой которого является создание и производство изделий взлетно-посадочных устройств, гидроагрегатов и гидросистем современных самолетов и других летательных аппаратов всех типов.</p>
									</div>
								</div>
							</div>
							<div class="tab-content__item">
								<div class="title-mb-small">
									<div class="h5 title-mb-small">Жуковский машиностроительный завод</div>
								</div>
								<div class="block-mb-xmedium">
									<div class="course-work-tabs__title">
										<span>Направления подготовки:</span>
										<span>Прикладная экономика</span>
									</div>
								</div>
								<div class="">
									<div class="text-block">
										<p>ООО “Жуковский машиностроительный завод” (г. Жуковский) – единственный российский серийный производитель аэродромной авиационной спецтехники.</p>
									</div>
								</div>
							</div>
							<div class="tab-content__item">
								<div class="title-mb-small">
									<div class="h5 title-mb-small">Раменский приборостроительный завод</div>
								</div>
								<div class="block-mb-xmedium">
									<div class="course-work-tabs__title">
										<span>Направления подготовки:</span>
										<span>Прикладная экономика</span>
									</div>
								</div>
								<div class="">
									<div class="text-block">
										<p>АО “Раменский приборостроительный завод (РПЗ)” (г. Раменское) – компания, занимающаяся выпуском сложного навигационного оборудования, в том числе авиационных комплексов.</p>
									</div>
								</div>
							</div>
							<div class="tab-content__item">
								<div class="title-mb-small">
									<div class="h5 title-mb-small">Ордена Трудового Красного Знамени Никитский ботанический сад - Национальный научный центр РАН</div>
								</div>
								<div class="block-mb-xmedium">
									<div class="course-work-tabs__title">
										<span>Направления подготовки:</span>
										<span>Прикладная экономика</span>
									</div>
								</div>
								<div class="">
									<div class="text-block">
										<p>ФГБУН “Ордена Трудового Красного Знамени Никитский ботанический сад – Национальный научный центр РАН” (г. Ялта) – родоначальник таких отраслей народного хозяйства, как виноградорство, эфиромасличное растениеводство, южное декоративное садоводство, южное и субтропическое плодоводство, крупнейшее в России хранилище видового и сортового разнообразия южных плодовых культур.</p>
									</div>
								</div>
							</div>
							<div class="tab-content__item">
								<div class="title-mb-small">
									<div class="h5 title-mb-small">Всероссийский научно-исследовательский институт цветоводства и сбтропических культур</div>
								</div>
								<div class="block-mb-xmedium">
									<div class="course-work-tabs__title">
										<span>Направления подготовки:</span>
										<span>Прикладная экономика</span>
									</div>
								</div>
								<div class="">
									<div class="text-block">
										<p>ФГБНУ “Всероссийский научно-исследовательский институт цветоводства и субтропических культур (г. Сочи) – один из крупнейших НИИ, который занимается изучением зимостойких сортов чая и плодовых культур, проведением биохимических анализов для чайных хозяйств, экспертизы качества растений, оценкой качества почв и земель и др.</p>
									</div>
								</div>
							</div>
						</div>
                        <a class="btn btn-noframe btn-noframe--bordered d-flex-mobile" href="javascript:;">
                            <span class="content-text">Показать еще</span>
                        </a>
					</section>
					<section class="tab-content__section" data-id="2">
                        <div class="block-mb-xmedium tab-content__body">
                            <div class="tab-content__item">
                                <div class="title-mb-small">
                                    <div class="h5 title-mb-small">Авиационная Корпорация «Рубин»2</div>
                                </div>
                                <div class="block-mb-xmedium">
                                    <div class="course-work-tabs__title">
                                        <span>Направления подготовки:</span>
                                        <span>Прикладная экономика</span>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="text-block">
                                        <p>ПАО "Авиационная Корпорация "Рубин" (г. Балашиха) - бывший завод № 279 Министерства авиационной промышленности СССР, созданный в 1946 г., - единственное предприятие в странах СНГ и Российской Федерации, тематикой которого является создание и производство изделий взлетно-посадочных устройств, гидроагрегатов и гидросистем современных самолетов и других летательных аппаратов всех типов.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content__item">
                                <div class="title-mb-small">
                                    <div class="h5 title-mb-small">Жуковский машиностроительный завод</div>
                                </div>
                                <div class="block-mb-xmedium">
                                    <div class="course-work-tabs__title">
                                        <span>Направления подготовки:</span>
                                        <span>Прикладная экономика</span>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="text-block">
                                        <p>ООО “Жуковский машиностроительный завод” (г. Жуковский) – единственный российский серийный производитель аэродромной авиационной спецтехники.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content__item">
                                <div class="title-mb-small">
                                    <div class="h5 title-mb-small">Раменский приборостроительный завод</div>
                                </div>
                                <div class="block-mb-xmedium">
                                    <div class="course-work-tabs__title">
                                        <span>Направления подготовки:</span>
                                        <span>Прикладная экономика</span>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="text-block">
                                        <p>АО “Раменский приборостроительный завод (РПЗ)” (г. Раменское) – компания, занимающаяся выпуском сложного навигационного оборудования, в том числе авиационных комплексов.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content__item">
                                <div class="title-mb-small">
                                    <div class="h5 title-mb-small">Ордена Трудового Красного Знамени Никитский ботанический сад - Национальный научный центр РАН</div>
                                </div>
                                <div class="block-mb-xmedium">
                                    <div class="course-work-tabs__title">
                                        <span>Направления подготовки:</span>
                                        <span>Прикладная экономика</span>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="text-block">
                                        <p>ФГБУН “Ордена Трудового Красного Знамени Никитский ботанический сад – Национальный научный центр РАН” (г. Ялта) – родоначальник таких отраслей народного хозяйства, как виноградорство, эфиромасличное растениеводство, южное декоративное садоводство, южное и субтропическое плодоводство, крупнейшее в России хранилище видового и сортового разнообразия южных плодовых культур.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content__item">
                                <div class="title-mb-small">
                                    <div class="h5 title-mb-small">Всероссийский научно-исследовательский институт цветоводства и сбтропических культур</div>
                                </div>
                                <div class="block-mb-xmedium">
                                    <div class="course-work-tabs__title">
                                        <span>Направления подготовки:</span>
                                        <span>Прикладная экономика</span>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="text-block">
                                        <p>ФГБНУ “Всероссийский научно-исследовательский институт цветоводства и субтропических культур (г. Сочи) – один из крупнейших НИИ, который занимается изучением зимостойких сортов чая и плодовых культур, проведением биохимических анализов для чайных хозяйств, экспертизы качества растений, оценкой качества почв и земель и др.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-noframe btn-noframe--bordered d-flex-mobile" href="javascript:;">
                            <span class="content-text">Показать еще</span>
                        </a>
					</section>
				</div>
			</div>

            <div class="block-mb-medium">
                <div class="h3 title-mb-big">Программа практик</div>
                <div class="note bg-radial-blue">
                    <div class="text-block">
                        <p>Контент</p>
                    </div>
                </div>
            </div>

            <div class="block-mb-medium">
                <div class="h3 title-mb-big">Отчеты по практикам</div>
                <div class="block-mb-xmedium">
                    <div class="text-block">
                        <p>Кандидат экономических наук, доцент кафедры прикладной экономики Центра управления отраслями промышленности экономического факультета РУДН, старший научный сотрудник лаборатории экономической динамики и управления инновациями Института проблем управления им. В.А. Трапезникова РАН.</p>
                    </div>
                </div>
                <div class="block-mb-xmedium">
                    <div class="download-docs">
                        <div class="download-docs__item">
                            <a href="javascript:;">
                            <span class="download-docs__view">
                                <svg class="icon">
                                    <use href="/build/img/sprite.svg#file-pdf"></use>
                                </svg>
                            </span>
                                <span class="download-docs__descr">
                                <span class="download-docs__descr-title">Шаблон документа</span>
                                <span class="download-docs__descr-size">13.5 МБ</span>
                            </span>
                            </a>
                        </div>
                        <div class="download-docs__item">
                            <a href="javascript:;">
                            <span class="download-docs__view">
                                <svg class="icon">
                                    <use href="/build/img/sprite.svg#file-pdf"></use>
                                </svg>
                            </span>
                                <span class="download-docs__descr">
                                <span class="download-docs__descr-title">Шаблон документа</span>
                                <span class="download-docs__descr-size">13.5 МБ</span>
                            </span>
                            </a>
                        </div>
                        <div class="download-docs__item">
                            <a href="javascript:;">
                            <span class="download-docs__view">
                                <svg class="icon">
                                    <use href="/build/img/sprite.svg#file-pdf"></use>
                                </svg>
                            </span>
                                <span class="download-docs__descr">
                                <span class="download-docs__descr-title">Шаблон документа</span>
                                <span class="download-docs__descr-size">13.5 МБ</span>
                            </span>
                            </a>
                        </div>
                        <div class="download-docs__item">
                            <a href="javascript:;">
                            <span class="download-docs__view">
                                <svg class="icon">
                                    <use href="/build/img/sprite.svg#file-pdf"></use>
                                </svg>
                            </span>
                                <span class="download-docs__descr">
                                <span class="download-docs__descr-title">Шаблон документа</span>
                                <span class="download-docs__descr-size">13.5 МБ</span>
                            </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="">
                <div class="h3 title-mb-big">Лучшие кейсы по практикам</div>
                <div class="programs">
                    <div class="programs__item">
                        <div class="block-mb-xmedium">
                            <div class="h5">Название кейса</div>
                        </div>
                        <div class="block-mb-xmedium">
                            <div class="course-work-tabs__title">
                                <span>ФИО студента:</span>
                                <span>Куликова Владислава Владимировна</span>
                            </div>
                            <div class="course-work-tabs__title">
                                <span>Место прохождения практики:</span>
                                <span>Всероссийский научно-исследовательский институт цветоводства и субтропических культур</span>
                            </div>
                        </div>
                        <div class="">
                            <div class="text-block">
                                <p>История студента, чему научились. Кандидат экономических наук, доцент кафедры прикладной экономики Центра управления отраслями промышленности экономического факультета РУДН, старщий научный сотрудник лаборатории экономической данамики и управления инновациями Института проблем управления им. В. А. Трапезникова РАН.</p>
                            </div>
                        </div>
                    </div>
                    <div class="programs__item">
                        <div class="block-mb-xmedium">
                            <div class="h5">Название кейса</div>
                        </div>
                        <div class="block-mb-xmedium">
                            <div class="course-work-tabs__title">
                                <span>ФИО студента:</span>
                                <span>Куликова Владислава Владимировна</span>
                            </div>
                            <div class="course-work-tabs__title">
                                <span>Место прохождения практики:</span>
                                <span>Всероссийский научно-исследовательский институт цветоводства и субтропических культур</span>
                            </div>
                        </div>
                        <div class="">
                            <div class="text-block">
                                <p>История студента, чему научились. Кандидат экономических наук, доцент кафедры прикладной экономики Центра управления отраслями промышленности экономического факультета РУДН, старщий научный сотрудник лаборатории экономической данамики и управления инновациями Института проблем управления им. В. А. Трапезникова РАН.</p>
                            </div>
                        </div>
                    </div>
                    <div class="programs__item">
                        <div class="block-mb-xmedium">
                            <div class="h5">Название кейса</div>
                        </div>
                        <div class="block-mb-xmedium">
                            <div class="course-work-tabs__title">
                                <span>ФИО студента:</span>
                                <span>Куликова Владислава Владимировна</span>
                            </div>
                            <div class="course-work-tabs__title">
                                <span>Место прохождения практики:</span>
                                <span>Всероссийский научно-исследовательский институт цветоводства и субтропических культур</span>
                            </div>
                        </div>
                        <div class="">
                            <div class="text-block">
                                <p>История студента, чему научились. Кандидат экономических наук, доцент кафедры прикладной экономики Центра управления отраслями промышленности экономического факультета РУДН, старщий научный сотрудник лаборатории экономической данамики и управления инновациями Института проблем управления им. В. А. Трапезникова РАН.</p>
                            </div>
                        </div>
                    </div>
                    <div class="programs__item">
                        <div class="block-mb-xmedium">
                            <div class="h5">Название кейса</div>
                        </div>
                        <div class="block-mb-xmedium">
                            <div class="course-work-tabs__title">
                                <span>ФИО студента:</span>
                                <span>Куликова Владислава Владимировна</span>
                            </div>
                            <div class="course-work-tabs__title">
                                <span>Место прохождения практики:</span>
                                <span>Всероссийский научно-исследовательский институт цветоводства и субтропических культур</span>
                            </div>
                        </div>
                        <div class="">
                            <div class="text-block">
                                <p>История студента, чему научились. Кандидат экономических наук, доцент кафедры прикладной экономики Центра управления отраслями промышленности экономического факультета РУДН, старщий научный сотрудник лаборатории экономической данамики и управления инновациями Института проблем управления им. В. А. Трапезникова РАН.</p>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-noframe btn-noframe--bordered d-flex-mobile" href="javascript:;">
                        <span class="content-text">Показать еще</span>
                    </a>
                </div>
            </div>

		</section>
	</div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/footer.php'); ?>