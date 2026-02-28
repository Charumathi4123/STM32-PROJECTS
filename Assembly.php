<?php include "header.php";?>
<div class="slider-container">
        <div class="slider-track">
            <!-- Slide 1: Using an <img> tag now -->
            <div class="slide">
                <img src="slider-images/slider-drone5.png" alt="Person wearing VR goggles interacting with a futuristic interface.">
                </div>
                
            </div>
            </div>


  <section id="uav-components" class="assembly-section">
    <div class="assembly-container">
      <div class="assembly-intro">
        <h2>The Components</h2>
        <p>Below is a discussion of each component and its role in the UAV system.</p>
      </div>

      <div class="assembly-grid">

        <!-- Drone Motor -->
        <div class="assembly-card">
          <img src="images/coreless.jpg" alt="Drone Motor">
          <h3>Drone Motor</h3>
          <p><strong>Drone Motor:</strong> A coreless micro drone motor producing enough power to lift a micro drone. It runs on 3.7V and can reach up to 10,000 RPM at full speed.</p>
        </div>

        <!-- Battery -->
        <div class="assembly-card">
          <img src="images/Battery.png" alt="Battery">
          <h3>Battery</h3>
          <p><strong>Battery:</strong> The power source that supplies energy to spin the motors and operate the drone’s sensors, ESP32 module, and USB controller.</p>
        </div>

        <!-- USB Controller -->
        <div class="assembly-card">
          <img src="images/usb controller.png" alt="USB Controller">
          <h3>USB Controller</h3>
          <p><strong>USB Controller:</strong> Connects the ESP32 to a computer, allowing you to upload the flight control program.</p>
        </div>

        <!-- USB Connector -->
        <div class="assembly-card">
          <img src="images/Usb cable.png" alt="USB Connector">
          <h3>USB Connector</h3>
          <p><strong>USB Connector:</strong> The physical interface for connecting the flight controller to the computer.</p>
        </div>

        <!-- Motor Driver -->
        <div class="assembly-card">
          <img src="images/Motor Driver.png" alt="Motor Driver">
          <h3>Motor Driver</h3>
          <p><strong>Motor Driver:</strong> The motor speed controller with four N-Channel MOSFETs controlled by the flight controller to regulate motor spin.</p>
        </div>

        <!-- ESP32 -->
        <div class="assembly-card">
          <img src="images/esp32components.png" alt="ESP32 Board">
          <h3>ESP32</h3>
          <p><strong>ESP32:</strong> A standalone microcontroller acting as the flight controller, featuring Wi-Fi for communication and signal control.</p>
        </div>

        <!-- ESP32 Chip -->
        <div class="assembly-card">
          <img src="images/Esp32 chip.png" alt="ESP32 Chip">
          <h3>ESP32 Chip</h3>
          <p><strong>ESP32 Chip:</strong> The processing unit that runs flight control algorithms, reading sensor data and updating motor speeds up to 600 times per second.</p>
        </div>

        <!-- ESP32 Development Board -->
        <div class="assembly-card">
          <img src="images/Esp32.jpg" alt="ESP32 Development Board">
          <h3>ESP32 Development Board</h3>
          <p><strong>ESP32 Development Board:</strong> A development version of the ESP32 with built-in Wi-Fi and Bluetooth for embedded systems.</p>
        </div>

        <!-- MPU6050 -->
        <div class="assembly-card">
          <img src="images/mpu6050 gyro.png" alt="MPU6050">
          <h3>MPU6050</h3>
          <p><strong>MPU6050:</strong> A 3-axis accelerometer and gyroscope with a Digital Motion Processor (DMP) for motion calculations sent to the controller.</p>
        </div>

        <!-- MS5611 -->
        <div class="assembly-card">
          <img src="images/m55611.png" alt="MS5611">
          <h3>MS5611</h3>
          <p><strong>MS5611:</strong> A high-precision pressure sensor and ADC that provides calibrated digital pressure and temperature readings.</p>
        </div>

      </div>
    </div>
  </section>
  <main>
    <section id="droneAssemblySection" class="drone-section">
      <div class="drone-container">
        <div class="drone-header">
          <h2>Drone Assembly Steps</h2>
          <p>Follow this procedure to install the modules correctly on the main board.</p>
        </div>

        <div class="drone-steps-grid">
          <!-- Step 1 -->
          <div class="drone-flip-card">
            <div class="drone-flip-inner">
              <div class="drone-front">
                <div class="drone-icon">⚙️</div>
                <h3>Step 1</h3>
                <h4>Attach Propellers</h4>
              </div>
              <div class="drone-back">
                <p>Attach the propellers to the drone motor shaft — two pairs of CCW and CW propellers.</p>
              </div>
            </div>
          </div>

          <!-- Step 2 -->
          <div class="drone-flip-card">
            <div class="drone-flip-inner">
              <div class="drone-front">
                <div class="drone-icon">🧩</div>
                <h3>Step 2</h3>
                <h4>Flight Controller</h4>
              </div>
              <div class="drone-back">
                <p><strong>ESP32</strong>, <strong>MS5611</strong>, <strong>MPU6050</strong>, and <strong>HMC5883L</strong> — assemble as per the next pages.</p>
              </div>
            </div>
          </div>

          <!-- Step 3 -->
          <div class="drone-flip-card">
            <div class="drone-flip-inner">
              <div class="drone-front">
                <div class="drone-icon">🔋</div>
                <h3>Step 3</h3>
                <h4>Battery</h4>
              </div>
              <div class="drone-back">
                <p>Mount the LiPo battery safely and attach it to the drone frame securely.</p>
              </div>
            </div>
          </div>

          <!-- Step 4 -->
          <div class="drone-flip-card">
            <div class="drone-flip-inner">
              <div class="drone-front">
                <div class="drone-icon">💻</div>
                <h3>Step 4</h3>
                <h4>Startup & Calibration</h4>
              </div>
              <div class="drone-back">
                <p>Follow the startup and calibration steps as per the guide for correct configuration.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
   <section class="droneTab-section">
    <div class="droneTab-container">
      <h2 class="droneTab-heading">Drone Assembly Process</h2>
      <p class="droneTab-subtext">
        Follow these four steps to correctly assemble the drone with proper frame setup, motors, sensors, and controller wiring.
      </p>

      <!-- Tab Buttons -->
      <div class="droneTab-buttons">
        <button class="droneTab-btn active" onclick="showDroneTab(1)">🧭 MPU6050</button>
        <button class="droneTab-btn" onclick="showDroneTab(2)">🌦 MS5611</button>
        <button class="droneTab-btn" onclick="showDroneTab(3)">🧲 HMC5883L</button>
        <button class="droneTab-btn" onclick="showDroneTab(4)">🔋 Battery</button>
      </div>

      <!-- Tab Contents -->
      <div id="droneTab1" class="droneTab-content active">
        <h3>Install the MPU6050</h3>
        <p> Follow this procedure to install the MPU6050 the position and the speed sensor that states the current state of the drone..</p>
        <img src="images/schematic1.png" alt="MPU6050 Installation" class="droneTab-image">
       
          <p>&#8594; Look for the X and Y marks on the MPU6050 specifying the orientation of the drone.</p>
          <p>&#8594; Place the sensor facing the X axis pointing opposite to the heading direction marked.</p>
          <p> &#8594;  Do not invert the sensor and place it’s component face upward.</p>
        
      </div>

      <div id="droneTab2" class="droneTab-content">
        <h3>Install the MS5611</h3>
        <p> Follow this procedure to install the MS5611 the atmospheric pressure of the current state of the drone.</p>
        <img src="images/schematic2.jpg" alt="MS5611 Installation" class="droneTab-image">
        
          <p>&#8594;Install the pressure sensor facing upright (the component side) as shown in the image.</p>
          <p> &#8594; This sensor is independent of the heading of the drone.</p>
        
      </div>

      <div id="droneTab3" class="droneTab-content">
        <h3>Install the HMC5883L</h3>
        <p> Follow this procedure to install the HMC5883Lthe magnetic direction of the current state of the drone.

