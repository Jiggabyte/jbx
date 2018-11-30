<?php
/**
 * Created by PhpStorm.
 * User: jigga
 * Date: 11/27/18
 * Time: 3:18 PM
 */
require_once "templates/articler/config.php";
require_once "templates/articler/classes/Article.php";

$_GET['art'] = '';
?>

<?php function home_area() { ?>
<div class="home_area spt100">
				<div class="container">
					<div class="row">
					
						<div class="col-md-7 col-xs-12 home_col" style="height: 488px;">
						 
							<div class="home_content animated a_fl fadeInLeft" style="opacity: 1;">
								<div class="h1">CreditShore</div>
								<div class="h3">Let us take your dream into reality.<br>Every <span>Business</span> counts...</div>
								<div class="home_btn">
									<a href="contactus.php" class="home_btn btn default-btn hvr-shutter-out-horizontal" style="background-color:#ff253a;">Get Started</a>
									<a href="contactus.php" class="home_btn btn default-btn hvr-shutter-out-horizontal mobile-only" style="background-color:#ff253a;">Get Started</a>
								</div>
							</div>
						</div>
						<div class="col-md-5 col-xs-12 home_col" style="height: 488px;">
							<div class="home_img relative text-right">

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- 01. /hero_area -->
		<div class="bg-white">
			<div class="clearfix"></div>
        </div>
<?php } ?>

<?php function press_img() { ?>
<div class="container">
					<div class="row">
						<div class="h1">Our Partners:</div>
						<div class="col-md-4">
							<div><a href="https://www.oradian.com" target="_blank"><img class="" src="assets/oradian.jpeg"></a></div>
							<div><a href="https://softwaregroup.com" target="_blank"><img src="assets/software.png"></a></div>
						</div>
						<div class="col-md-4 top50">
							<div><a href="#" target="_blank"></a></div>
							<!-- <div><span>50</span><div></div></div>
							<div class="text">Top 50<br>Digital Only Banks<br>Ranking 2017</div> -->
						</div>
						<div class="col-md-4">

							<div style="margin-top:70px;"><a href="http://www.oradian.com" target="_blank"><img src="assets/paystack.png"></a></div>
							<div style="margin-top:30px;"><a href="https://www.flutterwave.com.ng/" target="_blank"><img src="assets/flutter.png"></a></div>
						</div>
					</div>
</div>
<?php } ?>

