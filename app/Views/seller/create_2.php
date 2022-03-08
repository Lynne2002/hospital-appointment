<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <link rel= "stylesheet" href="/assets/css/seller.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <title>Application form</title>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="/assets/js/jquery-3.6.0.min.js"></script>
       <script src="/assets/js/popper.min.js"></script>
       <script src="/assets/bootstrap.min.js"></script>
       <script src="scripts.js"></script>
     
       <style>
           .column {
    float: left;
    width: 33.33%;
    padding: 5px;
  }
.row::after {
    content: "";
    clear: both;
    display: table;
  }
  @media screen and (max-width: 500px) {
  .column {
    width: 100%;
  }
  .segment_header {
    width: auto;
    margin: 1px;
    color: #FFFFFF;
    background: #2193b0; 
    background: -webkit-linear-gradient(to right, #6dd5ed, #2193b0); 
    background: linear-gradient(to right, #6dd5ed, #2193b0); 
    background-size: cover;
    background-repeat: repeat;
    background-position: 50% 50%;
    border-radius: 0;
}
.form_table a {
    background: #2193b0;  
    background: -webkit-linear-gradient(to right, #6dd5ed, #2193b0); 
    background: linear-gradient(to right, #6dd5ed, #2193b0); 
    
}
  }
  @import url('https://fonts.googleapis.com/css?family=Muli&display=swap');  
 :root {  
  --line-border-fill: #3498db;  
  --line-border-empty: #e0e0e0;  
 }  
 * {  
  box-sizing: border-box;  
 }  
 
 
.container {  
  text-align: center;  
 }  
 .progress-container {  
  display: flex;  
  justify-content: space-between;  
  position: relative;  
  margin-bottom: 20px;  
  max-width: 100%;  
  width: 350px;  
 }  
 .progress-container::before {  
  content: '';  
  background-color: var(--line-border-empty);  
  position: absolute;  
  top: 50%;  
  left: 0;  
  transform: translateY(-50%);  
  height: 4px;  
  width: 100%;  
  z-index: -1;  
 }  
 .progress {  
  background-color: var(--line-border-fill);  
  position: absolute;  
  top: 50%;  
  left: 0;  
  transform: translateY(-50%);  
  height: 4px;  
  width: 0%;  
  z-index: -1;  
  transition: 0.4s ease;  
 }  
 .circle {  
  background-color: #fff;  
  color: #999;  
  border-radius: 50%;  
  height: 30px;  
  width: 30px;  
  display: flex;  
  align-items: center;  
  justify-content: center;  
  border: 3px solid var(--line-border-empty);  
  transition: 0.4s ease;  
 }  
 .circle.active {  
  border-color: var(--line-border-fill);  
 }  
  
 .btn:active {  
  transform: scale(0.98);  
 }  
 .btn:focus {  
  outline: 0;  
 }  
 .btn:disabled {  
  background-color: var(--line-border-empty);  
  cursor: not-allowed;  
 }
#profileDisplay{
    display:block;
    width:60%;
    margin: 10px auto;
    border-radius:50%
}

 

::selection{
  color: #fff;
  background: #6990F2;
}
.wrapper{
  width: 430px;
  background: #fff;
  border-radius: 5px;
  padding: 30px;
  box-shadow: 7px 7px 12px rgba(0,0,0,0.05);
}
.wrapper header{
  color: #6990F2;
  font-size: 27px;
  font-weight: 600;
  text-align: center;
}
.wrapper form{
  height: 167px;
  display: flex;
  cursor: pointer;
  margin: 30px 0;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  border-radius: 5px;
  border: 2px dashed #6990F2;
}
form :where(i, p){
  color: #6990F2;
}
form i{
  font-size: 50px;
}
form p{
  margin-top: 15px;
  font-size: 16px;
}
section .row{
  margin-bottom: 10px;
  background: #E9F0FF;
  list-style: none;
  padding: 15px 20px;
  border-radius: 5px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}
section .row i{
  color: #6990F2;
  font-size: 30px;
}
section .details span{
  font-size: 14px;
}
.progress-area .row .content{
  width: 100%;
  margin-left: 15px;
}
.progress-area .details{
  display: flex;
  align-items: center;
  margin-bottom: 7px;
  justify-content: space-between;
}
.progress-area .content .progress-bar{
  height: 6px;
  width: 100%;
  margin-bottom: 4px;
  background: #fff;
  border-radius: 30px;
}
.content .progress-bar .progress{
  height: 100%;
  width: 0%;
  background: #6990F2;
  border-radius: inherit;
}
.uploaded-area{
  max-height: 232px;
  overflow-y: scroll;
}
.uploaded-area.onprogress{
  max-height: 150px;
}
.uploaded-area::-webkit-scrollbar{
  width: 0px;
}
.uploaded-area .row .content{
  display: flex;
  align-items: center;
}
.uploaded-area .row .details{
  display: flex;
  margin-left: 15px;
  flex-direction: column;
}
.uploaded-area .row .details .size{
  color: #404040;
  font-size: 11px;
}
.uploaded-area i.fa-check{
  font-size: 16px;
}
p{
    cursor:pointer;
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
.form-input img {
  width:100%;
  display:none;
  margin-bottom:30px;
}
.form-input input {
  display:none;
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
</style>
</head>
<body style="background:transparent">
<div class="q full_width">
                                  <a class="item_anchor"></a>
                                       <div class="segment_header" style="
                                             width: 1300px;
                                             text-align:Left;
                                             background-repeat:repeat;
                                             background-color:transparent;
                                             background-image:url('/assets/Images/application.jpg');
                                             background-size: cover;
                                             background-position: 50% 50%;
                                            ">
                                     <h1 style="
                                     font-size:30px;
                                     font-family:'Cinzel',serif;
                                     padding:90px 1em 10px ;
                                     background-color: rgba(0, 0, 0, 0.08)">
                                     REGISTER YOUR PROPERTY WITH US
                                </h1></span></div>
<br><br>
   
<form method="post" id="chef" action="<?=base_url('files-store')?>" enctype="multipart/form-data" >
           
 
                        <div class="form_table" >
                            <div class="clear">
                          
                             
                             
                                <a class="item_anchor" name="ItemAnchor1"></a>
                                     <div class="segment_header" 
                                                 style="
                                                 width:auto;
                                                 text-align:Left;">
                                         <h1 style="
                                                 font-size:18px;
                                                 padding:20px 1em ;">
                                       Please upload the official property files below. 
                                        </h1>
                                    </div>
                             </div>


      <div style=" 
      border: 2px dashed #fff;
      text-align: center;
      width:500px;
 height: 500px;;
  background: lightblue;
      " class="q input">
        <input class="file-input" type="file" name="property_files" hidden>
      <i class="fas fa-cloud-upload-alt"></i>
      <p style="
    color: black;
    
    
    ">Browse Files to Upload</p>
    
    <section class="progress-area"></section>
    <section class="uploaded-area"></section>
  </div>
</div>
<input type="hidden" name="first_name" value="<?= session()->get('first_name')?>" >
<input type="hidden" name="last_name" value="<?= session()->get('last_name')?>" >
<input type="hidden" name="user_id" value="<?= session()->get('user_id')?>" >


                         
              

     
 
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

                                     
                                     <div class="container">  
    <div class="progress-container">  
     <div class="progress" id="progress"></div>  
     <div class="circle">1</div>  
     <div class="circle active">2</div>  
     <div class="circle">3</div>  

    </div>  
    <button class="btn" id="prev" disabled>Prev</button>  
    <button class="btn btn-primary" id="next">Next</button>  
   </div>      
        
               


</form>



    
              </body>
<script>
    const form = document.querySelector("form"),
fileInput = document.querySelector(".file-input"),
progressArea = document.querySelector(".progress-area"),
uploadedArea = document.querySelector(".uploaded-area");
form.addEventListener("click", () =>{
  fileInput.click();
});
fileInput.onchange = ({target})=>{
  let file = target.files[0];
  if(file){
    let fileName = file.name;
    if(fileName.length >= 12){
      let splitName = fileName.split('.');
      fileName = splitName[0].substring(0, 13) + "... ." + splitName[1];
    }
    uploadFile(fileName);
  }
}
function uploadFile(name){
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "php/upload.php");
  xhr.upload.addEventListener("progress", ({loaded, total}) =>{
    let fileLoaded = Math.floor((loaded / total) * 100);
    let fileTotal = Math.floor(total / 1000);
    let fileSize;
    (fileTotal < 1024) ? fileSize = fileTotal + " KB" : fileSize = (loaded / (1024*1024)).toFixed(2) + " MB";
    let progressHTML = `<li class="row">
                          <i class="fas fa-file-alt"></i>
                          <div class="content">
                            <div class="details">
                              <span class="name">${name} • Uploading</span>
                              <span class="percent">${fileLoaded}%</span>
                            </div>
                            <div class="progress-bar">
                              <div class="progress" style="width: ${fileLoaded}%"></div>
                            </div>
                          </div>
                        </li>`;
    uploadedArea.classList.add("onprogress");
    progressArea.innerHTML = progressHTML;
    if(loaded == total){
      progressArea.innerHTML = "";
      let uploadedHTML = `<li class="row">
                            <div class="content upload">
                              <i class="fas fa-file-alt"></i>
                              <div class="details">
                                <span class="name">${name} • Uploaded</span>
                                <span class="size">${fileSize}</span>
                              </div>
                            </div>
                            <i class="fas fa-check"></i>
                          </li>`;
      uploadedArea.classList.remove("onprogress");
      uploadedArea.insertAdjacentHTML("afterbegin", uploadedHTML);
    }
  });
  let data = new FormData(form);
  xhr.send(data);
}
    </script>