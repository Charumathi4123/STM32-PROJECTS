<?php include "header.php";?>
<div class="slider-container">
        <div class="slider-track">
            <!-- Slide 1: Using an <img> tag now -->
            <div class="slide">
                <img src="slider-images/slider1.jpg" alt="Person wearing VR goggles interacting with a futuristic interface.">
                <div class="slide-content">
                    <h1 class="slide-title">Learn about BNSS IoT KIT</h1>
                    <p class="slide-description">The BNSS IoT KIT simplifies IoT project development with sensors, actuators, and connectivity modules. Its user-friendly plug-and-play interface integrates easily with IoT platforms and cloud services. You can learn the mechanism of many IoT applications and build hundreds of projects using this kit, such as smart home, industrial monitoring, disaster management applications, etc.</p>
                </div>
            </div>
            <!-- Slide 2: Using an <img> tag now -->
            <div class="slide">
                <img src="diy-v2 images/slider-iot.jpg" alt="A colorful abstract background representing technology.">
                <div class="slide-content">
                    
                    <p class="slide-description"></p>
                </div>
            </div>
            <!-- Slide 3: Using an <img> tag now -->
            <div class="slide">
                <img src="slider-images/slider3.png" alt="Person wearing VR goggles in a dark room.">
                <div class="slide-content">
                    
                </div>
            </div>
        </div>

        <!-- Navigation Arrows -->
        <div class="slider-arrow arrow-prev" id="prevBtn"></div>
        <div class="slider-arrow arrow-next" id="nextBtn"></div>

        <!-- Pagination Dots -->
        <div class="pagination-dots" id="paginationDots"></div>
    </div>
       

        <section class="iot-kit-section">
        <div class="intro-container">

            <!-- Left Column: The Image -->
            <div class="image-column">
                <!-- IMPORTANT: Replace "path/to/your-image.jpg" with the actual path to your image file -->
                <img src="images/bnss-version2.jpeg" alt="BNSS IoT Kit in a wooden case with multiple electronic modules">
            </div>

            <!-- Right Column: The Text Content -->
            <div class="text-column">
                <p class="sub-heading">INTRODUCTION</p>
                <h1 class="main-heading">Learn about BNSS<br>IoT KIT Version 2 </h1>
                <p class="description">
                         The BNSS IoT Trainer Kit (Version 2) is a comprehensive educational and development platform that integrates a variety of sensors,   actuators, and connectivity modules into a single compact unit. It is designed to simplify IoT project development by offering a plug and-play interface, which allows learners to design, implement, and test IoT solutions without the need for complex wiring or advanced programming expertise.
                </p>
            </div>

        </div>
    </section>




        <div class="guidelines-container">
            <h2 class="intro-text">When using our IoT Trainer kit, here are some dos and don'ts to keep in mind:</h2>
            <div class="boxes-wrapper">
                <div class="info-box dos">
                    <h2>Do's:</h2>
                    <ul>
                        <li>Read the instruction manual carefully before starting.</li>
                        <li>Securely connect components according to the provided guidelines.</li>
                        <li>Test each component individually to ensure they function correctly.</li>
                        <li>Handle and use the kit with proper care.</li>
                        <li>Always connect the circuit when the kit is disconnected from power.</li>
                        <li>Check the pins and their order on the board before connecting.</li>
                        <li>Only plug the required components for project and unplug the unnecesscary components.</li>
                        <li>always plug the components in its specified position on the board.</li>
                        <li>Make sure the connections are made properly. </li>

                    </ul>
                </div>
                <div class="info-box donts">
                    <h2>Don'ts:</h2>
                    <ul>
                        <li>Don't force connections or components together - make sure they are properly aligned.</li>
                        <li>Don't expose the kit to direct sunlight or high humidity levels.</li>
                        <li>Don't neglect to implement security measures such as changing default passwords.</li>
                        <li>Don't leave the kit unattended while running complex processes.</li>
                    </ul>
                </div>
            </div>
            <p class="final-warning">⚠️ Don't ignore any warning signs or unusual behavior – troubleshoot immediately.</p>
        </div>
    </div>
    <div class="instructions-container">
    <h2 class="main-title">General Instructions For Doing Projects</h2>
    <div class="title-separator">
        <span class="separator-icon">✪</span>
    </div>

    <div class="instructions-grid">
        <!-- First Row -->
        <div class="grid-row">
            <div class="instruction-box box-green">
                <h3>Unbox and Assemble</h3>
                <ul>
                    <li>Carefully unpack your BNSS IoT kit. Identify the components, including sensors, actuators, and a microcontroller or development board.</li>
                    <li>Assemble the kit according to the provided instructions or diagrams.</li>
                </ul>
            </div>
            <div class="instruction-box box-orange">
                <h3>Set Up the Development Environment</h3>
                <ul>
                    <li>Install necessary software, Arduino IDE, on your computer.</li>
                    <li>Download and install any required libraries or frameworks.</li>
                    <li> install necessary software ,Rasperry pi imager on your computer </li>
                </ul>
            </div>
            <div class="instruction-box box-purple">
                <h3>Write Code</h3>
                <ul>
                    <li>Use your preferred programming language to write code that interacts with the sensors and actuators.</li>
                    <li>This code might involve collecting data from sensors, processing it, and controlling actuators.</li>
                </ul>
            </div>
        </div>

        <!-- Second Row -->
        <div class="grid-row">
            <div class="instruction-box box-blue">
                <h3>Upload Code to the Device</h3>
                <ul>
                    <li>Connect your microcontroller or development board to your computer.</li>
                    <li>Use the appropriate tools (e.g., Arduino IDE, command-line interface) to upload your code to the device.</li>
                </ul>
            </div>
            <div class="instruction-box box-grey">
                <h3>Test and Debug</h3>
                <ul>
                    <li>Verify that the code is working as expected.</li>
                    <li>Test the sensors and actuators to ensure they are responding correctly.</li>
                    <li>Debug any issues that arise.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<section class="components-section">
  <h2 class="section-title">Components & Their Functions</h2>
  <div class="components-grid">
    <!-- Card 1: Push buttons -->
    <div class="component-card">
  <div class="card-image-wrapper">
    <img src="images/Arduino_nano.jpg" alt="Push Button component">
  </div>
  <div class="card-content">
    <h3 class="card-title">Arduino Nano</h3>
    <p class="card-description">
      <span class="initial-text">The Arduino Nano is a compact microcontroller board based on the ATmega328P. It is designed for beginners  </span>
      <span class="more-text"> and hobbyists to easily build IoT and robotics projects. The board reads sensor inputs, processes data, and controls outputs such as LEDs, motors, and displays. It also supports PWM for speed and brightness control, and multiple communication protocols such as UART, I2C, and SPI, making it versatile for embedded system development.</span>
    </p>
    <button class="toggle-btn">Read More</button>
  </div>
