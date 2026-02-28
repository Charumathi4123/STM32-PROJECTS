<?php include "header.php";?>
<div class="slider-container">
        <div class="slider-track">
            <!-- Slide 1: Using an <img> tag now -->
            <div class="slide">
                <img src="slider-images/slider20.png" alt="Person wearing VR goggles interacting with a futuristic interface.">
                </div>
                
            </div>
            </div>

 <h1 class="page-title">DOT MATRIX DISPLAY</h1>
  </header>

  <main class="project-section">
    <!-- <h2 class="project-heading">📺 Build Your Own Android TV</h2> -->
    
    <h4 class="info-title">OBJECTIVE</h4>

    <p class="project-description">
  The objective of using a dot matrix display with Arduino is to display text, symbols, and images.
    </p>

    

    <h4 class="info-title">MODULES REQUIRED</h4>
    <ul class="info-list">
      <li>Arduino UNO</li>
      <li>8x8 LED matrix</li>
      <li>Jumper wire</li> 
     
    </ul>

    <h4 class="info-title">SCHEMATIC DIAGRAM</h4>
     <img src="images/schmatic13.png" alt="Push Button component">
     
    <h4 class="info-title">SCHEMATIC CONNECTION</h4>
   
    <ul class="info-list">
        <h6>Connect Dot matrix:</h6>  
      <li>Connect the Din pin on the Dot matrix to Arduino pin D10</li>
      <li>Connect the Cs pin on the Dot matrix to Arduino Pin D11</li>
      
      <li>Connect the Clk pin on the Dot matrix to Arduino Pin D12.</li>
    </ul>
   <h4 class="info-title">Arduino Code</h4>
  <div class="code-container">
    <div class="code-header">
      <span class="code-title">Arduino Code</span>
      <button class="copy-btn" onclick="copyCode()">📋 Copy</button>
    </div>

    <pre><code id="arduino-code">
//////////////////////////////////
//  LED Matrix MAX7219 Tutorial //
//          ArduinoCraft        //
//////////////////////////////////
// connect the necessary library
#include "LedControl.h"
// jumper pin settings
#define DIN 10
#define CS 11
#define CLK 12
// this variable indicates the number of matrices, counting starts from zero
#define myMat 0
// initialization of LED matrix from library
LedControl ledMat = LedControl(DIN, CLK, CS, myMat);
// variable of array type, 1 indicates lit LEDs
byte charH[8] = {
  B00100010,
  B00100010,
  B00111110,
  B00100010,
  B00100010,
  B00100010,
  B00100010,
  B00000000
};
byte charE[8] = {
  B01111100,
  B01000000,
  B01000000,
  B01110000,
  B01000000,
  B01000000,
  B01111100,
  B00000000
};
byte charL[8] = {
  B01000000,
  B01000000,
  B01000000,
  B01000000,
  B01000000,
  B01000000,
  B01111100,
  B00000000
};
byte charO[8] = {
  B00011100,
  B00100010,
  B01000001,
  B01000001,
  B01000001,
  B01000001,
  B00100010,
  B00011100
};

void setup() {
  // wake up the matrix to start communication
  ledMat.shutdown(myMat, false);
  // setting the LED matrix to medium brightness (0-15)
  ledMat.setIntensity(myMat, 7);
  // switching off all LEDs on the matrix
  ledMat.clearDisplay(myMat);
}

void loop() {
  // drawing a character from a variable
  // H
  for (int i = 0; i < 8; i++) {
    ledMat.setRow(myMat, i, charH[i]);
  }
  delay(1000);                 // delay 1000 ms
  ledMat.clearDisplay(myMat);  // clear display
  // E
  for (int i = 0; i < 8; i++) {
    ledMat.setRow(myMat, i, charE[i]);
  }
  delay(1000);
  ledMat.clearDisplay(myMat);
  // L
  for (int i = 0; i < 8; i++) {
    ledMat.setRow(myMat, i, charL[i]);
  }
  delay(1000);
  ledMat.clearDisplay(myMat);
  // L
  for (int i = 0; i < 8; i++) {
    ledMat.setRow(myMat, i, charL[i]);
  }
  delay(1000);
  ledMat.clearDisplay(myMat);
  // O
  for (int i = 0; i < 8; i++) {
    ledMat.setRow(myMat, i, charO[i]);
   }
  delay(1000);
  ledMat.clearDisplay(myMat);

  // rendering of LEDs in the given row, here the fourth row
  // (rows are numbered from 0 to 7)
  ledMat.setRow(myMat, 3, B10101010);
  delay(1000);
  // rendering of LEDs in a given column, here the sixth column
  // (columns are numbered from 0 to 7)
  ledMat.setColumn(myMat, 5, B10111010);
  delay(1000);
  // rendering of one selected LED, here the outermost LED [8,8]
  ledMat.setLed(myMat, 7, 7, true);
  delay(1000);
  // demonstration of light intensity change in the whole range 0 to 15
  for (int i = 0; i < 16; i++) {
    ledMat.setIntensity(myMat, i);
    delay(200);
  }
  ledMat.setIntensity(myMat, 7);
  ledMat.clearDisplay(myMat);
}
 </code></pre>
  </div>
  <h4 class="info-title">INSTRUCTIONS</h4>
    <ul class="info-list">
      <li>Connect the modules and components as per the schematic diagram.</li>
      <li>Download and install Ledcontrol.</li>
     
      <li>Upload the Arduino code into the Arduino board.</li>
      <li>To check the dot matrix display, it shows the "HELLO" words.</li>

      
      
      
    </ul>
      <h4 class="info-title">WORKING</h4>
    <ul class="info-list">
        
      <li>A dot matrix display using Arduino works by controlling individual LEDs in a grid via rows and columns, typically using shift registers to manage the data, allowing characters or patterns to be displayed.

</li>
   
       
      </u1>
     
      
      
      
    </ul>
 <h4 class="info-title">DOT MATRIX DISPLAY</h4>
<ul class="info-list"></ul>

<section class="video-section">
  <div class="container">
    <div class="video-wrapper">
      <video id="irVideo" controls preload="none" poster="images/ir-thumbnail.jpg">
        <source src="videos/Project-13-Dot-Matrix-Display-VEED.mp4" type="video/mp4">
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