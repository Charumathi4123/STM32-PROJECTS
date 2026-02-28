<?php include "header.php";?>
<div class="slider-container">
        <div class="slider-track">
            <!-- Slide 1: Using an <img> tag now -->
            <div class="slide">
                <img src="slider-images/slider29.png" alt="Person wearing VR goggles interacting with a futuristic interface.">
                </div>
                
            </div>
            </div>

 <h1 class="page-title">TEMPERATURE AND HUMIDITY ON OLED</h1>
  </header>

  <main class="project-section">
    <!-- <h2 class="project-heading">📺 Build Your Own Android TV</h2> -->
    
    <h4 class="info-title">OBJECTIVE</h4>

    <p class="project-description">
To display real-time humidity and temperature on the OLED screen.
    </p>

    

    <h4 class="info-title">MODULES REQUIRED</h4>
    <ul class="info-list">
      <li>Arduino NANO</li>
      <li>Jumper wire</li>
      <li>Humidity sensor</li> 
      <li>OLED Display</li>
      
     
    </ul>

    <h4 class="info-title">SCHEMATIC DIAGRAM</h4>
     <img src="images/schmatic22.png" alt="Push Button component">
     
    <h4 class="info-title">SCHEMATIC CONNECTION</h4>
   
    <ul class="info-list">
        <h6>Connect OLED:</h6>  
      <li></li>
      <li>Connect the SDA pin on the OLED to Arduino NANO A4.</li>
      
      <li>Connect the SCL pin on the OLED to Arduino NANO A5.</li>
      <h6>Connect Humidity sensor:</h6>
      <li>Connect the DATA pin to Arduino NANO D2</li>
      
    </ul>
   <h4 class="info-title">Arduino Code</h4>
  <div class="code-container">
    <div class="code-header">
      <span class="code-title">Arduino Code</span>
      <button class="copy-btn" onclick="copyCode()">📋 Copy</button>
    </div>

    <pre><code id="arduino-code">
#include "DHT.h"
#define DHT11Pin 2
#define DHTType DHT11
//OLED
#include <Wire.h>
#include <Adafruit_GFX.h>
#include <Adafruit_SSD1306.h>

DHT HT(DHT11Pin,DHTType);
float humi;
float tempC;
float tempF;

//OLED define
#define SCREEN_WIDTH 128 //OLED display width, in pixels
#define SCREEN_HEIGHT 64 //OLED display height, in pixels
//SSD1306 display connected to I2C (SDA, SCL pins)
Adafruit_SSD1306 display(SCREEN_WIDTH, SCREEN_HEIGHT, &Wire, -1);

void setup() {
 Serial.begin(9600);
 //For DHT11
 HT.begin();
 //Necessary code for OLED I2C
 if(!display.begin(SSD1306_SWITCHCAPVCC, 0x3C)) { // Address 0x3D for 128x64
  Serial.println(F("SSD1306 allocation failed"));
  for(;;);
 }
 display.display(); //Displays the starting logo
 delay(1000);
 display.clearDisplay();
}
void loop() {
 delay(1000);
 humi = HT.readHumidity();
 tempC = HT.readTemperature();
 tempF = HT.readTemperature(true);

 display.clearDisplay();
 oledDisplayHeader();
 //configures the position of the readings. (charactersize, x axis value, y axis value, reading, symbol)
oledDisplay(2,90,28,humi,"%");
 oledDisplay(3,-10,44,tempC,"C");
 oledDisplay(3,-10,16,tempF,"F");
 display.display();
}
void oledDisplayHeader(){
 //configures position and qualities of headers
 display.setTextSize(1);
 display.setTextColor(WHITE);
 display.setCursor(0, 0);
 display.print("Temperature");
 display.setCursor(80, 0);
 display.print("Humidity");
}
void oledDisplay(int size, int x,int y, float value, String unit){
 int charLen=18;
 int xo=x+charLen*3.2;
 int xunit=x+charLen*3.6;
 int xval = x;
 display.setTextSize(size);
 display.setTextColor(WHITE);
 
 if (unit=="%"){
  display.setCursor(x, y);
  display.print(value,0);
  display.print(unit);
 }
 else {
 if (value>99){
 xval=x;
 } else {
 xval=x+charLen;
 }
 display.setCursor(xval, y);
 display.print(value,0);
 display.drawCircle(xo, y+2, 2, WHITE); // print degree symbols
 display.setCursor(xunit, y);
 display.print(unit);
 }
 }
 </code></pre>
  </div>
  <h4 class="info-title">INSTRUCTIONS</h4>
    <ul class="info-list">
      <li>Connect the modules and components as per the schematic diagram.</li>
      <li>Download and install DHT sensor library.</li>
     
      <li>Upload the Arduino code into the Arduino board.</li>
      <li>Check it shows temperature and humidity on OLED display.</li>

    </ul>
      <h4 class="info-title">WORKING</h4>
    <ul class="info-list"> 
      <li>The DHT11/DHT22 sensor measures temperature and humidity, with the results shown on an OLED display connected to the Arduino Nano.
</li> 
      </u1>
     
      
      
      
    </ul>
 <h4 class="info-title">TEMPERATURE AND HUMIDITY ON OLED</h4>
<ul class="info-list"></ul>

<section class="video-section">
  <div class="container">
    <div class="video-wrapper">
      <video id="irVideo" controls preload="none" poster="images/ir-thumbnail.jpg">
        <source src="videos/Project-22-Temperature-and-humiduty-on-oled-VEED.mp4" type="video/mp4">
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