</div>

    <!-- Card 2: LED -->
     <div class="component-card">
  <div class="card-image-wrapper">
    <img src="images/ESp32_38.jpg" alt="ESP32 Devkit (38 pins)">
  </div>
  <div class="card-content">
    <h3 class="card-title">ESP32 Devkit (38 pins)</h3>
    <p class="card-description">
      <span class="initial-text">The ESP32 Devkit is a powerful dual-core microcontroller with built-in Wi-Fi and Bluetooth capabilities.With its wide range    </span>
      <span class="more-text">of digital and analog pins, it can interface with multiple sensors and actuators simultaneously. It also handles cloud connectivity, real-time data monitoring, and logging, which makes it ideal for smart agriculture, home automation, and industrial IoT applications.</span>
    </p>
    <button class="toggle-btn">Read More</button>
  </div>
</div>
    <!-- Card 3: Relays -->
    <div class="component-card">
  <div class="card-image-wrapper">
    <img src="images/Rasperry_images.jpg" alt="Raspberry Pi Zero 2 W">
  </div>
  <div class="card-content">
    <h3 class="card-title">Raspberry Pi Zero 2 W</h3>
    <p class="card-description">
      <span class="initial-text">The Raspberry Pi Zero 2 W is a compact yet powerful single-board computer designed by Raspberry Pi in the UK. </span>
      <span class="more-text">It features a quad-core 64-bit ARM Cortex-A53 processor clocked at 1GHz and 512MB of LPDDR2 SDRAM, delivering up to five times the performance of the original Pi Zero.
Its tiny 65mm by 30mm form factor makes it ideal for embedded projects, IoT devices, and smart home applications whilst maintaining remarkable computational capabilities.
</span>
    </p>
    <button class="toggle-btn">Read More</button>
  </div>
