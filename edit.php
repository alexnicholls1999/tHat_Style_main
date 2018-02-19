<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> Your Account </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="create.css"/>
        <link rel="icon" href="logo.jpg">
    </head>
    <body>
    <div id="wrapper">
        <div id="header">
            <div id= "title">   
                <a href="index.html"><h1> tHat Style: Editing Account </h1></a>
            </div>
        </div>  
        <div id="facebook">
            </br>
            <a><button disabled> Connected </button></a>
        </div> 
        <div id="twitter">    
            <a><button disabled> Connected </button></a>
        </div>
        
        <div id= "Manual">
            </br>
            <h2> Personal Information </h2>
            <form action= "dash.php" method="post" autocomplete="off"> 
                <div class="basic">
                    </br>
                    <label> Name: <span class="req"></span></label>
                    <input type="name" required autocomplete="off" name="name"/>
                </div>  

                <div class="basic">
                    <label> Email: <span class="req"></span></label> 
                    <input type="email" required autocomplete="off" name="email"/>
                </div>

                <div class="secure">
                    </br>
                    <label> Password: <span class="req"></span></label>
                    <input type="password" required autocomplete="off" name="password"/>
                </div>
                
                <div class="secure">
                    <label> Password: <span class="req"></span></label>
                    <input type="password" required autocomplete="off" name="password"/>
                </div>

                    </br>
                    <label> Gender: </label> 
                    <div id="btnmale"><input type="button" value="Male" name="gender"/></div>
                    <div id="btnfemale"><input type="button" value="Female" name="gender"/></div>
                </div> 

                <div class="message"> 
                    </br>
                    </br>

                    <input type="checkbox"/><span class="req"></span>
                    <label> Send email messages for latest news and offers</label></br>

                    <input type="checkbox"/><span class="req"></span>
                    <label> Accept Terms and Conditions </label>
                    
                    <button class= "btn btn-success btn-lg">Create Account</button>
                </div>
            </form>



    
    </div>
    </body>
</html>