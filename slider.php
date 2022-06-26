


   
            
            
            <style>
    
    
   
.carousel {
  display: inline-block;
  text-align: center;
  height: 100px;
  width:25%;
  background: transparent;
}
.left-btn {
  position: relative;
  float: left;
  top: 50%;
  left: 0;
  padding:3px;
}
.right-btn {
  position: relative;
  float: right;
  top: 50%;
  right: 0;
   padding:3px;
}
.arrow-wrapper {
  display: inline-block;
  background: transparent;
  border-radius: 5px;
  border:3px solid #e83e58 !important;
  width: 39px;
  height: 40px;
  text-align: center;
}
 .carousel i {
  border: 3px solid #e83e58 !important;
  border-width: 0 3px 3px 0;
  display: inline-block;
  padding: 3px;
 
}
.right-arrow {
  transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);
}
.left-arrow {
  transform: rotate(135deg);
  -webkit-transform: rotate(135deg);
}
    
    
            
                 @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');


*{
  font-family: 'Poppins', sans-serif;
}

.container
    {
        background-color:transparent;
        opacity: 100%;
        justify-content: space-around;
        
    }


.container .slide{
  position: relative;
  width: 100%;
  height: 500px !important;
  background: #224D79;
  border-radius: 10px 10px 20px 20px;
   opacity: 100%;
  overflow: hidden;

    display: flex;
    flex-wrap: nowrap;
    justify-content: center;
}

.container .slide:before{
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: #224D79;
  opacity: 100%;
}

.container .slide:hover:before{
  clip-path: circle(300px at 80% -20%);
}

.container .slide:after{
  content: 'Y-S';
  position: absolute;
  top: 0%;
  left: 0%;
  font-size: 10em;
  font-weight: 800;
  font-style: italic;
  color: rgba(255,255,25,0.05);
    
      
}

.container .slide .imgBx,.container .slide .slider{
  position: absolute;
  top: 0%;
  transform: translateY(12%);
 
  width: 100%;
  height: 100%;
  transition: 0.5s;
    margin-top:0;
   
}

.container .slide:hover .imgBx,.container .slide: hover.slider{
  top: 0%;
  transform: translateY(0%);
   
}

.container .slide .imgBx img,.container .slide .imgBx iframe{
  position: absolute;
  top: 0%;
  left: 50%;
  transform: translate(-50%, -12%) rotate(0deg);
  width: 100%;
    height:100%;
}

.container .slide .contentBx{
  position: absolute;
  bottom:8%;
  width: 90%;
  height: 100px;
 right:0%;
  transition: 1s;
  z-index: 10;
    opacity:70%;
    
   
    
}

.container .slide .contentBx a{
  position: absolute;
  bottom:40%;
  left:0%;
    margin: 0px !important ;
    
}
 .container .slide ul li .pagelink{
  position: absolute;
  bottom:-55%;
  left:0%;
    margin: 0px !important ;
    
}

.container .slide .contentBx h5,.container .slide .contentBx h7,.container .slide span{
   
  font-weight: 600;
  letter-spacing: 1px;
  color: #fff;
 
    opacity: 100%;
}
.container .slide .contentBx .category{
     position: absolute;
    bottom:0%;
  width: 320px;
  height: 450px;
  background: #224D79;
  border-radius: 0px 0px 0px 0px;
    opacity: 100%;
 
    }
.container .slide .contentBx .size, .container .slide .contentBx .color{
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 2px 2px;
  transition: 0.5s;opacity:100%;
  visibility: hidden;
  padding-top: 0;
  padding-bottom: 0;
    
}

.container .slide :hover .contentBx .size {
  opacity: 1;
  visibility: visible;
  transition-delay: 0.5s;
}
            

.container .slide:hover .contentBx .color{
  opacity: 1;
  visibility: visible !important;
  transition-delay: 0.6s;
}

.container .slide .contentBx .size h5, .container .slide .contentBx .color h5{
  color: #fff;
  font-weight: 300;
  font-size: 14px;
  text-transform: uppercase;
  letter-spacing: 2px;
  margin-right: 0px;
}

.container .slide .contentBx .size span{
  width: 26px;
  height: 26px;
  text-align: center;
  line-height: 26px;
  font-size: 14px;
  display: inline-block;
  color: #111;
  background: #fff;
  margin: 0px;
  transition: 0.5s;
  color: #111;
  border-radius: 4px;
  cursor: pointer;
}

.container .slide .contentBx .size span:hover{
  background: #fff;
}





.container .slide .contentBx a{
  display: inline-block;
  padding: 1.5px 3px;
  background: #fff;
  border-radius: 4px;
  margin-top: 0px;
  text-decoration: none;
  font-weight: 600;
  color: #111;
  opacity: 100%;
  transform: translateY(50%);
  transition: 0.5s;
  margin-top: 0;
}
    
   
    .container .slide .contentBx a:hover
    {
        background-color: #e83e58;
        color:white;
        transition: 0.3s;
     
        opacity: 80%;
        
    }
    

.container contentBx a{
  opacity: 1;
  transform: translateY(-150%);
  transition-delay: 0.75s;
  
}
            
          

