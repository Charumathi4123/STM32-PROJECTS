<?php include "header.php";?>
<div class="slider-container">
        <div class="slider-track">
            <!-- Slide 1: Using an <img> tag now -->
            <div class="slide">
                <img src="slider-images/slider22.png" alt="Person wearing VR goggles interacting with a futuristic interface.">
                </div>
                
            </div>
            </div>

 <h1 class="page-title">ARDUINO NANO WITH SERVO MOTOR</h1>
  </header>

  <main class="project-section">
    <!-- <h2 class="project-heading">📺 Build Your Own Android TV</h2> -->
    
    <h4 class="info-title">OBJECTIVE</h4>

    <p class="project-description">
Design and implement a system with an Arduino Nano to control a servo motor, rotating to specific angles like 90 or 180 degrees based on user input or sensor data.
    </p>

    

    <h4 class="info-title">MODULES REQUIRED</h4>
    <ul class="info-list">
      <li>Arduino NANO</li>
      <li>Servo Motor</li>
      <li>Jumper wire</li> 
      
     
    </ul>

    <h4 class="info-title">SCHEMATIC DIAGRAM</h4>
     <img src="images/schmatic15.png" alt="Push Button component">
     
    <h4 class="info-title">SCHEMATIC CONNECTION</h4>
   
    <ul class="info-list">
        <h6>Connect Servo Motor:</h6>  
      <li>VCC pin (red) to Arduino Nano 5V.</li>
      <li>GND pin (brown) to Arduino Nano GND.</li>
      
      <li>Common pin (yellow) to Arduino Nano D2.</li>
    </ul>
   <h4 class="info-title">Arduino Code</h4>
  <div class="code-container">
    <div class="code-header">
      <span class="code-title">Arduino Code</span>
      <button class="copy-btn" onclick="copyCode()">📋 Copy</button>
    </div>

    <pre><code id="arduino-code">
#include (Servo.h)
Servo servo_pin_2;
void setup(){
servo_pin_2.attach(2,530,2600);
}
void loop(){
servo_pin_2.write( 0 );
delay( 2000 );
servo_pin_2.write( 90 );
delay( 2000 );
servo_pin_2.write( 0 );
delay( 2000 );
servo_pin_2.write( 90 );
delay( 1000 );
}
 </code></pre>
  </div>
  <h4 class="info-title">INSTRUCTIONS</h4>
    <ul class="info-list">
      <li>Connect the modules and components as per the schematic diagram.</li>
      <li>Upload the Arduino code into the Arduino board.</li>
     
      <li>Control a servo motor using an Arduino Nano to rotate to specific angles (e.g., 90° or 180°) based on programmed instructions.</li>
    </ul>
      <h4 class="info-title">WORKING</h4>
    <ul class="info-list"> 
      <li>Arduino Nano controls a servo motor to rotate to specific angles (e.g., 90° or 180°) by sending PWM signals via a programmed digital pin.</li> 
      </u1>
     
      
      
      
    </ul>
 <h4 class="info-title">ARDUINO NANO WITH SERVO MOTOR</h4>
<ul class="info-list"></ul>

<section class="video-section">
  <div class="container">
    <div class="video-wrapper">
      <video id="irVideo" controls preload="none" poster="images/ir-thumbnail.jpg">
        <source src="videos/Project-15-Arduino-Nano-with-Servo-Motor-VEED.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </div>
  </div>
</section>


  <script>
    function copyCode() {
      const code = document.getElementById("arduino-code").innerText;
      navigator.clipboard.writeText(code);
      alert("Code copied to clipboard!");
    }
  </script>
  </main>
 

 <?php include "footer.php"; ?>