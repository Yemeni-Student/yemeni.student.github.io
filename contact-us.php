<?php 
session_start();
include('includes/config.php');
//Genrating CSRF Token
if (empty($_SESSION['token'])) {
 $_SESSION['token'] = bin2hex(random_bytes(32));
}

if(isset($_POST['submit']))
{
  //Verifying CSRF Token
if (!empty($_POST['csrftoken'])) {
    if (hash_equals($_SESSION['token'], $_POST['csrftoken'])) {
$name=$_POST['name'];
$email=$_POST['email'];
$comment=$_POST['comment'];
$postid=intval($_GET['nid']);
$st1='0';
$query=mysqli_query($con,"insert into tblcomments(postId,name,email,comment,status) values('$postid','$name','$email','$comment','$st1')");
if($query):
  echo "<script>alert(' شكرًا لقد تم نشر تعليقك بنجاح؛ سيتم عرض التعليق بعد أن تتم الموافقة عليه..');</script>";
  unset($_SESSION['token']);
else :
 echo "<script>alert('نأسف؛؛ يبدو أن خطأ ما حدث.. نرجو إعادة المحاولة');</script>";  

endif;

}
}
}
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
        p td tr tbody ,table p span,.table .table-bordered,table tbody,table tr,table td,.table .table-bordered td,.table .table-bordered tr,span
        {
            display: block;
            max-width: 100% !important;
            border: none !important;
           
        } 
        .table .table-bordered tr, .table .table-bordered tbody, .table .table-bordered td,
        {
           
            border: none !important;
        }
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
        
           .card-body  img 
        {
            max-width: 600px !important;
            max-height: 550px !important;
           justify-content: center !important;
                justify-items:center  !important;
                align-content: center  !important;
                align-items: center  !important;
           
            border-radius: 2%;
           
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
        .card-body, .card-body p,span
        {
            background-color: transparent !important;
            color: #224D79 !important;
            justify-content: center !important;
                justify-items:center  !important;
                align-content: center  !important;
                align-items: center  !important;
           
        }
        
        
        
        
        @media (max-width: 768.98px) {
            .card,.card-body,.card-header,.card-title,.card-text,.col-md-8
            {
               
              font-size: 14px !important;
            }
           .card-body  img 
        {
            max-width: 100% !important;
            max-height: 320px !important;
            
            
        }
            .card-body 
            {
               font-size: 16px !important;
                 padding-right: 2px;
            padding-left: 2px;
                justify-content: center !important;
                justify-items:center  !important;
                align-content: center  !important;
                align-items: center  !important;
            }
        .card-body,  .card-body h1,.card-body p, .card-body b,  .card-body a,  .card-body hr
        {
            color:#224D79;
            text-align: right;
           font-size: 16px;
            margin:0px;
            padding: 1px;
           
        }
            
            .card-body h1
            {
                font-size: 20px;
                font-weight: bolder;
                padding: 5px;
                padding-top: 1em;
                padding-bottom: 1em;
            }
            
    
        
        }
        
        img,table  img
        {
            
           
            max-width:600px !important;
            max-height: 550px !important;
          
           margin: 0;
           
        }
        
        .img-fluid 
        {
            
           
            width:600px !important;
            max-height: 500px !important;
          
           margin: 0;
           
        } 
     
        
        .container card{
            margin-right: 0px !important;
        }
    </style>
   

  <body style="padding-top:0;margin-top:0">

   
       <!-- Navigation -->
       
   <div class="nav-bar" style="dispaly:inline-flex;background-color:transparent !important;margin-bottom:0em">
   <?php include('includes/header.php');?>
        </div>
      
      onclick="  onClickNext()"
        
 <section class="container card" style="background:#fff; padding:5px;">
        
 
   
     <div class="container " style="color:#224D79; justify-content:space-between;align-content:center;justify-items:center">
                
                <div class="row ">
                    <div class="col-md-8">

 <div class=" card py-3 mr-1" style="width:99% !important" >
              <p class="card-header card-text fa fa-chart-pie " style="background:#224D79 !important;color:#fff !important;font-size:25px !important">&ensp;الرؤية والرسالة</p>
              <p class="col-lg-12 card-body pr-2  mt-3 " style="font-size:17px !important"> <span style="margin-top:5px"><span class=" fa fa-bullseye"></span><b>&emsp;
رؤيتنا: مبادرة تطوعية جاءت من الوسط الطلابي والأكاديمي بهدف نقاش قضايا الطلبة والتعبير عن تطلعاتهم وآمالهم.
                                  </b></span>&ensp; <span style="margin-top:5px"><span class="fa fa-street-view"></span><b>&emsp;
رسالتنا: نسعى لأن تكون منصة طالب يمني الصوت المسموع للطلبة اليمنيين.                                
                  </b></span>&ensp;
                  
                 
     </p>
                
               
                    </div>
                        
                        <div class=" card py-3 mr-1" style="width:99% !important" >
              <p class="card-header card-text fa fa-chart-line  " style="background:#224D79 !important;color:#fff !important;font-size:25px !important">&ensp;أهدافنا</p>
              <p class="col-lg-12 card-body pr-2  mt-3 " style="font-size:17px !important"> <span style="margin-top:2px"><span class="fa fa-crosshairs"></span><b>&emsp;إثارة النقاش حول القضايا التي تهم الطلبة في الفضاءات المدرسية والجامعية. </b></span>&ensp; 
                  
                 <span style="margin-top:2px"><span class="fa fa-gem"></span><b>&emsp;نقل قصص النجاح وإلهام الطلبة من خلالها.</b></span>&ensp; 
                  
                 <span style="margin-top:2px"><span class="fa fa-podcast"></span><b>&emsp;نشر ومشاركة فرص التعليم والتدريب المحلية والدولية. </b></span>&ensp; 
                  
                  <span style="margin-top:2px"> <span class="fa fa-laptop-code"></span><b>&emsp;تعريف الطلبة بالمهارات الأساسية والرقمية وتعزيز ثقافة الأونلاين في التعليم.</b></span>&ensp; 
                  
                 <span style="margin-top:2px"><span class="fa fa-lightbulb"></span><b>&emsp;تسليط الضوء على المبادرات في الفضاءات المدرسية والجامعية وتحفيز الطلبة على المشاركة المدنية والمجتمعية.</b></span>&ensp; 
                  
                 <span style="margin-top:2px"><span class="fa fa-bullhorn"  ></span><b>&emsp;تشجيع الطلبة على حرية التعبير.</b></span>&ensp; 
                  
                 <span style="margin-top:2px"><span class="fa fa-microphone"  ></span><b>&emsp; مناصرة الطلبة في الفضاء العام والمساهمة في توصيل صوتهم إلى الجهات المعنية.</b></span>&ensp; 
                  
                   <span style="margin-top:2px"><span class="fa fa-smile"  ></span><b>&emsp; تحفيز الطلبة من المناطق والفئات المهمشة نحو التعليم وأن التعليم هو مفتاح التمثيل والتمكين في إدارة الشؤون العامة.</b></span>&ensp; 
                  
                 
     </p>
                
               
                    </div>
                        
                        <div class=" card py-3 mr-1" style="width:99% !important" >
              <p class="card-header card-text fa fa-tag " style="background:#224D79 !important;color:#fff !important;font-size:25px !important">&ensp;موقعنا </p>
          
                <div class="social  card-text " >
                                <p  class="card card-body" style="border:none" ><i class="fa fa-map-marker"></i>&emsp;اليمن- صنعاء Yemen- Sanaa</p>
                                <a href="mailto:yemenistudent2021@gmail.com" class="card card-body" style="border:none" ><i class="fa fa-envelope"  style="color:" ></i>&emsp;yemenistudent2021@gmail.com</a>
                                                       <div  class="card-text " style="border:none"  >
                                                        <a href="https://twitter.com/yemeni_student"style="margin-right:1em;color:#224D79" ><i class="fab fa-twitter"></i></a>
                            <a href="https://www.facebook.com/yemenistudentweb"style="margin-right:0.5em;color:#224D79"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/yemenistudentweb"style="margin-right:0.5em;color:#224D79"><i class="fab fa-instagram"></i></a>
                            <a href="https://t.me/yemenistudentweb"style="margin-right:0.5em;color:#224D79"><i class="fab fa-telegram"></i></a>
                            <a href="mailto:yemenistudent2021@gmail"style="margin-right:0.5em;color:#224D79"><i class="fas fa-envelope"></i></a>
                        </div>
                            </div>
               
                    </div>
                        


 
      </div>
     <!-- Sidebar Widgets Column -->
    
                      <div class="col-md-4 ">
                          
                          
                       

          <!-- Search Widget -->
          <div class="card-header my-3 ">
            <h5 class="card card-text">راسلنا</h5>
             <form name="Comment" method="post" dir="rtl" style="width:100%"  >
       <input type="hidden" name="csrftoken" value="<?php echo htmlentities($_SESSION['token']); ?>"/>
 
   
                  <div class=" card  d-block py-2 px-2 mt-2 " style="width:98%; border:none" >
        
                      <div class="page-link card-text  d-block  mt-0 pr-1 pt-0   " style="width:100%;justify-content: right !important">
                           <div class="card-text  d-block  mt-0 pt-0 pb-0    " style="width:100%;justify-content: right !important">
                               <div class="card-text d-flex pt-0 pb-0 mt-0 mb-0"> <i  style="width:20px;color:#224D79 !important;font-size:15px !important" class="fa fa-user "></i><input type="text" name="name" class="form-control card-body mr-1 mt-2 mb-0"  placeholder=" إسمك الثلاثي" required></div>
                               <div class="card-text  d-flex pt-0 pb-0 mt-0 mb-0" > <i  style="width:20px;color:#224D79 !important;font-size:15px !important" class="fa fa-envelope "></i><input type="email" name="email" class="form-control card-body mr-1 mt-2 mb-0" placeholder="أدخل إيميل صحيح" required>
                                </div>
                                
 
          
        </div>
        <div class="card-text  d-flex pt-0 pb-0 mt-0 mb-0" > <i  style="width:20px;color:#224D79 !important;font-size:15px !important" class="fa fa-comment "></i><textarea name="comment" style="width:85%;color:#224D79 !important" class="form-control card-text mr-1 px-6 mt-2"  placeholder="  نص الرسالة" min="50" max="500" rows="2" required ></textarea>
                                </div>
                      
          <button  style="width:80%;font-size:30px" type="submit" class="   fa fa-paper-plane btn card-title" name="submit">&ensp;إرسال</button>
        </div>
          
                      
        
        </div>
                                                                                                   
    </form>
              
            </div>
           
           <!-- Categories Widget -->
          <div class="card-header pt-0 ">
            <h5 class="card card-text pt-0 mt-0 fa fa-globe">&ensp;تواصل معنا</h5>
            <div class="card-text mt-0" >
              <div class="row"  style="border:none">
                <div class="col-md-12 card-body d-block pt-0 pb-0 pl-1 pr-0  text-black text-decoration-none " style="text-align:left !important;font-weight:bolder !important">
               

                    
                     <a class=" btn ml-2 mb-2 fa fa-envelope" style="min-width:100%;font-size:18px;background:#224D69;color:#fff;text-align:left !important" href="mailto:yemenistudent2021@gmail.com">&emsp;yemenistudent2021@gmail.com</a>
                    <a class=" btn ml-2 mb-2 fab fa-telegram" style="min-width:100%;font-size:18px;background:#224D69;color:#fff;text-align:left !important" href="https://t.me/yemenistudentweb">&emsp;@yemenistudentweb</a>
                    <a class=" btn ml-2 mb-2 fab fa-facebook" style="min-width:100%;font-size:18px;background:#224D69;color:#fff;text-align:left !important" href="https://www.facebook.com/yemenistudentweb">&emsp;@yemenistudentweb</a>
                    <a class=" btn ml-2 mb-2 fab fa-instagram" style="min-width:100%;font-size:18px;background:#224D69;color:#fff;text-align:left !important" href="https://www.instagram.com/yemenistudentweb">&emsp;@yemenistudentweb</a>
                    <a class=" btn ml-2 mb-2 fab fa-twitter" style="min-width:100%;font-size:18px;background:#224D69;color:#fff;text-align:left !important" href="https://twitter.com/yemeni_student">&emsp; @yemeni_student</a>
                  
                    

                  
                </div>
       
              </div>
            </div>
          </div>

        </div>

      </div>
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