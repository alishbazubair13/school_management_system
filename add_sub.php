<?php
	include "database.php";
	session_start();
	if (!isset($_SESSION["AID"])) {
		echo "<script>window.open('index.php?mes=Access Denied...','_self');</script>";
	}	
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>School Management System</title>
		<link rel="stylesheet" href="css/style.css">
<style>
	/* General Styles */
* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: Arial, sans-serif;
}

body {
	background-color: #f4f4f9;
	color: #333;
}

.container {
	display: flex;
	width: 90%;
	margin: auto;
}

/* Navbar and Sidebar */
#navbar, #sidebar {
	background-color: #333;
	color: #fff;
	padding: 15px;
}

/* Main Content */
.main-content {
	flex: 1;
	padding: 20px;
	background: #fff;
	margin-left: 20px;
	border-radius: 8px;
	box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

.section-title {
	margin-left: 30%;
	font-size: 1.5em;
	margin-bottom: 20px;
	color: #444;
}

/* Forms and Alerts */
.subject-form {
	margin-left:30%;
	display: flex;
	flex-direction: column;
	width: 100%;
	max-width: 500px;
}

.input-field {
	padding: 10px;
	margin: 8px 0;
	border: 1px solid #ddd;
	border-radius: 4px;
	width: 100%;
}

.btn-primary {
	background-color: #4CAF50;
	color: #fff;
	padding: 10px 20px;
	border: none;
	border-radius: 4px;
	cursor: pointer;
	margin-top: 10px;
}

.btn-primary:hover {
	background-color: #45a049;
}

.alert {
	padding: 10px;
	margin-bottom: 15px;
	border-radius: 5px;
}

.success {
	background-color: #4CAF50;
	color: white;
}

.error {
	background-color: #f44336;
	color: white;
}

/* Table Styles */
.styled-table {
	width: 100%;
	border-collapse: collapse;
	margin-top: 20px;
}

.styled-table thead tr {
	background-color: #333;
	color: #ffffff;
	text-align: left;
}

.styled-table th, .styled-table td {
	padding: 12px;
	border: 1px solid #ddd;
}

.styled-table tbody tr:nth-child(even) {
	background-color: #f9f9f9;
}

.styled-table tbody tr:hover {
	background-color: #f1f1f1;
}

.btn-delete {
	color: #f44336;
	text-decoration: none;
	font-weight: bold;
}

.btn-delete:hover {
	text-decoration: underline;
}

.subject-image {
	margin-left: 20px;
	margin-top: 30px;
	width: 150px;
	height: auto;
	border-radius: 8px;
	box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.subject-details{
margin-left:20%;
margin-right:20%;
}
</style>
	</head>
	<body>
		<?php include "navbar.php"; ?><br>

		<div class="container">
			<?php include "sidebar.php"; ?><br><br>

			<div class="main-content">
				<h3 class="section-title">Add Subject Details</h3><br>

				<?php
					if (isset($_POST["submit"])) {
						$sq = "INSERT INTO sub(SNAME) VALUES ('{$_POST["sname"]}')";
						echo $db->query($sq) ? "<div class='alert success'>Insert Success</div>" : "<div class='alert error'>Insert Failed</div>";
					}
				?>

				<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>" class="subject-form">
					<label for="sname">Subject Name</label><br>
					<input type="text" name="sname" id="sname" required class="input-field">
					<button type="submit" class="btn-primary" name="submit">Add Subject Details</button>
					<img src="img/sub.jpg" alt="Subject Image" class="subject-image">
				</form>

				<div class="subject-details">
					<h3 class="section-title">Subject Details</h3><br>
					<?php
						if (isset($_GET["mes"])) {
							echo "<div class='alert error'>{$_GET["mes"]}</div>";	
						}
					?>

					<table class="styled-table">
						<thead>
							<tr>
								<th>S.No</th>
								<th>Subject Name</th>
								<th>Delete</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$s = "SELECT * FROM sub";
								$res = $db->query($s);
								if ($res->num_rows > 0) {
									$i = 0;
									while ($r = $res->fetch_assoc()) {
										$i++;
										echo "<tr>
												<td>{$i}</td>
												<td>{$r["SNAME"]}</td>
												<td><a href='sub_delete.php?id={$r["SID"]}' class='btn-delete'>Delete</a></td>
											  </tr>";
									}
								} else {
									echo "<tr><td colspan='3'>No Record Found</td></tr>";
								}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<?php include "footer.php"; ?>
	</body>
</html>
