<?php include "header.php";?>
<div class="slider-container">
        <div class="slider-track">
            <!-- Slide 1: Using an <img> tag now -->
            <div class="slide">
                <img src="slider-images/slider25.png" alt="Person wearing VR goggles interacting with a futuristic interface.">
                </div>
                
            </div>
            </div>

 <h1 class="page-title">BLUETOOTH CONTROLLED LED WITH LCD DISPLAY USING ARDUINO NANO</h1>
  </header>

  <main class="project-section">
   
    
    <h4 class="info-title">OBJECTIVE</h4>

    <p class="project-description">
   The aim of this project is to design a Bluetooth-controlled LED system using an Arduino Nano, enabling remote ON/OFF control via smartphone with status displayed on an LCD screen.
    </p>

    

    <h4 class="info-title">MODULES REQUIRED</h4>
    <ul class="info-list">
      <li>Arduino Nano</li>
      <li>Jumper wire</li>
      <li>LED</li>
      <li>Bluetooth Module</li>
      <li>LCD Display with I2C module.</li>
      
     
    </ul>

    <h4 class="info-title">SCHEMATIC DIAGRAM</h4>
     <img src="images/schmatic18.png" alt="Push Button component">
     
    <h4 class="info-title">SCHEMATIC CONNECTION</h4>
    <ul class="info-list">
        <h6>Connect LCD:</h6>
      <li>SCL pin (I2C module) to A5 (Arduino NANO).</li>
      <li>SDA pin (I2C module) to A4 (Arduino NANO).</li>
      <h6>Connect Bluetooth:</h6>
      <li>TX pin and RX pin (Bluetooth) to D2 and D3 (Arduino NANO).</li>
      <h6>Connect LED:</h6>
      <li>Positive pin (LED) to D9 (Arduino NANO).</li>

      <p><strong>*Note: The negative pin (LED) connects to GND in the built-in circuit, no additional connection needed</strong></p>
     
     
      
    </ul>
   <h4 class="info-title">Arduino Code</h4>
  <div class="code-container">
    <div class="code-header">
      <span class="code-title">Arduino Code</span>
      <button class="copy-btn" onclick="copyCode()">📋 Copy</button>
    </div>

    <pre><code id="arduino-code">
#include (Wire.h)
#include (LiquidCrystal_I2C.h)
#include (SoftwareSerial.h)
// Initialize the I2C LCD with the address 0x27
LiquidCrystal_I2C lcd(0x27, 16, 2);
// Create a SoftwareSerial port for the Bluetooth module
SoftwareSerial bluetooth(2, 3); // RX, TX
// LED pin
const int ledPin = 9;
void setup() {
// Initialize the LCD with 16 columns and 2 rows
lcd.begin(16, 2);
lcd.init();
lcd.backlight();
// Initialize Bluetooth communication at 9600 baud
bluetooth.begin(9600);
// Set LED pin as output
pinMode(ledPin, OUTPUT);
// Display a welcome message
lcd.setCursor(0, 0);
lcd.print("Bluetooth LED");
lcd.setCursor(0, 1);
lcd.print("Control Ready");
delay(2000);
lcd.clear();
}
void loop() {
// Check if data is available from the Bluetooth module
if (bluetooth.available()) {
char data = bluetooth.read(); // Read the incoming data
if (data == '1') {
digitalWrite(ledPin, LOW); // Turn the LED on
lcd.clear();
lcd.setCursor(0, 0);
lcd.print("LED Status:");
lcd.setCursor(0, 1);
lcd.print("ON");
}
else if (data == '0') {
digitalWrite(ledPin, HIGH); // Turn the LED off
lcd.clear();
lcd.setCursor(0, 0);
lcd.print("LED Status:");
lcd.setCursor(0, 1);
lcd.print("OFF");
} } }
    </code></pre>
  </div>
  <h4 class="info-title">INSTRUCTIONS</h4>
    <ul class="info-list">
      <li>Connect the modules & components as per schematic diagram.</li>
      <li>Upload the Arduino code into Arduino board.</li>
      <li>Download and install library LiquidCrystal_I2C</li>
      <li>Install the Serial Bluetooth Terminal app on the other device.</li>
     
      <li>Check the Bluetooth module name.</li>
      <li>Connect it with the other device for data transmission.</li>
      <li>Use a Bluetooth module to send commands 0 and 1 from your phone to the Arduino Nano, which controls the LED ON/OFF and displays the status on the LCD screen.</li>
      
      
    </ul>
      <h4 class="info-title">WORKING</h4>
    <ul class="info-list">
      <li>With a Bluetooth connection, you can send commands from your phone to the Arduino Nano.</li>
      <li>The Arduino then turns an LED on or off based on the command.</li>
      <li>At the same time, the LCD screen shows whether the LED is ON or OFF.</li>
       
    </ul>
<h4 class="info-title">BLUETOOTH CONTROLLED LED WITH LCD DISPLAY USING ARDUINO NANO</h4>
<ul class="info-list"></ul>

<section class="video-section">
  <div class="container">
    <div class="video-wrapper">
      <video id="irVideo" controls preload="none" poster="images/ir-thumbnail.jpg">
        <source src="videos/Project-18-Bluetooth-controlled-led-with-lcd-Display-VEED.mp4" type="video/mp4">
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