 
    
<style>
    
    
 
    
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');


*{
  font-family: 'Poppins', sans-serif;
}


h3
    {
        color: #224D79;
    }

.container .bodcast_card{

  position: relative;
  width: 100%;
  height: 250px !important;
  background: #224D79;
  border-radius: 10px 10px 20px 20px;
   
  overflow: hidden;
    min-width:300px !important;
}

.container .bodcast_card:before{
 
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: #224D79;
  
}

.container .bodcast_card:hover:before{
  clip-path: circle(300px at 80% -20%);
}

.container .bodcast_card:after{

  position: absolute;
  top: 0%;
  left: 0%;
  font-size: 16px;
  font-weight: 400;
  font-style: italic;
  color: rgba(255,255,25,0.05)
}

.container .bodcast_card .imgBx,.container .bodcast_card .slider{
  position: absolute;
  top: 52%;
  transform: translateY(-50%);
 
  width: 100%;
  height: 100%;
  transition: 0.5s;
    margin-top:0;
}

.container .bodcast_card:hover .imgBx,.container .bodcast_card: hover.slider{
  top: 0%;
  transform: translateY(0%);
    
    
}

.container .bodcast_card .imgBx iframe,.container .bodcast_card .slider iframe{
  position: absolute;
  top: 0%;
  left: 50%;
  transform: translate(-50%, -12%) rotate(0deg);
  width: 100%;
    height:110%;
}

.container .bodcast_card .contentBx{
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



.container .bodcast_card .contentBx h5,.container .bodcast_card .contentBx h7{
   
  font-weight: 550;
    font-size: 18px;
  letter-spacing: 1px;
  color: #fff;
    text-align: right;
  margin: 0px;
}
.container .bodcast_card .contentBx .category{
     position: absolute;
    bottom:0%;
  width: 320px;
  height: 10%;
  background: #224D79;
  border-radius: 0px 0px 0px 0px;
 
    }
.container .bodcast_card .contentBx .size, .container .bodcast_card .contentBx .color {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 2px 2px;
  transition: 0.5s;opacity: 0;
  visibility: hidden;
  padding-top: 0;
  padding-bottom: 0;
}

.container .bodcast_card:hover .contentBx .size{
  opacity: 1;
  visibility: visible;
  transition-delay: 0.5s;
}

.container .bodcast_card:hover .contentBx .color{
  opacity: 1;
  visibility: visible;
  transition-delay: 0.6s;
}

.container .bodcast_card .contentBx .size h5, .container .bodcast_card .contentBx .color h5{
  color: #fff;
  font-weight: 300;
  font-size: 14px;
  text-transform: uppercase;
  letter-spacing: 2px;
  margin-right: 10px;
}

.container .bodcast_card .contentBx .size span{
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

.container .bodcast_card .contentBx .size span:hover{
  background: #fff;
}

.container .bodcast_card .contentBx .color span{
  width: 20px;
  height: 20px;
  background: #fff;
  border-radius: 50%;
  margin: 0 5px;
  cursor: pointer;
}



.container .bodcast_card .contentBx a{
  display: inline-block;
 
  background: #fff;
  border-radius: 4px;
  margin-top: 10px;
  text-decoration: none;
  font-weight: 600;

}
    
    
    .container .bodcast_card .contentBx a:hover
    {
        background-color: #e83e58;
        color:white;
        transition: 0.3s;
    }
    

.container .bodcast_card .contentBx  :hover  {
    margin-right: -4px !important; 
     transition: 1s;
 
     /*background-color:  rgba(232, 62, 88, 1) !important;*/
 /*background-image: linear-gradient(rgba(1, 50, 99, 0.4), rgba(0, 53, 95, 0.9),  rgba(10, 55, 90, 0.7)); width: 105%;*/
    padding-right: 3px !important;

   
}
     .container .bodcast_card .contentBx a:hover
    {
      
        text-decoration:underline;
        color:white;
        transition: 0.3s;
    }
    


    @media (max-width: 1024.98px) {
    
        width:50% !important
        
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
$bodcast=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblposts.VideoUrl as PostVideo,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.categoryid='1' and tblposts.Is_Active=1 order by tblposts.id desc  LIMIT 6");
 
?>




<!-- Main News Start-->
        <div class="main-news" style="background:transparent;margin-top:1em">
            <h4 style="background-color:#224D79;border-bottom:3px outset #224D79 !important;color:white;text-align:center;padding:8px;color:#fff">طلبة FM</h4>
            <div class="container" style="color:#224D79; justify-content:space-between;align-content:center;justify-items:center">
                
                <div class="row">
                    <div class="container col-md-12" style="border-bottom:none;margin-bottom:1em !important">
                        <div class="row" style="border-bottom:none;">
                            <?php 
                            while ($row=mysqli_fetch_array($bodcast)) {
   
                            ?>
                             <div class="col-md-4">
                            <div class="  bodcast_card" style="border-bottom:none;margin-bottom:1em !important">
       
     
    <div class="imgBx">
 
        
      <?php if(htmlentities($row['PostImage'])!=null){?>
                                
                                <img class="bodcast_card-img-top" src="admin/postimages/<?php echo  htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>" width="auto" height="auto">
 
                                
                          <?php  }
        
        else{ ?>
     <iframe frameborder="0" src="<?php echo htmlentities($row['PostVideo']);?>" width="640" height="360" class="note-video-clip"></iframe>
        <?php }?>
        
         
    </div>
      
        
    <div class="contentBx" style="background-image: linear-gradient(rgba(1, 50, 99, 0), rgba(0, 53, 95, 5),  rgba(10, 55, 90, 10));
   ;opacity:1;padding:5px;">
        
       
     
          <span style="background-color: background-image: linear-gradient(rgba(0, 0, 0, .6), rgba(0, 0, 0, .5), rgba(0, 0, 0, .5));
   ;opacity:1;">  <h5> <a style="background:transparent;color:#fff  ;opacity:100%!important;position:relative;bottom:40%  !important;right:0%;" href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>"><?php echo htmlentities($row['posttitle']);?></a></h5></span> 
     
         
          
       
      
      
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
                            <a href="category.php?catid=4" style="width:30%;margin-right:0%;font-size:20px !important;background:#224D79;color:#fff" class="btn card-header " onclick="category.php?$catid=4"> المزيد</a>
                        </div>
                     
                    </div>

                    </div>
            </div>
        
        <!-- Main News End-->