</p>
        <img src="images/schematic3.png" alt="HMC5883L Installation" class="droneTab-image">
        
          <p>&#8594; Install the compass sensor facing upright (the component side).</p>
          <p>&#8594; Align the <strong>X and Y axes</strong> with the drone’s axes.</p>
          <p> &#8594; Position the compass X axis in the direction of the heading.</p>
        
      </div>

      <div id="droneTab4" class="droneTab-content">
        <h3>Install the Battery</h3>
        <p> Follow this procedure to install the battery on the drone body assembly..</p>
        <img src="images/schematic4.jpg" alt="Battery Installation" class="droneTab-image">
        
          <p> &#8594; Install the battery at the bottom of the drone.</p>
          <p> &#8594; Fix the battery to the drone body using a tie strap</p>
          <p>  &#8594; Connect the Battery terminals to the positive (+) and the negative (-) terminals of the Flight controller board.</p>
      
      </div>
    </div>
  </section>
  <section id="schematic" class="ani-section">
  <div class="ani-container">

    <div class="ani-head">
      <h2 class="ani-title">Schematic Diagram & Pinouts</h2>
      <p class="ani-sub">Animated display of wiring connections for better visual clarity.</p>
    </div>

    <div class="ani-card">
      <div class="ani-image-wrap">
        <img src="images/pinout1.png" alt="Animated wiring schematic" class="ani-image">
        <p class="ani-cap">Visual wiring overview for sensors, MPU6050, and drone ESC PWM lines.</p>
      </div>

      <div class="ani-points">
        <ul>
          <li><span class="ani-strong">Sensor data lines (I2C):</span> Connect MPU6050 as master with pressure & compass sensors as I2C slaves.</li>
          <li><span class="ani-strong">PWM signal lines:</span> Sends pulse-width signals from controller to drone motor ESC units.</li>
          <li><span class="ani-strong">Pull-up resistors (4.7kΩ):</span> Stabilize SDA & SCL I2C lines for accurate communication.</li>
        </ul>
      </div>

    </div>

  </div>
