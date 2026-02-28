<?php include "header.php"; ?>
<!-- SLIDER SECTION -->
    <div class="slider-container">
        <div class="slider">
            <div class="slide" data-thumbnail-src="images/iot.jpg">
                <img src="slider-images/iot.jpg" alt="Technology background">
                <div class="slide-content">
                    <h1>Welcome to the Future of Tech</h1>
                    <p>Explore IoT, Robotics, and more with our interactive kits.</p>
                </div>
            </div>
            <!-- Add more slides here if needed -->
        </div>
        <!-- Navigation Buttons -->
        <button class="btn btn-prev" aria-label="Previous Slide">❮</button>
        <button class="btn btn-next" aria-label="Next Slide">❯</button>
        <!-- Thumbnail navigation -->
        <div class="thumbnail-container"></div>
    </div>

     <section class="bnss-section">
  <h2 class="bnss-title">BNSS IoT Learning Modules</h2>

  <div class="bnss-grid">

    <div class="bnss-card card1">
      <h3>IoT Projects</h3>
      <p>
        Internet of Things (IoT) is the trending technology that talks about the devices connected to the network capable of sending back and forth the device status data to the central storage.
      </p>
      <p>The captured data describes about the state of the devices connected in the network, and is used to study the functioning of the devices.</p>
    </div>

    <div class="bnss-card card2">
      <h3>BNSS IoT Kit</h3>
      <p>
        The BNSS IoT kit is a collection of controllers and sensor modules that helps the learners to understand the real world application of sensors.
      </p>
      <p>Blue Nile Software Systems (BNSS) offers a collection sensors and controller units built into a single plug and play unit. This BNSS IoT kit allows learners to experiment with a variety of sensors and development boards.</p>
    </div>

    <div class="bnss-card card3">
      <h3>About the Projects</h3>
      <p>
       The BNSS IoT kit is supplemented with an introductory 25 project packages showcasing the capabilities of the kit. The project package includes a bundle of IoT projects ranging from simple to complex workflows.
      </p>
      <p>However, the capability of the kit can be scaled to 100+ projects using various combinations of the controllers and sensors that can fit into this kit.</p>
    </div>

    <div class="bnss-card card4">
      <h3>Takeaways</h3>
      <p>Using the BNSS IoT kit learners can build interesting projects that helps them understand the working principle of various IoT systems used in the real world.</p>
      <ul>
        <li>Learn Multiple development boards</li>
        <li>Different communication methods</li>
        <li>How to use analog and digital signals</li>
        <li>Different display methods</li>
        <li>Learn about actuators and alarm systems</li>
        <li>Working of Access control systems</li>
      </ul>
    </div>

  </div>
</section>
<!-- VIDEO SECTION -->
    <section class="video-section">
        <div class="container">
            <h1 class="section-title">How To Program Arduino Micro Controller</h1>
            <div class="ar-divider">------------- ○ -------------</div>

            <div class="video-grid">
                <!-- Video Item 1 -->
                <div class="video-item">
                    <p class="video-label">How to begin using the Arduino UNO & IDE</p>
                    <video controls poster="./images/poster1.jpg">
                        <source src="./videos/Arduinouno programming.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <!-- Video Item 2 -->
                <div class="video-item">
                    <p class="video-label">Getting to Know Arduino Nano Setup & Basics</p>
                    <video controls poster="./images/poster2.jpg">
                        <source src="./videos/ArduinoNano programming.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
    </section>
    <section class="section-title">
    <h1 class="iotTopHeading_ux10">IOT PROJECTS</h1>
<div class="ar-divider">------------- ○ -------------</div>


<div class="iotProjectGrid_b700">

    <!-- PROJECT CARD 1 -->
     <div class="iotCardWrap_m910 text-center border border-2">
        <img src="images/iotproject25.jpg" class="RFID ATTENDANCE SYSTEM USING NODEMCU ESP8266 AND GOOGLE SHEETS" alt="">
        <div class="iotCardTitle_m910">RFID ATTENDANCE SYSTEM USING NODEMCU ESP8266 AND GOOGLE SHEETS</div>
        <a href="rfid-attendance.php" class="iotCardLink_m910"><u>Do it Yourself (DIY)</u></a>
    </div>

</div>
</section>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-lg-6">
            <div class="pagination">
    <a href="iot-projects.php">Page 1</a>
    <a href="page-2.php">Page 2</a>
    <a href="page-3.php">Page 3</a>
    </div>
    </div>
    </div>
    </div>
<script>
    const revealElements = document.querySelectorAll('.reveal');

    function revealOnScroll() {
        revealElements.forEach(el => {
            const elementTop = el.getBoundingClientRect().top;
            if (elementTop < window.innerHeight - 100) {
                el.classList.add('active');
            }
        });
    }

    window.addEventListener("scroll", revealOnScroll);
    revealOnScroll();
</script>
    




<?php include "footer.php"; ?>
