<?php include "header.php";?>
<div class="slider-container">
        <div class="slider-track">
            <!-- Slide 1: Using an <img> tag now -->
            <div class="slide">
                <img src="slider-images/slider15.png" alt="Person wearing VR goggles interacting with a futuristic interface.">
                </div>
                
            </div>
            </div>

 <h1 class="page-title">DISTANCE SENSOR</h1>
  </header>

  <main class="project-section">
    <!-- <h2 class="project-heading">📺 Build Your Own Android TV</h2> -->
    
    <h4 class="info-title">OBJECTIVE</h4>

    <p class="project-description">
     Sensing the distance of objects and learn how Ultrasonic Sensor works
    </p>

    

    <h4 class="info-title">MODULES REQUIRED</h4>
    <ul class="info-list">
      <li>Ultrasonic sensor</li>
      <li>LCD display with i2c module</li>
      <li>Arduino Uno</li>
      <li>Jumper wire</li>
      
     
    </ul>

    <h4 class="info-title">SCHEMATIC DIAGRAM</h4>
     <img src="images/schmatic7.png" alt="Push Button component">
     
    <h4 class="info-title">SCHEMATIC CONNECTION</h4>
    <ul class="info-list">
      <li>Connect TRIGGER pin in Ultrasonic sensor to pin D6 on Arduino.</li>
      <li>Connect ECHO pin in Ultrasonic sensor to pin D7 on Arduino.</li>
      <li>Connect SDA and SCL pin in the LCD to A4 and A5 Arduino pins.</li>
      <p> <strong>Following connection are made in inbuilt circuit, so there no need made these connection:</strong></p>
      <li>Connect Vcc and GND to Arduino 5v and GND leads.</li>
      <li>Connect Vcc to GND on Arduino Vcc and GND.</li>
     
      
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
LiquidCrystal_I2C lcd(0x27, 16, 2);
#define trigPin 6
//Sensor Echo pin connected to Arduino pin 13
#define echoPin 7
//Sensor Trip pin connected to Arduino pin 12
void setup(){
pinMode(trigPin, OUTPUT);
pinMode(echoPin, INPUT);
lcd.init();
lcd.backlight();
// lcd.clear();
lcd.setCursor(4,0);
lcd.print("Blue Nile");
lcd.setCursor(4,1);
lcd.print("Software");
//lcd.print("Moving Text!!!");
delay(2000);
lcd.clear();
lcd.setCursor(0,0);
//Set LCD cursor to upper left corner, col 0, row 0
lcd.print("Target Distance:");
//Print Message on First Row
//lcd.print("");
delay(2000);
}
void loop(){
long duration, distance;
digitalWrite(trigPin, LOW);
delayMicroseconds(2);
digitalWrite(trigPin, HIGH);
delayMicroseconds(5);
digitalWrite(trigPin, LOW);
duration = pulseIn(echoPin, HIGH);
distance = (duration/2) / 29.1;
lcd.setCursor(0,1); //Set cursor to 1st col of 2nd row
lcd.print(" "); //Print blanks to clear the row
lcd.setCursor(0,1); //Set Cursor again to 1st col of 2nd row
lcd.print(distance); //Print measured distance
lcd.print(" cm"); //Print your units.
delay(250); //pause to let things settle
}
 </code></pre>
  </div>
  <h4 class="info-title">INSTRUCTIONS</h4>
    <ul class="info-list">
      <li>Connect the modules & components as per schematic diagram.</li>
      <li>Upload the Arduino code into Arduino board.</li>
     
      <li>Download and install Liquidcrystal_I2c.</li>
      
      
    </ul>
      <h4 class="info-title">WORKING</h4>
    <ul class="info-list">
      <li>The sensor sends out high-frequency sound waves.</li>
      <li>The sensor receives (echo) sound waves.</li>
      <li>The sensor calculates the distance of the object between sending and receiving the sound waves.</li>
      
      
      
    </ul>
      <h4 class="info-title">DISTANCE SENSOR</h4>
<ul class="info-list"></ul>

<section class="video-section">
  <div class="container">
    <div class="video-wrapper">
      <video id="irVideo" controls preload="none" poster="images/ir-thumbnail.jpg">
        <source src="videos/distance-sensor.mp4" type="video/mp4">
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