</section>
<section class="pinoutBox-section">
  <div class="pinoutBox-wrapper">
      
    <h2 class="pinoutBox-title">Component Pinouts</h2>

    <div class="pinoutBox-grid">

      <!-- MOTOR TABLE -->
      <div class="pinoutBox-card">
        <h3 class="pinoutBox-cardTitle">Motor Pins</h3>
        <table class="pinoutBox-table">
          <thead>
            <tr>
              <th>ESP32 Pin</th>
              <th>Motor</th>
              <th>Signal Type</th>
            </tr>
          </thead>
          <tbody>
            <tr><td>D04</td><td>1</td><td>PWM</td></tr>
            <tr><td>D33</td><td>2</td><td>PWM</td></tr>
            <tr><td>D32</td><td>3</td><td>PWM</td></tr>
            <tr><td>D25</td><td>4</td><td>PWM</td></tr>
          </tbody>
        </table>
      </div>

      <!-- MPU6050 TABLE -->
      <div class="pinoutBox-card">
        <h3 class="pinoutBox-cardTitle">MPU6050 - Gyro Sensor</h3>
        <table class="pinoutBox-table">
          <thead>
            <tr>
              <th>ESP32 Pin</th>
              <th>MPU6050</th>
              <th>Signal Type</th>
            </tr>
          </thead>
          <tbody>
            <tr><td>D22</td><td>SCL</td><td>I2C</td></tr>
            <tr><td>D21</td><td>SDA</td><td>I2C</td></tr>
            <tr><td>D14</td><td>INT</td><td>I2C</td></tr>
          </tbody>
        </table>
      </div>

      <!-- MS5611 TABLE -->
      <div class="pinoutBox-card">
        <h3 class="pinoutBox-cardTitle">MS5611 - Pressure Sensor</h3>
        <table class="pinoutBox-table">
          <thead>
            <tr>
              <th>ESP32 Pin</th>
              <th>Motor</th>
              <th>Signal Type</th>
            </tr>
          </thead>
          <tbody>
            <tr><td>D04</td><td>1</td><td>PWM</td></tr>
            <tr><td>D33</td><td>2</td><td>PWM</td></tr>
            <tr><td>D32</td><td>3</td><td>PWM</td></tr>
             <tr><td>D25</td><td>4</td><td>PWM</td></tr>
          </tbody>
        </table>
      </div>

      <!-- HMC5883L TABLE -->
      <div class="pinoutBox-card">
        <h3 class="pinoutBox-cardTitle">HMC5883L - Compass</h3>
        <table class="pinoutBox-table">
          <thead>
            <tr>
              <th>ESP32 Pin</th>
              <th>MPU6050</th>
              <th>Signal Type</th>
            </tr>
          </thead>
          <tbody>
            <tr><td>D22</td><td>SCL</td><td>I2C</td></tr>
            <tr><td>D21</td><td>SDA</td><td>I2C</td></tr>
            <tr><td>D14</td><td>INT</td><td>I2C</td></tr>
          </tbody>
        </table>
      </div>

    </div>
  </div>
