<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/register.css">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title></title>
    <style>
      body{
        background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url(/assets/Images/login.png);
        color:white;
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
        <h3 style="text-align:center">EDIT DOCTORS</h3>
        <hr>
        <form class="" action="<?=base_url('doctors/update/'.$doctors['doctor_id'])?>" method="post"  name="ajax_form" id="ajax_form" method="post" accept-charset="utf-8" enctype="multipart/form-data">
          <div class="row">
            <div class="col-12 ">
              <div class="form-group">
               <label for="firstname">First Name:</label>
               <input type="text" class="form-control" name="first_name" id="firstname" placeholder="First Name" value="<?=$doctors['first_name']?>">
              </div>
            </div>
            <div class="col-12 ">
              <div class="form-group">
               <label for="lastname">Last Name:</label>
               <input type="text" class="form-control" name="last_name" id="lastname"  placeholder="Last Name" value="<?=$doctors['last_name']?>">
              </div>
            </div>

            <div class="col-12">
              <div class="form-group">
               <label for="email">Email address:</label>
               <input type="text" class="form-control" name="email" id="email"  placeholder="Email " value="<?=$doctors['email']?>">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
               <label for="email">Profile image:</label>
                       <input type ='file' name="doc_image" id = "demo" />
                       </br>   </br>
                        <img style="width: 100px; height:100px;" id = "myid" src = "#" alt = "new image" />
                        </div>
            </div>
    </br>

    
            
            <div class="col-12 ">
              <div class="form-group">
               <label for="password">Password:</label>
               <input type="password" class="form-control" name="password"  placeholder="Enter New Password" id="password" value="">
             </div>
           </div>
           
          <input type="hidden" class="form-control" name="department" id="department" value="<?=$department['department_id']?>">
          <input type="hidden" class="form-control" name="added_by" id="department" value="<?= session()->get('user_id') ?>">
          
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
              <button type="submit" class="btn btn-primary">EDIT</button>
            </div>

        </form>
      </div>
    </div>
  </div>

</body>
</html>
<script>
function display(input) {
   if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(event) {
         $('#myid').attr('src', event.target.result);
      }
      reader.readAsDataURL(input.files[0]);
   }
}

$("#demo").change(function() {
   display(this);
});
</script>
