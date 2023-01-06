<?php
include_once('junk.php');
$que="SELECT * FROM `customer`";
$result = mysqli_query($db, $que);
$que1="SELECT * FROM `travel_agent`";
$result1 = mysqli_query($db, $que1);
$que2="SELECT * FROM `places`";
$result2 = mysqli_query($db, $que2);
$que3="SELECT * FROM `hotels`";
$result3 = mysqli_query($db, $que3);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/admin.css">
	<title>Admin Page</title>
	<style>
		.container .addp-workspace{
			width: 70vw;
			height: 80vh;
			float: right;
		}
		.container .addp-workspace .insert-pform{
			display: none; 
			width: 30vw;
			height: 50vh;
			margin: 10% 30%;
			text-align: center;
		}
		.container .addp-workspace .insert-pform input{
			margin: 20px 0px;
		}
	</style>
</head>
<body>
	<div class="main">
	    <ul>
	      <ul class="list">
	        <li class="logo"><a href="mainPage.html"><img src="earth-globe.png" alt="Logo" style="width:36px;height:36px"></a></li>
	        <div class="search">
	            <form method="POST" action="info.php">
	              <input type="text" name="search_p" placeholder="Search.." size="50">
	          
	              <input type="image" name="submit_p" src="search_icon.png" alt="Search image" style="width:22;height:22; margin-left: 35px;">
	            </form>
	        </div>
	      </ul>
	      <ul class="list2">
			<li><a href="index.html">Logout</a></li>
	      </ul>
	    </ul>
	</div>
	<div class="container">
		<div class="headder">
			<h1>Admin Page</h1>
		</div>
		<div class="menu-list">
			<a id="a1" href="#" onclick="myFunction(document.getElementById(this.id))">Customers</a>
			<a id="a2" href="#" onclick="myFunction(document.getElementById(this.id))">Travel Agents</a>
			<a id="a3" href="#" onclick="myFunction(document.getElementById(this.id))">Places</a>
			<a id="a4" href="#" onclick="myFunction(document.getElementById(this.id))">Hotels</a>
			<a id="a5" href="#" onclick="myFunction(document.getElementById(this.id))">Add Place Information</a>
			<a id="a6" href="#" onclick="myFunction(document.getElementById(this.id))">Back</a>
		</div>
		<div class="customer-workspace work" id="id1">
			<div class="btn-tag" id="cust-op">
				<button type="button" id="v1" onclick="showDetails(document.getElementById(this.id))">view Customer detailes</button>
				<button type="button" id="b1" onclick="deleteMenu(document.getElementById(this.id))">Delete customer</button>
			</div>
			<div id="tb-container" style="display: none; margin-top: 50px;">
				<table align="center" border="1px" style="width: 700px; line-height: 30px;">
					<tr>
						<th colspan="7"><h2>Customer Details</h2></th>
					</tr>
					<tr>
						<th>Id</th>
						<th>First name</th>
						<th>Password</th>
						<th>Email</th>
						<th>City</th>
						<th>Phone</th>
					</tr>
					<?php
						while($rows = mysqli_fetch_assoc($result))
						{
					?>
					<tr>
						<td><?php echo $rows['id']; ?></td>
						<td><?php echo $rows['fname']; ?></td>
						<td><?php echo $rows['password']; ?></td>
						<td><?php echo $rows['email']; ?></td>
						<td><?php echo $rows['city']; ?></td>
						<td><?php echo $rows['phone']; ?></td>

					</tr>
					<?php
						}
					?>
				</table>
			</div>
			<div class="delete-form" id="del-form">
				<form method="POST" action="admin_op.php">     
					<input type="text" name="id" placeholder="customer ID" required><br>
					<input type="text" name="fname" placeholder="First name" required><br>
					<input type="submit" value="Delete" class="submit" name="de-submit-c">
				</form>
			</div>
		</div>
		<div class="agent-workspace work" id="id2">
			<div class="btn-tag" id="agn-op">
				<button type="button" id="v2" onclick="showDetails(document.getElementById(this.id))">view Agent detailes</button>
				<button type="button" id="i1" onclick="insertMenu(document.getElementById(this.id))">Insert Agent</button>
				<button type="button" id="b2" onclick="deleteMenu(document.getElementById(this.id))">Delete Agent</button>
			</div>
			<div id="agent-container" style="display: none; margin-top: 50px;">
				<table align="center" border="1px" style="width: 700px; line-height: 30px;">
					<tr>
						<th colspan="5"><h2>Agent Details</h2></th>
					</tr>
					<tr>
						<th>Id</th>
						<th>Name</th>
						<th>Email</th>
						<th>Phone</th>
						<th>City</th>
					</tr>
					<?php
						while($rows1 = mysqli_fetch_assoc($result1))
						{
					?>
					<tr>
						<td><?php echo $rows1['aid']; ?></td>
						<td><?php echo $rows1['afname']; ?></td>
						<td><?php echo $rows1['aemail']; ?></td>
						<td><?php echo $rows1['aphone']; ?></td>
						<td><?php echo $rows1['acity']; ?></td>
					</tr>
					<?php
						}
					?>
				</table>
			</div>
			<div class="insert-form" id="ins-form">
				<form method="POST" action="admin_op.php">
					<input type="text" name="aid" placeholder="Agent ID" required><br>
					<input type="text" name="afname" placeholder="First name" required><br>
					<input type="text" name="aemail" placeholder="Email" value="" required><br>
					<input type="text" name="aphone" placeholder="Phone number" required><br>
					<input type="text" name="acity" placeholder="City" required><br>
					<input type="submit" value="Insert" class="submit" name="in-submit-a">
				</form>
			</div>
			<div class="delete-form" id="del-form2">
				<form method="POST" action="admin_op.php">     
					<input type="text" name="aid" placeholder="Agent ID" required><br>
					<input type="text" name="afname" placeholder="First name" required><br>
					<input type="submit" value="Delete" class="submit" name="de-submit-a">
				</form>
			</div>
		</div>
		<div class="places-workspace work" id="id3">
			<div class="btn-tag" id="plc-op">
				<button type="button" id="v3" onclick="showDetails(document.getElementById(this.id))">view place detailes</button>
				<button type="button" id="i2" onclick="insertMenu(document.getElementById(this.id))">Insert place</button>
				<button type="button" id="b3" onclick="deleteMenu(document.getElementById(this.id))">Delete place</button>
			</div>
			<div id="place-container" style="display: none; margin-top: 50px;">
				<table align="center" border="1px" style="width: 500px; line-height: 30px;">
					<tr>
						<th colspan="3"><h2>Place Details</h2></th>
					</tr>
					<tr>
						<th>Id</th>
						<th>Place Name</th>
						<th>City</th>
					</tr>
					<?php
						while($rows2 = mysqli_fetch_assoc($result2))
						{
					?>
					<tr>
						<td><?php echo $rows2['pid']; ?></td>
						<td><?php echo $rows2['pname']; ?></td>
						<td><?php echo $rows2['pcity']; ?></td>
					</tr>
					<?php
						}
					?>
				</table>
			</div>
			<div class="insert-form" id="ins-form2">
				<form method="POST" action="admin_op.php">     
					<input type="text" name="pid" placeholder="place ID" required><br>
					<input type="text" name="pname" placeholder="Place name" required><br>
					<input type="text" name="pcity" placeholder="City" required><br>
					<input type="submit" value="Insert" class="submit" name="ins-submit-p">
				</form>
			</div>
			<div class="delete-form" id="del-form3">
				<form method="POST" action="admin_op.php">     
					<input type="text" name="pid" placeholder="place ID" required><br>
					<input type="text" name="pname" placeholder="Place name" required><br>
					<input type="submit" value="Delete" class="submit" name="de-submit-p">
				</form>
			</div>
		</div>
		<div class="hotels-workspace work" id="id4">
			<div class="btn-tag" id="htl-op">
				<button type="button" id="v4" onclick="showDetails(document.getElementById(this.id))">view hotel detailes</button>
				<button type="button" id="i3" onclick="insertMenu(document.getElementById(this.id))">Insert hotel</button>
				<button type="button" id="b4" onclick="deleteMenu(document.getElementById(this.id))">Delete hotel</button>
			</div>
			<div id="hotel-container" style="display: none; margin-top: 50px;">
				<table align="center" border="1px" style="width: 500px; line-height: 30px;">
					<tr>
						<th colspan="4"><h2>Hotel Details</h2></th>
					</tr>
					<tr>
						<th>Id</th>
						<th>Hotel Name</th>
						<th>Phone</th>
						<th>City</th>
					</tr>
					<?php
						while($rows3 = mysqli_fetch_assoc($result3))
						{
					?>
					<tr>
						<td><?php echo $rows3['hid']; ?></td>
						<td><?php echo $rows3['hname']; ?></td>
						<td><?php echo $rows3['hphone']; ?></td>
						<td><?php echo $rows3['hcity']; ?></td>
					</tr>
					<?php
						}
					?>
				</table>
			</div>
			<div class="insert-form" id="ins-form3">
				<form method="POST" action="admin_op.php">     
					<input type="text" name="hid" placeholder="hotel ID" required><br>
					<input type="text" name="hname" placeholder="Hotel name" required><br>
					<input type="text" name="hphone" placeholder="Phone number" required><br>
					<input type="text" name="hcity" placeholder="City" required><br>
					<input type="submit" value="Insert" class="submit" name="ins-submit-h">
				</form>
			</div>
			<div class="delete-form" id="del-form4">
				<form method="POST" action="admin_op.php">     
					<input type="text" name="hid" placeholder="hotel ID" required><br>
					<input type="text" name="hname" placeholder="Hotel name" required><br>
					<input type="submit" value="Delete" class="submit" name="de-submit-h">
				</form>
			</div>
		</div>
		<div class="addp-workspace work" id="id5" style="display: none;">
			<div class="insert-pform" id="insp-form4">
				<form method="POST" action="admin_op.php">
					<input type="text" name="pname" placeholder="Place Name" required><br>
					<textarea class="inputTextarea" name="pdescription" rows="4" class="form-control" placeholder="Please write place description here" required></textarea><br>
					<input type="text" name="pi_main" placeholder="Enter main image" required><br>
					<input type="text" name="pi1" placeholder="Enter image1" required><br>
					<input type="text" name="pi2" placeholder="Enter image2" required><br>
					<input type="text" name="pi3" placeholder="Enter image3" required><br>
					<input type="submit" value="Add Place Details" class="submit" name="add_pd">
				</form>
			</div>
		</div>

	</div>
	<script type="text/javascript">
		function makeNone(){
				document.getElementById("htl-op").style.display = "none";
				document.getElementById("ins-form3").style.display = "none";
				document.getElementById("del-form4").style.display = "none";
				document.getElementById("hotel-container").style.display = "none";

				document.getElementById("plc-op").style.display = "none";
				document.getElementById("ins-form2").style.display = "none";
				document.getElementById("del-form3").style.display = "none";
				document.getElementById("place-container").style.display = "none";

				document.getElementById("agn-op").style.display = "none";
				document.getElementById("ins-form").style.display = "none";
				document.getElementById("del-form2").style.display = "none";
				document.getElementById("agent-container").style.display = "none";

				document.getElementById("cust-op").style.display = "none";
				document.getElementById("del-form").style.display = "none";
				document.getElementById("tb-container").style.display = "none";
		}

		function myFunction(clicked){
			makeNone()
			document.getElementById('id1').style.display = "none";
			document.getElementById('id2').style.display = "none";
			document.getElementById('id3').style.display = "none";
			document.getElementById('id4').style.display = "none";
			document.getElementById('id5').style.display = "none";
			if (document.getElementById('a1') === clicked){
				document.getElementById('id1').style.display = "block";
				document.getElementById("cust-op").style.display = "block";
				document.getElementById("del-form").style.display = "none";
			}
			if (document.getElementById('a2') === clicked){
				document.getElementById('id2').style.display = "block";
				document.getElementById("agn-op").style.display = "block";
				document.getElementById("ins-form").style.display = "none";
				document.getElementById("del-form2").style.display = "none";
			}
			if (document.getElementById('a3') === clicked){
				document.getElementById('id3').style.display = "block";
				document.getElementById("plc-op").style.display = "block";
				document.getElementById("ins-form2").style.display = "none";
				document.getElementById("del-form3").style.display = "none";
			}
			if (document.getElementById('a4') === clicked){
				document.getElementById('id4').style.display = "block";
				document.getElementById("htl-op").style.display = "block";
				document.getElementById("ins-form3").style.display = "none";
				document.getElementById("del-form4").style.display = "none";
			}
			if (document.getElementById('a5') === clicked){
				document.getElementById('id5').style.display = "block";
				document.getElementById("insp-form4").style.display = "block";
			}
		}
		function deleteMenu(clicked) {
			if (document.getElementById('b1') === clicked){
				document.getElementById("cust-op").style.display = "none";
				document.getElementById("tb-container").style.display = "none";
				document.getElementById("del-form").style.display = "block";
			}
			if (document.getElementById('b2') === clicked){
				document.getElementById("agn-op").style.display = "none";
				document.getElementById("agent-container").style.display = "none";
				document.getElementById("del-form2").style.display = "block";
			}
			if (document.getElementById('b3') === clicked){
				document.getElementById("plc-op").style.display = "none";
				document.getElementById("place-container").style.display = "none";
				document.getElementById("del-form3").style.display = "block";
			}
			if (document.getElementById('b4') === clicked){
				document.getElementById("htl-op").style.display = "none";
				document.getElementById("hotel-container").style.display = "none";
				document.getElementById("del-form4").style.display = "block";
			}
		}
		function insertMenu(clicked){
			if (document.getElementById('i1') === clicked){
				document.getElementById("agn-op").style.display = "none";
				document.getElementById("agent-container").style.display = "none";
				document.getElementById("ins-form").style.display = "block";
			}
			if (document.getElementById('i2') === clicked){
				document.getElementById("plc-op").style.display = "none";
				document.getElementById("place-container").style.display = "none";
				document.getElementById("ins-form2").style.display = "block";
			}
			if (document.getElementById('i3') === clicked){
				document.getElementById("htl-op").style.display = "none";
				document.getElementById("hotel-container").style.display = "none";
				document.getElementById("ins-form3").style.display = "block";
			}
		}
		function showDetails(clicked){
			if (document.getElementById('v1') === clicked){
				document.getElementById("cust-op").style.display = "none";
				document.getElementById("del-form").style.display = "none";
				document.getElementById("tb-container").style.display = "block";
			}
			if (document.getElementById('v2') === clicked){
				document.getElementById("agn-op").style.display = "none";
				document.getElementById("ins-form").style.display = "none";
				document.getElementById("del-form2").style.display = "none";
				document.getElementById("agent-container").style.display = "block";
			}
			if (document.getElementById('v3') === clicked){
				document.getElementById("plc-op").style.display = "none";
				document.getElementById("ins-form2").style.display = "none";
				document.getElementById("del-form3").style.display = "none";
				document.getElementById("place-container").style.display = "block";
			}
			if (document.getElementById('v4') === clicked){
				document.getElementById("htl-op").style.display = "none";
				document.getElementById("ins-form3").style.display = "none";
				document.getElementById("del-form4").style.display = "none";
				document.getElementById("hotel-container").style.display = "block";
			}
		}
	</script>
</body>
</html>