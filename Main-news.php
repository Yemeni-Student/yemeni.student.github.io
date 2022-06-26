
    
<style>
    
    
 
    
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

  position: absolute;
  top: 0%;
  left: 0%;
  font-size: 16px;
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


.container .main_card .imgBx img,.container .main_card .imgBx iframe,.container .main_card .slider img{
  position: absolute;
  top: 0%;
  left: 50%;
  transform: translate(-50%, -12%) rotate(0deg);
  width: 100%;
    height:110%;
}


    .container .main_card .contentBx{
  position: relative;
  bottom: -69%;
  width: 100%;
  height:55%;
  text-align: center;
  transition: 1s;
  z-index: 10;
    padding-top: 2px;
     
}

.container .main_card .contentBx  :hover  {
    margin-right: -4px !important; 
     transition: 1s;
 
     /*background-color:  rgba(232, 62, 88, 1) !important;*/
 /*background-image: linear-gradient(rgba(1, 50, 99, 0.4), rgba(0, 53, 95, 0.9),  rgba(10, 55, 90, 0.7)); width: 105%;*/
    padding-right: 3px !important;
  height:100%;
   
}

.container .main_card .contentBx a h5,.container .main_card .contentBx a h7{
   
  font-weight: 550;
    font-size: 18px;
  letter-spacing: 1px;
  color: #fff;
    text-align: right;
  margin: 0px;
    margin-right: 5px;
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
 
  border-radius: 4px;
  text-decoration: none;
  font-weight: 600;
  color: #111;

}
    
    
    .container .main_card .contentBx a:hover
    {
        background-color: #e83e58;
        text-decoration:underline;
        color:white;
        transition: 0.3s;
    }
    


    
   
@media (max-width: 768.98px) {
    
	
    
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



<?php 
$cats=mysqli_query($con,"select categoryname from tblcategory where Is_Active=1");
        $catid=mysqli_query($con,"select id from tblcategory where Is_Active=1");
     $id=(int)(min((array)$catid));
$main_news=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblposts.VideoUrl as PostVideo,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.Is_Active=1 order by tblposts.id desc  LIMIT 8");
 
?>




<!-- Main News Start-->
        <div class="container main-news" style="background:transparent;margin-top:1em">
            <h4 style="background-color:#224D79;border-bottom:3px outset #224D79 !important;color:white;text-align:center;padding:8px;color:#fff">أحدث الأخبار</h4>
            <div class="container" style="color:#224D79; justify-content:space-between;align-content:center;justify-items:center">
                
                <div class="row">
                    <div class="col-lg-8" style="border-bottom:none;margin-bottom:1em !important">
                        <div class="row" style="border-bottom:none;">
                            
                            
                            
                            
                            <?php 
                            while ($row=mysqli_fetch_array($main_news)) {
   
                            ?>
                            
                            
                             <div class="col-md-6">
                            <div class="  main_card" style="border-bottom:none;margin-bottom:1em !important">
       
     
    <div class="imgBx">
        
           
   <?php if(htmlentities($row['PostImage'])!=null){$link= htmlentities($row['PostVideo']);?>
                              
                              <img class="main_card-img-top" src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>" width="auto" height="auto">
      
        
 
                                
                          <?php  }
        
        else{ ?>
      <iframe frameborder="0" src="<?php echo $link?>" width="98%" height="98%" class="note-video-clip"></iframe>
    
        
  <?php }?>
                 
                
        </div>  
      
        
    <div class="contentBx" style="background-image: linear-gradient(rgba(1, 50, 99, 0), rgba(0, 53, 95, 5),  rgba(10, 55, 90, 10));
   ;opacity:1;padding:2px;">
        
       
     
          <span >  <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>" ><h5 style="height:120% !important;justify-content:center !important"> <?php echo htmlentities($row['posttitle']);?> </h5></a></span> 
     
         
          
       
      
     
    </div>
      <span style="background-color:#e83e58;margin:5px;padding:5px !important;font-size:13px !important;color:#fff;position:absolute;right:1%;top:0"><i class="fa fa-clock"></i><?php
                                         
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
            <span style="background-color:#e83e58;margin:5px;padding:5px !important;font-size:13px !important;color:#fff;position:absolute;left:1%;top:0"><i class="fa fa-globe">&ensp;</i><?php
                                         
                                        
                                         echo ( htmlentities($row['category']).' - '. htmlentities($row['subcategory']));
              
              ?></span>
      
            
        
  </div>
                            </div>
                            <?php } ?>

                            </div>
                           
                        </div>
                     <div class=" card-header col-md-4 page-link pr-2 pl-0" style="background:transparent !important ;justify-content:center !important">
                         <div class="card-text col-md-12"><?php include('mn-list.php'); ?>
                         </div> </div>
                    
                    <div class=" col-lg-4 page-link" style="justify-content:right !important">
                         
                 
 
                    </div>
               
                    </div>

                    </div>
            </div>
        
        <!-- Main News End-->