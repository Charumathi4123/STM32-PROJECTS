<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BNSS IoT Trainer Kit – Version 2</title>

  <!-- Fonts & CSS -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <div class="header-container">

    <!-- Top Banner Section -->
    <header class="top-banner">
      <h1>BNSS - IoT & Robotics Training</h1>
    </header>

    <!-- Navigation Bar -->
    <header class="navbar">
      <a href="/" class="logo-container">
        <img src="logo/Bnsslogo1.png" alt="Site Logo">
      </a>

      <!-- Hamburger Menu (for mobile view) -->
      <label for="menu-toggle" class="hamburger-menu">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </label>

      <!-- Navigation Links -->
      <ul class="nav-links">
        <li><a href="index.php">Home</a></li>

        <!-- IoT Projects Dropdown -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle">IoT Projects</a>
          <ul class="dropdown-menu">
            <li><a href="iot-projects.php">Bnss IoT Version 1</a></li>

            <li><a href="iot-manual.php">Version 1 -IOT MANUAL BOOK</a></li>
            <li><a href="version-2.php">Bnss IoT Version 2</a></li>
            <li><a href="install-os.php">Install OS in Raspberry Pi</a></li>
            
            <li class="dropdown-left">
               <a href="diy-projects.php" class="dropdown-toggle">BNSS Version 2 Projects </a>
                <ul class="dropdown-submenu">
                  <li><a href="diy_project version-2.php">DIY Projects  </a></li>
          <li><a href="build-tv.php">Build your own Android Tv</a></li>
          <li><a href="photoframe.php">Build your own smart photo frame </a></li>
          <li><a href="fm_radio.php">Build your own FM Radio station </a></li>

        </ul>
            </li>
          </ul>
        </li>

        <!-- Drone Technology Dropdown -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle">Drone Technology </a>
          <ul class="dropdown-menu">
            <li><a href="drone.php">Drone overview </a></li>
            <li><a href="Assembly.php"> Drone Assembly  </a></li>
            <li><a href="book.php">Drone Book </a></li>

          </ul>
        </li>

        <!-- VR & AR -->
        <li><a href="vr-ar.php">VR & AR</a></li>
      </ul>
    </header>

  </div>

  <!-- JavaScript for Dropdown Toggle -->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const dropdowns = document.querySelectorAll('.dropdown');

      dropdowns.forEach(dropdown => {
        const toggle = dropdown.querySelector('.dropdown-toggle');
        const menu = dropdown.querySelector('.dropdown-menu');

        toggle.addEventListener('click', function (e) {
          e.preventDefault();
          menu.classList.toggle('show');
        });
      });

      // Close dropdowns when clicking outside
      document.addEventListener('click', function (e) {
        dropdowns.forEach(dropdown => {
          if (!dropdown.contains(e.target)) {
            dropdown.querySelector('.dropdown-menu').classList.remove('show');
          }
        });
      });
    });
    
  </script>

</body>
</html>
