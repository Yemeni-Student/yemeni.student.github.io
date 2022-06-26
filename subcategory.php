<?php 
session_start();
error_reporting(0);
include('includes/config.php');
$posts=0;
$subcatid=intval($_GET['subcatid']); 
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
          
           <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
  

       
		
    </head>
    
   
    <style>
    
     .card,.card-body,.card-header,.card-title,.card-text,.col-md-8
            {
                padding-top: 0 !important;
              font-size: 18px !important;
                width: 100%;
                background-color:#ffe;
                justify-content: center !important;
                justify-items:center  !important;
                align-content: center  !important;
                align-items: center  !important;
        }
         .card-body 
            {
                padding-top: 0 !important;
               font-size: 20px !important;
                
                width: 100%;
               
            }
        
        
        .card-body, .card-body h1, .card-body p, .card-body b,  .card-body a,  .card-body 
        {
            color:#224D79;
            text-align: right !important;
           font-size: 20px;
           
           
        }
        
    .card-body , span, h1
        {
          
           max-width:100%!important;
         text-align: right;
            flex-wrap:wrap;
            justify-content: center !important;
                justify-items:center  !important;
                align-content: center  !important;
                align-items: center  !important;
          
           
        }
        
         .card-header, .card-title
        {
            background-color: #224D69 !important;
            color:#fff !important;
            padding: 10px !important;
            text-align: center;
            font-weight: bolder;
            justify-content: center !important;
                justify-items:center  !important;
                align-content: center  !important;
                align-items: center  !important;
        }
        .card-text
        {
            background-color: transparent!important;
            color:#fff !important;
            padding: 10px !important;
            text-align: center;
            font-weight: bolder;
            justify-content: center !important;
                justify-items:center  !important;
                align-content: center  !important;
                align-items: center  !important;
        }
        .card-body, .card-body p
        {
            background-color: transparent !important;
            color: #224D79 !important;
            justify-content: center !important;
                justify-items:center  !important;
                align-content: center  !important;
                align-items: center  !important;
           
        }
        
        

 
    
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');


*{
  font-family: 'Poppins', sans-serif;
}


h3
    {
        color: #224D79;
    }

.container .main_card{
  position: relative;
  width: 100%;
  height: 250px;
  background: #224D79;
  border-radius: 10px 10px 20px 20px;
   
  overflow: hidden;
}

.container .main_card:before{
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: #224D79;
  
}

.container .main_card:hover:before{
  clip-path: circle(300px at 80% -20%);
}

.container .main_card:after{
  content: 'Y-S';
  position: absolute;
  top: 0%;
  left: 0%;
  font-size: 10em;
  font-weight: 400;
  font-style: italic;
  color: rgba(255,255,25,0.05)
}

.container .main_card .imgBx,.container .main_card .slider{
  position: absolute;
  top: 52%;
  transform: translateY(-50%);
 
  width: 100%;
  height: 100%;
  transition: 0.5s;
    margin-top:0;
}

.container .main_card:hover .imgBx,.container .main_card: hover.slider{
  top: 0%;
  transform: translateY(0%);
    
    
}

.container .main_card .imgBx img,.container .main_card .imgBx iframe,.container .main_card .slider img{
  position: absolute;
  top: 0%;
  left: 50%;
  transform: translate(-50%, -1%) rotate(0deg);
  width: 100%;
    height:100%;
}

.container .main_card .contentBx{
  position: relative;
  bottom: -70%;
  width: 100%;
  height:30%;
  text-align: center;
  transition: 1s;
  z-index: 10;
    padding-top: 2px;
     box-shadow: linear-gradient(rgba(1, 9, 1, .9), rgba(0, 0, 0, .3), rgba(1, 1, 1, .9));
   
}


