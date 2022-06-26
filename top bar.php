      
     
  <?php
 
    ?>
 <style>
        marquee
    {
        background-color:transparent;
        color: #fff;
          padding-top: 2%; 
       transition-property: all;
        transition-delay: 0 !important;
       
         
    }
    
        
    
      @media (max-width: 2048px){
          .contact {width:20% !important;right: 80% !important;}
            .contact a {margin:0.4em !important;}
               .title
               {
                   right:0 !important;
                   visibility: visible;
               } 
               .marquee
               {
                   width:70% !important;
                   right:10% !important;
               }
               body
               {
                   font-size: 16px !important;
               }
              
     }
     
      @media (max-width:999px){
              
             .contact a {margin:0.2em !important;font-size:15px !important;}
     }
     
     
               @media (max-width:769px){
              
               
              .contact {width:30% !important;right:70% !important;}
               .contact a {margin:0.2em !important;font-size:13px !important;}
               .title
               {
                   right:0 !important;
                   visibility: hidden;
                   
               } 
              .marquee
               {
                   width:70% !important;
                   right:0% !important;
               }
              
           }
     
      @media (max-width: 720px){
          .contact {width:25% !important;right: 75% !important;}
            .contact a {margin:0.1 em !important;}
               .title
               {
                   right:0 !important;
                   visibility: visible;
               } 
               .marquee
               {
                   width:70% !important;
                   right:15% !important;
               }
               body
               {
                   font-size: 16px !important;
               }
              
     }
      @media (max-width: 480px){
          .contact {width:25% !important;right: 75% !important;}
            .contact a {margin:0  !important;}
               .title
               {
                   right:0 !important;
                   visibility: hidden;
               } 
               .marquee
               {
                   width:75% !important;
                   right:0 !important;
               }
               body
               {
                   font-size: 16px !important;
               }
              
     }
     
       </style>     
<!-- Top Bar Start -->
                   <div class="container" style="width:100%;padding:0 !important">
                   <div class="row" style="width:100%;margin:0 !important">
                        <div class="col-md-12 top-bar" style="display:flex; background-color:transparent;height:50px;width:100%;margin:0px !important">
                            
                            <div class="title" style="background-color:#224D79;position:absolute; right:0;width:15%;height:100%;justify-content:center">
                              
                           
                           
   <p style="width:100%;margin-top:1em;margin-right:0em;font-size:1em;padding-right:2px;padding-bottom:2px">
    الاخبار 
</p>                          
  
                             
 </div>
                           
 <div class="marquee" style="background-color:#224D79;position:absolute; right:15%;width:75%;height:100%;padding-top:4px;">
                            <?php  $marquee = mysqli_query($con,"SELECT * FROM tblposts where Is_Active=1 ORDER BY ID DESC LIMIT 1,15");?>

                           <marquee  style="width:100%; font-size:1em;padding-top:4px" direction="right" ><?php
                               
                               while ($row=mysqli_fetch_array($marquee)) { ?>
 
                           <span style="color:#fff" class="fa fa-globe"> &ensp;<?php echo htmlentities($row['PostTitle']);?></span>&emsp;
                               
                            <?php }?>
                            </marquee>
     
     
                 
 </div>
                           
                       
                    <div  style="background-color:#224D79;position:absolute; right:80%;width:20%;height:100%;justify-content:center;padding-top:8px !important;margin-left:3px!important" class="contact">
                     
                            <a href="https://www.facebook.com/yemenistudentweb"style="font-size:14px; margin-right:0.9em ;"><i class="fab fa-twitter"></i></a>
                              <a href="https://www.facebook.com/yemenistudentweb"style="font-size:14px; margin-right:0.9em ;"><i class="fab fa-facebook-f"></i></a>
                            
                            <a href="https://www.instagram.com/yemenistudentweb"style="font-size:14px; margin-right:0.9em ;"><i class="fab fa-instagram"></i></a>
                            <a href="https://t.me/yemenistudentweb"style="font-size:14px; margin-right:0.9em ;"><i class="fab fa-telegram"></i></a>
                            <a href="mailto:yemenistudent2021@gmail.com"style="font-size:14px; margin-right:0.9em ;"><i class="fas fa-envelope"></i></a>
                           
                       
                 
                             
 </div>       
                     
                 
                    </div>
                       
                       
                        
                       
                      
                       
                       
                                           
                       
                </div>
            </div>
        
        <!-- Top Bar end