<?php function partners() { ?>
			<!-- 04. product_area -->
			<div class="product_area spt50" id="product">
				<div class="container">
					<div class="row left_dsc">
						<div class="col-md-7 product_col" style="height: 417px;">
							<style>
								legend {
									background-color: #ff253a;
									color: #fff;
									padding: 3px 6px;
									font-size: 1.5em;
									font-weight: bold;
								}

								.output {
									font: 1rem "Fira Sans", sans-serif;
								}

								label {
									margin-top: 1rem;
									display: block;
									font-size: 1.5em;
									font-weight: bold;
								}

								.slider {
									-webkit-appearance: none;
									width: 100%;
									height: 15px;
									border-radius: 5px;
									background: #d3d3d3;
									outline: none;
									opacity: 0.7;
									-webkit-transition: .2s;
									transition: opacity .2s;
								}

								.slider::-webkit-slider-thumb {
									-webkit-appearance: none;
									appearance: none;
									width: 25px;
									height: 25px;
									background: #ff253a;
									cursor: pointer;
								}

								.slider::-moz-range-thumb {
									width: 25px;
									height: 25px;
									background: #ff253a;
									cursor: pointer;
								}

								input[type=range]::-webkit-slider-runnable-track {
									width: 100%;
									height:110%;
									cursor: pointer;
									box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
									background: #adadad;
									border-radius: 1.3px;
									border: 0.2px solid #010101;
								}

								input[type=range]:focus::-webkit-slider-runnable-track {
									background: #adadad;
								}

								input[type=range]::-moz-range-track {
									width: 100%;
									height: 110%;
									cursor: pointer;
									box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
									background: #adadad;
									border-radius: 1.3px;
									border: 0.2px solid #010101;
								}

								input[type=range]::-ms-track {
									width: 100%;
									height: 110%;
									cursor: pointer;
									background: transparent;
									border-color: transparent;
									border-width: 16px 0;
									color: transparent;
								}
								input[type=range]::-ms-fill-lower {
									background: #2a6495;
									border: 0.2px solid #010101;
									border-radius: 2.6px;
									box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
								}
								input[type=range]:focus::-ms-fill-lower {
									background: #3071a9;
								}
								input[type=range]::-ms-fill-upper {
									background: #3071a9;
									border: 0.2px solid #010101;
									border-radius: 2.6px;
									box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
								}
								input[type=range]:focus::-ms-fill-upper {
									background: #367ebd;
								}

							</style>
							<form action="apply.php#app" method="post" enctype="multipart/form-data">
								<fieldset>
									<legend>How Much Do You Need?</legend>

									<label for="start">I need  ₦<span id="naira" style="color:blue;">50000</span>.</label>
									<input type="range" id="start" class="start slider" name="amount"
									       min="50000" max="2000000" value="50000" step="10000" />

									<label for="startx">I will pay it over <span id="dura" style="color:blue;">1</span> months.</label>
									<input type="range" id="startx" class="startx slider" name="duration""
									min="1" max="6" value="1" step="1" />

								</fieldset>
								<h3 class="align-left mbr-bold mbr-fonts-style display-5">
									<u>Total Payments</u>
									<br>
									₦<span id="topay" style="color:blue;">52500</span>.
									<input type="hidden" id="topayInput" name="topay" value="">
								</h3>
								<h3 class="align-left mbr-bold mbr-fonts-style display-5">
									<u>Monthly Payments</u>
									<br>
									₦<span id="mopay" style="color:blue;">52500</span>.
									<input type="hidden" id="mopayInput" name="mopay" value="">
								</h3>
								<div class="mbr-section-btn align-left py-4">
									<button type="submit" name="sub_apply_index" class="btn btn-primary display-4" style="background-color: #ff253a!important;">Apply</button>
								</div>
							</form>
						</div>
						<div class="col-md-5 product_col" style="height: 417px;">
							<div class="product_img relative spt50">
								<img class="animated a_fl fadeInLeft" src="assets/naira2.jpg" alt="" style="opacity: 1;">
							</div>
						</div>
					</div>

				</div>
				<!-- 04. /product_area -->

				<div class="clearfix"></div>
<?php } ?>

<?php function partners_x() { ?>
<div class="container">
						<div class="row">
							<div class="h1">Our Partners:</div>
							<div class="col-md-4 col-xs-4 press-img">
								<div><a href="https://www.oradian.com" target="_blank"><img class="except" src="assets/oradian.jpeg"></a></div>
								<div><a href="https://www.softwaregroup.com" target="_blank"><img src="assets/software.png"></a></div>

							</div>
							<div class="col-md-4 col-xs-4 top50">
								<div><a href="#" target="_blank"></a></div>
								<!-- <div><span>50</span><div></div></div>
								<div class="text">Top 50<br>Digital Only Banks<br>Ranking 2017</div> -->
							</div>
							<div class="col-md-4 col-xs-4 press-img">
								<div><a href="http://www.paystack.com" target="_blank"><img src="assets/paystack.png"></a></div>
								<div><a href="http://www.flutterwave.com.ng" target="_blank"><img class="except" src="assets/flutter.png"></a></div>

							</div>
						</div>
					</div>
<?php } ?>

<?php function testimony() { ?>
<!-- 12. cta_2 -->
				<div class="cta_2 animated a_fu fadeInUp" id="cta" style="opacity: 1;">
					<div class="container">

					</div>
				</div>
				<!-- 12. /cta_2 -->
				<div class="security_area animated a_fu sp100 text-center fadeInUp" id="security" style="opacity: 1;">
					<div class="container">
						<h1>Testimonials.</h1>
						<div class="row">
							<div class="col-md-4 col-xs-4">
								<span><img src="assets/eby.png" style="width:300px;" alt="1st"></span>
								<h4>Ebere</h4>
								<p>
									You will receive real term alerts so that you always know what is happening in your account. If you ever suspect an unauthorised charge you can take control by temporarily blocking your card.
								</p>
							</div>
							<div class="col-md-4 col-xs-4">
								<span><img src="assets/red300.png" style="width:300px;" alt="2nd"></span>
								<h4>Nolly</h4>
								<p>
									Your deposits are insured by the Nigerian Deposit Insurance Corporation, who are responsible for insuring all bank deposits in Nigeria. It is an entity owned by the Central Bank of Nigeria.
								</p>
							</div>
							<div class="col-md-4 col-xs-4">
								<span><img src="assets/cry.png" style="width:300px;" alt="3rd"></span>
								<h4>Delta</h4>
								<p>
									Have a question? Check our <a href="">FAQ</a> page for answers to frequently asked questions. You can also email us at help@com
								</p>
							</div>
						</div>
					</div>
				</div>
<?php } ?>

