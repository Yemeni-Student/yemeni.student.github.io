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
#$_SESSION['time']=$_GET['time'];
$query=mysqli_query($con,"insert into tblcomments(postId,name,email,comment,status) values('$postid','$name','$email','$comment','$st1')");
if($query):
  unset($_SESSION['token']);

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
        p td tr tbody ,table p span,.table .table-bordered,table tbody,table tr,table td,.table .table-bordered td,.table .table-bordered tr,span,.newsletter ,.newsletter p,.newsletter font, .newsletter span,.newsletter span p,.newsletter span font,table ,.table-bordered
        {
            background-color: transparent !important;
            display: block;
            max-width: 100% !important;
            border: none !important;
           align-content: flex-start !important;
           justify-content: right!important; justify-items: right !important;
           
        } 
        .table .table-bordered tr, .table .table-bordered tbody, .table .table-bordered td,span p,p
        {
           
            border: none !important;margi-right: 2px !important;
        }
        .card,.card-body,.card-header,.card-title,.card-text,.col-md-8
            {
                padding-top: 0 !important;
              font-size: 18px !important;
                width: 100%; 
                margin-bottom: 3px !important;
                background-color:#ffe;
                justify-content: center !important;
                justify-items:center  !important;
                align-content: center  !important;
                align-items: center  !important;
        }
         .card-text 
            {
                padding-top: 0 !important;
               font-size: 20px !important;
                
                width: 100%;
               
            }
        
        
        .card-text, .card-text h1, .card-text p, .card-text b,  .card-text a,  .card-text,.newsletter p,.newsletter,.newsletter font
        {
            color:#224D79;
            text-align: right !important;
           font-size: 20px;
           
           
        }
        
           .card-text  img ,.card-text  iframe 
        {
            max-width: 600px !important;
            max-height: 350px !important;
           justify-content: center !important;
                justify-items:center  !important;
                align-content: center  !important;
                align-items: center  !important;
           
            border-radius: 2%;
           
        }
       
         .card-text , span, h1
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
        .card-text, .card-text p,span
        {
            background-color: transparent !important;
            color: #224D79 !important;
            justify-content: center !important;
                justify-items:center  !important;
                align-content: center  !important;
                align-items: center  !important;
           
        }
        
        
        .card-text iframe 
        {
            background: #00000f;
            
            
            height:350px !important;
            width: 900px !important;
        }
        
          @media (max-width: 1300px) {
            .card,.card-body,.card-header,.card-title,.card-text,.col-md-8
            {
               
              font-size: 14px !important;
            }
           .card-text  img ,   .card-text  iframe 
        {
            max-width: 100% !important;
            max-height: 400px !important;
            
            
        }
            
            .card-text 
            {
               font-size: 16px !important;
                 padding-right: 2px;
            padding-left: 2px;
                justify-content: center !important;
                justify-items:center  !important;
                align-content: center  !important;
                align-items: center  !important;
            }
        .card-text,  .card-text h1,.card-text p, .card-text b,  .card-text a,  .card-text hr
        {
            color:#224D79;
            text-align: right;
           font-size: 16px;
            margin:0px;
            padding: 1px;
           
        }
            
            .card-text h1
            {
                font-size: 20px;
                font-weight: bolder;
                padding: 5px;
                padding-top: 1em;
                padding-bottom: 1em;
            }
            
    
        
        }
        @media (max-width: 999px) {
            .card,.card-body,.card-header,.card-title,.card-text,.col-md-8
            {
               
              font-size: 14px !important;
            }
           .card-text  img ,   .card-text  iframe 
        {
            max-width: 100% !important;
            max-height: 250px !important;
            
            
        }
            .card-text
            {
               font-size: 16px !important;
                 padding-right: 2px;
            padding-left: 2px;
                justify-content: center !important;
                justify-items:center  !important;
                align-content: center  !important;
                align-items: center  !important;
            }
        .card-text,  .card-text h1,.card-text p, .card-text b,  .card-text a,  .card-text hr
        {
            color:#224D79;
            text-align: right !important;
            padding-right: 3px!importan;
           font-size: 16px;
            margin:0px;
            padding: 1px;
           
        }
            
            .card-text h1
            {
                font-size: 20px;
                font-weight: bolder;
                padding: 5px;
                padding-top: 1em;
                padding-bottom: 1em;
            }
            
    
        
        }
        
        img,table  img,iframe,table  iframe
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
   

  <body style="padding:0;margin-top:0 ,width:101% !important">

          
      
       
       
       <!-- Navigation -->
       
   <div class="nav-bar" style="background-color:transparent !important;margin:0em !important">
   <?php include('includes/header.php');?>
        </div>
        
        
 <section class="container card" >
                 <!-- Blog Post -->
<?php
$pid=intval($_GET['nid']);
 $query=mysqli_query($con,"select tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingDate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.id='$pid'");
