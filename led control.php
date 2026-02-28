<?php include "header.php";?>
<div class="slider-container">
        <div class="slider-track">
            <!-- Slide 1: Using an <img> tag now -->
            <div class="slide">
                <img src="slider-images/slider9.png" alt="Person wearing VR goggles interacting with a futuristic interface.">
                </div>
                
            </div>
            </div>

 <h1 class="page-title">LED CONTROL USING PUSH BUTTONS</h1>
  </header>

  <main class="project-section">
    <!-- <h2 class="project-heading">📺 Build Your Own Android TV</h2> -->
    
    <h4 class="info-title">OBJECTIVE</h4>

    <p class="project-description">
      Understand the functions of Push buttons and LEDs, and control LEDs using Arduino platform.
    </p>

    

    <h4 class="info-title">MODULES REQUIRED</h4>
    <ul class="info-list">
      <li>Arduino board</li>
      <li>1 x LED</li>
      <li>1 x 1k Resistor</li>
      <li>Jumper wires</li>
      <li>Push button</li>
    </ul>

    <h4 class="info-title">SCHEMATIC DIAGRAM</h4>
     <img src="images/schmatic1.png" alt="Push Button component">
     
    <h4 class="info-title">SCHEMATIC CONNECTION</h4>
    <ul class="info-list">
      <li> Connect LED’s pin (anode) to D12 (output).</li>
      <li> Connect Push button pin to D2 (Input).</li>
      <p><strong> Following connection are made in inbuilt circuit, so there no need made these connection</strong></p>
      <li>LED’s anode connected to 5V using a 1K pull-up resistor</li>
      <li>Push button pulled down to GND using 10K pull-down resistor</li>
      
    </ul>
   <h4 class="info-title">Arduino Code</h4>
  <div class="code-container">
    <div class="code-header">
      <span class="code-title">Arduino Code</span>
      <button class="copy-btn" onclick="copyCode()">📋 Copy</button>
    </div>

    <pre><code id="arduino-code">
int LOW2 = 1;
int HIGH2 = 0;

void setup() {
  pinMode(12, OUTPUT);
  digitalWrite(12, LOW2);
  pinMode(2, INPUT_PULLUP);
  Serial.begin(9600);
}

void loop() {
  int button = digitalRead(2);
  delay(10);
  Serial.print(button);

  if (button) {
    digitalWrite(12, HIGH2);
    delay(1000); // Wait for 1000 milliseconds
    digitalWrite(12, LOW2);
    delay(500); // Wait for 500 milliseconds
  }
}
    </code></pre>
  </div>
  <h4 class="info-title">INSTRUCTIONS</h4>
    <ul class="info-list">
      <li> Connect the modules & components as per schematic diagram.</li>
      <li> Upload the Arduino code into Arduino board.</li>
     
      <li> Verify the LED on and off with push button presses.</li>
      
      
    </ul>
      <h4 class="info-title">WORKING</h4>
    <ul class="info-list">
      <li>When the button is pressed, pin 12 is 5V (HIGH).</li>
      <li>When the button is released, pin 12 is 0V (LOW).</li>
     
      <li>So we will see the LED light up and go out alternately as the button is pressed and released.</li>
      
      
    </ul>
  <h4 class="info-title">LED CONTROL USING PUSH BUTTON</h4>
<ul class="info-list"></ul>

<section class="video-section">
  <div class="container">
    <div class="video-wrapper">
      <video id="irVideo" controls preload="none" poster="images/ir-thumbnail.jpg">
        <source src="videos/Led-control.mp4" type="video/mp4">
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