.container .slide .contentBx{
  position: absolute;
  top: 80%;
  width: 100%;
  
  text-align: center;
  transition: 1s;
  z-index: 10;
    padding-top: 0px;
    
}

            

.container .slide .contentBx h5,.container .slide .contentBx h7{
   
  font-weight: 600;
  letter-spacing: 1px;
  color: #fff;
  margin: 0px;
}
.container .slide .contentBx .category{
     position: absolute;
    bottom:0%;
  width: 320px;
  height: 10%;
  background: #224D79;
  border-radius: 0px 0px 0px 0px;
 
    }
.container .slide .contentBx .size, .container .slide .contentBx .color {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 2px 2px;
  transition: 0.5s;opacity: 0;
  visibility: hidden;
  padding-top: 0;
  padding-bottom: 0;
}

.container .slide:hover .contentBx .size{
  opacity: 1;
  visibility: visible;
  transition-delay: 0.5s;
}

.container .slide:hover .contentBx .color{
  opacity: 1;
  visibility: visible;
  transition-delay: 0.6s;
}




.container .slide .contentBx a{
  display: inline-block;
  padding: 15px 30px;
  background: #fff;
  border-radius: 4px;
  margin-top: 0px;
  text-decoration: none;
  font-weight: 600;
  color: #111;
  opacity: 0;
  transform: translateY(40px);
    position: relative;
    bottom: 20%;
    
  transition: 0.5s;
  margin-top: 0;
}
    
    
    .container .slide .contentBx a:hover
    {
        background-color: #e83e58;
        color:white;
        transition: 0.3s;
    }
    

      
            
@media (max-width: 768.98px) {
	.container .slide {
        height: 250px !important;
    }
    .container .slide h5{
        font-size: 18px;
    }
   
    .container .slide .contentBx a{
  
  font-weight: 400;
  position: relative;
  
  opacity: 0;
        
}
  .container .slide :hover .container .slide .contentBx {
      opacity: 1;
  transform: translateY(-45%);
     
  transition-delay: 0.75s;
     
    }
    span
    {
        font-size: 55px !important;
    }
    
}
    
}

         

        </style>
     


        <!-- slider Start-->
        
             <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="rtl:true !importants">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner" style="rtl:true !important">
      
<?php

