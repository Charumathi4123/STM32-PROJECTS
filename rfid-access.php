<?php include "header.php";?>
<div class="slider-container">
        <div class="slider-track">
            <!-- Slide 1: Using an <img> tag now -->
            <div class="slide">
                <img src="slider-images/slider27.png" alt="Person wearing VR goggles interacting with a futuristic interface.">
                </div>
                
            </div>
            </div>

 <h1 class="page-title">RFID ACCESS CONTROL</h1>
  </header>

  <main class="project-section">
    <!-- <h2 class="project-heading">📺 Build Your Own Android TV</h2> -->
    
    <h4 class="info-title">OBJECTIVE</h4>

    <p class="project-description">
To monitor access, signaling authorized access with a green LED and unauthorized access with a red LED based on RFID tag scans.
    </p>

    

    <h4 class="info-title">MODULES REQUIRED</h4>
    <ul class="info-list">
      <li>Arduino UNO</li>
      <li>Jumper wire</li>
      <li>RFID & CARD</li> 
      <li>LED1</li>
      <li>LED 2</li>
      <li>LCD Display</li>
      
     
    </ul>

    <h4 class="info-title">SCHEMATIC DIAGRAM</h4>
     <img src="images/schmatic20.png" alt="Push Button component">
     
    <h4 class="info-title">SCHEMATIC CONNECTION</h4>
   
    <ul class="info-list">
        <h6>Connect RFID sensor as follows:</h6>  
      <li>MISO and MOSI to Arduino pins D12 and D11</li>
      <li>SDA and SCK to pins D10 and D13</li>
      
      <li>RST to D9 and GND to Arduino GND.</li>
      <li>3.3V to Arduino 3.3V.</li>
      <h6>Connect LCD:</h6>
      <li>SDA and SCL leads to A4 and A5 Arduino pins.</li>
      <h6>Connect LED 1 and 2:</h6>
      <li>Connect the LED pins(positive) to Arduino pin D6 & D7.</li>
      <p><strong>*Note: The negative pin (LED) connects to GND in the built-in circuit, no additional connection needed.</strong></p>
    </ul>
   <h4 class="info-title">Arduino Code</h4>
  <div class="code-container">
    <div class="code-header">
      <span class="code-title">Arduino Code</span>
      <button class="copy-btn" onclick="copyCode()">📋 Copy</button>
    </div>

    <pre><code id="arduino-code">
#include (SPI.h)
#include (MFRC522.h)
#include (Wire.h)
#include (LiquidCrystal_I2C.h)
//declare the uid no of rfid card in the below variable as decimal value
const byte monUID[4] = {xx, xx, xx, xx};
bool valid=true;
#define PIN_LED_ROUGE 7
#define PIN_LED_VERTE 6
#define PIN_RST 9
#define PIN_SDA 10
LiquidCrystal_I2C lcd(0x27, 16, 2);
MFRC522 rfid(PIN_SDA, PIN_RST);
void setup(){
SPI.begin();
rfid.PCD_Init();
pinMode(PIN_LED_ROUGE, OUTPUT);
digitalWrite(PIN_LED_ROUGE, HIGH);
pinMode(PIN_LED_VERTE, OUTPUT);
digitalWrite(PIN_LED_VERTE, HIGH);
lcd.init();
lcd.init();
lcd.backlight();
lcd.setCursor(0, 0);
lcd.print("Blue Nile Soft :)");
delay(5000);
lcd.clear();
}
void loop(){
if (rfid.PICC_IsNewCardPresent()) {
if (rfid.PICC_ReadCardSerial()) {
for (int i = 0; i < rfid.uid.size; i++) {
if (rfid.uid.uidByte[i] != monUID[i])
{valid=false;}
else
{valid=true;}
}
if (valid == 1) {
// digitalWrite(PIN_LED_VERTE, HIGH);
lcd.print("Access Granted :)");
digitalWrite(PIN_LED_VERTE, LOW);
delay(1000);
digitalWrite(PIN_LED_VERTE, HIGH);
lcd.clear();
}
else // UID non valide
{
// digitalWrite(PIN_LED_ROUGE, HIGH);
lcd.print("Access Denied :(");
digitalWrite(PIN_LED_ROUGE, LOW);
delay(1000);
digitalWrite(PIN_LED_ROUGE, HIGH);
lcd.clear();
} }}}
 </code></pre>
  </div>
  <h4 class="info-title">INSTRUCTIONS</h4>
    <ul class="info-list">
      <li>Connect the modules and components as per the schematic diagram.</li>
      <li>Open Files > Examples > MFRC522 > Dumpinfo.</li>
     
      <li>Upload the Dumpinfo program into the Arduino board.</li>
      <li>Put the card on the RFID sensor to check its UID number.</li>
      <li>Get the UID number from the serial monitor.</li>
      <li>Then convert the UID number into a decimal value and declare it in the specified variable in the program.</li>
      <li>Upload the Arduino code into the Arduino board.</li>
      <li>Test the access control system by using the RFID card.</li>

    </ul>
      <h4 class="info-title">WORKING</h4>
    <ul class="info-list"> 
      <li>An RFID reader scans a tag, and based on its authorization, a of "Access Granted" or "Access Denied" is displayed on the LCD while simultaneously illuminating a LED1 for granted access or a LED2 for denied access.</li> 
      </u1>
     
      
      
      
    </ul>
 <h4 class="info-title">RFID ACCESS CONTROL</h4>
<ul class="info-list"></ul>

<section class="video-section">
  <div class="container">
    <div class="video-wrapper">
      <video id="irVideo" controls preload="none" poster="images/ir-thumbnail.jpg">
        <source src="videos/rfid.mp4" type="video/mp4">
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