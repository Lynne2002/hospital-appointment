<!DOCTYPE html>
<html>
<head>

	<title>Create Agents</title>
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
        .form-input label {
  display:block;
  width:45%;
  height:45px;
  margin-left: 25%;
  line-height:50px;
  text-align:center;
  background:#1172c2;
  color:#fff;
  font-size:15px;
  font-family:"Open Sans",sans-serif;
  text-transform:Uppercase;
  font-weight:600;
  border-radius:5px;
  cursor:pointer;
}
.form-input img {
  width:50%;
  display:none;
  margin-bottom:30px;
}
.center {
  height:100%;
  display:flex;
  align-items:center;
  justify-content:center;

}
.form-input {
  width:350px;
  padding:20px;
  background:#fff;
  box-shadow: -3px -3px 7px rgba(94, 104, 121, 0.377),
              3px 3px 7px rgba(94, 104, 121, 0.377);
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
                           <h5>Add Agents</h5>
                                <a href="<?= base_url('agents')?>" class="btn btn-danger btn-sm float-end">BACK</a>
                              </h5>
                       </div>
                       <div class="card-body">
                       <form action="<?=base_url('agents-store')?>" name="ajax_form" id="ajax_form" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                                
                            
                            
                               
                                 <div class="form-group">
                                       <label for="usr">First Name:</label>
                                            <input type="text" name="first_name" class="form-control" id="name">
                               </div>
                               <div class="form-group">
                                       <label for="usr">Last Name:</label>
                                            <input type="text" name="last_name" class="form-control" id="name">
                               </div>

                                   <div class="form-group">
                                        <label for="pwd">Phone number:</label>
                                     <input type="text" name="phone" class="form-control" id="phone">
                                   </div>
                                                                     <div class="form-group">
                                        <label for="pwd">Email:</label>
                                     <input type="email" name="email" class="form-control" id="email">
                                   </div>
</br></br>
 
                                   <div class="center">
                                  
                  <div class="preview">
                   <img style="width:70%;" id="file-ip-1-preview">
                   <div class="form-group">
                   <label for="file-ip-1">Profile Image:</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 <input type="file" name="agent_image" id="file-ip-1" accept="image/*" onchange="showPreview(event);">
                 
                 </div>
                    
                  </div>
</div>
                                   <div class="form-group">
                                        <label for="pwd">LinkedIn Profile:</label>
                                     <input type="url" name="LinkedIn" class="form-control" id="LinkedIn">
                                   </div>
                                   <div class="form-group">
                                        <label for="facebook">Facebook Profile:</label>
                                     <input type="url" name="facebook" class="form-control" id="facebook">
                                   </div>
                                   
                                   <div class="form-group">
                                        <label for="twitter">Twitter Profile:</label>
                                     <input type="url" name="twitter" class="form-control" id="twitter">
                                   </div>
                                   <div class="form-group">
                                        <label for="instagram">Instagram Profile:</label>
                                      
                                        <input type="url" name="instagram" class="form-control" id="instagram">
                    </select>
                                   </div>
                                  
                                   
                                 
                                    <input type="hidden" name="added_by" id="added_by"  value="<?= session()->get('id') ?>">
                                         <div class="form-group">
                                                 <button type="submit" id="send_form" class="btn btn-primary px-4 float-end">SAVE</button>
                                        </div>


    </div>
                  </div>
             </div>
        
    </div>
    </div>
    </body>
    </html>
    <script>
    
   function showPreview(event){
  if(event.target.files.length > 0){
    var src = URL.createObjectURL(event.target.files[0]);
    var preview = document.getElementById("file-ip-1-preview");
    preview.src = src;
    preview.style.display = "block";
  }
}
   </script>