</div>

    <!-- Card 4: Jumper wires -->
     <div class="component-card">
  <div class="card-image-wrapper">
    <img src="images/Waveshare.jpg" alt="Waveshare 3.5-inch Raspberry Pi Touchscreen">
  </div>
  <div class="card-content">
    <h3 class="card-title">Waveshare 3.5-inch Raspberry Pi Touchscreen</h3>
    <p class="card-description">
      <span class="initial-text">The Waveshare 3.5-inch touchscreen is a compact, interactive HMI for Raspberry Pi projects. It plugs directly into the </span>
      <span class="more-text"> GPIO header for power and data, eliminating external cables. Offering both a visual display and touch input, it's ideal for building portable, self-contained systems. This lets users create dedicated devices like retro consoles or home automation controllers.</span>
    </p>
    <button class="toggle-btn">Read More</button>
  </div>
</div>
    <!-- Card 5: Arduino -->
     <div class="component-card">
  <div class="card-image-wrapper">
    <img src="images/oled-display.jpg" alt="OLED Display">
  </div>
  <div class="card-content">
    <h3 class="card-title">OLED Display</h3>
    <p class="card-description">
      <span class="initial-text">An OLED (Organic Light Emitting Diode) display consists of pixels that emit their own light, which makes them bright,  </span>
      <span class="more-text"> sharp, and energy-efficient.  These displays are commonly used in IoT projects to visualize real-time data such as sensor readings or system status, even in low-light conditions.

</span>
    </p>
    <button class="toggle-btn">Read More</button>
  </div>
</div>
    <!-- Card 6: Arduino -->
    <div class="component-card">
  <div class="card-image-wrapper">
    <img src="images/heart-pulse.jpg" alt="Heart Pulse Sensor">
  </div>
  <div class="card-content">
    <h3 class="card-title">Heart Pulse Sensor</h3>
    <p class="card-description">
      <span class="initial-text">The heart pulse sensor measures the heart rate by detecting blood volume changes using an optical method.   </span>
      <span class="more-text"> It outputs beats per minute (BPM) data, which is useful in healthcare monitoring systems, fitness tracking devices, and biomedical applications.</span>
    </p>
    <button class="toggle-btn">Read More</button>
  </div>
</div>
    <!-- Card 7: Ultrasonic sensor-->
    <div class="component-card">
  <div class="card-image-wrapper">
    <img src="images/ultrasonic-sensor.jpg" alt="Ultrasonic Sensor component">
  </div>
  <div class="card-content">
    <h3 class="card-title">Ultrasonic Sensor</h3>
    <p class="card-description">
      <span class="initial-text">An ultrasonic sensor works by emitting high-frequency sound waves and measuring the time taken for the echo to  </span>
      <span class="more-text">  return after hitting an object .This enables accurate distance measurement in various conditions such as darkness, mist, or dust. It is widely used in obstacle avoidance robots, parking systems, and liquid-level detection.</span>
    </p>
    <button class="toggle-btn">Read More</button>
  </div>
</div>
    <!-- Card 8: Buzzer-->
    <div class="component-card">
  <div class="card-image-wrapper">
    <img src="images/Buzzer.jpg" alt="Buzzer component">
  </div>
  <div class="card-content">
    <h3 class="card-title">Buzzer</h3>
    <p class="card-description">
      <span class="initial-text">A buzzer is an electronic device that converts electrical signals into sound. It is generally used   </span>
      <span class="more-text">to provide alerts, alarms, or notifications in automation systems. Applications include burglar alarms, input confirmations, and warning indicators.</span>
    </p>
    <button class="toggle-btn">Read More</button>
  </div>
</div>
    <!-- Card 9: 7 segment display-->
   <div class="component-card">
  <div class="card-image-wrapper">
    <img src="images/sevensegment-display.jpg" alt="4-Digit Seven Segment Display">
  </div>
  <div class="card-content">
    <h3 class="card-title">4-Digit Seven Segment Display</h3>
    <p class="card-description">
      <span class="initial-text">A 4-digit seven-segment display is an electronic display device made up of four individual seven-segment digits, each    </span>
      <span class="more-text"> capable of showing numbers from 0 to 9.By controlling which segments light up, it can display numerical values such as time, count, or measurements. It is commonly used in digital clocks, calculators, counters, and electronic meters to show multi-digit readings clearly.</span>
    </p>
    <button class="toggle-btn">Read More</button>
  </div>