while ($row=mysqli_fetch_array($query)) {
?>

 
     
   
   
     <div class="container card-text my-0 " style="color:#224D79; justify-content:space-between;align-content:center;justify-items:center">
                
                <div class="row px-0" style="background:red !important,width:99% !important">
                    
                     <div class=" card py-3" style="width:99% !important" >
              <h1 class="card-header card-body fa fa-newspaper" style="background:#224D79 !important;color:#fff !important">&ensp;<?php echo htmlentities($row['posttitle']);?></h1>
              <p class="col-lg-12 card-body pr-2  mt-3 " style="font-size:17px !important"> <a class="fa fa-sitemap" style="color:#e83e58" href="category.php?catid=<?php echo htmlentities($row['cid'])?>">&ensp;<?php echo htmlentities($row['category']);?></a> -
                 <?php echo htmlentities($row['subcategory']);?> &ensp; <b class="fa fa-calendar-alt">&ensp; </b><?php echo date_format(date_create(htmlentities($row['postingDate'])),"Y/m/d h:i A");?></p>
                
               
                    </div>
                    
                    <div class="col-md-8  card pb-3 mb-3 mx-0" >

 
          <div class=" card  " style="background:transparent !important;padding-top:4px !important;border:none">
       <div class="card px-2" style="border:none;align-items:center;border:none">
                <img class="img-fluid  " src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="">
                </div>
 
                <div class=" card-text mb-4" style="border:none;align-items:center;">
            <?php 
 $pt=$row['postdetails'];
                                          
             echo  (substr($pt,0)) ;?>
                      </div>
   
 
         
          </div>
<?php } ?>
       

      
<!---Comment Section --->
  <div class=" card   d-flex " style="width:100%;background:#224D79" >
       <div class="card-text   " style="width:100%;border:none">
        
    <form name="Comment" method="post" dir="rtl" style="width:100%;" class="card-text my-0 mx-0">
       <input type="hidden" name="csrftoken" value="<?php echo htmlentities($_SESSION['token']); ?>"/>
 
   
                   <div class="page-link card-text  d-block   " style="width:100%;justify-content: right !important;margin-right:0 !important;border:none">
                           <div class="card-text  d-block  mt-0 pt-0 pb-0    " style="width:100%;justify-content: right !important">
                               <div class="card-text d-flex pt-0 pb-0 mt-0 mb-0"> <i  style="width:20px;color:#224D79 !important;font-size:15px !important" class="fa fa-user "></i><input type="text" name="name" class="form-control card-body mr-1 mt-2 mb-0" placeholder=" إسمك الثلاثي" required></div>
                               <div class="card-text  d-flex pt-0 pb-0 mt-0 mb-0" > <i  style="width:20px;color:#224D79 !important;font-size:15px !important" class="fa fa-envelope "></i><input type="email" name="email" class="form-control card-body mr-1 mt-2 mb-0" placeholder="أدخل إيميل صحيح" required>
                                </div>
                               
                               
 
          
        </div>
      <div class="card-text  d-flex pt-0 pb-0 mt-0 mb-0" > <i  style="width:20px;color:#224D79 !important;font-size:15px !important" class="fa fa-comment "></i><textarea name="comment" style="width:95%;color:#224D79 !important" class="form-control card-body  px-6 mt-2"  placeholder="  نص الرسالة" min="50" max="500" rows="2" required ></textarea>
                                </div>
                      
          <button  style="width:80%;font-size:30px;margin-right:10% !important" type="submit" class="   fa fa-paper-plane btn card-body card-title" name="submit" >&ensp; نشر التعليق</button>
        </div>
          
                                                                                                   
    </form></div>
   </div>
 
        
      
    

  <!---Comment Display Section --->

 <?php 
 $sts=1;
 $query=mysqli_query($con,"select name,comment,postingDate from  tblcomments where postId='$pid' and status='$sts'");
while ($row=mysqli_fetch_array($query)) {
?>

    <div class=" container card card-text  d-block  mt-2 mb-1 " style="width:90%;" >
        <div class="  card-body page-link  d-flex   pt-10 pb-4  " style="width:100%;height:4em !important;justify-content: right !important;padding-top:10% !important"><b style="color:#224D79 !important;">&ensp;<i class="fa fa-user">&ensp;</i><?php echo htmlentities($row['name']);?></b>
            <p class="card-body card-text col-lg-12  py-3 ">
                 <b style="color:#224D79 !important;" class="">  <i class="fa fa-clock"></i>&ensp;<?php 
                    if(date_create(date("Y/m/d H:i:s"))->diff(date_create( htmlentities($row['postingDate'])))->d>=1)
                                      
                                          echo date_format(date_create(htmlentities($row['postingDate'])),"Y/m/d  ");
                                                else
                                                    if(date_create(gmdate("Y/m/d H:i:s"))->diff(date_create( htmlentities($row['postingDate'])))->h>=1)
                                                    echo date_format(date_create(htmlentities($row['postingDate']))," h:i A");
                                                    
                    
                    
                    
                   ?></b>
</p>
        </div>
         
        
        <div class="page-link card-text d-flex  mt-1 py-4 px-4  " style="width:100%;min-height:4em"><div class="card-body   " style="width:85%;"><?php echo htmlentities($row['comment']);?> </div></div></div>
        
         
<?php } ?>

       
 
      </div>
                    
                      <div class="col-md-4 "><?php include('includes/sidebar.php');?>
      </div>
     <!-- Sidebar Widgets Column -->
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