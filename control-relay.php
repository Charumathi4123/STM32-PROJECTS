<?php include "header.php";?>
<div class="slider-container">
        <div class="slider-track">
            <!-- Slide 1: Using an <img> tag now -->
            <div class="slide">
                <img src="slider-images/slider11.png" alt="Person wearing VR goggles interacting with a futuristic interface.">
                </div>
                
            </div>
            </div>

 <h1 class="page-title">CONTROL RELAY USING DIGITAL SIGNAL</h1>
  </header>

  <main class="project-section">
    <!-- <h2 class="project-heading">📺 Build Your Own Android TV</h2> -->
    
    <h4 class="info-title">OBJECTIVE</h4>

    <p class="project-description">
     The objective is to learn how to control high-power devices using a relay by sending a digital signal from a microcontroller. This involves using a relay module to safely switch high-power devices on and off with low-voltage control signals.
    </p>

    

    <h4 class="info-title">MODULES REQUIRED</h4>
    <ul class="info-list">
      <li>LED</li>
      <li>Jumper Wires</li>
      <li>Relay</li>
      <li>Arduino uno</li>
     
    </ul>

    <h4 class="info-title">SCHEMATIC DIAGRAM</h4>
     <img src="images/schmatic3.png" alt="Push Button component">
     
    <h4 class="info-title">SCHEMATIC CONNECTION</h4>
    <ul class="info-list">
      <li>Connect the Relay module Pin and Gnd to Arduino pins D13 and GND.</li>
      <li>Connect the Arduino 3.3v to relay pin NC (Normally closed).</li>
     
      <li>Connect the led positive to Relay pin COM.</li>
      <li>Connect the LED negative to Arduino pin GND.</li>
      
    </ul>
   <h4 class="info-title">Arduino Code</h4>
  <div class="code-container">
    <div class="code-header">
      <span class="code-title">Arduino Code</span>
      <button class="copy-btn" onclick="copyCode()">📋 Copy</button>
    </div>

    <pre><code id="arduino-code">
int relay = 13; // Plug the relay into Digital Pin 13


void setup() {
  pinMode(relay, OUTPUT);
}


void loop() {
  digitalWrite(relay, HIGH); // Turn the relay on
  delay(1000); // Wait 1 second
  digitalWrite(relay, LOW); // Turn the relay Off
  delay(1000); // Wait 1 second
}
    </code></pre>
  </div>
  <h4 class="info-title">INSTRUCTIONS</h4>
    <ul class="info-list">
      <li>Connect the modules & components as per schematic diagram.</li>
      <li>Upload the Arduino code into Arduino board.</li>
     
      <li>Verify the relay switch. POWERS UP THE LED In accordance with the code, the normal LED turns off.</li>
      
      
    </ul>
      <h4 class="info-title">WORKING</h4>
    <ul class="info-list">
      <li>When the signal gets from Arduino uno the relay switch is ON and the Normal LED Gets OFF and vice versa.</li>
      
      
      
    </ul>
       <h4 class="info-title"> CONTROL RELAY USING DITAL SIGNAL </h4>
<ul class="info-list"></ul>

<section class="video-section">
  <div class="container">
    <div class="video-wrapper">
      <video id="irVideo" controls preload="none" poster="images/ir-thumbnail.jpg">
        <source src="videos/control-relay.mp4" type="video/mp4">
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