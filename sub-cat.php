

    <!-- Page Content -->
        
        
        
        
        
  
   
     <div class="container " style="color:#224D79; justify-content:space-between;align-content:center;justify-items:center">
                
                <div class="row ">
                          
             <?php
                   $subcats=mysqli_query($con,"select subcategory from tblsubcategory where subcategoryid=$subcatid and Is_Active=1"); 
                        
$posts_num=mysqli_query($con,"select count(*) from tblposts where subcategoryid=$subcatid and Is_Active=1");
       
      

foreach($subcats  as  $subcatname) {
      $sub_cat_name=current($subcatname);
}
foreach($posts_num  as  $post) {
      $posts=current($post);
}
                    
                     if($_GET['subcatid']!=''){
$_SESSION['subcatid']=intval($_GET['subcatid']);
                               
                         
                         
                          if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 6;
        $offset = ($pageno-1) * $no_of_records_per_page;


        $total_pages_sql = "SELECT COUNT(*) FROM tblposts where subcategoryId=$subcatid and Is_Active=1";
         $result = mysqli_query($con,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);


$query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblposts.VideoUrl as PostVideo,tblcategory.CategoryName as category,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.subcategoryId='".$_SESSION['subcatid']."' and tblposts.Is_Active=1 order by tblposts.id desc LIMIT $offset, $no_of_records_per_page");

                                      
    
    
}
             
                                      else
                                      {
$posts_num=mysqli_query($con,"select count(*) from tblposts where tblposts.subcategoryId=$subcatid and Is_Active=1");
       
      

      $cat_name= $sub_cat_name;

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


        $total_pages_sql = "SELECT COUNT(*) FROM tblposts where tblposts.subcategoryId='".$_SESSION['subcatid']."' and Is_Active=1";
        $result = mysqli_query($con,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);


$query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage as PostImage,tblposts.VideoUrl as PostVideo,tblcategory.CategoryName as category,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.subcategoryId='".$_SESSION['subcatid']."' and  tblposts.Is_Active=1 order by tblposts.id desc LIMIT $offset, $no_of_records_per_page");

                                      
                                          
                                      }
             






    
             
             
             
             
         
             ?>
               <div class=" card py-3 mr-1" style="width:99% !important" >
              <h1 class="card-header card-body fa fa-newspaper  " style="background:#224D79 !important;color:#fff !important;height:40px">&ensp;<span> <?php   echo $sub_cat_name;?></span></h1>
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
       
      <div class="imgBx">
        
           
   <?php if(htmlentities($row['PostImage'])!=null){?>
    
                             
 
                                <img class="main_card-img-top" src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>" width="auto" height="auto">
                          <?php  }
        
        else{ $link= htmlentities($row['PostVideo']);?>
    
                                <iframe frameborder="0" src="<?php echo $link; ?>" width="98%" height="98%" class="note-video-clip"></iframe>
         
        <?php }?>
        

                 
                
        </div>  
      
        
    <div class="contentBx" style="background-image: linear-gradient(rgba(1, 50, 99, 0), rgba(0, 53, 95, 5),  rgba(10, 55, 90, 10));
   ;opacity:1;padding:5px;">
        
       <span style="background-color: background-image: linear-gradient(rgba(0, 0, 0, .6), rgba(0, 0, 0, .5), rgba(0, 0, 0, .5));
   ;opacity:1;">  <h5> <a style="background:transparent;color:#fff  ;opacity:100%!important;position:relative;bottom:40%  !important;right:0%;" href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>"> <?php echo htmlentities($row['posttitle']);?></a></h5></span> 
     
     
     
          
         
          
       
      
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
           
        
     
        
  