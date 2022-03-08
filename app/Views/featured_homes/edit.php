<!DOCTYPE html>
<html>
<head>

	<title>Edit Product</title>
	<link rel="stylesheet" type="text/css" href="/assets/css/Registration.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
        <script src="/assets/js/jquery-3.6.0.min.js"></script>
       <script src="/assets/js/popper.min.js"></script>
       <script src="/assets/bootstrap.min.js"></script>
    <style>
      .profile-details{
		float:right;
  display: flex;
  align-items: center;
  background: #F5F6FA;
  border: 2px solid #EFEEF1;
  border-radius: 6px;
  height: 50px;
  min-width: 190px;
  padding: 0 15px 0 2px;
}
.profile-details img{
  height: 40px;
  width: 40px;
  border-radius: 6px;
  object-fit: cover;
}
.profile-details .admin_name{
  font-size: 15px;
  font-weight: 500;
  color: #333;
  margin: 0 10px;
  white-space: nowrap;
}
.profile-details i{
  font-size: 25px;
  color: #333;
}
        .error{
            color:red;
            font-style: italic;
        }
       
    </style>
  
		      
</head>
<body background="/assets/Images/background.jpg" >
<div class="profile-details">
        <img src="/assets/Images/avatar.png" alt="">
        <span class="admin_name"><?= session()->get('first_name') ?>&nbsp;<?= session()->get('last_name') ?></span>
       
        <a href="<?=base_url('Users/logout')?>" class="btn btn-primary btn-sm float-end" style="right:0;">Logout</a>
      </div>
    <div class="container mt-4">
        <div class="row justify-content-center">
        
           <div class="col-md-7">
                   <div class="card">
                      <div class="card-header">
                           <h5>Edit and Update Homes</h5>
                                <a href="<?= base_url('featured_homes')?>" class="btn btn-danger btn-sm float-end">BACK</a>
                              </h5>
                       </div>
                       <div class="card-body">
                       <form action="<?=base_url('homes/update/'.$homes['home_id'])?>" name="ajax_form" id="ajax_form" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                               
                               
                                <div class="form-group">
                                         <label for="formGroupExampleInput">Home Image</label>
                                           <input type="file" name="home_image"  class="form-control" id="file"/>
                                 </div> 
                                 <div class="col-md-5">
                                        <img src="<?=base_url('../uploads/'.$homes['home_image'])?>" class="w-100" alt="home_Image">
                                   </div>
                                 <div class="form-group">
                                           <label for="comment">Home Location:</label>
                                          <input type="text" class="form-control" name="location" rows="5" id="description"value="<?=$homes['location']?>">
                                </div>
                                 
                                   <div class="form-group">
                                        <label for="pwd">	Home Price:</label>
                                     <input type="text" name="home_price" value="<?=$homes['home_price']?>" class="form-control" id="home_price:">
                                   </div>
                                   <div class="form-group">
                                        <label for="pwd">No of bedrooms:</label>
                                     <input type="text" name="bedrooms" value="<?=$homes['bedrooms']?>" class="form-control" id="bedrooms">
                                   </div>
                                   <div class="form-group">
                                        <label for="pwd">No of bathrooms:</label>
                                     <input type="text" name="bathrooms" value="<?=$homes['bathrooms']?>" class="form-control" id="bathrooms">
                                   </div>
                                   <div class="form-group">
                                        <label for="pwd">Size:</label>
                                     <input type="text" name="size" value="<?=$homes['size']?>" class="form-control" id="size">
                                   </div>
                                   <div class="form-group">
                                        <label for="pwd">Address:</label>
                                     <input type="text" name="address" value="<?=$homes['address']?>" class="form-control" id="address">
                                   </div>
                                   
                                   
                                  
                                  

                                         <div class="form-group">
                                                 <button type="submit" id="send_form" class="btn btn-primary px-4 float-end">UPDATE</button>
                                        </div>


    </div>
                  </div>
                 
        
    </div>
    </div>
    </body>
    </html>