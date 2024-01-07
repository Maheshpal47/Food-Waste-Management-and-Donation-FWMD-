<?php
    session_start();

    include "logic.php";
    include "server1.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

   <div class="container mt-5">
            <form method="post">

                            <div class="form-group mb-3">
                                <label for="">user_name</label>
                                <input type="text" name="username" class="form-control" value="<?php echo $_SESSION['restu']; ?>" />
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Restaurant_name</label>
                                <input type="text" name="restname" class="form-control" />
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Date</label>
                                <input type="date" name="datei" class="form-control" />
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Pincode</label>
                                <input type="text" name="pincode" class="form-control" />
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Address</label>
                                <input type="text" name="address" class="form-control" />
                            </div>

                            <div class="form-group mb-3">
                                <label for="">contact</label>
                                <input type="text" name="contact" class="form-control" />
                            </div>
                            <div>
                                <label for="">write post</label>
                                 <textarea name="post" class="form-control my-3 bg-dark text-white" cols="30" rows="10"></textarea>
                             </div>
                            <div class="form-group mb-3">
                                <button type="submit" name="save" class="btn btn-primary">Save</button>
                            </div>
                        </form>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>