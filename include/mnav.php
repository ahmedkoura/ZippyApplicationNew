
                 <?php
// function to get the current page name
function PageName() {
  return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
}
$page = PageName();
?>

          <ul id="nav">   
           <li><a class="<?php echo ($page == "index.php" ? "active" : "")?>" href="index.php">Home</a></li>
           <li><a class="<?php echo ($page == "accomodation.php" ? "active" : "")?>" href="accomodation.php">accomodation</a></li>    
           <li><a class="<?php echo ($page == "booking.php" ? "active" : "")?>" href="booking.php">booking</a></li>
           <li><a class="<?php echo ($page == "gallery.php" ? "active" : "")?>" href="gallery.php">gallery</a></li>
           
           <li><a class="<?php echo ($page == "contact-us.php" ? "active" : "")?>" href="contact-us.php">contact us</a></li>
           
          </ul>
        