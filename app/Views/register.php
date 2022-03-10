<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/register.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title></title>
    <style>
      body{
        background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url(/assets/Images/background_2.jpeg);
    padding-top: 30vh;
	background-size: cover;
	background-position: center;
	font-family: 'Raleway', cursive;
   
}
.container .container{
    background-color: transparent;
    color:white;
    width:700px;
    height:700px;
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
    
      #registration_type option{
        width:100%;
      }
      #registration_type{
        width:100%;
      }
      </style>

  </head>
  <body>
    <?php
      $uri = service('uri');
     ?>

<div class="container">
  <div class="row">
   
      <div class="container">
        <h3>Glen Homes Registration</h3>
        <hr>
        <form class="" action="/register" method="post">
          <div class="row">
            <div class="col-12 ">
              <div class="form-group">
               <label for="firstname">First Name</label>
               <input type="text" class="form-control" name="first_name" id="firstname" placeholder="First Name" value="<?= set_value('firstname') ?>">
              </div>
            </div>
            <div class="col-12 ">
              <div class="form-group">
               <label for="lastname">Last Name</label>
               <input type="text" class="form-control" name="last_name" id="lastname"  placeholder="Last Name" value="<?= set_value('lastname') ?>">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
               <label for="email">Email address</label>
               <input type="text" class="form-control" name="email" id="email"  placeholder="Email " value="<?= set_value('email') ?>">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
               <label for="registration_type">Registration type:</label>
               <br>
               <select name="registration_type" id="registration_type">
  <option value="Buyer">Buyer</option>
  <option value="Seller">Seller</option>
  <option value="Agent">Agent</option>

</select>
              </div>
            </div>
            <div class="col-12 ">
              <div class="form-group">
               <label for="password">Password</label>
               <input type="password" class="form-control" name="password"  placeholder="Enter Password" id="password" value="">
             </div>
           </div>
           <div class="col-12">
             <div class="form-group">
              <label for="password_confirm">Confirm Password</label>
              <input type="password" class="form-control" name="password_confirm"  placeholder="Confirm Password" id="password_confirm" value="">
            </div>
          </div>
          <?php if (isset($validation)): ?>
            <div class="col-12">
              <div class="alert alert-danger" role="alert">
                <?= $validation->listErrors() ?>
              </div>
            </div>
          <?php endif; ?>
          </div>

          <div class="row">
            <div class="col-12 col-sm-4">
              <button type="submit" class="btn btn-primary">Register</button>
            </div>
            <div class="col-12 col-sm-8 text-right">
              <a href="/">Already have an account? Click here to login</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

</body>
</html>