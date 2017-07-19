<?php
    session_start();
    if(isset($_SESSION['ID']))
    {
        header('location:Administration.php');
    }

?>

<!DOCTYPE html>
<html>

    <head>
        <title>Administration Login</title>
        <meta charset="UTF-8">
        <title>Administration Login</title>
        <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
    
    </head>
    

    <body>

        <div class="form">
            
            <div class="tab-content"> 
              
                <h1>Welcome Back!</h1>
              
                <form action="adminLogin.php" method="post">
          
                    <div class="field-wrap">
                        <label>
                            User ID<span class="req">*</span>
                        </label>
                        <input name="id" type="text"required autocomplete="off"/>
                    </div>
          
                    <div class="field-wrap">
                        <label>
                            Password<span class="req">*</span>
                        </label>
                        <input name="pass" type="password"required autocomplete="off"/>
                    </div>
          
                    <button class="button button-block"/>Log In</button>
          
                </form>

            </div>
          
        </div> <!-- /form -->

        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="js/index.js"></script>

    </body>

</html>