<?php


if(!isset($_SESSION['jbx'])){

	exit();
}

?>
<footer class="footer animated a_fu fadeInUp" id="footer" style="opacity: 1;">
                <div class="footer_btm">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-1 col-xs-1 lg">
                                <a href="" class="logo">
                                <img src="assets/creditshore-footer-logo-122x37.png" alt="logo">
                            </a>
                            </div>
                            <div class="col-md-3 col-xs-3 menu">
                                <nav>
                                <ul class="menu hidden-xs hidden-sm">
                                    <li><a href="contactus.php">Contact Us</a></li>
                                    <li><a href="about.php">About</a></li>
                                    <li><a href="faq.php#faq">FAQs</a></li>
                                    <li><a href="blog.php" target="_blank">Blog</a></li>
                                </ul>
                            </nav>
                            </div>
                            <div class="col-md-4 col-xs-6 cp">
                                <div class="foo_txt">
                                    <p>© Copyright 2018 CreditShore. All Rights Reserved.</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-4 lnks">
                                <div class="social-links">
                                    <ul>
                                        <li class="fb"><a href="https://www.facebook.com/creditshorecoop"><i class="fab fa-facebook-square"></i></a></li>
                                        <li class="tw"><a href="https://twitter.com/creditshore"><i class="fab fa-twitter-square"></i></a></li>
                                      <!--  <li class="in"><a href="https://www.instagram.com//"><i class="fab fa-instagram"></i></a></li> -->
                                        <li class="li"><a href="https://www.linkedin.com/in/creditshore-cooperative-95a223135/"><i class="fab fa-linkedin-square"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </footer>
</div>
</div>
</div>



<!-- (necessary JavaScript plugins) -->
<script src="assets/script/bootstrap.min.js"></script> <!-- Bootstrap -->
<script src="assets/script/jquery.prettyphoto.min.js"></script>    <!-- prettyphoto -->
<script src="assets/script/jquery.parallax.min.js"></script>   <!-- parallax -->
<script src="assets/script/owl.carousel.min.js"></script>  <!-- owl -->
<script src="assets/script/waypoints.min.js"></script> <!-- waypoints -->
<script src="assets/script/onepage.nav.js"></script>   <!-- one-page-nav -->
<script src="assets/script/counterup.min.js"></script> <!-- Counter up -->
<!-- <script src="js/jquery.slicknav.min.js"></script> slicknav -->
<script src="assets/script/mail.ajax.js"></script> <!-- mail form -->
<script src="assets/script/validate.js"></script>  <!-- Validator -->
<script src="assets/script/subscribe.js"></script> <!-- ajax form -->
<script src="assets/script/steller.js"></script>   <!-- stellar -->
<script src="assets/script/slick.min.js"></script> <!-- Slick Plugin -->
<!-- <script src="js/jquery.slicknav.js"></script> -->
<script src="assets/script/active.js"></script>    <!-- active -->
<script src="assets/script/thumbnail-slider.js"></script>    <!-- Thumbnail Slider -->
<script src="assets/script/particles.js"> </script>

<!-- <script src="js/particle.js" "></script> -->


<script type="text/javascript">
    var slider = document.getElementById("start");
    var output = document.getElementById("naira");
    output.innerHTML = slider.value; // Display the default slider value

    var moput = document.getElementById("mopayInput");
    var toput = document.getElementById("topayInput");
    // Update the current slider value (each time you drag the slider handle)
    slider.oninput = function() {
        output.innerHTML = this.value;
        var monthy = document.getElementById("mopay");
        monthy.innerHTML = (Number(slider.value) + (Number(0.05) * Number(slider.value))) / Number(sliderx.value);
        moput.value = (Number(slider.value) + (Number(0.05) * Number(slider.value))) / Number(sliderx.value);
        var toty = document.getElementById("topay");
        var steptoty = (Number(slider.value) + (Number(0.05) * Number(slider.value))) / Number(sliderx.value);
        toty.innerHTML = steptoty * Number(sliderx.value);
        toput.value = steptoty * Number(sliderx.value);
    }

    var sliderx = document.getElementById("startx");
    var outputx = document.getElementById("dura");
    outputx.innerHTML = sliderx.value; // Display the default slider value

    // Update the current slider value (each time you drag the slider handle)
    sliderx.oninput = function() {
        outputx.innerHTML = this.value;
        var monthyx = document.getElementById("mopay");
        monthyx.innerHTML =  (Number(slider.value) + (Number(0.05) * Number(slider.value))) / Number(sliderx.value);
        moput.value = (Number(slider.value) + (Number(0.05) * Number(slider.value))) / Number(sliderx.value);
        var totyx = document.getElementById("topay");
        var steptotyx =  (Number(slider.value) + (Number(0.05) * Number(slider.value))) / Number(sliderx.value);
        totyx.innerHTML = steptotyx * Number(sliderx.value);
        toput.value = steptotyx * Number(sliderx.value);
    }

</script>
</body></html>