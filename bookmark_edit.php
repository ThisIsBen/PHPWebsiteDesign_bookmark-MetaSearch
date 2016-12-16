    
	
	
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script>
$(document).ready(function() {
    $("#reset").click(function() {
        $("input").val("");
    });
});


</script>
  
  </head>
<body>
<?php
	session_start();

echo '<div class="container">
  <h2>Edit Profile</h2>
  <form class="form-horizontal" role="form" action="http://localhost:8080/HW3bookmark/edit.php" method="post">
  <div class="form-group">
      <label for="inputPassword" class="col-sm-2 control-label">Your current name:</label>
      <div class="col-xs-2">
        <input class="form-control" id="disabledInput" type="text" placeholder='.$_SESSION['login_username'].' disabled>
      </div>
    </div>
  <div class="form-group">
      <label for="inputPassword" class="col-sm-2 control-label">Your current password:</label>
      <div class="col-xs-2">
        <input class="form-control" id="disabledInput" type="text" placeholder='.$_SESSION['login_password'].' disabled>
      </div>
    </div>
    
    
    <div class="form-group">
		<label class="control-label col-sm-2" for="usr">New Name:</label>
		<div class="col-xs-2">  
			<input type="text" class="form-control" id="usr" name="newusername" placeholder="Enter new name">
		</div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="pwd">New Password:</label>
      <div class="col-xs-3">          
        <input type="password" class="form-control" id="pwd" name="newpassword" placeholder="Enter new password">
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" >New Email:</label>
      <div class="col-xs-3">          
        <input type="text" class="form-control" id="email" name="newemail" placeholder="Enter new email">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success">Update</button>
		<button type="button" class="btn btn-danger" id="reset" data-dismiss="modal">Cancel</button>
       
	  </div>
    </div>
  </form>
</div>

</body>
</html>'
?>
