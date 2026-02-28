
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BNSS IoT Trainer Kit – Version 2</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
</head>
<body>

 <div class="header-container">
        <!-- Top Banner Section -->
        <header class="top-banner">
            <h1>BNSS - IoT & Robotics Training</h1>
        </header>

  
 
        <!-- NEW HTML STRUCTURE FOR HEADER -->
    <header class="navbar">
         <a href="/" class="logo-container">
            <img src="logo/Bnsslogo1.png" alt="Site Logo">
        </a>
    
        
        
        <label for="menu-toggle" class="hamburger-menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </label>
        
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <!-- <li><a href="iot-projects.php">IoT Projects</a></li> -->
                <!-- IoT Projects Dropdown -->
      <li class="dropdown">
        <a href="#" class="dropdown-toggle">IoT Projects ▼</a>
        <ul class="dropdown-menu">
           <li><a href="iot-projects.php">Bnss iot version 1  </a></li>
          <li><a href="version-2.php">Bnss iot version 2  </a></li>
          <li><a href="install-os.php"> install os in Rasperry pi</a></li>
          <li><a href="#"> BNSS iot version 2 projects</a></li>
        </ul>
      </li>
            <li><a href="drone.html">Drone Technology </a></li>
            <li><a href="learnRasp.html">Learn Raspi</a></li>
            <li><a href="vrar.html">VR & AR </a></li>
            <li><a href="diy-project.html">DIY Projects </a></li>
            <li><a href="iotsimulation.html">IoT Simulation</a></li>
        </ul>
    </header>
    <!-- JavaScript for Dropdown Toggle -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const dropdownToggle = document.querySelector('.dropdown-toggle');
    const dropdownMenu = document.querySelector('.dropdown-menu');

    dropdownToggle.addEventListener('click', function(e) {
      e.preventDefault();
      dropdownMenu.classList.toggle('show');
    });

    // Close dropdown if clicked outside
    document.addEventListener('click', function(e) {
      if (!e.target.closest('.dropdown')) {
        dropdownMenu.classList.remove('show');
      }
    });
  });
</script>




