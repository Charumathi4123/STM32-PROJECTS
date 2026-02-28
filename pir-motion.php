<?php include "header.php";?>
<div class="slider-container">
        <div class="slider-track">
            <!-- Slide 1: Using an <img> tag now -->
            <div class="slide">
                <img src="slider-images/slider16.png" alt="Person wearing VR goggles interacting with a futuristic interface.">
                </div>
                
            </div>
            </div>

 <h1 class="page-title">PIR MOTION DETECTION</h1>
  </header>

  <main class="project-section">
    <!-- <h2 class="project-heading">📺 Build Your Own Android TV</h2> -->
    
    <h4 class="info-title">OBJECTIVE</h4>

    <p class="project-description">
     Sensing the object movements and learn how PIR Sensor works.
    </p>

    

    <h4 class="info-title">MODULES REQUIRED</h4>
    <ul class="info-list">
      <li>PIR sensor</li>
      <li>LED</li>
      <li>Arduino Uno</li>
      <li>Jumper wire</li>
      
     
    </ul>

    <h4 class="info-title">SCHEMATIC DIAGRAM</h4>
     <img src="images/schmatic8.png" alt="Push Button component">
     
    <h4 class="info-title">SCHEMATIC CONNECTION</h4>
    <ul class="info-list">
      <li>Connect Out pin in the PIR sensor module to the pin 3 on the Arduino.</li>
      <li>Connect the Positive pin on the LED to Arduino pin 12.</li>
      
      <p> <strong>Following connection are made in inbuilt circuit, so there no need made these connection:</strong></p>
      <li>Connect the Negative pin on the LED to Arduino Pin GND.</li>
    
     
      
    </ul>
   <h4 class="info-title">Arduino Code</h4>
  <div class="code-container">
    <div class="code-header">
      <span class="code-title">Arduino Code</span>
      <button class="copy-btn" onclick="copyCode()">📋 Copy</button>
    </div>

    <pre><code id="arduino-code">
int led = 12; // the pin that the LED is atteched to
int sensor = 3; // the pin that the sensor is atteched to
int state = LOW; // by default, no motion detected
int val = 0; // variable to store the sensor status (value)
void setup() {
pinMode(led, OUTPUT); // initalize LED as an output
digitalWrite(led, LOW);
pinMode(sensor, INPUT); // initialize sensor as an input
Serial.begin(9600); // initialize serial
}
void loop(){
delayMicroseconds(250);
val = digitalRead(sensor); // read sensor value
if (val == LOW) { // check if the sensor is HIGH
digitalWrite(led, LOW); // turn LED ON
delay(100); // delay 100 milliseconds
if (state == HIGH) {
Serial.println("Motion detected!");
state = HIGH; // update variable state to HIGH
//delayMicroseconds(200);
}
}
else {
digitalWrite(led, HIGH); // turn LED OFF
delay(100); // delay 200 milliseconds
if (state == HIGH){
Serial.println("Motion stopped!");
state = LOW; // update variable state to LOW
} }}
 </code></pre>
  </div>
  <h4 class="info-title">INSTRUCTIONS</h4>
    <ul class="info-list">
      <li>Connect the modules & components as per schematic diagram.</li>
      <li>Upload the Arduino code into Arduino board.</li>
     
      <li>Test the motion detection by moving objects or hands near the sensor.</li>
      
      
    </ul>
      <h4 class="info-title">WORKING</h4>
    <ul class="info-list">
      <li>The PIR sensor detects the infrared radiation (heat) emitted by objects in its field of view.</li>
      <li>When a person or object moves, the pattern of infrared radiation changes.</li>
      <li>The PIR sensor detects this change and sends a signal to the microcontroller.</li>
      <li>The microcontroller receives the signal and triggers an alarm or turns on a light.</li>
      
      
      
    </ul>
       <h4 class="info-title">PIR MOTION DETECTION</h4>
<ul class="info-list"></ul>

<section class="video-section">
  <div class="container">
    <div class="video-wrapper">
      <video id="irVideo" controls preload="none" poster="images/ir-thumbnail.jpg">
        <source src="videos/Project-13-Dot-Matrix-Display-VEED.mp4" type="video/mp4">
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