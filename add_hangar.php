<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="main.css">
    <title>Add Hangar</title>
</head>
<body id="hangar">
    <div id="wrapper">

        <div id="header">
            <div id="title">
               <h2> tHat Style </h2>      
            </div>

            <div id="icon">
                <img src="images/dashboard.png" alt="dashboard" height= "35px" width="40px">
            </div>
            
            <div id="icon2">
                 <img src="images/account_icon.png" alt="account" height="35px" width="40px">    
            </div>
        </div> 

        <div id="hanger_img">
            <img src="images/hangar.png" alt="hangar" height= "60px" width="200px">
        </div>
        
        <div id="URL">
             <h2>URL (copy & paste link below)</h2>
             
             <form action="add_hangar.php" method="get">
             <label for="URL">URL</label>
             <input type="text" name="URL">    
             </form>

        </div>
    
        <div id="manual_entry"> 
            <h2>Manual Entry</h2>             

            <form action="add_hangar.php" method="get">
                <div id="productname">
                    <label> Name of product: </label>
                    <input type="text" name="name">
                </div></br>
                <div id="Clothing">
                    <label>Type Of Clothing:</label>  
                <form>
                    <select name="clothingList" onchange="clothingType()">
                        <option>Coat</option>
                        <option>Jacket</option>
                        <option>Shirt</option>
                        <option>Vest</option>
                        <option>Jeans</option>
                        <option>Trousers</option>
                        <option>Chinos</option>
                        <option>Shorts</option>
                        <option>Socks</option>
                        <option>Underwear</option>
                        <option>Suits</option>
                        <option>Shoes</option>
                        <option>Trainers</option>
                    </select>
                </form>
                </div>
                
                <div class="clothingpic"><label> Picture: </label><input type="file" name="item" accept="images/*"></div>
                <label> Price: </label>
                <input type="text" name="price">    
            </form>
        </div>
    
        <button class="btn btn-success btn-lg">Add Hangar</button>
    </div>
</body>
</html>