</section>
<section class="installSteps-section">

  <h2 class="installSteps-title">ESP-Drone App Installation</h2>

  <div class="installSteps-container">

    <!-- Step 1 -->
    <div class="installBox">
      <div class="installHeader" onclick="openStep(this)">
        <h3>Step 1: Download Application</h3>
        <span class="arrow">&#9662;</span>
      </div>
      <div class="installContent">
        <p><strong>Get the software by clicking the Download APK button below.</strong></p>

        <!-- APK BUTTON -->
        <a href="file/base.apk" class="apkDownloadBtn" download>
          📥 Download APK
        </a>
      </div>
    </div>

    <!-- Step 2 -->
    <div class="installBox">
      <div class="installHeader" onclick="openStep(this)">
        <h3>Step 2: Install from APK</h3>
        <span class="arrow">&#9662;</span>
      </div>
      <div class="installContent">
        <p><strong>To install the APK, tap the file and run the application.</strong></p>
      </div>
    </div>

    <!-- Step 3 -->
    <div class="installBox">
      <div class="installHeader" onclick="openStep(this)">
        <h3>Step 3: Allow Permissions</h3>
        <span class="arrow">&#9662;</span>
      </div>
      <div class="installContent">
        <p><strong>Allow device permissions to use the Bluetooth and the Wi-Fi module
that is necessary for connecting devices to the application.</strong></p>
      </div>
    </div>

  </div>
</section>

<div class="module-wrap">
    <h2>🚀 Setting Up the ESP-Drone App</h2>

    <div class="axis-track">

        <!-- Block 1 -->
        <div class="node-unit">
            <div class="node-tag">1</div>
            <h3>Locate the App</h3>
            <p>The ESP-Drone app, once installed, is available to use. Find the app using the App icon.</p>
            <img src="images/esp drone.png" class="node-media">
        </div>

        <!-- Block 2 -->
        <div class="node-unit">
            <div class="node-tag">2</div>
            <h3>Open and Navigate</h3>
            <p>Tap the app and follow the navigation as instructed on screen.</p>
        </div>

        <!-- Block 3 -->
        <div class="node-unit">
            <div class="node-tag">3</div>
            <h3>Main Control Screen</h3>
            <p>The main application screen provides joystick and control options.</p>
            <img src="images/setup1.png" class="node-media">
        </div>

    </div>
</div>


