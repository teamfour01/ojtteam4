<html>
<head>

<title> ADMIN  </title>
<meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->

</head>
<style>
  nav{
    font-size: 20px;
    background-color: rgba(0,0,0,0.8);
    
    text-align: center;
    
  }
  body{
  background-image:url("../img/14.jpg");
background-size:cover;
}
*
{
padding:0px;
margin:0px;
}
table,td{
padding: 20px;
font-size: 20px;
}
h1{
text-align: center;
color: rgba(0,0,0,0.7);
font-size: 50px;
}

</style>
</head>
<body>

<body class="bi ">
  <nav class="menubar">
    <nav class=" navbar navbar-expand-lg top1">
      <div class="container-fluid">
        	<a class="text-decoration-none text-white" href="#"><h1><h4>AFRS-Details</h4></h1></a>
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

<h1>AIRPORT DETAILS</h1>

<form style="margin-left: 430px" method="post" action="<?php echo base_url()?>main/airportinsert">
	<fieldset style="width:500px;height:500px;">
		<legend><strong></strong></legend>
			<table>
				<tr>
					<td>
						Airport name:</td>
							<td><input type="text" name="aname" required="required" maxlength="35" pattern="[a-zA-Z]+"></td>
						</tr>
					<tr>
				<td>
					Country:</td>
						<td><input list="Country" name="cntry" required="required">
							<datalist id="Country">
									<option value="India">
									<option value="America">
									<option value="China">
									<option value="Brazil">
							</datalist></td>
						</tr>
							<tr><td>State:</td>
									<td><input type="text" name="state" required="required" maxlength="25" pattern="[a-zA-Z]+"></td></tr>
							<tr><td>Contact number:</td>
									<td><input type="text" name="contact" required="required" pattern="[7-9]{1}[0-9]{9}"></td></tr>
							<tr><td>Location:</td>
									<td><input type="text" name="loc" required="required" maxlength="25" pattern="[a-zA-Z]+"></td></tr>
							<tr><td><input type="submit" name="sub" value="Submit"></td></tr>



			</table>
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