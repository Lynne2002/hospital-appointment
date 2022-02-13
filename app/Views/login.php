<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style>
 *{
    margin:0;
    padding:0;
    font-family: 'Raleway', cursive;
    

}


.banner{
  vertical-align: top;
    width:100%;
    height:100vh;
    background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url(/assets/Images/login.jpg);
    background-size: cover;
  background-position: center;
   
}
.container .container{
  
    background-color: transparent;
    color:white;
    width:700px;
    height:410px;
   border-style: outset;
}
.container{
   
    background-color: transparent;
}
input[type="password"], [type="text"]{
    width: 350px;
    text-align: center;
    height: 20px;
    outline: none;
    color: #fff;
    font-size: 20px;
    background: transparent;
    border: none;
    margin-bottom: 40px;
    border-bottom: 1px solid #fff;
    }
    input::placeholder {
        color: white;
        opacity: 1;
      }

   
    .logo{
        width:90px;
        height:90px;
        cursor:pointer;
    }
    .navbar{
        width:85%;
        margin:auto;
        padding:35px 0;
        display:flex;
        align-items: center;
        justify-content: space-between;
    }
    .navbar ul li{
        list-style: none;
        display:inline-block;
        margin:0 20px;
        position:relative;
    
    }
    .navbar ul li a{
        text-decoration: none;
        color: #fff;
        text-transform: uppercase;
    }
    .navbar ul li a.active:after{
      content:'';
        height:3px;
        width:0;
        background:#009688 ;
        position: absolute;
        left: 0;
        bottom: -10px;
        transition: 0.5s;
    }
    .navbar ul li a.hover:after{
      content:'';
        height:3px;
        width:0;
        background:#009688 ;
        position: absolute;
        left: 0;
        bottom: -10px;
        transition: 0.5s;
    }
    .navbar ul li::after{
      content:'';
        height:3px;
        width:0;
        background:#009688 ;
        position: absolute;
        left: 0;
        bottom: -10px;
        transition: 0.5s;
    }
   
    .navbar ul li:hover::after{
        width:100%;
    }
    .navbar ul li a.active:hover::after,  .navbar ul li a:hover::after{
      width:100%;
    }
    
      </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    
   
    <title></title>

  </head>
  <body>
 <div class="banner">
  <div class="navbar">
    <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars"></i>
    </label>
    <img src="\assets\Images\logo.jpg" class="logo">
    <ul>
      <li><a class="active" href="#">Home</a></li>
      <li><a href="#">Properties</a></li>
      <li><a href="#">AirBnB</a></li>
      <li><a href="#">Rentals</a></li>
     
      <li><a href="#">Mortgages</a></li>
      <li><a href="#">About Us</a></li>
      <li><a href="#">Contact Us</a></li>
</ul>
  
</div>
  


  <div class="container">
  <div class="row">
    
      <div class="container">
        <h3>Glen Homes Login</h3>
        <hr>
        <?php if (session()->get('success')): ?>
          <div class="alert alert-success" role="alert">
            <?= session()->get('success') ?>
          </div>
        <?php endif; ?>
        <form class="" action="/" method="post">
          <div class="form-group">
           <label for="email">Email address:</label>
           <input type="text" class="form-control" name="email" id="email" placeholder="Please enter your email here" value="<?= set_value('email') ?>">
          </div>
          <div class="form-group">
           <label for="password">Password</label>
           <input type="password" class="form-control"  placeholder="Please enter your password here"  name="password" id="password" value="">
          </div>
          <?php if (isset($validation)): ?>
            <div class="col-12">
              <div class="alert alert-danger" role="alert">
                <?= $validation->listErrors() ?>
              </div>
            </div>
          <?php endif; ?>
          <div class="row">
            <div class="col-12 col-sm-4">
              <button type="submit" class="btn btn-primary">Login</button>
            </div>
            <div class="col-12 col-sm-8 text-right">
              <a style="color:white;" href="/register">Don't have an account yet?</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
          </div>

          
          </body>
</html>