<!-- SECOND SECTION -->
<div class="module-wrap">
    <h2>🚀 KNOW THE ESP-DRONE DASHBOARD</h2>

    <div class="axis-track">

        <div class="node-unit">
            <div class="node-tag">1</div>
            <h3>Dashboard</h3>
            <p>The dashboard has the controls for connecting and sending commands to the Drone.</p>
        </div>

        <div class="node-unit">
            <div class="node-tag">2</div>
            <h3>Setup the Flight Controls</h3>
            <p>Also, it has the options to setup the Flight Controls that defines the mode of operation (the joysticks), and the flight modes..</p>
            <img src="images/setup2.png" class="node-media">
        </div>

    </div>
</div>


<!-- THIRD SECTION -->
<div class="module-wrap">
    <h2>🚀 SETTING UP THE APP</h2>

    <div class="axis-track">

        <div class="node-unit">
            <div class="node-tag">1</div>
            <h3>Flight Control Modes</h3>
            <p>Tap the Settings icon in the screen to change the Flight control modes, and the configuration of the flight.</p>
            <img src="images/setup4.png" class="node-media">
        </div>

        <div class="node-unit">
            <div class="node-tag">2</div>
            <h3>setup the Flight Controls</h3>
            <p>vAlso, it has the options to setup the Flight Controls that defines the mode of operation (the joysticks), and the flight modes.</p>
            <img src="images/setup3.png" class="node-media">
        </div>

    </div>
</div>
<!-- THIRD SECTION -->
<div class="module-wrap">
    <h2>🚀 SETTING UP THE APP</h2>

    <div class="axis-track">

        <div class="node-unit">
            <div class="node-tag">1</div>
            <h3>Mode of the Joysticks</h3>
            <p>Select the Mode of the Joysticks, tap Mode option to select the type of Control stick.

</p>
            <img src="images/setup5.png" class="node-media">
        </div>

        <div class="node-unit">
            <div class="node-tag">2</div>
            <h3>Select the Modes</h3>
            <p>Select the Mode 2 from the list which specifies the control stick, and this defines the stick values as,</p>
            <ul>
            <li>Left Joystick - Thrust and Yaw</li>
            <li>Right Joystick - Pitch and Roll</li>
            </ul>
            <img src="images/setup6.png" class="node-media">
        </div>

    </div>
</div>
<!-- THIRD SECTION -->
<div class="module-wrap">
    <h2>🚀 SETTING UP THE APP</h2>

    <div class="axis-track">

        <div class="node-unit">
            <div class="node-tag">1</div>
            <h3>Mode of the Joysticks</h3>
            <p>Select the Mode of the Joysticks, tap Mode option to select the type of Control stick.

</p>
            <img src="images/setup7.png" class="node-media">
        </div>

        <div class="node-unit">
            <div class="node-tag">2</div>
            <h3>Select the Fly mode</h3>
            <p>Select the Fly mode from X mode, by selecting the Client mode check box it enables the</p>
            
            <img src="images/setup8.png" class="node-media">
        </div>

    </div>
</div>


  <script>
    function showDroneTab(tabNumber) {
      const contents = document.querySelectorAll('.droneTab-content');
      const buttons = document.querySelectorAll('.droneTab-btn');

      contents.forEach((content, index) => {
        content.classList.remove('active');
        buttons[index].classList.remove('active');
      });

      document.getElementById(`droneTab${tabNumber}`).classList.add('active');
      buttons[tabNumber - 1].classList.add('active');
    }
  </script>
  <script>
function openStep(element) {
  let content = element.nextElementSibling;
  let arrow = element.querySelector(".arrow");

  if (content.style.maxHeight) {
      content.style.maxHeight = null;
      arrow.classList.remove("rotate");
  } else {
      document.querySelectorAll(".installContent").forEach(c => c.style.maxHeight = null);
      document.querySelectorAll(".arrow").forEach(a => a.classList.remove("rotate"));

      content.style.maxHeight = content.scrollHeight + "px";
      arrow.classList.add("rotate");
  }
}
</script>

        

<?php include "footer.php"; ?>