</div>
    <!-- Card 9: gas sensor -->
    <div class="component-card">
  <div class="card-image-wrapper">
    <img src="images/Rfid-module.jpg" alt="RFID Module">
  </div>
  <div class="card-content">
    <h3 class="card-title">RFID Module</h3>
    <p class="card-description">
      <span class="initial-text">The RFID (Radio Frequency Identification) module communicates with RFID tags using  radio waves.    </span>
      <span class="more-text">  It reads unique tag information without direct contact, which makes it useful for applications such as access control, attendance systems, inventory management, and asset tracking.</span>
    </p>
    <button class="toggle-btn">Read More</button>
  </div>
</div>
    <!-- Card 10: IR sensor -->
     <div class="component-card">
  <div class="card-image-wrapper">
    <img src="images/IR-sensor.jpg" alt="IR Sensor component">
  </div>
  <div class="card-content">
    <h3 class="card-title">IR Sensor</h3>
    <p class="card-description">
      <span class="initial-text">An IR (Infrared) sensor detects reflected or emitted infrared light to identify objects or    </span>
      <span class="more-text"> measure proximity. It is commonly used in obstacle detection, automatic lighting, and line-following robots.</span>
    </p>
    <button class="toggle-btn">Read More</button>
  </div>
</div>
    <!-- Card 10: LDR sensor -->
    <div class="component-card">
  <div class="card-image-wrapper">
    <img src="images/servo-motor.jpg" alt="Servo Motor">
  </div>
  <div class="card-content">
    <h3 class="card-title">Servo Motor</h3>
    <p class="card-description">
      <span class="initial-text">A servo motor is designed to provide precise angular control, typically between 0° and 180°.  </span>
      <span class="more-text"> It is controlled by PWM signals and is widely used in robotics projects such as robotic arms, camera positioning systems, and drones, where accurate movement is required. </span>
    </p>
    <button class="toggle-btn">Read More</button>
  </div>
</div>
    <!-- Card 10: PIR sensor -->
    <div class="component-card">
  <div class="card-image-wrapper">
    <img src="images/Ldr-sensor.jpg" alt="LDR sensor component">
  </div>
  <div class="card-content">
    <h3 class="card-title">LDR sensor</h3>
    <p class="card-description">
      <span class="initial-text">The LDR sensor (Light Dependent Resistor) is a light-sensitive device whose resistance changes according    </span>
      <span class="more-text"> to the intensity of light falling on it. When the light intensity increases, its resistance decreases, and when the light intensity decreases, its resistance increases. This property makes it useful for detecting brightness and darkness levels. LDRs are commonly used in automatic lighting systems, streetlights, and light-sensitive alarms. Functions. </span>
    </p>
    <button class="toggle-btn">Read More</button>
  </div>
</div>
    <!-- Card 10: Keypad -->
   <div class="component-card">
  <div class="card-image-wrapper">
    <img src="images/Pir-sensor.jpg" alt="PIR Sensor">
  </div>
  <div class="card-content">
    <h3 class="card-title">PIR Sensor</h3>
    <p class="card-description">
      <span class="initial-text">A PIR (Passive Infrared) sensor detects motion by sensing the infrared radiation emitted by     </span>
      <span class="more-text"> living beings. It is mainly used in automatic lighting systems, security alarms, and intrusion detection applications. </span>
    </p>
    <button class="toggle-btn">Read More</button>
  </div>
</div>
    <!-- Card 10: LCD Display -->
    <div class="component-card">
  <div class="card-image-wrapper">
    <img src="images/gas-sensor.jpg" alt="Gas Sensor">
  </div>
  <div class="card-content">
    <h3 class="card-title">Gas Sensor</h3>
    <p class="card-description">
      <span class="initial-text">A gas sensor detects the presence and concentration of gases in the environment by changing     </span>
      <span class="more-text">its electrical resistance when exposed. It is capable of detecting harmful gases such as methane, carbon monoxide, and LPG, making it essential for safety and industrial monitoring applications. </span>
    </p>
    <button class="toggle-btn">Read More</button>
  </div>
</div>
    <!-- Card 10: OLED Display -->
     <div class="component-card">
  <div class="card-image-wrapper">
    <img src="images/flame-sensor.jpg" alt="Flame Sensor">
  </div>
  <div class="card-content">
    <h3 class="card-title">Flame Sensor</h3>
    <p class="card-description">
      <span class="initial-text">A flame sensor detects the infrared radiation emitted by fire or flames. It is mainly used in     </span>
      <span class="more-text">fire alarm systems, firefighting robots, and safety monitoring devices to provide early warning of fire hazards. </span>
    </p>
    <button class="toggle-btn">Read More</button>
  </div>
