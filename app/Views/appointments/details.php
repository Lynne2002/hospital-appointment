<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="card-body">
                       <table  id="myTable"class="table table-bordered">
                     <thead>
                          <tr>
                               <th>First name</th>
                               <th>Last name</th>
                               <th>Email</th>
                               <th>date_scheduled</th>
                               
                               <th>status</th>
                              
            </tr>

            </thead>
            <tbody>
                <?php foreach($appointments as $item):?>
            <tr>
               
                <td><?=$item['first_name']?></td>
                <td><?=$item['last_name']?></td>
                <td><?=$item['email']?></td>
                <td><?=$item['date_scheduled']?></td>
               
                
            
               
               
                
            </tr>
            <?php endforeach;?>
            </tbody>
            </table>
            </div>
            <div class="modal-footer border-0">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>

</body>
</html>






