<?php
    session_start();
    if ( $_SESSION['name']==true)
    {
      
    }
    else
  
        header('location:adminlogin.php');

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
 
    <!------------fav icon -------------->
    <link rel="shortcut icon" href="../images/Newspaper.png">

    <!-- font awesome css -->
    <link rel="stylesheet" href="../css/all.css">

    <!-- custom css -->
    <link rel="stylesheet" href="./design.css">

</head>
    <body>    
        <main>
                <div class="admin-deshboard">
                    <div class="sidenav">
                        <div class="sidebar-title">
                            <h1>   <a href="#">ADMIN NAME</a> </h1>
                        </div>
                        <div class="sidebar-image">
                            <img src="../images/admin.png" class="imgsrc">
                        </div>
                        
                        <!-- menu start -->
                        <a href="./admindashboard.php">Dashboard</a>
                            <button class="dropdown-btn">Member
                                <i class="fas fa-caret-down"></i>
                            </button>
                            <div class="dropdown-container">
                                <a href="./categories.php">Add Member</a>
                                <a href="allcat.php">All Member</a>
                            </div>
                            <button class="dropdown-btn">Equipment
                                <i class="fas fa-caret-down"></i>
                            </button>
                            <div class="dropdown-container">
                                <a href="./post.php">Add Equipment</a>
                                <a href="all_post.php">All Equipment</a>
                            </div>
                            <button class="dropdown-btn">Faculity
                                <i class="fas fa-caret-down"></i>
                            </button>
                            <div class="dropdown-container">
                                <a href="./faculty.php">Add Faculity</a>
                                <a href="allfaculty.php">All Faculity</a>
                            </div>
                            <button class="dropdown-btn">Admin
                                <i class="fas fa-caret-down"></i>
                            </button>
                            <div class="dropdown-container">
                                <a href="adminadd.php">Add Admin</a>
                                <a href="alladmin.php">All Admin</a>
                            </div>
                            <a href="./adminlogout.php">Log out</a>
                    </div> 
    <!-- custom js -->
    <script src="amain.js"></script>
</body>
</html>