</div>
       <!-- Card 10: Humidity Sensor -->
     <div class="component-card">
  <div class="card-image-wrapper">
    <img src="images/humidity-sensor.jpg" alt="Humidity Sensor component">
  </div>
  <div class="card-content">
    <h3 class="card-title">Humidity Sensor</h3>
    <p class="card-description">
      <span class="initial-text">A humidity sensor measures the amount of moisture present in the air. It is widely used in    </span>
      <span class="more-text"> smart homes, agriculture, and climate control systems where maintaining suitable humidity levels is important for comfort, safety, and equipment performance. </span>
    </p>
    <button class="toggle-btn">Read More</button>
  </div>
</div>
    <!-- Card 10: Servo motor -->
    <div class="component-card">
  <div class="card-image-wrapper">
    <img src="images/soil moisture-sensor.jpg" alt="Soil Moisture Sensor">
  </div>
  <div class="card-content">
    <h3 class="card-title">Soil Moisture Sensor</h3>
    <p class="card-description">
      <span class="initial-text">A soil moisture sensor measures the water content in soil to determine whether it is wet or    </span>
      <span class="more-text"> dry. This information is critical in smart agriculture and irrigation systems to optimize water usage and ensure healthy plant growth. </span>
    </p>
    <button class="toggle-btn">Read More</button>
  </div>
</div>
 <!-- Card 10: Bluetooth -->
    <div class="component-card">
  <div class="card-image-wrapper">
    <img src="images/mpu6050-sensor.jpg" alt="MPU6050 (Gyroscope and Accelerometer)">
  </div>
  <div class="card-content">
    <h3 class="card-title">MPU6050 (Gyroscope and Accelerometer)</h3>
    <p class="card-description">
      <span class="initial-text">The MPU6050 is a six-axis motion tracking device that combines a 3-axis accelerometer and     </span>
      <span class="more-text"> a 3-axis gyroscope. It measures orientation, tilt, and rotational motion, which makes it useful in robotics, drones, and gaming devices. </span>
    </p>
    <button class="toggle-btn">Read More</button>
  </div>
</div>
    <!-- Card 10: Dot Matrix Display-->
     <div class="component-card">
  <div class="card-image-wrapper">
    <img src="images/Bluetooth-module.jpg" alt="Bluetooth Module (HC-05)">
  </div>
  <div class="card-content">
    <h3 class="card-title">Bluetooth Module (HC-05)</h3>
    <p class="card-description">
      <span class="initial-text">The HC-05 Bluetooth module enables short-range wireless communication between      </span>
      <span class="more-text"> microcontrollers and devices. It is commonly used for wireless data transfer, remote control, and IoT-based automation projects. </span>
    </p>
    <button class="toggle-btn">Read More</button>
  </div>
</div>
      <!-- Card 10: RFID Module-->
     <div class="component-card">
  <div class="card-image-wrapper">
    <img src="images/keypad.jpg" alt="Keypad (4×4 Matrix)">
  </div>
  <div class="card-content">
    <h3 class="card-title">Keypad (4×4 Matrix)</h3>
    <p class="card-description">
      <span class="initial-text">A 4×4 matrix keypad is an input device consisting of 16 keys arranged in rows and columns.     </span>
      <span class="more-text">It detects pressed keys and sends signals to the microcontroller. It is mainly used for applications like password entry, calculators, and menu navigation in embedded systems. </span>
    </p>
    <button class="toggle-btn">Read More</button>
  </div>
</div>
    <!-- Card 10: RFID Module-->
     <div class="component-card">
  <div class="card-image-wrapper">
    <img src="images/Relay white.jpg" alt="Relay">
  </div>
  <div class="card-content">
    <h3 class="card-title">Relay</h3>
    <p class="card-description">
      <span class="initial-text">A relay is an electrically operated switch that allows low-voltage microcontrollers to control high-voltage devices     </span>
      <span class="more-text"> such as motors, pumps, and lights. It provides electrical isolation for safety, ensuring that sensitive circuits are not exposed to dangerous voltages. Relays are therefore widely used in automation and protection systems. </span>
    </p>
    <button class="toggle-btn">Read More</button>
  </div>
