<?php include "header.php";?>
<div class="slider-container">
        <div class="slider-track">
            <!-- Slide 1: Using an <img> tag now -->
            <div class="slide">
                <img src="slider-images/slider21.png" alt="Person wearing VR goggles interacting with a futuristic interface.">
                </div>
                
            </div>
            </div>

 <h1 class="page-title">MOTION DETECTION IR SENSOR</h1>
  </header>

  <main class="project-section">
    <!-- <h2 class="project-heading">📺 Build Your Own Android TV</h2> -->
    
    <h4 class="info-title">OBJECTIVE</h4>

    <p class="project-description">
To detect and respond to the presence or movement of objects using infrared light.
    </p>

    

    <h4 class="info-title">MODULES REQUIRED</h4>
    <ul class="info-list">
      <li>Arduino UNO</li>
      <li>IR Sensor</li>
      <li>LED</li> 
      <li>Jumper wire</li>
     
    </ul>

    <h4 class="info-title">SCHEMATIC DIAGRAM</h4>
     <img src="images/P 14.png" alt="Push Button component">
     
    <h4 class="info-title">SCHEMATIC CONNECTION</h4>
   
    <ul class="info-list">
        <h6>Connect IR sensor:</h6>  
      <li>Connect Out pin in the IR sensor module to the pin D9 on the Arduino.</li>
      <li>Connect GND pin on the IR sensor to the pin GND on the Arduino.</li>
      <h6>Connect LED:</h6>
      
      <li>Connect the LED pin(positive) to Arduino pin 12.</li>
    </ul>
   <h4 class="info-title">Arduino Code</h4>
  <div class="code-container">
    <div class="code-header">
      <span class="code-title">Arduino Code</span>
      <button class="copy-btn" onclick="copyCode()">📋 Copy</button>
    </div>

    <pre><code id="arduino-code">
int IRSensor = 9; // connect ir sensor module to Arduino pin 9
int LED = 12; // conect LED to Arduino pin 13
void setup(){
Serial.begin(115200); // Init Serila at 115200 Baud
Serial.println("Serial Working"); // Test to check if serial is working or not
pinMode(IRSensor, INPUT); // IR Sensor pin INPUT
pinMode(LED, OUTPUT); // LED Pin Output
}
void loop(){
int sensorStatus = digitalRead(IRSensor); // Set the GPIO as Input
if (sensorStatus == 1) // Check if the pin high or not
{ // if the pin is high turn off the onboard Led
digitalWrite(LED, HIGH); // LED LOW
Serial.println("Motion Ended!"); // print Motion Detected! on the serial
monitor window
}
else {
//else turn on the onboard LED
digitalWrite(LED, LOW); // LED High
Serial.println("Motion Detected!"); // print Motion Ended! on the serial
monitor window
} }
 </code></pre>
  </div>
  <h4 class="info-title">INSTRUCTIONS</h4>
    <ul class="info-list">
      <li>Connect the modules and components as per the schematic diagram.</li>
      <li>Upload the Arduino code into the Arduino board.</li>
     
      <li>Detect motion by measuring changes in infrared light reflections and triggering an alert or action.</li>
    </ul>
      <h4 class="info-title">WORKING</h4>
    <ul class="info-list">
        
      <li>Motion detection IR sensor works by emitting IR light.</li>
      <li>When motion is detected, the light will turn ON.</li>
      <li>When no motion is detected, the light will turn OFF.</li>
   
       
      </u1>
     
      
      
      
    </ul>
 <h4 class="info-title">MOTION DETECTION IR SENSOR</h4>
<ul class="info-list"></ul>

<section class="video-section">
  <div class="container">
    <div class="video-wrapper">
      <video id="irVideo" controls preload="none" poster="images/ir-thumbnail.jpg">
        <source src="videos/Project-14-Motion-Detection-IR-SENSOR-VEED.mp4" type="video/mp4">
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