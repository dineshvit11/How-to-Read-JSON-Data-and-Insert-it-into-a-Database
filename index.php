<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1>JSON</h1>
  <p>how to add or insert record in json file</p> 
</div>
  
<div class="container">
  <div class="row">
  
     <div class="col-md-6">
            <form method="POST" action="insert.php">
                <div class="form-group">
                    <label>Firstname</label>
                    <input type="text" class="form-control" name="firstname" required="required"/>
                </div>
                <div class="form-group">
                    <label>Lastname</label>
                    <input type="text" class="form-control" name="lastname" required="required"/>
                </div>
                <div class="form-group">
                    <label>Phone No</label>
                    <input type="text" class="form-control" name="phoneno" required="required"/>
                </div>
				 <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" required="required"/>
                </div>
				
				 <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" required="required"/>
                </div>
				
				<div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" required="required"/>
                </div>
                <center><button class="btn btn-primary" name="insert">Insert</button></center>
            </form>
        </div>	
  
  
    <div class="col-sm-6">
    
   <?php 
   $json = file_get_contents('members.json');
   $arr = json_decode($json);
   ?>   
 <table class="table table-striped">
    <thead>
      <tr>
	   <th>Sr.No</th>
        <th>Firstname</th>
        <th>Lastname</th>
		<th>Phone No</th>
        <th>Email</th>		
      </tr>
    </thead>
    <tbody>
	<?php  ?>
	<?php $i=1; foreach($arr as $item) { ?>   
        <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $item->firstname; ?></td>
		<td><?php echo $item->lastname; ?></td>
		<td><?php echo $item->phoneno; ?></td>
        <td><?php echo $item->email; ?></td>
	
        </tr>
     <?php  $i++; } ?>
    </tbody>
  </table>
        
        
    
    </div>
   
  </div>
</div>


</body>
</html>