</div>
    <!-- Card 10: RFID Module-->
    <div class="component-card">
  <div class="card-image-wrapper">
    <img src="images/breadboard2.jpg" alt="Breadboard">
  </div>
  <div class="card-content">
    <h3 class="card-title">Sensor Extensions (Breadboard)</h3>
    <p class="card-description">
      <span class="initial-text">This breadbpard can be used to connect extra sensors to the circuit for projects.  A breadboard is a reusable platform for      </span>
      <span class="more-text">building circuits without soldering. It allows quick  prototyping and testing by inserting components and jumper wires into its interconnected slots. This makes it essential for learning, experimentation, and circuit design at the college level. </span>
    </p>
    <button class="toggle-btn">Read More</button>
  </div>
</div>
    <!-- Card 10: RFID Module-->
    <div class="component-card">
  <div class="card-image-wrapper">
    <img src="images/sx1278_lora_module_05.jpg" alt=" LoRa SX1278">
  </div>
  <div class="card-content">
    <h3 class="card-title">. LoRa SX1278</h3>
    <p class="card-description">
      <span class="initial-text">The LoRa SX1278 is a long-range, low-power transceiver that uses LoRa modulation technology.      </span>
      <span class="more-text">It enables wireless communication over distances up to 10–15 km with minimal power consumption. It is suitable for smart agriculture, remote monitoring, and IoT networks. </span>
    </p>
    <button class="toggle-btn">Read More</button>
  </div>
</div>
    <!-- Card 10: RFID Module-->
    <div class="component-card">
  <div class="card-image-wrapper">
    <img src="images/gps module.jpg" alt="GPS Module">
  </div>
  <div class="card-content">
    <h3 class="card-title">GPS Module </h3>
    <p class="card-description">
      <span class="initial-text">A GPS module determines precise geographic location by receiving signals from satellites. It is widely used in navigation systems      </span>
      <span class="more-text"> , fleet tracking, precision agriculture, and emergency services due to its ability to provide accurate coordinates and timing. </span>
    </p>
    <button class="toggle-btn">Read More</button>
  </div>
</div>
    <!-- Card 10: RFID Module-->
    <div class="component-card">
  <div class="card-image-wrapper">
    <img src="images/BMP280-Pinout.jpg" alt="BMP280">
  </div>
  <div class="card-content">
    <h3 class="card-title">BMP280 </h3>
    <p class="card-description">
      <span class="initial-text">The BMP280 is a sensor that measures atmospheric pressure and temperature. Since pressure varies with altitude,        </span>
      <span class="more-text">, it can also be used to estimate height. It is commonly applied in weather stations, drones, and environmental monitoring devices. </span>
    </p>
    <button class="toggle-btn">Read More</button>
  </div>
</div>
    <!-- Card 10: RFID Module-->
   <div class="component-card">
  <div class="card-image-wrapper">
    <img src="images/RTC.jpg" alt="RTC (Real-Time Clock)">
  </div>
  <div class="card-content">
    <h3 class="card-title">RTC (Real-Time Clock)</h3>
    <p class="card-description">
      <span class="initial-text">An RTC module keeps track of accurate time and date even when the main device is powered        </span>
      <span class="more-text">off, thanks to its small backup battery. It is used in digital clocks, data logging systems, and scheduling applications. </span>
    </p>
    <button class="toggle-btn">Read More</button>
  </div>
</div>
    <!-- Card 10: RFID Module-->
   <div class="component-card">
  <div class="card-image-wrapper">
    <img src="images/RGB.jpg" alt="RGB LED">
  </div>
  <div class="card-content">
    <h3 class="card-title">RGB LED</h3>
    <p class="card-description">
      <span class="initial-text">An RGB LED combines red, green, and blue diodes in one package, and by varying their intensities,        </span>
      <span class="more-text">it can produce a wide spectrum of colors. These LEDs are often used in decorative lighting, display systems, and visual indicators. </span>
    </p>
    <button class="toggle-btn">Read More</button>
  </div>
</div>
    <!-- Card 10:BMP 180 sensor-->
     <div class="component-card">
  <div class="card-image-wrapper">
    <img src="images/wifi-module.jpg" alt="Wi-Fi Module">
  </div>
  <div class="card-content">
    <h3 class="card-title">Wi-Fi Module</h3>
    <p class="card-description">
      <span class="initial-text">The ESP-01 is a small Wi-Fi module based on the ESP8266 chip. It can connect to existing      </span>
      <span class="more-text"> wireless networks or act as a hotspot. This makes it suitable for IoT applications where devices need to communicate with the internet for data storage, processing, and monitoring. </span>
    </p>
    <button class="toggle-btn">Read More</button>
  </div>
