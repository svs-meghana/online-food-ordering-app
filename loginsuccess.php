<html>
    <head>
        <style>
          
            table{
                width:300px;
                text-align:center;
            }
           h1
            {
                text-align:center;
                color:white;
                font-size:50px;
                
            }
            body
            {
                background-image: url("p3.jpg");
                background-repeat: no-repeat;
                background-size: 1600px 950px;
            }
            .navbar {
    overflow: hidden;
    background-color: #333;
    font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
.navbar b {
    float: right;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}


.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}
            
        </style>
    </head>
    <body>
        
        <div class="navbar">
            <a href="loginsuccess.php">Home</a>
  <a href="profile.php">Profile</a>
  <div class="dropdown">
    <button class="dropbtn">CITY 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="hyd.php">Hyderabad</a>
      <a href="bang.php">Banglore</a>
      <a href="mumbai.php">Mumbai</a>
      <a href="delhi.php">Delhi</a>
    </div>
  </div> 
   
  <div style="float: right">
      <a href="logout.php">logout</a>
      </div>
  <div style="float: right">
      <a href="cart.php">orders</a>
      </div>
  
</div>

        <h1>Delicious food at your door steps</h1>
        <p style="color:white;font-size:40px;">Using This app, you can order food & beverages online from restaurants near & around you. We deliver food from your neighborhood local joints, your favorite cafes, luxurious & elite restaurants in your area, and also from chains like Dominos, KFC, Burger King, Pizza Hut, FreshMenu, Mc Donald's, Subway, Faasos, Cafe ...</p>
        <br> 
        <?php
        session_start();
        echo '<img style="margin-top:200px;" src="wel.jpeg"  width="250" height="175">';
        
        echo'<img style="margin-top:200px;" src="wel2.jpeg" aligh="center" width="250" heigth="175">';
        echo'<img style="margin-top:200px;" src="wel3.jpeg" width="250" height="175" >';
        echo'<img style="margin-top:200px;" src="wel4.jpg" width="250" height="175">';
        echo'<img style="margin-top:200px;" src="wel5.jpeg" width="250" height="175">';
        echo'<img style="margin-top:200px;" src="wel6.jpeg" width="250" height="175">';
        ?>
        <br><br><br>
        
    </body>
       
</html>


