<?php include "header.php";?>
<div class="slider-container">
        <div class="slider-track">
            <!-- Slide 1: Using an <img> tag now -->
            <div class="slide">
                <img src="slider-images/slider12.png" alt="Person wearing VR goggles interacting with a futuristic interface.">
                </div>
                
            </div>
            </div>

 <h1 class="page-title">DISPLAY DIGITS USING 7 SEGMENT</h1>
  </header>

  <main class="project-section">
    <!-- <h2 class="project-heading">📺 Build Your Own Android TV</h2> -->
    
    <h4 class="info-title">OBJECTIVE</h4>

    <p class="project-description">
     Display Digits from 0 to 9 using a 7 segment display unit and Arduino.
    </p>

    

    <h4 class="info-title">MODULES REQUIRED</h4>
    <ul class="info-list">
      <li>7 segment display (here it is CC mode)</li>
      <li>Arduino UNO</li>
      <li>Jumper Wire</li>
      
     
    </ul>

    <h4 class="info-title">SCHEMATIC DIAGRAM</h4>
     <img src="images/schmatic4.png" alt="Push Button component">
     
    <h4 class="info-title">SCHEMATIC CONNECTION</h4>
    <ul class="info-list">
      <li>Wire the A to G pins in the 7-segment display to UNO digital pins from D2 to D8 (as shown in the figure).</li>
      <li>Connect the seg1 pin in the segment display to Arduino pin D12.</li>
     
      
    </ul>
   <h4 class="info-title">Arduino Code</h4>
  <div class="code-container">
    <div class="code-header">
      <span class="code-title">Arduino Code</span>
      <button class="copy-btn" onclick="copyCode()">📋 Copy</button>
    </div>

    <pre><code id="arduino-code">
int digit[10] = {0b0111111, 0b0000110, 0b1011011, 0b1001111,
0b1100110, 0b1101101, 0b1111101, 0b0000111, 0b1111111,
0b1101111};
int digit1;
void setup(){
for (int i = 2; i < 9; i++){
pinMode(i, OUTPUT); }
pinMode(12, OUTPUT); //declare 7 seg Digit1 pin as output
}
void loop() {
for (int j = 0; j <= 9; j++) {
digit1 = j % 10;
for ( int k = 0; k < 20; k++){
digitalWrite(12, HIGH);
dis(digit1);
delay(10);
digitalWrite(12, LOW);
dis(digit1);
delay(10);
} } }
void dis(int num){
for (int i = 2; i < 9; i++) {
digitalWrite(i, bitRead(digit[num], i - 2));
}}
    </code></pre>
  </div>
  <h4 class="info-title">INSTRUCTIONS</h4>
    <ul class="info-list">
      <li>Connect the modules & components as per schematic diagram.</li>
      <li>Upload the Arduino code into Arduino board.</li>
     
      <li>Ensure all connections are correct and the display shows the correct digits.</li>
      
      
    </ul>
      <h4 class="info-title">WORKING</h4>
    <ul class="info-list">
      <li>The display features 7 segments (a-g) activated by an Arduino microcontroller to show numbers 0-9 based on the segments illuminated.</li>
      
      
      
    </ul>
   <h4 class="info-title">DISPLAY DIGITS USING SEVEN SEGMENT</h4>
<ul class="info-list"></ul>

<section class="video-section">
  <div class="container">
    <div class="video-wrapper">
      <video id="irVideo" controls preload="none" poster="images/ir-thumbnail.jpg">
        <source src="videos/7-segment.mp4" type="video/mp4">
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