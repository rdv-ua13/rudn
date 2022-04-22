<?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/header.php'); ?>

	<div class="container">
		<div class="page-wrapper">
			<?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/sidebar.php'); ?>

			<section class="page-content">
				<?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/breadcrumbs.php'); ?>

				<a class="page-content__back" href="javascript:;">
					<svg class="icon rotate-left">
						<use href="/build/img/sprite.svg#arrow-down"></use>
					</svg>
					<span class="content-text">Все выпускники</span>
				</a>

				<div class="persons persons-details">
					<div class="persons__item">
						<div class="persons__view">
							<div class="persons__view-content" style="background-image: url('/build/img/person-img1.png');"></div>
						</div>
						<div class="persons__info-title">
							<div class="h1 persons__title">Комиссаров Аристарх Богуславович</div> <?/* TODO: h1 - can be a tag and a class */?>
							<div class="persons__subtitle">Выпуск 2019 года</div>
						</div>
						<div class="persons__info">
							<div class="persons__descr persons__descr-socials">
                                <ul class="persons__socials">
                                    <li>
                                        <a href="javascript:;">
                                            <svg class="icon">
                                                <use href="/build/img/sprite.svg#soc-twitter-filled"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <svg class="icon">
                                                <use href="/build/img/sprite.svg#soc-vkontakte-filled"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <svg class="icon">
                                                <use href="/build/img/sprite.svg#soc-odnoklassniki-filled"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <svg class="icon">
                                                <use href="/build/img/sprite.svg#soc-facebook-filled"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <svg class="icon">
                                                <use href="/build/img/sprite.svg#soc-instagram-filled"></use>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
							</div>
						</div>
					</div>
				</div>

				<div class="block-mb-medium">
                    <div class="h3 title-mb-big">Направления подготовки</div>
                    <div class="text-block">
                        <ul>
                            <li>1.03.02 Девелопмент и управление недвижимостью</li>
                            <li>1.63.08 Принятие эффективных управленческих решений (Big Data Economics)</li>
                        </ul>
                    </div>
                </div>
				<div class="block-mb-medium">
                    <div class="h3 title-mb-big">Место работы</div>
                    <div class="text-block">
                        <ul>
                            <li>ООО «Национальная библиотека научной литературы им. И.О. Моисеева»</li>
                        </ul>
                    </div>
                </div>
				<div class="block-mb-medium">
                    <div class="h3 title-mb-big">Биография</div>
                    <div class="text-block">
                        <p>Кандидат экономических наук, доцент кафедры прикладной экономики Центра управления отраслями промышленности экономического факультета РУДН, старший научный сотрудник лаборатории экономической динамики и управления инновациями Института проблем управления им. В.А. Трапезникова РАН.</p>
                        <p>Кандидат экономических наук, доцент кафедры прикладной экономики Центра управления отраслями промышленности экономического факультета РУДН, старший научный сотрудник лаборатории экономической динамики и управления инновациями Института проблем управления им. В.А. Трапезникова РАН.</p>
                    </div>
                </div>
                <div class="bg-radial-blue note note-quotes">
                    <div class="text-block">
                        <p>Кандидат экономических наук, доцент кафедры прикладной экономики Центра управления отраслями промышленности экономического факультета РУДН, старший научный сотрудник лаборатории</p>
                    </div>
                </div>

			</section>
		</div>
	</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/footer.php'); ?>