<?php function arti_blog() {   ?>
<div class="service_area sp100" id="service">
					<div class="container">
						<div class="row">
							<div class="col-md-7 title">

								<?php
                                global $dane;

                                alerter($dane,'100px','200px');

								$nim = "";
								$data = Article::getList();
								$min = 1;
								$max = 1;
								if(!empty($data["totalRows"])){
									$max = $data["totalRows"];
								}

								if($_GET["art"] > 0){
									$nim = $_GET["art"];
								}else {
									$nim = mt_rand($min,$max);
								}

								function archive() {
									$results = array();
									$data = Article::getList();
									$results["articles"] = $data["results"];
									$results["totalRows"] = $data["totalRows"];
									$results["pageTitle"] = "Article Archive ";
									require( TEMPLATE_PATH . "/archive.php" );

								}

								function viewArticle() {
									if ( !isset($_GET["articleId"]) || !$_GET["articleId"] ) {
										homepage();
										return;
									}

									$results = array();
									$results["article"] = Article::getById( (int)$_GET["articleId"] );
									$results["pageTitle"] = $results["article"]->title . "";
									$saca = "";
									require( TEMPLATE_PATH . "/viewArticle.php" );
								}

								/**
								 *
								 */
								function homepage()
								{
									/** $results = array();
									$data = Article::getList(HOMEPAGE_NUM_ARTICLES);
									$results["articles"] = $data["results"];
									$results["totalRows"] = $data["totalRows"];
									$results["pageTitle"] = ""; **/

									// if ( !isset($_GET["articleId"]) || !$_GET["articleId"] ) {
									//   homepage();
									//   return;
									// }

									global $nim;

									$results = array();
									$results["article"] = Article::getById( (int)$nim );

									if(!empty($results["article"])){
										$results["pageTitle"] = $results["article"]->title . "";
										$saca = "";
										require(TEMPLATE_PATH . "/viewArticleIndex.php");
									} else {
										$results["article"] = Article::getById( (int)1 );
										$results["pageTitle"] = $results["article"]->title . "";
										$saca = "";
										require(TEMPLATE_PATH . "/viewArticleIndex.php");
									}



								}

								$action = isset( $_GET["action"] ) ? $_GET["action"] : "";

								switch ( $action ) {
									case "archive":
										archive();
										break;
									case "viewArticle":
										viewArticle();
										break;
									default:
										homepage();
								}



								?>

							</div>
							<div class="col-md-5 explain">
								<div id="showDivSum" style="background-color:;width:;height:;overflow:auto;">

									<?php

									$results = array();
									$data = Article::getList(5);
									$results["articles"] = $data["results"];
									$results["totalRows"] = $data["totalRows"];
									$results["pageTitle"] = "";

									?>

									<div id="cont">

										<ul id="headlines">

											<?php foreach ( $results["articles"] as $article ) { ?>

												<li>
													<h2>
														<a href="?action=viewArticle&amp;articleId=<?php echo $article->id?>"><?php echo htmlspecialchars( $article->title )?></a>
													</h2>
													<h3 class="summary" style="width:300px;"><?php echo htmlspecialchars( $article->summary )?></h3>
													<br />
													<h4><span class="pubDate"><?php echo date("j F", $article->publicationDate)?></span></h4>
												</li>

											<?php } ?>

											<li class="view-more">
												<a href="?action=archive"><p style="font-size:1.4em;text-decoration:underline;" data-metrics-link="1-all">Blog Archive</p></a>
											</li>
										</ul>




									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
				<!-- 07. /service_area -->
<?php } ?>

<?php
 function sector_one(){
	 home_area();
 }

function sector_two(){
	 press_img();
}

function sector_three(){
	 partners();
}

function sector_four(){
	 arti_blog();
}

function sector_five(){
	 partners_x();
}

function sector_six(){
	 testimony();
}

?>