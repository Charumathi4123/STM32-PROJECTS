<?php include "header.php";?>
<div class="slider-container">
        <div class="slider-track">
            <!-- Slide 1: Using an <img> tag now -->
            <div class="slide">
                <img src="slider-images/slider26.png" alt="Person wearing VR goggles interacting with a futuristic interface.">
                </div>
                
            </div>
            </div>

 <h1 class="page-title">2 DIGIT SEVEN SEGMENT DISPLAY</h1>
  </header>

  <main class="project-section">
    <!-- <h2 class="project-heading">📺 Build Your Own Android TV</h2> -->
    
    <h4 class="info-title">OBJECTIVE</h4>

    <p class="project-description">
Display numerical data using a 2-digit seven-segment display with an Arduino Uno.
    </p>

    

    <h4 class="info-title">MODULES REQUIRED</h4>
    <ul class="info-list">
      <li>Arduino UNO</li>
      <li>Seven segment Display</li>
      <li>Jumper wire</li> 
      
     
    </ul>

    <h4 class="info-title">SCHEMATIC DIAGRAM</h4>
     <img src="images/schmatic19.png" alt="Push Button component">
     
    <h4 class="info-title">SCHEMATIC CONNECTION</h4>
   
    <ul class="info-list">
        <h6>Connecting a 7-Segment Display to Arduino:</h6>  
      <li></li>
      <li>A-G to D2-D8.</li>
      
      <li>SEG 1 to D13.</li>
      <li>SEG 2 to D12.</li>
    </ul>
   <h4 class="info-title">Arduino Code</h4>
  <div class="code-container">
    <div class="code-header">
      <span class="code-title">Arduino Code</span>
      <button class="copy-btn" onclick="copyCode()">📋 Copy</button>
    </div>

    <pre><code id="arduino-code">
//Prepare binary array for all 7 segment to turn on 7 segment at
position of a,b,c,d,e,f,g
int digit[10] = {0b0111111, 0b0000110, 0b1011011, 0b1001111,
0b1100110, 0b1101101, 0b1111101, 0b0000111, 0b1111111,
0b1101111};
int digit1, digit2; // initialize individual digit to controll each segment
void setup(){
for (int i = 2; i < 9; i++) {
pinMode(i, OUTPUT); // declare 0-9 th pin as output
}
pinMode(12, OUTPUT); //declare 7 seg Digit1 pin as output
pinMode(13, OUTPUT);//declare 7 seg Digit2 pin as output
}
void loop() {
for (int j = 0; j <= 99; j++)// for lopp to pass value from 00-99
{
digit2 = j / 10;
digit1 = j % 10;
for ( int k = 0; k < 20; k++)// For loop to control the digit control to
print 00-99
{
digitalWrite(12, HIGH);
digitalWrite(13, LOW);
dis(digit2);
delay(10);
digitalWrite(13, HIGH);
digitalWrite(12, LOW);
dis(digit1);
delay(10);
} } }
void dis(int num){
for (int i = 2; i < 9; i++) {
digitalWrite(i, bitRead(digit[num], i - 2));
} }
 </code></pre>
  </div>
  <h4 class="info-title">INSTRUCTIONS</h4>
    <ul class="info-list">
      <li>Connect the modules and components as per the schematic diagram.</li>
      <li>Upload the Arduino code into the Arduino board.</li>
     
      <li>Check the 7 segment displays shows number 00 to 99.</li>

    </ul>
      <h4 class="info-title">WORKING</h4>
    <ul class="info-list"> 
      <li>The Arduino UNO cycles through numbers 00 to 99, converting each digit to its corresponding 7-segment code and displaying it on the two-digit 7-segment display sequentially.</li> 
      </u1>
     
      
      
      
    </ul>
 <h4 class="info-title">2 DIGIT SEVEN SEGMENT DISPLAY</h4>
<ul class="info-list"></ul>

<section class="video-section">
  <div class="container">
    <div class="video-wrapper">
      <video id="irVideo" controls preload="none" poster="images/ir-thumbnail.jpg">
        <source src="videos/Project-19-2Digit-Seven-Segment-Display-VEED.mp4" type="video/mp4">
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