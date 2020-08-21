<?php
    // check if user coming from a request
    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        $user = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $phone = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
        $msg = filter_var($_POST['message'], FILTER_SANITIZE_STRING);


        $formErrors = array();
        if (strlen($user) < 3){
            $formErrors[] = 'username must be large than 3 caracters';
        }
        if (strlen($msg) < 10){
            $formErrors[] = 'the message can\'t be less than 10 caracters';
        }
        $headers = 'from:' . $email . '\r\n';
        $myemail = 'youcode098@gmail.com';
        $subject = 'contact form';
         if(empty($formErrors)){
             mail($myemail, $subject, $msg, $headers);
         }
    }

    //  if no errors

   

    







?>









<!DOCTYPE html>
<html lang="en-US">

<head>
    <!-- General meta tags needed-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- CSS File -->
    <link href="dist/css/style.css" rel="stylesheet">
    
    <title></title>
</head>

<body>
    <div class="container">
        <h1 class="text-center">contact me</h1>
        <form class="contact-form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                <?php if(!empty($formErrors)){ ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="start">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                <?php
                    foreach($formErrors as $errors){
                        echo $errors . '<br />';
                         }?>
                    </div>
                <?php } 
                ?>
            
            <input type="text" class="form-control" name="username" placeholder="username" require />
            <!-- <div class="user alert alert-danger" role="alert">username must be large than <strong>3</strong> caracters</div> -->
            <input type="email" class="form-control" name="email" placeholder="email" require />
            <!-- <div class="email alert alert-danger" role="alert">check email</div> -->
            <input type="number" class="form-control" name="phone" placeholder="phone" require />
            <!-- <div class="phone alert alert-danger" role="alert">check number</div> -->
            <textarea class="form-control" placeholder="your message!" name="message"></textarea>
            <!-- <div class="msg alert alert-danger" role="alert">the message can't be less than <strong>10</strong> caracters</div> -->
            <input class="btn btn-primary btn-block" type="submit" value="send message" />
        </form>
    </div>




   
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
     <!-- JavaScript File -->
     <script src="dist/js/main.js"></script>

</body>

</html>