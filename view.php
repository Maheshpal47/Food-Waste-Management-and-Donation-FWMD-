<?php

    include "logic.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="rest_post1.css">
</head>
<body>

   <div class="container mt-5 pot">

        <?php foreach($query as $q){?>
            <div class="pv bg-dark p-5 rounded-lg text-light text-center">
                <h1 class="restname">Restauran Name : <?php echo $q['restname'];?></h1>
                 <h1 class="dat">Date : <?php echo $q['Dateofpost'];?></h1>
                 <h1 class="pincode">Pincode :<?php echo $q['pincode'];?></h1>
                 <h1 class="address">Address :<?php echo $q['address'];?></h1>

                <h1 class="contact">Contact :<?php echo $q['contact'];?></h1>
                

            </div>
            <div class="pd bg-light p-5 rounded-lg text-dark text-center">
                                <h1 class="postdata"><?php echo $q['post'];?></h1>

                
            </div>

                <div class="d-flex mt-2 justify-content-center align-items-center">
                    <form method="POST">
                        <input type="text" hidden value='<?php echo $q['id']?>' name="id">
                        <button class="btn btn-danger btn-sm ml-2" name="delete">Delete</button>
                    </form>
                </div>

            </div>
            
        <?php } ?>  
        <div class="text-center">
                    <a href="restaurant_home.php" class="btn btn-outline-dark my-3" >Go Home</a>

        </div>  

   </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>