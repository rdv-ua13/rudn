<?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/header.php'); ?>

	<div class="container">
		<div class="page-wrapper about-employees">
			<?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/sidebar.php'); ?>

			<section class="page-content">
				<?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/breadcrumbs.php'); ?>

				<h1 class="page-content__title">Сотрудники</h1>

                <?/* TODO:@dromanov - think about implementation */?>
                <div class="page-content__filter">
                    <div class="page-content__filter-item">
                        <select class="visually-hidden js-custom-select" name="">
                            <option class="selected"
                                    value="0"
                                    selected
                            >
                                Административно-управленческий персонал-управленческий персонал
                            </option>
                            <option value="1">Административно-управленческий персонал 1</option>
                            <option value="2">Административно-управленческий персонал 2</option>
                            <option value="3">Административно-управленческий персонал 3</option>
                        </select>
                    </div>
                    <div class="page-content__filter-item">
                        <form id="" class="page-search" method="" action="">
                            <input id="" class="field-input field-input--search" type="search" name="" placeholder="Поиск сотрудника...">
                            <button class="btn">
                                <svg class="icon">
                                    <use href="/build/img/sprite.svg#search"></use>
                                </svg>
                                <span class="content-text content-text--right">Найти</span>
                            </button>
                        </form>
                    </div>

                </div>

				<div class="persons">
					<div class="persons__item">
                        <div class="persons__view">
                            <div class="persons__view-content" style="background-image: url('/build/img/person-img1.png');"></div>
                        </div>
						<div class="persons__info">
							<div class="h3 persons__title">Горидько Нина Павловна</div>
							<div class="persons__descr">
								<p>Кандидат экономических наук, доцент кафедры прикладной экономики Центра управления отраслями промышленности экономического факультета РУДН, старший научный сотрудник лаборатории экономической динамики и управления инновациями Института проблем управления им. В.А. Трапезникова РАН...</p>
							</div>
							<div class="persons__more">
								<a href="javascript:;" class="link link-underline">Подробнее о преподавателе</a>
							</div>
						</div>
					</div>
					<div class="persons__item">
						<div class="persons__view">
                            <div class="persons__view-content" style="background-image: url('');"></div>
                        </div>
						<div class="persons__info">
							<div class="h3 persons__title">Диесперова Наталья Александровна</div>
							<div class="persons__descr">
								<p>Кандидат экономических наук, доцент кафедры кафедры прикладной экономики экономического факультета РУДН</p>
								<p>Области научных интересов: управление инновациями, маркетинг и брендинг, конкурентоспособность предприятия, применение технологий больших данных, цифровая экономика</p>
							</div>
							<div class="persons__more">
								<a href="javascript:;" class="link link-underline">Подробнее о преподавателе</a>
							</div>
						</div>
					</div>
					<div class="persons__item">
						<div class="persons__view">
                            <div class="persons__view-content" style="background-image: url('');"></div>
                        </div>
						<div class="persons__info">
							<div class="h3 persons__title">Ермаков Владимир Анатольевич</div>
							<div class="persons__descr">
								<p>Кандидат экономических наук, доцент кафедры прикладной экономики.</p>
								<p>Тема диссертации: «Основные направления и методы совершенствования водохозяйственного строительства в условиях переходной экономики».</p>
							</div>
							<div class="persons__more">
								<a href="javascript:;" class="link link-underline">Подробнее о преподавателе</a>
							</div>
						</div>
					</div>
					<div class="persons__item">
						<div class="persons__view">
                            <div class="persons__view-content" style="background-image: url('');"></div>
                        </div>
						<div class="persons__info">
							<div class="h3 persons__title">Горидько Нина Павловна</div>
							<div class="persons__descr">
								<p>Кандидат экономических наук, доцент кафедры прикладной экономики Центра управления отраслями промышленности экономического факультета РУДН, старший научный сотрудник лаборатории экономической динамики и управления инновациями Института проблем управления им. В.А. Трапезникова РАН...</p>
							</div>
							<div class="persons__more">
								<a href="javascript:;" class="link link-underline">Подробнее о преподавателе</a>
							</div>
						</div>
					</div>
					<div class="persons__item">
						<div class="persons__view">
                            <div class="persons__view-content" style="background-image: url('');"></div>
                        </div>
						<div class="persons__info">
							<div class="h3 persons__title">Диесперова Наталья Александровна</div>
							<div class="persons__descr">
								<p>Кандидат экономических наук, доцент кафедры кафедры прикладной экономики экономического факультета РУДН</p>
								<p>Области научных интересов: управление инновациями, маркетинг и брендинг, конкурентоспособность предприятия, применение технологий больших данных, цифровая экономика</p>
							</div>
							<div class="persons__more">
								<a href="javascript:;" class="link link-underline">Подробнее о преподавателе</a>
							</div>
						</div>
					</div>
					<div class="persons__item">
						<div class="persons__view">
                            <div class="persons__view-content" style="background-image: url('');"></div>
                        </div>
						<div class="persons__info">
							<div class="h3 persons__title">Ермаков Владимир Анатольевич</div>
							<div class="persons__descr">
								<p>Кандидат экономических наук, доцент кафедры прикладной экономики.</p>
								<p>Тема диссертации: «Основные направления и методы совершенствования водохозяйственного строительства в условиях переходной экономики».</p>
							</div>
							<div class="persons__more">
								<a href="javascript:;" class="link link-underline">Подробнее о преподавателе</a>
							</div>
						</div>
					</div>
				</div>

				<?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/pagination.php'); ?>
			</section>
		</div>
	</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/footer.php'); ?>