<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="/assets/css/login.css">
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>\
<script src="https://apis.google.com/js/platform.js" async defer></script>
<meta name="google-signin-client_id" content="1051702284649-2r5ptn3l1tp1fvbp1m4jssdr1sr8g4dp.apps.googleusercontent.com">

<script src="/assets/js/main.js"></script>
 
   <style>
    .btn {
    outline: none;
    border: none;
    cursor: pointer;
    display: inline-block;
    margin: 0 auto;
    padding: 0.9rem 2.5rem;
    text-align: center;
    background-color: #009688;
    color: #fff;
    border-radius: 4px;
    box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.16);
    font-size: 17px;
  }
  .btn:hover{
    background-color: #69e8dc;
}
    </style>
    <title>Login page</title>

  </head>
  <body>
        <!--Page Loader Starts-->
<div class="page-loader">
    <div></div>
    <div></div>
    <div></div>
</div>
      <!--Page Loader Ends-->

    
    
    
    
        
            

</br></br></br></br></br>

  
<h3 style=" color: white; text-align:center;">User Login</h3>
      </br></br>
        <?php if (session()->get('success')): ?>
          <div style="margin-left:25%;text-align:center;width:50%;" class="alert alert-success" role="alert">
            <?= session()->get('success') ?>
          </div>
        <?php endif; ?>
  <?php $validation = \Config\Services::validation(); ?>

  
    <form class="" action="/doctor_login/auth" method="post">
    
    <div style="width:350px; text-align:center;"  class="g-signin2" data-onsuccess="onSignIn"></div>
        <h3 style="text-align:center; color:white">OR</h3>
        <div class="form-field">
            <input type="email" name="email" placeholder="Email / Username" value="<?= set_value('email') ?>" required/>
        </div>
        <?php if($validation->getError('email')) {?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('email'); ?>
            </div>
        <?php }?>
        
        <div class="form-field">
            <input type="password" name="password" placeholder="Password" required/>                         </div>
            <?php if($validation->getError('password')) {?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('password'); ?>
            </div>
        <?php }?>
        <div class="form-field">
            <button class="btn" type="submit">Log in</button>
        </div>
        
<script>
  function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });
  }
</script>
      </form>
     </div>
    </div>
 
          
          </body>
</html>


<script>
  function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
}
  </script>
