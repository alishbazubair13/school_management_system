<?php
	include "database.php";
	session_start();
	if(!isset($_SESSION["AID"])) {
		echo "<script>window.open('index.php?mes=Access Denied..','_self');</script>";
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>School Management System</title>
	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- <link rel="stylesheet" href="css/new.css"> -->
<style>
	.li{
		width: 160%;
	}
	.content {
		margin-top: 1px;
	}
</style>
</head>
<body>

	<?php include "navbar.php"; ?><br>
	
	
	<div id="section">
	<!-- <?php include"sidebar.php";?><br> -->
	<?php include "sidebar.php"; ?><br>
		<div class="content">
			<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3>
			<hr><br>
			<h3>Some About Our School</h3>

			<div class="dashboard-cards">
				<div class="card" style="background-color: #42A5F5;">
					<i class="icon-users"></i>
					<h4>5</h4>
					<p>Regd Users</p>
				</div>
				<div class="card" style="background-color: #EF5350;">
					<i class="icon-ticket"></i>
					<h4>7</h4>
					<p>Subjects Listed</p>
				</div>
				<div class="card" style="background-color: #FFCA28;">
					<i class="icon-school"></i>
					<h4>7</h4>
					<p>Total Classes Listed</p>
				</div>
				<div class="card" style="background-color: #66BB6A;">
					<i class="icon-results"></i>
					<h4>4</h4>
					<p>Results Declared</p>
				</div>
			</div>
<br>
<br>

			<div class="info-section">
				<h3>School Information</h3>
				<p class="para">
				The School Management System 📚 is a cutting-edge, all-in-one digital solution tailored to meet the needs of modern schools 🏫. Designed to connect students 👩‍🎓, teachers 👨‍🏫, parents 👨‍👩‍👧‍👦, and administrators 🧑‍💼 on a single, interactive platform, it transforms traditional school management into a seamless, paperless experience 📄➡️💻.

Through real-time updates 📲 and automated processes ⚙️, the system simplifies everyday tasks—from attendance tracking 📝 and grade monitoring 📈 to announcements 📢 and parent-teacher communication 💬. Parents can stay up-to-date on their child's progress 🌟, teachers gain tools to manage classrooms effectively 🧑‍🏫📖, and administrators can oversee operations effortlessly 📊.

With everything centralized and easily accessible 🌐, this powerful School Management System fosters an organized, connected, and responsive school community 🌍, setting the stage for an enhanced educational experience 🚀	</p>
				<p class="para">
					
				</p>
			</div>
		</div>
	</div>

	<?php include "footer.php"; ?>
</body>
</html>
