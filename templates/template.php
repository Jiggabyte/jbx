<?php
/**
 * JB X - A lightweight PHP MVC Boilerplate
 *
 * @package  JB X
 * @author   Sixtus Onumajuru <jigga.e10@gmail.com>
 */
if(!isset($_SESSION['jbx'])){
	exit();
}
?>


<!--  header -->
<?php include_once 'inc/header.php'; ?>
<!--  /header -->


<div class="container">
    <div class="content">
		<?php sector_one() ?>
    </div>
</div>


<!-- 13. footer -->
<?php include_once "inc/footer.php"; ?>
<!-- 13. /footer -->