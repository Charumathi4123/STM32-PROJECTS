<?php include "header.php";?>
<div class="slider-container">
        <div class="slider-track">
            <!-- Slide 1: Using an <img> tag now -->
            <div class="slide">
                <img src="slider-images/slider23.png" alt="Person wearing VR goggles interacting with a futuristic interface.">
                </div>
                
            </div>
            </div>

 <h1 class="page-title">BLUETOOTH MODULE</h1>
  </header>

  <main class="project-section">
    <!-- <h2 class="project-heading">📺 Build Your Own Android TV</h2> -->
    
    <h4 class="info-title">OBJECTIVE</h4>

    <p class="project-description">
The objective of using a Bluetooth module with Arduino is to create a system that can be controlled remotely using a smartphone or tablet
    </p>

    

    <h4 class="info-title">MODULES REQUIRED</h4>
    <ul class="info-list">
      <li>Arduino UNO</li>
      <li>Bluetooth Module</li>
      <li>Jumper wire</li> 
      
     
    </ul>

    <h4 class="info-title">SCHEMATIC DIAGRAM</h4>
     <img src="images/schmatic16.png" alt="Push Button component">
     
    <h4 class="info-title">SCHEMATIC CONNECTION</h4>
   
    <ul class="info-list">
        <h6>Connect Bluetooth:</h6>  
      <li></li>
      <li>Connect the TX pin on the Bluetooth to Arduino UNO pin D2 .</li>
      
      <li>Connect the RX pin on the Bluetooth to Arduino UNO Pin D3.</li>
    </ul>
   <h4 class="info-title">Arduino Code</h4>
  <div class="code-container">
    <div class="code-header">
      <span class="code-title">Arduino Code</span>
      <button class="copy-btn" onclick="copyCode()">📋 Copy</button>
    </div>

    <pre><code id="arduino-code">
#include(Softwareserial.h)
/*Create object nasoftwareserial*/
SoftwareSerial bt(2,3);/*(Rx,Tx)*/
void setup() {
bt.begin(9600);/*Define baud rate for software serial communication*/
Serial.begin(9600);/* Define baud rate for serial communication*/
}
void loop() {
if (bt.available()) /* If data is available on serial port*/
{
Serial.write(bt.read());/* Print character received on to the serial monitor*/
}
}
 </code></pre>
  </div>
  <h4 class="info-title">INSTRUCTIONS</h4>
    <ul class="info-list">
      <li>Connect the modules and components as per the schematic diagram.</li>
      <li>Upload the Arduino code into the Arduino board.</li>
     
      <li>Install the Serial Bluetooth Terminal app on the other device.</li>
      <li>Check the Bluetooth module name.</li>
      <li>Connect it with the other device for data transmission.</li>
      <li>Send the message through the Serial Bluetooth Terminal app.</li>
      <li>Check if it is received in the serial monitor in Arduino IDE.</li>
    </ul>
      <h4 class="info-title">WORKING</h4>
    <ul class="info-list"> 
      <li>A Bluetooth module with an Arduino Uno enables wireless serial communication by transmitting and receiving data through the TX and RX pins.</li> 
      </u1>
     
      
      
      
    </ul>
 <h4 class="info-title">BLUETOOTH MODULE</h4>
<ul class="info-list"></ul>

<section class="video-section">
  <div class="container">
    <div class="video-wrapper">
      <video id="irVideo" controls preload="none" poster="images/ir-thumbnail.jpg">
        <source src="videos/Project-16-Bluetooth-Module-VEED.mp4" type="video/mp4">
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