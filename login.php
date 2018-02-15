<!DOCTYPE html>
 <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Protype of tHat Style</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href= "login.css"> 
        <link rel="icon" href="logo.jpg"> 
    </head>
    <body>
        <div id= "wrapper"> 
            <div id= "logo"> 
                <a href="index.html"><img src="logo.jpg" width= "125" height="110"></a> 
            </div> 
            <div id= "title">
                <h1> tHat Style </h1>
            </div> 
            
            <div id="login">
                <form action="index.php" method="post" autocomplete="off"> 

                    <div class="field-wrap"> 
                    <label> Email: <span class="req"></span></label>
                    <input type="email" required autocomplete="off" name="email"/> 
                    </div>      

                    <div class="field-wrap"> 
                    <label> Password: <span class="req"></span></label>
                    <input type="password" required autocomplete="off" name="password"/>
                    </div>
                   
                    <p class= "forgot"><a href="forgot.php">Forgot My Password?</a></p>
                    <button class= "btn btn-success btn-lg">Sign In</button>
                    
            <div id= "Footer"> 
                <p> Copyright - tHat Style 2018 </p>
                <p> Visit Us: www.tHatStyle.co.uk</p>
            </div>
        </div>    
    </body>
</html>
