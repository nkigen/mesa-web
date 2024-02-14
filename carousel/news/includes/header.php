<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white fixed-top">
   <div class="container">
      <a class="navbar-brand" href="index.php"><img src="images/mighty.png" height="65" style="align-self:left;"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" ></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarResponsive">
         <ul class="navbar-nav">
            <li class="nav-item">
               <a class="nav-link" href="index.php"><i class="fa fa-home"></i> Home</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="about-us.php"><i class="fa fa-info-circle"></i> About</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="index.php"><i class="fa-newspaper-o fa"></i> News</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="contact-us.php"><i class="fa fa-phone"></i> Contacts</a>
            </li>
        
            <li class="nav-item dropdown">
               
               <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown">More</button>
               <ul class="dropdown-menu" aria-labelledby="dropdown07XL">
               
                              <?php $query=mysqli_query($con,"select id,CategoryName from tblcategory");
                                 while($row=mysqli_fetch_array($query))
                                 {
                                 ?>
                              <li class=" mb-2" style="text-align:center;">
                                 <a href="category.php?catid=<?php echo htmlentities($row['id'])?>" class="text-secondary"><?php echo htmlentities($row['CategoryName']);?></a>
                              </li>
                              <?php } ?>
               </ul>
            </li>
        </ul>
      </div>
      <div>
         <div id="google_translate_element"></div>
      </div>
   </div>
</nav>