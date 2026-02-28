<?php include "header.php";?>
<div class="slider-container">
        <div class="slider-track">
            <!-- Slide 1: Using an <img> tag now -->
            <div class="slide">
                <img src="slider-images/slider18.png" alt="Person wearing VR goggles interacting with a futuristic interface.">
                </div>
                
            </div>
            </div>

 <h1 class="page-title">DISPLAY KEYPAD WITH RELAY</h1>
  </header>

  <main class="project-section">
    <!-- <h2 class="project-heading">📺 Build Your Own Android TV</h2> -->
    
    <h4 class="info-title">OBJECTIVE</h4>

    <p class="project-description">
   To make a password checker using keypad, LCD, and relay.
    </p>

    

    <h4 class="info-title">MODULES REQUIRED</h4>
    <ul class="info-list">
      <li>Relay</li>
      <li>Display keypad 4*4 matrix</li>
      <li>LCD display with i2c module</li>
      <li>Arduino Uno</li>
      <li>Jumper wire</li>
      
     
    </ul>

    <h4 class="info-title">SCHEMATIC DIAGRAM</h4>
     <img src="images/schmatic10.png" alt="Push Button component">
     
    <h4 class="info-title">SCHEMATIC CONNECTION</h4>
   
    <ul class="info-list">
         
      <li>Connect pin in the Relay module to the pin 12 on the Arduino.</li>
      <li>Connect the SDA pin on the I2C to Arduino pin A4.</li>
      <li>Connect the SCL pin on the I2C to Arduino Pin A5</li>
      <li>Connect 1 to 8pin on the display to Arduino D9 to D2 pins</li>
    
    
    
      
     
      
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
#include (Keypad.h)

#define Password_Length 8 

int signalPin = 12;

char Data[Password_Length]; 
char Master[Password_Length] = "12A457B"; 
byte data_count = 0, master_count = 0;
bool Pass_is_good;
char customKey;

const byte ROWS = 4;
const byte COLS = 4;

char hexaKeys[ROWS][COLS] = {
  {'1', '2', '3', 'A'},
  {'4', '5', '6', 'B'},
  {'7', '8', '9', 'C'},
  {'*', '0', '#', 'D'}
};

byte rowPins[ROWS] = {9, 8, 7, 6};
byte colPins[COLS] = {5, 4, 3, 2};

Keypad customKeypad = Keypad(makeKeymap(hexaKeys), rowPins, colPins, ROWS, COLS);

LiquidCrystal_I2C lcd(0x27, 16, 2);  

void setup(){
  lcd.init(); 
  lcd.backlight();
  pinMode(signalPin, OUTPUT);
}

void loop(){

  lcd.setCursor(0,0);
  lcd.print("Enter Password:");

  customKey = customKeypad.getKey();
  if (customKey){
    Data[data_count] = customKey; 
    lcd.setCursor(data_count,1); 
    lcd.print(Data[data_count]); 
    data_count++; 
    }

  if(data_count == Password_Length-1){
    lcd.clear();

    if(!strcmp(Data, Master)){
      lcd.print("Correct");
      digitalWrite(signalPin, HIGH); 
      delay(5000);
      digitalWrite(signalPin, LOW);
      }
    else{
      lcd.print("Incorrect");
      delay(1000);
      }
    
    lcd.clear();
    clearData();  
  }
}

void clearData(){
  while(data_count !=0){
    Data[data_count--] = 0; 
  }
  return;
}
 </code></pre>
  </div>
  <h4 class="info-title">INSTRUCTIONS</h4>
    <ul class="info-list">
      <li>Connect the modules & components as per schematic diagram.</li>
      <li>Upload the Arduino code into Arduino board.</li>
     
      <li>Download and install Liquidcrystal_I2c.</li>
      <li>Type the password “123A456” on the keypad and check it is displayed on the LCD.</li>
      <li>Put the card on the RFID sensor to check its UID number.</li>
      <li>Check that it verifies the password correctly and switches ON the relay.</li>
      
      
      
    </ul>
      <h4 class="info-title">WORKING</h4>
    <ul class="info-list">
        <h6>Keypad Input</h6>
      <li>User enters a password using the keypad.</li>
      <li>The Keypad sends the password input to the Microcontroller Arduino.</li>
      <h6>Password Verification</h6>
        <li>The Microcontroller verifies the password with the stored password.</li>
        <li>If the password matches the microcontroller triggers the Relay.</li>
      <h6>Relay Activation</h6>
        <li>When the relay is activated LED turns ON.</li>
        <h6>Display Status</h6>
        <p>The Display shows the user’s input and Status messages as listed below:</p>
        <li>1. Password correct</li>
        <li>2. incorrect</li>
        <li>3. Access granted</li>
       
      </u1>
     
      
      
      
    </ul>
 <h4 class="info-title">DISPLAY KEYPAD WITH RELAY</h4>
<ul class="info-list"></ul>

<section class="video-section">
  <div class="container">
    <div class="video-wrapper">
      <video id="irVideo" controls preload="none" poster="images/ir-thumbnail.jpg">
        <source src="videos/project-10.-Display-keypad-with-relay-new-subtitle-VEED.mp4" type="video/mp4">
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