$query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as title,tblposts.PostImage as postImage,tblposts.VideoUrl as PostVideo,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.Is_Active=1 order by tblposts.id desc  LIMIT 5");
 $rows=array();
    
      while($result=mysqli_fetch_array($query)){
      
 $rows['id'][]=$result['pid'];
$rows['title'][]=$result['title']; 
$rows['image'][]=$result['postImage'];
$rows['date'][]=$result['postingdate'];
 $rows['category'][]=$result['category'];
$rows['subcategory'][]=$result['subcategory'];
$rows['PostVideo'][]=$result['PostVideo'];
   
      }?>
   

     
    <div class="carousel-item active">
     <div class="slide col-lg-12">
       
     
    <div class="imgBx">
        
           
   <?php if($rows['PostVideo'][0]!=null){$link= $rows['PostVideo'][0];?>
                                <iframe frameborder="0" src="<?php echo $link?>" width="98%" height="98%" class="note-video-clip"></iframe>
    
                             
 
                                
                          <?php  }
        
        else{ ?>
    
         <img class="slide-img-top" src="admin/postimages/<?php echo $rows['image'][0];?>" alt="fa fa-user">  
    
        <?php }?>
        

                 
                
        </div>
        <span style="background-color:#e83e58;;margin-top:5px;padding:2px !important;font-size:15px !important;color:#fff;position:absolute;right:1%;" >   <i class="fa fa-clock"></i><?php
                                         
                                   if(date_create(date("Y/m/d H:i:s"))->diff(date_create( $rows['date'][0]))->y>=1)
                                      
                                         echo date_diff(date_create(date("Y/m/d H:i:s")),date_create( $rows['date'][0]))->format('%R%y سنة %m شهر ');
                                         
                                         else
                                             if(date_create(date("Y/m/d H:i:s"))->diff(date_create( $rows['date'][0]))->m>=1)
                                                echo date_diff(date_create(date("Y/m/d H:i:s")),date_create( $rows['date'][0]))->format(' %m شهر %d يوم');
                                            else
                                                if(date_create(gmdate("Y/m/d H:i:s"))->diff(date_create( $rows['date'][0]))->d>=1)
                                                echo date_diff(date_create(date("Y/m/d H:i:s")),date_create( $rows['date'][0]))->format('  %d يوم %h ساعة ');
                                                else
                                                    if(date_create(gmdate("Y/m/d H:i:s"))->diff(date_create( $rows['date'][0]))->h>=1)
                                                    echo date_diff(date_create(date("Y/m/d H:i:s")),date_create( $rows['date'][0]))->format(' %h ساعة %i دقيقة');
                                                    else 
                                                        if(date_create(gmdate("Y/m/d H:i:s"))->diff(date_create( $rows['date'][0]))->i>=1)
                                                    echo date_diff(date_create(date("Y/m/d H:i:s")),date_create( $rows['date'][0]))->format('%i دقيقة');
                                                        else
                                                            echo 'الان'
              ?></span>
            
           <span style="background-color:#e83e58;margin-top:5px;padding:2px !important;font-size:15px !important;color:#fff;position:absolute;left:1%"> <i class="fa fa-globe"></i><?php
                                         
                                        
                                         echo $rows['category'][0].' - '. $rows['subcategory'][0];
              
              ?></span>
      
               
      
    
     
   
      
   
   
          <div class="contentBx" style="height:30%;text-align:center;z-index: 15; background-image: linear-gradient(rgba(1, 50, 99, 0), rgba(0, 53, 95, 5),  rgba(10, 55, 90, 10));opacity:1">
        
              <span style="background-color:background-image: linear-gradient(rgba(1, 50, 99, 0), rgba(0, 53, 95, 5),  rgba(10, 55, 90, 10));padding:5px 2px !important;font-size:12px;color:#fff;position:absolute;bottom:95%;left:0%;width:100%;"> <h5   ><a style="background:transparent;color:#fff  ;opacity:100%!important;position:relative;bottom:40%  !important;right:0%;" href="news-details.php?nid=<?php echo $rows['id'][0]?>"><?php echo $rows['title'][0];?></a></h5></span>
      
      </div>
     
          
    
     
  
         
  </div>
   
    </div>
      <?php for($id=1;$id<5;$id++){?>
    <div class="carousel-item">
      
         <div class="slide col-lg-12">
       
    <div class="imgBx">
        
           
   <?php if($rows['PostVideo'][$id]!=null){$link= $rows['PostVideo'][$id];?>
                                <iframe frameborder="0" src="<?php echo $link?>" width="98%" height="98%" class="note-video-clip"></iframe>
    
                             
 
                                
                          <?php  }
        
        else{ ?>
    
         <img class="slide-img-top" src="admin/postimages/<?php echo $rows['image'][$id];?>" alt="fa fa-user">  
    
        <?php }?>
        

                 
                
        </div>
    
         <span style="background-color:#e83e58;;margin-top:5px;padding:2px !important;font-size:13px !important;color:#fff;position:absolute;right:1%;">  <i class="fa fa-clock"></i><?php
                                         
                                   if(date_create(date("Y/m/d H:i:s"))->diff(date_create( $rows['date'][$id]))->y>=1)
                                      
                                         echo date_diff(date_create(date("Y/m/d H:i:s")),date_create( $rows['date'][$id]))->format('%R%y سنة %m شهر ');
                                         
                                         else
                                             if(date_create(date("Y/m/d H:i:s"))->diff(date_create( $rows['date'][$id]))->m>=1)
                                                echo date_diff(date_create(date("Y/m/d H:i:s")),date_create( $rows['date'][$id]))->format(' %m شهر %d يوم');
                                            else
                                                if(date_create(gmdate("Y/m/d H:i:s"))->diff(date_create( $rows['date'][$id]))->d>=1)
                                                echo date_diff(date_create(date("Y/m/d H:i:s")),date_create( $rows['date'][$id]))->format('  %d يوم %h ساعة ');
                                                else
                                                    if(date_create(gmdate("Y/m/d H:i:s"))->diff(date_create( $rows['date'][$id]))->h>=1)
                                                    echo date_diff(date_create(date("Y/m/d H:i:s")),date_create( $rows['date'][$id]))->format(' %h ساعة %i دقيقة');
                                                    else 
                                                        if(date_create(gmdate("Y/m/d H:i:s"))->diff(date_create( $rows['date'][$id]))->i>=1)
                                                    echo date_diff(date_create(date("Y/m/d H:i:s")),date_create( $rows['date'][$id]))->format('%i دقيقة');
                                                        else
                                                            echo 'الان'
              ?></span>
            
           <span style="background-color:#e83e58;margin-top:5px;padding:2px !important;font-size:13px !important;color:#fff;position:absolute;left:1%"> <i class="fa fa-globe"></i> <?php
                                         
                                        
                                         echo $rows['category'][$id].' - '. $rows['subcategory'][$id];
              
              ?></span>
      
               
      
    
     
   
      
   
   
          <div class="contentBx" style="height:30%;text-align:center;z-index: 15; background-image: linear-gradient(rgba(1, 50, 99, 0), rgba(0, 53, 95, 5),  rgba(10, 55, 90, 10));opacity:1">
        
               <span style="background-color:background-image: linear-gradient(rgba(1, 50, 99, 0), rgba(0, 53, 95, 5),  rgba(10, 55, 90, 10));padding:5px 2px !important;font-size:12px;color:#fff;position:absolute;bottom:95%;left:0%;width:100%;"> <h5   ><a style="background:transparent;color:#fff  ;opacity:100%!important;position:relative;bottom:40%  !important;right:0%;" href="news-details.php?nid=<?php echo $rows['id'][$id]?>"><?php echo $rows['title'][$id];?></a></h5></span>
      
      </div>
     
          
    
     
  
         
  </div>
   
        
      </div>
    <?php }?>
      
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true" ></span>
    <span class="sr-only">السابق</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">التالي</span>
  </a>
</div>



      
