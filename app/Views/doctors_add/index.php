<!DOCTYPE html>
<html>
<head>

	<title>department view</title>
	<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
        <script src="/assets/js/jquery-3.6.0.min.js"></script>
       <script src="/assets/js/popper.min.js"></script>
       <script src="/assets/bootstrap.min.js"></script>
       <link rel="stylesheet" href="/assets/css/dashboard.css">
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
<body>
<div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-h-plus-plus'></i>
      <span class="logo_name">HOPITAL</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="admin" >
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
       
        <li>
          <a href="hospitals">
            <i class='bx bx-box' ></i>
            <span class="links_name">Hospitals</span>
          </a>
        </li>
        <li>
          <a href="departments">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Departments</span>
          </a>
        </li>
        <li>
          <a href="#" class="active">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Doctors</span>
          </a>
        </li>
       
        <li>
          <a href="#">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Emails</span>
          </a>
        </li>
       
        <li>
          <a href="#">
            <i class='bx bx-message' ></i>
            <span class="links_name">Messages</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-heart' ></i>
            <span class="links_name">Home Page</span>
          </a>
        </li>
       
        <li class="log_out">
          <a href="#">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    

    <div style="margin-left:20px;" class="container mt-4">
        <div class="row">
           <div class="col-md-12">
         
      
               <?php
               if(session()->getFlashdata('status')){
                   echo "<h5>".session()->getFlashdata('status')."</h5>";
               }
               ?>
                   <div  style="width:100%;" class="card">
                      <div class="card-header">
                      <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Doctors</span>
      </div>
      <div class="search-box">
      <input onkeyup="myFunction()"  id ="myInput"type="text" placeholder="Search doctor">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <img src="/assets/Images/avatar.png" alt="">
        <span class="admin_name"><?= session()->get('first_name') ?>&nbsp;<?= session()->get('last_name') ?></span>
       
        <a href="<?=base_url('Users/logout')?>" class="btn btn-primary btn-sm float-end" style="right:0;">Logout</a>
      </div>
    </nav>
              </br></br></br></br>
                         
                           <a href="<?= base_url('departments')?>" class="btn btn-danger btn-sm float-end">DEPARTMENTS</a>
                              </h5>
              
                      
                              
                         
                       </div>
                       <div class="card-body">
                     
           
                       <table  id="myTable"class="table table-bordered">
                     <thead>
                          <tr>
                               <th>First name</th>
                               <th>Last name</th>
                               <th>Email</th>
                               <th>Avatar</th>
                               
                               <th>Action</th>
                              
            </tr>

            </thead>
            <tbody>
                <?php foreach($doctors as $item):?>
            <tr>
               
                <td><?=$item['first_name']?></td>
                <td><?=$item['last_name']?></td>
                <td><?=$item['email']?></td>
                <td>
                  
                   <img src="<?= "../uploads/".$item['doc_image']; ?>" height="100px" width="100px"alt="Image">
                </td>
                
            
               
                <td>
                    <a href="<?= base_url('doctors/edit/'.$item['doctor_id'])?>"class="btn btn-success btn-sm">Edit</a></br>
                    <a href="<?= base_url('doctors/delete/'.$item['doctor_id'])?>"class="btn btn-danger btn-sm">Delete</a>
                    
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
                </section>
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
