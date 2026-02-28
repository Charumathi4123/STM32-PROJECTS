<?php include "header.php";?>
<div class="slider-container">
        <div class="slider-track">
            <!-- Slide 1: Using an <img> tag now -->
            <div class="slide">
                <img src="slider-images/slider10.png" alt="Person wearing VR goggles interacting with a futuristic interface.">
                </div>
                
            </div>
            </div>

 <h1 class="page-title">TOGGLE LED USING PUSH BUTTONS</h1>
  </header>

  <main class="project-section">
    <!-- <h2 class="project-heading">📺 Build Your Own Android TV</h2> -->
    
    <h4 class="info-title">OBJECTIVE</h4>

    <p class="project-description">
      Toggle the LED ON/OFF using Push button.
    </p>

    

    <h4 class="info-title">MODULES REQUIRED</h4>
    <ul class="info-list">
      <li>Arduino Board</li>
      <li>1 x Push button</li>
      <li>0k Pull down resistor</li>
      <li>Jumper wires</li>
      <li>1 LED</li>
    </ul>

    <h4 class="info-title">SCHEMATIC DIAGRAM</h4>
     <img src="images/P 2.png" alt="Push Button component">
     
    <h4 class="info-title">SCHEMATIC CONNECTION</h4>
    <ul class="info-list">
      <li>Connect LED’s pin (anode) to D5 (output)</li>
      <li>Connect Push button pin to D7 (Input)</li>
      <p><strong>Following connection are made in inbuilt circuit, so there no need made these connection:</strong></p>
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
int led=5;
int button=7;
int val=0;
int old_val=0;
int state=0;
void setup (){
pinMode(led,OUTPUT);
pinMode(button,INPUT);
}
void loop()
{ val=digitalRead(button);
if( (val==HIGH) && (old_val==LOW)) {
state=1-state;}
old_val=val;
if (state==1) { digitalWrite(led, HIGH);}
else {digitalWrite (led,LOW);}
}
    </code></pre>
  </div>
  <h4 class="info-title">INSTRUCTIONS</h4>
    <ul class="info-list">
      <li>Connect the modules & components as per schematic diagram.</li>
      <li>pload the Arduino code into Arduino board.</li>
     
      <li>Verify the LED toggles on and off with push button presses.</li>
      
      
    </ul>
      <h4 class="info-title">WORKING</h4>
    <ul class="info-list">
      <li>When the button is pressed, pin 12 is 5V (HIGH).</li>
      <li>When the button is pressed again, pin 12 is 0V (LOW).</li>
     
      <li>So we will see the LED light up and go out alternately as the button is pressed and pressed again.</li>
      
      
    </ul>
    <h4 class="info-title">TOGGLE LED USING PUSH BUTTON</h4>
<ul class="info-list"></ul>

<section class="video-section">
  <div class="container">
    <div class="video-wrapper">
      <video id="irVideo" controls preload="none" poster="images/ir-thumbnail.jpg">
        <source src="videos/toggle-led.mp4" type="video/mp4">
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