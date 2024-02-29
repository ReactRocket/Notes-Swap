<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Sidebar Dashboard</title>
  <style>
    body {
      overflow-x: hidden;
    }

    #sidebar {
      height: 100vh;
      width: 250px;
      position: fixed;
      top: 0;
      left: 0;
      /* background-color: #DC3545; */
      background-color: #972239;
      background-image: linear-gradient(315deg, #972239 0%, #db6885 74%);
      border-top-right-radius: 5%;
      border-bottom-right-radius: 5%;
      padding-top: 20px;
    }

   

    #content {
      margin-left: 250px;
      /* padding: 20px; */
    }

    .nav-link {
      text-decoration: none !important;
      color: #fff !important;
      padding: 10px 20px 0px 10px;
      transition: background-color 0.3s;
    }

    .nav-link:hover {
      background-color: #fff;
      color: #DB6885 !important; 
    }
    .nav-link:hover .ico{
      background-color: #fff;
      color: #DB6885 !important; 
    }

    /* .nav-link.active {
      /* background-color: #CC0000; 
    } */

    .nav-item {
      
      margin-bottom: 4px;
    }
  </style>
</head>

<body>
  <div id="sidebar" data-aos="fade-right">
    <ul class="nav flex-column">

      <li class="nav-item">
        <a class="nav-link active navi" href="index.php" >Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="addStudent.php" >Add Student</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="viewStudent.php">View Student</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="searchstud.php">Search Student By Registration Number</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="addFaculty.php" >Add Faculty</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="viewFaculty.php" >View Faculty</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="searchfac.php"  >Search Faculty By Registration Number</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="addSubject.php">Add Subject</a>
      </li>
      <?php
    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
      echo "
      <li class='nav-item'>
      <a href='logout.php' class='nav-link text-white'><span><i class='fa-solid fa-arrow-right-from-bracket mr-2 ico' style='color: #fff;'></i></span>logout</a>
    </li>";
            
    }
    ?>
    <i class="" ></i>
     
    </ul>
  </div>
  <div id="content">

  </div>
</body>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
</script>
</html>