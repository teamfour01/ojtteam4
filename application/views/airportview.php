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
            <link rel="stylesheet" href="css/style.css">
<style>
	nav{
    font-size: 20px;
    background-color: rgba(0,0,0,0.8);
    
    text-align: center;
    
  }
	/*table,td{
		padding: 20px;
		font-size: 20px;
		border: 1px solid red;
		border-collapse:collapse;
	
	}*/
	*{
	padding:0px;
	margin:0px;
}
	.bi{
	background-image:url("../img/42.jpg");
	background-size:cover;
}

h1{
	text-align: center;
	color: red;
	font-size: 50px;
}

	</style>
</head>
<body class="bi">
	<nav class="menubar">
    <nav class=" navbar navbar-expand-lg top1">
      <div class="container-fluid">
        	<a class="text-decoration-none text-white" href="#"><h1><h4>AFRS-airportview</h4></h1></a>
      <div>
        <ul class="navbar-nav">
          		<li class="nav-item"> <a class="nav-link" href="<?php echo base_url()?>main/admin">Home</a></li>
          		<li class="nav-item"> <a class="nav-link" href="#">Add </a></li>
          		<li class="nav-item"> <a class="nav-link" href="#">View</a></li>
          		<li class="nav-item"> <a class="nav-link" href="<?php echo base_url()?>main/index">Logout</a></li>
         </ul>
     		</div>
 		</div>
	</nav>
</nav>

<h3 class="bg-primary text-white text-center">AIRPORT VIEW</h3>
	<form method="post" action="">
	<table class="table table-striped table-bordered table-hover table-dark">
		<tr>
			<td>Airport name</td>
			<td>Country</td>
			<td>State</td>
			<td>Contact</td>
			<td>Location</td>
			<td>Action</td>
			<td>Action</td>
			</tr>
			<?php
			if($n->num_rows()>0)
			{
				foreach($n->result() as $row)
				{
					?>
					<tr>
						<td><?php echo $row->aname;?></td>
						<td><?php echo $row->cntry;?></td>
						<td><?php echo $row->state;?></td>
						<td><?php echo $row->contact;?></td>
						<td><?php echo $row->loc;?></td>
						<td><a href="<?php echo base_url()?>main/deleteairport/<?php echo $row->id;?>">Delete</a></td>
						<td><a href="<?php echo base_url()?>main/airportupdateview/<?php echo $row->id;?>">Update</a></td>
					</tr>
						
						
						
					<?php
				}
			}
			
				?>
				


	</table>
	
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

</body>
</html>