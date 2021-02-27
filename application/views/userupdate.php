<!DOCTYPE html>
<html>
<head>
<title>first site</title>
<meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->

</head>
<style>
	*{
	padding:0px;
	margin:0px;
}
	table,td{
		padding: 20px;
		font-size: 20px;
	}
	
h1{
	text-align: center;
	color: red;
	font-size: 50px;
}

	.bi{
	background-image:url("../img/20.jpg");
	background-size:cover;
}
	nav{
    font-size: 20px;
    background-color: rgba(0,0,0,0.8);
    
    text-align: center;
    
  }
	</style>

<body class="bi">

	<nav class="menubar">
    <nav class=" navbar navbar-expand-lg top1">
      <div class="container-fluid">
        	<a class="text-decoration-none text-white" href="#"><h1><h4>AFRS-updateview</h4></h1></a>
      <div>
        <ul class="navbar-nav">
          		<li class="nav-item"> <a class="nav-link" href="<?php echo base_url()?>main/user">Home</a></li>
          		<li class="nav-item"> <a class="nav-link" href="#">Booking</a>
          			<li class="nav-item"> <a class="nav-link" href="#">Profile</a>
          		<li class="nav-item"> <a class="nav-link" href="#">View</a></li>
          		<li class="nav-item"> <a class="nav-link" href="<?php echo base_url()?>main/index">Logout</a></li>
         </ul>
     		</div>
 		</div>
	</nav>
</nav>
	

	
	<form style="margin-left: 450px" method="post" action="<?php echo base_url()?>main/reguserupdate">
		<?php
			
	if(isset($user_data))
	{
		foreach($user_data->result() as $row1)
		{
			?>
		<fieldset style="width:500px;height:700px; background-color:rgba(0,0,0,0.6); margin-top: 50px;">
			<legend style="color: red"><strong></strong></legend>

			
		<table>

			<tr>
				<td>
		First name:</td>
		<td><input type="text" name="fname" value="<?php echo $row1->fname;?>">
		</td>
	</tr>
	

		
		<tr>
				<td>
		Last name:</td>
		<td><input type="text" name="lname" value="<?php echo $row1->lname;?>">
		</td>
	</tr>
	<tr>
				<td>
		Age:</td>
		<td><input type="text" name="age" value="<?php echo $row1->age;?>">
		</td>
	</tr>
	<tr>
		<td>Gender:</td>
					<td><select name="gender"><option><?php echo $row1->gender;?></option>
						<option>Male</option>
						<option>Female</option></select></td></tr>
						<tr><td>Address:</td>
		<td><textarea name="address"><?php echo $row1->address;?></textarea></td></tr>
		
	
	<tr>
		<td>
		Phone number:</td>
		<td><input type="text" name="phno" value="<?php echo $row1->phno;?>"></td>
	</tr>
	
	<tr>
				<td>
		Adhar Number:</td>
		<td><input type="text" name="adno" value="<?php echo $row1->adno;?>">
		</td>
	</tr>
	
		<tr><td>Email:</td>
		<td><input type="Email" name="email" value="<?php echo $row1->email;?>" ></td></tr>
		<tr><td><input type="submit" name="update" value="Update"></td></tr>
		
		


	</table>
	<?php
		}
	}
	?>
	
</fieldset>


	</form>
	<!---Jquery--->
<script
  src="https://code.jquery.com/jquery-3.5.1.js"integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous">
</script>

<!---Popper---->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
</script>

<!---Custom Js-->
<script src="js/script.js">

</script>

</body>
</html>