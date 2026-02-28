<?php include "header.php";?>
<div class="slider-container">
        <div class="slider-track">
            <!-- Slide 1: Using an <img> tag now -->
            <div class="slide">
                <img src="slider-images/slider17.png" alt="Person wearing VR goggles interacting with a futuristic interface.">
                </div>
                
            </div>
            </div>

 <h1 class="page-title">SECURE DOOR</h1>
  </header>

  <main class="project-section">
    <!-- <h2 class="project-heading">📺 Build Your Own Android TV</h2> -->
    
    <h4 class="info-title">OBJECTIVE</h4>

    <p class="project-description">
    Learn how RFID receiver works and how to reading access cards
    </p>

    

    <h4 class="info-title">MODULES REQUIRED</h4>
    <ul class="info-list">
      <li>RFID module,card & tag</li>
      <li>Servo motor</li>
      <li>Arduino Uno</li>
      <li>Jumper wire</li>
      
     
    </ul>

    <h4 class="info-title">SCHEMATIC DIAGRAM</h4>
     <img src="images/schmatic9.png" alt="Push Button component">
     
    <h4 class="info-title">SCHEMATIC CONNECTION</h4>
   
    <ul class="info-list">
         <h5>Connect RFID sensor as follows:</h5>
      <li>MISO and MOSI to Arduino pins D12 and D11.</li>
      <li>Connect ECHO pin in Ultrasonic sensor to pin D7 on Arduino.</li>
      <li>RST to D9 and GND to Arduino GND.</li>
      <li>3.3V to Arduino 3.3V.</li>
     <h5>Connect Servo Motor:</h5>
    
      <li>VCC pin (red) to Arduino 5V.</li>
      <li>GND pin (brown) to Arduino GND.</li>
      <li>Common pin (yellow) to Arduino D3.</li>
     
      
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
#include (Servo.h)
#define SS_PIN 10
#define RST_PIN 9
MFRC522 mfrc522(SS_PIN, RST_PIN); // Create MFRC522 instance.
#define servoPin 3
Servo myServo;
int pos = 0;
void setup() {
Serial.begin(9600); // Initiate a serial communication
SPI.begin(); // Initiate SPI bus
mfrc522.PCD_Init(); // Initiate MFRC522
Serial.println("Approximate your card to the reader...");
Serial.println();
myservo.attach(3); }
void loop() {
// Look for new cards
if ( ! mfrc522.PICC_IsNewCardPresent()) {
return; }
// Select one of the cards
if ( ! mfrc522.PICC_ReadCardSerial()) {
return; }
//Show UID on serial monitor
Serial.print("UID tag :");
String content= "";
byte letter;
for (byte i = 0; i < mfrc522.uid.size; i++) {
Serial.print(mfrc522.uid.uidByte[i] < 0x10 ? " 0" : " ");
Serial.print(mfrc522.uid.uidByte[i], HEX);
content.concat(String(mfrc522.uid.uidByte[i] < 0x10 ? " 0" : " "));
content.concat(String(mfrc522.uid.uidByte[i], HEX)); }
Serial.println();
Serial.print("Message : ");
content.toUpperCase();
if (content.substring(1) == "XXXXXXXX") //change here the UID of the
card/cards that you want to give access
{
Serial.println("Authorized access");
Serial.println();
sweepServo();
delay(3000); }
else {
Serial.println(" Access denied");
delay(3000);
} }
void sweepServo(){
for (pos = 0; pos <= 180; pos += 1) { // goes from 0 to 180 degrees
// in steps of 1 degree
myservo.write(pos); // tell servo to go to position in variable 'pos'
delay(15); // waits 15ms for the servo to reach the position
}
for (pos = 180; pos >= 0; pos -= 1) { // goes from 180 degrees to 0
degrees
myservo.write(pos); // tell servo to go to position in variable 'pos'
delay(15); // waits 15ms for the servo to reach the position
}}
 </code></pre>
  </div>
  <h4 class="info-title">INSTRUCTIONS</h4>
    <ul class="info-list">
      <li>Connect the modules & components as per schematic diagram.</li>
      <li>Upload the Arduino code into Arduino board.</li>
     
      <li>Open Files > Examples > MFRC522 > Dumpinfo.</li>
      <li>Upload the Dumpinfo program into the Arduino board.</li>
      <li>Put the card on the RFID sensor to check its UID number.</li>
      <li>Get the UID number from the serial monitor.</li>
      <li>Convert UID to decimal and declare in the program.</li>
      <li>Test the door control system with the RFID card.</li>
      
      
    </ul>
      <h4 class="info-title">WORKING</h4>
    <ul class="info-list">
      <li>An RFID reader scans a tag, and based on its authorization, the servo motor rotates to open the door .
</li>
     
      
      
      
    </ul>
    <h4 class="info-title">SECURE DOOR</h4>
<ul class="info-list"></ul>

<section class="video-section">
  <div class="container">
    <div class="video-wrapper">
      <video id="irVideo" controls preload="none" poster="images/ir-thumbnail.jpg">
        <source src="videos/Project-9-Secure-Door.mp4" type="video/mp4">
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