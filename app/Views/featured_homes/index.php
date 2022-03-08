<!DOCTYPE html>
<html>
<head>

	<title>Homes view</title>
	<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
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
        body{
         
	background-size: cover;
	background-position: center;
	font-family: 'Raleway', cursive;
        }
        .search-box{
  position: relative;
  height: 50px;
  max-width: 550px;
  width: 100%;
  margin: 0 20px;
}
.search-box input{
  height: 100%;
  width: 100%;
  outline: none;
  background: #F5F6FA;
  border: 2px solid #EFEEF1;
  border-radius: 6px;
  font-size: 18px;
  padding: 0 15px;
}
.search-box .bx-search{
  position: absolute;
  height: 40px;
  width: 40px;
  background: #2697FF;
  right: 5px;
  top: 50%;
  transform: translateY(-50%);
  border-radius: 4px;
  line-height: 40px;
  text-align: center;
  color: #fff;
  font-size: 22px;
  transition: all 0.4 ease;
}
      
    </style>
  
		      
</head>
<body background="/assets/Images/background.jpg">
<div class="profile-details">
        <img src="/assets/Images/avatar.png" alt="">
        <span class="admin_name"><?= session()->get('first_name') ?>&nbsp;<?= session()->get('last_name') ?></span>
       
        <a href="<?=base_url('Users/logout')?>" class="btn btn-primary btn-sm float-end" style="right:0;">Logout</a>
      </div>
    <div class="container mt-4">
        <div class="row">
           <div class="col-md-12">
           <div class="search-box">
        <input onkeyup="myFunction()"  id ="myInput"type="text" placeholder="Search sub-category name">
        <i class='bx bx-search' ></i>
      </div>
      <br> <br>
               <?php
               if(session()->getFlashdata('status')){
                   echo "<h5>".session()->getFlashdata('status')."</h5>";
               }
               ?>
                   <div class="card">
                      <div class="card-header">
                           <h5>Featured Homes</h5>
                                <a href="<?= base_url('homes-add')?>" class="btn btn-primary btn-sm float-end">ADD HOME</a>
                              </h5>
                       </div>
                       <div class="card-body">
                       <table  id="myTable"class="table table-bordered">
                     <thead>
                          <tr>
                               <th>House location</th>
                               <th>House price</th>
                               <th>House Image</th>
                               <th>Address</th>
                               <th>Size</th>
                               <th>No. of bedrooms</th>
                               <th>No. of bathrooms</th>
                               <th>Action</th>
            </tr>

            </thead>
            <tbody>
                <?php foreach($homes as $item):?>
            <tr>
               
                <td><?=$item['location']?></td>
                <td><?=$item['home_price']?></td>
               <td>
                  
                   <img src="<?= "../uploads/".$item['home_image']; ?>" height="100px" width="100px"alt="Image">
                </td>
                <td><?=$item['address']?></td>
                <td><?=$item['size']?></td>
                <td><?=$item['bedrooms']?></td>
                <td><?=$item['bathrooms']?></td>
               
               
                <td>
                    <a href="<?= base_url('homes/edit/'.$item['home_id'])?>"class="btn btn-success btn-sm">Edit</a></br>
                    <a href="<?= base_url('homes/delete/'.$item['home_id'])?>"class="btn btn-danger btn-sm">Delete</a>
                    
                </td>
            </tr>
            <?php endforeach;?>
            </tbody>
            </table>
            </div>
                  </div>
             </div>
         </div>
    </div>
    </body>
    </html>
    <script>
function myFunction() {
 
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>