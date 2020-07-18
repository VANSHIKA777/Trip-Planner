<html>

<head>
    <title>Cabs</title>
    <link rel="stylesheet" href="Plugins/font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="Plugins/materialize/css/materialize.css">
    <link rel="stylesheet" href="css/view.css">
</head>


<body>
    <ul id="slide-out" class="sidenav sidenav-fixed">
    <li><div class="user-view">
      <div class="background">
        <img src="images/office.jpg">
      </div>
      <a href="#user"><img class="circle" src="images/yuna.jpg"></a>
      <a href="#name"><span class="white-text name">John Doe</span></a>
      <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
    </div></li>
    
<!--
    <li><a href="#!">Add Manager</a></li>
    <li><a href="#!">Add Employee</a></li>
--><li><a href="admin.html">Home</a></li>
    <li><a href="#!">My Account</a></li>
      <li><a href="add_hotels.html">Add Hotels</a></li>
    <li><a href="hotels.html">About Hotels</a></li>
      <li><a href="add_cabs.html">Add Cabs</a></li>
      <li><a href="cabs.html">About Cabs</a></li>
      <li><a href="bookings.html">Recent bookings</a></li>
    
    
    <li><div class="divider"></div></li>
    <li><a class="waves-effect" href="login.html">Logout</a></li>
  </ul>

    <div class="container" style="margin-left:25%">
        <div class="row">
            <div class="col s12">
                <div id="main" class="card">
                    <div class="card-content">
                        <h6><span class="card-title" style="color:blue;font-family: serif;
  font-size: 300%;">CABS....</span></h6>
						<table style="margin-top:4%">
							<tr style="border:1px solid black;">
								<td style="width: 200px;text-align: left;border:1px solid black;"><h3 style="font-size:35px;">CAR NAME</h3></td>
								<td style="width: 200px;text-align: left;border:1px solid black;"><h3 style="font-size:30px;">DRIVER NAME</h3></td>
								<td style="width: 200px;text-align: left;border:1px solid black;"><h3 style="font-size:35px;">PHONE NO</h3></td>
								<td style="width: 200px;text-align: left;border:1px solid black;"><h3 style="font-size:35px;">LIC NO</h3></td>
							</tr>
						</table>
                        <table class="highlight">
						
							<?php
								$conn = mysqli_connect('localhost','root');
								mysqli_select_db($conn, 'store-locator');
								$query = "SELECT id,name,address FROM markers";

								$queryfire = mysqli_query($conn,$query);

								$num = mysqli_num_rows($queryfire);
								if($num>0){
									while ($product = mysqli_fetch_array($queryfire)) {
										?>
										<table class="table">
											<tr style="border:1px solid black;">
												<td style="width: 200px;text-align:left;border:1px solid black;"><h3 style="font-size:35px;"><?php echo $product['id']; ?></h3></td>
												<td style="width: 200px;text-align:left;border:1px solid black;"><h3 style="font-size:35px;"><?php echo $product['name']; ?></h3></td>
												<td style="width: 200px;text-align:left;border:1px solid black;"><h3 style="font-size:35px;"><?php echo $product['address']; ?></h3></td>
											</tr>
										</table>


							
									}
								}
							
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>