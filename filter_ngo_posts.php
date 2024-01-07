<?php

    include "ngo_logic.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="rest_post1.css">
</head>
<body >

<div class="row nav">
        <p class="title2" text >NGO posts </p>
   
    <a class="homb btn btn-light" href="restaurant_home.php">Home</a>

    


  
</div>



    
    <div class="col-12 others">

        
                         
                            <form method="post" class="col-lg-6">
                                 <label for="">Enter your pincode to filter the posts</label>
                                 <div class="row">
                                        <div class="col-lg-4" >
                                                 <input type="text" name="pin1" class="form-control" />
                                        </div>

                                        <div class="col-md-2">
                                                 <button type="submit" name="enter" class="btn">Enter</button>
                                        </div>
                                 </div>
                            </form>

               
                 
                    



                           <div class="row">

                      <?php foreach($filter as $q){ ?>
                       

                         


            <div class="posts col-lg-2">
             

                 <div>
                    <h1 class="ngon"><?php echo $q['name'];?></h1>      
             </div>
                <div>
                      <h2 class="dt"><?php echo substr($q['datep'], 0, 50);?></h2>
                </div>
                <div>
                     <a href="ngo_post_view.php?id=<?php echo $q['id']?>" class="btn btn-light bt">Read More <span class="text-danger">&rarr;</span></a>  
                </div>
                
            </div>
                      <?php }?>
               </div>
               
            
              </div>
  
</div>



<div class="foot1">

  <h1 class="t1">This is a page where posts made by restaurants are being displayed </h1>
  
</div>


</body>
</html>
