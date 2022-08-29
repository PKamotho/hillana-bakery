<!DOCTYPE html>
<html>
  <head>
    <title>Registration Page</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="index.css">
  </head>
  <body>
  <div class="navigation">
        <ul>
            <li><a href="#" class="active">About us</a></li>
            <li><a href="../food_order/placeOrder.php">Place an Order</a></li>
            <li><a href="contact.php">contact us</a></li>
            <li><a href="bakery_menu.php">Menu</a></li>
            <li><a href="special.php">Today's special</a></li>

        </ul>

    </div>  
    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
        <div class="regform"><h2>Hillana Bakery Order Form</h2>
        
    
    </div>
   
          <div class="panel-body">
            <form action="connect.php" method="post">
            <div id="name">
            <h3 class="name">Name</h3>
            <label class="firstlabel">First name</label>
            <input class="firstname" type="text" name="firstName">
            <label class="lastlabel">Last name</label>
            <input class="lastname" type="text" name="lastName">
            
        </div>
        <h3 class="name">Email</h3>
            <input class="email" type="email" name="email">
            <h3 class="name">Area</h3>
            <label class="Location">Location</label>
            <input class="location" type="text" name="location">
           <h3 class="name">Phone</h3>
           <input class="number" type="number" name="number">
           
            
              <input type="submit" class="btn btn-primary" />
            </form>
          </div>
          <div class="panel-footer text-right">
            
 
  </div>
</div>
  </body>
</html>
