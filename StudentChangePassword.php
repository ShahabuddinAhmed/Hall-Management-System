<!DOCTYPE html>
<html>

    <head>

        <meta charset="UTF-8">
        <title>Student Login</title>
        <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
    
    </head>

    <body>

        <div class="form">
            
            <div class="tab-content"> 
              
                <h1>Welcome Back!</h1>
              
                <form action="changePassTm.php" method="post">
          
                    <div class="field-wrap">
                        <label>
                            Entire New Password<span class="req">*</span>
                        </label>
                        <input  name="fpass" type="password"required autocomplete="off"/>
                    </div>
          
                    <div class="field-wrap">
                        <label>
                            Entire Confrom Password<span class="req">*</span>
                        </label>
                        <input name="spass" type="password"required autocomplete="off"/>
                    </div>
          
                    <button type="submit" class="button button-block"/>Confrom</button>
          
                </form>

            </div>
          
        </div> <!-- /form -->

        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="js/index.js"></script>

    </body>

</html>