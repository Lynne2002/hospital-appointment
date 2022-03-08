<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>" enctype="multipart/form-data">
              <div class="form-group">
                  <label>Choose Image</label>
                  <input type="file" name="Image" id="Image" value="" class="form-control">
              </div>
              <div class="form-group">
                  <label>City</label>
                  <input type="text" name="City" id="Big" value="" class="form-control">
              </div>
              <div class="form-group">
                  <label>Town</label>
                  <input type="text" name="Town" id="Small" value="" class="form-control">
              </div>
              <button id="submit" name="submit" type="Submit" class="btn btn-primary">Upload Image</button>
          </form>
    
</body>
</html>