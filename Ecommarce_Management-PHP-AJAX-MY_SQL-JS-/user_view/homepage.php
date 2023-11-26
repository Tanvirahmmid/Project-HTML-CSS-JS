<?php
include '../user_controller/homepage_valid.php';
// include '../user_model/db.php';
session_start();



if (!isset($_SESSION['username'])) {

    $username="Unknown User";
    echo "<p>Please Login</p>";
}

else if(isset($_SESSION['username'])){
    $username=$_SESSION['username'];
    $cookie_name = "username";
    $cookie_value = $username;
    setcookie($cookie_name, $cookie_value,time() + 86400, "/");
    

    if(isset($_COOKIE[$cookie_name])) {
        echo "<p>$username</p>";
      }else {  
        echo "<p>Login first</p>"; 
    } 

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Board</title>
    <link rel="stylesheet" href="../user_css/homepage.css">
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script> 
        $(document).ready(function(){
          $("#flip").click(function(){
            $("#panel").slideDown("slow"); 
            
            $("#flip").click(function(){
                $("#panel").slideUp("slow");
            });
          });
        });
        </script>
</head>

<body>

    <div class="star">
        <h1 align="center" class="glow">Customer</h1>
        <hr>
    </div>

    <div id="flip">
        <p>Click me down↓</p>
    </div>

    <div id="panel">
        <li><a href="user_login.php">Login</a></li>
        <li><a href="about.php">About us</a></li>
        
        <li><a href="../user_controller/logout.php">Logout</a></li>
        </div>
        

    <div class="navbar">
        <ul>
            <li><a href="user_login.php">Login</a></li>
            <li><a href="about_us.php">About us</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="../user_controller/logout.php">Logout</a></li>
        </ul>
       
        <button class="vanue" onclick="openPopup()">Service Center</button>
    </div>

   

    <div id="slider">
        <figure>
            <img class="image" src="14pro.jpg" alt>
            <img class="image" src="p7.jpg" alt>
            <img class="image" src="mi.jpg" alt>
            <img class="image" src="i14.jpg" alt>
            <img class="image" src="11t.jpg" alt>
        </figure>
    </div>
    <br>
    <div class="notice">
        
        <button class="butt"><a href="https://www.facebook.com/profile.php?id=100007993127754">Facebook</a></button>
        <button class="butt"><a href="https://www.youtube.com/@Apple">Youtube</a></button>
    </div>
   

    <br>
    <div class="now">
        <marquee behavior="" direction="">
        <h1 align="center">Buy and Enjoy
                Special offers and discount. 10% off in Every iphone Purchase

            </h1>
        </marquee>
    </div>
    <div class="panel">
        <div class="card">
            <div class="card-image"></div>
            <div class="card-text">
                <h4 id="ip">Brand : Apple</h4>
                
                <h4>OS : Ios</h4>
                <button type="button" onclick="location.href='http://localhost/Project/Product/iphone/'"> Buy</button>
            
            </div>
        </div>

        <div class="card">
            <div class="card-image2"></div>
            <div class="card-text">
                <h4 id="sam">Brand : Samsung</h4>
                <h4> OS: Android</h4>
                
                <button type="button" onclick="location.href='http://localhost/Project/Product/Samsung/'"> Buy</button>
            </div>
        </div>

        <div class="card">
            <div class="card-image3"></div>
            <div class="card-text">
                <h4 id="bullet train">Brand : MI </h4>
                
                <h4>OS : Android</h4>
                <button type="button" onclick="location.href='http://localhost/Project/Product/MI/'"> Buy</button>
            </div>
        </div>

        
        </div>
    </div>

    <br><br><br><br>
    <div class="now2">
        <h1 align="center">Accessories</h1>
    </div>

    <div class="panel">
        <div class="card">
            <div class="card-image10"></div>
            <div class="card-text">

            </div>
        </div>

        <div class="card">
            <div class="card-image11"></div>
            <div class="card-text">

        </div>

    
        </div>
    </div>


    <br>
    
    <div class="panel2">
        <div class="special">
            <h1 align="center">Special Offers</h1>
            <img src="dc.jpg">
        </div>
        <div class="panel4">
        <div class="special">
            <h1 align="center">Cash Back</h1>
            
            <img src="cb2.jpg">
        </div>
        <div class="panel5">
        <div class="special">
            <h1 align="center">Cash Back</h1>
            
            <img src="cb.jpg">
        </div>
        
        

            <br><br><br>
            
        </div>
    </div>
    </div>
    </div>

    <br><br><br><br>
    <br><br><br><br>
    <br><br><br><br>
    <br><br><br><br>
    <hr>
    <div class="footer">
        <div class="footer-text">
            <u><b>
                    <p>Tanvir Ecom</p>
                </b></u>
            <p>level shop no 15</p>
            <p>Narayangonj 1216</p>
            <p>Bangladesh</p>
        </div>
        <div class="footer-text">
            <u><b>
                    <p>Contact US</p>
                </b></u>
            <p>(+88) 01688510171</p>
            <p>01980277598</p>
            <u><b>
                    <p>Contact US</p>
                </b></u>
            <p>tanvirahmmid@gmail.com</p>
        </div>

        <div class="footer-text">
            <u><b>
                    <p>Ecommerce side</p>
                </b></u>
            <p>New year offer</p>
        </div>

        <div class="footer-text">
            <u><b>
                    <p>Copyright</p>
                </b></u>
            <p>Copyright @ Tanvir 2022</p>
            <p>Privacy and policy</p>
        </div>
  

    </div>
    <div class="popup" id="popup">
        <a href="https://www.google.com/maps/dir/23.8010006,90.3814755/Star+
        Cineplex,+13%2F3+Ka,+Level+8,
        +Bashundhara+City,+Panthapath,
        +Dhaka+1205/@23.7753411,90.373
        8195,14z/data=!3m1!4b1!4m10!4
        m9!1m1!4e1!1m5!1m1!1s0x3755b8a3
        303a6fbf:0xbc442f814508a7f0!2m2
        !1d90.3906021!2d23.751255!3e0"><h2 align="center">Bashundhara Shopping Mall
            <p>level 5, Bashundhara city 13/3 K, Panthapath, Dhaka</p>
        </h2></a>
    
        <a href="https://www.google.com/maps/dir//Star+Cineplex+-+Shimanto+Shambhar,+P9PG%2BXW2,+Road+No.+2,+Dhaka+1205/data=!4m7!4m6!1m1!4e2!1m2!1m1!1s0x3755b8ca5fc2992f:0x29c7e144c6374781!3e0?sa=X&ved=2ahUKEwjWmbr-q8T5AhVl73MBHTN_B98Q-A96BAgOEA4"> <h2 align="center">Dhanmmondi 2, Dhaka
            <p> Dhanmondi Dhaka</p>
        </h2></a>
   
    
   
        <a href="https://www.google.com/maps/dir//Sony+Square,+R924%2B55H,+Sony+Square,+Zoo+Road,+Dhaka+1216/data=!4m7!4m6!1m1!4e2!1m2!1m1!1s0x3755c13f21695aa3:0x6159ed68bed83703!3e0?sa=X&ved=2ahUKEwimkITbq8T5AhWQlNgFHaroDH0Q-A96BAgQEA4"><h2 align="center"> Mirpur
            <p> Mirpur, Dhaka 1216, Bangladesh</p>
        </h2></a>
    
        
   
    <button class="prefer" onclick="closePopup()" >Found Prefered Location</button>
    </div>

    <form action="" method="post">
    <div class="bookPopup" id="bookPopup">
        <input type="text" id="mname" name="mname" placeholder="Movie Name"><br>
        <input type="date" id="mdate" name="mdate"><br>
        <input type="text" id="email" name="email" value="<?php echo $username ?>" placeholder="Confirm Email To Book"><br>

        <p align="center">Select the vanue</p>

        <select id="mvanue" name="mvanue">
            <option value="Bashundhara">Bashundhara</option>
            <option value="Simanto Shambhar">Simanto Shambhar</option>
            <option value="SKS Tower">SKS Tower</option>
            <option value="Sony Square">Sony Square</option>
            <option value="Bangabandhu Military Museum">Bangabandhu Military Museum</option>
        </select>
<br><br>
        <button class="prefer" onclick="closeBook()" name="book">Book Ticket</button>
        <button class="prefer" id="cancel" onclick="closeBook()">Cancel</button>

    </div>
    </form>
    

</body>
<script src="../user_js/homepage.js">

</script>
</html>