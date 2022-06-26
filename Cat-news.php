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

.container .main_card .imgBx img,.container .main_card .slider img{
  position: absolute;
  top: 0%;
  left: 50%;
  transform: translate(-50%, -12%) rotate(0deg);
  width: 100%;
    height:100%;
}

.container .main_card .contentBx{
  position: relative;
  bottom: -65%;
  width: 100%;
  height:55%;
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




    <!-- Page Content -->
        
        
        
        
        
  
   
     <div class="container " style="color:#224D79; justify-content:space-between;align-content:center;justify-items:center">
                
                <div class="row ">
                         
             <?php  $cats=mysqli_query($con,"select categoryname from tblcategory where id=$catid and Is_Active=1");
$posts_num=mysqli_query($con,"select count(*) from tblposts where categoryid=$catid and Is_Active=1");
       
      
foreach($cats  as  $catname) {
      $cat_name=current($catname);
}
foreach($posts_num  as  $post) {
      $posts=current($post);
}
                    
                     if($_GET['catid']!=''){
$_SESSION['catid']=intval($_GET['catid']);
                                $cats=mysqli_query($con,"select categoryname from tblcategory where id=$catid and Is_Active=1");
$posts_num=mysqli_query($con,"select count(*) from tblposts where categoryid=$catid and Is_Active=1");
       
      
foreach($cats  as  $catname) {
      $cat_name=current($catname);
}
foreach($posts_num  as  $post) {
      $posts=current($post);
}
                         
                          if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 6;
        $offset = ($pageno-1) * $no_of_records_per_page;


        $total_pages_sql = "SELECT COUNT(*) FROM tblposts where CategoryId='".$_SESSION['catid']."'";
        $result = mysqli_query($con,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);


$query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.CategoryId='".$_SESSION['catid']."' and tblposts.Is_Active=1 order by tblposts.id desc LIMIT $offset, $no_of_records_per_page");

                                      
    
    
}
             
                                      else
                                      {
$posts_num=mysqli_query($con,"select count(*) from tblposts where CategoryId=$catid and Is_Active=1");
       
      

      $cat_name='كل الأخبار: ';

foreach($posts_num  as  $post) {
      $posts=current($post);
}
                         
                          if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 6;
        $offset = ($pageno-1) * $no_of_records_per_page;


        $total_pages_sql = "SELECT COUNT(*) FROM tblposts where Is_Active=1";
        $result = mysqli_query($con,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);


$query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblposts.VideoUrl as PostVideo,tblcategory.CategoryName as category,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where  tblposts.Is_Active=1 order by tblposts.id desc LIMIT $offset, $no_of_records_per_page");

                                      
                                          
                                      }
             






    
             
             
             
             
         
             ?>
            
             
             <div class=" card py-3 mr-1" style="width:99% !important" >
              <h1 class="card-header card-body fa fa-newspaper  " style="background:#224D79 !important;color:#fff !important;height:40px">&ensp;<span> <?php   echo $cat_name;?></span></h1>
              <p class="col-lg-12 card-body pr-2  mt-3 " style="font-size:17px !important;height:20px"> <span style="margin-top:5px"><span class="fa fa-globe">&ensp;عدد: </span><b><?php   echo($posts) ; ?>&ensp;</b></span>&emsp;&emsp;<span class="fab fa-windows"> &emsp;<?php   echo('صفحة : '.$pageno.' / '.$total_pages) ; ?></span></p>
                
               
                    </div>
              <div class=" col-lg-8 pt-0" style="display:flex;flex-wrap:wrap;padding-top:0 !important;margin-top:0 !imporant">

         <div class="card-text pt-0 mt-0 " style="padding-top:0 !imporant">
                               
                                  <div class="card-text col-md-12" style="display:inline-flex;flex-wrap:wrap">

          <!-- Blog Post -->
<?php 
                                 
                                      
$rowcount=mysqli_num_rows($query);
if($rowcount==0)
{
echo "غير موجود";
}
else {
while ($row=mysqli_fetch_array($query)) {


?>
                               <div class="card-text col-md-6" style="width:100% !important" id="PostCard">
                            <div class="  main_card" style="border-bottom:none;margin-bottom:1em !important">
       
     
    <div class="imgBx card">
        
          <?php if(htmlentities($row['PostImage'])!=null){?>
                                
                                <img class="main_card-img-top" src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>" width="auto" height="auto">
    
                                
                          <?php  }
        
        else{ ?>
     <iframe frameborder="0" src="<?php echo htmlentities($row['PostVideo']);?>" width="640" height="360" class="note-video-clip bg-black"></iframe>
        <?php }?>
        
         
 
          
    </div>
      
        
    <div class="contentBx" style="background-image: linear-gradient(rgba(1, 50, 99, 0), rgba(0, 53, 95, 5),  rgba(10, 55, 90, 10));
   ;opacity:1;padding:5px;">
        
       
        
         <span style="background-color: background-image: linear-gradient(rgba(0, 0, 0, .6), rgba(0, 0, 0, .5), rgba(0, 0, 0, .5));
   ;opacity:1;">  <h5> <a style="background:transparent;color:#fff  ;opacity:100%!important;position:relative;bottom:40%  !important;right:0%;" href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>"> <?php echo htmlentities($row['posttitle']);?></a></h5></span> 
     
     
        
          
       
      
      <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>">المزيد &raquo;</a>
    </div>
      <span style="background-color:#e83e58;margin:5px;padding:2px !important;font-size:14px !important;color:#fff;position:absolute;right:1%;top:0">  <i class="fa fa-clock">&ensp;</i><?php
                                         
                                   if(date_create(date("Y/m/d H:i:s"))->diff(date_create( htmlentities($row['postingdate'])))->y>=1)
                                      
                                         echo date_diff(date_create(date("Y/m/d H:i:s")),date_create( htmlentities($row['postingdate'])))->format('%R%y سنة %m شهر ');
                                         
                                         else
                                             if(date_create(date("Y/m/d H:i:s"))->diff(date_create( htmlentities($row['postingdate'])))->m>=1)
                                                echo date_diff(date_create(date("Y/m/d H:i:s")),date_create( htmlentities($row['postingdate'])))->format(' %m شهر %d يوم');
                                            else
                                                if(date_create(gmdate("Y/m/d H:i:s"))->diff(date_create( htmlentities($row['postingdate'])))->d>=1)
                                                echo date_diff(date_create(date("Y/m/d H:i:s")),date_create( htmlentities($row['postingdate'])))->format('  %d يوم %h ساعة ');
                                                else
                                                    if(date_create(gmdate("Y/m/d H:i:s"))->diff(date_create( htmlentities($row['postingdate'])))->h>=1)
                                                    echo date_diff(date_create(date("Y/m/d H:i:s")),date_create( htmlentities($row['postingdate'])))->format(' %h ساعة %i دقيقة');
                                                    else 
                                                        if(date_create(gmdate("Y/m/d H:i:s"))->diff(date_create( htmlentities($row['postingdate'])))->i>=1)
                                                    echo date_diff(date_create(date("Y/m/d H:i:s")),date_create( htmlentities($row['postingdate'])))->format('%i دقيقة');
                                                        else
                                                            echo 'الان'
              ?></span>
            <span style="background-color:#e83e58;margin:5px;padding:2px !important;font-size:14px !important;color:#fff;position:absolute;left:1%;top:0">  <?php
                                         
                                        
                                         echo ( htmlentities($row['category']).' - '. htmlentities($row['subcategory']));
              
              ?></span>
      
            
        
  </div>
                            </div> 

         <?php } ?>
                                      
                                       
                              
                               

                          
<?php } ?>
       

      

          <!-- Pagination -->




        </div>

 
          
       
                              </div><div class="col-md-12 pr-5 mt-10"  style="position:relative;bottom:0">
          
            <div class="" >
              <div class="row"  style="border:none">
                <div class="col-md-12  text-black text-decoration-none">
              
                  <ul class="pagination justify-content-center col-md-12" >
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?> col-md-4 ml-5">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno-1); } ?>"  class=" <?php if($pageno <= 1){ echo 'disabled'; } ?> col-md-12 card  card-header btn ml-5 " ><p class="card-header card-text" style="color:#fff !important; text-align:center !important"><b  class="fa fa-angle-right"  style="color:#fff !important; text-align:center !important"></b>&ensp;السابق</p></a>
        </li>
                       <li class="<?php if($pageno+1 >= $total_pages){ echo 'disabled'; } ?> col-md-4  ml-5">
               <a href="<?php if($pageno>= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno+1); } ?>" class=" <?php if($pageno>= $total_pages){ echo 'disabled'; } ?> col-md-12 card  card-header btn ml-5 " ><p class="card-header card-text" style="color:#fff !important; text-align:center !important">التالي&ensp;<b  class="fa fa-angle-left"  style="color:#fff !important; text-align:center !important"></b></p></a>
        </li>
       
                              </ul>
                </div>
       
              </div>
            </div>
          </div>
            </div>
    
                    
                    <div class="col-lg-4 "><?php include('includes/sidebar.php');?>
      </div>
                    </div>

                    </div>
           
        
     
        
       