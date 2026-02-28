<?php include "header.php";?>
<div class="slider-container">
        <div class="slider-track">
            <!-- Slide 1: Using an <img> tag now -->
            <div class="slide">
                <img src="slider-images/slider20.png" alt="Person wearing VR goggles interacting with a futuristic interface.">
                </div>
                
            </div>
            </div>

 <h1 class="page-title">DISPLAY KEYPAD</h1>
  </header>

  <main class="project-section">
    <!-- <h2 class="project-heading">📺 Build Your Own Android TV</h2> -->
    
    <h4 class="info-title">OBJECTIVE</h4>

    <p class="project-description">
  To show the pressing number of the keyboard on the LCD display.
    </p>

    

    <h4 class="info-title">MODULES REQUIRED</h4>
    <ul class="info-list">
      <li>Arduino UNO</li>
      <li>4X4 keypad</li>
      <li>LCD Display & I2C module</li>
      <li>Jumper wire</li> 
     
    </ul>

    <h4 class="info-title">SCHEMATIC DIAGRAM</h4>
     <img src="images/schmatic12.png" alt="Push Button component">
     
    <h4 class="info-title">SCHEMATIC CONNECTION</h4>
   
    <ul class="info-list">
        <h6>Connect I2C:</h6>  
      <li>SDA to Arduino A4.</li>
      <li>SCL to Arduino A5.</li>
      <h6>Connect Display:</h6> 
      <li>Pins 1-8 to Arduino D9-D2.</li>
    </ul>
   <h4 class="info-title">Arduino Code</h4>
  <div class="code-container">
    <div class="code-header">
      <span class="code-title">Arduino Code</span>
      <button class="copy-btn" onclick="copyCode()">📋 Copy</button>
    </div>

    <pre><code id="arduino-code">
#include (Keypad.h)
#include (Wire.h)
#include (LiquidCrystal_I2C.h)
const byte ROWS = 4;
const byte COLS = 4;
char hexaKeys[ROWS][COLS] = {
{'1', '2', '3', 'A'}, {'4', '5', '6', 'B'}, {'7', '8', '9', 'C'}, {'*', '0', '#', 'D'}};
byte rowPins[ROWS] = {9, 8, 7, 6};
byte colPins[COLS] = {5, 4, 3, 2};
Keypad customKeypad = Keypad(makeKeymap(hexaKeys), rowPins,
colPins, ROWS, COLS);
LiquidCrystal_I2C lcd(0x27, 16, 2);
void setup(){
// Serial.begin(9600);
lcd.backlight();
lcd.init();
lcd.clear();}
void loop(){
char customKey = customKeypad.getKey();
if (customKey){
lcd.setCursor(0, 0);
lcd.print(customKey);
// Serial.print(customKey);
}}
 </code></pre>
  </div>
  <h4 class="info-title">INSTRUCTIONS</h4>
    <ul class="info-list">
      <li>Connect modules and components as per the schematic.</li>
      <li>Install Liquidcrystal_I2c and Keypad libraries.</li>
     
      <li>Upload Arduino code to the board.</li>
      <li>Check that the pressed key corresponds with the LCD display.</li>

      
      
      
    </ul>
      <h4 class="info-title">WORKING</h4>
    <ul class="info-list">
        
      <li>When a key is pressed, the Arduino reads the input and displays it on the LCD screen via the I2C interface.

</li>
   
       
      </u1>
     
      
      
      
    </ul>
    <h4 class="info-title">DISPLAY KEYPAD</h4>
<ul class="info-list"></ul>

<section class="video-section">
  <div class="container">
    <div class="video-wrapper">
      <video id="irVideo" controls preload="none" poster="images/ir-thumbnail.jpg">
        <source src="videos/project-12-Display-Keypad-VEED.mp4" type="video/mp4">
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