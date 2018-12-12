<?php

require_once "db.php";

if(!isset($_SESSION['jbx'])){

	exit();
}

?>


<!--  header -->
<?php include_once 'inc/header.php'; ?>
<!--  /header -->

<!--  body -->
<section class="">
	<?php sector_one(); ?>
</section>
			<!--============================= PRESS MENTIONING =============================-->
			<section class="press showdt">
				<?php sector_two(); ?>
			</section>

<section class="">
	<?php sector_three(); ?>
</section>
				<!-- 02. /Screenshots_area -->
				<!-- 07. service_area -->

<section class="press">
<?php sector_four(); ?>
</section>


				<!--============================= PRESS MENTIONING =============================-->
				<section class="press showmb">
					<?php sector_five(); ?>
				</section>

<section class="">
    <?php sector_six(); ?>
</section>

<!--  body -->


<!-- 13. footer -->
<?php include_once "inc/footer.php"; ?>
<!-- 13. /footer -->
