
<?php include 'php/update.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>Projekat</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<form action="php/update.php" 
		      method="post">
            
		   <h4 class="display-4 text-center">Izmeni</h4><hr><br>
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>
		   <div class="form-group">
		     <label for="name">Name</label>
		     <input type="name" 
		           class="form-control" 
		           id="name" 
		           name="name" 
		           value="<?=$row['name']?>">
		   </div>

		   <div class="form-group">
		     <label for="username">Username</label>
		     <input type="text" 
		           class="form-control" 
		           id="username" 
		           name="username" 
		           value="<?=$row['username']?>">
		   </div>
           <div class="form-group">
		     <label for="password">Password</label>
		     <input type="text" 
		           class="form-control" 
		           id="password" 
		           name="password" 
		           value="<?=$row['password']?>">
		   </div>
           <input type="text"
                name="id"
                value="<?=$row['id']?>"  
                hidden>

		   <button type="submit" 
		          class="btn btn-primary"
		          name="update">Sacuvaj izmene</button>
	    </form>
	</div>
</body>
</html>