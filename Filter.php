<?php
# Initialize the session
session_start();

# If user is not logged in then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== TRUE) {
	echo "<script>" . "window.location.href='./login.php';" . "</script>";
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Filter</title>
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href='https://fonts.googleapis.com/css?family=Josefin Sans' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8w90+nuLcSKIbmrcLa0OT92×01BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc20M/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="./css/Filter.css">

</head>

<body>
	<div class="first container-fluid">


		<nav class="navbar navbar-expand-lg navbar-light ">
			<div class="container-fluid">
				<a class="home_link" href="./index.php">
					<h2 class="title">DREAM<span class="span1">STUDY</span><span class="span2">.com</span>
					</h2>
				</a>

				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav ms-auto">

						<li class="nav-item">
							<a class="profile rounded-0 me-2" href="./profile.html">Hello <?= htmlspecialchars($_SESSION["username"]); ?></a>
						</li>
						<li class="nav-item">
							<a class="profile" href="./logout.php" class="btn btn-primary">Log Out</a>
						</li>

					</ul>
				</div>
			</div>
		</nav>


		<div class="container my-5">
			<div class="row">
				<div class="col-md-4">
					<form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
						<label class="text-white fs-4 me-1" for="programme">Programme: </label>
						<select class="custom-select p-2 fs-5" name="programme" id="programme" onchange="this.form.submit()">
						<option value="">--Select--</option>	
						<option value="PhD" <?php if (isset($_POST['programme']) && $_POST['programme'] == 'PhD') echo 'selected'; ?>>
								PhD</option>
							<option value="Postgraduate" <?php if (isset($_POST['programme']) && $_POST['programme'] == 'Postgraduate') echo 'selected'; ?>>
								Postgraduate</option>
							<option value="Undergraduate" <?php if (isset($_POST['programme']) && $_POST['programme'] == 'Undergraduate') echo 'selected'; ?>>
								Undergraduate</option>
							<option value="Language Programme" <?php if (isset($_POST['programme']) && $_POST['programme'] == 'Language Programme') echo 'selected'; ?>>
								Language Programme</option>
							<option value="Postgrade" <?php if (isset($_POST['programme']) && $_POST['programme'] == 'Postgrade') echo 'selected'; ?>>
								Postgrade</option>
							<option value="Undergrade" <?php if (isset($_POST['programme']) && $_POST['programme'] == 'Undergrade') echo 'selected'; ?>>
								Undergrade</option>
						</select>
					</form>
				</div>
				<div class="col-md-4">
					<form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
						<label class="text-white fs-4 me-1" for="Province">Province: </label>
						<select class="custom-select p-2 fs-5" name="Province" id="Province" onchange="this.form.submit()">
						<option value="">--Select--</option>
							<option value="Yunnan" <?php if (isset($_POST['Province']) && $_POST['Province'] == 'Yunnan') echo 'selected'; ?>>
								Yunnan</option>
							<option value="Guangdong" <?php if (isset($_POST['Province']) && $_POST['Province'] == 'Guangdong') echo 'selected'; ?>>
								Guangdong</option>
							<option value="Zhejiang" <?php if (isset($_POST['Province']) && $_POST['Province'] == 'Zhejiang') echo 'selected'; ?>>
								Zhejiang</option>
							<option value="Shandong" <?php if (isset($_POST['Province']) && $_POST['Province'] == 'Shandong') echo 'selected'; ?>>
								Shandong</option>
							<option value="Sichuan" <?php if (isset($_POST['Province']) && $_POST['Province'] == 'Sichuan') echo 'selected'; ?>>
								Sichuan</option>
							<option value="Fujian" <?php if (isset($_POST['Province']) && $_POST['Province'] == 'Fujian') echo 'selected'; ?>>
								Fujian</option>
							<option value="Jiangsu" <?php if (isset($_POST['Province']) && $_POST['Province'] == 'Jiangsu') echo 'selected'; ?>>
								Jiangsu</option>
							<option value="Henan" <?php if (isset($_POST['Province']) && $_POST['Province'] == 'Henan') echo 'selected'; ?>>
								Henan</option>
							<option value="Hubei" <?php if (isset($_POST['Province']) && $_POST['Province'] == 'Hubei') echo 'selected'; ?>>
								Hubei</option>
							<option value="Anhui" <?php if (isset($_POST['Province']) && $_POST['Province'] == 'Anhui') echo 'selected'; ?>>
								Anhui</option>
							<option value="Anhui" <?php if (isset($_POST['Province']) && $_POST['Province'] == 'Anhui') echo 'selected'; ?>>
								Anhui</option>
							<option value="Chongqing" <?php if (isset($_POST['Province']) && $_POST['Province'] == 'Chongqing') echo 'selected'; ?>>
								Chongqing</option>
							<option value="Shanghai" <?php if (isset($_POST['Province']) && $_POST['Province'] == 'Shanghai') echo 'selected'; ?>>
								Shanghai</option>
							<option value="Qinghai" <?php if (isset($_POST['Province']) && $_POST['Province'] == 'Qinghai') echo 'selected'; ?>>
								Qinghai</option>
							<option value="Gansu" <?php if (isset($_POST['Province']) && $_POST['Province'] == 'Gansu') echo 'selected'; ?>>
								Gansu</option>
							<option value="Tianjin" <?php if (isset($_POST['Province']) && $_POST['Province'] == 'Tianjin') echo 'selected'; ?>>
								Tianjin</option>
							<option value="Jilin" <?php if (isset($_POST['Province']) && $_POST['Province'] == 'Jilin') echo 'selected'; ?>>
								Jilin</option>
							<option value="Shaanxi" <?php if (isset($_POST['Province']) && $_POST['Province'] == 'Shaanxi') echo 'selected'; ?>>
								Shaanxi</option>
							<option value="Shanxi" <?php if (isset($_POST['Province']) && $_POST['Province'] == 'Shanxi') echo 'selected'; ?>>
								Shanxi</option>
							<option value="Liaoning" <?php if (isset($_POST['Province']) && $_POST['Province'] == 'Liaoning') echo 'selected'; ?>>
								Liaoning</option>
							<option value="Heilongjiang" <?php if (isset($_POST['Province']) && $_POST['Province'] == 'Heilongjiang') echo 'selected'; ?>>
								Heilongjiang</option>
							<option value="Jiangxi" <?php if (isset($_POST['Province']) && $_POST['Province'] == 'Jiangxi') echo 'selected'; ?>>
								Jiangxi</option>
							<option value="Guizhou" <?php if (isset($_POST['Province']) && $_POST['Province'] == 'Guizhou') echo 'selected'; ?>>
								Guizhou</option>
							<option value="Hebei" <?php if (isset($_POST['Province']) && $_POST['Province'] == 'Hebei') echo 'selected'; ?>>
								Hebei</option>
							<option value="Hunan" <?php if (isset($_POST['Province']) && $_POST['Province'] == 'Hunan') echo 'selected'; ?>>
								Hunan</option>
							<option value="Hainan" <?php if (isset($_POST['Province']) && $_POST['Province'] == 'Hainan') echo 'selected'; ?>>
								Hainan</option>
						</select>
					</form>

				</div>
				<div class="col-md-4">
					<form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
						<label class="text-white fs-4 me-1" for="scholarship">Select Scholarship: </label>
						<select class="custom-select p-2 fs-5" name="scholarship" id="scholarship" onchange="this.form.submit()">
						<option value="">--Select--</option>	
						<option value="Self" <?php if (isset($_POST['scholarship']) && $_POST['scholarship'] == 'Self') echo 'selected'; ?>>
								Self</option>
							<option value="Full Free" <?php if (isset($_POST['scholarship']) && $_POST['scholarship'] == 'Full Free') echo 'selected'; ?>>
								Full Free</option>
							<option value="Partial" <?php if (isset($_POST['scholarship']) && $_POST['scholarship'] == 'Partial') echo 'selected'; ?>>
								Partial</option>
						</select>
					</form>
				</div>

			</div>
		</div>





		<table class="table table-dark table-striped-columns">
			<tbody>
				<tr>
					<th>No.</th>
					<th>University</th>
					<th>Province</th>
					<th>Programme</th>
					<th>Language</th>
					<th>Course</th>
					<th>Scholarship</th>
					<th>Contacts</th>
				</tr>
				<?php
				$servername = "localhost";
				$username = "root";
				$password = "";
				$database = "registered";
				$programme_name = $_POST['programme'];
				$province_name = $_POST['Province'];
				$scholarship_name = $_POST['scholarship'];



				$connection = new mysqli($servername, $username, $password, $database);

				if ($connection->connect_error) {
					die("Connection Failed: " . $connection->connect_error);
				}
				$sql = "SELECT * FROM `university_table` WHERE Programme = '$programme_name'";
				$sql1 = "SELECT * FROM `university_table` WHERE Province = '$province_name'";
				$sql2 = "SELECT * FROM `university_table` WHERE Scholarship = '$scholarship_name'";


				$result = $connection->query($sql);
				$result1 = $connection->query($sql1);
				$result2 = $connection->query($sql2);

				if (!$result) {
					die("Invalid query: " . $connection->error);
				}
				if ((isset($_POST['programme']) && $_POST['programme'] == 'PhD') || (isset($_POST['programme']) && $_POST['programme'] == 'Postgraduate') ||
					(isset($_POST['programme']) && $_POST['programme'] == 'Undergraduate') || (isset($_POST['programme']) && $_POST['programme'] == 'Language Programme') ||
					(isset($_POST['programme']) && $_POST['programme'] == 'Postgrade') || (isset($_POST['programme']) && $_POST['programme'] == 'Undergrade')
				) {

					while ($row = $result->fetch_assoc()) {
						echo "
						<tr>
								<td>" . $row["No."] . "</td>
								<td>" . $row["University"] . "</td>
								<td>" . $row["Province"] . "</td>
								<td>" . $row["Programme"] . "</td>
								<td>" . $row["Language"] . "</td>
								<td>" . $row["Course"] . "</td>
								<td>" . $row["Scholarship"] . "</td>
								<td>" . $row["Contacts"] . "</td>
							</tr>";
					}
				} else if ((isset($_POST['Province']) && $_POST['Province'] == 'Yunnan') || (isset($_POST['Province']) && $_POST['Province'] == 'Yunnan') ||
					(isset($_POST['Province']) && $_POST['Province'] == 'Hubei') || (isset($_POST['Province']) && $_POST['Province'] == 'Guangdong') ||
					(isset($_POST['Province']) && $_POST['Province'] == 'Anhui') || (isset($_POST['Province']) && $_POST['Province'] == 'Zhejiang') ||
					(isset($_POST['Province']) && $_POST['Province'] == 'Anhui') || (isset($_POST['Province']) && $_POST['Province'] == 'Shandong') ||
					(isset($_POST['Province']) && $_POST['Province'] == 'Chongqing') || (isset($_POST['Province']) && $_POST['Province'] == 'Sichuan') ||
					(isset($_POST['Province']) && $_POST['Province'] == 'Shanghai') || (isset($_POST['Province']) && $_POST['Province'] == 'Fujian') ||
					(isset($_POST['Province']) && $_POST['Province'] == 'Qinghai') || (isset($_POST['Province']) && $_POST['Province'] == 'Jiangsu') ||
					(isset($_POST['Province']) && $_POST['Province'] == 'Gansu') || (isset($_POST['Province']) && $_POST['Province'] == 'Henan') ||
					(isset($_POST['Province']) && $_POST['Province'] == 'Heilongjiang') || (isset($_POST['Province']) && $_POST['Province'] == 'Tianjin') ||
					(isset($_POST['Province']) && $_POST['Province'] == 'Jiangxi') || (isset($_POST['Province']) && $_POST['Province'] == 'Jilin') ||
					(isset($_POST['Province']) && $_POST['Province'] == 'Guizhou') || (isset($_POST['Province']) && $_POST['Province'] == 'Shaanxi') ||
					(isset($_POST['Province']) && $_POST['Province'] == 'Hebei') || (isset($_POST['Province']) && $_POST['Province'] == 'Shanxi') ||
					(isset($_POST['Province']) && $_POST['Province'] == 'Hunan') || (isset($_POST['Province']) && $_POST['Province'] == 'Liaoning') ||
					(isset($_POST['Province']) && $_POST['Province'] == 'Hainan')
				) {
					while ($row1 = $result1->fetch_assoc()) {
						echo "
						<tr>
								<td>" . $row1["No."] . "</td>
								<td>" . $row1["University"] . "</td>
								<td>" . $row1["Province"] . "</td>
								<td>" . $row1["Programme"] . "</td>
								<td>" . $row1["Language"] . "</td>
								<td>" . $row1["Course"] . "</td>
								<td>" . $row1["Scholarship"] . "</td>
								<td>" . $row1["Contacts"] . "</td>
							</tr>";
					}
				} else if ((isset($_POST['scholarship']) && $_POST['scholarship'] == 'Self') || (isset($_POST['scholarship']) && $_POST['scholarship'] == 'Full Free') ||
					(isset($_POST['scholarship']) && $_POST['scholarship'] == 'Partial')
				) {

					while ($row2 = $result2->fetch_assoc()) {
						echo "
						<tr>
								<td>" . $row2["No."] . "</td>
								<td>" . $row2["University"] . "</td>
								<td>" . $row2["Province"] . "</td>
								<td>" . $row2["Programme"] . "</td>
								<td>" . $row2["Language"] . "</td>
								<td>" . $row2["Course"] . "</td>
								<td>" . $row2["Scholarship"] . "</td>
								<td>" . $row2["Contacts"] . "</td>
							</tr>";
					}
				}
				?>
			</tbody>
		</table>
	</div>


</body>

</html>