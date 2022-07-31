<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="sell.css">
    <title>PedalsHub</title>
  </head>

  <body>
    <div class="t1">
      <h1>PedalsHub</h1>
    </div>
    <div class="t2">
      <h3>Your Onestop Shop For Buying & Selling Bicycles</h3>
      <hr>
    </div>
    <div class="menuBar">
      <ul>
      <li><a href="pedalsHub.html">Home</a></li>
        <li><a href="buy.php">Buy</a></li>
        <li><a href="sellindex.php">Sell</a></li>
        <li style="float:right"><a class="active" href="loginindex.php">Login</a></li>
        <li style="float:right">&nbsp</li>
        <li style="float:right"><a class="active" href="loginindex.php">Logout</a></li>
    </ul>
    </div><br>



    <div class="card shadow" style="margin-top: 10px;">
      <div class="card-body">
        <h3 class="card-title">List Your Bike for Sale</h3>
        <form name="frmSignup" method="post" enctype="multipart/form-data" action="https://codd.cs.gsu.edu/~eruiz11/Project3/sell.php">
          
          <div>
            <input style="width:33vw" class="form-control" id="title" name="title" type="card-title" placeholder="Title" required="required">
          </div>
          
          <div>
            <span class="price">
              <input style="width:33vw" class="form-control" type="number" placeholder="&dollar;0.00" min="0" max="10000" step=".01" value="" name="price" id="price" required="required" />
            </span>
          </div>
          
          <div>
            <textarea style="width:33vw" class="form-control" id="description" name="description" type="card-title" placeholder="Description" required="required"></textarea>
          </div>

          <hr />

          <div style="padding: 0px;" class="name-container">
            <h6 class="indent name-container2">
              Upload and Image of Your Bike
            </h6>
            <div style="padding-right: 0.5em;" class="name-container3">
            </div>
          </div>
          
          <div>
            <input style="width:33vw" class="form-control" type="file" id="img" name="img" >
          </div>

          <div style="margin-left: 8.75vw">
            <button style="width:16.5vw;" class="form-control btn btn-primary" type="submit" id="submit" name="submit" value="submit">Submit</button>
          </div>
        
        </form>
      </div>
    </div>
  </body>

</html>
