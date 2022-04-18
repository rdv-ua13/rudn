<?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/header.php'); ?>

<div class="container">
	<div class="page-wrapper">
		<?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/sidebar.php'); ?>

		<section class="page-content about-structure">
			<?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/breadcrumbs.php'); ?>

			<h1 class="page-content__title">Структура Высшей школы</h1>

            <div class="tabs about-structure-tabs">
                <div class="tabs-heading">
                    <div class="tabs-heading__list">
                        <label class="tabs-heading__item selected" data-target="1">
                            <div class="h3 tabs-heading__title">Кафедры</div>
                            <input class="visually-hidden" type="radio" name="tab-about-structure" checked>
                        </label>
                        <label class="tabs-heading__item" data-target="2">
                            <div class="h3 tabs-heading__title">Лаборатории</div>
                            <input class="visually-hidden" type="radio" name="tab-about-structure">
                        </label>
                    </div>
                </div>
                <div class="tab-content">
                    <section class="tab-content__section tab-content__section-departments active" data-id="1">
                        <div class="tab-content__body">
                            <div class="tab-content__item">
                                <div class="h4 tab-content__title">Кафедра Прикладной экономики</div>
                                <div class="tab-content__descr">6 направлений</div>
                                <div class="tab-content__btn">
                                    <a class="btn" href="javascript:;">
                                        <span class="content-text content-text--left">Направления</span>
                                        <svg class="icon rotate-right">
                                            <use href="/build/img/sprite.svg#arrow-down"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="tab-content__item">
                                <div class="h4 tab-content__title">Кафедра Управления цифровым предприятием в топливно-энергетическом комплексе</div>
                                <div class="tab-content__descr">1 направлений</div>
                                <div class="tab-content__btn">
                                    <a class="btn" href="javascript:;">
                                        <span class="content-text content-text--left">Направления</span>
                                        <svg class="icon rotate-right">
                                            <use href="/build/img/sprite.svg#arrow-down"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="tab-content__item">
                                <div class="h4 tab-content__title">Кафедра Комплаенс-контроля в деятельности организаций</div>
                                <div class="tab-content__descr">1 направлений</div>
                                <div class="tab-content__btn">
                                    <a class="btn" href="javascript:;">
                                        <span class="content-text content-text--left">Направления</span>
                                        <svg class="icon rotate-right">
                                            <use href="/build/img/sprite.svg#arrow-down"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="tab-content__item">
                                <div class="h4 tab-content__title">Кафедра Инновационного менеджмента и внешнеэкономической деятельности в промышленности</div>
                                <div class="tab-content__descr">1 направлений</div>
                                <div class="tab-content__btn">
                                    <a class="btn" href="javascript:;">
                                        <span class="content-text content-text--left">Направления</span>
                                        <svg class="icon rotate-right">
                                            <use href="/build/img/sprite.svg#arrow-down"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="tab-content__item">
                                <div class="h4 tab-content__title">Кафедра Комплаенс-контроля в деятельности организаций</div>
                                <div class="tab-content__descr">1 направлений</div>
                                <div class="tab-content__btn">
                                    <a class="btn" href="javascript:;">
                                        <span class="content-text content-text--left">Направления</span>
                                        <svg class="icon rotate-right">
                                            <use href="/build/img/sprite.svg#arrow-down"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content__pagination">
							<?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/pagination.php'); ?>
                        </div>
                    </section>
                    <section class="tab-content__section tab-content__section-labs" data-id="2">
                        <div class="tab-content__body">
                            <div class="tab-content__item">
                                <div class="h4 tab-content__title">Лаборатория «Центр исследования философии и культуры Индии «Пурушоттама»</div>
                                <div class="tab-content__descr">Направление научных исследований лаборатории осуществляется по теме «Разработка методологии и интеллектуальной базы нового поколения по изучению индийской философии в ее соотношении с другими ведущими философскими традициями Евразии».  Цель реализуемого в лаборатории проекта – разработка концепций и новых методологических подходов, которые позволят по-новому взглянуть на индийскую философию, оценить с учетом изменений в современном мире ее главные философские понятия и концепции, выявить их интеллектуальную значимость для приоритетных философских традиций.</div>
                                <div class="tab-content__btn">
                                    <a class="btn" href="javascript:;">
                                        <span class="content-text content-text--left">Подробнее</span>
                                        <svg class="icon rotate-right">
                                            <use href="/build/img/sprite.svg#arrow-down"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="tab-content__item">
                                <div class="h4 tab-content__title">Центр национальной технологической инициативы (ЦНТИ) «Нейротехнологии»</div>
                                <div class="tab-content__descr">В Центре национальной технологической инициативы (ЦНТИ) «Нейротехнологии» реализуются фундаментальные и прикладные исследования в области систем искусственного интеллекта и когнитивных наук. Центр ориентируется на внедрение своих разработок в научные области, соответствующие рынкам Национальной технологической инициативы и сквозным технологиям.</div>
                                <div class="tab-content__btn">
                                    <a class="btn" href="javascript:;">
                                        <span class="content-text content-text--left">Подробнее</span>
                                        <svg class="icon rotate-right">
                                            <use href="/build/img/sprite.svg#arrow-down"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="tab-content__item">
                                <div class="h4 tab-content__title">Центр национальной технологической инициативы «Фотоника»</div>
                                <div class="tab-content__descr">Центр национальной технологической инициативы «Фотоника» предназначен для создания и коммерциализации новых продуктов и технологий, а также улучшения качества и эффективности научно-исследовательских и опытно-конструкторских работ в области фотоники, оптоэлектроники и лазерных технологий.</div>
                                <div class="tab-content__btn">
                                    <a class="btn" href="javascript:;">
                                        <span class="content-text content-text--left">Подробнее</span>
                                        <svg class="icon rotate-right">
                                            <use href="/build/img/sprite.svg#arrow-down"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="tab-content__item">
                                <div class="h4 tab-content__title">Лаборатория агробиотехнологии и молекулярной генетики</div>
                                <div class="tab-content__descr">Лаборатория – научно-производственная база Агробиотехнологического департамента. Лаборатория также используется для подготовки выпускных квалификационных работ студентов, научно-исследовательской работы аспирантов, проведения курсов дополнительного профессионального образования.</div>
                                <div class="tab-content__btn">
                                    <a class="btn" href="javascript:;">
                                        <span class="content-text content-text--left">Подробнее</span>
                                        <svg class="icon rotate-right">
                                            <use href="/build/img/sprite.svg#arrow-down"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="tab-content__item">
                                <div class="h4 tab-content__title">Научный центр исследований, комплексного проектирования и развития городского и сельского хозяйства</div>
                                <div class="tab-content__descr">Научный центр Городского сельского хозяйства (Rural Urban Framework Center), основан 08 июня 2020 года после победы в конкурсе на создание научной академической лаборатории прикладных исследований. Выполняет широкий спектр научных разработок и оказываемых услуг в области бесконтактного мониторинга, геодизайна, проектирования экоустойчивой архитектуры и «зелёного» строительства, а также других направлений. Научный центр полностью находится на самоокупаемости.</div>
                                <div class="tab-content__btn">
                                    <a class="btn" href="javascript:;">
                                        <span class="content-text content-text--left">Подробнее</span>
                                        <svg class="icon rotate-right">
                                            <use href="/build/img/sprite.svg#arrow-down"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content__pagination">
							<?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/pagination.php'); ?>
                        </div>
                    </section>
                </div>
            </div>
		</section>
	</div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/footer.php'); ?>