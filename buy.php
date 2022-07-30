<?php
include ('dbconfig.php');
$query="select * from SELLBIKEINFO";
$result=mysqli_query($con,$query);
?>
<html lang="en">
<head>
  <title>Pedals Hub</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="buy.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="background-color: #e8e1cc;">
  <div class="t1">
    <h1>PedalsHub</h1>
  </div>
  <div class="t2">
    <h3>Your Onestop Shop For Buying & Selling Bicycles</h3><hr>
  </div>
  <div class="menuBar">
    <ul>
      <li><a href="pedalsHub.html">Home</a></li>
        <li><a href="buy.html">Buy</a></li>
        <li><a href="sell.html">Sell</a></li>
        <li style="float:right"><a class="active" href="login.html">Login</a></li>
        <li style="float:right">&nbsp</li>
        <li style="float:right"><a class="active" href="login.html">Logout</a></li>
    </ul>
  </div><br>
 
<div id="parent">
	<div class="container-fluid">
	<?php
	while($rows=mysqli_fetch_assoc($result))
		{
			?>
    <div class="card" style="display:flex; align-items: center; justifiy-content:center; width:21%; background-color: #333; float:left; padding:50px; margin:10px;">
      <?php echo '<img src="data:image;base64,'.base64_decode($rows['image']).' " alt="Image" >'; ?>
      <div class="card-body" >
        <h4 class="card-title"><?php echo $rows['title']?></h4>
        <p class="card-text" style="justifiy-content:center;">Price: $<?php echo $rows['price']?></p>
        <a href="#" class="btn btn-primary" ><?php echo $rows['description']?></a>
      </div>
    </div>
	  <?php
		}
	?>
  </div>
</div>


</body>
</html>
