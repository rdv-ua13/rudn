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
					<span class="content-text">Все лучшие выпускники</span>
				</a>

			</section>
		</div>
	</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/footer.php'); ?>