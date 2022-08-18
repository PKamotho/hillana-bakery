<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <!--<link rel="stylesheet" href="contact.css">-->
</head>
<style type="text/css">
    *{
        margin:0;
        padding:0;
        background-color:gray;
    }
    h3{
        color:orangered;
    }
    h4{
        color:orangered;
    }
    a{
    text-decoration: none;
}
ul{
    list-style: none;
}
div ul{
    display: flex;
}
div ul li{
    height: 40px;
    line-height: 43px;
    margin: 3px;
    padding: 0 22px;
    display: flex;
    font-size: 0.7rem;
    text-transform: uppercase;
    font-weight: 500;
    letter-spacing: 1px;
    border-radius: 3px;
    transition-timing-function: 0.6s ease-in-out;
    color: black;
}
div ul li a:hover{
    background-color: orangered;
    color: white;
    box-shadow: 5px 10px 30px rgba(252,59, 0, 0.397);
    border-radius: 5px ;
}
.active{
    background-color: orangered;
    color: white;
    box-shadow: 5px 10px 30px rgba(252,59, 0, 0.397);
    border-radius: 5px;
}
</style>
<body>
<div class="navigation">
        <ul>
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="order.php">PLace an Order</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="#">Today's special</a></li>

        </ul>

    </div>  
    <h3>We are located at Ngara, Nairobi city</h3>
    <h4>Phone Number<a href="tel:+254 794986311">+254 794986311</a></h4>
    
   
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8304636282896!2d36.826795515205205!3d-1.2750200359747195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f16d41e911eb9%3A0x15c78f7f0c7f23b5!2sDesai%20Rd%2C%20Nairobi!5e0!3m2!1sen!2ske!4v1660726212371!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</body>
</html>