<!DOCTYPE html>
<html lang="en">
	
<?php session_start(); ?>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="assets/font-awesome/css/all.min.css">


  <!-- Vendor CSS Files -->
  <link href="assets/css/select2.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
  <link href="assets/DataTables/datatables.min.css" rel="stylesheet">
  <link href="assets/css/jquery.datetimepicker.min.css" rel="stylesheet">
  <link href="assets/fullcalendar/main.css" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="assets/css/jquery-te-1.4.0.css">
  
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/DataTables/datatables.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="assets/js/select2.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.datetimepicker.full.min.js"></script>
    <script type="text/javascript" src="assets/font-awesome/js/all.min.js"></script>
    <script type="text/javascript" src="assets/fullcalendar/main.js"></script>
  <script type="text/javascript" src="assets/js/jquery-te-1.4.0.min.js" charset="utf-8"></script>
  <title><?php echo isset($_SESSION['system']['name']) ? $_SESSION['system']['name'] : '' ?></title>
 	
<style>

body{
        background: #80808045;
  }
  .modal-dialog.large {
    width: 80% !important;
    max-width: unset;
  }
.modal-dialog.mid-large {
    width: 50% !important;
    max-width: unset;
  }
#viewer_modal .btn-close {
    position: absolute;
    z-index: 999999;
    /*right: -4.5em;*/
    background: unset;
    color: white;
    border: unset;
    font-size: 27px;
    top: 0;
}
#viewer_modal .modal-dialog {
        width: 80%;
    max-width: unset;
    height: calc(90%);
    max-height: unset;
}
#viewer_modal .modal-content {
       background: black;
    border: unset;
    height: calc(100%);
    display: flex;
    align-items: center;
    justify-content: center;
  }
#viewer_modal img,#viewer_modal video{
    max-height: calc(100%);
    max-width: calc(100%);
  }

span.select2-selection.select2-selection--single {
    min-height: 2rem;
  } 
header {
  width: 100%;
  height: 300px;
  background-color: #af0505;
  text-align: center;
  
  position: relative;
  top: 0;
  overflow: hidden;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
}
header h1 {
  font-size: 42px;
  color: #fff;
  line-height: 230px;
  text-transform: uppercase;
  font-weight: 100;
  -moz-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
header nav {
  position: absolute;
  bottom: 0;
  height: 60px;
  line-height: 60px;
  width: 100%;
  background-color: rgba(0, 0, 0, 0.1);
}
header nav a {
  color: #fff;
  display: inline-block;
  padding: 10px 15px;
  line-height: 1;
  text-decoration: none;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  border-radius: 2px;
}
header nav a:hover {
  -moz-box-shadow: 0 0 0 1px #fff;
  -webkit-box-shadow: 0 0 0 1px #fff;
  box-shadow: 0 0 0 1px #fff;
}
</style> 
  </head>
  <body> 
  <?php include 'topbar.php' ?>
    <header>
      <h1>Mighty Eagles Soccer Academy</h1>
      <nav>
        <a href="../blog/index.php" class="mainNav__link">About us</a>
      <a href="../blog/blog.php" class="mainNav__link">News</a>
      <a href="../news/index.php" class="mainNav__link">Photos</a>
      <a href="../videos/index.php" class="mainNav__link">Videos</a>
      <a href="../contact/blog.html" class="mainNav__link">Contact us</a>
     
	         
      </nav>
      
      
    </header>
    
  
   <div class="container-fluid">
  <div class="toast" id="alert_toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-body text-white">
    </div>
  </div>
  
  <main id="view-panel" >
      <?php 
      $page = isset($_GET['page']) ? $_GET['page'] :'home'; 
      ?>
  	<?php include $page.'.php' ?>
  </main>

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<div class="modal fade" id="confirm_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title">Confirmation</h5>
      </div>
      <div class="modal-body">
        <div id="delete_content"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='confirm' onclick="">Continue</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="uni_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title"></h5>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='submit' onclick="$('#uni_modal form').submit()">Save</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="viewer_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
              <button type="button" class="btn-close" data-dismiss="modal"><span class="fa fa-times"></span></button>
              <img src="" alt="">
      </div>
    </div>
  </div>
</div>
</body>
<script>
	 window.start_load = function(){
    $('body').prepend('<di id="preloader2"></di>')
  }
  window.end_load = function(){
    $('#preloader2').fadeOut('fast', function() {
        $(this).remove();
      })
  }
 window.viewer_modal = function($src = ''){
    start_load()
    var t = $src.split('.')
    t = t[1]
    if(t =='mp4'){
      var view = $("<video src='"+$src+"' controls autoplay></video>")
    }else{
      var view = $("<img src='"+$src+"' />")
    }
    $('#viewer_modal .modal-content video,#viewer_modal .modal-content img').remove()
    $('#viewer_modal .modal-content').append(view)
    $('#viewer_modal').modal({
            show:true,
            backdrop:'static',
            keyboard:false,
            focus:true
          })
          end_load()  

}
  window.uni_modal = function($title = '' , $url='',$size=""){
      start_load()
      $.ajax({
          url:$url,
          error:err=>{
              console.log()
              alert("An error occured")
          },
          success:function(resp){
              if(resp){
                  $('#uni_modal .modal-title').html($title)
                  $('#uni_modal .modal-body').html(resp)
                  if($size != ''){
                      $('#uni_modal .modal-dialog').addClass($size)
                  }else{
                      $('#uni_modal .modal-dialog').removeAttr("class").addClass("modal-dialog modal-md")
                  }
                  $('#uni_modal').modal({
                    show:true,
                    backdrop:'static',
                    keyboard:false,
                    focus:true
                  })
                  end_load()
              }
          }
      })
  }
  window._conf = function($msg='',$func='',$params = []){
     $('#confirm_modal #confirm').attr('onclick',$func+"("+$params.join(',')+")")
     $('#confirm_modal .modal-body').html($msg)
     $('#confirm_modal').modal('show')
  }
   window.alert_toast= function($msg = 'TEST',$bg = 'success'){
      $('#alert_toast').removeClass('bg-success')
      $('#alert_toast').removeClass('bg-danger')
      $('#alert_toast').removeClass('bg-info')
      $('#alert_toast').removeClass('bg-warning')

    if($bg == 'success')
      $('#alert_toast').addClass('bg-success')
    if($bg == 'danger')
      $('#alert_toast').addClass('bg-danger')
    if($bg == 'info')
      $('#alert_toast').addClass('bg-info')
    if($bg == 'warning')
      $('#alert_toast').addClass('bg-warning')
    $('#alert_toast .toast-body').html($msg)
    $('#alert_toast').toast({delay:3000}).toast('show');
  }
  $(document).ready(function(){
    $('#preloader').fadeOut('fast', function() {
        $(this).remove();
      })
  })

  $('.datetimepicker').datetimepicker({
      format:'Y/m/d H:i',
      startDate: '+3d'
  })

  $('.select2').select2({
    placeholder:"Please select here",
    width: "100%"
  })
  $('.number').on('input',function(){
        var val = $(this).val()
        val = val.replace(/[^0-9 \,]/, '');
        $(this).val(val)
    })
</script>	
</html>