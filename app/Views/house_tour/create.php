<!DOCTYPE html>
<html>

   
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <style>
        .container{
    background-color: #ffffff;
    width: 60%;
    min-width: 450px;
    position: relative;
    margin:  50px auto;
    padding: 50px 20px;
    border-radius: 7px;
    box-shadow: 0 20px 35px rgba(0,0,0,0.05);
}
input[type="file"]{
    display: none;
}
label{
    display: block;
    position: relative;
    background-color: #025bee;
    color: #ffffff;
    font-size: 18px;
    text-align: center;
    width: 300px;
    padding: 18px 0;
    margin: auto;
    border-radius: 5px;
    cursor: pointer;
}
.container p{
    text-align: center;
    margin: 20px 0 30px 0;
}
#images{
    width: 90%;
    position: relative;
    margin: auto;
    display: flex;
    justify-content: space-evenly;
    gap: 20px;
    flex-wrap: wrap;
}
figure{
    width: 45%;
}
img{
    width: 100%;
}
figcaption{
    text-align: center;
    font-size: 2.4vmin;
    margin-top: 0.5vmin;
}
        </style>
</head>
<body>
<div class="upload-form">
<form action="<?=base_url('houses-store')?>"  method="post"  enctype="multipart/form-data">
<div class="container">
        <input type="file" name="files[]" id="file-input" accept="image/*" onchange="preview()" multiple>
        <label for="file-input">
            <i class="fas fa-upload"></i> &nbsp; Choose A Photo
        </label>
        <p id="num-of-files">No Files Chosen</p>
        <div id="images"></div>
    </div>
	  		
    
    <input type="submit" value="Upload File" name="submit">
    </div>
	</div>
</form>
</div>
</body>
</html>
<script>
    let fileInput = document.getElementById("file-input");
let imageContainer = document.getElementById("images");
let numOfFiles = document.getElementById("num-of-files");

function preview(){
    imageContainer.innerHTML = "";
    numOfFiles.textContent = `${fileInput.files.length} Files Selected`;

    for(i of fileInput.files){
        let reader = new FileReader();
        let figure = document.createElement("figure");
        let figCap = document.createElement("figcaption");
        figCap.innerText = i.name;
        figure.appendChild(figCap);
        reader.onload=()=>{
            let img = document.createElement("img");
            img.setAttribute("src",reader.result);
            figure.insertBefore(img,figCap);
        }
        imageContainer.appendChild(figure);
        reader.readAsDataURL(i);
    }
}
    </script>