</div>
    <!-- Card 10:BMP 180 sensor-->
    <div class="component-card">
  <div class="card-image-wrapper">
    <img src="images/kit-version2.jpeg" alt="Plug and Play Circuit Board">
  </div>
  <div class="card-content">
    <h3 class="card-title">Plug and Play Circuit Board</h3>
    <p class="card-description">
      <span class="initial-text">A plug-and-play circuit board simplifies electronic project building by.         </span>
      <span class="more-text"> enabling easy connections of modules and sensors without complex wiring or soldering Its modular design allows for simple component swapping, enhancing functionality and troubleshooting. </span>
    </p>
    <button class="toggle-btn">Read More</button>
  </div>
</div>

</section>

   
     <script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggleButtons = document.querySelectorAll('.toggle-btn');
        toggleButtons.forEach(button => {
            button.addEventListener('click', () => {
                const description = button.previousElementSibling;
                if (description && description.classList.contains('card-description')) {
                    description.classList.toggle('expanded');
                    if (description.classList.contains('expanded')) {
                        button.textContent = 'Read Less';
                    } else {
                        button.textContent = 'Read More';
                    }
                }
            });
        });
    });
  
</script>
<script>
        document.addEventListener('DOMContentLoaded', function () {
            const sliderTrack = document.querySelector('.slider-track');
            if (!sliderTrack) return; // Exit if slider isn't on the page
            const slides = Array.from(sliderTrack.children);
            const nextButton = document.getElementById('nextBtn');
            const prevButton = document.getElementById('prevBtn');
            const dotsNav = document.getElementById('paginationDots');
            
            if (slides.length === 0) return; // Exit if no slides

            const slideWidth = slides[0].getBoundingClientRect().width;

            let currentIndex = 0;
            let autoSlideInterval;

            // Create pagination dots
            slides.forEach((_, index) => {
                const dot = document.createElement('button');
                dot.classList.add('dot');
                if (index === 0) dot.classList.add('active');
                dot.addEventListener('click', () => {
                    moveToSlide(index);
                    resetAutoSlide();
                });
                dotsNav.appendChild(dot);
            });

            const dots = Array.from(dotsNav.children);

            const moveToSlide = (targetIndex) => {
                const newSlideWidth = slides[0].getBoundingClientRect().width;
                sliderTrack.style.transform = 'translateX(-' + newSlideWidth * targetIndex + 'px)';
                
                // Update active dot
                dots.forEach(dot => dot.classList.remove('active'));
                dots[targetIndex].classList.add('active');

                // Update content animation
                slides.forEach(slide => slide.querySelector('.slide-content').style.animation = 'none');
                slides[targetIndex].querySelector('.slide-content').style.animation = '';

                currentIndex = targetIndex;
            };

            const startAutoSlide = () => {
                autoSlideInterval = setInterval(() => {
                    let nextIndex = (currentIndex + 1) % slides.length;
                    moveToSlide(nextIndex);
                }, 5000); // Change slide every 5 seconds
            };

            const resetAutoSlide = () => {
                clearInterval(autoSlideInterval);
                startAutoSlide();
            };

            // Arrow button event listeners
            nextButton.addEventListener('click', () => {
                let nextIndex = (currentIndex + 1) % slides.length;
                moveToSlide(nextIndex);
                resetAutoSlide();
            });

            prevButton.addEventListener('click', () => {
                let prevIndex = (currentIndex - 1 + slides.length) % slides.length;
                moveToSlide(prevIndex);
                resetAutoSlide();
            });

            // Adjust on window resize
            window.addEventListener('resize', () => {
                const newSlideWidth = slides[0].getBoundingClientRect().width;
                sliderTrack.style.transition = 'none'; // Disable transition during resize
                moveToSlide(currentIndex); // Recalculate position
                setTimeout(() => {
                    sliderTrack.style.transition = 'transform 0.6s ease-in-out';
                }, 50);
            });
            
            // Initial call to start the automatic sliding
            startAutoSlide();
        });
    </script>
    <?php include "footer.php"; ?>