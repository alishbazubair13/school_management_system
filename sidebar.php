<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="css/style.css">
<style>
   /* Sidebar Styling */
   .sidebar {
    background-color: #3b1a47;
    color: white;
    width: 256px;
    height: 84vh;
    position: fixed;
    top: 98px;
    left: 30px;
    padding-top: 20px;
    font-family: Arial, sans-serif;
    box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
}
.sidebar h3.text {
    text-align: center;
    font-size: 24px;
    margin-bottom: 20px;
    color: #f1f1f1;
}

.sidebar hr {
    border: 1px solid #5e2a76;
    width: 80%;
    margin: 10px auto;
}

.sidebar ul {
    list-style-type: none;
    padding: 0;
}

.sidebar ul li {
    margin-bottom: 10px;
}

.sidebar ul li a {
    display: flex;
    align-items: center;
    color:black;
    padding: 15px 20px;
    font-size: 16px;
    text-decoration: none;
    transition: background 0.3s, color 0.3s;
}

.sidebar ul li a i {
    margin-right: 12px;
    font-size: 18px;
}

.sidebar ul li a:hover {
    background-color: #5e2a76;
    color: #e1e1e1;
    border-left: 4px solid #ffeb3b; /* Yellow highlight on hover */
}

.sidebar ul li a.active {
    background-color: #5e2a76; /* Active item background */
    font-weight: bold;
    border-left: 4px solid #ffeb3b;
}

.sidebar ul li a i:hover {
    color: #ffeb3b; /* Yellow icon color on hover */
}

</style>
</head>
<body>
	
</body>
</html>
<div class="sidebar"><br>
    <h3 class="text">Dashboard</h3><br><hr><br>
    <ul class="s">
    <?php
        if(isset($_SESSION["AID"])) {
            echo'
                <li class="li"><a href="admin_home.php"><i class="fas fa-school"></i> School Information</a></li>
                <li class="li"><a href="add_class.php"><i class="fas fa-chalkboard-teacher"></i> Class</a></li>
                <li class="li"><a href="add_sub.php"><i class="fas fa-book"></i> Subject</a></li>
                <li class="li"><a href="add_staff.php"><i class="fas fa-user-tie"></i> Staff</a></li>
                <li class="li"><a href="view_staff.php"><i class="fas fa-users"></i> View Staff</a></li>
                <li class="li"><a href="set_exam.php"><i class="fas fa-pencil-alt"></i> Set Exam</a></li>
                <li class="li"><a href="view_exam.php"><i class="fas fa-eye"></i> View Exam</a></li>
                <li class="li"><a href="student.php" target="_blank"><i class="fas fa-user-graduate"></i> View Student</a></li>
                <li class="li"><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
            ';
        } else {
            echo'
                <li class="li"><a href="teacher_home.php"><i class="fas fa-user"></i> Profile</a></li>
                <li class="li"><a href="handle_class.php"><i class="fas fa-chalkboard"></i> Handled Class</a></li>
                <li class="li"><a href="add_stud.php"><i class="fas fa-user-plus"></i> Students</a></li>
                <li class="li"><a href="view_stud_teach.php" target="_blank"><i class="fas fa-eye"></i> View Student</a></li>
                <li class="li"><a href="tech_view_exam.php"><i class="fas fa-eye"></i> View Exam</a></li>
                <li class="li"><a href="add_mark.php"><i class="fas fa-edit"></i> Add Marks</a></li>
                <li class="li"><a href="view_mark.php"><i class="fas fa-list-alt"></i> View Marks</a></li>
                <li class="li"><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
            ';
        }
    ?>
    </ul>
</div>
