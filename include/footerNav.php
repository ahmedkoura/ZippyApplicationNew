<footer>
	<div class="row footerNav text-center">
		   <?php
// function to get the current page name
$page = PageName();
?>

          <ul>   
           <li><a class="magic-display magic-top <?php echo ($page == "index.php" ? "active" : "")?>" href="index.php">Home</a></li>
           <li><a class="magic-display magic-left <?php echo ($page == "accomodation.php" ? "active" : "")?>" href="accomodation.php">accomodation</a></li>    
           <li><a class="magic-display magic-right <?php echo ($page == "booking.php" ? "active" : "")?>" href="booking.php">booking</a></li>
           <li><a class="magic-display magic-bottom <?php echo ($page == "gallery.php" ? "active" : "")?>" href="gallery.php">gallery</a></li>
           <li><a class="magic-display magic-left <?php echo ($page == "contact-us.php" ? "active" : "")?>" href="contact-us.php">contact us</a></li>
          </ul>
		
	</div>
	<div class="row footerBottom text-center">
			<div class="footerContent">
				<p class="magic-display magic-left tex-center phoneno">+264 81 855 3835</p>
				<p class="magic-display magic-bottom tex-center">info@quiverinnguesthouse.com</p>
				<p class="magic-display magic-right tex-center">www.quiverinnguesthouse.com</p>
				<p class="magic-display magic-right tex-center rights">All rights reserved by Quiver Inn Guest House. Another website by <strong>Maestro Media</strong></p>
			</div>
		<!--<img src="images/footerImg.png" class="footerImg" />-->
	</div>
<!--	<div class="row text-center rights">All rights reserved by Quiver Inn Guest House. Another website by <strong>Maestro Media</strong></div>-->
</footer>
              