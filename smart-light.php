<?php include "header.php";?>
<div class="slider-container">
        <div class="slider-track">
            <!-- Slide 1: Using an <img> tag now -->
            <div class="slide">
                <img src="slider-images/slider14.png" alt="Person wearing VR goggles interacting with a futuristic interface.">
                </div>
                
            </div>
            </div>

 <h1 class="page-title">SMART LIGHT</h1>
  </header>

  <main class="project-section">
   
    
    <h4 class="info-title">OBJECTIVE</h4>

    <p class="project-description">
     Sensing the light intensity and learn how LDR Sensor works.
    </p>

    

    <h4 class="info-title">MODULES REQUIRED</h4>
    <ul class="info-list">
      <li>LDR sensor</li>
      <li>LED</li>
      <li>Arduino Uno</li>
      <li>Jumper wire</li>
      
     
    </ul>

    <h4 class="info-title">SCHEMATIC DIAGRAM</h4>
     <img src="images/schmatic6.png" alt="Push Button component">
     
    <h4 class="info-title">SCHEMATIC CONNECTION</h4>
    <ul class="info-list">
      <li>Connect D0 pin in the LDR sensor module to pin D9 on the Arduino.</li>
      <li>Connect the LED pin (anode) to Arduino pin 3.</li>
      <p><strong>Following connection are made in inbuilt circuit, so there no need made these connection:</strong></p>
      <li>To power the LDR module, connect Vcc and GND to Arduino 5v and GND leads.</li>
      <li>Connect GND to GND on Arduino.</li>
     
      
    </ul>
   <h4 class="info-title">Arduino Code</h4>
  <div class="code-container">
    <div class="code-header">
      <span class="code-title">Arduino Code</span>
      <button class="copy-btn" onclick="copyCode()">📋 Copy</button>
    </div>

    <pre><code id="arduino-code">
int LEDPin = 3;
int LDRPin = 9;
int HIGH2 = 0;
int LOW2 = 1;
void setup(){
pinMode(LEDPin, OUTPUT);
digitalWrite(LEDPin, LOW2);
pinMode(LDRPin, INPUT_PULLUP); }
void loop(){
int detection = !digitalRead(LDRPin);
if (detection == HIGH2){
digitalWrite(LEDPin , HIGH2);
}
if (detection == LOW2){
digitalWrite(LEDPin , LOW2);
} }
    </code></pre>
  </div>
  <h4 class="info-title">INSTRUCTIONS</h4>
    <ul class="info-list">
      <li>Connect the modules & components as per the schematic diagram.</li>
      <li>Upload the Arduino code into the Arduino board.</li>
     
      <li>Check the project in dark and bright environments.</li>
      
      
    </ul>
      <h4 class="info-title">WORKING</h4>
    <ul class="info-list">
      <li>The LDR sensor detects the ambient light intensity.</li>
      <li>The LDR sensor sends the light intensity value to the Arduino board.</li>
      <li>If the light intensity is low, the Arduino board turns on the LED light.</li>
      <li>If the light intensity is high, the Arduino board turns off the LED light.</li>
      
      
      
    </ul>
   <h4 class="info-title">SMART LIGHT</h4>
<ul class="info-list"></ul>

<section class="video-section">
  <div class="container">
    <div class="video-wrapper">
      <video id="irVideo" controls preload="none" poster="images/ir-thumbnail.jpg">
        <source src="videos/smart-light.mp4" type="video/mp4">
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