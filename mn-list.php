    



<div class="  col-md-12 mn-list  pt-2 " style="justify-content:center !important;margin:0 !important" >
                            <h5 style="color:#224D79"> المزيد من الأخبار </h5>
                           
                                <?php $more_news=mysqli_query($con,"select id as id,PostTitle as title,PostImage as image,postdetails as details from tblposts where Is_active=1 order by id desc limit 9,5");
                                
                                while ($row=mysqli_fetch_array($more_news)) {?>
    <div class="card   mb-4 " style="background:transparent !important; width:100% !important;padding:0 !important;height:165px !important;"><img src="admin/postimages/<?php echo htmlentities($row['image']);?>" class="imgbx" style="background:green !important;min-width:100% !important;min-height:160px !important"  class="card-text"><div class="card-text   pt-0 pb-0 mt-2 mb-0" style="background-image: linear-gradient(rgba(1, 50, 99, 0), rgba(1, 50, 99, 0),  rgba(1, 55, 90, 10));
   ;opacity:1;padding:5px;width:100% !important;max-height:60% !important;min-height:60% !important;position:absolute;bottom:0% !important;"><a class=" btn" style="background:transparent !important;background-image: linear-gradient(rgba(1, 50, 99, 0), rgba(1, 53, 95, 5),  rgba(1, 55, 90, 10)) !important!important;width:100%;font-size:16px !important;color:#fff !important;text-align:right !important;position:absolute;bottom:0 !important;right:0 !important;padding-right:10px;font-weight:900 " href="news-details.php?nid=<?php echo htmlentities($row['id'])?>"><?php echo htmlentities($row['title']);?></a></div> </div>
                       
                                
                                
                                 
                                <?php }?><br>
                                                             <a href="category.php" style="width:100%;font-size:20px !important;background:#224D79;color:#fff" class="btn card-header " onclick="category.php"> المزيد</a>
                          
                            
                            
                            

                        </div>
                    