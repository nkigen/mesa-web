<?php
include('includes/config.php');

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> Mighty Eagles Soccer Academy  | Contact us</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="css/modern-business.css" rel="stylesheet">
    <link rel="stylesheet" href="css/icons.css">
  </head>

  <body>

    <div class="card my-4 border-0" style="text-align:center; height:100%; margin-left:0; margin-right:0; width:100%;" >
      <?php include('includes/header.php');?>
      </div>
    <div class="container">

<?php 
$pagetype='contactus';
$query=mysqli_query($con,"select PageTitle,Description from tblpages where PageName='$pagetype'");
while($row=mysqli_fetch_array($query))
{

?>
      <h1 class="mt-5 mb-3 text-center"><?php echo htmlentities($row['PageTitle'])?>
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Contact</li>
      </ol>
      <div class="row">
        <div class="col-lg-12">
          <p><?php echo $row['Description'];?></p>
        </div>
      </div>
<?php } ?>    
    </div>
 <?php include('includes/footer.php');?>
 <footer>
            <p style="text-align:center;">&copy; Copyright <a href="https://www.linkedin.com/in/ramsley-lichuma-2b9186260/" style="color:blue; ">Xxxage Technologies Incorporated </a> @ 2023   </p>
        </footer> 
 <script src="js/foot.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
