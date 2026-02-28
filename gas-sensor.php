<?php include "header.php";?>
<div class="slider-container">
        <div class="slider-track">
            <!-- Slide 1: Using an <img> tag now -->
            <div class="slide">
                <img src="slider-images/slider13.png" alt="Person wearing VR goggles interacting with a futuristic interface.">
                </div>
                
            </div>
            </div>

 <h1 class="page-title">GAS SENSOR ALARM</h1>
  </header>

  <main class="project-section">
   
    
    <h4 class="info-title">OBJECTIVE</h4>

    <p class="project-description">
     Gas leak Alert using a buzzer and learn how Gas Sensor works.
    </p>

    

    <h4 class="info-title">MODULES REQUIRED</h4>
    <ul class="info-list">
      <li>Gas sensor</li>
      <li>Buzzer</li>
      <li>Arduino Uno</li>
      <li>Jumper wire</li>
      
     
    </ul>

    <h4 class="info-title">SCHEMATIC DIAGRAM</h4>
     <img src="images/schmatic5.png" alt="Push Button component">
     
    <h4 class="info-title">SCHEMATIC CONNECTION</h4>
    <ul class="info-list">
      <li>Connect A0 pin in the gas sensor module to the pin A0 on the Arduino.</li>
      <li>Connect the SIG pin on the Buzzer module to Arduino pin D12.</li>
     
      
    </ul>
   <h4 class="info-title">Arduino Code</h4>
  <div class="code-container">
    <div class="code-header">
      <span class="code-title">Arduino Code</span>
      <button class="copy-btn" onclick="copyCode()">📋 Copy</button>
    </div>

    <pre><code id="arduino-code">
int gasSensorPin = A0; // Analog pin A0 connected to the gas sensor
int buzzerPin = 12; // Digital pin 12 connected to the buzzer
int threshold = 300; // Gas detection threshold value (adjust based on
your sensor and environment)
void setup() {
pinMode(buzzerPin, OUTPUT); // Set buzzer pin as output
Serial.begin(9600); // Initialize serial communication
}
void loop() {
int gasLevel = analogRead(gasSensorPin); // Read gas level from sensor
Serial.print("Gas level: ");
Serial.println(gasLevel); // Print gas level to the Serial Monitor
if (gasLevel > threshold) { // If gas level exceeds the threshold
digitalWrite(buzzerPin, HIGH); // Turn on the buzzer
} else {
digitalWrite(buzzerPin, LOW); // Turn off the buzzer
}
delay(1000); // Wait for 1 second before checking again
}
    </code></pre>
  </div>
  <h4 class="info-title">INSTRUCTIONS</h4>
    <ul class="info-list">
      <li>Connect the modules & components as per schematic diagram.</li>
      <li>Upload the Arduino code into Arduino board.</li>
     
      <li>Verify the buzzer ON when the gas sensor detects gas.</li>
      
      
    </ul>
      <h4 class="info-title">WORKING</h4>
    <ul class="info-list">
      <li>The gas sensor detects harmful gases like LPG, CO, and methane in the atmosphere.</li>
      <li>When the gas level exceeds a dangerous threshold, the sensor sends a signal to the microcontroller Arduino.</li>
      <li>The microcontroller receives the signal and activates the alarm (buzzer) or LED lights.</li>
      <li>The alarm sounds or lights up to alert people in the area of potential danger.</li>
      
      
      
    </ul>
<h4 class="info-title">GAS SENSOR ALARM</h4>
<ul class="info-list"></ul>

<section class="video-section">
  <div class="container">
    <div class="video-wrapper">
      <video id="irVideo" controls preload="none" poster="images/ir-thumbnail.jpg">
        <source src="videos/gas-sensor.mp4" type="video/mp4">
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