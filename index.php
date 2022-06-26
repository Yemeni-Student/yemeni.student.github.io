<?php 
session_start();
include('includes/config.php');

    ?>




<!DOCTYPE html>
<html lang="utf-8" dir="rtl" >


       <head>
        <meta charset="utf-8">
        <title>طالب يمني - Yemeni Student</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="طالب يمني - Yemeni Student" name="keywords">
        <meta content="طالب يمني - Yemeni Student" name="description">

        <!-- Favicon -->
        <link href="img/ys-logo-d" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet"> 

       <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
        <!-- Template Stylesheet -->
          
            
           <link href="css/style.css" rel="stylesheet">
          
           

       
		
    </head>
    
   

    <body style="padding-top:0;margin-top:0;">
        
       
       
        
        <?php include('top bar.php');?>
       
       
       <!-- Navigation -->
       
   <div class="nav-bar" style="background-color:transparent !important;margin-bottom:0em">
   <?php include('includes/header.php');?>
        </div>
        

    <section class="container card-" style="background:#fff; padding:5px;">
        
 
    <div class="container" >
        
    <?php include('slider.php');?>
    </div>
    
    
    <div class="container" >    
    <?php include('bodcast.php');?>
    
        </div>
     <div class="container">   
    <?php include('Main-news.php');?>
        </div>
    
  
         
        </section>
    
        
    
    
    
    
       
    
   





 <!-- Footer -->
    <br>
    <div class="footer" style="background:transparent;">
      <?php include('includes/footer.php');?>
</div>
  <!-- Back to Top -->
        <a href="#" class="back-to-top" ><i class="fa fa-chevron-up"></i></a>
       
     
        <!-- JavaScript Libraries -->
		
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
      
        <script src="assets/js/jquery.min.js"></script> 
<script src="assets/js/wow.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/jquery.li-scroller.1.0.js"></script> 
<script src="assets/js/jquery.newsTicker.min.js"></script> 
<script src="assets/js/jquery.fancybox.pack.js"></script> 
<script src="assets/js/custom.js"></script>
        <script src="assets/js/newsticker.js"></script>
  
    </body>
</html>