.container .main_card .contentBx h5,.container .main_card .contentBx h7{
   
  font-weight: 550;
    font-size: 18px;
  letter-spacing: 1px;
  color: #fff;
  margin: 0px;
}
.container .main_card .contentBx .category{
     position: absolute;
    bottom:0%;
  width: 320px;
  height: 10%;
  background: #224D79;
  border-radius: 0px 0px 0px 0px;
 
    }
.container .main_card .contentBx .size, .container .main_card .contentBx .color {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 2px 2px;
  transition: 0.5s;opacity: 0;
  visibility: hidden;
  padding-top: 0;
  padding-bottom: 0;
}

.container .main_card:hover .contentBx .size{
  opacity: 1;
  visibility: visible;
  transition-delay: 0.5s;
}

.container .main_card:hover .contentBx .color{
  opacity: 1;
  visibility: visible;
  transition-delay: 0.6s;
}

.container .main_card .contentBx .size h5, .container .main_card .contentBx .color h5{
  color: #fff;
  font-weight: 300;
  font-size: 14px;
  text-transform: uppercase;
  letter-spacing: 2px;
  margin-right: 10px;
}

.container .main_card .contentBx .size span{
  width: 26px;
  height: 26px;
  text-align: center;
  line-height: 26px;
  font-size: 14px;
  display: inline-block;
  color: #111;
  background: #fff;
  margin: 0 5px;
  transition: 0.5s;
  color: #111;
  border-radius: 4px;
  cursor: pointer;
}

.container .main_card .contentBx .size span:hover{
  background: #fff;
}

.container .main_card .contentBx .color span{
  width: 20px;
  height: 20px;
  background: #fff;
  border-radius: 50%;
  margin: 0 5px;
  cursor: pointer;
}



.container .main_card .contentBx a{
  position: relative;
  bottom: -65%;
  width: 100%;
  height:40%;
  text-align: center;
  transition: 1s;
  z-index: 10;
    padding-top: 2px;
     box-shadow: linear-gradient(rgba(1, 9, 1, .9), rgba(0, 0, 0, .3), rgba(1, 1, 1, .9));
   
}
    
    
    .container .main_card .contentBx a:hover
    {
        background-color: #e83e58;
        color:white;
        transition: 0.3s;
    }
    



        
        .container .main_card .contentBx  :hover  {
    margin-right: -4px !important; 
     transition: 1s;
 
     /*background-color:  rgba(232, 62, 88, 1) !important;*/
 /*background-image: linear-gradient(rgba(1, 50, 99, 0.4), rgba(0, 53, 95, 0.9),  rgba(10, 55, 90, 0.7)); width: 105%;*/
    padding-right: 3px !important;

   
}
     .container .main_card .contentBx a:hover
    {
      
        text-decoration:underline;
        color:white;
        transition: 0.3s;
    }
    


    
    
   
@media (max-width: 768.98px) {
    .card img{
        width: 100%; !important;
        height: auto; !important;
         margin-bottom: 5px;
	
    }
    .col-md-6 
    {
        padding:0 !important;
    }
     .page-link img{
        width: 160px; !important;
        height: 150px; !important;
         margin-bottom: 5px;
      
       
}
    
    .page-link span
    {
        font-size: 18px !important;
        text-align: center;
    }

      li .page-link a {
       justify-content: center !important;
        align-content: center !important;
}
    }
    
     .page-link span
    {
        font-size: 15px ;
        text-align: right;
        
    }
   
    .page-link img:hover  .page-link  {
        background-color: #e83e58 !important;
        text-decoration: underline !important;
    }
     
    
   


</style>


    <body style="padding-top:0;margin-top:0">
       
       
       
       <!-- Navigation -->
       
   <div class="nav-bar" style="background-color:transparent !important;margin-bottom:0em !important">
   <?php include('includes/header.php');?>
        </div>
        

    <!-- Page Content -->
        
        
        
        
        
   <section class="container " style="background:#fff; margin-top:0px !important;">
        
 <?php include('sub-cat.php'); ?>
   
         
        
        
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